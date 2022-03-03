
<title>index</title>
<link rel="stylesheet" href="./Caroussel3D.css">
<style>
    header {
        width: 100%;
        height: 100%;   
    }

    nav {
        height: 100%;
        width: 50%;
        padding-top: 1%;
        margin-top: 1%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: white;
        opacity: 0.4;
            }

    nav > a {
        font-size: larger;
        font-weight: bolder;
        color: black;
    }

    nav > a:hover {
        color: red;
    }

    h1 {
        font-size: xx-large;
        margin-bottom: 2%;
    }

    em {
        font-size: xx-large;
        border: black solid 5px;
        text-shadow: green 6px 6px 8px;
    }
</style>
    <section id="mutu">
        <header>
            <nav>
                <a href="./pages/aboutme.php">About Me</a>
                <a href="./pages/projets.php">Projects</a>
                <a href="./pages/codessamples.php">Code Samples</a>
                <a href="./pages/contact.php">Contact Me</a>
            </nav>
        </header>
    </section>
    <section id="prem">
        <aside id="showcontainer">
            <div id="container">
                <div id="carousel">
                    <img src="./images/LogoWakandaDev.PNG" title="Wakanda Developpement">
                    <img src="./images/Book&Comm/PictsBook/Le Coin Maquette Prototypes.png" title="Le coin des bonne auberges maquette prototype">
                    <img src="./images/Book&Comm/PictsBook/Le coin index Page.png" title="Le coin index">
                    <img src="./images/Book&Comm/PictsBook/Le Coin Accueil 2.png" title="Le coin accueil">
                    <img src="./images/Book&Comm/PictsBook/Congo-B Boutique Page.png" title="B-exchange Boutique">
                    <img src="./images/Book&Comm/PictsBook/Congo-B Recherche Catégories Page.png" title="B-exchange recherche">
                    <img src="./images/Book&Comm/PictsBook/FOAD Connexion Page.png" title="FOAD Connexion">
                    <img src="./images/Book&Comm/PictsBook/Le Coin BDD Links.png" title="Le coin des bonne auberge modelisation BDD">
                </div>
                <div id="sol"><img src="./images/Portraitsportfolio/IMG_1088.JPG"></div>
            </div>
            <div id="signature">
                <p>WD</p>
            </div>
        </aside>
        <article id="welcome">
            <div class="portrait">
                <h1>Bognoua ABDOULAYE</h1>
                <em>WEB DEVELOPPEUR FULL-STACK</em> 
            </div>
            <div class="present">
                <p>
                    Je m'appel ABDOULAYE Bognoua j'ai 41 ans.<br> 
                    Je developpe depuis 3ans maintenant.<br>
                    J'ai decouvert le web developpement en 2019 lors d'une reconvertion,
                    puis j'ai décidé de me lancé.<br>
                    J'ai donc suivi une préparatoire digitale pendant six mois, 
                    puis ai ensuite intégré une session de formation qualifiante 
                    (Titre pro developpeur web et web mobile) pendant une durée de six mois également.<br>
                    Pendant ces deux sessions j'ai suivi en paralelle les cours correspondants sur le site openclassrooms.<br>
                    A ce jour je poursuit mon apprenstissage en travaillant  sur des frameworks PHP et JS.<br>
                    En paralelle je propose mes services pour realisation de projets web en tant qu'independant.
                </p>
            </div>
        </article>
    </section>
        <script src="./Caroussel3D.js"></script>
    </body>
</html>
