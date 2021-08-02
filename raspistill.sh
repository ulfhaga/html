#!/bin/bash
#set -x
declare -g -r picture_folder="/var/www/html/picture";
declare -g -r counter_file="${picture_folder}/counter.txt";
declare -g -r counter=$(cat ${counter_file});
declare -g -r save_filename=$(echo $(( counter % 20 ))).jpg;

err() {
  echo "[$(date +'%Y-%m-%dT%H:%M:%S%z')]: $@" >&2
}

main() 
{
  local number_of_photos=1;
  if [[ $# -eq 1 ]] ; then
    number_of_photos=$1;
  fi

  if [[ ${number_of_photos} -lt 1 ]] ; then
    err "The number of photos must be greater then 0."
    return;
  fi

  mv -f ${picture_folder}/a.jpg ${picture_folder}/${save_filename};
  echo $(( ${counter} + 1 )) > ${counter_file};
  ln -f -s ${picture_folder}/${save_filename} ${picture_folder}/prev.jpg;
 
  local i=1;
  until [[ ${i} -gt ${number_of_photos} ]]; do
    /usr/bin/raspistill -n -rot 0 -o ${picture_folder}/a.jpg;
    ln -f -s ${picture_folder}/a.jpg ${picture_folder}/latest.jpg;
    echo Picture taken!
    ((i++))
  done
}

main "$@"
