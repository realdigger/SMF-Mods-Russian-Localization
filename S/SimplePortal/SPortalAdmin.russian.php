<?php
// Version: 2.3.5; SPortalAdmin

// Configuration area
$txt['sp-adminConfiguration'] = 'Конфигурация';
$txt['sp-adminConfigurationDesc'] = 'Здесь Вы можете просматривать информацию о Портале и управлять его настройками.';
$txt['sp-adminGeneralSettingsName'] = 'Основные настройки';
$txt['sp-adminBlockSettingsName'] = 'Настройки блоков';
$txt['sp-adminArticleSettingsName'] = 'Настройки статей';

// General settings
$txt['portalactive'] = 'Разрешить использование Портала';
$txt['sp_portal_mode'] = 'Модуль Портала';
$txt['sp_portal_mode_options'] = 'Выключен|Главная страница|Интеграция|Автономный';
$txt['sp_maintenance'] = 'Техобслуживание';
$txt['sp_standalone_url'] = 'URL портала если модуль Портала задан как автономный';
$txt['sp_disableForumRedirect'] = 'Отключить перенаправление Портала';
$txt['sp_disableColor'] = 'Отключить цветное выделение ссылок на группы пользователй';
$txt['sp_disable_random_bullets'] = 'Отключить цветные маркеры в блоках портала';
$txt['sp_disable_php_validation'] = 'Отключить проверку синтаксиса PHP <br /><span class="smalltext">Рекомендованное значение: Выключено</span>';
$txt['sp_disable_side_collapse'] = 'Отключить сворачивание';
$txt['portaltheme'] = 'Тема для портала';
$txt['portalthemedefault'] = 'Тема форума по умолчанию';
$txt['sp_resize_images'] = 'Изменять размеры изображений в портале';

// Block settings
$txt['showleft'] = 'Разрешить левый блок';
$txt['showright'] = 'Разрешить правый блок';
$txt['leftwidth'] = 'Ширина левого блока';
$txt['rightwidth'] = 'Ширина Правого блока';
$txt['sp_enableIntegration'] = 'Отображать блоки на Форуме';
$txt['sp_IntegrationHide'] = 'Скрывать блоки в следующих действиях на форуме<br /><span class="smalltext"><em>В настройках при этом</em> обязательно следует выбрать<br />Отображать блоки на Форуме</span>';

// Article settings
$txt['articleactive'] = 'Разрешить статьи';
$txt['articleperpage'] = 'Максимально количество статей на страницу';
$txt['articlelength'] = 'Максимальное количество символов перед тем, как текст статьи будет обрезан';
$txt['articleavatar'] = 'Показывать аватар автора';

// Blocks area
$txt['sp-adminBlockListName'] = 'Список блоков';
$txt['sp-adminBlockListDesc'] = 'На этой странице выводится список всех блоков, которые были созданы для портала или форума.';
$txt['sp-adminBlockAddName'] = 'Добавить блок';
$txt['sp-adminBlockAddDesc'] = 'На этой странице Вы можете создать новый блок и добавить его на портал или форум.';
$txt['sp-adminBlockLeftListDesc'] = 'На этой странице отображаются все блоки, которые были созданы и настроены для отображения слева. Эти блоки и их настройки можно изменить, если выбрать соответствующую опцию.';
$txt['sp-adminBlockRightListDesc'] = 'На этой странице отображаются все блоки, которые были созданы и настроены для отображения справа. Эти блоки и их настройки можно изменить, если выбрать соответствующую опцию.';
$txt['sp-adminBlockTopListDesc'] = 'На этой странице отображаются все блоки, которые были созданы и настроены для отображения вверху (в середине). Эти блоки и их настройки можно изменить, если выбрать соответствующую опцию.';
$txt['sp-adminBlockBottomListDesc'] = 'На этой странице отображаются все блоки, которые были созданы и настроены для отображения внизу (в середине). Эти блоки и их настройки можно изменить, если выбрать соответствующую опцию..';
$txt['sp-adminBlockHeaderListDesc'] = 'Эта страница отображает список всех блоков, которые были созданы. Блоки могут быть модифицированы выбором соответствующих опций.';
$txt['sp-adminBlockFooterListDesc'] = 'Эта страница отображает список всех блоков, которые были созданы. Блоки могут быть модифицированы выбором соответствующих опций.';

// Block list
$txt['sp-blocksBlocks'] = 'блоки';
$txt['sp-blocksActive'] = 'Действие';
$txt['sp-blocksActivate'] = 'Включить';
$txt['sp-blocksDeactivate'] = 'Выключить';
$txt['sp-blocksCreate'] = 'Создать %s блок';
$txt['sp-deleteblock'] = 'Вы уверены, что хотите удалить этот блок?';
$txt['sp-blocks_select_destination'] = 'Выберите место, куда переместить блок - \'<strong>%1$s</strong>\'';
$txt['sp-blocks_move_here'] = 'Переместить блок, сюда';
$txt['sp-blocks_cancel_moving'] = 'Отменить перемещение';

