#!/bin/bash
echo ip адрес или имя хоста!
read IP
echo Имя юзера по желанию
read USER
echo Введите пароль
read pwd
VNCPASSWORD=$(python2 vncpasswd.py -e "$pwd" | grep Hex | cut -d '=' -f 2 | cut -d "'" -f 2)
touch "$IP"_"$USER".vnc
echo "[connection]" >> "$IP"_"$USER".vnc
echo "host=$IP" >> "$IP"_"$USER".vnc
echo "port=5900" >> "$IP"_"$USER".vnc
echo "password=$VNCPASSWORD" >> "$IP"_"$USER".vnc
echo "[options]" >> "$IP"_"$USER".vnc
echo "use_encoding_1=1" >> "$IP"_"$USER".vnc
echo "copyrect=1" >> "IP".vnc
echo "viewonly=0" >> "$IP"_"$USER".vnc
echo "fullscreen=0" >> "$IP"_"$USER".vnc
echo "8bit=0" >> "$IP"_"$USER".vnc
echo "shared=1" >> "$IP"_"$USER".vnc
echo "belldeiconify=0" >> "$IP"_"$USER".vnc
echo "disableclipboard=0" >> "$IP"_"$USER".vnc
echo "swapmouse=0" >> "$IP"_"$USER".vnc
echo "fitwindow=1" >> "$IP"_"$USER".vnc
echo "cursorshape=1" >> "$IP"_"$USER".vnc
echo "noremotecursor=0" >> "$IP"_"$USER".vnc
echo "preferred_encoding=7" >> "$IP"_"$USER".vnc
echo "compresslevel=-1" >> "$IP"_"$USER".vnc
echo "quality=6" >> "$IP"_"$USER".vnc
echo "localcursor=1" >> "$IP"_"$USER".vnc
echo "scale_den=1" >> "$IP"_"$USER".vnc
echo "scale_num=1" >> "$IP"_"$USER".vnc
echo "local_cursor_shape=1" >> "$IP"_"$USER".vnc