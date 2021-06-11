

    <header>
        <nav>
            <a href="{{action('HomeController@index')}}" @if($current == 'home') class="current" @endif>Home</a>
            <a href="{{action('OwnerController@index')}}"@if($current == 'owners') class="current" @endif>Directory</a>
            <a href="{{action('OwnerController@show_search_form')}}"@if($current == 'search') class="current" @endif>Search</a>
        </nav>
    </header>