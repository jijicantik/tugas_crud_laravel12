<!DOCTYPE html>
<html>
<head>
    <title>Data Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">

    <h2 class="mb-3">💰 Data Transaksi</h2>

    <a href="/transaksi/create" class="btn btn-primary mb-3">+ Tambah Transaksi</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Pembeli</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @foreach($transaksi as $t)
        <tr>
            <td>{{ $t->nama_pembeli }}</td>
            <td>{{ $t->produk->nama }}</td>
            <td>{{ $t->jumlah }}</td>
            <td>Rp {{ number_format($t->harga) }}</td>
            <td><b>Rp {{ number_format($t->total) }}</b></td>
            <td>{{ $t->tanggal }}</td>
            <td>
                <form action="/transaksi/{{ $t->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>