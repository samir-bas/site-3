<?php 
include "header.php" ;
include "acounts.php" ;
?>
  <!-- MAIN -->
  <main>
    <h2 class="text-center mt-3">Connexion</h2>
    <div class="container ">
      <div class="row w-100" >
        <!-- <div class="col-md-6 offset-3"> -->
        <div class="col-6 offset-3">
          <form action="verifconnexion.php" method="POST" class="mt-3">

            <div class="form-group">
              <label for="login" class="form-label mt-1">Login :</label>
              <input type="text" id="login" name="login" class="form-control error" autofocus autocomplete="off">
            </div>

            <div class="form-group">
              <label for="motpasse" class="form-label mt-1">Mot de passe :</label>
              <input type="password" id="motpasse" name="motpasse" class="form-control" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary my-5">Envoyer</button>

          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include "footer.php" ?>