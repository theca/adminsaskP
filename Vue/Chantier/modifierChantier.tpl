{if $donnees.colonne=="Nom_chantier"}
    <span id="Nom_chantierValue">{$donnees.chantier.Nom_chantier}</span>
    <span id="Nom_chantier" class="editChantierInput"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
{/if}
{if $donnees.colonne=="Prix_lot_01"}
    <span>Prix HT :</span>
    <span class="Prix_lot_01">
        <span id="Prix_lot_01Value">{$donnees.chantier.Prix_lot_01}</span>
        <span id="Prix_lot_01" class="editChantierInput"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
        </span>
    </span>
{/if}
{if $donnees.colonne=="Prix_lot_02"}
    <span>Prix HT :</span>
    <span class="Prix_lot_02">
        <span id="Prix_lot_02Value">{$donnees.chantier.Prix_lot_02}</span>
        <span id="Prix_lot_02" class="editChantierInput"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
        </span>
    </span>
{/if}
{if $donnees.colonne=="FK_decision"}
    <span id="decisionValue">{$donnees.decision.decision}</span>
    <span id="FK_decision" class="editChantierSelect"  title="decision">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
{/if}