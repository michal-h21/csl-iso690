php build/build.php src\iso690.haml
pandoc test\test.markdown --bibliography test\biblatex2.bib --csl src\iso690.csl
pause