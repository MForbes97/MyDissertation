<?php
/**
 * A class that contains code to handle any requests for  /t2complete
 */
/**
 * Support // or /home/t2complete
 */
    class t2complete extends \Framework\Siteaction
    {
/**
 * Handle t2complete operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 't2complete.twig';
        }
    }
?>