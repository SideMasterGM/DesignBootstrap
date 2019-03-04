<?php include 'php/section/header.php'; include 'php/section/pagename.php'; include 'php/section/click-to-call.php'; ?>
<?php include('conexion.php'); ?>
<?php 
    $queryAll = ("SELECT * FROM reviews ORDER BY rdate DESC");
    $total_registro = $dataBase->querySingle("SELECT COUNT(*) as count FROM reviews");
    $total_registro_mostrar = 5;
    $numero_paginas = ceil($total_registro / $total_registro_mostrar);
    $pagina_actual = isset( $_GET['page']) ? $_GET['page'] : 1;
    $paginacion_parametros =  $pagina_actual*$total_registro_mostrar - $total_registro_mostrar;
    $queryAll .= " LIMIT {$paginacion_parametros},{$total_registro_mostrar}";
    $sentencia_busqueda = $dataBase->query($queryAll);
?>
<div itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage">
    <div class="container padding3">
        <div class="row padding2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2 class="text-center">Our Reviews</h2>
                <p class="text-center"><?php echo "$Phrase[3]";?></p><hr>
                <?php if (empty($total_registro)) { }else{ ?> <p  class="text-center">Showing <?php if($paginacion_parametros==0){echo "1";}else{ echo $paginacion_parametros; } ?>-<?php echo $total_registro_mostrar*$pagina_actual; ?> of <?php echo $total_registro ?></p>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center"> Page
                        <ul class="pagination display-inline-item-li">
                          <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
                          <li class="ml-2 btn btn-sm bg-color1 <?php if($pagina_actual==$i){ echo "active"; }elseif($pagina_actual==0){ echo "active"; } ?>"><a class="t-color1" href="testimonials.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a>
                          </li>                          
                          <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">                
                
                <form class="rating-form" action="guardar.php" method="post" name="rating-movie">
                    <div class="padding3 col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-color3 borders-top mt-3">
                        <h3 class="text-center mt-3"><strong class="uppercase t-color5">Write a Testimonial</strong></h3>
                           
                        <fieldset class="form-group">
                            <legend class="form-legend">Rating:</legend>
                            <div class="form-item">
                                <input id="rating-5" name="rating" type="radio" value="5" />
                                 <label for="rating-5" data-value="5">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o t-color4"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">5</span>
                                </label>
                                <input id="rating-4" name="rating" type="radio" value="4" />
                                <label for="rating-4" data-value="4">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o t-color4"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">4</span>
                                </label>
                                <input id="rating-3" name="rating" type="radio" value="3" />
                                <label for="rating-3" data-value="3">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o t-color4"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">3</span>
                                </label>
                                <input id="rating-2" name="rating" type="radio" value="2" />
                                <label for="rating-2" data-value="2">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o t-color4"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">2</span>
                                </label>
                                <input id="rating-1" name="rating" type="radio" value="1" />
                                <label for="rating-1" data-value="1">
                                    <span class="rating-star">
                                        <i class="fa fa-star-o t-color4"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="ir">1</span>
                                </label> 
                            </div>
                        </fieldset>
                    </div>
                    <div class="bg-color4 pt-4 pb-4">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                            <input type="text" name="name" placeholder="Name" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                            <input type="text" name="city" placeholder="City" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                            <input type="hidden" name="date" value='<?php echo @date('Y-m-d')?>'>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                            <input type="text" name="project" placeholder="Project" class="form-control" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                            <textarea class="form-control" name="review" placeholder="Comment" rows="10" required></textarea>
                        </div>
                        <div class="form-group text-center">
                            <?php
                              //require_once('recaptchaphp-1.11/recaptchalib.php');
                              //$publickey = "6LdDETEUAAAAAL9TtvB6PQSg-vFkopFZOwOR9jx7"; // you got this from the signup page
                              //echo recaptcha_get_html($publickey);
                            ?>                        
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 my-2 text-center">
                            <input type="submit" name="Guardar" value="Publish Review" class="badge-pill btn btn-lg bg-color2 t-color1">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                <div class="col-7col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <?php 
                        while ($resultInArray = $sentencia_busqueda->fetchArray(SQLITE3_ASSOC)) {
                     ?>
                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 well mt-2">
                            <h3><i class="fa fa-user"></i> <?php echo $resultInArray['name']. ' in '.$resultInArray['city'] ?> <small><?php for ($i=1; $i <= $resultInArray['star'] ; $i++) { 
                                echo "<i class='fa fa-star t-gold'></i>";
                            } ?> - <?php echo $resultInArray['star'].'.0'; ?> </small></h3>
                            <small><i class="fa fa-calendar-o"></i> Date: <?php echo $resultInArray['rdate'] ?></small>
                            <p>Project: <strong><?php echo $resultInArray['project'] ?></strong></p>
                            <p><?php echo $resultInArray['review'] ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-2">
                   <ul class="pagination display-inline-item-li"> Page 
                      <?php for ($i = 1; $i <= $numero_paginas; $i++) { ?>
                      <li class="ml-2 btn btn-sm bg-color1 <?php if($pagina_actual==$i){ echo "active"; }elseif($pagina_actual==0){ echo "active"; } ?>"><a class="t-color1" href="testimonials.php?page=<?php echo $i; ?>" ><?php echo $i; ?></a>
                      </li>
                      <?php } ?>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
</div>
<?php include 'php/section/footer.php'; ?>