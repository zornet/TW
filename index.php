<html>
       <head>
       </head>
        <body>
<h1>Introdu un ID pentru a selecta o melodie din baza de date<h1>
        <form name = "Song select by ID" action="song_get.php" method="get">
        <input type= "text" name="id" placeholder="Enter ID">
        <input type ="submit" name = "submit">
        </form>

<h1>Apasa pe butonul TRIMITE pentru a selecta toate melodiile din baza de date<h1>
        <form name = "Seelct all songs" action="song_getall.php" method="get">
        <input type ="submit" name = "submitforall">
        </form>


        <h1> creaza una noua<h1>
                <form name = "Add" action="song_add.php" method="post">
                <input type= "text" name="artist" placeholder="Enter artist">
                <input type= "text" name="track" placeholder="Enter trank">
                <input type= "text" name="link" placeholder="Enter link">
                <input type ="submit" name = "submit">
                </form>

          <h1> Sterge o melodie dupa ID<h1>
              <form name = "Delete" action="song_delete.php" method="post">
              <input type= "text" name="id" placeholder="Enter id">
              <input type ="submit" name = "submit">
              </form>

          <h1> modifica una existenta <h1>
              <form name = "Modify" action="song_update.php" method="post">
              <input type= "text" name="id" placeholder="Enter id">
              <input type= "text" name="artist" placeholder="Enter artist">
              <input type= "text" name="track" placeholder="Enter trank">
              <input type= "text" name="link" placeholder="Enter link">
              <input type ="submit" name = "submit">
              </form>


    </body>
       </html>
