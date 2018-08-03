<?php
/**
 * A class that contains code to handle any requests for  /patients
 */
/**
 * Support // or /home/patients
 */
    class Patients extends \Framework\Siteaction
    {
/**
 * Handle patients operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            if($context->user()->istherapist())
            {
                //Add a function that only allows patients that have entered the logged in therapist as their therapist
                return 'patients.twig';
            }
            else
            {
                return '403.twig';
            }
        }
    }
?>