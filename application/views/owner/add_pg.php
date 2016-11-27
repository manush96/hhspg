<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script type="text/javascript" src="https://gc.kis.scr.kaspersky-labs.com/8877A146-E1A6-224D-8C54-31025FA9E5A9/main.js" charset="UTF-8"></script><script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<style type="text/css">
  .ui-content{
    padding:0em;
  }
</style>
<script>
  $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>0){
            $('#quantity').val(quantity - 1);
            }
    });
    
});
  </script>
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>PG Listing Form</h1>
  </div>

  <div data-role="main" class="ui-content">
    <div data-role="collapsible" data-collapsed-icon="plus" data-expanded-icon="minus">
      <h1>Personal Info</h1>
        <form class="form-horizontal" action="owner/add_pg_data" method="post">
        <fieldset>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Name</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="Enter Name" class="form-control input-md" required="">
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Email</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="Enter Email" class="form-control input-md" required="">
            
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Contact No</label>  
          <div class="col-md-4">
          <input id="textinput" name="textinput" type="text" placeholder="Enter Contact No" class="form-control input-md" required="">
            
          </div>
        </div>

        </fieldset>
        </form>
    </div>
  </div>
  <div data-role="main" class="ui-content">
    <div data-role="collapsible" data-collapsed-icon="plus" data-expanded-icon="minus">
      <h1>PG Info</h1>
                <form class="form-horizontal">
          <fieldset>

                  <form class="form-horizontal">
          <fieldset>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">PG Name</label>  
            <div class="col-md-4">
            <input id="textinput" name="textinput" type="text" placeholder="Enter PG Name" class="form-control input-md" required="">
              
            </div>
          </div>


          <!-- Multiple Radios -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="radios">Gender</label>
            <div class="col-md-4">
            <div class="radio">
              <label for="radios-0">
                <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                Male
              </label>
            </div>
            <div class="radio">
              <label for="radios-1">
                <input type="radio" name="radios" id="radios-1" value="2">
                Female
              </label>
            </div>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Area</label>  
            <div class="col-md-4">
            <input id="textinput" name="textinput" type="text" placeholder="Enter Area" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Address</label>  
            <div class="col-md-4">
            <input id="textinput" name="textinput" type="text" placeholder="Enter Address" class="form-control input-md" required="">
              
            </div>
          </div>

          <!-- Multiple Checkboxes -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Rules &amp; Regulations</label>
            <div class="col-md-4">
            <div class="checkbox">
              <label for="checkboxes-0">
                <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                No Alcohol
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-1">
                <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                No smoking
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-2">
                <input type="checkbox" name="checkboxes" id="checkboxes-2" value="">
                Non veg not allowed
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-3">
                <input type="checkbox" name="checkboxes" id="checkboxes-3" value="">
                1 month notice period
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-4">
                <input type="checkbox" name="checkboxes" id="checkboxes-4" value="">
                No girls allowed
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-5">
                <input type="checkbox" name="checkboxes" id="checkboxes-5" value="">
                No boys allowed
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-6">
                <input type="checkbox" name="checkboxes" id="checkboxes-6" value="">
                Minimum 3-9 months stay
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-7">
                <input type="checkbox" name="checkboxes" id="checkboxes-7" value="">
                No time restriction
              </label>
            </div>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Other Rules</label>  
            <div class="col-md-4">
            <input id="textinput" name="textinput" type="text" placeholder="Enter Extra Rules" class="form-control input-md">
            <span class="help-block">If other rules in addition to above mentioned then enter here</span>  
            </div>
          </div>

          </fieldset>
          </form>

    </div>
  </div>
  <div data-role="main" class="ui-content">
    <div data-role="collapsible" data-collapsed-icon="plus" data-expanded-icon="minus">
      <h1>Amenitite</h1>
          <form class="form-horizontal">
          <fieldset>
          <!-- Multiple Checkboxes -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes">Amenities</label>
            <div class="col-md-4">
            <div class="checkbox">
              <label for="checkboxes-0">
                <input type="checkbox" name="checkboxes" id="checkboxes-0" value="">
                Wifi
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-1">
                <input type="checkbox" name="checkboxes" id="checkboxes-1" value="">
                TV
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-2">
                <input type="checkbox" name="checkboxes" id="checkboxes-2" value="">
                Refigerator
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-3">
                <input type="checkbox" name="checkboxes" id="checkboxes-3" value="">
                Air Conditioner
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-4">
                <input type="checkbox" name="checkboxes" id="checkboxes-4" value="">
                Laundry
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-5">
                <input type="checkbox" name="checkboxes" id="checkboxes-5" value="">
                R/O Water purifier
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-6">
                <input type="checkbox" name="checkboxes" id="checkboxes-6" value="">
                Bed &amp; Pillow
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-7">
                <input type="checkbox" name="checkboxes" id="checkboxes-7" value="">
                Cup Board
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-8">
                <input type="checkbox" name="checkboxes" id="checkboxes-8" value="">
                Parking
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-9">
                <input type="checkbox" name="checkboxes" id="checkboxes-9" value="">
                Breakfast
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-10">
                <input type="checkbox" name="checkboxes" id="checkboxes-10" value="">
                Lunch
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-11">
                <input type="checkbox" name="checkboxes" id="checkboxes-11" value="">
                Dinner
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-12">
                <input type="checkbox" name="checkboxes" id="checkboxes-12" value="">
                Tv each room
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-13">
                <input type="checkbox" name="checkboxes" id="checkboxes-13" value="">
                laundry with iron
              </label>
            </div>
            </div>
          </div>

          </fieldset>
          </form>
    </div>
  </div>
  <div data-role="main" class="ui-content">
    <div data-role="collapsible" data-collapsed-icon="plus" data-expanded-icon="minus">
      <h1>Room sharing & Rates</h1>
          <form class="form-horizontal">
            <fieldset>

            <!-- Form Name -->
            <legend>Only Select those options which are available and enter their rates.</legend>

            <!-- Prepended checkbox -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="prependedcheckbox">2-Sharing A.C.</label>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-addon">     
                      <input type="checkbox">     
                  </span>
                  <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="     Enter Rate">
                </div>
                
              </div>
            </div>

            <!-- Prepended checkbox -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="prependedcheckbox">2-Sharing Non A.C.</label>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-addon">     
                      <input type="checkbox">     
                  </span>
                  <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="     Enter Rate">
                </div>
                
              </div>
            </div>

            <!-- Prepended checkbox -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="prependedcheckbox">3-Sharing A.C.</label>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-addon">     
                      <input type="checkbox">     
                  </span>
                  <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="     Enter Rate">
                </div>
                
              </div>
            </div>

            <!-- Prepended checkbox -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="prependedcheckbox">3-Sharing Non A.C.</label>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-addon">     
                      <input type="checkbox">     
                  </span>
                  <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="     Enter Rate">
                </div>
                
              </div>
            </div>

            <!-- Prepended checkbox -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="prependedcheckbox">4-Sharing A.C.</label>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-addon">     
                      <input type="checkbox">     
                  </span>
                  <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="     Enter Rate">
                </div>
                
              </div>
            </div>

            <!-- Prepended checkbox -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="prependedcheckbox">4-Sharing Non A.C.</label>
              <div class="col-md-4">
                <div class="input-group">
                  <span class="input-group-addon">     
                      <input type="checkbox">     
                  </span>
                  <input id="prependedcheckbox" name="prependedcheckbox" class="form-control" type="text" placeholder="     Enter Rate">
                </div>
                
              </div>
            </div>

            </fieldset>
            </form>
   </div>
  </div>
  <div data-role="main" class="ui-content">
    <div data-role="collapsible" data-collapsed-icon="plus" data-expanded-icon="minus">
      <h1>Vacant Rooms</h1>
          <form class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Number of Vacant Rooms</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Enter Number of Vacant Rooms" class="form-control input-md" required="">
    
  </div>
