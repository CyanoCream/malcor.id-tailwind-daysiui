<!-- The button to open modal -->

<label for="my-modal-{{$lay->id}}" class="btn modal-button btn-ghost btn-xs">Edit</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-{{$lay->id}}" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
    <form class="form-control" action="{{route('update.layanan',['layanan' => $lay->id])}}" method="post">
    @csrf
    <label for="">Preview</label>
    <input required type="text" placeholder="Type here" name="gambar" class="input input-bordered w-full max-w-xs" value="" />
    <label for="">Nama Layanan</label>
    <input required type="text" placeholder="Type here" name="nama_layanan" class="input input-bordered w-full max-w-xs" />
    <label for="">Keterangan</label>
    <input required type="text" placeholder="Type here" name="keterangan" class="input input-bordered w-full max-w-xs" />
    <a href="#" class="btn">Cancel</a>
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>