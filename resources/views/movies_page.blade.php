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
            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" id="delete" name="delete" >Deletar</button>
            </form>
            <button id="get_ticket" name="get_ticket" >Garantir Ingresso</button>
        </div>
    </div>
@endforeach


<style>
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