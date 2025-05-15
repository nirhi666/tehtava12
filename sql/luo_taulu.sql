-- Tämä tiedosto luo työntekijätaulun tietokantaan
-- Tallenna tämä esim. kansioon: sql/luo_taulu.sql

CREATE TABLE IF NOT EXISTS tyontekija (
  id INT AUTO_INCREMENT PRIMARY KEY,
  kayttajatunnus VARCHAR(100) NOT NULL,
  salasana VARCHAR(255) NOT NULL,
  nimi VARCHAR(100) DEFAULT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
