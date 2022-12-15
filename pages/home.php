<?php
require_once $layout.'/header.php';
?>


    <div class="container pt-5">
      <div class="row pt-5">
          <div class="col-md-3 pt-5">
              <div class="box">
                  <div class="box-img">
                      <img src="<?=$asset?>/media/conjugaison.jpg" alt=""/>
                  </div>
                  <div class="box-content">
                      <h5 class="font-15">Être au présent</h5>
                      <p>Conjugez le verbe être a toute les personnes</p>
                      <div class="d-flex">
                          <div class="w-50"> <i class="fa fa-clock"></i> 15min  </div>
                          <div class="w-50 text-right"> <i class="fa fa-question"></i> 10  </div>
                      </div>
                      <div class="myBtn text-center pt-3">
                          <a href="<?=$domaine?>/quiz">Je m'exerce</a>
                      </div>
                  </div>

              </div>
          </div>
      </div>
    </div>

<?php require_once $layout.'/footer.php';?>