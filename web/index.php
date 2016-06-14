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
						<a href="https://github.com/tusur-coex/coex" class="git-url">
							<img width=100 height=100 src="images/Octocat.png"/>
							<span>GitHub.com</span>
						</a>
						<br/>
						<?php TR(CLONE_AND_BUILD); ?>
					</div>
					
				</div>
				<!-- 
				<div class="install-block flex">
					<div class="module-block">
						<img src="images/plugins/searchgitrepo.png" align="left" class="module-logo">
						<div class="module-name"><?php TR(COEX_SEARCH_GIT_REPO_MODULE); ?></div><br>
						<div class="module-description"><?php TR(COEX_SEARCH_GIT_REPO_MODULE_DESCRIPTION); ?></div><br>
						<div class="module-lastest-version">Latest version: v0.1.1</div>
					</div>
					<div class="module-download">
						Sources
						<ul>
							<li><a href="https://github.com/tusur-coex/coex-plugin-task-searchgitrepo/archive/v0.1.1.zip">https://github.com/tusur-coex/coex-plugin-task-searchgitrepo/archive/v0.1.1.zip</a></li>
							<li><a href="https://github.com/tusur-coex/coex-plugin-task-searchgitrepo/archive/v0.1.1.tar.gz">https://github.com/tusur-coex/coex-plugin-task-searchgitrepo/archive/v0.1.1.tar.gz</a></li>
						</ul>
						Windows
						<ul>
							<li><a href="setup-coex-searchgitrepo-ui-v0.1.1.exe">setup-coex-searchgitrepo-ui-v0.1.1.exe</a> - Application with UI</li>
							<li><a href="setup-coex-searchgitrepo-v0.1.1.exe">setup-coex-searchgitrepo-v0.1.1.exe</a> - Console Application</li>
							<li><a href="setup-coex-plugin-task-searchgitrepo-v0.1.1.exe">setup-coex-plugin-task-searchgitrepo-v0.1.1.exe</a> - Library</li>
						</ul>
						Ubuntu
						<ul>
							<li><a href="coex-searchgitrepo-ui-v0.1.1.deb">coex-searchgitrepo-ui-v0.1.1.deb</a> - Application with UI</li>
							<li><a href="coex-searchgitrepo-v0.1.1.deb">coex-searchgitrepo-v0.1.1.deb</a> - Console Application</li>
							<li><a href="coex-plugin-task-searchgitrepo-v0.1.1.deb">coex-plugin-task-searchgitrepo-v0.1.1.deb</a> - Library</li>
						</ul>
						Mac
						<ul>
							<li><a href="coex-searchgitrepo-ui-v0.1.1.img">coex-searchgitrepo-ui-v0.1.1.img</a> - Application with UI</li>
							<li><a href="coex-searchgitrepo-v0.1.1.img">coex-searchgitrepo-v0.1.1.img</a> - Console Application</li>
							<li><a href="coex-plugin-task-searchgitrepo-v0.1.1.img">coex-plugin-task-searchgitrepo-v0.1.1.img</a> - Library</li>
						</ul>
					</div>
				</div>
				-->
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
