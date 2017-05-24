# 效果演示

在搜索框中输入：

1. code，显示CSDN和GitHub的个人主页。
2. 接着，再输入 空格 和 git，显示个人下的所有仓库。
3. 选择某个仓库，浏览器打开页面。

![](http://oqgq7175e.bkt.clouddn.com/2017-05-25%2001.25.42.gif)

# 创建workflow

点击Workflows，在坐下家找到``` + ```号，新建一个Blank Workflow。弹出窗口，填写信息。

![](http://oqgq7175e.bkt.clouddn.com/Snip20170524_11.png)



# 创建Script Filter

右击，Inputs -> Script Filter。

![](http://oqgq7175e.bkt.clouddn.com/Snip20170524_12.png)

with space 表示输入参数的时候需要空格。Language选择PHP。然后就可以在里面写脚本了。

脚本里有句代码比较特别一点：

``` php
$repos = $wf->request($api, array(CURLOPT_USERAGENT => ‘Awesome-laiwenqiang-App’));
```

因为GitHub的请求方法需要加入Use-Agent头，不然请求会被拒绝。

# 导入workflows.php

这个[文件](https://github.com/jdfwarrior/Workflows)是WorkFlow的帮助工具类，方便我们对数据的操作。我看了不少项目都是用的这个。

我们 右键项目名字 -> Open in Finder，打开文件夹，然后将这个workflows.php复制进去。还有项目中需要用到的图标也可以复制进去。

![](http://oqgq7175e.bkt.clouddn.com/Snip20170525_16.png)

# 创建Open URL

我们需要打开浏览器来程序将查询到的结果显示出来。

右键 -> Actions -> Open URL。

最后的样子如下图：

![](http://oqgq7175e.bkt.clouddn.com/Snip20170525_18.png)





