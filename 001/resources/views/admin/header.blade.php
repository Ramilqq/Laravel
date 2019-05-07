<div class="container portfolio_title">
	<div class="section-title">
		<h1>{{ $title }}</h1>
	</div>
</div>	

<ul class="nav nav-tabs" style="margin-bottom: 4%;">
	<li class="{{ Route::currentRouteName() == 'admin' ? 'active':'' }}" >
		<a href="{{ url('/admin') }}" class='' style="background: #b8bdff">Главная</a>
	</li>
	
	<li class="{{ Route::currentRouteName() == ('pages' && 'pagesadd' && 'pagesedit') ? 'active':'' }}">
		<a href="{{ route('pages') }}">Pages</a>
	</li>
	
	<li><a href="#">Сообщение</a></li>
	<li><a href="#">Сообщение</a></li>
	<li style="float:  right;"><a href="{{ url('/logout') }}">Выйти из учетной записи</a></li>
</ul>