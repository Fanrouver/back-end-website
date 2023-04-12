@extends('layouts.main')

@section('title', isset($title) ? $title : null)

@section('additional_css')
<link href="{{ asset('vendors/cropperjs/dist/cropper.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/intl-tel-input/build/css/intlTelInput.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="section">
	<div class="section-header">
		<h1>{{ isset($title) ? $title : null }}</h1>
		{{-- @if (!empty($user) && isset($user->id))
		{{ Breadcrumbs::render('users.edit', $user) }}
		@else
		{{ Breadcrumbs::render('users.create') }}
		@endif --}}
	</div>
	
	<div class="section-body">
		@include('partials.flash')
		<div class="card">
			<div class="card-body">
				{!! Form::open(['route'=> 'auth.changePassword', 'method' => 'POST', 'class' => 'form', 'id' => 'form']) !!}
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="">{{ __('changePassword.currentPassword') }} <span class="text-danger">*</span></label>
							{!! Form::password('current_password', ['class'=> 'form-control', 'required' => true]) !!}
						</div>
						<div class="form-group">
							<label for="">{{ __('changePassword.newPassword') }} <span class="text-danger">*</span></label>
							{!! Form::password('password', ['class'=> 'form-control', 'required' => true]) !!}
						</div>
						<div class="form-group">
							<label for="">{{ __('changePassword.newPasswordConfirmation') }} <span class="text-danger">*</span></label>
							{!! Form::password('password_confirmation', ['class'=> 'form-control', 'required' => true]) !!}
						</div>
					</div>
				</div>
				
				{!! Form::submit(__('common.btn.submit'), ['class'=> 'btn btn-primary']) !!}
				<a class="btn btn-danger" href="{{ route('home') }}">{{ __('common.btn.cancel') }}</a>
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
@endsection

@section('modal')
@include('components.crop.modal')
@endsection

@section('additional_js')
<script src="{{ asset('vendors/cropperjs/dist/cropper.min.js')}}"></script>
<script src="{{ asset('vendors/intl-tel-input/build/js/intlTelInput-jquery.min.js') }}"></script>
<script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>
@endsection

@section('script') 
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2({
			theme: "bootstrap",
			width: '100%',
		});
		
		$(".mobile").intlTelInput({
			placeholderNumberType: "MOBILE",
			preferredCountries: @json(config('consts.defaultPhoneCountry')),
			separateDialCode: true,
			hiddenInput: "mobile_prefix",
			utilsScript: '{{ asset('vendors/intl-tel-input/build/js/utils.js') }}'
		});
		
		$(".validatePhone").change(function(){
			var isValid = $(this).val().match(/^[0-9- ]*$/);
			if(!isValid){
				alert('{{ __('users.phoneValidation') }}');
				$(this).val('');
				return false;
			}
		});
		
		@include('components.crop.script')
	});
</script>
@endsection
