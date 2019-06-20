@extends('layouts.app')

@section('title', '會員登入')

@section('content')
	<div class="page-header">
		<h1>會員登入</h1>
	</div>
	@if ($errors->has('msg'))
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center text-danger">
				{!! $errors->first('msg') !!}
			</div>
		</div>
	@endif
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form method="POST" action="{{ action('AuthController@login') }}">
				{{ csrf_field() }}				
				<div class="form-group">
					<label for="email">帳號</label>
					<input type="email" class="form-control" name="email" />
				</div>
				<div class="form-group">
					<label for="password">密碼</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember" checked="checked" />記住我
					</label>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary">登入</button>
				</div>
			</form>
		</div>
	</div>
@stop