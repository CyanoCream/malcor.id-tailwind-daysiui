<!-- The button to open modal -->
<label for="my-modal-{{$p->id}}" class="btn modal-button">Edit</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-{{$p->id}}" class="modal-toggle" />
<label for="my-modal-{{$p->id}}" class="modal cursor-pointer">
    <form class="form-control" action="{{route('update.pesanan', ['pesanan' => $p->id])}}" method="post">
        @csrf
        <label for="">Nama Produk</label>
        <input type="text" placeholder="Type here" name="produk" value="{{$p->produk}}" class="input input-bordered w-full" />
        <label for="">Nama Pemesan</label>
        <input type="text" placeholder="Type here" name="pemesan" value="{{$p->pemesan}}" class="input input-bordered w-full" />
        <label for="">Jumlah Pesanan</label>
        <input type="text" placeholder="Type here" name="jumlah" value="{{$p->jumlah}}" class="input input-bordered w-full" />
        <label for="">Nama</label>
        <input type="text" placeholder="Type here" name="nama" value="{{$p->nama}}" class="input input-bordered w-full" />
        <label for="">Nama Perusahaan</label>
        <input type="text" placeholder="Type here" name="nama_perusahaan" value="{{$p->nama_perusahaan}}" class="input input-bordered w-full" />
        <label for="">Nomor WA</label>
        <input type="text" placeholder="Type here" name="nomorwa" value="{{$p->nomorwa}}" class="input input-bordered w-full" />
        <label for="">Email</label>
        <input type="text" placeholder="Type here" name="email" value="{{$p->email}}" class="input input-bordered w-full" />
        <label for="">Ubah Status Pesanan</label>
        <select name="status" class="select w-full max-w-xs">
        <option value="1">Sukses</option>
        <option value="0">Batal</option>
        </select>
        <label for="my-modal-{{$p->id}}" class="btn modal-button mb-2 mt-2">Cancel</label>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>
