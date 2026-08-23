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

## min_core_version-Korrektur

- min_core_version von "1.4.0" auf "1.9.0" korrigiert (Copy-Paste-Rest aus
  einer älteren internen Versionierung, faktisch wirkungslos, da niedriger
  als jede real existierende LMOnext-Version - AddonManager konnte damit nie
  eine zu alte Core-Version blockieren). "1.9.0" ist die tatsächliche
  LMOnext-Core-Version, ab der der Addon-Manager überhaupt existiert.
