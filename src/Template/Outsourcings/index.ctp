<h3 class="col-sm-6"><span class="fui-tag"></span>　外注マスタ</h3>
<!-- 検索フォーム -->
<?= $this->Form->create() ?>
<div class="col-sm-6 con-box mt_20" >
<fieldset>
	<div class="col-sm-10"><?= $this->Form->input('name', ['placeholder'=>'名前を検索']); ?></div>
	<div class="col-sm-2"><?= $this->Form->button('<span class="fui-search"></span>', ['class'=>'btn btn-block btn-primary'] ) ?></div>
</fieldset>
</div>
<?= $this->Form->end() ?>
<!-- データ一覧 -->
<table class="table table-striped">
<thead class="thead-inverse">
	    <tr>
	        <th style="width: 60px;" scope="col"><?= $this->Paginator->sort('id') ?></th>
	        <th scope="col">名前</th>
	        <th scope="col">住所</th>
	        <th scope="col">電話</th>
	        <th scope="col">備考</th>
	        <th scope="col" class="actions"><a href="/outsourcings/edit/" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-plus"></span> 新規追加</a></th>
	    </tr>
	</thead>
	<tbody>
	    <?php foreach ($outsourcings as $outsourcing): ?>
	    <tr>
	        <td><?= $this->Number->format($outsourcing->id) ?></td>
	        <td><?= h($outsourcing->name) ?></td>
	        <td><?= h($outsourcing->postalcode) ?> <?= h($outsourcing->address) ?></td>
	        <td><?= h($outsourcing->tel) ?></td>
	        <td><?= h($outsourcing->remarks) ?></td>
	        <td class="actions">
	            <div class="col-xs-9 no-p">
									<a href="/outsourcings/edit/<?= h($outsourcing['id']) ?>" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-check"></span> 編集</a>
	            </div>
	            <div class="col-xs-3 no-p icon-p">
							<?php
							echo $this->Html->link(
									'<span class="fui-trash"></span>' ,
									array(
											'controller'=> 'outsourcings',
											'action'=> 'delete', $outsourcing['id'],
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