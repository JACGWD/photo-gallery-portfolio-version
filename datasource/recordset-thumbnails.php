<?php

// This recordset is for the THUMBNAILS GALLERY page

$content = array(  // an array is a set of related information. Ex: multiple pieces of info about one photo
  // $content is the "parent" array, as it holds several other arrays

  array(   // the first array inside "content":: child array #1
    'id'                => "1",
    'metatitle'         => "Text 1",
    'metadescription'   => "Text 2",
    'h1title'           => "Text 3",
    'imagepath'         => "/web-design/photo-gallery/img/thumbs/sample.jpg",
    'caption'           => "Text 4",
    'copyright'         => "&copy; Billy Poppins, 2021",
  ),  // last line ends with a ),

  

  // You can add as many arrays as you want thumbnails on the gallery page    

);  // last line closes the parent $content array
