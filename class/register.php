<?php
/**
 * A class that contains code to handle any requests for  /register
 */
/**
 * Support // or /home/register
 */
    class register extends \Framework\Siteaction
    {
/**
 * Handle register operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
	public function registration($context)
	{
            $fdt = $context->formdata();
	    $login = $fdt->post('login', '');
	    if ($login !== '')
	    {
            $errmess = array();
			$x = R::findOne('user', 'login=?', array($login));
			if (!is_object($x))
			{
				$pw = $fdt->mustpost('password');
				$rpw = $fdt->mustpost('repeat');
				$email = $fdt->mustpost('email');
				$fn = $fdt->mustpost('fullname');
				$tn = $fdt->mustpost('therapistname');
				$tc = $fdt->mustpost('therapistcode');
				$errmess = array();
				if ($tc != '05264')
				{
					$errmess[] = 'Invalid therapist code';
				}
				if ($pw != $rpw)
				{
					$errmess[] = 'The passwords do not match';
				}
				if (preg_match('/[^a-z0-9]/i', $login))
				{
					$errmess[] = 'Your username can only contain letters and numbers';
				}
				if (!filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					$errmess[] = 'Please provide a valid email address';
				}
				if (empty($errmess) && $tc == '05264')
				{
					$x = R::dispense('therapist');
					$x->login = $login;
					$x->email = $email;
					$x->fn = $fn;
					$x->confirm = 0;
								$x->active = 1;
					$x->joined = $context->utcnow();
					R::store($x);
					$x->setpw($pw);
/* 					$this->sendconfirm($context, $x);
					$context->local()->addval('regok', 'A confirmation link has been sent to your email address.'); */
				}
				if (empty($errmess))
				{
					$x = R::dispense('patient');
					$x->login = $login;
					$x->email = $email;
					$x->tn = $tn;
					$x->confirm = 0;
								$x->active = 1;
					$x->joined = $context->utcnow();
					R::store($x);
					$x->setpw($pw);
/* 					$this->sendconfirm($context, $x);
					$context->local()->addval('regok', 'A confirmation link has been sent to your email address.'); */
				}
			}
			else
			{
		    	$errmess[] = 'That user name is already in use';
			}
        	if (!empty($errmess))
        	{
            	$context->local()->message($errmess);
        	}
	    }
	    return 'register.twig';
	}
	/**
 * Handle /registration
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
	public function handle($context)
	{
	    $action = $context->action();
	    return $this->registration($context);
	}
    }
?>