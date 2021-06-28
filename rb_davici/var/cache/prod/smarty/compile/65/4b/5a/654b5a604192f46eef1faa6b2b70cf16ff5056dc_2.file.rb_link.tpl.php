<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-02 15:43:53
  from 'D:\xampp\htdocs\prestashop\rb_davici\themes\rb_davici\modules\rbthemedream\views\templates\hook\rb_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603ea3896546f3_71980243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '654b5a604192f46eef1faa6b2b70cf16ff5056dc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\rb_davici\\themes\\rb_davici\\modules\\rbthemedream\\views\\templates\\hook\\rb_link.tpl',
      1 => 1614022398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603ea3896546f3_71980243 (Smarty_Internal_Template $_smarty_tpl) {
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
	        <div class="block links RbBlockLink">
	            <p class="h3 rb-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rb_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
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
