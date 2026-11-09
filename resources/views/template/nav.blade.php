<nav class="nav bg-dark px-3 py-2">
    @auth
        <a href="#" class="text-white nav-link">Universitas Indonesia</a>
       @if (auth()->user()->role =='admin')
         <a href="" class="text-white nav-link">Data Siswa</a>  
       @else 
        <a href="{{ route('mahasiswa') }}" class="text-white nav-link">Fakultas</a>
        <a href="{{ route('daftar') }}" class="text-white nav-link">Pendaftaran</a>  
       @endif
        <a href="{{ route('logout') }}" class="nav-link text-danger">Logout</a>
    @endauth
</nav>