<p>Vous devez être connecté pour accéder à cette zone.</p>

<form action="connexion/connecter" method="post">
    <input name="login" type="text" placeholder="Entrez votre login" required autofocus>
    <input name="mdp" type="password" placeholder="Entrez votre mot de passe" required>
    <button type="submit">Connexion</button>
</form>
{if isset($donnees.msgErreur)}
    <p>{$donnees.msgErreur}</p>
{/if}