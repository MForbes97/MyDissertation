<?php
/**
 * A class that contains code to handle any requests for  /t2q6
 */
/**
 * Support // or /home/t2q6
 */
    class t2q6 extends \Framework\Siteaction
    {
/**
 * Handle t2q6 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 't2q6.twig';
        }
    }
?>