Nexus Event Landing Page

![Screenshot strony](./page.png)


# Wykorzystane technologie

Projekt został zbudowany w oparciu o:
- WordPress (custom theme)
- PHP
- HTML/SCSS
- JavaScript
- JS Swiper
- Advanced Custom Fields (ACF)
- ACF Blocks
- ACF Options Page
- Custom Post Types
- WP Forms


# Architektura motywu

Motyw został przygotowany zgodnie ze standardową strukturą WordPress:
- podział sekcji na template parts
- wykorzystanie front-page.php jako strony głównej
- osobne pliki header.php i footer.php
- archive template dla CPT
- poprawnie skonfigurowane menu
- logiczny podział komponentów i sekcji

Kod nie zawiera twardo wpisanych treści. Wszystkie dane są wprowadzane z poziomu panelu WordPress


# Zarządzanie treścią

Treści strony są w pełni edytowalne z poziomu zaplecza WordPress:
- sekcje strony oparte na ACF Blocks
- globalne ustawienia (np. dane kontaktowe, miejsce, data eventu) przez ACF Options Page
- speakers jako Custom Post Type
- archiwum speakers generowane dynamicznie
- formularz kontaktowy oparty na WP Forms
- możliwość edycji tekstów, zdjęć, linków i przycisków bez ingerencji w kod

Projekt został zaprojektowany tak, aby użytkownik końcowy mógł samodzielnie zarządzać treścią strony