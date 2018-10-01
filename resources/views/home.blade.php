@extends('master')

@section('content')
    <!-- Start Navbar -->
    <header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4 ">
        <div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger  pr2  ">☰
        </div>
    </header>

    <!-- Start Sidebar -->
    @include('partials.sidebar')
    <!-- End Sidebar -->
    <!-- End Navbar -->

    <div class="center">

        <!-- Start Fullpage Hero -->
        <figure class="ampstart-image-fullpage-hero m0 relative mb4">
            <amp-img width="404" height="720" alt="Welcome to Beck &amp; Galo Modern American Cuisine" layout="responsive" src="/img/themes_2/hero.jpg" media="(max-width: 415px)"></amp-img>
            <amp-img height="720" alt="Welcome to Beck &amp; Galo Modern American Cuisine" layout="fixed-height" src="../img/themes_2/hero.jpg" media="(min-width: 416px)"></amp-img>
            <figcaption class="absolute top-0 right-0 bottom-0 left-0">
                <header class="p3">
                    <h1 class="ampstart-fullpage-hero-heading mb3">
              <span class="ampstart-fullpage-hero-heading-text">
                <span class="h6 block caps">Welcome to</span><span class="h1 block bold my1">iFruit Services</span><span class="h6 block caps">by Bao Anh</span>
              </span>
                    </h1>

                </header>
                <footer class="absolute left-0 right-0 bottom-10p">
                    <a class="ampstart-btn inline-block ampstart-fullpage-hero-cta h5 m3 text-decoration-none" href="/orders">Orders</a>
                    <a class="ampstart-btn inline-block ampstart-fullpage-hero-cta h5 m3 text-decoration-none" href="/shopping">Today Shopping List</a>
                </footer>
            </figcaption>
        </figure>
        <!-- End Fullpage Hero -->
    </div>

    <main id="content" role="main">
        <article class="px3">
            <h2 id="story" class="my4 theme2-anchored">Our Story</h2>
            <p class="mb1 ampstart-dropcap">Let's face the truth. There's no actual story behind this.</p>
            <p class="mb1">Nothing personal. It's just a business after all.</p>
            <div class="my4 mxn3 center">

                <!-- Start Image with heading -->
                <figure class="ampstart-image-with-heading  m0 relative mb4">
                    <amp-img src="../img/themes_2/bar.jpg" width="600" height="450" alt="Happy Hour Monday through Friday 5 PM" layout="responsive"></amp-img>
                    <figcaption class="absolute right-0 bottom-0 left-0">
                        <header class="ampstart-image-heading px2 py2 line-height-4"><h2 class="h1 bold">Delivery Hour</h2><p class="h4">Mon-Fri 2PM</p></header>
                    </figcaption>
                </figure>
                <!-- End Image with heading -->

            </div>
            <h2 id="locations" class="my4 theme2-anchored">Locations</h2>
            <div class="col col-12 sm-col-6 mb4">
                <h3 class="mb1">Kuala Lumpur</h3>
                <p class="mb0">Northpoint Residences<br>Mid Valley City, Kuala Lumpur<br></p>
            </div>
            <div class="col col-12 sm-col-6 mb4">
                <h3 class="mb1">Ho Chi Minh City</h3>
                <p class="mb0">Coming Soon<br>(Just kidding, not in a million years)<br></p>
            </div>
            <h2 id="gallery" class="my4 theme2-anchored">Photo Gallery</h2>
            <amp-image-lightbox id="lightbox" layout="nodisplay"></amp-image-lightbox>
            <amp-carousel class="my2 mxn3" height="200" layout="fixed-height" type="carousel">
                <amp-img src="../img/themes_2/hero.jpg" width="300" height="200" alt="Dining area" on="tap:lightbox" role="button" tabindex="0"></amp-img>
                <amp-img src="../img/themes_2/bar.jpg" width="267" height="200" alt="Bar area" on="tap:lightbox" role="button" tabindex="0"></amp-img>
                <amp-img src="../img/themes_2/waffles.jpg" width="300" height="200" alt="Caramel Banana Waffles" on="tap:lightbox" role="button" tabindex="0"></amp-img>
                <amp-img src="../img/themes_2/soup.jpg" width="300" height="200" alt="Pumpkin Soup" on="tap:lightbox" role="button" tabindex="0"></amp-img>
                <amp-img src="../img/themes_2/steak.jpg" width="300" height="200" alt="Steak" on="tap:lightbox" role="button" tabindex="0"></amp-img>
                <amp-img src="../img/themes_2/pie.jpg" width="300" height="200" alt="Key Lime Pie" on="tap:lightbox" role="button" tabindex="0"></amp-img>
            </amp-carousel>
        </article>
    </main>
@stop
