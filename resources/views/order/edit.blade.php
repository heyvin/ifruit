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
            <h1 class="h1 my4">Edit Order</h1>
            <form action-xhr="/order/update"
                  method="POST"
                  on="submit-success:AMP.navigateTo(url='/orders');
                      submit-error:AMP.setState({'appState':{
                        submitError: event.response['message']
                      }})"
            >
                <div class="h5 block mb1 regular">Customer Name</div>
                <div class="col col-12 h3 mb1">
                    {{ $order->name }}
                </div>
                <input type="hidden" name="order_id" value="{{ $order->id }}">
                <div class="h5 block mb1 regular">Security Key</div>
                <input type="password" name="pwd" class="col col-12 mb2">
                @foreach($fruits as $fruit)
                    <dl class="clearfix">
                        <dt class="col col-6 m0"><amp-img class="mb2" src="{{ $fruit->image }}" width="300" height="200" alt="" layout="responsive"></amp-img></dt>
                        <dd class="col col-6 pl1 m0 center">{{ $fruit['name'] }}</dd>
                        <dt class="col col-6 pl1 mb1">
                            <input type="text" name="quantity{{ $fruit['id'] }}" class="col col-12 h4 center" value="{{ $fruit['quantity'] }}">
                        </dt>
                    </dl>
                @endforeach
                <div class="col col-12 center">
                    <input type="submit" class="ampstart-btn inline-block ampstart-fullpage-hero-cta h5 m3 text-decoration-none" value="Update Order">
                </div>
                <div class="col col-12 center" [class]="appState.submitError == '' ? 'display-none col col-12 center' : 'col col-12 center'">
                    <span [text]="appState.submitError"></span>
                </div>
            </form>
        </article>
    </main>
@stop
