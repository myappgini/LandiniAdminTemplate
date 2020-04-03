<?php

	// ITALIAN v.5.72:
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

		

	// datalist.php
	$Translation["powered by"] = "Powered by";
	$Translation["quick search"] = "Ricerca Rapida";
	$Translation["records x to y of z"] = "Record da <FirstRecord> a <LastRecord> di <RecordCount>";
	$Translation["filters"] = "Filtri";
	$Translation["filter"] = "Filtro";
	$Translation["filtered field"] = "Campo Filtrato";
	$Translation["comparison operator"] = "Operatore di Confronto";
	$Translation["comparison value"] = "Valore di Confronto";
	$Translation["and"] = "E";
	$Translation["or"] = "Oppure";
	$Translation["equal to"] = "Uguale a";
	$Translation["not equal to"] = "Diverso da";
	$Translation["greater than"] = "Maggiore di";
	$Translation["greater than or equal to"] = "Maggiore o uguale a";
	$Translation["less than"] = "Minore di";
	$Translation["less than or equal to"] = "Minore o uguale a";
	$Translation["like"] = "Simile a";
	$Translation["not like"] = "Non simile a";
	$Translation["is empty"] = "E' vuoto";
	$Translation["is not empty"] = "Non è vuoto";
	$Translation["apply filters"] = "Applica i filtri";
	$Translation["save filters"] = "Salva ed applica i filtri";
	$Translation["saved filters title"] = "Codice HTML per i filtri applicati";
	$Translation["saved filters instructions"] = "Copia il codice sottostante ed incollalo in un file HTML per salvare il filtro appena definito, in modo da poterlo recuperare in un secondo momento senza doverlo definire nuovamente. Puoi salvare questo codice HTML sul tuo computer o su qualsiasi altro server, utilizzandolo per accedere direttamente a questa vista.";
	$Translation["hide code"] = "Nascondi il codice";
	$Translation["printer friendly view"] = "Versione per la stampa";
	$Translation["save as csv"] = "Scarica come file CSV (valori separati da virgola)";
	$Translation["edit filters"] = "Edita filtri";
	$Translation["clear filters"] = "Annulla filtri";
	$Translation['order by'] = 'Ordina per';
	$Translation['go to page'] = 'Vai alla pagina:';
	$Translation['none'] = 'Nulla';
	$Translation['Select all records'] = 'Seleziona Tutto';
	$Translation['With selected records'] = 'Con records selezionati';
	$Translation['Print Preview Detail View'] = 'Anteprima Vista Dettagliata';
	$Translation['Print Preview Table View'] = 'Anteprima Vista Tabella';
	$Translation['Print'] = 'Stampa';
	$Translation['Cancel Printing'] = 'Cancella Stampa';
	$Translation['Cancel Selection'] = 'Cancella Selezione';
	$Translation['Maximum records allowed to enable this feature is'] = 'Numero massimo di records permessi per abilitare questa funzione è';
	$Translation['No matches found!'] = 'Nessun Record Trovato!';
	$Translation['Start typing to get suggestions'] = 'Inizia a digitare per ottenere il suggerimento.';
	
	// _dml.php
	$Translation["are you sure?"] = "Sei sicuro di voler cancellare questo record?";
	$Translation["add new record"] = "Aggiungi un nuovo record";
	$Translation["update record"] = "Aggiorna il record";
	$Translation["delete record"] = "Cancella il record";
	$Translation["deselect record"] = "Deseleziona il record";
	$Translation["couldn't delete"] = "Impossibile cancellare il record per la presenza di <RelatedRecords> record correlato/i nella tabella '<TableName>'";
	$Translation["confirm delete"] = "Questo elemento ha <RelatedRecords> record correlato/i nella tabella '<TableName>'. Sei ancora sicuro di volerlo cancellare? <Delete> &nbsp; <Cancel>";
	$Translation["yes"] = "Sì";
	$Translation["no"] = "No";
	$Translation["pkfield empty"] = " Il campo è una chiave primaria e non può essere vuoto.";
	$Translation["upload image"] = "Carica una nuova immagine ";
	$Translation["select image"] = "Seleziona un'immagine ";
	$Translation["remove image"] = "Rimuovi immagine";
	$Translation["month names"] = "Gennaio,Febbraio,Marzo,Aprile,Maggio,Giugno,Luglio,Agosto,Settembre,Ottobre,Novembre,Dicembre";
	$Translation["field not null"] = "Non è possibile lasciare questo campo vuoto.";
	$Translation["*"] = "*";
	$Translation['today'] = "Oggi";
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Premi con il tasto CTRL per selezionare più elementi dalla lista sopra.';
	$Translation['Save New'] = 'Salva Nuovo';
	$Translation['Save As Copy'] = 'Salva Copia';
	$Translation['Deselect'] = 'Cancella';
	$Translation['Add New'] = 'Nuovo Record';
	$Translation['Delete'] = 'Cancella';
	$Translation['Cancel'] = 'Annulla';
	$Translation['Print Preview'] = 'Anteprima';
	$Translation['Print'] = 'Stampa';
	$Translation['Save Changes'] = 'Aggiorna Record';
	$Translation['CSV'] = 'Salva CSV';
	$Translation['Reset Filters'] = 'Mostra Tutto';
	$Translation['Find It'] = 'Trova';
	$Translation['Previous'] = 'Precedente';
	$Translation['Next'] = 'Successivo';
	$Translation['Back'] = 'Indietro';
	
	// lib.php
	$Translation["select a table"] = "Vai a:";
	$Translation["homepage"] = "Homepage";
	$Translation["error:"] = "Errore:";
	$Translation["sql error:"] = "Errore SQL:";
	$Translation["query:"] = "Query:";
	$Translation["< back"] = "&lt; Indietro";
	$Translation["if you haven't set up"] = "Se non hai ancora configurato il database, puoi farlo adesso cliccando <a href='setup.php'>qui</a>.";
	$Translation['file too large']="Errore: Il file che hai caricato supera la dimensione massima consentita di <MaxSize> KB";
	$Translation['invalid file type']="Errore: Questo formato di file non è supportato. Possono essere caricati unicamente file in formato <FileTypes>";
	
	
	// setup.php
	$Translation["goto start page"] = "Torna alla pagina iniziale";
	$Translation["no db connection"] = "Impossibile stabilire una connessione con il database.";
	$Translation["no db name"] = "Impossibile accedere al database '<DBName>' su questo server.";
	$Translation["provide connection data"] = "Inserire per favore i seguenti dati per connettersi al database:";
	$Translation["mysql server"] = "Server MySQL (host)";
	$Translation["mysql username"] = "Username MySQL";
	$Translation["mysql password"] = "Password MySQL";
	$Translation["mysql db"] = "Nome del database";
	$Translation["connect"] = "Connetti";
	$Translation["couldnt save config"] = "Impossibile salvare le impostazioni di connessione nel file 'config.php'.<br>Assicurarsi che sulla directory:<br>'".dirname(__FILE__)."'<br>vi siano i diritti in scrittura (chmod 775 o chmod 777).";
	$Translation["setup performed"] = "Setup già eseguito su";
	$Translation["delete md5"] = "Se vuoi forzare nuovamente l'esecuzione del setup, devi prima cancellare il file 'setup.md5' da questa directory.";
	$Translation["table exists"] = "La tabella <b><TableName></b> esiste e contiene <NumRecords> record.";
	$Translation["failed"] = "Fallito";
	$Translation["ok"] = "Ok";
	$Translation["mysql said"] = "MySQL dice:";
	$Translation["table uptodate"] = "La tabella è aggiornata.";
	$Translation["couldnt count"] = "Impossibile conteggiare i record della tabella <b><TableName></b>";
	$Translation["creating table"] = "Creazione della tabella <b><TableName></b> in corso... ";
	
	// separateDVTV.php
	$Translation['please wait'] = "Attendere prego";
	
	// _view.php
	$Translation['tableAccessDenied']="Spiacente! Non hai le autorizzazioni necessarie per accedere a questa tabella. Si prega di contattare l'amministratore.";
	
	// incCommon.php
	$Translation['not signed in']="Non hai ancora effettuato il log-in";
	$Translation['sign in']="Entra";
	$Translation['signed as']="Loggato come";
	$Translation['sign out']="Disconnetti";
	$Translation['admin setup needed']="La configurazione dell'utenza amministrativa non è stata ancora effettuata. Accedi per favore al <a href=admin/>Pannello di Controllo dell'Amministratore</a> per eseguire il Setup.";
	$Translation['db setup needed']="La configurazione del sistema non è stata ancora effettuata. Accedi per favore alla <a href=setup.php>Pagina di Configurazione</a> per eseguirla.";
	$Translation['new record saved']="Il nuovo record è stato salvato con successo.";
	$Translation['record updated']="I cambiamenti sono stati salvati con successo.";
	
	// index.php
	$Translation['admin area']="Area amministrativa";
	$Translation['login failed']="Tentativo di login fallito. Prova di nuovo.";
	$Translation['sign in here']="Accedi";
	$Translation['username']="Username";
	$Translation['password']="Password";
	$Translation['go to signup']="Non ti sei ancora registrato? <br>&nbsp; <a href=membership_signup.php>Iscriviti</a>";
	$Translation['forgot password']="Hai dimenticato la password? <a href=membership_passwordReset.php>Clicca qui</a>";
	$Translation['browse as guest']="O <a href=index.php>clicca qui</a> per continuare <br>&nbsp; a navigare come Ospite.";
	$Translation['no table access']="Non hai i permessi necessari per accedere a questa pagina. Effettuare prima il log-in.";
	$Translation['signup']="Registrati";
	$Translation['remember me']="Ricordami";

	// checkMemberID.php
	$Translation['user already exists']="Username '<MemberID>' già esistente. Prova un altro Username.";
	$Translation['user available']="Username '<MemberID>' disponibile ed utilizzabile.";
	$Translation['empty user']="Inserire uno username nella casella e premere il tasto 'Verifica disponibilità'.";

	// membership_thankyou.php
	$Translation['thanks']="Grazie per esserti registrato!";
	$Translation['sign in no approval']="Se hai scelto un gruppo che non richiede l'approvazione da parte di un Amministratore, puoi accedere fin da subito <a href=index.php?signIn=1>cliccando qui</a>.";
	$Translation['sign in wait approval']="Se hai scelto un gruppo che richiede l'approvazione da parte di un Amministratore, attendi per favore un email di conferma dell'avvenuta autorizzazione.";
		
	// membership_signup.php
	$Translation['username empty']="Devi fornire uno username. Torna per favore indietro ed inserisci uno username";
	$Translation['password invalid']="La password deve essere di almeno 4 caratteri (senza spazi). Torna per favore indietro ed inserisci una password valida";
	$Translation['password no match']="La password inserita non è esatta. Torna per favore indietro e correggi la password";
	$Translation['username exists']="Username già esistente. Torna per favore indietro e scegli uno username differente.";
	$Translation['email invalid']="Indirizzo email non valido. Torna per favore indietro e correggi il tuo indirizzo di posta.";
	$Translation['group invalid']="Gruppo non valido. Torna per favore indietro e correggi la selezione del gruppo.";
	$Translation['sign up here']="Iscriviti qui!";
	$Translation['registered? sign in']="Sei già registrato? <a href=index.php?signIn=1>Accedi da qui</a>.";
	$Translation['sign up disabled']="Spiacente! Le iscrizioni sono temporaneamente chiuse. Riprovare in un secondo momento.";
	$Translation['check availability']="Verifica se lo username è disponibile";
	$Translation['confirm password']="Conferma la password";
	$Translation['email']="Indirizzo email";
	$Translation['group']="Gruppo";
	$Translation['groups *']="Se scegli di iscriverti in un gruppo contrassegnato da asterisco (*), non potrai accedere fino a quando un amministratore non avrà approvato la tua iscrizione. Riceverai un'email di conferma non appena l'iscrizione sarà approvata.";
	$Translation['sign up']="Iscriviti";
	
	// membership_passwordReset.php
	$Translation['password reset']="Pagina per il reset della password";
	$Translation['password reset details']="Inserisci il tuo username o il tuo indirizzo di posta nella casella sottostante. Ti sarà inviato via email un link su cui potrai cliccare per accedere alla pagina per la modifica della password.";
	$Translation['password reset subject']="Istruzioni per il reset della password";
	$Translation['password reset message']="Gentile utente, \n Se hai fatto richiesta di reset/cambio della tua password, clicca per favore sul seguente link: \n <ResetLink> \n\n Se non sei stato tu a richiedere il reset/cambio della password, ignora cortesemente questo messaggio. \n\n Saluti.";
	$Translation['password reset ready']="Ti è stata inviata all'indirizzo di posta con cui ti sei registrato un'email con le istruzioni per il reset della password. Sei pregato di tenere aperta questa finestra del browser e di seguire le istruzioni contenute nel messaggio spedito<br><br>Se entro 5 minuti non avrai ancora ricevuto l'email, prova a ripetere la procedura per il reset della password, assicurandoti di aver inserito lo username e l'indirizzo di porta corretti.";
	$Translation['password reset invalid']="Chiave non valida. <a href=membership_passwordReset.php>Prova ancora</a>, o <a href=index.php>torna alla homepage</a>.";
	$Translation['password change']="Pagina per il cambio della password";
	$Translation['new password']="Nuova password";
	$Translation['password reset done']="La tua password è stata modificata con successo. Ora puoi <a href=index.php?signOut=1>accedere qui con la nuova password</a>.";
	
	$Translation['Loading ...']='Sto Caricando ...';
	$Translation['No records found']='Nessun Record Trovato';
	$Translation['You can add children records after saving the main record first']='Puoi aggiungere record figli solo dopo aver salvato il record principale';

	$Translation['ascending'] = 'Ascendente';
	$Translation['descending'] = 'Discendente';
	$Translation['then by'] = 'e dopo';

	// membership_profile
	$Translation['Legend'] = 'Legenda';
	$Translation['Table'] = 'Tabella';
	$Translation['Edit'] = 'Edita';
	$Translation['View'] = 'Vista';
	$Translation['Only your own records'] = 'Solo i records proprietari';
	$Translation['All records owned by your group'] = 'Tutti i record del gruppo';
	$Translation['All records'] = 'Tutti i records';
	$Translation['Not allowed'] = 'Non permesso';
	$Translation['Your info'] = 'Le tue info';
	$Translation['Hello user'] = 'Ciao %s!';
	$Translation['Your access permissions'] = 'I tuoi dati di accesso';
	$Translation['Update profile'] = 'Aggiorna profilo';
	$Translation['Update password'] = 'Aggiorna password';
	$Translation['Change your password'] = 'Cambia password';
	$Translation['Old password'] = 'Vecchia Password';
	$Translation['Password strength: weak'] = 'Sicurezza password: Debole';
	$Translation['Password strength: good'] = 'Sicurezza password: Buona';
	$Translation['Password strength: strong'] = 'Sicurezza password: Ottima';
	$Translation['Wrong password'] = 'Password errata';
	$Translation['Your profile was updated successfully'] = 'Profilo aggiornato con successo';
	$Translation['Your password was changed successfully'] = 'Password cambiata con successo';
	$Translation['Your IP address'] = 'Il tuo indirizzo IP';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Records da visualizzare';

 	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Dati per la Configurazione';
	$Translation['Database Information'] = 'Informazioni sul Database';
	$Translation['Admin Information'] = 'Informazioni Amministratore';
	$Translation['setup intro 1'] = 'Il file di configurazione necessario per permettere all\'applicazione di lavorare non è stato trovato.<br><br>Questa pagina di configurazione ti aiuterà a crearlo ma, in alcune configurazioni del server potrebbe non funzionare correttamente. In questo caso potrebbe essere necessaria una modfica dei permessi per le cartelle o la creazione manuale del file.';
	$Translation['setup intro 2'] = 'Benvenuto nella tua nuova applicazione Appgini! Prima di iniziare abbiamo bisogno di alcune informazioni circa il tuo database. Devi essere a conoscenza dei seguenti dati per proseguire:<ol><li>Indirizzo del Database Server (host)</li><li>Nome del Database</li><li>Database Username</li><li>Database Password</li></ol> Gli elementi sopraindicati sono stati forniti dal tuo provider di web hosting. Se non disponete di questi dati sarà necessario contattare il vostro fornitore di servizi o fare riferimento alla loro documentazione prima di proseguire. Se sei pronto possiamo iniziare!';
	$Translation['setup finished'] = '<b>Operazione terminata con successo!</b><br><br>La tua applicazione Appgini è stata installata. Di seguito alcuni suggerimento per l\'utilizzo:';
	$Translation['setup next 1'] = 'Inizia ad utilizzare l\'applicazione per caricare dati, o lavora su dati esistenti.';
	$Translation['setup next 2'] = 'Importa dati esistenti nell\'applicazione da un file CSV.';
	$Translation['setup next 3'] = 'Vai alla pagina di amministrazione dopo puoi modificare molte altre impostazione dell\'applicazione.';
	$Translation['db_name help'] = 'Il nome del Database sul quale desideri che l\'applicazione Appgini lavori.';
	$Translation['db_server help'] = '<i>localhost</i> funziona in molti casi. In caso contrario è necessario richiedere tale parametro al proprio provider di web hosting.';
	$Translation['db_username help'] = 'Il tuo nome utente per MySQL';
	$Translation['db_password help'] = 'La tua password per MySQL';
	$Translation['username help'] = 'Specifica il nome utente che desideri utilizzare per accedere all\'area amministrativa. Deve essere quattro caratteri o più.';
	$Translation['password help'] = 'Specifica una password robusta per accedere all\'area amministrativa.';
	$Translation['email help'] = 'Inserisci l\'indirizzo email che desideri utilizzare per ricevere le notifiche.';
	$Translation['Continue'] = 'Continua ...';
	$Translation['Lets go'] = 'Andiamo!';
	$Translation['Submit'] = 'Invia';
	$Translation['Hide'] = 'Nascondi Aiuto';
	$Translation['Database info is correct'] = '&#10003; Le informazioni sul database sono corrette!';
	$Translation['Database connection error'] = '&#10007; Errore di connessione al database!';
	$Translation['The following errors occured'] = 'Sono stati rilevati i seguenti errori:';
	$Translation['failed to create config instructions'] = 'Questo è molto probabilmente causato dalle autorizzazioni delle cartelle che sono impostate per evitare la creazione di file nel vostro web server. Non preoccuparti! È comunque possibile creare il file di configurazione manualmente. <br> Basta incollare il seguente codice in un editor di testo e salvare il file come "config.php", poi caricarlo tramite FTP o qualsiasi altro metodo nella cartella %s sul vostro server.';
	$Translation['Only show records having filterer'] = 'Mostra solo i record dove %s è "%s"';

    /* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'Non hai abbastanza permessi per eliminare questo record';
	$Translation['Couldn\'t delete this record'] = 'Non puoi eliminare questo record';
	$Translation['The record has been deleted successfully'] = 'Il record è stato eliminato correttamente';
	$Translation['Couldn\'t save changes to the record'] = 'Non posso salvare i cambiamenti al record';
	$Translation['Couldn\'t save the new record'] = 'Non posso salvare il nuovo record';
	
	/* Added in AppGini 5.30 */
	$Translation['More'] = 'Altro';
	$Translation['Confirm deleting multiple records'] = 'Conferma per eliminare più record';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> record verra/nno eliminati. Sei sicuro di voler procedere?';
	$Translation['Yes, delete them!'] = 'Sì, eliminali!';
	$Translation['No, keep them.'] = 'No, mantienili!';
	$Translation['Deleting record <i> of <n>'] = 'Elimino record <i> di <n>';
	$Translation['Delete progress'] = 'Eliminazione in corso';
	$Translation['Show/hide details'] = 'Mostra/Nascondi dettagli';
	$Translation['Connection error'] = 'Errore di connessione!';
	$Translation['Add more actions'] = 'Aggiungi più azioni';
	$Translation['Update progress'] = 'Aggiornamento in corso';
	$Translation['Change owner'] = 'Cambia proprietario';
	$Translation['Updating record <i> of <n>'] = 'Aggiorno record <i> di <n>';
	$Translation['Change owner of <n> selected records to'] = 'Cambia proprietario di <n> record';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Errore: Username già esistente o non valido. Assicurati di inserire un username da 4 a 20 caratteri validi.';
	$Translation['permalink'] = 'Permalink';
	$Translation['invalid provider'] = 'Provider non valido!';
	$Translation['invalid url'] = 'URL non valido!';
	$Translation['cant retrieve coordinates from url'] = 'Non riesco a recuperare le coordinate dall\'URL!';	

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'La modalità di manutenzione è abilitata! È necessario disabilitarlo nell\'area Amministratore per consentire ai visitatori di visualizzare questa pagina.';
	$Translation['unique field error'] = 'Questo valore esiste già o non è valido. Si prega di fornire un valore unico e valido!';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Visualizza tutti i record utente dalla tabella "<tablename>"';
	$Translation['show all group records from table'] = 'Visualizza tutti i record gruppo dalla tabella "<tablename>"';
	$Translation['email this user'] = 'Invia un\'email a questo utente.';
	$Translation['email this group'] = 'Invia un\'email a questo gruppo.';
	$Translation['owner'] = 'Proprietario';
	$Translation['created'] = 'Creato:';
	$Translation['last modified'] = 'Ultima modifica:';
	$Translation['record has no owner'] = 'Questo record non ha un proprietario.';
	$Translation['admin-only info'] = 'Queste informazioni vengono visualizzate perché hai effettuato l\'accesso come super amministratore. Gli altri utenti non le visualizzano.';
	$Translation['discard changes confirm'] = 'Sei sicuro di voler rimuovere le modifiche?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Nascondi/Mostra colonne';
	$Translation['next column'] = 'Colonna sucessiva';
	$Translation['previous column'] = 'Colonna precedente';

	/* Added in AppGini 5.72 */
	$Translation['hide all'] = 'Nascondi tutto';
	$Translation['toggle'] = 'Toggle';