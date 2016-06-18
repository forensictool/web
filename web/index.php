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
				<a href="#consist" class="site-part"><?php TR(MENU_ARCHITECTURE); ?></a>
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
						<img src="images/plugins/chrome.png" class="icon">
						<h3><?php TR(COEX_CHROME_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_CHROME_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/imagesverifier.png" class="icon">
						<h3><?php TR(COEX_IMAGEVERIFIER_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_IMAGEVERIFIER_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/searchprogram.png" class="icon">
						<h3><?php TR(COEX_SEARCHPROGRAM_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_SEARCHPROGRAM_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/outlook.png" class="icon">
						<h3><?php TR(COEX_OUTLOOK_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_OUTLOOK_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/pidgin.png" class="icon">
						<h3><?php TR(COEX_PIDGIN_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_PIDGIN_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/icq.png" class="icon">
						<h3><?php TR(COEX_ICQ_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_ICQ_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/systemlog.png" class="icon">
						<h3><?php TR(COEX_SYSTEMLOG_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_SYSTEMLOG_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/firefox.png" class="icon">
						<h3><?php TR(COEX_FIREFOX_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_FIREFOX_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/searcharchivies.png" class="icon">
						<h3><?php TR(COEX_ARCHIVE_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_ARCHIVE_MODULE_DESCRIPTION); ?></div>
					</div>					
					<div class="module">
						<img src="images/plugins/skype.png" class="icon">
						<h3><?php TR(COEX_SKYPE_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_SKYPE_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/thunderbird.png" class="icon">
						<h3><?php TR(COEX_THUNDERBIRD_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_THUNDERBIRD_MODULE_DESCRIPTION); ?></div>
					</div>					
					<div class="module">
						<img src="images/plugins/viber.png" class="icon">
						<h3><?php TR(COEX_VIBER_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_VIBER_MODULE_DESCRIPTION); ?></div>
					</div>
					<div class="module">
						<img src="images/plugins/searchgitrepo.png" class="icon">
						<h3><?php TR(COEX_SEARCH_GIT_REPO_MODULE); ?></h3>
						<div class="decr-mod"><?php TR(COEX_SEARCH_GIT_REPO_MODULE_DESCRIPTION); ?></div>
						<div><center>Download</center></div>
					</div>
				</div>			
			</div>
		</section>
		
		<section id="install">
			<div class="sect-block">
				<h2><?php TR(MENU_INSTALL); ?></h2>
				<div class="install-block">
					<div class="module-name"><?php TR(DOWNLOAD_AND_RUN); ?></div>
					<div class="module-download">
						<ul>
							<li><a target="_blank" href="distribute/install.sh">install.sh</a></li>
						</ul>
					</div>
				</div>
				<div class="install-block">
					<div class="module-name"><?php TR(CLONE_AND_BUILD); ?></div>
					<div class="module-download">
						<ul>
							<li><a target="_blank" href="https://github.com/tusur-coex/coex">https://github.com/tusur-coex/coex</a></li>
						</ul>
					</div>
				</div>
				<div class="install-block">
					<div class="module-name">coex-cli (v0.2.*)</div>
					<div class="module-description"><i>The Application for run all tasks</i></div>
					<div class="module-download">
						Linux (Ubuntu):
						<ul>
							<li><a target="_blank" href="distribute/coex-cli-0.2.0_amd64.deb">coex-cli-0.2.0_amd64.deb</a> (16K)</li>
						</ul>
						Sources:
						<ul>
							<li><a target="_blank" href="https://github.com/tusur-coex/coex-core">https://github.com/tusur-coex/coex-core</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section id="consist">
			<div class="sect-block">
				<h2><?php TR(ARCHITECTURE_OF_SYSTEM); ?></h2>
				<div class="big-table">
					<div class="bft_coex">Coex</div>
					<div class="bft_system"><?php TR(ARCHITECTURE_SYSTEM_OF_PLUGINS); ?></div>
					<div class="bft_analys"><?php TR(ARCHITECTURE_DATA_ANALISIS); ?></div>
					<div class="bft_module"><?php TR(ARCHITECTURE_MODUL_N); ?> 1</div>
					<div class="bft_module"><?php TR(ARCHITECTURE_MODUL_N); ?> 2</div>
					<div class="bft_module"><?php TR(ARCHITECTURE_MODUL_N); ?> 3</div>
					<div class="bft_module">...</div>
					<div class="bft_module"><?php TR(ARCHITECTURE_MODUL_N); ?> n</div>					
				</div>
				<div class="description">  <?php TR(ARCHITECTURE_DESCRIPTION); ?> </div>
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
					<h4><?php TR(CONTACTS); ?></h4>
					<div class="credits">
						<?php TR(CONTACTS_DESCRIPTION); ?>
						<br/>
						<a href="https://vk.com/coex_su">VK</a> <a href="mailto:fox.user.3@gmail.com">E-Mail</a>
					</div>
				</div>
				<div class="block">
					<h4><?php TR(ABOUT_US); ?></h4>
					<div class="credits">
						<?php TR(MADE_IN); ?>
					</div>
				</div>
				<div class="block">
					<h4><?php TR(DENIAL_OF_RESPONSIBILITY); ?></h4>
					<div class="credits">
						<?php TR(DENIAL_OF_RESPONSIBILITY_DESCRIPTION); ?>
					</div>
				</div>
			</div>
			<div class="copyrights flex">
				<a href=""> <?php TR(LICENSE_AGREEMENT); ?></a>
				<span>© 2012-2016, keva</span>
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
