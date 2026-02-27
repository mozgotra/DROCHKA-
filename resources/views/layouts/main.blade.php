<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite(['resources/css/style.scss','resources/js/app.js'])
</head>

<body>
    <header class="header">
        <div>
            <img src="../../img/lypa.png" alt="анлак, непрогруз">
            <input type="text" placeholder="Поиск по сайту">
        </div>

    </header>
    <main>
        <!-- {{$slot}} -->
    </main>
    <footer>
        подвал
    </footer>
</body>

</html>