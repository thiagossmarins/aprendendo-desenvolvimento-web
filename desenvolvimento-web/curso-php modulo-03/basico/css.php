<h1 class="titulo">CSS</h1>

<h1 center>
  <?php 
    echo "Olá";
    echo "<small>";
    echo " Mundo";
    echo "</small>";
  ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'! </div>" ?>

<br>
<div center><button dobro><?= "legal" ?></button></div>

<style>
    button {
      padding:  5px 20px;
      background-color: #4286f4;
      color: #eee;
      font-weight: bold;
      border-radius: 10px;
   }

   [center] {
      display: flex;
      justify-content:  center;
   }

   /* <?= "[azul]" ?> {
    color: #4286f4;
   } */

   [dobro] {
    font-size: <?= 10 - 8 ?>rem;
   }

</style>