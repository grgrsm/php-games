<?php
require_once "./lib/db.php";
$sql = "SELECT * FROM trending ORDER BY id";
$query = $pdo->prepare($sql);
$query->execute();
$games = $query->fetchAll(PDO::FETCH_OBJ);

foreach ($games as $el) {
    echo '<div class="block" style="width: 100%; max-width: 250px; margin-bottom: 60px;">
        <img style="height: 100%; max-height:275px;" src="/img/' .
        $el->image .
        '" alt="">

        <span>
            <img src="/img/fire.svg" alt="">' .
        $el->followers .
        '
        </span>

        <div class="inline" style="display: flex; justify-content: flex-end; align-items: center; gap: 10px; width: 100%;">
               <div class="open-modal-btn" style="cursor: pointer;">
                   <svg class="editBtn" xmlns="http://w3.org" width="35" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M19.41 3c-.78-.78-2.05-.78-2.83 0l-2.09 2.09L12.7 3.3a.996.996 0 0 0-1.41 0l-6 6l1.41 1.41l5.29-5.29l1.09 1.09l-8.79 8.78c-.13.13-.22.29-.26.46l-1 4c-.08.34.01.7.26.95c.19.19.45.29.71.29c.08 0 .16 0 .24-.03l4-1c.18-.04.34-.13.46-.26L20.99 7.41c.78-.78.78-2.05 0-2.83L19.4 2.99ZM7.48 18.1l-2.11.53l.53-2.11l8.6-8.61l1.59 1.59l-8.6 8.6ZM17.49 8.09L15.9 6.5l2.09-2.09l1.59 1.58l-2.09 2.09Z"/></svg>
               </div>

               <div class="open-delete-btn" style="cursor: pointer;">
                   <svg class="deleteBtn"xmlns="http://w3.org" width="35" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M17 6V4c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v2H2v2h2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8h2V6zM9 4h6v2H9zM6 20V8h12v12z"/><path fill="currentColor" d="M9 10h2v8H9zm4 0h2v8h-2z"/></svg>
               </div>

               <div class="game-modal">
                   <div class="modal-content">
                      <span class="close">&times;</span>
                      <p>Editing game: ' .
        htmlspecialchars($el->id) .
        '<form action="/lib/edit-game.php" method="POST">  <input type="hidden" name="id" value="' .
        htmlspecialchars($el->id) .
        '"> <input type="text" name="img" value="' .
        htmlspecialchars($el->image) .
        '">
        <button style="width: 150px; height: 20px;" type="submit"> Edit </button> </form>
        </p>
                    </div>
               </div>
               <div class="game-modal-delete">
                   <div class="modal-content">
                      <span class="close-delete">&times;</span>
                      <p>Delete game ' .
        htmlspecialchars($el->id) .
        "?" .
        '</p>
        <form method="POST" action="/lib/delete-game.php">
            <input type="hidden" name="id" value="' .
        htmlspecialchars($el->id) .
        '">
            <button style="width: 150px; height: 20px;" type="submit"> Delete </button>
        </form>
                    </div>
               </div>


           </div>
    </div>';
}
?>
