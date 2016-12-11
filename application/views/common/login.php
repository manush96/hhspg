<div style="background-image:img/back.jpg">
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
      </ul>
      
      <div class="tab-content">
        
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="<? $action;?>" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="email" required autocomplete="off" name="email" readonly onfocus="this.removeAttribute('readonly');"/>
          </div>
          <input type="hidden" name="return_url" value="<?= $return_url;?>"/>
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password" readonly onfocus="this.removeAttribute('readonly');"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>

        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="user/register" method="post" autocomplete="off">
          
          
          <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"/>
            </div>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"/>
          </div>
          <input type="hidden" name="return_url" value="<?= $return_url;?>"/>
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off" readonly onfocus="this.removeAttribute('readonly');"/>
          </div>
          <div class="field-wrap">
            <label>
              Phone no<span class="req">*</span>
            </label>
            <input type="text" name="phone" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
</div>
<script type="text/javascript" src="js/login.js"></script>