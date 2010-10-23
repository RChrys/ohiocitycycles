<?php
if ( !defined('_JEXEC') && defined('_VALID_MOS') ) define( '_JEXEC', true ); defined('_JEXEC') or die('...Direct Access to this location is not allowed...');

/**
* <p>Polish language file</p>
* @author Andrzej Herzberg <http://design-joomla.pl>
* @version $Id: polish.php 491 2007-02-01 22:56:07Z divivo $
* @link http://www.joobisoft.com
*/

### General ###
 //acajoom Description
define('_ACA_DESC_NEWS', 'Acajoom to narz�dzie zaiweraj�ce list� mailingow�, newsletter, auto-responder s�u��ce do bardziej efektywnej komunikacji mi�dzy u�ytkownikiem i jego klientami.  ' .
		'Acajoom, Tw�j partner w komunikacji!');
define('_ACA_FEATURES', 'Acajoom, Tw�j partner w komunikacji!');

// Type of lists
define('_ACA_NEWSLETTER', 'Newsletter');
define('_ACA_AUTORESP', 'Auto-responder');
define('_ACA_AUTORSS', 'Auto-RSS');
define('_ACA_ECARD', 'e-Kartki');
define('_ACA_POSTCARD', 'Kartka pocztowa');
define('_ACA_PERF', 'Wyniki');
define('_ACA_COUPON', 'Kupon');
define('_ACA_CRON', 'Zadanie Crona');
define('_ACA_MAILING', 'Wysy�ka');
define('_ACA_LIST', 'Lista');

 //acajoom Menu
define('_ACA_MENU_LIST', 'Listy');
define('_ACA_MENU_SUBSCRIBERS', 'Subskrybenci');
define('_ACA_MENU_NEWSLETTERS', 'Newslettery');
define('_ACA_MENU_AUTOS', 'Autorespondery');
define('_ACA_MENU_COUPONS', 'Kupony');
define('_ACA_MENU_CRONS', 'Zadania krona');
define('_ACA_MENU_AUTORSS', 'Auto-RSS');
define('_ACA_MENU_ECARD', 'e-Kartki');
define('_ACA_MENU_POSTCARDS', 'Kartki pocztowe');
define('_ACA_MENU_PERFS', 'Wyniki');
define('_ACA_MENU_TAB_LIST', 'Listy');
define('_ACA_MENU_MAILING_TITLE', 'Wysy�ki');
define('_ACA_MENU_MAILING' , 'Wysy�ki od ');
define('_ACA_MENU_STATS', 'Statystyki');
define('_ACA_MENU_STATS_FOR', 'Statystyki dla ');
define('_ACA_MENU_CONF', 'Konfiguracja');
define('_ACA_MENU_UPDATE', 'Import');
define('_ACA_MENU_ABOUT', 'O');
define('_ACA_MENU_LEARN', 'Centrum edukacji');
define('_ACA_MENU_MEDIA', 'Menad�er medi�w');
define('_ACA_MENU_HELP', 'Pomoc');
define('_ACA_MENU_CPANEL', 'Panel zarz�dzania');
define('_ACA_MENU_IMPORT', 'Import');
define('_ACA_MENU_EXPORT', 'Export');
define('_ACA_MENU_SUB_ALL', 'Subskrybuj wszystkie listy');
define('_ACA_MENU_UNSUB_ALL', 'Wypisz si� ze wszystkich list');
define('_ACA_MENU_VIEW_ARCHIVE', 'Archiwum');
define('_ACA_MENU_PREVIEW', 'Podgl�d');
define('_ACA_MENU_SEND', 'Wy�lij');
define('_ACA_MENU_SEND_TEST', 'Wy�lij email testowy');
define('_ACA_MENU_SEND_QUEUE', 'Kolejka procesu');
define('_ACA_MENU_VIEW', 'Widok');
define('_ACA_MENU_COPY', 'Kopia');
define('_ACA_MENU_VIEW_STATS' , 'Widok statystyk');
define('_ACA_MENU_CRTL_PANEL' , ' Panel kontrolny');
define('_ACA_MENU_LIST_NEW' , ' Dodaj list�');
define('_ACA_MENU_LIST_EDIT' , ' Edytuj list�');
define('_ACA_MENU_BACK', 'Powr�t');
define('_ACA_MENU_INSTALL', 'Instalacja');
define('_ACA_MENU_TAB_SUM', 'Podsumowanie');
define('_ACA_STATUS' , 'Status');

// messages
define('_ACA_ERROR' , ' Wyst�pi� b��d! ');
define('_ACA_SUB_ACCESS' , 'Prawa dost�pu');
define('_ACA_DESC_CREDITS', 'Przypisy');
define('_ACA_DESC_INFO', 'Informacje');
define('_ACA_DESC_HOME', 'Strona domowa');
define('_ACA_DESC_MAILING', 'Lista mailingowa');
define('_ACA_DESC_SUBSCRIBERS', 'Subskrybenci');
define('_ACA_PUBLISHED','Opublikowane');
define('_ACA_UNPUBLISHED','Nie opublikowane');
define('_ACA_DELETE','Skasuj');
define('_ACA_FILTER','Filtr');
define('_ACA_UPDATE','Aktualizacja');
define('_ACA_SAVE','Zapisz');
define('_ACA_CANCEL','Pomi�');
define('_ACA_NAME','Imi�');
define('_ACA_EMAIL','E-mail');
define('_ACA_SELECT','Wybierz');
define('_ACA_ALL','Wszystkie');
define('_ACA_SEND_A', 'Wy�lij ');
define('_ACA_SUCCESS_DELETED', ' skasowano');
define('_ACA_LIST_ADDED', 'Lista zosta�a utworzona');
define('_ACA_LIST_COPY', 'Lista zosta�a skopiowana');
define('_ACA_LIST_UPDATED', 'Lista zosta�a zaktualizowana');
define('_ACA_MAILING_SAVED', 'Mailing zapisano.');
define('_ACA_UPDATED_SUCCESSFULLY', 'zaktualizowano.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_ACA_SUB_INFO', 'Informacja o subskrybentach');
define('_ACA_VERIFY_INFO', 'Prosz� sparawdzi� podany odno�nik, informacja mo�e by� niekompletna.');
define('_ACA_INPUT_NAME', 'Imi�');
define('_ACA_INPUT_EMAIL', 'Email');
define('_ACA_RECEIVE_HTML', 'Wiadomo�� HTML?');
define('_ACA_TIME_ZONE', 'Strefa czasowa');
define('_ACA_BLACK_LIST', 'Czarna lista');
define('_ACA_REGISTRATION_DATE', 'Data rejestracji u�ytkownika');
define('_ACA_USER_ID', 'Id u�ytkownika');
define('_ACA_DESCRIPTION', 'Opis');
define('_ACA_ACCOUNT_CONFIRMED', 'Twoje konto zosta�o aktywowane.');
define('_ACA_SUB_SUBSCRIBER', 'Subskrybent');
define('_ACA_SUB_PUBLISHER', 'Wydawca');
define('_ACA_SUB_ADMIN', 'Administrator');
define('_ACA_REGISTERED', 'Zarejestrowany');
define('_ACA_SUBSCRIPTIONS', 'Twoja subskrypcja');
define('_ACA_SEND_UNSUBCRIBE', 'Wy�lij wiadomo�� o rezygnacji z subskrypcji');
define('_ACA_SEND_UNSUBCRIBE_TIPS', 'Kliknij Tak aby wys�a� email z informacj� o rezygnacji z subskrypcji.');
define('_ACA_SUBSCRIBE_SUBJECT_MESS', 'Prosz� potwierdzi� swoj� subskrypcj�');
define('_ACA_UNSUBSCRIBE_SUBJECT_MESS', 'Potwierdzenie rezygnacji z subskrypcji');
define('_ACA_DEFAULT_SUBSCRIBE_MESS', 'Witaj [NAME],<br>' .
		'Zosta� jescze tylko jeden krok i zostaniesz dopisany do naszej listy wysy�kowej.  Prosz� klikn�� na poni�szy link aby potwierdzi� subskrupcj�.' .
		'<br><br>[CONFIRM]<br><br>W razie jakichkolwiek pyta� prosz� o kontakt z webmasterem.');
define('_ACA_DEFAULT_UNSUBSCRIBE_MESS', 'To jest e-mail potwierdazj�cy wypisanie si� z naszej listy wysy�kowej.  Bardzo nam przykro, �e si� wypisa�e�. Pami�taj jednak, �e zawsze mo�esz odnowi� subskrupcj�.  Je�li mmasz jakiekolwiek pytania, prosz� o kontakt.');

// Acajoom subscribers
define('_ACA_SIGNUP_DATE', 'Data zapisu');
define('_ACA_CONFIRMED', 'Zatwierdzony');
define('_ACA_SUBSCRIB', 'Subskrupcja');
define('_ACA_HTML', 'Mailing w formacie HTML');
define('_ACA_RESULTS', 'Wyniki');
define('_ACA_SEL_LIST', 'Wybierz list�');
define('_ACA_SEL_LIST_TYPE', '- Wybierz rodzaj listy -');
define('_ACA_SUSCRIB_LIST', 'Lista wszystkich subskrybent�w');
define('_ACA_SUSCRIB_LIST_UNIQUE', 'Subskrybenci dla : ');
define('_ACA_NO_SUSCRIBERS', 'Nie znaleziono subskrybent�w dla tej listy.');
define('_ACA_COMFIRM_SUBSCRIPTION', 'E-mail z pro�b� o potwierdzenie subskrypcji zosta� wys�any.  Prosz� odbierz korespondencj� i kliknij w link weryfikacyjny.<br>' .
		'Musisz potwierdzi� autentyczno�� swojej subskrypcji zanim dopiszemy ci� do listy naszych prenumeartor�w.');
define('_ACA_SUCCESS_ADD_LIST', 'Twoje dane zosta�y dopisane do naszej listy wysy�kowej.');


 // Subcription info
define('_ACA_CONFIRM_LINK', 'Klilkij tu aby potwierdzi� subskrypcj�');
define('_ACA_UNSUBSCRIBE_LINK', 'Kliknij tu aby wypisa� si� z naszej listy wysy�kowej');
define('_ACA_UNSUBSCRIBE_MESS', 'Tw�j adres e-mail zosta� usuni�ty z naszej listy wysy�kowej');

