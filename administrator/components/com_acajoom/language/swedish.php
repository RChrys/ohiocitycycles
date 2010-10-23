<?php
if ( !defined('_JEXEC') && defined('_VALID_MOS') ) define( '_JEXEC', true );
 defined('_JEXEC') or die('...Direct Access to this location is not allowed...');

/**
 * <p>Swedish language file.</p>
 * @copyright (c) 2006 Acajoom Services / All Rights Reserved
 * @author Janne Karlsson<support@acajoom.com>
 * @version $Id: swedish.php 491 2007-02-01 22:56:07Z divivo $
* @link http://www.joobisoft.com
 */

### General ###
 //acajoom Description
define('_ACA_DESC_NEWS', 'Acajoom �r en mailinglista, nyhetsbrev, auto-respondrar, och ett uppf�ljningsverktyg f�r att kommunicera effektivt med dina anv�ndare och kunder. ' .
		'Acajoom, Din Kommunikations Partner!');
define('_ACA_FEATURES', 'Acajoom, din kommunikationspartner!');

// Type of lists
define('_ACA_NEWSLETTER', 'Nyhetsbrev');
define('_ACA_AUTORESP', 'Auto-responder');
define('_ACA_AUTORSS', 'Auto-RSS');
define('_ACA_ECARD', 'eKort');
define('_ACA_POSTCARD', 'Postkort');
define('_ACA_PERF', 'Prestanda');
define('_ACA_COUPON', 'Kupong');
define('_ACA_CRON', 'Cron Uppgift');
define('_ACA_MAILING', 'Maila');
define('_ACA_LIST', 'Lista');

 //acajoom Menu
define('_ACA_MENU_LIST', 'List Hanterare');
define('_ACA_MENU_SUBSCRIBERS', 'Prenumeranter');
define('_ACA_MENU_NEWSLETTERS', 'Nyhetsbrev');
define('_ACA_MENU_AUTOS', 'Auto-respondrar');
define('_ACA_MENU_COUPONS', 'Kuponger');
define('_ACA_MENU_CRONS', 'Cron Uppgifter');
define('_ACA_MENU_AUTORSS', 'Auto-RSS');
define('_ACA_MENU_ECARD', 'eKort');
define('_ACA_MENU_POSTCARDS', 'Postkort');
define('_ACA_MENU_PERFS', 'Prestanda');
define('_ACA_MENU_TAB_LIST', 'Listor');
define('_ACA_MENU_MAILING_TITLE', 'Mail');
define('_ACA_MENU_MAILING' , 'Mailande f�r ');
define('_ACA_MENU_STATS', 'Statistik');
define('_ACA_MENU_STATS_FOR', 'Statistik f�r ');
define('_ACA_MENU_CONF', 'Konfiguration');
define('_ACA_MENU_UPDATE', 'Import');
define('_ACA_MENU_ABOUT', 'Om');
define('_ACA_MENU_LEARN', 'Utbildningscenter');
define('_ACA_MENU_MEDIA', 'Media Hanterare');
define('_ACA_MENU_HELP', 'Hj�lp');
define('_ACA_MENU_CPANEL', 'CPanel');
define('_ACA_MENU_IMPORT', 'Importera');
define('_ACA_MENU_EXPORT', 'Exportera');
define('_ACA_MENU_SUB_ALL', 'Prenumerara Alla');
define('_ACA_MENU_UNSUB_ALL', 'Ej Prenumerera Alla');
define('_ACA_MENU_VIEW_ARCHIVE', 'Arkiv');
define('_ACA_MENU_PREVIEW', 'F�rhandsgranska');
define('_ACA_MENU_SEND', 'Skicka');
define('_ACA_MENU_SEND_TEST', 'Skicka Test E-post');
define('_ACA_MENU_SEND_QUEUE', 'Process K�');
define('_ACA_MENU_VIEW', 'Visa');
define('_ACA_MENU_COPY', 'Kopiera');
define('_ACA_MENU_VIEW_STATS' , 'Visa stats');
define('_ACA_MENU_CRTL_PANEL' , ' Kontrollpanel');
define('_ACA_MENU_LIST_NEW' , ' Skapa en Lista');
define('_ACA_MENU_LIST_EDIT' , ' Redigera en Lista');
define('_ACA_MENU_BACK', 'Tillbaka');
define('_ACA_MENU_INSTALL', 'Installation');
define('_ACA_MENU_TAB_SUM', 'Summering');
define('_ACA_STATUS' , 'Status');

// messages
define('_ACA_ERROR' , ' Ett fel intr�ffade! ');
define('_ACA_SUB_ACCESS' , 'Beh�righets r�ttigheter');
define('_ACA_DESC_CREDITS', 'Krediter');
define('_ACA_DESC_INFO', 'Information');
define('_ACA_DESC_HOME', 'Hemsida');
define('_ACA_DESC_MAILING', 'Maillista');
define('_ACA_DESC_SUBSCRIBERS', 'Prenumeranter');
define('_ACA_PUBLISHED','Publicerad');
define('_ACA_UNPUBLISHED','Opublicerad');
define('_ACA_DELETE','Radera');
define('_ACA_FILTER','Filter');
define('_ACA_UPDATE','Uppdatera');
define('_ACA_SAVE','Spara');
define('_ACA_CANCEL','Avbryt');
define('_ACA_NAME','Namn');
define('_ACA_EMAIL','E-post');
define('_ACA_SELECT','V�lj');
define('_ACA_ALL','Alla');
define('_ACA_SEND_A', 'Skicka en ');
define('_ACA_SUCCESS_DELETED', ' raderades');
define('_ACA_LIST_ADDED', 'Lista skapades');
define('_ACA_LIST_COPY', 'Lista kopierades');
define('_ACA_LIST_UPDATED', 'Lista uppdaterades');
define('_ACA_MAILING_SAVED', 'Mailande sparades.');
define('_ACA_UPDATED_SUCCESSFULLY', 'uppdaterat.');

### Subscribers information ###
//subscribe and unsubscribe info
define('_ACA_SUB_INFO', 'Prenumerations information');
define('_ACA_VERIFY_INFO', 'Verifiera l�nken du la till, viss information saknas.');
define('_ACA_INPUT_NAME', 'Namn');
define('_ACA_INPUT_EMAIL', 'E-post');
define('_ACA_RECEIVE_HTML', 'Mottag HTML?');
define('_ACA_TIME_ZONE', 'Tids Zon');
define('_ACA_BLACK_LIST', 'Svarta listan');
define('_ACA_REGISTRATION_DATE', 'Anv�ndares registreringsdatum');
define('_ACA_USER_ID', 'Anv�ndar ID');
define('_ACA_DESCRIPTION', 'Beskrivning');
define('_ACA_ACCOUNT_CONFIRMED', 'Ditt konto har aktiverats.');
define('_ACA_SUB_SUBSCRIBER', 'Prenumerant');
define('_ACA_SUB_PUBLISHER', 'Publisher');
define('_ACA_SUB_ADMIN', 'Administrator');
define('_ACA_REGISTERED', 'Registered');
define('_ACA_SUBSCRIPTIONS', 'Prenumerationer');
define('_ACA_SEND_UNSUBCRIBE', 'Skicka prenumerera ej meddelande');
define('_ACA_SEND_UNSUBCRIBE_TIPS', 'Klicka Ja f�r att skicka ett prenumerera ej e-post bekr�ftelse meddelande.');
define('_ACA_SUBSCRIBE_SUBJECT_MESS', 'Bekr�fta din prenumeration');
define('_ACA_UNSUBSCRIBE_SUBJECT_MESS', 'Prenumerera Ej bekr�ftelse');
define('_ACA_DEFAULT_SUBSCRIBE_MESS', 'Hej ! [NAME],<br />' .
		'Bara ett steg till sedan �r du inlagd i prenumerationslistan.  Klicka p� f�ljande l�nk f�r att bekr�fta din prenumeration.' .
		'<br /><br />[CONFIRM]<br /><br />Vid fr�gor kontakta webmaster.');
define('_ACA_DEFAULT_UNSUBSCRIBE_MESS', 'Detta �r ett bekr�ftelsemail om att du har valt att inte l�ngre prenumerera hos oss mera.  Vi �r sj�lvklart ledsna att du valt detta men om du v�ljer att �ter prenumerera hos oss igen s� �r du v�lkommen tillbaka.  Om du har n�gra fr�gor s� kontakta v�r webmaster.');

// Acajoom subscribers
define('_ACA_SIGNUP_DATE', 'Inskrivningsdatum');
define('_ACA_CONFIRMED', 'Bekr�ftad');
define('_ACA_SUBSCRIB', 'Prenumerera');
define('_ACA_HTML', 'HTML mail');
define('_ACA_RESULTS', 'Resultat');
define('_ACA_SEL_LIST', 'V�lj en lista');
define('_ACA_SEL_LIST_TYPE', '- V�lj typ av lista -');
define('_ACA_SUSCRIB_LIST', 'Lista p� alla prenumeranter');
define('_ACA_SUSCRIB_LIST_UNIQUE', 'prenumeranter f�r : ');
define('_ACA_NO_SUSCRIBERS', 'Inga prenumeranter hittades i denna lista.');
define('_ACA_COMFIRM_SUBSCRIPTION', 'Ett bekr�ftelsemail har skickats till e-postadressen som du uppgav.  Kolla ditt e-post meddelande och klicka p� l�nken som anges.<br />' .
		'Du beh�ver bekr�fta din e-post f�r att din prenumeration ska b�rja g�lla.');
define('_ACA_SUCCESS_ADD_LIST', 'Du har lagts till i listan �ver prenumerationer.');


 // Subcription info
define('_ACA_CONFIRM_LINK', 'Klicka h�r f�r att bekr�fta din prenumeration');
define('_ACA_UNSUBSCRIBE_LINK', 'Klicka h�r f�r att ta bort dig fr�n listan �ver prenumeranter');
define('_ACA_UNSUBSCRIBE_MESS', 'Din e-postadress har tagits bort fr�n listan');

