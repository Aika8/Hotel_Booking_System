CREATE TABLE `dimension` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `adult_available` int(11) NOT NULL,
 `children_available` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE `guest` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(255) NOT NULL,
 `last_name` varchar(255) NOT NULL,
 `member_since` timestamp NOT NULL DEFAULT current_timestamp(),
 `email` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE `feedback` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `mobile` varchar(255) NOT NULL,
 `message` text NOT NULL,
 `email` varchar(255) NOT NULL,
 `guest_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_guest_id_feedback` (`guest_id`),
 CONSTRAINT `fk_guest_id_feedback` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

CREATE TABLE `room_type` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `description` text NOT NULL,
 `price` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

CREATE TABLE `room` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `number` varchar(10) NOT NULL,
 `room_type_id` int(11) NOT NULL,
 `dimension_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_room_type_id` (`room_type_id`),
 KEY `fk_dimension_id` (`dimension_id`),
 CONSTRAINT `fk_dimension_id` FOREIGN KEY (`dimension_id`) REFERENCES `dimension` (`id`),
 CONSTRAINT `fk_room_type_id` FOREIGN KEY (`room_type_id`) REFERENCES `room_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

CREATE TABLE `reservation` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `date_in` date NOT NULL,
 `date_out` date NOT NULL,
 `guest_id` int(11) NOT NULL,
 `room_id` int(11) NOT NULL,
 PRIMARY KEY (`id`),
 KEY `fk_guest_id` (`guest_id`),
 KEY `fk_room_id` (`room_id`),
 CONSTRAINT `fk_guest_id` FOREIGN KEY (`guest_id`) REFERENCES `guest` (`id`),
 CONSTRAINT `fk_room_id` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;


