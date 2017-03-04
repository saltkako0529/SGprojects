<h3><span class="fui-calendar"></span>　工数入力</h3>
<table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">No</th>
                <th scope="col">案件名</th>
                <th scope="col">作業種別</th>
                <th scope="col">勤務時間 / 工数</th>
                <th scope="col">担当者</th>
                <th scope="col">承認状況</th>
		<th scope="col">備考</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hour as $hour): ?>
	    <tr>
	        <td><?= $this->Number->format($hour->id) ?></td>
	        <td><?= h($projects[$hour['projects_id']]) ?></td>
	        <td><?= h($work_kind[$hour['kind']]) ?></td>
	        <td><?= h($work[$hour['work']]) ?> / <?= h($hour['hour']) ?> h</td>
	        <td><?= h($users[$hour['officer']]) ?></td>
	        <td><?= h($appl[$hour['application']]) ?></td>
	        <td><?= h($hour['remarks']) ?></td>
	    </tr>
            <?php endforeach; ?>
        </tbody>
	</table>
        <div class="col-xs-3 col-xs-offset-3">
          <a href="/hours/" class="btn btn-block btn-lg btn-inverse"><span class="fui-arrow-left"></span> 一覧に戻る</a>
        </div>
        <div class="col-xs-3">
          <a href="/hours/edit/<?php echo $user_auth['id']; ?>/<?= h($year) ?>/<?= h($month) ?>/<?= h($date) ?>" class="btn btn-block btn-lg btn-primary"><span class="fui-check"></span> 編集</a>
        </div>
</fieldset>
