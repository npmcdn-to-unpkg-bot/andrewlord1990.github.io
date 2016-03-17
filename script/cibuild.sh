#!/usr/bin/env bash
set -e # halt script on error

bundle exec jekyll build
bundle exec htmlproofer ./_site --url-ignore "#,https://uk.linkedin.com/in/andrewlord1990"
bootlint ./_site/*.html
