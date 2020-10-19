<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Script file of Platon plugin
 */
class plgVmpaymentPlatonInstallerScript
{
    /**
     * method to run after an install/update/uninstall method
     *
     * @param $type
     * @param $parent
     *
     * @return void
     */
    public function postflight($type, $parent)
    {
		$db =& JFactory::getDBO();
		$q = "SELECT count(*) FROM `#__extensions` WHERE element = 'platon'";
	    $db->setQuery($q);					  
		$count = $db->loadResult();
		if ($count == 0){		
			$q = "INSERT INTO `#__extensions` (type,
												name,
												element,
												folder,
												access,
												ordering,
												enabled,
												protected,
												client_id,
												checked_out,
												checked_out_time,
												params)
										VALUES ('plugin',
												'Platon',
												'platon',
												'vmpayment',
												1,
												0,
												1,
												0,
												0,
												0,
												'0000-00-00 00:00:00',
												'')";	
			$db->setQuery($q);					  
			$result = $db->query();
			echo "The Platon Plugin was Installed <br />";
		}else{
			echo "The Platon Plugin was Updated $count<br />";	
		}
    }
}