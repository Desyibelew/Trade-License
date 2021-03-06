@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('Customer License Update') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Customer/update_customer_license') }}">
 @csrf
<input type="hidden" value="{{ $Customer->id }}" name ='id'>
 <div class="form-group row">
 <label for="Full_name" class="col-md-4 col-form-label text-md-right">{{ __('Full_name') }}</label>
 <div class="col-md-6">
 <input id="Full_name" type="text" class="form-control @error('Full_name') is-invalid @enderror" name="Full_name" value="{{ $Customer->Full_name}}" required autocomplete="Full_name" autofocus>
 @error('Full_name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="Sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>
 <div class="col-md-6">
 <input id="Sex" type="text" class="form-control @error('age') is-invalid @enderror" name="Sex" value="{{ $Customer->Sex }}" autocomplete="Sex">
 @error('Sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('age') }}</label>
 <div class="col-md-6">
 <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $Customer->age }}" autocomplete="age">
 @error('age')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('nationality') }}</label>
 <div class="col-md-6">
 <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ $Customer->nationality }}" autocomplete="nationality">
 @error('nationality')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="kebele_ID" class="col-md-4 col-form-label text-md-right">{{ __('kebele_ID') }}</label>
 <div class="col-md-6">
 <input id="kebele_ID" type="text" class="form-control @error('kebele_ID') is-invalid @enderror" name="kebele_ID" value="{{ $Customer->kebele_ID }}" autocomplete="kebele_ID">
 @error('kebele_ID')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('region') }}</label>
 <div class="col-md-6">
 <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{ $Customer->region }}" autocomplete="region">
 @error('region')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="zone" class="col-md-4 col-form-label text-md-right">{{ __('zone') }}</label>
 <div class="col-md-6">
 <input id="zone" type="text" class="form-control @error('zone') is-invalid @enderror" name="zone" value="{{ $Customer->zone }}" autocomplete="zone">
 @error('zone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="trade_type" class="col-md-4 col-form-label text-md-right">{{ __('trade_type') }}</label>
 <div class="col-md-6">
 <input id="trade_type" type="text" class="form-control @error('trade_type') is-invalid @enderror" name="trade_type" value="{{ $Customer->trade_type }}" autocomplete="trade_type">
 @error('trade_type')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="kebele" class="col-md-4 col-form-label text-md-right">{{ __('kebele') }}</label>
 <div class="col-md-6">
 <input id="kebele" type="text" class="form-control @error('kebele') is-invalid @enderror" name="kebele" value="{{ $Customer->kebele }}" autocomplete="kebele">
 @error('kebele')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="trade_type" class="col-md-4 col-form-label text-md-right">{{ __('trade_type') }}</label>
 <div class="col-md-6">
 <input id="trade_type" type="text" class="form-control @error('trade_type') is-invalid @enderror" name="trade_type" value="{{ $Customer->trade_type }}" autocomplete="trade_type">
 @error('trade_type')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="trade_name" class="col-md-4 col-form-label text-md-right">{{ __('trade_name') }}</label>
 <div class="col-md-6">
 <input id="trade_name" type="text" class="form-control @error('trade_name') is-invalid @enderror" name="trade_name" value="{{ $Customer->trade_name }}" autocomplete="trade_name">
 @error('trade_name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="trade_code" class="col-md-4 col-form-label text-md-right">{{ __('trade_code') }}</label>
 <div class="col-md-6">
 <input id="trade_code" type="text" class="form-control @error('trade_code') is-invalid @enderror" name="trade_code" value="{{ $Customer->trade_code }}" autocomplete="trade_code">
 @error('trade_code')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
     {{ __('update_customer_license') }}
    </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection