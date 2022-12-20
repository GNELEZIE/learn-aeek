<?php
$list = $quiz->getAllQuiz();

require_once $layout.'/header.php';
?>


    <div class="container pt-5">
      <div class="row pt-5">
          <?php
          while($quisListe = $list->fetch()){
              $nbQst = $question->countQuestByQuizId($quisListe['id_quiz'])->fetch();
          ?>
          <div class="col-md-3 pt-5">
              <div class="box">
                  <div class="box-img">
                      <img src="<?=$domaine?>/uploads/<?=$quisListe['couverture']?>" alt="<?=$quisListe['couverture']?>"/>
                  </div>
                  <div class="box-content">
                      <h5 class="font-15"><?=reduit_text(html_entity_decode(stripslashes($quisListe['description'])),'100') ?></h5>
                      <p>Conjugez le verbe être a toute les personnes</p>
                      <div class="d-flex">
                          <div class="w-30"> <i class="fa fa-clock"></i> <?=$quisListe['duree']?> min  </div>
                          <div class="w-20 text-right"> <i class="fa fa-eye"></i> 10  </div>
                          <div class="w-50 text-right"> <i class="fa fa-question-circle"></i> <?=$nbQst['nb']?> </div>
                      </div>
                      <div class="myBtn text-center pt-3">
                          <a href="<?=$domaine?>/quiz/<?=$quisListe['slug']?>">Je m'exerce</a>
                      </div>
                  </div>
              </div>
          </div>
          <?php
          }
          ?>
      </div>
    </div>

<?php require_once $layout.'/footer.php';?>