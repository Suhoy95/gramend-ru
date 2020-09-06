RU_PAGES=index.html about.html appreciation.html
PAGES+=$(RU_PAGES) $(RU_PAGES:.html=.en.html)

all: $(PAGES)

%.html: %.m4 $(wildcard include/*)
	m4 -I./include --fatal-warnings -P $< > $@
	tidy -quiet -indent --wrap 120 -modify $@

clean:
	git clean -xnf
	read -p "Are you sure?"
	git clean -xf
