CREATE TABLE users (
    user_id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    user_nickname varchar(128) NOT NULL,
    user_email varchar(128) NOT NULL,
    user_passwordhash varchar(255) NOT NULL,
    PRIMARY KEY (user_id),
    UNIQUE KEY (user_email)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;