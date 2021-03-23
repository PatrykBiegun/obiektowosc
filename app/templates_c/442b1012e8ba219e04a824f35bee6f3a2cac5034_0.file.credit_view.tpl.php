<?php
/* Smarty version 3.1.39, created on 2021-03-23 10:12:57
  from 'F:\xxamp\htdocs\cw5\app\credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059b1192516c2_14913782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '442b1012e8ba219e04a824f35bee6f3a2cac5034' => 
    array (
      0 => 'F:\\xxamp\\htdocs\\cw5\\app\\credit_view.tpl',
      1 => 1616490766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059b1192516c2_14913782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1151083706059b1192435a4_90705949', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_1151083706059b1192435a4_90705949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1151083706059b1192435a4_90705949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<br>
<form action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc_credit.php"  method="post">
    
                        <label for="id_amount">Amount:</label>
                        <input id="id_amount" type="text" placeholder="ilosc" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
">	<br><br>	
			<label for="id_years">Years</label>
                        <input id="id_years" type="text" placeholder="lata" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
" > <br><br>
			<label for="id_percentages">Percentages:</label>
                        <input id="id_percentages" type="text" placeholder="procent" name="percentages" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percentages;?>
" > <br><br>
			<button class="pure-button" type="submit">Policz</button>
    
</form>

      
  

	<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?> 
		<h4>Wystąpiły błędy: </h4>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
		<div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #f55; width:400px;"><li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li></div>
               
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		
	<?php }?> <br>

               <?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?> 
			<h4>Informacje:</h4>

		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		
	<?php }?> <br>
        
<?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
    
	<h4>Wynik</h4>
   <div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #8f8; width:400px;">
	<?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

   </div><br>
<?php }?>



<?php
}
}
/* {/block 'content'} */
}
