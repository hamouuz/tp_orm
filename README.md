# tp_orm

# Lister les données nécessaires :

- Données pour les dépêches AFP :
     Identifiant de la dépêche
     Titre de la dépêche
     Contenu de la dépêche
     Date de publication de la dépêche
     Source de la dépêche
     
- Données pour les articles générés :

     Identifiant de l'article
     Titre de l'article
     Contenu de l'article
     Date de création de l'article
     URL de l'article
     Statut de publication de l'article (brouillon, publié)
     Auteur de l'article (IA générative)

     
 - Données pour les illustrations :
 
     Identifiant de l'illustration
     URL de l'illustration
     Description de l'illustration
     Date de création de l'illustration
     Données pour les tags :
     Identifiant du tag
     Nom du tag
     
- Données pour l'IA générative :
    Identifiant de l'IA générative
    Type de l'IA générative (texte ou image)
    Fonction de l'IA générative
    
- Relations entre les entités :

    Une dépêche AFP peut générer plusieurs articles.
    Un article peut avoir plusieurs illustrations.
    Un article peut avoir plusieurs tags.
    Un article utilise une IA générative pour le texte.
    Une illustration utilise une IA générative pour l'image.



# 2- Créer le diagramme de classe UML

![image](https://github.com/hamouuz/tp_orm/assets/118366904/63dbfb67-4fdc-47b3-b6c6-a7b7bd0c6dd7)




# 3- Créer le diagramme MCD

![image](https://github.com/hamouuz/tp_orm/assets/118366904/dd53019e-137f-4d6a-9b3a-855ac056b59f)


# J'ai utilisé le framework symfony avec l'ORM DOCTRINE ,le code se trouve ci dessus.



