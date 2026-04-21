<h2>Edit Produk</h2>

<form action="/produk/{{ $data->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nama" value="{{ $data->nama }}" required>
    <br><br>

    <input type="number" name="harga" value="{{ $data->harga }}" required>
    <br><br>

    <button type="submit">Update</button>
</form>