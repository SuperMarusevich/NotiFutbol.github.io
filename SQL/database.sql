CREATE TABLE IF NOT EXISTS Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE Noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    contenido TEXT NOT NULL,
    fecha_publicacion DATE NOT NULL
);

CREATE TABLE Entrevistas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    contenido TEXT NOT NULL,
    fecha_publicacion DATE NOT NULL
);


CREATE DATABASE notifutbol;

USE notifutbol;

CREATE TABLE Noticias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    contenido TEXT NOT NULL,
    fecha_publicacion DATE
);

-- Insertar datos de ejemplo
INSERT INTO Noticias (titulo, contenido, fecha_publicacion) VALUES
('Nueva temporada de fútbol', 'La temporada 2024 comienza con nuevos equipos...', '2024-01-10'),
('Resultados de la última jornada', 'Aquí tienes todos los resultados de la última fecha...', '2024-02-15');
