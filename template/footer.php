<footer>
        <a href="Tel:0112547585" class="telephone">tél : 01 12 54 75 85</a>
        <div class="horaire">
            <ul class="list_horaire">
                <li class="element_horaire">HORAIRE</li>
                <li class="element_horaire">lundi au samedi : 9h-18h</li>
                <li class="element_horaire">dimanche : Fermé</li>
            </ul>
        </div>
        <button class="bouton" id="myBtn">Contactez Nous</button>
        <div id="myModal" class="modal">
             <div class="modal-content">
             <span class="close">&times;</span>
                <form action="contact.php" method="post">
                    <label for="nom">Nom:</label><br>
                    <input type="text" id="nom" name="nom"><br>
                    <label for="prenom">Prénom:</label><br>
                    <input type="text" id="prenom" name="prenom"><br>
                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email"><br>
                    <label for="telephone">Téléphone:</label><br>
                    <input type="tel" id="telephone" name="telephone"><br>
                    <label for="message">Message:</label><br>
                    <textarea class="message" id="message" name="message"></textarea><br>
                    <input type="submit" value="Envoyer">
                </form>
             </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>