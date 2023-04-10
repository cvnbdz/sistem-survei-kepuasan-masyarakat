@extends('layouts.login')

@section('container')
    <div class="">
        <div class="row">
            <div class="col-12 d-none d-lg-block col-lg-6 cover my-4 my-lg-0">
                <div class="front">
                    {{-- <img src="assets/img/saran2.png"> --}}
                    <img src="{!! asset('img/login.jpg') !!}" alt="ilustrasi">
                </div>
            </div>

            <div class="col-12 col-lg-6 forms my-auto">
                <div class="form-content d-flex justify-content-center">
                    <div class="login-form">
                        <div class="d-flex justify-content-center my-3">
                            <img src="img/polri.png" class="me-1" alt="" width="70">
                            <img src="img/logo.png" class="ms-3" alt="" width="60">
                        </div>
                        <form method="post" action="/panel">
                            @csrf
                            @if (session()->has('logout'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('logout') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <h1 class="h5 mt-3 mb-3 fw-normal">Please login to start your session!</h1>

                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-envelope pe-3"></i>
                                    <input type="text" name="username" id="username" placeholder="Username" required>
                                </div>

                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" name="password" id="password" placeholder="Password" required>
                                </div>

                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>

                                <div class="button input-box">
                                    <input type="submit" value="Login">
                                </div>

                                <p class="mt-5 mb-3 text-muted">&copy; POLRES KARANGANYAR</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
