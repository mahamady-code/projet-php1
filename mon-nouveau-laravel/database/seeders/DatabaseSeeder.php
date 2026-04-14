<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Formation;
use App\Models\Enseignant;
use App\Models\Actualite;
use App\Models\Debouche;
use App\Models\Preinscription;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Création du compte Professeur Correcteur / Admin
        User::factory()->create([
            'name' => 'Professeur Correcteur',
            'email' => 'admin@uvbf.bf',
            'password' => Hash::make('password'),
        ]);

        // 2. Création des Formations UVBF
        $licence = Formation::create([
            'titre' => 'Licence en Informatique Appliquée',
            'description' => 'Un programme immersif axé sur le génie logiciel, le développement web et mobile, et la sécurité des bases de données. Obtenez un diplôme d\'État pour façonner l\'avenir.',
            'duree' => '3 ans',
            'niveau_requis' => 'Baccalauréat S / C / D',
        ]);
        
        $master = Formation::create([
            'titre' => 'Master en Cybersécurité & IA',
            'description' => 'Devenez expert en protection des systèmes d\'information et en conception de modèles algorithmiques intelligents appliqués aux entreprises burkinabés.',
            'duree' => '2 ans',
            'niveau_requis' => 'Licence en Informatique ou Mathématiques',
        ]);

        // 3. Création des Enseignants de prestige
        Enseignant::create([
            'nom' => 'Ouédraogo',
            'prenom' => 'Souleymane',
            'specialite' => 'Réseaux & Cybersécurité',
            'email' => 's.ouedraogo@uvbf.bf',
        ]);
        
        Enseignant::create([
            'nom' => 'Kaboré',
            'prenom' => 'Fatoumata',
            'specialite' => 'Développement Laravel & Systèmes BDD',
            'email' => 'f.kabore@uvbf.bf',
        ]);

        // 4. Actualités Récentes
        Actualite::create([
            'titre' => 'L\'UVBF lance sa plateforme 100% numérisée',
            'contenu' => 'Dans le cadre de la modernisation de nos infrastructures informatiques de l\'Université Virtuelle du Burkina Faso, nous annonçons fièrement que les inscriptions sont désormais 100% gérées avec Laravel 11. Bravo à l\'équipe de développement !',
            'date_publication' => now()->subDays(2),
        ]);

        Actualite::create([
            'titre' => 'Date limite des dépôts de dossier',
            'contenu' => 'Rappel : Les futurs étudiants en Licence ont jusqu\'à la fin du mois pour soumettre leur candidature digitale via notre portail des préinscriptions.',
            'date_publication' => now(),
        ]);

        // 5. Débouchés
        Debouche::create([
            'titre' => 'Ingénieur Logiciel (Concepteur Développeur)',
            'description' => 'Concevez et développez de A à Z des applications d\'entreprise robustes et scalables, au niveau national comme international.',
        ]);

        // 6. Fausses candidatures (pour remplir le panel d'étudiants reçus)
        Preinscription::create([
            'nom' => 'Sawadogo',
            'prenom' => 'Ibrahim',
            'email' => 'ib.sawa@example.com',
            'telephone' => '00226 71 00 00 00',
            'diplome' => 'Baccalauréat D',
            'formation_id' => $licence->id,
            'message' => 'Passionné par le web, je souhaite intégrer votre Licence.',
        ]);

        Preinscription::create([
            'nom' => 'Traoré',
            'prenom' => 'Aïcha',
            'email' => 'aicha.traore@example.com',
            'telephone' => '00226 70 55 44 33',
            'diplome' => 'Licence Systèmes et Logiciels',
            'formation_id' => $master->id,
            'message' => 'Je veux me spécialiser en cybersécurité sous les conseils du Dr. Ouédraogo.',
        ]);
        
        Preinscription::create([
            'nom' => 'Compaoré',
            'prenom' => 'Jean-Baptiste',
            'email' => 'jb.comp@example.com',
            'telephone' => '00226 72 22 11 00',
            'diplome' => 'Baccalauréat C',
            'formation_id' => $licence->id,
            'message' => '',
        ]);
    }
}
