<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Produk;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // 📄 tampil semua data
    public function index()
    {
        $transaksi = Transaksi::with('produk')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    // ➕ form tambah data
    public function create()
    {
        $produk = Produk::all();
        return view('transaksi.create', compact('produk'));
    }

    // 💾 simpan data (ini penting banget)
    public function store(Request $request)
    {
        $produk = Produk::find($request->produk_id);

        $harga = $produk->harga;
        $total = $harga * $request->jumlah;

        Transaksi::create([
            'nama_pembeli' => $request->nama_pembeli,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'harga' => $harga,
            'total' => $total,
            'tanggal' => $request->tanggal
        ]);

        return redirect('/transaksi');
    }

    // ✏️ edit (nanti dipakai kalau mau update)
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $produk = Produk::all();

        return view('transaksi.edit', compact('transaksi', 'produk'));
    }

    // 🔄 update data
    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $produk = Produk::find($request->produk_id);

        $harga = $produk->harga;
        $total = $harga * $request->jumlah;

        $transaksi->update([
            'nama_pembeli' => $request->nama_pembeli,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'harga' => $harga,
            'total' => $total,
            'tanggal' => $request->tanggal
        ]);

        return redirect('/transaksi');
    }

    // ❌ delete
    public function destroy($id)
    {
        Transaksi::destroy($id);
        return redirect('/transaksi');
    }
}