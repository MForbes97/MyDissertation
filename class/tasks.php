<?php
/**
 * A class that contains code to handle any requests for  /tasks
 */
/**
 * Support // or /home/tasks
 */
    class Tasks extends \Framework\Siteaction
    {
/**
 * Handle tasks operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            if($context->user()->ispatient() | $context->user()->istherapist())
            {
                return 'tasks.twig';
            }
            else
            {
                return '403.twig';
            }
        }
    }
?>