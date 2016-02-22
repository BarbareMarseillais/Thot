<?php

function printLoginForm() {
    echo<<<END
    
    <div class="container-fluid" id="milieu">
        <div style="padding: 20px">
            <img src="media/logothotblanc.png" width="100%">
        </div>
        <div id="content">
            <div class="row" padding="10px">
                <h1>Connexion</h1>
            </div>
            <form action="index.php?todo=login" method="post">
                <fieldset class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="Enter login">
                </fieldset>
                <fieldset class="form-group">
                    <input type="password" class="form-control" name="mdp" placeholder="Password">
                </fieldset>
                <button type="submit" class="btn btn-primary" style="width:270px">Submit</button>
                <div>
                    <a href="nouvelUtilisateur.php">Pas de compte ?</a><br>
                </div>
            </form>
        </div>
    </div>
    
END;
}

