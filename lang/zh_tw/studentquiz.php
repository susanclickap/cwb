<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'studentquiz', language 'zh_tw', branch 'MOODLE_31_STABLE'
 *
 * @package   studentquiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['approve'] = '不-／批准';
$string['approved_column_name'] = '批准';
$string['approveselectedscheck'] = '你是否確定要不-／批准下列問題?<br /><br />{$a}';
$string['comment_column_name'] = '評論';
$string['createnewquestion'] = '創建新問題';
$string['createnewquestionfirst'] = '創建第一條問題';
$string['creator_anonym_firstname'] = '無名氏';
$string['creator_anonym_lastname'] = '假名';
$string['difficulty_level_column_name'] = '困難';
$string['emailapprovedbody'] = '親愛的 {$a->studentname},

這封電郵是通知你所提出的問題\'{$a->questionname}\'在科目 \'{$a->coursename}\' 中被老師{$a->teachername}.所批准

你可以在: {$a->questionurl}.瀏覽此問題';
$string['emailapprovedsmall'] = '你所提出的問題\'{$a->questionname}\'被老師{$a->teachername}.所批准';
$string['emailapprovedsubject'] = '被批准的問題: {$a->questionname}';
$string['emailunapprovedbody'] = '親愛的 {$a->studentname},

這封電郵是通知你所提出的問題\'{$a->questionname}\'在科目 \'{$a->coursename}\' 中不被老師{$a->teachername}.批准

你可以在: {$a->questionurl}.瀏覽此問題';
$string['emailunapprovedsmall'] = '你的問題 \'{$a->questionname}\'不被老師{$a->teachername}.批准';
$string['emailunapprovedsubject'] = '問題不被批准: {$a->questionname}';
$string['filter'] = '過濾器';
$string['filter_ishigher'] = '高於';
$string['filter_islower'] = '低於';
$string['filter_label_approved'] = '批准的問題';
$string['filter_label_comment'] = '評論';
$string['filter_label_createdate'] = '創建';
$string['filter_label_difficulty_level'] = '困難';
$string['filter_label_firstname'] = '姓名';
$string['filter_label_practice'] = '嘗試';
$string['filter_label_question'] = '問題標題';
$string['filter_label_questiontext'] = '問題內容';
$string['filter_label_show_mine'] = '我的問題';
$string['filter_label_surname'] = '員編';
$string['filter_label_tags'] = '標籤';
$string['messageprovider:approved'] = '問題批准通知';
$string['messageprovider:unapproved'] = '問題不批准通知';
$string['modulename'] = '學生測驗';
$string['modulename_help'] = '這學生測驗活動會許學生把問題添加至雲端。

學生可以在學生測驗活動概述中過濾問題。他們也可以在雲端使用己過濾的問題進行練習。

老師亦可選擇匿名地通過列創建。

<br><br>這學生測驗活動';
$string['modulenameplural'] = '學生測驗';
$string['nav_export'] = '輸出';
$string['nav_import'] = '輸入';
$string['no_comment'] = '沒有意見';
$string['no_difficulty_level'] = '沒有困難';
$string['no_practice'] = '沒有努力';
$string['no_tags'] = '沒有標示';
$string['pluginadministration'] = '學生測驗管理';
$string['pluginname'] = '學生測驗';
$string['practice_column_name'] = '嘗試';
$string['questionsinuse'] = '（*問題己經被標記以星號用作於測驗中）';
$string['rankingsettingsheader'] = '等級設定';
$string['reportquiz_admin_title'] = '用戶統計資料';
$string['reportquiz_stats_title'] = '數據';
$string['reportquiz_total_attempt'] = '學生進行測驗所需的時間';
$string['reportquiz_total_obtained_marks'] = '總分';
$string['reportquiz_total_questions_answered'] = '全部需要回答';
$string['reportquiz_total_questions_right'] = '合共的正確答案';
$string['reportquiz_total_questions_wrong'] = '錯誤的答案';
$string['reportquiz_total_users'] = '參與者的人數';
$string['reportrank_table_column_fullname'] = '全名';
$string['reportrank_table_column_points'] = '分數';
$string['reportrank_table_column_rank'] = '排名';