define('_ACA_QUEUE_SENT_SUCCESS' , 'Wszystkie zaplanowane wysy�ki zosta�y pomy�lnie zrealizowane.');
define('_ACA_MALING_VIEW', 'Zobacz wszystkie wysy�ki');
define('_ACA_UNSUBSCRIBE_MESSAGE', 'Czy jeste� pewien, �e chcesz wypisa� si� z naszej listy wysy�kowej?');
define('_ACA_MOD_SUBSCRIBE', 'Subskrybuj');
define('_ACA_SUBSCRIBE', 'Subskrybuj');
define('_ACA_UNSUBSCRIBE', 'Wypisz si�');
define('_ACA_VIEW_ARCHIVE', 'Zobacz archiwum');
define('_ACA_SUBSCRIPTION_OR', ' lub kliknij tu aby uaktualni� informacje');
define('_ACA_EMAIL_ALREADY_REGISTERED', 'Ten adres e-mail jest ju� zarejestrowany w naszej bazie.');
define('_ACA_SUBSCRIBER_DELETED', 'Subskrybent skasowany.');


### UserPanel ###
 //User Menu
define('_UCP_USER_PANEL', 'Panel kontrolny u�ytkownika');
define('_UCP_USER_MENU', 'Menu u�ytkownika');
define('_UCP_USER_CONTACT', 'Moje subskrypcje');
 //Acajoom Cron Menu
define('_UCP_CRON_MENU', 'Zarz�dzanie zadaniami crona');
define('_UCP_CRON_NEW_MENU', 'Nowy cron');
define('_UCP_CRON_LIST_MENU', 'Lista zada� crona');
 //Acajoom Coupon Menu
define('_UCP_COUPON_MENU', 'Zarz�dzanie kuponami');
define('_UCP_COUPON_LIST_MENU', 'Lista kupon�w');
define('_UCP_COUPON_ADD_MENU', 'Dodaj kupon');

### lists ###
// Tabs
define('_ACA_LIST_T_GENERAL', 'Opis');
define('_ACA_LIST_T_LAYOUT', 'Uk�ad');
define('_ACA_LIST_T_SUBSCRIPTION', 'Subskrypcja');
define('_ACA_LIST_T_SENDER', 'Informacja o nadawcy');

define('_ACA_LIST_TYPE', 'Typ listy');
define('_ACA_LIST_NAME', 'Nazwa listy');
define('_ACA_LIST_ISSUE', 'Emisja #');
define('_ACA_LIST_DATE', 'Data wysy�ki');
define('_ACA_LIST_SUB', 'Temat mailingu');
define('_ACA_ATTACHED_FILES', 'Za��czone pliki');
define('_ACA_SELECT_LIST', 'Prosz� wybra� list� do edycji!');

// Auto Responder box
define('_ACA_AUTORESP_ON', 'Typ listy');
define('_ACA_AUTO_RESP_OPTION', 'Opcje Autorespondera');
define('_ACA_AUTO_RESP_FREQ', 'Subskrybenci mog� wybra� cz�stotliwo��');
define('_ACA_AUTO_DELAY', 'Op�nienie (w dniach)');
define('_ACA_AUTO_DAY_MIN', 'Minimalna cz�stotliwo��');
define('_ACA_AUTO_DAY_MAX', 'Maksymalna cz�stotliwo��');
define('_ACA_FOLLOW_UP', 'Okre�l follow up autoresponder');
define('_ACA_AUTO_RESP_TIME', 'Subskrybenci mog� wybra� czas');
define('_ACA_LIST_SENDER', 'Lista wysy�kowa');

define('_ACA_LIST_DESC', 'Opis listy');
define('_ACA_LAYOUT', 'Uk�ad');
define('_ACA_SENDER_NAME', 'Nazwa nadawcy');
define('_ACA_SENDER_EMAIL', 'E-mail nadawcy');
define('_ACA_SENDER_BOUNCE', 'Nadawca odbitych wiadomo�ci');
define('_ACA_LIST_DELAY', 'Op�nienie');
define('_ACA_HTML_MAILING', 'Format HTML?');
define('_ACA_HTML_MAILING_DESC', '(je�li dokonasz zmian powiniene� je zapisa� i powr�ci� do tego ekranu aby sprawdzi� efekt.)');
define('_ACA_HIDE_FROM_FRONTEND', 'Ukry� na stronie frontowej?');
define('_ACA_SELECT_IMPORT_FILE', 'Wybierz plik do zaimportowania');;
define('_ACA_IMPORT_FINISHED', 'Import zako�czony');
define('_ACA_DELETION_OFFILE', 'Usuni�cie pliku');
define('_ACA_MANUALLY_DELETE', 'nie powiod�o si�, musisz r�cznie usun�� plik');
define('_ACA_CANNOT_WRITE_DIR', 'Niemog� zapisa� katalogu');
define('_ACA_NOT_PUBLISHED', 'Nie mo�na wys�a� mailingu, lista jest nieopublikowana.');

//  List info box
define('_ACA_INFO_LIST_PUB', 'Kliknij Tak aby opublikowa� list�');
define('_ACA_INFO_LIST_NAME', 'Tutaj wpisz nazw� twojej listy. B�dziesz m�g� identyfikowa� list� u�ywaj�c tej nazwy.');
define('_ACA_INFO_LIST_DESC', 'Tutaj wpisz kr�tki opis twojej listy. Ten opis b�dzie widoczny dla odwiedzaj�cych tw�j serwis.');
define('_ACA_INFO_LIST_SENDER_NAME', 'Wpisz imi� wysy�aj�cego mailing. B�dzie ono widoczne dla subskrybent�w tej listy.');
define('_ACA_INFO_LIST_SENDER_EMAIL', 'Wpisz adres e-mail z kt�rego mailing jest wysy�any.');
define('_ACA_INFO_LIST_SENDER_BOUNCED', 'Wpisz adres email na kt�ry u�ytkownicy mog� odpowiada�. Zalecamy aby by� to tan sam adres co adres nadawcy. Niekt�re filtry antyspamowe mog� wiadmo�� w kt�rej adres nadawcy r�ni si� od adresu zwrotnego uzna� za spam');
define('_ACA_INFO_LIST_AUTORESP', 'Wybierz typ mailingu dla tej listy. <br>' .
		'Newsletter: Normalny newsletter<br>' .
		'Autoresponder: jest to specjalny rodzaj listyz kt�rej wiadomo�ci wysy�ane s� automatycznie w zadanych odst�pach czasu.');
define('_ACA_INFO_LIST_FREQUENCY', 'Zaznacz czy u�ytkownicy mog� wybra� jak cz�sto maj� otrzymywa� wiadomo�ci.  Pozwoli to na wi�ksz� elastyczno�� dla u�ytkownik�w.');
define('_ACA_INFO_LIST_TIME', 'Pozw�l u�ytkownikom wybra� preferowan� por� dnia, o kt�rej chc� otrzymywa� wiadomo�ci.');
define('_ACA_INFO_LIST_MIN_DAY', 'Zdefiniuj minimaln� cz�stotliwo�� z jak� u�ytkownicy maj� otrzymywa� wiadomo�ci');
define('_ACA_INFO_LIST_DELAY', 'Sprecyzuj odst�p pomi�dzy t� wiadomo�i� autorespondera a nast�pn�.');
define('_ACA_INFO_LIST_DATE', 'Sprecyzuj dat� publikacji listy je�li zamierzasz przerwac wysy�k�. <br> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_ACA_INFO_LIST_MAX_DAY', 'Sprecyzuj jak� maksymaln� cz�stotliow�� otrzymywania wiadomo�ci u�ytkownicy mog� wybra�');
define('_ACA_INFO_LIST_LAYOUT', 'Tutaj wprowad� uk�ad twojej listy mailingowej. Mo�esz zdefiniowa� dowolny uk�ad.');
define('_ACA_INFO_LIST_SUB_MESS', 'Ta wiadomo�� zostanie wys�ana do subskrybenta, kt�ry w�a�nie si� zarejestrowa�. Mo�esz tutaj zdefiniowa� dowolny tekst.');
define('_ACA_INFO_LIST_UNSUB_MESS', 'Ta wiadomo�� zostanie wys�ana do subskrybenta kiedy wypisze si� z listy. Mo�e to by� dowolna wiadomo��.');
define('_ACA_INFO_LIST_HTML', 'Wybierz opcj� je�li chcesz wysy�a� wiadomo�ci w formacie HTML. U�ytkownicy s� zobowi�zani sprecyzowa� czy chc� otrzymywa� wiadomo�ci w formacie HTML, czy tylko wiadomo�ci tekstowe, w chili gdy zapisuj� si� do tej listy.');
define('_ACA_INFO_LIST_HIDDEN', 'Kliknij tak aby ukry� list� na stronie frontowej, u�ytkownicy nie b�d� zobowi�zani do zapisu ale wci�� b�dzie mo�liwa wysy�ka.');
define('_ACA_INFO_LIST_ACA_AUTO_SUB', 'Czy chcesz automatycznie zapisa� nowych u�ytkownik�w do tej listy?<br><B>Nowi u�ytkownicy:</B> zostan� zarejestrowani wszyscy nowi u�ytkownicy.<br><B>Wszyscy u�ytkowicy:</B> zostan� zarejestrowani wszyscy u�ytkownicy zapisani do tej pory w bazie.<br>(wszystkie opcje wspierane s� w Community Builder)');
define('_ACA_INFO_LIST_ACC_LEVEL', 'Wybierz poziom dost�pu ze strony frontowej. Ta opcja pokazuje lub ukrywa list� mailingow� dla grup u�ytkownik�w kt�rzy nie chc� lub nie powinni si� do niej zapisywa�.');
define('_ACA_INFO_LIST_ACC_USER_ID', 'Wybierz poziom dost�pu dla u�ytkownik�w, kt�rym chcesz pozwoli� a edycj�. Ci u�ytkownicy b�d� w stanie edytowa� i wysy�ac mailing z pozomu frontu oraz z panela administracynjego.');
define('_ACA_INFO_LIST_FOLLOW_UP', 'If you want the auto-responder to move to another one once it reaches the last message you can specify here the following up auto-responder.');
define('_ACA_INFO_LIST_ACA_OWNER', 'To jest ID osoby, kt�ra utowrzy�a list�.');
define('_ACA_INFO_LIST_WARNING', '   Ta ostatnia opcja jest dost�pna tylko raz, podczas tworzenia listy.');
define('_ACA_INFO_LIST_SUBJET', ' Temat wysy�ki.  To jest temat e-maila, kt�ry otrzyma subskrybent.');
define('_ACA_INFO_MAILING_CONTENT', 'To jest zawarto�� e-maila do wysy�ki.');
define('_ACA_INFO_MAILING_NOHTML', 'Wpisz tytaj tre�� wiadomo�ci, kt�r� chcesz wys�a� do tych subskrybent�w, kt�rzy wyrazili woj� otrzymywania wiadomo�ci w formacie tekstowym podczas zapisu. <BR/> UWAGA: Je�li zostawisz to pole puste Acajoom automatycznie przekonweruje wiadomo�� HTML do wiadomo�ci tekstowej.');
define('_ACA_INFO_MAILING_VISIBLE', 'Kliknij TAK aby pokaza� mailing na strnonie.');
define('_ACA_INSERT_CONTENT', 'Za��cz istniej�cy artyku�');

