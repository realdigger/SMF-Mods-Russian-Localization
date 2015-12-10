<?php
// Version: 2.3.5; SPortalHelp

global $helptxt;

// Configuration area
$helptxt['sp_ConfigurationArea'] = 'Здесь Вы можете настроить ваш портал по своему желанию.';

// General settings
$helptxt['portalactive'] = 'Включить главную страницу портала.';
$helptxt['sp_portal_mode'] = 'Портал может отображаться по-разному. <br />
<strong>Выключен:</strong> Полное отключение портала.<br /><br />
<strong>Главная страница:</strong> Эта опция отмечена по-умолчанию. Портал отбражается и является главной страницей форума.<br /><br />
<strong>Интеграция:</strong> Эта опция отключит главную странцу портала . Блоки будут использоваться на форуме<br /><br />
<strong>Автономный:</strong> Эта опция может отображать портал по выбранному адресу, отдельно от форума.';
$helptxt['sp_maintenance'] = 'Если включено, к порталу будут иметь доступ только модераторы и админы.';
$helptxt['sp_standalone_url'] = 'Полный адрес до автономного файла портала.<br /><br />Пример: http://myforum.com/portal.php';
$helptxt['portaltheme'] = 'Выберите тему для использования на портале.';
$helptxt['sp_disableForumRedirect'] = 'Эта опция выключит  ?action=forum переадресацию.';
$helptxt['sp_disableColor'] = 'Если установлен мод цветных ников, эта опция отключит его на портале (Используется в списке кто он-лайн).';
$helptxt['sp_disable_random_bullets'] = 'Выключает случайный цвет для изображений.';
$helptxt['sp_disable_php_validation'] = 'Выключает проверку синтаксиса php в блоках.';
$helptxt['sp_disable_side_collapse'] = 'Выключает сворачивание блоков на портале.';
$helptxt['sp_resize_images'] = 'Позволяет изменять размер изображения в статьях и разделах до размера 300x300px, для предотварщения сдвигания блоков.';

// Block settings
$helptxt['showleft'] = 'Эта опция включает возможность использования левых блоков.';
$helptxt['showright'] = 'Эта опция включает возможность использования правых блоков.';
$helptxt['leftwidth'] = 'Ширина левой колонки с блоками. Можно использовать пиксели, например 220, можно проценты, например 20%.';
$helptxt['rightwidth'] = 'Ширина правой колонки с блоками. Можно использовать пиксели, например 220, можно проценты, например 20%.';
$helptxt['sp_enableIntegration'] = 'Эта опция включает показ блоков не только на портале, но и на форуме.';
$helptxt['sp_IntegrationHide'] = 'Эта опция скрывает блоки на форуме.';

// Article settings
$helptxt['articleactive'] = 'Эта опция включает показ статей на портале.';
$helptxt['articleperpage'] = 'Сколько статей показывать на странице.';
$helptxt['articlelength'] = 'Сколько символов показывать в предпросмотре статьи. После окончания лимита последует ... и  ссылка Читать далее...';
$helptxt['articleavatar'] = 'Если включить, то сверху будет показана уменьшенная аватара автора статьи.';

// Blocks area
$helptxt['sp_BlocksArea'] = 'Эта опция позволяет настроить просмотр блоков.';

// Block list
$helptxt['sp-blocksLeftList'] = 'Все левые блоки на вашем портале или форуме.';
$helptxt['sp-blocksTopList'] = 'Все верхние блоки на вашем портале или форуме.';
$helptxt['sp-blocksBottomList'] = 'Все нижние блоки на вашем портале или форуме.';
$helptxt['sp-blocksRightList'] = 'Все правые блоки на вашем портале или форуме.';
$helptxt['sp-blocksHeaderList'] = 'These blocks are displayed on the top of the portal and forum.';
$helptxt['sp-blocksFooterList'] = 'These blocks are displayed on the bottom of the portal and forum.';

