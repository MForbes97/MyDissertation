<?php
/**
 * A wrapper so that users dont need to edit the FWContext class in order to add features.
 *
 * @author Lindsay Marshall <lindsay.marshall@ncl.ac.uk>
 * @copyright 2016 Newcastle University
 *
 */
/**
 * A wrapper for the real Context class that allows people to extend it's functionality
 * in ways that are apporpriate for their particular website.
 */
    class Context extends \Framework\Context
    {
/**
 * Do we have a logged in admin user?
 *
 * @return boolean
 */
public function haspatient()
{
    return $this->hasuser() && $this->user()->ispatient();
}
/**
* Do we have a logged in developer user?
*
* @return boolean
*/
public function hastherapist()
{
    return $this->hasuser() && $this->user()->istherapist();
}
    }
?>
