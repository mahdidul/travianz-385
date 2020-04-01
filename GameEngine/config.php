<?php
###############################  S  T  A  R  T   ################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       config.php                                                  ##
##  Version        8.0                                                         ##
##  Developed by:  Dzoki and Dixie Edited by Advocaite                         ##
##  License:       TravianZ Project                                            ##
##  Copyright:     TravianZ (c) 2013-2014. All rights reserved.                ##
##  Modified by:   Shadow and ronix                                            ##
##                                                                             ##
#################################################################################

//////////////////////////////////
// *****  ERROR REPORTING  *****//
//////////////////////////////////
// (E_ALL ^ E_NOTICE) = enabled
// (0) = disabled
define("ERROR_REPORT","error_reporting (E_ALL ^ E_NOTICE);");
error_reporting (E_ALL ^ E_NOTICE);

//////////////////////////////////
// *****  SERVER SETTINGS  *****//
//////////////////////////////////

// ***** Name
define("SERVER_NAME","TravianZ");

// ***** Time zone added by ronix
// Defines server time zone.
define("TIMEZONE","Asia/Kuala_Lumpur");
date_default_timezone_set(TIMEZONE);

// ***** Started
// Defines when has server started.
define("COMMENCE","1585732537");

// ***** Server Start Date / Time
define("START_DATE", "01.04.2020");
define("START_TIME", "16:00");

// ***** Language
// Choose your server language.
define("LANG","en");

// ***** Speed
// Choose your server speed. NOTICE: Higher speed, more likely
// to have some bugs. Lower speed, most likely no major bugs.
// Values: 1 (normal), 3 (3x speed) etc...
define("SPEED", "50000");

// ***** World size
// Defines world size. NOTICE: DO NOT EDIT!!
define("WORLD_MAX", "200");

// ***** Graphic Pack
// true = enabled, false = disabled
//!!!!!!!!!!!! DO NOT ENABLE !!!!!!!!!!!!
define("GP_ENABLE",false);
// Graphic pack location (default: gpack/travian_default/)
define("GP_LOCATE", "gpack/travian_default/");

// ***** Troop Speed
// Values: 1 (normal), 3 (3x speed) etc...
define("INCREASE_SPEED","1000");

// ***** Evasion Speed
define("EVASION_SPEED","50000");

// ***** Trader capacity
// Values: 1 (normal), 3 (3x speed) etc...
define("TRADER_CAPACITY","50000");

// ***** Cranny capacity
define("CRANNY_CAPACITY","50000");

// ***** Trapper capacity
define("TRAPPER_CAPACITY","50000");

// ***** Village Expand
// 1 = slow village expanding - more Cultural Points needed for every new village
// 0 = fast village expanding - less Cultural Points needed for every new village
define("CP", 1);

// ***** Demolish Level Required
// Defines which level of Main building is required to be able to
// demolish. Min value = 1, max value = 20
// Default: 10
define("DEMOLISH_LEVEL_REQ","10");

// ***** Change storage capacity
define("STORAGE_MULTIPLIER","50000");
define("STORAGE_BASE",800*STORAGE_MULTIPLIER);

// ***** Quest
// Ingame quest enabled/disabled.
define("QUEST",true);
//quest type : 25 = Travian Official 
//             37 = TravianZ Extended 
define("QTYPE",25);

// ***** Beginners Protection
// 3600 = 1 hour
// 3600*12 = 12 hours
// 3600*24 = 1 day
// 3600*24*3 = 3 days
// You can choose any value you want!
define("PROTECTION","43200");

// ***** Enable WW Statistics
define("WW",True);

// ***** Show Natars in Statistics
define("SHOW_NATARS",True); 

// ***** Natars Units Multiplier
define("NATARS_UNITS",50000); 

// ***** Natars Spawn Time
define("NATARS_SPAWN_TIME",1); 
define("NATARS_WW_SPAWN_TIME",1); 
define("NATARS_WW_BUILDING_PLAN_SPAWN_TIME",1); 

// ***** Nature troops regeneration time
define("NATURE_REGTIME",3600);

