#!/bin/sh

readFolder=$1;

forward="";
for f in $readFolder/*
do
  baseFileName=${f##*/};
  if [[ $forward == "" ]]; then
    forward=$f;
  else
    sampleName=${baseFileName%%_*};
    echo "running $forward and $f for $sampleName";
    Trinity --seqType fq --max_memory 200G --left $forward --right $f --CPU 12 --full_cleanup --output $readFolder/trinity_$sampleName > $readFolder/trinity_$sampleName/$sampleName"_assembly.log";
    forward="";
  fi
done

