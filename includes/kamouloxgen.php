<h2>Présentez-vous:</h2>
  <?php
    $presentation = array("Avocat pour animaux à Villejuif","Communiste","Eleboniste","Collectionneur de joint de culasse de Renault Clio II","Agnesthesiste","Professeur de Karaoké synchronisé","Réalisateur de films un peu olé olé... sur les corridas","Maitre nageur à Marineland","Pilote de ligne... RER B","Sardine... c'est comme maquereau mais en moins bien","Disquaire spécialiste en musique antillaise","Président de l'Association SOS Terre Battue","Poulero","Fabricant de bermudas en polystyrène à Niort","Crieur de feu","Chattier","Ouhouhteur...dans la branche du spectacle");
    $presentation_answer = array_rand($presentation, 1);
  ?>

  <form class="answer" method="POST">
    <input type="text" name="prenom">
    <input type="submit" class="button" value="Valider">
  </form>

  <div class="answer">
    <p>
      <?php
        if (isset($_POST['prenom'])) {
          echo "Bonjour ";
          echo $_POST['prenom'];
          echo "! ";
          echo "Vous êtes ";
          echo $presentation[$presentation_answer];
          echo " et c'est à vous de commencer!";
          }
          ?>
      </p>
    </div>

<h2>A vous de jouer!</h2>

  <?php
    $question = array("Carte Blanche ou troubadour?","Sac en papier ou Vis ma vie ?","Qui regarde ces pieds?","Jus de Gomme ou parasol?","Qui a renversé le tabouret?","Il n'est ni rond, ni carré, ni pointu....","Pépito ou panini?","Vous tentez le tiramisu?","Je passe sous la lune...","Jules et Jim ou Carpaccio?","Fantaisie ou Rod Stewart?","Allunette ou sisteron?","Tu pues du cul, tu sens du bec...","C’est qui Bruno ?","Chromosomes ou Marguerite?");
    $random_question = array_rand($question, 4);

    $answer = array("Bonne réponse! Camembert vert!","Bien joué! Vous marquez 60 points et vous sortez de prison.","Double bonus et livret de famille. Bien Joué!","Vous ne pouvez pas! Il y a Michel Drucker qui fait du vélo sur du jonc de mer. Vous reculez en case triporteur.","Impossible, il y a les frères Taloche qui matent un porno en diagonale!","Fraise afghane en opposition, vous avancez de trois Chambourcy.","Eh non, Casimir joue aux fléchettes avec une poule en case moule soviet!","Et non ! Suppositoire à lapin, vous ne pouvez pas.","Bien joué, troubadour d'entrée!","Vous ne pouvez pas, il y a Maria Carrey qui se rase la langue en opposition.","Ah non impossible il y a Anouck Aimée qui repeint son bas ventre en diagonale.","Passe de huit dans votre réserve à moutarde, vous avancez de 65","Vous ne pouvez pas: il y a Georges Beller qui rôde dans une église en opposition, vous reculez de 50!","Bien joué ! Vous gardez votre joker.","Bien joué! Vous marquez 6 de mieux.","Vous passez la végétaline à votre chien et vous reculez de 3 fusées.");
    $random_answer = array_rand($answer, 4);

    $kamoulox = array("Et non! C'est dommage, vous avez perdu!","Et Oui! C'est gagné!");
    $kamoulox_final = array_rand($kamoulox, 1);
  ?>

<div class="question">
  <?php
    if (isset($_POST['prenom']))
    {
      echo $question[$random_question[0]];
      }
   ?>
  </div>

  <form class="answerform" method="post">
      <input type="text" name="answer0" label="Entrer votre réponse">
      <input type="submit" class="button" onclick="openanswer0()" value="Répondre">
  </form>

  <div class="answer">
      <?php
        if (isset($_POST['answer0'])) {
          echo $answer[$random_answer[0]];
          }
      ?>
  </div>
  <div class="question">
    <?php
      if (isset($_POST['answer0'])) {
        echo $question[$random_question[1]];
        }
      ?>
  </div>

  <form class="answerform" method="post">
    <input type="text" name="answer1" label="Entrer votre réponse">
    <input type="submit" class="button" onclick="openanswer1()" value="Répondre">
  </form>

    <div class="answer">
        <?php
          if (isset($_POST['answer1'])) {
          echo $answer[$random_answer[1]];
        }
        ?>
    </div>
    <div class="question">
      <?php
          if (isset($_POST['answer1'])) {
          echo $question[$random_question[2]];
          }
      ?>
    </div>

  <form class="answerform" method="post">
    <input type="text" name="answer2" label="Entrer votre réponse">
    <input type="submit" class="button" onclick="openanswer2()" value="Répondre">
  </form>

    <div class="answer">
      <?php
        if (isset($_POST['answer2'])) {
          echo $answer[$random_answer[2]];
          }
      ?>
    </div>
    <div class="question">
      <?php
        if (isset($_POST['answer2'])) {
          echo $question[$random_question[3]];
          }
      ?>
    </div>

  <form class="answerform" method="post" label="Entrer votre réponse">
    <input type="text" name="answer3">
    <input type="submit" class="button" onclick="openanswer3()" value="KAMOULOX!">
  </form>

    <div class="answer">
      <?php
        if (isset($_POST['answer3'])) {
          echo $kamoulox[$kamoulox_final];
          }
      ?>
    </div>
