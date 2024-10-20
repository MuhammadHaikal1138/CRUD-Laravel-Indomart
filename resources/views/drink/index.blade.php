@extends('template.layout')

@section('content')
<div class="container my-5">
    <h2 class="text-center">Data Produk Minuman Indomaret</h2>
    @if (Session('success'))
        <div class="alert alert-success">
            {{ Session('success') }}
        </div> 
    @endif
    <div class="d-flex justify-content-end">
        <a href="{{ route('drink.create')}}" class="btn btn-primary">Tambah Data</a>
    </div>
    <table class="table table-striped table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Minuman</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($drinks as $key => $drink) 
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $drink->name }}</td>
                <td>{{ $drink->description }}</td>
                <td>{{ $drink->price }}</td>
                <td>{{ $drink->stock }}</td>
                <td class="text-center">
                    <a href="{{route('drink.edit', $drink->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('drink.destroy', $drink->id)}}" method="post" class="d-inline">
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