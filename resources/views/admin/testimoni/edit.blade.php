<!-- The button to open modal -->

<label for="my-modal-{{$t->id}}" class="btn modal-button btn-ghost btn-xs">Edit</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-{{$t->id}}" class="modal-toggle" />
<label for="my-modal-4" class="modal cursor-pointer">
    <form class="form-control" action="{{route('update.testimoni',['testimoni' => $n->id])}}" method="post">
    @csrf
    <label for="">Preview</label>
    <input required type="text" placeholder="Type here" name="gambar" class="input input-bordered w-full max-w-xs" value="" />
    <label for="">Judul</label>
    <input required type="text" placeholder="Type here" name="judul" class="input input-bordered w-full max-w-xs" />
    <label for="">Konten</label>
    <input required type="text" placeholder="Type here" name="konten" class="input input-bordered w-full max-w-xs" />
    <a href="#" class="btn">Cancel</a>
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>