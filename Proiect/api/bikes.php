<?php
function GetBikes() {
    $bikesList = '<ol>
    <li>Bike 1</li>
    <li>Bike 2</li>
    <li>Bike 3</li>
    <li>Bike 4</li>
    <li>Bike 5</li>
    </ol>'; //TODO: this should be computed while iterating through the array
    //$bike = "<p> $bikeName, $bikeImage</p>";
    //TODO: Victor:
    //You will most likely get an array of bikes from the database
    //Iterated through the array, compute a bike object (this will be html) and append it to a list (in case you want to list them)
    //At the end echo the list (this is also an html object)
    $bikes = getBikesFromDb();
    $numberOfBikes = $bikes->size(); //TODO or len idk
    for($i =0; $i<$numberOfBikes; $i++){
        $bikeName = $bikes[$i]->name; //this is most likely bullshit
        $bikePrice = $bikes[$i]->price;
        $bike = "<li> $bikeName, $bikePrice </li>";
        $bikesList->append($bike); //also bullshit
    }
    
    echo $bikesList;
}

GetBikes();
?>