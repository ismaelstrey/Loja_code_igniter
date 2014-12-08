

<table class="table table-hover">
<?php echo $this->session->set_flashdata('success'); ?>
	<thead>
		<tr class="black">
			<th>Id</th>
			<th>Nome</th>
			<th>Cidade</th>
			<th>Tipo</th>
			<th class="lag_table_editar">Editar</th>
		</tr>
	</thead>
	<tbody>
		
		<?php foreach ($usuarios as $usuario) {
			
		?>
		<tr class="blue">
			<td><?php echo $usuario['id'] ?></td>
			<td><?php echo $usuario['nome'] ?></td>
			<td><?php echo $usuario['cidade'] ?></td>
			<td><?php echo $usuario['tipo'] ?></td>
			<td>						
			<?= anchor('/usuario/novo_usuario', ' ', 'class="btn btn-success glyphicon glyphicon-plus-sign" title="Novo usuario"');?> 
			<?= anchor('/usuario/editar_usuario/'.$usuario["id"], ' ', 'class="btn btn-info glyphicon glyphicon-pencil" title="Editar '.$usuario["nome"].'"');?>						
			<?= anchor('/usuario/del_usuario/'.$usuario["id"], ' ', 'class="btn btn-danger glyphicon glyphicon-remove" title="Deletar '.$usuario["nome"].'"');?> 
			</td>
		</tr>
			<?php } ?>
		

	</tbody>
</table>