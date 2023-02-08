  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Welcome</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Vetement</a>
          <a href="#" class="list-group-item">Chaussure</a>
          <a href="#" class="list-group-item">Livre</a>
        </div>

        <div class="list-group">
          <a href="<?php echo base_url('welcome/ajouter'); ?>" class="list-group-item">Ajouter un objet</a>
          <a href="<?php echo base_url('objets/index');?>">Voir objet d'autres utilisateurs</a>
          <a href="<?php echo base_url('echange2/listeDemande');?>">Voir les demandes d'echange</a>

          <p>Welcome  <?php echo $_SESSION['id']['idUser']; ?></p>           
        </div>
        
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <!-- <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div> -->
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

        <?php if(isset($listeDemande)){ foreach ($listeDemande as $demandes ) { ?>
            <?php if(isset($objetDemande)){ foreach ($objetDemande as $objDemande ) { ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                    <h2>Demande de : <?php echo $demandes['nom']; ?></h2>
                    <div class="card-body">
                        <h4 class="card-title">
                        <a href="#">Echanger <?php echo $objDemande['titre']; ?> contre <?php echo $demandes['titre']; ?></a>
                        </h4>
                        <a href="<?php echo base_url('acceptation/index'); ?>?idEchange=<?php echo $demandes['idEchange']; ?>&titre1=<?php echo $demandes['titre']; ?>&photo1=<?php echo $demandes['photo']; ?>&categorie1=<?php echo $demandes['categorie']; ?>&descris1=<?php echo $demandes['descris']; ?>&idUser1=<?php echo $demandes['idUser1']; ?>&idObjet1=<?php echo $demandes['idObjet1']; ?>&titre2=<?php echo $objDemande['titre']; ?>&photo2=<?php echo $objDemande['photo']; ?>&categorie2=<?php echo $objDemande['categorie']; ?>&descris2=<?php echo $objDemande['descris']; ?>&idUser2=<?php echo $objDemande['idUser2']; ?>&idObjet2=<?php echo $objDemande['idObjet2']; ?>"> Accepter</a> 
                        <a href="">Refuser</a>
                    </div>
                    <div class="card-footer">
                    </div>
                    </div>
                </div>
            <?php } }?>
        <?php } }?>

          <!-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Two</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Three</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Four</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Five</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div> -->
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
