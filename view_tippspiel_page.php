<?php
/**
 * Project: LMOnext
 * Filename: addon/tipp/view_tippspiel_page.php
 * Fileversion: 1.0.0
 *
 * @license   GPL-3.0-only
 *
 * Wrapper für die Tippspiel-Frontend-View (?view=tippspiel).
 * Wird durch AddonManager::getFrontendView('tippspiel') aufgerufen.
 *
 * tipp_lib.php und frontend_tipp.php wurden bereits durch bootFrontend()
 * geladen. view_tippspiel_frontend.php enthält die View-Rendering-Funktionen
 * (tippspielHandleRequest, renderTippspielView) und wird hier nachgeladen.
 */

declare(strict_types=1);

require_once __DIR__ . '/view_tippspiel_frontend.php';

$tippState = tippspielHandleRequest();

renderTemplate($activeTemplate, 'tippspiel', [
    'Titel'            => h(tf('tf_tipp_seiten_titel')),
    'ZurueckLinkBlock' => renderBackLinkBlock(),
    'ViewInhalt'       => renderTippspielView($tippState),
]);
