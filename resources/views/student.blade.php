@extends('layouts.app')

@section('title', '詳細資料')

@section('content')
	<div class="page-header">
		<h1>詳細資料</h1>
	</div>
	<div class="row">
		<p>
			信箱：{{ $user->email }}
		</p>
		<p>
			學號：{{ $student->no }}
		</p>
		<p>
			姓名：{{ $user->name }}
		</p>
		<p>
			電話：{{ $student->tel }}
		</p>
		@if (is_null($subject) || $subject == 'chinese' )
			<p>
				國文：{{ $score->chinese }}
			</p>
		@endif
		@if (is_null($subject) || $subject == 'english' )
			<p>
				英文：{{ $score->english }}
			</p>
		@endif
		@if (is_null($subject) || $subject == 'math' )
			<p>
				數學：{{ $score->math }}
			</p>
		@endif
	</div>
@stop