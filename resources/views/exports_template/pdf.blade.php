<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h3>{{ $title }}</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Pelapor</th>
                <th>Judul Laporan</th>
                <th>Isi Laporan</th>
                <th>Jenis Laporan</th>
                <th>Tanggal Laporan</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @php $no = 1; @endphp
            @foreach ($laporan as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->judul_laporan }}</td>
                <td>{{ $item->isi_laporan }}</td>
                <td>{{ $item->jenis_laporan }}</td>
                <td>{{ $item->tgl_laporan }}</td>
                <td>{{ ucfirst($item->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
