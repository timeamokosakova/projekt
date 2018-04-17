<?php include('pages/head.php') ?>

  

   <DIV class="hlavna">
        <form action="update.php" method="post">
            Sledovacie číslo,ktoré ideme aktualizovať:
            <br>
            <input type="number" name="id" required id="id" placeholder="Sledovacie číslo">
            <br />
            <br />

            Nový stav:
            <br>
            <input type="text" name="stav" required id="stav" placeholder="Stav">
            <br />


            <button type="submit" class="btn btn-primary" data-toggle="modal"  value="update"> Odoslané </button>
        </form>

        <br>


    </DIV>

  <?php include('pages/foot.php') ?>
