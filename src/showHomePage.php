<?php

require_once('workflows.php');
$wf = new Workflows();
$github_url = 'https://github.com/laiwenqiang';
$csdn_url = 'http://blog.csdn.net/laiwenqiang?viewmode=list';

$wf->result( '', $github_url, 'GitHub', '显示仓库内容，再输入‘git\'', 'github_top.png', 'yes' );
$wf->result( '', $csdn_url, 'CSDN', '前往CSDN', 'csdn.png', 'yes' );

echo $wf->toxml();

?>
