<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'customer_id',
        'total_harga',
        'status',
        'noresi',
        'kurir',
        'layanan_ongkir',
        'biaya_ongkir',
        'estimasi_ongkir',
        'total_berat',
        'alamat',
        'pos'
    ];
    
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}   