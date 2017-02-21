    <h3><span class="fui-home"></span>　顧客マスタ</h3>
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col">顧客名</th>
                <th scope="col">住所</th>
                <th scope="col">電話番号</th>
                <th scope="col">備考</th>
                <th scope="col" class="actions"><a href="/clients/edit/" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-plus"></span> 新規追加</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $this->Number->format($client->id) ?></td>
                <td><?= h($client->name) ?></td>
                <td><?= h($client->postalcode) ?> <?= h($client->address) ?></td>
                <td><?= h($client->tel) ?></td>
                <td><?= h($client->remarks) ?></td>
	        <td class="actions">
	            <div class="col-xs-9 no-p">
			<a href="/clients/edit/<?= h($client['id']) ?>" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-check"></span> 編集</a>
	            </div>
	            <div class="col-xs-3 no-p icon-p">
		        <a href="/clients/delete/<?= h($client['id']) ?>"><span class="fui-trash"></span></a>
	            </div>
	        </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
　　<?php echo $this->element('pagination'); ?>
