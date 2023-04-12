@extends('layouts.body')

@section('title', __('auth.login'))

@section('additional_css')
<link rel="stylesheet" href="{{ asset('vendors/template/dist/modules/bootstrap-social/bootstrap-social.css') }}">
@endsection

@section('body')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                {{-- <div class="login-brand">
                    <img src="{{ asset('vendors/template/dist/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
                </div> --}}
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="card card-primary mt-5">
                        <div class="card-header"><h4>Login</h4></div>
                        
                        <div class="card-body">
                            <form method="POST" action="#" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    {!! Form::email('email', null, ['class' => 'form-control', 'tabindex' => '1', 'required' => true, 'autofocus' => true]) !!}
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="{{ route('password.request') }}" class="text-small">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                    </div>
                                </div>

                                @include('partials.flash')
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
                <div class="simple-footer">
                    Copyright &copy; {{ env('APP_NAME') }} {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection