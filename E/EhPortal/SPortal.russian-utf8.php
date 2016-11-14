<?php
// Version: 1.1; SPortal
// Russian localization by GeorG, 0daliska and digger (c) http://simplemachines.ru

global $scripturl;

// General strings
$txt['sp-forum'] = 'Форум';
$txt['sp-portal'] = 'Портал';
$txt['sp-adminTitle'] = 'Администрирование портала';
$txt['sp-adminCatTitle'] = 'Портал';
$txt['sp-add_article'] = 'Добавить как статью';
$txt['sp-remove_article'] = 'Удалить из статей';
$txt['sp-dot'] = 'Точка';
$txt['sp-arrow'] = 'Разделитель';
$txt['sp-star'] = 'Звезда';
$txt['sp_yes'] = 'Да';
$txt['sp_no'] = 'Нет';
$txt['sp_move'] = 'Переместить';
$txt['sp_all'] = 'Все';
$txt['sp_link'] = '[ссылка]';
$txt['sp_function_unknown_label'] = 'Неизвестный тип блока';

// Block specific strings
$txt['sp-usertmessage'] = 'Всего ЛС';
$txt['sp-usernmessage'] = 'Новых ЛС';
$txt['sp-articlesComments'] = 'Комментарии';
$txt['sp-articlesViews'] = 'Просмотры';
$txt['sp-articlesPages'] = 'Стр.';
$txt['sp-downloadsCount'] = 'Загрузки';
$txt['sp-downloadsPoster'] = 'Автор';
$txt['sp_calendar_noEventsFound'] = 'Извините! На данный момент нет доступных событий в календаре.';
$txt['sp_calendar_events'] = 'События этого дня';
$txt['sp_calendar_upcomingEvents'] = 'Ближайшие события';
$txt['sp_calendar_holidays'] = 'Праздники';
$txt['sp_calendar_birthdays'] = 'Дни рождения';
$txt['sp-pollViewTopic'] = 'Смотреть тему';
$txt['sp-read_more'] = 'Читать далее...';
$txt['sp-downloadsSize'] = 'Размер';
$txt['sp-average_posts'] = 'Среднее число сообщений';
$txt['sp-average_topics'] = 'Среднее число тем';
$txt['sp-average_members'] = 'Среднее число пользователй';
$txt['sp-average_online'] = 'Среднее число посетителей он-лайн';
$txt['sp-online_today'] = 'Сегодня он-лайн';
$txt['sp-theme_change'] = 'Изменить';
$txt['sp-theme_permanent'] = 'Навсегда';
$txt['sp-game_plays'] = 'Играют';
$txt['sp-game_rating'] = 'Рейтинг';
$txt['sp-games'] = 'игры';
$txt['sp-champ_duration'] = 'Длительность';
$txt['sp_shoutbox_title'] = 'Мини-чат';
$txt['sp_shoutbox_button'] = 'Отправить!';
$txt['sp_shoutbox_no_shout'] = 'Еще никто не ответил!';
$txt['sp_shoutbox_refresh'] = 'Обновить';
$txt['sp_shoutbox_history'] = 'История';
$txt['sp_shoutbox_smiley'] = 'Смайлы';
$txt['sp_shoutbox_style'] = 'Стиль';
$txt['sp_shoutbox_prune'] = 'Очистить';
$txt['sp_shoutbox_show_ignored'] = 'Показать игнорируемые сообщения';
$txt['sp_topstats_unknown_type'] = 'Неизвестный или неподдерживаемый тип выборки из статистики.';
$txt['sp_topstats_type_error'] = 'Установка типа не окончена';
$txt['sp_sashop_no_exist'] = 'Извините, не удается найти Модификации SA Shop Mod';
$txt['sp_shop_no_exist'] = 'Извините, не удается найти Модификации SMF Shop Mod';
$txt['sp_eliana_no_exist'] = 'Извините, не удается найти Модификации Automatic Karma system, она либо не установлена, либо отключена';
$txt['sp_thankomatic_no_exist'] = 'Извините, не удается найти Модификации Thank-O-Matic.';
$txt['sp_reputation_no_exist'] = 'Извините, не удается найти Модификации Advanced Reputation, она либо не установлена, либо отключена';
$txt['sp_karma_is_disabled'] = 'Karma System запрещена';
$txt['sp_topStatsMember_total_time_logged_in'] = 'Общее время, проведенное на форуме';
$txt['sp_topStatsMember_Posts'] = 'Сообщений';
$txt['sp_topStatsMember_Karma_Good'] = 'Положительная карма';
$txt['sp_topStatsMember_Karma_Bad'] = 'Отрицательная карма';
$txt['sp_topStatsMember_Karma_Total'] = 'Общая карма';
$txt['sp_topStatsMember_Thank-O-Matic_Top_Given'] = 'Благодарности полученные';
$txt['sp_topStatsMember_Thank-O-Matic_Top_Recived'] = 'Благодарности отправленные';
$txt['sp_topStatsMember_Automatic_Karma_Good'] = 'Automatic Good Karma';
$txt['sp_topStatsMember_Automatic_Karma_Bad'] = 'Automatic Bad Karma';
$txt['sp_topStatsMember_Automatic_Karma_Total'] = 'Automatic Total Karma';
$txt['sp_topStatsMember_Advanced_Reputation_System_Best'] = 'Advanced Reputation System Best';
$txt['sp_topStatsMember_Advanced_Reputation_System_Worst'] = 'Advanced Reputation System Worst';
$txt['sp_topStatsMember_SMF_Shop_Money'] = 'SMF Shop Money';
$txt['sp_topStatsMember_SA_Shop_Cash'] = 'SA Shop Cash';
$txt['sp_topStatsMember_SA_Shop_Trades'] = 'SA Shop Trades';
$txt['sp_topStatsMember_SA_Shop_Purchase'] = 'SA Shop Purchase';
$txt['sp_topStatsMember_Casino'] = 'Casino Cash';

