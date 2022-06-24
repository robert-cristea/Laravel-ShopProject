<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //User Data

        DB::table('users')->insert([
            'id' => 1,
            'firstname' => "Jean",
            'lastname' => "Marc",
            'gender' => "1",
            'email' => "jeanmarc@gmail.com",
            'password' => Hash::make('abc'),
            'mode' => "1",
            'address' => "14 Avenue Saint-Médard",
            'postcode' => "33000",
            'city' => "Bordeaux",
            'profession_id' => '3',
            'telephone' => '06 90 84 23 12',
            'company' => 'Sotoweb'
        ]);

        //Base Data

        $joins = 
        [
            ["id"=>1, "name"=>"Fenêtre", "price"=>"50", "image"=>"Mask Group 1@2x.png", "default"=>"1"],
            ["id"=>2, "name"=>"Baie coulissante", "price"=>"150", "image"=>"Mask Group 2@2x.png", "default"=>"0"], 
            ["id"=>3, "name"=>"Porte fenêtre", "price"=>"250", "image"=>"Mask Group 3@2x.png", "default"=>"0"],
            ["id"=>4, "name"=>"Porte entrée", "price"=>"350", "image"=>"Mask Group 4@2x.png", "default"=>"0"], 
            ["id"=>5, "name"=>"Porte de service", "price"=>"450", "image"=>"Mask Group 5@2x.png", "default"=>"0"], 
            ["id"=>6, "name"=>"Volet roulant", "price"=>"550", "image"=>"Mask Group 6@2x.png", "default"=>"0"], 
            ["id"=>7, "name"=>"Garde corps", "price"=>"650", "image"=>"Mask Group 7@2x.png", "default"=>"0"],
            ["id"=>8, "name"=>"Véranda", "price"=>"750", "image"=>"Mask Group 8@2x.png", "default"=>"0"], 
            ["id"=>9, "name"=>"Pergola", "price"=>"850", "image"=>"Mask Group 9@2x.png", "default"=>"0"], 
            ["id"=>10, "name"=>"Accessoires", "price"=>"950", "image"=>"Mask Group 10@2x.png", "default"=>"0"]
        ];

        $materials = 
        [
            ["id"=>1, "name"=>"Aluminium", "price"=>"100", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"1"], 
            ["id"=>2, "name"=>"PVC", "price"=>"200", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"]
        ];

        $ranges = 
        [
            ["id"=>1, "name"=>"Gamme 70", "price"=>"100", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"1"], 
            ["id"=>2, "name"=>"Gamme 50" ,"price"=>"200", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>'0']
        ];

        $openings = 
        [
            ["id"=>1, "name"=>"Fixe", "price"=>"100", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"10", "default"=>"1"], 
            ["id"=>2, "name"=>"Abattant", "price"=>"220", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"20", "default"=>"0"], 
            ["id"=>3, "name"=>"Ouvrant française", "price"=>"200", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"30", "default"=>"0"], 
            ["id"=>4, "name"=>"Ouvrant anglaise", "price"=>"300", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"40", "default"=>"0"], 
            ["id"=>5, "name"=>"Oscillo-battant", "price"=>"400", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"50", "default"=>"0"]
        ];

        $leaves = 
        [
            ["id"=>1, "name"=>"1 vantail", "price"=>"220", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"100", "default"=>"1"]
        ];

        $installations = 
        [
            ["id"=>1, "name"=>"Applique", "price"=>"100", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"100", "default"=>"1"], 
            ["id"=>2, "name"=>"Tunnel", "price"=>"200", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"200", "default"=>"0"], 
            ["id"=>3, "name"=>"Rénovation", "price"=>"300", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "price"=>"300", "default"=>"0"]
        ];

        $heights = 
        [
            ["id"=>1, "value"=>"600", "price"=>"100", "default"=>"1"], 
            ["id"=>2, "value"=>"700", "price"=>"200", "default"=>"0"], 
            ["id"=>3, "value"=>"800", "price"=>"300", "default"=>"0"], 
            ["id"=>4, "value"=>"900", "price"=>"400", "default"=>"0"], 
            ["id"=>5, "value"=>"1000", "price"=>"500", "default"=>"0"]
        ];

        $widths = 
        [
            ["id"=>1, "value"=>"1600", "price"=>"100", "default"=>"1"], 
            ["id"=>2, "value"=>"1700", "price"=>"200", "default"=>"0"], 
            ["id"=>3, "value"=>"1800", "price"=>"300", "default"=>"0"], 
            ["id"=>4, "value"=>"1900", "price"=>"400", "default"=>"0"], 
            ["id"=>5, "value"=>"2000", "price"=>"500", "default"=>"0"]
        ];

        $insulations = 
        [
            ["id"=>1, "value"=>"120", "price"=>"100", "default"=>"1"], 
            ["id"=>2, "value"=>"130", "price"=>"200", "default"=>"0"], 
            ["id"=>3, "value"=>"140", "price"=>"300", "default"=>"0"], 
            ["id"=>4, "value"=>"150", "price"=>"400", "default"=>"0"]
        ];

        $aerations = 
        [
            ["id"=>1, "name"=>"Aucune", "price"=>"100", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"1"], 
            ["id"=>2, "name"=>"15 M3/H", "price"=>"200", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>3, "name"=>"30 M3/H", "price"=>"300", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"]
        ];

        $glazings = 
        [
            ["id"=>1, "name"=>"4/16/4 FE", "price"=>"100", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"1"], 
            ["id"=>2, "name"=>"4/20/4 FE", "price"=>"200", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>3, "name"=>"4/16/4 FE one", "price"=>"300", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>4, "name"=>"4 FE/-/4 G200", "price"=>"400", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>5, "name"=>"4 FE/-/4 dépoli", "price"=>"500", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>6, "name"=>"4 planistar/-/4", "price"=>"600", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>7, "name"=>"4 stopsol/-/4", "price"=>"700", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>8, "name"=>"5/-/5 FE", "price"=>"800", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>9, "name"=>"6/-/6", "price"=>"900", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>10, "name"=>"6/-/4 planistar", "price"=>"1000", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>11, "name"=>"10/-/4 FE", "price"=>"1100", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"], 
            ["id"=>12, "name"=>"44.2/-/4 FE", "price"=>"1200", "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue", "default"=>"0"]
        ];

        $colors = 
        [
            ["id"=>1, "value"=>"#edede6", "price"=>"100", "name"=>"RAL 9016", "default"=>"1"], 
            ["id"=>2, "value"=>"#383e42", "price"=>"200", "name"=>"RAL 7016", "default"=>"0"], 
            ["id"=>3, "value"=>"#f1ece1", "price"=>"300", "name"=>"RAL 9010", "default"=>"0"], 
            ["id"=>4, "value"=>"#a1a1a0", "price"=>"400", "name"=>"RAL 9006", "default"=>"0"], 
            ["id"=>5, "value"=>"#0e0e10", "price"=>"500", "name"=>"RAL 9005", "default"=>"0"], 
            ["id"=>6, "value"=>"#114232", "price"=>"600", "name"=>"RAL 6005", "default"=>"0"], 
            ["id"=>7, "value"=>"#442f29", "price"=>"700", "name"=>"RAL 8017", "default"=>"0"], 
            ["id"=>8, "value"=>"#878581", "price"=>"800", "name"=>"RAL 9007", "default"=>"0"], 
            ["id"=>9, "value"=>"#e3d9c6", "price"=>"900", "name"=>"RAL 1013", "default"=>"0"], 
            ["id"=>10, "value"=>"#004f7c", "price"=>"1000", "name"=>"RAL 5010", "default"=>"0"], 
            ["id"=>11, "value"=>"#e6d2b5", "price"=>"1100", "name"=>"RAL 1015", "default"=>"0"], 
            ["id"=>12, "value"=>"#6b1c23", "price"=>"1200", "name"=>"RAL 3004", "default"=>"0"]
        ];

        DB::table('joins')->insert($joins);
        DB::table('materials')->insert($materials);
        DB::table('ranges')->insert($ranges);
        DB::table('openings')->insert($openings);
        DB::table('leaves')->insert($leaves);
        DB::table('installations')->insert($installations);
        DB::table('totalheights')->insert($heights);
        DB::table('totalwidths')->insert($widths);
        DB::table('insulations')->insert($insulations);
        DB::table('aerations')->insert($aerations);
        DB::table('glazings')->insert($glazings);
        DB::table('colors')->insert($colors);

        $faqs = 
        [
            [
                "id"=>1,
                "title"=>"Pourquoi changer mes menuiseries (portes, fenêtres, baies…) ?", 
                "detail"=>"Les menuiseries peuvent représenter jusqu’à 15 % du total des déperditions de chaleur.<br/>
            En remplaçant vos anciennes menuiseries par des menuiseries isolantes, vous réaliserez à la fois d’importantes économies d’énergie tout en améliorant votre confort.<br/>
            Fini de jeter l’argent par les fenêtres ! Par ailleurs, de belles fenêtres, harmonieusement intégrées au bâti, valorisent votre logement. Changer ses fenêtres représente un investissement durable qui redonne de la valeur à votre patrimoine."
            ],
            [
                "id"=>2,
                "title"=>"Quels sont les avantages des menuiseries en aluminium ?",
                "detail"=>"L’efficacité thermique, acoustique et l’étanchéité à l’air des menuiseries aluminium est incomparable. Avec un coefficient thermique Uw jusqu’à 1,3 W/m² K, les économies sur la facture énergétiques sont garanties !<br/>
                D’un point de vue design, le choix de coloris et de finitions est particulièrement étendu.<br/>
                Nos menuiseries en aluminium offrent, en outre, jusqu’à 20% de lumière en plus qu’une fenêtre traditionnelle. A cela s’ajoute un excellent confort acoustique et un respect de l’environnement puisque l’aluminium est un matériau 100% recyclable."
            ],
            [
                "id"=>3,
                "title"=>"Que signifie exactement le terme PVC ?",
                "detail"=>"Les trois initiales PVC correspondent au mot anglais « Poly Vinyl Chloride » qui en français se traduit par Polychlorure de vinyle. Le PVC est composé de chlore à 57% et d’éthylène à 43% (pour info, la plupart des matières plastiques contient 100% d’éthylène extrait du pétrole)."
            ],
            [
                "id"=>4,
                "title"=>"PVC et écologie vont-ils de paire ?",
                "detail"=>"Sur un ton imagé et humoristique, nous pouvons avancer que « le PVC c’est 43 % d’hydrocarbure et 57% de sel de table (Nacl) ». Plus sérieusement, ce matériau a su s’inscrire sur la voie du développement durable."
            ],
            [
                "id"=>5,
                "title"=>"Puis-je poser mes fenêtres moi-même ?",
                "detail"=>"Le fabricant de menuiseries ne peut être tenu pour responsable de la qualité de votre travail et du résultat final qui en découle ; il est donc préférable de faire appel aux compétences d’un professionnel SOLABAIE. De plus, ela vous permettra d’avoir une garantie décennale et dans le cadre d’une rénovation, un crédit d’impôt qui engagera sa responsabilité et pourra vous délivrer la garantie 10 ans."
            ],
            [
                "id"=>6,
                "title"=>"Vos fenêtres ont-elles un label qualité ?",
                "detail"=>"Nos fenêtres Alu sont fabriquées avec des profilés de la marque NF attestant de la conformité de leur extrusion aux normes en vigueur. Par ailleurs, les menuiseries sont réalisées suivant une conception relevant d’un Avis Technique ; le niveau de qualité de production en atelier est régulièrement contrôlé par le CSBT (Centre Scientifique et Technique du Bâtiment)."
            ],
            [
                "id"=>7,
                "title"=>"Quels sont les avantages des menuiseries en aluminium ?",
                "detail"=>"Si votre habitation est classée ou située dans la zone de protection d’un site classé, vous devez obtenir une autorisation préalable des Monuments Historiques.<br/>
                Si vous êtes en copropriété, consultez votre règlement.<br/>
                Pour créer une nouvelle ouverture, une déclaration de travaux adressée à votre mairie est suffisante.\n
                Dans tous les autres cas, pour un changement de fenêtre qui n’altère pas l’architecture de la façade (mêmes dimensions, même forme, même couleur) vous n’avez pas besoin d’effectuer une démarche administrative avant de changer vos fenêtres."
            ]
        ];

        $cgvs = 
        [
            ["id"=>1, "title"=>"FORMATION DU CONTRA", "detail"=>"Le contrat de vente ne prend effet qu’après acceptation par la société SOTOYA CONSTRUCTIONS de la commande du client et ce par accusé de réception. Aucune autre forme d’acceptation n’engagera la société SOTOYA CONSTRUCTIONS. Toute commande passée et acceptée par la société SOTOYA CONSTRUCTIONS devient ferme et définitive et entraîne l’obligation d’achat. A défaut de respect de l’engagement d’achat par le client pour quelque motif que ce soit, la société SOTOYA CONSTRUCTIONS se réserve le droit de lui réclamer l’intégralité du prix du devis validé."],
            ["id"=>2, "title"=>"DROIT DE PROPRIETE", "detail"=>"Les études et tout autre document remis au client restent la propriété de la société SOTOYA CONSTRUCTIONS et doivent être rendus sur simple demande. Les brevets, marques, dessins, modèles ou procédés de fabrication qui figurent sur les documents contractuels de la société SOTOYA CONSTRUCTIONS remis au client rentent et sont la propriété exclusive de la société SOTOYA CONSTRUCTIONS. En outre ces documents ne peuvent ni être communiqués, ni exécutés, ni représentés ou reproduits sans autorisation expresse et écrite de la société SOTOYA CONSTRUCTIONS. Les études et projets fournis au client par la société SOTOYA CONSTRUCTIONS peuvent être modifiés à tout moment sans préavis au cas où les normes législatives et règlementaires en vigueur l’impliqueraient."],
            ["id"=>3, "title"=>"FRAIS D’ETUDE COMPLEMENTAIRE", "detail"=>"Les frais d’étude sont normalement compris dans le prix fixé à la commande. Néanmoins, si le projet supporte, du fait du client, des modifications importantes non initialement prévues et qui nécessitent une reprise importante des études réalisées, la société SOTOYA CONSTRUCTIONS se réserve la possibilité de facturer des frais d’étude complémentaire."],
            ["id"=>4, "title"=>"TRANSPORT", "detail"=>"Quelles que soient les modalités de la vente, les matériels et marchandises voyagent aux risques et périls du destinataire. Il appartient au destinataire de faire toutes les réserves dans les formes et délais prévus par les articles 105 et suivants du code de commerce et d’exercer tout recours, s’il y a lieu, contre les transporteurs."],
            ["id"=>5, "title"=>"LIVRAISONS", "detail"=>"Les délais de livraison figurant sur le devis ne commencent à courir qu’après réception par la société SOTOYA CONSTRUCTIONS des plans approuvés par le client. La société SOTOYA CONSTRUCTIONS est dégagée de plein droit de tout engagement relatif aux délais de livraison en cas de force majeure. En outre, le délai imposé par les fournisseurs de fournitures particulières se répercutera sur le délai contractuel sans que cette répercussion puisse justifier quelque annulation de commande ou quelque indemnité que ce soit. Les matériels que le client demanderait à la société SOTOYA CONSTRUCTIONS de conserver en magasin après fabrication seraient immédiatement facturés, la mise en disposition en usine après achèvement de la fabrication étant assimilée à une livraison effectuée tant du point de vue du règlement que du point de vue du transfert de propriété. Dans ce cas les matériels séjournent dans nos locaux aux risques et périls de leur propriétaire."],
            ["id"=>6, "title"=>"MODALITES DE PAIEMENT", "detail"=>"Pas d’escompte en cas de paiement anticipé. Sauf convention contraire expresse, il sera versé un acompte de 30% et le solde, les 70% restants, sera payé à la facturation définitive. Si le paiement est prévu par traite, le client s’engage à retourner acceptées et domiciliées lesdites lettres de change dans les 8 jours suivant leur envoi. Le défaut de réception des lettres de change acceptées dans ledit délai sera considéré comme un refus d’acceptation assimilable à un défaut de paiement. En cas de retard de paiement, la société SOTOYA CONSTRUCTIONS pourra suspendre toutes les commandes en cours sans préjudice de toute autre voie d’action. Toute somme non payée à son échéance donnera lieu de plein droit et sans mise en demeure préalable par dérogation à l’article 1153 du code civil, au paiement d’intérêt de retard s’élevant à 10% annuel. Les intérêts courront du jour de l’échéance normal du règlement jusqu’à la date du parfait paiement du prix et de ses accessoires. En cas de défaut de paiement, 10 jours après mise ne demeure demeurée infructueuse, la vente sera résiliée de plein droit si bon semble à la société SOTOYA CONSTRUCTIONS qui pourra demander la restitution des matériels sans préjudice de tous autres dommages et intérêts. L’acheteur devra rembourser la société SOTOYA CONSTRUCTIONS tous les frais occasionnés par le recouvrement des sommes non payées, y compris une indemnité forfaitaire de 10% des sommes dues. En aucun cas les réclamations éventuelles en matière de prix, de quantité ou de qualité ne peuvent dispenser l’acheteur de régler à échéance la part de nos factures excédant le montant de la réclamation sauf à mettre en œuvre automatiquement le régime des pénalités et intérêts de retard ci-dessus prévu."],
            ["id"=>7, "title"=>"CLAUSE DE RESERVE DE PROPRIETE", "detail"=>"Conformément aux dispositions législatives en vigueur, le transfert de propriété de nos matériels se verra différé jusqu’au paiement complet du prix en principal, frais et intérêts, les ventes n’étant réputées parfaites qu’après le paiement de la totalité des sommes ci-dessus, les matériels restant notre propriété jusqu’à la réalisation de cette condition. Jusqu’à cette date, l’acquéreur n’aura que la simple qualité de détenteur de nos matériels et devra en assurer à ses frais la garde, les risques et la responsabilité. Dans tous les cas il supportera tous les risques et dommages que nos matériels pourraient subir. L’acheteur ne peut aliéner notre propriété que dans le cadre d’affaires régulièrement conclus à des conditions habituelles. Dans ce cas, l’acheteur doit informer son client de l’existence de la clause de réserve de propriété existant sur les matériels qu’il aura revendus et du droit que se réserve la société SOTOYA CONSTRUCTIONS de revendiquer entre ses mains soit le matériel litigieux, soit son prix. L’acquéreur s’engage à maintenir nos matériels constamment identifiés avant tout usage. La société SOTOYA CONSTRUCTIONS pourra se prévaloir du jeu de la présente clause de réserve de propriété trois jours après une mise en demeure adressée par lettre recommandée avec accusé de réception et restée en tout ou partie sans effet. Lorsque la société SOTOYA CONSTRUCTIONS aura fait connaitre sa décision de faire jouer la clause de réserve de propriété, et de revendiquer ses marchandises, l’acheteur devra soit les rendre sans délai à ses frais, soit les payer intégralement pour pouvoir les utiliser. En cas de redressement judiciaire ou de liquidation judiciaire de l’acheteur, la revendication de nos matériels, affectés de la clause de réserve de propriété, sera effectuée dans les conditions prévues par la loi du 25 janvier 1985 modifiée par la loi du 10 juin 1994."],
            ["id"=>8, "title"=>"CLAUSE ATTRIBUTIVE DE COMPETENCE", "detail"=>"Election de domicile est faite par la société SOTOYA CONSTRUCTIONS à son siège social, à LA CIOTAT. En cas de contestation susceptible de s’élever entre les parties quant à la formation ou l’exécution des opérations de vente de nos matériels, quant au paiement du prix ou quant à l’interprétation ou l’exécution des clauses des présentes conditions générales de vente, le Tribunal de Commerce de MARSEILLE sera seul compétent quel que soit le lieu de la livraison, les modes et lieux de paiement. La loi applicable aux opérations de vente conclues par la société SOTOYA CONSTRUCTIONS est la loi française."]

        ];

        DB::table('faqs')->insert($faqs);
        DB::table('cgvs')->insert($cgvs);

        $professions = 
        [
            ["id"=> 1, "name"=>"Architecte"],
            ["id"=> 2, "name"=>"Maitre d’œuvre"],
            ["id"=> 3, "name"=>"Bureau d’études"],
            ["id"=> 4, "name"=>"Gros œuvre"],
            ["id"=> 5, "name"=>"QSE"],

        ];

        DB::table('professions')->insert($professions);

    }
}
