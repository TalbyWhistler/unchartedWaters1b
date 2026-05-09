<?php 
    $output = 
    '
     <div class="inputZone">
           
                <label for="city">City</label>
                </br>
                <input type="text" name="city" id="city">
                </br>
                <label for="commodity">Commodity</label>
                </br>
                <input type="text" name="commodity" id="commodity">
                </br>
                <label for="buyingPrice">Buying Price:</label>
                </br>
                <input type="text" name="buyingPrice" id="buyingPrice">
                </br>
                <label for="sellingPrice">Selling Price</label>
                </br>
                <input type="text" name="sellingPrice" id="sellingPrice">
                </br>
            <button id="formButton" onclick="handleInput()">Submit</button>
        
    </div>
    ';
    
    echo $output;



?>