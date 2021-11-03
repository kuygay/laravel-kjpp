<table width="100%" cellspacing="0" cellpadding="0" border="1">
    <thead>
        <th>No</th>
        <th>Id</th>
        <th>KJPP</th>
        <th>Nomor Izin </th>
        <th>tgl_izin</th>
    </thead>
    <tbody>
        @foreach($items as $row)
        <tr>
            <td> {{ $i++ }}</td>
            <td> {{ $row->id }} </td> 
            <td> {{ $row->nama_kjpp }} </td> 
            <td> {{ $row->no_induk }} </td>
            <td> {{ $row->no_izin_kjpp }}</td>
        </tr>
        @endforeach
    </tbody>
</table>