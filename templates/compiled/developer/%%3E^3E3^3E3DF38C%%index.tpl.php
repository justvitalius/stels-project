<?php /* Smarty version 2.6.19, created on 2011-10-03 00:48:12
         compiled from actions/ActionError/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cfg', 'actions/ActionError/index.tpl', 7, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('noShowSystemMessage' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['aMsgError'][0]['title']): ?>
	<h2><?php echo $this->_tpl_vars['aLang']['error']; ?>
: <?php echo $this->_tpl_vars['aMsgError'][0]['title']; ?>
</h2>
<?php endif; ?>

<p><?php echo $this->_tpl_vars['aMsgError'][0]['msg']; ?>
</p>
<p><a href="javascript:history.go(-1);"><?php echo $this->_tpl_vars['aLang']['site_history_back']; ?>
</a>, <a href="<?php echo smarty_function_cfg(array('name' => 'path.root.web'), $this);?>
"><?php echo $this->_tpl_vars['aLang']['site_go_main']; ?>
</a></p>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>