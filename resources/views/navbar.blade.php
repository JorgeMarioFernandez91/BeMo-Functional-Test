<nav class="navbar navbar-expand-lg navbar-light bg-white navbar-sticky-top" >
    <div class="container">
        <!-- Left side of Navbar -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://cdainterview.com/rw_common/images/bemo-logo2.png" width="167" height="100" alt="Site logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li style="padding-right: 30px;" ><a class="nav-links" href="#">Main</a></li>
                <li style="padding-right: 30px" ><a class="nav-links" href="#">How To Prepare</a></li>
                <li style="padding-right: 30px" ><a class="nav-links" href="#">CDA Interview Questions</a></li>
                <li style="padding-right: 30px" ><a class="nav-links" href="{{url('/contactus')}}">Contact Us</a></li>
                
                
                <li class="logout">
                    <a class="nav-links" href="{{ route('logout') }}"
                        onclick="   event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
    

</nav>
