# Refactoring 
Il refactoring è il processo secondo cui viene rivisto il codice senza aggiungere o modificare funzionalità, ma migliorandone la qualità interna eliminando i "bad smells", ad esempio:
- eliminando codice duplicato astraendolo in una funzione
- evitando l'uso di variabili globali
- evitando metodi troppo lunghi.

Questo procedimento si rende necessario perché, come afferma il manifesto dell'Extreme Programming, più si apportano modifiche al codice più questo tende, se non si interviene esplicitamente, a diventare disordinato e quindi difficilmente modificabile.

Nella fase di manutenzione è stato eseguito, tra le altre cose, il refactoring del codice per migliorare la comprensibilità e la manutenibilità futura del sistema (manutenzione preventiva).

Nella parte di frontend si è trattato principalmente di convertire funzioni in classi qualora queste fossero responsabili della grafica (non per tutte era stato fatto già da subito), mentre tutte le altre sono state trasformate in metodi, quindi portate all'interno della classe più appropriata. Altre modifiche sono state una generale astrazione, il miglioramento dell'indentazione - specialmente in espressioni JSX molto lunghe - e creazione di file `.module.css` per sezioni specifiche del sito piuttosto che un file `.css` monolitico.
