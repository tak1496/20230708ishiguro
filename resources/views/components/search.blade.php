<div class="search flex">
	<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
	<form class="flex" action="/search" method="GET">
		@csrf
		<input class="search__keyword" type="text" placeholder="なにをお探しですか？" value="{!! $keyword ?? '' !!}" name="keyword" />
		@if( Auth::check() )
		<div class="menu_page">
			<form class="menu__item" name="logout" action="{{ route('logout') }}" method="POST">
				@csrf
				<a class="menu__item" onclick="document.logout.submit();">ログアウト</a>
			</form>
			<a href="{{ route('mypage') }}" class="menu__item">マイページ</a>
		</div>
		@else
		<div class="menu_page">
			<a href="{{ route('login') }}" class="menu__item">ログイン</a>
			<a href="{{ route('register') }}" class="menu__item">会員登録</a>
		</div>
		@endif
		<input type="submit" class="search__btn" value="検索" />
	</form>

</div>