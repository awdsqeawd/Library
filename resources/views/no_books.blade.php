<!-- no_books.blade.php -->

<html>
<head>
    <title>No Books Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .message {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .emoji {
            font-size: 50px;
            margin-bottom: 20px;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
            <span class="emoji">📚</span>
            <p class="message">Oops! No books found.</p>
            <p>Try searching with different criteria or add new books to the collection.</p>
            <button class="button">Add New Book</button>
        </div>
    </div>
</body>
</html>
