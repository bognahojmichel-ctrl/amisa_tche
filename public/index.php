<?php
$page = $_GET['p'] ?? 'home';

require_once __DIR__ . '/../src/includes/header.php';

switch ($page) {
    case 'demande-messe':
        require_once __DIR__ . '/../src/views/demande_messe.php';
        break;
    case 'demande-messe-form':
        require_once __DIR__ . '/../src/views/demande_messe_form.php';
        break;
    case 'rendezvous-messe':
        require_once __DIR__ . '/../src/views/rendezvous_messe.php';
        break;
    case 'confirmation-rendez-vous':
        require_once __DIR__ . '/../src/views/confirmation_rendez_vous.php';
        break;
    case 'gestion-demandes':
        require_once __DIR__ . '/../src/views/gestion_demandes.php';
        break;

    case 'gestion-rendez-vous':
        require_once __DIR__ . '/../src/views/gestion_rendez_vous.php';
        break;
    case 'gestion-dons':
        require_once __DIR__ . '/../src/views/gestion_dons_finances.php';
        break;
    case 'communiques':
        require_once __DIR__ . '/../src/views/gestion_communique.php';
        break;
    case 'demande-messe-speciale':
        require_once __DIR__ . '/../src/views/demande_messe_speciale.php';
        break;
    case 'gestion-disponibilites':
        require_once __DIR__ . '/../src/views/gestion_disponibilite.php';
        break;
    case 'gestion-horaires':
        require_once __DIR__ . '/../src/views/gestion_horaire.php';
        break;
    case 'admin-dashboard':
        require_once __DIR__ . '/../src/views/admin_dashboard.php';
        break;
    case 'portail-dons':
        require_once __DIR__ . '/../src/views/portail_dons.php';
        break;
    case 'home':
    default:
        require_once __DIR__ . '/../src/views/home.php';
        break;
}

require_once __DIR__ . '/../src/includes/footer.php';




