Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))
choco install totalcommander -y
choco install googlechrome -y
choco install vscode -y
choco install git -y
choco install nodejs-lts -y
choco install firefox -y
choco install xampp-80 -y

cd \
md c:\sj2022-s17-final
cd sj2022-s17-final
git config --system core.longpaths true
git clone https://github.com/skillsithu/sj2022-s1-final-01.git .
copy assets\httpd.conf c:\xampp\apache2\conf\

#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
