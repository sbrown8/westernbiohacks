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
    echo "running annotation for $sampleName";
    autoTrinotate.pl --Trinotate_sqlite --transcripts trinity_
    Trinity --seqType fq --max_memory 200G --left $forward --right $f --CPU 12 --full_cleanup --output trinity_$sampleName > trinity_$sampl
eName/$sampleName"_assembly.log";
    forward="";
  fi
done

