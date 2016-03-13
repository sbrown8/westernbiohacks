#!/bin/bash


SWISSPROT_SQLITE_DB_URL="https://data.broadinstitute.org/Trinity/Trinotate_v3_RESOURCES/Trinotate_v3.sqlite.gz";

readFolder=$1;

forward="";
for f in $readFolder/*.fastq
do
  baseFileName=${f##*/};
  sampleName=${baseFileName%%_*};
  perl add_sample_to_trinity_id.pl $readFolder/trinity_$sampleName".Trinity.fasta" $sampleName > $readFolder/trinity_$sampleName"_sample_name.Trinity.fasta"
done

cat $readFolder/*_sample_name.Trinity.fasta > $readFolder/all_Trinity.fasta;

assembly=$readFolder/all_Trinity.fasta;

#determine open reading frames
TransDecoder.LongOrfs -t $assembly;

#predict which orfs are good for pep level blast
TransDecoder.Predict -t $assembly;

mv all_Trinity.fasta.transdecoder* $readFolder/

blastp -query $assembly".transdecoder.pep" -db /home/ruthgracewong/ncbi-blast-2.3.0+/db/uniprot_sprot.pep -num_threads 14 -max_target_seqs 1 -outfmt 6 > $assembly".blastp.outfmt6"

blastx -query $assembly -db /home/ruthgracewong/ncbi-blast-2.3.0+/db/uniprot_sprot.pep -num_threads 14 -max_target_seqs 1 -outfmt 6 > $assembly".blastx.outfmt6"

hmmscan --cpu 14 --domtblout $assembly".TrinotatePFAM.out" /home/ruthgracewong/ncbi-blast-2.3.0+/db/Pfam-A.hmm $assembly".transdecoder.pep" > $assembly".pfam.log"




#    get_Trinity_gene_to_trans_map.pl $readFolder/trinity_$sampleName".Trinity.fasta" $readFolder/trinity_$sampleName/Trinity.fasta.gene_trans_map
#    autoTrinotate.pl --Trinotate_sqlite /home/ruthgracewong/Trinotate-3.0.0/boilerplate/Trinotate.sqlite --transcripts $readFolder/trinity_$sampleName".Trinity.fasta" --gene_to_trans_map $readFolder/trinity_$sampleName/Trinity.fasta.gene_trans_map --conf /home/ruthgracewong/Trinotate-3.0.0/auto/conf.txt --CPU 14

