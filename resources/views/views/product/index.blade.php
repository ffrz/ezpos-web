@extends('layouts.default')
@section('title', 'Produk')
@section('content')
<ul>
@forelse ($products as $product)
    <li><a href="{{ url("/products/edit/{$product->id}") }}">{{ $product->name }}</a></li>
@empty
    <li>Belum ada produk</li>
@endforelse
</ul>
@endSection