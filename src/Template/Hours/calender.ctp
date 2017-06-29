<h3><span class="fui-calendar"></span>　工数入力</h3>
<?php
// 月末日を取得
$last_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));
$calendar = array();
$j = 0;
// 月末日までループ
for ($i = 1; $i < $last_day + 1; $i++) {
    // 曜日を取得
    $week = date('w', mktime(0, 0, 0, $month, $i, $year));
    // 1日の場合
    if ($i == 1) {
        // 1日目の曜日までをループ
        for ($s = 1; $s <= $week; $s++) {
            // 前半に空文字をセット
            $calendar[$j]['day'] = '';
            $j++;
        }
    }
    // 配列に日付をセット
    $calendar[$j]['day'] = $i;
    $j++;
    // 月末日の場合
    if ($i == $last_day) {
        // 月末日から残りをループ
        for ($e = 1; $e <= 6 - $week; $e++) {
            // 後半に空文字をセット
            $calendar[$j]['day'] = '';
            $j++;
        }
    }
}
$n_year = date('Y');
?>
<div class="col-md-6 col-sm-4">
	<h4><?php echo $year; ?>年<?php echo $month; ?>月</h4>
</div>
<!-- 年月変更プルダウン　ここから -->
<div class="col-md-6 col-sm-8">
	<div class="col-md-5 col-sm-4">
		<!-- 年の選択ボックス -->
		<select id="c_year" class="form-control select1 select-primary" data-toggle="select1">
		<?php for ($i = 0; $i < 5; $i++) { ?>
			<option value="<?php echo $n_year - $i ;?>" <?php echo $n_year - $i == $year ? "selected" : "" ;?>><?php echo $n_year - $i ;?>年</option>
		<?php };?>
		</select>
	</div> 	
	<div class="col-md-5 col-sm-4">
		<!-- 月の選択ボックス -->
		<select id="c_month" class="form-control select2 select-primary" data-toggle="select2">
		<?php for ($m = 1; $m < 13; $m++) { ?>
			<option value="<?php echo $m ;?>" <?php echo $m == $month ? "selected" : "" ;?>><?php echo $m ;?>月</option>
		<?php };?>
		</select>
	</div> 
	<div class="col-md-2 col-sm-4">
			<a href="" class="btn btn-block btn-primary" id="chang_calender"><span class="fui-calendar-solid"></span></a>
	</div>
</div> 
<!-- 年月変更プルダウン　ここまで -->
<!-- 工数カレンダー　ここから -->
<table class="table">
   <thead class="thead-inverse">
		<tr>
			<th>日</th>
			<th>月</th>
			<th>火</th>
			<th>水</th>
			<th>木</th>
			<th>金</th>
			<th>土</th>
		</tr>
   </thead>
   <tbody>
		<tr>
		<?php $cnt = 0; ?>
		<?php foreach ($calendar as $key => $value): ?>
			<?php if ($cnt == 0): ?>
			<td class="sun">
			<?php elseif($cnt == 6): ?>
			<td class="sat">
			<?php else: ?>
			<td>
			<?php endif; ?>
				<?php $cnt++; ?>
				<?php if (!empty($value['day'])): ?>
				<p class="day"><?php echo $value['day']; ?></p>
				<p><a href="/hours/view/<?php echo $year; ?>/<?php echo $month; ?>/<?php echo $value['day']; ?>" class="btn btn-block btn-primary btn-sm"><span class="fui-list-thumbnailed"></span> 詳細</a></p>
				<!--li><a href="/hours/edit/<?php echo $year; ?>/<?php echo $month; ?>/<?php echo $value['day']; ?>" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-new"></span> 編集</a></li-->
				<!--p><a href="" class="btn btn-block btn-lg btn-default btn-sm"><span class="fui-document"></span> 印刷</a></p-->
				<?php endif; ?>
			</td>
			<?php if ($cnt == 7): ?>
				</tr>
				<tr>
				<?php $cnt = 0; ?>
			<?php endif; ?>
		<?php endforeach; ?>
		</tr>
   </tbody>
</table>
<!-- 工数カレンダー　ここまで -->