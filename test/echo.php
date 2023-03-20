<?php
  $val1 = "" . 3;
  var_dump($val1); // 结果：string(1) "3"
  $val2 = strval(null);
  var_dump($val2); // 结果: string(0) ""
