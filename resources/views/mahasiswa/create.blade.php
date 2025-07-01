@extends('layouts.app')

@section('content')
    <h2>Tambah Mahasiswa</h2>
    <hr>
    <div style="padding: 20px;">
        @if ($errors->any())
            <div style="color:red; margin-block: 20px">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <label>NIM:</label><br>
            <input type="number" name="nim" value="{{ old('nim') }}"><br>

            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ old('nama') }}"><br>

            <label>Tanggal Lahir:</label><br>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"><br>

            <label>Jenis Kelamin:</label><br>
            <select name="jenis_kelamin">
                <option value="">--Pilih--</option>
                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select><br>

            <label>Alamat:</label><br>
            <input type="text" name="alamat" value="{{ old('alamat') }}"><br>

            <label>No Telepon:</label><br>
            <input type="text" name="no_telepon" value="{{ old('no_telepon') }}"><br>

            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email') }}"><br>

            <label>Program Studi:</label><br>
            <input type="text" name="program_studi" value="{{ old('program_studi') }}"><br>

            <label>Status:</label><br>
            <select name="status">
                <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select><br><br>
            
            <a href="{{ route('mahasiswa.index') }}" class="btn-back">← Kembali</a>
            <button type="submit">Tambah</button>
        </form>
    </div>
@endsection
