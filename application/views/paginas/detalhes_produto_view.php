<div class="container">
<table class="table table-hover">
	<thead>
		<tr class="black">
			<th>Id</th>
			<th>Nome</th>
			<th>Descriçao</th>
			<th>Valor</th>
			<th>Compre agora mesmo</th>
		</tr>
	</thead>
	<tbody>
		<tr class="blue">
			<td><?=$produtos['id'] ?></td>
			<td><?=$produtos['nome'] ?></td>
			<td><?=$produtos['descricao'] ?></td>
			<td><?=numeroEmReais($produtos['preco']); ?></td>
			<th>
<?php 
	$data_entrega = array('name' =>'data_de_entrega' , 'class'=>'form-control', 'id'=>'data_entrega','value' => '');
	$enviar = array('class'=>'btn btn-primary','content'=>'Comprar','type'=>'submit');	echo form_open('vendas/nova'); 
	echo form_label('Data de entrega', 'data_de_entrega', 'class="form-control"');
	echo form_input($data_entrega);
	echo form_hidden('produto_id', $produtos['id']);
	echo form_button($enviar);
	echo form_close();
?>

			</th>

		</tr>
	</tbody>
</table>
	

	
	
</div>