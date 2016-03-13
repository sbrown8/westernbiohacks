All of the reads for the same project should be uploaded in a special project folder, where all the analysis for that project will run.

To run our default termite data, use this folder for the readsFolder: /home/ruthgracewong/reads/

Unzip files:

```
unzip.sh readFolder
```

Assembly:

```
assembly.sh readFolder
```

Annotation:

```
annotate.sh readFolder
```

Mapping reads to annotations to get a count table of number of reads per annotation per sample

```
map.sh readFolder
```

Differential expression analysis (outputs plots in png format, and a table in tab separated .txt format with one row per gene with effect size and p value)

```
Rscript diff.r readFolder
```


