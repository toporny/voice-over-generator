<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 text-white">Start</a></li>
        
        @auth

          @if (!auth()->user()->is_admin)
            <li><a href="/blowings/list" class="nav-link px-2 text-white">{{ __('reports') }}</a></li>
            <li><a href="/clients/list" class="nav-link px-2 text-white">{{ __('clients_list') }}</a></li>
          @else
            <li><a href="/profiles" class="nav-link px-2 text-white">{{ __('profiles') }}</a></li>
            <div class="m-2 text-danger" >(admin mode)</div>
          @endif

        @endauth
      </ul>


      @auth
        <span class="me-2">{{ __('welcome') }} <a class="text-white" href="/profile">{{auth()->user()->username}}</a></span>
        <div class="m-1 text-end">
          <a href="{{ route('auth.logout') }}" class="btn btn-outline-light me-2">{{ __('logout') }}</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('auth.perform') }}" class="btn btn-outline-light me-1">{{ __('login') }}</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">{{ __('register') }}</a>
        </div>
      @endguest


	<div class="text-end">

	<select style="width:120px" class="m-1 ms-2 form-select" aria-label="Default select example" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
		@foreach (Config::get('languages') as $lang => $language)

			@if ($lang != App::getLocale())
			<option value="/lang/{{$lang}}">{{$language}}</option>
			@else if
				<option selected="selected" value="/lang/{{$lang}}">{{$language}}</option>
			@endif

		@endforeach
		<select>
	</div>


	</div>
  </div>
</header>