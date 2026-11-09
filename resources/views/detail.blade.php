<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Document</title>
      @include('template.nav')
</head>
<body>
     <div class="container">
    <div class="row">
        @foreach ($fakultas->programstudi as $f)
        <div class="col-4 mt-5">
            <div class="card shadow p-4">
                <h4 class="card-title p-4 ">{{$f->prodi}}</h4>
                <p class="card-text p-4">Rp.{{number_format($f->harga,0,'.',',')}}</p>
            </div>
        </div>   
            
        @endforeach
    </div>
   </div>

</body>
<script src="/bootstrap.bundle.min.js"></script>
</html>