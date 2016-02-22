---
layout: inner
title: 'Current Git Commit'
date: 2016-02-22
categories: blog development gradle android
tags: dev code gradle android
lead_text: 'Get access to the current Git commit and branch in your Gradle projects, for example displaying it in an Android app.'
---

When builds of your Android app are shared with many different developers, or you have multiple app testers, it can be useful to know exactly which build the developer has on their device.

You could achieve this by passing a build number from your CI tool, such as Jenkins or Travis, to display in your app or include as part of the version name. However, I also like to include the current Git branch and Git commit in the app, displaying it within a developer options page that is included in debug builds of the app.

This can be achieved through the use of two Gradle functions.

```groovy
def getCurrentGitBranch() {
    def gitBranch = "Unknown branch"
    try {
        def workingDir = new File("${project.projectDir}")
        def result = 'git rev-parse --abbrev-ref HEAD'.execute(null, workingDir)
        result.waitFor()
        if (result.exitValue() == 0) {
            gitBranch = result.text.trim()
        }
    } catch (e) {
    }
    return gitBranch
}
```

The core of the function is using the Git command `rev-parse`, with the argument `--abbrev-ref` against `HEAD` to get the branch name of the current commit. If the git command is not available or any errors occur during execution then the function will just return "Unknown branch".

```groovy
def getCurrentGitCommitHash() {
    def gitCommit = "Unknown commit"
    try {
        def workingDir = new File("${project.projectDir}")
        def result = 'git rev-parse --short HEAD'.execute(null, workingDir)
        result.waitFor()
        if (result.exitValue() == 0) {
            gitCommit = result.text.trim()
        }
    } catch (e) {
    }
    return gitCommit
}
```

This function is fairly similar to `getCurrentGitBranch`, except that it is passing the argument `--short` to `rev-parse`, to retrieve the hash of the current commit. Similar to `getCurrentGitBranch`, if the git command is not available or any errors occur the function will just return "Unknown commit".

The functions themselves can be used in any Gradle application. To make use of the information within an Android app project, you can pass it to your Java code via fields in the `BuildConfig` class. The config below, when included in your app `build.gradle` file, will allow you to access the current Git branch with `BuildConfig.GIT_CURRENT_BRANCH` and the current git commit with `BuildConfig.GIT_CURRENT_COMMIT`.

```groovy
defaultConfig {
  ...

  buildConfigField "String", "GIT_CURRENT_BRANCH", "\"${getCurrentGitBranch()}\""
  buildConfigField "String", "GIT_CURRENT_COMMIT", "\"${getCurrentGitCommitHash()}\""

  ...
}
```

There are many different ways to use and display this information in your Android apps. Currently, I generally just display it in an options page, behind an `if (BuildConfig.DEBUG)` check, to that the information can be accessed in all debug builds. I will leave it to you how you wish to use the information. Happy coding!
