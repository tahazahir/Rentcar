tab=($(find . -name "*.html"))
for i in $(seq 0 ${#tab[*]})
do
	c=$(echo ${tab[$i]} | cut -f 2 -d ".")
	mv ${tab[$i]} "."$c".blade.php"
done
