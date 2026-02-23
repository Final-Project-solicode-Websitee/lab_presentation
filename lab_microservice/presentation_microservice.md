---
marp: true
theme: default
paginate: true
backgroundColor: #fff
header: 'Présentation Architecture Logicielle'
footer: 'Solicode - 2026'
---

# Presentation de Microservices

---

# 1) Architecture Monolithique

## 📌 Définition

Une application monolithique =  
👉 Tout le système est dans un seul bloc.

Frontend + Backend + Base de données + Logique métier  
= 🧱 Une seule application

---

## 📌 Exemple

Si ton projet Laravel contient :

- Gestion des utilisateurs  
- Gestion des commandes  
- Gestion des produits  

Et tout est dans le **même projet Laravel**,  
👉 c’est une architecture monolithique.

---

## ✅ Avantages du Monolithique

- Plus simple à développer au début  
- Plus facile à déployer  
- Idéal pour les petits projets  

---

## ❌ Inconvénients du Monolithique

- Difficile à maintenir quand le projet devient grand  
- Si une partie tombe en panne → toute l’application peut tomber  
- Scalabilité limitée  

---

# 2) Architecture Microservices

## 📌 Définition

Microservice = Architecture basée sur des services indépendants.

Un microservice est une **petite application autonome**  
qui fait une seule chose, mais qui la fait bien.

- Chaque service a sa propre logique  
- Chaque service peut avoir sa propre base de données  
- Chaque service peut être déployé indépendamment  

---

## 📌 Pourquoi utiliser les Microservices ?

- Séparer les responsabilités  
- Permettre à plusieurs équipes de travailler en parallèle  
- Améliorer la maintenance  
- Faciliter la scalabilité  

Au lieu d’une seule grande application,  
on divise en plusieurs services indépendants.

---

## 📌 Comment fonctionnent les Microservices ?

1. L'utilisateur envoie une requête.  
2. La requête passe par une API Gateway (optionnel).  
3. L’API redirige vers le microservice concerné.  
4. Le microservice traite la demande.  
5. Il renvoie une réponse (souvent en JSON).  

Communication possible via :
- HTTP / REST  
- Message Broker  
- gRPC  

---

## 📌 Exemple (E-commerce)

Un site e-commerce peut avoir :

- User Service → Gestion des utilisateurs  
- Product Service → Gestion des produits  
- Order Service → Gestion des commandes  
- Payment Service → Gestion des paiements  

Chaque service fonctionne seul mais communique avec les autres.

---

## ✅ Avantages des Microservices

- Haute scalabilité  
- Déploiement indépendant  
- Flexibilité technologique  
- Meilleure organisation des grands projets  

---

## ❌ Inconvénients des Microservices

- Architecture plus complexe  
- Gestion réseau plus difficile  
- Besoin d’outils DevOps  

---

# Conclusion

Monolithique → Simple et adapté aux petits projets.  
Microservices → Puissant et adapté aux grands systèmes évolutifs.
