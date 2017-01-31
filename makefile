copy-deps:
	rm -rf ext/meta-box
	rsync -r --exclude .git submodule/meta-box/ ext/meta-box

