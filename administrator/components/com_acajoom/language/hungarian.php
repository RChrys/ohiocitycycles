<?php
if ( !defined('_JEXEC') && defined('_VALID_MOS') ) define( '_JEXEC', true );
defined('_JEXEC') or die('...A k�zvetlen hozz�f�r�s nem enged�lyezett...');

/**
* <p>Hungarian language file</p>
* @author Joobi Ltd <support@acajoom.com>
* @version $Id: hungarian.php 401 2006-12-05 15:07:13Z divivo $
* @link http://www.joobiweb.com
*/

### General ###
 //acajoom Description
define('_ACA_DESC_NEWS', 'Az Acajoom komponens egy h�rlev�lkezel�, automatikus v�laszol� �s ellen�rz� eszk�z a felhaszn�l�kkal val� kapcsolattart�s hat�konys�ga �rdek�ben.  Acajoom, az �n kommunik�ci�s partnere!');
define('_ACA_FEATURES', 'Acajoom, az �n kommunik�ci�s partnere!');

// Type of lists
define('_ACA_NEWSLETTER', 'H�rlev�l');
define('_ACA_AUTORESP', 'Automatikus v�laszol�');
define('_ACA_AUTORSS', 'Automatikus RSS');
define('_ACA_ECARD', 'eCard');
define('_ACA_POSTCARD', 'K�peslap');
define('_ACA_PERF', 'M�k�d�s');
define('_ACA_COUPON', 'Kupon');
define('_ACA_CRON', 'Id�z�t�s feladat');
define('_ACA_MAILING', 'Levelez�s');
define('_ACA_LIST', 'Lista');

 //acajoom Menu
define('_ACA_MENU_LIST', 'Listakezel�s');
define('_ACA_MENU_SUBSCRIBERS', 'Feliratkoz�k');
define('_ACA_MENU_NEWSLETTERS', 'H�rlevelek');
define('_ACA_MENU_AUTOS', 'Automatikus v�laszol�k');
define('_ACA_MENU_COUPONS', 'Kuponok');
define('_ACA_MENU_CRONS', 'Id�z�t�s feladatok');
define('_ACA_MENU_AUTORSS', 'Automatikus RSS');
define('_ACA_MENU_ECARD', 'eK�peslapok');
define('_ACA_MENU_POSTCARDS', 'K�peslapok');
define('_ACA_MENU_PERFS', 'M�k�d�sek');
define('_ACA_MENU_TAB_LIST', 'List�k');
define('_ACA_MENU_MAILING_TITLE', 'Levelez�sek');
define('_ACA_MENU_MAILING' , 'Levelez�s: ');
define('_ACA_MENU_STATS', 'Statisztika');
define('_ACA_MENU_STATS_FOR', 'Statisztika: ');
define('_ACA_MENU_CONF', 'Be�ll�t�s');
define('_ACA_MENU_UPDATE', 'Friss�t�sek');
define('_ACA_MENU_ABOUT', 'N�vjegy');
define('_ACA_MENU_LEARN', 'K�pz�s k�zpont');
define('_ACA_MENU_MEDIA', 'M�dia kezel�');
define('_ACA_MENU_HELP', 'S�g�');
define('_ACA_MENU_CPANEL', 'Vez�rl�pult');
define('_ACA_MENU_IMPORT', 'Import');
define('_ACA_MENU_EXPORT', 'Export');
define('_ACA_MENU_SUB_ALL', 'Mindet felirat');
define('_ACA_MENU_UNSUB_ALL', 'Mindet leirat');
define('_ACA_MENU_VIEW_ARCHIVE', 'Archivum');
define('_ACA_MENU_PREVIEW', 'El�n�zet');
define('_ACA_MENU_SEND', 'K�ld');
define('_ACA_MENU_SEND_TEST', 'Teszt lev�l k�ld�s');
define('_ACA_MENU_SEND_QUEUE', 'Feladatsor');
define('_ACA_MENU_VIEW', 'Megtekint�s');
define('_ACA_MENU_COPY', 'M�sol�s');
define('_ACA_MENU_VIEW_STATS' , 'Megtekint�si statisztika');
define('_ACA_MENU_CRTL_PANEL' , ' Vez�rl�pult');
define('_ACA_MENU_LIST_NEW' , ' �j lista');
define('_ACA_MENU_LIST_EDIT' , ' Lista szerkeszt�s');
define('_ACA_MENU_BACK', 'Vissza');
define('_ACA_MENU_INSTALL', 'Telep�t�s');
define('_ACA_MENU_TAB_SUM', '�sszegz�s');
define('_ACA_STATUS' , '�llapot');

// messages
define('_ACA_ERROR' , ' Hiba t�rt�nt! ');
define('_ACA_SUB_ACCESS' , 'Hozz�f�r�si jogok');
define('_ACA_DESC_CREDITS', 'K�sz�t�k');
define('_ACA_DESC_INFO', 'Inform�ci�');
define('_ACA_DESC_HOME', 'Webhely');
define('_ACA_DESC_MAILING', 'Levelez� lista');
define('_ACA_DESC_SUBSCRIBERS', 'Feliratkoz�k');
define('_ACA_PUBLISHED','Publik�lva');
define('_ACA_UNPUBLISHED','Visszavonva');
define('_ACA_DELETE','T�rl�s');
define('_ACA_FILTER','Sz�r�');
define('_ACA_UPDATE','Friss�t�s');
define('_ACA_SAVE','Ment�s');
define('_ACA_CANCEL','M�gsem');
define('_ACA_NAME','N�v');
define('_ACA_EMAIL','Email');
define('_ACA_SELECT','V�lasszon!');
define('_ACA_ALL','�sszes');
define('_ACA_SEND_A', 'K�ld�s: ');
define('_ACA_SUCCESS_DELETED', ' sikeresen t�r�lve');
define('_ACA_LIST_ADDED', 'A lista sikeresen elk�sz�lt');
define('_ACA_LIST_COPY', 'A lista sikeresen m�solva');
define('_ACA_LIST_UPDATED', 'A lista sikeresen friss�tve');
define('_ACA_MAILING_SAVED', 'A levelez�s sikeresen mentve.');
define('_ACA_UPDATED_SUCCESSFULLY', 'sikeresen friss�tve.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_ACA_SUB_INFO', 'Feliratkoz�i inform�ci�k');
define('_ACA_VERIFY_INFO', 'Ellen�rizze a bek�ld�tt linket, n�h�ny inform�ci� elveszett.');
define('_ACA_INPUT_NAME', 'N�v');
define('_ACA_INPUT_EMAIL', 'Email');
define('_ACA_RECEIVE_HTML', 'HTML form�tum?');
define('_ACA_TIME_ZONE', 'Id�z�na');
define('_ACA_BLACK_LIST', 'Fekete lista');
define('_ACA_REGISTRATION_DATE', 'Felhaszn�l�i regisztr�ci�s d�tum');
define('_ACA_USER_ID', 'Felhaszn�l� az');
define('_ACA_DESCRIPTION', 'Le�r�s');
define('_ACA_ACCOUNT_CONFIRMED', 'A regisztr�ci�ja akt�v�lva.');
define('_ACA_SUB_SUBSCRIBER', 'Feliratkoz�');
define('_ACA_SUB_PUBLISHER', 'Publik�l�');
define('_ACA_SUB_ADMIN', 'Adminisztr�tor');
define('_ACA_REGISTERED', 'Regisztr�lt');
define('_ACA_SUBSCRIPTIONS', 'Feliratkoz�sok');
define('_ACA_SEND_UNSUBCRIBE', 'Leiratkoz�si �zenet k�ld�se');
define('_ACA_SEND_UNSUBCRIBE_TIPS', 'Kattintson az Igen-re a leiratkoz�st meger�s�t� lev�l elk�ld�s�hez!');
define('_ACA_SUBSCRIBE_SUBJECT_MESS', 'K�rj�k, er�s�tse meg a feliratkoz�s�t!');
define('_ACA_UNSUBSCRIBE_SUBJECT_MESS', 'Leiratkoz�s meger�s�t�se');
define('_ACA_DEFAULT_SUBSCRIBE_MESS', 'Kedves [NAME]!<br /><br />M�g egy l�p�st kell megtennie a feliratkoz�s befejez�s�ig. Kattintson az al�bbi linkre a feliratkoz�s meger�s�t�s�hez!<br /><br />[CONFIRM]<br /><br />B�rmilyen k�rd�ssel forduljon az adminisztr�torhoz!<br /><br />Varanka Zolt�n<br />(webmester - adminisztr�tor)');
define('_ACA_DEFAULT_UNSUBSCRIBE_MESS', 'Kedves [NAME]!<br /><br />Ez egy meger�s�t� lev�l a h�rlev�l lemond�s�hoz. Sajn�ljuk a d�nt�s�t. Term�szetesen b�rmikor �jra feliratkozhat a list�ra. B�rmilyen k�rd�ssel forduljon az adminisztr�torhoz!<br /><br />Varanka Zolt�n<br />(webmester - adminisztr�tor)');

// Acajoom subscribers
define('_ACA_SIGNUP_DATE', 'Bejelentkez�si d�tum');
define('_ACA_CONFIRMED', 'Meger�s�tve');
define('_ACA_SUBSCRIB', 'Feliratkoz�s');
define('_ACA_HTML', 'HTML levelez�sek');
define('_ACA_RESULTS', 'Eredm�nyek');
define('_ACA_SEL_LIST', 'V�lasszon egy list�t!');
define('_ACA_SEL_LIST_TYPE', '- V�lasszon egy listat�pust! -');
define('_ACA_SUSCRIB_LIST', 'Feliratkoz�k teljes list�ja');
define('_ACA_SUSCRIB_LIST_UNIQUE', 'Feliratkoz�k : ');
define('_ACA_NO_SUSCRIBERS', 'Ebben a list�ban nincsenek feliratkoz�k.');
define('_ACA_COMFIRM_SUBSCRIPTION', 'K�ldt�nk �nnek egy meger�s�t� levelet. N�zze �t a postal�d�j�t �s kattintson a lev�lben lev� linkre.<br />A feliratkoz�s�t meg kell er�s�tenie a lev�l seg�ts�g�vel.');
define('_ACA_SUCCESS_ADD_LIST', '�n sikeresen beker�lt a list�ba.');


 // Subcription info
define('_ACA_CONFIRM_LINK', 'Kattintson ide a feliratkoz�s meger�s�t�s�hez!');
define('_ACA_UNSUBSCRIBE_LINK', 'Kattintson ide a leiratkoz�shoz!');
define('_ACA_UNSUBSCRIBE_MESS', 'Az �n email c�m�t elt�vol�tottuk a list�b�l!');

define('_ACA_QUEUE_SENT_SUCCESS' , 'Minden lev�l sikeresen elk�ld�sre ker�lt.');
define('_ACA_MALING_VIEW', 'Levelez�sek megtekint�se');
define('_ACA_UNSUBSCRIBE_MESSAGE', 'Biztosan szeretne leiratkozni a list�r�l?');
define('_ACA_MOD_SUBSCRIBE', 'Feliratkoz�s');
define('_ACA_SUBSCRIBE', 'Feliratkoz�s');
define('_ACA_UNSUBSCRIBE', 'Leiratkoz�s');
define('_ACA_VIEW_ARCHIVE', 'Arch�vum megtekint�se');
define('_ACA_SUBSCRIPTION_OR', ' vagy kattintson ide az �n inform�ci�inak a friss�t�s�hez!');
define('_ACA_EMAIL_ALREADY_REGISTERED', 'Ez az email c�m m�r a list�ban van.');
define('_ACA_SUBSCRIBER_DELETED', 'A feliratkoz� sikeresen t�r�lve.');


