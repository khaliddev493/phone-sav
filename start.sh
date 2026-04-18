#!/bin/bash
set -e

echo ">>> Clearing cache..."
php bin/console cache:clear --env=prod --no-debug

echo ">>> Installing assets..."
php bin/console assets:install public --env=prod --no-debug

echo ">>> Running migrations..."
php bin/console doctrine:migrations:migrate --no-interaction --env=prod

echo ">>> Starting server..."
exec /start-nginx