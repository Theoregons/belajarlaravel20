@extends('template')
@section('main')
    <h2>Edit Data Siswa</h2>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mt-2">
            <label for="exampleInputEmail1">NIS</label>
            <input type="number" class="form-control @error('nis') is-invalid @enderror " id="exampleInputEmail1"
                name="nis" value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1"
                name="nama" value="{{ $data->nama  }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1"
                name="alamat" value="{{ $data->alamat }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Sekolah</label>
            <select class="form-control" id="exampleFormControlSelect1" name="sekolah_id">
                @foreach ($sekolah as $item)
                    <option value="{{ $item->id }}" @selected($data->sekolah_id == $item->id)>{{ $item->nama_sekolah }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
