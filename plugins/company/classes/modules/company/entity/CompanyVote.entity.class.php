<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*
*	Module "Company"
*	Author: Grebenkin Anton 
*	Contact e-mail: 4freework@gmail.com
*
---------------------------------------------------------
*/

class PluginCompany_ModuleCompany_EntityCompanyVote extends Entity 
{    
    public function getCompanyId() {
        return $this->_aData['company_id'];
    }  
    public function getVoterId() {
        return $this->_aData['user_voter_id'];
    }
    public function getDelta() {
        return $this->_aData['vote_delta'];
    }

    
    
	public function setCompanyId($data) {
        $this->_aData['company_id']=$data;
    }
    public function setVoterId($data) {
        $this->_aData['user_voter_id']=$data;
    }
    public function setDelta($data) {
        $this->_aData['vote_delta']=$data;
    }
}
?>