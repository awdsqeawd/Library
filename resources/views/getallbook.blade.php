<!DOCTYPE html>
<html>
<head>
    <title>All Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-input {
            width: 200px;
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-button {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 300px;
            padding: 20px;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-details {
            font-size: 14px;
        }

        .card-label {
            font-weight: bold;
        }

        .card-value {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>All Books</h1>

        <div class="search-container">
            <input type="text" id="search-input" class="search-input" placeholder="Enter Book ID">
            <button id="search-button" class="search-button">Search</button>
        </div>

        <div class="card-container">
            @foreach ($books as $book)
            <div class="card">
                <h2 class="card-title">{{ $book->title }}</h2>
                <div class="card-details">
                    <p><span class="card-label">Author:</span> <span class="card-value">{{ $book->author }}</span></p>
                    <p><span class="card-label">Publisher:</span> <span class="card-value">{{ $book->publisher }}</span></p>
                    <p><span class="card-label">Publication Date:</span> <span class="card-value">{{ $book->publication_date }}</span></p>
                    <p><span class="card-label">ISBN:</span> <span class="card-value">{{ $book->isbn }}</span></p>
                    <p><span class="card-label">Price:</span> <span class="card-value">{{ $book->price }}</span></p>
                    <p><span class="card-label">Genre:</span> <span class="card-value">{{ implode(', ', $book->genre) }}</span></p>
                    <p><span class="card-label">Quantity:</span> <span class="card-value">{{ $book->quantity }}</span></p>
                </div>
            </div>
            @endforeach
        </div>

        <script>
            const searchButton = document.getElementById('search-button');
            const searchInput = document.getElementById('search-input');

            searchButton.addEventListener('click', () => {
                const bookId = searchInput.value;
                window.location.href = `/books/${bookId}`;
            });
        </script>
    </div>
</body>
</html>
