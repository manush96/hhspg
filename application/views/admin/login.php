<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HHSPG</title>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <style type="text/css">
        html
        {
            background: #6db3f2; /* Old browsers */
            background: -moz-linear-gradient(top,  #6db3f2 0%, #54a3ee 50%, #3690f0 100%, #1e69de 100%, #3690f0 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top,  #6db3f2 0%,#54a3ee 50%,#3690f0 100%,#1e69de 100%,#3690f0 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom,  #6db3f2 0%,#54a3ee 50%,#3690f0 100%,#1e69de 100%,#3690f0 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#3690f0',GradientType=0 ); /* IE6-9 */
            min-height: 100%;
        }
        #signin
        {
            padding: 20px 50px;
            margin-top: 100px;
            background-color: white;
            border-radius: 7px;
        }
        #signin #head .glyphicon
        {
            vertical-align: middle;
        }
        #signin .input-group-addon
        {
            color: white;
            background-color: #0da3e2;
            font-size: 125%;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            border-style: none;
            width: 14%;
        }
        #signin input
        {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        #signin #submit
        {
            font-size: 130%;
            border-radius: 0px;
            box-shadow: 2px 2px 2px gray;
            outline: none;
            border: none;
        }
    </style>
</head>
<body>
    <div id="signin" class="col-sm-offset-4 col-sm-4">
        <div class="row">
            <div id="head" class=" col-sm-6">
                <h2><span class="glyphicon glyphicon-user"></span> Login</h2><br>
            </div>
        </div>
        <form class="form-horizontal" action="admin/login" role="form" method="POST">
            <div class="form-group">
                <div class="input-group col-sm-11">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control input-lg" id="username" name="username" placeholder="Username" autofocus="" required="" oninvalid="setCustomValidity('Please enter valid Username')" oninput="setCustomValidity('')">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group col-sm-11">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password" required="" oninvalid="setCustomValidity('Please enter Password')" oninput="setCustomValidity('')">
                </div>
            </div><br>
            <div class="form-group">        
                <div class="">
                    <button type="submit" id="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-log-in"></span> Login
                    </button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>