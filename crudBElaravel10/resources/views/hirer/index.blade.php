<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            background-color: #ffffff;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        p.no-registrations {
            font-size: 18px;
            color: #6c757d;
        }

        .dropdown {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">
            Registrations
            <a href="{{ url('/hirer/create') }}" class="btn btn-success float-right">Add Hirer</a>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="perPageDropdown" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Records Per Page
            </button>
            <div class="dropdown-menu" aria-labelledby="perPageDropdown">
                <a class="dropdown-item" href="#" data-per-page="5">5</a>
                <a class="dropdown-item" href="#" data-per-page="10">10</a>
                <a class="dropdown-item" href="#" data-per-page="20">20</a>
                <!-- Add more options as needed -->
            </div>
        </div>

        @if(count($data) > 0)
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Usia</th>
                    <th>Riwayat Kesehatan</th>
                    <th>Keluhan</th>
                    <th>No Telpon</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $hirer)
                <tr>
                    <td>{{ $hirer->nama }}</td>
                    <td>{{ $hirer->usia }}</td>
                    <td>{{ $hirer->riwayatKesehatan }}</td>
                    <td>{{ $hirer->keluhan }}</td>
                    <td>{{ $hirer->notelpon }}</td>
                    <td>{{ $hirer->alamat }}</td>
                    <td>{{ $hirer->jeniskelamin }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
        @else
        <p class="no-registrations">No registrations available.</p>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dropdownItems = document.querySelectorAll('.dropdown-item');
            dropdownItems.forEach(function (item) {
                item.addEventListener('click', function (event) {
                    event.preventDefault();
                    var perPage = this.getAttribute('data-per-page');
                    window.location.href = '{{ url("/hirer") }}?perPage=' + perPage;
                });
            });
        });
    </script>
</body>

</html>