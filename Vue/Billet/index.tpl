
    <article>
        <header>
            <h1 class="titreBillet">{$donnees.billet.titre}</h1>
            <time>{$donnees.billet.date}</time>
        </header>
        <p>{$donnees.billet.contenu}</p>
    </article>

<hr />
<header>
    <h1 id="titreReponses">Réponses à {$donnees.billet.titre}</h1>
</header>

{foreach from=$donnees['commentaires'] item=c}
    <p>{$c.auteur} dit :</p>
    <p>{$c.contenu}</p>
{/foreach}
<hr />
<form method="post" action="billet/commenter">
    
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value={$donnees.billet.id} />
    <input type="submit" value="Commenter" />
</form>