// Add/Edit blocks
$helptxt['sp-blocksAdd'] = 'Добавьте свой блок, и настройте опции отображения.';
$helptxt['sp-blocksSelectType'] = 'Тип блока.';
$helptxt['sp-blocksEdit'] = 'Редактирование блока и изменение основных параметров отображения.';
$helptxt['sp-blocksDisplayOptions'] = 'Эти настройки позволяют выбрать место, где будет появляться блок.';
$helptxt['sp-blocksCustomDisplayOptions'] = 'Пользовательские настройки отображения позволят более тщательно контролировать вывод блоков именно там, где Вам нужно, используя специальный ситаксис.<br /><br />
<strong>Специальные действия включают:</strong><br /><br />
<strong>all:</strong> на каждой странице форума.<br />
<strong>portal:</strong> на странице портала и его дочерних действиях.<br />
<strong>forum:</strong> во всех действиях и разделах, исключая портал.<br />
<strong>allaction:</strong> во всех действиях.<br />
<strong>allboard:</strong> во всех разделах.<br /><br />
<strong>Тильда (~)</strong><br />
Этот знак действует в качестве шаблона, позволяя включать блоки в динамические активные действия, например, для таких действий как ../index.php?issue=* или ../index.php?game=*. Написав опцию ~action мы получим, что нажав любую кнопку меню, свзяанную с действием, мы обязательно на загруженной странице увидим этот блок<br /><br />
<strong>Разделитель (|)</strong><br />
Другой символ позволит включить динамичные действия, например, для действий ../index.php?issue=1.0 или ../index.php?game=xyz. Должно быть использованы с тильдой имя действия и после через прямую черту (Разделитель) нужное значение; ~action|value<br />Например, написав ~action|game, мы нажав на кнопку Игры в главном меню увидем блок, для которого мы задали этот параметр в расширенных опциях. Или если надо прописать вывод блока на конкретный раздел, то можно просто написать ~board|12.0 и у Вас в разделе с идентификатором 12 отобразится этот блок.<br />
<strong>Минус (-)</strong><br />
Этот символ - есть исключение регулярных и динамических действий. Должно быть использовано до начала имени действия для регулярных действий и перед тильдой для динамических. Используется как -action и -~action<br />Таким образом Вы исключаете вывод блока при каких-то действиях... Поэксперментируете самостоятельно и поймете!';
$helptxt['sp-blocksStyleOptions'] = 'Специальные стили scc для блока.<br />
Здесь представлены поля, которые можно заполнить, а можно оставить по умолчанию.<br />
В то же время, создав свои собственные классы и стили в index.css или style.css, Вы можете указать их имена в нижеследующих полях.
<ul>
<li><strong>Default Title Class</strong> - Класс Заголовка по умолчанию</li>
<li><strong>Custom Title Class</strong> - Класс Заголовка, установленный пользователем</li>
<li><strong>Custom Title Style</strong> - Стиль заголовка, установленный пользователем</li>
<li><strong>Default Body Class</strong> - Класс для основного содержимого блока по умолчанию</li>
<li><strong>Custom Body Class</strong> - Класс для основного содержимого блока, установленный пользователем</li>
<li><strong>Custom Body Style</strong> - Стиль для основного содержимого блока, установленный пользователем</li>
</ul>
Кроме того, Вы можете не выводить заголовок у блока, отключив его в опции <strong>Не отображать заголовок</strong> или же можете отключить вывод основного содержимого (тела) блока, установив флажок в опции <strong>не отображать содержимое блока</strong>';

// Articles area
$helptxt['sp_ArticlesArea'] = 'Статьи берутся из темы (только первое сообщение). Выберите нужную тему для добавления статьи.';

// Add/Edit articles
$helptxt['sp-articlesAdd'] = 'Добавить';
$helptxt['sp-articlesEdit'] = 'Редактировать';
$helptxt['sp-articlesCategory'] = 'Выберите категорию для этой статьи.';
$helptxt['sp-articlesApproved'] = 'Одобрено';
$helptxt['sp-articlesTopics'] = 'Выберите тему для отображения на портале.';
$helptxt['sp-articlesBoards'] = 'Выберите раздел с темой.';

// Categories area
$helptxt['sp_CategoriesArea'] = 'Категории, в которых находятся статьи. Здесь вы можете настроить категории.';

// Add/Edit categories
$helptxt['sp-categoriesAdd'] = 'Здесь добавляется категория. Для создания статьи нужна хотя бы одна категория';
$helptxt['sp-categoriesEdit'] = 'Здесь Вы можете отредактировать категории.';
$helptxt['sp-categoriesCategories'] = 'На этой странице находятся все опубликованные категории.';
$helptxt['sp-categoriesDelete'] = 'Удалив категорию Вы также удалите все статьи в ней.';

// Pages area
$helptxt['sp_PagesArea'] = 'Страницы - это BBC, PHP или HTML блоки, которые показываются на их собственной странице в пределах вашего форума. Эта секция позволит Вам создавать, редактировать и настраивать Ваши страницы.';

