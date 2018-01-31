@extends('layouts.app')      

@section('content')
<section id="contact">
    <div class="row">
        <div class="section-content">
        <h1 class="section-header"> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> "Оюу толгой" ХХК</span></h1>
                <h5>Хувийн хамгаалах хэрэгслийн онлайн захиалга</h5>
                <div class="col-md-4 col-md-offset-4">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('sap_id') ? ' has-error' : '' }}">
                                    <label for="sap_id" class="col-md-4 control-label">SAP ID</label>

                                    <div class="col-md-6">
                                        <input id="sap_id" type="sap_id" class="form-control" name="sap_id" value="{{ old('sap_id') }}" required autofocus>

                                        @if ($errors->has('sap_id'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sap_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Нууц үг</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <div class="col-md-10 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Нэвтрэх
                                        </button>

                                        <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Forgot Your Password?
                                        </a> -->
                                    </div>
                                </div>
                            </form>
                </div>
        </div>
    </div>
    
@endsection
