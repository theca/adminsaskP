<?php
/* Smarty version 3.1.30, created on 2016-11-03 10:19:25
  from "C:\wamp64\www\blogpoo\Vue\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581b0f2de95f13_89650148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '045e275e1e0b2b9fddd961b8998c2161a033513d' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\footer.tpl',
      1 => 1478167970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581b0f2de95f13_89650148 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
       Ceci est notre footer
</div>
        <?php echo '<script'; ?>
 src="web/js/lumino.glyphs.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="web/js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
        
	<?php echo '<script'; ?>
 src="web/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="web/js/chart.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="web/js/easypiechart.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="web/js/easypiechart-data.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="web/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 src="web/js/client.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="web/js/nouveauChantier.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="web/js/chosen.jquery.min.js"><?php echo '</script'; ?>
>       
        <?php echo '<script'; ?>
 src="web/js/script.js"><?php echo '</script'; ?>
>
        
        
        
        
       
	<?php echo '<script'; ?>
>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	<?php echo '</script'; ?>
>
        

</body>
</html><?php }
}
