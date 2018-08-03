<?php
/**
 * A class that contains code to handle any requests for  /profile
 */
/**
 * Support // or /home/profile
 */
    class Profile extends \Framework\Siteaction
    {
/**
 * Handle profile operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
             if($context -> hastherapist()){
/*                 $fd=$context->formdata();
                if($fd -> haspost('getprogress')){
                    $progress = \R::findAll('user', 'id=?', [$fd -> post('getprogress')]);
                    $progress -> check = 'yes';
                    \R::load($progress);
                    return 'profile.twig';
                }
                else{
                    return 'profile.twig';
                }
            } */            
/*             $looks = R::findAll('test');

            echo '<table>';
            echo '<tr><td>name</td><td>email</td></tr>';
            foreach ($looks as $look){
                echo '<tr>';
                echo '<td>' . $look->name . '</td>';
                echo '<td>' . $look->email . '</td>';
                echo '</tr>';
            }
            echo '</table>'; */
                return 'profile.twig'; 
            }
            else{ 
                return 'profile.twig';
            }
        }
    }
?>