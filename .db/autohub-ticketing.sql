-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema autohub-ticketing
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema autohub-ticketing
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `employee` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `position` VARCHAR(100) NOT NULL,
  `office` VARCHAR(100) NOT NULL,
  `age` INT NOT NULL,
  `salary` INT NOT NULL,
  `photo` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` INT NOT NULL AUTO_INCREMENT,
  `menu_name` VARCHAR(100) NOT NULL,
  `menu_icon` VARCHAR(200) NOT NULL,
  `menu_status` VARCHAR(20) NOT NULL DEFAULT 'Enable',
  `menu_department` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`menu_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `tbl_country`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tbl_country` (
  `country_id` INT NOT NULL AUTO_INCREMENT,
  `country_name` TEXT NOT NULL,
  `country_description` TEXT NOT NULL,
  PRIMARY KEY (`country_id`))
ENGINE = MyISAM
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` INT NOT NULL AUTO_INCREMENT,
  `ticket _generator` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `time_and_date` DATETIME NOT NULL,
  PRIMARY KEY (`ticket_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket-category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket-category` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `category_date` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `category_uid` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_activity_logs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_activity_logs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ticket_activity_uid` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_activity_name` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_activity_created_on` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_assignee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_assignee` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `ticket_id` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `createAt` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_assignment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_assignment` (
  `id` INT NOT NULL,
  `ticket_number` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_assign` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL COMMENT 'employee assign in the ticket',
  `ticket_status` INT NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_chat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_chat` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ticket_id` INT NOT NULL,
  `ticket_user_id` INT NOT NULL,
  `ticket_date_time` DATETIME NOT NULL,
  `ticket_message` LONGTEXT CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_status` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_deparment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_deparment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ticket_dept_source_id` INT NULL DEFAULT NULL,
  `ticket_dept_name` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_dept_tnd` DATETIME NOT NULL,
  `ticket_dept_uid` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `ticket_dept_source_id` (`ticket_dept_source_id` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_department_assig`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_department_assig` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ticket_dept_assign_name` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_dept_assign_uid` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_files`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_files` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ticket_number` VARCHAR(255) NOT NULL,
  `path` VARCHAR(255) NOT NULL,
  `createAt` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_incident`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_incident` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ticket_number` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `u_id` INT NOT NULL,
  `ticket_caller` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_category` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_subcategory` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_service` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_config_item` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_short_discrip` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_discription` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_filedownload` VARCHAR(255) NOT NULL,
  `ticket_contact_type` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_status` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_imapact` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_urgent` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_priority` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_assign_group` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_assign_to` VARCHAR(255) CHARACTER SET 'utf8mb4'  NULL DEFAULT NULL,
  `ticket_department_id` INT NULL DEFAULT NULL,
  `ticket_timeofdate` DATETIME NOT NULL,
  `ticket_timeofdate_end` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `ticket_incident_idx1` (`ticket_department_id` ASC) INVISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_items` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ticket_item_name` VARCHAR(255) NOT NULL,
  `ticket_discription` VARCHAR(255) NOT NULL,
  `createdAt` DATETIME NOT NULL,
  `updatedAt` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_menu_useraccess`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_menu_useraccess` (
  `permission_id` INT NOT NULL AUTO_INCREMENT,
  `menu_id` INT NOT NULL,
  `sub_menu_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `user_permission` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`permission_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `u_id` INT NULL DEFAULT NULL,
  `ticket_users` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_fn` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_ln` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_employee_id` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_email` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_password` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_status` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_user_department` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_deal_name` VARCHAR(255) NOT NULL,
  `ticket_comp_name` VARCHAR(255) NOT NULL,
  `ticket_position` VARCHAR(255) NOT NULL,
  `ticket_mobile` VARCHAR(255) NOT NULL,
  `ticket_dob` DATE NOT NULL,
  `ticket_user_url` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_user_role` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `ticket_createdAt` DATE NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `u_id` (`u_id` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_messegers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_messegers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ticket_from_user` INT NOT NULL,
  `ticket_to_user` INT NOT NULL,
  `ticket_message` VARCHAR(1000) CHARACTER SET 'utf8mb4'  NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `ticket_from_user` (`ticket_from_user` ASC) VISIBLE,
  INDEX `ticket_to_user` (`ticket_to_user` ASC) VISIBLE,
  CONSTRAINT `ticket_messegers_ibfk_1`
    FOREIGN KEY (`ticket_from_user`)
    REFERENCES `ticket_user` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `ticket_messegers_ibfk_2`
    FOREIGN KEY (`ticket_to_user`)
    REFERENCES `ticket_user` (`id`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_permission`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_permission` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `permission_name` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `permission_status` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_rating`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_rating` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rating_ticket_id` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `rating_user_rate` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `rating_ticket_id` (`rating_ticket_id` ASC) VISIBLE)
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_role`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_role` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `role_name` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `role_status` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_role_permission`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_role_permission` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `role_id` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `permission_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_status` (
  `ticket_status_id` INT NOT NULL AUTO_INCREMENT,
  `ticket_status_name` VARCHAR(255) CHARACTER SET 'utf8mb4'  NOT NULL,
  `status` INT NOT NULL,
  PRIMARY KEY (`ticket_status_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_status_level`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_status_level` (
  `status_id` INT NOT NULL AUTO_INCREMENT,
  `status_name` INT NOT NULL,
  PRIMARY KEY (`status_id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_sub_menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_sub_menu` (
  `submenu_id` INT NOT NULL AUTO_INCREMENT,
  `menu_id` INT NOT NULL,
  `submenu_name` VARCHAR(100) NOT NULL,
  `submenu_url` VARCHAR(200) NOT NULL,
  `submenu_display` VARCHAR(10) NOT NULL,
  `submenu_order` INT NOT NULL,
  `submenu_status` VARCHAR(20) NOT NULL DEFAULT 'Enable',
  `submenu_department` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`submenu_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_suggestions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_suggestions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `suggestions_name` VARCHAR(255) NOT NULL,
  `suggestions_description` VARCHAR(255) NOT NULL,
  `createdAt` DATETIME NOT NULL,
  `suggestions_status` VARCHAR(255) CHARACTER SET 'utf8mb4' NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `ticket_treeview_items`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticket_treeview_items` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  `text` VARCHAR(200) NOT NULL,
  `parent_id` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
