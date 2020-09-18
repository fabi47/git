<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>menu</title>
        <link rel="stylesheet" href="menu.css" />
        <link rel="stylesheet" href="all.css" />
    </head>
    <body>
        <header>header</header>
        <input id="menu" type="checkbox" />
        <label for="menu" class="back"></label>

        <aside>
            <label for="menu" class="close">×</label>
            <form action="/date" method="post" enctype="multipart/form-data">
                @csrf
                <nav class="owner">
                    <ul>
                        <p>
                            名前<br>
                            <input type="text" name="name" value="" size="20" required>
                        </p>
                        <p>
                            携帯電話番号<br>
                            <input type="text" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="090-1234-5678"name="tel" value="" size="20" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" placeholder="090-1234-5678" required>
                        </p>
                        <p>
                            車名<br>
                            <input type="text" name="car_name" value="" size="20" required>
                        </p>
                        <p>
                            車番<br>
                            <input type="text" name="car_number" value="" size="20" pattern="[0-9]{1-4}" placeholder="1234" required>
                        </p>
                        <p>
                            <input type="submit" value="next">
                            <input type="reset" value="リセット">
                        </p>
                    </ul>
                </nav>
            </aside>
        <main>
            <ul id="menu">
                <li>
                    <a href="#"><label for="menu" class="open"><input type="radio" name="menutype" value="洗車">洗車</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open"><input type="radio" name="menutype" value="点検">点検</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open"><input type="radio" name="menutype" value="車検">車検</label></a>
                </li>
                <li>
                    <a href="#"><label for="menu" class="open"><input type="radio" name="menutype" value="その他">その他</label></a>
                </li>
            </ul>
            </form>
        </main>
        <footer>footer</footer>
    </body>
</html>
