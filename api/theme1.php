<?php

class theme1 extends api
{
  protected function Reserve()
  {
    return $this->GetTheme();
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