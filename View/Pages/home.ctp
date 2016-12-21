<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<h2><?php echo __d('cake_dev', 'LABNET INTEGRATION SYSTEM LABORATORIO.' ); ?></h2>
<div>
	<form>
	 <div class="row">
		 <div class="medium-4 columns">
			 <label>Buscar Resultados
				 <input type="text" placeholder="Coloque Cedula, Nombre o Número">
			 </label>
		 </div>
		</div>
	</form>
</div>

<div>
	
</div>
