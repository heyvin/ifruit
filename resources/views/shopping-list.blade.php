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
            <h2 class="h1">Shopping List</h2>
            <dl class="clearfix">
                @foreach($fruits as $fruit)
                    @if ($fruit->total_quantity > 0)
                        <dt class="col col-10 h3">{{ $fruit->name }}</dt>
                        <dd class="col col-2 m0 mb1 self-center right-align">{{ $fruit->total_quantity }}</dd>
                        <dd class="col col-12 h5 m0 mb1"><b>Price:</b> RM {{ $fruit->price }}</dd>
                    @endif
                @endforeach
                <dd class="col col-12 h3 m0 mb1 self-center right-align"><b>Total:</b> RM {{ $totalPrice }}</dd>
            </dl>
        </article>
    </main>
@stop
