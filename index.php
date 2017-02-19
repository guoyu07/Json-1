<?php
/*
  <#日期 = "2017-2-17">
  <#时间 = "20:53:50">
  <#人物 = "buff" >
  <#备注 = " ">
 */
require 'include/header.inc.php';

$json1 = '{"a":1}';
$en_js1 = json_decode($json1);
echo "<p><span class='red'>最普通的对象json</span> \$json1='{\"a\":1}'<br/>
    转换为php变量后===
 ";
print_r($en_js1);
$json2 = '[1]';
$en_js2 = json_decode($json2);
echo "<p><span class='red'>最普通的数组json</span> \$json1='[1]'<br/>
转换为php变量后===    
";
print_r($en_js2);
echo '<span class="purple">数组内貌似不能用关联数组,关联数组可以直接用对象来表示</span><br/>';
$json3 = '
{"buff鸽": {"员工": 
                {"buff": {"职务": "ceo","年龄": 22,"住址": "光明小区"},
                 "wuwei":{"职务": "cao","年龄":22,"住址": "红浪漫洗浴中心"}},
           "地址": "扬州市邗江路光明小区",
           "网址": {
            "官网": "www.buffge.com",
            "论坛": "bbs.buffge.com",
            "网站": "web.buffge.com",
            "游戏": "game.buffge.com"}}
}
';
$buffge = json_decode($json3);
echo "<span class='red'>大型json模板</span> \$json3=<br/>" . '
{"buff鸽": {"员工": <br/>
&emsp;&emsp;&emsp;&emsp;&emsp;{"buff": {"职务": "ceo","年龄": 22,"住址": "光明小区"},<br/>
&emsp;&emsp;&emsp;&emsp;&emsp;"wuwei":{"职务": "cao","年龄":22,"住址": "红浪漫洗浴中心"}},<br/>
&emsp;&emsp;&emsp;&emsp;&emsp;"地址": "扬州市邗江路光明小区",<br/>
&emsp;&emsp;&emsp;&emsp;&emsp;"网址": {<br/>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"官网": "www.buffge.com",<br/>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"论坛": "bbs.buffge.com",<br/>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"网站": "web.buffge.com",<br/>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"游戏": "game.buffge.com"}}<br/>
}<br/>
' . "<span class='red'>访问json中的数据格式</span><br/>
    访问buff鸽中的员工中的buff的住址属于 == 
    \$buffge->buff鸽->员工->buff->住址 :{$buffge->buff鸽->员工->buff->住址}<br/>
    访问buff鸽中的员工中的wuwei的职务属于 == 
    \$buffge->buff鸽->员工->wuwei->职务 :{$buffge->buff鸽->员工->wuwei->职务}<br/>
    访问buff鸽的地址 == \$buffge->buff鸽->地址 :{$buffge->buff鸽->地址}
    ";
echo "<p><span class='red'>语法</span>:<br/>
    逗号分隔,花括号保存对象,方括号保存数组
json的值可以是: <br/>   
数字（整数或浮点数）<br/>   
字符串（在双引号中）<br/>   
逻辑值（true 或 false）<br/>   
数组（在方括号中）<br/>   
对象（在花括号中）<br/>   
null<br/>   
    ";


require 'include/footer.inc.php';