php build/build.php src\iso690.hamlbuild\xmllint\xmllint --format src\iso690.csl -o src\iso690.csl
pandoc test\test.markdown --bibliography test\biblatex2.bbx --csl src\iso690.csl > test\test.html
start test\test.html