define('_ACA_QUEUE_SENT_SUCCESS' , 'Alla schemalagda mailningar har skickats iv�g.');
define('_ACA_MALING_VIEW', 'Visa alla mailningar');
define('_ACA_UNSUBSCRIBE_MESSAGE', '�r du s�ker p� att du inte vill prenumerera hos oss l�ngre?');
define('_ACA_MOD_SUBSCRIBE', 'Prenumerera');
define('_ACA_SUBSCRIBE', 'Prenumerera');
define('_ACA_UNSUBSCRIBE', 'Prenumerera Ej');
define('_ACA_VIEW_ARCHIVE', 'Visa arkiv');
define('_ACA_SUBSCRIPTION_OR', ' eller klicka h�r f�r att uppdatera din information');
define('_ACA_EMAIL_ALREADY_REGISTERED', 'E-postadressen som du angav finns redan.');
define('_ACA_SUBSCRIBER_DELETED', 'Prenumerant raderades.');


### UserPanel ###
 //User Menu
define('_UCP_USER_PANEL', 'Anv�ndar Kontrollpanel');
define('_UCP_USER_MENU', 'Anv�ndarmeny');
define('_UCP_USER_CONTACT', 'Mina Prenumerationer');
 //Acajoom Cron Menu
define('_UCP_CRON_MENU', 'Cron Uppgifts Hanterare');
define('_UCP_CRON_NEW_MENU', 'NY Cron');
define('_UCP_CRON_LIST_MENU', 'Lista min Cron');
 //Acajoom Coupon Menu
define('_UCP_COUPON_MENU', 'Kupong Hanterare');
define('_UCP_COUPON_LIST_MENU', 'Lista p� Kuponger');
define('_UCP_COUPON_ADD_MENU', 'Skapa en Kupong');

### lists ###
// Tabs
define('_ACA_LIST_T_GENERAL', 'Beskrivning');
define('_ACA_LIST_T_LAYOUT', 'Layout');
define('_ACA_LIST_T_SUBSCRIPTION', 'Prenumeration');
define('_ACA_LIST_T_SENDER', 'Avs�ndarinformation');

define('_ACA_LIST_TYPE', 'List Typ');
define('_ACA_LIST_NAME', 'List namn');
define('_ACA_LIST_ISSUE', 'Nummer #');
define('_ACA_LIST_DATE', 'S�ndningsdatum');
define('_ACA_LIST_SUB', 'Mail�mne');
define('_ACA_ATTACHED_FILES', 'Bifogade filer');
define('_ACA_SELECT_LIST', 'V�lj en lista att redigera!');

// Auto Responder box
define('_ACA_AUTORESP_ON', 'Typ av lista');
define('_ACA_AUTO_RESP_OPTION', 'Auto-responder val');
define('_ACA_AUTO_RESP_FREQ', 'Prenumeranter kan v�lja frekvens');
define('_ACA_AUTO_DELAY', 'F�rsening (i dagar)');
define('_ACA_AUTO_DAY_MIN', 'Minimum frekvens');
define('_ACA_AUTO_DAY_MAX', 'Maximum frekvens');
define('_ACA_FOLLOW_UP', 'Specificera auto-responder uppf�ljning');
define('_ACA_AUTO_RESP_TIME', 'Prenumeranter kan v�lja tid');
define('_ACA_LIST_SENDER', 'Lista avs�ndare');

define('_ACA_LIST_DESC', 'List beskrivning');
define('_ACA_LAYOUT', 'Layout');
define('_ACA_SENDER_NAME', 'Avs�ndarnamn');
define('_ACA_SENDER_EMAIL', 'Avs�ndarens e-post');
define('_ACA_SENDER_BOUNCE', 'Avs�ndarens studsadress');
define('_ACA_LIST_DELAY', 'F�rsening');
define('_ACA_HTML_MAILING', 'HTML mail?');
define('_ACA_HTML_MAILING_DESC', '(om du �ndrar detta, s� beh�ver du spara och �terv�nda till denna ruta f�r att se �ndringarna.)');
define('_ACA_HIDE_FROM_FRONTEND', 'D�lj p� framsidan?');
define('_ACA_SELECT_IMPORT_FILE', 'V�lj en fil att importera');;
define('_ACA_IMPORT_FINISHED', 'Importering avslutat');
define('_ACA_DELETION_OFFILE', 'Radering av fil');
define('_ACA_MANUALLY_DELETE', 'misslyckades, du m�ste ta bort filen manuellt');
define('_ACA_CANNOT_WRITE_DIR', 'Kan inte skriva till mappen');
define('_ACA_NOT_PUBLISHED', 'Kunde inte skicka mailen, listan �r inte publicerad.');

//  List info box
define('_ACA_INFO_LIST_PUB', 'Klicka Ja f�r att publicera listan');
define('_ACA_INFO_LIST_NAME', 'Skriv in namnet p� listan h�r. Du kan identifiera listan med detta namn.');
define('_ACA_INFO_LIST_DESC', 'Skriv in en kort beskrivning p� listan h�r. Denna beskrivning kommer att vara synlig f�r bes�kare p� din hemsida.');
define('_ACA_INFO_LIST_SENDER_NAME', 'Skriv in namnet p� avs�ndaren p� mailen. Detta namn kommer att vara synligt n�r prenumeranter mottar meddelanden fr�n denna lista.');
define('_ACA_INFO_LIST_SENDER_EMAIL', 'Skriv in e-postadressen fr�n vilken meddelandet kommer att skickas ifr�n.');
define('_ACA_INFO_LIST_SENDER_BOUNCED', 'Skriv in e-postadressen som anv�ndare kan svar till. Det rekomenderas att det �r samma som avs�ndar adressen, eftersom spamfilter kommer att ge ditt meddelande en h�gre rankning om dom �r olika.');
define('_ACA_INFO_LIST_AUTORESP', 'V�lj typ av mail p� denna lista. <br />' .
		'Nyhetsbrev: normalt nyhetsbrev<br />' .
		'Auto-responder: en auto-responder �r en lista som s�nds automatiskt genom hemsidan vid regelbundna intervaller.');
define('_ACA_INFO_LIST_FREQUENCY', 'Aktivera anv�ndare genom att ange hur ofta dom ska motta fr�n denna lista.  Det ger mer flexibilitet f�r anv�ndaren.');
define('_ACA_INFO_LIST_TIME', 'L�t anv�ndaren v�lja sin �nskade tid p� dygnet f�r att motta fr�n listan.');
define('_ACA_INFO_LIST_MIN_DAY', 'Definera vad som �r den minimala frekvensen en anv�ndare kan v�lja att mottaga listan');
define('_ACA_INFO_LIST_DELAY', 'Specificera f�rdr�jningen mellan denna auto-responder och den f�reg�ende g�ngen.');
define('_ACA_INFO_LIST_DATE', 'Specificera datumet f�r publicering av nyhetslistan om du vill f�rdr�ja publiceringen. <br /> FORMAT : ����-MM-DD TT:MM:SS');
define('_ACA_INFO_LIST_MAX_DAY', 'Definera vad som �r den maximala frekvensen en anv�ndare kan v�lja att mottaga listan');
define('_ACA_INFO_LIST_LAYOUT', 'Skriv in layouten p� din maillista h�r. Du kan fylla i vilken layout f�r din mail h�r.');
define('_ACA_INFO_LIST_SUB_MESS', 'Detta meddelande kommer att skickas till prenumeranten n�r han eller hon registreras f�r f�rsta g�ngen. Du kan fylla i den text du �nskar h�r.');
define('_ACA_INFO_LIST_UNSUB_MESS', 'Detta meddelande kommer att skickas till prenumeranten n�r han eller hon vill avs�ga sig sin prenumeration. Ditt meddelande kan du fylla i h�r.');
define('_ACA_INFO_LIST_HTML', 'V�lj kryssrutan om du vill skicka ut ett HTML mail. Prenumeranter kommer att kunna specificera om dom vill motta HTML meddelande, eller endast Text meddelande n�r dom prenumererar p� en HTML lista.');
define('_ACA_INFO_LIST_HIDDEN', 'Klicka Ja f�r att d�lja listan p� f�rstasidan, anv�ndare kommer inte att kunna prenumerera men du kommer fortfarande att kunna skicka mail.');
define('_ACA_INFO_LIST_ACA_AUTO_SUB', 'Vill du med automatik l�gga till prenumeranter till denna lista?<br /><B>Nya Anv�ndare:</B> kommer att registrera varje ny anv�ndare som har registrerat sig p� hemsidan.<br /><B>Alla Anv�ndare:</B> kommer att registrera varje registrerad anv�ndare till databasen.<br />(alla dessa alternativ supportar Community Builder)');
define('_ACA_INFO_LIST_ACC_LEVEL', 'V�lj f�rstasidans beh�righetsniv�. Detta kommer att visa eller d�lja mailen till anv�ndargrupper som inte har tillg�ng till den, s� dom inte kan prenumerera p� den.');
define('_ACA_INFO_LIST_ACC_USER_ID', 'V�lj beh�righetsniv� p� anv�ndargrupper som du vill ska kunna redigera. Dessa anv�ndargrupper och ovanf�r kommer att kunna redigera mailen och skicka ut dom, antingen fr�n f�rstasidan eller fr�n backend.');
define('_ACA_INFO_LIST_FOLLOW_UP', 'Om du vill att auto-respondern ska flyttas till en annan s� fort den skickat sitt sista meddelande s� kan du specificera det h�r f�r att f�lja upp auto-respondern.');
define('_ACA_INFO_LIST_ACA_OWNER', 'Detta �r ID:en p� personen som skapade listan.');
define('_ACA_INFO_LIST_WARNING', ' Detta sista val �r endast tillg�ngligt p� slutet vid skapande av listan.');
define('_ACA_INFO_LIST_SUBJET', ' �mne p� mailen.  Detta �r �mnet p� e-posten som prenumeranten kommer att motta.');
define('_ACA_INFO_MAILING_CONTENT', 'Detta �r huvudrutan p� mailet som kommer att skickas.');
define('_ACA_INFO_MAILING_NOHTML', 'Skriv in h�r huvudtexten p� mailet som du vill skicka till prenumeranterna som v�ljer att motta endast icke HTML mail. <BR/> NOTERA: om du l�mnar detta tomt s� kommer Acajoom automatiskt att konvertera det fr�n HTML text till endast text.');
define('_ACA_INFO_MAILING_VISIBLE', 'Klicka Ja f�r att visa mailen p� f�rstasidan.');
define('_ACA_INSERT_CONTENT', 'S�tt in existerande inneh�ll');

