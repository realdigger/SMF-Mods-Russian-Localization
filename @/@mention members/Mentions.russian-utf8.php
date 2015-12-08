<?php

global $txt, $context;

$txt['mentions_subject'] = 'MENTIONNAME, Вы были упомянуты в сообщении на форуме ' . $context['forum_name'];
$txt['mentions_body'] = 'Привет, MENTIONNAME!

MEMBERNAME упомянул Вас в сообщении "POSTNAME", которое можно просмотреть  по ссылке POSTLINK

С наилучшими пожеланиями,
' . $context['forum_name'];
$txt['mentions'] = 'Упоминания';
$txt['mentions_profile_title'] = 'Сообщения, в которых упоминается %s';
$txt['mentions_post_subject'] = 'Тема';
$txt['mentions_member'] = 'Упомянут';
$txt['mentions_post_time'] = 'Время упоминания';
$txt['permissionname_mention_member'] = 'Упоминание пользователей';
$txt['permissionhelp_mention_member'] = 'Разрешить пользователям упоминать других пользователей используя @username синтаксис';
$txt['email_mentions'] = 'Оповещения о упоминаниях по E-mail';
$txt['mentions_remove_days'] = 'Удалить упоминания старше заданного количества дней<div class="smalltext">Эта опция удалит все упоминания, которые указанного количества дней. Убедитесь, что включена <a href="' . $scripturl . '?action=admin;area=scheduledtasks">задача в Диспечере задач</a></div>';
$txt['mentions_email_default'] = 'Включить уведомления по e-mail о упоминании по умолчанию<div class="smalltext">Проверьте, если вы хотите, чтоб новые пользователи получали e-mail уведомления о их упоминании по умолчанию (применяется только для новых регистраций)</div>';
$txt['mentions_permissions_notice'] = 'Пожалуйста, не забудьте установить права для пользователей, разрешающие упоминать других.';
$txt['mentions_email_default_now'] = 'Включить упоминания по e-mail для текущих пользователей<div class="smalltext">Сделайте это, если Вы хотите, чтоб существующие пользователи получали email с уведомлениями</div>';

?>