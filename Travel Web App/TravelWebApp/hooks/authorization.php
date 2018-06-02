<?php
class Authorization
{
	
	public function check($params)
	{
		require('acl.php');
		
		$ci = &get_instance();
		
		if(!empty($ci)){
			
			$class = $ci->router->fetch_class();
			$method = $ci->router->fetch_method();
			
			if(!empty($allowAll[$class][$method])){
				return True;
			}
		
			if(isset($_COOKIE) && isset($_COOKIE['ci_session'])){
				
				$ci_session = $ci->session->userdata;
				
				if(!empty($ci_session['logged_in'])){
					$session = $ci_session['logged_in'];
				}
			}
			
			if(!isset($session) || !isset($session['group'])){
				redirect('user/login');
			}else{
				if(empty($allowOnly[$session['group']][$class][$method]) || $allowOnly[$session['group']][$class][$method] != True){
					//redirect('common/unauthorized');
				}

			}
			
			return True;
			
		}
	}
}
?>