<h2>Esercizio di oggi: <strong>Laravel Auth<strong></h2>
<h3>Descrizione</h3>
<ul>
   <li>
   Partire da una installazione nuova di Laravel ed installare laravel ui con composer e da li creare lo scaffolding con bootstrap e autenticazione: php artisan ui bootstrap --auth e dopo di che ricordate di lanciare l’install di npm ed il run dev
   </li>
   <li>
   Ripetere quanto fatto in lezione questa mattina, gestendo migration e seeder dell’entità Post e accertandoci anche di mettere i controller dedicati all’admin in un una apposita folder dentro a app/Http/ Controllers
   </li>
   <li>
   Raggruppare le rotte di admin nel file web.php proteggendole con il middleware auth
   </li>
</ul>

<hr>

<h2>Esercizio di oggi: <strong>File storage & Mail<strong></h2>
<h3>Continuando sulla repo dell’ultimo esercizio (laravel-auth):</h3>
<ul>
   <li>
   Aggiungere la possibilità di caricare un file immagine per i post. Come fatto in classe gestite sia creazione che update che delete del post (ricordate il symbolic link con php artisan storage:link ).
   </li>
   <li>
   Create un account mailtrap e implementare l’invio di email alla creazione e update di un nuovo post.
   </li>
</ul>