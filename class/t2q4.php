<?php
/**
 * A class that contains code to handle any requests for  /t2q4
 */
/**
 * Support // or /home/t2q4
 */
    class t2q4 extends \Framework\Siteaction
    {
/**
 * Handle t2q4 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 't2q4.twig';
        }
    }
?>