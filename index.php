<?php
$json=file_get_contents("https://www.youtube.com/get_video_info?video_id=Qc3js9c2tMc");
parse_str($json);
//  parse_str($url_encoded_fmt_stream_map,$arr);
 $arr=explode(',',$url_encoded_fmt_stream_map);
 //echo $arr[0];
 foreach($arr as $item){
     parse_str($item);
    //  echo $url."<br/>........................<br/>/////".$quality."...........................<br/>";
    if(explode("/",explode(';',$type)[0])[1]=="mp4" && $quality=="medium"){
        echo "<a href='".$url."?title=".$title."'>download</a>";
    }
     
 }
/*
$arr=explode(',',$url_encoded_fst_stream_map);
foreach($arr as $item){
    parse_str($item);
    print_r($vdata);
}

print_r($json);*/