@extends('v_layouts.app')
@section('content')
<!-- template -->
<div class="col-md-12">
<div class="order-summary clearfix">
<div class="section-title">
<p>KERANJANG</p>
<h3 class="title">Keranjang Belanja</h3>
</div>
<!-- msgSuccess -->
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible" role="alert">

<button type="button" class="close" data-dismiss="alert" aria-
label="Close"><span aria-hidden="true">&times;</span></button>

<strong>{{ session('success') }}</strong>
</div>
@endif
<!-- end msgSuccess -->
<!-- msgError -->
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible" role="alert">

<button type="button" class="close" data-dismiss="alert" aria-
label="Close"><span aria-hidden="true">&times;</span></button>

<strong>{{ session('error') }}</strong>
</div>
@endif
<!-- end msgError -->
@if($order && $order->orderItems->count() > 0)
<table class="shopping-cart-table table">
<thead>
<tr>
<th>Produk</th>
<th></th>
<th class="text-center">Harga</th>
<th class="text-center">Quantity</th>
<th class="text-center">Total</th>
<th class="text-right"></th>
</tr>
</thead>
<tbody>
@php
$totalHarga = 0;
$totalBerat = 0;
@endphp
@foreach($order->orderItems as $item)
@php
$totalHarga += $item->harga * $item->quantity;
$totalBerat += $item->produk->berat * $item->quantity;
@endphp
<tr>
<td class="thumb"><img src="{{ asset('storage/img-produk/thumb_sm_' .

$item->produk->foto) }}" alt=""></td>
<td class="details">
<a>{{ $item->produk->nama_produk }}</a>
<ul>
<li><span>Berat: {{ $item->produk->berat }} Gram</span></li>
</ul>
<ul>
<li><span>Stok: {{ $item->produk->stok }} Gram</span></li>
</ul>
</td>
<td class="price text-center"><strong>Rp. {{ number_format($item->harga, 0, ',', '.') }}</strong></td>

<td class="qty text-center">
<form action="#" method="post">
@csrf
<input type="number" name="quantity" value="{{ $item->quantity}}" min="1" style="width: 60px;">

<button type="submit" class="btn btn-sm btn-warning">Update</button>

</form>
</td>
<td class="total text-center"><strong class="primary-color">Rp. {{

number_format($item->harga * $item->quantity, 0, ',', '.') }}</strong></td>

<td class="text-right">
<form action="#" method="post">
@csrf

<button class="main-btn icon-btn"><i class="fa fa-
close"></i></button>

</form>
</td>
</tr>
@endforeach
</tbody>
</table>
<form action="{{ route('order.selectShipping')}}" method="post">
@csrf
<input type="hidden" name="total_price" value="{{ $totalHarga }}">
<input type="hidden" name="total_weight" value="{{ $totalBerat }}">
<div class="pull-right">
<button class="primary-btn">Pilih Pengiriman</button>
</div>
</form>
@else
<p>Keranjang belanja kosong.</p>
@endif
</div>
</div>
<!-- end template-->
@endsection