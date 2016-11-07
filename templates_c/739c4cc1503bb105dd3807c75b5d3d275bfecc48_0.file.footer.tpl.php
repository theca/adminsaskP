<?php
/* Smarty version 3.1.30, created on 2016-11-07 12:09:00
  from "/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58206edccd3b43_24309777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739c4cc1503bb105dd3807c75b5d3d275bfecc48' => 
    array (
      0 => '/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/footer.tpl',
      1 => 1478451572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58206edccd3b43_24309777 (Smarty_Internal_Template $_smarty_tpl) {
?>

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
