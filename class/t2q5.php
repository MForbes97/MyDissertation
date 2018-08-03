<?php
/**
 * A class that contains code to handle any requests for  /t2q5
 */
/**
 * Support // or /home/t2q5
 */
    class t2q5 extends \Framework\Siteaction
    {
/**
 * Handle t2q5 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 't2q5.twig';
        }
    }
?>