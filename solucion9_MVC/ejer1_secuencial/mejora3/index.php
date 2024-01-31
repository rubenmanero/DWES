<?php
  include('clients.php');       // En este archivo estará el modelo
  $clients = Clients::getAll();  // Este método del modelo nos devuelve la lista de artículos
  include('showAllClients.php');   // En este archivo estará la vista
?>