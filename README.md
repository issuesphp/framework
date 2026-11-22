<p align="center"><a href="https://issuesphpframework.online/" target="_blank"><img src="https://issuesphpframework.online/public/images/issuesphp_framework_php.png" width="400"></a></p>

# IssuesPHP 🚀

> **Note:** This repository contains the core code of the IssuesPHP framework. If you want to build an application using IssuesPHP, visit the main [IssuesPHP repository](hhttps://github.com/issuesphp/issuesphp).

**A lightweight, fast, and expressive PHP framework designed to build both full-featured web applications and microservices without endless configuration.**

<a href="https://packagist.org/packages/issuesphp/issuesphp"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/issuesphp/issuesphp"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/issuesphp/issuesphp"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>

---

## ✨ Why IssuesPHP?

**IssuesPHP** removes the overhead of heavy monolithic frameworks without sacrificing structure or scalability. Its architecture lets you go from a full MVC web interface to an independent microservice using the exact same clean syntax:

* 🌐 **Web Applications & Microservices:** Render full views or deploy lightweight, decoupled services with immediate response times.
* ⚡ **Ultra-Direct Routing:** Connect controllers, actions, route aliases, and dynamic parameters in a single readable line.
* 🚀 **High Performance & Low Footprint:** Minimalist core built for fast boot times and low memory usage in containers or traditional servers.
* 🧩 **Minimal Learning Curve:** Predictable structure that any PHP developer can master in minutes.

---

## 📦 Installation

Create a new project directly via Composer:

```bash
composer create-project issuesphp/issuesphp nameapp
cd nameapp
php issues.php
```

Open `http://localhost/nameapp` in your browser or start testing your endpoints right away.

---

## 🚀 Simple & Expressive Routing

In **IssuesPHP**, all your routes are centralized inside `routeFactory()`, directly mapping the **controller**, **method**, **route alias**, and **parameters**:

```php
<?php

function routeFactory($segment, $param1, $param2, $param3) {

    // Main module
    Route::get('welcome', 'index', 'welcomes', $segment);
    Route::get('welcome', 'add', 'create', $segment, $param1);
    Route::get('welcome', 'show', 'show', $segment, $param1);
    Route::get('welcome', 'delete', 'delete', $segment, $param1);

    // Authentication & security
    Route::get('security', 'login', 'login', $segment);
    Route::get('security', 'logout', 'logout', $segment);
    Route::get('security', 'register', 'register', $segment);

    // User management / service endpoints
    Route::get('user', 'index', 'users', $segment);
    Route::get('user', 'dashboard', 'dashboard', $segment);
    Route::get('user', 'show', 'ushow', $segment, $param1);

}
```

### Anatomy of a Route in IssuesPHP

```php
Route::get('controller', 'method', 'url_alias', $segment, $param1);
```

| Parameter | Description | Example |
| :--- | :--- | :--- |
| **`controller`** | Name of the controller handling the request | `'user'` |
| **`method`** | Action or method inside the controller | `'show'` |
| **`url_alias`** | Public route or endpoint name | `'ushow'` |
| **`$segment`** | Primary segment of the current URI | `$segment` |
| **`$param1..3`** | Dynamic parameters captured from the URL | `$param1` |

---

## 🎯 Ideal Use Cases

* **MVC Web Applications:** Admin panels, portals, dashboards, and full CRUD apps with a clean separation between business logic and views.
* **Microservices & APIs:** Specialized services (authentication, user management, notifications, gateways) that demand fast startup and zero heavy dependencies.

---

## 📁 Project Structure

```text
nameapp/
├── app/
│   ├── Controllers/    # Controllers (Welcome, Security, User...)
│   └── Models/         # Business logic and data layer
├── core/               # Framework engine and Route class
├── public/             # Entry point (index.php) and static assets
├── routes/             # routeFactory() definitions
└── views/              # UI templates (optional in microservice mode)
```

---

## 🤝 Contributing

Want to improve **IssuesPHP** or report a bug?

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/amazing-feature`).
3. Commit your changes (`git commit -m 'Add amazing feature'`).
4. Push to the branch (`git push origin feature/amazing-feature`).
5. Open a **Pull Request**.

---

## 📄 License

Distributed under the [MIT](LICENSE) License. See `LICENSE` for more information.
