<?php echo $this->session->set_flashdata('success'); ?>

<h1 class="text-center">Cadastro de usuario</h1>
	<div class="row form_user">	
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 cadasto_usuario">		
				<?php
					$nome = array('name' =>'nome' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Seu nome ...','value'=>$usuarios['nome'] );
					$email = array('name' =>'email' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Seu email ...','value'=>$usuarios['email']  );
					$imagem = array('name' =>'imagem' , 'id'=>'cadastro_usuario', 'class'=>'btn');
					$senha = array('name' =>'senha' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Escolha uma senha ...' );
					$cidade = array('name' =>'cidade' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Qual sua cidade ...','value'=>$usuarios['cidade']  );
					$cadastrar =array('name' =>'cadastro', 'value'=>'Cadastrar','class'=>'btn btn-success' );
						echo form_open('usuario/update_usuario/'.$usuarios['id'],'class="well" enctype="multipart/form-data"');

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

