<!-- Ben Hill
  Assigment : WE4.0 PHP Web App Assigment, Digital Skills Academy
  Student Id = D11128483
  Date : 20016/04/22
  ref http://demos.codingcage.com/ -->

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `joining_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) 