<h2>Data Produk</h2>

<a href="/produk/create">Tambah Produk</a>
<br><br>

@foreach($data as $d)
    <p>
        {{ $d->nama }} - Rp{{ $d->harga }}
        <a href="/produk/{{ $d->id }}/edit">Edit</a>

        <form action="/produk/{{ $d->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </p>
@endforeach