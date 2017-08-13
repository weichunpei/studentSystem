<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="lib/html5shiv/html5shiv.min.js"></script>
    <script src="lib/respond/respond.js"></script>
    <![endif]-->
</head>
<body>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 id="title">欢迎进入学生管理系统<sup>V1.0</sup></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4"></div>
            <!--登录=====================-->
            <div class="col-xs-4 login_title">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                                  data-toggle="tab">快速登录</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">快速注册</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <form class="form-horizontal" action="login.php" method="get">
                                <div class="form-group">
                                    <label for="inputname1" class="col-sm-2 control-label">账号:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputname1" placeholder="账号" name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword1" class="col-sm-2 control-label">密码:</label>

                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword1"
                                               placeholder="密码" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-info" value="登录">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <!--注册=====================================-->
                            <form class="form-horizontal" action="register.php" method="get">
                                <div class="form-group">
                                    <label for="inputname2" class="col-sm-2 control-label">账号:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputname2" name="username"><span id="inp2"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword2" class="col-sm-2 control-label">密码:</label>

                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword2" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">确认密码:</label>

                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3"><span id="pwInfo"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-info" value="快 速 注 册" id="submit_btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xs-4"></div>
    </div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="lib/jquery/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="lib/bootstrap/js/bootstrap.js"></script>
<script src="js/login.js"></script>
</body>
</html>