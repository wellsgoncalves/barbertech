<?php

$link = mysql_connect("localhost", "root", "root");
  mysql_select_db("barbertech", $link);

  $sql1="INSERT INTO agendamento(nm_cliente, nr_telefone, ds_mensagem) VALUES ('a', 'a', 'a' )";
  $executa_sql=mysql_query($sql1) or die(mysql_error());

?>
