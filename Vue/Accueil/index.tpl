

{foreach from=$donnees['billets'] item=b}
    
    <article>
        <header>
            <a href="billet/index/{$b['id']}">
                <h1 class="titreBillet">{$b['titre']}</h1>
            </a>
            <time>{$b['date']}</time>
        </header>
        <p>{$b['contenu']}</p>
    </article>
    <hr />
{/foreach}
