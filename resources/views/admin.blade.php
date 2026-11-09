<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/dataTables.dataTables.min.css">  
    <link rel="stylesheet" href="/bootstrap.min.css">  
    <title>Admin</title>
    <script src="/dataTables.min.js"></script>
</head>
<body>
    @include('template.nav')
    <div class="container mt-5">
        <table class="table" id="tableAdmin">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Fakultas</th>
                    <th>Program Studi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

   
    
    
</body>
<script>new DataTable('#tableAdmin');</script>
 <script src="/bootstrap.bundle.min.js"></script>
</html>