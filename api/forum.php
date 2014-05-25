<?php

class forum extends api
{
  protected function Reserve()
  {
    return ['design' => 'printTheme'];
  }
	
	protected function GetMessages()
	{
		$msg = ['name' => 'name1', 'text' => 'text1'];
		$arr = [];
		for ($i = 0; $i < 10; $i++)
			$arr[] = $msg;
			
		return ['design' => 'forum', 'data' => ['messages' => $arr]];
	}
	protected function GetTheme()
	{
		$msg = ['theme' => 'theme name', 'time' => 'time', 'num_messages' => 10];
		$arr = [];
		for ($i = 0; $i < 6; $i++)
			$arr[] = $msg;
			
		return ['design' => 'theme1', 'data' => ['theme_name' => $arr]];
	}
	
}

