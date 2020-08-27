@section('navUser')

<nav class="navbar navbar-expand-lg shop  bg-dark navbar-dark" id="scroll">

    <div class="container">
      <a class="navbar-brand" href="{{route('homepage')}}"><img src="{{asset('frontend/images/logo1.png')}}" class=" text-light" style="border-radius: 50px; width: 30px; height: 30px "> KK Rental House  <img src="{{asset('frontend/images/logo1.png')}}" class=" text-light" style="border-radius: 50px; width: 30px; height: 30px "></a>
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
            <a class="nav-link" href="{{route('propertypage')}}">Rental Property</a>
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
              

             <a class="dropdown-item" href="{{ route('profile') }}"
            ><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              {{ __('Profile') }}
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
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
