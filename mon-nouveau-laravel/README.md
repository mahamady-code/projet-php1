# Projet UVBF - Plateforme de Promotion & Préinscription

Ce projet est une application web complète (Vitrine + Administration) développée sous **Laravel 11**. 
Il a été conçu pour digitaliser la promotion de la Licence en Informatique Appliquée de l'UVBF (Université Virtuelle du Burkina Faso).

---

## 🚀 Fonctionnalités Principales

**1. Espace Public (Vitrine pour étudiants) :**
- Une interface premium, fluide et *100% responsive* (adaptée aux smartphones et PC) construite avec Tailwind CSS.
- **Nos Formations** : Liste des programmes d'étude, niveaux requis et descriptions.
- **Notre Équipe** : Trombinoscope des enseignants impliqués.
- **Actualités & Débouchés** : Informations dynamiques liées à la vie universitaire et aux carrières IT.
- **Formulaire de Préinscription** : Formulaire intelligent connecté avec dépôt de pièce jointe sécurisé (PDF, Images).

**2. Espace Administrateur (Back-office privé) :**
- Tableau de bord avec statistiques dynamiques en temps réel.
- **Système CRUD complet** pour gérer l'intégralité du site : ajouts, modifications, suppressions (Formations, Enseignants, Actus...).
- Espace de gestion "Dossiers Candidats" permettant de lister les préinscriptions reçues et de télécharger leurs pièces jointes.

---

## 🛠️ Guide d'Installation (Pour le correcteur)

Prérequis recommandés : PHP 8.2+, Node.js, Composer, et une base de données MySQL.

1. **Cloner ou ouvrir le dossier du projet.**
2. **Installer les dépendances PHP :**
   ```bash
   composer install
   ```
3. **Installer les dépendances Front-End :**
   ```bash
   npm install
   ```
4. **Configuration de la Base de Données :**
   Renommez `.env.example` en `.env` (si ce n'est pas fait). Créez une base de données dans votre SGBD (ex: `esta_db`) et mettez à jour votre fichier `.env` :
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=votre_nom_de_base
   DB_USERNAME=root
   DB_PASSWORD=
   ```
5. **Générer la clé d'application et lier le stockage (pour les CV) :**
   ```bash
   php artisan key:generate
   php artisan storage:link
   ```
6. **Magie d'évaluation (Migrations & Seeders) :**
   Pour vous éviter de tester sur un site vide, nous avons préparé un "Seeder" professionnel. Lancez cette commande pour créer les tables ET injecter instantanément des fausses formations, professeurs et étudiants :
   ```bash
   php artisan migrate --seed
   ```
7. **Démarrer le moteur de design :**
   ```bash
   npm run build
   ```
8. **Démarrer le serveur local :**
   ```bash
   php artisan serve
   ```

---

## 🔐 Identifiants de Test Administrateur

Si vous avez lancé la commande `migrate --seed`, un compte Super Administrateur de test a automatiquement été créé, ce qui prouve le bon fonctionnement des Factories Laravel !

* **Adresse Email :** `admin@uvbf.bf`
* **Mot de passe :** `password`

*(Vous avez également la possibilité de créer votre propre compte via `/register` et tester le système d'authentification autonome de Laravel).*

---
Développé avec fierté pour démontrer la maîtrise professionnelle de Laravel MVC.
