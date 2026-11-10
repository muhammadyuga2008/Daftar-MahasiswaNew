<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/bootstrap.min.css">  
    <title>Form Daftar</title>
</head>
<body>
    @include('template.nav')
    <form action="{{ route('postdaftar') }}" method="POST" >
        @csrf
        <div class="container my-5 d-flex min-vh-100">
        <div class="card shadow p-4 mx-auto">
            <h3 class="text-center p-4">Universitas Indonesia</h3>
                @if (Session::has('status'))
                <div class="text-center"><p class="text-success">{{ Session::get('status') }}</p></div>     
                @endif
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama_lengkap" >
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nik:</label>
                    <input type="text" class="form-control" name="nik">
                </div>
            </div>

             <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Agama:</label>
                    <select name="agama" class="form-control">
                        <option >Islam</option>
                        <option >Kristen</option>
                        <option >Budha</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Jenis Kelamin:</label>
                     <select name="jenis_kelamin" class="form-control">
                            <option >Pria</option>
                            <option >wanita</option>
                        
                    </select> 
                </div>
            </div>

             <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Tanggal Lahir:</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Tempat Lahir:</label>
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
            </div>

             <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">No Hp:</label>
                    <input type="number" class="form-control" name="no_hp">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Lulusan Tahun:</label>
                    <input type="text" class="form-control" name="lulusan_tahun">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label class="form-label">Alamat:</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
            </div>


             <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Pilih Fakultas</label>
                        <select class="form-control" name="nama_fakultas">
                            @foreach ($prodi as $item)
                              <option value="{{ $item->fakultas_id }}">{{$item->fakultas->nama_fakultas}}</option>
                            @endforeach
                        </select>
                    </div>

                <div class="col-md-6">
                     <label class="form-label">Pilih Prodi</label>
                        <select class="form-control" name="program_studi_id">
                            @foreach ($prodi as $item)
                                <option value="{{ $item->id }}">{{$item->prodi}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('mahasiswa') }}" class="btn btn-danger">Back</a>
                 <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </div>
    </form>
    
</body>
<script src="/bootstrap.bundle.min.js"></script>
</html>