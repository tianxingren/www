<?php

const S_NOAPI = 'API当前已关闭';
const S_NOTCONFIGURED = '匿名版使用前请先配置config.php！';					//If config.php does not exist
const S_LOCKDOWN = '版面目前已关闭，请稍后查看';				//Lockdown
const S_HOME = '主页';											//Forwards to home page
const S_ADMIN = '管理';										//Forwards to Management Panel
const S_RETURN = '返回';										//Returns to image board
const S_POSTING = '发送模式: 回应';								//Prints message in red bar atop the reply screen
const S_NOTAGS = '可使用html标签。';								//Prints message on Management Board
const S_NEWTHREAD = '新串';									//Header for new thread form
const S_NAME = '姓名';											//Describes name field
const S_CAPCODE = 'Capcode';										//Describes capcode field (admin)
const S_REPLYTO = '回应';										//Describes reply to field (admin)
const S_EMAIL = 'E-mail';										//Describes e-mail field
const S_SUBJECT = '标题';										//Describes subject field
const S_SUBMIT = '发送';										//Describes submit button
const S_COMMENT = '内容';										//Describes comment field
const S_OEKAKI = 'Oekaki';
const S_OEKAKILOAD = '点击加载oekaki（请务必要保存！）';
const S_UPLOADFILE = '文件';										//Describes file field
const S_DELPASS = '密码';										//Describes password field
const S_DELEXPL = '（密码用于删除文件）';							//Prints explanation for password box (to the right)
const S_RULES = '<ul><li>支持的文件格式为: GIF, JPG, PNG</li>
<li>最大文件大小为 '.MAX_KB.' KB.</li>
<li>大于 '.MAX_W.'x'.MAX_H.' 像素将显示缩略图</li></ul>';				//Prints rules under posting section
const S_RULES_SWF = '<ul><li>支持的文件格式为: GIF, JPG, PNG, SWF</li>
<li>最大文件大小为 '.MAX_KB.' KB.</li>
<li>大于 '.MAX_W.'x'.MAX_H.' 像素将显示缩略图</li></ul>';				//Prints rules under posting section
const S_RULES_WEBM = '<ul><li>支持的文件格式为: GIF, JPG, PNG, WEBM</li>
<li>最大文件大小为 '.MAX_KB.' KB.</li>
<li>大于 '.MAX_W.'x'.MAX_H.' 像素将显示缩略图</li></ul>';				//Prints rules under posting section
const S_RULES_BOTH = '<ul><li>支持的文件格式为: GIF, JPG, PNG, SWF, WEBM</li>
<li>最大文件大小为 '.MAX_KB.' KB.</li>
<li>大于 '.MAX_W.'x'.MAX_H.' 像素将显示缩略图</li></ul>';				//Prints rules under posting section
const S_SWF_DISABLED = "错误：已关闭上传swf文件功能。";
const S_WEBM_DISABLED = "错误：已关闭上传webm文件功能。";
const S_REPORTERR = '错误：找不到该回应。';							//Returns error when a reply (res) cannot be found
const S_THUMB = '已显示缩略图，点击图片查看源文件。';					//Prints instructions for viewing real source
const S_PICNAME = '文件: ';										//Prints text before upload name/link
const S_REPLY = '回应';										//Prints text for reply link
const S_ABBR = ' 串已折叠，点击 回应 查看完整的串 ';							//Prints text to be shown when replies are hidden
const S_REPDEL = '删除串 ';									//Prints text next to S_DELPICONLY (left)
const S_DELPICONLY = '仅文件';									//Prints text next to checkbox for file deletion (right)
const S_DELKEY = '密码 ';										//Prints text next to password field for deletion (left)
const S_DELETE = '删除';										//Defines deletion button's name
const S_PREV = '向前';										//Defines previous button
const S_NEXT = '向后';											//Defines next button
const S_FOOT = '- GazouBBS + <a href="http://www.2chan.net/" target="_blank">futaba</a> + <a href="http://www.1chan.net/futallaby/" target="_blank">futallaby</a> + <a href="https://github.com/knarka/fikaba" target="_blank">fikaba</a> -'; //Prints footer (leave these credits)
const S_UPFAIL = '错误：上传失败。';								//Returns error for failed upload (reason: unknown?)
const S_NOREC = '错误：找不到记录。';								//Returns error when record cannot be found
const S_SAMEPIC = '错误：检测到重复的md5码。';						//Returns error when a md5 checksum dupe is detected
const S_TOOBIG = '图片过大，请压缩后上传。';
const S_TOOBIGORNONE = '无图片或图片过大。';
const S_NODETECT = '无法检测图片格式（可能不支持此图片格式）';
const S_UPGOOD = ' 已上传！<br /><br />';						//Defines message to be displayed when file is successfully uploaded
const S_STRREF = '错误：服务器拒绝字符。';								//Returns error when a string is refused
const S_UNJUST = '错误：非法的回复（识别为机器人）。';								//Returns error on an unjust POST - prevents floodbots or ways not using POST method?
const S_NOPIC = '错误：没有选择文件。';								//Returns error for no file selected and override unchecked
const S_NOTEXT = '错误：没有输入内容。';								//Returns error for no text entered in to subject/comment
const S_MANAGEMENT = '管理员: ';									//Defines prefix for Manager Post name
const S_DELETION = '删除';										//Prints deletion message with quotes?
const S_TOOLONG = '错误：内容过长。';								//Returns error for too many characters in a given field
const S_UNUSUAL = '错误：回应异常。';								//Returns error for too long $resto or $url (should never happen)
const S_BADHOST = '错误：IP已被封禁。';								//Returns error for banned host ($badip string)
const S_PROXY80 = '错误：检测到代理，端口:80。';							//Returns error for proxy detection on port 80
const S_PROXY8080 = '错误：检测到代理，端口:8080。';							//Returns error for proxy detection on port 8080
const S_SUN = '周日';											//Defines abbreviation used for "Sunday"
const S_MON = '周一';											//Defines abbreviation used for "Monday"
const S_TUE = '周二';											//Defines abbreviation used for "Tuesday"
const S_WED = '周三';											//Defines abbreviation used for "Wednesday"
const S_THU = '周四';											//Defines abbreviation used for "Thursday"
const S_FRI = '周五';											//Defines abbreviation used for "Friday"
const S_SAT = '周六';											//Defines abbreviation used for "Saturday"
const S_ANONAME = '匿名';										//Defines what to print if there is no text entered in the name field
const S_ANOTEXT = '无内容';										//Defines what to print if there is no text entered in the comment field
const S_ANOTITLE = '无标题';									//Defines what to print if there is no text entered into subject field
const S_ANOFILE = '未知文件名';
const S_RENZOKU = '错误：检测到洪水攻击，内容已丢弃。';						//Returns error for $sec/post spam filter
const S_RENZOKU2 = '错误：检测到洪水攻击，文件已丢失。';						//Returns error for $sec/upload spam filter
const S_RENZOKU3 = '错误：检测到洪水攻击。';								//Returns error for flood? (don't know the specifics)
const S_DUPE = '错误：重复的文件。';						//Returns error for a duped file (same upload name or same tim/time)
const S_NOTHREADERR = '错误：该串不存在。';					//Returns error when a non-existent thread is accessed
const S_SCRCHANGE = '发送成功，重新加载';									//Defines message to be displayed when post is successful									//
const S_BADDELPASS = '错误：密码错误。';							//Returns error for wrong password (when user tries to delete file)
const S_WRONGPASS = '错误：管理密码错误。';						//Returns error for wrong password (when trying to access Manager modes)
const S_MANALOGGEDIN = '你现在已经登录';
const S_RETURNS = '返回';										//Returns to HTML file instead of PHP--thus no log/SQLDB update occurs
const S_LOGUPD = '重建';										//Updates the log/SQLDB by accessing the PHP file
const S_MANAMODE = '管理模式';									//Prints heading on top of Manager page
const S_LOGOUT = '推出登录';										//Logout button in management panel
const S_MANAREPDEL = '删除栏';									//Defines Management Panel button--allows the user to view the management panel (overview of all posts)
const S_MANABAN = '封禁栏';										//Defines Manager Ban button
const S_MANAPOST = '管理员发送';									//Defines Manager Post button--allows the user to post using HTML code in the comment box
const S_MANAACCS = '账户管理';								//Defines button for adding/removing manager accoutns
const S_MANASUB = '发送';										//Defines name for submit button in Manager Mode
const S_ITDELETES = '删除';										//Defines for deletion button in Management Panel
const S_MDONLYPIC = '仅文件';									//Sets whether or not to delete only file, or entire post/thread
const S_MDTABLE1 = '<th>删除？</th><th>串 No.</th><th>时间</th><th>标题</th>';			//Explains field names for Management Panel (Delete?->Subject)
const S_MDTABLE2 = '<th>姓名</th><th>IP</th><th>内容</th><th>Host</th><th>大小<br />(Bytes)</th><th>md5</th><th>回应 #</th><th>Timestamp (s)</th><th>Timestamp (ms)</th>';	//Explains names for Management Panel (Name->md5)
const S_RESET = '重置';										//Sets name for field reset button (global)
const S_IMGSPACEUSAGE = '已使用空间: ';								//Prints space used KB by the board under Management Panel
const S_SQLCONF = 'MySQL连接失败';								//MySQL connection failure
const S_SQLDBSF = '数据库错误，请检查 SQL 设置<br />';						//Database select failure
const S_TCREATE = "正在建立表!<br />\n";								//Creating table
const S_FCREATE = "正在建立文件!<br />\n";								//Creating table
const S_TCREATEF = '无法建立表!<br />';							//Table creation failed
const S_SQLFAIL = '严重sql错误!<br />';								//SQL Failure
const S_BANRENZOKU = '错误：你已被封禁，点击 查看 查看封禁细节。 <a href="?mode=banned">查看</a>.';	//Error shown to banned user when they try to post
const S_BANNEDMESSAGE = '你已被封禁!';
const S_NOTBANNED = '你没有被封禁。 IP: ';
const S_BANTIME = '你被封禁: ';
const S_BANEXPIRE = '你的封禁解除时间: ';
const S_BANSUCCESS = '用户已封禁';
const S_UNBANSUCCESS = '用户已解封';
const S_MANABANIP = 'IP或串 no.: ';
const S_MANABANEXP = '解封时间（天）: ';
const S_MANABANPUBMSG = '公开封禁原因 (仅串封禁): ';
const S_MANABANPRIVMSG = '私密封禁原因: ';
const S_MANARMP = '删除串? ';
const S_MANARMALLP = '删除该IP所有串? ';
const S_MANAUNBAN = '解封而非封禁';
const S_BANEXPERROR = '请选择封禁时间';
const S_NOSUCHPOST = '你试图封禁的串不存在';
const S_BANEXPIRED = '你的封禁已解除';
const S_BANNEDMSG = '该用户因此串被封禁';							//Default public message for bans
const S_CATALOG = "查看模式: 概括";
const S_CATALOGBUTTON = "概括";
const S_NOPERMISSION = '你没有执行此命令的权限。';			// text showed when illegally trying to access some part of the management panel
const S_ACCCREATED = '创建账户成功!';
const S_ACCDEL = '权限：删除串 ';
const S_ACCBAN = '权限：封禁用户 ';
const S_ACCCAP = '权限：使用capcode发串 ';
const S_ACCACC = '权限：建立新用户 ';
const S_VERSION = ' 版本 ';
