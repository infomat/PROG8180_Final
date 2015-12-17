<!-- File: src/Template/Users/edit.ctp -->
<div id="main">
	<h1>Edit User Profile by Admin</h1>

	<?php
		echo $this->Form->create($user);
		echo $this->Form->input('firstname', ['required'=> true]);	
		echo $this->Form->input('lastname', ['required'=> true]);	
		echo $this->Form->input('nickname', ['required'=> true]);
		echo $this->Form->input('email', ['required'=> true]);	
		echo $this->Form->input('gender', [
				'options' => ['M' => 'Male','F' =>'Female']
			]);
		echo $this->Form->input('contactDetail', ['required'=> true]);
		echo $this->Form->input('vehicle');	
		echo $this->Form->input('isSmoking', [
				'options' => ['0' =>'No','1' => 'Yes']
			]);		
		echo $this->Form->button(__('Edit Profile'));
		echo $this->Form->end();
	?>

</div>