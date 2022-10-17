<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<body>

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:20%">
    <h1 style="margin-left: 77px; margin-top: 40px;"><a href="index.html"><img src="{{ asset('gallery') }}/images/logo-colored.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
  <ul style="margin-top: 21px; margin-left: 20px;">
        <li ><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ url('post') }}">Post</a></li>
            {{-- <div class="w3-dropdown-hover" style="margin-left: -19px;">
                <button class="w3-button">Dropdown
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="w3-dropdown-content w3-bar-block">
                <a href="#" class="w3-bar-item w3-button">Link</a>
                <a href="#" class="w3-bar-item w3-button">Link</a>
            </div> --}}
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
        </li>
  </ul>

  </div>
</div>

<div style="margin-left:30%">

<div class="w3-container" >
@yield('contant')
</div>

</div>

</body>
</html>