// Add/Edit blocks
$txt['sp-blocksSelectType'] = 'Выберите тип блока';
$txt['sp-blocksAdd'] = 'Добавить блок';
$txt['sp-blocksEdit'] = 'Редактировать блок';
$txt['sp-blocksPreview'] = 'Предварительный просмотр';
$txt['sp-blocksDefaultLabel'] = 'Безымянный';
$txt['sp-blocksDisabledBoth'] = 'Левые и правые блоки в текущий момент выключены';
$txt['sp-blocksDisabledLeft'] = 'Левые блоки в текущий момент отключены';
$txt['sp-blocksDisabledRight'] = 'Правые блоки в текущий момент отключены';
$txt['sp-blocksContent'] = 'Содержание';
$txt['sp-blocksColumn'] = 'Колонка';
$txt['sp_admin_blocks_col_permissions'] = 'Настройки прав доступа';
$txt['sp_admin_blocks_permissions_set_custom'] = 'Выбор';
$txt['sp_admin_blocks_permissions_set_guests'] = 'Гости';
$txt['sp_admin_blocks_permissions_set_members'] = 'Пользователи';
$txt['sp_admin_blocks_permissions_set_everyone'] = 'Все';
$txt['sp_admin_blocks_col_custom_permissions'] = 'Выбрать настройки для каждой группы';
$txt['sp_admin_blocks_custom_permissions_membergroup'] = 'Группы пользователей';
$txt['sp_admin_blocks_custom_permissions_allowed_short'] = 'A';
$txt['sp_admin_blocks_custom_permissions_disallowed_short'] = 'X';
$txt['sp_admin_blocks_custom_permissions_denied_short'] = 'D';
$txt['sp_admin_blocks_custom_permissions_allowed'] = 'Разрешено';
$txt['sp_admin_blocks_custom_permissions_disallowed'] = 'Запрещено';
$txt['sp_admin_blocks_custom_permissions_denied'] = 'Не разрешено';
$txt['sp-blocksRow'] = 'Порядок';
$txt['sp-blocksForce'] = 'Не сворачиваемая';
$txt['sp-blocksDisplayOptions'] = 'Опции отображения';
$txt['sp-blocksAdvancedOptions'] = 'Расширенные опции';
$txt['sp-blocksShowBlock'] = 'Показывать блок';
$txt['sp-blocksOptionAllPages'] = 'На всех страницах';
$txt['sp-blocksOptionAllActions'] = 'Во всех действиях';
$txt['sp-blocksOptionAllBoards'] = 'Во всех разделах';
$txt['sp-blocksOptionEverywhere'] = 'Везде';
$txt['sp-blocksSelectActions'] = 'Выберите действия';
$txt['sp-blocksSelectBoards'] = 'Выберите разделы';
$txt['sp-blocksSelectPages'] = 'Выберите страницы';
$txt['sp_display_custom'] = 'Пользовательские настройки отображения';
$txt['sp-blocksStyleOptions'] = 'Настройки стиля';
$txt['sp-blocksTitleDefaultClass'] = 'Default Title Class';
$txt['sp-blocksTitleCustomClass'] = 'Custom Title Class';
$txt['sp-blocksTitleCustomStyle'] = 'Custom Title Style';
$txt['sp-blocksBodyDefaultClass'] = 'Default Body Class';
$txt['sp-blocksBodyCustomClass'] = 'Custom Body Class';
$txt['sp-blocksBodyCustomStyle'] = 'Custom Body Style';
$txt['sp-blocksNoTitle'] = 'Не отображать заголовок блока';
$txt['sp-blocksNoBody'] = 'Не отображать фон блока';

// Block labels
$txt['sp_function_sp_userInfo_label'] = 'Информация Пользователя';
$txt['sp_function_sp_latestMember_label'] = 'Последний зарегистрированный пользователь';
$txt['sp_function_sp_whosOnline_label'] = 'Кто он-лайн';
$txt['sp_function_sp_showPoll_label'] = 'Голосование';
$txt['sp_function_sp_boardStats_label'] = 'Информационный центр';
$txt['sp_function_sp_quickSearch_label'] = 'Быстрый поиск';
$txt['sp_function_sp_topPoster_label'] = 'Самые активные авторы';
$txt['sp_function_sp_topStatsMember_label'] = 'Рейтинг статистики пользователей';
$txt['sp_function_sp_topBoards_label'] = 'Рейтинг разделов';
$txt['sp_function_sp_topTopics_label'] = 'Рейтинг тем';
$txt['sp_function_sp_recent_label'] = 'Последние добавленные разделы/темы';
$txt['sp_function_sp_boardNews_label'] = 'Раздел новостей';
$txt['sp_function_sp_news_label'] = 'Новое на форуме';
$txt['sp_function_sp_attachmentImage_label'] = 'Последние добавленные изображения';
$txt['sp_function_sp_attachmentRecent_label'] = 'Последние вложения';
$txt['sp_function_sp_calendar_label'] = 'Календарь';
$txt['sp_function_sp_calendarInformation_label'] = 'Информация календаря';
$txt['sp_function_sp_rssFeed_label'] = 'Лента RSS';
$txt['sp_function_sp_theme_select_label'] = 'Выбор тем';
$txt['sp_function_sp_staff_label'] = 'Администрация';
$txt['sp_function_sp_articles_label'] = 'Статьи';
$txt['sp_function_sp_shoutbox_label'] = 'Мини-чат';
$txt['sp_function_sp_gallery_label'] = 'Галерея';
$txt['sp_function_sp_arcade_label'] = 'Игры';
$txt['sp_function_sp_shop_label'] = 'Магазин';
$txt['sp_function_sp_blog_label'] = 'Блог';
$txt['sp_function_sp_menu_label'] = 'Меню';
$txt['sp_function_sp_bbc_label'] = 'Блок BBC';
$txt['sp_function_sp_html_label'] = 'Блок HTML';
$txt['sp_function_sp_php_label'] = 'Блок PHP';

