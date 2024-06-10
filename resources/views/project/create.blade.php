@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body mt-3">
            <form action="{{ route('admin.project.store') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Nama Project</label>
                    <input type="text" name="project" id="" placeholder="Masukkan Nama Project Anda"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Mulai</label>
                    <input type="date" name="mulai" id="tgl_mulai" max="<?= date('Y-m-d') ?>"
                        placeholder="Masukkan Tanggal Mulai Anda" class="form-control" onchange="setMaxDate()">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal Selesai</label>
                    <input type="date" name="selesai" id="tgl_selesai" max="<?= date('Y-m-d') ?>"
                        placeholder="Masukkan Tanggal Selesai Anda" class="form-control" onchange="setMinDate()">
                </div>
                <script>
                    function setMinDate() {
                        var selesai = document.getElementById('tgl_selesai').value;
                        document.getElementById('tgl_mulai').max = selesai;
                    }

                    function setMaxDate() {
                        var mulai = document.getElementById('tgl_mulai').value;
                        document.getElementById('tgl_selesai').min = mulai;
                    }
                </script>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
