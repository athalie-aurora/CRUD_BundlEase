<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create New Nurse</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Create New Nurse</h2>
        <form action="{{ route('nurse.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="namaNurse">Nama Nurse:</label>
                <input type="text" class="form-control" name="namaNurse" required>
            </div>
            <div class="form-group">
                <label for="pendidikanTerakhir">Pendidikan Terakhir:</label>
                <input type="text" class="form-control" name="pendidikanTerakhir" required>
            </div>
            <div class="form-group">
                <label for="Rating">Rating:</label>
                <input type="text" class="form-control" name="Rating" required>
            </div>
            <div class="form-group">
                <label for="Rating">Kategori:</label>
                <input type="text" class="form-control" name="kategori" required>
            </div>
            <div class="form-group">
                <label for="Rating">Spesialis:</label>
                <input type="text" class="form-control" name="spesialis" required>
            </div>
            <div class="form-group">
                <label for="Rating">Foto:</label>
                <input type="file" class="form-control" name="foto" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
