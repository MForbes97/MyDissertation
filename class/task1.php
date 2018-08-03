<?php
/**
 * A class that contains code to handle any requests for  /task1
 */
/**
 * Support // or /home/task1
 */
    class task1 extends \Framework\Siteaction
    {
/**
 * Handle task1 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 'task1.twig';
        }
    }
?>