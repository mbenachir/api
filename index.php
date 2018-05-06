<?php
$json=file_get_contents("https://www.youtube.com/get_video_info?video_id="+GET['id']);
parse_str($json);
$arr=explode(',',$url_encoded_fmt_stream_map);
 foreach($arr as $item){
     parse_str($item);
    //  echo $url."<br/>........................<br/>/////".$quality."...........................<br/>";
    if(explode("/",explode(';',$type)[0])[1]=="mp4" && $quality=="medium"){
        echo "<a href='".$url."?title=".$title."'>download</a>";
    }
     
 }
