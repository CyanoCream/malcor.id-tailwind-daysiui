
<label for="my-modal-3" class="btn modal-button mb-2">Create</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal-3" class="modal-toggle" />
<label for="my-modal-3" class="modal cursor-pointer">
<label for="" class="modal-box">
<form class="form-control" action="{{route('create.testimoni')}}" method="post" enctype="multipart/form-data">
    @csrf    <label for="">Preview</label>
    <input  required type="file" placeholder="Type here" name="bukti" class="input-bordered block w-full text-lg text-gray-900 bg-gray-90 rounded-lg border border-gray-400 cursor-pointer dark:text-gray-500 focus:outline-none dark:bg-gray-900 dark:border-yellow-800 dark:placeholder-gray-500" id="large_size" >
    <!-- <input required type="file" placeholder="Type here" name="bukti" class="input input-bordered block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" value="" /> -->
    <label for="">Judul</label>
    <input required type="text" placeholder="Type here" name="nama" class="input input-bordered w-full " />
    <label for="">Ulasan</label>
    <input required type="text" placeholder="Type here" name="ulasan" class="input input-bordered w-full " />
    <label for="my-modal-3" class="btn modal-button mb-2 mt-2">Cancel</label>
    <button class="btn btn-primary" type="submit">Save</button>
    </form>
</label>
</label>
