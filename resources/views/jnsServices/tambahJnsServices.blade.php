<form action="{{route('jnsServices.store')}}" method="post" name="tambah">
    @csrf
    <label for="">Jenis Services : </label>
    <input type="text" name="jns_services" id="">
    <label for="">Keterangan : </label>
    <input type="text" name="keterangan" id="">
    <input type="submit" name="simpan" value="simpan">
</form>