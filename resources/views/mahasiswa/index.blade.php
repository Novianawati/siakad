@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <form action="search" method="get">
        <div class="input-group custom-search-form">
            <input type="search" name="search" class="form control w-75 d-inline" placeholder="search...">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div>
    </form>
    

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No.Handphone</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($paginate as $mhs)
        <tr>

            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $Mahasiswa ->fotomhs}}</td>
            <td>{{ $mhs->kelas->nama_kelas }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>{{ $Mahasiswa ->No_Handphone }}</td>
            <td>{{ $Mahasiswa ->Email }}</td>
            <td>{{ $Mahasiswa ->Tanggal_lahir }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$Mahasiswa->Nim]) }}" method="POST">
            
                <a class="btn btn-info" href="{{ route('mahasiswa.show',$Mahasiswa->Nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$Mahasiswa->Nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection