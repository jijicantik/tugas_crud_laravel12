<h2>Tambah Produk</h2>

<form action="/produk" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama Produk" required>
    <br><br>
    <input type="number" name="harga" placeholder="Harga" required>
    <br><br>
    <button type="submit">Simpan</button>
</form>