<?php
require "../elements/header.php";
?>

    <head>
        <title>Sorry Dad</title>
        <link rel="stylesheet" href="../../style/projet.css">
        <link rel="stylesheet" href="../../style/no_scroll.css">
    </head>

    <div class="container_contenant" id="container_contenant">
        <h1 id="title_contenant">DECRIVEZ-NOUS VOTRE PROJET, NOUS VOUS RECONTACTERONS ...</h1>
        <div id="contenant">
            <div id="projet">
                <form method="post" action="../../back/envoi_projet.php">
                    <label for="textarea_mail" id="mail">Adresse mail</label>
                    <textarea id="textarea_mail" name="mail"> </textarea>
                    <label for="select_sexe" id="sexe">Dessin pour</label>
                    <select id="select_sexe" required="required" name="sexe">
                        <option value="Homme" selected="selected">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                    <label for="select_style" id="style">Style</label>
                    <select id="select_style" required="required" name="style">
                        <option value="Abstrait" selected="selected">Abstrait</option>
                        <option value="Animal">Animal</option>
                        <option value="Asiatique">Asiatique</option>
                        <option value="Atypique">Atypique</option>
                        <option value="Autre">Autre</option>
                        <option value="Bio-Mécanique">Bio-Mécanique</option>
                        <option value="Cartoon">Cartoon</option>
                        <option value="Celtique">Celtique</option>
                        <option value="Chicano">Chicano</option>
                        <option value="Dentelle-Bijou">Dentelle-Bijou</option>
                        <option value="Dotwork-Linework">Dotwork-Linework</option>
                        <option value="Géométrique">Géométrique</option>
                        <option value="Gothique">Gothique</option>
                        <option value="Graphique">Graphique</option>
                        <option value="Gravure">Gravure</option>
                        <option value="Horreur">Horreur</option>
                        <option value="Japonais">Japonais</option>
                        <option value="Logo">Logo</option>
                        <option value="Mandala">Mandala</option>
                        <option value="Mexicain">Mexicain</option>
                        <option value="Néo-Trad">Néo-Trad</option>
                        <option value="New School">New School</option>
                        <option value="Noir & Gris">Noir & Gris</option>
                        <option value="Old School">Old School</option>
                        <option value="Ornemental">Ornemental</option>
                        <option value="Phrase-Prénom/Lettering">Phrase-Prénom/Lettering</option>
                        <option value="Réaliste">Réaliste</option>
                        <option value="Sexy">Sexy</option>
                        <option value="Trash-Polka">Trash-Polka</option>
                        <option value="Tribal">Tribal</option>
                        <option value="Watercolor">Watercolor</option>
                    </select>
                    <label for="select_theme" id="theme">Thème</label>
                    <select id="select_theme" required="required" name="theme">
                        <option value="Ailes" selected="selected">Ailes</option>
                        <option value="Ange">Ange</option>
                        <option value="Animaux">Animaux</option>
                        <option value="Asiatique">Asiatique</option>
                        <option value="Astrologie">Astrologie</option>
                        <option value="Autre">Autre</option>
                        <option value="Bio-Méchanique">Bio-Méchanique</option>
                        <option value="Catrina">Catrina</option>
                        <option value="Celtique">Celtique</option>
                        <option value="Chiffre">Chiffre</option>
                        <option value="Clown">Clown</option>
                        <option value="Coeur">Coeur</option>
                        <option value="Composition">Composition</option>
                        <option value="Date">Date</option>
                        <option value="Dentelle-Bijoux">Dentelle-Bijoux</option>
                        <option value="Dragon">Dragon</option>
                        <option value="Dreamcatcher">Dreamcatcher</option>
                        <option value="Fantastique">Fantastique</option>
                        <option value="Fleur">Fleur</option>
                        <option value="Fée">Fée</option>
                        <option value="Hibou">Hibou</option>
                        <option value="Horloge">Horloge</option>
                        <option value="Illustration">Illustration</option>
                        <option value="Indien">Indien</option>
                        <option value="Japonais">Japonais</option>
                        <option value="Jarretiere">Jarretiere</option>
                        <option value="Lettering">Lettering</option>
                        <option value="Manche Tattoo/Bras complet">Manche Tattoo/Bras complet</option>
                        <option value="Manchette Tattoo/Demi bras">Manchette Tattoo/Demi bras</option>
                        <option value="Mandala-Dotwork">Mandala-Dotwork</option>
                        <option value="Marin">Marin</option>
                        <option value="Mexicain">Mexicain</option>
                        <option value="Musique">Musique</option>
                        <option value="Mythologie">Mythologie</option>
                        <option value="Nature">Nature</option>
                        <option value="Papillon">Papillon</option>
                        <option value="Phoenix">Phoenix</option>
                        <option value="Pin-up">Pin-up</option>
                        <option value="Plume">Plume</option>
                        <option value="Religieux">Religieux</option>
                        <option value="Rose">Rose</option>
                        <option value="Sablier">Sablier</option>
                        <option value="Skull">Skull</option>
                        <option value="Statue">Statue</option>
                        <option value="Sugar Skull">Sugar Skull</option>
                        <option value="Symbole">Symbole</option>
                        <option value="Tigre">Tigre</option>
                        <option value="Trash">Trash</option>
                        <option value="Voyage">Voyage</option>
                    </select>
                    <label for="select_emplacement" id="emplacement">Emplacement</label>
                    <select id="select_emplacement" required="required" name="emplacement">
                        <option value="Atypique" selected="selected">Atypique</option>
                        <option value="Autre">Autre</option>
                        <option value="Avant-bras ext.">Avant-bras ext.</option>
                        <option value="Avant-bras int.">Avant-bras int.</option>
                        <option value="Bas du dos">Bas du dos</option>
                        <option value="Bras">Bras</option>
                        <option value="Bras ext. biceps">Bras ext. biceps</option>
                        <option value="Bras int. biceps">Bras int. biceps</option>
                        <option value="Cheville">Cheville</option>
                        <option value="Colonne vertébrale">Colonne vertébrale</option>
                        <option value="Cou">Cou</option>
                        <option value="Crâne">Crâne</option>
                        <option value="Cuisse">Cuisse</option>
                        <option value="Doigt">Doigt</option>
                        <option value="Dos complet">Dos complet</option>
                        <option value="Epaule">Epaule</option>
                        <option value="Flanc">Flanc</option>
                        <option value="Haut du dos">Haut du dos</option>
                        <option value="Homoplate">Homoplate</option>
                        <option value="Jambe">Jambe</option>
                        <option value="Je ne sais pas">Je ne sais pas</option>
                        <option value="Main">Main</option>
                        <option value="Manche(bras complet)">Manche(bras complet)</option>
                        <option value="Manchette(avant-bras)">Manchette(avant-bras)</option>
                        <option value="Manchette(haut du bras)">Manchette(haut du bras)</option>
                        <option value="Mollet">Mollet</option>
                        <option value="Nuque">Nuque</option>
                        <option value="Pectoral">Pectoral</option>
                        <option value="Pied">Pied</option>
                        <option value="Poignet">Poignet</option>
                        <option value="Sous-poitrine">Sous-poitrine</option>
                        <option value="Torse">Torse</option>
                        <option value="Tour de cou">Tour de cou</option>
                        <option value="Ventre">Ventre</option>
                    </select>
                    <label for="select_position" id="position">Position</label>
                    <select id="select_position" required="required" name="position">
                        <option value="Je ne sais pas" selected="selected">Je ne sais pas</option>
                        <option value="Haut">Haut</option>
                        <option value="Bas">Bas</option>
                        <option value="Gauche">Gauche</option>
                        <option value="Droite">Droite</option>
                        <option value="Centre">Centre</option>
                    </select>
                    <label for="select_hauteur" id="hauteur">Hauteur</label>
                    <select id="select_hauteur" required="required" name="hauteur">
                        <option value="2" selected="selected">2 cm</option>
                        <option value="3">3 cm</option>
                        <option value="4">4 cm</option>
                        <option value="5">5 cm</option>
                        <option value="6">6 cm</option>
                        <option value="7">7 cm</option>
                        <option value="8">8 cm</option>
                        <option value="9">9 cm</option>
                        <option value="10">10 cm</option>
                        <option value="11">11 cm</option>
                        <option value="12">12 cm</option>
                        <option value="13">13 cm</option>
                        <option value="14">14 cm</option>
                        <option value="15">15 cm</option>
                        <option value="16">16 cm</option>
                        <option value="17">17 cm</option>
                        <option value="18">18 cm</option>
                        <option value="19">19 cm</option>
                        <option value="20">20 cm</option>
                        <option value="21">21 cm</option>
                        <option value="22">22 cm</option>
                        <option value="23">23 cm</option>
                        <option value="24">24 cm</option>
                        <option value="25">25 cm</option>
                        <option value="26">26 cm</option>
                        <option value="27">27 cm</option>
                        <option value="28">28 cm</option>
                        <option value="29">29 cm</option>
                        <option value="30">30 cm</option>
                        <option value="31">31 cm</option>
                        <option value="32">32 cm</option>
                        <option value="33">33 cm</option>
                        <option value="34">34 cm</option>
                        <option value="35">35 cm</option>
                        <option value="36">36 cm</option>
                        <option value="37">37 cm</option>
                        <option value="38">38 cm</option>
                        <option value="39">39 cm</option>
                        <option value="40">40 cm</option>
                        <option value="41">41 cm</option>
                        <option value="42">42 cm</option>
                        <option value="43">43 cm</option>
                        <option value="44">44 cm</option>
                        <option value="45">45 cm</option>
                        <option value="46">46 cm</option>
                        <option value="47">47 cm</option>
                        <option value="48">48 cm</option>
                        <option value="49">49 cm</option>
                        <option value="50">50 cm</option>
                        <option value="51">51 cm</option>
                        <option value="52">52 cm</option>
                        <option value="53">53 cm</option>
                        <option value="54">54 cm</option>
                        <option value="55">55 cm</option>
                        <option value="56">56 cm</option>
                        <option value="57">57 cm</option>
                        <option value="58">58 cm</option>
                        <option value="59">59 cm</option>
                        <option value="60">60 cm</option>
                        <option value="61">61 cm</option>
                        <option value="62">62 cm</option>
                        <option value="63">63 cm</option>
                        <option value="64">64 cm</option>
                        <option value="65">65 cm</option>
                        <option value="66">66 cm</option>
                        <option value="67">67 cm</option>
                        <option value="68">68 cm</option>
                        <option value="69">69 cm</option>
                        <option value="70">70 cm</option>
                        <option value="71">71 cm</option>
                        <option value="72">72 cm</option>
                        <option value="73">73 cm</option>
                        <option value="74">74 cm</option>
                        <option value="75">75 cm</option>
                        <option value="76">76 cm</option>
                        <option value="77">77 cm</option>
                        <option value="78">78 cm</option>
                        <option value="79">79 cm</option>
                        <option value="80">80 cm</option>
                        <option value="81">81 cm</option>
                        <option value="82">82 cm</option>
                        <option value="83">83 cm</option>
                        <option value="84">84 cm</option>
                        <option value="85">85 cm</option>
                        <option value="86">86 cm</option>
                        <option value="87">87 cm</option>
                        <option value="88">88 cm</option>
                        <option value="89">89 cm</option>
                        <option value="90">90 cm</option>
                        <option value="91">91 cm</option>
                        <option value="92">92 cm</option>
                        <option value="93">93 cm</option>
                        <option value="94">94 cm</option>
                        <option value="95">95 cm</option>
                        <option value="96">96 cm</option>
                        <option value="97">97 cm</option>
                        <option value="98">98 cm</option>
                        <option value="99">99 cm</option>
                        <option value="100">100 cm</option>
                    </select>
                    <label for="select_largeur" id="largeur">Largeur</label>
                    <select id="select_largeur" required="required" name="largeur">
                        <option value="2" selected="selected">2 cm</option>
                        <option value="3">3 cm</option>
                        <option value="4">4 cm</option>
                        <option value="5">5 cm</option>
                        <option value="6">6 cm</option>
                        <option value="7">7 cm</option>
                        <option value="8">8 cm</option>
                        <option value="9">9 cm</option>
                        <option value="10">10 cm</option>
                        <option value="11">11 cm</option>
                        <option value="12">12 cm</option>
                        <option value="13">13 cm</option>
                        <option value="14">14 cm</option>
                        <option value="15">15 cm</option>
                        <option value="16">16 cm</option>
                        <option value="17">17 cm</option>
                        <option value="18">18 cm</option>
                        <option value="19">19 cm</option>
                        <option value="20">20 cm</option>
                        <option value="21">21 cm</option>
                        <option value="22">22 cm</option>
                        <option value="23">23 cm</option>
                        <option value="24">24 cm</option>
                        <option value="25">25 cm</option>
                        <option value="26">26 cm</option>
                        <option value="27">27 cm</option>
                        <option value="28">28 cm</option>
                        <option value="29">29 cm</option>
                        <option value="30">30 cm</option>
                        <option value="31">31 cm</option>
                        <option value="32">32 cm</option>
                        <option value="33">33 cm</option>
                        <option value="34">34 cm</option>
                        <option value="35">35 cm</option>
                        <option value="36">36 cm</option>
                        <option value="37">37 cm</option>
                        <option value="38">38 cm</option>
                        <option value="39">39 cm</option>
                        <option value="40">40 cm</option>
                        <option value="41">41 cm</option>
                        <option value="42">42 cm</option>
                        <option value="43">43 cm</option>
                        <option value="44">44 cm</option>
                        <option value="45">45 cm</option>
                        <option value="46">46 cm</option>
                        <option value="47">47 cm</option>
                        <option value="48">48 cm</option>
                        <option value="49">49 cm</option>
                        <option value="50">50 cm</option>
                        <option value="51">51 cm</option>
                        <option value="52">52 cm</option>
                        <option value="53">53 cm</option>
                        <option value="54">54 cm</option>
                        <option value="55">55 cm</option>
                        <option value="56">56 cm</option>
                        <option value="57">57 cm</option>
                        <option value="58">58 cm</option>
                        <option value="59">59 cm</option>
                        <option value="60">60 cm</option>
                        <option value="61">61 cm</option>
                        <option value="62">62 cm</option>
                        <option value="63">63 cm</option>
                        <option value="64">64 cm</option>
                        <option value="65">65 cm</option>
                        <option value="66">66 cm</option>
                        <option value="67">67 cm</option>
                        <option value="68">68 cm</option>
                        <option value="69">69 cm</option>
                        <option value="70">70 cm</option>
                        <option value="71">71 cm</option>
                        <option value="72">72 cm</option>
                        <option value="73">73 cm</option>
                        <option value="74">74 cm</option>
                        <option value="75">75 cm</option>
                        <option value="76">76 cm</option>
                        <option value="77">77 cm</option>
                        <option value="78">78 cm</option>
                        <option value="79">79 cm</option>
                        <option value="80">80 cm</option>
                        <option value="81">81 cm</option>
                        <option value="82">82 cm</option>
                        <option value="83">83 cm</option>
                        <option value="84">84 cm</option>
                        <option value="85">85 cm</option>
                        <option value="86">86 cm</option>
                        <option value="87">87 cm</option>
                        <option value="88">88 cm</option>
                        <option value="89">89 cm</option>
                        <option value="90">90 cm</option>
                        <option value="91">91 cm</option>
                        <option value="92">92 cm</option>
                        <option value="93">93 cm</option>
                        <option value="94">94 cm</option>
                        <option value="95">95 cm</option>
                        <option value="96">96 cm</option>
                        <option value="97">97 cm</option>
                        <option value="98">98 cm</option>
                        <option value="99">99 cm</option>
                        <option value="100">100 cm</option>
                    </select>
                    <label for="textarea_choix" id="choix">Expliquez-nous le plus précisément possible ce que vous
                        aimeriez comme dessin.</label>
                    <textarea id="textarea_choix" required="required" name="choix"> </textarea>
                    <button type="submit">Envoi de demande de devis gratuit</button>
                </form>
            </div>
        </div>
    </div>

<?php
require "../elements/footer.php";
?>