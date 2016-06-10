<?php include("lang.php"); ?>
<html lang="<?php echo $lang; ?>">
<head>
	<title><?php TR(HEADER_TITLE); ?></title>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="css/main.css?ver=1"/>
	<link rel="stylesheet" href="owl.carousel.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="owl.carousel.min.js"></script>
</head>
<body class="site-body">
	<main class="site-main">
		<header class="site-header">
			<nav class="site-menu">
				<a href="#capa" class="site-part"><?php TR(MENU_CAPABILITIES); ?></a>
				<a href="#install" class="site-part"><?php TR(MENU_INSTALL); ?></a>
				<a href="#consist" class="site-part"><?php TR(MENU_ARCHITETURE); ?></a>
				<a href="#about" class="site-part"><?php TR(MENU_ABOUT); ?></a>
				<select class="combobox-lang" onchange="window.location.href = '?lang=' + this.value;">
					<?php
						foreach($langs as $l => $v){
							echo '<option value="'.$l.'" '.($lang == $l ? 'selected=true' : '').'>'.$v.'</option>';
						}
					?>
				</select>
			</nav>
		</header>
		
		<section id="info">
			<div class="sect-block">
				
				<h2><?php TR(COEX_WHAT); ?></h2>
				<div class="description"><?php TR(COEX_DESCRIPTION); ?></div>
			</div>
		</section>
		
		<a href="?" class="logo"></a>
		
		<section id="capa">
			<div class="sect-block">
				<h2><?php TR(MENU_CAPABILITIES); ?></h2>
				<div class="description"><?php TR(CAPABILITIES_INFO); ?>
				</div>
				<div class="modules flex">
					<div class="module">
						<img src="icon/chrome.png" class="icon">
						<h3>Chrome модуль</h3>
						<div class="decr-mod">Собирает базу паролей, журнал посещаемости, список расширений и настройки браузера.</div>
					</div>
					<div class="module">
						<img src="icon/images.png" class="icon">
						<h3>ImageVerifier модуль</h3>
						<div class="decr-mod">Осуществляет поиск изображений и проверяет их на возможноне соответствие стегоконтейнеру.</div>
					</div>
					<div class="module">
						<img src="icon/search.png" class="icon">
						<h3>SearchProgram модуль</h3>
						<div class="decr-mod">Ищет следы установленных и удалённых программ в исследуемой системе.</div>
					</div>
					<div class="module">
						<img src="icon/outlook.png" class="icon">
						<h3>Outlook модуль</h3>
						<div class="decr-mod">Находит и собирает переписку из почтового клиента Outlook Express.</div>
					</div>
					<div class="module">
						<img src="icon/pidgin.png" class="icon">
						<h3>Pidgin модуль</h3>
						<div class="decr-mod">Собирает переписку пользователя и список его контактов, журналы мессенджера.</div>
					</div>
					<div class="module">
						<img src="icon/icq.png" class="icon">
						<h3>ICQ модуль</h3>
						<div class="decr-mod">Собирает список контактов пользователя мессенджера.</div>
					</div>
					<div class="module">
						<img src="icon/sys.png" class="icon">
						<h3>SystemLog модуль</h3>
						<div class="decr-mod">Собирает журналы операционной системы.</div>
					</div>
					<div class="module">
						<img src="icon/fire.png" class="icon">
						<h3>FireFox модуль</h3>
						<div class="decr-mod">Собирает журнал посещений одноименного браузера.</div>
					</div>
					<div class="module">
						<img src="icon/arch.png" class="icon">
						<h3>Archive модуль</h3>
						<div class="decr-mod">Осуществляет поиск архивов и выводит информацию о них.</div>
					</div>
				</div>			
			</div>
		</section>
		
		<section id="install">
			<div class="sect-block">
				<h2><?php TR(MENU_INSTALL); ?></h2>
				<div class="install-block flex">
					<div class="block">
						<a href="http://rep.coex.su/install.sh" class="download-button">
							<span class="download-icon"></span>
							<div>Download <br/> (Install.sh v0.1)</div>
						</a>
						<br/>
						<?php TR(DOWNLOAD_AND_RUN); ?>
					</div>
					<div class="block">
						<a href="https://github.com/tusur-coex/" class="git-url">
							<img width=100 height=100 src="images/Octocat.png"/>
							<span>GitHub.com</span>
						</a>
						<br/>
						<?php TR(CLONE_AND_BUILD); ?>
					</div>
				</div>
			</div>
		</section>
		
		<section id="consist">
			<div class="sect-block">
				<h2><?php TR(ARCHITETURE_OF_SYSTEM); ?></h2>
				<div class="big-table">
					<div class="bft_coex">Coex</div>
					<div class="bft_system">Система плагинов</div>
					<div class="bft_analys">Анализ данных</div>
					
					<div class="bft_module">Модуль 1</div>
					<div class="bft_module">Модуль 2</div>
					<div class="bft_module">Модуль 3</div>
					<div class="bft_module">...</div>
					<div class="bft_module">Модуль n</div>					
				</div>
				<div class="description">Модульность всей системы позволяет оперативно настраивать ее под необходимые задачи. Каждый модуль работает независимо от других, результат работы сводит в единый отчет по окончанию работы системы.</div>
			</div>
		</section>
        <section id="news">
            <div class="news-block">
                <h2><?php TR(NEWS_OF_PROJECT); ?></h2>
                <div class="news-list">
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 2, width: "800", height: "400"}, 109777900);
</script>
                </div>
            </div>
        </section>
	</main>
	<footer class="site-footer" id="about">
		<div class="sect-block">
			<div class="flex">
				<div class="block">
					<h4>Контакты</h4>
					<div class="credits">
						Для связи с нами, воспользуйтесь средствами, предложенными ниже.
						<br/>
						<a href="https://vk.com/coex_su">VK</a> <a href="mailto:spam@coex.su">E-Mail</a>
					</div>
				</div>
				<div class="block">
					<h4>О нас</h4>
					<div class="credits">
						Сделано на кафедре КИБЭВС в ТУСУР группой ГПО.
					</div>
				</div>
				<div class="block">
					<h4>Отказ от отвественности</h4>
					<div class="credits">
						Используемые медиафайлы были взяты из сети Интернет, права данные файлы принадлежат их законным владельцам.
					</div>
				</div>
			</div>
			<div class="copyrights flex">
				<a href="">Лицензионное соглашение</a>
				<span>© 2016, keva</span>
			</div>
		</div>
	</footer>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	// плавное перемещение страницы к нужному блоку
	$("nav a").click(function () {
		elementClick = $(this).attr("href");
		destination = $(elementClick).offset().top;
		$("body,html").animate({scrollTop: destination }, 800);
	});
});
</script>
</body>
</html>
