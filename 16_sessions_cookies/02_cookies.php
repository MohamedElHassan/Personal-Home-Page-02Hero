<?php

// How to set cookies
setcookie('key','value',time() + 10);
// How to update cookie
setcookie('key','value [Updated]',time()+ 3600);
// How to delete cookie
setcookie('key', '',time() -1);