### UserPanel ###
 //User Menu
define('_UCP_USER_PANEL', 'Felhaszn�l�i vez�rl�pult');
define('_UCP_USER_MENU', 'Felhaszn�l�i men�');
define('_UCP_USER_CONTACT', 'Feliratkoz�saim');
 //Acajoom Cron Menu
define('_UCP_CRON_MENU', 'Id�z�t� feladat kezel�');
define('_UCP_CRON_NEW_MENU', '�j id�z�t�s');
define('_UCP_CRON_LIST_MENU', 'Id�z�t�m list�ja');
 //Acajoom Coupon Menu
define('_UCP_COUPON_MENU', 'Kupon kezel�');
define('_UCP_COUPON_LIST_MENU', 'Kupon lista');
define('_UCP_COUPON_ADD_MENU', '�j kupon hozz�ad�s');

### lists ###
// Tabs
define('_ACA_LIST_T_GENERAL', 'Le�r�s');
define('_ACA_LIST_T_LAYOUT', 'Kialak�t�s');
define('_ACA_LIST_T_SUBSCRIPTION', 'Feliratkoz�s');
define('_ACA_LIST_T_SENDER', 'Inf� a k�ld�r�l');

define('_ACA_LIST_TYPE', 'Lista t�pus');
define('_ACA_LIST_NAME', 'Lista n�v');
define('_ACA_LIST_ISSUE', 'Kiad�s sz�ma');
define('_ACA_LIST_DATE', 'K�ld�s d�tuma');
define('_ACA_LIST_SUB', 'T�rgy');
define('_ACA_ATTACHED_FILES', 'Csatolt f�jlok');
define('_ACA_SELECT_LIST', 'V�lassza ki a szerkesztend� list�t!');

// Auto Responder box
define('_ACA_AUTORESP_ON', 'Lista t�pus');
define('_ACA_AUTO_RESP_OPTION', 'Automatikus v�laszol� opci�k');
define('_ACA_AUTO_RESP_FREQ', 'A feliratkoz�k kiv�laszthatj�k a gyakoris�got');
define('_ACA_AUTO_DELAY', 'K�sleltet�s (napokban)');
define('_ACA_AUTO_DAY_MIN', 'Minim�lis gyakoris�g');
define('_ACA_AUTO_DAY_MAX', 'Maxim�lis gyakoris�g');
define('_ACA_FOLLOW_UP', 'Az automatikus v�laszol� be�ll�t�sa');
define('_ACA_AUTO_RESP_TIME', 'A feliratkoz�k id�t v�laszthatnak');
define('_ACA_LIST_SENDER', 'Lista k�ld�');

define('_ACA_LIST_DESC', 'Lista le�r�s');
define('_ACA_LAYOUT', 'Kialak�t�s');
define('_ACA_SENDER_NAME', 'K�ld� neve');
define('_ACA_SENDER_EMAIL', 'K�ld� email c�me');
define('_ACA_SENDER_BOUNCE', 'K�ld� v�lasz c�me');
define('_ACA_LIST_DELAY', 'K�sleltet�s');
define('_ACA_HTML_MAILING', 'HTML lev�l?');
define('_ACA_HTML_MAILING_DESC', '(ha megv�ltoztatja ezt, mentenie kell majd visszat�rni ehhez a k�perny�h�z a v�ltoz�sok megtekint�s�re.)');
define('_ACA_HIDE_FROM_FRONTEND', 'Elrejt�s a webes fel�leten?');
define('_ACA_SELECT_IMPORT_FILE', 'V�lassza ki az import�land� f�jlt!');;
define('_ACA_IMPORT_FINISHED', 'Az import�l�s befejez�d�tt');
define('_ACA_DELETION_OFFILE', 'F�jl t�rl�se');
define('_ACA_MANUALLY_DELETE', 'meghiusult, k�zzel kell t�r�lnie a f�jlt');
define('_ACA_CANNOT_WRITE_DIR', 'A k�nyvt�r nem �rhat�');
define('_ACA_NOT_PUBLISHED', 'A lev�l nem k�ldhet� el, a lista nincs publik�lva.');

//  List info box
define('_ACA_INFO_LIST_PUB', 'Kattintson ide a lista publik�l�s�hoz!');
define('_ACA_INFO_LIST_NAME', 'Adja meg a lista nev�t itt! Ezzel a n�vvel azonos�thatja a list�t!');
define('_ACA_INFO_LIST_DESC', 'Adja meg a lista r�vid le�r�s�t! Ezt a le�r�st l�tj�k a felhaszn�l�k.');
define('_ACA_INFO_LIST_SENDER_NAME', 'Adja meg a lev�l k�ld�j�nek a nev�t! Ezt a nevetl�tj�k a feliratkoz�k, amikor levelet kapnak a list�r�l.');
define('_ACA_INFO_LIST_SENDER_EMAIL', 'Adja meg azt az email c�met, ahonnan az �zenetek k�ld�sre ker�lnek.');
define('_ACA_INFO_LIST_SENDER_BOUNCED', 'Adja meg azt az email c�met,, ahova a feliratkoz�k v�laszolhatnak. Aj�nlatos, hogy ez megegyezzen a k�ld� email c�mmel, mivel a spam sz�r�k magasabb kock�zatk�nt kezelik, ha ezek k�l�nb�z�ek.');
define('_ACA_INFO_LIST_AUTORESP', 'V�lassza ki a levelez�s t�pus�t ehhez a list�hoz!<br />H�rlev�l: norm�l h�rlev�l<br />Automatikus v�laszol�: ez egy lista, amely megadott id�k�z�nk�nt k�ld levelet.');
define('_ACA_INFO_LIST_FREQUENCY', 'A felhasznl�k megv�laszthatj�k, hogy milyen gyakran kapjanak levelet. Ez nagy rugalmass�got biztos�t.');
define('_ACA_INFO_LIST_TIME', 'A felhaszn�l�k megv�laszthatj�k, hogy a h�t melyik napj�n kapjanak levelet.');
define('_ACA_INFO_LIST_MIN_DAY', 'Milyen legyen az a minim�lis gyakoris�g, amelyet a felhaszn�l�k megv�laszthatnak, ha be akarj�k �ll�tani a levelek fogad�s�nak gyakoriss�g�t?');
define('_ACA_INFO_LIST_DELAY', 'Adja meg a k�sleltet�st az el�z� �s ezen automatikus v�laszol� k�z�tt!');
define('_ACA_INFO_LIST_DATE', 'Adja meg, mikor legyen publik�lva a herlev�l, ha k�sleltetettnek lett be�ll�tva!<br /> Form�tum: ����-HH-NN ��:PP:MM');
define('_ACA_INFO_LIST_MAX_DAY', 'Milyen legyen az a maxim�lis gyakoris�g, amelyet a felhaszn�l�k megv�laszthatnak, ha be akarj�k �ll�tani a levelek fogad�s�nak gyakoriss�g�t?');
define('_ACA_INFO_LIST_LAYOUT', 'Itt adhatja meg a lev�l kialak�t�s�t. B�rmilyen kialak�t�st megadhat.');
define('_ACA_INFO_LIST_SUB_MESS', 'Ez a lev�l ker�l elk�ld�sre a felhaszn�l�nak az els� feliratkoz�skor. B�rmilyen sz�veget meg lehet itt adni.');
define('_ACA_INFO_LIST_UNSUB_MESS', 'Ez a lev�l ker�l elk�ld�sre a felhaszn�l�nak az leiratkozik. B�rmilyen sz�veget meg lehet itt adni.');
define('_ACA_INFO_LIST_HTML', 'Pip�lja ki a kijel�l�dobozt, ha HTMLform�ban akarja a levelet elk�ldeni. A feliratkoz�k megadhatj�k, hogy HTML vagy sz�veges form�ban k�v�nj�k-e fogadnia leveleket, amikor egy HTML list�ra iratkoznak fel.');
define('_ACA_INFO_LIST_HIDDEN', 'Kattintson az Igen-re a lista elrejt�s�hez a webes fel�leten, a felhaszn�l�k ugyan nem iratkozhatnak fel,de az�rt meg lehet levelet k�ldeni.');
define('_ACA_INFO_LIST_ACA_AUTO_SUB', 'Szeretn�, hogy a felhaszn�l�k automatikusan feliratkozzanak erre a list�ra?<br /><B>�j felhaszn�l�k:</B>minden �j felhaszn�l�, aki regisztr�l, feliratkoz� is lesz egyben.<br /><B>�sszes felhaszn�l�:</B> minden regisztr�lt felhaszn�l� feliratkoz� is lesz egyben.<br />(t�mogatja a Community Buildert)');
define('_ACA_INFO_LIST_ACC_LEVEL', 'V�lassza ki a webes fel�let hozz�f�r�si szintj�t! Ez megjelen�ti vagy elrejti a levelez�st azon csoportok eset�n, amelynek nincs hozz�f�r�si joga, teh�t nem tudnak feliratkozni.');
define('_ACA_INFO_LIST_ACC_USER_ID', 'V�lassza ki a hozz�f�r�si szintj�t annak a csoportnak, amelynek enged�lyezni szeretm� a szerkeszt�st. Ez �s az e feletti csoport szerkesztheti a levelez�st �s levelet k�ldhet ki mind a webes mind az adminisztr�ci�s fel�letr�l.');
define('_ACA_INFO_LIST_FOLLOW_UP', 'Ha szeretn� az automatikus v�laszol�t egy m�sokba mozgatni, amint el�ri az utols� �zenetet, megadhatja itt a nyomk�vet� automatikus v�laszol�t.');
define('_ACA_INFO_LIST_ACA_OWNER', 'Ez a list�t l�rtehoz� szem�ly azonos�t�ja.');
define('_ACA_INFO_LIST_WARNING', '   Ez az utols� opci� csak a lista l�trehoz�sakor el�rhet�.');
define('_ACA_INFO_LIST_SUBJET', ' A levelez�s t�rgya. Ez a sz�veg ker�l a lev�l t�rgy�ba.');
define('_ACA_INFO_MAILING_CONTENT', 'Ez az elk�ldend� lev�l t�rzse.');
define('_ACA_INFO_MAILING_NOHTML', 'Adja meg a lev�l t�rzs�t, amelyet azoknak a feliratkoz�knak kell elk�ldeni, akik csak sz�veges levelet fogadnak. <BR/> Megjegyz�s: ha �resen hagyja, a html form�tum� sz�vegr�sz ker�l ide sz�veges form�tumban.');
define('_ACA_INFO_MAILING_VISIBLE', 'Kattintson az Igen-re a levelez�sek megjelen�t�s�hez a webes fel�leten.');
define('_ACA_INSERT_CONTENT', 'L�tez� tartalom besz�r�sa');

// Coupons
define('_ACA_SEND_COUPON_SUCCESS', 'A kupon sikeresen elk�ldve!');
define('_ACA_CHOOSE_COUPON', 'V�lasszon kupont!');
define('_ACA_TO_USER', ' ennek a felhaszn�l�nak');

