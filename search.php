<?php //a simple search algorithm to search a folder ie topic
if(isset($_POST['search']))
{
	$flag=0;
	$search=$_POST['search'];
	if(!empty('$search'))
	{
		$dir='mat';
		$search=strtoupper($search);
		echo "SEARCH RESULTS:<br>";
		if($handle=opendir($dir.'/'))
		{
			while($file=readdir($handle))
				{
				
					if($file!='.'&&$file!='..')
							{
								$text="'".$file."'";
								$count=strlen($text);
								
								for($i=0;$i<=$count;$i++)
								{
									if((substr($file,0, $i))==$search)
										{	
											
											echo '<a href="'.$dir.'/'.$file.'">'.$file.'</a></li><br>';
											$flag=1;
											
										}
										
								}
							}

					
				}
						
	    }
	if($flag!=1)
	echo "not found";
	
	}
}
?>