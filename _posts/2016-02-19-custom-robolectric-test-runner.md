---
layout: inner
title: 'Robolectric Bulk Test Configuration'
date: 2016-02-19
categories: blog development android
tags: code android testing robolectric config
lead_text: 'Many Android developers rely on Robolectric to unit test their Android apps and libraries. By running JUnit tests on your local machine''s JVM, it allows you to test-drive your Android development. Unfortunately you currently must provide a configuration annotation on each test class.'
---

I put forward my `CustomRobolectricTestRunner`, which allows you to configure your Robolectric test environment once and share it across all of your Android unit tests.

Robolectric provides the `RobolectricGradleTestRunner` to run your tests, which requires you to specify your `BuildConfig` class on each test in order to properly setup the test environment. As soon as this requirement was added I sought for another way to do it. One possibility would be to add it to the JUnit test class file template in Android Studio and then forget about it. However, each developer that works on the project would need to add this template and you would also need to alter it for each Android project you work on (as the package for the `BuildConfig` class would change). Instead, I prefer to include this configuration in custom test runner that extends from the built-in one.

The secret is to override the method `Config getConfig(Method method)`, which is part of the Robolectric test runner, to programmatically alter the configuration.

{% highlight java %}
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
{% endhighlight %}

By calling `super.getConfig(method)`, anything provided in the `@Config` annotation or by the Robolectric properties file will be used as the basis for the configuration. Then, you can see above I am altering two of the properties, the SDK Level and the `BuildConfig`. The first is due to the fact that Robolectric doesn't immediately support the latest Android SDK. You can specify a maximum SDK level for your test environment and then increase it whenever Robolectric is updated to support a new SDK. The second provides Robolectric with your `BuildConfig` class, which it uses access the final merged resources, assets and AndroidManifest.
