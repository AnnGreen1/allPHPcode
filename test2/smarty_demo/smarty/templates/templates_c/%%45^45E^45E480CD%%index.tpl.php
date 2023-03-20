<?php /* Smarty version 2.6.32, created on 2021-11-20 08:43:52
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'hsp', 'index.tpl', 35, false),array('function', 'fun', 'index.tpl', 36, false),)), $this); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<body>

  <h2><?php echo $this->_tpl_vars['title']; ?>
</h2>
  <p><?php echo $this->_tpl_vars['content']; ?>
</p>




  Address: <?php echo $this->_tpl_vars['Contacts']['address']; ?>
<br>
  E-mail: <?php echo $this->_tpl_vars['Contacts']['email']; ?>
<br>
      QQ: <?php echo $this->_tpl_vars['Contacts']['communication']['QQ']; ?>
<br>
  WeChat: <?php echo $this->_tpl_vars['Contacts']['communication']['WeChat']; ?>
<br>

  <div><?php echo $this->_tpl_vars['a']+$this->_tpl_vars['b']; ?>
</div>
  


  <?php if ($this->_tpl_vars['login_in']): ?>
    Welcome, <span style="color:<?php echo $this->_tpl_vars['fontColor']; ?>
"><?php echo $this->_tpl_vars['name']; ?>
</span>
  <?php else: ?>
    <p>Hi, Guest!</p>
  <?php endif; ?>

<hr/>
<?php echo test1(array('times' => '10','size' => '5','color' => 'green','con' => "hello,world"), $this);?>

<?php echo login(array('name_' => 'AnnGreen'), $this);?>




    <?php $_from = $this->_tpl_vars['onearray']; if (($_from instanceof StdClass) || (!is_array($_from) && !is_object($_from))) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['value']):
?>  
     一维key=<?php echo $this->_tpl_vars['k']; ?>
  一维value=<?php echo $this->_tpl_vars['value']; ?>
<br />  
    <?php endforeach; else: ?>  
     nothing  
    <?php endif; unset($_from); ?>





    <?php unset($this->_sections['one']);
$this->_sections['one']['name'] = 'one';
$this->_sections['one']['loop'] = is_array($_loop=$this->_tpl_vars['onearray']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['one']['start'] = (int)0;
$this->_sections['one']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['one']['show'] = true;
$this->_sections['one']['max'] = $this->_sections['one']['loop'];
if ($this->_sections['one']['start'] < 0)
    $this->_sections['one']['start'] = max($this->_sections['one']['step'] > 0 ? 0 : -1, $this->_sections['one']['loop'] + $this->_sections['one']['start']);
else
    $this->_sections['one']['start'] = min($this->_sections['one']['start'], $this->_sections['one']['step'] > 0 ? $this->_sections['one']['loop'] : $this->_sections['one']['loop']-1);
if ($this->_sections['one']['show']) {
    $this->_sections['one']['total'] = min(ceil(($this->_sections['one']['step'] > 0 ? $this->_sections['one']['loop'] - $this->_sections['one']['start'] : $this->_sections['one']['start']+1)/abs($this->_sections['one']['step'])), $this->_sections['one']['max']);
    if ($this->_sections['one']['total'] == 0)
        $this->_sections['one']['show'] = false;
} else
    $this->_sections['one']['total'] = 0;
if ($this->_sections['one']['show']):

            for ($this->_sections['one']['index'] = $this->_sections['one']['start'], $this->_sections['one']['iteration'] = 1;
                 $this->_sections['one']['iteration'] <= $this->_sections['one']['total'];
                 $this->_sections['one']['index'] += $this->_sections['one']['step'], $this->_sections['one']['iteration']++):
$this->_sections['one']['rownum'] = $this->_sections['one']['iteration'];
$this->_sections['one']['index_prev'] = $this->_sections['one']['index'] - $this->_sections['one']['step'];
$this->_sections['one']['index_next'] = $this->_sections['one']['index'] + $this->_sections['one']['step'];
$this->_sections['one']['first']      = ($this->_sections['one']['iteration'] == 1);
$this->_sections['one']['last']       = ($this->_sections['one']['iteration'] == $this->_sections['one']['total']);
?>  
     index=<?php echo $this->_sections['one']['index']; ?>
,  
     
     value=<?php echo $this->_tpl_vars['onearray'][$this->_sections['one']['index']]; ?>
<br />  
    <?php endfor; else: ?>  
     nothing  
    <?php endif; ?> 






</body>
</html>