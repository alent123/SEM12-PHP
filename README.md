# En este examen se uso este base de datos 
#nombre la base de datos es "mascotas_db" 
# Tablas de la Base de Datos 
-- Crear la tabla 'mascotas'
CREATE TABLE mascotas (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    nombre          VARCHAR(100) NOT NULL,
    tipo            VARCHAR(50)  NOT NULL,
    edad            INT          NOT NULL,
    raza            VARCHAR(100) NOT NULL,
    peso            DECIMAL(5,2) NOT NULL,
    fecha_adopcion  DATE         NOT NULL,
    created_at      TIMESTAMP    NULL DEFAULT NULL,
    updated_at      TIMESTAMP    NULL DEFAULT NULL
);

-- Insertar 15 registros ficticios
INSERT INTO mascotas (nombre, tipo, edad, raza, peso, fecha_adopcion, created_at, updated_at) VALUES
('Luna',  'Perro', 3, 'Labrador',         25.50, '2022-04-15', NOW(), NOW()),
('Max',   'Gato',  2, 'Siames',           4.20,  '2023-01-20', NOW(), NOW()),
('Rocky', 'Perro', 5, 'Pastor Alemán',    30.10, '2020-07-10', NOW(), NOW()),
('Milo',  'Gato',  1, 'Persa',            3.80,  '2023-03-05', NOW(), NOW()),
('Coco',  'Pájaro',1, 'Canario',          0.15,  '2024-02-25', NOW(), NOW()),
('Bella', 'Perro', 4, 'Bulldog',          22.00, '2021-06-18', NOW(), NOW()),
('Simba', 'Gato',  6, 'Bengala',          5.00,  '2019-09-01', NOW(), NOW()),
('Toby',  'Perro', 2, 'Chihuahua',        3.20,  '2023-11-10', NOW(), NOW()),
('Nala',  'Gato',  3, 'Angora',           4.50,  '2022-08-08', NOW(), NOW()),
('Lola',  'Perro', 5, 'Poodle',           10.00, '2020-03-03', NOW(), NOW()),
('Kiwi',  'Pájaro',2, 'Loro',             0.80,  '2023-05-12', NOW(), NOW()),
('Zeus',  'Perro', 1, 'Dálmata',          18.30, '2024-01-15', NOW(), NOW()),
('Maya',  'Gato',  4, 'Siberiano',        6.10,  '2021-12-20', NOW(), NOW()),
('Duke',  'Perro', 7, 'Boxer',            27.00, '2018-06-06', NOW(), NOW()),
('Rex',   'Perro', 3, 'Golden Retriever', 28.70, '2022-10-30', NOW(), NOW());
