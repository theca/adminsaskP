<?php
/* Smarty version 3.1.30, created on 2016-11-05 15:16:28
  from "C:\wamp64\www\blogpoo\Vue\Chantier\modifierChantier.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581df7cc2e3395_95650532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b52dd502589f4429519dd15305f2706b26796c21' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Chantier\\modifierChantier.tpl',
      1 => 1478358968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581df7cc2e3395_95650532 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['donnees']->value['colonne'] == "Nom_chantier") {?>
    <span id="Nom_chantierValue"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom_chantier'];?>
</span>
    <span id="Nom_chantier" class="editChantier"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
<?php }
if ($_smarty_tpl->tpl_vars['donnees']->value['colonne'] == "Prix_lot_01") {?>
    <span>Prix HT :</span>
    <span class="Prix_lot_01">
        <span id="Prix_lot_01Value"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_01'];?>
</span>
        <span id="Prix_lot_01" class="editChantier"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
        </span>
    </span>
<?php }
if ($_smarty_tpl->tpl_vars['donnees']->value['colonne'] == "Prix_lot_02") {?>
    <span>Prix HT :</span>
    <span class="Prix_lot_02">
        <span id="Prix_lot_02Value"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
</span>
        <span id="Prix_lot_02" class="editChantier"  title="Edit">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
        </span>
    </span>
<?php }
if ($_smarty_tpl->tpl_vars['donnees']->value['colonne'] == "decision") {?>
    <span id="decisionValue"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['decision'];?>
</span>
    <span id="decision" class="editChantierSelect"  title="decision">
        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
    </span>
<?php }
}
}
