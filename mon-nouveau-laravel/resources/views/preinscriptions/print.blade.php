<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Téléchargement PDF</title>
    <!-- Script pour générer un vrai fichier PDF côté client -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #000; margin: 0; background: #f3f4f6;}
        
        /* Style du chargeur */
        #loader { text-align: center; margin-top: 30vh; font-family: sans-serif; }
        .spinner { width: 50px; height: 50px; border: 5px solid #ccc; border-top-color: #3b82f6; border-radius: 50%; animation: spin 1s linear infinite; margin: 0 auto 20px; }
        @keyframes spin { to { transform: rotate(360deg); } }

        /* Conteny PDF qui s'affiche très bien sur A4 */
        #pdf-content { padding: 40px; background: white; width: 800px; margin: 0 auto; }
        .header { text-align: center; border-bottom: 2px solid #000; padding-bottom: 20px; margin-bottom: 30px; }
        .header h1 { margin: 0; font-size: 24px; text-transform: uppercase; letter-spacing: 2px; }
        .header p { margin: 5px 0 0; font-style: italic; color: #555; }
        .section { margin-bottom: 25px; }
        .section h2 { font-size: 16px; border-bottom: 1px solid #ddd; padding-bottom: 5px; margin-bottom: 15px; text-transform: uppercase; }
        .row { margin-bottom: 10px; line-height: 1.5; font-size: 15px;}
        .label { font-weight: bold; display: inline-block; width: 200px; color:#333; }
        .value { display: inline-block; }
        .message-box { border: 1px dashed #ccc; padding: 15px; background: #fafafa; min-height: 80px; font-style: italic; }
        .footer { margin-top: 60px; text-align: right; }
        .signature-box { border: 1px dashed #999; padding: 40px 20px; display: inline-block; width: 280px; text-align: left; }
    </style>
</head>
<body>

    <!-- Message de patience -->
    <div id="loader">
        <div class="spinner"></div>
        <h2>Génération de votre fichier .PDF en cours...</h2>
        <p style="color:red; font-weight:bold;">Le téléchargement va démarrer dans une seconde.</p>
    </div>

    <!-- C'est ce bloc invisible qui est photographié et transformé en VRAI PDF -->
    <div style="position: absolute; left: -9999px;">
        <div id="pdf-content">
            <div class="header">
                <h1>Université Virtuelle du Burkina Faso</h1>
                <p>Sciences Informatiques & Applications</p>
            </div>

            <div style="text-align: right; margin-bottom: 20px; font-size: 14px; font-weight: bold; color: #555;">
                Réf. Dossier n° {{ str_pad($preinscription->id, 5, '0', STR_PAD_LEFT) }}<br>
                Soumis le : {{ $preinscription->created_at->format('d/m/Y à H:i') }}
            </div>

            <div style="font-size: 20px; text-align: center; margin-bottom: 40px; font-weight: bold; background: #f8fafc; padding: 15px 0; border: 1px solid #cbd5e1; border-radius:4px;">
                FICHE DE PRÉINSCRIPTION OFFICIELLE
            </div>

            <div class="section">
                <h2>1. Informations du Candidat</h2>
                <div class="row"><span class="label">Nom de famille :</span> <span class="value" style="font-size: 18px; font-weight: bold; text-transform: uppercase;">{{ $preinscription->nom }}</span></div>
                <div class="row"><span class="label">Prénom(s) :</span> <span class="value" style="font-size: 18px;">{{ $preinscription->prenom }}</span></div>
                <div class="row"><span class="label">Email de contact :</span> <span class="value">{{ $preinscription->email }}</span></div>
                <div class="row"><span class="label">N° de Téléphone :</span> <span class="value">{{ $preinscription->telephone }}</span></div>
            </div>

            <div class="section">
                <h2>2. Académique</h2>
                <div class="row"><span class="label">Dernier Diplôme obtenu :</span> <span class="value">{{ $preinscription->diplome }}</span></div>
                <div class="row"><span class="label">Formation souhaitée :</span> <span class="value" style="font-weight: bold;">{{ $preinscription->formation->titre ?? 'Non référencée' }}</span></div>
            </div>

            @if($preinscription->message)
            <div class="section">
                <h2>3. Message spécifique du candidat</h2>
                <div class="message-box">"{{ $preinscription->message }}"</div>
            </div>
            @endif

            <div class="footer">
                <div class="signature-box">
                    <strong>Cadre Réservé à l'Administration</strong><br>
                    Cachet, signature et décision :<br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Dès que la page s'ouvre, on fabrique le PDF et on le télécharge
        document.addEventListener("DOMContentLoaded", function() {
            var element = document.getElementById('pdf-content');
            
            var opt = {
                margin:       [10, 10, 10, 10], // Marges [top, left, bottom, right]
                filename:     'Fiche_Etudiant_{{ str_replace(' ', '_', $preinscription->nom) }}.pdf',
                image:        { type: 'jpeg', quality: 1 },
                html2canvas:  { scale: 2, useCORS: true },
                jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };

            // Commandes de génération avec html2pdf.js
            html2pdf().set(opt).from(element).save().then(function() {
                document.getElementById('loader').innerHTML = '<h2 style="color:green;">✅ Vrai Fichier PDF généré et téléchargé !</h2><p>Vous pouvez fermer cette fenêtre.</p>';
            });
        });
    </script>
</body>
</html>
