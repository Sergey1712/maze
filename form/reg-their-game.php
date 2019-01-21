    <!--        HTML        -->

    <!DOCTYPE HTML>
<html>

<head>
    <title>Регистрация на VI Кубок Липецкой области по Спортивной Своей
                                игре среди школьников</title>
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
    <style>
        .attention {
            background-color: tomato;
            border-left: 7px #dc3d21 solid;
            color: white;
            padding: 1%;
            margin-left: 3%;
            text-align: left !important;
            width: 75%;
        }
        .success {
            background-color: green;
            border-left: 7px green solid;
            color: white;
            padding: 1%;
            margin-left: 3%;
            text-align: center !important;
            width: 75%;
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
               <?php
                date_default_timezone_set('Europe/Moscow');
                $link = mysqli_connect('localhost', 'lilhnru_labirint', 'Apox51s42wR7FDK8', 'lilhnru_labirint');//host,user,password,name_db
                mysql_query("Their_game'cp1251'");
                mysql_select_db('Their_game', $link);
                ?>



                <?php
                $date = date('Y-m-d H:i:s');
                $platform = strstr(strstr($_SERVER['HTTP_USER_AGENT'], '('), ' Apple', true);
                $sql = mysqli_query($link, "INSERT INTO `Their_game` (`ФИО`, `ОУ`, `Класс`, `Команда`, `Email`, `Date`, `UserAgent`) 
                VALUES ('{$_POST[name]}', '{$_POST[school]}', '{$_POST[clas]}', '{$_POST[team]}', '{$_POST[email]}', '{$date}','{$platform}')");
                if ($sql) {
                    echo "<h3 class=\"success\">$_POST[name], ваша заявка принята!</h3>";
                } else {
                    echo "<h3 class=\"attention\">$_POST[name], произошла ошибка, попробуйте заполнить заявку ещё раз!</h3>";
                }
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