// Coupons
define('_ACA_SEND_COUPON_SUCCESS', 'Kupon wys�any!');
define('_ACA_CHOOSE_COUPON', 'Wybierz kupon');
define('_ACA_TO_USER', ' do tego u�ytkownika');

### Cron options
//drop down frequency(CRON)
define('_ACA_FREQ_CH1', 'co godzin�');
define('_ACA_FREQ_CH2', 'co 6 godzin');
define('_ACA_FREQ_CH3', 'co 12 godzin');
define('_ACA_FREQ_CH4', 'codiennie');
define('_ACA_FREQ_CH5', 'co tydzie�');
define('_ACA_FREQ_CH6', 'co miesi�c');
define('_ACA_FREQ_NONE', 'Nie');
define('_ACA_FREQ_NEW', 'Nowy u�ytkownik');
define('_ACA_FREQ_ALL', 'Wszystcy u�ytkownicy');

//Label CRON form
define('_ACA_LABEL_FREQ', 'Acajoom Cron?');
define('_ACA_LABEL_FREQ_TIPS', 'Kliknij TAK je�li zamierzasz u�y� z Acajoom Cron, NIE dla innych zada� crona.<br>' .
		'Je�li wybierzesz TAK nie musisz wybiera� adresu Cron-a, b�dzie on automatycznie dodany.');
define('_ACA_SITE_URL' , 'Adres URL twojej witryny');
define('_ACA_CRON_FREQUENCY' , 'Cz�stotliwo�� Cron-a');
define('_ACA_STARTDATE_FREQ' , 'Data pocz�tkowa');
define('_ACA_LABELDATE_FREQ' , 'Okre�l dat�');
define('_ACA_LABELTIME_FREQ' , 'Okre�l czas');
define('_ACA_CRON_URL', 'Cron URL');
define('_ACA_CRON_FREQ', 'Cz�stotliwo��');
define('_ACA_TITLE_CRONLIST', 'Lista Cron-�w');
define('_NEW_LIST', 'Utw�rz nowa list�');

//title CRON form
define('_ACA_TITLE_FREQ', 'Edycja Cron-a');
define('_ACA_CRON_SITE_URL', 'Prosz� wpisa� poprawny adres url witryny zaczynaj�cy si� od http://');

### Mailings ###
define('_ACA_MAILING_ALL', 'Wszystkie mailingi');
define('_ACA_EDIT_A', 'Edytuj ');
define('_ACA_SELCT_MAILING', 'Prosz� wybra� list� z rozwijalnego menu.');
define('_ACA_VISIBLE_FRONT', 'Widoczne na stronie');

// mailer
define('_ACA_SUBJECT', 'Temat');
define('_ACA_CONTENT', 'Zawarto��');
define('_ACA_NAMEREP', '[NAME] = To pole zostanie zamienione na dane wprowadzone przez u�ytkownika, mo�esz wi�c wysy�a� spersonalizowane wiadomo�ci.<br>');
define('_ACA_FIRST_NAME_REP', '[FIRSTNAME] = To pole zostanie zamienione na imi�, kt�re wprowadzi� u�ytkownik przy rejestracji.<br>');
define('_ACA_NONHTML', 'wersja bez HTML');
define('_ACA_ATTACHMENTS', 'Za��czniki');
define('_ACA_SELECT_MULTIPLE', 'Wci�nik klawisz control (albo command - Macintosh) aby wybra� kilka za��cznik�w.<br>' .
		'Pliki b�da widoczne na li�cie za��cznik�w zlokalizowanych w katalogu z za��cznikami. Mo�esz zmieni� lokalizacj� tego katalogu w panelu kontrolnym.');
define('_ACA_CONTENT_ITEM', 'Element zawarto�ci');
define('_ACA_SENDING_EMAIL', 'Wysy�ka maili');
define('_ACA_MESSAGE_NOT', 'Komunikat - nie mo�e zosta� wys�ane');
define('_ACA_MAILER_ERROR', 'B��d mailera');
define('_ACA_MESSAGE_SENT_SUCCESSFULLY', 'Komunikat - wys�ano pomy�lnie');
define('_ACA_SENDING_TOOK', 'Wys�anie maili zabra�o ');
define('_ACA_SECONDS', ' sekund');
define('_ACA_NO_ADDRESS_ENTERED', 'Nie podano adresu e-mail lub u�ytkownika ');
define('_ACA_CHANGE_SUBSCRIPTIONS', 'Zmie�');
define('_ACA_CHANGE_EMAIL_SUBSCRIPTION', 'Zmie� swoj� subskrypcj�');
define('_ACA_WHICH_EMAIL_TEST', 'Podaj edres e-mail do wys�ania wiadomo�ci testowej lub wybierz podgl�d');
define('_ACA_SEND_IN_HTML', 'Wysy�ka w HTML (dla mailingu html)?');
define('_ACA_VISIBLE', 'Widoczny');
define('_ACA_INTRO_ONLY', 'Tylko intro');

// stats
define('_ACA_GLOBALSTATS', 'Statystyki globalne');
define('_ACA_DETAILED_STATS', 'Statystyki szczeg��we');
define('_ACA_MAILING_LIST_DETAILS', 'Szczeg�y listy');
define('_ACA_SEND_IN_HTML_FORMAT', 'Wys�ane w formacie HTML');
define('_ACA_VIEWS_FROM_HTML', 'Obejrzane (e-maile HTML)');
define('_ACA_SEND_IN_TEXT_FORMAT', 'Wys�ane w formacie tekstowym');
define('_ACA_HTML_READ', 'HTML przeczytane');
define('_ACA_HTML_UNREAD', 'HTML nieprzeczytane');
define('_ACA_TEXT_ONLY_SENT', 'Tylko tekst');

// Configuration panel
// main tabs
define('_ACA_MAIL_CONFIG', 'Mail');
define('_ACA_LOGGING_CONFIG', 'Logi i statystyki');
define('_ACA_SUBSCRIBER_CONFIG', 'Subskrybenci');
define('_ACA_MISC_CONFIG', 'R�no�ci');
define('_ACA_MAIL_SETTINGS', 'Mail - ustawienia');
define('_ACA_MAILINGS_SETTINGS', 'Ustawienia mailingu');
define('_ACA_SUBCRIBERS_SETTINGS', 'Ustawienia subskrybent�w');
define('_ACA_CRON_SETTINGS', 'Ustawienia Cron-a');
define('_ACA_SENDING_SETTINGS', 'Ustawienia wysy�ki');
define('_ACA_STATS_SETTINGS', 'Ustawienia statystyk');
define('_ACA_LOGS_SETTINGS', 'Ustawienia log�w');
define('_ACA_MISC_SETTINGS', 'Ustawienia r�no�ci');
// mail settings
define('_ACA_SEND_MAIL_FROM', 'Email nadawcy');
define('_ACA_SEND_MAIL_NAME', 'Nazwa nadawcy');
define('_ACA_MAILSENDMETHOD', 'Metoda wysy�ki');
define('_ACA_SENDMAILPATH', '�cie�ka do sendmail');
define('_ACA_SMTPHOST', 'SMTP host');
define('_ACA_SMTPAUTHREQUIRED', 'SMTP wymagana autoryzacja');
define('_ACA_SMTPAUTHREQUIRED_TIPS', 'Wybierz je�li tw�j serwer SMTP wymaga autoryzacji');
define('_ACA_SMTPUSERNAME', 'SMTP nazwa u�ytkownika');
define('_ACA_SMTPUSERNAME_TIPS', 'Wprowad� nazw� u�ytkownika SMTP je�li tw�j serwer SMTP wymaga autoryzacji');
define('_ACA_SMTPPASSWORD', 'SMTP has�o');
define('_ACA_SMTPPASSWORD_TIPS', 'Wprowad� has�o SMTP je�li tw�j serwer SMTP wymaga autoryzacji');
define('_ACA_USE_EMBEDDED', 'U�yj za��czonych obraz�w');
define('_ACA_USE_EMBEDDED_TIPS', 'Wybierz je�li obrazki z za��czonej zawarto�ci maj� byc wys�ane w wiadomo�ci HTML. W innym przypadku zostan� u�yte standardowe tagi.');
define('_ACA_UPLOAD_PATH', 'Wgrywanie/�cie�ka do za��cznik�w');
define('_ACA_UPLOAD_PATH_TIPS', 'Mo�esz wybra� �cie�k� do za��cznik�w.<br>' .
		'Sprawd� czy wybrany katalog istnieje, w przeciwnym wypadku utw�rz go.');

// subscribers settings
define('_ACA_ALLOW_UNREG', 'Zezwalaj niezarejestrowanym');
define('_ACA_ALLOW_UNREG_TIPS', 'Wybierz TAK je�li chcesz pozwoli� na zapis do subskypcji u�ytkownikom niezarejestrowanym w serwisie.');
define('_ACA_REQ_CONFIRM', 'Wymagane potwierdzenie');
define('_ACA_REQ_CONFIRM_TIPS', 'Wybierz je�li wymagasz potwierdzenia subskrypcji od niezarejestrowanych u�ytkownik�w.');
define('_ACA_SUB_SETTINGS', 'Ustawienia subskrybenta');
define('_ACA_SUBMESSAGE', 'Ustawienia email');
define('_ACA_SUBSCRIBE_LIST', 'Subskrybenci do listy');

