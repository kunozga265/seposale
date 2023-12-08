<x-guest-layout>
    <!-- ================ HEADER-TITLE ================ -->
    <section class="s-header-title">
        <div class="container">
            <h1>Contact Us</h1>
            <ul class="breadcrambs">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!-- ============== HEADER-TITLE END ============== -->

    <!--=================== S-CONTACTS ===================-->
    <section class="s-contacts page-contacts">
        <div class="container s-anim">
            <h2 class="title">Let us hear from you</h2>
            <form id='contactform' action="https://html.rovadex.com/html-creto/assets/php/contact.php" name="contactform">
                <ul class="form-cover">
                    <li class="inp-name"><input id="name" type="text" name="your-name" placeholder="Name"></li>
                    <li class="inp-phone"><input id="phone" type="tel" name="your-phone" placeholder="Phone"></li>
                    <li class="inp-email"><input id="email" type="email" name="your-email" placeholder="E-mail"></li>
                    <li class="inp-text"><textarea id="comments" name="your-text" placeholder="Message"></textarea></li>
                </ul>
                <div class="checkbox-wrap">
                    <div class="checkbox-cover">
                        <input type="checkbox">
                        <p>By using this form you agree with the storage and handling of your data by this website.</p>
                    </div>
                </div>
                <div class="btn-form-cover">
                    <button id="#submit" type="submit" class="btn"><span>submit comment</span></button>
                </div>
            </form>
            <div id="message"></div>
        </div>
    </section>
    <!--================= S-CONTACTS END =================-->

    <!--================ CONTACTS-BLOCK ================-->
    <section class="s-contacts-block" style="margin-top: 0">
        <div class="container">
            <div class="row contacts-block">
                <div class="col-12 col-md-4">
                    <div class="contact-block-item">
                        <div class="contact-block-left">
                            <img src="assets/img/cont-icon-1.svg" alt="img">
                            <h6>need help</h6>
                        </div>
                        <div class="contact-block-right">
                            <ul>
                                <li><a href="tel:18004886040">+265 984 86 00 98</a></li>
                                <li><a href="tel:18005784090">+265 888 69 99 77</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="contact-block-item">
                        <div class="contact-block-left">
                            <img src="assets/img/cont-icon-2.svg" alt="img">
                            <h6>questions</h6>
                        </div>
                        <div class="contact-block-right">
                            <ul>
                                <li><a href="mailto:seposale@gmail.com">seposale@gmail.com</a></li>
{{--                                <li><a href="mailto:help@gmail.com">help@gmail.com</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="contact-block-item">
                        <div class="contact-block-left">
                            <img src="assets/img/cont-icon-3.svg" alt="img">
                            <h6>address</h6>
                        </div>
                        <div class="contact-block-right">
                            <ul>
                                <li><a class="item-scroll" href="https://maps.app.goo.gl/yvr76De7SaZw7qM79" target="_blank">House 869, Area 47 Sector 4, Lilongwe, Malawi, 20556</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============== CONTACTS-BLOCK END ==============-->

   {{-- <!--===================== S-MAP =====================-->
    <section class="s-map">
        <div id="map" class="cont-map google-map"></div>
    </section>
    <!--=================== S-MAP END ===================-->--}}


</x-guest-layout>
