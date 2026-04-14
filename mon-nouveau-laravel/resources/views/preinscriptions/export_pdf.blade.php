<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Export Global PDF</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background: #f3f4f6; margin: 0; }
        #loader { text-align: center; margin-top: 30vh; }
        .spinner { width: 50px; height: 50px; border: 5px solid #ccc; border-top-color: #3b82f6; border-radius: 50%; animation: spin 1s linear infinite; margin: 0 auto 20px; }
        @keyframes spin { to { transform: rotate(360deg); } }
        
        #pdf-content { padding: 40px; background: white; width: 1040px; margin: 0 auto; }
        .header { text-align: center; margin-bottom: 30px; border-bottom: 2px solid #000; padding-bottom: 10px; }
        .header h2 { margin: 0; font-size: 22px; color: #1e293b; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 13px; text-align: left; }
        th, td { border: 1px solid #cbd5e1; padding: 10px; }
        th { background-color: #f1f5f9; font-weight: bold; color: #334155; }
    </style>
</head>
<body>
    <div id="loader">
        <div class="spinner"></div>
        <h2>Génération de la Liste Complète en .PDF...</h2>
        <p style="color:red; font-weight:bold;">Le téléchargement démarre dans un instant.</p>
    </div>

    <!-- Conteneur masqué qui sera rendu en PDF mode portrait/paysage -->
    <div style="position: absolute; left: -9999px;">
        <div id="pdf-content">
            <div class="header">
                <h2>UNIVERSITÉ VIRTUELLE DU BURKINA FASO</h2>
                <p style="font-weight:bold; margin: 5px 0;">Liste Officielle des Candidats (Sciences Informatiques)</p>
                <p style="font-size: 12px; color: #666; margin: 0;">Date d'exportation de la base de données : {{ date('d/m/Y à H:i') }}</p>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Candidat</th>
                        <th>Coordonnées</th>
                        <th>Diplôme Validé</th>
                        <th>Choix de Formation</th>
                        <th>Date Soumission</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($preinscriptions as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td><strong>{{ strtoupper($p->nom) }}</strong> {{ $p->prenom }}</td>
                        <td>{{ $p->telephone }}<br><span style="color:#2563eb">{{ $p->email }}</span></td>
                        <td>{{ $p->diplome }}</td>
                        <td>{{ $p->formation ? $p->formation->titre : 'Inconnue' }}</td>
                        <td>{{ $p->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" style="text-align:center;">Aucun candidat enregistré dans la base de données.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('pdf-content');
            var opt = {
                margin:       10,
                // Le nom du fichier avec la date, exactement comme vous avez demandé
                filename:     'dossiers_uvbf_{{ date("Y_m_d_H_i") }}.pdf',
                image:        { type: 'jpeg', quality: 1 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'mm', format: 'a4', orientation: 'landscape' } // orientation 'landscape' pour les tableaux larges
            };

            html2pdf().set(opt).from(element).save().then(function() {
                document.getElementById('loader').innerHTML = '<h2 style="color:green;">✅ Vrai Fichier PDF généré !</h2><p>Tous les candidats (liste globale) ont été téléchargés. Vous pouvez fermer cet onglet.</p>';
            });
        });
    </script>
</body>
</html>
