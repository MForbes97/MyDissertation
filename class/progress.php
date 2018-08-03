<?php
/**
 * A class that contains code to handle any requests for  /progress
 */
/**
 * Support // or /home/progress
 */
    class Progress extends \Framework\Siteaction
    {
/**
 * Handle progress operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 'progress.twig';
        }
    }
?>