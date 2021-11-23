<?php 

    include('partials/header.php');
    include('partials/nav.php');
    
    // content here

    if(isset($_GET['page']) && $_GET['page'] == 'home'){
        // include home page
        include('pages/home.php');
    } 
    
    elseif(isset($_GET['page']) && $_GET['page'] == 'courses'){
        // include courses page
        include('pages/courses.php');
    }

    elseif(isset($_GET['page']) && $_GET['page'] == 'community'){
        // include community page
        include('pages/community.php');
    }
    
    else {
        // message for error
        include('pages/404.php');
    }

    include('partials/footer.php');

?>