</div>

</fieldset>
</form>
  <div class="container">
  <div class="row">
          <div class="col-lg-2">
                          <div class="input-group">
                      <div class="input-group-btn">
                          <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                            <div class="glyphicon glyphicon-minus"></span>
                          </button>
                      </div>
                      <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                      <span class="input-group-btn">
                          <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                              <span class="glyphicon glyphicon-plus"></span>
                          </button>
                      </span>
                  </div>
          </div>
  </div>
</div>
   </div>
  </div>
  <div data-role="main" class="ui-content" >
    <div data-role="collapsible" data-collapsed-icon="plus" data-expanded-icon="minus">
      <h1>Details about Website Listing</h1>
          <form class="form-horizontal">
            <fieldset>

            <!-- Multiple Checkboxes -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="checkboxes"> Select Websites on which you have listed your PG. </label>
            <div class="col-md-4">
            <div class="checkbox">
              <label for="checkboxes-0">
                <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                Just Dial
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-1">
                <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                Olx
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-2">
                <input type="checkbox" name="checkboxes" id="checkboxes-2" value="">
                Sulekha
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-3">
                <input type="checkbox" name="checkboxes" id="checkboxes-3" value="">
                Quickr
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-4">
                <input type="checkbox" name="checkboxes" id="checkboxes-4" value="">
                Magic bricks
              </label>
            </div>
            <div class="checkbox">
              <label for="checkboxes-5">
                <input type="checkbox" name="checkboxes" id="checkboxes-5" value="">
                Kemcho.com
              </label>
            </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Other Websites</label>  
            <div class="col-md-4">
            <input id="textinput" name="textinput" type="text" placeholder="Enter Other websites" class="form-control input-md">
            <span class="help-block">If you have listed you PG on websites other than mentioned then please enter here</span>  
            </div>
          </div>

            </fieldset>

   </div>
  </div>
  <div data-role="footer">
    <input type="submit" name="submit" value="submit">
  </div>
</form>
</div> 
</body>
</html>