### Cron options
//drop down frequency(CRON)
define('_ACA_FREQ_CH1', 'Minden �r�ban');
define('_ACA_FREQ_CH2', 'Minden 6 �r�ban');
define('_ACA_FREQ_CH3', 'Minden 12 �r�ban');
define('_ACA_FREQ_CH4', 'Naponta');
define('_ACA_FREQ_CH5', 'Hetente');
define('_ACA_FREQ_CH6', 'Havonta');
define('_ACA_FREQ_NONE', 'Nem');
define('_ACA_FREQ_NEW', '�j felhaszn�l�l');
define('_ACA_FREQ_ALL', '�sszes felhaszn�l�');

//Label CRON form
define('_ACA_LABEL_FREQ', 'Acajoom id�z�t�?');
define('_ACA_LABEL_FREQ_TIPS', 'Kattintson az Igen-re, ha haszn�lni szeretn� az Acajoom id�z�t�tCron, A Nem be�ll�t�sa m�s id�z�t� haszn�lat�t teszi lehet�v�.<br />Ha az Igem-re kattint, nem kell megadnia az id�z�t� c�m�t, ez automatikusan hozz�ad�dik.');
define('_ACA_SITE_URL' , 'Az �n webhely�nek URL-je');
define('_ACA_CRON_FREQUENCY' , 'Id�z�t� gyakoris�g');
define('_ACA_STARTDATE_FREQ' , 'Kezd� d�tum');
define('_ACA_LABELDATE_FREQ' , 'Adja meg a d�tumot!');
define('_ACA_LABELTIME_FREQ' , 'Adja meg az id�t!');
define('_ACA_CRON_URL', 'Id�z�t� URL');
define('_ACA_CRON_FREQ', 'Gyakoris�g');
define('_ACA_TITLE_CRONLIST', 'Id�z�t� lista');
define('_NEW_LIST', '�j lista k�sz�t�se');

//title CRON form
define('_ACA_TITLE_FREQ', 'Id�z�t� szerkeszt�se');
define('_ACA_CRON_SITE_URL', '�rv�nyes webhely URL-t adjon meg, kezdje http://-vel!');

### Mailings ###
define('_ACA_MAILING_ALL', '�sszes levelez�s');
define('_ACA_EDIT_A', 'Szerkeszt�s: ');
define('_ACA_SELCT_MAILING', 'V�lasszon egy list�t a leg�rd�l� men�ben �j levelez�s hozz�ad�s�hoz!');
define('_ACA_VISIBLE_FRONT', 'L�that� a webes fel�leten');

// mailer
define('_ACA_SUBJECT', 'T�rgy');
define('_ACA_CONTENT', 'Tartalom');
define('_ACA_NAMEREP', '[NAME] = A feliratkoz� nev�re cser�l�dik ki ez a k�d, ezzel szem�lyre szabhatja a levelet.<br />');
define('_ACA_FIRST_NAME_REP', '[FIRSTNAME] = A feliratkoz� vezet�knev�re (els� n�v) cser�l�dik ki ez a k�d.<br />');
define('_ACA_NONHTML', 'Nem-html verzi�');
define('_ACA_ATTACHMENTS', 'Mell�kletek');
define('_ACA_SELECT_MULTIPLE', 'Tartsa lenyomva a CTRL (vagy a Command) gombot t�bb mell�klet kiv�laszt�s�hoz.<br />A mell�kletek list�j�ban megjelen� f�jlokat egy k�l�n k�nyvt�rban helyezheti el, ez a k�nyvt�r be�ll�that� a be�ll�t�sok panelj�n.');
define('_ACA_CONTENT_ITEM', 'Tartalmi elem');
define('_ACA_SENDING_EMAIL', 'Lev�l k�ld�se');
define('_ACA_MESSAGE_NOT', 'A lev�l nem k�ldhet� el');
define('_ACA_MAILER_ERROR', 'Lev�lk�ld�si hiba');
define('_ACA_MESSAGE_SENT_SUCCESSFULLY', 'A lev�l sikeresen elk�ldve');
define('_ACA_SENDING_TOOK', 'A lev�l elk�ld�se');
define('_ACA_SECONDS', 'm�sodpercet vett ig�nybe');
define('_ACA_NO_ADDRESS_ENTERED', 'Nincs email c�m vagy feliratkoz� megadva!');
define('_ACA_CHANGE_SUBSCRIPTIONS', 'V�ltoztat�s');
define('_ACA_CHANGE_EMAIL_SUBSCRIPTION', 'V�ltoztat a feliratkoz�son?');
define('_ACA_WHICH_EMAIL_TEST', 'Adja meg a tesztel�sre haszn�lt email c�met vagy v�lassza az el�n�zetet!');
define('_ACA_SEND_IN_HTML', 'K�ld�s HTML m�dban (HTML levelekn�l)?');
define('_ACA_VISIBLE', 'L�that�');
define('_ACA_INTRO_ONLY', 'Csak bevezet�');

// stats
define('_ACA_GLOBALSTATS', 'Globalis statisztika');
define('_ACA_DETAILED_STATS', 'R�szletes statisztika');
define('_ACA_MAILING_LIST_DETAILS', 'Lista r�szletek');
define('_ACA_SEND_IN_HTML_FORMAT', 'K�ld�s HTML form�tumban');
define('_ACA_VIEWS_FROM_HTML', 'Megtekintve (csak html levelekn�l)');
define('_ACA_SEND_IN_TEXT_FORMAT', 'K�ld�s sz�veges form�tumban');
define('_ACA_HTML_READ', 'HTML olvasott');
define('_ACA_HTML_UNREAD', 'HTML nem olvasott');
define('_ACA_TEXT_ONLY_SENT', 'Csak sz�veg');

// Configuration panel
// main tabs
define('_ACA_MAIL_CONFIG', 'Lev�l');
define('_ACA_LOGGING_CONFIG', 'Napl�-statisztika');
define('_ACA_SUBSCRIBER_CONFIG', 'Feliratkoz�k');
define('_ACA_MISC_CONFIG', 'Egy�b');
define('_ACA_MAIL_SETTINGS', 'Lev�l be�ll�t�sok');
define('_ACA_MAILINGS_SETTINGS', 'Levelez�si be�ll�t�sok');
define('_ACA_SUBCRIBERS_SETTINGS', 'Feliratkoz� be�ll�t�sok');
define('_ACA_CRON_SETTINGS', 'Id�z�t� be�ll�t�sok');
define('_ACA_SENDING_SETTINGS', 'K�ld�si be�ll�t�sok');
define('_ACA_STATS_SETTINGS', 'Statisztikai be�ll�t�sok');
define('_ACA_LOGS_SETTINGS', 'Napl� be�ll�t�sok');
define('_ACA_MISC_SETTINGS', 'Egy�b be�ll�t�sok');
// mail settings
define('_ACA_SEND_MAIL_FROM', 'K�ld� email');
define('_ACA_SEND_MAIL_NAME', 'K�ld� n�v');
define('_ACA_MAILSENDMETHOD', 'Lev�lk�ld� m�d');
define('_ACA_SENDMAILPATH', 'Sendmail �tvonal');
define('_ACA_SMTPHOST', 'SMTP kiszolg�l�');
define('_ACA_SMTPAUTHREQUIRED', 'SMTP hiteles�t�s sz�ks�ges');
define('_ACA_SMTPAUTHREQUIRED_TIPS', 'V�lassza az Igen-t, ha az MTP szerver hiteles�t�st ig�nyel');
define('_ACA_SMTPUSERNAME', 'SMTP felhaszn�l�n�v');
define('_ACA_SMTPUSERNAME_TIPS', 'Adja meg az SMTP felhaszn�l�nevet, ha az SMTP szerver hiteles�t�st ig�nyel!');
define('_ACA_SMTPPASSWORD', 'SMTP jelsz�');
define('_ACA_SMTPPASSWORD_TIPS', 'Adja meg az SMTP jelsz�t, ha az SMTP szerver hiteles�t�st ig�nyel!');
define('_ACA_USE_EMBEDDED', 'Be�gyazott k�pek');
define('_ACA_USE_EMBEDDED_TIPS', 'V�lassza az Igen-t, ha a mell�kelt k�peket be kell �gyazni a lev�lbe html form�tum eset�n vagy a Nem-et, ha a k�pek linkjeit szeretn� elk�ldeni a lev�lben.');
define('_ACA_UPLOAD_PATH', 'Felt�lt�si/csatol�si �tvonal');
define('_ACA_UPLOAD_PATH_TIPS', 'Megadhatja a felt�lt�si k�nyvt�rat.<br />Ellen�rizze, hogy a k�nyvt�r l�tezik-e, ha sz�ks�ges hozza l�tre!');

// subscribers settings
define('_ACA_ALLOW_UNREG', 'Nem regisztr�ltak is');
define('_ACA_ALLOW_UNREG_TIPS', 'V�lassza az Igen-t, ha a nem regisztr�lt felhaszn�l�k is feliratkozhatnak a list�kra.');
define('_ACA_REQ_CONFIRM', 'Meger�s�t�s sz�ks�ges');
define('_ACA_REQ_CONFIRM_TIPS', 'V�lassza az Igen-t, ha a nem regisztr�lt felhaszn�l�knak meg kell er�s�teni�k az email c�m�ket.');
define('_ACA_SUB_SETTINGS', 'Feliratkoz�si be�ll�t�sok');
define('_ACA_SUBMESSAGE', 'Feliratkoz� lev�l');
define('_ACA_SUBSCRIBE_LIST', 'Feliratkoz�s egy list�ra');

define('_ACA_USABLE_TAGS', 'Haszn�lhat� c�mk�k');
define('_ACA_NAME_AND_CONFIRM', '<b>[CONFIRM]</b> = Kattinthat� linket k�sz�t, amellyel a feliratkoz� meger�s�theti a feliratkoz�s�t. Ez <strong>sz�ks�ges</strong> az Acajoom megfelel� m�k�d�s�hez.<br /><br />[NAME] = Lecser�l�dik a feliratkoz� nev�re, szem�lyreszabva a k�ld�tt levelet.<br /><br />[FIRSTNAME] = Lecser�l�dik a feliratkoz� els� nev�re (vezet�kn�v).<br />');
define('_ACA_CONFIRMFROMNAME', 'Meger�s�t� felad� n�v');
define('_ACA_CONFIRMFROMNAME_TIPS', 'Adja meg a meger�s�t� list�ban megjelen� nevet!');
define('_ACA_CONFIRMFROMEMAIL', 'Meger�s�t� felad� email c�m');
define('_ACA_CONFIRMFROMEMAIL_TIPS', 'Adja meg a meger�s�t� list�ban megjelen� email c�met!');
define('_ACA_CONFIRMBOUNCE', 'V�lasz c�m');
define('_ACA_CONFIRMBOUNCE_TIPS', 'Adja meg a meger�s�t� list�ban megjelen� v�lasz email c�met!');
define('_ACA_HTML_CONFIRM', 'HTML meger�s�t�s');
define('_ACA_HTML_CONFIRM_TIPS', 'V�lassza az Igen-t, ha a meger�s�t� levelet html form�ban szeretn� elk�ldeni, ha a feliratjoz� lehet�v� teszi a html lev�l fogad�s�t..');
define('_ACA_TIME_ZONE_ASK', 'R�k�rdez�s az id�z�n�ra');
define('_ACA_TIME_ZONE_TIPS', 'V�lassza az Igen-t, ha r� szeretne k�rdezni a felhaszn�l� id�z�n�j�ra. A lev�l a felhaszn�l�nak megfelel� id�z�na szerinti id�ben lesz elk�ldve, ahol ez alkalmazhat�.');

 // Cron Set up
