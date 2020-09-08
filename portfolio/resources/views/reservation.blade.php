<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>Reservation</title>
        <link rel="stylesheet" href="reservation.css" />
    </head>
    <body>
        <header>header</header>

        <input id="menu" type="checkbox" />
        <label for="menu" class="back"></label>

        <aside>
            <label for="menu" class="close">×</label>
            <nav>
                <ul>
                    <form action="/date" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach ($owners as $owner)
                        <p>
                            名前<br>
                            <input type="text" name="owner[name]" size="20">
                        </p>
                        <p>
                            携帯電話番号<br>
                            <input type="text" name="owner[tel]" size="20">
                        </p>
                        <p>
                            車名<br>
                            <input type="text" name="owner[car_name]" size="20">
                        </p>
                        <p>
                            車番<br>
                            <input type="text" name="owner[car_number]" size="20">
                        </p>
                        <p>
                            <input type="submit" value="next">
                            <input type="reset" value="リセット">
                        </p>
                    @endforeach
                    </form>
                </ul>
            </nav>
        </aside>

        <main>
            <ul id="menu">
                <li>
                    <a href="#"><label for="menu" class="open">洗車</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open">点検</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open">車検</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open">その他</label></a>
                </li>
            </ul>
        </main>

        <footer>footer</footer>
    </body>
</html>
