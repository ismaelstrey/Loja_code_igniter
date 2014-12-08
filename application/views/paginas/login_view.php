<h1 class="text-center">Login</h1>
	<div class="row form_user">	
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 cadasto_usuario">	
				
			<?= $this->session->flashdata("success"); ?>
			<?= $this->session->flashdata("error"); ?>


				<?php 
				if ($this->session->userdata('usuario_logado')) {
				$user = $this->session->userdata('usuario_logado');
				echo $user['nome'].'</br>' ;
				}
			 ?>


				<?php
				if (!$this->session->userdata('usuario_logado')) {
			
				
					$email = array('name' =>'email' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Seu email ...' );
					$senha = array('name' =>'senha' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Escolha uma senha ...' );
					$cadastrar =array('name' =>'logar', 'value'=>'Logar','class'=>'btn btn-success' );
					echo form_open('logar/autenticar','class="well"');						
						echo form_label('Email:', 'email');
						echo form_input($email).'<br>';						
						echo form_label('Senha:', 'senha');
						echo form_password($senha).'<br>';
						echo form_submit($cadastrar);				 
				?>
		</div>
		</div>	
	</div>
<?php echo form_close();}else{
	echo anchor('login/sair', 'Sair', array('class' => 'btn btn-danger' ));
	
} ?>