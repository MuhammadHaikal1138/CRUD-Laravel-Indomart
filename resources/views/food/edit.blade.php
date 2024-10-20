@extends('template.layout')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Edit Data Makanan</h2>
    <form action="{{ route('food.update', $food->id) }}" method="post">
        @csrf
        @method('PUT')
        @if (Session('success'))
            <div class="alert alert-success">
                {{ Session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div class="form-group">
            <label for="name">Nama Makanan</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama makanan" value="{{ $food->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Makanan</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $food->description }}" rows="3" placeholder="Masukkan deskripsi makanan" required></input>
        </div>
        <div class="form-group">
            <label for="stock">Stok Makanan</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukkan jumlah stok" value="{{ $food->stock }}" required>
        </div>
        <div class="form-group">
            <label for="price">Harga Makanan (Rp)</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan harga makanan" value="{{ $food->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
@endsection