# 📋 Sprint-3 . Patrones de Diseño en PHP  Nivel 1

## 📄 Descripción  
Este ejercicio se centra en la implementación de diferentes patrones de diseñ. Se trabaja con el patrón **Singleton** y la **Inyección de Dependencias**.  

### Ejercicios  

1. **Refactorización de la clase Tigger (Singleton)**  
   - Modificar la clase `Tigger` para que siga el patrón **Singleton**.  
   - Definir el método `getInstance()` que cree una instancia única de la clase.  
   - Imprimir el rugido de Tigger múltiples veces.  
   - Añadir un método `getCounter()` que devuelva el número de rugidos realizados por Tigger.  

2. **Inyección de Dependencias**  
   - Simular la lógica de una persona que está a punto de salir de casa y necesita llevar ciertos objetos esenciales.  
   - Aplicar el patrón de **Inyección de Dependencias** para gestionar los objetos que la persona debe llevar consigo (cartera, llaves, tarjeta de transporte, smartphone, etc.).  

---

## 💻 Tecnologías Utilizadas  
- PHP v8.0 o superior  
- Composer (para autoload en el segundo ejercicio)  

---

## 📋 Requisitos  
- Entorno de ejecución PHP configurado (como XAMPP, WAMP o Laragon).  
- Editor de texto o IDE compatible con PHP (como VSCode o PHPStorm).  

---

## 🛠️ Instalación  

1. **Clona este repositorio**:  
   ```bash
   git clone <https://github.com/LenaPradoP/Sprint-3.-PHP-i-Patterns->
   ```  
2. **Accede al directorio del proyecto**:  
   ```bash
   cd Sprint-3.-PHP-i-Patterns-
   ```  
3. **Instala las dependencias con Composer** 
   ```bash
   composer install
   ```  
4. **Configura tu servidor local**:  
   - Coloca los archivos dentro de la carpeta de tu servidor local (ej.: `htdocs` si utilizas XAMPP).

---

## ▶️ Ejecución  

### 🐯 Ejercicio 1: Singleton (Tigger)  
1. Abre el archivo `tigger.php` en tu servidor local:  
   ```
   http://localhost/nombre-del-repositorio/tigger.php
   ``` 
### 🏠 Ejercicio 2: Inyección de Dependencias  
1. Ejecuta el archivo principal de este ejercicio:  
   ``` 
2. http://localhost/nombre-del-repositorio/index.php
   ```  
---

## 🌐 Despliegue  

Este proyecto es solo un ejemplo de aprendizaje y no está diseñado para ser desplegado en producción.

---

## 🤝 Contribuciones  

¡Las contribuciones son bienvenidas! Si deseas contribuir, sigue estos pasos:  

1. Haz un fork del repositorio.  
2. Crea una nueva rama:  
   ```bash
   git checkout -b feature/NuevaFuncionalidad
   ```  
3. Realiza tus cambios y haz commit:  
   ```bash
   git commit -m "Añade Nueva Funcionalidad"
   ```  
4. Sube los cambios a tu repositorio:  
   ```bash
   git push origin feature/NuevaFuncionalidad
   ```  
5. Crea un pull request.

