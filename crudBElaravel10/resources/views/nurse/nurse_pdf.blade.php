<!-- nurse_pdf.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nurse List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Nurse List</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Nurse</th>
                <th>Pendidikan Terakhir</th>
                <th>Rating</th>
                <th>Kategori</th>
                <th>Spesialis</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nurses as $nurse)
                <tr>
                    <td>{{ $nurse->nama }}</td>
                    <td>{{ $nurse->pendidikan_terakhir }}</td>
                    <td>{{ $nurse->rating }}</td>
                    <td>{{ $nurse->kategori }}</td>
                    <td>{{ $nurse->spesialis }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
