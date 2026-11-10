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
         @if (Session::has('status'))
            <div class="text-center"><p class="text-success">{{ Session::get('status') }}</p></div>     
            @endif
        @foreach ($fakultas as $item)
        <div class="col-4 mt-5">
            <div class="card shadow p-4">
                <img src="{{ $item->foto }}" class="card-img-top" style="width: 300px; height:240px">
                <h4 class="card-title p-4 ">{{$item->nama_fakultas}}</h4>
                <a href="{{ route('detail',$item->id) }}" class="btn btn-primary">Lihat Prodi</a>
            </div>
        </div>
            
        @endforeach
    </div>
   </div>

    

</body>
<script src="/bootstrap.bundle.min.js"></script>
</html>