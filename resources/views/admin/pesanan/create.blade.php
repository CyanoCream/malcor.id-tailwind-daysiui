<!-- The button to open modal -->

<label for="my-modal-3" class="btn modal-button ">Create</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-3" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
    <form class="form-control" action="{{route('create.pesanan')}}" method="post">
    @csrf
    <label for="">Nama Produk</label>
    <input type="text" placeholder="Type here" name="produk" class="input input-bordered w-full max-w-xs" />
    <label for="">Nama Pemesan</label>
    <input type="text" placeholder="Type here" name="pemesan" class="input input-bordered w-full max-w-xs" />
    <label for="">Jumlah Pesanan</label>
    <input type="text" placeholder="Type here" name="jumlah" class="input input-bordered w-full max-w-xs" />
    <label for="">Nama</label>
    <input type="text" placeholder="Type here" name="nama" class="input input-bordered w-full max-w-xs" />
    <label for="">Nama Perusahaan</label>
    <input type="text" placeholder="Type here" name="nama_perusahaan" class="input input-bordered w-full max-w-xs" />
    <label for="">Nomor WA</label>
    <input type="text" placeholder="Type here" name="nomorwa" class="input input-bordered w-full max-w-xs" />
    <label for="">Email</label>
    <input type="text" placeholder="Type here" name="email" class="input input-bordered w-full max-w-xs" />
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>
