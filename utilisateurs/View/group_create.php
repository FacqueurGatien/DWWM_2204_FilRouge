<div clas="page">
     <h1>Ajouter un groupe</h1>
     <form method="POST" action="#">
          <fieldset style="width:0%">
          <legend>Ajouter un goupe</legend>
               <label>Id du grouupe</label>
               <br>
               <input type ="number" name ="group_id" placeholder='Entrer un nombre' required="required">

               <br>
               <br>

               <label>Nom du groupe</label>
               <br>
               <input type ="text" name="group_name" placeholder='Entrer un nom de groupe' required="required">

               <br>
               <br>

               <button class="submit-button" type="submit">Valider</button>
          </fieldset>
     </form>
</div>
<div class="page">
     <?php require '../www/en_construction.php'?>
</div>