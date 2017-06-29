<h3 class="col-sm-6"><span class="fui-user"></span>　ユーザマスタ</h3>
<?php if($user_auth['type'] == 1){ ;?>
<!-- 検索フォーム -->
<?= $this->Form->create() ?>
<div class="col-sm-6 con-box mt_20" >
<fieldset>
	<div class="col-sm-6"><?= $this->Form->input('name', ['placeholder'=>'名前を検索']); ?></div>
	<div class="col-sm-4"><?php echo $this->Form->select('affiliation', $affi, ['class'=>'form-control', 'empty' => '全ての所属']); ?></div>
	<div class="col-sm-2"><?= $this->Form->button('<span class="fui-search"></span>', ['class'=>'btn btn-block btn-primary'] ) ?></div>
</fieldset>
</div>
<?= $this->Form->end() ?>
<!-- データ一覧 -->
<table class="table table-striped">
<thead class="thead-inverse">
	    <tr>
	        <th style="width: 60px;" scope="col">No</th>
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
							<?php
							echo $this->Html->link(
									'<span class="fui-trash"></span>' ,
									array(
											'controller'=> 'users',
											'action'=> 'delete', $user['id'],
									),
									array(
											'escape'=>false,
											'confirm'=>'削除してよろしいですか?'
									)
							);
							?>
	            </div>
	        </td>
	    </tr>
	    <?php endforeach; ?>
	</tbody>
</table>
<?php echo $this->element('pagination'); ?>
<?php } else { ;?>
権限がありません。
<?php };?>