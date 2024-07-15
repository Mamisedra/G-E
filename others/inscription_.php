<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    class inscription
    {
        private $nom;
        private $prenom;
        private $telephone;
        private $email;
        private $matricule;
        private $fonction;
        private $filiere_or_matiere;
        private $pass;

        private function check_pass($pass, $pass_w)
        {
            if (empty($pass) || empty($pass_w))
                return false;
            if (strlen($pass) < 8)
                return false;
            if (strcasecmp($pass, $pass_w) !== 0)
                return false;
            return $pass;
        }

        private function send_pass($pass, $pass_w)
        {
            $mot_de_passe = $this->check_pass($pass, $pass_w);
            if ($mot_de_passe != false)
                return ($mot_de_passe);
        }

        public function __construct($pass, $pass_w, $nom, $prenom ,$telephone, $email, $matricule, $fonction, $filiere_or_matiere)
        {
            $this->nom = strtoupper($nom);
            $this->prenom = ucwords($prenom);
            $this->telephone = $telephone;
            $this->email = $email;
            $this->matricule = $matricule;
            $this->fonction = $fonction;
            $this->filiere_or_matiere = $filiere_or_matiere;
            $this->pass = $this->send_pass($pass, $pass_w);
        }

        public function getPass()
        {
            return $this->pass;
        }
        public function getNom()
        {
            return $this->nom;
        }
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function getTelephone()
        {
            return $this->telephone;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getMatricule()
        {
            return $this->matricule;
        }
        public function getFonction()
        {
            return $this->fonction;
        }
        public function getFiliereOrMatiere()
        {
            return $this->filiere_or_matiere;
        }
    }

    require_once 'inscription.php';
    
    $nom = $_POST['nom'] ?? '';
    $prenom = $_POST['prenom'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $email = $_POST['email'] ?? '';
    $matricule = $_POST['matricule'] ?? '';
    $fonction = isset($_POST['prof']) ? 'Prof' : (isset($_POST['etudiant']) ? 'Etudiant(e)' : '');
    $filiere_or_matiere = isset($_POST['filiere']) ? $_POST['filiere'] : (isset($_POST['matiere']) ? $_POST['matiere'] : '');
    $pass = $_POST['pass'] ?? '';
   $pass_w = $_POST['pass_W'] ?? '';
    
    $inscription = new Inscription($pass, $pass_w, $nom, $prenom, $telephone, $email, $matricule, $fonction, $filiere_or_matiere);

    echo "Inscription réussie ! Voici les informations enregistrées : <br>";
    echo "Nom: " . $inscription->getNom() . "<br>";
    echo "Prénom: " . $inscription->getPrenom() . "<br>";
    echo "Téléphone: " . $inscription->getTelephone() . "<br>";
    echo "Mot de passe: " . $inscription->getPass() . "<br>";
    echo "Email: " . $inscription->getEmail() . "<br>";
    echo "Matricule: " . $inscription->getMatricule() . "<br>";
    echo "Fonction: " . $inscription->getFonction() . "<br>";
    echo "Filière ou Matière: " . $inscription->getFiliereOrMatiere() . "<br>";
?>