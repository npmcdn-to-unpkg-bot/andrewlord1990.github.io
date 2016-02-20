---
layout: inner
title: 'Robolectric Bulk Test Configuration'
date: 2016-02-19
categories: blog development android
tags: dev code android testing robolectric config
lead_text: 'Many Android developers rely on Robolectric to unit test their Android apps and libraries. By running JUnit tests on your local machine''s JVM, it allows you to test-drive your Android development. Unfortunately you currently must provide a configuration annotation on each test class.'
---

I put forward my `CustomRobolectricTestRunner`, which allows you to configure your Robolectric test environment once and share it across all of your Android unit tests.

Robolectric provides the `RobolectricGradleTestRunner` to run your tests out-of-the-box, which requires you to specify your `BuildConfig` class on each test in order to properly setup the test environment. This requirement didn't sit well with me, firstly you have to remember to add this annotation to each test and secondly if this ever changes you will need to update every test. One simple alternative would be to add it to a file template within Android Studio and then your generated test classes would have this inserted automatically. However, doing it this way would require each developer who works on a project to add this to the template. It would also mean you need a different template for each Android project you work on, due to the package name for the `BuildConfig` class changing. Therefore, I think a better way of doing this is through a custom test runner that extends `RobolectricGradleTestRunner` and includes the configuration here once, to be shared by every test.

The way you will want to provide this configuration is by overriding the method `Config getConfig(Method method)`. This will allow you to receive any configuration from the `@Config` annotation and from the Robolectric properties file and then programmatically alter it before it is used by Robolectric.

```java
@Override
public Config getConfig(Method method) {
    Config config = super.getConfig(method);

    return new Config.Implementation(
            ensureSdkLevels(config.sdk()),
            config.manifest(),
            config.qualifiers(),
            config.packageName(),
            config.resourceDir(),
            config.assetDir(),
            config.shadows(),
            config.application(),
            config.libraries(),
            ensureBuildConfig(config.constants()));
}
```

By calling `super.getConfig(method)`, anything provided in the `@Config` annotation or by the Robolectric properties file will be used as the basis for the configuration. Then, I am altering two of the properties: the SDK level and the build config. The first is being done due to Robolectric not immediately supporting all versions of the Android SDK. By limiting the SDK levels in the configuration, you can specify a maximum SDK level for the test environment and then increate it whenever Robolectric is updated. The second change provides Robolectric with your `BuildConfig` class, which it uses to access the final merged resources, assets and AndroidManifest.

```java
private Class<?> ensureBuildConfig(Class<?> constants) {
    if (constants == Void.class) {
        return BuildConfig.class;
    }
    return constants;
}
```

The `ensureBuildConfig` method will configure the test runner to use your `BuildConfig` class, unless one has already been provided. By using this method, you won't need to specify your `BuildConfig` class in every test anymore.

```java
private static final int MAX_SDK_LEVEL = 21;

private int[] ensureSdkLevels(int[] sdkLevels) {
    int numberSdks = sdkLevels.length;
    int[] sdks = new int[numberSdks];
    for (int i = 0; i < numberSdks; i++) {
        int sdk = sdkLevels[i];
        if (sdk > MAX_SDK_LEVEL || sdk <= 0) {
            sdks[i] = MAX_SDK_LEVEL;
        } else {
            sdks[i] = sdk;
        }
    }
    return sdks;
}
```

The `ensureSdkLevels` method will make sure that no unsupported SDK levels are used. The full source of `CustomRobolectricTestRunner` is available as [a Gist](https://gist.github.com/andrewlord1990/fd5bfd5460e57747fd87).

This completes the `CustomRobolectricTestRunner`, there are many other customisations you could make and now that you have your own test runner you can easily make these without having to alter all of your test classes. If you have any suggestions, corrections or any other interesting customisations to the test runner then please let me know. In the meantime, good luck with your Android unit testing!