define('_ACA_USABLE_TAGS', 'U�yteczne zak�adki');
define('_ACA_NAME_AND_CONFIRM', '<b>[CONFIRM]</b> = Zostanie utworzony odno�nik, za pomoc� kt�rego u�ytkownik b�dzie m�g� potwierdzi� subskrypcj�. Pole <strong>wymagane</strong> dla prawid�owej pracy Acajoom.<br>'
.'<br>[NAME] = To pole zostanie zast�pione nazw� (imi� i nazwisko), kt�r� u�ytkownik poda� przy rejestracji. Mo�esz wi�c wysy�a� spersonalizowane wiadomo�ci.<br>'
.'<br>[FIRSTNAME] = To pole zostanie zast�pione nazw� (imieniem), kt�r� u�ytkownik poda� przy rejestracji. FIRSTNAME to pierwsze s�owo wpisane przez u�ytkownika w polu z nazw�.<br>');
define('_ACA_CONFIRMFROMNAME', 'Potwierd� nazw�');
define('_ACA_CONFIRMFROMNAME_TIPS', 'Wpisz nazw� wy�wietlan� w wiadomo�ci z potwierdzeniem.');
define('_ACA_CONFIRMFROMEMAIL', 'Potwierd� e-mail');
define('_ACA_CONFIRMFROMEMAIL_TIPS', 'Wpisz email wy�wietlany w wiadomo�ci z potwierdzeniem.');
define('_ACA_CONFIRMBOUNCE', 'Adres dla odbitych wiadomo�ci');
define('_ACA_CONFIRMBOUNCE_TIPS', 'Wpisz adres e-mail dla odbitych wiadomo�ci.');
define('_ACA_HTML_CONFIRM', 'potwierdzenie HTML');
define('_ACA_HTML_CONFIRM_TIPS', 'Wybierz tak je�li wiadomo�� potwierdzaj�ca ma by� wys�ana w formacie HTML dla u�ytkownik�w, kt�rzy wybrali tak� opcj� przy rejestracji.');
define('_ACA_TIME_ZONE_ASK', 'Sprawd� stref� czasow�');
define('_ACA_TIME_ZONE_TIPS', 'Wybierz tak, je�li chcesz sprawdza� stref� czasow� u�ytkownika. Skojekowane maile b�d� wysy�ane w�a�ciwie dla danej strefy');

 // Cron Set up
 define('_ACA_AUTO_CONFIG', 'Cron');
define('_ACA_TIME_OFFSET_URL', 'kliknij tu aby ustawi� offset w g�wnym panelu konfiguracyjnym -> Zak�adka lokalna');
define('_ACA_TIME_OFFSET_TIPS', 'Ustaw odst�p czasu serwera');
define('_ACA_TIME_OFFSET', 'Odst�p czasu');
define('_ACA_CRON_DESC','<br>U�ywaj�c funkcji cron-a mo�esz ustawi� automatyczne zadania dla twojego serwisu w Joomla!<br>' .
		'Aby u�y� tej funkcjonalno�ci powiniene� ustawi� w panelu administracyjnym nast�puj�ce komendy:<br>' .
		'/usr/bin/php  /home/joomla/public_dev/index.php?option=com_acajoom&act=cron' .
		'<br><br>Uwaga:<br>' .
		' - je�li scie�ka na Twoim serwerze jest inna ni� /usr/bin/php prosz� wpisa� w�a�ciw� w postaci /$php_path/php' .
 		'<br><br>Wi�cej informacji na temat ustawie� crona<br>' .
		' - Cpanel kliknij tu ' .
 		'<a href="http://www.visn.co.uk/cpanel-docs/cron-jobs.html"  target="_blank">http://www.visn.co.uk/cpanel-docs/cron-jobs.html</a><br>' .
 		' - Plesk kliknij tu ' .
 		'<a href="http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm" target="_blank">' .
 		'http://www.swsoft.com/doc/tutorials/Plesk/Plesk7/plesk_plesk7_eu/plesk7_eu_crontab.htm</a><br>' .
 		' - Interworx kliknij tu ' .
 		'<a href="http://www.sagonet.com/interworx/tutorials/siteworx/cron.php" target="_blank">' .
 		'http://www.sagonet.com/interworx/tutorials/siteworx/cron.php</a><br>' .
 		' - Og�lne informacje na temat crona pod Linuxem ' .
 		'<a href="http://www.computerhope.com/unix/ucrontab.htm#01" target="_blank">http://www.computerhope.com/unix/ucrontab.htm#01</a><br>' .
 		'<br>Je�li potrzebujesz pomocy w ustawieniach crona lub masz inne problemy zapraszamy na nasze forum <a href="http://www.acajoom.com" target="_blank">http://www.acajoom.com</a>');
// sending settings
define('_ACA_PAUSEX', 'Przerwa x mi�dzy ka�d� ustawion� paczk� e-maili');
define('_ACA_PAUSEX_TIPS', 'Wprowad� ilo�� sekund, r�wnowa�n� przerwie pomi�dzy wysy�akmi kolejnyhc zdefiniowanych paczek maili.');
define('_ACA_EMAIL_BET_PAUSE', 'E-maili pomi�dzy przerwami');
define('_ACA_EMAIL_BET_PAUSE_TIPS', 'Ilo�� e-maili do wys�ania przed przerw�.');
define('_ACA_WAIT_USER_PAUSE', 'Czekaj na wprowadzenie u�ytkownika przy przerwie');
define('_ACA_WAIT_USER_PAUSE_TIPS', 'CZy skrypt ma czeka� na wprowadzenie u�ytkownika w czasie przerwy pomi�dzy wysy�kami.');
define('_ACA_SCRIPT_TIMEOUT', 'Czas oblicze� dla skryptu');
define('_ACA_SCRIPT_TIMEOUT_TIPS', 'Liczba minut dzia�ania skryptu (0 = bez limitu).');
// Stats settings
define('_ACA_ENABLE_READ_STATS', 'W��czone czytanie statystyk');
define('_ACA_ENABLE_READ_STATS_TIPS', 'Wybierz tak je�li chcesz rejestrowa� ilo�� wy�wietle�. Ta techika mo�e by� u�yta tylko dla mailingu w formacie HTML');
define('_ACA_LOG_VIEWSPERSUB', 'Rejestruj wy�wietlenia dla subskrybenta');
define('_ACA_LOG_VIEWSPERSUB_TIPS', 'Wybierz tak je�li chcesz rejestrowa� ilo�� wy�wietle� dla ka�dego u�ytkownika. Ta techika mo�e by� u�yta tylko dla mailingu w formacie HTML');
// Logs settings
define('_ACA_DETAILED', 'Szczeg�owe raporty');
define('_ACA_SIMPLE', 'Uproszczone raporty');
define('_ACA_DIAPLAY_LOG', 'Wy�wietl raporty');
define('_ACA_DISPLAY_LOG_TIPS', 'Zaznacz tak je�li chcesz wy�wietla� rejestry w czasie wysy�ki.');
define('_ACA_SEND_PERF_DATA', 'Wydajno�� wysy�ki');
define('_ACA_SEND_PERF_DATA_TIPS', 'Zaznacz je�li chcesz aby Ajacom generowa� anonimowe sprawozdania o konfiguracji, ilo�ci subskrybent�w listy i rzeczywistego czasu wysy�ki. To pozwoli nam oceni� wydajno�� systemu Acajoom i pozwoli na dokonanie poprawek w przysz�ych wersjach.');
define('_ACA_SEND_AUTO_LOG', 'Wy�lij raporty dla auto-respondera');
define('_ACA_SEND_AUTO_LOG_TIPS', 'Zaznacz tak jes�i chcesz otrzymywa� e-mail z raportem za ka�dym razem kiedy zadanie zostanie wykonane.  UWAGA: mo�e to spowodowa� ogromny wzrost ilo�ci otrzymywanych maili.');
define('_ACA_SEND_LOG', 'Wy�lij raport');
define('_ACA_SEND_LOG_TIPS', 'Czy raport z mailingu ma by� wysy�any na adres u�ytkownika zlecaj�cego wysy�k�.');
define('_ACA_SEND_LOGDETAIL', 'Wy�lij sczeg�owy raport');
define('_ACA_SEND_LOGDETAIL_TIPS', 'Szczeg�owy raport zawiera informacje o powodzeniu lub niepowodzeniu wysy�ki dla ka�dego subskrybenta oraz przegl�d informacji. Kr�tki raport zawiera wy��cznie przegl�d.');
define('_ACA_SEND_LOGCLOSED', 'Wy�lij raport je�li ��czno�� zostanie zerwana');
define('_ACA_SEND_LOGCLOSED_TIPS', 'Przy w��czonej opcji u�ytkownik wysy�aj�cy mailing wci�� mo�e otrzymywac raporty na e-mail.');
define('_ACA_SAVE_LOG', 'Zapisz raport');
define('_ACA_SAVE_LOG_TIPS', 'Czy raport z mailingu ma by� zapisany (za��czony) do pliku.');
define('_ACA_SAVE_LOGDETAIL', 'Zapisz szczeg�lowy raport');
define('_ACA_SAVE_LOGDETAIL_TIPS', 'Szczeg�owy raport zawiera informacje o powodzeniu lub niepowodzeniu wysy�ki dla ka�dego subskrybenta oraz przegl�d informacji. Kr�tki raport zawiera wy��cznie przegl�d.');
define('_ACA_SAVE_LOGFILE', 'Zapisz plik raportu');
define('_ACA_SAVE_LOGFILE_TIPS', 'Plik do kt�rego jest do��czany raport. Plik mo�e by� do�� spory.');
define('_ACA_CLEAR_LOG', 'Wyczy�� raport');
define('_ACA_CLEAR_LOG_TIPS', 'Kasuje dane z pliku raportu.');

### control panel
define('_ACA_CP_LAST_QUEUE', 'Ostatnio wykonana kolejka');
define('_ACA_CP_TOTAL', 'Suma');
define('_ACA_MAILING_COPY', 'Mailing skopiowany!');

