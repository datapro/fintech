@extends('layouts.main')

@section('content')

        <!-- content -->
        <div id="smooth-content">

            <!-- banner -->
            <div class="mil-banner mil-dark-2">
                <div class="mil-radial-g-2"></div>
                <div class="mil-radial-g-3"></div>
                <div class="container">
                    <div class="row align-items-center mil-mb-80">
                        <div class="col-xl-5">
                            <div class="mil-banner-text">
                                <div class="mil-text-l mil-light mil-mb-20">Explore the Financial Future: Welcome to</div>
                                <h1 class="mil-display mil-light mil-mb-60">Our Online Banking</h1>
                                <div class="mil-buttons-frame">
                                    <a href="register.html" class="mil-btn mil-md mil-add-arrow">Check balances</a>
                                    <a href="https://www.youtube.com/watch?v=gRhoYxy9Oss" class="mil-btn mil-md mil-transp mil-add-play has-popup-video">Watch tutorial</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="mil-banner-img mil-banner-img-out">
                                <img src="{{asset('assets/img/home-5/1.png')}}" alt="banner" style="max-width:150%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner end -->

            <!-- about -->
            <div class="mil-cta">
                <div class="container">
                    <div class="mil-out-frame mil-out-top mil-visible">
                        <div class="row flex-sm-row-reverse justify-content-between align-items-center">
                            <div class="col-xl-5 mil-mb-60">
                                <h2 class="mil-mb-30 mil-light mil-up">Simplified Financial Operations</h2>
                                <p class="mil-text-l mil-pale-2 mil-up mil-mb-60">We have designed our online banking platform so that you can carry out your operations easily and safely. From checking balances to making payments and transfers, everything is at your fingertips.</p>
                                <div class="mil-up"><a href="register.html" class="mil-btn mil-m mil-add-arrow">Watch tutorial</a></div>
                            </div>
                            <div class="col-xl-6">
                                <img src="{{asset('assets/img/home-5/2.png')}}" alt="img" style="width: 100%" class="mil-up">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about end -->

            <!-- icon boxes -->
            <div class="icon-boxes mil-p-160-130">
                <div class="container">
                    <div class="mil-text-center">
                        <h2 class="mil-light mil-mb-30 mil-up">Discover the Reasons <br>to choose us</h2>
                        <p class="mil-text-l mil-pale-2 mil-mb-60 mil-up">Discover why choosing us makes a difference <br>in your relationship with money.</p>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-4 mil-mb-30">
                            <div class="mil-icon-box mil-with-bg mil-dark-2 mil-center mil-up">
                                <img src="{{asset('assets/img/home-5/icons/1.svg')}}" alt="icon" class="mil-mb-30 mil-up">
                                <h5 class="mil-mb-20 mil-light mil-up">Innovative technology</h5>
                                <p class="mil-text-s mil-soft mil-up">Immerse yourself in the forefront of digital banking with our cutting-edge technological solutions.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 mil-mb-30">
                            <div class="mil-icon-box mil-with-bg mil-dark-2 mil-center mil-up">
                                <img src="{{asset('assets/img/home-5/icons/2.svg')}}" alt="icon" class="mil-mb-30 mil-up">
                                <h5 class="mil-mb-20 mil-light mil-up">Guaranteed Security</h5>
                                <p class="mil-text-s mil-soft mil-up">Your peace of mind is our priority. We employ the most advanced security measures to protect every transaction.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 mil-mb-30">
                            <div class="mil-icon-box mil-with-bg mil-dark-2 mil-center mil-up">
                                <img src="{{asset('assets/img/home-5/icons/3.svg')}}" alt="icon" class="mil-mb-30 mil-up">
                                <h5 class="mil-mb-20 mil-light mil-up">Zero Hidden Commissions</h5>
                                <p class="mil-text-s mil-soft mil-up">At Plax, we believe in transparency. Enjoy making transfers and payments without worrying about additional costs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- icon boxes end -->

            <!-- facts -->
            <div class="mil-p-0-80">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-5 mil-mb-80">
                            <h2 class="mil-light mil-mb-30 mil-up">Discover the Facts: Plax in Figures</h2>
                            <p class="mil-text-l mil-pale-2 mil-mb-60 mil-up">Dive into the facts that make Plax the smart choice for your financial needs</p>
                            <ul class="mil-list-2 mil-type-2 mil-accent mil-mb-60">
                                <li>
                                    <div class="mil-up">
                                        <h5 class="mil-light mil-mb-15">Operations in a Cities</h5>
                                        <p class="mil-text-m mil-pale-2">We extend our digital network across 22 cities to reach you, wherever you are.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="mil-up">
                                        <h5 class="mil-light mil-mb-15">Commitment to Innovation</h5>
                                        <p class="mil-text-m mil-pale-2">At Plax, we don't just embrace innovation, we lead it. We are constantly evolving to offer you the latest in financial technology.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="mil-up"><a href="about.html" class="mil-btn mil-m mil-add-arrow">Learn more</a></div>
                        </div>
                        <div class="col-xl-6 mil-mb-80">
                            <div class="row">
                                <div class="col-xl-6 mil-mb-30">
                                    <p class="h1 mil-display mil-mb-15"><span class="mil-accent mil-counter" data-number="2.1">2,1</span><span class="mil-accent">M</span></p>
                                    <h5 class="mil-light">Satisfied Customers:</h5>
                                </div>
                                <div class="col-xl-6 mil-mb-30">
                                    <p class="h1 mil-display mil-mb-15"><span class="mil-accent">+</span><span class="mil-accent mil-counter" data-number="800">800</span></p>
                                    <h5 class="mil-light">Corporate Clients:</h5>
                                </div>
                                <div class="col-xl-6 mil-mb-30">
                                    <p class="h1 mil-display mil-mb-15"><span class="mil-accent">+</span><span class="mil-accent mil-counter" data-number="8.8">8,8</span><span class="mil-accent">K</span></p>
                                    <h5 class="mil-light">Dedicated Employees:</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- facts end -->

            <!-- call to action -->
            <div class="mil-cta mil-p-0-160 mil-up">
                <div class="container">
                    <div class="mil-out-frame mil-bg-2">
                        <div class="row justify-content-center align-items-center mil-p-160-160">
                            <div class="col-xl-7 mil-text-center">
                                <h2 class="mil-light mil-mb-30 mil-up">Explore the Possibilities of Our Online Banking</h2>
                                <p class="mil-text-l mil-light mil-mb-60 mil-up">Bank quickly and securely from the comfort of your home or office. From checking balances to making payments, discover all the features</p>
                                <div class="mil-up"><a href="career.html" class="mil-btn mil-md mil-add-arrow">Explore now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- call to action end -->

            <!-- features -->
            <div class="mil-features mil-p-0-80">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-6 mil-mb-80">
                            <h2 class="mil-mb-30 mil-light mil-up">Simplicity in Every Payment</h2>
                            <p class="mil-text-l mil-pale-2 mil-mb-60 mil-up">From utilities to credit cards, we simplify the process so you can focus on what really matters.</p>
                            <ul class="mil-list-1 mil-accent">
                                <li>
                                    <div class="mil-up">
                                        <a href="#." class="mil-up">
                                            <h5 class="mil-mb-15 mil-light mil-up">Payment for Services</h5>
                                            <p class="mil-text-m mil-pale-2 mil-up">Make utility payments, bills and more with just a few <br>clicks, without hassle or delays.</p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="mil-up">
                                        <a href="#." class="mil-up">
                                            <h5 class="mil-mb-15 mil-light mil-up">Efficient Credit Card Management</h5>
                                            <p class="mil-text-m mil-pale-2 mil-up">Control your credit cards, make minimum or full <br>payments, and keep track of your transactions efficiently.</p>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="mil-up">
                                        <a href="#." class="mil-up">
                                            <h5 class="mil-mb-15 mil-light mil-up">Automatic Payments Program:</h5>
                                            <p class="mil-text-m mil-pale-2 mil-up">Forget about deadlines. Set up automatic payments <br>so your bills are paid on time, without worry.</p>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-5 mil-mb-80">
                            <div class="mil-image-frame mil-up">
                                <img src="{{asset('assets/img/home-5/3.png')}}" alt="image" class="mil-scale-img" data-value-1="1" data-value-2="1.2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features end -->

            <!-- features -->
            <div class="mil-features mil-p-0-80">
                <div class="container">
                    <div class="row flex-sm-row-reverse justify-content-between align-items-center">
                        <div class="col-xl-6 mil-mb-80">
                            <h2 class="mil-mb-30 mil-light mil-up">Ease and Security in Every Transaction</h2>
                            <p class="mil-text-l mil-pale-2 mil-mb-60 mil-up">With Plax, transferring funds has never been so simple and secure. From local transfers to international payments, our platform gives you peace of mind knowing your transactions are protected. Discover a new era in bank transfers.</p>
                            <div class="mil-up"><a href="about.html" class="mil-btn mil-m mil-add-arrow">Learn more</a></div>
                        </div>
                        <div class="col-xl-5 mil-mb-80">
                            <div class="mil-image-frame mil-up">
                                <img src="{{asset('assets/img/home-5/4.png')}}" alt="image" class="mil-scale-img" data-value-1="1" data-value-2="1.2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- features end -->

            <!-- testimonials -->
            <div class="mil-cta mil-up">
                <div class="container">
                    <div class="mil-out-frame mil-bg-4 mil-p-160-160">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 mil-relative">
                                <div class="swiper-container mil-testimonials-1 mil-up">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <blockquote class="mil-center" data-swiper-parallax="-400" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="0.8">
                                                <svg width="50" height="32" viewBox="0 0 50 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="mil-mb-30 mil-up mil-accent">
                                                    <path d="M13.0425 9.59881C13.734 7.27646 15.0099 5.16456 16.7515 3.45982C17.0962 3.11455 17.2958 2.65336 17.31 2.16891C17.3243 1.68445 17.1523 1.2126 16.8285 0.848135L16.6225 0.619235C16.3552 0.313531 15.9908 0.106228 15.5887 0.0311485C15.1866 -0.0439312 14.7706 0.0176452 14.4085 0.205827C-0.299477 8.01918 -0.116489 18.6169 0.0295105 20.4165C0.0195105 20.6139 -0.000488281 20.8112 -0.000488281 21.0085C0.0518962 23.1543 0.724816 25.2405 1.93898 27.0214C3.15314 28.8023 4.85796 30.2037 6.85252 31.0604C8.84709 31.9171 11.0483 32.1935 13.1967 31.8569C15.3452 31.5203 17.3514 30.5848 18.9788 29.1606C20.6063 27.7364 21.7873 25.8829 22.3826 23.8185C22.9779 21.7541 22.9627 19.5648 22.3389 17.5086C21.715 15.4524 20.5085 13.615 18.8614 12.2129C17.2144 10.8108 15.1954 9.90246 13.0425 9.59487V9.59881Z" fill="#F27457" />
                                                    <path d="M40.2255 9.59881C40.9171 7.27648 42.193 5.16459 43.9345 3.45982C44.2793 3.11455 44.4788 2.65336 44.4931 2.16891C44.5074 1.68445 44.3353 1.2126 44.0115 0.848135L43.8055 0.619235C43.5382 0.313531 43.1738 0.106228 42.7717 0.0311485C42.3696 -0.0439312 41.9536 0.0176452 41.5915 0.205827C26.8835 8.01918 27.0665 18.6169 27.2115 20.4165C27.2015 20.6139 27.1815 20.8112 27.1815 21.0085C27.2332 23.1544 27.9055 25.241 29.1191 27.0224C30.3328 28.8038 32.0373 30.2057 34.0318 31.063C36.0262 31.9203 38.2274 32.1972 40.3761 31.8611C42.5248 31.525 44.5313 30.5899 46.1591 29.166C47.787 27.742 48.9684 25.8887 49.5641 23.8242C50.1599 21.7598 50.1451 19.5704 49.5215 17.514C48.8979 15.4576 47.6915 13.6199 46.0445 12.2176C44.3975 10.8152 42.3785 9.90659 40.2255 9.59881Z" fill="#F27457" />
                                                </svg>
                                                <p class="mil-text-l mil-mb-60 mil-up mil-light">Plax is not just a payments platform, it is a comprehensive solution. The global network, security and variety of options make Plax my number one option for all my quisque rutrum transactions. Aenean lost. Etiam ultricies is around.</p>
                                                <img src="{{asset('assets/img/faces/2.jpg')}}" alt="Customer" class="mil-mb-15 mil-up">
                                                <h5 class="mil-up mil-light">Bett Nilsen</h5>
                                            </blockquote>
                                        </div>
                                        <div class="swiper-slide">
                                            <blockquote class="mil-center" data-swiper-parallax="-400" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="0.8">
                                                <svg width="50" height="32" viewBox="0 0 50 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="mil-mb-30 mil-up mil-accent">
                                                    <path d="M13.0425 9.59881C13.734 7.27646 15.0099 5.16456 16.7515 3.45982C17.0962 3.11455 17.2958 2.65336 17.31 2.16891C17.3243 1.68445 17.1523 1.2126 16.8285 0.848135L16.6225 0.619235C16.3552 0.313531 15.9908 0.106228 15.5887 0.0311485C15.1866 -0.0439312 14.7706 0.0176452 14.4085 0.205827C-0.299477 8.01918 -0.116489 18.6169 0.0295105 20.4165C0.0195105 20.6139 -0.000488281 20.8112 -0.000488281 21.0085C0.0518962 23.1543 0.724816 25.2405 1.93898 27.0214C3.15314 28.8023 4.85796 30.2037 6.85252 31.0604C8.84709 31.9171 11.0483 32.1935 13.1967 31.8569C15.3452 31.5203 17.3514 30.5848 18.9788 29.1606C20.6063 27.7364 21.7873 25.8829 22.3826 23.8185C22.9779 21.7541 22.9627 19.5648 22.3389 17.5086C21.715 15.4524 20.5085 13.615 18.8614 12.2129C17.2144 10.8108 15.1954 9.90246 13.0425 9.59487V9.59881Z" fill="#03A6A6" />
                                                    <path d="M40.2255 9.59881C40.9171 7.27648 42.193 5.16459 43.9345 3.45982C44.2793 3.11455 44.4788 2.65336 44.4931 2.16891C44.5074 1.68445 44.3353 1.2126 44.0115 0.848135L43.8055 0.619235C43.5382 0.313531 43.1738 0.106228 42.7717 0.0311485C42.3696 -0.0439312 41.9536 0.0176452 41.5915 0.205827C26.8835 8.01918 27.0665 18.6169 27.2115 20.4165C27.2015 20.6139 27.1815 20.8112 27.1815 21.0085C27.2332 23.1544 27.9055 25.241 29.1191 27.0224C30.3328 28.8038 32.0373 30.2057 34.0318 31.063C36.0262 31.9203 38.2274 32.1972 40.3761 31.8611C42.5248 31.525 44.5313 30.5899 46.1591 29.166C47.787 27.742 48.9684 25.8887 49.5641 23.8242C50.1599 21.7598 50.1451 19.5704 49.5215 17.514C48.8979 15.4576 47.6915 13.6199 46.0445 12.2176C44.3975 10.8152 42.3785 9.90659 40.2255 9.59881Z" fill="#03A6A6" />
                                                </svg>
                                                <p class="mil-text-l mil-mb-60 mil-up mil-light">Plax is not just a payments platform, it is a comprehensive solution. The global network, security and variety of options make Plax my number one option for all my quisque rutrum transactions. Aenean lost. Etiam ultricies is around.</p>
                                                <img src="{{asset('assets/img/faces/1.jpg')}}" alt="Customer" class="mil-mb-15 mil-up">
                                                <h5 class="mil-up mil-light">Karl Andreassen</h5>
                                            </blockquote>
                                        </div>
                                        <div class="swiper-slide">
                                            <blockquote class="mil-center" data-swiper-parallax="-400" data-swiper-parallax-opacity="0" data-swiper-parallax-scale="0.8">
                                                <svg width="50" height="32" viewBox="0 0 50 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="mil-mb-30 mil-up mil-accent">
                                                    <path d="M13.0425 9.59881C13.734 7.27646 15.0099 5.16456 16.7515 3.45982C17.0962 3.11455 17.2958 2.65336 17.31 2.16891C17.3243 1.68445 17.1523 1.2126 16.8285 0.848135L16.6225 0.619235C16.3552 0.313531 15.9908 0.106228 15.5887 0.0311485C15.1866 -0.0439312 14.7706 0.0176452 14.4085 0.205827C-0.299477 8.01918 -0.116489 18.6169 0.0295105 20.4165C0.0195105 20.6139 -0.000488281 20.8112 -0.000488281 21.0085C0.0518962 23.1543 0.724816 25.2405 1.93898 27.0214C3.15314 28.8023 4.85796 30.2037 6.85252 31.0604C8.84709 31.9171 11.0483 32.1935 13.1967 31.8569C15.3452 31.5203 17.3514 30.5848 18.9788 29.1606C20.6063 27.7364 21.7873 25.8829 22.3826 23.8185C22.9779 21.7541 22.9627 19.5648 22.3389 17.5086C21.715 15.4524 20.5085 13.615 18.8614 12.2129C17.2144 10.8108 15.1954 9.90246 13.0425 9.59487V9.59881Z" fill="#03A6A6" />
                                                    <path d="M40.2255 9.59881C40.9171 7.27648 42.193 5.16459 43.9345 3.45982C44.2793 3.11455 44.4788 2.65336 44.4931 2.16891C44.5074 1.68445 44.3353 1.2126 44.0115 0.848135L43.8055 0.619235C43.5382 0.313531 43.1738 0.106228 42.7717 0.0311485C42.3696 -0.0439312 41.9536 0.0176452 41.5915 0.205827C26.8835 8.01918 27.0665 18.6169 27.2115 20.4165C27.2015 20.6139 27.1815 20.8112 27.1815 21.0085C27.2332 23.1544 27.9055 25.241 29.1191 27.0224C30.3328 28.8038 32.0373 30.2057 34.0318 31.063C36.0262 31.9203 38.2274 32.1972 40.3761 31.8611C42.5248 31.525 44.5313 30.5899 46.1591 29.166C47.787 27.742 48.9684 25.8887 49.5641 23.8242C50.1599 21.7598 50.1451 19.5704 49.5215 17.514C48.8979 15.4576 47.6915 13.6199 46.0445 12.2176C44.3975 10.8152 42.3785 9.90659 40.2255 9.59881Z" fill="#03A6A6" />
                                                </svg>
                                                <p class="mil-text-l mil-mb-60 mil-up mil-light">Plax is not just a payments platform, it is a comprehensive solution. The global network, security and variety of options make Plax my number one option for all my quisque rutrum transactions. Aenean lost. Etiam ultricies is around.</p>
                                                <img src="{{asset('assets/img/faces/3.jpg')}}" alt="Customer" class="mil-mb-15 mil-up">
                                                <h5 class="mil-up mil-light">Rüdiger Karlsen</h5>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="mil-slider-nav-1">
                                        <div class="mil-testi-prev"></div>
                                        <div class="mil-testi-next"></div>
                                    </div>
                                </div>
                                <div class="mil-testi-pagination mil-up"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonials end -->

            <!-- brands -->
            <div class="mil-p-160-130">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 mil-mb-60">
                            <h2 class="mil-light mil-mb-30 mil-up">Unlimited Mobile Connectivity: Mobile Wallet Integrations</h2>
                            <p class="mil-text-l mil-pale-2 mil-up mil-mb-60">Explore how our key integrations with leading <br>mobile wallet apps can make your transactions <br>faster and more convenient than ever.</p>
                            <div class="mil-up"><a href="about.html" class="mil-btn mil-m mil-add-arrow">Learn More</a></div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-brand-card mil-mb-30 mil-up">
                                <img src="{{asset('assets/img/brands/1.svg')}}" alt="brand" class="mil-mb-30">
                                <h5 class="mil-light mil-light mil-mb-20">Amper Pay</h5>
                                <p class="mil-text-s mil-pale-2">Make fast and secure payments directly from your Amper device with the seamless integration of Plax and Amper Pay.</p>
                            </div>
                            <div class="mil-brand-card mil-mb-30 mil-up">
                                <img src="{{asset('assets/img/brands/2.svg')}}" alt="brand" class="mil-mb-30">
                                <h5 class="mil-light mil-light mil-mb-20">Yelii Pay</h5>
                                <p class="mil-text-s mil-pale-2">Pay with a touch using Yeli Pay and maintain full control of your transactions by integrating your Plax account.</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-brand-card mil-mb-30 mil-up">
                                <img src="{{asset('assets/img/brands/3.svg')}}" alt="brand" class="mil-mb-30">
                                <h5 class="mil-light mil-light mil-mb-20">Booster</h5>
                                <p class="mil-text-s mil-pale-2">Send money instantly and securely through Booster, integrating your Plax account for a frictionless financial experience.</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="mil-brand-card mil-mb-30 mil-up">
                                <img src="{{asset('assets/img/brands/4.svg')}}" alt="brand" class="mil-mb-30">
                                <h5 class="mil-light mil-light mil-mb-20">Amerill</h5>
                                <p class="mil-text-s mil-pale-2">Connect your Plax account with Amerill to simplify splitting expenses and quickly make payments between friends.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brands end -->

            <!-- call to action -->
            <div class="mil-cta mil-up mil-p-0-160">
                <div class="container">
                    <div class="mil-out-frame mil-image-2 mil-bg-2">
                        <div class="row justify-content-center align-items-center mil-p-160-0">
                            <div class="col-xl-7 mil-text-center">
                                <h2 class="mil-light mil-mb-30 mil-up">Experience Banking on the <br>Move with Plax APP</h2>
                                <p class="mil-text-l mil-light mil-mb-60 mil-up">Discover the convenience of banking from the palm of your hand and experience banking on the go quickly and securely.</p>
                                <div class="mil-buttons-frame mil-center mil-mb-60 mil-up">
                                    <a href="#." class="mil-btn mil-md">Download on App Store</a>
                                    <a href="#." class="mil-btn mil-border mil-md">on Google Play</a>
                                </div>
                            </div>
                            <div class="mil-illustration-absolute mil-type-3 mil-up">
                                <img src="{{asset('assets/img/home-4/5.png')}}" alt="illustration">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- call to action end -->

@endsection