<?php

/**
 * Fanfics System Mod by Kaero Webs
 *
// Version: 1.2; Fanfics
 **/

global $helptxt;

// Main Site
$txt['fanfics_menu'] = 'Фанфики';
$txt['fanfics_myfics'] = 'Мои фанфики';
$txt['fanfics_search'] = 'Поиск';
$txt['fanfics_viewall'] = 'Просмотр целиком';

// About
// When you translate the following line do not erase the variable %1$s neither the \" characters inside the link tag
$txt['fanfics_about1'] = 'Последняя версия FFSystem — v%1$s. <b><a href=\"http://custom.simplemachines.org/mods/index.php?mod=3741\" target=\"_blank\" class=\"new_win\">Скачать с официального сайта</a></b>.';
$txt['fanfics_about2'] = 'Благодарим за установку FFSystem. Надеемся, что этот мод приживётся на вашем форуме. Оставляйте комментарии в <b><a href="http://www.kaerowebs.com/index.php?board=2.0" target="_blank" class="new_win">специальном разделе</a></b>, обратная связь важна для дальнейшего совершенствования модификации.<br />
<br />Информацию о простейших операциях, доступных в FFSystem, смотрите в <b><a href="http://wiki.kaerowebs.com/kw/Fanfics_System:Main_Page" target="_blank" class="new_win">нашей вики</a></b>.<br />
<br />Не забудьте поблагодарить разработчиков за труд, если модификация вам пригодилась.';
// When you translate the following line do not erase the variable %1$s
$txt['fanfics_about3'] = 'Хотите больше возможностей? Попробуйте %1$s.';

// Age Consent
$txt['fanfics_goback'] = 'Вернуться';
$txt['fanfics_proceed'] = 'Продолжить';
$txt['fanfics_warning'] = 'Данная работа может содержать контент, предназначенный для взрослой аудитории. Для продолжения необходимо согласие на просмотр соответствующего материала.';

// Admin Strings
$txt['fanfics_about'] = 'О моде';
$txt['fanfics_admin'] = 'Настройки Fanfics System';
$txt['fanfics_admin_desc'] = 'Приветствуем вас в панели администрирования мода Fanfics System.';
$txt['fanfics_approsto'] = 'Утверждение рассказов';
$txt['fanfics_mancats'] = 'Управление категориями';
$txt['fanfics_manrats'] = 'Управление рейтингами';
$txt['fanfics_manstories'] = 'Управление рассказами';
$txt['fanfics_settings'] = 'Настройки';

// Add Category
$txt['fanfics_addcat'] = 'Добавить категорию';
$txt['fanfics_catexists'] = 'Категория с таким именем уже существует. Пожалуйста, выберите другое имя.';

// Add Chapter
$txt['fanfics_storycompleted'] = 'Невозможно добавление глав в законченный рассказ. Сначала снимите статус "Завершена" в настройках рассказа.';

// Add Rating
$txt['fanfics_addrat'] = 'Добавить рейтинг';
$txt['fanfics_ratexists'] = 'Рейтинг с таким именем уже существует. Пожалуйста, выберите другое имя.';
$txt['fanfics_showageconsent'] = 'Показывать согласие на возраст';

// Approve Stories
$txt['fanfics_awaitingcheck'] = '<span style="color: red; font-weight: bold;">Ожидает проверки</span>';
$txt['fanfics_ready'] = '<span style="color: green; font-weight: bold;">Ожидает одобрения</span>';
$txt['fanfics_status'] = 'Статус';
$txt['fanfics_uncategorised'] = 'БЕЗ КАТЕГОРИИ';
$txt['fanfics_unrated'] = 'БЕЗ РЕЙТИНГА';

// Delete Category
$txt['fanfics_deletecat'] = 'Удалить категорию';
$txt['fanfics_warningcat'] = 'Предупреждение: операция необратима!';
$txt['fanfics_warningcat2'] = 'Все вложенные категории будут удалены.';
$txt['fanfics_warningcat3'] = 'Рассказы, связанные с данной категорией, удалены не будут, но авторам придётся указать другую категорию для появления в каталоге.';
$txt['fanfics_delete'] = 'Удалить';

// Delete Rating
$txt['fanfics_deleterat'] = 'Удалить рейтинг';
$txt['fanfics_warningrat'] = '<b>Предупреждение: операция необратима!</b><br /><small>Рассказы, связанные с данным рейтингом, удалены не будут, но авторам придётся заново указать другой рейтинг для появления в каталоге.</small>';

