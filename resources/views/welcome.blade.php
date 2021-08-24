
@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h6 class="card-title">Menu</h6>
                            <ul>
                                <li>Data Mahasiswa</li>
                                <li>Data Dosen</li>
                                <li>Data Matakuliah</li>
                                <li>KRS</li>
                            </ul>
                            <h6 class="card-title">Laporan</h6>
                            <ul>
                                <li>List Mahasiswa</li>
                                <li>List Dosen</li>
                                <li>List KRS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">List KRS</h6>
                        <br>
                        <button class="btn btn-success">add new</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Nim</th>
                                    <th>Nama</th>
                                    <th>Kode Mata Kuliah</th>
                                    <th>Nama Mata Kuliah</th>
                                    <th>Dosen</th>
                                    <th>Kelas</th>
                                    <th>Semester</th>
                                    <th>Tahun Akademik</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
