{if $donnees.colonne=="Nom_chantier"}
    <span id="Nom_chantierValue">{$donnees.chantier.Nom_chantier}</span>
    <span id="Nom_chantier" class="editChantierInput"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
{/if}
{if $donnees.colonne=="Prix_lot_01"}
    <span>Prix HT :</span>
    
        <span id="Prix_lot_01Value">{$donnees.chantier.Prix_lot_01}</span>
        <span id="Prix_lot_01" class="editChantierInput"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
        </span>
    
{/if}
{if $donnees.colonne=="Prix_lot_02"}
    
        <span id="Prix_lot_02Value">{$donnees.chantier.Prix_lot_02}</span>
        <span id="Prix_lot_02" class="editChantierInput"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
        </span>
    
{/if}
{if $donnees.colonne=="FK_decision"}
    <span id="decisionValue">{$donnees.decision.decision}</span>
    <span id="FK_decision" class="editChantierSelect"  title="decision">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
{/if}
{if $donnees.colonne=="FK_Decision_Lot_01"}
    <span id="FK_Decision_Lot_01Value">{$donnees.decision.decision_01}</span>
    <span id="FK_Decision_Lot_01" class="editChantierSelect"  title="decision_01">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
{/if}
{if $donnees.colonne=="FK_Decision_Lot_02"}
    <span id="FK_Decision_Lot_02Value">{$donnees.decision.decision_02}</span>
    <span id="FK_decision_02" class="editChantierSelect"  title="decision_02">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
{/if}
{if $donnees.colonne=="FK_Decision_Lot_03"}
    <span id="FK_Decision_Lot_03Value">{$donnees.decision.decision_03}</span>
    <span id="FK_decision_03" class="editChantierSelect"  title="decision_03">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
{/if}