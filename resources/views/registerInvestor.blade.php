@extends('layouts.main')

@section('container')
    <div class="container-fluid vh-100">

        @if(session()->has('gagal'))
            <div class="alert alert-danger alert-dismissible fade show mt-3 text-center" role="alert">
                {{ session('gagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="container mt-3">
            <div class="container" id="Upper">
                <div class="container d-flex justify-content-center" id="Logo">
                    <img src="Image/Burung Only.png" alt="" style="width: 70px; height:70px">
                    <p style="font-size: 50px">MyCica</p>
                </div>
                <br>
                <h1 class="text-center">Register Investor</h1>
                <br>
                <br>
            </div>
            <div class="container p-5" style="width: 50%; border: 1px solid black">
                <h2><strong>Register</strong></h2>
                <form action="/regis-invest" method="POST">
                    @csrf

                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                        @error('nama')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="Nomor Induk Kependudukan (NIK)" value="{{ old('nik') }}">
                        @error('nik')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="age" class="form-control @error('text') is-invalid @enderror" placeholder="Umur" value="{{ old('age') }}">
                        @error('age')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Nomor Telepom" aria-label="Nomor Telepom" aria-describedby="basic-addon1" value="{{ old('phone') }}">
                        @error('phone')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" value="{{ old('email') }}">
                        @error('email')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="job" class="form-control @error('job') is-invalid @enderror" placeholder="pekerjaan" value="{{ old('job') }}">
                        @error('job')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="reason" class="form-control @error('reason') is-invalid @enderror" placeholder="Alasan berinvestasi" value="{{ old('reason') }}">
                        @error('reason')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="income" class="form-control @error('income') is-invalid @enderror" placeholder="Pendapatan kotor" value="{{ old('income') }}">
                        @error('income')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="text" name="netincome" class="form-control @error('netincome') is-invalid @enderror" placeholder="Pendapatan bersih" value="{{ old('netincome') }}">
                        @error('netincome')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" name="pass" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                        @error('password')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="password" name="repass" class="form-control @error('repass') is-invalid @enderror" placeholder="Konfirmasi Password">
                        @error('repass')
                            
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
@endsection



@section('script')
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"
></script>
@endsection
