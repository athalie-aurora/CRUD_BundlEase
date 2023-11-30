<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nurse List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Nurse List</h2>
        <a class="btn btn-success" href="{{ route('nurse.create') }}">Create New Nurse</a>
        <table class="table table-bordered data-table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Nurse</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Rating</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('nurse.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'namaNurse',
                        name: 'namaNurse'
                    },
                    {
                        data: 'pendidikanTerakhir',
                        name: 'pendidikanTerakhir'
                    },
                    {
                        data: 'Rating',
                        name: 'Rating'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });

        function deleteNurse(nurseId) {
            if (confirm("Are you sure you want to delete this nurse?")) {
                $.ajax({
                    url: '/nurse/' + nurseId,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        // Handle success message or update the UI accordingly
                        console.log(data);
                        // Reload or update the table after successful deletion
                        $('.data-table').DataTable().ajax.reload();
                    },
                    error: function(xhr, status, error) {
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            }
        }
    </script>
</body>

</html>
