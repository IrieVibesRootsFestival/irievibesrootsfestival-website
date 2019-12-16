<?php
namespace Emthemes\ThemeSettings\App\StaticResource;
class Plugin
{
    public function afterLaunch($subject)
    {
    	$file = fopen(dirname(__FILE__).'/log.txt','a');
		fwrite($file,get_class($subject)."\r\n");
		fclose($file);
		//$subject->launch();
    }
}
