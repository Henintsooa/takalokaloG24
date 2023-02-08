<div class="container">

    <div class="row">

        <div class="col-lg-12">

            <h1 class="my-4">Ajouter un objet</h1>
            <form action="<?php echo base_url('ajouter/index');?>" method="post">
                <p> Nom :<input type="text" name="titre" placeholder="Nom" /> </p>
                <p> Photo :<input type="text" name="photo" placeholder="photo" /> </p>
                <p> Categorie : <select id="" name="categorie">
                                <option value>Categorie</option>
                                <option value="vetement">Vetement</option>
                                <option value="chaussure">Chaussure</option>
                                <option value="livre">Livre</option>
                                </select> </p>
                <p> Description : <input type="textArea" id="" name="description"> </p>
                <button type="submit">Valider</button>
            </form>

            <p>Welcome  <?php echo $_SESSION['id']['idUser']; ?></p>           
        </div>
    </div>
</div>
