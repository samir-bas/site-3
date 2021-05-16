<?php 
include "header.php" ;
include "acounts.php" ;
// if found a parameter nameaccount
if (isset($_GET['nameaccount'])) {
    // The value of the parameter
    $nameaccount = $_GET['nameaccount'];
    $tab = get_accounts();
    // array_search($nameaccount,$tab)
    if ($nameaccount <= count($tab) - 1 ) { ?>
        <main>
            <section class="container">
                <p class="h4 mt-2">Compte</p>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header font-weight-bold">
                                <?php echo ($tab[$nameaccount]['name']) ?> <br>
                                <span>
                                    <?php echo $tab[$nameaccount]['number'] ?>
                                </span>
                            </div>
                            <div class="card_body">
                                <h3 class="card-title"></h3>
                                <p class="card-text px-2">Propriètaire :
                                    <?php echo $tab[$nameaccount]['owner'] ?>
                                </p>
                                <hr class="col-10 offset-1">
                                <p class="card-text px-2">Solde :
                                    <?php echo $tab[$nameaccount]['amount'] ?> €
                                </p>
                                <hr class="col-10 offset-1">
                                <p class="card-text px-2">Dernière opération :
                                    <?php echo $tab[$nameaccount]['last_operation'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php }
} ?>