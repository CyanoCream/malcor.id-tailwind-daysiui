<!-- The button to open modal -->
<label for="my-modal-3" class="btn modal-button">Download Pricelist</label>

<!-- Put this part before </body> tag -->

    <input type="checkbox" id="my-modal-3" class="modal-toggle" />

    <div class="modal ">
      <div class="modal-box relative bg-sky-600">
        <label for="my-modal-3" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
        <form class="form-control" action="{{route('create.pesanan')}}" method="post">
            @csrf
            <label for="">Nama Produk</label>
            <input required type="text" placeholder="Type here" name="produk" class="input input-bordered w-full " />
            <label for="">Nama Pemesan</label>
            <input required type="text" placeholder="Type here" name="pemesan" class="input input-bordered w-full " />
            <label for="">Jumlah Pesanan</label>
            <input required type="number" placeholder="Type here" name="jumlah" class="input input-bordered w-full " />
            <label for="">Nama</label>
            <input required type="text" placeholder="Type here" name="nama" class="input input-bordered w-full " />
            <label for="">Nama Perusahaan</label>
            <input required type="text" placeholder="Type here" name="nama_perusahaan" class="input input-bordered w-full " />
            <label for="">Nomor WA</label>
            <input required type="number" placeholder="Type here" name="nomorwa" class="input input-bordered w-full " />
            <label for="">Email</label>
            <input required type="text" placeholder="Type here" name="email" class="input input-bordered w-full" />
            <label for="my-modal-3" class="btn modal-button mb-2 mt-2">Cancel</label>
            <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>


