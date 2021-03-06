<!-- File: src/Template/Users/userlist.ctp -->
<div id="logout">
	<?php
		if($loginuser['id'] != null && $loginuser['id'] != ""){
			echo $this->Html->link('Log Out', ['controller' => 'Users', 'action' => 'logout'], ['class'=>'facebookLogout']); 
		}else{
			echo $this->Html->link('Log In', ['controller' => 'Users', 'action' => 'login']);
		}
	?>
</div>
<div id="main-list">
	<h1>User list</h1>
	<table>
		<tr>
			<th class="large-1 medium-4">User ID</th>			
			<th class="large-3 medium-4">User Name</th>
			<th class="large-3 medium-4">Email</th>
			<th class="large-2 medium-4">Facebook ID</th>
			<?php if($loginuser['id'] != null && $loginuser['role'] == 'admin'){echo '<th class="large-2 medium-4">Action</th>';} ?>
		</tr>

		<!-- Here is where we iterate through our $tags query object, printing out tag info -->

		<?php foreach ($users as $user): ?>
		<tr>
			<td>
				<?= $user->id ?>
			</td>	
			<td>
				<?= $user->username ?>
			</td>
			<td>
				<?= $user->email ?>
			</td>	
			<td>
				<?= $user->facebook_id ?>
			</td>						
			<?php
				if($loginuser['id'] != null && $loginuser['role'] == 'admin'){
					echo "<td>";
					echo $this->Html->link('Edit', ['action' => 'useredit', $user->id]);
					echo " | ";
					echo $this->Form->postLink(
						'Delete',
						['action' => 'delete', $user->id],
						['confirm' => 'Are you sure?']
					);
					echo "</td>";					
				}
			?>			
		</tr>
		<?php endforeach; ?>
	</table>
</div>