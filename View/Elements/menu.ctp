<?php
    $menus = array(
        'Buscar Resultado' => array('Controller' => 'home', 'Action' => 'home'),
        'Clientes' => array('Controller' => 'partners', 'Action' => 'index'),
        'Pacientes' => array('Controller' => 'patients', 'Action' => 'index'),
        'Productos' => array('Controller' => 'products', 'Action' => 'index'),
        'Grupos' => array('Controller' => 'groups', 'Action' => 'index'),
        'Categororias' => array('Controller' => 'categories', 'Action' => 'index'),
    );
?>
<ul class="vertical dropdown menu" data-dropdown-menu style="max-width: 300px;">
<?php
    foreach($menus AS $label => $parameter) { ?>
      <li>
          <?php echo $this->Html->link($label,array('controller' => $parameter['Controller'], 'action' => $parameter['Action']));?>
      </li>
<?php }; //echo $this->Html->nestedList($list);?>
</ul>
