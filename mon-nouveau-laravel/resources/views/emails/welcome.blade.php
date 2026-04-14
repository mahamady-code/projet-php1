<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8fafc; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .header { text-align: center; border-bottom: 2px solid #e2e8f0; padding-bottom: 20px; margin-bottom: 20px; }
        .header h1 { color: #0f172a; margin: 0; font-size: 24px; }
        .header .subtitle { color: #16a34a; font-weight: bold; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; }
        .content { color: #334155; line-height: 1.6; }
        .highlight { background: #f0fdf4; color: #16a34a; padding: 15px; border-radius: 8px; font-weight: bold; margin: 25px 0; border-left: 4px solid #16a34a; }
        .footer { text-align: center; color: #94a3b8; font-size: 12px; margin-top: 30px; border-top: 1px solid #f1f5f9; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Université Virtuelle du Burkina Faso</h1>
            <div class="subtitle">Sciences Informatiques & Applications</div>
        </div>
        
        <div class="content">
            <h2>Bonjour {{ $preinscription->prenom }} {{ $preinscription->nom }},</h2>
            
            <p>Nous avons le grand plaisir de vous confirmer la réception de votre dossier de préinscription pour la rentrée académique.</p>
            
            <div class="highlight">
                🚀 Formation choisie : {{ $preinscription->formation->titre ?? 'Filière Technologique' }}
            </div>
            
            <p>Notre équipe pédagogique va étudier votre dossier avec attention (notamment votre diplôme : <strong>{{ $preinscription->diplome }}</strong>). Nous vous recontacterons très prochainement au numéro <strong>{{ $preinscription->telephone }}</strong> pour les modalités d'inscription définitive.</p>
            
            <p>Félicitations pour votre choix de façonner l'avenir numérique avec l'UVBF !</p>
            
            <p><em>Très cordialement,<br>Le Bureau des Admissions</em></p>
        </div>
        
        <div class="footer">
            Ceci est un email automatique, merci de ne pas y répondre.<br>
            © {{ date('Y') }} UVBF - Tous droits réservés.
        </div>
    </div>
</body>
</html>
