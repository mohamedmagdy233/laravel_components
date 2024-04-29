<div class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"href="index.html"><img src="website/images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Vehicles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="client.html">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>

                    @auth()
                        <li class="nav-item">
                            <p class="nav-link">{{auth()->user()->name}}</p>
                        </li>

                        <li class="nav-item">

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button  type="submit" class="nav-link">Logout</button>
                            </form>
                        </li>
                    @else

                        <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">register</a>
                        </li>
                    @endauth


                </ul>
                <form class="form-inline my-2 my-lg-0">
                </form>
            </div>
        </nav>
    </div>
</div>

