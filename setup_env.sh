#!/bin/bash

echo "Installation des dépendances PHP pour Symfony dans $(pwd)..."
sudo apt update
sudo apt install -y php-cli php-ctype php-iconv php-json php-xml php-mbstring php-curl php-zip libicu-dev unzip

echo "Installation de Composer..."
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

echo "Installation de Symfony CLI..."
curl -sS https://get.symfony.com/cli/installer | bash
export PATH="$HOME/.symfony5/bin:$PATH"

echo "Vérification..."
php -v
composer -v
symfony -v

echo "Installation terminée ! PHP est prêt pour votre projet e-commerce."
