@foreach($data as $row)
<form action="{{route('jnsServices.update',$id)}}" method="post" name="update">
    @csrf
    <label for="">Nama Jenis Kendaraan : </label>
    <input type="text" name="jns_services" id="" value="{{$row->nm_jns_kendaraan}}">
    <input type="submit" name="simpan" value="simpan">
</form>
@endforeach