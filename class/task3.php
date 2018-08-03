<?php
/**
 * A class that contains code to handle any requests for  /task3
 */
/**
 * Support // or /home/task3
 */
    class task3 extends \Framework\Siteaction
    {
/**
 * Handle task3 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 'task3.twig';
        }
    }
?>