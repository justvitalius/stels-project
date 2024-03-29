<?php
/*---------------------------------------------------------------------------
 * @Plugin Name: aceAdminPanel
 * @Plugin Id: aceadminpanel
 * @Plugin URI: 
 * @Description: Advanced Administrator's Panel for LiveStreet/ACE
 * @Version: 1.4.194
 * @Author: Vadim Shemarov (aka aVadim)
 * @Author URI: 
 * @LiveStreet Version: 0.4.2
 * @File Name: ActionTopic.class.php
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
 */

/**
 * Обработка УРЛа вида /topic/ - управление своими топиками
 *
 */
class PluginAceadminpanel_ActionTopic extends PluginAceadminpanel_Inherit_ActionTopic
{
    private $sPlugin = 'aceadminpanel';

    public function Init() {
        $aaa = 4;
        return parent::Init();
    }

    /**
     * Удаление топика
     *
     * @return  void
     */
    protected function EventDelete()
    {
        $this->Security_ValidateSendForm();
        // * Получаем номер топика из УРЛ и проверяем существует ли он
        $sTopicId = $this->GetParam(0);
        if (!($oTopic = $this->Topic_GetTopicById($sTopicId))) {
            return parent::EventNotFound();
        }
        // * проверяем есть ли право на удаление топика
        if (!$this->ACL_IsAllowDeleteTopic($oTopic, $this->oUserCurrent)) {
            return parent::EventNotFound();
        }
        // * Гарантировано удаляем топик и его зависимости
        $this->Hook_Run('topic_delete_before', array('oTopic' => $oTopic));
        $this->PluginAceadminpanel_Admin_DelTopic($oTopic->GetId());
        $this->Hook_Run('topic_delete_after', array('oTopic' => $oTopic));
        // * Перенаправляем на страницу со списком топиков из блога этого топика
        Router::Location($oTopic->getBlog()->getUrlFull());
    }


}

// EOF