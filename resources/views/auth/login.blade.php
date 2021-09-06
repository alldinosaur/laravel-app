@extends('layouts.auth')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              <div class="mt-2 text-muted text-center">
                Don't have an account? <a href="/register">Register</a>
              </div>
              <div class="mt-2 text-center">
                <a href="/">Back to home</a>
              </div>
            </form>
          </main>
    </div>
</div>
@endsection