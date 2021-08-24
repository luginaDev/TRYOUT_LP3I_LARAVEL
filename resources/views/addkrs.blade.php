
@extends('layouts.app')

@section('content')

        <div class="row">
           
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Create KRS</h6>
                    
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nim/Nama</label>
                                <select name="" id="" class="form-control">
                                    @foreach($mahasiswa as $mhs)
                                    <option value="{{ $mhs->nim }}">{{ $mhs->nim }} / {{ $mhs->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Pilih Matkul</label>
                                <select name="" id="" class="form-control">
                                    @foreach($matkul as $mkl)
                                    <option value="{{ $mkl->kode_matakuliah }}">{{ $mkl->nama_matakuliah }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Akademik</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal isi KRS</label>
                               <div class="row">
                                <div class="col">

                                </div>
                               </div>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="btn-group">
                                    <button class="btn btn-success">Submit</button>
                                    <button class="btn btn-secondary">Clear</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