define('_ACA_AUTO_CONFIG', 'Id�z�t�');
define('_ACA_TIME_OFFSET_URL', 'kattintson ide az eltol�s be�ll�t�s�hoz az General Settings oldal Locale f�l�n');
define('_ACA_TIME_OFFSET_TIPS', 'Be�ll�tja a szerver id�eltol�s�t, hogy a felvett d�tum �s id� adatok pontosak legyenek');
define('_ACA_TIME_OFFSET', 'Id� eltol�s');
define('_ACA_CRON_DESC','<br />Az id�z�t� funkci�val automatikus feladatot lehet be�ll�tani a Joomla webhelyen!<br />Be�ll�t�s�hoz az al�bbi utas�t�st kell adni az id�z�t� vez�rl�pulthoz:<br /><b>' . $GLOBALS['mosConfig_live_site'] . '/index.php?option=com_acajoom&act=cron</b> <br /><br />Ha seg�ts�gre van sz�ks�ge, keresse fel a <a href="http://www.acajoom.com" target="_blank">http://www.acajoom.com</a> oldal f�rum�t!');
// sending settings
define('_ACA_PAUSEX', 'V�rakozzon x m�sodpercet minden be�ll�tott mennyis�g� lev�ln�l');
define('_ACA_PAUSEX_TIPS', 'Adja meg azt at id�t m�sodpercben, ameddig az Acajoom v�rakozik, miel�tt a k�vetkez� adag levelet elk�ldi.');
define('_ACA_EMAIL_BET_PAUSE', 'Lev�ladagok sz�ma');
define('_ACA_EMAIL_BET_PAUSE_TIPS', 'Az egyszerre elk�ldhet� levelek sz�ma.');
define('_ACA_WAIT_USER_PAUSE', 'V�rakoz�s felhaszn�l�i bevitelte');
define('_ACA_WAIT_USER_PAUSE_TIPS', 'K�t adag lev�l elk�ld�se k�zben v�rakozzon-e a program felhaszn�l�i bevitelre?');
define('_ACA_SCRIPT_TIMEOUT', 'Id� kifut�s');
define('_ACA_SCRIPT_TIMEOUT_TIPS', 'Id� m�sodpercben, ameddig a program futhat.');
// Stats settings
define('_ACA_ENABLE_READ_STATS', 'Statisztika olvas�s�nak enged�lyez�se');
define('_ACA_ENABLE_READ_STATS_TIPS', 'V�lasszon Igen-t, ha szeretn� napl�zni a megtekint�sek sz�m�t. Ez csak html levelekn�l haszn�lhat�');
define('_ACA_LOG_VIEWSPERSUB', 'Megtekint�sek napl�z�sa feliratkoz�kk�nt');
define('_ACA_LOG_VIEWSPERSUB_TIPS', 'V�lasszon Igen-t, ha szeretn� napl�zni a megtekint�sek sz�m�t felhaszn�l�kk�nt. Ez csak html levelekn�l haszn�lhat�');
// Logs settings
define('_ACA_DETAILED', 'R�szletes napl�');
define('_ACA_SIMPLE', 'Egyszer� napl�');
define('_ACA_DIAPLAY_LOG', 'Napl� megjelen�t�se');
define('_ACA_DISPLAY_LOG_TIPS', 'V�lassza az Igen-t, ha szeretn� megjelen�teni a napl�z�st a levelek elk�ld�se sor�n.');
define('_ACA_SEND_PERF_DATA', 'K�ld�si m�velet');
define('_ACA_SEND_PERF_DATA_TIPS', 'V�lassza az Igen-t, ha szeretne jelent�st kapni a be�ll�t�sokr�l, a feliratkoz�k sz�m�r�l �s az elk�ld�s id�tartam�r�l. Ez inform�i�t ad az Acajoom m�k�d�s�r�l.');
define('_ACA_SEND_AUTO_LOG', 'Napl� elk�ld�se az automatikus v�laszol�nak.');
define('_ACA_SEND_AUTO_LOG_TIPS', 'V�lassza az Igen-t, ha a napl�t szeretn� elk�ldeni minden alkalommal, amikor a rendszer levelet k�ld. Figyelem: ez nagy m�ret� levelet is jelenthet.');
define('_ACA_SEND_LOG', 'Napl� k�ld�se');
define('_ACA_SEND_LOG_TIPS', 'K�ldj�n-e napl�t a rendszer a lev�l k�ld�j�nek a c�m�re.');
define('_ACA_SEND_LOGDETAIL', 'R�szletes napl� k�ld�se');
define('_ACA_SEND_LOGDETAIL_TIPS', 'Inform�ci� arr�l, hogy sikeres volt-e a lev�l elk�ld�se az egyes feliratkoz�knak. Alapban csak �ttekint�st k�ld.');
define('_ACA_SEND_LOGCLOSED', 'Napl� k�ld�se, ha megszakad a kapcsolat');
define('_ACA_SEND_LOGCLOSED_TIPS', 'Ezzel az opci�val a k�ld� minden esetben jelent�st kap az elk�ld�sekr�l.');
define('_ACA_SAVE_LOG', 'Napl� ment�se');
define('_ACA_SAVE_LOG_TIPS', 'A levelez�s napl�bejegyz�se beker�lj�n-e a napl�f�jlba?');
define('_ACA_SAVE_LOGDETAIL', 'R�szletes napl� ment�se');
define('_ACA_SAVE_LOGDETAIL_TIPS', 'A r�szletes bejegyz�s tartalmazza minden feliratkoz�hoz elk�ld�tt lev�l sikeress�g�t vagy meghi�sul�s�t. At egyszer� csak �ttekint�st ad.');
define('_ACA_SAVE_LOGFILE', 'Napl�f�jl ment�se');
define('_ACA_SAVE_LOGFILE_TIPS', 'Az a f�jl, amibe a napl�bejegyz�s ker�l.Ez a f�jl nagy m�ret�re is n�vekedhet.');
define('_ACA_CLEAR_LOG', 'Napl� t�rl�se');
define('_ACA_CLEAR_LOG_TIPS', 'T�rli a napl� f�jl tartalm�t.');

### control panel
define('_ACA_CP_LAST_QUEUE', 'Utolj�ra lefuttatott feladat');
define('_ACA_CP_TOTAL', '�sszes');
define('_ACA_MAILING_COPY', 'A levelez�s sikeresen m�solva!');

// Miscellaneous settings
define('_ACA_SHOW_GUIDE', 'Sorvezet� haszn�lata');
define('_ACA_SHOW_GUIDE_TIPS', 'Jelen�tse meg a sorvezet�t a haszn�lat elej�n seg�tve az �j felhaszn�l�kat egy h�rlv�l, egy automatikus v�laszol� l�trehoz�s�ban �s az Acajoom megfelel� be�ll�t�s�ban.');
define('_ACA_AUTOS_ON', 'Automatikus v�laszol�k haszn�lata');
define('_ACA_AUTOS_ON_TIPS', 'V�lasszon Nem-et, ha nem akarja haszn�lni az automatikus v�laszok�kat, minden automatikus v�laszol� kikapcsol.');
define('_ACA_NEWS_ON', 'H�rlevelek haszn�lata');
define('_ACA_NEWS_ON_TIPS', 'V�lasszon Nem-t, ha nem akarja haszn�lni a h�rleveleket, minden h�rlev�l opci� kikapcsol.');
define('_ACA_SHOW_TIPS', 'Tippek megjelen�t�se');
define('_ACA_SHOW_TIPS_TIPS', 'Tippek megjelen�t�se a nagyobb hat�konys�g �rdek�ben.');
define('_ACA_SHOW_FOOTER', 'L�bl�c megjelen�t�se');
define('_ACA_SHOW_FOOTER_TIPS', 'Megjelenjen-e a l�bl�c a copyright sz�veggel.');
define('_ACA_SHOW_LISTS', 'List�k megjelen�t�se a webes fel�leten');
define('_ACA_SHOW_LISTS_TIPS', 'Ha a felhaszn�l� nincs bejelentkezve, megjelen�ti a list�t illetve bejelentkezhetnek vagy regisztr�lhatnak.');
define('_ACA_CONFIG_UPDATED', 'A konfigur�ci�s be�l�t�sok friss�tve!');
define('_ACA_UPDATE_URL', 'URL friss�t�se');
define('_ACA_UPDATE_URL_WARNING', 'Figyelem! Ne v�ltoztassa meg az URL-t, hacsak nem k�rt enged�lyt az Acajoom technikai csapat�t�l.<br />');
define('_ACA_UPDATE_URL_TIPS', 'P�ld�ul: http://www.acajoom.com/update/ (tartalmazza a lez�r� perjelet)');

// module
define('_ACA_EMAIL_INVALID', 'A megadott email c�m �rv�nytelen!');
define('_ACA_REGISTER_REQUIRED', 'Regisztr�ljon a feliratkoz�s el�tt!');

// Access level box
define('_ACA_OWNER', 'Lista k�sz�t�:');
define('_ACA_ACCESS_LEVEL', 'Adja meg a lista hozz�f�r�s�nek a szintj�t!');
define('_ACA_ACCESS_LEVEL_OPTION', 'Hozz�f�r�si szint opci�k');
define('_ACA_USER_LEVEL_EDIT', 'V�lassza ki, melyik szintnek van enged�lyezve a levelez�sek szerkeszt�se (a webes vagy az adminisztr�ci�s fel�letr�l');

//  drop down options
define('_ACA_AUTO_DAY_CH1', 'Naponta');
define('_ACA_AUTO_DAY_CH2', 'Naponta h�tv�ge kiv�tel�vel');
define('_ACA_AUTO_DAY_CH3', 'Minden m�snap');
define('_ACA_AUTO_DAY_CH4', 'Minden m�snap h�tv�ge kiv�tel�vel');
define('_ACA_AUTO_DAY_CH5', 'Hetente');
define('_ACA_AUTO_DAY_CH6', 'K�thetente');
define('_ACA_AUTO_DAY_CH7', 'Havonta');
define('_ACA_AUTO_DAY_CH9', '�vente');
define('_ACA_AUTO_OPTION_NONE', 'Nem');
define('_ACA_AUTO_OPTION_NEW', '�j felhaszn�l�k');
define('_ACA_AUTO_OPTION_ALL', '�sszes felhaszn�l�');

//
define('_ACA_UNSUB_MESSAGE', 'Leiratkoz� lev�l');
define('_ACA_UNSUB_SETTINGS', 'Leiratkoz� be�ll�t�sok');
define('_ACA_AUTO_ADD_NEW_USERS', 'Felhaszn�l�k automatikus feliratkoz�sa?');

