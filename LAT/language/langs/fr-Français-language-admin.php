<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([]) or <>
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================

	// incHeader.php
	$Translation['membership management'] = "Gestion des Membres";
	$Translation['password mismatch'] = "Le mot de passe ne correspond pas.";
	$Translation['error'] = "Erreur";
	$Translation['invalid email'] = "Adresse Email non valide";
	$Translation['sending mails'] = "L&apos;envoi de courrier peut prendre un certain temps. Ne fermez pas cette page avant que le message 'Termin&eacute;' ne s&apos;affiche.";
	$Translation['complete step 4'] = "Veuillez terminer l&apos;&eacute;tape 4 en s&eacute;lectionnant le membre auquel vous souhaitez transf&eacute;rer les dossiers.";
	$Translation['info'] = "Info";
	$Translation['sure move member'] = 'Voulez-vous vraiment d&eacute;placer le membre  \'<MEMBER>\' et ses donn&eacute;es, du groupe \'<OLDGROUP>\' vers le groupe \'<NEWGROUP>\'?';
	$Translation['sure move data of member'] = 'Voulez-vous vraiment d&eacute;placer les donn&eacute;es du membre \'<OLDMEMBER>\' du groupe \'<OLDGROUP>\' vers le membre \'<NEWMEMBER>\' du groupe \'<NEWGROUP>\'? ';
	$Translation['sure move all members'] = 'Voulez-vous vraiment d&eacute;placer tous les membres et toutes les donn&eacute;es du groupe \'<OLDGROUP>\' vers le groupe \'<NEWGROUP>\'? ';
	$Translation['sure move data of all members'] = 'Voulez-vous vraiment d&eacute;placer les donn&eacute;es de tous les membres du groupe \'<OLDGROUP>\' vers le membre \'<MEMBRE>\' du groupe \'<NEWGROUP>\'? ';
	$Translation['toggle navigation'] = "Basculer la navigation";
	$Translation['admin area'] = "Zone Admin";
	$Translation['groups'] = "Groups";
	$Translation['view groups'] = "Voir les groupes";
	$Translation['add group'] = "Ajouter un groupe";
	$Translation['edit anonymous permissions'] = "Modifier les autorisations anonymes";
	$Translation['members'] = "Membres";
	$Translation['view members'] = "Voir les membres";
	$Translation['add member'] = "Ajouter un membre";
	$Translation["view members' records"] = "Voir les dossiers des membres";  
	$Translation["utilities"] = "Utilitaires"; 
	$Translation["admin settings"] = "Paramètres administrateur"; 
	$Translation["rebuild thumbnails"] = "Reconstruire les vignettes"; 
	$Translation['rebuild fields'] = "Reconstruire les champs";
	$Translation['import CSV'] = "Importer des donn&eacute;es CSV";
	$Translation['batch transfer'] = "Assistant de transfert par lots";
	$Translation['mail all users'] = "Envoyer un mail &agrave; tous les utilisateurs";
	$Translation['AppGini forum'] = "Forum communautaire AppGini";
	$Translation["user's area"] = 'Zone Utilisateur';
	$Translation["sign out"] = "D&eacute;connexion";
	$Translation["attention"] = "Attention!";
	$Translation['security risk admin'] = 'Vous utilisez le nom d&apos;utilisateur et le mot de passe par d&eacute;faut de l&apos;administrateur. C&apos;est un risque de s&eacute;curit&eacute; &eacute;norme. Modifiez au moins le mot de passe de l&apos;administrateur &agrave; partir de la page <a href="pageSettings.php"> Paramètres administrateur </a> <em> imm&eacute;diatement </ em>.';
	$Translation['security risk'] = 'Vous utilisez le mot de passe administrateur par d&eacute;faut. C&apos;est un risque de s&eacute;curit&eacute; &eacute;norme. Veuillez modifier le mot de passe administrateur &agrave; partir de la page <a href="pageSettings.php"> Paramètres administrateur </a> <em> imm&eacute;diatement </ em>.' ;
	$Translation['plugins'] = 'Plugins';

	//pageAssignOwners.php
	$Translation["assigned table records to group"] = "Enregistrements <NUMBER> de la table '<TABLE>' affect&eacute;s au groupe '<GROUP>'";
	$Translation["assigned table records to group and member"] = "Enregistrements <NUMBER> de la table '<TABLE>' affect&eacute;s au groupe '<GROUP>', membre '<MEMBERID>'";
	$Translation['data ownership assign'] = "Attribuer la propri&eacute;t&eacute; &agrave; des donn&eacute;es sans propri&eacute;taires";
	$Translation['records ownership done'] = "Tous les enregistrements de toutes les tables ont maintenant un propri&eacute;taire. <br> Retour &agrave; la <a href='pageHome.php'> page d'accueil de l&apos;administrateur </a>.";
	$Translation['select group'] = "S&eacute;lectionner un groupe";
	$Translation['data ownership'] = "Parfois, vous pouvez avoir des tables avec des donn&eacute;es entr&eacute;es avant la mise en œuvre de ce système de gestion d'appartenance AppGini ou &agrave; l&apos;aide d'autres applications ne connaissant pas le système de propri&eacute;t&eacute; AppGini. Ces donn&eacute;es n'ont actuellement aucun propri&eacute;taire. Cette page vous permet d'affecter des groupes de propri&eacute;taires et des membres de propri&eacute;taires &agrave; ces donn&eacute;es.";
	$Translation["table"] = "Table";
	$Translation["records with no owners"] = "Donn&eacute;es sans propri&eacute;taires";
	$Translation["new owner group"] = "Nouveau groupe de propri&eacute;taires";
	$Translation["new owner member"] = "Nouveau membre propri&eacute;taire*";	
	$Translation["cancel"] = "Annuler";
	$Translation["assign new owners"] = "Attribuer de nouveaux propri&eacute;taires";
	$Translation["please wait"] = "Veuillez Patienter ...";	
	$Translation["if no owner member assigned"] = '* Si vous n&apos;affectez aucun membre propri&eacute;taire &agrave; cet emplacement, vous pouvez toujours utiliser ult&eacute;rieurement l’ <a href="pageTransferOwnership.php"> Assistant de transfert par lots </a> pour le faire.';
	
	//pageDeleteGroup.php
	$Translation["can not delete group remove members"] = 'Impossible de supprimer ce groupe. Veuillez supprimer les membres en premier.';
	$Translation["can not delete group transfer records"] = 'Impossible de supprimer ce groupe. Veuillez transf&eacute;rer ses enregistrements de donn&eacute;es &agrave; un autre groupe d&apos;abord ..';
	
	//pageEditGroup.php
	$Translation["group exists error"] = "Erreur: le nom du groupe existe d&eacute;j&agrave;. Vous devez choisir un nom de groupe unique.";
	$Translation["group not found error"] = "Erreur: Groupe non trouv&eacute;!";								 	
	$Translation["edit group"] = "Modifier le groupe '<GROUPNAME>'";
	$Translation["add new group"] = "Ajouter un nouveau groupe";
	$Translation["anonymous group attention"] = "Attention! C&apos;est le groupe anonyme.";
	$Translation["show tool tips"] = "Afficher les info-bulles lorsque la souris passe au-dessus des options";
	$Translation["group name"] = "Nom du groupe";
	$Translation["readonly group name"] = "Le nom du groupe anonyme est en lecture seule ici.";
	$Translation["anonymous group name"] = "Si vous nommez le groupe '<ANONYMOUSGROUP>', il sera consid&eacute;r&eacute; comme le groupe anonyme qui d&eacute;finit les autorisations des visiteurs invit&eacute;s qui ne se connectent pas au système.";
	$Translation["description"] = "Description";
	$Translation["allow visitors sign up"] = 'Autoriser les visiteurs &agrave; s&apos;inscrire?';
	$Translation["admin add users"] = "Non, seul l&apos;administrateur peut ajouter des utilisateurs.";
	$Translation["admin approve users"] = "Oui, et l&apos;administrateur doit les approuver.";
	$Translation["automatically approve users"] = "Oui, et les approuve automatiquement.";
	$Translation["group table permissions"] = "Autorisations de table pour ce groupe";
	$Translation["no"] = "Non";
	$Translation["owner"] = "Propri&eacute;taire";
	$Translation["group"] = "Groupe";
	$Translation["all"] = "Tous";
	$Translation["insert"] = "Ins&eacute;rer";
	$Translation["view"] = "Voir";
	$Translation["edit"] = "Modifier";
	$Translation["delete"] = "Effacer";
	$Translation["save changes"] = "Sauvegarder les modifications";
	
	//pageEditMember.php
	$Translation["username error"] = "Erreur: le nom d'utilisateur existe d&eacute;j&agrave; ou n&apos;est pas valide. Assurez-vous de fournir un nom d'utilisateur contenant 4 &agrave; 20 caractères valides..";
	$Translation["member not found"] = "Erreur: membre non trouv&eacute;!";
	$Translation["user has special permissions"] = "Cet utilisateur dispose d'autorisations sp&eacute;ciales qui remplacent ses autorisations de groupe.";
	$Translation["user has group permissions"] = 'Cet utilisateur poss&egrave;de des <a href="pageEditGroup.php?groupID=<GROUPID> "> autorisations de son groupe </a>.';
	$Translation["set user special permissions"] = 'D&eacute;finir des autorisations sp&eacute;ciales pour cet utilisateur';
	$Translation["sure continue"] = "Si vous avez apport&eacute; des modifications à ce membre et que vous ne les avez pas encore enregistr&eacute;es, elles seront perdues si vous continuez. Etes-vous sur de vouloir continuer?";
	$Translation["edit member"] = "Editer un Membre <MEMBERID>" ;
	$Translation["add new member"] = "Ajouter un Nouveau Membre";
	$Translation["anonymous guest member"] = "Attention! C&apos;est le membre anonyme (Visiteur).";
	$Translation["admin member"] = 'Attention! Ceci est le membre admin. Vous ne pouvez pas modifier le nom d&apos;utilisateur, le mot de passe ou l&apos;adresse de messagerie de ce membre ici, mais vous pouvez le faire dans la page <a href="pageSettings.php"> Param&egrave;tres administrateur </a>.';
	$Translation["member username"] = "Nom d&apos;utilisateur du membre";
	$Translation["check availability"] = "Voir les disponibilit&eacute;s";
	$Translation["read only username"] = "Le nom d&apos;utilisateur du membre invit&eacute; est en lecture seule.";
	$Translation["password"] = "Mot de passe";
	$Translation["change password"] = "Tapez un mot de passe uniquement si vous souhaitez modifier le mot de passe de ce membre. Sinon, laissez ce champ vide.";
	$Translation["confirm password"] = "Confirmez le mot de passe";
	$Translation["email"] = "Email";
	$Translation["approved"] = "Approuv&eacute;?";
	$Translation["banned"] = "Banni?";
	$Translation["comments"] = "Commentaires";
	$Translation["back to members"] = "Retour aux membres";
	$Translation["member added"] = "Membre <USERNAME> ajout&eacute; avec succ&egrave;s";
	
	//pageEditMemberPermissions.php
	$Translation["member permissions saved"] = "Les autorisations des membres ont &eacute;t&eacute; enregistr&eacute;es avec succ&egrave;s.";
	$Translation["member permissions reset"] = "Les autorisations des membres ont &eacute;t&eacute; r&eacute;initialis&eacute;es sur la même base que son groupe.";
	$Translation["user table permissions"] = "Autorisations de la table pour l&apos;utilisateur <a href='pageEditMember.php?memberID=<MEMBER> 'title =' Afficher les d&eacute;tails du membre '> <MEMBERID> </a> du groupe <a href='pageEditGroup.php?groupID=<GROUPID> 'title =' Afficher les d&eacute;tails et les autorisations du groupe '> <GROUP> </a> ";
	$Translation["no member permissions"] = 'Ce membre n&apos;a actuellement aucune autorisation sp&eacute;ciale. Cette liste montre les permissions de son groupe.';
	$Translation["reset member permissions"] = "R&eacute;initialiser les autorisations des membres";
	$Translation["remove special permissions"] = 'Cela supprimerait toutes les autorisations sp&eacute;ciales de cet utilisateur et il disposerait des m&ecirc;mes autorisations que son groupe. &Ecirc;tes-vous s&ucirc;r de vouloir faire ça?';
	
	//pageEditOwnership.php
	$Translation["invalid table"] = "Table non valide.";
	$Translation["invalid primary key"] = "Valeur de cl&eacute; primaire non valide";
	$Translation["record not found"] = "Enregistrement introuvable. S'il a &eacute;t&eacute; import&eacute; de l&apos;ext&eacute;rieur, essayez d'affecter un propri&eacute;taire &agrave; partir de la zone d'administration.";
	$Translation["invalid username"] = "Nom d'utilisateur non valide";
	$Translation["record not found error"] = "Erreur: enregistrement non trouv&eacute;!";
	$Translation["edit Record Ownership"] = "Modifier la propri&eacute;t&eacute; de l&apos;enregistrement";
	$Translation["owner group"] = "Groupe de propri&eacute;taires";
	$Translation["view all records by group"] = "Voir tous les enregistrements de ce groupe";
	$Translation["owner member"] = "Membre propri&eacute;taire";
	$Translation["view all records by member"] = "Voir tous les enregistrements de ce membre";
	$Translation["switch record ownership"] = "Si vous souhaitez transf&eacute;rer la propri&eacute;t&eacute; de cet enregistrement &agrave; un membre d'un autre groupe, vous devez d'abord modifier le groupe de propri&eacute;taires et enregistrer les modifications.";
	$Translation["record created on"] = "Enregistrement cr&eacute;&eacute; le";
	$Translation["record modified on"] = "Enregistrement modifi&eacute; le";
	$Translation["view all records of table"] = "Voir tous les enregistrements de cette table";
	$Translation["record data"] = "Enregistrer des donn&eacute;es";
	$Translation["print"] = "Imprimer";
	$Translation["could not retrieve field list"] = "Impossible de r&eacute;cup&eacute;rer la liste des champs de'<TABLENAME>'";
	$Translation["field name"] = "Nom du champ";
	$Translation["value"] = "Valeur";
	
	//pageHome.php
	$Translation["visitor sign up"] = '<a href="../membership_signup.php" target="_blank"> L&apos;inscription des visiteurs </a> est d&eacute;sactiv&eacute;e, car il n&apos;existe aucun groupe où ils peuvent s&apos;inscrire. Pour activer l&apos;inscription des visiteurs, d&eacute;finissez au moins un groupe pour autoriser leur inscription..';
	$Translation["table data without owner"] = 'Vous avez des donn&eacute;es dans une ou plusieurs tables qui n&apos;ont pas de propri&eacute;taire. Pour affecter un groupe de propri&eacute;taires pour ces donn&eacute;es, <a href="pageAssignOwners.php"> cliquez ici </a>.';
	$Translation["membership management homepage"] = "Page d'accueil de gestion des membres";
	$Translation["newest updates"] = "Dernières mises &agrave; jour";
	$Translation["view record details"] = "Voir les d&eacute;tails de l&apos;enregistrement";
	$Translation["newest entries"] = "Entr&eacute;es les plus r&eacute;centes";
	$Translation["available add-ons"] = "Add-ons disponibles";
	$Translation["more info"] = "Informations suppl&eacute;mentaires";
	$Translation["close"] = "Fermer";
	$Translation["view add-ons"] = "Voir tous les add-ons";
	$Translation["top members"] = "Top Membres";
	$Translation["edit member details"] = "Modifier les d&eacute;tails du membre";
	$Translation["view member records"] = "Voir les donn&eacute;es du membre";
	$Translation["records"] = "enregistrements";
	$Translation["members stats"] = "Statistiques des membres";
	$Translation["total groups"] = "Total groupes";
	$Translation["active members"] = "Membres Actifs";
	$Translation["view active members"] = "Voir Membres Actifs";
	$Translation["members awaiting approval"] = "Membres en attente d&apos;approbation";
	$Translation["view members awaiting approval"] = "Voir les Membres en attente d&apos;approbation";
	$Translation["banned members"] = "Membres Bannis";
	$Translation["view banned members"] = "Voir les Membres Bannis";
	$Translation["total members"] = "Total des Membres";
	$Translation["view all members"] = "Voir tous les Membres";
	$Translation["BigProf tweets"]  = "Tweets By BigProf Software";
	$Translation["follow BigProf"] = "Follow @bigprof";
	$Translation["loading bigprof feed"] = "Loading @bigprof feed ...";
	$Translation["remove feed"] = "Supprimer ce flux";
	
	//pageMail.php
	$Translation["can not send mail"] = "Vous ne pouvez pas envoyer d&apos;emails actuellement. L&apos;adresse e-mail de l&apos;exp&eacute;diteur configur&eacute;e n&apos;est pas valide. Veuillez <a href='pageSettings.php'> le corriger en premier </a> puis r&eacute;essayer..";
	$Translation["all groups"] = "Tous les groupes";
	$Translation["no recipient"] = "Impossible de trouver le destinataire. Assurez-vous de fournir un destinataire valide.";
	$Translation["invalid subject line"] = "Ligne d'objet invalide.";
	$Translation["no recipient found"] = "Impossible de trouver le destinataire. Assurez-vous de fournir un destinataire valide.";
	$Translation["mail queue not saved"] = "Impossible de sauvegarder la file d'attente des messages. Assurez-vous que le r&eacute;pertoire '<CURRDIR>' est accessible en &eacute;criture (chmod 755 ou chmod 777).";
	$Translation["send mail"]  = "Envoyer un  mail &agrave; un membre / groupe";
	$Translation["send mail to all members"] = "Vous envoyez un email &agrave; tous les membres. Cela pourrait prendre beaucoup de temps et affecter les performances de votre serveur. Si vous avez un grand nombre de membres, nous vous recommandons de ne pas les envoyer &agrave; tous simultan&eacute;ment.";
	$Translation["from"] = "De";
	$Translation["change setting"] = "Changer ce r&eacute;glage";
	$Translation["to"] = "&Aacute;";
	$Translation["subject"] = "Objet";
	$Translation["message"] = "Message";
	$Translation["send message"] = "Envoyer le message";
	
	//pagePrintRecord.php
	$Translation["record details"] = "Gestion des membres - D&eacute;tails de l&apos;enregistrement";
	$Translation['table name'] = "Table: <TABLENAME>";
	
	//pageRebuildFields.php
	$Translation['create or update table'] = "Une tentative <ACTION> du champ <i> <FIELD> </i> dans la table <i> <TABLE> </i> a &eacute;t&eacute; effectu&eacute;e en ex&eacute;cutant la requête suivante: <pre> <QUERY> </ pre> d&eacute;tail ci-dessous.";

	$Translation['view or rebuild fields'] = "Afficher / Reconstruire les champs";
	$Translation['show deviations only'] = "Afficher uniquement les &eacute;carts";
	$Translation['show all fields'] = "Afficher tous les champs";
	$Translation['compare tables page'] = "Cette page compare la structure / sch&eacute;ma des tables et des champs, telle que conçue dans AppGini, &agrave; la structure r&eacute;elle de la base de donn&eacute;es et vous permet de corriger tout &eacute;cart..";
	$Translation['field'] = "Champ";
	$Translation['AppGini definition'] = "D&eacute;finition AppGini";
	$Translation['database definition'] = "D&eacute;finition actuelle dans la base de donn&eacute;es";
	$Translation['table name title'] = "<TABLENAME> table";
	$Translation['does not exist'] = "N'existe pas!";
	$Translation['create field'] = "Cr&eacute;ez le champ en ex&eacute;cutant une requête ADD COLUMN.";
	$Translation['create it'] = "Cr&eacute;ez le";
	$Translation['fix field'] = "Corrigez le champ en ex&eacute;cutant une requête ALTER COLUMN afin que sa d&eacute;finition devienne la même que celle utilis&eacute;e dans AppGini.";
	$Translation['fix it'] = "R&eacute;parez le";
	$Translation['field update warning'] = "DANGER!! Dans certains cas, cela peut entraîner une perte, une troncation ou une corruption des donn&eacute;es. Il peut &ecirc;tre parfois pr&eacute;f&eacute;rable de mettre &agrave; jour le champ dans AppGini pour qu’il corresponde &agrave; celui de la base de donn&eacute;es. Voulez-vous toujours continuer?";
	$Translation['no deviations found'] = "Aucun &eacute;cart trouv&eacute;. Tous les champs OK!";
	$Translation['error fields'] = "Champs <CREATENUM> trouv&eacute;s non cr&eacute;&eacute;s qui doivent &ecirc;tre cr&eacute;&eacute;s. <br> Champs <UPDATENUM> trouv&eacute;s qui doivent &eacute;ventuellement &ecirc;tre mis &agrave; jour.";
	
	//pageRebuildThumbnails.php
	$Translation['rebuild thumbnails'] = "Reconstruire les vignettes";
	$Translation['thumbnails utility'] = "Utilisez cet utilitaire si vous avez un ou plusieurs champs d&apos;image dans une table qui n'ont pas de vignettes ou dont les vignettes ont des dimensions incorrectes.";
	$Translation['rebuild thumbnails of table'] = "Reconstruire les vignettes de la table";
	$Translation['rebuild'] = "Reconstruire";
	$Translation['rebuild thumbnails of table_name'] = "Reconstruction des vignettes de '<i><TABLENAME></i>' table ...";
	$Translation['do not close page message'] = "Ne fermez pas cette page avant que le message de confirmation que toutes les vignettes aient &eacute;t&eacute; cr&eacute;&eacute;es ne s'affiche..";	
	$Translation['rebuild thumbnails status'] = "Statut: en train de reconstruire les vignettes, veuillez patienter ...";
	$Translation['building field thumbnails'] =  "Cr&eacute;ation de miniatures pour le champ '<i> <FIELD> </ i>' ...";
	$Translation['done'] = "Done.";
	$Translation['finished status'] = "Statut: Termin&eacute;. Vous pouvez fermer cette page maintenant.";
	
	//pageSender.php
	$Translation['invalid mail queue'] = "File d'attente mail invalide.";
	$Translation['sending message failed'] = " -- Envoi du message &agrave; '<EMAIL>': Echec.";
	$Translation['sending message ok'] = " -- Envoi du message &agrave; '<EMAIL>': Ok.";
	$Translation['done!'] = "Termin&eacute;!";
	$Translation['close page'] = "Vous pouvez fermer cette page maintenant ou naviguer vers une autre page..";
	$Translation['mail log'] = "Registre Courrier :";
	
	//pageSettings.php
	$Translation['invalid security token'] = 'https://bigprof.com/blog/appgini/screencast-how-to-add-a-custom-link-to-the-navigation-menu-of-your-appgini-app/';
	$Translation['unique admin username error'] = "Le nouveau nom d'utilisateur admin est d&eacute;j&agrave; pris par un autre membre. Assurez-vous que le nouveau nom d'utilisateur admin est unique.";	
	$Translation['unique anonymous username error'] = 'Le nouveau nom d&apos;utilisateur anonyme est d&eacute;j&agrave; pris par un autre membre. Assurez-vous que le nom d&apos;utilisateur fourni est unique.';
	$Translation['unique anonymous group name error'] = 'Le nouveau nom de groupe anonyme est d&eacute;j&agrave; utilis&eacute; par un autre groupe. Assurez-vous que le nom du groupe fourni est unique..';
	$Translation['admin password mismatch'] = '"Mot de passe administrateur" et "Confirmer le mot de passe" ne correspondent pas.';
	$Translation['invalid sender email'] = '"Email de l&apos;exp&eacute;diteur" non valide.';
	$Translation['errors occurred'] = "Les erreurs suivantes se sont produites:";
	$Translation['go back'] = '<a href="pageSettings.php" onclick="history.go(-1); return false;"> revenez </a> pour corriger les erreurs ci-dessus, puis r&eacute;essayez.';
	$Translation['record updated automatically'] = "Enregistrement mis &agrave; jour automatiquement le <DATE>";
	$Translation['admin settings saved'] = "Paramètres administrateur enregistr&eacute;s avec succ&egrave;s. <br> Retour aux <a href=\"pageSettings.php\"> Paramètres administrateur </a>.";
	$Translation['admin settings not saved'] = "Les paramètres de l&apos;administrateur n&apos;ont PAS &eacute;t&eacute; enregistr&eacute;s avec succ&egrave;s. Motif de l&apos;&eacute;chec: <ERROR> <br> Retour aux <a href=\"pageSettings.php\" onclick=\"history.go(-1); return false;\"> paramètres de l&apos;administrateur </a>..";
	$Translation['show tool tips'] = 'Afficher les info-bulles lorsque la souris passe au-dessus des options';
	$Translation['admin username'] = "Nom d'utilisateur Admin";
	$Translation['admin password'] = "Mot de passe Admin";
	$Translation['change admin password'] = "Tapez un mot de passe uniquement si vous souhaitez modifier le mot de passe administrateur.";
	$Translation['sender email'] = "Email de l&apos;exp&eacute;diteur";
	$Translation['sender name and email'] = "Le nom et l&apos;email de l&apos;exp&eacute;diteur sont utilis&eacute;s dans le champ '&Agrave;' lors de l&apos;envoi";
	$Translation['email messages'] = "messages email &agrave; des groupes ou des membres.";
	$Translation['admin notifications'] = "Notifications de l'administrateur";
	$Translation['no email notifications'] = "Aucune notification par email &agrave; l&apos;administrateur.";
	$Translation['member waiting approval'] = "Notifier l&apos;administrateur uniquement lorsqu&apos;un nouveau membre est en attente d&apos;approbation.";
	$Translation['new sign-ups'] = "Notifier l&apos;administrateur pour toutes les nouvelles souscriptions.";
	$Translation['sender name'] = "Nom de l&apos;exp&eacute;diteur";
	$Translation['members custom field 1'] = "Champ personnalis&eacute; des membres 1";
	$Translation['members custom field 2'] = "Champ personnalis&eacute; des membres 2";
	$Translation['members custom field 3'] = "Champ personnalis&eacute; des membres 3";
	$Translation['members custom field 4'] = "Champ personnalis&eacute; des membres 4";
	$Translation['member approval email subject'] = "Approbation du membre <br>objet de l&apos;email";
	$Translation['member approval email subject control'] = "Lorsque l&apos;administrateur approuve un membre, ce dernier est inform&eacute; par courrier &eacute;lectronique qu&apos;il est approuv&eacute;. Vous pouvez contrôler l&apos;objet de l&apos;e-mail d&apos;approbation dans cette zone <br> et son contenu dans la zone ci-dessous.";
	$Translation['member approval email message'] = "Approbation du membre<br>message email";
	$Translation['MySQL date'] = "Date de MySQL et chaîne de formatage";
	$Translation['MySQL reference'] = 'Veuillez consulter <a href="http://dev.mysql.com/doc/refman/5.0/fr/date-and-time-functions.html#function_date-format" target="_blank"> la r&eacute;f&eacute;rence MySQL </a> pour les formats possibles.';
	$Translation['PHP short date'] = "Date courte PHP et chaîne de formatage";
	$Translation['PHP manual'] = 'Veuillez consulter le <a href="http://www.php.net/manual/fr/function.date.php" target="_blank"> manuel PHP </a> pour connaître les formats possibles.'; 
	$Translation['PHP long date'] = "PHP longue date et chaîne de formatage";
	$Translation['groups per page'] = "Groupes par page";
	$Translation['members per page'] = "Membres par page";
	$Translation['records per page'] = "Enregistrements par page";
	$Translation['default sign-up mode'] = "Mode d'inscription par d&eacute;faut <br> pour les nouveaux groupes";
	$Translation['no sign-up allowed'] = "Aucune inscription autoris&eacute;e. Seul l'administrateur peut ajouter des membres.";
	$Translation['admin approve members'] = "Inscription autoris&eacute;e, mais l'administrateur doit approuver les membres.";
	$Translation['automatically approve members'] = "Inscription autoris&eacute;e et approbation automatique des membres.";
	$Translation['anonymous group'] = "Nom du groupe anonyme";
	$Translation['anonymous user name'] = "Nom de l&apos;utilisateur anonyme";
	$Translation['hide twitter feed'] = "Masquer le flux Twitter dans la page d&apos;accueil de l&apos;administrateur?";
	$Translation['twitter feed'] = "Notre flux Twitter vous permet de vous tenir au courant de nos dernières nouvelles, des ressources utiles, des nouvelles versions et de nombreux autres conseils utiles.";
	
	//pageTransferOwnership.php
	$Translation['invalid source member'] = "Source Membre s&eacute;lectionn&eacute; non valide .";
	$Translation['invalid destination member'] = "Destination Membre s&eacute;lectionn&eacute; non valide .";
	$Translation['moving member'] = "D&eacute;placement du membre '<MEMBERID>' et de ses donn&eacute;es du groupe '<SOURCEGROUP>' vers le groupe'<DESTINATIONGROUP>' ...";
	$Translation['data records transferred'] = "Le membre '<MEMBERID>' appartient maintenant au groupe '<NEWGROUP>'. Enregistrements de donn&eacute;es transf&eacute;r&eacute;s:<DATARECORDS>.";
	$Translation['moving data'] = "D&eacute;placement des donn&eacute;es du membre '<SOURCEMEMBER>' du groupe '<SOURCEGROUP>' vers le membre '<DESTINATIONMEMBER>' du groupe'<DESTINATIONGROUP>' ...";
	$Translation['member records status'] = "Le membre '<SOURCEMEMBER>' du groupe '<SOURCEGROUP>' poss&eacute;dait des enregistrements de donn&eacute;es <DATABEFORE>. <TRANSFERSTATUS> au membre '<DESTINATIONMEMBER>' du groupe'<DESTINATIONGROUP>'.";
	$Translation['moving all group members'] = "D&eacute;placer tous les membres et les donn&eacute;es du groupe '<SOURCEGROUP>' vers le groupe'<DESTINATIONGROUP>' ...";
	$Translation['failed transferring group members'] = "L'op&eacute;ration a &eacute;chou&eacute;. Aucun membre n&apos;a &eacute;t&eacute; transf&eacute;r&eacute; du groupe '<SOURCEGROUP>' vers'<DESTINATIONGROUP>'.";
	$Translation['group members transferred'] = "Tous les membres du groupe '<SOURCEGROUP>' appartiennent maintenant &agrave; '<DESTINATIONGROUP>'. ";
	$Translation['failed transfer data records'] = "Cependant, les enregistrements de donn&eacute;es n&apos;ont pas &eacute;t&eacute; transf&eacute;r&eacute;s.";
	$Translation['data records were transferred'] = "<DATABEFORE> les enregistrements de donn&eacute;es ont &eacute;t&eacute; transf&eacute;r&eacute;s.";
	$Translation['moving group data to member'] = "D&eacute;placement des donn&eacute;es de tous les membres du groupe '<SOURCEGROUP>' vers le membre '<DESTINATIONMEMBER>' du groupe'<DESTINATIONGROUP>' ...";
	$Translation['moving group data to member status'] = "<NUMBER> enregistrement (s) transf&eacute;r&eacute;s du groupe '<SOURCEGROUP>' au membre '<DESTINATIONMEMBER>' du groupe'<DESTINATIONGROUP>'";
	$Translation['status'] = "STATUS:";
	$Translation['batch transfer link'] = 'Pour r&eacute;p&eacute;ter ult&eacute;rieurement le même transfert par lots, vous pouvez  <a href= "pageTransferOwnership.php?sourceGroupID=<SOURCEGROUP>&amp;sourceMemberID=<SOURCEMEMBER>&amp;destinationGroupID=<DESTINATIONGROUP>&amp;destinationMemberID=<DESTINATIONMEMBER>&amp;moveMembers=<MOVEMEMBERS>">mettre en signet ou copier ce lien</a>.';
	$Translation['ownership batch transfer'] = "Transfert de propri&eacute;t&eacute; par lots";
	$Translation['step 1'] = "&Eacute;TAPE 1:";
	$Translation['batch transfer wizard'] = "L&apos;assistant de transfert par lots vous permet de transf&eacute;rer les enregistrements de donn&eacute;es d&apos;un ou de tous les membres d&apos;un groupe (le <i> groupe source </i>) vers un membre d&apos;un autre groupe (le <i>membre de destination</i> du <i>groupe de destination</i>)";
	$Translation['source group'] = "Groupe source";
	$Translation['update'] = "Mettre &agrave; jour";
	$Translation['next step'] = "L'&eacute;tape suivante";
	$Translation['group statistics'] = "Ce groupe a <MEMBERS> membres et <RECORDS> enregistrements de donn&eacute;es.";
	$Translation['step 2'] = "&Eacute;TAPE 2:";
	$Translation['source member message'] = "Le membre source peut &ecirc;tre un membre ou tous les membres du groupe source.";
	$Translation['source member'] = "Membre source";
	$Translation['all group members'] = "ous les membres de '<GROUPNAME>'";
	$Translation['member statistics'] = "Ce membre a <RECORDS> enregistrements.";
	$Translation['step 3'] = "&Eacute;TAPE 3:";
	$Translation['destination group message'] = "Le groupe de destination peut &ecirc;tre identique ou diff&eacute;rent du groupe source. Seuls les groupes ayant des membres sont r&eacute;pertori&eacute;s ci-dessous.";
	$Translation['destination group'] = "Groupe de destination";
	$Translation['step 4'] = "&Eacute;TAPE 4:";
	$Translation['destination member message'] = "Le membre de destination sera le nouveau propri&eacute;taire des enregistrements de donn&eacute;es du membre source..";
	$Translation['destination member'] = "Membre de destination";
	$Translation['begin transfer'] = "Commencer le transfert";	
	$Translation['move records'] = "Vous pouvez soit d&eacute;placer les enregistrements du (des) membre (s) source (s) vers un membre du groupe de destination, soit d&eacute;placer le (s) membre (s) source (s) avec leurs enregistrements de donn&eacute;es vers le groupe de destination..";
	$Translation['move data records to member'] = "D&eacute;placer des enregistrements de donn&eacute;es vers ce membre:";
	$Translation['move source member to group'] = "D&eacute;placer le (s) membre (s) source (s) et tous ses / leurs enregistrements de donn&eacute;es vers le groupe '<GROUPNAME>'.";
	
	//pageUploadCSV.php
	$Translation['file not found error'] = "Erreur: fichier '<NOMFICHIER>' introuvable.";
	$Translation['preview and confirm CSV data'] = "Pr&eacute;visualisez les donn&eacute;es CSV, puis confirmez leur importation. ...";
	$Translation['display csv file rows'] = "Affichage des 10 premières lignes du fichier CSV ...";
	$Translation['change CSV settings'] = 'Modifier les paramètres CSV';
	$Translation['import CSV data'] = 'Confirmer et importer des donn&eacute;es CSV & gt;';
	$Translation['apply CSV settings'] = 'Appliquer les paramètres CSV';
	$Translation['importing CSV data'] = 'Importation de donn&eacute;es CSV ...';
	$Translation['start at estimated record'] = "&agrave; partir de l&apos;enregistrement <RECORDNUMBER> du nombre total <RECORDS> enregistrements estim&eacute;s ...";
	$Translation['table backed up'] = "Table '<TABLE>' sauvegard&eacute;e en tant que '<TABLENAME>'.";
	$Translation['table backup not done'] = "La table '<TABLE>' est vide, aucune sauvegarde n'a donc &eacute;t&eacute; effectu&eacute;e.";
	$Translation['importing batch'] = 'Importation du lot <BATCH> de <BATCHNUM>: ';
	$Translation['ok'] = 'Ok';
	$Translation['records inserted or updated successfully'] = "<RECORDS> enregistrements ins&eacute;r&eacute;s / mis &agrave; jour en <SECONDS> secondes.";
	$Translation['mission accomplished'] = "Mission accomplie!";
	$Translation['assign a records owner'] = "Affecter un propri&eacute;taire aux enregistrements import&eacute;s & gt;";
	$Translation['please wait and do not close'] = "Veuillez patienter et ne fermez pas cette page...";
	$Translation['hide advanced options'] = "Masquer les options avanc&eacute;es";
	$Translation['show advanced options'] = "Afficher les options avanc&eacute;es";
	$Translation['import CSV to database'] = "Importer un fichier CSV dans la base de donn&eacute;es";
	$Translation['import CSV to database page'] = "Cette page vous permet de t&eacute;l&eacute;charger un fichier CSV (par exemple, un fichier g&eacute;n&eacute;r&eacute; &agrave; partir de MS Excel) et de l'importer dans l'une des tables de la base de donn&eacute;es. Cela facilite tellement le remplissage en bloc de la base de donn&eacute;es avec des donn&eacute;es provenant d'autres sources plutôt que de saisir manuellement chaque enregistrement.";
	$Translation['populate table from CSV'] = "Il s&apos;agit de la table que vous souhaitez renseigner avec les donn&eacute;es du fichier CSV.";
	$Translation['CSV file'] = "Fichier CSV";
	$Translation['preview CSV data'] = "Aperçu des donn&eacute;es CSV & gt;";
	$Translation['no table name provided'] = "Aucun nom de table fourni.";
	$Translation['can not open CSV'] = "Impossible d'ouvrir le fichier csv '<FILENAME>'.";
	$Translation['empty CSV file'] = "Le fichier csv '<FILENAME>' est vide.";		
	$Translation['no CSV file data'] = "Le fichier csv '<FILENAME>' n&apos;a aucune donn&eacute;e &agrave; lire." ;
	$Translation['field separator'] = "S&eacute;parateur de champ";
	$Translation['default comma'] = "La valeur par d&eacute;faut est une virgule (,)";
	$Translation['field delimiter'] = "D&eacute;limiteur de champ";
	$Translation['default double-quote'] = 'La valeur par d&eacute;faut est la double citation (")';
	$Translation['maximum characters per line'] = "Nombre maximum de caractères par ligne";
	$Translation['trouble importing CSV'] = "Si vous ne parvenez pas &agrave; importer le fichier CSV, essayez d’augmenter cette valeur..";
	$Translation['ignore lines number'] = "Nombre de lignes &agrave; ignorer";
	$Translation['skip lines number'] = "Modifiez cette valeur si vous souhaitez ignorer un nombre sp&eacute;cifique de lignes dans le fichier CSV..";
	$Translation['first line field names'] = "La première ligne du fichier contient les noms de champs";
	$Translation['field names must match'] = "Les noms de champs doivent <b> exactement </ b> correspondre &agrave; ceux de la base de donn&eacute;es..";
	$Translation['update table records'] = "Mettre &agrave; jour les enregistrements de table si leurs valeurs de cl&eacute; primaire correspondent &agrave; celles du fichier CSV.";
	$Translation['ignore CSV table records'] = "Si cette case n&apos;est pas coch&eacute;e, les enregistrements du fichier CSV ayant les m&ecirc;mes valeurs de cl&eacute; primaire que ceux de la table <b> seront ignor&eacute;s.</b>";
	$Translation['back up the table'] = "Sauvegardez la table avant d'y importer des donn&eacute;es CSV.";
	
	//pageViewGroups.php
	$Translation['no matching results found'] = "Aucun r&eacute;sultat correspondant trouv&eacute;.";
	$Translation['search groups'] = "Rechercher groupes";
	$Translation['find'] = "Trouver";
	$Translation['reset'] = "R&eacute;initialiser";
	$Translation['members count'] = "Nombre de membres";
	$Translation['Edit group'] = "Editer le groupe";
	$Translation['confirm delete group'] = "&Ecirc;tes-vous s&ucirc;r de vouloir supprimer compl&egrave;tement ce groupe??";
	$Translation['delete group'] = "Supprimer le groupe";
	$Translation['view group records'] = "Voir les enregistrements du groupe";
	$Translation['view group members'] = "Voir les membres du groupe";
	$Translation['send message to group'] = "Envoyer un message au groupe";
	$Translation['previous'] = "Pr&eacute;c&eacute;dent";
	$Translation['displaying groups'] = "Affichage des groupes <GROUPNUM1> &agrave; <GROUPNUM2> de <GROUPS>";
	$Translation['next'] = "Suivant";
	$Translation['key'] = "Cl&eacute;:";	
	$Translation['edit group details'] = "Modifier les d&eacute;tails et les autorisations du groupe.";
	$Translation['add member to group'] = "Ajouter un nouveau membre au groupe.";
	$Translation['view data records'] = "Affichez tous les enregistrements de donn&eacute;es entr&eacute;s par les membres du groupe.";
	$Translation['list group members'] = "Lister tous les membres d'un groupe.";
	$Translation['send email to all members'] = "Envoyer un email &agrave; tous les membres d'un groupe.";
	
	//pageViewMembers.php
	$Translation['search members'] = "Rechercher des membres <SEARCH> dans <HTMLSELECT>";
	$Translation['all fields'] = "Tous les champs";
	$Translation['any'] = "Tout";
	$Translation['waiting approval'] = "En attente d&apos;approbation";
	$Translation['active'] = "Actif";
	$Translation['Banned'] = "Banni";
	$Translation['username'] = "Nom d'utilisateur";
	$Translation['sign up date'] = "Date d'inscription";
	$Translation['Status'] = "Statut";
	$Translation['Edit member'] = "Editer un membre";	
	$Translation['sure delete user'] = "&Ecirc;tes-vous s&ucirc;r de vouloir supprimer l&apos;utilisateur? \'<USERNAME>\'?";
	$Translation['delete member'] = "Supprimer un membre";
	$Translation["approve this member"] = "Approuver ce membre";
	$Translation["unban this member"] = "D&eacute;bannir ce membre";
	$Translation["ban this member"] = "Bannir ce membre";
	$Translation["View member records"] = "Voir les dossiers des membres";
	$Translation["send message to member"] = "Envoyer un message au membre";
	$Translation['displaying members'] = "Affichage des membres <MEMBERNUM1> &agrave; <MEMBERNUM2> de <MEMBERS>";
	$Translation['activate member'] = "Activer un nouveau membre / banni.";
	$Translation['ban member'] = "Membre banni (suspendu).";
	$Translation['view entered member records'] = "Voir tous les enregistrements de donn&eacute;es entr&eacute;s par le membre.";
	$Translation['send email to member'] = "Envoyer un email au membre.";
	
	//pageViewRecords.php
	$Translation['data records'] = "Donn&eacute;es enregistr&eacute;es";
	$Translation['show records'] = "Afficher les enregistrements de";
	$Translation['all tables'] = "Toutes les tables";
	$Translation['sort records'] = "Trier les enregistrements par";
	$Translation['date created'] = "Date de cr&eacute;ation";
	$Translation['date modified'] = "Date de modification";
	$Translation['newer first'] = "Plus r&eacute;cent en premier";
	$Translation['older first'] = "Plus anciens en premier";
	$Translation['created'] = "Cr&eacute;&eacute;";
	$Translation['modified'] = "Modifi&eacute;";
	$Translation['data'] = "Donn&eacute;e";
	$Translation['change record ownership'] = "Changer de propri&eacute;taire de cet enregistrement";
	$Translation['sure delete record'] = "&Ecirc;tes-vous s&ucirc;r de vouloir supprimer cet enregistrement?";
	$Translation['delete record'] = "Supprimer cet enregistrement";
	$Translation['displaying records'] = "Affichage des enregistrements <RECORDNUM1> &agrave; <RECORDNUM2> de <RECORDS>";

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Le mode maintenance est activ&eacute;! Vous pouvez le d&eacute;sactiver &agrave; partir de la page d&apos;accueil de l&apos;administrateur.';
	$Translation['maintenance mode message'] = 'Message en mode maintenance';
	$Translation['maintenance mode'] = 'Mode Maintenance';
	$Translation['OFF'] = 'OFF';
	$Translation['ON'] = 'ON';
	$Translation['enable maintenance mode?'] = '&Ecirc;tes-vous s&ucirc;r de vouloir activer le mode maintenance? Seuls les utilisateurs administrateurs peuvent acc&eacute;der au site dans ce mode!';
	$Translation['disable maintenance mode?'] = '&Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;sactiver le mode maintenance? Tous les utilisateurs pourront acc&eacute;der au site!';
	
	/* Added in AppGini 5.60 */
	$Translation['csv file upload error'] = 'Une erreur s&apos;est produite lors du traitement du fichier CSV demand&eacute;..';
	$Translation['back and retry'] = 'Retourner et r&eacute;essayer';
	$Translation['upload or choose csv file'] = 'T&eacute;l&eacute;charger un fichier CSV ou en ouvrir un existant';
	$Translation['choose csv upload'] = 'Choisissez un fichier CSV &agrave; t&eacute;l&eacute;charger';
	$Translation['no file chosen yet'] = 'Aucun fichier choisi pour l&apos;instant';
	$Translation['start upload'] = 'Commence le t&eacute;l&eacute;chargement';
	$Translation['select a table'] = 'S&eacute;lectionnez une table';
	$Translation['error reading csv data'] = 'Une erreur est survenue lors de la lecture des donn&eacute;es CSV. Essayez de r&eacute;initialiser / ajuster les paramètres CSV.';
	$Translation['belongs to'] = 'Appartient &agrave;';
	$Translation['skip column'] = 'Passer cette colonne';
	$Translation['connection failed retrying'] = 'La connexion a &eacute;chou&eacute;. R&eacute;essayer dans <SECONDS> secondes ...';
	$Translation['connection failed timeout'] = 'La connexion a expir&eacute;. R&eacute;essayer plus tard.';
	$Translation['sure delete csv'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer le fichier CSV [CSVFILE] du serveur?';
	$Translation['invalid csv file selected'] = 'Fichier non valide choisi. Doit &ecirc;tre un fichier CSV.';
	$Translation['couldnt delete csv file'] = 'Impossible de supprimer ce fichier CSV.';
	$Translation['error backing up table'] = 'Erreur: Impossible de sauvegarder la table<TABLE>.';
	$Translation['no columns selected'] = 'Veuillez s&eacute;lectionner au moins une colonne &agrave; importer et assurez-vous que chaque colonne s&eacute;lectionn&eacute;e appartient &agrave; un champ UNIQUE.';
	$Translation['csrf token expired or invalid'] = 'Oops! quelque chose s&apos;est mal pass&eacute; avec cette page. Veuillez revenir en arrière et r&eacute;essayer.';
	$Translation['back to groups'] = 'Retour aux groupes';
	$Translation['member updated'] = "Membre <USERNAME> mis &agrave; jour avec succ&egrave;s";
	$Translation['fix errors before submitting'] = 'Veuillez corriger les erreurs surlign&eacute;es avant de soumettre la page.!';

	/* Added in AppGini 5.62 */
	$Translation['mail_function'] = 'M&eacute;thode d&apos;envoi d&apos;emails';
	$Translation['smtp_server'] = 'Serveur SMTP';
	$Translation['smtp_encryption'] = 'Cryptage SMTP';
	$Translation['smtp_port'] = 'Port SMTP';
	$Translation['smtp_port_hint'] = 'Les valeurs typiques sont 25 (pour SMTP non crypt&eacute;), 465 (utilis&eacute; dans de nombreux cas avec le cryptage SSL) ou 587 (typique avec le cryptage TLS).';
	$Translation['smtp_user'] = 'Nom d&apos;utilisateur SMTP';
	$Translation['smtp_pass'] = 'Mot de passe SMTP';
	$Translation['configure mail settings'] = 'Configurer les paramètres de messagerie';
	$Translation['display debugging info'] = 'Afficher les informations de d&eacute;bogage';
	$Translation['debugging info hint'] = 'Les informations de d&eacute;bogage sont utiles si vous rencontrez des problèmes pour envoyer des courriels via le serveur SMTP configur&eacute;.';

	/* Added in AppGini 5.70 */
	$Translation['create backup file'] = 'Cr&eacute;er un fichier de sauvegarde';
	$Translation['database backups'] = 'Sauvegardes de bases de donn&eacute;es';
	$Translation['no backups found'] = 'Aucune sauvegarde trouv&eacute;e. Vous pouvez cr&eacute;er une nouvelle sauvegarde en cliquant sur le bouton "Cr&eacute;er un fichier de sauvegarde"..';
	$Translation['available backups'] = 'Sauvegardes disponibles';
	$Translation['restore backup'] = 'Restaurer';
	$Translation['delete backup'] = 'Supprimer';
	$Translation['backup restored'] = 'Sauvegarde restaur&eacute;e avec succ&egrave;s.';
	$Translation['backup deleted'] = 'Sauvegarde supprim&eacute;e avec succ&egrave;s.';
	$Translation['restore error'] = 'Une erreur est survenue lors de la restauration de la sauvegarde.';
	$Translation['backup delete error'] = 'Une erreur est survenue lors de la suppression de la sauvegarde..';
	$Translation['confirm delete backup'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer ce fichier de sauvegarde?';
	$Translation['confirm restore'] = 'La restauration de votre base de donn&eacute;es &agrave; partir d’un fichier de sauvegarde entraînerait l’&eacute;crasement de toutes les donn&eacute;es ET utilisateurs / mots de passe existants, en r&eacute;tablissant l’&eacute;tat initial de la sauvegarde. \ n \ nPendant le processus de restauration, le mode maintenance sera activ&eacute; pour empêcher les utilisateurs de modifier la base sera d&eacute;sactiv&eacute; une fois la restauration termin&eacute;e. \ n \ nVoulez-vous vraiment continuer?';
	$Translation['confirm backup'] = 'Pendant le processus de sauvegarde, le mode de maintenance sera activ&eacute; pour empêcher les utilisateurs de modifier la base de donn&eacute;es et sera d&eacute;sactiv&eacute; une fois la sauvegarde termin&eacute;e. \ n \ nVoulez-vous vraiment continuer?';
	$Translation['cant create backup folder'] = 'Erreur: Impossible de cr&eacute;er ou d’&eacute;crire dans le dossier admin / backups. V&eacute;rifiez les autorisations et la propri&eacute;t&eacute; de votre dossier ou contactez votre administrateur de serveur pour obtenir de l&apos;aide.';
	$Translation['fix all'] = 'Corriger TOUS LES CHAMPS';
	$Translation['backup before fix'] = 'Il est fortement recommand&eacute; de cr&eacute;er une sauvegarde de base de donn&eacute;es avant de tenter d&apos;apporter des corrections ici.';
	$Translation['about backups'] = 'Les sauvegardes sont effectu&eacute;es &agrave; l&apos;aide de l&apos;outil de ligne de commande mysqldump. Si aucune sauvegarde n&apos;est cr&eacute;&eacute;e, cela peut tre dû au fait que le serveur Web n&apos;a pas l&apos;autorisation d&apos;ex&eacute;cuter mysqldump..';
