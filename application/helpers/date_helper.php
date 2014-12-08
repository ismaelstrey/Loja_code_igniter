<?php 
function data_brasil($dataPtBr)
{
$partes = explode("/", $dataPtBr);

return "{$partes[2]}-{$partes[1]}-{$partes[0]}";

}// 2014/12/04
function data_brasil_view($dataPtBr)
{
$partes = explode("-", $dataPtBr);

return "{$partes[2]}/{$partes[1]}/{$partes[0]}";

}
 