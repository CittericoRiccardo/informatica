<?php
/*
get o post sono due metodi
la post nasconde i dati ma non da una protezione totale.
creo array associativi e le informazioni devono avere una chiave, type mi da il tipo di tutto
name rappresenta la chiave al quale è associato il valore non devo usare lo stesso name per tutto
id si riferisce allo stile css 
la polary required forza l'inserimento dei dati 
non basta pero inserirlo alla fine della form 
si inizia mettendo il metodo come  get
il get accoda le informazioni
ogni chiave e valore è divisa dalla & commerciale (mi divide gli attributi)
$_Get array associativo
*/
?>
<html>
    <head>
        <title>Crea Persona</title>
    </head>
    <body>
        <div>
            <H4>Inserisci una persona
                <a href ="index.php">home</a>
            </H4>
</div>
<div>
    <form action="insertPersona.php" method ="get">
    <div>
    <label> Nome </label>
    <input type ="text" name ="nome" required>
    </div>
    <div>
    <label> Cognome </label>
    <input type ="text" name ="cognome" required>
    </div>
    <div>
    <label> CF </label>
    <input type ="text" name ="cf" required>
    </div>
    <div>
    <label> Indirizzo </label>
    <input type ="text" name ="indirizzo" required>
    </div>
    <div>
    <label> Telefono </label>
    <input type ="text" name ="tel" required>
    </div>
    <div>
    <button type="submit" name= "crea_persona" >Crea Persona</button>
    </div>
</form>
</div>
    </body>
    </html>