<!DOCTYPE html>
<html>
    <body>
        <h1>Form Tambah Data User</h1>
        <form action="/user/tambah_simpan" method="post">
            {{ csrf_field() }}
            <label>Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan Username">
            <br>
            <label>Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
            <br>
            <label>Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan Password">
            <br>
            <label>Level ID</label>
            <input type="number" id="level_id" name="level_id" placeholder="Masukkan ID Level">
            <br>
            <input type="submit" class="btn btn-success" value="Simpan">
        </form>
    </body>
</html>