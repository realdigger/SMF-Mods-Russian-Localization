<?php

/*
 * email Inactive Users
 *
 * @package eiu mod
 * @version 1.1.1
 * @author Jessica Gonz?lez <suki@missallsunday.com>
 * @copyright Copyright (c) 2014 Jessica Gonz?lez
 * @license http://www.mozilla.org/MPL/2.0/
 */

global $txt;

$txt['eiu_enable'] = '�������� ���';
$txt['eiu_enable_sub'] = '������ ���� �������� ��� ������ ����.';
$txt['eiu_disable_removal'] = '��������� ������� �������� �������������';
$txt['eiu_disable_removal_sub'] = '���� ����� �������, ��� ����� ������ ���������� ������ ��� �������������, ������� �������� ���������, �� �� ������� ��. ����� ����, ��� ������ �������� ���������� �, ����, ��� ������������ ��� � �� ������� �� �����, �� ��� �������� �� ����������� �����.';
$txt['eiu_title'] = '����������� ���������� �������������';
$txt['eiu_general'] = '�������� ���������';
$txt['eiu_list'] = '������ �������������';
$txt['eiu_list_title'] = '������������, ���������� ��� ��������';
$txt['eiu_list_title_potential'] = '������������ ���������� ��� ���������� ��������';
$txt['eiu_list_will_be_deleted'] = '����� �������';
$txt['eiu_list_noUsers'] = '��� ������������� ��������� ��� ���������� ��������';
$txt['eiu_list_name'] = '���';
$txt['eiu_list_login'] = '��������� ����';
$txt['eiu_list_mail'] = '����������� ����������';
$txt['eiu_list_delete'] = '������� �� ��������';
$txt['eiu_list_dont_delete'] = '�� �������';
$txt['eiu_list_posts'] = '���������';
$txt['eiu_list_send'] = '���������';
$txt['eiu_deleted'] = '�� �������� ���� ������������� ��� ��������, � ��������� ���, ��� ���������� ���������������� �������, ��� ������������ ����� �������.';
$txt['eiu_dont'] = '�� �������� ���� �������������, ��� ����������� � ��������, ������� �� ������ �� ����� �������� ��� ��������.';
$txt['eiu_desc'] = ' ��� ������� ������ �������� ���� "����������� � �������� ���������� �������������". <br/> ���� ��� ������� ��������������� �������, � ������� �������������, ������� ���� �� ������� X ���� ����� ���������� ����������� �� ����������� �����. ����� �������� ������, ���������� ������ �������� �, ����, ������������ �� ����� �� ����� �� ���� ������, �� �� ����� ������� ��� ���������� ��������. �������������, �����, ����� �������� �� ��� ��������. ������������, ���������� ��� ��������, ����� ������� � ��������� ���, ����� ���������� ��������������� ������� - �� ������ ���������, ����� ������� ���� ��� ���������. <br /> ��� ���������� ������� �������� ��������� ������. ����, � ��� ������������� ����� ��������� � �������, ������������� ���������� ������� ���������� ���� �������� �� �������� ������, ��� ������ ������� �� �������� �������� ������ ����� ����, ��� ������������� ������� ������� ������ ��� ��������, � �� ����� ����, ��� ������ ���� ����������. �������, ���� �����������, ��� ������� ������ ����� ������� ��� �� ��������� ������������� �����������.<br /> ����� "�� �������" ��������� ��������� ��������� �������� �������� ���� �����, ���� ���� ������������ ������������� ���� �����������.';
$txt['eiu_inactiveFor'] = '���������� ���� � ������� ���������� ����� ������������ �� �����, ����� �������� ����� ���������� �����������.';
$txt['eiu_inactiveFor_sub'] = '���� �������� �� �����������, �� ����� �������������� �������� �� ���������: 15';
$txt['eiu_sinceMail'] = '���������� ����, ����� �������� ������������ ����� ������� ��� ��������';
$txt['eiu_sinceMail_sub'] = '����� ������� ���� ���������� ������ ����� ����, ��� ������������� ������� ������� ������ ��� ��������. ���� �������� �� �����������, �� ����� �������������� �������� �� ���������: 15';
$txt['eiu_groups'] = '�������� ������, ������� ����� �����������';
$txt['eiu_groups_sub'] = '������������ � ��������� ������� ����� ����������. ������ "��������������" �� ����� ���� �������.';
$txt['eiu_message'] = '����� ������ � ������������';
$txt['eiu_message_sub'] = '�� ������ ������������ ��������� �������:<br />
	{user_name} - �������� �������� ���<br />
	{display_name} - �������� ����� �� ������<br />
	{last_login} - �������� ���� ���������� ��������� ������<br />
	{forum_name} - �������� �������� ������<br />
	{forum_url} - �������� ������ �� �����<br />
	���� �������� �� �����������, �� ����� �������������� ��������� �� ���������.';
$txt['eiu_subject'] = '���� ������';
$txt['eiu_subject_sub'] = '������ ������������ ���� HTML. ���� �������� ������, ����� �������������� �������� �� ���������.';
$txt['eiu_posts'] = '����������� ������������ ���������';
$txt['eiu_posts_sub'] = '���� ��������� � ������������ ������, ��� ������, �� �� �� ����� �����������.<br />���� �������� �� �����������, �� ����� �������������� �������� �� ���������: 5.';
$txt['eiu_custom_message'] = '������ {user_name}. �� ����� �� �������� �� {forum_url} � �� ������ �� ����� ������� ��� �� ����� ������.';
$txt['eiu_custom_subject'] = '������ �� {forum_name}.';
