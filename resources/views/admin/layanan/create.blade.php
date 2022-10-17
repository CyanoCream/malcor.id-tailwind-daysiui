<!-- The button to open modal -->

<label for="my-modal-3" class="btn modal-button ">Create</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-3" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
    <form class="form-control" action="{{route('create.layanan')}}" method="post">
    @csrf
    <label for="">Preview</label>
    <input required type="text" placeholder="Type here" name="gambar" class="input input-bordered w-full max-w-xs" />
    <label for="">Nama Layanan</label>
    <input required type="text" placeholder="Type here" name="nama_layanan" class="input input-bordered w-full max-w-xs" />
    <label for="">Keterangan</label>
    <input required type="text" placeholder="Type here" name="keterangan" class="input input-bordered w-full max-w-xs" />
    <a href="#" class="btn">Cancel</a>
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>
