# READ ME fil rouge Multipage website


## Demande client

 - J'ai besoin de rafraichir mon site web ! www.lespetitsriens.be
 - J'aurais besoin d'un site avec plusieurs pages pour bien séparer le contenu.
 - J'aimerais bien que les visiteurs de mon site puissent m'envoyer un mail via un formulaire de contact avec une petite photo.
 
## Consignes particulières

* 3 branches Github
* principe DRY

* un .gigignore
* CSS Responsive sur base d'un framework CSS au choix
* Score d'au moins 80/100 de chaque page au Lighthouse Test
* formulaire de contact par methode POST

### Le formulaire

- Envoi d'une image via cette classe externe php upload
- La fonction mail() de php étant trop basique, utilise une class externe pour mail
- Toujours pour l'envoi de l'email, utilise un serveur SMTP gratuit comme gmail (utilisez votre propre compte)
- Sanitisation : éviter les injections SQL

- Limiter l'upload uniquement aux formats d'images les plus courants (jpg, jpeg, png, gif)
- Obliger le minimum pour pouvoir répondre : email + message

   - Bien respecter la séquence sanitiser > valider > exécuter > afficher (relire ceci)
  - Loguer l'activité dans un fichier texte qui sera mis à jour à chaque fois.
   - Envoi des données du formulaire dans vos boîtes mail, avec CC à l'émetteur (l'utilisateur)
   - Mentionner le prénom, le nom, l'adresse mail, la date et l'heure et le format de réponse demandé par l'utilisateur.
  -  Faire une page supplémentaire (/form-logs.php) qui affiche le contenu du log sans mentionner les noms de famille, ni les Adresses mails.
   - Lorsque l'utilisateur fait des erreurs d'encodage, les messages d'erreur s'affichent à proximité du champs concerné et sont pertinents
   - mockup: [mockup](mockup.png)
   
## Liste des objectifs d'apprentissage (OA)

Grâce à ce projet, je voudrais apprendre (choisis environ 6 ou 7 OA) :

1. groupe : Agile (manipulation tableau kanban) + tenue quotidienne du planning du groupe
Évaluation : présence d'un projects board bien tenu et montrant qu'il a été utilisé pour la gestion du projet.

2. groupe : être le capitaine du repos, qui gère les merge et les conflits
Évaluation : conflits résolus, présence de branches sur lesquelles chacun(e) a travaillé...

3. groupe : rédaction d'un readme complet et professionnel
Évaluation : fichier readme bien construit et contenant un lien vers le projet en ligne.

4. UX : branding
Évaluation : le site fournit représente un outil marketing perçu comme professionnel. Un système graphique cohérent se retrouve de pages en pages.

5. UX : mentions GDPR et Copyright pour informer l'utilisateur de l'utilité de fournir les données
Évaluation :

6. une option non cochée par défaut dans le formulaire permet à l'utilisateur de spécifier qu'il est d'accord que le site utilise ses données et documents envoyés uniquement afin de répondre à sa requête directe et non à des fins de marketing ou autre.
une notification invite l'utilisateur à accepter l'usage de cookies.
toute image sera accompagnée d'une légende à proximité, indiquant l'auteur (et la source si disponible).
frontend : sélection et mise en place d'un framework CSS
Évaluation : un framework CSS a été utilisé pour réaliser les interfaces.

7. backend : UML charting des différents scripts
Évaluation : présence dans le readme de l' UML du script traitant le formulaire.

8. backend : upload d'image
Évaluation : lorsque l'on soumet le formulaire, l'image est bien uploadée et est présente dans l'email au format HTML.

9. backend : édition d'un fichier txt en PHP
Évaluation : lorsque l'on soumet le formulaire, une nouvelle ligne s'ajoute au fichier de Log.

10. backend : utilisation d'un serveur SMTP
Évaluation : un email envoyé est bien reçu. Dans le code, utilisation d'un serveur SMTP externe.

11. backend : éviter les injections SQL
Évaluation : le script php traitant le formulaire empêche l'injection SQL d'être potentiellement exécutée.

12. devops : déploiement sur Heroku
Évaluation : le site de production fonctionne sans bugs sur Heroku.

13. backend : afficher les erreurs à proximité des champs concernés
Évaluation : lorsque j'introduis volontairement des erreurs dans le formulaire (maladresse ou tentative d'injection SQL), le html du ou des messages d'erreurs s'affiche à proximité du champ concerné.

14. frontend/backend : utiliser le lighthouse test pour améliorer son site et atteint un score de minimum 80 pour chaque critère.
Évaluation : chaque page du site sera testée.

15. frontend : Progressive Web App

16. Évaluation : le score de l'aspect PWA de Lighthouse Test sera de 100.


## Equipe

Bonjour, 

Nous voici: Alexandre et Julie, tous les deux juniors developpers a Becode. 
Du haut de nos 26 ans, nous avons attaqué à pleine dent ce challenge en 7 jours, avec entreinte et bonne humeur. 
Notre entente fut superbe, et nous etions sur la même longueur d'onde du début à la fin.

### Organisation 

Dés le premier jour, nous avons clairement repartis nos tâches:
Julie s'occupera du front end, Alex du back end. 
Etant donné que ce dernier est plus large et complexe, nous avons finalement collaboré pour y parvenir. 

Nous n'avions pas le droit de nous rencontrer en face à face, et nous avons donc communiqué via Ryver, par chat, afin de coordonner nos actes. 

Nous avons utilisé Github afin d'heberger notre projet momentanément, et avons créé 3 branches. 

Le dernier jour, un push sur la branche finale master a été fait. 

## Nos conclusions

Au niveau de l'équipe, tout s'est très bien passé, nos rythmes furent coordonnés et nous etions dans le même état d'esprit calme, et organisé. 
Nous avons tous les deux beaucoup appris, et nous avons une vision plus cohérente et objective du back end (php). 
Nos préférences préalables quant au dévelopement web se sont aussi renforcées grace à ce challenge.

Nous sommes content de notre travail dans l'ensemble, mais nous somme bien sur conscient qu'il reste enormément à améliorer. 
- Lighthouse pas top;
- Progressive web app ne fonctionne pas malgré nos multiples tentatives ( detecte pas le service worker);
- gros problèmes avec heroku : le deploiement ne se fait pas, message d'erreur qu'on ne comprend pas;
- form-logs.php pas fait. (coming soon)
 