// Block descriptions
$txt['sp_function_sp_latestMember_desc'] = 'Показывает последнего зарегистрированного пользователя и его аватар.';
$txt['sp_function_sp_userInfo_desc'] = 'Отображает информацию пользователя для авторизованного пользователя и форму входа на форум для гостя.';
$txt['sp_function_sp_whosOnline_desc'] = 'Отображает список тех пользователей, кто он-лайн.';
$txt['sp_function_sp_showPoll_desc'] = 'Отображает голосование с возможностью проголосовать, если это разрешено пользователю, или результаты голосования, если пользователь голосовать не может.';
$txt['sp_function_sp_boardStats_desc'] = 'Отображает некоторую статистическую информацию форума.';
$txt['sp_function_sp_quickSearch_desc'] = 'Отображает простую форму поиска.';
$txt['sp_function_sp_topPoster_desc'] = 'Отображает самых активных авторов, а также количество их сообщений и аватары';
$txt['sp_function_sp_topStatsMember_desc'] = 'Отображает различные типы статистики о пользователях.';
$txt['sp_function_sp_topBoards_desc'] = 'Отображает список наиболее популярных разделов.';
$txt['sp_function_sp_topTopics_desc'] = 'Отображает список наиболее популярных тем.';
$txt['sp_function_sp_recent_desc'] = 'Отображает список последних написанных сообщений или тем.';
$txt['sp_function_sp_boardNews_desc'] = 'Отображает список сообщений из выбранного раздела.';
$txt['sp_function_sp_news_desc'] = 'Отображает случайную новость.';
$txt['sp_function_sp_attachmentImage_desc'] = 'Отображает список последних прикрепленных изображений на форуме.';
$txt['sp_function_sp_attachmentRecent_desc'] = 'Отображает список последних вложений на форуме.';
$txt['sp_function_sp_calendar_desc'] = 'Отображает календарь на месяц со всеми событиями.';
$txt['sp_function_sp_calendarInformation_desc'] = 'Отображает информацию из календаря, такую как дни рождения, события, праздники.';
$txt['sp_function_sp_rssFeed_desc'] = 'Отображает RSS подписку.';
$txt['sp_function_sp_theme_select_desc'] = 'Отображает список доступных тем и позволяет пользователям выбирать себе темы.';
$txt['sp_function_sp_staff_desc'] = 'Отображает список административного штата форума, с их положением, аватаром и статусом.';
$txt['sp_function_sp_articles_desc'] = 'Отображает последние добавленные или случайные статьи.';
$txt['sp_function_sp_shoutbox_desc'] = 'Отображает мини-чат.';
$txt['sp_function_sp_gallery_desc'] = 'Отображает последние добавленные материалы галереи.';
$txt['sp_function_sp_arcade_desc'] = 'Отображает различную информацию об играх, если установлена модификация Игр (Аркад).';
$txt['sp_function_sp_shop_desc'] = 'Отображает различные типы содержимого из магазина, если модификация Магазина была установлена.';
$txt['sp_function_sp_blog_desc'] = 'Отображает различную информацию из блогов, если модификация для блогов была установлена.';
$txt['sp_function_sp_menu_desc'] = 'Отображает вертикальное меню форума.';
$txt['sp_function_sp_bbc_desc'] = 'Блок, в котором материал может быть написан с использованием BBC-тегов.';
$txt['sp_function_sp_html_desc'] = 'Блок, в котором материал может быть написан с использованием HTML-тегов.';
$txt['sp_function_sp_php_desc'] = 'Блок, который может использовать PHP-код в своем содержимом.';

