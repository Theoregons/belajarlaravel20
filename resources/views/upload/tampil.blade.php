@extends('template')
@section('main')
    <h2>Upload Gambar</h2>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="d-flex align-items-center">
        @csrf
        <div class="custom-file w-25 my-3">
            <input type="file" class="custom-file-input" id="customFile" name="image">
            <label class="custom-file-label" for="customFile">Pilih Gambar</label>
        </div>
        <button type="submit" class="btn btn-success mx-3">Simpan</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/'. $item->image) }}" width="300" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
