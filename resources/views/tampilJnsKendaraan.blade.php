<a href="{{route('jnsKendaraan.create')}}">
    <input type="text">
</a>
<table border='1'>
    <tr>
        <td>No</td>
        <td>Nama Jenis Kendaraan</td>
        <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $row)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->nm_jns_kendaraan}}</td>
        <td>hapus | delete</td>
    </tr>
    @endforeach
</table>