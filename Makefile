SDCARD_M4 = $(wildcard sdcard/*.m4)
SDCARD_PAGES = $(SDCARD_M4:.m4=.html)

RU_PAGES=index.html about.html appreciation.html
PAGES+=$(RU_PAGES) $(RU_PAGES:.html=.en.html)


all: $(PAGES) $(SDCARD_PAGES)

%.html: %.m4 $(wildcard include/*)
	m4 -I./include --fatal-warnings -P $< > $@
	tidy -quiet -indent --wrap 120 -modify $@

clean:
	git clean -xnf
	read -p "Are you sure?"
	git clean -xf