// Coupons
define('_ACA_SEND_COUPON_SUCCESS', 'Kupong skickat!');
define('_ACA_CHOOSE_COUPON', 'V�lj en kupong');
define('_ACA_TO_USER', ' till denna anv�ndare');

### Cron options
//drop down frequency(CRON)
define('_ACA_FREQ_CH1', 'Varje timma');
define('_ACA_FREQ_CH2', 'Var 6:e timma');
define('_ACA_FREQ_CH3', 'Var 12:e timma');
define('_ACA_FREQ_CH4', 'Dagligt');
define('_ACA_FREQ_CH5', 'Veckovis');
define('_ACA_FREQ_CH6', 'M�nadsvis');
define('_ACA_FREQ_NONE', 'Nej');
define('_ACA_FREQ_NEW', 'Nya Anv�ndare');
define('_ACA_FREQ_ALL', 'Alla Anv�ndare');

//Label CRON form
define('_ACA_LABEL_FREQ', 'Acajoom Cron?');
define('_ACA_LABEL_FREQ_TIPS', 'Klicka Ja om du vill anv�nda detta som ett Acajoom Cron, Nej f�r n�gon annan cron uppgift.<br />' .
		'Om du klicka Ja s� beh�ver du inte ange n�gon Cron Adress, det kommer automatiskt att l�ggas till.');
define('_ACA_SITE_URL' , 'Din hemsidas URL');
define('_ACA_CRON_FREQUENCY' , 'Cron Frekvens');
define('_ACA_STARTDATE_FREQ' , 'Start Datum');
define('_ACA_LABELDATE_FREQ' , 'Specificera Datum');
define('_ACA_LABELTIME_FREQ' , 'Specificera Tid');
define('_ACA_CRON_URL', 'Cron URL');
define('_ACA_CRON_FREQ', 'Frekvens');
define('_ACA_TITLE_CRONLIST', 'Cron Lista');
define('_NEW_LIST', 'Skapa en ny lista');

//title CRON form
define('_ACA_TITLE_FREQ', 'Redigera Cron');
define('_ACA_CRON_SITE_URL', 'Fyll i en giltig hemside url, starta med http://');

### Mailings ###
define('_ACA_MAILING_ALL', 'Alla mail');
define('_ACA_EDIT_A', 'Redigera ett ');
define('_ACA_SELCT_MAILING', 'V�lj en lista i drop down menyn f�r att l�gga till en ny mail.');
define('_ACA_VISIBLE_FRONT', 'Synligt p� f�rstasidan');

// mailer
define('_ACA_SUBJECT', '�mne');
define('_ACA_CONTENT', 'Inneh�ll');
define('_ACA_NAMEREP', '[NAME] = Detta kommer att ers�ttas med namnet som prenumeranten uppgav, du skickar personlig e-post n�r du anv�nder dig av detta.<br />');
define('_ACA_FIRST_NAME_REP', '[FIRSTNAME] = Detta kommer att ers�ttas med F�R namnet som prenumeranten uppgav.<br />');
define('_ACA_NONHTML', 'Ingen-html version');
define('_ACA_ATTACHMENTS', 'Bifogade filer');
define('_ACA_SELECT_MULTIPLE', 'Hold kontrollen (eller kommando) f�r att v�lja flera bifogade filer.<br />' .
		'Filerna som visas i den bifogade listan finns i en bifogad fil mapp, du kan �ndra denna plats i konfigurationspanelen.');
define('_ACA_CONTENT_ITEM', 'Inneh�lls objekt');
define('_ACA_SENDING_EMAIL', 'Skickar e-post');
define('_ACA_MESSAGE_NOT', 'Meddelandet kunde inte skickas');
define('_ACA_MAILER_ERROR', 'Mail fel');
define('_ACA_MESSAGE_SENT_SUCCESSFULLY', 'Meddelande skickat');
define('_ACA_SENDING_TOOK', 'S�ndning av detta mail tog');
define('_ACA_SECONDS', 'sekunder');
define('_ACA_NO_ADDRESS_ENTERED', 'Ingen e-postadress eller prenumerant angavs');
define('_ACA_CHANGE_SUBSCRIPTIONS', '�ndra');
define('_ACA_CHANGE_EMAIL_SUBSCRIPTION', '�ndra din prenumeration');
define('_ACA_WHICH_EMAIL_TEST', 'Indikera en e-postadress f�r att skicka ett test till eller v�lj f�rhandsgranska');
define('_ACA_SEND_IN_HTML', 'Send in HTML (for html mailings)?');
define('_ACA_VISIBLE', 'Synlig');
define('_ACA_INTRO_ONLY', 'Endast Intro');

// stats
define('_ACA_GLOBALSTATS', 'Global stats');
define('_ACA_DETAILED_STATS', 'Detaljerad stats');
define('_ACA_MAILING_LIST_DETAILS', 'List detaljer');
define('_ACA_SEND_IN_HTML_FORMAT', 'Skicka i HTML format');
define('_ACA_VIEWS_FROM_HTML', 'Visningar (fr�m html mail)');
define('_ACA_SEND_IN_TEXT_FORMAT', 'Skicka i text format');
define('_ACA_HTML_READ', 'HTML l�st');
define('_ACA_HTML_UNREAD', 'HTML ol�st');
define('_ACA_TEXT_ONLY_SENT', 'Endast Text');

// Configuration panel
// main tabs
define('_ACA_MAIL_CONFIG', 'Mail');
define('_ACA_LOGGING_CONFIG', 'Loggar & Stats');
define('_ACA_SUBSCRIBER_CONFIG', 'Prenumeranter');
define('_ACA_AUTO_CONFIG', 'Cron');
define('_ACA_MISC_CONFIG', '�vrig');
define('_ACA_MAIL_SETTINGS', 'Mail Inst�llningar');
define('_ACA_MAILINGS_SETTINGS', 'Mail Inst�llningar');
define('_ACA_SUBCRIBERS_SETTINGS', 'Prenumerant Inst�llningar');
define('_ACA_CRON_SETTINGS', 'Cron Inst�llningar');
define('_ACA_SENDING_SETTINGS', 'S�ndnings Inst�llningar');
define('_ACA_STATS_SETTINGS', 'Statistik Inst�llningar');
define('_ACA_LOGS_SETTINGS', 'Logg Inst�llningar');
define('_ACA_MISC_SETTINGS', '�vriga Inst�llningar');
// mail settings
define('_ACA_SEND_MAIL_FROM', 'Fr�n E-post');
define('_ACA_SEND_MAIL_NAME', 'Fr�n Namn');
define('_ACA_MAILSENDMETHOD', 'Mail metod');
define('_ACA_SENDMAILPATH', 'Skicka mail s�kv�g');
define('_ACA_SMTPHOST', 'SMTP v�rd');
define('_ACA_SMTPAUTHREQUIRED', 'SMTP Autentificering kr�vs');
define('_ACA_SMTPAUTHREQUIRED_TIPS', 'V�lj ja om din SMTP server kr�ver autentificering');
define('_ACA_SMTPUSERNAME', 'SMTP anv�ndarnamn');
define('_ACA_SMTPUSERNAME_TIPS', 'Skriv in SMTP anv�ndarnamnet n�r din SMTP server kr�ver autentificering');
define('_ACA_SMTPPASSWORD', 'SMTP l�senord');
define('_ACA_SMTPPASSWORD_TIPS', 'Skriv in SMTP l�senord n�r din SMTP server kr�ver autentificering');
define('_ACA_USE_EMBEDDED', 'Anv�nd inb�ddade bilder');
define('_ACA_USE_EMBEDDED_TIPS', 'V�lj ja om bilderna i bifogat inneh�lls objekt ska b�ddas in i mailet f�r html meddelanden, eller nej f�r att anv�nda dig av standardbild tagar som l�nkas till bilderna p� hemsidan.');
define('_ACA_UPLOAD_PATH', 'Uppladdning/bifogade filer s�kv�g');
define('_ACA_UPLOAD_PATH_TIPS', 'Du kan specificera en uppladdningsmapp.<br />' .
		'Se till att mappen som du specificerade finns, annars skapa den.');

// subscribers settings
define('_ACA_ALLOW_UNREG', 'Till�t oregistrerade');
define('_ACA_ALLOW_UNREG_TIPS', 'V�lj Ja om du vill till�ta anv�ndare att prenumerera p� listor utan att vara registrerade p� hemsidan.');
define('_ACA_REQ_CONFIRM', 'Kr�ver bekr�ftelse');
define('_ACA_REQ_CONFIRM_TIPS', 'V�lj ja om du kr�ver att oregistrerade prenumeranter ska bekr�fta sin e-postadress.');
define('_ACA_SUB_SETTINGS', 'Prenumerations Inst�llningar');
define('_ACA_SUBMESSAGE', 'Prenumerations E-post');
define('_ACA_SUBSCRIBE_LIST', 'Prenumerera p� en lista');

define('_ACA_USABLE_TAGS', 'Anv�ndbara taggar');
define('_ACA_NAME_AND_CONFIRM', '<b>[CONFIRM]</b> = Detta skapar en klickbar l�nk som prenumeranten kan bekr�fta sin prenumeration. Detta  <strong>kr�vs</strong> f�r att Acajoom ska fungera korrekt.<br />'
.'<br />[NAME] = Detta kommer att ers�ttas med namnet som prenumeranten uppgav, du skickar personlig e-post om du anv�nder dig av detta.<br />'
.'<br />[FIRSTNAME] = Detta kommer att ers�ttas med F�R namnet p� prenumeranten, F�rsta namnet DEFINERAS som f�rsta namnet som fylls i av prenumeranten.<br />');
define('_ACA_CONFIRMFROMNAME', 'Bekr�fta fr�n namn');
define('_ACA_CONFIRMFROMNAME_TIPS', 'Skriv in fr�n namn som visas i bekr�ftelse listor.');
define('_ACA_CONFIRMFROMEMAIL', 'Bekr�fta fr�n e-post');
define('_ACA_CONFIRMFROMEMAIL_TIPS', 'Skriv in en e-postadress som visas i bekr�ftelse listor.');
define('_ACA_CONFIRMBOUNCE', 'Studsadress');
define('_ACA_CONFIRMBOUNCE_TIPS', 'Skriv in en studsadress som visas i bekr�ftelse listor.');
define('_ACA_HTML_CONFIRM', 'HTML bekr�ftelse');
define('_ACA_HTML_CONFIRM_TIPS', 'V�lj ja om bekr�ftelse listor ska vara html om anv�ndaren till�ter html.');
define('_ACA_TIME_ZONE_ASK', 'Fr�ga tidszon');
define('_ACA_TIME_ZONE_TIPS', 'V�lj ja om du vill fr�ga om anv�ndarnas tidszon.  De k�ade mailen kommer att skickas enligt turordningen baserat p� vilken tidszon man befinner sig i');

 // Cron Set up
