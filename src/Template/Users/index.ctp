<h3><span class="fui-user"></span>　ユーザマスタ</h3>
<table class="table table-striped">
<thead class="thead-inverse">
	    <tr>
	        <th scope="col">No</th>
	        <th scope="col">名前</th>
	        <th scope="col">ログインID</th>
	        <th scope="col">所属</th>
	        <th scope="col">メールアドレス</th>
	        <th scope="col" class="actions"><a href="/users/edit/" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-plus"></span> 新規追加</a></th>
	    </tr>
	</thead>
	<tbody>
	    <?php foreach ($users as $user): ?>
	    <tr>
	        <td><?= $this->Number->format($user->id) ?></td>
	        <td><?= h($user['name']) ?></td>
	        <td><?= h($user['loginid']) ?></td>
	        <td><?= $affi[$user['affiliation']] ?></td>
	        <td><?= h($user['email']) ?></td>
	        <td class="actions">
	            <div class="col-xs-9 no-p">
			<a href="/users/edit/<?= h($user['id']) ?>" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-check"></span> 編集</a>
	            </div>
	            <div class="col-xs-3 no-p icon-p">
		        <a href="/users/delete/<?= h($user['id']) ?>"><span class="fui-trash"></span></a>
	            </div>
	        </td>
	    </tr>
	    <?php endforeach; ?>
	</tbody>
</table>
<?php echo $this->element('pagination'); ?>
