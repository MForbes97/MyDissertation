<?php
/**
 * A class that contains code to handle any requests for  /t2q1
 */
/**
 * Support // or /home/t2q1
 */
    class t2q1 extends \Framework\Siteaction
    {
/**
 * Handle t2q1 operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
            // if(isset($_POST['submitt2q1'])){
                $test = R::dispense('test');
                $test->name="testname";
                $test->email="test@mail.com";
                R::store($test);
                return 't2q1.twig';
            // }
            // return 't2q1.twig';
        }
    }
?>