

Smarty模板文件不能直接写CSS和js代码（因为有‘{’和‘}’，与定界符冲突），如果要写，有两种解决办法
1、用外部样式表
2、用`{literal}`和`{/literal}`把css和js代码包裹起来

处理php代码：用`{php}` `{/php}`

-----------------------------

视图（view）可以用`.php`、`html`、`tpl`

-----------------------------