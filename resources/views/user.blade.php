<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
            </tr>
            @foreach ($data as $id)
                <tr>
                    <td>{{ $id->user_id }}</td>
                    <td>{{ $id->username }}</td>
                    <td>{{ $id->nama }}</td>
                    <td>{{ $id->level_id }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>