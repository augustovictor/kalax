<div class="products view">
<h2><?php echo __('Product'); ?></h2>

		<p>
			<strong><?php echo __('Visible'); ?></strong>
			<br>
			<?php echo h($product['Product']['visible']); ?>
		</p>
		<p>
			<strong><?php echo __('Name'); ?></strong>
			<br>
			<?php echo h($product['Product']['name']); ?>
		</p>
		<p>
			<strong><?php echo __('Image'); ?></strong>
			<br>
			<strong><?php if($product['Product']['image_path']) echo $this->Html->image($product['Product']['image_path']); ?></strong>
		</p>
		<p>
			<strong><?php echo __('Description'); ?></strong>
			<br>
			<?php echo h($product['Product']['description']); ?>
		</p>
		<p>
			<strong><?php echo __('Category'); ?></strong>
			<br>
			<?php echo $this->Html->link($product['Category']['category_name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
		</p>
		<p>
			<strong><?php echo __('Prod Link'); ?></strong>
			<br>
			<?php echo h($product['Product']['prod_link']); ?>
		</p>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