// Delete Chapter
$txt['fanfics_deletechap'] = 'Удалить главу';
$txt['fanfics_warningchap'] = 'Предупреждение: операция необратима!';
$txt['fanfics_warningchap2'] = 'После удаления этой главы в рассказе не останется глав, поэтому рассказ тоже будет удалён.';

// Delete Story
$txt['fanfics_deletesto'] = 'Удалить рассказ';
$txt['fanfics_warningsto'] = '<b>Предупреждение: операция необратима!</b><br /><small>(Главы, связанные с данным рассказом, также будут удалены.)</small>';

// Edit Category
$txt['fanfics_catnotedit'] = 'Вы не можете изменить эту категорию.';
$txt['fanfics_catnotexists'] = 'Выбранная категория не существует.';
$txt['fanfics_edit'] = 'Редактировать';
$txt['fanfics_editcat'] = 'Редактирование категории';
$txt['fanfics_name'] = 'Название';
$txt['fanfics_nocatname'] = 'Дайте название категории.';
$txt['fanfics_nocatselected'] = 'Не выбрана категория.';
$txt['fanfics_none'] = 'Нет';
$txt['fanfics_parent'] = 'Родительская категория';

// Edit Rating
$txt['fanfics_editrat'] = 'Редактирование рейтинга';
$txt['fanfics_noratname'] = 'Укажите название рейтинга.';
$txt['fanfics_noratselected'] = 'Не указан рейтинг.';
$txt['fanfics_ratnotedit'] = 'Вы не можете изменить данный рейтинг.';
$txt['fanfics_ratnotexists'] = 'Выбранный рейтинг не существует.';

// Edit Chapter
$txt['fanfics_chapnotexists'] = 'Выбранная глава не существует.';
$txt['fanfics_ctitle'] = 'Заголовок';
$txt['fanfics_editchap'] = 'Редактирование главы';
$txt['fanfics_nochapselected'] = 'Не указана глава.';
$txt['fanfics_nostorytext'] = 'Необходимо указать содержание.';
$txt['fanfics_nochaptitle'] = 'Необходимо указать заголовок.';
$txt['fanfics_storytext'] = 'Рассказ';

// Edit Story
$txt['fanfics_approved'] = 'Проверен';
$txt['fanfics_addchap'] = 'Добавить главу';
$txt['fanfics_chapter'] = 'Глава';
$txt['fanfics_createdchapter'] = 'Глава создана.';
$txt['fanfics_deletedchapter'] = 'Глава удалена.';
$txt['fanfics_editsto'] = 'Редактирование рассказа';
$txt['fanfics_nostocat'] = 'Укажите категорию рассказа.';
$txt['fanfics_nostoryselected'] = 'Не выбран рассказ.';
$txt['fanfics_nostorat'] = 'Необходимо указать рейтинг.';
$txt['fanfics_nostotitle'] = 'Необходимо указать заголовок.';
$txt['fanfics_nostosumm'] = 'Необходимо указать аннотацию.';
$txt['fanfics_nottheauthor'] = 'Вы не автор данного рассказа!!! Хорошая попытка.';
$txt['fanfics_obligatory'] = 'Поля, отмеченные <span style="color: red; font-weight: bold;">*</span>, обязательны для заполнения.';
$txt['fanfics_ratingsaclaration'] = 'Рейтинги, помеченные &deg;, имеют возрастные ограничения';
$txt['fanfics_selectcat'] = 'Выберите категорию';
$txt['fanfics_selectrat'] = 'Выберите рейтинг';
$txt['fanfics_stitle'] = 'Заголовок';
$txt['fanfics_stonotexists'] = 'Выбраный рассказ не существует или ожидает одобрения.';
$txt['fanfics_stonotexists2'] = 'Выбраный рассказ не существует.';
$txt['fanfics_summary'] = 'Аннотация';
$txt['fanfics_topicaclaration'] = 'Оставьте пустым или укажите 0 для отключения.';
$txt['fanfics_topicnotvalid'] = 'Указанная тема не существует.';
$txt['fanfics_updatedchapter'] = 'Глава обновлена.';

// Likes
$txt['fanfics_likesuccess'] = 'Ваш голос учтён. Спасибо!';
$txt['fanfics_noallowlike'] = 'Вам нельзя оценивать рассказы.';

