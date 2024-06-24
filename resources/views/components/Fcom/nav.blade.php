   <!-- Start: Navbar Centered Links -->
   <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-shrink py-3" id="mainNav">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><span style="font-size: 17px;">Reliance</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="/" data-bs-target="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('features')}}">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('integrations')}}">Integrations</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('support')}}">Support</a></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
                <li class="nav-item"></li>
            </ul>
            <div class="dropdown mx-auto"><a class="dropdown-toggle text-center" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" style="padding: 0px;margin: 0px;">Login</a>
                <div class="dropdown-menu dropdown-menu-dark"><a class="dropdown-item" href="{{route('login')}}">Employee&nbsp;</a><a class="dropdown-item" href="{{route('login')}}">Human Resource</a><a class="dropdown-item" href="{{route('login')}}">Admin</a></div>
            </div><a class="border rounded-0 border-1 shadow ms-auto" href="{{route('register')}}" style="background: rgb(80,84,180);font-size: 16px;font-weight: bold;border-color: var(--bs-navbar-disabled-color);color: rgb(253,254,255);width: 70.2625px;text-align: center;box-shadow: 30px 19px 12px 13px;">Sign Up</a>
        </div>
    </div>
</nav><!-- End: Navbar Centered Links -->