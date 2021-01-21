# Short cuts for artisan comands
alias a="php artisan"
alias pu="vendor/bin/phpunit"
alias puf="vendor/bin/phpunit --filter "
alias pug="vendor/bin/phpunit --group "
alias cdo="composer dump-autoload -o"
alias as="php artisan serve"
alias nrd="npm run dev"
alias nrp="npm run prod"
alias ci='composer install'
# Commmand used for remove the development packagaes and make it ready for prod
alias ciprod="composer install --optimize-autoloader --no-dev;"
# Artisan full clean
alias ac="php artisan route:cache; php artisan cache:clear;  php artisan config:cache; php artisan view:cache"
alias gc="git commit"
alias g="git"
alias gp="git pull"
alias gr="git rebase"
alias mysqltz_postal_code="mysql -u rootqac -p -h localhost rootqac_configuration < /home/rootqac/public_html/timezone_postal_zip_codes.sql"