// ***** Oasis production
define("OASIS_WOOD_MULTIPLIER",200000); 
define("OASIS_CLAY_MULTIPLIER",200000); 
define("OASIS_IRON_MULTIPLIER",200000); 
define("OASIS_CROP_MULTIPLIER",200000); 
define("OASIS_WOOD_PRODUCTION",OASIS_WOOD_MULTIPLIER*SPEED);
define("OASIS_CLAY_PRODUCTION",OASIS_CLAY_MULTIPLIER*SPEED);
define("OASIS_IRON_PRODUCTION",OASIS_IRON_MULTIPLIER*SPEED);
define("OASIS_CROP_PRODUCTION",OASIS_CROP_MULTIPLIER*SPEED); 

// ***** Enable T4 is Coming screen
define("T4_COMING",false);

// ***** Activation Mail
// true = activation mail will be sent, users will have to finish registration
//        by clicking on link recieved in mail.
// false =  users can register with any mail. Not needed to be real one.
define("AUTH_EMAIL",false);

// ***** PLUS
//Plus PayPal e-mail address
define("PAYPAL_EMAIL","@");
//Plus PayPal currency
define("PAYPAL_CURRENCY","EUR");
//Plus Package A Price
define("PLUS_PACKAGE_A_PRICE","1,99");
//Plus Package A Gold
define("PLUS_PACKAGE_A_GOLD","60");
//Plus Package B Price
define("PLUS_PACKAGE_B_PRICE","4,99");
//Plus Package B Gold
define("PLUS_PACKAGE_B_GOLD","120");
//Plus Package C Price
define("PLUS_PACKAGE_C_PRICE","9,99");
//Plus Package C Gold
define("PLUS_PACKAGE_C_GOLD","360");
//Plus Package D Gold
define("PLUS_PACKAGE_D_GOLD","1000");
//Plus Package D Price
define("PLUS_PACKAGE_D_PRICE","19,99");
//Plus Package E Price
define("PLUS_PACKAGE_E_PRICE","49,99");
//Plus Package E Gold
define("PLUS_PACKAGE_E_GOLD","2000");
//Plus account lenght
define("PLUS_TIME",604800);
//+25% production lenght
define("PLUS_PRODUCTION",604800);
// ***** Medal Interval check
define("MEDALINTERVAL",(3600*24));
// ***** Great Workshop
define("GREAT_WKS",True);
// ***** Tourn threshold
define("TS_THRESHOLD",50000);  

// ***** Register open/close
define("REG_OPEN",True);

// ***** Peace system
// 0 = None
// 1 = Normal
// 2 = Christmas
// 3 = New Year
// 4 = Easter
define("PEACE",0);

//////////////////////////////////
//    **** LOG SETTINGS  ****   //
//////////////////////////////////
// LOG BUILDING/UPGRADING
define("LOG_BUILD",false);
// LOG RESEARCHES
define("LOG_TECH",false);
// LOG USER LOGIN (IP's)
define("LOG_LOGIN",false);
// LOG GOLD
define("LOG_GOLD_FIN",false);
// LOG ADMIN
define("LOG_ADMIN",false);
// LOG ATTACK REPORTS
define("LOG_WAR",false);
// LOG MARKET REPORTS
define("LOG_MARKET",false);
// LOG ILLEGAL ACTIONS
define("LOG_ILLEGAL",false);



//////////////////////////////////
// ****  NEWSBOX SETTINGS  **** //
//////////////////////////////////
//true = enabled
//false = disabled
define("NEWSBOX1",false);
define("NEWSBOX2",false);
define("NEWSBOX3",false);



//////////////////////////////////
//   ****  SQL SETTINGS  ****   //
//////////////////////////////////

// ***** SQL Hostname
// example: sql106.000space.com / localhost
// If you host server on own PC than this value is: localhost
// If you use online hosting, value must be written in host cpanel
define("SQL_SERVER", "localhost");

// ***** SQL Port
// default: 3306
define("SQL_PORT", 3306);

// ***** Database Username
define("SQL_USER", "root");

// ***** Database Password
define("SQL_PASS", "");

// ***** Database Name
define("SQL_DB", "travian");

// ***** Database - Table Prefix
define("TB_PREFIX", "s1_");

// ***** Database type
// 0 = MYSQL
// 1 = MYSQLi
// default: 1
define("DB_TYPE", 1);



////////////////////////////////////
//   ****  EXTRA SETTINGS  ****   //
////////////////////////////////////

// ***** Censore words
//define("WORD_CENSOR", "%ACTCEN%");

