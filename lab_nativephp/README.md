---
marp: true
html: true
theme: default
paginate: true
backgroundColor: #1a1a2e
color: #eaeaea
style: |
  h1 { color: #e94560; }
  h2 { color: #0f3460; background: #e94560; padding: 4px 12px; border-radius: 4px; display: inline-block; }
  code { background: #16213e; color: #a8ff78; }
  pre { background: #16213e; border-left: 4px solid #e94560; }
  hr { border-color: #e94560; }
  ul li { margin: 6px 0; }
  table { background: #ffffff; border-radius: 8px; overflow: hidden; }
  th { background: #e94560; color: #ffffff; padding: 8px 14px; }
  td { color: #1a1a2e; padding: 6px 14px; background: #f5f5f5; }
---

# NativePHP Lab 🚀

> Building Desktop Applications with Laravel & PHP

---

# 🧠 What is NativePHP?

**NativePHP** is an open-source PHP framework that lets you build **cross-platform desktop applications** using the tools you already know as a Laravel developer.

- ⚙️ **Laravel** — your full backend, routing, and business logic
- 🐘 **PHP** — no need to learn a new language
- 🖼️ **Blade** — render your UI just like a web app
- ⚡ **Electron** — powers the native desktop window under the hood

> Instead of learning Swift, Kotlin, or C#,  
> you write **PHP** and ship a real desktop app. 🖥️

---

# 🎯 Where is NativePHP Used?

NativePHP is commonly used for:

- 🗂️ Management Systems
- 🛠️ Admin Dashboards
- 📴 Offline Business Tools

---

# 🚀 Installation & Usage Steps

> Assuming you already have a **Laravel project** set up.

---

## 1️⃣ Install NativePHP

```bash
composer require nativephp/electron
```

### What does this command do?

- Installs the NativePHP package into your Laravel project
- Adds necessary desktop-related files and dependencies

---

## 2️⃣ Install Node Dependencies

```bash
npm install
```

Installs all required **JavaScript / Electron** dependencies.

---

## 3️⃣ Setup NativePHP

```bash
php artisan native:install
```

### What does this command do?

- Publishes configuration files
- Prepares your Laravel project to run as a desktop app
- Configures Electron settings

---

## 4️⃣ Run the Desktop Application

```bash
php artisan native:serve
```

Launches your app in a **native desktop window** for development.

---

## 5️⃣ Build the Production Application

```bash
php artisan native:build
```

### What does this command do?

- Packages your application
- Generates a production-ready **executable file**
- Creates `.exe` (Windows) or `.dmg` (macOS) installers

> You can distribute this file to users for installation.

---

# 📁 Project Structure Additions

NativePHP adds:

| File/Folder            | Purpose                  |
| ---------------------- | ------------------------ |
| Configuration files    | App settings & metadata  |
| Electron configuration | Desktop window behavior  |
| Build settings         | Packaging & distribution |

---

# ✅ Summary

| Step             | Command                               |
| ---------------- | ------------------------------------- |
| Install package  | `composer require nativephp/electron` |
| Install deps     | `npm install`                         |
| Setup            | `php artisan native:install`          |
| Dev run          | `php artisan native:serve`            |
| Production build | `php artisan native:build`            |

---

# 🙏 Thank You!
