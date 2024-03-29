<!--=====================================
BANNER
======================================-->
<?php
        $banner = ControladorBanner::ctrMostrarBanner();
        $servidor = ControladorRuta::ctrServidor();
    //    echo '<pre class="bg-white">'; print_r($banner); echo "</pre>";
 ?>


<div class="banner container-fluid p-0">
    
    <div class="jd-slider fade-slider">
        
        <div class="slide-inner">
            
            <ul class="slide-area">
                
                <?php foreach ($banner as $key => $value): ?>

                <li>                   
                    <img src="<?php echo $value["img"];?>" width="100%">
                </li>

                <?php endforeach ?>

            </ul>

        </div>

        <div class="controller d-none">
            
            <a class="auto" href="#">

                <i class="fas fa-play fa-xs"></i>
                <i class="fas fa-pause fa-xs"></i>

            </a>

            <div class="indicate-area"></div>

        </div>

        <div class="verMas text-center bg-white rounded-circle d-none d-lg-block" vinculo="#planes">
    
            <i class="fas fa-chevron-down"></i> 

        </div>

    </div>

</div>
