<!-- The button to open modal -->
<label for="my-modal-{{$p->id}}" class="btn modal-button">Edit</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-{{$p->id}}" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
    <form class="form-control" action="{{route('update.pesanan', ['pesanan' => $p->id])}}" method="post">
        @csrf
        <label for="">Nama Produk</label>
        <input type="text" placeholder="Type here" name="produk" value="{{$p->produk}}" class="input input-bordered w-full max-w-xs" />
        <label for="">Nama Pemesan</label>
        <input type="text" placeholder="Type here" name="pemesan" value="{{$p->pemesan}}" class="input input-bordered w-full max-w-xs" />
        <label for="">Jumlah Pesanan</label>
        <input type="text" placeholder="Type here" name="jumlah" value="{{$p->jumlah}}" class="input input-bordered w-full max-w-xs" />
        <label for="">Nama</label>
        <input type="text" placeholder="Type here" name="nama" value="{{$p->nama}}" class="input input-bordered w-full max-w-xs" />
        <label for="">Nama Perusahaan</label>
        <input type="text" placeholder="Type here" name="nama_perusahaan" value="{{$p->nama_perusahaan}}" class="input input-bordered w-full max-w-xs" />
        <label for="">Nomor WA</label>
        <input type="text" placeholder="Type here" name="nomorwa" value="{{$p->nomorwa}}" class="input input-bordered w-full max-w-xs" />
        <label for="">Email</label>
        <input type="text" placeholder="Type here" name="email" value="{{$p->email}}" class="input input-bordered w-full max-w-xs" />
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>