// Block parameters
$txt['sp_param_sp_latestMember_limit'] = 'Пользователи для отображения';
$txt['sp_param_sp_whosOnline_online_today'] = 'Сегодня он-лайн';
$txt['sp_param_sp_boardStats_averages'] = 'Показать среднее количество';
$txt['sp_param_sp_topPoster_limit'] = 'Самые активные авторы для отображения';
$txt['sp_param_sp_topPoster_type'] = 'Отображать';
$txt['sp_param_sp_topStatsMember_type'] = 'Тип для списка Наилучших пользователей';
$txt['sp_param_sp_topStatsMember_limit'] = 'Пользователи для отображения';
$txt['sp_param_sp_topStatsMember_enable_label'] = 'Включить метку для списка';
$txt['sp_param_sp_topStatsMember_list_label'] = 'Метка списка';
$txt['sp_param_sp_topStatsMember_sort_asc'] = 'Сортировать в обратном порядке';
$txt['sp_param_sp_topStatsMember_last_active_limit'] = 'Удалить неактивных пользователей из списка<br /><span class="smalltext">(в днях)</span>';
$txt['sp_param_sp_recent_limit'] = 'Последние сообщения или темы для отображения';
$txt['sp_param_sp_recent_type'] = 'Отображать';
$txt['sp_param_sp_recent_display'] = 'Отображать тип';
$txt['sp_param_sp_recent_boards'] = 'Включить разделы';
$txt['sp_param_sp_topTopics_type'] = 'Тип сортировки';
$txt['sp_param_sp_topTopics_limit'] = 'Тем для отображения';
$txt['sp_param_sp_topBoards_limit'] = 'Разделов для отображения';
$txt['sp_param_sp_showPoll_topic'] = 'Идентификатор темы (ID)';
$txt['sp_param_sp_showPoll_type'] = 'Тип';
$txt['sp_param_sp_boardNews_board'] = 'Разделы';
$txt['sp_param_sp_boardNews_limit'] = 'Темы для отображения';
$txt['sp_param_sp_boardNews_start'] = 'Начать отображать с темы, имеющей индентификатор (ID)';
$txt['sp_param_sp_boardNews_length'] = 'Максимум символов';
$txt['sp_param_sp_boardNews_avatar'] = 'Показывать аватары';
$txt['sp_param_sp_boardNews_per_page'] = 'Сообщений на страницу';
$txt['sp_param_sp_attachmentImage_limit'] = 'Изображения для отображения';
$txt['sp_param_sp_attachmentImage_direction'] = 'Список Направлений';
$txt['sp_param_sp_attachmentImage_disablePoster'] = 'Удалить изображение от пользователя с именем';
$txt['sp_param_sp_attachmentImage_disableDownloads'] = 'Удалить Изображение Скачать';
$txt['sp_param_sp_attachmentImage_disableLink'] = 'Удалить ссылку для скачивания изображения';
$txt['sp_param_sp_attachmentRecent_limit'] = 'Вложения для отображения';
$txt['sp_param_sp_calendar_events'] = 'Показывать события';
$txt['sp_param_sp_calendar_birthdays'] = 'Показывать дни рождения';
$txt['sp_param_sp_calendar_holidays'] = 'Показывать праздники';
$txt['sp_param_sp_calendarInformation_events'] = 'Позволит отображать события';
$txt['sp_param_sp_calendarInformation_future'] = 'Будущие события';
$txt['sp_param_sp_calendarInformation_birthdays'] = 'Отображение дней рождений';
$txt['sp_param_sp_calendarInformation_holidays'] = 'Отображение праздников';
$txt['sp_param_sp_rssFeed_url'] = 'URL для подписки';
$txt['sp_param_sp_rssFeed_show_title'] = 'Показывать заголовок';
$txt['sp_param_sp_rssFeed_show_content'] = 'Показывать контент';
$txt['sp_param_sp_rssFeed_show_date'] = 'Показывать дату';
$txt['sp_param_sp_rssFeed_strip_preserve'] = 'Сохранить HTML теги';
$txt['sp_param_sp_rssFeed_count'] = 'Элементы для отображения';
$txt['sp_param_sp_rssFeed_limit'] = 'Предел символов';
$txt['sp_param_sp_staff_lmod'] = 'Запретить локальное редактирование';
$txt['sp_param_sp_articles_category'] = 'Категория';
$txt['sp_param_sp_articles_limit'] = 'Статьи для отображения';
$txt['sp_param_sp_articles_type'] = 'Тип отображения';
$txt['sp_param_sp_articles_image'] = 'Изображение';
$txt['sp_param_sp_shoutbox_shoutbox'] = 'Мини-чат для отображения';
$txt['sp_param_sp_gallery_limit'] = 'Материалы для отображения';
$txt['sp_param_sp_gallery_type'] = 'Отобразить';
$txt['sp_param_sp_gallery_direction'] = 'Списко направлений';
$txt['sp_param_sp_arcade_limit'] = 'Материалы для отображения';
$txt['sp_param_sp_arcade_type'] = 'Отобразить';
$txt['sp_param_sp_shop_style'] = 'Отобразить';
$txt['sp_param_sp_shop_limit'] = 'Материалы для отображения';
$txt['sp_param_sp_shop_type'] = 'Тип валюты';
$txt['sp_param_sp_shop_sort'] = 'Элементы для отображения';
$txt['sp_param_sp_blog_limit'] = 'Материалы для отображения';
$txt['sp_param_sp_blog_type'] = 'Тип материала';
$txt['sp_param_sp_blog_sort'] = 'Отобразить';
$txt['sp_param_sp_html_content'] = 'Блок HTML';
$txt['sp_param_sp_bbc_content'] = 'Блок BBC';
$txt['sp_param_sp_php_content'] = 'Блок PHP';

