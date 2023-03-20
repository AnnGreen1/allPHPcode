<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>jQuery AJAX</title>
  <style>
    #content {
      color: black;
      background-color: powderblue;
      width: 800px;
      height: 200px;
    
    }
  </style>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
  <script>

    var urlStr = "http://localhost/allPHPcode/test/AjaxServerTest.php";

    $(document).ready
    (
      function()
      {
        $.ajax
        (
          {
            urlStr,
            type:'get',
            data:{id:'1'},
            dataType:'json',
            success: function(responseData)
            {
              console.log(responseData.data);
              $('#content').text(responseData.data.stem);
            },
            error:function(error)
            {
              console.log(error);
            }
          }
        )
      }
    );
              
  </script>
</head>

<body>
  <div id="content">
   
  </div>
  <div id="username"></div>
</body>

</html>