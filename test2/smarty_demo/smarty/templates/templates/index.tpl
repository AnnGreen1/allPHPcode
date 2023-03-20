<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{# $title #}</title>
</head>
<body>

  <h2>{# $title #}</h2>
  <p>{# $content #}</p>




  Address: {# $Contacts.address #}<br>
  E-mail: {# $Contacts.email #}<br>
  {# * you can print arrays of arrays as well * #}
  {#  *这是注释，注释的内容用“*”包裹起来，之后在把内容联通“*”放入定界符*  #}
  QQ: {# $Contacts.communication.QQ #}<br>
  WeChat: {# $Contacts.communication.WeChat #}<br>

  <div>{# $a+$b #}</div>
  


  {# if $login_in #}
    Welcome, <span style="color:{# $fontColor #}">{# $name #}</span>
  {# else #}
    <p>Hi, Guest!</p>
  {# /if #}

<hr/>
{# hsp times="10" size="5" color="green" con="hello,world"  #}
{#  fun name_="AnnGreen" #}



    {#  foreach from=$onearray key=k item=value #}  
     一维key={# $k  #}  一维value={#  $value  #}<br />  
    {#  foreachelse #}  
     nothing  
    {#  /foreach  #}





    {#  section name=one loop=$onearray start=0 step=1  #}  
     index={# $smarty.section.one.index #},  
     
     value={# $onearray[one]  #}<br />  
    {#  sectionelse #}  
     nothing  
    {#  /section  #} 






</body>
</html>