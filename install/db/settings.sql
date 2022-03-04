-- --------------------------------------------------------


TRUNCATE `aws_category`;
INSERT INTO `aws_category` (`id`, `title`) VALUES
	(1, '默认分类');


TRUNCATE `aws_system_setting`;
INSERT INTO `aws_system_setting` (`varname`, `value`) VALUES
	('site_name', 's:11:"WeCenter";'),
	('description', 's:33:"WeCenter 社交化问答平台";'),
	('keywords', 's:31:"wecenter";'),
	('sensitive_words', 's:0:"";'),
	('def_focus_uids', 's:0:"";'),
	('cache_level_high', 's:2:"60";'),
	('cache_level_normal', 's:3:"600";'),
	('cache_level_low', 's:4:"1800";'),
	('unread_flush_interval', 's:3:"100";'),
	('index_per_page', 's:2:"20";'),
	('img_url', 's:0:"";'),
	('upload_url', 's:8:"/uploads";'),
	('upload_dir', 's:9:"./uploads";'),
	('ui_style', 's:7:"default";'),
	('answer_unique', 's:1:"Y";'),
	('notifications_per_page', 's:2:"20";'),
	('contents_per_page', 's:2:"50";'),
	('recommend_users_number', 's:2:"20";'),
	('answer_self_question', 's:1:"Y";'),
	('censoruser', 's:0:"";'),
	('statistic_code', 's:0:"";'),
	('upload_enable', 's:1:"N";'),
	('register_type', 's:4:"open";'),
	('register_seccode', 's:1:"Y";'),
	('upload_size_limit', 's:3:"512";'),
	('topic_title_limit', 's:1:"6";'),
	('url_rewrite_enable', 's:1:"N";'),
	('site_close', 's:1:"N";'),
	('close_notice', 's:39:"站点已关闭，管理员请登录。";'),
	('username_rule', 's:1:"1";'),
	('username_length_min', 's:1:"2";'),
	('username_length_max', 's:2:"14";'),
	('category_enable', 's:1:"Y";'),
	('allowed_upload_types', 's:16:"jpg,jpeg,png,gif";'),
	('site_announce', 's:0:"";'),
	('welcome_message_pm', 's:0:"";'),
	('image_upload_link', 's:18:"https://imgur.com/";'),
	('time_style', 's:1:"N";'),
	('advanced_editor_enable', 's:1:"Y";'),
	('default_timezone', 's:9:"Etc/GMT-8";'),
	('new_user_notification_setting', 'a:0:{}'),
	('register_notice', 's:231:"请勿将自身身份与其他网站相关联，切记不要使用与其他网站相同 ID 或者有关联的身份发言。\n\n由于本站不需邮箱即可注册，忘记密码将无法找回，请您妥善保管账号和密码。";'),
	('content_url_whitelist', 's:210:"https://i.imgur.com/\nhttps://i.redd.it/\nhttps://media.8ch.net/\nhttps://archive.is/\nhttps://web.archive.org/\nhttps://upload.wikimedia.org/\nhttps://pbs.twimg.com/";'),
	('random_seconds_min', 's:1:"0";'),
	('random_seconds_max', 's:1:"1";'),
	('currency_unit', 's:3:"分";'),
	('currency_name', 's:9:"积分";'),
	('currency_rule_name', 's:12:"积分获取规则";'),
	('time_blurring', 's:1:"Y";');


