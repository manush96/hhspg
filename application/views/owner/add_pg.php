<script type="text/javascript" src="js/add_pg.js"></script>
<div id="add_pg_form">
    <form action="owner/submit_pg" method="POST">
        <div class="pg_info_div col-sm-offset-2 col-sm-8">
            <div class="div_head">
                <span class="full_text">
                    <span class="glyphicon glyphicon-plus"></span>
                    <span class="head_text">PG Info</span>
                </span>
            </div>
            <div class="div_data col-sm-12">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Option 1</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Option 2</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio">Option 1</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio">Option 2</label>
                </div>
                <div class="form-group">
                    <label for="sel1">Select list:</label>
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        
    </form>
</div>