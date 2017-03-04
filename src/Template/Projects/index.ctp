<h3><span class="fui-bookmark"></span>　案件マスタ</h3>
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th scope="col" style="width: 50px"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col">案件名</th>
                <th scope="col">案件種別</th>
                <th scope="col">取引先名</th>
                <th scope="col">ステータス</th>
                <th scope="col">見積金額</th>
                <th scope="col">発注年度</th>
                <th scope="col" class="actions"><a href="/projects/edit/" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-plus"></span> 新規追加</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= $this->Number->format($project->id) ?></td>
                <td><a href="/projects/view/<?= h($project['id']) ?>"><?= h($project->name) ?></a></td>
                <td><?= $kind[$project['kind']] ?></td>
                <td><?= $project->has('client') ? h($project->client->name) : '' ?></td>
                <td><?= $status[$project['status']] ?></td>
                <td><?= h($project->estimated) ?></td>
                <td><?= $project->has('year') ? h($project->year).' 年度' : '' ?> </td>
	        <td class="actions">
	            <div class="col-xs-9 no-p">
			<a href="/projects/edit/<?= h($project['id']) ?>" class="btn btn-block btn-lg btn-primary btn-sm"><span class="fui-check"></span> 編集</a>
	            </div>
	            <div class="col-xs-3 no-p icon-p">
		        <a href="/projects/delete/<?= h($project['id']) ?>"><span class="fui-trash"></span></a>
	            </div>
	        </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
　　<?php echo $this->element('pagination'); ?>