// Update and upgrade messages
define('_ACA_NO_UPDATES', 'Jelenleg nincs el�rhet� friss�t�s.');
define('_ACA_VERSION', 'Acajoom verzi�');
define('_ACA_NEED_UPDATED', 'Friss�tend� f�jlok:');
define('_ACA_NEED_ADDED', 'Hozz�adand� f�jlok:');
define('_ACA_NEED_REMOVED', 'Elt�vol�tand� f�jlok:');
define('_ACA_FILENAME', 'F�jln�v:');
define('_ACA_CURRENT_VERSION', 'Aktu�lis verzi�:');
define('_ACA_NEWEST_VERSION', 'Legfrissebb verzi�:');
define('_ACA_UPDATING', 'Friss�t�s');
define('_ACA_UPDATE_UPDATED_SUCCESSFULLY', 'A f�jlok sikeresen friss�tve.');
define('_ACA_UPDATE_FAILED', 'A friss�t�s meghi�sult');
define('_ACA_ADDING', 'Hozz�ad�s');
define('_ACA_ADDED_SUCCESSFULLY', 'Sikeresen hozz�adva.');
define('_ACA_ADDING_FAILED', 'A hozz�ad�s meghi�sult!');
define('_ACA_REMOVING', 'Elt�vol�t�s');
define('_ACA_REMOVED_SUCCESSFULLY', 'Sikeresen elt�vol�tva.');
define('_ACA_REMOVING_FAILED', 'Az elt�vol�t�s meghi�sult!');
define('_ACA_INSTALL_DIFFERENT_VERSION', 'M�sik verzi� telep�t�se');
define('_ACA_CONTENT_ADD', 'Tartalom hozz�ad�s');
define('_ACA_UPGRADE_FROM', 'Adatok import�l�sa (n�vlev�l �s feliratkoz� inform�ci�) : ');
define('_ACA_UPGRADE_MESS', 'A l�tez� adatok nincsenek vesz�lyben.<br />Ez a m�velet csak import�lja az adatokat az Acajoom adatb�zis�ba.');
define('_ACA_CONTINUE_SENDING', 'K�ld�s folytat�sa');

// Acajoom message
define('_ACA_UPGRADE1', 'K�nnyen import�lhatja a felhaszn�l�kat �s a h�rleveleket: ');
define('_ACA_UPGRADE2', ' az Acajoomba a friss�t�si panelen.');
define('_ACA_UPDATE_MESSAGE', 'El�rhet� az Acajoom �j verzi�ja! ');
define('_ACA_UPDATE_MESSAGE_LINK', 'Kattintson ide a friss�t�shez!');
define('_ACA_THANKYOU', 'K�sz�nj�k, hogy az Acajoom-ot, az �n kommunik�ci�s partner�t v�lasztotta!');
define('_ACA_NO_SERVER', 'A friss�t� szerver nem �rhet� el, ellen�rizze k�s�bb!');
define('_ACA_MOD_PUB', 'Az Acajoom modul m�g nincs publik�lva!');
define('_ACA_MOD_PUB_LINK', 'Kattintson ide a publik�l�shoz!');
define('_ACA_IMPORT_SUCCESS', 'Sikeresen import�lva');
define('_ACA_IMPORT_EXIST', 'A feliratkoz� m�r az adatb�zisban van');

// Acajoom's Guide
define('_ACA_GUIDE', ' var�zsl�');
define('_ACA_GUIDE_FIRST_ACA_STEP', '<p>Az Acajoom sz�mtalan saj�ts�ggal rendelkezik, ez a var�zsl� v�gig vezeti �nt n�gy egyszer� l�p�sen, amellyel el tudja k�sz�teni h�rleveleit �s automatikus v�laszol�it!<p />');
define('_ACA_GUIDE_FIRST_ACA_STEP_DESC', 'Els� l�p�sk�nt l�tre kell hozni egy list�t. Egy lista k�t t�pus egyike lehet vagy h�rlev�l vagy automatikus v�laszol�. A list�ban param�terekkel lehet szab�lyozni a h�rlevelek k�ld�s�t �s �s az automatikus v�laszol�k m�k�d�s�t: k�ld� neve, kialak�t�s, feliratkoz�k �dv�zl� �zenetei stb.<br /><br />Itt k�sz�theti el az els� list�t: <a href="index2.php?option=com_acajoom&act=list" >lista k�sz�t�s</a> �s kattintson a New gombon!');
define('_ACA_GUIDE_FIRST_ACA_STEP_UPGRADE', 'Az Acajoom lehet�s�get ny�jt egy kor�bbi h�rlev�l rendszerv�l adatok import�l�s�ra.<br />Menjen a Friss�t�s panelre �s v�lassza ki azt a h�rlev�l rendszert, ahonnan import�lni szeretn� a h�rleveleket �s a feliratkoz�kat.<br /><br /><span style="color:#FF5E00;" >Fontos: az import�l�s nem �rinti a kor�bbi h�rlev�l rendszer adatait.</span><br />Az import�l�s ut�n a levelez�seket �s a feliratkoz�kat k�zvetlen�l az Acajoom-ban tudja kezelni.<br /><br />');
define('_ACA_GUIDE_SECOND_ACA_STEP', 'Gratul�kunk, elk�sz�lt az els� lista!  Meg�rhatja az els� valamit: %s.  Ehhet menjen ide: ');
define('_ACA_GUIDE_SECOND_ACA_STEP_AUTO', 'Automatikus v�laszol� kezel�');
define('_ACA_GUIDE_SECOND_ACA_STEP_NEWS', 'H�rlev�l kezel�');
define('_ACA_GUIDE_SECOND_ACA_STEP_FINAL', ' �s v�lassza ki: %s. <br />Majd v�lassza: %s a leg�rd�l� list�ban. Az els� levelez�s elk�sz�t�s�hez kattintson a New gombra!');

define('_ACA_GUIDE_THRID_ACA_STEP_NEWS', 'Miel�tt elk�ldi az els� h�rlevelet, be kell �ll�tani a levelez�si konfigur�ci�t. Menjen a <a href="index2.php?option=com_acajoom&act=configuration" >be�ll�t�sok oldalra</a> ellen�rizni a be�ll�t�sokat. <br />');
define('_ACA_GUIDE_THRID2_ACA_STEP_NEWS', '<br />Ha ez k�sz, menjen vissza a H�rlevelek men�be �s v�lassza ki a levelet �s kattintson a K�ld�s gombra!');

define('_ACA_GUIDE_THRID_ACA_STEP_AUTOS', 'Az els� automatikus v��laszol� hasznlat�hoz egy id�z�t�t kell be�ll�tania a szerveren. Keresse meg a be�ll�t�sok panelen az Id�z�t� f�let! <a href="index2.php?option=com_acajoom&act=configuration" >Kattintson ide</a> az id�z�t� be�ll�t�s�val kapcsolatps tov�bbi inform�ci�k�rt!<br />');

define('_ACA_GUIDE_MODULE', ' <br />Ellen�rizze, hogy publik�lta-e az Acajoom modult, amivel a �rdekl�d�k feliratkozhatnak a list�ra.');

define('_ACA_GUIDE_FOUR_ACA_STEP_NEWS', ' Be�ll�thatja az automatikus v�laszol�t is.');
define('_ACA_GUIDE_FOUR_ACA_STEP_AUTOS', ' Be�ll�that egy h�rlevelet is!');

define('_ACA_GUIDE_FOUR_ACA_STEP', '<p><br />�n k�szen �ll a hat�kony kapcsolatra l�togat�ival �s felhaszn�l�ival. Ez a var�zsl� befejezi m�k�d�s�t, amint elk�sz�ti a m�sodik levelez�st vagy kikapcsolhatja <a href="index2.php?option=com_acajoom&act=configuration" >be�ll�t�sok panelen</a>.<br /><br />Ha k�rd�se van az Acajoom, haszn�lat�val kapcsolatban, haszn�lja a <a target="_blank" href="http://www.acajoom.com/index.php?option=com_joomlaboard&Itemid=26&task=listcat&catid=1" >f�rumot</a>! Emellett sz�mos inform�ci�t is tal�l, hogy kommunik�ljon hat�konyan a feliratkoz�kkal a <a href="http://www.acajoom.com/" target="_blank">www.Acajoom.com</a> oldal�n.<p /><br /><b>K�sz�nj�k, hogy az Acajoom-ot haszn�lja. Az �n kommunik�ci�s partnere!</b> ');
define('_ACA_GUIDE_TURNOFF', 'A var�zsl� kikapcsol�sra ker�l.');
define('_ACA_STEP', 'l�p�s ');

// Acajoom Install
define('_ACA_INSTALL_CONFIG', 'Acajoom be�ll�t�s');
define('_ACA_INSTALL_SUCCESS', 'Sikeres telep�t�s');
define('_ACA_INSTALL_ERROR', 'Telep�t�si hiba');
define('_ACA_INSTALL_BOT', 'Acajoom be�p�l� (robot)');
define('_ACA_INSTALL_MODULE', 'Acajoom modul');
//Others
define('_ACA_JAVASCRIPT','Figyelem: A Javascript-et enged�lyezni kell a megfelel� m�k�d�shez.');
define('_ACA_EXPORT_TEXT','Az export�lt feliratkoz�k a v�laszott list�n alapulnak.<br />Feliratkoz�k export�l�sa list�b�l');
define('_ACA_IMPORT_TIPS','Feliratkoz�k import�l�sa. A f�jlban lev� tartalomnak az al�bbi form�tum�nak kell lennie: <br />Name,Email,ReceiveHTML(1/0),<span style="color: rgb(255, 0, 0);">Registered(1/0)</span>');
define('_ACA_SUBCRIBER_EXIT', 'm�r l�tez� feliratkoz�');
define('_ACA_GET_STARTED', 'Kattintson ide az ind�t�shoz!');

//News since 1.0.1
define('_ACA_WARNING_1011','Figyelem: 1011: A friss�t�s nem m�k�dik, mert a szerver visszautas�totta.');
define('_ACA_SEND_MAIL_FROM_TIPS', 'V�lassza ki, melyik email c�m jelenjen meg k�ld�k�nt!');
define('_ACA_SEND_MAIL_NAME_TIPS', 'V�lassza ki, milyen n�v jelenjen meg k�ld�k�nt!');
define('_ACA_MAILSENDMETHOD_TIPS', 'V�lassza ki milyen lev�lk�ld�t szeretne jaszn�lni: PHP mail f�ggv�ny, <span>Sendmail</span> or SMTP szerver.');
define('_ACA_SENDMAILPATH_TIPS', 'Ez a lev�l szerver k�nyvt�ra');
define('_ACA_LIST_T_TEMPLATE', 'Sablon');
define('_ACA_NO_MAILING_ENTERED', 'Nincs levelez�s megadva');
define('_ACA_NO_LIST_ENTERED', 'Nincs lista megadva');
define('_ACA_SENT_MAILING' , 'Levelek elk�ld�se');
define('_ACA_SELECT_FILE', 'V�lasszon egy f�jlt: ');
define('_ACA_LIST_IMPORT', 'Ellen�rizze a list�t, amelyhez feliratkoz�kat szeretne hozz�rendelni.');
define('_ACA_PB_QUEUE', 'A feliratkoz� be lett sz�rva de probl�ma van vele a list�hoz csatol�sn�l. Ellen�rizze manu�lisan!');
define('_ACA_UPDATE_MESS' , '');
define('_ACA_UPDATE_MESS1' , 'A friss�t�s er�sen aj�nlott!');
define('_ACA_UPDATE_MESS2' , 'Folt �s kisebb jav�t�sok.');
define('_ACA_UPDATE_MESS3' , '�j kiad�s.');
define('_ACA_UPDATE_MESS5' , 'Joomla 1.5 sz�ks�ges a friss�t�shez.');
define('_ACA_UPDATE_IS_AVAIL' , ' el�rhet�!');
define('_ACA_NO_MAILING_SENT', 'Nem lett elk�ldve lev�l!');
define('_ACA_SHOW_LOGIN', 'Bejelentkez�si �rlap megjelen�t�se');
define('_ACA_SHOW_LOGIN_TIPS', 'V�lasszon Igen-t, ha szeretn�, hogy a bejelentkez�si �rlap megjelenjen az Acajoom webes fel�let�nek vez�rl�pultj�n, hogy a felhaszn�l�k regisztr�lhassanak a webhelyen..');
define('_ACA_LISTS_EDITOR', 'Lista le�r� szerkeszt�');
define('_ACA_LISTS_EDITOR_TIPS', 'V�lasszon Igen-t HTML sz�vegszerkeszt� haszn�lat�hoz a a lista le�r�s�nak mez�j�ben.');
define('_ACA_SUBCRIBERS_VIEW', 'Feliratkoz�k megtekint�se');

