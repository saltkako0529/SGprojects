<h3><span class="fui-checkbox-checked"></span>　承認リスト</h3>
<?= $this->Form->create($records) ?>
<table class="table table-striped">
	<thead class="thead-inverse">
	    <tr>
	        <th scope="col">No</th>
	        <th scope="col">日付</th>
	        <th scope="col">作業内容</th>
	        <th scope="col">案件名</th>
	        <th scope="col">申請者</th>
	        <th scope="col">工数</th>
	        <th scope="col">承認</th>
	    </tr>
	</thead>
	<tbody>
	    <?php foreach ($records as $k => $records): ?>
	    <tr>
	        <td><?= $this->Number->format($records->id) ?></td>
	        <td><?= h($records['year']) ?> - <?= h($records['month']) ?> - <?= h($records['date']) ?></td>
	        <td><?= h($work_kind[$records['kind']]) ?></td>
	        <td><?= h($projects[$records['projects_id']]) ?></td>
	        <td><?= h($users[$records['users_id']]) ?></td>
	        <td><?= h($records['hour']) ?></td>
	        <td>
                <label class="checkbox" for="checkbox<?= h($records['id']) ?>">
									<?=$this->Form->hidden( $k.'.id'); ?>
									<?=$this->Form->checkbox( $k.'.application',['id'=>'checkbox'.$records['id'],'data-toggle'=>'checkbox', 'value'=>'2']) ?>
                  承認する
                </label>    
    		</td>
	    </tr>
	    <?php endforeach; ?>
	</tbody>
</table>
<div class="col-xs-4 col-xs-offset-4">
	<div class="form-group">
		<?= $this->Form->button('登録',['class'=>'btn btn-block btn-lg btn-inverse']) ?>
	</div>
</div>
<?= $this->Form->end() ?>
<!--?php echo $this->element('pagination'); ?-->

