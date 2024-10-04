# Database Documentation

This documentation provides a detailed overview of the database schema, including table structures, relationships, and descriptions. It is intended to help developers understand and work with the database effectively.

## Table of Contents
- [Users](#users)
- [Roles](#roles)
- [Permissions](#permissions)
- [Model Has Roles](#model-has-roles)
- [Model Has Permissions](#model-has-permissions)
- [Role Has Permissions](#role-has-permissions)
- [Project](#project)
- [Project Collab](#project-collab)
- [Project User](#project-user)
- [Page](#page)
- [Widget](#widget)
- [Widget Page](#widget-page)
- [Devices](#devices)
- [Coupons](#coupons)
- [History Redeem](#history-redeem)
- [Packages](#packages)
- [Orders](#orders)
- [Share Project](#share-project)
- [Feature Request](#feature-request)
- [Terms](#terms)
- [Popup](#popup)

## Users
### Description
The users table stores information about the users of the application, including authentication details and profile information.

### Columns

| Column           | Data Type       | Attributes                          | Description                           |
| :--------------: | :-------------: | :----------------------------------: | :-----------------------------------: |
| id               | BIGINT          | Primary Key, Auto-increment          | Unique identifier for each user.      |
| name             | VARCHAR(255)    | Not Null                            | Full name of the user.                |
| email            | VARCHAR(255)    | Not Null, Unique                    | Email address of the user.            |
| email_verified_at| TIMESTAMP       | Nullable                            | Timestamp when the user's email was verified. |
| password         | VARCHAR(255)    | Not Null                            | Encrypted password for authentication. |
| is_organization  | TINYINT(1)      | Default: 0                          | 1 if user represents an organization; else 0. |
| token            | INT             | Default: 5000                       | Token balance associated with the user. |
| photo            | VARCHAR(255)    | Nullable                            | URL to the user's profile photo.      |
| remember_token   | VARCHAR(100)    | Nullable                            | Token used to remember the user's session. |
| created_at       | TIMESTAMP       | Nullable                            | Timestamp when the user record was created. |
| updated_at       | TIMESTAMP       | Nullable                            | Timestamp when the user record was last updated. |

### Relationships
- Has Many `projects` via `user_id`.
- Belongs to Many `roles` through `model_has_roles`.
- Belongs to Many `permissions` through `model_has_permissions`.
- Has Many `orders` via `user_id`.
- Has Many `history_redeem` via `user_id`.
- Has Many `project_collab` via `user_id`.
- Has Many `project_user` via `user_id`.
- Has Many `share_project` via `user_id`.

---

## Roles
### Description
The roles table stores different roles that can be assigned to users, such as "admin", "editor", or "user".

### Columns

| Column     | Data Type    | Attributes                       | Description                             |
| :--------: | :----------: | :------------------------------: | :-------------------------------------: |
| id         | BIGINT       | Primary Key, Auto-increment       | Unique identifier for each role.        |
| name       | VARCHAR(255) | Not Null, Default: 'user'         | Name of the role.                       |
| guard_name | VARCHAR(255) | Not Null                         | Name of the guard (e.g., "web", "api"). |
| created_at | TIMESTAMP    | Nullable                         | Timestamp when the role was created.    |
| updated_at | TIMESTAMP    | Nullable                         | Timestamp when the role was last updated.|

### Relationships
- Belongs to Many `users` through `model_has_roles`.
- Belongs to Many `permissions` through `role_has_permissions`.

---

## Permissions
### Description
The permissions table stores permissions that can be assigned to roles or users, defining what actions they can perform.

### Columns

| Column      | Data Type    | Attributes          | Description                                 |
| :---------: | :----------: | :-----------------: | :-----------------------------------------: |
| id          | BIGINT       | Primary Key         | Unique identifier for each permission.      |
| name        | VARCHAR(255) | Not Null            | Name of the permission.                    |
| guard_name  | VARCHAR(255) | Not Null            | Name of the guard.                         |
| created_at  | TIMESTAMP    | Nullable            | Timestamp when the permission was created. |
| updated_at  | TIMESTAMP    | Nullable            | Timestamp when the permission was last updated.|

### Relationships
- Belongs to Many `roles` through `role_has_permissions`.
- Belongs to Many `users` through `model_has_permissions`.

---

## Model Has Roles
### Description
The model_has_roles table is a pivot table that defines a many-to-many relationship between users and roles.

### Columns

| Column      | Data Type    | Attributes          | Description                                 |
| :---------: | :----------: | :-----------------: | :-----------------------------------------: |
| role_id     | BIGINT       | Foreign Key         | References `roles.id`.                      |
| model_type  | VARCHAR(255) | Not Null            | The type of model (usually 'App\Models\User').|
| model_id    | BIGINT       | Foreign Key         | References `users.id`.                      |

### Relationships
- Belongs to `roles` via `role_id`.
- Belongs to `users` via `model_id`.

---

## Model Has Permissions
### Description
The model_has_permissions table is a pivot table that defines a many-to-many relationship between users and permissions.

### Columns

| Column          | Data Type    | Attributes          | Description                                 |
| :-------------: | :----------: | :-----------------: | :-----------------------------------------: |
| permission_id   | BIGINT       | Foreign Key         | References `permissions.id`.                |
| model_type      | VARCHAR(255) | Not Null            | The type of model.                          |
| model_id        | BIGINT       | Foreign Key         | References `users.id`.                      |

### Relationships
- Belongs to `permissions` via `permission_id`.
- Belongs to `users` via `model_id`.

---

## Role Has Permissions
### Description
The role_has_permissions table is a pivot table that defines a many-to-many relationship between roles and permissions.

### Columns

| Column          | Data Type    | Attributes          | Description                                 |
| :-------------: | :----------: | :-----------------: | :-----------------------------------------: |
| permission_id   | BIGINT       | Foreign Key         | References `permissions.id`.                |
| role_id         | BIGINT       | Foreign Key         | References `roles.id`.                      |

### Relationships
- Belongs to `permissions` via `permission_id`.
- Belongs to `roles` via `role_id`.

---

## Project
### Description
The project table stores information about projects created by users.

### Columns

| Column             | Data Type    | Attributes          | Description                             |
| :----------------: | :----------: | :-----------------: | :-------------------------------------: |
| auth_code          | VARCHAR(255) | Primary Key         | Unique authentication code for the project. |
| user_id            | BIGINT       | Foreign Key         | References `users.id`.                      |
| unique_project_name| VARCHAR(255) | Not Null, Unique    | Unique name of the project.            |
| description        | TEXT         | Nullable            | Description of the project.            |
| category           | VARCHAR(30)  | Not Null            | Category of the project.               |
| icon               | VARCHAR(50)  | Not Null            | Icon representing the project.         |
| is_public          | TINYINT(1)   | Not Null, Default: 0| 1 if project is public; else 0.        |
| token              | INT          | Not Null, Default: 0| Token balance associated with the project. |
| created_at         | TIMESTAMP    | Not Null            | Timestamp when the project was created.|
| updated_at         | TIMESTAMP    | Not Null            | Timestamp when the project was last updated.|

### Relationships
- Belongs to `users` via `user_id`.
- Has Many `pages` via `auth_project`.
- Has Many `devices` via `auth_project`.
- Has Many `project_collab` via `auth_project`.
- Has Many `project_user` via `auth_project`.
- Has Many `share_project` via `auth_project`.

---

... *continue with the same structure for other tables* ...
