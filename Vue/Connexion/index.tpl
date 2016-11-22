<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
            <div class="panel-body">
                {if isset($donnees.msgErreur)}
                    <div dis>
                        <div class="alert alert-danger">{$donnees.msgErreur}</div>
                    </div>
                {/if}
                <form action="connexion/connecter" method="post">
                    <fieldset>
                        <div class="form-group">
                                <input class="form-control" placeholder="login" name="login" id="login"  autofocus="">
                        </div>
                        <div class="form-group">
                                <input class="form-control" placeholder="Password" name="mdp" id="mdp" type="password" value="">
                        </div>
                        <button class="btn btn-primary">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