//News since 1.0.2
define('_ACA_FRONTEND_SETTINGS' , 'Webes be�ll�t�sok' );
define('_ACA_SHOW_LOGOUT', 'Kijelentkez�s gomb megjelen�t�se');
define('_ACA_SHOW_LOGOUT_TIPS', 'V�lassza az Igen-t, ha meg akarja jelen�teni a Kijelentkez�s gombot az AcaJoom vez�rl�pult webes fel�let�n.');

//News since 1.0.3 CB integration
define('_ACA_CONFIG_INTEGRATION', 'Integr�ci�');
define('_ACA_CB_INTEGRATION', 'Community Builder integr�ci�');
define('_ACA_INSTALL_PLUGIN', 'Community Builder be�p�l� (Acajoom integr�ci�) ');
define('_ACA_CB_PLUGIN_NOT_INSTALLED', 'Az Acajoom be�p�l� a Community Builderbe m�g nincs telep�tve!');
define('_ACA_CB_PLUGIN', 'List�k regisztr�l�skor');
define('_ACA_CB_PLUGIN_TIPS', 'V�lassza az Igen-t, ha a levelez� list�kat meg akarja jelen�teni a Community Builder regisztr�ci�s �rlapj�n');
define('_ACA_CB_LISTS', 'Lista azonos�t�k');
define('_ACA_CB_LISTS_TIPS', 'EZ K�TELEZ� MEZ�. Adja meg a list�k azonos�t�j�t vessz�vel elv�lasztva, amely ekre a felhaszn�l� feliratkozhat . (0 az �sszes list�t megjelen�ti)');
define('_ACA_CB_INTRO', 'Bevezet� sz�veg');
define('_ACA_CB_INTRO_TIPS', 'A lista el�tt megjelen� sz�veg. HAGYJA �RESEN, HA NEM AKAR MEGJELEN�TENI SEMMIT!. Haszn�lja a cb_pretext-et a CSS-hez!.');
define('_ACA_CB_SHOW_NAME', 'Listan�v megjelen�t�se');
define('_ACA_CB_SHOW_NAME_TIPS', 'D�ntse el, hogy szeretn�-e megjelen�teni a listaneveket a bevezet� ut�n!');
define('_ACA_CB_LIST_DEFAULT', 'List�k bejel�l�se alap�rtelmez�sk�nt');
define('_ACA_CB_LIST_DEFAULT_TIPS', 'D�ntse el, hogy szeretn�-e alap�rtelmez�sk�nt bejel�lni minden list�t!');
define('_ACA_CB_HTML_SHOW', 'HTML form�tumban?');
define('_ACA_CB_HTML_SHOW_TIPS', 'V�lassza az Igen-t, ha a felhaszn�l�k eld�nthetik, hogy szeretn�nek-e HTML leveleket vagy sem. �ll�tsa Nem-re, ha alap�rtelmez�sk�nt HTML levelet akar haszn�lni!');
define('_ACA_CB_HTML_DEFAULT', 'Alap�rtelmezetten HTML form�tumban?');
define('_ACA_CB_HTML_DEFAULT_TIPS', '�ll�tsa be ezt a lehet�s�get az alap�rtelmezett HTML levelez�si be�ll�t�sok megjelen�t�s�hez! Ha a HTML form�tumban? bejegyz�s Nem, akkor ez az opci� lesz az alap�rtelmezett.');

// Since 1.0.4
define('_ACA_BACKUP_FAILED', 'A f�jlr�l nem k�sz�thet� biztons�gi m�solat! A f�jl nem ker�lt lecser�l�sre.');
define('_ACA_BACKUP_YOUR_FILES', 'A f�jlok r�gebbi verzi�ja ment�sre ker�lt a k�vetkez� k�nyvt�rban:');
define('_ACA_SERVER_LOCAL_TIME', 'Helyi szerver id�');
define('_ACA_SHOW_ARCHIVE', 'Arch�vum gomb megjelen�t�se');
define('_ACA_SHOW_ARCHIVE_TIPS', 'V�lasszon Igen-t a h�rlevelek list�j�nak v�g�n az Arch�vum gomb megjelen�t�s�hez');
define('_ACA_LIST_OPT_TAG', 'K�dok');
define('_ACA_LIST_OPT_IMG', 'K�pek');
define('_ACA_LIST_OPT_CTT', 'Tartalom');
define('_ACA_INPUT_NAME_TIPS', 'Adja meg a teljes nev�t (a keresztnev�vel kezdje)!');
define('_ACA_INPUT_EMAIL_TIPS', 'Adja meg az email c�m�t! Ellen�rizze, hogy ez egy val�di email c�m, ha val�ban szeretne h�rleveletet kapni!');
define('_ACA_RECEIVE_HTML_TIPS', 'V�lasszon Igen-t, ha HTML h�rleveleket szeretne kapni - vagy Nem-et, ha csak sz�veges h�rleveleket.');
define('_ACA_TIME_ZONE_ASK_TIPS', 'Adja meg az id�z�n�j�t!');

// Since 1.0.5
define('_ACA_FILES' , 'F�jlok');
define('_ACA_FILES_UPLOAD' , 'Felt�lt�s');
define('_ACA_MENU_UPLOAD_IMG' , 'K�pek felt�lt�se');
define('_ACA_TOO_LARGE' , 'A f�jl m�rete t�l nagy. A maxim�lis m�ret:');
define('_ACA_MISSING_DIR' , 'A c�lk�nyvt�r nem l�tezik');
define('_ACA_IS_NOT_DIR' , 'A c�lk�nyvt�r nem l�tezik vagy pedig egy szab�lyos f�jl.');
define('_ACA_NO_WRITE_PERMS' , 'A c�lk�nyvt�ron nincs �r�si jog.');
define('_ACA_NO_USER_FILE' , 'Nem v�laszotta ki a felt�ltend� f�jlt!');
define('_ACA_E_FAIL_MOVE' , 'A f�jl nem helyezhet� �t!');
define('_ACA_FILE_EXISTS' , 'A c�lf�jl m�r l�tezik.');
define('_ACA_CANNOT_OVERWRITE' , 'A c�lf�jl m�r l�tezik vagy nem �rhat� fel�l.');
define('_ACA_NOT_ALLOWED_EXTENSION' , 'Nem enged�lyezett f�jlkiterjeszt�s.');
define('_ACA_PARTIAL' , 'A f�jl csak r�szben ker�lt felt�lt�sre.');
define('_ACA_UPLOAD_ERROR' , 'Felt�lt�si hiba:');
define('DEV_NO_DEF_FILE' , 'A f�jl csak r�szben ker�lt felt�lt�sre.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_ACA_CONTENTREP', '[SUBSCRIPTIONS] = Ez lecser�l�sre ker�l a feliratkoz�si linkekkel. Ez <strong>sz�ks�ges</strong> az Acajoom helyes m�k�d�s�hez.<br />Ha b�rmilyen m�s tartalmat helyez el ebben a dobozban, ez a lista �sszes levelez�s�ben meg fog jelenni.<br />Tegye a saj�t feiratkoz�si �zeneteit a v�g�re Az Acajoom automatikusan hozz�adja a feliratkoz�s megv�ltoztat�s�hoz �s a leiratkoz�shoz sz�ks�ges linkeket.');

// since 1.0.6
define('_ACA_NOTIFICATION', '�rtes�t�s');  // shortcut for Email notification
define('_ACA_NOTIFICATIONS', '�rtes�t�sek');
define('_ACA_USE_SEF', 'SEF a levelez�sben');
define('_ACA_USE_SEF_TIPS', 'Aj�nlott a nem v�laszt�sa. Ha szeretn�, hogy a levelez�sben haszn�lt URL haszn�lja a SEF-et, akkor v�lassza az igent!<br /><b>A linkek mindegyik opci�hoz ugyan�gy m�k�dnek. Nem biztos, hogy a levelez�sben a linkek mindig m�k�dnek, ha megv�ltozik a SEF.</b> ');
define('_ACA_ERR_SETTINGS', 'Hibakezel� be�ll�t�sok');
define('_ACA_ERR_SEND' ,'Hiba jelent�s k�ld�se');
define('_ACA_ERR_SEND_TIPS' ,'Ha szeretn�, hogy az Acajoom jobb term�kk� v�ljon, v�lassza az Igen-t! Ez hibajelent�st k�ld a fejleszt�knek. �gy nem sz�ks�ges hibakutat�st v�geznie.<br /> <b>SEMMILYEN MAG�NJELLEG� INFORM�CI�NEM KER�L ELK�LD�SRE</b>. M�g azt sem fogj�k tudni, melyik webhelyr�l �rkezik a hibajelent�s. Csak az Acojoomr�l kapnak informci�t, a PHP be�ll�t�sokr�l �s az SQL lek�rdez�sekr�l. ');
define('_ACA_ERR_SHOW_TIPS' ,'V�lasszon Igen-t a hiba sorsz�m�nak megjelen�t�s�hez a k�perny�n. F�leg hibakeres�sre lehet haszn�lni. ');
define('_ACA_ERR_SHOW' ,'Hib�k megjelen�t�se');
define('_ACA_LIST_SHOW_UNSUBCRIBE', 'Leiratkoz�si linkek megtekint�se');
define('_ACA_LIST_SHOW_UNSUBCRIBE_TIPS', 'V�lasszon Igen-t a leiratkoz�so linkek megjelen�t�s�hez  a lev�l alj�n, ahol a felhaszn�l�k megv�ltoztathatj�k a feliratkoz�saikat. <br /> A Nem letiltja a l�bl�cet �s a linkeket.');
define('_ACA_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">FONTOS MEGJEGYZ�S!</span> <br />Ha kor�bbi Acajoom verzi�r�l friss�t, friss�teni kell az adatb�zis strukt�r�t is a k�vetkez� gombra kattintva (az adatok integrit�sa megmarad)');
define('_ACA_UPDATE_INSTALL_BTN' , 'A t�bl�k �s a be�ll�t�sok friss�t�se');
define('_ACA_MAILING_MAX_TIME', 'Maxim�lis v�rakoz�si id�' );
define('_ACA_MAILING_MAX_TIME_TIPS', 'Megadja azt a maxim�lis id�t, ameddig a leveleknek v�rakozniuk kell asorban. Az aj�nlott �rt�k 30 m�sodperc �s 2 perc k�z�ztt van.');

// virtuemart integration beta
define('_ACA_VM_INTEGRATION', 'VirtueMart integr�ci�');
define('_ACA_VM_COUPON_NOTIF', 'Kupon �rtes�t�si azonos�t�');
define('_ACA_VM_COUPON_NOTIF_TIPS', 'Megadja a levelez�s azonos�t�sz�m�t, amit kuponok k�ld�sekor szeretne haszn�lni.');
define('_ACA_VM_NEW_PRODUCT', '�j term�k �rtes�t�s azonos�t�');
define('_ACA_VM_NEW_PRODUCT_TIPS', 'Megadja a levelez�s azonos�t�sz�m�t, amit �j term�k �rtes�t�sn�l szeretne haszn�lni.');