define('_ACA_TIME_OFFSET_URL', 'klicka h�r f�r att st�lla in offset i den globala konfigurationspanelen -> Lokal tab');
define('_ACA_TIME_OFFSET_TIPS', 'St�ll in din servers tid offset s� det inspelade datumet och tiden �r exakt');
define('_ACA_TIME_OFFSET', 'Tid offset');
define('_ACA_CRON_TITLE', 'St�ller in cron funktion');
define('_ACA_CRON_DESC','<br />Genom att anv�nda cron funktionen s� kan du st�lla in en automatisk uppgift f�r din hemsida!<br />' .
		'F�r att st�lla in den s� beh�ver du i din crontab kontrollpanel skriva f�ljande kommando:<br />' .
		'<b>' . $GLOBALS['mosConfig_live_site'] . '/index.php?option=com_acajoom&act=cron</b> ' .
		'<br /><br />Om du beh�ver hj�lp att st�lla in den eller har problem var god och konsultera v�rat forum <a href="http://www.acajoom.com" target="_blank">http://www.acajoom.com</a>');
// sending settings
define('_ACA_PAUSEX', 'Pausa x sekunder varje konfigurerad m�ngd av mail');
define('_ACA_PAUSEX_TIPS', 'Skriv in antalet sekunder som Acajoom kommer att ge SMTP servern tiden att s�nda ut meddelanden innan den forts�tter med n�sta konfigurerade m�ngd av meddelanden.');
define('_ACA_EMAIL_BET_PAUSE', 'Mail mellan pausar');
define('_ACA_EMAIL_BET_PAUSE_TIPS', 'Antalet mail att skicka innan den ska pausa.');
define('_ACA_WAIT_USER_PAUSE', 'V�nta p� anv�ndarinmatningsdata vid paus');
define('_ACA_WAIT_USER_PAUSE_TIPS', 'Om skriptet ska v�nta p� anv�ndarinmatningsdata n�r paus sker med mailande.');
define('_ACA_SCRIPT_TIMEOUT', 'Skript timeout');
define('_ACA_SCRIPT_TIMEOUT_TIPS', 'Antalet minuter som skriptet ska k�ras.');
// Stats settings
define('_ACA_ENABLE_READ_STATS', 'Aktivera l�s statistik');
define('_ACA_ENABLE_READ_STATS_TIPS', 'V�lj ja om du vill logga antalet visningar. Denna teknik kan endast anv�ndas med html mailande');
define('_ACA_LOG_VIEWSPERSUB', 'Logga visningar per prenumerant');
define('_ACA_LOG_VIEWSPERSUB_TIPS', 'V�lj ja om du vill logga antalet visningar per prenumerant. Denna teknik kan endast anv�ndas med html mailande');
// Logs settings
define('_ACA_DETAILED', 'Detaljerade loggar');
define('_ACA_SIMPLE', 'F�renklade loggar');
define('_ACA_DIAPLAY_LOG', 'Visa loggar');
define('_ACA_DISPLAY_LOG_TIPS', 'V�lj ja om du vill visa loggar medans du skickar mail.');
define('_ACA_SEND_PERF_DATA', 'S�nd ut prestanda');
define('_ACA_SEND_PERF_DATA_TIPS', 'V�lj ja om du vill till�ta Acajoom att s�nda ut ANONYMA rapporter om din konfiguration, antalet prenumeranter i en lista och tiden det tog att skicka ut mailen. Detta ger oss en id� om Acajoom prestandan och kommer att HJ�LPA OSS att f�rb�ttra Acajoom i framtida utvecklingar.');
define('_ACA_SEND_AUTO_LOG', 'Skicka logg f�r auto-responder');
define('_ACA_SEND_AUTO_LOG_TIPS', 'V�lj ja om du vill skicka en mail logg varje g�ng tek k�n behandlas.  VARNING: detta kan resultera i stor m�ngd mail.');
define('_ACA_SEND_LOG', 'Skicka logg');
define('_ACA_SEND_LOG_TIPS', 'Om en logg av mailandet ska e-postas till anv�ndarens e-postadress som skickade mailet.');
define('_ACA_SEND_LOGDETAIL', 'Skicka logg detaljer');
define('_ACA_SEND_LOGDETAIL_TIPS', 'Detaljerad inkluderar den lyckade eller felaktiga information f�r varje prenumerant och en �verblick utav informationen. Skickar endast en enkel �versikt.');
define('_ACA_SEND_LOGCLOSED', 'Skicka logg om �verf�ringen st�ngs');
define('_ACA_SEND_LOGCLOSED_TIPS', ' Med detta val p� anv�ndaren som skickade mailet s� kommer den personen fortfarande f� en rapport via e-post.');
define('_ACA_SAVE_LOG', 'Spara logg');
define('_ACA_SAVE_LOG_TIPS', 'Om en logg p� mailen ska tas upp till loggfilen.');
define('_ACA_SAVE_LOGDETAIL', 'Spara loggdetaljer');
define('_ACA_SAVE_LOGDETAIL_TIPS', 'Detaljerad inkluderar den lyckade eller felaktiga information f�r varje prenumerant och en �verblick utav informationen. Sparar endast en enkel �versikt.');
define('_ACA_SAVE_LOGFILE', 'Spara loggfil');
define('_ACA_SAVE_LOGFILE_TIPS', 'Filen som logg informationen ska tas upp till. Denna fil kan bli riktigt stor.');
define('_ACA_CLEAR_LOG', 'Rensa logg');
define('_ACA_CLEAR_LOG_TIPS', 'Rensar loggfilen.');

### control panel
define('_ACA_CP_LAST_QUEUE', 'Senast k�rda k�');
define('_ACA_CP_TOTAL', 'Totalt');
define('_ACA_MAILING_COPY', 'Mailen kopierad!');

// Miscellaneous settings
define('_ACA_SHOW_GUIDE', 'Visa guide');
define('_ACA_SHOW_GUIDE_TIPS', 'Visar guiden vid start f�r att hj�lpa nya anv�ndare skapa ett nyhetsbrev, en auto-responder och att st�lla in Acajoom ordentligt.');
define('_ACA_AUTOS_ON', 'Anv�nd Auto-respondrar');
define('_ACA_AUTOS_ON_TIPS', 'V�lj Nej om du inte vill anv�nda Auto-respondrar, alla auto-responder val kommer att inaktiveras.');
define('_ACA_NEWS_ON', 'Anv�nd Nyhetsbrev');
define('_ACA_NEWS_ON_TIPS', 'V�lj Nej om du inte vill anv�nda Nyhetsbrev, alla nyhetsbrevsval kommer att inaktiveras.');
define('_ACA_SHOW_TIPS', 'Visa tips');
define('_ACA_SHOW_TIPS_TIPS', 'Visa tipsen, f�r att hj�lpa anv�ndare att anv�nda Acajoom mer effektivt.');
define('_ACA_SHOW_FOOTER', 'Visa sidfot');
define('_ACA_SHOW_FOOTER_TIPS', 'Om sidfots copyrights noteringar ska visas.');
define('_ACA_SHOW_LISTS', 'Visa listor p� f�rstasidan');
define('_ACA_SHOW_LISTS_TIPS', 'N�r anv�ndare inte �r registrerade visa en lista p� listor som dom kan prenumerera p� med arkivknapp f�r nyhetsbrev eller ett login formul�r s� dom kan registrera sig.');
define('_ACA_CONFIG_UPDATED', 'Konfigurations detaljerna har uppdaterats!');
define('_ACA_UPDATE_URL', 'Uppdatera URL');
define('_ACA_UPDATE_URL_WARNING', 'VARNING! �ndra inte p� denna URL om du inte har blivit tillsagd av Acajoom tekniska team att g�ra s�.<br />');
define('_ACA_UPDATE_URL_TIPS', 'Som exempel: http://www.acajoom.com/update/ (inkludera det avslutande slashen)');

// module
define('_ACA_EMAIL_INVALID', 'E-posten som angavs �r felaktig.');
define('_ACA_REGISTER_REQUIRED', 'Var v�nlig och registrera dig p� hemsidan innan du kan anm�la dig som prenumerant.');

// Access level box
define('_ACA_OWNER', 'Skapare av lista:');
define('_ACA_ACCESS_LEVEL', 'St�ll in beh�righetsniv� f�r listan');
define('_ACA_ACCESS_LEVEL_OPTION', 'Beh�righetsniv� Val');
define('_ACA_USER_LEVEL_EDIT', 'V�lj vilken anv�ndarniv� som till�ter redigering av mailen (antingen fr�n f�rstasidan eller backend) ');

//  drop down options
define('_ACA_AUTO_DAY_CH1', 'Daglig');
define('_ACA_AUTO_DAY_CH2', 'Daglig ingen helg');
define('_ACA_AUTO_DAY_CH3', 'Varannan dag');
define('_ACA_AUTO_DAY_CH4', 'Varannan dag ingen helg');
define('_ACA_AUTO_DAY_CH5', 'Veckovis');
define('_ACA_AUTO_DAY_CH6', 'Varannan vecka');
define('_ACA_AUTO_DAY_CH7', 'M�nadsvis');
define('_ACA_AUTO_DAY_CH9', '�rligt');
define('_ACA_AUTO_OPTION_NONE', 'Nej');
define('_ACA_AUTO_OPTION_NEW', 'Nya Anv�ndare');
define('_ACA_AUTO_OPTION_ALL', 'Alla Anv�ndare');

