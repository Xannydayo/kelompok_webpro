<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Produk;
use App\Models\Order;
use App\Models\OrderItem;
class OrderController extends Controller
{
    private $provinsiKota = [
        'Bangka Belitung' => ['Bangka Barat', 'Bangka Selatan', 'Bangka Tengah'],
        'Jawa Barat' => ['Bandung', 'Bekasi', 'Cirebon'],
        'Jawa Tengah' => ['Semarang', 'Solo', 'Yogyakarta']
    ];
    
    public function addToCart($id)
    {
        $customer = Customer::where('user_id', Auth::id())->first();
        $produk = Produk::findOrFail($id);
        $order = Order::firstOrCreate(
            ['customer_id' => $customer->id, 'status' => 'pending'],
            ['total_harga' => 0]
        );
        $orderItem = OrderItem::firstOrCreate(
            ['order_id' => $order->id, 'produk_id' => $produk->id],
            ['quantity' => 1, 'harga' => $produk->harga]
        );
        if (!$orderItem->wasRecentlyCreated) {
            $orderItem->quantity++;
            $orderItem->save();
        }
        $order->total_harga += $produk->harga;
        $order->save();
        return redirect()->route('order.cart')->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }
    public function viewCart()
    {
        $customer = Customer::where('user_id', Auth::id())->first();
        $order = Order::where('customer_id', $customer->id)->where('status', 'pending')->first();
        if ($order) {
            $order->load('orderItems.produk');
        }
        return view('v_order.cart', compact('order'));
    }

    public function updateCart(Request $request, $id)
    {
        $customer = Customer::where('user_id', Auth::id())->first();
        $order = Order::where('customer_id', $customer->id)->where('status', 'pending')->first();

        if ($order) {
            $orderItem = $order->orderItems()->where('id', $id)->first();
            if ($orderItem) {
                $quantity = $request->input('quantity');
                if ($quantity > $orderItem->produk->stok) {
                    return redirect()->route('order.cart')->with('error', 'Jumlah produk melebihi stok yang tersedia');
                }

                $order->total_harga -= $orderItem->harga * $orderItem->quantity;
                $orderItem->quantity = $quantity;
                $orderItem->save();
                $order->total_harga += $orderItem->harga * $orderItem->quantity;
                $order->save();
            }
        }

        return redirect()->route('order.cart')->with('success', 'Jumlah produk berhasil diperbarui');
    }

    public function removeFromCart(Request $request, $id)
    {
        $customer = Customer::where('user_id', Auth::id())->first();
        $order = Order::where('customer_id', $customer->id)->where('status', 'pending')->first();

        if ($order) {
            $orderItem = OrderItem::where('order_id', $order->id)->where('produk_id', $id)->first();
            if ($orderItem) {
                $order->total_harga -= $orderItem->harga * $orderItem->quantity;
                $orderItem->delete();

                if ($order->total_harga <= 0) {
                    $order->delete();
                } else {
                    $order->save();
                }
            }
        }

        return redirect()->route('order.cart')->with('success', 'Produk berhasil dihapus dari keranjang');
    }

    public function selectShipping(Request $request)
    {
                // Data provinsi dan kota
     $provinsiKota = [
        'Bangka Belitung' => ['Bangka Barat', 'Bangka Selatan', 'Bangka Tengah'],
        'Jawa Barat' => ['Bandung', 'Bekasi', 'Cirebon'],
        'Jawa Tengah' => ['Semarang', 'Solo', 'Yogyakarta']
    ];

        $customer = Customer::where('user_id', Auth::id())->first();
        $order = Order::where('customer_id', $customer->id)->where('status', 'pending')->first();
        if (!$order || $order->orderItems->count() == 0) {
            return redirect()->route('order.cart')->with('error', 'Keranjang belanja kosong.');
        }

        return view('v_order.select_shipping', compact('order','provinsiKota'));
    }

    public function updateOngkir(Request $request)
    {
        // dd($request->input('province'));
    
        // Mengambil data customer yang sedang login
        $customer = Customer::where('user_id', Auth::id())->first();
        
        // Mengambil order yang statusnya 'pending' untuk customer yang bersangkutan
        $order = Order::where('customer_id', $customer->id)->where('status', 'pending')->first();

        // Jika order ditemukan
        if ($order) {
            // Mengambil data ongkir dari request, jika tidak ada, gunakan nilai default
            $order->kurir = $request->input('kurir'); 
            $order->layanan_ongkir = $request->input('layanan_ongkir', 'Standard'); 
            $order->biaya_ongkir = preg_replace('/\./', '', $request->input('ongkir'));

            $order->estimasi_ongkir = $request->input('estimasi_ongkir', '3-5 days');
            $order->total_berat = $request->input('berat'); 

            $order->alamat = $request->input('alamat') . ', <br>' . 
                            $request->input('city') . ', <br>' . 
                            $request->input('province'); 
    
            $order->pos = $request->input('kode_pos'); // Default '00000' jika tidak ada
            $order->save();

            // Redirect ke halaman pembayaran setelah sukses
            return redirect()->route('order.selectpayment');
        }

        // Jika order tidak ditemukan, kembali dengan pesan error
        return back()->with('error', 'Gagal menyimpan data ongkir');
    }

    // Menangani proses cek ongkir
    public function cekOngkir(Request $request)
    {
        $provinsi = $request->input('provinsi');
        $kota = $request->input('kota');
        $berat = $request->input('berat');
        $kurir = $request->input('kurir');
        $kode_pos = $request->input('kode_pos');
        $alamat = $request->input('alamat');

        // Menampilkan hasil cek ongkir
        return view('v_order.select_shipping', [
            'provinsiKota' => $this->provinsiKota,
            'provinsiInput' => $provinsi,
            'kotaInput' => $kota,
            'beratInput' => $berat,
            'kurirInput' => $kurir,
            'ongkir' => "" . number_format(rand(50000, 100000), 0, ',', '.'),
            'alamat' => $alamat,
            'kode_pos' => $kode_pos,
        ]);
    }
}