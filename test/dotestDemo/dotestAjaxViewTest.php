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
</head>

<body>
  <div id="content">

  </div>
  <div id="username"></div>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
  <script>
    $.ajax({
      url: 'http://localhost/allPHPcode/test/dotestDemo/dotestAjaxServerTest.php',
      dataType: 'JSON',
      data: {id: 3},
      success: function(res) {
        console.log(res);
        console.log(res.stem);
        $('#content').text(res.stem);
        $('#username').text(res.answer_a);
      },
      error: function(res) {
        console.log(res);
      }
    })

    // var urlStr = "http://localhost/allPHPcode/test/dotestDemo/dotestAjaxServerTest.php";

    // $(document).ready
    // (
    //   function()
    //   {
    //     $.ajax
    //     (
    //       {
    //         urlStr,
    //         type:'get',
    //         data:{id:'3'},
    //         dataType:'json',
    //         success: function(responseData)
    //         {


    //           // if (status == "success") {
    //           //       console.log("请求成功!");
    //           //   }
    //            //console.log(data.stem);
    //            console.log(responseData);
    //           console.log(responseData.data);
    //           // $('#content').text(responseData);
    //           // $('#username').text(responseData.data.stem);
    //         },
    //         error:function(error)
    //         {
    //           console.log(error);
    //         }
    //       }
    //     )
    //     console.log('执行了');
    //   }
    // );
              
  </script>
</body>

</html>