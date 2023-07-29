create database `employeedetail`;
create table `Etable` 
(
    `id` int PRIMARY KEY AUTO_INCREMENT,
    `name` varchar  (256),
    `email` varchar  (256),
    `phone` varchar  (256),
   	`gender` varchar  (256),
    `cnic` varchar  (256) UNIQUE,
    `department` varchar  (256),
    `salary` int(10)
    
)