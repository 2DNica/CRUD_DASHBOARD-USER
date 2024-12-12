# CRUD Dashboard User Table Date

Un sito web sviluppato utilizzando PHP, Bootstrap, JavaScript e HTML. Questo progetto offre un'interfaccia user-friendly che permette agli utenti di gestire dati utente tramite operazioni CRUD (Create, Read, Update, Delete). Utilizzando phpMyAdmin per la gestione del database, il sito assicura un'archiviazione sicura e organizzata dei dati.

## Descrizione

Questo progetto di sito web include funzionalità come la visualizzazione di dati utente in una tabella, la possibilità di aggiungere nuovi utenti, modificare i dati esistenti e cancellare utenti. L'interfaccia moderna e reattiva, resa possibile da Bootstrap, garantisce un'esperienza utente ottimale sia su dispositivi desktop che mobili.

## Tecnologie Utilizzate

- **PHP**
- **Bootstrap**
- **JavaScript**
- **HTML**
- **phpMyAdmin** (per la gestione del database)
- **cPanel** (per la gestione del server durante lo stage)
- **XAMPP** (per la gestione del server in locale)

## Implementazioni del Login

In questo progetto, sono state create due diverse implementazioni del sistema di login:

1. **Implementazione con cPanel**:
   - Durante il mio stage, ho sviluppato un sistema di login nella directory `login` utilizzando cPanel. Questo sistema di login gestisce l'autenticazione degli utenti e la connessione al database tramite le credenziali fornite dall'ambiente cPanel.

2. **Implementazione con XAMPP**:
   - Successivamente, ho sviluppato un secondo sistema di login nella directory `login2` utilizzando XAMPP in un ambiente di sviluppo locale. Questo sistema di login gestisce l'autenticazione degli utenti e la connessione al database configurato localmente.

Ogni implementazione include i file PHP necessari per la gestione delle connessioni al database, l'autenticazione degli utenti e altre funzionalità correlate.

## Installazione

1. **Clonare la repository**
    ```bash
    git clone https://github.com/2DNica/CRUD_DASHBOARD-USER.git
    cd CRUD_DASHBOARD-USER
    ```

2. **Configurare il database**
   - Importa il file `database.sql` in phpMyAdmin per creare il database e le tabelle.
   - Modifica il file `db_conn.php` con le tue credenziali del database. Nota che le credenziali del database dovranno essere adattate al tuo setup. Durante lo stage, mi è stato fornito un account cPanel con accesso specifico al database. Chiunque cloni il progetto dovrà aggiornare queste credenziali nei file di configurazione in base al proprio setup di cPanel o server.

3. **Esegui il server locale**
    ```bash
    php -S localhost:8000
    ```

4. **Accedi all'applicazione**
    Apri il browser e vai su `http://localhost:8000`

## Uso

1. **Visualizzazione Utenti**: Gli utenti possono vedere una lista di tutti gli utenti registrati in una tabella.
2. **Aggiunta Utenti**: Gli utenti possono aggiungere nuovi utenti compilando un modulo.
3. **Modifica Utenti**: Gli utenti possono modificare i dati esistenti di qualsiasi utente.
4. **Cancellazione Utenti**: Gli utenti possono cancellare utenti esistenti dalla lista.

## Database Information

Il database di questo progetto è stato gestito utilizzando phpMyAdmin. Durante il mio stage, mi è stato fornito un account cPanel che includeva l'accesso al database. Si prega di notare che le credenziali del database e gli account utente sono specifici per il mio account cPanel. Chiunque copi questo progetto dovrà aggiornare le credenziali del database nei file di configurazione per adattarle al proprio setup cPanel o database.

