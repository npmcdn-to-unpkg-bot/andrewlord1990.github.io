#!/usr/bin/env bash
set -e # halt script on error

function msg {
	printf "\e[0;37m==> $1\e[0m\n"
}

export PROOF=true
export NOKOGIRI_USE_SYSTEM_LIBRARIES=true

msg "Building..."
bundle exec jekyll build --trace

msg "Proofing..."
bundle exec htmlproofer ./_site --disable-external --allow-hash-href --check-html

bootlint ./_site/*.html
