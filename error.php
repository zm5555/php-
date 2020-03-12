<?php
//ini_set('display_errors',false);

echo E_ALL&~E_ERROR;
trigger_error("error2",E_USER_WARNING);
trigger_error("error3",E_USER_NOTICE);
trigger_error("error1",E_USER_ERROR);