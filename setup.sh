home='/data/data/com.termux/files/'
printf '\n\033[1;32m Tiến Hành Cài Dữ Liệu\n\n'
termux-setup-storage && apt update && apt upgrade && pkg i tur-repo && pkg i php
curl -s https://raw.githubusercontent.com/severtool/segayne/main/ddos.php -o $home/usr/bin/vermin
chmod 777 $home/usr/bin/vermin

printf '\n\033[1;92m Gõ \033[1;93mvermin \033[1;92mĐể Vào Tool <33\n\n'
