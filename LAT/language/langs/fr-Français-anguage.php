<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([])
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================
	// PLEASE NOTE:
	// ============
	// When a new version of AppGini is released, new strings
	// might be added to the "defaultLang.php" file. To translate
	// them, simply copy them to this file ("language.php") and 
	// translate them here. Do NOT translate them directly in 
	// the "defaultLang.php" file.
	// =====================================================
	//
	// French Translation - 2014-04-10 - Claude Drouin
	// * Make sure Appgini application is generated using Western character encoding
	//

	// datalist.php
	$Translation["quick search"] = "Recherche Rapide";
	$Translation["records x to y of z"] = "Enregistrement <FirstRecord> &agrave; <LastRecord> de <RecordCount>";
	$Translation["filters"] = "Filtres";
	$Translation["filter"] = "Filtre";
	$Translation["filtered field"] = "Champ(s) Filtr&eacute;(s)";
	$Translation["comparison operator"] = "Op&eacute;rateur de comparaison";
	$Translation["comparison value"] = "Valeur &agrave; comparer";
	$Translation["and"] = "Et";
	$Translation["or"] = "Ou";
	$Translation["equal to"] = "&eacute;gal &agrave;";
	$Translation["not equal to"] = "Diff&eacute;rent de";
	$Translation["greater than"] = "Plus grand que";
	$Translation["greater than or equal to"] = "Plus grand ou &eacute;gal &agrave;";
	$Translation["less than"] = "Plus petit que";
	$Translation["less than or equal to"] = "Plus petit ou &eacute;gal &agrave;";
	$Translation["like"] = "Contient";
	$Translation["not like"] = "Ne contient pas";
	$Translation["is empty"] = "Est vide";
	$Translation["is not empty"] = "N'est pas vide";
	$Translation["apply filters"] = "Appliquer les filtres";
	$Translation["save filters"] = "Sauvegarder et appliquer les filtres";
	$Translation["saved filters title"] = "Code HTML pour les filtres appliqu&eacute;s";
	$Translation["saved filters instructions"] = "Copiez et collez le code ci-dessous dans un fichier HTML pour sauvegarder le filtre que vous venez de d&eacute;finir afin de pouvoir y acc&eacute;der pour le modifier dans le futur. Vous pouvez sauvegarder le code HTML sur votre ordinateur ou sur un serveur afin de l'utiliser dans une vue.";
	$Translation["hide code"] = "Cacher ce code";
	$Translation["printer friendly view"] = "Afficher selon le format d'impression";
	$Translation["save as csv"] = "Sauvegarder dans un fichier CSV(comma-separated values)";
	$Translation["edit filters"] = "&eacute;diter les filtres";
	$Translation["clear filters"] = "D&eacute;sactiver les filtres";
	$Translation['order by'] = 'Trier par';
	$Translation['go to page'] = 'Aller &agrave; la page:';
	$Translation['none'] = 'Aucun';
	$Translation['Select all records'] = 'S&eacute;lectionnez tous les enregistrements';
	$Translation['With selected records'] = 'Avec les enregistrements s&eacute;lectionn&eacute;s';
	$Translation['Print Preview Detail View'] = 'Imprimer un aper&ccedil;u de la vue d&eacute;taill&eacute;e';
	$Translation['Print Preview Table View'] = 'Imprimer un aper&ccedil;u de la liste';
	$Translation['Print'] = 'Imprimer';
	$Translation['Cancel Printing'] = "Annuler l'Impression";
	$Translation['Cancel Selection'] = 'Annuler la S&eacute;lection';
	$Translation['Maximum records allowed to enable this feature is'] = "Le maximum d'enregistrements pour utiliser cette fonction est de";
	$Translation['No matches found!'] = 'Aucun enregistrement trouv&eacute;!';
	$Translation['Start typing to get suggestions'] = 'D&eacute;butez la saisie au clavier pour afficher les suggestions.';
	
	
	// _dml.php
	$Translation["are you sure?"] = "D&eacute;sirez-vous vraiment effacer cet enregistrement?";
	$Translation["add new record"] = "Ajouter un nouvel enregistrement";
	$Translation["update record"] = "Mettre &agrave; jour l'enregistrement";
	$Translation["delete record"] = "Effacer l'enregistrement";
	$Translation["deselect record"] = "D&eacute;selectionner l'enregistrement";
	$Translation["couldn't delete"] = "Impossible d'effacer l'enregistrement &agrave; cause de l'existence de <RelatedRecords> enregistrement(s) associ&eacute;(s) dans la table '<TableName>'";
	$Translation["confirm delete"] = "Cet enregistrement a <RelatedRecords> enregistrement(s) associ&eacute;(s) dans la table '<TableName>'. D&eacute;sirez-vous effacer cet enregistrement quand m&ecirc;me? <Effacer> &nbsp; <Annuler>";
	$Translation["yes"] = "Oui";
	$Translation["no"] = "Non";
    
	$Translation["pkfield empty"] = " est une cl&eacute; unique et ne peut &ecirc;tre vide.";
	$Translation["upload image"] = "T&eacute;l&eacute;charger un nouveau fichier ";
	$Translation["select image"] = "S&eacute;lectionnez une image ";
	$Translation["remove image"] = "Retirer le fichier";
	$Translation["month names"] = "Janvier,F&eacute;vrier,Mars,Avril,Mai,Juin,Juillet,Ao&ucirc;t,Septembre,Octobre,Novembre,D&eacute;cembre";
	$Translation["field not null"] = "Vous ne pouvez laisser ce champ vide.";
	$Translation["*"] = "*";
	$Translation['today'] = "Aujourd'hui";
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Tenir enfonc&eacute; la cl&eacute; CTRL pour s&eacute;lectionner plusieurs items dans la liste ci-dessus.';
	$Translation['Save New'] = 'Sauvegarder';
	$Translation['Save As Copy'] = "Cr&eacute;er une COPIE";
	$Translation['Deselect'] = 'Canceller';
	$Translation['Add New'] = 'Ajouter';
	$Translation['Delete'] = 'Effacer';
	$Translation['Cancel'] = 'Canceller';
	$Translation['Print Preview'] = "Aper&ccedil;u d'impression";
	$Translation['Save Changes'] = 'Sauvegarder';
	$Translation['CSV'] = 'Sauvegarder en format CSV';
	$Translation['Reset Filters'] = 'Afficher Tout';
	$Translation['Find It'] = 'Lancer la Recherche';
	$Translation['Previous'] = 'Pr&eacute;c&eacute;dent';
	$Translation['Next'] = 'Prochain';
	$Translation['Back'] = 'Retour';
	
	
	// lib.php
	$Translation["select a table"] = "Aller &agrave; ...";
	$Translation["homepage"] = "Page principale";
	$Translation["error:"] = "Erreur:";
	$Translation["sql error:"] = "Erreur SQL:";
	$Translation["query:"] = "Recherche:";
	$Translation["< back"] = "&lt; Retour";
	$Translation["if you haven't set up"] = "Si vous n'avez pas encore configur&eacute; la base de donn&eacute;es, vous pouvez le faire en cliquant <a href='setup.php'>ici</a>.";
	$Translation['file too large']="Erreur: Le fichier t&eacute;l&eacute;charg&eacute; exc&egrave;de la limite maximale permise de <MaxSize> KB";
	$Translation['invalid file type']="Erreur: Ce type de fichier n'est pas permis. Seulement les types <FileTypes> peuvent &ecirc;tre t&eacute;l&eacute;charg&eacute;s";
	
	// setup.php
	$Translation["goto start page"] = "Retour &agrave; la page principale";
	$Translation["no db connection"] = "Impossible d'&eacute;tablir une connexion avec la base de donn&eacute;es.";
	$Translation["no db name"] = "Impossible d'acc&eacute;der &agrave; la base de donn&eacute;es '<DBName>' sur ce serveur.";
	$Translation["provide connection data"] = "SVP fournir les informations suivantes pour &eacute;tablr la connexion avec la base de donn&eacute;es:";
	$Translation["mysql server"] = "Serveur MySQL (h&ocirc; te)";
	$Translation["mysql username"] = "ID utilisateur MySQL";
	$Translation["mysql password"] = "Mot de passe MySQL";
	$Translation["mysql db"] = "Nom de la base de donn&eacute;es";
	$Translation["connect"] = "Connexion";
	$Translation["couldnt save config"] = "Impossible de sauvegarder les informations de la connection dans 'config.php'.<br>SVP assurez-vous que le dossier:<br>'".dirname(__FILE__)."'<br>est accessible en &eacute;criture (chmod 775 or chmod 777).";
	$Translation["setup performed"] = "Configuration d&eacute;j&agrave; effectu&eacute;e sur";
	$Translation["delete md5"] = "Si vous d&eacute;sirez forcer la configuration de nouveau, vous devez pr&eacute;alablement effacer le fichier 'setup.md5' dans le r&eacute;pertoire.";
	$Translation["table exists"] = "La table <b><TableName></b> existe et contient  <NumRecords> enregistrements.";
	$Translation["failed"] = "&eacute;chec";
	$Translation["ok"] = "Ok";
	$Translation["mysql said"] = "Message MySQL:";
	$Translation["table uptodate"] = "La Table est &agrave; jour.";
	$Translation["couldnt count"] = "Impossible de compter les enregistrements de la table <b><TableName></b>";
	$Translation["creating table"] = "Cr&eacute;ation de la table <b><TableName></b> ... ";
	
	// separateDVTV.php
	$Translation['please wait'] = "Un moment SVP";

	// _view.php
	$Translation['tableAccessDenied']="D&eacute;sol&eacute;! Vous n'avez pas les droits d'acc&eacute;der &agrave; cette table. SVP contacter votre administrateur.";

	// incCommon.php
	$Translation['not signed in']="Aucune session n'est en cours";
	$Translation['sign in']="Ouvrir une session";
	$Translation['signed as']="Session ouverte avec l'usager";
	$Translation['sign out']="Fermer la session";
	$Translation['admin setup needed']="L'activation de l'administrateur n'a pas &eacute;t&eacute; effectu&eacute;e. SVP acc&eacute;der &agrave; la page <a href=admin/>Activation</a> pour effectuer l'activation.";
	$Translation['db setup needed']="L'initialisation de l'application n'a pas encore &eacute;t&eacute; effectu&eacute;e. SVP acc&eacute;der &agrave; la page <a href=setup.php>Initialisation</a> premi&egrave;rement.";
	$Translation['new record saved']="Le nouvel enregistrement a &eacute;t&eacute; sauvegard&eacute; avec succ&egrave;s.";
	$Translation['record updated']="Les changements ont &eacute;t&eacute; enregistr&eacute;s avec succ&egrave;s.";
	
	// index.php
	$Translation['admin area']="Zone de l'administrateur";
	$Translation['login failed']="Votre derni&egrave;re ouverture de session a &eacute;chou&eacute;. Recommencez.";
	$Translation['sign in here']="Ouvrir une session";
	$Translation['remember me']="Se Rappeler de moi";
	$Translation['username']="ID utilisateur";
	$Translation['password']="Mot de passe";
	$Translation['go to signup']="Vous n'avez pas d'ID utilisateur? <br>&nbsp; <a href=membership_signup.php>Obtention d'un ID utilisateur</a>";
	$Translation['forgot password']="Mot de passe oubli&eacute;? <a href=membership_passwordReset.php>Cliquez ici</a>";
	$Translation['browse as guest']="Ou <a href=index.php>cliquez ici</a> pour continuer <br>&nbsp; la session &agrave; titre d'invit&eacute;.";
	$Translation['no table access']="Vous n'avez pas les droits n&eacute;cessaires pour acc&eacute;der &agrave; ces pages. SVP ouvrir une session.";
	$Translation['signup']="Cr&eacute;er un compte d'utilisateur";
	
	// checkMemberID.php
	$Translation['user already exists']="ID utilisateur '<MemberID>' d&eacute;j&agrave; existant. Essayez un autre ID utilisateur.";
	$Translation['user available']="ID utilisateur '<MemberID>' est disponible et vous pouvez l'utiliser.";
	$Translation['empty user']="SVP saisir l'ID utilisateur dans la fen&ecirc;tre et cliquez 'V&eacute;rifier la disponibilt&eacute;'.";

	// membership_thankyou.php
	$Translation['thanks']="Inscription compl&eacute;t&eacute;e. Merci.";
	$Translation['sign in no approval']="Si vous avez choisi un groupe qui ne requiert pas d'autorisation de l'administrateur, vous pouvez ouvrir une session maintenant <a href=index.php?signIn=1>ici</a>.";
	$Translation['sign in wait approval']="Si vous avez un groupe qui requiert l'autorisation de l'administrateur, SVP attendre un courriel confirmant votre inscription.";

	// membership_signup.php
	$Translation['username empty']="Vous devez saisir un ID utilisateur. SVP retournez et entrez un ID utilisateur";
	$Translation['password invalid']="Vous devez entrer un mot de passe de 4 caract&egrave;res ou plus, sans espace. SVP retournez et entrez un mot de passe valide";
	$Translation['password no match']="Le mot de passe ne correspond pas. SVP retournez et corrigez le mot de passe";
	$Translation['username exists']="ID utilisateur d&eacute;j&agrave; existant. SVP retournez et choisissez un ID utilisateur diff&eacute;rent.";
	$Translation['email invalid']="Adresse de courriel invalide. SVP retournez et entrez une adresse de courriel valide.";
	$Translation['group invalid']="Groupe invalide. SVP retournez et s&eacute;lectionnez un groupe valide.";
	$Translation['sign up here']="Cr&eacute;er un nouveau compte ici!";
	$Translation['registered? sign in']="Vous poss&eacute;dez d&eacute;j&agrave; un compte? <a href=index.php?signIn=1>Ouvrez une session ici</a>.";
	$Translation['sign up disabled']="D&eacute;sol&eacute;! Votre compte a &eacute;t&eacute; temporairement suspendu par l'administrateur. R&eacute;-essayez plus tard.";
	$Translation['check availability']="V&eacute;rifier si cet ID utilisateur est disponible";
	$Translation['confirm password']="Confirmez le mot de passe";
	$Translation['email']="Adresse de courriel";
	$Translation['group']="Groupe";
	$Translation['groups *']="Si vous choisissez de vous enregistrer sous un groupe marqu&eacute; d'un asterisque (*), vous ne pourrez pas ouvrir de session avant d'avoir obtenu l'approbation de l'administrateur. Vous recevrez un courriel lorsque votre inscription est approuv&eacute;e.";
	$Translation['sign up']="Cr&eacute;er un nouveau compte";
	
	// membership_passwordReset.php
	$Translation['password reset']="Page de r&eacute;initialisation du mot de passe";
	$Translation['password reset details']="Entrez votre ID utilisateur ET votre adresse de courriel ci-dessous. Un lien sp&eacute;cial sera transmis &agrave; votre adresse de courriel. Cliquez sur le lien pour acc&eacute;der &agrave; la page de modification de votre mot de passe.";
	$Translation['password reset subject']="Instruction pour la r&eacute;initialisation d'un mot de passe";
	$Translation['password reset message']="Cher membre, \n Si vous avez fait une demande pour modifier/r&eacute;initialiser votre mot de passe, SVP cliquer sur ce lien: \n <ResetLink> \n\n Si vous n'avez pas fait de demande pour changer/r&eacute;initialiser votre mot de passe, SVP ignorer ce message. \n\n Cordialement.";
	$Translation['password reset ready']="Un courriel avec les instructions pour r&eacute;initialiser votre mot de passe a &eacute;t&eacute; transmis &agrave; votre adresse de courriel. SVP laisser cette fen&ecirc;tre ouverte dans votre navigateur et suivre les instruction transmises dans le courriel.<br><br>Si vous ne recevez pas ce courriel dans les 5 prochaines minutes, r&eacute;essayez de nouveau la proc&eacute;dure de r&eacute;initialisation en vous assurant d'entrer le bon ID utilisateur ou adresse de courriel.";
	$Translation['password reset invalid']="Entr&eacute;e invalide. <a href=membership_passwordReset.php>Essayez de nouveau</a>, ou allez <a href=index.php>Retour &agrave; la page principale</a>.";
	$Translation['password change']="Page de changement de Mot de Passe";
	$Translation['new password']="Nouveau mot de passe";
	$Translation['password reset done']="Votre mot de passe a &eacute;t&eacute; chang&eacute; avec succ&egrave;s. Vous pouvez <a href=index.php?signOut=1>ouvrir une session avec votre nouveau mot de passe ici</a>.";

    $Translation['Loading ...']='Chargement en cours ...';
    $Translation['No records found']='Aucun enregistrement trouv&eacute;';
    $Translation['You can add children records after saving the main record first']="L'enregistrement P&egrave;re doit &ecirc;tre sauvegarder avant de lui assigner des enfants";

    $Translation['ascending'] = 'Ascendant';
    $Translation['descending'] = 'Descendant';
    $Translation['then by'] = 'Ensuite par';

	// membership_profile
	$Translation['Legend'] = 'L&eacute;gende';
	$Translation['Table'] = 'Liste';
	$Translation['Edit'] = 'Editer';
	$Translation['View'] = 'Visualiser';
	$Translation['Only your own records'] = 'Seulement les enregistrements dont vous &ecirc;tes le propri&eacute;taire';
	$Translation['All records owned by your group'] = 'Tous les enregistrements de votre groupe';
	$Translation['All records'] = 'Tous les enregistrements';
	$Translation['Not allowed'] = 'Non Permis';
	$Translation['Your info'] = 'Vos donn&eacute;es';
	$Translation['Hello user'] = 'Bonjour %s!';
	$Translation['Your access permissions'] = "Vos privil&egrave;ges d'acc&egrave;s";
	$Translation['Update profile'] = 'Mise &agrave; jour du profil';
	$Translation['Update password'] = 'Changement du mot de passe';
	$Translation['Change your password'] = 'Changez votre mot de passe';
	$Translation['Old password'] = 'Ancien mot de passe';
	$Translation['Password strength: weak'] = 'Robustesse du mot de passe: faible';
	$Translation['Password strength: good'] = 'Robustesse du mot de passe: bon';
	$Translation['Password strength: strong'] = 'Robustesse du mot de passe: tr&egrave;s bon';
	$Translation['Wrong password'] = 'Mot de passe invalide';
	$Translation['Your profile was updated successfully'] = 'Votre profil a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
	$Translation['Your password was changed successfully'] = 'Votre mot de passe a &eacute;t&eacute; chang&eacute; avec succ&egrave;s';
	$Translation['Your IP address'] = 'Votre adresse IP';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Nb enregistrements &agrave; afficher';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Maintenance des donn&eacute;es';
	$Translation['Database Information'] = 'Information de la base de donn&eacute;es';
	$Translation['Admin Information'] = "Information de l'Admin";
	$Translation['setup intro 1'] = "Il ne semble pas y avoir de fichier de configuration.  Ce fichier est requis pour le fonctionnement de l'application.<br><br>Cette page de configuration vous aidera &agrave; cr&eacute;er ce fichier. Cependant, cela peut ne pas fonctionner avec certaines configurations de serveur. Dans ce cas, vous aurez &agrave; ajuster les droits d'acc&egrave;s au r&eacute;pertoire, ou &agrave; cr&eacute;er le fichier manuellement.";
	$Translation['setup intro 2'] = "Bienvenu dans votre nouvel application AppGini! Avant de d&eacute;buter, certaines informations sur la base de donn&eacute;es sont requises. Vous avez besoin des informations suivantes pour poursuivre:<ol><li>Serveur de Base de Donn&eacute;es (host)</li><li>Nom de la Base de donn&eacute;es</li><li>Nom utilisateur de la Base de donn&eacute;es</li><li>Mot de passe de la Base de donn&eacute;es</li></ol>L'information pr&eacute;c&eacute;dente vous a probablement &eacute;t&eacute; fournie par votre h&eacute;bergeur Web. Si vous ne poss&eacute;dez pas ces informations, alors vous devez contacter votre H&eacute;bergeur Web ou vous r&eacute;f&eacute;rer &agrave; la documentation disponible avant de continuer. Si vous &ecirc;tes pr&ecirc;ts, d&eacute;butons!";
	$Translation['setup finished'] = "<b>C'est r&eacute;ussi!</b><br><br>Votre application AppGini a &eacute;t&eacute; install&eacute;e. Voici quelques suggestions pour commencer &agrave; l'utiliser:";
	$Translation['setup next 1'] = "Commencer &agrave; utiliser votre application pour ajouter des donn&eacute;es, ou utiliser vos donn&eacute;es existantes, s'il y a lieu.";
	$Translation['setup next 2'] = "Importer des donn&eacute;es existantes dans votre application &agrave; partir d'un fichier CSV.";
	$Translation['setup next 3'] = "Allez &agrave; la page d'administration o� vous pouvez modifier d'autres options de param&eacute;trage.";
	$Translation['db_name help'] = 'Le nom de la Base de donn&eacute;es dans laquelle vous d&eacute;sirez ex&eacute;cuter votre application AppGini.';
	
	$Translation['db_server help'] = "<i>localhost</i> fonctionne avec la majorit&eacute; des serveurs. Sinon, vous devriez obtenir cette information de votre h&eacute;bergeur Web.";
	$Translation['db_username help'] = "Votre nom d'usager MySQL";
	$Translation['db_password help'] = 'Votre mot de passe MySQL';
	$Translation['username help'] = "Indiquer le nom d'utilisateur Admin &agrave; utiliser pour acc&eacute;der &agrave; la zone Administrateur. Doit &ecirc;tre quatre (4) caract&egrave;res ou plus.";
	$Translation['password help'] = "Assurez-vous d'utiliser un mot de passe robuste pour prot&eacute;ger l'acc&egrave;s au menu de l'administrateur.";
	$Translation['email help'] = "Entrez l'adresse courriel &agrave; utiliser pour transmettre les notifications &agrave; l'administrateur.";
	$Translation['Continue'] = 'Continuer ...';
	$Translation['Lets go'] = 'On y va!';
	$Translation['Submit'] = 'Soumettre';
	$Translation['Hide'] = "Cachez l'aide";
	$Translation['Database info is correct'] = '&#10003; Database info is correct!';
	$Translation['Database connection error'] = '&#10007; Database connection error!';
	$Translation['The following errors occured'] = 'Les erreurs suivantes sont survenues';
	$Translation['failed to create config instructions'] = "Cela est probablement caus&eacute; par les droits sur le r&eacute;pertoire qui ne permettent pas au Web serveur de cr&eacute;er des fichiers. Pas d'inqui&eacute;tude! Vous pouvez cr&eacute;er le fichier de configuration manuellement.<br><br>Simplement coller les lignes de code suivantes dans un &eacute;diteur de texte et sauvegarder le tout dans 'config.php', ensuite t&eacute;l&eacute;charger le fichier avec FTP ou un autre moyen dans le r&eacute;pertoire %s sur votre serveur.";
	$Translation['Only show records having filterer'] = 'Afficher seulement les enregistrements o� %s est %s';
	
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'Vous ne poss&eacute;dez pas les privil&egrave;ges n&eacute;cessaires pour effacer cet enregistrement';
	$Translation['Couldn\'t delete this record'] = "L'enregistement n'a pas &eacute;t&eacute; effac&eacute;";
	$Translation['The record has been deleted successfully'] = "L'enregistrement a &eacute;t&eacute; effac&eacute; avec succ&egrave;s";
	$Translation['Couldn\'t save changes to the record'] = "Les changements n'ont pas &eacute;t&eacute; enregistr&eacute;s";
	$Translation['Couldn\'t save the new record'] = "Le nouvel enregistrement n'a pas &eacute;t&eacute; cr&eacute;&eacute;";
	