// Who area strings
$txt['sp_who_index'] = 'Просматривает <a href="' . $scripturl . '">Портал</a>.';
$txt['sp_who_forum'] = 'Просматривает <a href="' . $scripturl . '?action=forum">Форум</a>.';
$txt['sp_who_page'] = 'Просматривает страницу &quot;<a href="' . $scripturl . '?page=%1$s">%2$s</a>&quot;.';

// Error messages
$txt['error_sp_no_message_id'] = 'Некорректный идентификатор сообщения.';
$txt['error_sp_article_exists'] = 'Эта статья уже существует.';
$txt['error_sp_cannot_add_article'] = 'Вам не разрешено добавлять статьи.';
$txt['error_sp_cannot_remove_article'] = 'Извините, но у Вас недостаточно прав, чтобы удалять статьи.';
$txt['error_sp_name_empty'] = 'Поле Имени было оставлено пустым.';
$txt['error_sp_no_category'] = 'Извините, статьи требуют категорий для опубликования! Пожалуйста, создайте категорию для статьи.';
$txt['error_sp_no_category_normaluser'] = 'Извините, статьи требуют категорий для опубликования! Пожалуйста, попросите администратора создать категорию для статьи.';
$txt['error_sp_no_category_sp_moderator'] = 'Новая категория может быть создана <a href="%s">здесь</a>.';
$txt['error_sp_side_wrong'] = 'Выбрана неправильная сторона.';
$txt['error_sp_block_wrong'] = 'Выбран неверный блок.';
$txt['error_sp_php_syntax'] = 'Синтаксическая ошибка в коде блока. Пожалуйста, проверьте код, выводимый в блоке.';
$txt['error_sp_php_database'] = 'Ошибка базы данных в коде, введеном в блок. Пожалуйста, проверьте код, выводимый в блоке.';
$txt['error_sp_no_posts_found'] = 'Сообщений не найдено.';
$txt['error_sp_no_members_found'] = 'Пользователей не найдено.';
$txt['error_sp_no_gallery_found'] = 'У Вас нет установленной модификации галереи.';
$txt['error_sp_no_pictures_found'] = 'У Вас нет изображений в галерее.';
$txt['error_sp_no_boards_found'] = 'На форуме нет каких-либо разделов.';
$txt['error_sp_no_topics_found'] = 'На форуме нет каких-либо тем.';
$txt['error_sp_no_attachments_found'] = 'Вложения не найдены.';
$txt['error_sp_no_polls_found'] = 'Голосования не найдены';
$txt['error_sp_invalid_feed'] = 'Некорректная загрузка.';
$txt['error_sp_no_online'] = 'Нет пользователй он-лайн.';
$txt['error_sp_no_items_day'] = 'События в календаре не найдены.';
$txt['error_sp_no_blog_found'] = 'Модификация блога не установлена.';
$txt['error_sp_no_blogs_found'] = 'Не найдено блогов.';
$txt['error_sp_no_articles_found'] = 'Нет статей для отображения.';
$txt['error_sp_no_shop_found'] = 'У Вас нет установленных модификаций Магазина.';
$txt['error_sp_no_arcade_found'] = 'У Вас нет установленных модификаций Аркад.';
$txt['error_sp_no_stats_found'] = 'Статистика не найдена.';
$txt['error_sp_page_not_found'] = 'Запрашиваемая Вами страница не найдена';
$txt['error_sp_shoutbox_not_exist'] = 'Этот мини-чат не существует.';
$txt['error_sp_no_shoutbox'] = 'Еще не создано ни одного мини-чата.';
$txt['error_sp_no_shoutbox_sp_moderator'] = 'Новый чат может быть создан <a href="%s">здесь</a>.';
$txt['error_sp_no_shoutbox_normaluser'] = 'Новый чат не создан, попросите администратора создать его';
$txt['error_sp_cannot_shoutbox_moderate'] = 'Вы не можете модерировать этот чат.';
$txt['error_sp_no_block'] = 'Не один блок, ещё не создан.';
$txt['error_sp_flood_spsbp'] = 'С вашего последнего сообщения, прошло менее %1$d секунд(ы). Пожалуйста повторите попытку снова.';

// Shoutbox
$txt['sp_bold'] = 'Жирный';
$txt['sp_italic'] = 'Наклонный';
$txt['sp_underline'] = 'Подчеркнутый';
$txt['sp_strike'] = 'Перечеркнутый';
$txt['sp_preformatted'] = 'Преформатированный';
$txt['sp_flash'] = 'Флеш';
$txt['sp_image'] = 'Вставить изображение';
$txt['sp_hyperlink'] = 'Вставить URL ссылку';
$txt['sp_insert_email'] = 'Вставить E-mail';
$txt['sp_ftp'] = 'Вставить FTP ссылку';
$txt['sp_glow'] = 'Свечение';
$txt['sp_shadow'] = 'Тень';
$txt['sp_superscript'] = 'Верхний индекс';
$txt['sp_subscript'] = 'Нижний индекс';
$txt['sp_teletype'] = 'Телетайп';
$txt['sp_bbc_quote'] = 'Цитата';
$txt['sp_bbc_code'] = 'Код';

?>