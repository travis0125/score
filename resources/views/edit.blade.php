@extends('layouts.app')

@section('title', '編輯資料')

@section('content')
	<div class="page-header">
		<h1>個人資料編輯</h1>
	</div>
	@if (isset($msg))
		<div class="alert alert-success" role="alert">
			{{{ $msg or '' }}}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form method="POST" action="{{ action('SchoolController@store') }}">
				{{ csrf_field() }}				
				<div class="form-group">
					<label>
						信箱：{{ Auth::user()->email }}
					</label>
				</div>
				<div class="form-group">
					<label for="name">姓名</label>
					<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" />
				</div>
				<div class="form-group">
					<label for="tel">電話</label>
					<input type="text" class="form-control" name="tel" value="{{ Auth::user()->student->tel }}" />
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary">修改</button>
				</div>
			</form>
		</div>
	</div>
@stop