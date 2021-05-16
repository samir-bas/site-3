<?php include "header.php" ;
 include "acounts.php" ?>

  
    <!-- MAIN -->
    <main>
      <section class="container">
        <p class="h4 mt-2">Vos comptes bancaires</p>
        <div class="row">
          <?php $i = 0; foreach(get_accounts() as $v) { $i++ ?>
          <div class="col-4">
            <div class="card">
              <div class="card-header font-weight-bold">
                <?php echo $v['name'] ?> <br>
                <span> <?php echo $v['number'] ?> </span>
              </div>
              <div class="card_body">
                <h3 class="card-title"></h3>
                <p class="card-text px-2">Propriètaire : <?php echo $v['owner'] ?> </p>
                <hr class="col-10 offset-1">
                <p class="card-text px-2">Solde : <?php echo $v['amount'] ?> €</p>
                <hr class="col-10 offset-1">
                <p class="card-text px-2">Dernière opération : <?php echo $v['last_operation'] ?> </p>
                <div class="card-footer mx-auto">
                  <a class="btn btn-primary col-4" href="#">Clôturer</a>
                  <a class="btn btn-primary col-5" href="#">Dépôt/Retrait</a>
                  <a class="btn btn-primary" href="compte.php/?nameaccount=<?php echo $i -1 ?>" >Voir</a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </section>
    </main>

<?php include "footer.php" ?>