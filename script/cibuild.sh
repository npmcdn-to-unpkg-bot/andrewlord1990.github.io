#!/usr/bin/env bash
set -e # halt script on error

bundle exec jekyll build
bundle exec htmlproof ./_site --href-ignore "#,https://uk.linkedin.com/in/andrewlord1990"
