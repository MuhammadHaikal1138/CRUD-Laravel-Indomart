@extends('template.layout')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Edit Data Minuman</h2>
    <form action="{{ route('drink.update', $drink->id) }}" method="post">
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
            <label for="name">Nama Minuman</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama minuman" value="{{ $drink->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Deskripsi Minuman</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $drink->description }}" rows="3" placeholder="Masukkan deskripsi minuman" required></input>
        </div>
        <div class="form-group">
            <label for="stock">Stok Minuman</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukkan jumlah stok" value="{{ $drink->stock }}" required>
        </div>
        <div class="form-group">
            <label for="price">Harga Minuman (Rp)</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Masukkan harga minuman" value="{{ $drink->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
    </form>
@endsection