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
*/

/**
 * Класс обработки УРЛа вида /comments/
 *
 */
class ActionBlogs extends Action {	
	
	/**
	 * Главное меню
	 *
	 * @var unknown_type
	 */
	protected $sMenuHeadItemSelect='blog';
	
	public function Init() {		
	}
	
	protected function RegisterEvent() {	
		$this->AddEventPreg('/^(page(\d+))?$/i','EventShowBlogs');								
	}
		
	
	/**********************************************************************************
	 ************************ РЕАЛИЗАЦИЯ ЭКШЕНА ***************************************
	 **********************************************************************************
	 */	
	
	
	protected function EventShowBlogs() {		
		/**
		 * Передан ли номер страницы
		 */			
		$iPage=	preg_match("/^\d+$/i",$this->GetEventMatch(2)) ? $this->GetEventMatch(2) : 1;
		/**
		 * Получаем список блогов
		 */
		$aResult=$this->Blog_GetBlogsRating($iPage,Config::Get('module.blog.per_page'));	
		$aBlogs=$aResult['collection'];				
		/**
		 * Формируем постраничность
		 */		
		$aPaging=$this->Viewer_MakePaging($aResult['count'],$iPage,Config::Get('module.blog.per_page'),4,Router::GetPath('blogs'));	
		/**
		 * Загружаем переменные в шаблон
		 */					
		$this->Viewer_Assign('aPaging',$aPaging);					
		$this->Viewer_Assign("aBlogs",$aBlogs);
		$this->Viewer_AddHtmlTitle($this->Lang_Get('blog_menu_all_list'));
		/**
		 * Устанавливаем шаблон вывода
		 */
		$this->SetTemplateAction('index');	
		
		
		// Хак: передаем в шаблон массив с количеством топиков в блогах
		$oDb = $this -> Database_GetConnect();
		$aCountTopicsInBlogs = array();
		$aBlogsCategories = array();
		foreach ($aBlogs as $oBlog) {
			$aFilter=array('topic_publish' => 1,'blog_id' => $oBlog->getId());
			$aCountTopicsInBlogs[$oBlog->getId()] = $this->Topic_GetCountTopicsByFilter($aFilter);			
		}
		$this->Viewer_Assign('aCountTopicsInBlogs',$aCountTopicsInBlogs);

		$this->Viewer_Assign('aBlogsCategories',$aBlogsCategories);
		
	}
	
  public function TopicsCounter($blog_id){
     // Задаем фильтр топиков
                $aFilter=array(
                        'topic_publish' => 1,
                        'blog_id' => $blod_id,
                );

                // получаем количество топиков по заданному фильтру
                $cnt=$this->Topic_GetCountTopicsByFilter($aFilter);
                $this->Viewer_Assign('aTopicsCount',$cnt);
  }
  
	/**
	 * Выполняется при завершении работы экшена
	 *
	 */
	public function EventShutdown() {		
		/**
		 * Загружаем в шаблон необходимые переменные
		 */
		$this->Viewer_Assign('sMenuHeadItemSelect',$this->sMenuHeadItemSelect);	
	}
}
?>