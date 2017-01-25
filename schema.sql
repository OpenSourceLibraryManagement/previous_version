CREATE SCHEMA library;

CREATE TABLE IF NOT EXISTS `library`.`Member_Req` (
    `REQUEST_TOKEN`   CHAR (60)    NOT NULL,
    `LIBRARY_ID`      VARCHAR (30) NOT NULL,
    `USER_ID`         VARCHAR (15) NOT NULL,
    `DATE_OF_REQUEST` DATE          NOT NULL,
    CONSTRAINT `REQUEST_ID` PRIMARY KEY CLUSTERED (`REQUEST_TOKEN` ASC),
    CONSTRAINT `R_INFO` UNIQUE NONCLUSTERED (`LIBRARY_ID` ASC, `USER_I
);

CREATE TABLE IF NOT EXISTS `library`.`Edition` (
    `UUID`                CHAR (60)                NOT NULL,
    `BOOK_ID`             CHAR (60)                NOT NULL,
    `EDITION`             TINYINT       DEFAULT 1   NOT NULL,
    `DATE_OF_PUBLICATION` DATE                      NOT NULL,
    `NO_OF_PAGES`         SMALLINT                  NOT NULL,
    `NO_OF_IMAGES`        SMALLINT      DEFAULT 0   NOT NULL,
    `NO_OF_CHARTS`        SMALLINT      DEFAULT 0   NOT NULL,
    `PRICE`               DECIMAL (6, 2)            NOT NULL,
    CONSTRAINT `EDITION_ID` PRIMARY KEY CLUSTERED (`UUID` ASC),
    CONSTRAINT `ED_INFO` UNIQUE NONCLUSTERED (`BOOK_ID` ASC, `EDITION` ASC)
);

CREATE TABLE IF NOT EXISTS `library`.`Store` (
    `EDITION_ID`        CHAR (60)    NOT NULL,
    `LIBRARY_ID`        VARCHAR (15) NOT NULL,
    `BOOK_ALIAS`        VARCHAR (16) NULL,
    `CALL_NO`           VARCHAR (10) NOT NULL,
    `QUANTITY`          TINYINT      DEFAULT 1 NOT NULL,
    `DATE_OF_PURCHASE`  DATE          NOT NULL,
    `PURCHASE/DONATION` CHAR (8)    DEFAULT 'Purchase' NOT NULL,
    `VENDOR/DONOR`      VARCHAR (30) NOT NULL,
    CONSTRAINT `STORE_ID` PRIMARY KEY CLUSTERED (`LIBRARY_ID` ASC, `CALL_NO` ASC),
    CONSTRAINT `ST_INFO` UNIQUE NONCLUSTERED (`EDITION_ID` ASC, `LIBRARY_ID` ASC)
);

CREATE TABLE IF NOT EXISTS `library`.`Users` (
    `USER_ID`          VARCHAR (15) NOT NULL,
    `PASSWORD`         VARCHAR (30) NOT NULL,
    `EMAIL`            VARCHAR (30) NOT NULL,
    `NAME`             VARCHAR (30) NOT NULL,
    `ADDRESS`          VARCHAR (30) NOT NULL,
    `CONTACT`          CHAR (10)    NOT NULL,
    `DATE_OF_BIRTHDAY` DATE          NOT NULL,
    `OCCUPATION`       VARCHAR (15) NULL,
    `SEX`              CHAR (6)     NOT NULL,
    `IMAGE_LINK`       VARCHAR (30) DEFAULT 'default/user.png' NOT NULL,
    CONSTRAINT `USER_ID` PRIMARY KEY CLUSTERED (`USER_ID` ASC),
    CONSTRAINT `U_INFO` UNIQUE NONCLUSTERED (`NAME` ASC, `ADDRESS` ASC, `CONTACT` ASC)
);

CREATE TABLE IF NOT EXISTS `library`.`Dummy` (
    `OTP`       CHAR (60)    NOT NULL,
    `EMAIL`     VARCHAR (30) NOT NULL,
    `USER_ID`   VARCHAR (15) NOT NULL,
    `PASSWORD`  VARCHAR (30) NOT NULL,
    `USER_TYPE` CHAR (7)     NOT NULL,
    CONSTRAINT `OTP` PRIMARY KEY CLUSTERED (`OTP` ASC)
);

CREATE TABLE IF NOT EXISTS `library`.`LRating` (
    `USER_ID`    VARCHAR (15) NOT NULL,
    `LIBRARY_ID` VARCHAR (15) NOT NULL,
    `RATING`     TINYINT       NOT NULL,
    `COMMENT`    VARCHAR (60) NULL,
    `TIMESTAMP`  DATETIME      NOT NULL,
    CONSTRAINT `LRATING_ID` PRIMARY KEY CLUSTERED (`USER_ID` ASC, `LIBRARY_ID` ASC)
);

CREATE TABLE IF NOT EXISTS `library`.`Library` (
    `USER_ID`               VARCHAR (15) NOT NULL,
    `PASSWORD`              VARCHAR (30) NOT NULL,
    `EMAIL`                 VARCHAR (30) NOT NULL,
    `NAME`                  VARCHAR (30) NOT NULL,
    `ADDRESS`               VARCHAR (30) NOT NULL,
    `CONTACT`               CHAR (10)    NOT NULL,
    `DATE_OF_ESTABLISHMENT` DATE          NOT NULL,
    `MODE_OF_LIBRARY`       CHAR (8)     NOT NULL,
    `MAX_COUNT`             SMALLINT     DEFAULT 1 NOT NULL,
    `OPENING_TIME`          TIME      NULL,
    `CLOSING_TIME`          TIME      NULL,
    `DESCRIPTION`           VARCHAR (60) NULL,
    `IMAGE_LINK`            VARCHAR (30) DEFAULT 'default/library.png' NOT NULL,
    CONSTRAINT `LIBRARY_ID` PRIMARY KEY CLUSTERED (`USER_ID` ASC),
    CONSTRAINT `L_INFO` UNIQUE NONCLUSTERED (`NAME` ASC, `ADDRESS` ASC, `CONTACT` ASC)
);


CREATE TABLE IF NOT EXISTS `library`.`Notification` (
    `NOTIFICATION_ID` CHAR (60)    NOT NULL,
    `USER_ID`         VARCHAR (15) NULL,
    `USER_TYPE`       CHAR (7)    DEFAULT 'Public' NOT NULL,
    `NOTE`            VARCHAR (30) NOT NULL,
    `READ`            CHAR (6)    DEFAULT 'Unread' NOT NULL,
    CONSTRAINT `NOTF_ID` PRIMARY KEY CLUSTERED (`NOTIFICATION_ID` ASC)
);


CREATE TABLE IF NOT EXISTS `library`.`Book` (
    `UUID`                 CHAR (60)    NOT NULL,
    `ISBN`                 VARCHAR (16) NULL,
    `TITLE`                VARCHAR (30) NOT NULL,
    `AUTHOR`               VARCHAR (30) NOT NULL,
    `PUBLISHER`            VARCHAR (30) NOT NULL,
    `PLACE_OF_PUBLICATION` VARCHAR (15) DEFAULT 'Kolkata' NOT NULL,
    `CATEGORY`             VARCHAR (50) NOT NULL,
    `IMAGE_LINK`           VARCHAR (30) DEFAULT 'default/book.png' NOT NULL,
    CONSTRAINT `UUID` PRIMARY KEY CLUSTERED (`UUID` ASC),
    CONSTRAINT `B_INFO` UNIQUE NONCLUSTERED (`TITLE` ASC, `AUTHOR` ASC, `PUBLISHER` ASC)
);

CREATE TABLE IF NOT EXISTS `library`.`BRating` (
    `USER_ID`    VARCHAR (15) NOT NULL,
    `BOOK_ID`    CHAR (60)    NOT NULL,
    `EDITION_ID` CHAR (60)    NOT NULL,
    `RATING`     TINYINT       NOT NULL,
    `COMMENT`    VARCHAR (60) NULL,
    `TIMESTAMP`  DATETIME      NOT NULL,
    CONSTRAINT `BRATING_ID` PRIMARY KEY CLUSTERED (`USER_ID` ASC, `BOOK_ID` ASC)
);


CREATE TABLE IF NOT EXISTS `library`.`Member` (
    `MEMBER_ID`        VARCHAR (15) NOT NULL,
    `LIBRARY_ID`       VARCHAR (15) NOT NULL,
    `USER_ID`          VARCHAR (15) NOT NULL,
    `DATE_OF_APPROVAL` DATE          NOT NULL,
    `BOOK_COUNT`       SMALLINT     DEFAULT 0 NOT NULL,
    `STATUS`           CHAR (10)   DEFAULT 'Active' NOT NULL,
    CONSTRAINT `MEMBER_ID` PRIMARY KEY CLUSTERED (`MEMBER_ID` ASC, `LIBRARY_ID` ASC)
);

CREATE TABLE IF NOT EXISTS `library`.`Issue` (
    `ISSUE_ID`        CHAR (60)     NOT NULL,
    `LIBRARY_ID`      VARCHAR (15)  NOT NULL,
    `CALL_NO`         VARCHAR (10)  NOT NULL,
    `MEMBER_ID`       VARCHAR (15)  NOT NULL,
    `DATE_OF_ISSUE`   DATE           NOT NULL,
    `DATE_OF_SUBMIT`  DATE           NOT NULL,
    `DATE_OF_RECIEVE` DATE           NULL,
    `FINE`            DECIMAL (6, 2) DEFAULT 0.00 NOT NULL,
    CONSTRAINT `ISSUE_ID` PRIMARY KEY CLUSTERED (`ISSUE_ID` ASC)
);

ALTER TABLE `library`.`Edition`
    ADD CONSTRAINT `FK_BOOK` FOREIGN KEY (`BOOK_ID`) REFERENCES `library`.`Book` (`UUID`);

ALTER TABLE `library`.`Store`
    ADD CONSTRAINT `FK_EDITION` FOREIGN KEY (`EDITION_ID`) REFERENCES `library`.`Edition` (`UUID`);




ALTER TABLE `library`.`Store`
    ADD CONSTRAINT `FK_LIBRARY` FOREIGN KEY (`LIBRARY_ID`) REFERENCES `library`.`Library` (`USER_ID`);



ALTER TABLE `library`.`LRating`
    ADD CONSTRAINT `LIBRARY_R` FOREIGN KEY (`LIBRARY_ID`) REFERENCES `library`.`Library` (`USER_ID`);



ALTER TABLE `library`.`LRating`
    ADD CONSTRAINT `USER_LR` FOREIGN KEY (`USER_ID`) REFERENCES `library`.`Users` (`USER_ID`);



ALTER TABLE `library`.`BRating`
    ADD CONSTRAINT `BOOK_R` FOREIGN KEY (`BOOK_ID`) REFERENCES `library`.`Book` (`UUID`);



ALTER TABLE `library`.`BRating`
    ADD CONSTRAINT `BOOK_ED` FOREIGN KEY (`EDITION_ID`) REFERENCES `library`.`Edition` (`UUID`);



ALTER TABLE `library`.`BRating`
    ADD CONSTRAINT `USER_BR` FOREIGN KEY (`USER_ID`) REFERENCES `library`.`Users` (`USER_ID`);



ALTER TABLE `library`.`Member`
    ADD CONSTRAINT `USER` FOREIGN KEY (`USER_ID`) REFERENCES `library`.`Users` (`USER_ID`);



ALTER TABLE `library`.`Issue`
    ADD CONSTRAINT `FK_LIB` FOREIGN KEY (`LIBRARY_ID`) REFERENCES `library`.`Library` (`USER_ID`);


ALTER TABLE `library`.`Issue`
    ADD CONSTRAINT `FK_CALL_NO` FOREIGN KEY (`LIBRARY_ID`, `CALL_NO`) REFERENCES `library`.`Store` (`LIBRARY_ID`, `CALL_NO`);



ALTER TABLE `library`.`Issue`
    ADD CONSTRAINT `FK_MEMBER` FOREIGN KEY (`MEMBER_ID`, `LIBRARY_ID`) REFERENCES `library`.`Member` (`MEMBER_ID`, `LIBRARY_ID`);

ALTER TABLE `library`.`Edition`
    ADD CHECK (`EDITION` >= 1 AND `NO_OF_IMAGES` >= 0 AND `NO_OF_CHARTS` >= 0 AND `PRICE` > 0.0);



ALTER TABLE `library`.`Store`
    ADD CHECK (`QUANTITY` >= 1 AND `PURCHASE/DONATION` IN ('Purchase', 'Donation'));


ALTER TABLE `library`.`Users`
    ADD CHECK (`SEX` IN ('Male', 'Female', 'Other'));


ALTER TABLE `library`.`Dummy`
    ADD CHECK (`USER_TYPE` in ('USER', 'LIBRARY'));


ALTER TABLE `library`.`LRating`
    ADD CHECK (`RATING` IN (1, 2, 3, 4, 5));


ALTER TABLE `library`.`Library`
    ADD CHECK (`MODE_OF_LIBRARY` IN ('Academic', 'Reading', 'Primary', 'Rural', 'Town', 'District', 'Central', 'National', 'Foreign', 'Special') AND `MAX_COUNT` >= 1);


ALTER TABLE `library`.`Notification`
    ADD CHECK (`USER_TYPE` IN ('Public', 'Library', 'User', 'Admin') AND `READ` IN ('Read', 'Unread'));


ALTER TABLE `library`.`BRating`
    ADD CHECK (`RATING` >= 1 AND `RATING` <= 5);


ALTER TABLE `library`.`Member`
    ADD CHECK (`BOOK_COUNT` >= 0 AND `STATUS` IN ('Active', 'Pending', 'Banned', 'Removed', 'Dead'));



ALTER TABLE `library`.`Issue`
    ADD CHECK (`FINE` > 0.0);




CREATE VIEW `library`.`vLogin_Info`
AS
SELECT USER_ID, EMAIL AS ID, PASSWORD AS PASSWORD, 'Library' AS USER_TYPE
FROM Library
UNION
SELECT USER_ID, EMAIL AS ID, PASSWORD AS PASSWORD, 'User' AS USER_TYPE
FROM Users;


CREATE VIEW `library`.`vBook_Info`
    AS SELECT b.UUID AS BOOK_ID, TITLE, AUTHOR, PUBLISHER, PLACE_OF_PUBLICATION, 
    MAX(EDITION) AS LATEST_EDITION, MAX(DATE_OF_PUBLICATION) AS DATE_OF_PUBLICATION, 
    AVG(RATING) AS PUBLIC_RATING 
        FROM `library`.`Book` AS b 
        INNER JOIN `library`.`Edition` AS e 
            ON b.UUID = e.BOOK_ID 
        INNER JOIN `library`.`BRating` AS br 
            ON b.UUID = br.BOOK_ID;


CREATE VIEW `library`.`vMember`
    AS SELECT MEMBER_ID, l.USER_ID AS LIBRARY_ID, l.NAME AS LIB_NAME, l.ADDRESS AS LIB_ADDRESS, l.CONTACT AS LIB_CONTACT, 
    u.USER_ID AS USER_ID, u.NAME AS USR_NAME, u.ADDRESS AS USR_ADDRESS, u.CONTACT AS USR_CONTACT, 
    BOOK_COUNT, MAX_COUNT, DATE_OF_APPROVAL, STATUS
        FROM `library`.`Member` AS m
        INNER JOIN `library`.`Library` AS l
            ON m.LIBRARY_ID = l.USER_ID
        INNER JOIN `library`.`Users` AS u
            ON m.USER_ID = u.USER_ID;


CREATE VIEW `library`.`vIssue_Lib`
    AS SELECT ISSUE_ID, LIBRARY_ID, CALL_NO, MEMBER_ID, DATE_OF_ISSUE, DATE_OF_SUBMIT, 
    DATE_OF_RECIEVE, FINE 
        FROM `library`.`Issue` AS i
        INNER JOIN `library`.`Library` AS l
            ON i.LIBRARY_ID = l.USER_ID;


CREATE VIEW `library`.`vBook_Edition`
    AS SELECT e.UUID AS EDITION_ID, ISBN, TITLE, AUTHOR, PUBLISHER, 
    EDITION, PLACE_OF_PUBLICATION, DATE_OF_PUBLICATION, PRICE, CATEGORY, 
    NO_OF_PAGES, NO_OF_IMAGES, NO_OF_CHARTS, AVG(RATING) AS RATING 
        FROM `library`.`Book` AS b 
        INNER JOIN `library`.`Edition` AS e
            ON b.UUID = e.BOOK_ID
        INNER JOIN `library`.`BRating` AS br
            ON e.UUID = br.EDITION_ID;


CREATE VIEW `library`.`vStore_Lib`
    AS SELECT LIBRARY_ID, NAME AS LIB_NAME, CALL_NO, TITLE, AUTHOR, PUBLISHER, EDITION, 
    CATEGORY, RATING 
        FROM `library`.`Store` AS s
        INNER JOIN `library`.`Library` AS l
            ON s.LIBRARY_ID = l.USER_ID
        INNER JOIN `library`.`vBook_Edition` AS e
            ON s.EDITION_ID = e.EDITION_ID;


CREATE VIEW `library`.`vIssue_Usr`
    AS SELECT ISSUE_ID, s.LIB_NAME AS LIB_NAME,TITLE, AUTHOR, PUBLISHER, EDITION,  
    DATE_OF_ISSUE, DATE_OF_SUBMIT, DATE_OF_RECIEVE, FINE 
        FROM `library`.`Issue` AS i
        INNER JOIN `library`.`vMember` AS m
            ON i.LIBRARY_ID = m.LIBRARY_ID AND i.MEMBER_ID = m.MEMBER_ID
        INNER JOIN `library`.`vStore_Lib` AS s
            ON i.CALL_NO = s.CALL_NO AND i.LIBRARY_ID = s.LIBRARY_ID;