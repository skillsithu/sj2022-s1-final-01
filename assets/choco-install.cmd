Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString
choco install googlechrome -y
choco install vscode -y
choco install git -y
git config --system core.longpaths true
choco install nodejs-lts -y
choco install firefox -y
md c:\sj2022-s1-final
cd sj2022-s1-final
git clone https://github.com/skillsithu/sj2022-s1-final-01.git .
copy assets\httpd.conf c:\xampp\apache2\conf\
#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
