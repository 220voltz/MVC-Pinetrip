<?php // print_r($this); ?>
<div class="spacer-banner no-top-border parallax-window" data-image="https://www.sviettravel.com/wp-content/uploads/2015/07/hotel-banner-.jpg"></div>
<div class="container" id="accomodation">
    <div class="row">
        <div class="container">
            <br>
            <h1>Accomodations</h1>
            <h4>Designer rooms. <span class="text-muted">It’ll blow your mind!</span></h4>
            <p>
                Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
            </p>
        </div>
    </div>
    <div class="row">     
        <?php
        // room list
        $temp = ''; 
        $ctr = 0;
        foreach($this->view_data['items'] as $items => $value){    
        $ctr += 1;
        $details = explode(',',$value);
        $temp .=  
            '<div class="col-md-4">
                <h4>'.ucfirst($details[1]).' Room</h4>
                <div class="card mb-4 card_'.$ctr.' animate__animated visible">
                    <span></span>
                    <span></span>
                </div>
            </div>';
        }
        echo $temp;
        ?>
    </div>
    
</div>