    <!-- top panel end -->
    <div class="mil-top-panel mil-dark-2">
        <div class="container">
            <a href="index-2.html" class="mil-logo">
                <img src="{{asset('assets/img/logo-color-soft.png')}}" alt="Plax" width="83" height="32">
            </a>
            <nav class="mil-top-menu">
                <ul>
                    <li class="mil-has-children mil-active">
                        <a href="{{url('/')}}">Home</a>
                        {{-- <ul>
                            <li><a href="index-2.html">Home</a></li>
                          
                        </ul> --}}
                    </li>
                    <li>
                        <a href="{{url('/about')}}">About</a>
                    </li>
                    <li>
                        <a href="{{url('/services')}}">Services</a>
                    </li>
                    {{-- <li class="mil-has-children">
                        <a href="#.">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog list</a></li>
                            <li><a href="publication.html">Blog details</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        <a href="{{url('/contact')}}">Contact</a>
                    </li>
                    <li class="mil-has-children">
                        <a href="{{url('/career')}}">Career</a>
                       
                    </li>
                </ul>
            </nav>
            <div class="mil-menu-buttons">
                <a href="{{url('/login')}}" class="mil-btn mil-sm">Log in</a>
                <div class="mil-menu-btn">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <!-- top panel end -->