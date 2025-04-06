-- dodo
-- dodo
-- NOTE: This is for creating the DataBase:
-- DATABASE CREATION 
-- dodo
-- dodo

-- 1. users table
CREATE TABLE `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `username` VARCHAR(255) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `email`    VARCHAR(255) NOT NULL UNIQUE,
  `role`     VARCHAR(50)  NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2. moods table
CREATE TABLE `moods` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `mood`    ENUM('sad','happy','angry','neutral') NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 3. journal_entries table
CREATE TABLE `journal_entries` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `content` TEXT NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4. meditation_audios table
CREATE TABLE `meditation_audios` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title`     VARCHAR(255) NOT NULL,
  `file_path` VARCHAR(500) NOT NULL,
  `duration`  INT NOT NULL COMMENT 'Duration in seconds'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5. quotes table
CREATE TABLE `quotes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `text`   TEXT    NOT NULL,
  `author` VARCHAR(255) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- dodo
-- dodo
-- NOTE: This is to Insert Some data into our DataBase
-- dodo
-- dodo