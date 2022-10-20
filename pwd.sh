#!/bin/bash
source=$1
python2 vncpasswd.py -e "$1" | grep Hex | cut -d '=' -f 2 | cut -d "'" -f 2
