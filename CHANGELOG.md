# Changelog: tipp-Addon (LMOnext)

Dieses Addon war bis LMOnext 1.9.0-beta Teil des Core-Pakets. Mit der
Einführung des Addon-Manager-Frameworks (Beitrag Torsten Hofmann) wurde es
als eigenständiges, self-contained Paket extrahiert.

Die vollständige Entwicklungshistorie bis zur Extraktion steht im
CHANGELOG.md des LMOnext-Kernprojekts unter den Abschnitten
`addon/tipp/*`.

## Version 1.5.0

- Sprachdateien lang/de.php + lang/en.php neu hinzugefügt: enthalten jetzt
  alle Tippspiel-Sprachschlüssel (nav_tippspiel, 150× tipp_* für den
  Admin-Bereich, 193× tf_tipp_* für das Frontend), zuvor im LMOnext-Core
  verteilt auf lang/admin/{de,en}.php und lang/frontend/{de,en}.php. Werden
  von AddonManager::loadLanguages() geladen und über
  registerAddonTranslations() automatisch in t()/tf() eingemischt
  (Core-Strings haben bei Namenskollisionen Vorrang).

## Version 1.4.1

- Als eigenständiges addon.json-Paket verpackt (Templates/Sprachdateien
  jetzt lokal im Addon statt zentral im Core), installierbar über
  Administrator → Addons.
