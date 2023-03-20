<?php
    $array = array(

        'name'  => 'php中文网',

        'url'   => 'http://www.php.cn',

        'title' => 'PHP教程',

        'article' => 'array_rand()函数'

    );

    echo '<pre>
';

    var_dump(array_rand($array));
    // var_dump(array_rand($array,2)[0]);
    // var_dump(array_rand($array,2)[1]);

    


    var_dump(array_rand($array, 2));

    var_dump(array_rand($array, 2));

    var_dump(array_rand($array, 3));
