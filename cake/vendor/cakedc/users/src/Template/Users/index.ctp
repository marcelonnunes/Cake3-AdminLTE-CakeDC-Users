<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __d('CakeDC/Users', 'Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__d('CakeDC/Users', 'New {0}', $tableAlias), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="users index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('username', __d('CakeDC/Users', 'Username')) ?></th>
            <th><?= $this->Paginator->sort('email', __d('CakeDC/Users', 'Email')) ?></th>
            <th><?= $this->Paginator->sort('first_name', __d('CakeDC/Users', 'First name')) ?></th>
            <th><?= $this->Paginator->sort('last_name', __d('CakeDC/Users', 'Last name')) ?></th>
            <th class="actions"><?= __d('CakeDC/Users', 'Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (${$tableAlias} as $user) : ?>
            <tr>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__d('CakeDC/Users', 'View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__d('CakeDC/Users', 'Change password'), ['action' => 'changePassword', $user->id]) ?>
                    <?= $this->Html->link(__d('CakeDC/Users', 'Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__d('CakeDC/Users', 'Delete'), ['action' => 'delete', $user->id], ['confirm' => __d('CakeDC/Users', 'Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __d('CakeDC/Users', 'previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__d('CakeDC/Users', 'next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>











<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$this->Html->addCrumb ( __d('CakeDC/Users', 'Please enter the new password'), [
		'plugin' => 'CakeDC/Users', 
		'controller' => 'Users', 
		'action'=>'add'
] );

?>

<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?= __d('CakeDC/Users', 'Please enter the new password') ?></h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse">
				<i class="fa fa-minus"></i>
			</button>
		</div>
	</div>
	<!-- /.box-header -->
	
	<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create($user, array('class'=>'form-horizontal')); ?>
    	
	<div class="box-body"> <!-- /.box-body -->



		<div class="box-body">
			<table id="tab_users" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td>4</td>
						<td>X</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td>5</td>
						<td>C</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet Explorer 5.5</td>
						<td>Win 95+</td>
						<td>5.5</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td>6</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td>7</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td>6</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td>1.9</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.1</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.2</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.3</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.4</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.5</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td>1.6</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td>1.7</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td>1.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td>125.5</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td>312.8</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td>419.3</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td>522.1</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Webkit</td>
						<td>OmniWeb 5.5</td>
						<td>OSX.4+</td>
						<td>420</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td>420.1</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td>413</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td>8.5</td>
						<td>C/A<sup>1</sup></td>
					</tr>
					<tr>
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td>3.1</td>
						<td>C</td>
					</tr>
					<tr>
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td>3.3</td>
						<td>A</td>
					</tr>
					<tr>
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td>3.5</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr>
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td>1</td>
						<td>C</td>
					</tr>
					<tr>
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td>1</td>
						<td>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>A</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td>-</td>
						<td>X</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr>
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td>-</td>
						<td>C</td>
					</tr>
					<tr>
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td>-</td>
						<td>U</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</tfoot>
			</table>
		</div>
		<!-- /.box-body -->



	</div> <!-- /.box-body -->
	
	<?= $this->Form->end() ?>
		
	<div class="box-footer"> <!-- /.box-footer -->
		Visit <a href="https://github.com/CakeDC/users">CakeDC/Users
			documentation</a> for more examples and information about the plugin.
	</div> <!-- /.box-footer -->
</div>






<script>

$( document ).ready(function() {
	
  $(function () {
	    $('#tab_users').DataTable({
	      "paging": true,
	      "lengthChange": false,
	      "searching": false,
	      "ordering": true,
	      "info": true,
	      "autoWidth": false
	    });
  });
	  
});
  
</script>

