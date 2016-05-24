#!/usr/bin/env bash
set -e # halt script on error

function msg {
	printf "\e[0;37m==> $1\e[0m\n"
}

IGNORE_HREFS=$(ruby -e 'puts %w{
	www.wayfair.com/,
	www.amazon.com/echo/,
	play.google.com/music/,
	uk.linkedin.com/in/andrewlord1990,
	#
}.map{|h| "/#{h}/"}.join(",")')

export PROOF=true
export NOKOGIRI_USE_SYSTEM_LIBRARIES=true

msg "Building..."
bundle exec jekyll build --trace

msg "Proofing..."
bundle exec htmlproofer ./_site --url-ignore $IGNORE_HREFS  --check-html

bootlint ./_site/*.html
