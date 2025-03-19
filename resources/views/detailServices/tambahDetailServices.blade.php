<form action="{{route('detailServices.store')}}" method="post" name="tambah">
    @csrf
    <label for="">Sparepart : </label>
    <input type="text" name="sparepart" id="">
    <label for="">Harga : </label>
    <input type="text" name="harga" id="">
    <input type="submit" name="simpan" value="simpan">
</form>