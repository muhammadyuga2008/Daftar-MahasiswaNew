<nav class="nav bg-dark px-3 py-2">
    @auth
        <a href="#" class="text-white nav-link">Universitas Indonesia</a>
       @if (auth()->user()->role =='admin')
         <a href="{{ route('admin') }}" class="text-white nav-link">Data Siswa</a>  
         <a href="{{ route('admin2') }}" class="text-white nav-link">Report</a>  
       @else 
       @if (auth()->user()->pendaftar)
         <a href="{{ route('mahasiswa') }}" class="text-white nav-link">Fakultas</a>
       @else
        <a href="{{ route('mahasiswa') }}" class="text-white nav-link">Fakultas</a>
        <a href="{{ route('daftar') }}" class="text-white nav-link">Pendaftaran</a>     
       @endif
       @endif
    @endauth
    <a href="{{ route('logout') }}" class="nav-link text-danger">Logout</a>
</nav>