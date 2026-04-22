
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
           
        </div>

        <form action="{{ route('tickets.store') }}" method="POST" style="display: inline;">
                @csrf
                <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}"> 
                <button id="get_ticket" name="get_ticket" href="{{ route('tickets.index') }}">Garantir Ingresso</button>
        </form>
</div>
    

    <style>
    #movie {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background-color: #f0f0f0;
        border-radius: 10px;
        width: 300px;
    }
    #movie img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    #movie h1 {
        margin: 10px 0;
        font-size: 24px;
    }
    #movie #description {
        font-size: 16px;
        margin-bottom: 10px;
    }
    #movie #movie-info {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    #movie #movie-info span {
        margin: 5px 0;
    }
    #movie #movie-info form {
        margin-top: 10px;
    }
    #movie form button {
        padding: 10px 20px;
        background-color: #ffb350;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    </style>