<?php


// $_GET (request.params)
// $_POST (request.body)
// $_REQUEST (request.body+request.params)

if (isset($_POST['fname'])) {
    $searchGoogle = $_POST['fname']; //Getting the search request string from the form
    $url = 'http://google.com/search?q='.$searchGoogle; // create the url string for google search using the variable "$searchGoogle"
    header('Location: ' . $url); //header function allow me to redirect into google using the search criteria
    die();
    
}
?>