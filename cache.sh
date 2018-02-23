sudo chmod -R 0777 .
sudo chown -R bhupinderbisht:bhupinderbisht .
php bin/console cache:clear
sudo chmod -R 0777 .
sudo rm -rf var/sessions