// since 1.0.8
// create forms for subscriptions
define('_ACA_FORM_BUTTON', '�rlap l�trehoz�sa');
define('_ACA_FORM_COPY', 'HTML k�d');
define('_ACA_FORM_COPY_TIPS', 'M�solja a gener�lt HTML k�dot a HTML oldalra!');
define('_ACA_FORM_LIST_TIPS', 'V�lassza ki a list�b�l az �rlapba besz�rand� tartalmat!');
// update messages
define('_ACA_UPDATE_MESS4' , 'Nem friss�thet� automatikusan.');
define('_ACA_WARNG_REMOTE_FILE' , 'T�voli f�jl nem �rhet� el.');
define('_ACA_ERROR_FETCH' , 'Hiba a f�jl el�r�sekor.');

define('_ACA_CHECK' , 'Ellen�rz�s');
define('_ACA_MORE_INFO' , 'Tov�bbi inf�');
define('_ACA_UPDATE_NEW' , 'Friss�t�s �jabb verzi�ra');
define('_ACA_UPGRADE' , 'Friss�t�s a legfrissebb term�kre');
define('_ACA_DOWNDATE' , 'Vissza�ll�s el�z� verzi�ra');
define('_ACA_DOWNGRADE' , 'Vissza az alapterm�kre');
define('_ACA_REQUIRE_JOOM' , 'Joomla sz�ks�ges');
define('_ACA_TRY_IT' , 'Pr�b�lja ki!');
define('_ACA_NEWER', '�jabb');
define('_ACA_OLDER', 'R�gebbi');
define('_ACA_CURRENT', 'Aktu�lis');

// since 1.0.9
define('_ACA_CHECK_COMP', 'Pr�b�ljon ki egyet a t�bbi komponens k�z�l!');
define('_ACA_MENU_VIDEO' , 'Vide� bemutat�k');
define('_ACA_SCHEDULE_TITLE', 'Automatikus id�be�ll�t� funkci� be�ll�t�sa');
define('_ACA_ISSUE_NB_TIPS' , 'A kiad�s sz�m�nak automatikus gener�l�sa' );
define('_ACA_SEL_ALL' , '�sszes levelez�s');
define('_ACA_SEL_ALL_SUB' , '�sszes lista');
define('_ACA_INTRO_ONLY_TIPS' , 'Ha kipip�lja ezt a dobozt, csak a cikk bevezet� sz�vege ker�l be a lev�lbe egy Tov�bb linkkel.' );
define('_ACA_TAGS_TITLE' , 'Tartalom k�d');
define('_ACA_TAGS_TITLE_TIPS' , 'V�g�lapon kereszt�l tegye ezt a k�dot a lev�l, ahol a tartalmat szeretn� elhelyezni.');
define('_ACA_PREVIEW_EMAIL_TEST', 'Jelzi az email c�met, ahova a tesztet el kell k�ldeni');
define('_ACA_PREVIEW_TITLE' , 'El�n�zet');
define('_ACA_AUTO_UPDATE' , '�j friss�t�si �rtes�t�s');
define('_ACA_AUTO_UPDATE_TIPS' , 'V�lasszon Igen-t, ha szeretne �rtes�t�st a komponens friss�t�s�r�l! <br />FONTOS! A tippek megjelen�t�se sz�ks�ges ennek afunkci�nak a m�k�d�s�hez.');

// since 1.1.0
define('_ACA_LICENSE' , 'Licensz inform�ci�');

