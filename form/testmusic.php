    <!--        HTML        -->

    <!DOCTYPE HTML>
<html>

<head>
    <title>Результаты "Музыкальной" викторины</title>
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
               <?php
                date_default_timezone_set('Europe/Moscow');
                $link = mysqli_connect('localhost', 'lilhnru_labirint', 'Apox51s42wR7FDK8', 'lilhnru_labirint');//host,user,password,name_db
                mysql_query("AnswersMusic'cp1251'");
                mysql_select_db('AnswersMusic', $link);
                ?>
                <?php
                $platform = strstr(strstr($_SERVER['HTTP_USER_AGENT'], '('), ' Apple', true);
                $ok = 0;
                $username = $_POST[name];
                if ($username == '') $username = 'Аноним';
                $answer = array('0', 'c', 'd', 'a', 'b', 'c', 'd', 'b', 'b', 'c', 'a');
                $u = array('0', $_POST[q1], $_POST[q2], $_POST[q3], $_POST[q4], $_POST[q5], $_POST[q6], $_POST[q7], $_POST[q8], $_POST[q9], $_POST[q10]);
                for ($x = 1; $x <= 10; $x++) {
                    if ($u[$x] == $answer[$x]) {
                        $u[$x] = 'OK';
                        $ok++;
                    } else {
                        $u[$x] = '---';
                    }
                }
                $date = date('Y-m-d H:i:s');
                $percent = round($ok / 10 * 100);
                $sql = mysqli_query($link, "INSERT INTO `AnswersMusic` (`Username`, `Question1`, `Question2`,`Question3`,`Question4`,`Question5`,`Question6`,`Question7`,`Question8`,`Question9`,`Question10`, `Result`, `Date`, `UserAgent`) 
                VALUES ('{$username}', '{$u[1]}', '{$u[2]}', '{$u[3]}', '{$u[4]}', '{$u[5]}', '{$u[6]}', '{$u[7]}', '{$u[8]}', '{$u[9]}', '{$u[10]}', '{$percent}', '{$date}','{$platform}')");

                ?>
                <?php echo "<h3>$username, вы правильно ответили на $percent% вопросов</h3>";
                if ($percent < 70) {
                    echo '<a href="https://labirint.h1n.ru/quiz/test1.html">Попробуйте пройти тест ещё раз</a>';
                } else {
                    echo '<a href="https://labirint.h1n.ru/quiz/test2.html">Пройдите следующую викторину</a>';
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