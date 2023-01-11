@extends('layouts.form')
@section('content')
<div class="mt-5 d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
          <div class="card bg-white shadow-lg">
            <div class="card-body p-5">
              <form class="mb-3" action="/register" method="post">
                @csrf
                <h2 class="fw-bold mb-2 text-uppercase text-center">mGPList</h2>
                <h4 class="text-center mb-3">Register</h4>
                <div class="mb-3">
                  <label for="name" class="form-label">Username</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                  @error('name')    
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label ">Email</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                  @error('email')    
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label ">Password</label>
                  <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="*******" required name="password">
                  @error('password')    
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary mt-3 w-auto" type="submit">Daftar</button>
                  <p class="small text-end mt-3"><a class="text-primary" href="/login">Sudah punya akun?</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection