@include('layouts.header')

    <div class="container" style="margin-top:150px">
        <div class="row">
            @if (Route::has('login'))
            @auth
            <!-- Search Form -->
            <form id="query-form" method="post" action="{{route('search.store')}}">
                @csrf

                <input type="text" name="query" placeholder="Search">
                <button type="submit">Search</button>


            </form>
            <br />
            <br />
            @else
            @endauth
            @endif

            <br />
            <div class="col-md-12 head-title">
                <!-- Fetch Gif Images from Api -->
                <h3>The best <b>GIFs</b> for explore.</h3>
            </div>
            <br />
            @foreach($json->data as $a)

            <div class="col-md-4">
                <img src="{{$a->images->original->url}}" style="width:100%;height:300px;margin-bottom:15px;">
            </div>

            @endforeach

        </div>
    </div>

</body>
@include('layouts.footer')


</html>