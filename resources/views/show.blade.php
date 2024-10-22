<!--titolo-->
<h1>{{ $comic->title }}</h1>
<!--descrizione-->
<p>{{ $comic->description}}</p>
<!--immagine-->
<img src="{{ $comic->thumb}}" alt="{{ $comic->title }}">
<!--prezzo-->
<p>Prezzo: {{$comic->price}}</p>
<!--serie-->
<p>Serie: {{$comic->series}}</p>
<!--prezzo-->
<p>Tipo: {{$comic->type}}</p>