J’ai crée une vue js à partir de laquelle , le user saisie les strings qui va le générer sous forme d'une chaine de ces strings sépares par des virgules 
lorsque on clique sur "envoyer données" ; nous envoyons cette chaine au controleur laravel ("/strings")en utilisant axios
dans la fonction  store , on prend la chaine de strings et on extraire dans un tableau , la liste de strings 
et nous envoyons ce tableau vers la view "qr-code.blade.php" et ici on génère les qr code image 
et on les enregistres dans un fichier storage/qr-code  et lorsque on clique sur "download zip " 
on obtient le fichier qrcode.zip qui contient ces qr codes images et au même temps le files temporaires seront supprimées

dans le cas où on le user n'a pas saisie les strings ,  j’ai un tableau des strings par defaut dans la fonction index dans le contrôleur QrCodeGeneratorController 


le projet tourner sur une autre machine, on peut le download a partir de repo github , et on le deplacer sous xampp/htdocs si on utilise xampp par exemple 
