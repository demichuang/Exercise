<!DOCTYPE html>
<html lang="en">
  
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Life is Travel</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="/Exercise/views/assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/Exercise/views/assets/animate/animate.css" />
<link rel="stylesheet" href="/Exercise/views/assets/animate/set.css" />
<link rel="stylesheet" href="/Exercise/views/assets/gallery/blueimp-gallery.min.css">
<link rel="shortcut icon" href="/Exercise/views/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/Exercise/views/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/Exercise/views/assets/style.css">
</head>


<body>
<h3></h3>

<!-- Header Starts -->
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
      <div class="container">
        <!-- 顯示回首頁連結 -->
         <a class="navbar-brand active" href="/Exercise/index/index"><h4>回首頁</h4></a>
      </div>
     </div>
   </div>
</div>
<!-- Header Ends -->


<!-- Activity Starts-->
  <div class="container contactform center">
    <!-- 顯示"Add Activity" -->
    <h3></h3>
    <h2 class="text-center  wowload fadeInUp">Add Activity</h2>
    <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">
        <!-- 顯示新增活動畫面 --> 
        <form method="post" action="/Exercise/admin/addactivity" >
          <input type="text" placeholder="活動編號" name="anum" required>
          <input type="text" placeholder="活動名稱" name="aname" required>
          <input type="text" placeholder="人數限制" name="maxpeople">
          <input type="text" placeholder="可否攜伴(可：1，不可：0)" name="withpeople" required>
          <input type="text" placeholder="年/月/日" name="starttime" required>
          <input type="text" placeholder="年/月/日" name="endtime" required>
          <!--<input type="text" placeholder="URL?" name="amaxpeople">-->
          <button class="btn btn-primary" name="reset" type="reset">Clear</button>&nbsp;
          &nbsp;<button class="btn btn-primary" name="signup" type="submit">Add</button> 
        </form>
      </div>
    </div>
    &nbsp;&nbsp;
    
  </div>
</div>
<!-- Activity Ends-->

</body>
</html>