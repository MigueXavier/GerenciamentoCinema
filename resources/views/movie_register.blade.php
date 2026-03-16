<div>
    <h1>Registrar Filme</h1>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="description">Descrição:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <div>
            <label for="release_date">Data de Lançamento:</label>
            <input type="date" id="release_date" name="release_date" required>
        </div>
        <div>
            <label for="director">Diretor:</label>
            <input type="text" id="director" name="director" required>
        </div>
        <div>
            <label for="genre">Gênero:</label>
            <input type="text" id="genre" name="genre" required>
        </div>
        <div>
            <label for="rating">Avaliação:</label>
            <input type="number" id="rating" name="rating" min="0" max="10" step="0.1" required>
        </div>
        <button type="submit">Registrar</button>
    </form>
</div>


<style>
    form {
        display: flex;
        flex-direction: column;
        max-width: 400px;
        margin: 0 auto;
    }

    form div {
        margin-bottom: 15px;
    }

    form label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    form input, form textarea {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }

    form button {
        padding: 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        cursor: pointer;
    }

    form button:hover {
        background-color: #0056b3;
    }
</style>