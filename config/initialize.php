<?php
// サイドメニュー：一般ユーザ項目 ['アイコン名', 'メニュー名']
// アイコンSample => http://designmodo.github.io/Flat-UI/
$config ['Menu']['general'] = array (
	'hours' => ['fui-calendar', '工数入力'],
	'lists' => ['fui-list-bulleted', '案件リスト'],
	'approvals' => ['fui-checkbox-checked', '承認リスト']
);
// サイドメニュー：管理者項目
$config ['Menu']['admin'] = array (
	'users' => ['fui-user', 'ユーザマスタ'],
	'projects' => ['fui-bookmark', '案件マスタ'],
	'clients' => ['fui-home', '顧客マスタ'],
	'outsourcings' => ['fui-tag', '外注マスタ']
);

// Users Options  ------------------------------------
// ユーザマスタ：所属
$config ['User'] ['affiliation'] = array (
	'1' => '販売促進部',
	'2' => '技術開発部',
	'3' => '品質管理部',
	'4' => '管理部'
);
// ユーザマスタ：雇用形態
$config ['User'] ['employment'] = array (
	'1' => 'アルバイト',
	'2' => '社員',
	'3' => '役員'
);
// ユーザマスタ：タイプ
$config ['User'] ['type'] = array (
	'0' => '一般ユーザ',
	'1' => '管理者'
);

// Projectss Options  --------------------------------
// 案件マスタ：タイプ
$config ['Project'] ['kind'] = array (
	'1' => 'SY',
	'2' => 'MA',
	'3' => 'CS',
	'4' => 'HP',
	'5' => 'OH'
);
// 案件マスタ：ステータス
$config ['Project'] ['status'] = array (
	'0' => '未発注',
	'1' => '発注見込み',
	'2' => '受注',
	'3' => '終了'
);

// Hours Options  ------------------------------------
// 工数入力：作業種別
$config ['Hour'] ['work_kind'] = array (
	'0' => '作業',
	'1' => '打ち合わせ',
	'2' => '外出',
	'3' => '社内業務',
	'4' => '勉強',
	'5' => 'その他'
);
// 工数入力：勤務時間
$config ['Hour'] ['work'] = array (
	'0' => '通常時間',
	'1' => '22時以降'
);
// 工数入力：承認フラグ
$config ['Hour'] ['application'] = array (
	'0' => '未申請',
	'1' => '申請中',
	'2' => '承認済'
);
// List Options  -------------------------------------
// 工数入力：承認フラグ
$config ['List'] ['priority'] = array (
	'0' => '高',
	'1' => '中',
	'2' => '低'
);
