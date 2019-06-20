	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a class="navbar-brand" href="{{ action('HomeController@index') }}">score</a>
			<ul class="nav navbar-nav">
				<li>
					<a href="{{ action('BoardController@index') }}">排行榜</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				@if (Auth::check())
					<li class="navbar-text">
						{{ Auth::user()->name }}，您好
					</li>
					<li>
						<a href="{{ action('AuthController@logout') }}">登出</a>
					</li>
					<li>
						<a href="{{ action('SchoolController@edit') }}">我的資料</a>
					</li>
				@else
					<li>
						<a href="{{ action('AuthController@showLoginForm') }}">登入</a>
					</li>
				@endif
			</ul>
		</div>
	</nav>
	<div style="padding-top: 30px;"></div>
