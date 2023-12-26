<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{

    public function index()
    {

        $produks = Produk::all();

        return view('produk.index', compact('produks'));
    }


    public function create()
    {
        return view('produk.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'namaproduk' => ['required'],
            'hargaproduk' => ['required'],
        ]);
        $data['sku'] = 'P-' . $this->sku_get();
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = 'assets/images/produks/';
            $name = $data['sku'] . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $name);
            $data['gambar'] = $name;
        }
        Produk::create([
            'sku' => $data['sku'],
            'namaproduk' =>  $data['namaproduk'],
            'hargaproduk' =>  $data['hargaproduk'],
            'gambar' => $data['gambar'] ?? null,
            'stok' => 1
        ]);
        return to_route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {

        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $data = $request->validate([
            'namaproduk' => ['required'],
            'hargaproduk' => ['required'],
        ]);
        if ($request->file('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = 'assets/images/produks/';
            $name = $data['sku'] . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $name);
            $data['gambar'] = $name;
        }
        $produk->update($data);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {

        $produk->delete();
        return to_route('produk.index');
    }

    public function sku_get()
    {
        $skucek =  Produk::inRandomOrder()->pluck('sku')->toArray();
        $sku = Str::random(4);
        if (in_array($sku, $skucek)) {
            return $this->sku_get();
        }
        return   $sku;
    }
}
