CREATE DATABASE db_pms;

USE db_pms;

CREATE TABLE tbl_patient (
    patient_id INT(11) AUTO_INCREMENT,
    name VARCHAR(255),
    address TEXT,
    PRIMARY KEY (patient_id)
);
