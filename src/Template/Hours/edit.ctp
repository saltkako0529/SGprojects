<h3><span class="fui-calendar"></span>　工数入力</h3>
<?= $this->Form->create($hour, ['type' => 'file']);?>
<?= $this->Form->hidden( 'users_id' ,['value'=> $user_auth['id']]) ?>
<?= $this->Form->hidden( 'date' ,['value'=> '2017-02-05' ]) ?>
<fieldset>
<table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th scope="col" colspan="2">案件名 / 作業種別・勤務時間</th>
                <th scope="col" colspan="2">担当者 / 工数</th>
				<th scope="col">備考</th>
            </tr>
        </thead>
        <tbody>
			<?php foreach ($hour as $k => $hour): ?>
			<tr>
				<td colspan="2"><?php echo $this->Form->input($k.'.projects_id', ['options' => $projects, 'class'=>'form-control']); ?></td>			
				<td colspan="2"><?php echo $this->Form->input($k.'.officer', ['options' => $users, 'class'=>'form-control']); ?></td>
				<td rowspan="2"><?php echo $this->Form->input($k.'.remarks',['class'=>'form-control']); ?></td>
		   </tr>
		   <tr>
				<td><?php echo $this->Form->select($k.'.kind' , $work_kind ,['class'=>'form-control']); ?></td>
				<td><?php echo $this->Form->select($k.'.work' , $work ,['class'=>'form-control']); ?></td>
				<td><?php echo $this->Form->input($k.'.hour',['class'=>'form-control']); ?></td>
				<td>時間</td>
		   </tr>
		   <?php endforeach; ?>
		</tbody>
	</table>
	<div class="col-xs-4 col-xs-offset-4">
	  <div class="form-group">
	    <?= $this->Form->button('登録',['class'=>'btn btn-block btn-lg btn-inverse']) ?>
	  </div>
	</div>
</fieldset>
<?= $this->Form->end() ?>
