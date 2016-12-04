<style type="text/css">
    body
    {
        font-family: circular-book;
    }
    #pg_full
    {
        background: #f5f8f9;
    }
    .carousel img
    {
        min-width: 100%;
        max-width: none;
    }
    .pg_header
    {
        min-height: 90px;
        padding: 20px 0px;
        background: #fff;
        border-top: 1px solid #ccc;
    }
    .pg_name
    {
        font-size: 30px;
    }
    .avail_for
    {
        font-size: 18px;
        color: gray;
    }
    .landmark_div
    {
        margin-top: 10px;
    }
    .highlight_div
    {
        background: #fff;
        margin: 10px 15px;
        padding: 0px;
        font-size: 22px;
    }
    .highlight_div .head_div
    {
        font-size: 26px;
        color: #335b6b;
        padding: 5px 15px;
    }
    .highlight_div .data_div
    {
        padding: 10px 5px;
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
    }
</style>
<div class="container-fluid lr0pad" id="pg_full">
    <div class="col-sm-12 pg_header lr0pad">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <span class="pg_name">
                    <?= $pg['name'];?> Paying Guest 
                </span> 
                <span class="avail_for">
                     - Available for <?= $pg['gender'];?>
                </span>    
            </div>
            <div class="col-sm-12 landmark_div">
                <span class="h4">
                    Landmark: <?= $pg['area'];?> 
                </span>    
            </div>
        </div>
    </div>
    <div class="col-sm-12 pg_body">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-7">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/blog/image1.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="img/blog/image2.jpg" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="img/blog/image3.jpg" alt="Flower">
                        </div>

                        <div class="item">
                            <img src="img/blog/image4.jpg" alt="Flower">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="col-sm-12 room_div">
                    
                </div>
                <div class="col-sm-12">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12 pg_amenities highlight_div">
                <div class="amenities_head head_div">
                    Amenities
                </div>
                <div class="clearfix"></div>
                <div class="amenities_data data_div">
                    <?php foreach($amenities as $key => $value):?>
                        <div class="col-sm-4">
                            <span class="glyphicon glyphicon-user"></span>
                            <span><?= $value['name'];?>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-sm-12 pg_amenities">
                <div class="amenities_head head_div">
                    Amenities
                </div>
                <div class="amenities_data data_div">
                    <?= $pg['amenities'];?>    
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        
        <h4><div class="col-sm-3">
            Accomodation:
        </div></h4>
            
        <div class="col-sm-6">
                <div class="col-sm-2">Room 2</div>
                <div class="col-sm-2">Room 3</div>
                <div class="col-sm-2">Room 1</div>
            
        </div>

        <div class="col-sm-3">
            <h4>Landmark:</h4>
            <br>
            <h4>Paldi</h4>
        </div>

    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="col-sm-12">
        <div class="col-sm-3">
            <h4>Ammenities:</h4>
        </div>
        <div class="col-sm-9">
            <div class="col-sm-3">
            <ul class="circle">
                <li>Takiyo</li><li>Chadar</li><li>Sui javv</li>
            </ul>
            </div>
            <div class="col-sm-3">
            <ul class="circle">
                <li>Takiyo</li><li>Chadar</li><li>Sui javv</li>
            </ul>
            </div>
            <div class="col-sm-3">
            <ul class="circle">
                <li>Takiyo</li><li>Chadar</li><li>Sui javv</li>
            </ul>
            </div>

        </div>


    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="col-sm-12">
        <div class="col-sm-3">
            <h4>Rules and Regulations:</h4>
        </div>
        <div class="col-sm-9">
            <ul class="circle">
                <li>No Weed</li><li>No Mocha</li><li>Fuck all rules if u dare.</li>
            </ul>
        </div>


    </div>
</div>

----
