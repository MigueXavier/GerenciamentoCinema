<header id="movies-header">
    <h1>Filmes em Cartaz</h1>
    <button ><a href="{{ route('movies.create') }}">Registrar Filme</a></button>
</header>

<section id="movies-section">
@foreach ($movies as $movie)
    <div id="movie">
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        <h1>{{ $movie->title }}</h1>
        <p id='description'>{{ $movie->description }}</p>
        <div id="movie-info">
            <span>{{ $movie->director }}</span>
            <span>{{ $movie->release_date }}</span>
            <span>{{ $movie->genre }}</span>
            <span>{{ $movie->rating }}</span>
            <span>Ingressos Disponíveis: {{ $movie->available_tickets }}</span>
            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" id="delete" name="delete" >Deletar</button>
            </form>
            
           <button onclick="window.location.href='{{route('tickets.create', ['movie_id' => $movie->id])}}'">Garantir Ingresso</button>
         
        </div>
    </div>
@endforeach
</section>

<style>
    #movies-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #333;
        color: white;
        font-family: Arial, sans-serif;
    }
    #movies-header h1 {
        margin: 0;
    }
    #movies-header button {
        padding: 10px 20px;
        background-color: #ffb350;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    #movies-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }
    #movie {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
        max-width: 300px;
        height: auto;
    }


    #movie img {
        width: 200px;
        height: auto;
        margin-bottom: 20px;
    }

    #movie h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    #movie #description {
        font-size: 16px;
        text-align: center;
        margin-bottom: 20px;
    }

    #movie #movie-info {
        display: flex;
        justify-content: space-around;
        width: 100%;
    }

    #movie #movie-info span {
        font-size: 14px;
    }
    #get_ticket {
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    #get_ticket:hover {
        background-color: #218838;
    }
</style>