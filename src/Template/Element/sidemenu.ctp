<!-- サイドメニュー　ここから -->
    <ul class="nav nav-pills nav-stacked">
	<?php foreach ($general_m as $g => $m ): ?>
	<li class="nav-item <?php echo $active == $g ? 'active': ''; ?>"><a href="/<?= h($g) ?>/"><span class="<?= h($m[0]) ?>"></span>　<?= h($m[1]) ?></a></li>
	<?php endforeach; ?>
	<!-- 管理者メニュー --><?php if($user_auth['type']==1){ ;?>
	<?php foreach ($admin_m as $a => $d ): ?>
	<li class="nav-item <?php echo $active == $a ? 'active': ''; ?>"><a href="/<?= h($a) ?>/"><span class="<?= h($d[0]) ?>"></span>　<?= h($d[1]) ?></a></li>
	<?php endforeach; ?>
	<?php };?>
    </ul>
<!-- サイドメニュー　ここまで -->