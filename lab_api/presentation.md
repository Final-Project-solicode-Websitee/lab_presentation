---
marp: true
theme: default
paginate: true
backgroundColor: #fff
header: 'Présentation API'
footer: 'Solicode - 2026'
---

# Qu'est-ce qu'une API ?

## 1) Définition

**API = Application Programming Interface**  
*(Interface de Programmation d'Application)*

En termes simples :  
Une **API est un pont** qui permet à deux applications de communiquer entre elles.

- Une application **envoie une requête**
- L'autre application **renvoie une réponse**
- Les deux suivent des règles claires et définies.

---

## 2) Pourquoi utilisons-nous des API ?

Les API permettent de séparer les responsabilités :

- **Front-end** → Gère l'interface utilisateur (ce que l'utilisateur voit).
- **Back-end** → Gère la logique, les données et la sécurité.
- **Autres applications** → Peuvent utiliser la même API (mobile, web, tablettes, etc.).

Au lieu que tout soit connecté directement, l'API devient la **couche de communication officielle**.

---

## 3) Comment fonctionne une API ?

La communication suit un processus simple en 4 étapes :

1. **Requête (Request)** – Le client envoie une demande.
**Exemple :**
"Donne-moi la liste des utilisateurs"

2. **Réception** – L'API reçoit la requête et vérifie sa validité.

3. **Traitement** – Le serveur traite la demande (Logique + Base de données).

4. **Réponse (Response)** – L'API renvoie une réponse (généralement au format **JSON**).

---

## 4) API REST (Le type le plus commun)

La plupart des API modernes utilisent les méthodes HTTP pour définir les actions :

- **GET** → Récupérer des données.
- **POST** → Créer de nouvelles données.
- **PUT / PATCH** → Mettre à jour des données existantes.
- **DELETE** → Supprimer des données.

---

## 5) Exemple Simple

### Récupérer les produits

**Requête**
- Méthode : `GET`
- URL : `/api/products`

**Réponse (JSON)**
```json
[
  { "id": 1, "nom": "Ordinateur Portable", "prix": 900 },
  { "id": 2, "nom": "Souris", "prix": 20 }
]
```
---

## 6) Methode Utiliser
- Postman
