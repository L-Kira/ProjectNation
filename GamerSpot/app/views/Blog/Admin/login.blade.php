@extends('layouts.admin')

@section('content')
<form class="form-signin" role="form" name="frmAccess">
	<h2 class="form-signin-heading">Please sign in</h2>
    <input name="usr" type="email" class="form-control" placeholder="Email address" required autofocus>
    <input name="pwd" type="password" class="form-control" placeholder="Password" required>
    <label class="checkbox">
    	<input name="chkrmbr" type="checkbox" value="remember-me"> Remember me
    </label>
    <button id="btnLogin" class="btn btn-lg btn-primary btn-block" type="button">Sign in</button>
</form>
@stop