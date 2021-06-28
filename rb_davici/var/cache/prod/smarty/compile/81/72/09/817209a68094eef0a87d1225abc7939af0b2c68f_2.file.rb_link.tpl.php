<?php
/* Smarty version 3.1.34-dev-7, created on 2021-06-13 06:43:14
  from 'D:\xampp\htdocs\prestashop\rb_davici\modules\rbthemedream\views\templates\hook\rb_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60c5e1429768d3_55453469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '817209a68094eef0a87d1225abc7939af0b2c68f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\modules\\rbthemedream\\views\\templates\\hook\\rb_link.tpl',
      1 => 1616614254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c5e1429768d3_55453469 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['rb_links']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rb_links']->value, 'rb_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rb_link']->value) {
?>
	    <?php if ($_smarty_tpl->tpl_vars['rb_link']->value['hook'] == 'displayNav1' || $_smarty_tpl->tpl_vars['rb_link']->value['hook'] == 'displayNav2') {?>
	        <div class="block-rbthemedream block-rbthemedream-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_link']->value['id'], ENT_QUOTES, 'UTF-8');?>
 block-links-inline d-inline-block">
	            <ul>
	                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rb_link']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
	                    <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url']) && isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
	                        <li>
	                            <a
	                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
"
	                                <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
	                            >
	                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

	                            </a>
	                        </li>
	                    <?php }?>
	                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            </ul>
	        </div>
	    <?php } elseif ($_smarty_tpl->tpl_vars['rb_link']->value['hook'] == 'displayLeftColumn' || $_smarty_tpl->tpl_vars['rb_link']->value['hook'] == 'displayRightColumn') {?>
	        <div class="block block-toggle block-rbthemedream block-rbthemedream-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_link']->value['id'], ENT_QUOTES, 'UTF-8');?>
 block-links js-block-toggle">
	            <h3 class="block-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></h3>
	            <div class="block-content">
	                <ul>
	                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rb_link']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
	                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url']) && isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
	                            <li>
	                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
"
	                                   	<?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
	                                >
	                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

	                                </a>
	                            </li>
	                        <?php }?>
	                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	                </ul>
	            </div>
	        </div>
	    <?php } else { ?>
	        <div class="links block RbBlockLink">
	            <p class="h3 title_block"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
</p>
	            <ul>
	                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rb_link']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
	                    <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url']) && isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
	                        <li>
	                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
	                            >
	                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

	                            </a>
	                        </li>
	                    <?php }?>
	                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            </ul>
	        </div>
	    <?php }?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
