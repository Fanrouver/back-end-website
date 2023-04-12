@extends('layouts.body')

@section('title', __('forgotPassword.forgotPassword'))

@section('additional_css')
<link rel="stylesheet" href="{{ asset('vendors/template/dist/modules/bootstrap-social/bootstrap-social.css') }}">
@endsection

@section('body')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <form action="{{ route('password.email') }}" method="post">
                    @csrf
                    <div class="card card-primary mt-5">
                        <div class="card-header"><h4>{{ __('forgotPassword.resetPassword') }}</h4></div>
                        
                        <div class="card-body">
                            <form method="POST" action="#" class="needs-validation" novalidate="">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    {!! Form::email('email', null, ['class' => 'form-control', 'tabindex' => '1', 'required' => true, 'autofocus' => true]) !!}
                                </div>

                                @include('partials.flash')
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        {{ __('forgotPassword.sendLink') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
                <div class="mt-5 text-muted text-center">
                    {{ __('auth.haveAccount') }} <a href="{{ route('login') }}">{{ __('auth.login') }}</a>
                </div>
                <div class="simple-footer">
                    Copyright &copy; {{ env('APP_NAME') }} {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection