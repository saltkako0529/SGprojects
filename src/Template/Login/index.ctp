<?= $this->Form->create() ?>
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
	<div class="card">
	  <div class="card-header">
		<h1>Login <span class="fui-lock"></span></h1>
	  </div>
	  <div class="card-block">
	        <div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
	          <div class="form-group">
	            <?= $this->Form->input('loginid',['placeholder'=>'ID','class'=>'form-control']) ?>
	          </div>
	        </div>
	        <div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
	          <div class="form-group">
	            <?= $this->Form->input('password',['placeholder'=>'Password','class'=>'form-control']) ?>
	          </div>
	        </div>
	        <div class="col-xs-6 col-xs-offset-3">
	          <div class="form-group">
	            <?= $this->Form->button('Login',['placeholder'=>'Password','class'=>'btn btn-block btn-lg btn-inverse']) ?>
	          </div>
	        </div>
	  </div>
	</div>
        </div>
      </div> <!-- /row -->
<?= $this->Form->end() ?>
