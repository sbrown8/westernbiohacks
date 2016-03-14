# western biohacks

This was our project for U of T Biohacks.

We intended to make a web app where someone could upload their RNA-seq data (metagenome DNA-seq would work too), tell us which samples were in which condition (for example, an experimental and a control condition), and we would run the following analysis:

1) Use Trinity to assemble the reads de novo
2) Use Trinotate to annotate the assembly
3) Use Bowtie2 to map the reads onto the annotated assembly
4) Write a custom script to count how many reads there were for each annotation
5) Perform differential expression analysis with ALDEx2 in R

In the end, the result would have been MA plots (https://en.wikipedia.org/wiki/MA_plot) and MW plots (these are within vs. between condition effect size plots), and a table of annotated genes with effect sizes and p-values.

## progress

We've been writing scripts that work with Tian's termite data, and we got the assembly and part of the annotation working.

Sunday March 13: Ruth is taking down the Google compute engine, so this repository will be the sole record of our project.

## rationale

This was a fun exercise for U of T biohacks but it would not be a sustainable project in the long term for two reasons

1) Analyzing data takes a lot of computing power. We narrowed down our termite data to only include ~150 genes so that we could analyze it for the hackathon and still the assembly took an hour for six samples and blastx took 30 minutes. This was on a Google compute engine with 60GB RAM and 16 threads, which costs about 50 cents per hour to host (Ruth had some billing credits left over from Hack the North which we used for this project).

2) Bioinformatics is not something you can do without thinking about and looking at your data closely. For example, before running this pipeline, we had to filter out all the RNA in the termite samples that weren't termite. There was a lot of bacterial stuff and protozoa. If we hadn't been careful about contamination, the analysis would have been incorrect. Furthermore there are many options that the software in the pipeline use, and these should be optimized according to the input data.

