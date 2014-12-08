

<h1 class="text-center">Editar de Produto</h1>
<div class="row form_user">	
<div class="container">
	<div class="col-sm-8 col-sm-offset-2 cadasto_usuario">		
		<?php
		$nome = array('name' =>'nome' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Seu nome ...','value'=>$produtos['nome']);
		$descricao = array('name' =>'descricao' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Seu descrição ...','value'=>$produtos['descricao'] );
		$usuario_id = array('name' =>'usuario_id' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Escolha uma usuario_id ...','value'=>$produtos['usuario_id'] );
		$preco = array('name' =>'preco' , 'id'=>'cadastro_usuario', 'class'=>'form-control','placeholder'=>'Qual sua preço ...','value'=>$produtos['preco'] );
		$cadastrar =array('name' =>'cadastro', 'value'=>'Cadastrar','class'=>'btn btn-success');
		echo form_open('produtos/editado/'.$produtos['id'],'class="well"');
		echo form_label('Nome:', 'nome');
		echo form_input($nome).'<br>';
		echo form_label('Descrição:', 'descricao');
		echo form_input($descricao).'<br>';
		echo form_label('Preço:', 'preco');
		echo '<div class="input-group"><span class="input-group-addon">R$</span>';
		echo form_input($preco).'<br>'.'</div>';
		echo form_label('Id do usuario:', 'usuario_id');
		echo form_input($usuario_id).'<br>';
		echo form_submit($cadastrar);				 
		?>
	</div>
</div>	
</div>
<?php echo form_close(); 

?>

