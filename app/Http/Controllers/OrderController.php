<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

class OrderController extends Controller
{
public function addToCart($id)
{
$customer = Customer::where('user_id', Auth::id())->first();
$produk = Product::findOrFail($id);
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
return redirect()->route('order.cart')->with('success', 'Produk berhasil
ditambahkan ke keranjang');
}
public function viewCart()
{
$customer = Customer::where('user_id', Auth::id())->first();
$order = Order::where('customer_id', $customer->id)->where('status', 'pending',
'paid')->first();
if ($order) {
$order->load('orderItems.produk');
}
return view('v_order.cart', compact('order'));
}
}