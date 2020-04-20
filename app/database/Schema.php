<?php

namespace app\database;

class Schema {

    const NAME = 'name';
    const TABLE = 'table';
    const COLUMN = 'column';
    const ACTIVEDIRECTORY = 'ActiveDirectory';
    const APP = 'App';
    const AUTH = 'Auth';
    const DISTRICT = 'District';
    const DEPARTMENT = 'Department';
    const EMAIL = 'Email';
    const GOOGLEAPPS = 'GoogleApps';
    const GRADE = 'Grade';
    const GRADEDEFINITION = 'GradeDefinition';
    const LOGON = 'Logon';
    const SCHOOL = 'School';
    const USER = 'Session';
    const TEAM = 'Team';
    const ACTIVEDIRECTORY_ID = array('table' => 'ActiveDirectory', 'column' => 'ID', 'name' => 'ActiveDirectory_ID');
    const ACTIVEDIRECTORY_DISTRICT_ID = array('table' => 'ActiveDirectory', 'column' => 'District_ID', 'name' => 'ActiveDirectory_District_ID');
    const ACTIVEDIRECTORY_SCHOOL_ID = array('table' => 'ActiveDirectory', 'column' => 'School_ID', 'name' => 'ActiveDirectory_School_ID');
    const ACTIVEDIRECTORY_DEPARTMENT_ID = array('table' => 'ActiveDirectory', 'column' => 'Department_ID', 'name' => 'ActiveDirectory_Department_ID');
    const ACTIVEDIRECTORY_GRADE_ID = array('table' => 'ActiveDirectory', 'column' => 'Grade_ID', 'name' => 'ActiveDirectory_Grade_ID');
    const ACTIVEDIRECTORY_TEAM_ID = array('table' => 'ActiveDirectory', 'column' => 'Team_ID', 'name' => 'ActiveDirectory_Team_ID');
    const ACTIVEDIRECTORY_TYPE = array('table' => 'ActiveDirectory', 'column' => 'Type', 'name' => 'ActiveDirectory_Type');
    const ACTIVEDIRECTORY_OU = array('table' => 'ActiveDirectory', 'column' => 'OU', 'name' => 'ActiveDirectory_OU');
    const ACTIVEDIRECTORY_GROUP = array('table' => 'ActiveDirectory', 'column' => 'Group', 'name' => 'ActiveDirectory_Group');
    const ACTIVEDIRECTORY_HOME_PATH = array('table' => 'ActiveDirectory', 'column' => 'Home_Path', 'name' => 'ActiveDirectory_Home_Path');
    const ACTIVEDIRECTORY_LOGON_SCRIPT = array('table' => 'ActiveDirectory', 'column' => 'Logon_Script', 'name' => 'ActiveDirectory_Logon_Script');
    const ACTIVEDIRECTORY_DESCRIPTION = array('table' => 'ActiveDirectory', 'column' => 'Description', 'name' => 'ActiveDirectory_Description');
    const ACTIVEDIRECTORY_FORCE_PASSWORD_CHANGE = array('table' => 'ActiveDirectory', 'column' => 'Force_Password_Change', 'name' => 'ActiveDirectory_Force_Password_Change');
    const APP_ID = array('table' => 'App', 'column' => 'ID', 'name' => 'App_ID');
    const APP_NAME = array('table' => 'App', 'column' => 'Name', 'name' => 'App_Name');
    const APP_FORCE_HTTPS = array('table' => 'App', 'column' => 'Force_HTTPS', 'name' => 'App_Force_HTTPS');
    const APP_MOTD = array('table' => 'App', 'column' => 'MOTD', 'name' => 'App_MOTD');
    const APP_DEBUG_MODE = array('table' => 'App', 'column' => 'Debug_Mode', 'name' => 'App_Debug_Mode');
    const APP_ADMIN_PASSWORD = array('table' => 'App', 'column' => 'Admin_Password', 'name' => 'App_Admin_Password');
    const APP_PROTECTED_ADMIN_USERNAMES = array('table' => 'App', 'column' => 'Protected_Admin_Usernames', 'name' => 'App_Protected_Admin_Usernames');
    const APP_WEBSITIE_FQDN = array('table' => 'App', 'column' => 'Websitie_FQDN', 'name' => 'App_Websitie_FQDN');
    const APP_APP_VERSION = array('table' => 'App', 'column' => 'App_Version', 'name' => 'App_App_Version');
    const APP_DATABASE_VERSION = array('table' => 'App', 'column' => 'Database_Version', 'name' => 'App_Database_Version');
    const APP_USER_HELPDESK_URL = array('table' => 'App', 'column' => 'User_Helpdesk_URL', 'name' => 'App_User_Helpdesk_URL');
    const APP_UPDATE_CHECK_URL = array('table' => 'App', 'column' => 'Update_Check_URL', 'name' => 'App_Update_Check_URL');
    const DEPARTMENT_ID = array('table' => 'Department', 'column' => 'ID', 'name' => 'Department_ID');
    const DEPARTMENT_SCHOOL_ID = array('table' => 'Department', 'column' => 'School_ID', 'name' => 'Department_School_ID');
    const DEPARTMENT_NAME = array('table' => 'Department', 'column' => 'Name', 'name' => 'Department_Name');
    const EMAIL_ID = array('table' => 'Email', 'column' => 'ID', 'name' => 'Email_ID');
    const EMAIL_APP_ID = array('table' => 'Email', 'column' => 'App_ID', 'name' => 'Email_App_ID');
    const EMAIL_FROM_ADDRESS = array('table' => 'Email', 'column' => 'From_Address', 'name' => 'Email_From_Address');
    const EMAIL_FROM_NAME = array('table' => 'Email', 'column' => 'From_Name', 'name' => 'Email_From_Name');
    const EMAIL_ADMIN_EMAIL_ADDRESSES = array('table' => 'Email', 'column' => 'Admin_Email_Addresses', 'name' => 'Email_Admin_Email_Addresses');
    const EMAIL_WELCOME_EMAIL_BCC = array('table' => 'Email', 'column' => 'Welcome_Email_BCC', 'name' => 'Email_Welcome_Email_BCC');
    const EMAIL_WELCOME_EMAIL = array('table' => 'Email', 'column' => 'Welcome_Email', 'name' => 'Email_Welcome_Email');
    const EMAIL_REPLY_TO_ADDRESS = array('table' => 'Email', 'column' => 'Reply_To_Address', 'name' => 'Email_Reply_To_Address');
    const EMAIL_REPLY_TO_NAME = array('table' => 'Email', 'column' => 'Reply_To_Name', 'name' => 'Email_Reply_To_Name');
    const EMAIL_USE_SMTP_SSL = array('table' => 'Email', 'column' => 'Use_SMTP_SSL', 'name' => 'Email_Use_SMTP_SSL');
    const EMAIL_SMTP_SERVER = array('table' => 'Email', 'column' => 'SMTP_Server', 'name' => 'Email_SMTP_Server');
    const EMAIL_SMTP_PORT = array('table' => 'Email', 'column' => 'SMTP_Port', 'name' => 'Email_SMTP_Port');
    const EMAIL_USE_SMTP_AUTH = array('table' => 'Email', 'column' => 'Use_SMTP_Auth', 'name' => 'Email_Use_SMTP_Auth');
    const EMAIL_SMTP_USERNAME = array('table' => 'Email', 'column' => 'SMTP_Username', 'name' => 'Email_SMTP_Username');
    const EMAIL_SMTP_PASSWORD = array('table' => 'Email', 'column' => 'SMTP_Password', 'name' => 'Email_SMTP_Password');
    const GOOGLEAPPS_ID = array('table' => 'GoogleApps', 'column' => 'ID', 'name' => 'GoogleApps_ID');
    const GOOGLEAPPS_SCHOOL_ID = array('table' => 'GoogleApps', 'column' => 'School_ID', 'name' => 'GoogleApps_School_ID');
    const GOOGLEAPPS_DISTRICT_ID = array('table' => 'GoogleApps', 'column' => 'District_ID', 'name' => 'GoogleApps_District_ID');
    const GOOGLEAPPS_DEPARTMENT_ID = array('table' => 'GoogleApps', 'column' => 'Department_ID', 'name' => 'GoogleApps_Department_ID');
    const GOOGLEAPPS_GRADE_ID = array('table' => 'GoogleApps', 'column' => 'Grade_ID', 'name' => 'GoogleApps_Grade_ID');
    const GOOGLEAPPS_TEAM_ID = array('table' => 'GoogleApps', 'column' => 'Team_ID', 'name' => 'GoogleApps_Team_ID');
    const GOOGLEAPPS_TYPE = array('table' => 'GoogleApps', 'column' => 'Type', 'name' => 'GoogleApps_Type');
    const GOOGLEAPPS_OU = array('table' => 'GoogleApps', 'column' => 'OU', 'name' => 'GoogleApps_OU');
    const GOOGLEAPPS_GROUP = array('table' => 'GoogleApps', 'column' => 'Group', 'name' => 'GoogleApps_Group');
    const GOOGLEAPPS_USERNAME_FORMAT = array('table' => 'GoogleApps', 'column' => 'Username_Format', 'name' => 'GoogleApps_Username_Format');
    const GOOGLEAPPS_OTHER_GROUPS = array('table' => 'GoogleApps', 'column' => 'Other_Groups', 'name' => 'GoogleApps_Other_Groups');
    const GOOGLEAPPS_FORCE_PASSWORD_CHANGE = array('table' => 'GoogleApps', 'column' => 'Force_Password_Change', 'name' => 'GoogleApps_Force_Password_Change');
    const GRADE_ID = array('table' => 'Grade', 'column' => 'ID', 'name' => 'Grade_ID');
    const GRADE_SCHOOL_ID = array('table' => 'Grade', 'column' => 'School_ID', 'name' => 'Grade_School_ID');
    const GRADE_GRADE_DEFINITION_ID = array('table' => 'Grade', 'column' => 'Grade_Definition_ID', 'name' => 'Grade_Grade_Definition_ID');
    const GRADE_PARENT_EMAIL_GROUP = array('table' => 'Grade', 'column' => 'Parent_Email_Group', 'name' => 'Grade_Parent_Email_Group');
    const LOGON_ID = array('table' => 'Logon', 'column' => 'ID', 'name' => 'Logon_ID');
    const LOGON_TIMESTAMP = array('table' => 'Logon', 'column' => 'Timestamp', 'name' => 'Logon_Timestamp');
    const LOGON_USERNAME = array('table' => 'Logon', 'column' => 'Username', 'name' => 'Logon_Username');
    const SCHOOL_ID = array('table' => 'School', 'column' => 'ID', 'name' => 'School_ID');
    const SCHOOL_DISTRICT_ID = array('table' => 'School', 'column' => 'District_ID', 'name' => 'School_District_ID');
    const SCHOOL_NAME = array('table' => 'School', 'column' => 'Name', 'name' => 'School_Name');
    const SCHOOL_OU = array('table' => 'School', 'column' => 'OU', 'name' => 'School_OU');
    const SCHOOL_ABBREVIATION = array('table' => 'School', 'column' => 'Abbreviation', 'name' => 'School_Abbreviation');
    const SCHOOL_PARENT_EMAIL_GROUP = array('table' => 'School', 'column' => 'Parent_Email_Group', 'name' => 'School_Parent_Email_Group');
    const USER_ID = array('table' => 'Session', 'column' => 'ID', 'name' => 'Session_ID');
    const USER_LAST_AUTHENTICATED = array('table' => 'Session', 'column' => 'Last_Authenticated', 'name' => 'Session_Last_Authenticated');
    const USER_USER_OBJECT = array('table' => 'Session', 'column' => 'User_Object', 'name' => 'Session_User_Object');
    const USER_TOKEN = array('table' => 'Session', 'column' => 'Token', 'name' => 'Session_Token');
    const TEAM_ID = array('table' => 'Team', 'column' => 'ID', 'name' => 'Team_ID');
    const TEAM_GRADE_ID = array('table' => 'Team', 'column' => 'Grade_ID', 'name' => 'Team_Grade_ID');
    const TEAM_NAME = array('table' => 'Team', 'column' => 'Name', 'name' => 'Team_Name');
    const TEAM_PARENT_EMAIL_GROUP = array('table' => 'Team', 'column' => 'Parent_Email_Group', 'name' => 'Team_Parent_Email_Group');
    const GRADEDEFINITION_VALUE = array('table' => 'GradeDefinition', 'column' => 'Value', 'name' => 'GradeDefinition_Value');
    const GRADEDEFINITION_DISPLAY_CODE = array('table' => 'GradeDefinition', 'column' => 'Display_Code', 'name' => 'GradeDefinition_Display_Code');
    const GRADEDEFINITION_DISPLAY_NAME = array('table' => 'GradeDefinition', 'column' => 'Display_Name', 'name' => 'GradeDefinition_Display_Name');
    const AUTH_ID = array('table' => 'Auth', 'column' => 'ID', 'name' => 'Auth_ID');
    const AUTH_APP_ID = array('table' => 'Auth', 'column' => 'App_ID', 'name' => 'Auth_App_ID');
    const AUTH_TECH_AD_GROUP = array('table' => 'Auth', 'column' => 'Tech_AD_Group', 'name' => 'Auth_Tech_AD_Group');
    const AUTH_ADMIN_AD_GROUP = array('table' => 'Auth', 'column' => 'Admin_AD_Group', 'name' => 'Auth_Admin_AD_Group');
    const AUTH_POWER_AD_GROUP = array('table' => 'Auth', 'column' => 'Power_AD_Group', 'name' => 'Auth_Power_AD_Group');
    const AUTH_BASIC_AD_GROUP = array('table' => 'Auth', 'column' => 'Basic_AD_Group', 'name' => 'Auth_Basic_AD_Group');
    const AUTH_TECH_GA_GROUP = array('table' => 'Auth', 'column' => 'Tech_GA_Group', 'name' => 'Auth_Tech_GA_Group');
    const AUTH_ADMIN_GA_GROUP = array('table' => 'Auth', 'column' => 'Admin_GA_Group', 'name' => 'Auth_Admin_GA_Group');
    const AUTH_POWER_GA_GROUP = array('table' => 'Auth', 'column' => 'Power_GA_Group', 'name' => 'Auth_Power_GA_Group');
    const AUTH_BASIC_GA_GROUP = array('table' => 'Auth', 'column' => 'Basic_GA_Group', 'name' => 'Auth_Basic_GA_Group');
    const AUTH_LDAP_ENABLED = array('table' => 'Auth', 'column' => 'LDAP_Enabled', 'name' => 'Auth_LDAP_Enabled');
    const AUTH_LDAP_SERVER = array('table' => 'Auth', 'column' => 'LDAP_Server', 'name' => 'Auth_LDAP_Server');
    const AUTH_LDAP_FQDN = array('table' => 'Auth', 'column' => 'LDAP_FQDN', 'name' => 'Auth_LDAP_FQDN');
    const AUTH_LDAP_PORT = array('table' => 'Auth', 'column' => 'LDAP_Port', 'name' => 'Auth_LDAP_Port');
    const AUTH_LDAP_USERNAME = array('table' => 'Auth', 'column' => 'LDAP_Username', 'name' => 'Auth_LDAP_Username');
    const AUTH_LDAP_PASSWORD = array('table' => 'Auth', 'column' => 'LDAP_Password', 'name' => 'Auth_LDAP_Password');
    const AUTH_LDAP_USE_SSL = array('table' => 'Auth', 'column' => 'LDAP_Use_SSL', 'name' => 'Auth_LDAP_Use_SSL');
    const AUTH_OAUTH_ENABLED = array('table' => 'Auth', 'column' => 'OAuth_Enabled', 'name' => 'Auth_OAuth_Enabled');
    const AUTH_SESSION_TIMEOUT = array('table' => 'Auth', 'column' => 'Session_Timeout', 'name' => 'Auth_Session_Timeout');
    const DISTRICT_ID = array('table' => 'District', 'column' => 'ID', 'name' => 'District_ID');
    const DISTRICT_APP_ID = array('table' => 'District', 'column' => 'App_ID', 'name' => 'District_App_ID');
    const DISTRICT_USING_GADS = array('table' => 'District', 'column' => 'Using_GADS', 'name' => 'District_Using_GADS');
    const DISTRICT_USING_GAPS = array('table' => 'District', 'column' => 'Using_GAPS', 'name' => 'District_Using_GAPS');
    const DISTRICT_NAME = array('table' => 'District', 'column' => 'Name', 'name' => 'District_Name');
    const DISTRICT_GRADE_SPAN_FROM = array('table' => 'District', 'column' => 'Grade_Span_From', 'name' => 'District_Grade_Span_From');
    const DISTRICT_GRADE_SPAN_TO = array('table' => 'District', 'column' => 'Grade_Span_To', 'name' => 'District_Grade_Span_To');
    const DISTRICT_ABBREVIATION = array('table' => 'District', 'column' => 'Abbreviation', 'name' => 'District_Abbreviation');
    const DISTRICT_AD_FQDN = array('table' => 'District', 'column' => 'AD_FQDN', 'name' => 'District_AD_FQDN');
    const DISTRICT_AD_SERVER = array('table' => 'District', 'column' => 'AD_Server', 'name' => 'District_AD_Server');
    const DISTRICT_AD_NETBIOS = array('table' => 'District', 'column' => 'AD_NetBIOS', 'name' => 'District_AD_NetBIOS');
    const DISTRICT_AD_BASEDN = array('table' => 'District', 'column' => 'AD_BaseDN', 'name' => 'District_AD_BaseDN');
    const DISTRICT_AD_USERNAME = array('table' => 'District', 'column' => 'AD_Username', 'name' => 'District_AD_Username');
    const DISTRICT_AD_PASSWORD = array('table' => 'District', 'column' => 'AD_Password', 'name' => 'District_AD_Password');
    const DISTRICT_AD_STUDENT_GROUP = array('table' => 'District', 'column' => 'AD_Student_Group', 'name' => 'District_AD_Student_Group');
    const DISTRICT_GA_FQDN = array('table' => 'District', 'column' => 'GA_FQDN', 'name' => 'District_GA_FQDN');
    const DISTRICT_PARENT_EMAIL_GROUP = array('table' => 'District', 'column' => 'Parent_Email_Group', 'name' => 'District_Parent_Email_Group');
    const DISTRICT_STAFF_USERNAME_FORMAT = array('table' => 'District', 'column' => 'Staff_Username_Format', 'name' => 'District_Staff_Username_Format');
    const DISTRICT_STUDENT_USERNAME_FORMAT = array('table' => 'District', 'column' => 'Student_Username_Format', 'name' => 'District_Student_Username_Format');
    const PERMISSION_ID = array('table' => 'Permission', 'column' => 'ID', 'name' => 'Permission_ID');
    const PERMISSION_REQUIRED_PERMISSION = array('table' => 'Permission', 'column' => 'Required_Permission', 'name' => 'Permission_Required_Permission');
    const PERMISSION_PATH = array('table' => 'Permission', 'column' => 'Path', 'name' => 'Permission_Path');

}