TRUNCATE `aws_users_group`;
INSERT INTO `aws_users_group` (`group_id`, `type`, `group_name`, `reputation_lower`, `reputation_higer`, `reputation_factor`, `permission`) VALUES
	(1, 0, '管理员', 0, 0, 0, 'a:40:{s:16:"is_administrator";s:1:"1";s:12:"is_moderator";s:1:"1";s:11:"forbid_user";s:1:"1";s:9:"flag_user";s:1:"1";s:17:"ignore_reputation";s:1:"1";s:17:"change_user_group";s:1:"1";s:9:"edit_user";s:1:"1";s:10:"edit_topic";s:1:"1";s:12:"manage_topic";s:1:"1";s:8:"pin_post";s:1:"1";s:14:"recommend_post";s:1:"1";s:13:"redirect_post";s:1:"1";s:9:"bump_post";s:1:"1";s:9:"sink_post";s:1:"1";s:9:"lock_post";s:1:"1";s:9:"fold_post";s:1:"1";s:20:"fold_post_own_thread";s:1:"1";s:15:"change_category";s:1:"1";s:9:"protected";s:1:"1";s:13:"edit_own_post";s:1:"1";s:13:"edit_any_post";s:1:"1";s:18:"edit_specific_post";s:1:"1";s:16:"post_anonymously";s:1:"1";s:17:"reply_anonymously";s:1:"1";s:10:"post_later";s:1:"1";s:12:"create_topic";s:1:"1";s:19:"edit_question_topic";s:1:"1";s:10:"vote_agree";s:1:"1";s:13:"vote_disagree";s:1:"1";s:15:"affect_currency";s:1:"1";s:13:"invite_answer";s:1:"1";s:13:"follow_people";s:1:"1";s:13:"follow_thread";s:1:"1";s:7:"send_pm";s:1:"1";s:11:"dispatch_pm";s:1:"1";s:10:"receive_pm";s:1:"1";s:10:"kb_explore";s:1:"1";s:6:"kb_add";s:1:"1";s:9:"kb_manage";s:1:"1";s:5:"debug";s:1:"1";}'),
	(2, 0, '版主', 0, 0, 0, 'a:38:{s:12:"is_moderator";s:1:"1";s:11:"forbid_user";s:1:"1";s:9:"flag_user";s:1:"1";s:17:"ignore_reputation";s:1:"1";s:17:"change_user_group";s:1:"1";s:9:"edit_user";s:1:"1";s:10:"edit_topic";s:1:"1";s:12:"manage_topic";s:1:"1";s:8:"pin_post";s:1:"1";s:14:"recommend_post";s:1:"1";s:13:"redirect_post";s:1:"1";s:9:"bump_post";s:1:"1";s:9:"sink_post";s:1:"1";s:9:"lock_post";s:1:"1";s:9:"fold_post";s:1:"1";s:20:"fold_post_own_thread";s:1:"1";s:15:"change_category";s:1:"1";s:9:"protected";s:1:"1";s:13:"edit_own_post";s:1:"1";s:13:"edit_any_post";s:1:"1";s:18:"edit_specific_post";s:1:"1";s:16:"post_anonymously";s:1:"1";s:17:"reply_anonymously";s:1:"1";s:10:"post_later";s:1:"1";s:12:"create_topic";s:1:"1";s:19:"edit_question_topic";s:1:"1";s:10:"vote_agree";s:1:"1";s:13:"vote_disagree";s:1:"1";s:15:"affect_currency";s:1:"1";s:13:"invite_answer";s:1:"1";s:13:"follow_people";s:1:"1";s:13:"follow_thread";s:1:"1";s:7:"send_pm";s:1:"1";s:11:"dispatch_pm";s:1:"1";s:10:"receive_pm";s:1:"1";s:10:"kb_explore";s:1:"1";s:6:"kb_add";s:1:"1";s:9:"kb_manage";s:1:"1";}'),
	(3, 0, '游客', 0, 0, 0, 'a:2:{s:10:"visit_site";s:1:"1";s:12:"visit_people";s:1:"1";}'),
	(4, 0, '会员', 0, 0, 0, 'a:0:{}'),
	(10, 1, 'lv0', -2147483648, 0, 0, 'a:15:{s:10:"edit_topic";s:1:"1";s:20:"fold_post_own_thread";s:1:"1";s:13:"edit_own_post";s:1:"1";s:16:"post_anonymously";s:1:"1";s:17:"reply_anonymously";s:1:"1";s:10:"post_later";s:1:"1";s:12:"create_topic";s:1:"1";s:19:"edit_question_topic";s:1:"1";s:10:"vote_agree";s:1:"1";s:13:"vote_disagree";s:1:"1";s:15:"affect_currency";s:1:"1";s:13:"invite_answer";s:1:"1";s:13:"follow_people";s:1:"1";s:13:"follow_thread";s:1:"1";s:7:"send_pm";s:1:"1";}'),
	(11, 1, 'lv1', 0, 5, 0, 'a:15:{s:10:"edit_topic";s:1:"1";s:20:"fold_post_own_thread";s:1:"1";s:13:"edit_own_post";s:1:"1";s:16:"post_anonymously";s:1:"1";s:17:"reply_anonymously";s:1:"1";s:10:"post_later";s:1:"1";s:12:"create_topic";s:1:"1";s:19:"edit_question_topic";s:1:"1";s:10:"vote_agree";s:1:"1";s:13:"vote_disagree";s:1:"1";s:15:"affect_currency";s:1:"1";s:13:"invite_answer";s:1:"1";s:13:"follow_people";s:1:"1";s:13:"follow_thread";s:1:"1";s:7:"send_pm";s:1:"1";}'),
	(12, 1, 'lv2', 5, 10, 0, 'a:15:{s:10:"edit_topic";s:1:"1";s:20:"fold_post_own_thread";s:1:"1";s:13:"edit_own_post";s:1:"1";s:16:"post_anonymously";s:1:"1";s:17:"reply_anonymously";s:1:"1";s:10:"post_later";s:1:"1";s:12:"create_topic";s:1:"1";s:19:"edit_question_topic";s:1:"1";s:10:"vote_agree";s:1:"1";s:13:"vote_disagree";s:1:"1";s:15:"affect_currency";s:1:"1";s:13:"invite_answer";s:1:"1";s:13:"follow_people";s:1:"1";s:13:"follow_thread";s:1:"1";s:7:"send_pm";s:1:"1";}'),
	(13, 1, 'lv3', 10, 30, 0, 'a:15:{s:10:"edit_topic";s:1:"1";s:20:"fold_post_own_thread";s:1:"1";s:13:"edit_own_post";s:1:"1";s:16:"post_anonymously";s:1:"1";s:17:"reply_anonymously";s:1:"1";s:10:"post_later";s:1:"1";s:12:"create_topic";s:1:"1";s:19:"edit_question_topic";s:1:"1";s:10:"vote_agree";s:1:"1";s:13:"vote_disagree";s:1:"1";s:15:"affect_currency";s:1:"1";s:13:"invite_answer";s:1:"1";s:13:"follow_people";s:1:"1";s:13:"follow_thread";s:1:"1";s:7:"send_pm";s:1:"1";}'),
	(14, 1, 'lv4', 30, 2147483647, 1, 'a:15:{s:10:"edit_topic";s:1:"1";s:20:"fold_post_own_thread";s:1:"1";s:13:"edit_own_post";s:1:"1";s:16:"post_anonymously";s:1:"1";s:17:"reply_anonymously";s:1:"1";s:10:"post_later";s:1:"1";s:12:"create_topic";s:1:"1";s:19:"edit_question_topic";s:1:"1";s:10:"vote_agree";s:1:"1";s:13:"vote_disagree";s:1:"1";s:15:"affect_currency";s:1:"1";s:13:"invite_answer";s:1:"1";s:13:"follow_people";s:1:"1";s:13:"follow_thread";s:1:"1";s:7:"send_pm";s:1:"1";}');

UPDATE `aws_users_group` SET `group_id`=-1 WHERE `group_id`=3;
UPDATE `aws_users_group` SET `group_id`=0 WHERE `group_id`=4;
