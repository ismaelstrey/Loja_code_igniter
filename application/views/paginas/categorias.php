<form action="" method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<th><label for="categoria"> Categoria </label></th>
			<td>
		  	<?php
				$categoria['Categorias Disponíveis'][''] = 'Selecione uma categoria';
				foreach($categorias as $a){
					$categoria['Categorias Disponíveis'][$a->id_cat] = $a->nome;
				}
				echo  form_dropdown('categoria', $categoria, array($textos->categoria_id),"id='categoria'");
				?>
			</td>
		</tr>

		<tr>
			<th><label for="subcategoria"> Subategoria </label></th>
			<td>
				<select name='subcategoria' id='subcategoria'>
				<option value=''> Selecione uma subcategoria </option>
				<?php

				if (isset($subcategorias)) {

					echo "<optgroup label='Subcategoria'>";

					foreach ($subcategorias as $key => $list) {
						echo "<option value='". $list['id_cat'] . "'>" . $list['nome'] . "</option>";
					}

					echo "</optgroup>";
				}else{
					$subcategoria['Categorias Disponíveis'][''] = 'Selecione uma categoria';
					foreach ($subcats as $key => $list) {
						$selected = $textos->subcategoria_id == $list->id_cat ? 'selected=selected': '';
						echo "<option value='{$list->id_cat}' {$selected}>{$list->nome}</option>";
					}
				}
				?>
				</select>
			</td>
		</tr>
</table>