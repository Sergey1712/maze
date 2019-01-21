    <!--        HTML        -->

    <!DOCTYPE HTML>
<html>

<head>
    <title>Результаты викторины №2</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <noscript>
		<link rel="stylesheet" href="/assets/css/noscript.css" />
	</noscript>
    <link href="/css/reset.css" rel="stylesheet">
    <link href="/css/mobile.css" rel="stylesheet">
    <link href="/assets/css/main.css" rel="stylesheet">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/noscript.css" rel="stylesheet">
    <link href="/css/form-test.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
						<li class="active"><a href="/online.html">Онлайн-Викторины</a></li>
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
            <? 
                session_start(); 
                echo "Вы обновили эту страницу ".$_SESSION['Username']++." раз. ";
            ?>
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
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/jquery.scrollex.min.js"></script>
    <script src="/assets/js/jquery.scrolly.min.js"></script>
    <script src="/assets/js/skel.min.js"></script>
    <script src="/assets/js/util.js"></script>
    <script src="/assets/js/main.js"></script>

</body>

</html>