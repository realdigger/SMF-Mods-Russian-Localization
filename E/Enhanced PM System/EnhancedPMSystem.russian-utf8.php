<?php
/**********************************************************************************
 * EnhancedPMSystem.russian-utf8.php - Russian language file of the EnhancedPMSystem Mod
 *********************************************************************************
 * This program is distributed in the hope that it is and will be useful, but
 * WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE.
 *********************************************************************************
 * This work is licensed under a Creative Commons Attribution 3.0 Unported License
 **********************************************************************************/
if (!defined('SMF')) {
    die('Hacking attempt...');
}

// Replacement language strings for the Enhanced PM System:
//==================================================================
$txt['quote_to_all'] = 'Процитировать всем';
$txt['pm_unread'] = 'Недоставленные';
$txt['pm_msg_label_title'] = 'Перенести сообщение';
$txt['pm_msg_label_apply'] = 'Перенести в';
$txt['pm_msg_label_remove'] = 'Текущая папка';
$txt['pm_sel_label_title'] = 'Перенести выбранные';
$txt['pm_manage_labels'] = 'Управлять папками';
$txt['pm_labels_delete'] = 'Уверены, что хотите удалить выбранные папки?';
$txt['pm_labels_desc'] = 'Здесь вы можете добавлять, редактировать и удалять папки для использования с ЛС.';
$txt['pm_label_add_new'] = 'Добавить новую папку';
$txt['pm_label_name'] = 'Имя папки';
$txt['pm_labels_no_exist'] = 'У вас нет папок!';
$txt['pm_labels'] = 'Папки';
$txt['pm_search_choose_label'] = 'Выберите папки в которых искать или ищите во всех';
$txt['pm_email'] = 'You have just been sent a personal message by SENDER on ' . $context['forum_name'] . '.' . "\n\n" . 'Важно: Это только уведомление, не отвечайте на него.';
$txt['unread_items'] = 'Недоставленные';
$txt['unsend_item'] = 'Не доставлено';
$txt['pm_rule_label'] = 'Перенести сообщение в папку';
$txt['pm_rule_sel_label'] = 'Выберите папку';

$txt['pm_edit'] = 'Редактировать';
$txt['edit_message'] = 'Редактировать сообщение';
$txt['pm_unsent_denied'] = 'Вы не можете отменить сообщение.';
$txt['pm_unsent'] = 'Ваше сообщение было отозвано у всех получателей.';
$txt['pm_unsent_some'] = 'Ваше сообщение было отозвано у всех получателей, которые не успели его прочитать.';
$txt['pm_edited'] = 'Your message has been edited and all new recipients have been sent emails.';
$txt['pm_no_edit'] = 'Невозможно отредактировать это сообщение, потому что один из получателей уже прочитал его.';
$txt['pm_send_blocked'] = 'Вы не можете отправлять личные сообщения, пока не пройдет 24 часа с момента активации вашей учетной записи.';
$txt['unsend_message'] = 'Отозвать это сообщение у всех пользователей, которые еще не прочитали его';
$txt['pm_search_what'] = 'По группе';
$txt['pm_search_to_user'] = 'По пользователбю';

$txt['pm_actions_filter_by_label'] = 'Фильтр по папке';
$txt['pm_current_label'] = 'Папка';
$txt['pm_readable_label'] = 'перенести в папку &quot;{LABEL}&quot;';

// Language string for PM Quick Reply:
//==================================================================
$txt['quick_reply_desc'] = 'С быстрым ответом вы можете писать сообщения во время просмотра диалога, без перехода на новую страницу. Вы можете использовать ББ-коды и смайлы, как и в полном редакторе сообщений.';

// Language strings for the Enhanced PM System settings page:
//==================================================================
$txt['eps_area'] = 'Улучшенные ЛС';
$txt['eps_title'] = 'Улучшенная система ЛС';
$txt['eps_new_version'] = 'Доступна для загрузки версия %s мода Enhanced PM System!';
$txt['eps_no_update'] = 'Установлена последння версия мода Enhanced PM System!';
$txt['eps_allow_unsend'] = 'Группы, которым разрешено отменять непрочитанные сообщения';
$txt['eps_allow_edit'] = 'Группы, которым разрешено редактировать непрочитанные ЛС';
$txt['eps_block_1st_day'] = 'Группы, которым запрещена отправка ЛС в первый день регистрации';
$txt['eps_pm_view_switch'] = 'Разрешить пользователям выбирать режим отображения ЛС отличный от диалога';
$txt['eps_send_pm_while_muted'] = 'Разрешить заблокированым пользователям отправлять ЛС?';
$txt['eps_allow_block_admin'] = 'Разрешить пользователям блокировать ЛС от администраторов';

// Language strings for the Enhanced PM System permissions:
//==================================================================
$txt['permissionname_eps_block_1st_day'] = '<strong>NOT</strong> allowed to PM on 1st day';
$txt['permissionhelp_eps_block_1st_day'] = 'This setting stops members of this group from sending any PMs within the 1st day (24 hours) of their membership.  Requires the \'Read personal messages\' permission.';
$txt['permissionhelp_eps_allow_edit'] = 'This setting allows members of this group to edit personal messages sent to others, as long as the message hasn\'t been read by any recipient.  Requires the \'Read personal messages\' permission.';
$txt['permissionname_eps_allow_edit'] = 'Allowed to Edit unread PMs';
$txt['permissionhelp_eps_allow_unsend'] = 'This setting allows members of this group to unsend (or delete) personal messages sent to others, as long as the message hasn\'t been read by any recipient.  Does not affect emails already sent regarding PM.  Requires the \'Read personal messages\' permission.';
$txt['permissionname_eps_allow_unsend'] = 'Allowed to Unsend unread PMs';

// Language strings for the Enhanced PM System profile area:
//==================================================================
$txt['display_pm_quick_reply'] = 'Использовать быстрый ответ в ЛС:';
if (!isset($txt['display_quick_reply1'])) {
    $txt['display_quick_reply1'] = 'не показывать';
    $txt['display_quick_reply2'] = 'показывать, свернут по умолчанию';
    $txt['display_quick_reply3'] = 'показывать, развернут по умолчанию';
}
$txt['recent_pms_at_top'] = 'Показывать последние диалоги наверху.';
$txt['recent_msgs_at_top'] = 'Показывать последние личные сообщения наверху.';

?>