#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	twitter_id varchar(255) DEFAULT '' NOT NULL,
	skype_id varchar(255) DEFAULT '' NOT NULL,
    ansprechpartner tinytext,
    firmenzusatz tinytext,
    sonstigemerkmale text,
    beratungszeiten text,
    freigabe tinyint(3) DEFAULT '0' NOT NULL,
    gesellschaftsform varchar(255) DEFAULT '' NOT NULL,
    geschaeftsfuehrer varchar(255) DEFAULT '' NOT NULL,
    hauptzielgruppen varchar(255) DEFAULT '' NOT NULL,
    gruendungsjahr varchar(255) DEFAULT '' NOT NULL,
    unterrichtsformen tinytext,
);


