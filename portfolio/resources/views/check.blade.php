<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>check</title>
        <link rel="stylesheet" href="checkn.css" />
        <link rel="stylesheet" href="all.css" />
    </head>
    <body>
        <header>header</header>
        <main>
            <p>{{ $date }}</p>
            <p>{{ $owner }}</p>
            <form action="/complete" method="post">
                @csrf
                <input type="hidden" name="date_start" value="{{ $date }}" id="date_start" name="date_start">
                <input type="hidden" name="owner" value="{{ $owner }}">
                <input type="submit" value="OK">
            </form>
        </main>
        <footer>footer</footer>
    </body>
</html>
