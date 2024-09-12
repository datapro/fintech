@extends('layouts.main')
@section('content')

<!-- content -->
<div id="smooth-content">

    <!-- banner -->
    <div class="mil-banner mil-banner-inner mil-dissolve">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8">
                    <div class="mil-banner-text mil-text-center">
                        <div class="mil-text-m mil-mb-20">Contact us</div>
                        <h1 class="mil-mb-60">Connect with Us: We are Here to Help You</h1>
                        <ul class="mil-breadcrumbs mil-center">
                            <li><a href="index-2.html">Home</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- contact -->
    <div class="mil-blog-list mil-p-0-160">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mil-mb-30">
                                <input class="mil-input mil-up" type="text" placeholder="Name" name="name">
                            </div>
                            <div class="col-md-6 mil-mb-30">
                                <input class="mil-input mil-up" type="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-xl-12 mil-mb-30">
                                <input class="mil-input mil-up" type="tel" placeholder="Telephone number" name="tel">
                            </div>
                            <div class="col-xl-12 mil-mb-30 ">
                                <textarea cols="30" rows="10" class="mil-up" placeholder="Message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="mil-checkbox-frame mil-mb-30 mil-up">
                            <div class="mil-checkbox">
                                <input type="checkbox" id="checkbox-1" name="checkmark" checked>
                                <label for="checkbox-1"></label>
                            </div>
                            <p class="mil-text-xs mil-soft">I agree that the data submitted, collected and stored *</p>
                        </div>
                        <div class="mil-up">
                            <button type="submit" class="mil-btn mil-m">Send Message</button>
                        </div>
                    </form>
                    <div class="alert-success" style="display: none;"><h5>Thanks, your message is sent successfully.</h5></div>
                    <div class="mil-p-160-0">
                        <h5 class="mil-mb-30 mil-up">We are available on the following channels:</h5>
                        <p class="mil-text-m mil-soft mil-mb-10 mil-up">Address:   27AD Adebayo Road, Ado-Ekiti, Ekiti State</p>
                        <p class="mil-text-m mil-soft mil-mb-10 mil-up">Telephone: +234 (703) 244-6095</p>
                        {{-- <p class="mil-text-m mil-soft mil-mb-10 mil-up">Fax: +001 (808) 555-0112</p> --}}
                        <p class="mil-text-m mil-soft mil-up">Email: datapro2014@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact end -->
    
    <!-- call to action -->
    {{-- <div class="mil-cta mil-up">
        <div class="container">
            <div class="mil-out-frame mil-p-160-160" style="background-image: url(img/home-3/5.png)">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-7 mil-sm-text-center">
                        <h2 class="mil-light mil-mb-30 mil-up">Discover the freedom <br>of Total Financial Control</h2>
                        <p class="mil-text-m mil-mb-60 mil-dark-soft mil-up">Join Plax and take the first step towards a more <br> balanced and hassle-free financial life.</p>
                        <div class="mil-buttons-frame mil-up">
                            <a href="#." class="mil-btn mil-md">App Store</a>
                            <a href="#." class="mil-btn mil-border mil-md">Google Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- call to action end -->


@endsection