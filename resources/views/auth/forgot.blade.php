@extends('layouts.app')

@section('content')

@include('layouts.navheader')

<div class="container" style="font-family: Arial; padding: 8% 0% 5% 0%;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-heading home-logo">
                    <img src="{{URL::asset('/img/new_logo2.png')}}" width="{{ config('app.logo_width') }}" height="{{ config('app.logo_height') }}"/>
                </div>

                <div class="panel-heading home-title1">
                   <a href="{{config('app.website')}}" target="_blank" style="color: #FFF;">{{ config('app.fullname') }}</a>
                </div>
                
                <div class="panel-heading home-login"><i class="fa fa-lock fa-fw"></i>Forgot Password</div>

                <div class="panel-body home-cred">

                    @if(count($errors) > 0)

                        <div class="alert alert-danger alert-dismissable" style="padding: 8px 15px 8px 15px; font-size: 14px; ">
                            <i class="fa fa-exclamation-circle"></i> <b>Failed : </b> Please Complete All Required Fields.
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 20px;">×</button>
                        </div>
                                                                        
                    @endif

                    @if (session('status'))

                        <div class="alert alert-success alert-dismissable" style="padding: 8px 15px 8px 15px; font-size: 14px; ">
                            <i class="fa fa-exclamation-circle"></i> <b>Success : </b> {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 20px;">×</button>
                        </div>
                        
                    @endif

                    @if(Session::has('check'))

                        <div class="alert alert-danger alert-dismissable" style="padding: 8px 15px 8px 15px; font-size: 14px; ">
                            <i class="fa fa-exclamation-circle"></i> <b>Failed : </b> {{ Session::get('check') }}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 20px;">×</button>
                        </div>  

                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('security_questions') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <select class="form-control" id="security_questions" name="security_questions">
                                    <option value=""> Security Question </option>
                                    <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                    <option value="What street did you live on in third grade?">What street did you live on in third grade?</option>
                                    <option value="What is the middle name of your oldest child?">What is the middle name of your oldest child?</option>
                                    <option value="What school did you attend for sixth grade?">What school did you attend for sixth grade?</option>
                                    <option value="Where were you when you had your first kiss?">Where were you when you had your first kiss?</option>
                                    <option value="In what city does your nearest sibling live?">In what city does your nearest sibling live?</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('security_answer') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="security_answer" type="text" class="form-control" name="security_answer" placeholder="Security Answer" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default home-btn-submit">
                                    <i class="fa fa-undo fa-fw"></i> Reset Password
                                </button>
                                <a class="btn btn-link" href="{{ url('/login') }}" style="float: right;">
                                    <i class="fa fa-sign-in fa-fw"></i> Login
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer" style="text-align: center;">{{ config('app.owner') }}</div>
            </div>
        </div>
    </div>
</div>

@include('layouts.navfooter')

@endsection
