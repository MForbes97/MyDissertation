<?php
/**
 * A class that contains code to handle any requests for  /t2q2
 */
/**
 * Support // or /home/t2q2
 */
    class t2q2 extends \Framework\Siteaction
    {
/**
 * Handle t2q2 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 't2q2.twig';
        }
    }
?>