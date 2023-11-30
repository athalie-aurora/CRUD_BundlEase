<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Nurse</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Nurse</h2>
        <form action="{{ route('nurse.update', $nurse->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="namaNurse">Nama Nurse:</label>
                <input type="text" class="form-control" name="namaNurse" value="{{ $nurse->namaNurse }}" required>
            </div>
            <div class="form-group">
                <label for="pendidikanTerakhir">Pendidikan Terakhir:</label>
                <input type="text" class="form-control" name="pendidikanTerakhir" value="{{ $nurse->pendidikanTerakhir }}" required>
            </div>
            <div class="form-group">
                <label for="Rating">Rating:</label>
                <input type="text" class="form-control" name="Rating" value="{{ $nurse->Rating }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
