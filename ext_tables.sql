#
# Add SQL definition of database tables
#
CREATE TABLE tt_content (

    -- banner element
    bannerimage int(11) unsigned DEFAULT '0' NOT NULL,
    bannerheading varchar(255) DEFAULT '' NOT NULL ,
    bannersubheading tinytext DEFAULT '' NOT NULL ,
    bannerbutton varchar(11) DEFAULT '' NOT NULL ,

);

