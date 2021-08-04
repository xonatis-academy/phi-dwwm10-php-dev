# Projet #1 : Gestion de commandes Click and Collect

Nous souhaitons développer un projet de Click and Collect de soupes aux glacons. Une soupe au glacons est consistuée d'eau agrémenté de glacons cubiques délicieux à croquer. Notre marque se base sur l'utilisation de glacons bio, fabriqué sans l'utilisation de pesticides ou d'OGM.

## 1. Les pages du projet

Le projet est constitué de 2 pages :

### a. Page de commande

1. une page de commande d'une soupe aux glacons avec laquelle, **grâce à un formulaire**, le client peut commander une soupe aux glacons avec les informations suivantes :

- nom de famille du client
- numero de téléphone
- age
- volume demandée pour la soupe (en litre)
- nombre de glacons souhaité

Les informations entrées doivent être **sauvegardées dans les cookies** du navigateur afin de faciliter la prochaine commande du client (c'est-à-dire que les champs seront pré-remplis avec les informations précédemment saisies). Par ailleurs, la commande doit également être enregistrée en **base de données**.

Une verification du numéro de téléphone doit être faite au backend. En particulier, cela doit être une chaine de caractères numérique et avoir une longueur de 10 caractères. A défaut, une page d'erreur sera affichée.

Une verification de l'age doit être faite au backend. En particulier, cela doit être une chaine de caractères numérique. A défaut, une page d'erreur sera affichée.

### b. Page de détails

2. une page permettant de récupérer le détail d'une commande à partir des informations suivantes :

- nom de famille du client
- numéro de téléphone
- age

Si ces informations correspondent à une commande en base de données, l'ensemble des informations de la commande doivent s'afficher. Sinon, une page expliquant qu'aucune commande a été passée avec ces informations devra être affichée.

Par ailleurs, si la commande a été trouvée, un prix doit être calculé automatiquement pour cette soupe. La règle de calcul est la suivante : 1,50 euros pour chaque litre de soupe et 0,70 euros pour chaque glacon.
Le prix total de la commande doit être affiché sur la page de détail de la commande.

Par exemple, pour une soupe de 2 litres et 4 glacons, le prix total à afficher est le suivant : `5.80`.
En effet, `5.80 = 1.50 x 2 + 0.70 x 4`.

## 2. Contraintes techniques du projet

Vous avez des contraintes techniques à respecter dans l'implémentation du projet.

1. Le model doit se nommer `Commande`
2. L'architecture MVC doit être respecté
3. Le dossier des vues doit s'appeler `views`

## 3. Conseils

Vous ne disposez pas de visuel illustrant les pages, ni d'indications supplémentaires. Il faudra concilier ce que vous avez appris en formation avec la demande ci-dessous et retrouver les mécanismes qui vous intéressent pour les implémenter. Vous ne serez pas notés sur l'aspect visuel du site internet.

# Projet #2 : Gestion d'un coffre fort numérique

Nous souhaitons réaliser un coffre fort numérique. L'utilisateur peut y déposer des données, mais pour y accéder, il doit avoir en sa possession 3 clés déterminées à l'avance (2 saisies par l'utilisateur et 1 clé générée automatiquement).

## 1. Les pages du projet

Le projet est constitué de 2 pages :

### a. Page d'ajout de données

1. une page d'ajout de données avec laquelle, **grâce à un formulaire**, le client peut ajouter des données à la base de données avec les informations suivantes :

- adresse email du client
- données (dont la saisie doit se faire à l'aide d'un textarea)
- clé numéro 1 personnalisée
- clé numéro 2 personnalitée

Les clés personnalisées sont des champs saisissable par le client.

Les informations entrées *ne doivent pas* être sauvegardées dans les cookies du navigateur et par ailleurs, la ces informations doivent également être enregistrées en **base de données**.

Une fois que le client a cliqué sur le bouton de soumission, une troisième clé aléatoire (nombre positif) doit être généré automatiquement et être affiché au client, avec un message lui demandant de noter cette clé. Elle sera en effet nécessaire consulter les données ultérieurement.

### b. Page de requete

2. une page permettant de récupérer le détail des données précédement enregistrées à partir des informations suivantes :

- clé numéro 1 personnalisée
- clé numéro 2 personnalisée
- clé numéro 3 automatique

Si ces informations correspondent à une information en base de données, l'ensemble des informations doivent s'afficher. Sinon, une page expliquant qu'aucune information n'a été trouvée devra être affichée.

## 2. Contraintes techniques du projet

Vous avez des contraintes techniques à respecter dans l'implémentation du projet.

1. Le model doit se nommer `Information`
2. L'architecture MVC doit être respecté
3. Le dossier des vues doit s'appeler `templates`
4. Le dossier des modèles doit s'appeler `entities`

## 3. Conseils

Vous ne disposez pas de visuel illustrant les pages, ni d'indications supplémentaires. Il faudra concilier ce que vous avez appris en formation avec la demande ci-dessous et retrouver les mécanismes qui vous intéressent pour les implémenter. Vous ne serez pas notés sur l'aspect visuel du site internet.