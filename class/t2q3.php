<?php
/**
 * A class that contains code to handle any requests for  /t2q3
 */
/**
 * Support // or /home/t2q3
 */
    class t2q3 extends \Framework\Siteaction
    {
/**
 * Handle t2q3 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 't2q3.twig';
        }
    }
?>