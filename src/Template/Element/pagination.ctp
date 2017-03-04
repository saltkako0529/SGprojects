<div class="paginator">
	<ul class="pagination">
		<li><?= $this->Paginator->first('<< ' . __('first')) ?></li>
		<li class="previous"><?= $this->Paginator->prev('< ' . __('previous')) ?></li>
		<li><?= $this->Paginator->numbers() ?></li>
		<li class="next"><?= $this->Paginator->next(__('next') . ' >') ?></li>
		<li><?= $this->Paginator->last(__('last') . ' >>') ?></li>
	</ul>
</div>