// ***** Words (censore)
// Choose which words do you want to be censored
//define("CENSORED","%CENWORDS%");


// ***** Limit Mailbox
// Limits mailbox to defined number of mails. (IGM's)
define("LIMIT_MAILBOX",false);
// If enabled, define number of maximum mails.
define("MAX_MAIL","30");

// ***** Include administrator in statistics/rank
define("INCLUDE_ADMIN", false);



////////////////////////////////////
//   ****  ADMIN SETTINGS  ****   //
////////////////////////////////////

// ***** Admin Email
define("ADMIN_EMAIL", "mahdi.abdullah.92@gmail.com");

// ***** Admin Name
define("ADMIN_NAME", "mahdi");

// ***** Show Support Messages in Admin
define("ADMIN_RECEIVE_SUPPORT_MESSAGES", true);

// ***** Allow Admin accounts to be raided and attacked
define("ADMIN_ALLOW_INCOMING_RAIDS", true);


/////////////////////////////////////////////////
//   ****  NEW MECHANICS AND FUNCTIONS  ****   //
/////////////////////////////////////////////////
define("NEW_FUNCTIONS_OASIS", true);
define("NEW_FUNCTIONS_ALLIANCE_INVITATION", true);
define("NEW_FUNCTIONS_EMBASSY_MECHANICS", true);
define("NEW_FUNCTIONS_FORUM_POST_MESSAGE", true);
define("NEW_FUNCTIONS_TRIBE_IMAGES", true);
define("NEW_FUNCTIONS_MHS_IMAGES", true);
define("NEW_FUNCTIONS_DISPLAY_ARTIFACT", true);
define("NEW_FUNCTIONS_DISPLAY_WONDER", true);
define("NEW_FUNCTIONS_VACATION", true);
define("NEW_FUNCTIONS_DISPLAY_CATAPULT_TARGET", true);
define("NEW_FUNCTIONS_MANUAL_NATURENATARS", true);
define("NEW_FUNCTIONS_DISPLAY_LINKS", true);
define("NEW_FUNCTIONS_MEDAL_3YEAR", true);
define("NEW_FUNCTIONS_MEDAL_5YEAR", true);
define("NEW_FUNCTIONS_MEDAL_10YEAR", true);


//////////////////////////////////////////
//   ****  DO NOT EDIT SETTINGS  ****   //
//////////////////////////////////////////
define("AUTO_DEL_INACTIVE",false); // auto-delete inactive players; default = false
define("UN_ACT_TIME", 3628800); // 6 weeks to consider a player inactive
//define("TRACK_USR","");
//define("USER_TIMEOUT","");
define("TRACK_USR",true); // track users' being active or not
define("USER_TIMEOUT",3600); // 1 hour of no activity counts as inactivity
define("ALLOW_BURST",false);
define("BASIC_MAX",1);
define("INNER_MAX",1);
define("PLUS_MAX",1);
define("ALLOW_ALL_TRIBE",false);
define("CFM_ADMIN_ACT",true);
define("SERVER_WEB_ROOT",false);
define("USRNM_SPECIAL",true);
define("USRNM_MIN_LENGTH",3);
define("PW_MIN_LENGTH",4);
define("BANNED",0);
define("AUTH",1);
define("USER",2);
define("MULTIHUNTER",8);
define("ADMIN",9);
define("COOKIE_EXPIRE", 60*60*24*7); 
define("COOKIE_PATH", "/"); 
define("LOG_PAGE_ACCESS", false);
define("PAGE_ACCESS_LOG_DATE", true);
define("PAGE_ACCESS_LOG_IP", true);
define("PAGE_ACCESS_LOG_FILENAME", 'access.log'); // filename ONLY, no path!


////////////////////////////////////////////
//   ****  DOMAIN/SERVER SETTINGS  ****   //
////////////////////////////////////////////
define("DOMAIN", "http://localhost/");
define("HOMEPAGE", "http://localhost/");
define("SERVER", "http://localhost/");

$requse = 0;

###############################  E    N    D   ##################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       config.php                                                  ##
##  Version        4.8.5                                                       ##
##  Developed by:  Dzoki and Dixie Edited by Advocaite                         ##
##  License:       TravianX Project                                            ##
##  Copyright:     TravianX (c) 2010-2011. All rights reserved.                ##
##                                                                             ##
#################################################################################

?>
