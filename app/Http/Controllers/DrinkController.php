<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drinks = Drink::all();
        return view('drink.index', compact('drinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('drink.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'name.min' => 'Nama minimal 3 karakter',
            'description.required' => 'Deskripsi harus diisi',
            'price.required' => 'Harga harus diisi',
            'stock.required' => 'Stok harus diisi',
        ]);

        Drink::create($request->all());
        return redirect()->back()->with('success', 'Data minuman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Drink $drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $drink = Drink::find( $id);
        return view('drink.edit', compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'name.min' => 'Nama minimal 3 karakter',
            'description.required' => 'Deskripsi harus diisi',
            'price.required' => 'Harga harus diisi',
            'stock.required' => 'Stok harus diisi',
        ]);
        $drink = Drink::find($id);
        $drink->update($request->all());
        return redirect()->route('drink.index')->with('success', 'Data minuman berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Drink::where('id', $id)->delete();
        return redirect()->route('drink.index')->with('success', 'Data miniman berhasil dihapus');
    }
}
