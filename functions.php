<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
	define("Leaf_Version", "2.8");
	echo '<p style="font-size:16px;text-align:center;">感谢您使用Leaf主题 :<font color="#38b48b">Leaf</font><font color="#F40"> '.Leaf_Version.'</font> ![<a href="http://www.ihewro.com/archives/378" target="_blank">帮助与反馈</a>]</p>';
	
	//两个实用的功能
    $indexsetup = new Typecho_Widget_Helper_Form_Element_Checkbox('indexsetup', 
    array('IndexImage' => _t('首页图片摇动效果'),
    'webssl' => _t('多说https数据加密（为https站点设置,有问题<a href="http://www.ihewro.com/archives/378">反馈</a>）')),
    array('IndexImage'), _t('两个实用的功能'));
    $form->addInput($indexsetup->multiMode());
	
    //网站ICO图标地址
	$ICOlink = new Typecho_Widget_Helper_Form_Element_Text('$ICOlink', NULL, '/usr/uploads/siyu.ico', _t('网站ICO图标地址'),_t('输入一个ICO图标链接,带"http://"'));
	$form->addInput($ICOlink);
	
	//Chrome浏览器颜色标签
	$ChromeColor = new Typecho_Widget_Helper_Form_Element_Text('$ChromeColor', NULL, '#303030', _t('Chrome颜色标签'),_t('输入一个颜色代码'));
	$form->addInput($ChromeColor);
	
	//首页大标题
	$IndexName = new Typecho_Widget_Helper_Form_Element_Text('IndexName', NULL, '{ 私 語 }', _t('首页大标题'));
	$form->addInput($IndexName);
	
	//首页小标题
	$IndexIntroduction = new Typecho_Widget_Helper_Form_Element_Text('IndexIntroduction', NULL, '< I N T H E F L I G H T / >', _t('首页小标题'));
	$form->addInput($IndexIntroduction);
	
	//首页图标-链接
	$homeButtonLinkA = new Typecho_Widget_Helper_Form_Element_Text('homeButtonLinkA', NULL, 'https://github.com/UnHugo', _t('输入首页第一个图标所指向的链接 // 带"http://"'), _t('输入一个链接,带"http://" 留空则不显示按钮'));
	$form->addInput($homeButtonLinkA);
	$homeButtonLinkB = new Typecho_Widget_Helper_Form_Element_Text('homeButtonLinkB', NULL, 'http://codepen.io/O0Hugo/', _t('输入首页第二个图标所指向的链接 // 带"http://"'), _t('输入一个链接,带"http://" 留空则不显示按钮'));
	$form->addInput($homeButtonLinkB);
	$homeButtonLinkC = new Typecho_Widget_Helper_Form_Element_Text('homeButtonLinkC', NULL, 'http://mooow.pw/archive.html', _t('输入首页第三个图标所指向的链接 // 带"http://"'), _t('输入一个链接,带"http://" 留空则不显示按钮'));
	$form->addInput($homeButtonLinkC);
	$homeButtonLinkD = new Typecho_Widget_Helper_Form_Element_Text('homeButtonLinkD', NULL, 'http://music.163.com/#/user/home?id=32457859', _t('输入首页第四个图标所指向的链接 // 带"http://"'), _t('输入一个链接,带"http://" 留空则不显示按钮'));
	$form->addInput($homeButtonLinkD);
	
	//首页图标
	$homeButtonFaA = new Typecho_Widget_Helper_Form_Element_Text('homeButtonFaA', NULL, 'github-alt', _t('输入首页第一个图标的 Font-Awesome 代码 // 不带"fa-"'), _t('输入一个图标代码,不带"fa-"'));
	$form->addInput($homeButtonFaA);
	$homeButtonFaB = new Typecho_Widget_Helper_Form_Element_Text('homeButtonFaB', NULL, 'codepen', _t('输入首页第二个图标的 Font-Awesome 代码 // 不带"fa-"'), _t('输入一个图标代码,不带"fa-"'));
	$form->addInput($homeButtonFaB);
	$homeButtonFaC = new Typecho_Widget_Helper_Form_Element_Text('homeButtonFaC', NULL, 'book', _t('输入首页第三个图标的 Font-Awesome 代码 // 不带"fa-"'), _t('输入一个图标代码,不带"fa-"'));
	$form->addInput($homeButtonFaC);
	$homeButtonFaD = new Typecho_Widget_Helper_Form_Element_Text('homeButtonFaD', NULL, 'music', _t('输入首页第四个图标的 Font-Awesome 代码 // 不带"fa-"'), _t('输入一个图标代码,不带"fa-"'));
	$form->addInput($homeButtonFaD);
	
	//首页图片
	$indeximage = new Typecho_Widget_Helper_Form_Element_Text('indeximage', NULL, 'http://mooow.pw/usr/uploads/wallhaven-478124.jpg', _t('输入图片地址'), _t('在这里输入首页大图地址，建议不超过500k,否则加载时间太长影响显示效果'));
	$form->addInput($indeximage);
	
	//配置parallax插件的摇动效果程度
    $parallaxeffect = new Typecho_Widget_Helper_Form_Element_Text('parallaxeffect',NULL, '0.2','配置首页图片摇动程度', '填写前请保证上面的选项被勾中。<br><font color="#F40">注意：</font>最大为1,0为静止效果，请填写一个0~1之间的两位小数');
    $parallaxeffect->input->setAttribute('class', 'mini');
    $form->addInput($parallaxeffect);
		
	//配置多说
    $duoshuosn = new Typecho_Widget_Helper_Form_Element_Text('duoshuosn',NULL, 'mooowblog','配置多说short_name', '填写你的多说评论的short_name，使博客的评论系统可用,不填则不启用多说，包括不加载多说js与css<br><font color="#F40">注意：</font>这里的多说css都是主题内置好的，所以多说自定义css里的css最好清空，否则会有不美观的现象发生.');
    $duoshuosn->input->setAttribute('class', 'mini');
    $form->addInput($duoshuosn);
	
	//配置多说博主标志
    $duoshuoid = new Typecho_Widget_Helper_Form_Element_Text('duoshuoid',NULL, '8499149','配置多说博主标志的user-id', '<font color="#F40">注意：</font>配置多说博主标志的user-id，<a target="_blank" href="http://duoshuo.com/settings/avatar/">点击这个地址</a> 点击你的名字，出现的网页的最后数字就是你的ID');
    $duoshuoid->input->setAttribute('class', 'mini');
    $form->addInput($duoshuoid);
	
	//多说风格切换
    $duoshuoStyleswitch = new Typecho_Widget_Helper_Form_Element_Radio('duoshuoStyleswitch', 
        array(
            '0' => _t('Disqus风格 &emsp;'),
            '1' => _t('轻简约风格 &emsp;')
        ),
        //Default choose
        '0',_t('多说风格切换'),_t("两款风格都比较简约，disqus风格看起来要稍微厚重一点")
    );
    $form->addInput($duoshuoStyleswitch->multiMode());	
	
	//底部友链HTML代码
	$links = new Typecho_Widget_Helper_Form_Element_Textarea('links', NULL,'<a href="http://mooow.pw/" class="link" target="_blank">示例1</a><i>/</i>
<a href="https://baidu.com/" class="link" target="_blank">示例2</a><i>/</i>', _t('友链样式的HTML代码'), _t('填入你的HTML代码'));
	$form->addInput($links);
	
	//播放器音乐
	$musiclist = new Typecho_Widget_Helper_Form_Element_Textarea('musiclist', NULL,'{title:"In The Flght",artist:"fishmans",mp3:"http://mooow.pw/usr/uploads/fishmans - In The Flight.mp3",cover:"http://mooow.pw/usr/uploads/in-the-flight-cover.jpg"},
{title:"kawaii",artist:"epileptic kid",mp3:"http://mooow.pw/usr/uploads/epileptic kid - kawaii.mp3",cover:"http://mooow.pw/usr/uploads/music/cover-kawaii.jpg"},
{title:"Ｒｅｍｅｍｂｅｒｉｎｇ Ｕｓ",artist:"CATVLYST",mp3:"http://mooow.pw/usr/uploads/CATVLYST - Ｒｅｍｅｍｂｅｒｉｎｇ Ｕｓ.mp3",cover:"http://mooow.pw/usr/uploads/cover-Ｒｅｍｅｍｂｅｒｉｎｇ Ｕｓ.jpg"},', _t('音乐播放器的音乐列表'), _t('根据已给的格式填入你的HTML代码'));
	$form->addInput($musiclist);

	//pjax-send
    $pjaxSendAction = new Typecho_Widget_Helper_Form_Element_Textarea('pjaxSendAction', NULL, NULL, _t('PJAX:SEND Action'), _t('启用 PJAX 选项后, 你的第三方插件可能会在 PJAX 中失效。在这种情况下, 你可能需要重新注册事件或做其他处理。<br>在这里写入你需要进行处理的 JS 代码。并确保正确,否则可能会导致后续 JS 代码无法执行。<br>这些 JS 代码会在 PJAX 发送网络请求(PJAX 触发事件 pjax:send)的时候执行。'));
    $form->addInput($pjaxSendAction);
    
	//pjax-complete
    $pjaxCompleteAction = new Typecho_Widget_Helper_Form_Element_Textarea('pjaxCompleteAction', NULL, NULL, _t('PJAX:COMPLETE Action'), _t('启用 PJAX 选项后, 你的第三方插件可能会在 PJAX 中失效。在这种情况下, 你可能需要重新注册事件或做其他处理。<br>在这里写入你需要进行处理的 JS 代码。并确保正确,否则可能会导致后续 JS 代码无法执行。<br>这些 JS 代码会在 PJAX 完成页面加载并替换(PJAX 触发事件 pjax:complete)的时候执行。<br>绝大多数的处理可能应该在这里执行。你需要根据实际情况判断。'));
    $form->addInput($pjaxCompleteAction);
	
}/*后台设置结束*/

// pjax判断

function is_pjax(){   
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];   
}
