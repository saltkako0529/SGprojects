<h3><span class="fui-bookmark"></span>　案件マスタ</h3>
<?= $this->Form->create($project) ?>
    <table class="table table-striped">
		<tr>
			<th style="width:20%">案件名</th>
			<td><div class="col-sm-12"><?php echo $this->Form->input('name',['placeholder'=>'案件名', 'class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>案件No</th>
			<td><div class="col-sm-2"><?php echo $this->Form->input('no', ['placeholder'=>'0001', 'class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>案件種別</th>
			<td><div class="col-sm-2"><?php echo $this->Form->select('kind', $kind, ['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>担当者名</th>
			<td><div class="col-sm-6"><?php echo $this->Form->input('users_id', ['options' => $users, 'class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>顧客名</th>
			<td><div class="col-sm-6"><?php echo $this->Form->input('clients_id', ['options' => $clients, 'class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>ステータス</th>
			<td><div class="col-sm-4"><?php echo $this->Form->select('status', $status, ['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>見積金額</th>
			<td><div class="col-sm-4"><?php echo $this->Form->input('estimated', ['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>請求月</th>
			<td><div class="col-sm-4"><?php echo $this->Form->input('billingdate', ['empty' => true, 'class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>発注年度</th>
			<td><div class="col-sm-2"><?php echo $this->Form->input('year',['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>備考</th>
			<td><div class="col-sm-12"><?php echo $this->Form->input('remarks',['class'=>'form-control']); ?></div></td>
		</tr>
	</table>
        <div class="col-xs-4 col-xs-offset-4">
          <div class="form-group">
            <?= $this->Form->button('登録',['class'=>'btn btn-block btn-lg btn-inverse']) ?>
          </div>
        </div>
    <?= $this->Form->end() ?>
