#!/bin/bash

readFolder=$1;

forward="";
for f in $readFolder/*.fastq
do
  baseFileName=${f##*/};
  if [[ $forward == "" ]]; then
    forward=$f;
  else
    sampleName=${baseFileName%%_*};
    echo "running $forward and $f for $sampleName";
    mkdir $readFolder/trinity_$sampleName;
    Trinity --seqType fq --max_memory 50G --left $forward --right $f --CPU 12 --full_cleanup --output $readFolder/trinity_$sampleName > $readFolder/trinity_$sampleName/$sampleName"_assembly.log";
    forward="";
  fi
done

