<h3><span class="fui-user"></span>　ユーザマスタ</h3>
<?= $this->Form->create($user, ['type' => 'file']); ?>
<table class="table table-striped">
		<tr>
			<th style="width:20%">氏名</th>
			<td><div class="col-sm-6"><?php echo $this->Form->input('name',['placeholder'=>'山田　太郎','class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>ユーザタイプ</th>
			<td><div class="col-sm-4"><?php echo $this->Form->select('type' , $type ,['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>所属部署</th>
			<td><div class="col-sm-4"><?php echo $this->Form->select('affiliation' , $affi ,['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>雇用形態</th>
			<td><div class="col-sm-4"><?php echo $this->Form->select('employment' , $empl ,['class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>メールアドレス</th>
			<td><div class="col-sm-8"><?php echo $this->Form->input('email',['placeholder'=>'sample@signite.jp','class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>ログインID</th>
			<td><div class="col-sm-4"><?php echo $this->Form->input('loginid',['placeholder'=>'signite','class'=>'form-control']); ?></div></td>
		</tr>
		<tr>
			<th>パスワード</th>
			<td><div class="col-sm-4"><?php echo $this->Form->input('password',['class'=>'form-control']); ?></div></td>
		</tr>
		<!--tr>
			<th>カラー選択</th>
			<td></td>
		</tr>
		<tr>
			<th>画像ファイル</th>
			<td>
				<?php echo $this->Form->input('files', ['type'=>'file']); ?>

<?php if(empty($user['files'])){; ?>
				<?php } else {; ?>
				<img src="/<?= h($user['filepath']) ?>" alt="<?= h($user['name']) ?>">
				<?php }; ?>
			</td>
		</tr-->
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
