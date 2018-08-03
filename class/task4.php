<?php
/**
 * A class that contains code to handle any requests for  /task4
 */
/**
 * Support // or /home/task4
 */
    class task4 extends \Framework\Siteaction
    {
/**
 * Handle task4 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 'task4.twig';
        }
    }
?>