/* Added in AppGini 5.30 */
	$Translation['More'] = 'Plus';
	$Translation['Confirm deleting multiple records'] = "Confirmer l'effacement de plusieurs enregistrements";
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = "<n> enregistrements seront effac&eacute;s. Voulez-vous vraiment proc&eacute;der?";
	$Translation['Yes, delete them!'] = 'Oui, on efface les enregistrements!';
	$Translation['No, keep them.'] = 'Non, on les conserve.';
	$Translation['Deleting record <i> of <n>'] = "Effacement de l'enregistrement <i> de <n>";
	$Translation['Delete progress'] = 'Effacement en cours';
	$Translation['Show/hide details'] = 'Afficher/Masquer les d&eacute;tails';
	$Translation['Connection error'] = 'Erreur de connection';
	$Translation['Add more actions'] = "Ajouter plus d'actions";
	$Translation['Update progress'] = 'Mise &agrave; jour en cours';
	$Translation['Change owner'] = 'Changer le propri&eacute;taire';
	$Translation['Updating record <i> of <n>'] = "Mise &agrave; jour de l'enregistrement <i> de <n>";
	$Translation['Change owner of <n> selected records to'] = 'Changer le propri&eacute;taire des <n> enregistrements s&eacute;lectionn&eacute;s pour ';

/* Added in AppGini 5.40 */
	$Translation['username invalid'] = "ID utilisateur <MemberID> existe d&eacute;j&agrave; ou est invalide. Assurez-vous d'entrer un ID contenant 4 � 20 caract&eacute;res valides.";
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Source Invalide!';
	$Translation['invalid url'] = 'URL Invalide!';
	$Translation['cant retrieve coordinates from url'] = "Incapable d'obtenir les coordonn&eacute;es &agrave; partir de l'URL!";
	
?>
