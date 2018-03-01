# Modèle Physique de Données

### User
+ id: INTEGER NOT NULL [PK]
+ name: VARCHAR
+ email: VARCHAR
+ password: VARCHAR
+ timestamp

### Project
+ id: INTEGER NOT NULL [PK]
+ user_id:  INTEGER NOT NULL [FK]
+ title: VARCHAR
+ timestamp

### Element
+ id: INTEGER NOT NULL [PK]
+ user_id:  INTEGER NOT NULL [FK]
+ type: VARCHAR ?
+ content: ???
+ timestamp

### project_element
+ id:  INTEGER NOT NULL [PK]
+ project_id:  INTEGER NOT NULL [FK]
+ element_id:  INTEGER NOT NULL [FK]
+ timestamp