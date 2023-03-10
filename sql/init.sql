CREATE TABLE `sources`
(
    `title`      varchar(50) NOT NULL,
    `visits`     int         NOT NULL,
    `created_at` datetime    NOT NULL,
    `id`         int         NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `sources` VALUES ('Google Analytics', 150, '2023-03-10 17:18:00', 3);
INSERT INTO `sources` VALUES ('Google Analytics', 150, '2023-02-10 17:18:00', 2);
INSERT INTO `sources` VALUES ('Google Analytics', 150, '2023-01-10 17:18:00', 1);