// Parameter options
$txt['sp_param_sp_topPoster_type_options'] = 'Все время|Сегодня|На этой неделе|В этом месяце';
$txt['sp_param_sp_topStatsMember_type_options'] = 'Время проведенное на форуме|Сообщений|Положительная карма|Отрицательная карма|Общая карма|Наиболее количество полученных благодарностей|Наибольшее количество объявленных благодарностей|Automatic Karma Положительная|Automatic Karma Отрицательная|Automatic Karma Общая|Advanced Reputation System Best|Advanced Reputation System Worst';
$txt['sp_param_sp_recent_type_options'] = 'Сообщений|Тем';
$txt['sp_param_sp_recent_display_options'] = 'Компактно|Полностью';
$txt['sp_param_sp_topTopics_type_options'] = 'По Ответам|По Просмотрам';
$txt['sp_param_sp_showPoll_type_options'] = 'Нормальный|Последние|Случайные';
$txt['sp_param_sp_attachmentImage_direction_options'] = 'Вертикально|Горизонтально';
$txt['sp_param_sp_articles_type_options'] = 'Последние|Случайные';
$txt['sp_param_sp_articles_image_options'] = 'Нет|Аватар автора|Изображение категории';
$txt['sp_param_sp_gallery_type_options'] = 'Последние|Случайные';
$txt['sp_param_sp_gallery_direction_options'] = 'Вертикально|Горизонтально';
$txt['sp_param_sp_arcade_type_options'] = 'Самые популярные игры|Лучшие игроки|Длительность чемпионства';
$txt['sp_param_sp_shop_style_options'] = 'Пользователей|Элементов';
$txt['sp_param_sp_shop_type_options'] = 'Общее|Бережливые|Банк';
$txt['sp_param_sp_shop_sort_options'] = 'Свежие|Случайные';
$txt['sp_param_sp_blog_type_options'] = 'Статьи|Блоги';
$txt['sp_param_sp_blog_sort_options'] = 'Последние|Случайные';

// Articles area
$txt['sp-adminArticleListName'] = 'Список статей';
$txt['sp-adminArticleListDesc'] = 'На этой странице отображается список всех сообщений, которые могут быть добавлены как статьи. Выбрав соответствующую опцию, Вы можете изменить эти настройки.';
$txt['sp-adminArticleAddName'] = 'Добавить статью';
$txt['sp-adminArticleAddDesc'] = 'На этой странице Вы можете добавить статью на портал.';
$txt['sp-adminArticleAddNoTopics'] = 'В этом разделе больше нет тем, которые могут быть добавлены как статья.';

// Article list
$txt['sp-articlesRemove'] = 'Удалить выбранное';
$txt['sp-articlesConfirm'] = 'Вы уверены, что хотите удалить эти статьи?';
$txt['sp-articlesDeleteConfirm'] = 'Вы уверены, что хотите удалить эту статью?';

// Add/Edit articles
$txt['sp-articlesAdd'] = 'Добавить статью';
$txt['sp-articlesEdit'] = 'Редактировать статью';
$txt['sp-articlesCategory'] = 'Категория для статей';
$txt['sp-articlesApproved'] = 'Одобрить';

// Categories area
$txt['sp-adminCategoryListName'] = 'Список категорий';
$txt['sp-adminCategoryListDesc'] = 'На этой странице отображается список всех категорий для статей. Выбрав соответствующую опцию, Вы можете изменить эти настройки.';
$txt['sp-adminCategoryAddName'] = 'Добавить категорию';
$txt['sp-adminCategoryAddDesc'] = 'На этой странице Вы можете добавить категорию, чтобы разместить в ней статью.';

// Category list
$txt['sp-categoriesCategories'] = 'Категории';

// Add/Edit category
$txt['sp-categoriesAdd'] = 'Добавить категорию';
$txt['sp-categoriesEdit'] = 'редактировать категорию';
$txt['sp-categoriesName'] = 'Имя';
$txt['sp-categoriesPicture'] = 'URL изображения';
$txt['sp-categoriesPublish'] = 'Опубликовать на портале';

// Delete category
$txt['sp-categoriesDelete'] = 'Удалить категорию';
$txt['sp-categoriesDeleteCount'] = 'В этой категории статей: %s.';
$txt['sp-categoriesDeleteOption1'] = 'Вы желаете переместить выбранную статью в другую директорию?';
$txt['sp-categoriesDeleteOption2'] = 'При удалении категории сместе с ней дуляются и статьи, находящиеся в этой категории.';
$txt['sp-categoriesDeleteConfirm'] = 'Вы уверены, что хотите удалить эту категорию?';
$txt['sp-categoriesMove'] = 'Переместить';
$txt['sp-categoriesMoveTo'] = 'Перенести в';

