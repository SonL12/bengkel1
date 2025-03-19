@foreach($data as $row)
    <form action="{{route('detailServices.update',$id)}}" method="post" name="update">
        @csrf
        <label for="">Sparepart : </label>
        <input type="text" name="sparepart" id="" value="{{$row->sparepart}}">
        <label for="">Harga : </label>
        <input type="text" name="harga" id="" value="{{$row->harga}}">
        <input type="submit" name="simpan" value="simpan">
    </form>
@endforeach
