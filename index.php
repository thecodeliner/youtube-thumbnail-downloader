<?php

$sr ='';
    if(isset($_POST['link'])){
        
        $url = $_POST['link'];
        
 function getYouTubeVideoID($url) {
    // Define a regex pattern to match various YouTube URL formats
    $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:shorts\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

    // Check if the URL matches the pattern
    if (preg_match($pattern, $url, $matches)) {
        return $matches[1]; // Return the matched video ID
    }

    return null; // Return null if no ID is found
}

 $videoId = getYouTubeVideoID($url);
         
        // print_r($videoId);
        
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
<div class="container d-flex justify-content-center align-items-center">

<div class="main mt-4"  >
    
        <h2 class="mt-3">Youtube Thumbnail Downloader</h2>
         
        
        
    <form method="POST" enctype="multipart/form-data">
        
        <input class="form-control mt-3" type="text" name="link" placeholder="Enter youtube link">
        
        <input class="btn btn-primary mt-3" type="submit" name="submit" value="Get Thumbnail">
    
        </form>   
    
        <div class="row w-50">
            
        <div class="col-md-8 p-2">
            
        <img src="https://i.ytimg.com/vi/<?php echo $videoId;?>/maxresdefault.jpg" alt="">    
            
        </div>
        
        
        <div class="col-md-8 p-2">
            <img src="https://i.ytimg.com/vi/<?php echo $videoId;?>/hqdefault.jpg" alt="">    
                
        </div>
            
        <div class="col-md-8 p-2">
            <img src="https://i.ytimg.com/vi/<?php echo $videoId;?>/mqdefault.jpg" alt="">    
                
         </div>
            
            
       </div>
         
      </div>
      
          </div>
</body>


<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</html>
