@extends('layouts.default')
@section('title', 'Edit Produk')
@section('content')
<form method="POST">
    @csrf
    @method('POST')
    <input type="hidden" name="id" value="{{ $product->id }}">
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td>{{ $product->id }}</td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td><input type="text" name="name" value="{{ $product->name }}"></td>
        </tr>
        <tr>
            <td>Deskriprsi</td>
            <td>:</td>
            <td><input type="text" name="description" value="{{ $product->description }}"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><input type="checkbox" name="active" value="1" @checked($product->active) ></td>
        </tr>
        <tr>
            <td>Barcode</td>
            <td>:</td>
            <td><input type="text" name="barcode" value="{{ $product->barcode }}"></td>
        </tr>
        <tr>
            <td>Satuan</td>
            <td>:</td>
            <td><input type="text" name="uom" value="{{ $product->uom }}"></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td>:</td>
            <td><input type="text" name="cost" value="{{ $product->cost }}"></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>:</td>
            <td><input type="text" name="price" value="{{ $product->price }}"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="save" value="Simpan"></td>
        </tr>
    </table>
</form>
@endSection