// Miscellaneous settings
define('_ACA_SHOW_GUIDE', 'Poka� przewodnik');
define('_ACA_SHOW_GUIDE_TIPS', 'Pokazuje przewodnik pomagaj�cy nowym u�ytkownikom utworzy� newsletter, auto-responder i ustawi� poprawnie system Acajoom.');
define('_ACA_AUTOS_ON', 'U�yj Auto-responder�w');
define('_ACA_AUTOS_ON_TIPS', 'Ustaw nie je�li nie chcesz u�ywa�  Auto-responder�w. Wszystkie autorespndery b�d� nieaktywne.');
define('_ACA_NEWS_ON', 'U�yj newslettera');
define('_ACA_NEWS_ON_TIPS', 'Wybierz nie jes�i nie chcesz u�ywa� newslettera. Wszystkie newslettery b�d� nieaktywne.');
define('_ACA_SHOW_TIPS', 'Poka� porady');
define('_ACA_SHOW_TIPS_TIPS', 'Poka� porady pomagaj�ce u�ytkownikom korzysta� z systemu Acajoom bardziej efektywnie.');
define('_ACA_SHOW_FOOTER', 'Poka� stopk�');
define('_ACA_SHOW_FOOTER_TIPS', 'Czy ma by� pokazywana stopka Acajoom.');
define('_ACA_SHOW_LISTS', 'Poka� list� na stronie');
define('_ACA_SHOW_LISTS_TIPS', 'Pokazuje niezerejestrowanym u�ytkownikom listy mailingowe, kt�re b�d� mogli zaprenumerowa� po zarejestrowaniu.');
define('_ACA_CONFIG_UPDATED', 'Szczczeg�y konfiguracji zosta�y zapisane!');
define('_ACA_UPDATE_URL', 'Uaktualnij URL');
define('_ACA_UPDATE_URL_WARNING', 'UWAGA! Nie zmieniaj tego adresu p�ki nie zostaniesz o to poproszony przez zesp� techniczny Acajoom.<br>');
define('_ACA_UPDATE_URL_TIPS', 'Na przyk�ad: http://www.acajoom.com/update/ (razem z ko�cowym slash-em)');

// module
define('_ACA_EMAIL_INVALID', 'Wprowadzony e-mail jest b��dny.');
define('_ACA_REGISTER_REQUIRED', 'Prosz� zarejestrowa� si� w serwisie przed zapiseaniem si� na list� wysy�kow�.');

// Access level box
define('_ACA_OWNER', 'Tw�rca listy:');
define('_ACA_ACCESS_LEVEL', 'Ustaw poziom dost�pu do listy');
define('_ACA_ACCESS_LEVEL_OPTION', 'Opcje poziomu dost�pu');
define('_ACA_USER_LEVEL_EDIT', 'Wybierz, kt�ry poziom u�ytkownika jest dopuszczony do redagowania listy (zar�wno z poziomu panela jak i frontu strony) ');

//  drop down options
define('_ACA_AUTO_DAY_CH1', 'Codziennie');
define('_ACA_AUTO_DAY_CH2', 'Codziennie bez weekend�w');
define('_ACA_AUTO_DAY_CH3', 'Co dwa dni');
define('_ACA_AUTO_DAY_CH4', 'Co dwa dni bez weekend�w');
define('_ACA_AUTO_DAY_CH5', 'Tygodniowo');
define('_ACA_AUTO_DAY_CH6', 'Co dwa tygodnie');
define('_ACA_AUTO_DAY_CH7', 'Miesi�cznie');
define('_ACA_AUTO_DAY_CH9', 'Rocznie');
define('_ACA_AUTO_OPTION_NONE', 'Nie');
define('_ACA_AUTO_OPTION_NEW', 'Nowy u�ytkownik');
define('_ACA_AUTO_OPTION_ALL', 'Wszyscy u�ytkownicy');

//
define('_ACA_UNSUB_MESSAGE', 'Email z resygnacj�');
define('_ACA_UNSUB_SETTINGS', 'Ustawienia rezygnacji');
define('_ACA_AUTO_ADD_NEW_USERS', 'Auto zapis?');

// Update and upgrade messages
define('_ACA_NO_UPDATES', 'Obecnie nie jest dost�pna �adna aktualizacja.');
define('_ACA_VERSION', 'Wersja Acajoom');
define('_ACA_NEED_UPDATED', 'Pliki, kt�re powinny zosta� uaktualnione:');
define('_ACA_NEED_ADDED', 'Pliki, kt�re powinny zosta� dodane:');
define('_ACA_NEED_REMOVED', 'Pliki konieczne do usuni�cia:');
define('_ACA_FILENAME', 'Nazwa pliku:');
define('_ACA_CURRENT_VERSION', 'Aktualna wersja:');
define('_ACA_NEWEST_VERSION', 'Nowsza wersja:');
define('_ACA_UPDATING', 'Uaktualnienie');
define('_ACA_UPDATE_UPDATED_SUCCESSFULLY', 'Pliki zosta�y pomy�lnie zaktualizowane.');
define('_ACA_UPDATE_FAILED', 'Aktualizacja nieudana!');
define('_ACA_ADDING', 'Dodawanie');
define('_ACA_ADDED_SUCCESSFULLY', 'Pomy�lnie dodano.');
define('_ACA_ADDING_FAILED', 'Dodanie nie udane!');
define('_ACA_REMOVING', 'Usuwanie');
define('_ACA_REMOVED_SUCCESSFULLY', 'Usuni�to pomy�lnie.');
define('_ACA_REMOVING_FAILED', 'Usuwanie nieudane!');
define('_ACA_INSTALL_DIFFERENT_VERSION', 'Zainstaluj inn� wersj�');
define('_ACA_CONTENT_ADD', 'Dodaj zawarto��');
define('_ACA_UPGRADE_FROM', 'Import danych (newsletery i informacje o u�ytkownikach) z');
define('_ACA_UPGRADE_MESS', 'Nie ma �adnego ryzyka dla Twoich danych. <br> TTen proces po prostu importuje dane do bazy danych systemu Acajoom.');
define('_ACA_CONTINUE_SENDING', 'Kontynuacja wysy�ki');

// Acajoom message
define('_ACA_UPGRADE1', 'Mo�esz w prosty spos�b zaimportowa� u�ytkownik�w i newslettery z ');
define('_ACA_UPGRADE2', ' do Acajoom w panelu aktualizacji.');
define('_ACA_UPDATE_MESSAGE', 'Nowa wersja Acajoom jest dost�pna! ');
define('_ACA_UPDATE_MESSAGE_LINK', 'Kliknij aby zaktualizowa�!');
define('_ACA_CRON_SETUP', 'Aby autoresponder by� wysy�any nale�y skonfigurowa� zadania crona.');
define('_ACA_THANKYOU', 'Dzi�kujemy za wybranie Acajoom, Twojego partnera w komunikacji!');
define('_ACA_NO_SERVER', 'Aktualizacja niedost�pna, prosimy wr�ci� p�niej.');
define('_ACA_MOD_PUB', 'Acajoom modu� nie zosta� opublikowany.');
define('_ACA_MOD_PUB_LINK', 'Kliknij aby go opublikowa�!');
define('_ACA_IMPORT_SUCCESS', 'zaimportowano pomy�lnie');
define('_ACA_IMPORT_EXIST', 'subskrybent jest ju� w bazie danych');