//
define('_ACA_UNSUB_MESSAGE', 'Prenumerera Ej E-post');
define('_ACA_UNSUB_SETTINGS', 'Prenumerera Ej Inst�llningar');
define('_ACA_AUTO_ADD_NEW_USERS', 'Auto Prenumerera Anv�ndare?');

// Update and upgrade messages
define('_ACA_NO_UPDATES', 'Det finns f�rn�rvarande inga uppdateringar tillg�ngliga.');
define('_ACA_VERSION', 'Acajoom Version');
define('_ACA_NEED_UPDATED', 'Filer som beh�ver uppdateras:');
define('_ACA_NEED_ADDED', 'Filer som beh�ver l�ggas till:');
define('_ACA_NEED_REMOVED', 'Filer som beh�ver tas bort:');
define('_ACA_FILENAME', 'Filnamn:');
define('_ACA_CURRENT_VERSION', 'Nuvarande version:');
define('_ACA_NEWEST_VERSION', 'Nyaste version:');
define('_ACA_UPDATING', 'Uppdaterar');
define('_ACA_UPDATE_UPDATED_SUCCESSFULLY', 'Filerna har uppdaterats.');
define('_ACA_UPDATE_FAILED', 'Uppdatering misslyckades!');
define('_ACA_ADDING', 'L�gger till');
define('_ACA_ADDED_SUCCESSFULLY', 'Tillagda.');
define('_ACA_ADDING_FAILED', 'Till�ggning misslyckades!');
define('_ACA_REMOVING', 'Tar bort');
define('_ACA_REMOVED_SUCCESSFULLY', 'Togs bort.');
define('_ACA_REMOVING_FAILED', 'Borttagning misslyckades!');
define('_ACA_INSTALL_DIFFERENT_VERSION', 'Installera en annan version');
define('_ACA_CONTENT_ADD', 'Skapa inneh�ll');
define('_ACA_UPGRADE_FROM', 'Importera data (nyhetsbrev och prenumeranter\' information) fr�n ');
define('_ACA_UPGRADE_MESS', 'Det finns ingen risk f�r din existerande data. <br /> Denna process kommer importera data till Acajoom databasen.');
define('_ACA_CONTINUE_SENDING', 'Forts�tt skicka');

// Acajoom message
define('_ACA_UPGRADE1', 'Du kan enkelt importera dina anv�ndare och nyhetsbrev fr�n ');
define('_ACA_UPGRADE2', ' till Acajoom i uppdateringspanelen.');
define('_ACA_UPDATE_MESSAGE', 'En ny version av Acajoom finns tillg�nglig! ');
define('_ACA_UPDATE_MESSAGE_LINK', 'Klicka h�r f�r att uppdatera!');
define('_ACA_CRON_SETUP', 'F�r att autorespondrarna ska skickas s� beh�ver du st�lla in en cron uppgift.');
define('_ACA_THANKYOU', 'Tack f�r att du valde Acajoom, Din kommunikationspartner!');
define('_ACA_NO_SERVER', 'Uppdatering av Server �r inte tillg�nglig, var god och f�rs�k senare.');
define('_ACA_MOD_PUB', 'Acajoom modulen �r inte publicerad.');
define('_ACA_MOD_PUB_LINK', 'Klicka h�r f�r att publicera den!');
define('_ACA_IMPORT_SUCCESS', 'Importerades');
define('_ACA_IMPORT_EXIST', 'Prenumeranten finns redan i databasen');


