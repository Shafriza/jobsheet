@extends('mahasiswas.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Nim">Nim</label>
                        <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="Text" name="Nama" class="form-control" id="Nama" aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <select name="Kelas" class="form-control">
                            @foreach($kelas as $kls)
                            <option value="{{ $kls->id }}">{{$kls->nama_kelas}}></option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jurusan</label>
                        <input type="Text" name="Jurusan" class="form-control" id="Jurusan" aria-describedby="Jurusan">

                    </div>
                    <div class="form-group">
                        <label for="No_Handphone">No_Handphone</label>
                        <input type="Text" name="No_Handphone" class="form-control" id="No_Handphone" aria-describedby="No_Handphone">
                    </div>
                    <div class="form-group">
                        <label for="E-mail">E-mail</label>
                        <input type="Text" name="E_mail" class="form-control" id="E-mail" aria-describedby="E-mail">
                    </div>
                    <div class="form-group row">
                        <label for="Tgl_lahir" class="col-2 col-form-label">Tgl_lahir</label>
                        <div class="col-10">
                            <input type="date" class="form-control" name="Tgl_lahir" type="date" id="Tgl_lahir">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection