PAGES=index.html about.html appreciation.html

all: $(PAGES)

%.html: %.m4 $(wildcard include/*)
	m4 --fatal-warnings -P $< > $@

clean:
	git clean -xnf
	read -p "Are you sure?"
	git clean -xf