// Acajoom's Guide
define('_ACA_GUIDE', '\'s Wizard');
define('_ACA_GUIDE_FIRST_ACA_STEP', '<p>Acajoom har m�nga stora f�rdelar och denna wizard kommer att guida dig igenom fyra enkla steg f�r att hj�lpa dig att komma ig�ng med s�ndning av ditt nyhetsbrev och auto-respondrar!<p />');
define('_ACA_GUIDE_FIRST_ACA_STEP_DESC', 'F�rsta, du beh�ver skapa en lista.  En lista kan vara av tv� typer, antingen ett nyhetsbrev eller en auto-responder.' .
		'  I listan som du definerar alla m�jliga parametrar f�r att aktivera s�ndning av ditt nyhetsbrev eller auto-respondrar: avs�ndarens namn, layout, prenumeranter\' v�lkomst meddelande, etc...
<br /><br />Du kan st�lla in din f�rsta lista h�r: <a href="index2.php?option=com_acajoom&act=list" >skapa en lista</a> och klicka p� Ny knappen.');
define('_ACA_GUIDE_FIRST_ACA_STEP_UPGRADE', 'Acajoom tillhandah�ller dig med en enkel v�g genom att importera all data fr�n ett tidigare nyhetsbrevssystem.<br />' .
		' G� till Uppdaterapanelen och v�lj ditt tidigare nyhetsbrevssystem att importera alla dina nyhetsbrev och prenumeranter.<br /><br />' .
		'<span style="color:#FF5E00;" >VIKTIGT: importeringen �r riskfri och p�verkar inte p� n�got sett data fr�n ditt tidigare nyhetsbrevssystem</span><br />' .
		'Efter importering s� kommer du ha m�jlighet att hantera dina prenumeranter och mailen direkt genom Acajoom.<br /><br />');
define('_ACA_GUIDE_SECOND_ACA_STEP', 'Kanon din f�rsta lista �r inst�lld!  Du kan nu skriva din f�rsta %s.  F�r att skapa den g� till: ');
define('_ACA_GUIDE_SECOND_ACA_STEP_AUTO', 'Auto-responder Hanterare');
define('_ACA_GUIDE_SECOND_ACA_STEP_NEWS', 'Nyhetsbrevs Hanterare');
define('_ACA_GUIDE_SECOND_ACA_STEP_FINAL', ' och v�lj din %s. <br /> Sedan s� v�ljer du din %s i drop down listan.  Skapa din f�rsta mail genom att klicka p� Ny ');

define('_ACA_GUIDE_THRID_ACA_STEP_NEWS', 'Innan du skickar ditt f�rsta nyhetsbrev s� ska du kolla genom mail konfigurationen.  ' .
		'G� till <a href="index2.php?option=com_acajoom&act=configuration" >konfigurations sidan</a> f�r att verifiera mail inst�llningarna. <br />');
define('_ACA_GUIDE_THRID2_ACA_STEP_NEWS', '<br />N�r du �r klar g� tillbaka till Nyhetsbrevs menyn, v�lj din mail och klicka sedan p� Skicka');

define('_ACA_GUIDE_THRID_ACA_STEP_AUTOS', 'F�r att dina auto-respondrar ska s�ndas s� beh�ver du f�rst st�lla in en cron uppgift p� din server. ' .
		' Referera till Cron tabben i konfigurationspanelen.' .
		' <a href="index2.php?option=com_acajoom&act=configuration" >klicka h�r</a> f�r att l�ra dig om hur man st�ller in en cron uppgift. <br />');

define('_ACA_GUIDE_MODULE', ' <br />Kolla �ven upp att du har publicerat Acajoom modulen s� personer kan skriva in sig f�r prenumerationer.');

define('_ACA_GUIDE_FOUR_ACA_STEP_NEWS', ' Du kan nu ocks� st�lla in en auto-responder.');
define('_ACA_GUIDE_FOUR_ACA_STEP_AUTOS', ' Du kan nu ocks� st�lla in ett nyhetsbrev.');

define('_ACA_GUIDE_FOUR_ACA_STEP', '<p><br />Voila! Du �r nu redo f�r att effektivt kommunicera med dina bes�kare och anv�ndare. Denna wizard kommer att avslutas n�r du har fixat din andra omg�ng med mail eller s� kan du st�nga av det i <a href="index2.php?option=com_acajoom&act=configuration" >konfigurationspanelen</a>.' .
		'<br /><br />  Om du har n�gra fr�gor medans du anv�nder Acajoom, refera till ' .
		'<a target="_blank" href="http://www.acajoom.com/index.php?option=com_joomlaboard&Itemid=26&task=listcat&catid=22" >forum</a>. ' .
		' Du hittar �ven massor med information p� hur du kommunicerar effektivt med dina prenumeranter p� <a href="http://www.acajoom.com/" target="_blank">www.Acajoom.com</a>.' .
		'<p /><br /><b>Tack f�r att du anv�nder Acajoom. Din Kommunikations Partner!</b> ');
define('_ACA_GUIDE_TURNOFF', 'Wizarden st�ngs nu av!');
define('_ACA_STEP', 'STEG ');

// Acajoom Install
define('_ACA_INSTALL_CONFIG', 'Acajoom Konfiguration');
define('_ACA_INSTALL_SUCCESS', 'Installerades');
define('_ACA_INSTALL_ERROR', 'Installations Fel');
define('_ACA_INSTALL_BOT', 'Acajoom Plugin (Bot)');
define('_ACA_INSTALL_MODULE', 'Acajoom Modul');
//Others
define('_ACA_JAVASCRIPT','!Varning! Javascript m�ste vara aktiverat f�r en fungerande operation.');
define('_ACA_EXPORT_TEXT','Prenumeranterna som exporterades baseras p� listan som du angav. <br />Exportera prenumeranter f�r lista');
define('_ACA_IMPORT_TIPS','Importera prenumeranter. Informationen i filen beh�ver vara i f�ljande format: <br />' .
		'Namn,e-post,mottaHTML(1/0),<span style="color: rgb(255, 0, 0);">bekr�ftad(1/0)</span>');
define('_ACA_SUBCRIBER_EXIT', '�r redan en prenumerant');
define('_ACA_GET_STARTED', 'Klicka h�r f�r att k�ra ig�ng!');

//News since 1.0.1
define('_ACA_WARNING_1011','Varning: 1011: Uppdatera kommer inte att fungera p� grund av dina server restrektioner.');
define('_ACA_SEND_MAIL_FROM_TIPS', 'V�lj vilken e-postadress som ska visas som avs�ndare.');
define('_ACA_SEND_MAIL_NAME_TIPS', 'V�lj vilket namn som ska visas som avs�ndare.');
define('_ACA_MAILSENDMETHOD_TIPS', 'V�lj vilken mail som du vill ska anv�ndas: PHP mail funktion, <span>Sendmail</span> eller SMTP Server.');
define('_ACA_SENDMAILPATH_TIPS', 'Detta �r mappen till Mailservern');
define('_ACA_LIST_T_TEMPLATE', 'Mall');
define('_ACA_NO_MAILING_ENTERED', 'Inget mailande tillhandah�lls');
define('_ACA_NO_LIST_ENTERED', 'Ingen lista tillhandah�lls');
define('_ACA_SENT_MAILING' , 'Skickade mail');
define('_ACA_SELECT_FILE', 'V�lj en fil att ');
define('_ACA_LIST_IMPORT', 'Kolla lista(or) som du vill att prenumeranter ska associeras med.');
define('_ACA_PB_QUEUE', 'Prenumerant inlagd men problem att ansluta han/henne till lista(or). Kolla manuellt.');
define('_ACA_UPDATE_MESS' , '');
define('_ACA_UPDATE_MESS1' , 'Uppdatering rekommenderas Mycket!');
define('_ACA_UPDATE_MESS2' , 'Patch och sm� �tg�rder.');
define('_ACA_UPDATE_MESS3' , 'Ny utg�va.');
define('_ACA_UPDATE_MESS5' , 'Joomla 1.5 beh�vs f�r att kunna uppdatera.');
define('_ACA_UPDATE_IS_AVAIL' , ' fins tillg�nglig!');
define('_ACA_NO_MAILING_SENT', 'Inga mail skickade!');
define('_ACA_SHOW_LOGIN', 'Visa logga in formul�r');
define('_ACA_SHOW_LOGIN_TIPS', 'V�lj Ja f�r att visa ett logga in formul�r i f�rstaside Acajoom kontrollpanelen s� att anv�ndare kan registrera sig p� hemsidan.');
define('_ACA_LISTS_EDITOR', 'Listans Beskrivnings Redigerare');
define('_ACA_LISTS_EDITOR_TIPS', 'V�lj Ja f�r att anv�nda en HTML redigerare f�r att redigera listans beskrivningsf�lt.');
define('_ACA_SUBCRIBERS_VIEW', 'Visa prenumeranter');

//News since 1.0.2
define('_ACA_FRONTEND_SETTINGS' , 'F�rstaside Inst�llningar' );
define('_ACA_SHOW_LOGOUT', 'Visa logga ut knapp');
define('_ACA_SHOW_LOGOUT_TIPS', 'V�lj Ja f�r att visa en logga ut knapp P� f�rstasidans Acajoom kontrollpanel.');

//News since 1.0.3 CB integration
define('_ACA_CONFIG_INTEGRATION', 'Integration');
define('_ACA_CB_INTEGRATION', 'Community Builder Integration');
define('_ACA_INSTALL_PLUGIN', 'Community Builder Plugin (Acajoom
Integration) ');
define('_ACA_CB_PLUGIN_NOT_INSTALLED', 'Acajoom Plugin f�r Community Builder �r �nnu inte installerad!');
define('_ACA_CB_PLUGIN', 'Listor vid registrering');
define('_ACA_CB_PLUGIN_TIPS', 'V�lj Ja f�r att visa maillistor i community builders registrerings formul�r');
define('_ACA_CB_LISTS', 'List ID:er');
define('_ACA_CB_LISTS_TIPS', 'DETTA �R ETT OBLIGATORISKT F�LT. Skriv in id nummer p� listor som du vill att anv�ndare ska ha till�telse att prenumerera p� separera med kommatecken,  (0 visa alla listor)');
define('_ACA_CB_INTRO', 'Introduktionstext');
define('_ACA_CB_INTRO_TIPS', 'En text som visas kommer att visas f�re listorna. L�MNA TOMT F�R ATT INTE VISA N�GONTING. Anv�nd cb_f�rtext f�r CSS layout.');
define('_ACA_CB_SHOW_NAME', 'Visa Listnamn');
define('_ACA_CB_SHOW_NAME_TIPS', 'V�lj om namnet p� listan ska visas efter introduktionen.');
define('_ACA_CB_LIST_DEFAULT', 'Kolla lista som standard');
define('_ACA_CB_LIST_DEFAULT_TIPS', 'V�lj om du vill att kryssrutan f�r varje lista ska kollas som standard.');
define('_ACA_CB_HTML_SHOW', 'Visa Mottag HTML');
define('_ACA_CB_HTML_SHOW_TIPS', 'St�ll in till Ja f�r att till�ta anv�ndare att besluta om dom ska ha HTML e-post eller inte. St�ll in till Nej f�r att anv�nda mottag html som standard.');
define('_ACA_CB_HTML_DEFAULT', 'Standard Mottag HTML');
define('_ACA_CB_HTML_DEFAULT_TIPS', 'St�ll in detta alternativ f�r att visa standard html mail konfiguration. Om Visa Mottag HTML �r inst�llt till Nej s� kommer detta val att vara standard.');

// Since 1.0.4
define('_ACA_BACKUP_FAILED', 'Kunde inte g�ra en backup p� filen! Filen ersattes inte.');
define('_ACA_BACKUP_YOUR_FILES', 'De �ldre versionsfilerna har backats upp till f�ljande mapp:');
define('_ACA_SERVER_LOCAL_TIME', 'Server lokaltid');
define('_ACA_SHOW_ARCHIVE', 'Visa arkivknapp');
define('_ACA_SHOW_ARCHIVE_TIPS', 'V�lj Ja f�r att visa arkivknappen p� f�rstasidan i Nyhetsbrevslistan');
define('_ACA_LIST_OPT_TAG', 'Taggar');
define('_ACA_LIST_OPT_IMG', 'Bilder');
define('_ACA_LIST_OPT_CTT', 'Inneh�ll');
define('_ACA_INPUT_NAME_TIPS', 'Fyll i ditt fullst�ndiga namn (f�rnamnet f�rst)');
define('_ACA_INPUT_EMAIL_TIPS', 'Fyll i din e-postadress (Var noga med att detta �r en giltig e-postadress om du vill mottaga v�ra nyhetsbrev.)');
define('_ACA_RECEIVE_HTML_TIPS', 'V�lj Ja om du vill mottaga HTML mail - Nej f�r att mottaga endast Text mail');
define('_ACA_TIME_ZONE_ASK_TIPS', 'Specificera din tidszon.');

// Since 1.0.5
define('_ACA_FILES' , 'Filer');
define('_ACA_FILES_UPLOAD' , 'Ladda Upp');
define('_ACA_MENU_UPLOAD_IMG' , 'Ladda Upp Bilder');
define('_ACA_TOO_LARGE' , 'Filstorleken �r f�r stor. Den till�tna maximala storleken �r');
define('_ACA_MISSING_DIR' , 'Destinations mappen existerar inte');
define('_ACA_IS_NOT_DIR' , 'Destinations mappen existerar inte eller �r inte en ordin�r fil.');
define('_ACA_NO_WRITE_PERMS' , 'Destinations mappen �r skrivskyddad.');
define('_ACA_NO_USER_FILE' , 'Du har inte valt en fil att ladda upp.');
define('_ACA_E_FAIL_MOVE' , 'Om�jligt att flytta filen.');
define('_ACA_FILE_EXISTS' , 'Destinationsfilen finns redan.');
define('_ACA_CANNOT_OVERWRITE' , 'Destinationsfilen finns redan och kan d�rf�r inte skrivas �ver.');
define('_ACA_NOT_ALLOWED_EXTENSION' , 'Fil�ndelsen �r inte till�ten.');
define('_ACA_PARTIAL' , 'Filen laddades delvis bara upp.');
define('_ACA_UPLOAD_ERROR' , 'Uppladdningsfel:');
define('DEV_NO_DEF_FILE' , 'Filen laddades delvis bara upp.');

define('_ACA_CONTENTREP', '[SUBSCRIPTIONS] = Detta kommer att ers�ttas med prenumerationsl�nkar.' .
		'Detta �r <strong>n�dv�ndigt</strong> f�r att Acajoom ska fungera korrekt.<br />' .
		'Om du placerar annat inneh�ll i denna ruta s� kommer det att visas i alla mail som h�nvisas till denna lista.' .
		' <br />L�gg till ditt prenumerations meddelande i slutet.  Acajoom kommer automatiskt att l�gga till en l�nk f�r prenumeranten att �ndra sin information och en l�nk f�r att sluta prenumera fr�n listan.');

// since 1.0.6
define('_ACA_NOTIFICATION', 'Meddelande');  // shortcut for Email notification
define('_ACA_NOTIFICATIONS', 'Meddelanden');
define('_ACA_USE_SEF', 'SEF i mail');
define('_ACA_USE_SEF_TIPS', 'Det �r rekommenderat att du v�ljer Nej.  Men om du vill att URL,en ska inkluderas i din mail f�r att anv�nda SEF v�lj d� Ja.' .
		' <br /><b>L�nkarna fungerar p� samma sett oavsett val.  Nej kommer att f�rs�kra dig att l�nkarna i mailen kommer alltid att fungera �ven om du �ndrar din SEF.</b> ');
define('_ACA_ERR_NB' , 'Fel #: ERR');
define('_ACA_ERR_SETTINGS', 'Felhanterings inst�llningar');
define('_ACA_ERR_SEND' ,'Skicka felrapport');
define('_ACA_ERR_SEND_TIPS' ,'Om du vill att Acajoom ska bli en b�ttre produkt v�lj JA.  Detta kommer att s�nda oss en felrapport.  S� du beh�ver inte sj�lv rapportera buggar l�ngre ;-) <br /> <b>INGEN PRIVAT INFORMATION KOMMER ATT SKICKAS</b>.  Vi vet inte ens fr�n vilken hemsida felet kommer ifr�n. Vi skickar endast information om Acajoom, PHP inst�llningarna och SQL fr�gor. ');
define('_ACA_ERR_SHOW_TIPS' ,'V�lj Ja f�r att visa felnummer p� sk�rmen.  Anv�nds oftast f�r att avbuggnings syfte. ');
define('_ACA_ERR_SHOW' ,'Visa fel');
define('_ACA_LIST_SHOW_UNSUBCRIBE', 'Visa prenumerera Inte l�nkar');
define('_ACA_LIST_SHOW_UNSUBCRIBE_TIPS', 'V�lj Ja f�r att visa prenumerera Inte l�nkar i botten av mailen f�r anv�ndare f�r m�jligheten att �ndra sina prenumerationer. <br /> Nej avaktivera footer och l�nkar.');
define('_ACA_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">VIKTIGT MEDDELANDE!</span> <br />Om du uppgraderar fr�n en tidigare version av Acajoom installation s� beh�ver du �ven uppgradera din databas struktur genom att klicka p� f�ljande knapp (Din data kommer fortfarande att vara fullst�ndig)');
define('_ACA_UPDATE_INSTALL_BTN' , 'Uppgradera tabeller och konfiguration');
define('_ACA_MAILING_MAX_TIME', 'Max k�tid' );
define('_ACA_MAILING_MAX_TIME_TIPS', 'Definera den maximala tiden f�r varje mailutskick skickad av k�n. Rekommenderat mellan 30 s och 2 min.');

// virtuemart integration beta
define('_ACA_VM_INTEGRATION', 'VirtueMart Integrering');
define('_ACA_VM_COUPON_NOTIF', 'Kupong meddelande ID');
define('_ACA_VM_COUPON_NOTIF_TIPS', 'Specificera ID numret av mail som du vill anv�nda f�r att skicka kuponger till dina k�pare.');
define('_ACA_VM_NEW_PRODUCT', 'Ny produkt meddelande ID');
define('_ACA_VM_NEW_PRODUCT_TIPS', 'Specificera ID numret av mail som du vill anv�nda f�r att skicka ny produkt meddelande.');

// since 1.0.8
// create forms for subscriptions
define('_ACA_FORM_BUTTON', 'Skapa formul�r');
define('_ACA_FORM_COPY', 'HTML kod');
define('_ACA_FORM_COPY_TIPS', 'Kopiera den generade HTML koden till din HTML sida.');
define('_ACA_FORM_LIST_TIPS', 'V�lj listan som du vill inkludera i forml�ret');
// update messages
define('_ACA_UPDATE_MESS4' , 'Det kan inte uppdateras automatiskt.');
define('_ACA_WARNG_REMOTE_FILE' , 'Ingen m�jlighet att komma �t den fj�rranv�nda filen.');
define('_ACA_ERROR_FETCH' , 'Fel vid h�mtning av fil.');

define('_ACA_CHECK' , 'Kolla');
define('_ACA_MORE_INFO' , 'Mer info');
define('_ACA_UPDATE_NEW' , 'Uppdatera till en nyare version');
define('_ACA_UPGRADE' , 'Uppgradera till en h�gre produkt');
define('_ACA_DOWNDATE' , '�terg� till f�reg�ende version');
define('_ACA_DOWNGRADE' , 'Tillbaka till standard produkten');
define('_ACA_REQUIRE_JOOM' , 'Beh�ver Joomla');
define('_ACA_TRY_IT' , 'Prova p�!');
define('_ACA_NEWER', 'Nyare');
define('_ACA_OLDER', '�ldre');
define('_ACA_CURRENT', 'Nuvarande');

// since 1.0.9
define('_ACA_CHECK_COMP', 'Prova n�gon annan komponent');
define('_ACA_MENU_VIDEO' , 'Video undervisning');
define('_ACA_AUTO_SCHEDULE', 'Schema');
define('_ACA_SCHEDULE_TITLE', 'Automatiska schemafunktions inst�llningar');
define('_ACA_ISSUE_NB_TIPS' , 'Utf�rdar nummer generades automatiskt av systemet' );
define('_ACA_SEL_ALL' , 'Alla mail');
define('_ACA_SEL_ALL_SUB' , 'Alla listor');
define('_ACA_INTRO_ONLY_TIPS' , 'Om du markerar denna ruta s� kommer endast introduktionen av artikeln att s�ttas in i mailet med en l�s mer l�nk f�r att se hela artikeln p� din sida.' );
define('_ACA_TAGS_TITLE' , 'Inneh�lls tagg');
define('_ACA_TAGS_TITLE_TIPS' , 'Kopiera och klistra denna tagg i ditt mail d�r du vill ha inneh�llet placerat.');
define('_ACA_PREVIEW_EMAIL_TEST', 'Markera emailadressen att skicka testet till');
define('_ACA_PREVIEW_TITLE' , 'F�rhandsgranska');
define('_ACA_AUTO_UPDATE' , 'Nytt uppdaterings meddelande');
define('_ACA_AUTO_UPDATE_TIPS' , 'V�lj Ja om du vill bli meddelad vid nya uppdateringar f�r din komponent. <br />VIKTIGT!! Visa tips beh�ver vara p� f�r att denna funktion ska fungera.');

// since 1.1.0
define('_ACA_LICENSE' , 'Licens Information');


// since 1.1.1
define('_ACA_NEW' , 'Ny');
define('_ACA_SCHEDULE_SETUP', 'F�r att autorespondrarna ska skickas s� beh�ver du st�lla in schemat i konfigurationen.');
define('_ACA_SCHEDULER', 'Schema');
define('_ACA_ACAJOOM_CRON_DESC' , 'om du inte har tillg�ng till cron hanteraren p� din hemsida, s� kan du registrera dig f�r ett fritt Acajoom Cron konto hos:' );
define('_ACA_CRON_DOCUMENTATION' , 'Du kan hitta ytterliggare information om att st�lla in Acajoom Schemat vid f�ljande url:');
define('_ACA_CRON_DOC_URL' , '<a href="http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29"
 target="_blank">http://www.acajoom.com/index.php?option=com_content&task=blogcategory&id=29</a>' );
define( '_ACA_QUEUE_PROCESSED' , 'K� behandling lyckades...' );
define( '_ACA_ERROR_MOVING_UPLOAD' , 'Fel vid flytt av importerad fil' );

//since 1.1.4
define( '_ACA_SCHEDULE_FREQUENCY' , 'Schema frekvens' );
define( '_ACA_CRON_MAX_FREQ' , 'Schemats maximala frekvens' );
define( '_ACA_CRON_MAX_FREQ_TIPS' , 'Specificera den maximala frekvensen som schemat kan k�ra ( i minuter ).  Detta kommer att begr�nsa schemat �ven om cron hanteraren �r uppsatt mer frekvent.' );
define( '_ACA_CRON_MAX_EMAIL' , 'Maximala antalet mail per uppgift' );
define( '_ACA_CRON_MAX_EMAIL_TIPS' , 'Specificera det maximala antalet mail s�nda per uppgift (0 obegr�nsat).' );
define( '_ACA_CRON_MINUTES' , ' minuter' );
define( '_ACA_SHOW_SIGNATURE' , 'Visa mailfooter' );
define( '_ACA_SHOW_SIGNATURE_TIPS' , 'Oavsett om du vill eller inte vill promota Acajoom i footern av dina mail.' );
define( '_ACA_QUEUE_AUTO_PROCESSED' , 'Auto-responder behandling lyckades...' );
define( '_ACA_QUEUE_NEWS_PROCESSED' , 'Schemalagd nyhetsbrevsbehandling lyckades...' );
define( '_ACA_MENU_SYNC_USERS' , 'Synkronisera Anv�ndare' );
define( '_ACA_SYNC_USERS_SUCCESS' , 'Anv�ndar Synkroniseringen Lyckades!' );

// compatibility with Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logga Ut' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Ja' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Nej' );
if (!defined('_HI')) define( '_HI', 'Hej' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Topp' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Botten' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_ACA_TITLE_ONLY_TIPS' , 'Om du v�ljer detta s� kommer endast titeln i artikeln att s�ttas in i mailet som en l�nk till den kompletta artikeln p� din sida.');
define('_ACA_TITLE_ONLY' , 'Endast Titel');
define('_ACA_FULL_ARTICLE_TIPS' , 'Om du v�ljer detta s� kommer hela artiklen att s�ttas in i mailet');
define('_ACA_FULL_ARTICLE' , 'Hel Artikel');
define('_ACA_CONTENT_ITEM_SELECT_T', 'V�lj ett inneh�llsobjekt att visas i meddelandet. <br />Kopiera och klistra <b>inneh�lls taggen</b> i mailet.  Du kan v�lja att ha hela texten, endast intro, eller endast titel med (0, 1, eller 2 var f�r sig). ');
define('_ACA_SUBSCRIBE_LIST2', 'Mail lista(or)');

// smart-newsletter function
define('_ACA_AUTONEWS', 'Smart-Nyhetsbrev');
define('_ACA_MENU_AUTONEWS', 'Smart-Nyhetsbrev');
define('_ACA_AUTO_NEWS_OPTION', 'Smart-Nyhetsbrevs val');
define('_ACA_AUTONEWS_FREQ', 'Nyhetsbrevs Frekvens');
define('_ACA_AUTONEWS_FREQ_TIPS', 'Specificera frekvensen som du vill skicka smart-nyhetsbrevet.');
define('_ACA_AUTONEWS_SECTION', 'Artikel Sektion');
define('_ACA_AUTONEWS_SECTION_TIPS', 'Specificera sektionen som du vill v�lja artiklar ifr�n.');
define('_ACA_AUTONEWS_CAT', 'Artikel Kategori');
define('_ACA_AUTONEWS_CAT_TIPS', 'Specificera kategorin som du vill v�lja artiklar ifr�n (Alla f�r alla artiklar i den sektionen).');
define('_ACA_SELECT_SECTION', 'V�lj en sektion');
define('_ACA_SELECT_CAT', 'Alla Kategorier');
define('_ACA_AUTO_DAY_CH8', 'Kvartalsvis');
define('_ACA_AUTONEWS_STARTDATE', 'Start datum');
define('_ACA_AUTONEWS_STARTDATE_TIPS', 'Specificera datumet som du vill starta s�ndning av Smart Nyhetsbrev.');
define('_ACA_AUTONEWS_TYPE', 'Inneh�lls �tergivning');// how we see the content which is included in the newsletter
define('_ACA_AUTONEWS_TYPE_TIPS', 'Hel Artikel: kommer att inkludera hela artikeln i nyhetsbrevet.<br />' .
		'Endast Intro: kommer endast att inkludera introduktionen av artikeln i nyhetsbrevet.<br/>' .
		'Endast Titel: kommer endast att inkludera titeln p� artikeln i nyhetsbrevet.');
define('_ACA_TAGS_AUTONEWS', '[SMARTNYHETSBREV] = Detta kommer att ers�ttas med Smart-nyhetsbrevet.' );

//since 1.1.3
define('_ACA_MALING_EDIT_VIEW', 'Skapa / Visa Mail');
define('_ACA_LICENSE_CONFIG' , 'Licens' );
define('_ACA_ENTER_LICENSE' , 'Fyll i licens');
define('_ACA_ENTER_LICENSE_TIPS' , 'Fyll i ditt licensnummer och tryck p� spara.');
define('_ACA_LICENSE_SETTING' , 'Licensinst�llningar' );
define('_ACA_GOOD_LIC' , 'Din licens �r giltig.' );
define('_ACA_NOTSO_GOOD_LIC' , 'Din licens �r inte giltig: ' );
define('_ACA_PLEASE_LIC' , 'Kontakta Acajoom support f�r att uppgradera din licens ( license@acajoom.com ).' );

define('_ACA_DESC_PLUS', 'Acajoom Plus �r den f�rsta auto-responder sekvensen f�r Joomla CMS.  ' . _ACA_FEATURES );
define('_ACA_DESC_PRO', 'Acajoom PRO �r det ultimata mailsystemet f�r Joomla CMS.  ' . _ACA_FEATURES );

//since 1.1.4
define('_ACA_ENTER_TOKEN' , 'Fyll i bevis');
define('_ACA_ENTER_TOKEN_TIPS' , 'Var v�nlig och fyll i ditt bevisnummer som du mottog via mail n�r du k�pte Acajoom. ');
define('_ACA_ACAJOOM_SITE', 'Acajoom sidan:');
define('_ACA_MY_SITE', 'Min sida:');
define( '_ACA_LICENSE_FORM' , ' ' .
 		'Klicka h�r f�r att forts�tta till licensformul�ret.</a>' );
define('_ACA_PLEASE_CLEAR_LICENSE' , 'T�m licensf�ltet och prova p� nytt igen.<br />  Om problemet kvarst�r, ' );
define( '_ACA_LICENSE_SUPPORT' , 'Om du fortfarande har fr�gor, ' . _ACA_PLEASE_LIC );
define( '_ACA_LICENSE_TWO' , 'du kan f� din licensmanual genom att fylla i bevisnumret och sidans URL (som �r belyst i gr�nt i toppen av denna sida) i Licensformul�ret. '
			. _ACA_LICENSE_FORM . '<br /><br/>' . _ACA_LICENSE_SUPPORT );
define('_ACA_ENTER_TOKEN_PATIENCE', 'Efter att du sparat ditt bevis s� kommer en licens att automatiskt genereras. ' .
		' Vanligtvis s� �r blir beviset validerat inom 2 minuter.  Men, i vissa fall s� kan det ta upp till 15 minuter.<br />' .
		'<br />�terkom till denna kontrollpanel om ett par minuter.  <br /><br />' .
		'Om du inte mottagit en giltig licensnyckel inom 15 minuter, '. _ACA_LICENSE_TWO);
define( '_ACA_ENTER_NOT_YET' , 'Ditt bevis har �nnu inte blivit validerat.');
define( '_ACA_UPDATE_CLICK_HERE' , 'Bes�k <a href="http://www.acajoom.com" target="_blank">www.acajoom.com</a> f�r att ladda ner den senaste versionen.');
define( '_ACA_NOTIF_UPDATE' , 'F�r att bli meddelad om nya uppdateringar skriv in din emailadress och klicka p� prenumerera ');

define('_ACA_THINK_PLUS', 'Om du vill f� ut mer av mailsystemet t�nk d� p� Plus!');
define('_ACA_THINK_PLUS_1', 'Auto-responder Sekvens');
define('_ACA_THINK_PLUS_2', 'Schemal�gg leveransen av ditt nyhetsbrev med ett f�rdefinerat datum');
define('_ACA_THINK_PLUS_3', 'Ingen mer serverbegr�nsning');
define('_ACA_THINK_PLUS_4', 'och mycket mer...');


//since 1.2.2
define( '_ACA_LIST_ACCESS', 'List �tkomst' );
define( '_ACA_INFO_LIST_ACCESS', 'Specificera vilken grupp av anv�ndare som kan se och prenumerera p� denna lista' );
define( 'ACA_NO_LIST_PERM', 'Du har inte tillr�cklig beh�righet f�r att prenumerera p� denna lista' );

//Archive Configuration
 define('_ACA_MENU_TAB_ARCHIVE', 'Arkivera');
 define('_ACA_MENU_ARCHIVE_ALL', 'Arkivera Alla');

//Archive Lists
 define('_FREQ_OPT_0', 'Inga');
 define('_FREQ_OPT_1', 'Varje Vecka');
 define('_FREQ_OPT_2', 'Varannan Vecka');
 define('_FREQ_OPT_3', 'Varje M�nad');
 define('_FREQ_OPT_4', 'Varje Kvartal');
 define('_FREQ_OPT_5', 'Varje �r');
 define('_FREQ_OPT_6', 'Annat');

define('_DATE_OPT_1', 'Skapar datum');
define('_DATE_OPT_2', '�ndrings datum');

define('_ACA_ARCHIVE_TITLE', 'St�ller in auto-arkiv frekvensen');
define('_ACA_FREQ_TITLE', 'Arkiv frekvens');
define('_ACA_FREQ_TOOL', 'Definera hur ofta som du vill att Arkiv Hanteraren ska arkivera din hemsidas inneh�ll.');
define('_ACA_NB_DAYS', 'Antal dagar');
define('_ACA_NB_DAYS_TOOL', 'Detta �r endast f�r Annat alternativet! Specificera antalet dagar mellan varje arkivering.');
define('_ACA_DATE_TITLE', 'Datumtyp');
define('_ACA_DATE_TOOL', 'Definera om arkiveringen ska ske vis skapardatumet eller vid �ndringsdatumet.');

define('_ACA_MAINTENANCE_TAB', 'Underh�llsinst�llningar');
define('_ACA_MAINTENANCE_FREQ', 'Underh�llsfrekvens');
define( '_ACA_MAINTENANCE_FREQ_TIPS', 'Specificera frekvensen som du vill att underh�llsrutinen ska k�ras.' );
define( '_ACA_CRON_DAYS' , 'timme(ar)' );

define( '_ACA_LIST_NOT_AVAIL', 'Det finns ingen lista tillg�nglig.');
define( '_ACA_LIST_ADD_TAB', 'Skapa/Redigera' );

define( '_ACA_LIST_ACCESS_EDIT', 'Mail Skapa/Redigera �tkomst' );
define( '_ACA_INFO_LIST_ACCESS_EDIT', 'Specificera vilken grupp av anv�ndare som kan redigera nya mail f�r denna lista' );
define( '_ACA_MAILING_NEW_FRONT', 'Skapa en Ny Mail' );

define('_ACA_AUTO_ARCHIVE', 'Auto-Arkiv');
define('_ACA_MENU_ARCHIVE', 'Auto-Arkiv');

//Extra tags:
define('_ACA_TAGS_ISSUE_NB', '[ISSUENB] = Detta kommer att ers�ttas av utg�vonumret p� nyhetsbrevet.');
define('_ACA_TAGS_DATE', '[DATE] = Detta kommer att ers�ttas av s�ndningsdatum.');
define('_ACA_TAGS_CB', '[CBTAG:{field_name}] = Detta kommer att ers�ttas av v�rdet som kommer fr�n Community Builder f�ltet: ex. [CBTAG:firstname] ');
define( '_ACA_MAINTENANCE', 'Underh�ll' );


define('_ACA_THINK_PRO', 'N�r du har professionella �nskem�l, s� anv�nder du professionella komponenter!');
define('_ACA_THINK_PRO_1', 'Smart-Nyhetsbrev');
define('_ACA_THINK_PRO_2', 'Definera �tkomstniv� f�r din lista');
define('_ACA_THINK_PRO_3', 'Definera vem som kan redigera/skapa mail');
define('_ACA_THINK_PRO_4', 'Mera taggar: skapa ditt CB f�lt');
define('_ACA_THINK_PRO_5', 'Joomla inneh�lls Auto-arkiv');
define('_ACA_THINK_PRO_6', 'Databasoptimering');

define('_ACA_LIC_NOT_YET', 'Din licens �r �nnu inte giltig.  Var v�nlig och unders�k licensfliken i konfigurationspanelen.');
define('_ACA_PLEASE_LIC_GREEN' , 'Var noga med att ange den gr�na informationen vid toppen av fliken till v�rat supportteam.' );

define('_ACA_FOLLOW_LINK' , 'Skaffa Din Licens');
define( '_ACA_FOLLOW_LINK_TWO' , 'Du kan f� din licens genom att fylla i bevisnumret och sidans URL (som belyses med gr�nt i toppen p� denna sida) i Licensformul�ret. ');
define( '_ACA_ENTER_TOKEN_TIPS2', ' Klicka sedan p� L�gg till knappen i den �vre h�gra menyn.' );
define( '_ACA_ENTER_LIC_NB', 'Fyll i Din Licens' );
define( '_ACA_UPGRADE_LICENSE', 'Uppgradera Din Licens');
define( '_ACA_UPGRADE_LICENSE_TIPS' , 'Om du mottagit ett bevis f�r uppgradering av din licens var d� v�nlig och fyll i den h�r, klicka p� L�gg till och forts�tt till nummer <b>2</b> f�r att f� ditt nya licensnummer.' );

define( '_ACA_MAIL_FORMAT', 'Kodformat' );
define( '_ACA_MAIL_FORMAT_TIPS', 'Vilket format vill du anv�nda f�r att koda dina mail, Endast text eller MIME' );
define( '_ACA_ACAJOOM_CRON_DESC_ALT', 'Om du inte har tillg�ng till en cronjobbs hanteraren p� din hemsida, s� kan du anv�nda den Fria jCron komponenten f�r att skapa ett cron jobb fr�n din hemsida.' );

//since 1.3.1
define('_ACA_SHOW_AUTHOR', 'Show Author\'s Name');
define('_ACA_SHOW_AUTHOR_TIPS', 'Select Yes if you want to add the name of the author when you add an article in the Mailing');

//since 1.3.5
define('_ACA_REGWARN_NAME','Ange ditt namn.');
define('_ACA_REGWARN_MAIL','Ange en giltig e-postadress.');

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