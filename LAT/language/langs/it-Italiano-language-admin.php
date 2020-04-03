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
	// Translated by Massimo Ghielmi (email: info@kgmservizi.com Homepage: https://kgmservizi.com)
	
	// incHeader.php
	$Translation['membership management'] = "Gestione Membership";
	$Translation['password mismatch'] = "La password non corrisponde.";
	$Translation['error'] = "Errore";
	$Translation['invalid email'] = "Indirizzo Email non valido";
	$Translation['sending mails'] = "L'invio delle email può richiedere del tempo. Per favore non chiudere questa pagina fino a quando non viene visualizzato il messaggio 'Fatto'!";
	$Translation['complete step 4'] = "Per favore completa il 4° step selezionando il membro a cui trasferire i/il record.";
	$Translation['info'] = "Info";
	$Translation['sure move member'] = 'Sei sicuro di voler spostare il membro \'<MEMBER>\' e i suoi dati dal gruppo \'<OLDGROUP>\' al gruppop \'<NEWGROUP>\'?';
	$Translation['sure move data of member'] = 'Sei sicuro di voler spostare i dati del membro \'<OLDMEMBER>\' del gruppo \'<OLDGROUP>\' al membro \'<NEWMEMBER>\' del gruppo \'<NEWGROUP>\'?';
	$Translation['sure move all members'] = 'Sei sicuro di voler spostare tutti i dati dei membri dal gruppo \'<OLDGROUP>\' al gruppo \'<NEWGROUP>\'?';
	$Translation['sure move data of all members'] = 'Sei sicuro di voler spostare i dati di tutti i membri del gruppo \'<OLDGROUP>\' al membro \'<MEMBER>\' del gruppo \'<NEWGROUP>\'?';
	$Translation['toggle navigation'] = "Toggle navigazione";
	$Translation['admin area'] = "Area Amministrativa";
	$Translation['groups'] = "Gruppi";
	$Translation['view groups'] = "Visualizza Gruppi";
	$Translation['add group'] = "Aggiungi Gruppo";
	$Translation['edit anonymous permissions'] = "Modifica i permessi del Gruppo Anonimo";
	$Translation['members'] = "Membri";
	$Translation['view members'] = "Visualizza Membri";
	$Translation['add member'] = "Aggiungi Membro";
	$Translation["view members' records"] = "Visualizza i Record del Membro";  
	$Translation["utilities"] = "Utility"; 
	$Translation["admin settings"] = "Impostazioni Amministrative"; 
	$Translation["rebuild thumbnails"] = "Ricostruisci Miniature"; 
	$Translation['rebuild fields'] = "Ricostruisci Campi DB";
	$Translation['import CSV'] = "Importa dati da CSV";
	$Translation['batch transfer'] = "Batch Transfer Wizard";
	$Translation['mail all users'] = "Invia Email a tutti gli Utenti";
	$Translation['AppGini forum'] = "AppGini Community Forum";
	$Translation["user's area"] = 'Area Utente';
	$Translation["sign out"] = "Disconnettiti";
	$Translation["attention"] = "Attenzione!";
	$Translation['security risk admin'] = 'Stai utilizzando l\'username e la passowrd di default per l\'amministratore. Questo è un grosso rischio per la sicurezza. Per favore cambia almeno la password dalla pagina <a href="pageSettings.php">Impostazioni Amministrazione</a> <em>immediatamente</em>.';
	$Translation['security risk'] = 'Stai utilizzando la password di default per l\'amministratore. Questo è un grosso rischio per la sicurezza. Per favore cambia la password dalla pagina <a href="pageSettings.php">Impostazioni Amministrazione</a> <em>immediatamente</em>.' ;
	$Translation['plugins'] = 'Plugin';

	//pageAssignOwners.php
	$Translation["assigned table records to group"] = "Assegnato/i <NUMBER> record della tabella '<TABLE>' al gruppo '<GROUP>'";
	$Translation["assigned table records to group and member"] = "Assegnato/i <NUMBER> record della tabella '<TABLE>' al gruppo '<GROUP>' , membro '<MEMBERID>'";
	$Translation['data ownership assign'] = "Assegna la proprietà dei dati che non hanno proprietario";
	$Translation['records ownership done'] = "Tutti i record in ogni tabella hanno ora un proprietario.<br>Torna all'<a href='pageHome.php'>Homepage Amministrativa</a>.";
	$Translation['select group'] = "Seleziona gruppo";
	$Translation['data ownership'] = "A volte, potresti avere tabelle con dati che sono stati inseriti prima di implementare questo sistema di gestione della proprietà AppGini, o inseriti usando altre applicazioni inconsapevoli di questo sistema. Al momento questi dati non hanno proprietario. Questa pagina ti consente di assegnargli un proprietario.";
	$Translation["table"] = "Tabella";
	$Translation["records with no owners"] = "Record senza proprietari";
	$Translation["new owner group"] = "Nuovo gruppo proprietari";
	$Translation["new owner member"] = "Nuovo membro proprietario*";	
	$Translation["cancel"] = "Cancella";
	$Translation["assign new owners"] = "Assegna nuovi proprietari";
	$Translation["please wait"] = "Per favore attendi ...";	
	$Translation["if no owner member assigned"] = '* Se non assegni nessun membro proprietario qui, puoi sempre utilizzare il <a href="pageTransferOwnership.php">Batch Transfer Wizard</a> più tardi.';
	
	//pageDeleteGroup.php
	$Translation["can not delete group remove members"] = 'Non posso eliminare questo gruppo. Per favore prima rimuovi i suoi membri.';
	$Translation["can not delete group transfer records"] = 'Non posso eliminare questo gruppo. Per favore prima trasferisci i suoi record a un\'altro gruppo..';
	
	//pageEditGroup.php
	$Translation["group exists error"] = "Errore: Il nome del gruppo esiste già. Devi scegliere un nome univoco.";
	$Translation["group not found error"] = "Errore: Gruppo non trovato!";								 	
	$Translation["edit group"] = "Modifica il Gruppo '<GROUPNAME>'";
	$Translation["add new group"] = "Aggiungi Nuovo Gruppo";
	$Translation["anonymous group attention"] = "Attenzione! Questo è il gruppo anonimo.";
	$Translation["show tool tips"] = "Visualizza i suggerimenti quando ti muovi sopra le opzioni";
	$Translation["group name"] = "Nome Gruppo";
	$Translation["readonly group name"] = "Il nome del gruppo anonimo è in sola lettura qui.";
	$Translation["anonymous group name"] = "Se si nomina il gruppo '<ANONYMOUSGROUP>', verrà considerato il gruppo anonimo<br>che definisce le autorizzazioni dei visitatori ospiti che non effettuano il login nel sistema.";
	$Translation["description"] = "Descrizione";
	$Translation["allow visitors sign up"] = 'Permetti ai visitatori di iscriversi a questo gruppo?';
	$Translation["admin add users"] = "No. Solo gli amministratori possono aggiungere utenti.";
	$Translation["admin approve users"] = "Sì e gli amministratori devono approvarli.";
	$Translation["automatically approve users"] = "Sì e vengono approvati automaticamente.";
	$Translation["group table permissions"] = "Permessi di questo gruppo (per tabella)";
	$Translation["no"] = "No";
	$Translation["owner"] = "Proprietario";
	$Translation["group"] = "Gruppo";
	$Translation["all"] = "Tutti";
	$Translation["insert"] = "Inserire";
	$Translation["view"] = "Vedere";
	$Translation["edit"] = "Editare";
	$Translation["delete"] = "Eliminare";
	$Translation["save changes"] = "Salvare cambiamenti";
	
	//pageEditMember.php
	$Translation["username error"] = "Errore: Username già esistente o non valido. Assicurati di inserire un username da 4 a 20 caratteri validi.";
	$Translation["member not found"] = "Errore: Membro non trovato!";
	$Translation["user has special permissions"] = "Questo membro ha permessi speciali che annullano le autorizzazioni del suo gruppo.";
	$Translation["user has group permissions"] = 'Questo membro eredita i <a href="pageEditGroup.php?groupID=<GROUPID>">permessi del suo gruppo</a>.';
	$Translation["set user special permissions"] = 'Imposta permessi speciali per questo membro';
	$Translation["sure continue"] = "Se hai effettutato modifiche a questo membro e non le hai ancora salvate, queste verranno perse se procedi. Sei sicuro di voler procedere?";
	$Translation["edit member"] = "Modifica Membro <MEMBERID>" ;
	$Translation["add new member"] = "Aggiungi Nuovo Membro";
	$Translation["anonymous guest member"] = "Attenzione! Questo è il membro anonimo (guest).";
	$Translation["admin member"] = 'Attenzione! Questo è il membro amministratore. Tu non puoi cambiare l\'username, la password o l\'email di questo membro qui, ma puoi farlo nella pagina <a href="pageSettings.php">impostazioni amministratore</a>.';
	$Translation["member username"] = "Username Membro";
	$Translation["check availability"] = "Controlla la disponibilità";
	$Translation["read only username"] = "L'username dell'utente anonimo (guest) è in sola lettura.";
	$Translation["password"] = "Password";
	$Translation["change password"] = "Inserisci una password solamente se vuoi cambiare la <br>password di questo utente. Altrimenti lascia il campo vuoto.";
	$Translation["confirm password"] = "Conferma password";
	$Translation["email"] = "Email";
	$Translation["approved"] = "Approvato?";
	$Translation["banned"] = "Bannato?";
	$Translation["comments"] = "Commenti";
	$Translation["back to members"] = "Ritorna ai membri";
	$Translation["member added"] = "Membro <USERNAME> aggiunto con successo";
	
	//pageEditMemberPermissions.php
	$Translation["member permissions saved"] = "Permessi membro salvati con successo.";
	$Translation["member permissions reset"] = "I permessi del membro sono stati resettati a quelli del suo gruppo.";
	$Translation["user table permissions"] = "Tabella permessi per l'utente <a href='pageEditMember.php?memberID=<MEMBER>' title='Visualizza dettagli membro'><MEMBERID></a> del gruppo <a href='pageEditGroup.php?groupID=<GROUPID>'  title='Visualizza dettagli e permessi gruppo'><GROUP></a>";
	$Translation["no member permissions"] = 'Questo membro non ha attualmente permessi speciali. Questa lista mostra i permessi del suo gruppo.';
	$Translation["reset member permissions"] = "Resetta i permessi del membro";
	$Translation["remove special permissions"] = 'Questo rimuoverà tutte le autorizzazioni speciali di questo utente che riprenderà quelle del suo gruppo. Sei sicuro di volerlo fare?';
	
	//pageEditOwnership.php
	$Translation["invalid table"] = "Tabella non valida.";
	$Translation["invalid primary key"] = "Valore chiave primaria non valido";
	$Translation["record not found"] = "Record non trovato ... se è stato importato esternamente, prova ad assegnargli un proprietario dall'area amministrativa.";
	$Translation["invalid username"] = "Username Non Valido";
	$Translation["record not found error"] = "Errore: Record non trovato!";
	$Translation["edit Record Ownership"] = "Modifica Proprietario Record";
	$Translation["owner group"] = "Gruppo Proprietario";
	$Translation["view all records by group"] = "Visualizza tutti i record di questo gruppo";
	$Translation["owner member"] = "Membro Proprietario";
	$Translation["view all records by member"] = "Visualizza tutti i record di questo membro";
	$Translation["switch record ownership"] = "Se vuoi cambiare la proprietà di questo record a un membro di un'altro gruppo, devi prima cambiare il gruppo proprietario e salvare.";
	$Translation["record created on"] = "Record creato il";
	$Translation["record modified on"] = "Record modificato il";
	$Translation["view all records of table"] = "Visualizza tutti i record di questa tabella";
	$Translation["record data"] = "Dati del record";
	$Translation["print"] = "Stampa";
	$Translation["could not retrieve field list"] = "Impossibile recuperare l'elenco dei campi dalla tabella '<TABLENAME>'";
	$Translation["field name"] = "Nome campo";
	$Translation["value"] = "Valore";
	
	//pageHome.php
	$Translation["visitor sign up"] = '<a href="../membership_signup.php" target="_blank">La registazione dei visitatori</a> è disabilitata perché non ci sono gruppi aperti. Per abilitare la registrazione dei visitatori, imposta un gruppo dove accettarne la registrazione.';
	$Translation["table data without owner"] = 'Hai dati in una o più tabelle che non hanno un proprietario. Per assegnare un gruppo di proprietari per questi dati, <a href="pageAssignOwners.php">clicca qui</a>.';
	$Translation["membership management homepage"] = "Homepage Gestione Membership";
	$Translation["newest updates"] = "Nuovi Aggiornamenti";
	$Translation["view record details"] = "Visualizza dettagli record";
	$Translation["newest entries"] = "Nuovi Inserimenti";
	$Translation["available add-ons"] = "Add-on Disponibili";
	$Translation["more info"] = "Maggiori informazioni";
	$Translation["close"] = "Chiudi";
	$Translation["view add-ons"] = "Visualizza tutti gli add-on";
	$Translation["top members"] = "Membri Top";
	$Translation["edit member details"] = "Modifica dettagli membro";
	$Translation["view member records"] = "Visualizza i record di dati del membro";
	$Translation["records"] = "record";
	$Translation["members stats"] = "Statistiche Membri";
	$Translation["total groups"] = "Totale gruppi";
	$Translation["active members"] = "Membri attivi";
	$Translation["view active members"] = "Visualizza membri attivi";
	$Translation["members awaiting approval"] = "Membri in attesa di approvazione";
	$Translation["view members awaiting approval"] = "Visualizza membri in attesa di approvazione";
	$Translation["banned members"] = "Membri bannati";
	$Translation["view banned members"] = "Visualizza membri bannati";
	$Translation["total members"] = "Totale membri";
	$Translation["view all members"] = "Visualizza tutti i membri";
	$Translation["BigProf tweets"]  = "Tweets By BigProf Software";
	$Translation["follow BigProf"] = "Follow @bigprof";
	$Translation["loading bigprof feed"] = "Loading @bigprof feed ...";
	$Translation["remove feed"] = "Rimuovi questo feed";
	
	//pageMail.php
	$Translation["can not send mail"] = "Non puoi inviare email attualmente. L'indirizzo email mittente configurato non è valido. Per favore <a href='pageSettings.php'>correggilo prima</a> quindi riprova.";
	$Translation["all groups"] = "Tutti i gruppi";
	$Translation["no recipient"] = "Impossibile trovare il destinatario. Assicurati di fornire un destinatario valido.";
	$Translation["invalid subject line"] = "Oggetto non valido.";
	$Translation["no recipient found"] = "Impossibile trovare alcun destinatario. Assicurati di fornire un destinatario valido.";
	$Translation["mail queue not saved"] = "Impossibile salvare la coda di posta. Si prega di assicurarsi che la directory '<CURRDIR>' sia scrivibile (chmod 755 or chmod 777).";
	$Translation["send mail"]  = "Invia un'email a membri/gruppi";
	$Translation["send mail to all members"] = "Stai inviando un'e-mail a tutti i membri. Ciò potrebbe richiedere molto tempo e influire sulle prestazioni del server. Se hai un numero enorme di membri, non è consigliabile inviare una e-mail a tutti in una volta.";
	$Translation["from"] = "Da";
	$Translation["change setting"] = "Modifica questa impostazione";
	$Translation["to"] = "A";
	$Translation["subject"] = "Oggetto";
	$Translation["message"] = "Messaggio";
	$Translation["send message"] = "Invia Messaggio";
	
	//pagePrintRecord.php
	$Translation["record details"] = "Gestione Membership -- Dettagli Record";
	$Translation['table name'] = "Tabella: <TABLENAME>";
	
	//pageRebuildFields.php
	$Translation['create or update table'] = "Un tentativo di <ACTION> il campo <i><FIELD></i> nella tabella <i><TABLE></i> è stato effettuato eseguendo questa query: <pre><QUERY></pre> I risultati sono mostrati di seguito.";
	$Translation['view or rebuild fields'] = "Visualizza/Rigenera Campi";
	$Translation['show deviations only'] = "Mostra solo le differenze";
	$Translation['show all fields'] = "Visualizza tutti i campi";
	$Translation['compare tables page'] = "Questa pagina confronta le tabelle e la struttura / lo schema dei campi come progettato in AppGini con la struttura del database effettivo e consente di correggere eventuali differenze.";
	$Translation['field'] = "Campo";
	$Translation['AppGini definition'] = "Tipologia campo in AppGini";
	$Translation['database definition'] = "Tipologia attuale campo nel Database";
	$Translation['table name title'] = "<TABLENAME> tabella";
	$Translation['does not exist'] = "Non esiste!";
	$Translation['create field'] = "Crea il campo eseguendo un 'ADD COLUMN' query.";
	$Translation['create it'] = "Crealo";
	$Translation['fix field'] = "Correggi il campo eseguendo un 'ALTER COLUMN' query in modo che la tipologia del campo sia uguale a quella in AppGini.";
	$Translation['fix it'] = "Correggilo";
	$Translation['field update warning'] = "PERICOLO!! In alcuni casi, ciò potrebbe comportare la perdita di dati, il troncamento o il danneggiamento. A volte potrebbe essere un'idea migliore aggiornare il campo in AppGini per farlo corrispondere al database. SEI CONVINTO DI CONTINUARE?";
	$Translation['no deviations found'] = "Nessuna differenza trovata. Tutti i campi sono OK!";
	$Translation['error fields'] = "Trovati <CREATENUM> campi non esistenti che devono essere creati.<br>Trovati <UPDATENUM> campi che differiscono dalla struttura del database definita in AppGini e che potrebbero essere aggiornati.";
	
	//pageRebuildThumbnails.php
	$Translation['rebuild thumbnails'] = "Ricostruisci miniature";
	$Translation['thumbnails utility'] = "Usa questa utility se hai uno o più campi immagine in una tabella che non hanno miniature o hanno miniature con dimensioni errate.";
	$Translation['rebuild thumbnails of table'] = "Ricostruisci le thumbnail della tabella";
	$Translation['rebuild'] = "Ricostruisci";
	$Translation['rebuild thumbnails of table_name'] = "Ricostruisco le miniature della tabella '<i><TABLENAME></i>' ...";
	$Translation['do not close page message'] = "Non chiudere questa pagina finché non viene visualizzato un messaggio di conferma che tutte le miniature sono state create.";	
	$Translation['rebuild thumbnails status'] = "Stato: ancora in fase di ricostruzione, attendere per favore ...";
	$Translation['building field thumbnails'] =  "Ricostruisco le miniature per il campo '<i><FIELD></i>' ...";
	$Translation['done'] = "Fatto.";
	$Translation['finished status'] = "Stato: finito. Puoi chiudere questa pagina ora.";
	
	//pageSender.php
	$Translation['invalid mail queue'] = "Coda di posta non valida.";
	$Translation['sending message failed'] = " -- Invio messaggio a '<EMAIL>': Fallito.";
	$Translation['sending message ok'] = " -- Invio messaggio a '<EMAIL>': Ok.";
	$Translation['done!'] = "Fatto!";
	$Translation['close page'] = "Puoi chiudere questa pagina ora o navigare in un'altra pagina.";
	$Translation['mail log'] = "Mail log:";
	
	//pageSettings.php
	$Translation['invalid security token'] = 'Token di sicurezza non valido! Per favore <a href="pageSettings.php">ricarica la pagina</a> e riprova.';
	$Translation['unique admin username error'] = "Il nuovo nome utente dell'amministratore è già in uso. Assicurati che il nuovo nome utente sia unico.";	
	$Translation['unique anonymous username error'] = 'Il nuovo nome utente anonimo è già in uso. Assicurati che l\'username fornito sia unico.';
	$Translation['unique anonymous group name error'] = 'Il nuovo nome di gruppo anonimo è già in uso. Assicurati che il nome del gruppo fornito sia unico.';
	$Translation['admin password mismatch'] = '"Password Amministratore" e "Password di Conferma" non corrispondono.';
	$Translation['invalid sender email'] = '"Email del mittente" non valida.';
	$Translation['errors occurred'] = "Si sono verificati i seguenti errori:";
	$Translation['go back'] = 'Per favore <a href="pageSettings.php" onclick="history.go(-1); return false;">torna indietro</a> per correggere gli errori sopra indicati e riprova.';
	$Translation['record updated automatically'] = "Record aggiornato automaticamente il <DATE>";
	$Translation['admin settings saved'] = "Impostazioni amministratore salvate correttamente.<br>Torna alle <a href=\"pageSettings.php\">impostazioni amministratore</a>.";
	$Translation['admin settings not saved'] = "Le impostazioni dell'amministratore NON sono state salvate correttamente. Errore: <ERROR><br>Torna alle <a href=\"pageSettings.php\" onclick=\"history.go(-1); return false;\">impostazioni amministratore</a>.";
	$Translation['show tool tips'] = 'Mostra i suggerimenti quando il mouse si sposta sulle opzioni';
	$Translation['admin username'] = "Username Amministratore";
	$Translation['admin password'] = "Password Amministratore";
	$Translation['change admin password'] = "Digita una password solamente se vuoi cambiare la password dell'amministratore.";
	$Translation['sender email'] = "Mittente Email";
	$Translation['sender name and email'] = "Il nome e l'Email del mittente vengono utilizzati nel campo 'DA' durante l'invio";
	$Translation['email messages'] = "di un messaggio a membri o gruppi.";
	$Translation['admin notifications'] = "Notifiche di Amministrazione";
	$Translation['no email notifications'] = "Nessuna email di notifica.";
	$Translation['member waiting approval'] = "Notifica l'amministratore solamente quando un nuovo membro è in attesa di approvazione.";
	$Translation['new sign-ups'] = "Notifica l'amministratore per tutte le nuove iscrizioni.";
	$Translation['sender name'] = "Nome mittente";
	$Translation['members custom field 1'] = "Campo personalizzato membri 1";
	$Translation['members custom field 2'] = "Campo personalizzato membri 2";
	$Translation['members custom field 3'] = "Campo personalizzato membri 3";
	$Translation['members custom field 4'] = "Campo personalizzato membri 4";
	$Translation['member approval email subject'] = "Approvazione membro<br>Oggetto Email";
	$Translation['member approval email subject control'] = "Quando l'amministratore approva un membro, il membro riceve una notifica Email.<br>Puoi controllare l'oggetto dell'Email di approvazione in questo campo e il contenuto nella casella sottostante.";
	$Translation['member approval email message'] = "Approvazione membro<br>Messaggio Email";
	$Translation['MySQL date'] = "Data MySQL<br>stringa di formattazione";
	$Translation['MySQL reference'] = 'Per favore leggi <a href="http://dev.mysql.com/doc/refman/5.0/en/date-and-time-functions.html#function_date-format" target="_blank">il riferimento MySQL</a> per i possibili formati.';
	$Translation['PHP short date'] = "Data corta PHP<br>stringa di formattazione";
	$Translation['PHP manual'] = 'Per favore leggi <a href="http://www.php.net/manual/en/function.date.php" target="_blank">il manuale PHP</a> per i possibili formati.'; 
	$Translation['PHP long date'] = "Data lunga PHP<br>stringa di formattazione";
	$Translation['groups per page'] = "Gruppi per pagina";
	$Translation['members per page'] = "Membri per pagina";
	$Translation['records per page'] = "Record per pagina";
	$Translation['default sign-up mode'] = "Modalità di registrazione predefinita<br>per nuovi gruppi";
	$Translation['no sign-up allowed'] = "Non è consentita l'iscrizione. Solo l'amministratore può aggiungere membri.";
	$Translation['admin approve members'] = "Iscrizione consentita. L'amministratore deve approvare i membri.";
	$Translation['automatically approve members'] = "Iscrizione consentita con approvazione automatica dei membri.";
	$Translation['anonymous group'] = "Nome del gruppo<br>anonimo";
	$Translation['anonymous user name'] = "Nome dell'utente<br>anonimo";
	$Translation['hide twitter feed'] = "Nascondi il feed Twitter nell'Homepage Amministrativa?";
	$Translation['twitter feed'] = "Il nostro feed Twitter ti aiuta a tenerti informato sulle nostre ultime notizie, risorse utili, nuove uscite e molti altri utili suggerimenti!";
	
	//pageTransferOwnership.php
	$Translation['invalid source member'] = "Il gruppo membri selezionato non è valido.";
	$Translation['invalid destination member'] = "Il membro di destinazione selezionato non è valido.";
	$Translation['moving member'] = "Muovi membro '<MEMBERID>' e i suoi dati dal gruppo '<SOURCEGROUP>' al gruppo '<DESTINATIONGROUP>' ...";
	$Translation['data records transferred'] = "Il membro '<MEMBERID>' ora appartiene al gruppo '<NEWGROUP>'. Record trasferiti: <DATARECORDS>.";
	$Translation['moving data'] = "Muovo i dati del membro '<SOURCEMEMBER>' del gruppo '<SOURCEGROUP>' al membro '<DESTINATIONMEMBER>' del gruppo '<DESTINATIONGROUP>' ...";
	$Translation['member records status'] = "Il membro '<SOURCEMEMBER>' del gruppo '<SOURCEGROUP>' ha <DATABEFORE> record. <TRANSFERSTATUS> al membro '<DESTINATIONMEMBER>' del gruppo '<DESTINATIONGROUP>'.";
	$Translation['moving all group members'] = "Muovo tutti i membri e i dati del gruppo '<SOURCEGROUP>' al gruppo '<DESTINATIONGROUP>' ...";
	$Translation['failed transferring group members'] = "Operazione fallita. Nessun membro è stato trasferito dal gruppo '<SOURCEGROUP>' al gruppo '<DESTINATIONGROUP>'.";
	$Translation['group members transferred'] = "Tutti i membri del gruppo '<SOURCEGROUP>' ora appartengono al gruppo '<DESTINATIONGROUP>'. ";
	$Translation['failed transfer data records'] = "Tuttavia non è stato possibile trasferire i record.";
	$Translation['data records were transferred'] = "<DATABEFORE> data trasferimento record.";
	$Translation['moving group data to member'] = "Spostamento dei dati di tutti i membri del gruppo '<SOURCEGROUP>' ai membri '<DESTINATIONMEMBER>' del gruppo '<DESTINATIONGROUP>' ...";
	$Translation['moving group data to member status'] = "<NUMBER> record sono stati trasferiti dal gruppo '<SOURCEGROUP>' al membro '<DESTINATIONMEMBER>' del gruppo '<DESTINATIONGROUP>'";
	$Translation['status'] = "STATO:";
	$Translation['batch transfer link'] = 'È possibile ripetere lo stesso trasferimento in un secondo momento <a href= "pageTransferOwnership.php?sourceGroupID=<SOURCEGROUP>&amp;sourceMemberID=<SOURCEMEMBER>&amp;destinationGroupID=<DESTINATIONGROUP>&amp;destinationMemberID=<DESTINATIONMEMBER>&amp;moveMembers=<MOVEMEMBERS>">inserisci nei preferiti o copia questo link</a>.';
	$Translation['ownership batch transfer'] = "Trasferimento Guidato di Proprietà";
	$Translation['step 1'] = "STEP 1:";
	$Translation['batch transfer wizard'] = "La procedura guidata di trasferimento consente di trasferire record di dati di uno o tutti i membri di un gruppo (il <i>gruppo di provenienza</i>) a un membro di un altro gruppo (il <i>membro di destinazione</i> del <i>gruppo di destinazione</i>)";
	$Translation['source group'] = "Gruppo di Provenienza";
	$Translation['update'] = "Aggiorna";
	$Translation['next step'] = "Prossimo Step";
	$Translation['group statistics'] = "Questo gruppo ha <MEMBERS> membri, e <RECORDS> record.";
	$Translation['step 2'] = "STEP 2:";
	$Translation['source member message'] = "Il membro di provenienza potrebbe essere un membro o tutti i membri del gruppo di provenienza.";
	$Translation['source member'] = "Membro di provenienza";
	$Translation['all group members'] = "Tutti i membri del gruppo '<GROUPNAME>'";
	$Translation['member statistics'] = "Questo membro ha <RECORDS> record.";
	$Translation['step 3'] = "STEP 3:";
	$Translation['destination group message'] = "Il gruppo di destinazione potrebbe essere uguale o diverso dal gruppo di origine. Solo i gruppi con membri sono elencati di seguito.";
	$Translation['destination group'] = "Gruppo di Destinazione";
	$Translation['step 4'] = "STEP 4:";
	$Translation['destination member message'] = "Il membro di destinazione diventerà il nuovo proprietario dei record del membro di provenienza.";
	$Translation['destination member'] = "Membro di Destinazione";
	$Translation['begin transfer'] = "Inizia il Trasferimento";	
	$Translation['move records'] = "È possibile spostare i record dal membro/i di provenienza a un membro nel gruppo di destinazione o spostare il membro/i di provenienza, insieme ai relativi record al gruppo di destinazione.";
	$Translation['move data records to member'] = "Sposta i record in questo membro:";
	$Translation['move source member to group'] = "Muovi il membro/i di provenienza e i suoi record nel gruppo '<GROUPNAME>'.";
	
	//pageUploadCSV.php
	$Translation['file not found error'] = "Errore: File '<FILENAME>' non trovato.";
	$Translation['preview and confirm CSV data'] = "Visualizza l'anteprima dei dati e POI conferma l'importazione ...";
	$Translation['display csv file rows'] = "Mostro le prime 10 righe del file CSV ...";
	$Translation['change CSV settings'] = 'Cambia le impostazioni del file CSV';
	$Translation['import CSV data'] = 'Conferma e Importa i dati &gt;';
	$Translation['apply CSV settings'] = 'Applica le Impostazioni del CSV';
	$Translation['importing CSV data'] = 'Importazione dei dati dal file CSV ...';
	$Translation['start at estimated record'] = "Dal record <RECORDNUMBER> al record <RECORDS> record totali stimati ...";
	$Translation['table backed up'] = "La tabella '<TABLE>' è stata salvata come '<TABLENAME>'.";
	$Translation['table backup not done'] = "La tabella '<TABLE>' è vuota, quindi non è stato fatto nessun backup.";
	$Translation['importing batch'] = 'Importazione batch <BATCH> di <BATCHNUM>: ';
	$Translation['ok'] = 'Ok';
	$Translation['records inserted or updated successfully'] = "<RECORDS> record inseriti/aggiornati in <SECONDS> secondi.";
	$Translation['mission accomplished'] = "Missione compiuta!";
	$Translation['assign a records owner'] = "Assegna un proprietario ai record importati &gt;";
	$Translation['please wait and do not close'] = "Si prega di attendere e non chiudere questa pagina ...";
	$Translation['hide advanced options'] = "Nascondi opzioni avanzate";
	$Translation['show advanced options'] = "Visualizza opzioni avanzate";
	$Translation['import CSV to database'] = "Importa un file CSV nel database";
	$Translation['import CSV to database page'] = "Questa pagina consente di caricare un file CSV (ad esempio generato da MS Excel) e importarlo in una delle tabelle del database. Ciò semplifica la compilazione in blocco del database con i dati di altre origini anziché l'inserimento manuale di ogni singolo record.";
	$Translation['populate table from CSV'] = "Questa è la tabella che vuoi popolare con i dati del file CSV.";
	$Translation['CSV file'] = "File CSV";
	$Translation['preview CSV data'] = "Anteprima dati file CSV &gt;";
	$Translation['no table name provided'] = "Nessun nome di tabella fornito.";
	$Translation['can not open CSV'] = "Non posso aprire il file CSV '<FILENAME>'.";
	$Translation['empty CSV file'] = "Il file CSV '<FILENAME>' è vuoto.";		
	$Translation['no CSV file data'] = "Il file CSV '<FILENAME>' non ha dati da leggere." ;
	$Translation['field separator'] = "Separatore di campo";
	$Translation['default comma'] = "Il valore predefinito è la virgola (,)";
	$Translation['field delimiter'] = "Delimitatore di campo";
	$Translation['default double-quote'] = 'Il valore predefinito è double-quote (")';
	$Translation['maximum characters per line'] = "Numero massimo di caratteri per riga";
	$Translation['trouble importing CSV'] = "Se riscontri problemi nell'importazione del file CSV, prova ad aumentare questo valore.";
	$Translation['ignore lines number'] = "Numero di righe da ignorare";
	$Translation['skip lines number'] = "Modificare questo valore se si desidera saltare un numero specifico di righe nel file CSV.";
	$Translation['first line field names'] = "La prima riga del file contiene i nomi dei campi";
	$Translation['field names must match'] = "I nomi dei campi devono <b>esattamente</b> essere uguali a quelli nel database.";
	$Translation['update table records'] = "Aggiorna il record nella tabella se la sua chiave primaria è uguale a quella nel file CSV.";
	$Translation['ignore CSV table records'] = "Se non selezionato, i record nel file CSV che hanno la stessa chiave primaria nella tabella del database <b>saranno ignorati</b>";
	$Translation['back up the table'] = "Effettua un salvataggio della tabella prima di importare i dati dal file CSV.";
	
	//pageViewGroups.php
	$Translation['no matching results found'] = "Nessun risultato corrispondente trovato.";
	$Translation['search groups'] = "Cerca gruppi";
	$Translation['find'] = "Cerca";
	$Translation['reset'] = "Reset";
	$Translation['members count'] = "Numero Membri";
	$Translation['Edit group'] = "Modifica gruppo";
	$Translation['confirm delete group'] = "Sei sicuro di voler eliminare completamente questo gruppo?";
	$Translation['delete group'] = "Elimina gruppo";
	$Translation['view group records'] = "Visualizza i record del gruppo";
	$Translation['view group members'] = "Visualizza i membri del gruppo";
	$Translation['send message to group'] = "Invia un'Email al gruppo";
	$Translation['previous'] = "Precedente";
	$Translation['displaying groups'] = "Visualizzo <GROUPNUM1> di <GROUPNUM2> gruppi su <GROUPS>";
	$Translation['next'] = "Successiva";
	$Translation['key'] = "Legenda:";	
	$Translation['edit group details'] = "Modifica dettagli gruppo e permessi.";
	$Translation['add member to group'] = "Aggiungi un membro al gruppo.";
	$Translation['view data records'] = "Visualizza tutti i record inseriti dai membri del gruppo.";
	$Translation['list group members'] = "Visualizza tutti i membri del gruppo.";
	$Translation['send email to all members'] = "Invia un'Email a tutti i membri del gruppo.";
	
	//pageViewMembers.php
	$Translation['search members'] = "Cerca membro/i <SEARCH> in <HTMLSELECT>";
	$Translation['all fields'] = "Tutti i campi";
	$Translation['any'] = "Qualunque";
	$Translation['waiting approval'] = "In attesa di approvazione";
	$Translation['active'] = "Attivo";
	$Translation['Banned'] = "Bannato";
	$Translation['username'] = "Username";
	$Translation['sign up date'] = "Data registrazione";
	$Translation['Status'] = "Stato";
	$Translation['Edit member'] = "Modifica membro";	
	$Translation['sure delete user'] = "Sei sicuro di voler eliminare il membro \'<USERNAME>\'?";
	$Translation['delete member'] = "Elimina membro";
	$Translation["approve this member"] = "Approva questo membro";
	$Translation["unban this member"] = "Rimuovi Ban da questo membro";
	$Translation["ban this member"] = "Banna questo membro";
	$Translation["View member records"] = "Visualizza i record del membro";
	$Translation["send message to member"] = "Invia un'Email al membro";
	$Translation['displaying members'] = "Visualizzo <MEMBERNUM1> di <MEMBERNUM2> membri su <MEMBERS>";
	$Translation['activate member'] = "Attiva un membro nuovo/bannato.";
	$Translation['ban member'] = "Banna (sospendi) membro.";
	$Translation['view entered member records'] = "Visualizza tutti i record inseriti dal membro.";
	$Translation['send email to member'] = "Invia un'Email al membro.";
	
	//pageViewRecords.php
	$Translation['data records'] = "Dati Record";
	$Translation['show records'] = "Visualizza record da";
	$Translation['all tables'] = "Tutte le tabelle";
	$Translation['sort records'] = "Ordina i record per";
	$Translation['date created'] = "Data creazione";
	$Translation['date modified'] = "Data modifica";
	$Translation['newer first'] = "Nuovi prima";
	$Translation['older first'] = "Vecchi prima";
	$Translation['created'] = "Creato";
	$Translation['modified'] = "Modificato";
	$Translation['data'] = "Dati";
	$Translation['change record ownership'] = "Cambia la proprietà di questo record";
	$Translation['sure delete record'] = "Sei sicuro di voler eliminare questo record?";
	$Translation['delete record'] = "Elimina questo record";
	$Translation['displaying records'] = "Visualizzo <RECORDNUM1> di <RECORDNUM2> record su <RECORDS>";

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'La modalità di manutenzione è abilitata! Puoi disabilitarlo dalla Homepage Amministrativa.';
	$Translation['maintenance mode message'] = 'Messaggio modalità manutenzione';
	$Translation['maintenance mode'] = 'Modalità Manutenzione';
	$Translation['OFF'] = 'OFF';
	$Translation['ON'] = 'ON';
	$Translation['enable maintenance mode?'] = 'Sei sicuro di voler abilitare la modalità di manutenzione? Solo gli utenti amministratori possono accedere al sito in questa modalità!';
	$Translation['disable maintenance mode?'] = 'Sei sicuro di voler disabilitare la modalità di manutenzione? Tutti gli utenti saranno in grado di accedere al sito!';
	
	/* Added in AppGini 5.60 */
	$Translation['csv file upload error'] = 'Si è verificato un errore durante l\'elaborazione del file CSV.';
	$Translation['back and retry'] = 'Torna indietro e riprova';
	$Translation['upload or choose csv file'] = 'Carica un file CSV o aprine uno esistente';
	$Translation['choose csv upload'] = 'Scegli un file CSV da caricare';
	$Translation['no file chosen yet'] = 'Nessun file ancora scelto';
	$Translation['start upload'] = 'Inizia il caricamento';
	$Translation['select a table'] = 'Seleziona una tabella';
	$Translation['error reading csv data'] = 'Si è verificato un errore durante la lettura del file CSV. Prova a ripristinare/modificare le impostazioni CSV.';
	$Translation['belongs to'] = 'Appartiene a';
	$Translation['skip column'] = 'Salta questa colonna';
	$Translation['connection failed retrying'] = 'Connessione fallita. Nuovo tentativo in <SECONDS> secondi ...';
	$Translation['connection failed timeout'] = 'Connessione Scaduta. Riprovare più tardi.';
	$Translation['sure delete csv'] = 'Sei sicuro di voler eliminare il file CSV [CSVFILE] dal server?';
	$Translation['invalid csv file selected'] = 'File non valido. Deve essere un file CSV.';
	$Translation['couldnt delete csv file'] = 'Non posso eliminare questo file CSV.';
	$Translation['error backing up table'] = 'Errore: Non posso salvare la tabella <TABLE>.';
	$Translation['no columns selected'] = 'Seleziona almeno una colonna da importare e assicurati che ogni colonna selezionata appartenga a un UNICO campo.';
	$Translation['csrf token expired or invalid'] = 'Ops! Qualcosa è andato storto in questa pagina. Per favore, torna indietro e riprova.';
	$Translation['back to groups'] = 'Torna ai gruppi';
	$Translation['member updated'] = "Membro <USERNAME> aggiornato correttamente";
	$Translation['fix errors before submitting'] = 'Correggi gli errori evidenziati prima di salvare/aggiornare la pagina!';

	/* Added in AppGini 5.62 */
	$Translation['mail_function'] = 'Metodo di invio Email';
	$Translation['smtp_server'] = 'SMTP server';
	$Translation['smtp_encryption'] = 'SMTP encryption';
	$Translation['smtp_port'] = 'SMTP port';
	$Translation['smtp_port_hint'] = 'Normalmente la porta 25 (in assenza di crittografia), la 465 (usata in molti casi con SSL) o la 587 (solitamente con la crittografia TLS)';
	$Translation['smtp_user'] = 'SMTP username';
	$Translation['smtp_pass'] = 'SMTP password';
	$Translation['configure mail settings'] = 'Configura le impostazioni della posta';
	$Translation['display debugging info'] = 'Visualizza informazioni di debug';
	$Translation['debugging info hint'] = 'Le informazioni di debug sono utili se si riscontrano problemi nell\'invio di Email attraverso il server SMTP configurato';

	/* Added in AppGini 5.70 */
	$Translation['create backup file'] = 'Crea File di Backup';
	$Translation['database backups'] = 'Database backup';
	$Translation['no backups found'] = 'Nessun backup trovato. È possibile creare un nuovo backup facendo clic sul pulsante "Crea file di backup".';
	$Translation['available backups'] = 'Backup disponibili';
	$Translation['restore backup'] = 'Ripristina';
	$Translation['delete backup'] = 'Elimina';
	$Translation['backup restored'] = 'Backup ripristinato con successo.';
	$Translation['backup deleted'] = 'Backup eliminato con successo.';
	$Translation['restore error'] = 'Si è verificato un errore durante il ripristino del backup.';
	$Translation['backup delete error'] = 'Si è verificato un errore durante l\'eliminazione del backup.';
	$Translation['confirm delete backup'] = 'Sei sicuro di voler eliminare questo file di backup?';
	$Translation['confirm restore'] = 'Il ripristino del database da un file di backup SOVRASCRIVERÀ tutti i dati E gli utenti, riportando tutto alla data in cui è stato effettuato il backup scelto.\n\nDurante il processo di ripristino verrà abilitata la modalità di manutenzione per prevenire modifiche del database da parte degli utenti. Verrà disattivata al termine del ripristino.\n\nSei SICURO di voler continuare?';
	$Translation['confirm backup'] = 'Durante il processo di backup, la modalità di manutenzione verrà abilitata per impedire agli utenti di modificare il database e verrà disabilitata una volta terminato il backup.\n\nSei sicuro di voler continuare?';
	$Translation['cant create backup folder'] = 'Errore: Non posso creare o scrivere nella cartella admin/backups. Controlla le autorizzazioni e la proprietà della cartella o contatta l\'amministratore del server per assistenza.';
	$Translation['fix all'] = 'CORREGGI TUTTI I CAMPI';
	$Translation['backup before fix'] = 'Si consiglia vivamente di creare un backup del database prima di tentare di apportare eventuali correzioni.';
	$Translation['about backups'] = 'I backup vengono eseguiti utilizzando lo strumento della riga di comando mysqldump. Se non vengono creati backup, potrebbe essere dovuto al fatto che il server Web non dispone dell\'autorizzazione per eseguire mysqldump.';