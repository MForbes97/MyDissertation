<?php
/**
 * A class that contains code to handle any requests for  /task5
 */
/**
 * Support // or /home/task5
 */
    class task5 extends \Framework\Siteaction
    {
/**
 * Handle task5 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 'task5.twig';
        }
    }
?>