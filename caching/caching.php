<?php 

header("Cache-Control: no-store");// to prevent any kind of caching 
header("Cache-Control: max-age=3600");// you can chache this content only for 1 hour, will statr from the request point     
header("Expires:". date('r', time() + 3600));// r will format the date and will keep the cache up to this particular date