// Shoutbox area
$helptxt['sp_ShoutboxArea'] = 'Мини-чаты необходимо создать в этом разделе. Этот раздел позволяет создавать и настраивать мини-чаты. После того, как Вы создадите миничат здесь, Вы сможете выбрать Блок мини-чата для использования в списке по созданию блоков.';

// Add/Edit shoutboxes
$helptxt['sp-shoutboxesWarning'] = 'Введите предупреждающее сообщение для отображения в Мини-чате. Любой пользователь, вошедший в мини-чат увидит это предупреждение.';
$helptxt['sp-shoutboxesBBC'] = 'Эта настройка позволит Вам выбрать будет ли разрешено пользователям использовать в мини-чате BBC теги.<br /><br />Удерживайте клавишу CTRL, чтобы запретить или разрешить конкретный тег BBC. <br /><br />Если вы хотите выбрать ряд последовательных BBC, тогда щелкните по первому BBC тегу, который хотите выделить и, удерживая нажатой клавишу SHIFT, щелкните по последнему тегу BBC, который хотите выделить.';

$helptxt['sp_permissions'] = 'Настройки прав доступа для блока.
<ul>
	<li><strong>Гости:</strong> Блок <em>будет</em> виден только гостям. Пользователи, вошедшие в систему (включая администраторов), <em>не будут</em> видеть этот блок.</li>
	<li><strong>Пользователи:</strong> Любой пользователь, вошедший в систему (включая администраторов), <em>будет</em> видеть этот блок.</li>
	<li><strong>Все:</strong> Все пользователи, находящиеся на форуме (гости и зарегистрированные), <em>будут</em> видеть этот блок.</li>
	<li><strong>Выбрать:</strong> Выберете этот пункт, чтобы точно указать группу, которой разрешен просмотр блока. В опциях, доступно три варианта доступа, для каждой из групп - \'Разрешить\' (A), \'Отклонить\' (X), или \'Запретить\' (D)
		<ul>
			<li><strong>A:</strong> Разрешено - любой пользователь этой группы, <em>будет</em> видеть этот блок видеть блок.</li>
			<li><strong>X:</strong> Не разрешено - пользователь этой группы <em>не будет</em> видеть этот блок. Пользователь может его увидеть блок, если это разрешено, другими настройками.</li>
			<li><strong>D:</strong> Запрещено - пользователь этой группы, никогда <em>не увидят</em> этот блок (даже администратор и модератор). Эта опция, отменяет все другие разрешения, так что <strong>будьте осторожны</strong>.</li>
		</ul>
	</li>
</ul>';

