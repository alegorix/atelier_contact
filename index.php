<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Formulaire de contact</h1>
        </header>
        <main>

        <?php
        $status = $_GET['status'] ?? '';
        ?>

        <?php
        if ($status === 'victoire'){
            echo '<div class="alert alert-victoire">Merci pour votre message</div>';

        }
        elseif ($status === 'erreur_serveur'){
            echo '<div class="alert alert-serveur">Erreur serveur !!!</div>';

        }
        
        ?>
            <form action="traitement.php" method="post">
                <div class="form-group">
                    <label for="name">Votre nom</label>
                    <input type="text" id="name" name="name" required placeholder="Ex. Jean Dupont">
                </div>
                <div class="form-group">
                    <label for="email">Votre email</label>
                    <input type="email" id="email" name="email" required placeholder="Ex. jean@dupont.be">
                </div>
                <div class="form-group">
                    <label for="sujet">Sujet du message</label>
                    <input type="text" id="sujet" name="sujet" required placeholder="Ex. Demande de devis">
                </div>
                <div class="form-group">
                    <label for="message">Votre message</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Ex. Ecrivez votre message"></textarea>
                </div>
                <button type="submit">Envoyer votre message</button>



            </form>
        </main>
    </div>
    
</body>
</html>