// Block list titles
$txt['sp-adminColumnType'] = 'Тип';
$txt['sp-adminColumnMove'] = 'Переместить';

// Article list titles
$txt['sp-adminColumnTopic'] = 'Тема';
$txt['sp-adminColumnBoard'] = 'Раздел';
$txt['sp-adminColumnPoster'] = 'Автор';
$txt['sp-adminColumnTime'] = 'Время';
$txt['sp-adminColumnCategory'] = 'Категория';
$txt['sp-adminColumnApproved'] = 'Одобрено';

// Category list titles
$txt['sp-adminColumnPicture'] = 'Изображение';
$txt['sp-adminColumnArticles'] = 'Статьи';
$txt['sp-adminColumnPublish'] = 'Публикация';

// Pages Area
$txt['sp_admin_pages_title'] = 'Страницы';
$txt['sp_admin_pages_list'] = 'Список страниц';
$txt['sp_admin_pages_add'] = 'Добавить страницу';
$txt['sp_admin_pages_edit'] = 'Редактировать страницу';
$txt['sp_admin_pages_remove'] = 'Удалить страницу';
$txt['sp_admin_pages_preview'] = 'Предварительный просмотр';
$txt['sp_admin_pages_general'] = 'Основные настройки';
$txt['sp_admin_pages_style'] = 'Настройки стилей';

$txt['sp_admin_pages_desc'] = 'Здесь Вы можете управлять и редактировать страницы Портала.';
$txt['sp_pages_remove_confirm'] = 'Вы уверены, что хотите удалить выбранные страницы?';
$txt['sp_admin_pages_delete_confirm'] = 'Вы уверены, что хотите удалить эту страницу?';
$txt['sp_error_no_pages'] = 'Нет доступных страниц.';
$txt['sp_error_page_name_empty'] = 'Извините, но Вы оставили название пустым.';
$txt['sp_error_page_namespace_empty'] = 'Извините, но Вы забыли указать идентификатор страницы';
$txt['sp_error_page_namespace_duplicate'] = 'Извините, указанные Вами идентификатор уже используется';
$txt['sp_error_page_namespace_invalid_chars'] = 'Извините, Вы неправильно указали идентификатор для страницы. Идентификатор может включать только латинские буквы, цифры и знак подчеркивания.';
$txt['sp_error_page_namespace_numeric'] = 'Извините, но идентификатор не может использовать только цифры. Идентификатор должен включать обяззательно буквы и/или знак подчеркивания';

$txt['sp_admin_pages_col_title'] = 'Заголовок';
$txt['sp_admin_pages_col_namespace'] = 'Идентификатор страницы';
$txt['sp_admin_pages_col_body'] = 'Содержимое';
$txt['sp_admin_pages_col_type'] = 'Тип';
$txt['sp_admin_pages_col_views'] = 'Просмотров';
$txt['sp_admin_pages_col_status'] = 'Включить';
$txt['sp_admin_pages_col_actions'] = 'Действия';
$txt['sp_admin_pages_col_permissions'] = 'Права доступа';
$txt['sp_admin_pages_permissions_set_custom'] = 'Выбор';
$txt['sp_admin_pages_permissions_set_guests'] = 'Гости';
$txt['sp_admin_pages_permissions_set_members'] = 'Пользователи';
$txt['sp_admin_pages_permissions_set_everyone'] = 'Все';
$txt['sp_admin_pages_col_custom_permissions'] = 'Выбрать настройки для каждой группы';
$txt['sp_admin_pages_custom_permissions_membergroup'] = 'Группы пользователей';
$txt['sp_admin_pages_custom_permissions_allowed_short'] = 'A';
$txt['sp_admin_pages_custom_permissions_disallowed_short'] = 'X';
$txt['sp_admin_pages_custom_permissions_denied_short'] = 'D';
$txt['sp_admin_pages_custom_permissions_allowed'] = 'Разрешено';
$txt['sp_admin_pages_custom_permissions_disallowed'] = 'Запрещено';
$txt['sp_admin_pages_custom_permissions_denied'] = 'Не разрешено';
$txt['sp_admin_pages_col_blocks'] = 'Блок';
$txt['sp_admin_pages_activate'] = 'Включить';
$txt['sp_admin_pages_deactivate'] = 'Выключить';

$txt['sp_pages_default_title'] = 'Неозаглавленная страница';

$txt['sp_pages_type_bbc'] = 'BBC';
$txt['sp_pages_type_html'] = 'HTML';
$txt['sp_pages_type_php'] = 'PHP';