// Block parameters
$helptxt['sp_param_sp_latestMember_limit'] = 'Сколько пользователей показывать.';
$helptxt['sp_param_sp_boardStats_averages'] = 'Показывать статистику.';
$helptxt['sp_param_sp_topPoster_limit'] = 'Сколько лучших авторов.';
$helptxt['sp_param_sp_topPoster_type'] = 'Временной период, по которому вести подсчет лучших авторов.';
$helptxt['sp_param_sp_recent_limit'] = 'Сколько показывать тем или сообщений.';
$helptxt['sp_param_sp_recent_type'] = 'Показывать последние сообщения или темы.';
$helptxt['sp_param_sp_recentPosts_limit'] = 'Сколько показывать последних сообщений.';
$helptxt['sp_param_sp_recentTopics_limit'] = 'Сколько показывать последних тем.';
$helptxt['sp_param_sp_topTopics_type'] = 'Сортировать темы по ответам или просмотрам.';
$helptxt['sp_param_sp_topTopics_limit'] = 'Сколько показывать тем.';
$helptxt['sp_param_sp_topBoards_limit'] = 'Сколько показывать разелов';
$helptxt['sp_param_sp_showPoll_topic'] = 'Идентификатор (ID) темы с голосованием.';
$helptxt['sp_param_sp_showPoll_type'] = 'Выбирите тип показа голосований. Нормальный тип - показ голосвания из темы с введённым ID, Последние - показ последнего созданного голосования, и случайные - показ случайного голосования.';
$helptxt['sp_param_sp_boardNews_board'] = 'Введите  идентификатор (ID)  раздела, из которого нужно брать темы. Если оставить пустым, будет браться из любого раздела.';
$helptxt['sp_param_sp_boardNews_limit'] = 'Максимальная количество новостей для показа.';
$helptxt['sp_param_sp_boardNews_start'] = 'Идентификатор (ID) сообщения с новостью (в противном случае будет использовано первое) .';
$helptxt['sp_param_sp_boardNews_length'] = 'Если отмечено, то новости будут иметь свой лимит по количеству символов  и будут оканчиваться (...), или ссылкой Читать далее...';
$helptxt['sp_param_sp_boardNews_avatar'] = 'Включить показ аватара автора новости.';
$helptxt['sp_param_sp_boardNews_per_page'] = 'Сколько новостей показывать на странице. Оставьте пустым для отмены разделения на страницы.';
$helptxt['sp_param_sp_attachmentImage_limit'] = 'Сколько отображать последних вложенных изображений.';
$helptxt['sp_param_sp_attachmentImage_direction'] = 'Изображение может быть выравнено по-горизонтали и по-вертикали.';
$helptxt['sp_param_sp_attachmentRecent_limit'] = 'Сколько показывать последних вложений.';
$helptxt['sp_param_sp_calendar_events'] = 'Показывать события из календаря.';
$helptxt['sp_param_sp_calendar_birthdays'] = 'Показывать дни рождений из календаря.';
$helptxt['sp_param_sp_calendar_holidays'] = 'Показывать праздники дни из календаря.';
$helptxt['sp_param_sp_calendarInformation_events'] = 'Показывать события из календаря.';
$helptxt['sp_param_sp_calendarInformation_future'] = 'Показывать будущие события.';
$helptxt['sp_param_sp_calendarInformation_birthdays'] = 'Показывать дни рождений в календаре.';
$helptxt['sp_param_sp_calendarInformation_holidays'] = 'Показывать праздники в календаре.';
$helptxt['sp_param_sp_rssFeed_url'] = 'Полный адрес до RSS ленты.';
$helptxt['sp_param_sp_rssFeed_show_title'] = 'Показывать заголовок.';
$helptxt['sp_param_sp_rssFeed_show_content'] = 'Показывать содержимое.';
$helptxt['sp_param_sp_rssFeed_show_date'] = 'Показывать дату.';
$helptxt['sp_param_sp_rssFeed_strip_preserve'] = 'Сохранить HTML-теги в содержимом канала, перечисленные через запятую.';
$helptxt['sp_param_sp_rssFeed_count'] = 'Количество новостей.';
$helptxt['sp_param_sp_rssFeed_limit'] = 'Максимальное кол-во символов в новости.';
$helptxt['sp_param_sp_staff_lmod'] = 'Исключить локальных модераторов из списка.';
$helptxt['sp_param_sp_articles_category'] = 'Категория для отображения статей.';
$helptxt['sp_param_sp_articles_limit'] = 'Сколько показывать статей.';
$helptxt['sp_param_sp_articles_type'] = 'Показывать случайные статьи или последние';
$helptxt['sp_param_sp_articles_image'] = 'Включиться аватар автора и иконку категории.';
$helptxt['sp_param_sp_gallery_limit'] = 'Сколько показывать изображений.';
$helptxt['sp_param_sp_gallery_type'] = 'Случайные или последние изображения.';
$helptxt['sp_param_sp_gallery_direction'] = 'Изображения могу выравниваться по-горизонтали или по-вертикали.';
$helptxt['sp_param_sp_arcade_limit'] = 'Сколько показывать игроков.';
$helptxt['sp_param_sp_arcade_type'] = 'Показывать последние игры, лучших игроков или длиннейший чемпионат.';
$helptxt['sp_param_sp_shop_style'] = 'Самый богатый пользователь.';
$helptxt['sp_param_sp_shop_limit'] = 'Сколько показывать пользователей.';
$helptxt['sp_param_sp_shop_type'] = 'Показывать сколько всего денег, денег в кошельке, денег в банке.';
$helptxt['sp_param_sp_shop_sort'] = 'Показывать последние поступления.';
$helptxt['sp_param_sp_blog_limit'] = 'Сколько блогов к показу.';
$helptxt['sp_param_sp_blog_type'] = 'Показывать статьи или блоги.';
$helptxt['sp_param_sp_blog_sort'] = 'Показывать случайные блоги или последние обновления.';
$helptxt['sp_param_sp_html_content'] = 'Введите ваш HTML код в форму.';
$helptxt['sp_param_sp_bbc_content'] = 'Введите ваш bbc код в форму.';
$helptxt['sp_param_sp_php_content'] = 'Введите ваш php код в форму.';

?>