// Manage Categories
$txt['fanfics_addedcat'] = 'Категория успешно создана.';
$txt['fanfics_category'] = 'Категория';
$txt['fanfics_deletedcat'] = 'Категория удалена.';
$txt['fanfics_options'] = 'Параметры';
$txt['fanfics_subcats'] = 'Подкатегории';
$txt['fanfics_updatedcat'] = 'Категория обновлена.';

// Manage Ratings
$txt['fanfics_addedrat'] = 'Рейтинг создан.';
$txt['fanfics_ageconsent'] = 'Возрастное ограничение';
$txt['fanfics_deletedrat'] = 'Рейтинг удалён.';
$txt['fanfics_rating'] = 'Рейтинг';
$txt['fanfics_updatedrat'] = 'Рейтинг обновлён.';

// Manage Stories
$txt['fanfics_author'] = 'Автор';
$txt['fanfics_chapters'] = 'Глав';
$txt['fanfics_completed'] = 'Завершён';
$txt['fanfics_createdstory'] = 'Рассказ создан.';
$txt['fanfics_createdstory2'] = 'Рассказ добавлен, но перед появлением в разделе публикаций он должен пройти проверку.<br />Подождите ещё немного.';
$txt['fanfics_created'] = 'Создан';
$txt['fanfics_deletedstory'] = 'Рассказ удалён.';
$txt['fanfics_no'] = 'Нет';
$txt['fanfics_nostories'] = 'Нет присланных рассказов.';
$txt['fanfics_nostories2'] = 'Нет рассказов, ожидающих рецензии.';
$txt['fanfics_story'] = 'Рассказ';
$txt['fanfics_updatedstory'] = 'Рассказ обновлён.';
$txt['fanfics_yes'] = 'Да';

// My Fics
$txt['fanfics_addstory'] = 'Добавить рассказ';
$txt['fanfics_nostoryapproved'] = 'Отсутствуют принятые рассказы.<br />Пожалуйста, дождитесь проверки администратора.';
$txt['fanfics_nostoryyet'] = 'Отсутствуют написанные рассказы.<br />Напишите что-нибудь.';
$txt['fanfics_nostoryrejected'] = 'Отсутствуют непринятые рассказы. Неплохо!<br />Пишите ещё.';
$txt['fanfics_notenter'] = 'Вы не можете получить доступ к этой области.';

// Permission Group
$txt['permissiongroup_fanfics'] = 'Фанфики';
$txt['permissiongroup_simple_fanfics'] = 'Фанфики';
$txt['permissionname_add_fanfics'] = 'Добавление фанфиков';
$txt['permissionhelp_add_fanfics'] = 'Могут ли пользователи из этой группы отправлять фанфики.';
$txt['cannot_add_fanfics'] = 'Вам не разрешили добавлять фанфики.';
$txt['permissionname_admin_fanfics'] = 'Администрирование фанфиков';
$txt['permissionhelp_admin_fanfics'] = 'Могут ли пользователи из этой группы управлять фанфиками.';
$txt['cannot_admin_fanfics'] = 'Вам не разрешили управлять фанфиками.';
$txt['permissionname_fanfics_auto_approve'] = 'Автоодобрение фанфиков';
$txt['permissionhelp_fanfics_auto_approve'] = 'Могут ли пользователи из этой группы размещать фанфики без проверки.';
$txt['permissionname_delete_fanfics'] = 'Удаление своих фанфиков';
$txt['permissionhelp_delete_fanfics'] = 'Могут ли пользователи из этой группы удалять собственные фанфики.';
$txt['cannot_delete_fanfics'] = 'Вам не разрешили удалять свои фанфики.';
$txt['permissionname_vote_fanfics'] = 'Оценка фанфиков';
$txt['permissionhelp_vote_fanfics'] = 'Могут ли пользователи из этой группы оценивать фанфики.';
$txt['cannot_vote_fanfics'] = 'Вам не разрешили оценивать фанфики.';
$txt['permissionname_view_fanfics'] = 'Просмотр фанфиков';
$txt['permissionhelp_view_fanfics'] = 'Могут ли пользователи из этой группы просматривать фанфики.';
$txt['cannot_view_fanfics'] = 'Вам не разрешили просматривать фанфики.';