// since 1.1.1
define('_ACA_NEW' , '�j');
define('_ACA_SCHEDULE_SETUP', 'Az automatikus v�laszol� m�k�d�s�hez be kell �ll�tani az id�z�t�t a be�ll�t�sokn�l..');
define('_ACA_SCHEDULER', 'Id�z�t�');
define('_ACA_ACAJOOM_CRON_DESC' , 'ha nincs hozz�f�r�se a webhelyen az id�z�t� feladat kezel�h�z, regisztr�lhat egy ingyenes Acajoom id�z�t�t itt:' );
define('_ACA_CRON_DOCUMENTATION' , 'Az Acajoom id�z�t� be�ll�t�saihoz tov�bbi inform�ci�kat itt tal�l:');
define('_ACA_CRON_DOC_URL' , '<a href="http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29"
 target="_blank">http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29</a>' );
define( '_ACA_QUEUE_PROCESSED' , 'A feladatsor sikeresen feldolgoz�sra ker�lt...' );
define( '_ACA_ERROR_MOVING_UPLOAD' , 'Hiba az import�lt f�jl mozgat�sa k�zben' );

//since 1.1.2
define( '_ACA_SCHEDULE_FREQUENCY' , 'Id�z�t� gyakoris�g' );
define( '_ACA_CRON_MAX_FREQ' , 'Id�z�t� maxim�lis gyakoris�g' );
define( '_ACA_CRON_MAX_FREQ_TIPS' , 'Adja meg azt a maxim�lis gykoris�got, amikor az id�z�t� fut (percekben).  Ez korl�zozza az id�z�t�t m�g akkor is, ha az id�z�t� feladat gyakoris�ga enn�l r�videbb id�re van be�ll�tva.' );
define( '_ACA_CRON_MAX_EMAIL' , 'Feladatonk�nti maxim�lis lev�lsz�m' );
define( '_ACA_CRON_MAX_EMAIL_TIPS' , 'Megadja meg a feladatonk�nt elk�ldhet� levelek maxim�lis sz�m�t (0 - korl�tlan).' );
define( '_ACA_CRON_MINUTES' , ' perc' );
define( '_ACA_SHOW_SIGNATURE' , 'Lev�l l�bl�c megjelen�t�se' );
define( '_ACA_SHOW_SIGNATURE_TIPS' , 'Megjelenjen-e az Acajoom-ot n�pszer�s�t� l�bl�c a levelekben.' );
define( '_ACA_QUEUE_AUTO_PROCESSED' , 'Az automatikus v�laszol�k feladatai sikeresen feldolgozva...' );
define( '_ACA_QUEUE_NEWS_PROCESSED' , 'Az id�z�tett h�rlevelek feldolgoz�sa sikeres...' );
define( '_ACA_MENU_SYNC_USERS' , 'Felhaszn�l�k szinkroniz�s�sa' );
define( '_ACA_SYNC_USERS_SUCCESS' , 'A felhaszn�l�k szinkroniz�s�sa sikeres!' );

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Kijelentkez�s' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Igen' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Nem' );
if (!defined('_HI')) define( '_HI', '�dv�z�lj�k' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Fel�l' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Lent' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Kijelentkez�s' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_ACA_TITLE_ONLY_TIPS' , 'Ha ezt kijel�li, csak a teljes cikkre mutat� cikk c�m ker�l be linkk�nt a lev�lbe.');
define('_ACA_TITLE_ONLY' , 'Csak c�m');
define('_ACA_FULL_ARTICLE_TIPS' , 'Ha ezt kijel�li, a lev�lbe a cikk teljes tartalma beker�l');
define('_ACA_FULL_ARTICLE' , 'Teljes cikk');
define('_ACA_CONTENT_ITEM_SELECT_T', 'V�lasszon ki egy tartalmi elemet, amely beker�l a lev�lba.<br />V�g�lapon kereszt�l helyezze el a <b>tartalom k�dot</b> a lev�lbe!  V�laszthatja a teljes sz�veget, csak a bevezet�t vagy csak a c�met (0, 1, vagy 2). ');
define('_ACA_SUBSCRIBE_LIST2', 'Levelez� list�k');

// smart-newsletter function
define('_ACA_AUTONEWS', 'Gyors h�rlev�l');
define('_ACA_MENU_AUTONEWS', 'Gyors h�rlevelek');
define('_ACA_AUTO_NEWS_OPTION', 'Gyors h�rlev�l opci�k');
define('_ACA_AUTONEWS_FREQ', 'H�rlev�l gyakoris�g');
define('_ACA_AUTONEWS_FREQ_TIPS', 'Adja meg azt a gyakoris�got, ami szerint k�ldeni szeretn� a gyors h�rleveleket!');
define('_ACA_AUTONEWS_SECTION', 'Cikk szekci�');
define('_ACA_AUTONEWS_SECTION_TIPS', 'V�lassza ki a szekci�t, amelyb�l cikket szeretne kijel�lni!');
define('_ACA_AUTONEWS_CAT', 'Cikk kateg�ria');
define('_ACA_AUTONEWS_CAT_TIPS', 'V�lassza ki a kateg�ri�t, amelyb�l cikket szeretne kijel�lni (Mind - �sszes cikk az adott szekci�b�l)!');
define('_ACA_SELECT_SECTION', 'V�lasszon szekci�t!');
define('_ACA_SELECT_CAT', '�sszes kateg�ria');
define('_ACA_AUTO_DAY_CH8', 'Negyed�vente');
define('_ACA_AUTONEWS_STARTDATE', 'Kezd� d�tum');
define('_ACA_AUTONEWS_STARTDATE_TIPS', 'Adja meg azt a kezd� d�tumot, amit�l a gyors h�rleveleket k�ldeni szeretn�!');
define('_ACA_AUTONEWS_TYPE', 'Tartalom �ssze�ll�t�s');// how we see the content which is included in the newsletter
define('_ACA_AUTONEWS_TYPE_TIPS', 'Teljes cikk: a teljes cikk beker�l a lev�lbe<br />' .		'Csak bevezet�: csak a cikk bevezet�je ker�l be a lev�lbe<br/>' .		'Csak c�m: csak a cikk c�me ker�l be a lev�lbe');
define('_ACA_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Ezt a gyors h�rlev�l cser�li le.' );

//since 1.1.3
define('_ACA_MALING_EDIT_VIEW', 'Levelez�s l�trehoz�s / megtekint�s');
define('_ACA_LICENSE_CONFIG' , 'Licensz' );
define('_ACA_ENTER_LICENSE' , 'Adja meg a licensz k�dot!');
define('_ACA_ENTER_LICENSE_TIPS' , '�rja be a licensz k�dot �s mentse el.');
define('_ACA_LICENSE_SETTING' , 'Licensz be�ll�t�sok' );
define('_ACA_GOOD_LIC' , '�rv�nyes licensz.' );
define('_ACA_NOTSO_GOOD_LIC' , 'Nem �rv�nyes licensz: ' );
define('_ACA_PLEASE_LIC' , 'Vegye fel a kapcsolatot az Acajoom t�mogat�ival a licensz friss�t�se �rdek�ben  ( license@acajoom.com ).' );
define('_ACA_DESC_PLUS', 'Az Acajoom Plus az els� szekvenci�lis automatikus v�laszol� komponens Joomla rendszerre.  ' . _ACA_FEATURES );
define('_ACA_DESC_PRO', 'Az Acajoom PRO egy fejlett h�rlev�lk�ld� rendszer Joomla rendszerre.  ' . _ACA_FEATURES );

//since 1.1.4
define('_ACA_ENTER_TOKEN' , 'Adja meg az azonos�t�t!');

define('_ACA_ENTER_TOKEN_TIPS' , 'Adja meg azt az azonos�t�t, amit emailben kapott meg az Acajoom megv�s�rl�sakor!<br />Ezut�n mentsen! Az Acajoom automatikusan kapcsol�dik a szerverhez egy licenszsz�m lek�r�s�hez.');

define('_ACA_ACAJOOM_SITE', 'Acajoom webhely:');
define('_ACA_MY_SITE', 'Webhelyem:');

define( '_ACA_LICENSE_FORM' , ' ' .	'Kattintson ide a licensz �rlaphoz ugr�shoz!</a>' );
define('_ACA_PLEASE_CLEAR_LICENSE' , 'T�r�lje a licensz mez�t �s pr�b�lja meg �jra!<br />Ha a probl�ma tov�bba is fenn�ll, ' );

define( '_ACA_LICENSE_SUPPORT' , 'A m�g mindig van k�rd�se, ' . _ACA_PLEASE_LIC );

define( '_ACA_LICENSE_TWO' , 'a Licensz �rlapon lek�rheti a licenszet k�zi m�dszerrel is az azonos�t� �s a saj�t webhely URL megad�s�val (amelyik z�ld sz�nnek jelenik meg ennek az oldalnak a fels� r�sz�n). ' . _ACA_LICENSE_FORM . '<br /><br/>' . _ACA_LICENSE_SUPPORT );

define('_ACA_ENTER_TOKEN_PATIENCE', 'Az azonos�t� ment�se ut�n automatikusan egy licensz k�d gener�l�dik. Az azonos�t� �ltal�ban 2 percen bel�l ellen�rz�sre ker�l, de bizonyos esetekben 15 percig is eltarthat..<br /><br />T�rjen vissza erre az ellen�rz�sre n�h�ny perc mulva!<br /><br />Ha nem kap �rv�nyes licensz k�dot 15 percen bel�l, '. _ACA_LICENSE_TWO);


define( '_ACA_ENTER_NOT_YET' , 'A megadott azonos�t� m�g nem lett ellen�rizve.');
define( '_ACA_UPDATE_CLICK_HERE' , 'L�togasson el a <a href="http://www.acajoom.com" target="_blank">www.acajoom.com</a> oldalra a legfrissebb verzi� let�lt�s�hez.');
define( '_ACA_NOTIF_UPDATE' , 'Ahhoz, hogy �rtes�lj�n az �j friss�t�sekr�l, adja meg az email c�m�t �s kattintson a Feliratkoz�s linkre!');

define('_ACA_THINK_PLUS', 'Ha t�bbet szeretne kihozni levelez� rendszer�b�l, gondoljon a Plus verzi�ra!');
define('_ACA_THINK_PLUS_1', 'Szekvenci�lis automatikus v�laszol�k');
define('_ACA_THINK_PLUS_2', 'H�rlev�l id�z�t�se egy el�re megadott id�pontra!');
define('_ACA_THINK_PLUS_3', 'Nincs t�bb� szerver korl�t');
define('_ACA_THINK_PLUS_4', '�s sok m�s egy�b...');

//since 1.2.2
define( '_ACA_LIST_ACCESS', 'Lista hozz�f�r�s' );
define( '_ACA_INFO_LIST_ACCESS', 'Adja meg, hogy milyen felhaszn�l�csoportok l�thatj�k �s iratkozhatnak fel erre a list�ra!' );
define( 'ACA_NO_LIST_PERM', 'Nincs jogosults�ga feliratkozni erre a list�ra!' );

//Archive Configuration
 define('_ACA_MENU_TAB_ARCHIVE', 'Arch�v�l');
 define('_ACA_MENU_ARCHIVE_ALL', 'Mindet arch�v�l');

//Archive Lists
 define('_FREQ_OPT_0', 'Nincs');
 define('_FREQ_OPT_1', 'Hetente');
 define('_FREQ_OPT_2', 'K�t hetente');
 define('_FREQ_OPT_3', 'Havonta');
 define('_FREQ_OPT_4', 'Negyed �vente');
 define('_FREQ_OPT_5', '�vente');
 define('_FREQ_OPT_6', 'Egy�b');

define('_DATE_OPT_1', 'L�trehoz�s d�tum');
define('_DATE_OPT_2', 'M�dos�t�s d�tum');

define('_ACA_ARCHIVE_TITLE', 'Automatikus arch�v�l�s gyakoris�g�nak be�ll�t�sa');
define('_ACA_FREQ_TITLE', 'Arch�v�l�si gyakoris�g');
define('_ACA_FREQ_TOOL', 'Adja meg, hogy milyen gyakran arh�v�lja az Arch�vum kezel� a webhelye tartalm�t!.');
define('_ACA_NB_DAYS', 'Napok sz�ma');
define('_ACA_NB_DAYS_TOOL', 'Ez csak az Egy�b opci�ra vonatkozik! Adja meg a napok sz�m�t k�t arch�v�l�s k�z�tt!');
define('_ACA_DATE_TITLE', 'D�tum t�pus');
define('_ACA_DATE_TOOL', 'Adja meg, hogy a l�trehoz�s d�tuma vagy a m�dos�t�s d�tuma alapj�n arch�v�ljon!');

define('_ACA_MAINTENANCE_TAB', 'Karbantart�si be�ll�t�sok');
define('_ACA_MAINTENANCE_FREQ', 'Karbantart�si gyakoris�g');
define( '_ACA_MAINTENANCE_FREQ_TIPS', 'Adja meg azt a gyakoris�got, amikor a karbantart�si m�velet lefut!' );
define( '_ACA_CRON_DAYS' , '�ra' );

define( '_ACA_LIST_NOT_AVAIL', 'Jelenleg nincs el�rhet� lista.');
define( '_ACA_LIST_ADD_TAB', 'Hozz�ad/szerkeszt' );

define( '_ACA_LIST_ACCESS_EDIT', 'Levelez�s hozz�f�r�s hozz�ad�s/szerkeszt�s' );
define( '_ACA_INFO_LIST_ACCESS_EDIT', 'Adja meg azt a felhaszn�l�i csoportot, amely b�v�theti vagy szerkesztheti ehhez az list�hoz tartoz� levelez�seket!' );
define( '_ACA_MAILING_NEW_FRONT', '�j levelez�s l�trehoz�s' );

define('_ACA_AUTO_ARCHIVE', 'Auto-Arch�v�l');
define('_ACA_MENU_ARCHIVE', 'Auto-Arch�v�l');

//Extra tags:
define('_ACA_TAGS_ISSUE_NB', '[ISSUENB] = Lecser�l�dik a h�rlev�l kiad�s sz�m�ra.');
define('_ACA_TAGS_DATE', '[DATE] = Lecser�l�dik a k�ld�s d�tum�ra.');
define('_ACA_TAGS_CB', '[CBTAG:{field_name}] = Lecser�l�dik a Community Builder mez�j�nek �rt�k�re: pl.: [CBTAG:firstname] ');
define( '_ACA_MAINTENANCE', 'Karbantart�s' );

define('_ACA_THINK_PRO', 'Professzion�lis ig�nyekhez professzion�lis komponensek!');
define('_ACA_THINK_PRO_1', 'Okos h�rlevelek');
define('_ACA_THINK_PRO_2', 'Adja meg a hozz�f�r�s szintj�t a list�hoz!');
define('_ACA_THINK_PRO_3', 'Adja meg, hogy ki szerkeszthet/adhat hozz� levelez�st!');
define('_ACA_THINK_PRO_4', 'Tov�bbi adatok: adja hozz� saj�t CB mez�it!');
define('_ACA_THINK_PRO_5', 'A Joomla tartalmaz Auto-archiv�l�st!');
define('_ACA_THINK_PRO_6', 'Adatb�zis optimaliz�l�s');

define('_ACA_LIC_NOT_YET', 'Az �n licensze m�g nem �rv�nyes. Ellen�rizze a Licensz f�let a konfigur�ci�s panelen!');
define('_ACA_PLEASE_LIC_GREEN' , '�gyeljen, hogy friss �s val�di inform�ci�kat adjon t�mogat� csoportunknak ennek a f�lnek a tetej�n!' );

define('_ACA_FOLLOW_LINK' , 'Licensz k�r�s');
define( '_ACA_FOLLOW_LINK_TWO' , 'K�rheti licensz�t azonos�t�ja �s webhely�nek URL-je megad�s�val (amelyik z�ld sz�nnel jelenik meg az oldal tetej�n) a Licensz �rlapban.');
define( '_ACA_ENTER_TOKEN_TIPS2', ' Majd kattintson az Alkalmaz gombon a jobb fels� men�ben!' );
define( '_ACA_ENTER_LIC_NB', '�rja be a licensz�t!' );
define( '_ACA_UPGRADE_LICENSE', 'Licensz friss�t�se');
define( '_ACA_UPGRADE_LICENSE_TIPS' , 'Ha kapott azonos�t�t a licensz friss�t�s�hez, azt itt adja meg, majd kattintson az Alkalmaz gombon �s folytassa a <b>2.</b> l�p�ssel licensz sz�m�nak lek�r�s�hez!' );

define( '_ACA_MAIL_FORMAT', 'K�dol�si form�tum' );
define( '_ACA_MAIL_FORMAT_TIPS', 'Milyen k�dol�si form�t szeretne haszn�lni levelez�seiben: csak sz�veges vagy MIME' );
define( '_ACA_ACAJOOM_CRON_DESC_ALT', 'Ha nincs hozz�f�r�se a webhely�n id�z�t� kezel�h�z, haszn�lhatja az ingyenes jCron komponenst az id�z�t�si feladatok megold�s�ra!' );

//since 1.3.1
define('_ACA_SHOW_AUTHOR', 'A szerz� nev�nek megjelen�t�se');
define('_ACA_SHOW_AUTHOR_TIPS', 'V�lasszon Igen-t, ha a szerz� nev�t is el szeretn� helyezni a lev�lbe elhelyezett cikkn�l!');

//since 1.3.5
define('_ACA_REGWARN_NAME','Adja meg a nev�t!');
define('_ACA_REGWARN_MAIL','�rv�nyes email c�met adjon meg!');

//since 1.5.6
define('_ACA_ADDEMAILREDLINK_TIPS','If you select Yes, the e-mail of the user will be added as a parameter at the end of your redirect URL (the redirect link for your module or for an external Acajoom form).<br/>That can be usefull if you want to execute a special script in your redirect page.');
define('_ACA_ADDEMAILREDLINK','Add e-mail to the redirect link');

//since 1.6.3
define('_ACA_ITEMID','ItemId');
define('_ACA_ITEMID_TIPS','This ItemId will be added to your Acajoom links.');

//since 1.6.5
define('_ACA_SHOW_JCALPRO','jCalPRO');
define('_ACA_SHOW_JCALPRO_TIPS','Show the integration tab for jCalPRO <br/>(only if jCalPRO is installed on your website!)');
define('_ACA_JCALTAGS_TITLE','jCalPRO Tag:');
define('_ACA_JCALTAGS_TITLE_TIPS','Copy and paste this tag into the mailing where you want to have the event to be placed.');
define('_ACA_JCALTAGS_DESC','Description:');
define('_ACA_JCALTAGS_DESC_TIPS','Select Yes if you want to insert the description of the event');
define('_ACA_JCALTAGS_START','Start date:');
define('_ACA_JCALTAGS_START_TIPS','Select Yes if you want to insert the start date of the event');
define('_ACA_JCALTAGS_READMORE','Read more:');
define('_ACA_JCALTAGS_READMORE_TIPS','Select Yes if you want to insert a <b>read more link</b> for this event');
define('_ACA_REDIRECTCONFIRMATION','Redirect URL');
define('_ACA_REDIRECTCONFIRMATION_TIPS','If you require a confirmation e-mail, the user will be confirmed and redirected to this URL if he clicks on the confirmation link.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Save');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','No account yet?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Register');