@extends('layouts.app')

@section('content')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header" style="color: Black;text-transform: capitalize;font-weight: bold; ">
                        Register

                        @if(Session::has('insertsuccess'))
                        <div class="alert alert-success mt-2">
                            {{session('insertsuccess')}}
                        </div>
                        @endif

                    </header>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group row">
    
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="address">{{ __('Address') }}</label>
                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
    
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
    
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="mobile">{{ __('Mobile Number') }}</label>
                                    <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" placeholder="Mobile Number" name="mobile" value="{{ old('mobile') }}" required >
                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <label for="role">{{ __('Role') }}</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="" selected disabled>Select Option</option>
                                        <option value="superadmin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
    
                            <div class="form-group row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>
<!--main content end-->



@endsection
