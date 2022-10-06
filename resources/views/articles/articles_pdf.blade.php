<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

        h5 {
            text-align: center;
        }

    </style>
</head>

<body>
    <h5>Laporan Artikel</h5>
    <table class='table table-bordered' style="width: 95%; margin: 0 auto;">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $a)
                <tr>
                    <td>{{ $a->title }}</td>
                    <td>{{ $a->content }}</td>
                    <td>
                        <img width="100px"
                            src="{{ storage_path('app/public/'.$a->featured_image) }}">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
