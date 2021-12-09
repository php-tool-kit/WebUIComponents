@echo off

vendor\bin\phpstan.bat analyse --autoload-file vendor\autoload.php --level 5 --error-format table src