// Search
$txt['fanfics_search2'] = 'Поиск';
$txt['fanfics_completed2'] = 'Завершён';
$txt['fanfics_nosearchfound'] = 'Не найдено никаких рассказов, соответствующих вашему запросу.<br />Поискать ещё?';
$txt['fanfics_nosearchparam'] = 'Попробуйте указать другие данные.';
$txt['fanfics_ongoing'] = 'В работе';
$txt['fanfics_searchagain'] = 'Настроить поиск';
$txt['fanfics_searchall'] = 'Найти все';
$txt['fanfics_searchboth'] = 'Везде';
$txt['fanfics_searchresults'] = 'Результаты поиска';
$txt['fanfics_searchsumm'] = 'В аннотации';
$txt['fanfics_searchtitle'] = 'В заголовке';

// Settings
$txt['fanfics_allowbbc'] = 'Разрешить BB-теги';
$txt['fanfics_alphabetically'] = 'По алфавиту';
$txt['fanfics_lastadded'] = 'Недавно добавленные';
$txt['fanfics_lastupdated'] = 'Недавно обновлённые';
$txt['fanfics_maintenance'] = 'Обслуживание';
$txt['fanfics_maintstart'] = 'Начать обслуживание';
$txt['fanfics_mainttext'] = 'Все главы, рассказы, рейтинги, категории и авторы будут пересчитаны для обновления статистики.';
$txt['fanfics_maintfinished'] = 'Обслуживание завершено.';
$txt['fanfics_orderby'] = 'Порядок фанфиков на странице';
$txt['fanfics_save'] = 'Сохранить';
$txt['fanfics_settings_ageconsent'] = 'Использовать возрастные ограничения';
$txt['fanfics_settings_perpage'] = 'Фанфиков на странице';
$txt['fanfics_settings_showstats'] = 'Показывать статистику каталога';
$txt['fanfics_settingssaved'] = 'Настройки сохранены.';
$txt['fanficshelp_ageconsent'] = 'Если включить, пользователи, которые захотят прочитать рассказ, помеченный рейтингом с возрастным ограничением, получат предупреждение, что рассказ предназначен не для всей аудитории.';
$txt['fanficshelp_allowbbc'] = 'Разрешить использование редактора SCEditor.<br />Доступные теги: [b], [br], [center], [code], [hr], [i], [justify], [left], [li], [ltr], [ol], [quote], [right], [rtl], [s], [sub], [sup], [table], [img], [td], [tr], [u] и [ul]';

// Stats
$txt['fanfics_stats'] = 'Статистика';
$txt['fanfics_stories'] = 'Рассказов';
$txt['fanfics_authors'] = 'Авторов';

// View Category
$txt['fanfics_view'] = 'Просмотров';
$txt['fanfics_by'] = '-';
$txt['fanfics_nostoriescat'] = 'Отсутствуют рассказы в данной категории.<br />Добавьте какой-нибудь.';

// View Rating
$txt['fanfics_nostoriesrat'] = 'Отсутствуют рассказы с данным рейтингом.<br />Добавьте какой-нибудь.';

// View Story
$txt['fanfics_chbych'] = 'Просмотр по главам';
$txt['fanfics_disclaimer'] = 'Отказ от ответственности';
$txt['fanfics_disclaimer_info'] = 'Все используемые персонажи и названия являются собственностью их владельцев. Оригинальные персонажи и сюжет являются собственностью их автора. Автор никоим образом не связан с владельцами, создателями или производителями какой-либо франшизы. Любое сходство с реальными событиями и людьми является чистой случайностью.';
$txt['fanfics_entire'] = 'Весь рассказ';
$txt['fanfics_gotop'] = 'Вверх';
$txt['fanfics_index'] = 'Оглавление';
$txt['fanfics_like'] = 'Нравится';
$txt['fanfics_likes'] = 'Понравилось';
$txt['fanfics_never'] = 'Никогда';
$txt['fanfics_next'] = 'Далее';
$txt['fanfics_notapproved1'] = 'Предупреждение: этот рассказ пока не принят!';
$txt['fanfics_notapproved2'] = 'Пожалуйста, дождитесь одобрения администратором или модераторами.';
$txt['fanfics_prev'] = 'Назад';
$txt['fanfics_topic'] = 'Тема для обсуждения';
$txt['fanfics_updated'] = 'Последнее обновление';
$txt['fanfics_youlike'] = 'Вам нравится';

// Who
$txt['whoall_fanfics'] = 'Просматривает <a href="' . $scripturl . '?action=fanfics">'. $txt['fanfics_menu'] .'</a>.';
$txt['whoall_fanficsadmin'] = 'Администрирует '. $txt['fanfics_menu'] .'.';
?>