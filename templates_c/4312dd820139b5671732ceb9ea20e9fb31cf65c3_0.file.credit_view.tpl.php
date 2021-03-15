<?php
/* Smarty version 3.1.39, created on 2021-03-15 22:13:59
  from 'F:\xxamp\htdocs\cw1\app\credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604fce176b0078_10249672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4312dd820139b5671732ceb9ea20e9fb31cf65c3' => 
    array (
      0 => 'F:\\xxamp\\htdocs\\cw1\\app\\credit_view.tpl',
      1 => 1615842699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604fce176b0078_10249672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1198945810604fce1769a307_62766528', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_1198945810604fce1769a307_62766528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1198945810604fce1769a307_62766528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<br>
<form action = "http://localhost/cw1/app/calc_credit.php" method="post">
   <label for="id_amount">Amount:</label>
   <input id="id_amount" type="text" placeholder="ilosc" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
" >	<br><br>	
			<label for="id_years">Years</label>
                        <input id="id_years" type="text" placeholder="lata" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
" > <br><br>
			<label for="id_percentages">Percentages:</label>
                        <input id="id_percentages" type="text" placeholder="procent" name="percentages" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['percentages'];?>
" > <br><br>
			<button class="pure-button" type="submit">Policz</button>
    
</form>

       
  
<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		
	<?php }
}?>
                                   
<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
    
	<h4>Wynik</h4>
   <div style="margin: 30px; padding: 5px; border-radius: 5px; background-color: #8f8; width:400px;">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

   </div><br>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
