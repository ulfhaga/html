#!/bin/bash
echo "[INFO] /usr/bin/raspivid -rot 90 -t 0 -w 300 -h 300 -hf -fps 20 -o - | nc "$1" 62000"
/usr/bin/raspivid -rot 90 -t 0 -w 300 -h 300 -hf -fps 20 -o - | nc "$1" 62000


