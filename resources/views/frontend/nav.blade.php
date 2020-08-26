@section('nav')

<nav class="navbar navbar-expand-lg shop  bg-dark navbar-dark" id="scroll">

    <div class="container">
      <a class="navbar-brand" href="#">KK Rental House</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('homepage')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('propertypage')}}">Property Rental</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('properties.index')}}">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>

          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
             

             <a class="dropdown-item text-info" href="{{ route('profile') }}"
            ><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              {{ __('Profile') }}
            </a>

             <a class="dropdown-item text-info" href="{{ route('rentallists.index') }}"
            >{{-- <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"> --}}<i class="fas fa-th-list "></i></i>
              {{ __('Rental List') }}
            </a>

             <a class="dropdown-item text-info" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              {{ __('Logout') }}
            </a>


           

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
         @endguest
     </ul>
      </div>
    </div>
    
  </nav>

  @endsection
