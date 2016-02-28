#!/usr/bin/env bash
set -e # halt script on error

bundle exec jekyll build
bundle exec htmlproof ./_site --check_html true --href-ignore "#" --file-ignore "*/bower_components/*"
