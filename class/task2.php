<?php
/**
 * A class that contains code to handle any requests for  /task2
 */
/**
 * Support // or /home/task2
 */
    class task2 extends \Framework\Siteaction
    {
/**
 * Handle task2 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            return 'task2.twig';
        }
    }
?>