<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;
    protected $table = "product";
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function fotoProduk()
    // {
    //     return $this->hasMany(FotoProduk::class);
    // }

    public function gambar()
    {
        return $this->hasMany(fotoProduk::class, 'product_id', 'id');
    }
}