// Shoutboxes Area
$txt['sp_admin_shoutbox_title'] = 'Мини-чат';
$txt['sp_admin_shoutbox_list'] = 'Список мини-чата';
$txt['sp_admin_shoutbox_add'] = 'Добавить мини-чат';
$txt['sp_admin_shoutbox_edit'] = 'Редактировать мини-чат';
$txt['sp_admin_shoutbox_prune'] = 'Очистить мини-чат';
$txt['sp_admin_shoutbox_remove'] = 'Удалить мини-чат';

$txt['sp_admin_shoutbox_desc'] = 'Здесь вы можете создать и редактировать мини-чат Портала';
$txt['sp_shoutbox_remove_confirm'] = 'Вы уверены, что хотите удалить выбранные мини-чаты?';
$txt['sp_admin_shoutbox_delete_confirm'] = 'Вы уверены, что хотите удалить этот мини-чат?';
$txt['sp_error_no_shoutbox'] = 'Нет доступных мини-чатов.';
$txt['sp_error_shoutbox_name_duplicate'] = 'Извините, но мини-чат с таким именем уже существует .';

$txt['sp_admin_shoutbox_col_name'] = 'Имя';
$txt['sp_admin_shoutbox_col_shouts'] = 'Отправка';
$txt['sp_admin_shoutbox_col_caching'] = 'Кэширование';
$txt['sp_admin_shoutbox_col_status'] = 'Включить';
$txt['sp_admin_shoutbox_col_actions'] = 'Действия';
$txt['sp_admin_shoutbox_col_permissions'] = 'Права доступа';
$txt['sp_admin_shoutbox_permissions_set_custom'] = 'Выбор';
$txt['sp_admin_shoutbox_permissions_set_guests'] = 'Гости';
$txt['sp_admin_shoutbox_permissions_set_members'] = 'Пользователи';
$txt['sp_admin_shoutbox_permissions_set_everyone'] = 'Все';
$txt['sp_admin_shoutbox_col_custom_permissions'] = 'Выбрать настройки для каждой группы';
$txt['sp_admin_shoutbox_custom_permissions_membergroup'] = 'Группы пользователей';
$txt['sp_admin_shoutbox_custom_permissions_allowed_short'] = 'A';
$txt['sp_admin_shoutbox_custom_permissions_disallowed_short'] = 'X';
$txt['sp_admin_shoutbox_custom_permissions_denied_short'] = 'D';
$txt['sp_admin_shoutbox_custom_permissions_allowed'] = 'Разрешено';
$txt['sp_admin_shoutbox_custom_permissions_disallowed'] = 'Запрещено';
$txt['sp_admin_shoutbox_custom_permissions_denied'] = 'Не разрешено';
$txt['sp_admin_shoutbox_col_moderators'] = 'Модераторы';
$txt['sp_admin_shoutbox_col_reverse'] = 'Обратный порядок сортировки';
$txt['sp_admin_shoutbox_activate'] = 'Включить';
$txt['sp_admin_shoutbox_deactivate'] = 'Выключить';

$txt['sp_shoutbox_default_name'] = 'Мини-чат без имени';

$txt['sp_admin_shoutbox_col_warning'] = 'ВНИМАНИЕ';
$txt['sp_admin_shoutbox_col_bbc'] = 'Разрешить BBC';
$txt['sp_admin_shoutbox_col_height'] = 'Высота<span class="smalltext">(пикселей)</span>';
$txt['sp_admin_shoutbox_col_num_show'] = 'Сообщений для отображения';
$txt['sp_admin_shoutbox_col_num_max'] = 'Максимальное количество сообщений';
$txt['sp_admin_shoutbox_col_refresh'] = 'Автообновление<span class="smalltext">(в секундах)</span>';

$txt['sp_admin_shoutbox_opt_all'] = 'Удалить все сообщения';
$txt['sp_admin_shoutbox_opt_days'] = 'Удалить сообщения, старше указаного количества дней';
$txt['sp_admin_shoutbox_opt_member'] = 'Удалить сообщения, указаного пользователя';

$txt['sp_admin_shoutbox_block_redirect_message'] = 'Поздравляем, вы создали новый Мини-чат! Перед тем как пользователи смогут использовать чат,<br />
его необходимо поместить в блок, выбрав тем самым, место его расположения.<br /><br />Нажмите <a href="%s"><b>здесь</b></a>, чтобы создать новый блок, для этого чата.<br />
Нажмите <a href="%s"><b>здесь</b></a>, чтобы продолжить работу со списком Мини-чата.';

// General titles
$txt['sp-adminColumnAction'] = 'Действие';
$txt['sp-adminColumnName'] = 'Имя';

// Miscellaneous strings
$txt['sp-positionLeft'] = 'Левые';
$txt['sp-positionTop'] = 'Верхние центральные';
$txt['sp-positionBottom'] = 'Нижние центральные';
$txt['sp-positionRight'] = 'Правые';
$txt['sp-positionHeader'] = 'Верхние';
$txt['sp-positionFooter'] = 'Нижние';
$txt['sp-placementBefore'] = 'Перед';
$txt['sp-placementAfter'] = 'После';
$txt['sp-placementUnchanged'] = 'Без изменений';
$txt['sp-stateYes'] = 'Да';
$txt['sp-stateNo'] = 'Нет';

