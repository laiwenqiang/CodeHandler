<?php

require_once('workflows.php');
$wf = new Workflows();
$query = "{query}";

$github_url = 'https://github.com/laiwenqiang/';

if($query == 'git') {

	$image = 'github_top.png';

	$api = 'https://api.github.com/users/laiwenqiang/repos?sort=pushed';

	//由于GitHub的限制，需要添加User-Agent头
	$repos = $wf->request($api, array(CURLOPT_USERAGENT => ‘Awesome-laiwenqiang-App’));
	$repos = json_decode($repos);

	foreach($repos as $repo):
	 	$wf->result($github_url.$repo->name, $github_url.$repo->name, 'GitHub/'.$repo->name, $repo->description, $image, 'yes');
		$image = 'github.png';
	endforeach;
} else {
	$wf->result('', '', 'GitHub仓库', '正在获取，请稍候...', $image, 'no');
}


echo $wf->toxml();

?>
