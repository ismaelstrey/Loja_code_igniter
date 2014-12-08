<?php echo $this->session->set_flashdata('success'); ?>
<?php echo $this->input->set_cookie('sucesso'); ?>
<h1 class="text-center">Cadastro de usuario</h1>
	<div class="row form_user">	
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 cadasto_usuario">		
				<?php
					$nome = array('name' =>'nome' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Seu nome ...','value'=>set_value('nome') );
					$email = array('name' =>'email' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Seu email ...','value'=>set_value('email')  );
					$imagem = array('name' =>'imagem' , 'id'=>'cadastro_usuario', 'class'=>'btn');
					$senha = array('name' =>'senha' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Escolha uma senha ...','value'=>set_value('senha')  );
					$cidade = array('name' =>'cidade' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Qual sua cidade ...','value'=>set_value('cidade')  );
					$cadastrar =array('name' =>'cadastro', 'value'=>'Cadastrar','class'=>'btn btn-success' );
						echo form_open('usuario/novo_usuario','class="well" enctype="multipart/form-data"');

						echo form_label('Nome: '.form_error('nome'), 'nome');
						echo form_input($nome).'<br>';
// foreach ($tipos as $tipo) {
// 	$type[] = array($tipo['nome_tipo']);
	
// }//print_r($type);
// echo form_dropdown('tipo', $type);

						
						
						echo form_label('Email: '.form_error('email'), 'email');
						echo form_input($email).'<br>';
						

						echo form_label('Cidade: '.form_error('cidade'), 'cidade');
						echo form_input($cidade).'<br>';
						
						echo form_label('Senha: '.form_error('senha'), 'senha');
						echo form_password($senha).'<br>';

						
						echo form_label('Imagem:', 'imagem');	
						echo form_upload($imagem).'<br>';	
						echo form_submit($cadastrar);

				?>
		</div>
		</div>	
	</div>
<?php echo form_close(); ?>