// Acajoom\'s Guide
define('_ACA_GUIDE', ' Czarodziej');
define('_ACA_GUIDE_FIRST_ACA_STEP', '<p>Acajoom ma wiele ciekawych cech i ten Czarodziej b�dzie Ci� prowadzi� przez cztery proste kroki umo�liwiaj�ce przesy�anie newsletter�w i autoresponder�w!<p />');
define('_ACA_GUIDE_FIRST_ACA_STEP_DESC', 'Po pierwsze, musisz doda� list�.  Mamy tu dwa rodzaje list: newsletter lub autoresponder.' .
		'  W li�cie okre�la si� wszystkie parametry umo�liwiaj�ce wysy�anie newslettera lub autorespondera: nazw� nadawcy, uk�ad, komunikat powitalny dla subskrybenta itp...
<br><br>Tutaj mo�esz ustawi� swoj� pierwsz� list�: <a href="index2.php?option=com_acajoom&act=list" >utw�rz list�</a> i klkinij przycisk Nowy.');
define('_ACA_GUIDE_FIRST_ACA_STEP_UPGRADE', 'Acajoom dostarcza bardzo przyst�pne rozwi�zania umozliwiaj�ce import danych z innych system�w.<br>' .
		' Przejd� do panela uaktualnie� i wybierz sw�j poprzedni system aby zaimportowa� newslettery i u�ytkownik�w.<br><br>' .
		'<span style="color:#FF5E00;" >WA�NE: proces importu nie jest obarczony ryzykiem i nie wp�ynie w �aden spos�b na dane w Twoim starszym systemie newslettera</span><br>' .
		'Po zaimportowaniu danych b�dzie mo�liwe administrowanie subskrybentami i mailingami wprost z Acajoom.<br><br>');
define('_ACA_GUIDE_SECOND_ACA_STEP', 'Wspaniele, pierwsza lista jest ustawiona!  Teraz mo�esz napisa� sw�j pierwszy %s.  Aby go utworzy� id� do: ');
define('_ACA_GUIDE_SECOND_ACA_STEP_AUTO', 'Administracja auto-responderem');
define('_ACA_GUIDE_SECOND_ACA_STEP_NEWS', 'Administracja newsletterem');
define('_ACA_GUIDE_SECOND_ACA_STEP_FINAL', ' i wybierz %s. <br> Nast�pnie wybierz %s z listy rozwijalnej.  Utw�rz pierwszy mailing klikaj�c Nowy ');

define('_ACA_GUIDE_THRID_ACA_STEP_NEWS', 'Zanim wy�lesz sw�j pierwszy newsletter musisz sprawdzi� konfiguracj� poczty.  ' .
		'Przejd� do <a href="index2.php?option=com_acajoom&act=configuration" >strony konfiguracyjnej</a> aby zweryfikowa� ustawienia e-mail. <br>');
define('_ACA_GUIDE_THRID2_ACA_STEP_NEWS', '<br>Kiedy b�dziesz gotowy wr�� do menu newslettera, wybiezr mailing i kliknij Wy�lij');

define('_ACA_GUIDE_THRID_ACA_STEP_AUTOS', 'W celu wys�ania autrespondera najpierw musisz skonfigurowa� zadania crona na serwerze. ' .
		' Prosz� przej�� do swojego panela aby skonfigurowa� zadania crona.' .
		' <a href="index2.php?option=com_acajoom&act=configuration" >kliknij tu</a> aby dowiedzie� si� wi�cej o konfiguracji crona. <br>');

define('_ACA_GUIDE_MODULE', ' <br>Upewnij si� czy modu� Acajoom jest opublikowany aby odwiedzaj�cy mogli zapisa� si� na list�.');

define('_ACA_GUIDE_FOUR_ACA_STEP_NEWS', ' Teraz mo�esz r�wnie� ustawi� autoresponder.');
define('_ACA_GUIDE_FOUR_ACA_STEP_AUTOS', ' Teraz mo�esz r�wnie� ustawi� a newsletter.');

define('_ACA_GUIDE_FOUR_ACA_STEP', '<p><br>Gratulacje! Jeste� got�w do efektywnego komunikowania si� z u�ytkownikami i go��mi. Ten CZarodziej zako�czy prac� po wys�aniu drugiego mailingu. Mo�na go przywr�ci� w <a href="index2.php?option=com_acajoom&act=configuration" >panelu konfiguracyjnym</a>.' .
		'<br><br>  Je�li b�dziesz mie� jakie� pytania w czasie u�ywania Acajoom, prosz� zada� je na  ' .
		'<a target="_blank" href="http://www.acajoom.com/index.php?option=com_joomlaboard&Itemid=26&task=listcat&catid=22" >forum</a>. ' .
		' Mo�esz tam te� znale�� wiele informacji jak efektywnie komunikowa� si� ze swoimi subskrybentami <a href="http://www.acajoom.com/" target="_blank" >www.Acajoom.com</a>.' .
		'<p /><br><b>Dzi�kujemy, �e u�ywasz Acajoom. Twojego partnera w komunikacji!</b> ');
define('_ACA_GUIDE_TURNOFF', 'Czarodziej zosta� wy��czony!');
define('_ACA_STEP', 'STEP ');

// Acajoom Install
define('_ACA_INSTALL_CONFIG', 'Konfiguracja Acajoom');
define('_ACA_INSTALL_SUCCESS', 'Pomy�lnie zainstalowane');
define('_ACA_INSTALL_ERROR', 'B��d instalacji');
define('_ACA_INSTALL_BOT', 'Acajoom Plugin (Bot)');
define('_ACA_INSTALL_MODULE', 'Modu� Acajoom');
//Others
define('_ACA_JAVASCRIPT','!UWAGA! obs�uga javascript musi by� w��czona w czasie tej operacji.');
define('_ACA_EXPORT_TEXT','Eksportowani subskrybenci s� widoczni na liscie wyboru. <br>Eksportuj subskrybent�w z listy');
define('_ACA_IMPORT_TIPS','Import subskrybent�w. Informacja w pliku powinna mie� nast�puj�c� struktur�: <br>' .
		'Name,email,receiveHTML(1/0),<span style="color: rgb(255, 0, 0);">confirmed(1/0)</span>');
define('_ACA_SUBCRIBER_EXIT', 'jest ju� subskrybentem');
define('_ACA_GET_STARTED', 'Klknij tu by rozpocz��!');

//News since 1.0.1
define('_ACA_WARNING_1011','Uwaga: 1011: Aktualizacja nie b�dzie mo�liwa z powodu ogranicze� serwera.');
define('_ACA_SEND_MAIL_FROM_TIPS', 'Wybierz adres e-mail, kt�ry b�dzie widoczny jako nadawca.');
define('_ACA_SEND_MAIL_NAME_TIPS', 'Wybierz imi�, kt�re b�dzie widoczne jako nadawca.');
define('_ACA_MAILSENDMETHOD_TIPS', 'Wybierz spos�b wysy�ki e-maili: PHP mail , <span>Sendmail</span> lub SMTP Server.');
define('_ACA_SENDMAILPATH_TIPS', 'To jest katalog Mail serwera');
define('_ACA_LIST_T_TEMPLATE', 'Szablon');
define('_ACA_NO_MAILING_ENTERED', 'Mailing nie ustawiony');
define('_ACA_NO_LIST_ENTERED', 'Lista nie ustawiona');
define('_ACA_SENT_MAILING' , 'Wys�any mailing');
define('_ACA_SELECT_FILE', 'Prosze wybra� plik do ');
define('_ACA_LIST_IMPORT', 'Zazanacz listy, kt�re chcesz dowi�za� do subskrybent�w.');
define('_ACA_PB_QUEUE', 'Subskrybent sopisany, ale wyst�pi� problem z po��czeniem go z list�. Dokonaj r�cznego wyboru.');
define('_ACA_UPDATE_MESS1' , 'Zalecana aktualizacja!');
define('_ACA_UPDATE_MESS2' , '�atki i drobne poprawki.');
define('_ACA_UPDATE_MESS3' , 'Nowa wersja.');
define('_ACA_UPDATE_MESS5' , 'Joomla 1.5 - potrzebna aktualizacja.');
define('_ACA_UPDATE_IS_AVAIL' , ' jest dost�pna!');
define('_ACA_NO_MAILING_SENT', 'Mailing niewys�any!');
define('_ACA_SHOW_LOGIN', 'Poka� formularz logowania');
define('_ACA_SHOW_LOGIN_TIPS', 'Wybierz aby pokaza� formularz logowania do panela Acajoom na stronie.');
define('_ACA_LISTS_EDITOR', 'Edytor w opisie listy');
define('_ACA_LISTS_EDITOR_TIPS', 'Wybierz aby u�y� edytor HTML w opisie listy.');
define('_ACA_SUBCRIBERS_VIEW', 'Przegl�daj subskrybent�w');

//News since 1.0.2
define('_ACA_FRONTEND_SETTINGS' , 'Ustawienia strony frontowej' );
define('_ACA_SHOW_LOGOUT', 'Poka� przycisk wylogowania');
define('_ACA_SHOW_LOGOUT_TIPS', 'Wybierza tak aby pokaza� przycisk wylogowania w panelu Acajoom na stronie.');

//News since 1.0.3 CB integration
define('_ACA_CONFIG_INTEGRATION', 'Integracja');
define('_ACA_CB_INTEGRATION', 'Integracja z Community Builder');
define('_ACA_INSTALL_PLUGIN', 'Wtyczka do Community Builder (Integracja z Acajoom) ');
define('_ACA_CB_PLUGIN_NOT_INSTALLED', 'Wtyczka Acajoom do Community Builder nie jest jeszcze zainstalowana!');
define('_ACA_CB_PLUGIN', 'Listy przy rejestracji');
define('_ACA_CB_PLUGIN_TIPS', 'Wybierz aby pokaza� listy wysy�kowe w formularzu rejestracji z komponentu CB');
define('_ACA_CB_LISTS', 'Listy IDs');
define('_ACA_CB_LISTS_TIPS', 'TO POLE JEST WYMAGANE. Wpisz numer identyfikacyjny listy, kt�r� maj� subskrybowa� u�ytkownicy. Kolejne identyfikatory oddziel przecinkiem (,) (0 pokazuje wszystkie listy)');
define('_ACA_CB_INTRO', 'Tekst wprowadzaj�cy');
define('_ACA_CB_INTRO_TIPS', 'Tekst, kt�ry b�dzie si� pojawia� przed wykazem. JE�LI ZOSTAWISZ PUSTE NIC NIE B�DZIE SI� WY�WIETLA�.  Mo�esz u�y� tag�w HTML.');
define('_ACA_CB_SHOW_NAME', 'Poka� nazw� listy');
define('_ACA_CB_SHOW_NAME_TIPS', 'Wybierz je�li chcesz wy�wietla� nazwy list subskrypcyjnych po tekscie wprowadzaj�cym.');
define('_ACA_CB_LIST_DEFAULT', 'Ustaw list� jako domy�ln�');
define('_ACA_CB_LIST_DEFAULT_TIPS', 'Wybierz je�li chcesz ustawi� list� jako domy�ln�.');
define('_ACA_CB_HTML_SHOW', 'Poka� - "Wysy�ka HTML"');
define('_ACA_CB_HTML_SHOW_TIPS', 'Wybierz je�li chcesz aby subskrybenci mogli zadecydowa� czy chc� otrzymywa� wiadomo�ci w formacie HTML.');
define('_ACA_CB_HTML_DEFAULT', 'Domy�lnie wysy�ka HTML');
define('_ACA_CB_HTML_DEFAULT_TIPS', 'Opcja ustawia domy�lny format mailingu.');

// Since 1.0.4
define('_ACA_BACKUP_FAILED', 'Nie mo�na zarchiwizowa� pliku! Plik nie b�dzie zast�piony.');
define('_ACA_BACKUP_YOUR_FILES', 'Starsza wersja plik�w zostan� zariwizowane w nast�puj�cym katalogu:');
define('_ACA_SERVER_LOCAL_TIME', 'SLokalny czas serwera');
define('_ACA_SHOW_ARCHIVE', 'Poka� przycisk archiwum');
define('_ACA_SHOW_ARCHIVE_TIPS', 'Wybierz aby pokaza� przycisk archiwum w wykazie newsteller�w na stronie frontowej');
define('_ACA_LIST_OPT_TAG', 'Zak�adki');
define('_ACA_LIST_OPT_IMG', 'Ilustracje');
define('_ACA_LIST_OPT_CTT', 'Zawarto��');
define('_ACA_INPUT_NAME_TIPS', 'Wpisz swoje imi� i nazwisko (koniecznie imi� pierwsze)');
define('_ACA_INPUT_EMAIL_TIPS', 'Wpisz sw�j adres e-mail (Upewnij si� czy jest to prawid�owy i aktualny adres.)');
define('_ACA_RECEIVE_HTML_TIPS', 'Wybierz TAK, je��i akceptujesz maile w formacie HTML - NIE aby otrzymywa� tylko wiadomo�ci w formacie tekstowym');
define('_ACA_TIME_ZONE_ASK_TIPS', 'Wybierz swoj� stref� czasow�.');

// Since 1.0.5
define('_ACA_FILES' , 'Pliki');
define('_ACA_FILES_UPLOAD' , 'Wy�lij');
define('_ACA_MENU_UPLOAD_IMG' , 'Wy�lij obrazki');
define('_ACA_TOO_LARGE' , 'Za du�y plik. Makszmalnz doyowlonz roymiar to');
define('_ACA_MISSING_DIR' , 'Katalog nie istnieje');
define('_ACA_IS_NOT_DIR' , 'Katalog nie istnieje lub plik nieprawidlowy.');
define('_ACA_NO_WRITE_PERMS' , 'Katalog nie istnieje lub nie masz uprawnie� do zapisu.');
define('_ACA_NO_USER_FILE' , 'Nie wybra�e� �adnych plik�w do wys�ania.');
define('_ACA_E_FAIL_MOVE' , 'Przesuni�cie pliku niemo�liwe.');
define('_ACA_FILE_EXISTS' , 'Plik ju� istnieje.');
define('_ACA_CANNOT_OVERWRITE' , 'Plik ju� istnieje i nie mo�e zosta� nadpisany.');
define('_ACA_NOT_ALLOWED_EXTENSION' , 'Niedupuszczalne rozszerzenie pliku.');
define('_ACA_PARTIAL' , 'Ten plik by� cz�ciowo wys�any.');
define('_ACA_UPLOAD_ERROR' , 'B��d wysy�ki:');
define('DEV_NO_DEF_FILE' , 'Ten plik by� cz�ciowo wys�any.');

// already exist but modified  added a <br/ on first line and added [SUBSCRIPTIONS] line>
define('_ACA_CONTENTREP', '[SUBSCRIPTIONS] = Ten element b�dzie zast�piony linkiem do subskrypcji.' .
		' Pole <strong>wymagane</strong> aby Acajoom pracowa� poprawnie.<br>' .
		'Je�li umie�cisz w tym polu inn� zawarto��, b�dzie ona wy�wietlana we wszystkich listach wysy�kowych.' .
		' <br> Dodaj na ko�cu wiadomo�� o subskrypcji.  Acajoom automatycznie doda link dla subskrybenta umo�liwiaj�cy zmian� ustawie� subskrybcji lub wypisanie si� z listy.');

// since 1.0.6
define('_ACA_NOTIFICATION', 'Powiadomienie');  // shortcut for Email notification
define('_ACA_NOTIFICATIONS', 'Powiadomienia');
define('_ACA_USE_SEF', 'SEF w mailingach');
define('_ACA_USE_SEF_TIPS', 'Zalecamy ustawienie tej opcji na NIE.  Jednak�e, je�li chcesz aby adresy URL za��czone w mailingach u�ywa�y opcji SEF, wybierz TAK.' .
		' <br><b> Linki b�da dzia�a�y tak samo dla obu opcji. </b> ');
define('_ACA_ERR_NB' , 'B��d #: ERR');
define('_ACA_ERR_SETTINGS', 'B��d ustawie�');
define('_ACA_ERR_SEND' ,'Wy�lij raport o b��dach');
define('_ACA_ERR_SEND_TIPS' ,' Je�li chcesz pom�c w ulepszeniu naszego produktu wybierz TAK.  Spowoduje to przes�anie raportu do nas.  WI�cej powiadomie� nie b�dzie wi�c potrzeba ;-) <br> <b>PRYWATNE INFORMACJE NIE S� PRZESY�ANE</b>.  Nie wiemy sk�d pochodz� wiadomo�ci o b��dach. Wysy�ana jest tylko informacja o Acajoom , ustawieniach PHP i zapytaniach SQL. ');
define('_ACA_ERR_SHOW_TIPS' ,'Wybierz Tak aby wy�wietlac numer b��du na ekranie.  U�ywane g�ownie w celu wykrywania i usuwania usterek. ');
define('_ACA_ERR_SHOW' ,'Poka� b��dy');
define('_ACA_LIST_SHOW_UNSUBCRIBE', 'Poka� link do wypisania si�');
define('_ACA_LIST_SHOW_UNSUBCRIBE_TIPS', 'Wybierz aby pokaza� link do wypisania si� lub zmiany ustawie� subskrypcji list wysy�kowych w stopce ka�dej wiadomo�ci. <br> Ustawienie NIE wy��cza stopk� i linki.');
define('_ACA_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">WA�NE POWIADMOMIENIE!</span> <br>Je�li dokona�e� aktualizacji z poprzedniej wersji Acajoom powiniene� zaktualizowa� struktur� bazy danych klikaj�c w nast�puj�cy przycisk (Twoje dane zostan� nienaruszone)');
define('_ACA_UPDATE_INSTALL_BTN' , 'Aktualizacja tabel i konfiguracji');
define('_ACA_MAILING_MAX_TIME', 'Maksymalny czas kolejki' );
define('_ACA_MAILING_MAX_TIME_TIPS', 'Zdefiniuj maksymalny czas dla wszystkich maili wysy�anych w kolejce. Zalecamy warto�� mi�dzy 30s a 2min.');

// virtuemart integration beta
define('_ACA_VM_INTEGRATION', 'Integracja z VirtueMart');
define('_ACA_VM_COUPON_NOTIF', 'Zawiadomienie o kupinie ID');
define('_ACA_VM_COUPON_NOTIF_TIPS', 'Wybierz numer ID mailingu w kt�rym zamierzasz wys�a� kupon rabatowy dla swoich klient�w.');
define('_ACA_VM_NEW_PRODUCT', 'Zawiadomienie o nowych produktach ID');
define('_ACA_VM_NEW_PRODUCT_TIPS', 'Wybiezr numer ID mailingu w kt�rym zamierzasz zawiadomi� o nowych produktach.');

// since 1.0.8
// create forms for subscriptions
define('_ACA_FORM_BUTTON', 'Utw�rz formularz');
define('_ACA_FORM_COPY', 'Kod HTML');
define('_ACA_FORM_COPY_TIPS', 'Skopiuj wygenerowany kod HTML na twoj� stron�.');
define('_ACA_FORM_LIST_TIPS', 'Wybierz list� w kt�rej chcesz za��czy� formularz');
// update messages
define('_ACA_UPDATE_MESS4' , 'To nie mo�e by� zaktualiyowane automatycznie.');
define('_ACA_WARNG_REMOTE_FILE' , 'Brak mo�liwo�ci otrzymania zdalnego pliku.');
define('_ACA_ERROR_FETCH' , 'B��d przenoszonego pliku.');

define('_ACA_CHECK' , 'Wybierz');
define('_ACA_MORE_INFO' , 'Wi�cej informacji');
define('_ACA_UPDATE_NEW' , 'Aktualizacja do nowszej wersji');
define('_ACA_UPGRADE' , 'Aktualizacja do wy�szego produktu');
define('_ACA_DOWNDATE' , 'Powr�t do poprzedniej wersji');
define('_ACA_DOWNGRADE' , 'Powr�t do podstawowego produktu');
define('_ACA_REQUIRE_JOOM' , 'Joomla wymagana');
define('_ACA_TRY_IT' , 'Wypr�buj!');
define('_ACA_NEWER', 'Nowsza');
define('_ACA_OLDER', 'Starsza');
define('_ACA_CURRENT', 'Aktualna');

// since 1.0.9
define('_ACA_CHECK_COMP', 'Wypr�buj jeden z innych  komponent�w');
define('_ACA_MENU_VIDEO' , 'Wideo tutorial');
define('_ACA_AUTO_SCHEDULE', 'Przypomnienie');
define('_ACA_SCHEDULE_TITLE', 'Ustawienia funkcji automatycznego przypomnienia');
define('_ACA_ISSUE_NB_TIPS' , 'Publikowane numery generowane s� automatycznie przez system' );
define('_ACA_SEL_ALL' , 'Wszystkie mailingi');
define('_ACA_SEL_ALL_SUB' , 'Wszystkie listy');
define('_ACA_INTRO_ONLY_TIPS' , 'Je�li zaznaczysz tylko informacja wst�pna z artyku�u z linkiem czytaj wi�cej, b�dzie za��czona do mailingu.' );
define('_ACA_TAGS_TITLE' , 'Zak�adka zawarto�ci');
define('_ACA_TAGS_TITLE_TIPS' , 'Skopijuj i wklej t� zak�adk� do mailingu, w miejscu w kt�rym chcesz wy�wietli� zawarto��.');
define('_ACA_PREVIEW_EMAIL_TEST', 'Podaj adres email, na kt�ry zostanie wys�any testowy mailing');
define('_ACA_PREVIEW_TITLE' , 'Podgl�d');
define('_ACA_AUTO_UPDATE' , 'Nowe powiadomienie o aktualizacji');
define('_ACA_AUTO_UPDATE_TIPS' , 'Wybierz tak je�li chcesz zosta� powiadomiony o nowej aktualizacji towjego komponentu. <br />WA�NE!! Funkcja poka� tips-y musi by� w��czona aby powiadomienie dzia�a�o.');

// since 1.1.0
define('_ACA_LICENSE' , 'Informacja o licencji');


// since 1.1.1
define('_ACA_NEW' , 'New');
define('_ACA_SCHEDULE_SETUP', 'In order for the autoresponders to be sent you need to setup scheduler in the configuration.');
define('_ACA_SCHEDULER', 'Scheduler');
define('_ACA_ACAJOOM_CRON_DESC' , 'if you do not have access to a cron task manager on your website, you can register for a Free Acajoom Cron account at:' );
define('_ACA_CRON_DOCUMENTATION' , 'You can find further information on setting up the Acajoom Scheduler at the following url:');
define('_ACA_CRON_DOC_URL' , '<a href="http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29"
 target="_blank">http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29</a>' );
define( '_ACA_QUEUE_PROCESSED' , 'Queue processed succefully...' );
define( '_ACA_ERROR_MOVING_UPLOAD' , 'Error moving imported file' );

//since 1.1.4
define( '_ACA_SCHEDULE_FREQUENCY' , 'Scheduler frequency' );
define( '_ACA_CRON_MAX_FREQ' , 'Scheduler max frequency' );
define( '_ACA_CRON_MAX_FREQ_TIPS' , 'Specify the maximum frequency the scheduler can run ( in minutes ).  This will limit the scheduler even if the cron task is set up more frequently.' );
define( '_ACA_CRON_MAX_EMAIL' , 'Maximum emails per task' );
define( '_ACA_CRON_MAX_EMAIL_TIPS' , 'Specify the maximum number of emails sent per task (0 unlimited).' );
define( '_ACA_CRON_MINUTES' , ' minutes' );
define( '_ACA_SHOW_SIGNATURE' , 'Show email footer' );
define( '_ACA_SHOW_SIGNATURE_TIPS' , 'Whether or not you want to promote Acajoom in the footer of the emails.' );
define( '_ACA_QUEUE_AUTO_PROCESSED' , 'Auto-responders processed successfully...' );
define( '_ACA_QUEUE_NEWS_PROCESSED' , 'Scheduled newsletters processed successfully...' );
define( '_ACA_MENU_SYNC_USERS' , 'Sync Users' );
define( '_ACA_SYNC_USERS_SUCCESS' , 'Users Synchronization Successful!' );

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Yes' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'No' );
if (!defined('_HI')) define( '_HI', 'Hi' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Top' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Bottom' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_ACA_TITLE_ONLY_TIPS' , 'If you select this only the title of the article will be inserted into the mailing as a link to the complete article on your site.');
define('_ACA_TITLE_ONLY' , 'Title Only');
define('_ACA_FULL_ARTICLE_TIPS' , 'If you select this the complete article will be inserted into the mailing');
define('_ACA_FULL_ARTICLE' , 'Full Article');
define('_ACA_CONTENT_ITEM_SELECT_T', 'Select a content item to append to the message. <br />Copy and paste the <b>content tag</b> into the mailing.  You can choose to have the full text, intro only, or title only with (0, 1, or 2 respectively). ');
define('_ACA_SUBSCRIBE_LIST2', 'Mailing list(s)');

// smart-newsletter function
define('_ACA_AUTONEWS', 'Smart-Newsletter');
define('_ACA_MENU_AUTONEWS', 'Smart-Newsletters');
define('_ACA_AUTO_NEWS_OPTION', 'Smart-Newsletter options');
define('_ACA_AUTONEWS_FREQ', 'Newsletter Frequency');
define('_ACA_AUTONEWS_FREQ_TIPS', 'Specify the frequency at which you want to send the smart-newsletter.');
define('_ACA_AUTONEWS_SECTION', 'Article Section');
define('_ACA_AUTONEWS_SECTION_TIPS', 'Specify the section you want to choose the articles from.');
define('_ACA_AUTONEWS_CAT', 'Article Category');
define('_ACA_AUTONEWS_CAT_TIPS', 'Specify the category you want to choose the articles from (All for all article in that section).');
define('_ACA_SELECT_SECTION', 'Select a section');
define('_ACA_SELECT_CAT', 'All Categories');
define('_ACA_AUTO_DAY_CH8', 'Quaterly');
define('_ACA_AUTONEWS_STARTDATE', 'Start date');
define('_ACA_AUTONEWS_STARTDATE_TIPS', 'Specify the date you want to start sending the Smart Newsletter.');
define('_ACA_AUTONEWS_TYPE', 'Content rendering');// how we see the content which is included in the newsletter
define('_ACA_AUTONEWS_TYPE_TIPS', 'Full Article: will include the entire article in the newsletter.<br />' .
		'Intro only: will include only the introduction of the article in the newsletter.<br/>' .
		'Title only: will include only the title of the article in the newsletter.');
define('_ACA_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = This will be replaced by the Smart-newsletter.' );

//since 1.1.3
define('_ACA_MALING_EDIT_VIEW', 'Create / View Mailings');
define('_ACA_LICENSE_CONFIG' , 'License' );
define('_ACA_ENTER_LICENSE' , 'Enter license');
define('_ACA_ENTER_LICENSE_TIPS' , 'Enter your license number and save it.');
define('_ACA_LICENSE_SETTING' , 'License settings' );
define('_ACA_GOOD_LIC' , 'Your license is valid.' );
define('_ACA_NOTSO_GOOD_LIC' , 'Your license is not valid: ' );
define('_ACA_PLEASE_LIC' , 'Please contact Acajoom support to upgrade your license ( license@acajoom.com ).' );

define('_ACA_DESC_PLUS', 'Acajoom Plus is the first sequencial auto-responders for Joomla CMS.  ' . _ACA_FEATURES );
define('_ACA_DESC_PRO', 'Acajoom PRO the ultimate mailing system for Joomla CMS.  ' . _ACA_FEATURES );

//since 1.1.4
define('_ACA_ENTER_TOKEN' , 'Enter token');
define('_ACA_ENTER_TOKEN_TIPS' , 'Please enter your token number you received by email when you purchased Acajoom. ');
define('_ACA_ACAJOOM_SITE', 'Acajoom site:');
define('_ACA_MY_SITE', 'My site:');
define( '_ACA_LICENSE_FORM' , ' ' .
 		'Click here to go to the license form.</a>' );
define('_ACA_PLEASE_CLEAR_LICENSE' , 'Please clear the license field so it is empty and try again.<br />  If the problem persists, ' );
define( '_ACA_LICENSE_SUPPORT' , 'If you still have questions, ' . _ACA_PLEASE_LIC );
define( '_ACA_LICENSE_TWO' , 'you can get your license manual by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. '
			. _ACA_LICENSE_FORM . '<br /><br/>' . _ACA_LICENSE_SUPPORT );
define('_ACA_ENTER_TOKEN_PATIENCE', 'After saving your token a license will be generated automatically. ' .
		' Usually the token is validated in 2 minutes.  However, in some cases it can take up to 15 minutes.<br />' .
		'<br />Check back this control panel in few minutes.  <br /><br />' .
		'If you didn\'t receive a valid license key in 15 minutes, '. _ACA_LICENSE_TWO);
define( '_ACA_ENTER_NOT_YET' , 'Your token has not yet been validated.');
define( '_ACA_UPDATE_CLICK_HERE' , 'Pleae visit <a href="http://www.acajoom.com" target="_blank">www.acajoom.com</a> to download the newest version.');
define( '_ACA_NOTIF_UPDATE' , 'To be notified of new updates enter your email address and click subscribe ');

define('_ACA_THINK_PLUS', 'If you want more out of your mailing system think Plus!');
define('_ACA_THINK_PLUS_1', 'Sequential auto-responders');
define('_ACA_THINK_PLUS_2', 'Schedule the delivery of your newsletter for a predefined date');
define('_ACA_THINK_PLUS_3', 'No more server limitation');
define('_ACA_THINK_PLUS_4', 'and much more...');


//since 1.2.2
define( '_ACA_LIST_ACCESS', 'List Access' );
define( '_ACA_INFO_LIST_ACCESS', 'Specify what group of users can view and subscribe to this list' );
define( 'ACA_NO_LIST_PERM', 'You don\'t have enough permission to subscribe to this list' );

//Archive Configuration
 define('_ACA_MENU_TAB_ARCHIVE', 'Archive');
 define('_ACA_MENU_ARCHIVE_ALL', 'Archive All');

//Archive Lists
 define('_FREQ_OPT_0', 'None');
 define('_FREQ_OPT_1', 'Every Week');
 define('_FREQ_OPT_2', 'Every 2 Weeks');
 define('_FREQ_OPT_3', 'Every Month');
 define('_FREQ_OPT_4', 'Every Quarter');
 define('_FREQ_OPT_5', 'Every Year');
 define('_FREQ_OPT_6', 'Other');

define('_DATE_OPT_1', 'Created date');
define('_DATE_OPT_2', 'Modified date');

define('_ACA_ARCHIVE_TITLE', 'Setting up auto-archive frequency');
define('_ACA_FREQ_TITLE', 'Archive frequency');
define('_ACA_FREQ_TOOL', 'Define how often you want the Archive Manager to arhive your website content.');
define('_ACA_NB_DAYS', 'Number of days');
define('_ACA_NB_DAYS_TOOL', 'This is only for the Other option! Please specify the number of days between each Archive.');
define('_ACA_DATE_TITLE', 'Date type');
define('_ACA_DATE_TOOL', 'Define if the archived should be done on the created date or modified date.');

define('_ACA_MAINTENANCE_TAB', 'Maintenance settings');
define('_ACA_MAINTENANCE_FREQ', 'Maintenance frequency');
define( '_ACA_MAINTENANCE_FREQ_TIPS', 'Specify the frequency at which you want the maintenance routine to run.' );
define( '_ACA_CRON_DAYS' , 'hour(s)' );

define( '_ACA_LIST_NOT_AVAIL', 'There is no list available.');
define( '_ACA_LIST_ADD_TAB', 'Add/Edit' );

define( '_ACA_LIST_ACCESS_EDIT', 'Mailing Add/Edit Access' );
define( '_ACA_INFO_LIST_ACCESS_EDIT', 'Specify what group of users can add or edit a new mailing for this list' );
define( '_ACA_MAILING_NEW_FRONT', 'Createa New Mailing' );

define('_ACA_AUTO_ARCHIVE', 'Auto-Archive');
define('_ACA_MENU_ARCHIVE', 'Auto-Archive');

//Extra tags:
define('_ACA_TAGS_ISSUE_NB', '[ISSUENB] = This will be replaced by the issue number of  the newsletter.');
define('_ACA_TAGS_DATE', '[DATE] = This will be replaced by the sent date.');
define('_ACA_TAGS_CB', '[CBTAG:{field_name}] = This will be replaced by the value taken from the Community Builder field: eg. [CBTAG:firstname] ');
define( '_ACA_MAINTENANCE', 'Maintenance' );

define('_ACA_THINK_PRO', 'When you have professional needs, you use professional components!');
define('_ACA_THINK_PRO_1', 'Smart-Newsletters');
define('_ACA_THINK_PRO_2', 'Define access level for your list');
define('_ACA_THINK_PRO_3', 'Define who can edit/add mailings');
define('_ACA_THINK_PRO_4', 'More tags: add your CB fields');
define('_ACA_THINK_PRO_5', 'Joomla contents Auto-archive');
define('_ACA_THINK_PRO_6', 'Database optimization');

define('_ACA_LIC_NOT_YET', 'Your license is not yet valid.  Please check the license Tab in the configuration panel.');
define('_ACA_PLEASE_LIC_GREEN' , 'Make sure to provide the green information at the top of the tab to our support team.' );

define('_ACA_FOLLOW_LINK' , 'Get Your License');
define( '_ACA_FOLLOW_LINK_TWO' , 'You can get your license by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. ');
define( '_ACA_ENTER_TOKEN_TIPS2', ' Then click on Apply button in the top right menu.' );
define( '_ACA_ENTER_LIC_NB', 'Enter your License' );
define( '_ACA_UPGRADE_LICENSE', 'Upgrade Your License');
define( '_ACA_UPGRADE_LICENSE_TIPS' , 'If you received a token to upgrade your license please enter it here, click Apply and proceed to number <b>2</b> to get your new license number.' );

define( '_ACA_MAIL_FORMAT', 'Encoding format' );
define( '_ACA_MAIL_FORMAT_TIPS', 'What format do you want to use for encoding your mailings, Text only or MIME' );
define( '_ACA_ACAJOOM_CRON_DESC_ALT', 'If you do not have access to a cron task manager on your website, you can use the Free jCron component to create a cron task from your website.' );

//since 1.3.1
define('_ACA_SHOW_AUTHOR', 'Show Author\'s Name');
define('_ACA_SHOW_AUTHOR_TIPS', 'Select Yes if you want to add the name of the author when you add an article in the Mailing');

//since 1.3.5
define('_ACA_REGWARN_NAME','Podaj swoje nazwisko i imie.');
define('_ACA_REGWARN_MAIL','Podaj poprawny adres e-mail.');

//since 1.5.6
define('_ACA_ADDEMAILREDLINK_TIPS','If you select Yes, the e-mail of the user will be added as a parameter at the end of your redirect URL (the redirect link for your module or for an external Acajoom form).<br/>That can be useful if you want to execute a special script in your redirect page.');
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