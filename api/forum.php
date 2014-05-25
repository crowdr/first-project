<?php

class forum extends api
{
  protected function Reserve()
  {
    return ['design' => 'theme1'];
  }
	
	protected function GetMessages()
	{
		$msg = ['name' => 'name1', 'text' => 'text1'];
		$arr = [];
		for ($i = 0; $i < 10; $i++)
			$arr[] = $msg;
			
		return ['design' => 'forum', 'data' => ['messages' => $arr]];
	}
	
	
}

