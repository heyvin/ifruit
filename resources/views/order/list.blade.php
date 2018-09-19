@extends('master')

@section('content')
    <!-- Start Navbar -->
    <header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4 ">
        <div role="button" aria-label="open sidebar" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger  pr2  ">☰
        </div>
        <div class="ampstart-headerbar-title mx-auto ">iFruit Services</div>
    </header>

    <!-- Start Sidebar -->
    @include('partials.sidebar')
    <!-- End Sidebar -->
    <!-- End Navbar -->
    <main id="content" role="main">
        <article class="px3 py4">
            <div class="col col-12 center">
                <a class="ampstart-btn inline-block ampstart-fullpage-hero-cta h5 m3 text-decoration-none" href="/order/create">Make Order</a>
            </div>
            <h2 class="h1">Details</h2>
            <dl class="clearfix">
                @foreach($orders as $order)
                    <dt class="col col-12 h2 mt2 mb1 center"><b><a class="text-decoration-none" href="/order/{{ $order->id }}/edit">{{ $order->name }}</a></b></dt>
                    @foreach($order->fruits as $fruit)
                        @if ($fruit->pivot->quantity > 0)
                            <dt class="col col-10 h3">{{ $fruit->name }}</dt>
                            <dd class="col col-2 m0 mb1 self-center right-align">{{ $fruit->pivot->quantity }}</dd>
                            <dd class="col col-12 h5 m0 mb1">Mon, Tue, Wed, Thu, Fri</dd>
                        @endif
                    @endforeach
                @endforeach
            </dl>
        </article>
    </main>
@stop
