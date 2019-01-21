    <!--        HTML        -->

<!DOCTYPE HTML>
<html>

<head>
    <title>Обратная связь</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
    <style>
        body{
            background-image:url("labirint.h1n.ru/images/bg.jpg");
        }
        h3:nth-child(1){
            color:green;
        }
        h3:nth-child(2){
            color:red;
        }
    </style>
</head>

<body class="is-loading">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <a href="/index.html" class="logo">Лабиринт</a>
        </header>

        <!-- Nav -->
        <nav id="nav">
            <ul class="links">
                <li><a href="/index.html">Лабиринт</a></li>
                <li><a href="/news/news.html">Новости Лабиринта</a></li>
                <li><a href="/team.html">Команда</a></li>
                <li><a href="/turnir.html">Турниры</a></li>
                <li><a href="/online.html">Онлайн-Викторины</a></li>
                <li class="action"><a href="#">Обратная связь</a></li>
            </ul>
            <ul class="icons">
				<li><a href="https://vk.com/labirint4836164024" target="_blank" class="icon fa-vk"><span class="label">Вк</span></a></li>
				<li><a href="http://strategy48.ru" target="_blank" class="icon fa-chrome"><span class="label">Сайт стратегии</span></a></li>
				<li><a href="mailto:azarnoy@mail.ru" target="_blank" class="icon fa-envelope"><span class="label">E-mail</span></a></li>
			</ul>
        </nav>

        <!-- Main -->
        <div id="main">
            <header class="major">
               <?php $name=$_POST[name];
               if ($name=='') $name='Аноним';
               if (mail("$_POST[email]", "$_POST[name]", "$_POST[message]")) {
                    echo "<h3>$name,ваше сообщение успешно отправлено</h3>";
                } else {
                    echo "<h3>$name, ваше сообщение не отправлено</h3>";
                } ?>
                <ul class="actions">
					<li><a href="/index.html" class="button big">Назад</a></li>
				</ul>
            </header>
        </div>




        <!-- Copyright -->
        <div id="copyright">
            <ul>
                <li>Created by &copy;Sergey Pinchuk</li>
                <li>Design by Sergey Pinchuk</li>
            </ul>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>