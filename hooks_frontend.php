<?php
/**
 * Project: LMOnext
 * Filename: addon/tipp/hooks_frontend.php
 * Fileversion: 1.0.0
 *
 * @license   GPL-3.0-only
 *
 * Wird durch AddonManager::bootFrontend() geladen.
 * Registriert die Frontend-Hooks des Tipp-Addons.
 */

declare(strict_types=1);

// ── Hook: Home-Cards auf der Startseite ─────────────────────────────────────
// home.php feuert 'frontend.home_cards' und sammelt die HTML-Blocks aller
// Addons. Das Tipp-Addon rendert seine Tipper-Übersichtskarte.
registerHook('frontend.home_cards', function (array $data): array {
    if (function_exists('tippRenderHomeCard')) {
        $data[] = ['html' => tippRenderHomeCard()];
    }
    return $data;
});