// Information area
$txt['sp-info_title'] = 'Информация';
$txt['sp-info_desc'] = 'Полезная системная информация и информация о SimplePortal.';
$txt['sp-info_live'] = 'Актуальные новости от SimplePortal...';
$txt['sp-info_no_live'] = 'Извините! Невозможно соединиться с simpleportal.net для получения последних файлов.';
$txt['sp-info_general'] = 'Основная информация';
$txt['sp-info_versions'] = 'Информация о версии';
$txt['sp-info_your_version'] = 'Ваша версия';
$txt['sp-info_current_version'] = 'Текущая версия';
$txt['sp-info_managers'] = 'Администраторы';
$txt['sp-info_intro'] = 'Команда SimplePortal выражает благодарность всем, кто использует и поддерживает SimplePortal в его развитии, а также благодарит команду Simple Machines за их замечательный и стабильный движок форума SMF.';
$txt['sp-info_team'] = 'Команда';
$txt['sp-info_special'] = 'Специальные благодарности';
$txt['sp-info_and'] = 'и';
$txt['sp-info_anyone'] = 'А также всем тем, кого мы забыли упомянуть, спасибо!';
$txt['sp-info_groups_pm'] = 'Менеджеры проекта';
$txt['sp-info_groups_dev'] = 'Разработчики';
$txt['sp-info_groups_support'] = 'Специалисты техподдержки';
$txt['sp-info_groups_customize'] = 'Настройщики';
$txt['sp-info_groups_language'] = 'Менеджеры локализаций';
$txt['sp-info_groups_marketing'] = 'Маркетологи';
$txt['sp-info_groups_beta'] = 'Бета-тестеры';
$txt['sp-info_groups_translators'] = 'Переводчики';
$txt['sp-info_translators_message'] = 'Благодарим вас за ваши усилия по интернационализации SimplePortal.';
$txt['sp-info_groups_founder'] = 'Отец-основатель SimplePortal';
$txt['sp-info_groups_orignal_pm'] = 'Первоначальные менеджеры проекта';
$txt['sp-info_fam_fam'] = 'Pretty Icons';
$txt['sp-info_fam_fam_message'] = 'Mark James с его <a href="http://www.famfamfam.com/lab/icons/silk/">Fam Fam Fam Silk Icons</a>.';
$txt['sp-info_contribute'] = 'Считате, что Портал удобен? <a href="%s" target="_blank">Поддержите проект!</a>';

// Permissions
$txt['permissiongroup_sp'] = 'Портал';
$txt['permissiongroup_simple_sp'] = 'Портал';
$txt['permissionname_sp_admin'] = 'Администрирование портала';
$txt['permissionhelp_sp_admin'] = 'Это право предоставит возможность пользователям администрировать Портал.';
$txt['permissionname_sp_manage_settings'] = 'Управлять настройками Портала';
$txt['permissionhelp_sp_manage_settings'] = 'Это право предоставит возможность пользователям управлять настройками Портала.';
$txt['permissionname_sp_manage_blocks'] = 'Управление блоками Портала';
$txt['permissionhelp_sp_manage_blocks'] = 'Это право предоставит возможность пользователям управлять блоками Портала.';
$txt['permissionname_sp_manage_articles'] = 'Управление статьями поратала';
$txt['permissionhelp_sp_manage_articles'] = 'Это право предоставит возможность пользователям управлять статьями Портала.';
$txt['permissionname_sp_manage_pages'] = 'Управлять страницами портала';
$txt['permissionhelp_sp_manage_pages'] = 'Это право предоставит возможность пользователям управлять страницами Портала.';
$txt['permissionname_sp_manage_shoutbox'] = 'Управлять мини-чатами портала';
$txt['permissionhelp_sp_manage_shoutbox'] = 'Это право предоставит возможность пользователям управлять мини-чатами Портала.';
$txt['permissionname_sp_add_article'] = 'Возможность добавить статью';
$txt['permissionhelp_sp_add_article'] = 'Это право предоставит возможность пользователям добавлять статьи.';
$txt['permissionname_sp_auto_article_approval'] = 'Автоматическое одобрение статей';
$txt['permissionhelp_sp_auto_article_approval'] = 'Это право предоставит возможность пользователям добавлять статьи без предварительного одобрения.';
$txt['permissionname_sp_remove_article'] = 'Возможность удаления статей';
$txt['permissionhelp_sp_remove_article'] = 'Это право предоставит возможность пользователям удалять статьи.';

// Compatibility strings
$txt['sp-adminCatHelp'] = 'Здесь Вы можете управлять Порталом и изменять его конфигурацию.';
$txt['sp-adminCatDesc'] = 'Здесь Вы можете управлять Порталом и изменять его конфигурацию.';

?>