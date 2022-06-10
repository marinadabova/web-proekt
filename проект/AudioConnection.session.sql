
/*create table tbl_tracks(
    track_id int(5) not null auto_increment,
    track_number int(2),
    track_name varchar(50) not null,
    album_id int(5),
    track_url varchar(100) not null,
    primary key(track_id),
    foreign key (album_id) references tbl_album(album_id)
);*/

/*CREATE TABLE VIDEOS  (
               VIDEO_ID INTEGER NOT NULL PRIMARY KEY,
               VIDEO_NAME VARCHAR (20),
               VIDEO  LONGBLOB );
 INSERT INTO VIDEOS  VALUES(1, "Goats", LOAD_FILE("The Three Billy Goats Gruff _ Fairy Tales _ Gigglebox.mp4"));

*/


 CREATE TABLE videos (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  location varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;