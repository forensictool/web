<?php



$ditribute = array(
	array(
		"name" => "coex",
		"version" => "v0.2.*",
		"description" => "Full package of coex-software",
		"sources" => "Not builded"
	),
	array(
		"name" => "coex-cli",
		"version" => "v0.2.*",
		"description" => "The Console Application for run all tasks",
		"sources" => "https://github.com/tusur-coex/coex-core"
	),
	array(
		"name" => "libcoex-plugin-detect-ubuntu",
		"description" => "The plugin for detect Ubuntu OS",
		"version" => "v0.2.*",
		"sources" => "https://github.com/tusur-coex/coex-plugin-detect-ubuntu"
	),
	array(
		"name" => "libcoex-plugin-task-skype",
		"description" => "Collect a list of contacts, users correspondence, information about calls and chats.",
		"version" => "v0.2.*",
		"sources" => "https://github.com/tusur-coex/coex-plugin-task-skype"
	),
	array(
		"name" => "libcoex-plugin-task-icq",
		"description" => "Collect a list of user messenger contacts.",
		"version" => "v0.2.*",
		"sources" => "https://github.com/tusur-coex/coex-plugin-task-icq"
	),
	array(
		"name" => "libcoex-plugin-task-searchgitrepo",
		"description" => "Plugin for search git repository in file system",
		"version" => "v0.2.*",
		"sources" => "https://github.com/tusur-coex/coex-plugin-task-searchgitrepo"
	),
);

function addpackage($info){
	global $ditribute;
	foreach($ditribute as $i => $packageinfo){
		if($packageinfo['name'] == $info['name']){
			$platform = $info['platform'];
			$architecture = $info['architecture'];
			if(!isset($ditribute[$i][$platform])){
				$ditribute[$i][$platform] = array();
			}
			if(!isset($ditribute[$i][$platform][$architecture])){
				$ditribute[$i][$platform][$architecture] = array();
			}
			$ditribute[$i][$platform][$architecture][] = array(
				'filesize' => $info['filesize'],
				'path' => $info['path'],
				'filename' => $info['filename'],
			);
		}
	}
}


function searchpackageinformation($dir){
	$files = scandir($dir); 
	foreach($files as $i => $name){
		if($name == "." | $name == ".."){
			continue;
		}
		$relativepath = $dir."/".$name;
		if(is_dir($relativepath)){
			searchpackageinformation($relativepath);
		}
		
		// linux
		if(preg_match('/^.*\/(.*)\/(.*)\/(.*)-(\d+)\.(\d+)\.(\d+)_(.*)\.deb$/', $relativepath, $match)){
			$info = array(
				'platform' => $match[1],
				'architecture' => $match[2],
				'name' => $match[3],
				'version_major' => $match[4],
				'version_minor' => $match[5],
				'version_build' => $match[6],
				'filesize' => ceil(filesize($relativepath)/1024)."K",
				'path' => $relativepath,
				'filename' => $name
			);
			addpackage($info);
		}
	}
}

searchpackageinformation("distribute");

foreach($ditribute as $i => $packageinfo){
	echo '<div class="install-block">';
	echo '<div class="module-name">'.$packageinfo['name'].' ('.$packageinfo['version'].')</div>';
	echo '<div class="module-description"><i>'.$packageinfo['description'].'</i></div>';
	echo '<div class="module-download">';
	
	if(isset($packageinfo['ubuntu'])){
		if(isset($packageinfo['ubuntu']['amd64'])){
			echo 'Linux (Ubuntu amd64):<ul>';
			foreach($packageinfo['ubuntu']['amd64'] as $i0 => $link0 ){
				echo '<li><a href="'.$link0['path'].'">'.$link0['filename'].'</a> ('.$link0['filesize'].')</li>';
			}
			echo '</ul>';
		}
	}
	if(isset($packageinfo['sources'])){
		echo 'Sources:';
		echo '<ul><li><a target="_blank" href="'.$packageinfo['sources'].'">'.$packageinfo['sources'].'</a></li></ul>';
	}
	echo '</div>';
	echo '</div>';
}
