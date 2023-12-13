<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="/css/list.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="{{ url('/hirer/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Usia</span>
                        <input type="text" name="usia" placeholder="Masukkan Usia" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Riwayat Kesehatan</span>
                        <input type="text" name="riwayatKesehatan" placeholder="Riwayat Kesehatan Anda" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Keluhan</span>
                        <input type="text" name="keluhan" placeholder="Tuliskan Keluhan" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No Telpon</span>
                        <input type="text" name="notelpon" placeholder="Tuliskan Nomor Telpon" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat</span>
                        <input type="text" name="alamat" placeholder="Tuliskan alamat" required>
                    </div>
                    <div class="input-box">
                    </div>
                </div>
                <div class="input-box">
                    <div class="gender-details">
                        <span class="details">Jenis Kelamin</span>
                        <select class="details"name="jeniskelamin" required>
                            <option class="details" value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option class="details" value="Laki-laki">Laki-laki</option>
                            <option class="details" value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
