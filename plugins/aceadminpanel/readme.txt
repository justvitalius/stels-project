/*---------------------------------------------------------------------------
 * @Plugin Name: aceAdminPanel
 * @Plugin Id: aceadminpanel
 * @Plugin URI: 
 * @Description: Advanced Administrator's Panel for LiveStreet/ACE
 * @Version: 1.4.194
 * @Author: Vadim Shemarov (aka aVadim)
 * @Author URI: 
 * @LiveStreet Version: 0.4.2
 * @File Name: readme.txt
 * @License: GNU GPL v2, http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *----------------------------------------------------------------------------
 */

ПЕРЕД УСТАНОВКОЙ
~~~~~~~~~~~~~~~~
  ВНИМАТЕЛЬНО ПРОЧИТАЙТЕ ЭТОТ РАЗДЕЛ ПЕРЕД УСТАНОВКОЙ!
  
  1. Плагин предназначен для использования со стабильной версией движка
  LiveStreet 0.4.2. На более ранних сборках движка, а также на девелоперских 
  версиях, полученных из SVN-репозитария, работа плагина не гарантируется.

  2. На хостинге должна быть включена поддержка SimpleXML для PHP. Если эта
  библиотека не подключена, то при попытке активировать плагин Вы, скорее 
  всего, увидите пустой "белый экран смерти".
  
  3. Если Вы переводили свой сайт с версии LiveStreet v.0.3 на версию 0.4 и 
  если Вы использовали модуль AdminPanel в старой версии, то прежде, чем 
  устанавливать этот плагин, Вам необходимо удалить старый модуль AdminPanel.
  Для этого нужно просто удалить все файлы, входящие в поставку (автоматического
  удаления не предусмотрено). Полный список файлов перечислен в файле
  install.xml, который входил в пакет установки старого модуля.

  ВНИМАНИЕ! Будьте внимательны!!! Удаляйте только те файлы, которые действительно
  были  установлены с этим модулем. Ошибочное удаление файлов, не входящих в
  поставку модуля, может привести к потере работоспособности вашего сайта!

УСТАНОВКА
~~~~~~~~~
  1. Скопировать все файлы из папки /install/plugins/aceadminpanel в папку 
     /plugins/aceadminpanel на Вашем сайте
  2. Войти на сайт под логином администратора
  3. Перейти по адресу http://<ваш_сайт>/admin/plugins
  4. Активировать плагин aceAdminPanel
  5. Радоваться жизни
  
  ВНИМАНИЕ! Админпанель доступна по адресу http://<ваш_сайт>/admin/ и только
  в том случае, если вы вошли на сайт под логином администратора! Только, 
  пожалуйста, не ищите на сайте папку admin - ее нет. Но если вы все очень
  внимательно прочитали и сделали все правильно, то админпанель все равно
  будет работать по адресу http://<ваш_сайт>/admin/

УДАЛЕНИЕ ПЛАГИНА
~~~~~~~~~~~~~~~~
  Удаление плагина происходит так же, как уделение остальных плагинов:
  1. Войти на сайт под логином администратора
  2. Перейти по адресу http://<ваш_сайт>/admin/plugins
  3. Деактивировать плагин aceAdminPanel
  4. Отметить плагин aceAdminPanel и нажать кнопку "Удалить плагины"
  5. Жить дальше, как получится

ВОЗМОЖНЫЕ ПРОБЛЕМЫ
~~~~~~~~~~~~~~~~~~
  1. Ошибка "Fatal error: Call to undefined function mb_substr()"
  Внимательно читаем требования для корректной работы LiveStreet:
  http://livestreet.ru/page/download/
  А именно: "Также для PHP необходимо установить расширение mbstring, для 
  корректной работы с русскими строками в UTF-8".

  О других проблемах пока неизвестно.
	
УДАЛЕНИЕ ПОЛЬЗОВАТЕЛЕЙ
~~~~~~~~~~~~~~~~~~~~~~
  Начиная с версии 1.1 есть возможность удаления пользователей непосредственно из
  базы данныйх. При этом удаляется не только сам пользователь, но и его блоги, топики,
  комментарии.

  ВНИМАНИЕ! При удалении комментариев пользователя из базы возможна потеря "дерева
  комментариев", которое было создано под удаляемым комментарием.
	
УСЛОВИЯ РАСПРОСТРАНЕНИЯ
~~~~~~~~~~~~~~~~~~~~~~~
  Плагин распространяется бесплатно в соотвествии с лицензией GNU GPL, версия 2.
	
  Если у Вас возникнет желание отблагодарить автора материально, Вы можете
  сделать это перечислением любой суммы на кошельки WebMoney Z178319650868 или
  R312496642374, либо на счет Яндекс.Деньги 41001176375531.