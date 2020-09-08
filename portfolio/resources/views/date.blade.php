<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>daet</title>
        <link rel="stylesheet" href="date.css" />
        <link rel="stylesheet" href="all.css" />
      </head>
    <body>
        <header>header</header>
            <main>
                <img src="date_back.jpg" title="date_back">
                <div class="date">
                    <P>ここにカレンダー</p>
                </div>
                <form action="/check" method="post" enctype="multipart/form-data">
                @csrf
                <input type="submit" value="next">
              </form>
            </main>
        <footer>footer</footer>
    </body>
</html>
