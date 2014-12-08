

<h1 class="text-center">Cadastro de Produtos</h1>
	<div class="row form_user">	
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2 cadasto_usuario">		
				<?php
					$nome = array('name' =>'nome' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Nome do produto ...','value'=>set_value("nome",""));
					$descricao = array('name' =>'descricao' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Descrição do produto ...','value'=>set_value("descricao",""));
					$usuario_id = array('name' =>'usuario_id' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Escolha uma usuario_id ...','value'=>set_value("usuario_id",""));
					$preco = array('name' =>'preco' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'00,00','value'=>set_value("preco",""));
					$peso = array('name' =>'peso' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Peso Kilogramas','value'=>set_value("peso",""));
					$id = $this->session->userdata('usuario_logado');

					
					$cadastrar =array('name' =>'cadastro', 'value'=>'Cadastrar','class'=>'btn btn-success' );

						echo form_open('produtos/cadastrar','class="well"');
						echo validation_errors('<div class="alert-danger">','</div>');
						echo form_label('Nome do produto:', 'nome');
						echo form_input($nome).'<br>';
						echo form_label('Preço:', 'preco');
						echo '<div class="input-group"><span class="input-group-addon">R$</span>';
						echo form_input($preco).'<br>'.'</div>';
						echo form_label('Peso:', 'peso');
						echo '<div class="input-group"><span class="input-group-addon">Kg</span>';							
						echo form_input($peso).'</div><br>';	
						echo form_label('Descrição:', 'descricao');
						echo form_textarea($descricao).'<br>';
						echo form_hidden('usuario_id', $id['id']);
						echo form_submit($cadastrar);	

				?>
		</div>
		</div>	
	</div>
<?php echo form_close(); ?>

