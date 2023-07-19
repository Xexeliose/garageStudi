<!DOCTYPE html>
<html>
<head>
    <title>Avis des utilisateurs</title>
    <style>
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }
        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }
        .rating > span:before {
            content: "\2605";
            position: absolute;
            color: gray;

        }
        .rating > span.selected:before,
        .rating > span.hover:before {
            color: gold;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="bin/js/avis.js"></script>
</head>
<body>
    <h1>Avis des utilisateurs</h1>
    <div id="reviewForm">
        <h2>Donnez votre avis :</h2>
        <form id="reviewSubmitForm" action="php/submitReview.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="comment">Commentaire (maximum 400 caractères) :</label><br>
            <textarea id="comment" name="comment" rows="5" cols="50" maxlength="400" required></textarea><br><br>
            <label for="rating">Note :</label><br>
            <div class="rating">
                <span><input type="radio" name="rating" value="5"></span>
                <span><input type="radio" name="rating" value="4"></span>
                <span><input type="radio" name="rating" value="3"></span>
                <span><input type="radio" name="rating" value="2"></span>
                <span><input type="radio" name="rating" value="1"></span>
            </div><br><br>
            <input type="submit" value="Soumettre">
        </form>
    </div>
    <div id="reviews">
        <h2>Avis des utilisateurs :</h2>
        <div id="reviewList">
            <!-- Les avis des utilisateurs seront insérés ici -->
        </div>
    </div>
</body>
</html>
