<h1>PROFILE PAGE</h1>
<ul>
    {{-- ROUTE --}}
    {{-- <li><a href="{{ route('front_home')}}">HOME</a></li>
    <li><a href="{{ route('front_about')}}">ABOUT</a></li>
    <li><a href="{{ url('/')}}">HOME url</a></li>
    <li><a href="{{ URL::to('/about')}}">ABOUT url</a></li> --}}
    {{-- CONTROLLER --}}
    <li><a href="{{ route('student.home')}}">HOME</a></li>
    <li><a href="{{ route('student.about')}}">ABOUT</a></li>
</ul>
<p>The username is : {{ $name}} and age : {{ $age }}</p>