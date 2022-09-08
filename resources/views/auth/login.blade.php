@extends('layouts.app')

@section('content')

@include('layouts.navheader')

{{-- <div class="container" style="font-family: Arial; padding: 8% 0% 5% 0%;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" >
            <div class="panel panel-default">

                <div class="panel-heading home-logo"  style="text-align: center; background: #FFF;">
                    <img src="{{URL::asset('/img/new_logo2.png')}}" width="{{ config('app.logo_width') }}" height="{{ config('app.logo_height') }}"/>
                </div>

                <div class="panel-heading home-title1">
                   <a href="{{config('app.website')}}" target="_blank" style="color: #FFF;">{{ config('app.fullname') }}</a>
                </div>
                
                <div class="panel-heading home-login"><i class="fa fa-sign-in fa-fw"></i>Login</div>
                
                <div class="panel-body home-cred">

                    @if(Session::has('failed'))
                                                
                        <div class="alert alert-danger alert-dismissable" style="padding: 8px 15px 8px 15px; font-size: 14px;">
                            <i class="fa fa-exclamation-circle"></i> <b>Failed : </b> {{ Session::get('failed') }}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 20px;">×</button>
                        </div>
                                                                        
                    @endif

                    @if(count($errors) > 0)

                        <div class="alert alert-danger alert-dismissable" style="padding: 8px 15px 8px 15px; font-size: 14px;">
                            <i class="fa fa-exclamation-circle"></i> <b>Failed : </b> Please Complete All Required Fields.
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 20px;">×</button>
                        </div>
                                                                        
                    @endif

                    @if(Session::has('message'))

                        <div class="alert alert-danger alert-dismissable" style="padding: 8px 15px 8px 15px; font-size: 14px; ">
                            <i class="fa fa-exclamation-circle"></i> <b>Failed : </b> {{ Session::get('messages') }}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 20px;">×</button>
                        </div> 

                    @endif

                    @if(Session::has('messages'))   

                        <div class="alert alert-danger alert-dismissable" style="padding: 8px 15px 8px 15px; font-size: 14px; ">
                            <i class="fa fa-exclamation-circle"></i> <b>Failed : </b> {{ Session::get('messages') }}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 20px;">×</button>
                        </div> 

                    @endif

                    @if (session('status'))

                        <div class="alert alert-success alert-dismissable" style="padding: 8px 15px 8px 15px; font-size: 14px; ">
                            <i class="fa fa-exclamation-circle"></i> <b>Success : </b> {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="margin-right: 20px;">×</button>
                        </div>
                        
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">

                        {{ csrf_field() }}

                        @if($login_company > 0)

                        <div class="form-group{{ $errors->has('COMPANY_CODE') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <select id="COMPANY_CODE" class="form-control" name="COMPANY_CODE">
                                    <option value=""> @if($errors->has('COMPANY_CODE'))Please Select Company Code @else Select Company Code @endif</option>                                                    
                                    @foreach($company as $id => $col)
                                    <option value="{{ $col['COMPANY_CODE'] }}" @if(old('COMPANY_CODE') == $col['COMPANY_CODE']) selected @endif >{{ $col['COMPANY_CODE'] }} - {{ $col['COMPANY_NAME'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        @endif

                        <div class="form-group{{ $errors->has('USER_ID') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="USER_ID" type="text" class="form-control" placeholder="Username/ID" name="USER_ID" value="{{ old('USER_ID') }}" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('USER_PASSWORD') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input id="USER_PASSWORD" type="password" class="form-control" placeholder="Password" name="USER_PASSWORD" value="{{ old('USER_PASSWORD') }}" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default home-btn-submit">
                                    <i class="fa fa-sign-in fa-fw"></i> LOGIN
                                </button>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <i class="fa fa-lock fa-fw"></i> Forgot Your Password?
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

<script type="text/javascript">

    $(document).ready(function() {
        $('#USER_ID').on('keyup', function() {
            var currVal = $(this).val();
            var strUCase = $(this).val(currVal.toUpperCase());
            document.getElementById("USER_ID").innerHTML = strUCase;
        });
    });

</script> --}}

@include('layouts.navfooter')

@endsection
