<style>
.pagination-pic {list-style: none;display: -webkit-box;margin: 10px 0 10px 0;}
.pagination-pic li {margin-right: 7px;}
</style>

<?php 
//Dev: Geovanny Lacayo
/*************** ANTES DE UTILIZAR EL SCRIPT DEBES DE: *******************************
1- Pegar el siguiente codigo php en algun lugar de tu pagina de portfolio:

<?php 
  require_once('portfoliopaginacion.php');
  $urlImagenes = ''; // Asignar valor a la variable con la direccion donde se encuentra las imagenes, EJEMPLO: "images/potfolio/min/" 
  paginacionDePortafolio($urlImagenes);
?>

2- Pegar la lista de paginacion en tu pagina de portfolio.php

<?php if ($numero_paginas > 1) {?>
<ul class="pagination-pic">
  <li ><a href="portfolio.php?page=<?php echo $prev; ?>">&laquo;</a></li>
  <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
  <li class="<?php if($pagina_actual==$i){ echo "active"; }?>"><a href="portfolio.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
  <?php } ?>
  <li><a href="portfolio.php?page=<?php echo $next; ?>">&raquo;</a></li>
</ul>
<?php } ?>

3- Incluir el FOR a tu codigo

<?php for ($i=$inicio; $i>=$final; $i--) { ?>
  AQUI VA TU CODIGO HTML, POR SI LAS MOSCAS PONDRE UN EJEMPLO xD
  <div>
    <a href="images/portfolio/full/$i.jpg">
      <img src="images/portfolio/min/$i.jpg">
    </a>
  </div>
<?php } ?>

4- Numero de imagenes que deseas mostrar por pagina

Modifica la varible que esta en la linea 44, cambia el 12 por el numero que quieras

*/
function paginacionDePortafolio($urlImagenes){
  /*Cantidad de imagenes que hay en una carpeta ( min = full LOL)*/
  $total_imagenes = count(glob("$urlImagenes{*.jpg}",GLOB_BRACE));
  /*Maximo de imagenes que mostraremos por pagina*/
  $total_imagenes_mostrar = 12; // Este numero puede variar segun tus necesidades
  /*Cantidad de paginas*/
  $GLOBALS["numero_paginas"] = ceil($total_imagenes / $total_imagenes_mostrar);
  /*Pagina actual*/
  $GLOBALS["pagina_actual"] = isset($_GET['page']) ? $_GET['page']: '1';
  /*Calcular el numero de inicio de cada pagina*/
  //$paginacion_parametros =  ($GLOBALS["pagina_actual"]* $total_imagenes_mostrar) - $total_imagenes_mostrar;
  /*Verificar si la variable es negativa*/
  $verificar = $total_imagenes - ($GLOBALS["pagina_actual"]* $total_imagenes_mostrar);
  //El conteo del FOR va en decremento
  if ($GLOBALS["pagina_actual"]== 1) {
    $GLOBALS["inicio"] = $total_imagenes; // Numero de inicio de cada pagina
    $GLOBALS["prev"] = $GLOBALS["numero_paginas"];
  }else{
    $GLOBALS["inicio"] = $total_imagenes - (( $GLOBALS["pagina_actual"]- 1 ) * $total_imagenes_mostrar); // Numero de inicio de cada pagina
    $GLOBALS["prev"] = $GLOBALS["pagina_actual"]- 1;
  }
  /*Verificar si la variable es negativa*/
  if ($verificar < 1 ) {
    $GLOBALS["final"] = 1;//Numero final de cada pagina
    $GLOBALS["next"] = 1;
  }else{
    $GLOBALS["final"] = $total_imagenes - ($GLOBALS["pagina_actual"]* $total_imagenes_mostrar) + 1;//Numero final de cada pagina
    $GLOBALS["next"] = $GLOBALS["pagina_actual"]+ 1;
  }
}
?>