<?php

function formataNascimento($data)
{
  return implode('/', array_reverse(explode('-', $data)));
}
