<h3><span class="fui-tag"></span>　外注マスタ</h3>
<?= $this->Form->create($outsourcing) ?>
<table class="table table-striped">
		<tr>
			<th style="width:20%">氏名</th>
			<td><div class="col-sm-6"><?php echo $this->Form->input('name',['placeholder'=>'山田　太郎','class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td><div class="col-sm-4"><?php echo $this->Form->input('postalcode' ,['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>住所</th>
			<td><div class="col-sm-12"><?php echo $this->Form->input('address' ,['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td><div class="col-sm-4"><?php echo $this->Form->input('tel',['class'=>'form-control']); ?></div></td>
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