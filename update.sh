#!/bin/sh

# 1. Czyszczenie cache Grav
echo ">>> Czyszczenie cache Grav..."
php bin/grav clearcache

# 2. Pobranie zmian z gita
echo ">>> Pobieranie zmian z repozytorium..."
git stash
git pull

# 3. Przywrócenie właściciela frog:nginx
echo ">>> Przywracanie właściciela frog:nginx..."
sudo chown -R frog:nginx .

# 4. Ustawienie praw katalogów 775
echo ">>> Ustawianie praw katalogów..."
sudo find . -type d -exec chmod 775 {} \;

# 5. Ustawienie praw plików 664
echo ">>> Ustawianie praw plików..."
sudo find . -type f -exec chmod 664 {} \;

echo ">>> GOTOWE! Grav + git działają poprawnie."
