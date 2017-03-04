<h3><span class="fui-bookmark"></span>　案件マスタ</h3>
    <table class="table table-striped">
		<tr>
			<th style="width:20%">案件名</th>
			<td><?= h($project->name) ?></td>
		</tr>
		<tr>
			<th>案件No</th>
			<td><?= h($project->no) ?></td>
		</tr>
		<tr>
			<th>案件種別</th>
			<td><?= $kind[$project['kind']] ?></td>
		</tr>
		<tr>
			<th>担当者名</th>
			<td><?= h($project->user->name) ?></td>
		</tr>
		<tr>
			<th>顧客名</th>
			<td><?= h($project->client->name) ?></td>
		</tr>
		<tr>
			<th>ステータス</th>
			<td><?= $status[$project['status']] ?></td>
		</tr>
		<tr>
			<th>見積金額</th>
			<td><?= h($project->estimated) ?></td>
		</tr>
		<tr>
			<th>請求月</th>
			<td><?= h($project->billingdate) ?></td>
		</tr>
		<tr>
			<th>発注年度</th>
	                <td><?= $project->has('year') ? h($project->year).' 年度' : '' ?> </td>
		</tr>
		<tr>
			<th>備考</th>
			<td><?= h($project->remarks) ?></td>
		</tr>
	</table>
        <div class="col-xs-3 col-xs-offset-3">
          <a href="/projects/" class="btn btn-block btn-lg btn-inverse"><span class="fui-arrow-left"></span> 一覧に戻る</a>
        </div>
        <div class="col-xs-3">
          <a href="/projects/edit/<?= h($project['id']) ?>" class="btn btn-block btn-lg btn-primary"><span class="fui-check"></span> 編集</a>
        </div>
