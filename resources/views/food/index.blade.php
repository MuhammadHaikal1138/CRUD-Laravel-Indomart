@extends('template.layout')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Data Produk Indomaret</h2>
    @if (Session('success'))
        <div class="alert alert-success">
            {{ Session('success') }}
        </div> 
    @endif
    <div class="d-flex justify-content-end">
        <a href="{{ route('food.create')}}" class="btn btn-primary">Tambah Data</a>
    </div>
    <table class="table table-striped table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($foods as $key => $food) 
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $food->name }}</td>
                <td>{{ $food->description }}</td>
                <td>{{ $food->price }}</td>
                <td>{{ $food->stock }}</td>
                <td class="text-center">
                    <a href="{{route('food.edit', $food->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('food.destroy', $food->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
                <td colspan="6" class="text-center">Tidak Ada Data!!</td>
            @endforelse
        </tbody>
    </table>
</div>
@endsection