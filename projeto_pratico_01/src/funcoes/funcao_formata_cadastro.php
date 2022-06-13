<?php
function formataDataCadastro($data)
{
  return $data = date('d/m/y h:m', strtotime($data));
}
