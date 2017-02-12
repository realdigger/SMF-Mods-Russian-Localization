<?php
// ----------------------------------------------------------
// -- FelBlogNotify.russian-utf8.php                       --
// ----------------------------------------------------------
// -- Version: 0.952 for SMF 2.0 RC2                       --
// -- Copyright 2006..2008 by: "Feline"                    --
// -- Copyright 2009 by: PortaMx corp.                     --
// -- Support and Updates at: http://portamx.com           --
// -- Translate by Bugo: http://bugo.myosotis.ru           --
// ----------------------------------------------------------

global $context;

$txt['PmxBlog_tracknotify_subject'] = 'Уведомление об изменениях в блоге';
$txt['PmxBlog_trackwatch_subject'] = 'Уведомление о новых комментариях';

$txt['PmxBlog_tracknotify_msg'] = "Новая запись \"%s\" была создана в блоге \"%s\".\n
Вы можете прочитать её, перейдя по ссылке:\n%s\n
С уважением,\n%s (Администрация блогов ".$context['forum_name'].")";

$txt['PmxBlog_tracknotify_cmnt_msg'] = "Новый комментарий \"%s\" к записи \"%s\" был оставлен \"%s\" в блоге про \"%s\".\n
Вы можете прочитать её, перейдя по ссылке:\n%s\n
А комментарии можно увидеть здесь:\n%s \n
С уважением,\n%s (Администрация блогов ".$context['forum_name'].")";

$txt['PmxBlog_tracknotify_self_msg'] = "В Вашем блоге \"%s\" появился комментарий \"%s\" к записи \"%s\".\n
Вы можете прочитать этот комментарий здесь:\n%s\n
С уважением,\n%s (Администрация блогов ".$context['forum_name'].")";
?>