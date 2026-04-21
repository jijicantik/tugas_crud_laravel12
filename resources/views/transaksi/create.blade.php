<!DOCTYPE html>
<html>
<head>
    <title>Tambah Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">

    <h2>➕ Tambah Transaksi</h2>

    <form action="/transaksi" method="POST" class="card p-3">
        @csrf

        <input type="text" name="nama_pembeli" class="form-control mb-2" placeholder="Nama Pembeli">

        <select name="produk_id" class="form-control mb-2">
            <option>Pilih Produk</option>
            @foreach($produk as $p)
                <option value="{{ $p->id }}">
                    {{ $p->nama }} - Rp {{ $p->harga }}
                </option>
            @endforeach
        </select>

        <input type="number" name="jumlah" class="form-control mb-2" placeholder="Jumlah">

        <input type="date" name="tanggal" class="form-control mb-2">

        <button class="btn btn-success">Simpan Transaksi</button>
    </form>

</div>

</body>
</html>