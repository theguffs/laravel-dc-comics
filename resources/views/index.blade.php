<h1>Laravel DC Comics</h1>

<ul>
    @foreach ($comics as $comic )
    <li>
        <a href="{{ route("comics.show", $comic->id)}}">
            {{$comic->title}}
        </a>
    </li>
    @endforeach
</ul>

<a href="{{route("comic.create")}}"> Crea nuovo fumetto</a> 