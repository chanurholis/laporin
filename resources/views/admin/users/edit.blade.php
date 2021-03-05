@extends('layouts.admin.main')

@section('title', 'Edit Pengguna')

@section('content')
<div class="row">
    <div class="col-12">
        @if (session('status'))
        <div class="alert alert-primary">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <form action="{{ '/admin/users/' . $users['id'] }}" method="post">
                @csrf
                @method('patch')
                <div class="card-body">

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="nik">NIK</label>
                            <input type="text" id="nik" value="{{ $users['nik'] }}" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="Nomor Induk Kependudukan (KTP)" autofocus>
                            <div class="invalid-feedback">
                                @error('nik') {{ $message }} @enderror
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" value="{{ $users['name'] }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap">
                            <div class="invalid-feedback">
                                @error('name') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="domicile">Domisili</label>
                            <input type="text" id="domicile" name="domicile" value="{{ $users['domicile'] }}" class="form-control @error('domicile') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('domicile') {{ $message }} @enderror
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="date_of_birth">Tanggal Lahir</label>
                            <input type="date" id="date_of_birth" value="{{ $users['date_of_birth'] }}" name="date_of_birth" class="form-control @error('date_of_birth') is-invalid @enderror">
                            <div class="invalid-feedback">
                                @error('name') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="gender">Jenis Kelamin</label>
                            <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option value="">Pilih Jenis Kelamin</option>
                                @foreach ($genders as $gender)
                                @if ($users['gender'] == $gender)
                                    <option value="{{ $gender }}" selected>{{ $gender }}</option>
                                @else 
                                    <option value="{{ $gender }}">{{ $gender }}</option>
                                @endif
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                @error('gender') {{ $message }} @enderror
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="phone_number">No. Telp</label>
                            <input type="text" id="phone_number" name="phone_number" value="{{ $users['phone_number'] }}" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Minimal 8-14 Angka">
                            <div class="invalid-feedback">
                                @error('phone_number') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="username">Nama Pengguna</label>
                            <input type="text" id="username" name="username" value="{{ $users['username'] }}" class="form-control @error('username') is-invalid @enderror" placeholder="Nama Pengguna">
                            <div class="invalid-feedback">
                                @error('username') {{ $message }} @enderror
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="email">Surel</label>
                            <input type="email" id="email" name="email" value="{{ $users['email'] }}" class="form-control @error('email') is-invalid @enderror" placeholder="surel@contoh.com">
                            <div class="invalid-feedback">
                                @error('email') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="password">Kata Sandi</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Minimal 8 karakter & berisi alfanumerik">
                            <div class="invalid-feedback">
                                @error('password') {{ $message }} @enderror
                            </div>
                        </div>

                        <div class="form-group col-6">
                            <label for="password2">Konfirmasi Kata Sandi</label>
                            <input type="password" name="password_confirmation" id="password2" class="form-control @error('password') is-invalid @enderror" placeholder="Minimal 8 karakter & berisi alfanumerik">
                            <div class="invalid-feedback">
                                @error('password') {{ $message }} @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group row mb-4 float-right">
                        <div class="col-sm-12 col-md-7 float-right">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection