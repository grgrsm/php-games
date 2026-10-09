# GRIGAME- Plain PHP Web Project

A prototype of a gaming community web application featuring a user management system, secure forms, authentication, registration, and feedback collection.

## 🛠️ Stack & Technologies

The environment configuration matches the local **Open Server Panel (OSPanel)** setup:

*   **Web Server (HTTP):** Apache 2.4 + Nginx 1.23
*   **Backend Environment:** PHP 8.1
*   **Database (RDBMS):** MySQL 8.0 (Windows 10 Native Environment)

## 📦 Installed Packages

The project dependencies are managed via **Composer**:

*   **[vlucas/phpdotenv](https://github.com/vlucas/phpdotenv):** Used to securely separate passwords, encryption keys, and environment-specific parameters (like database credentials) from the source code.

## 🔑 Core Features

1.  **User Authentication:** Complete Login and Logout state processing.
2.  **User Registration:** Password sanitization, filtering, and storage using reliable hash functions.
3.  **Data Forms:** Input validation and parameter binding to protect forms from SQL Injection and Cross-Site Scripting (XSS).
4.  **Database Integration:** High-performance interaction via PHP Data Objects (PDO) with custom error processing modes.
