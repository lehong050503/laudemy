<h1>HOME PAGE</h1>
<ul>
    {{-- ROUTE --}}
    {{-- <li><a href="{{ route('front_home')}}">HOME</a></li>
    <li><a href="{{ route('front_about')}}">ABOUT</a></li>
    <li><a href="{{ URL::to('/')}}">HOME url</a></li>
    <li><a href="{{ url('/about')}}">ABOUT url</a></li> --}}
    {{-- CONTROLLER --}}
    <li><a href="{{ route('student.home')}}">HOME</a></li>
    <li><a href="{{ route('student.about')}}">ABOUT</a></li>
    
</ul>
<p>Home page description. This is a home content</p>