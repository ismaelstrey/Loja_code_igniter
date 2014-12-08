	<div class="row">
		
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
		<?= $this->session->flashdata("success"); ?>
	<?php  if (isset($produtos)) { ?>
	<h1 class="text-center">Ben vindo a loja</h1>
	<table class="table table-hover">
				<thead>
					<tr class="black">
						<th>Id</th>
						<th>Nome</th>
						<th>Descrição</th>
						<th>Preço</th>
						<th>Vendedor</th>
						<th>Data de entrega</th>
						<th class="lag_table_editar">Editar</th>
					</tr>
				</thead>
				<tbody>

		<?php
		foreach ($produtos as $produto) :  ?>
		
					<tr class="blue">
						<td><?php echo $produto["id"] ?></td>
						<td><?php echo anchor('produtos/detalhes_produto/'.$produto["id"],$produto["nome"], 'title="Detalhes do produto"'); ?></td>
						<td><?php echo $produto["descricao"] ?></td>
						<td><?php echo numeroEmReais($produto["preco"]); ?></td>
						<td><?php echo $produto["usuario_id"] ?></td>
						<td><?php echo data_brasil_view($produto["data_de_entrega"]) ?></td>
						<td>						
							<?= anchor('/cadastro_produtos', ' ', 'class="btn btn-success glyphicon glyphicon-plus-sign" title="Novo produto"');?> 
							<?= anchor('/produtos/edit_produto/'.$produto["id"], ' ', 'class="btn btn-info glyphicon glyphicon-pencil" title="Editar '.$produto["nome"].'"');?>						
							<?= anchor('/produtos/del_produto/'.$produto["id"], ' ', 'class="btn btn-danger glyphicon glyphicon-remove" title="Deletar '.$produto["nome"].'"');?> 
						</td>



					</tr>
				
		<?php endforeach; ?>

</tbody>
</table>
<?php }
 ?>

 
</div>
</div>
<?= $this->input->is_cli_request();?>
