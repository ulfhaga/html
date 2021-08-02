#!/bin/bash
#

if [[ "$#" = 1 ]]; then 

cd $1 ;
PDIR=$(pwd);

find . -type d |
while read subdir
do
  rm -f "$subdir"/*.m3u
  for filename in "$subdir"/*
  do
    if [ ${filename: -4} == ".mp3" ] || [ ${filename: -5} == ".flac" ] || [ ${filename: -5} == ".loss" ] || [ ${filename: -5} == ".aiff" ] || [ ${filename: -4} == ".aif" ]
    then
        echo "${filename##*/}" >> ./"$subdir"/"${subdir##*/}.m3u"
		  echo "${PDIR}/${filename##*/}" >> ulf.m3u
    fi
  done

done

else
 echo argumentmissing
fi
