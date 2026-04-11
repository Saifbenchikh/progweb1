@echo off
echo.

echo Fichiers modifies :
git status -s
echo.

echo Ajout des fichiers en cours (git add .)...
git add .
echo.

set /p msg="Entre ton message de commit : "

:: Execute le commit
git commit -m "%msg%"
echo.

set /p push="Veux-tu push sur le depot distant (GitHub) maintenant ? (o/n) : "
if /I "%push%"=="o" (
    echo.
    echo Push en cours...
    git push
    echo Push termine avec succes !
) else (
    echo.
    echo Push ignore. Le commit reste en local.
)

echo.
pause