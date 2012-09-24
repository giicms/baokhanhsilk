<?php
echo $this->Form->create('User', array('action' => 'login'));
echo $this->Form->input('UserName',array('name'=>'username'));
echo $this->Form->input('Password',array('name'=>'password','type' => 'password'));
//echo $this->Form->input('Role', array('name'=>'role','value' => 'Members','type' => 'hidden'));
//echo $this->Form->input('RoleId', array('name'=>'role_id','value' => '2', 'type' => 'hidden'));
echo $this->Form->end('Login');