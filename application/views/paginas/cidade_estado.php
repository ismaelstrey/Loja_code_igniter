<label>Estado</label>
<?php
    $options = array ('' => 'Escolha');
    foreach($estados as $estado)
        $options[$estado->id] = $estado->nome;
    echo form_dropdown('estado', $options);
?>
<label>Cidade</label>
<?php echo form_dropdown('cidade', array('' => 'Escolha um Estado'), '','id="cidade"' ); ?>