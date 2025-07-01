@extends('layouts.app')

@section('content')
    <h2>Edit Mahasiswa</h2>
    <hr>
    <div style="padding: 20px;">

        @if ($errors->any())
            <div style="color:red;">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf @method('PUT')
            
            <label>NIM:</label><br>
            <input type="number" name="nim" value="{{ old('nim', $mahasiswa->nim) }}"><br>

            <label>Nama:</label><br>
            <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama) }}"><br>

            <label>Tanggal Lahir:</label><br>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}"><br>

            <label>Jenis Kelamin:</label><br>
            <select name="jenis_kelamin">
                <option value="">--Pilih--</option>
                <option value="L" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select><br>

            <label>Alamat:</label><br>
            <input type="text" name="alamat" value="{{ old('alamat', $mahasiswa->alamat) }}"><br>

            <label>No Telepon:</label><br>
            <input type="text" name="no_telepon" value="{{ old('no_telepon', $mahasiswa->no_telepon) }}"><br>

            <label>Email:</label><br>
            <input type="email" name="email" value="{{ old('email', $mahasiswa->email) }}"><br>

            <label>Program Studi:</label><br>
            <input type="text" name="program_studi" value="{{ old('program_studi', $mahasiswa->program_studi) }}"><br>

            <label>Status:</label><br>
            <select name="status">
                <option value="aktif" {{ old('status', $mahasiswa->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ old('status', $mahasiswa->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select><br><br>

            <a href="{{ route('mahasiswa.index') }}" class="btn-back">← Kembali</a>
            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection
