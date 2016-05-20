---
layout: inner
title: 'Google IO: What''s New in Android'
date: 2016-05-20
categories: dev android google-io
tags: blog dev google-io conference android
lead_text: 'Some parts of the Android N release were mentioned quickly during the keynote speech. However, this talk dedicated to Android took a bit more time going over these new additions to the platform.'
---

{% include post-image.html
            id="whatsNewAndroidModal"
            img="posts/google-io-2016/whats-new-android-opening.jpg"
            title="What's New in Android"
            caption="A great set of presenters" %}
{% include modals/view-image.html
            id="whatsNewAndroidModal"
            img="posts/google-io-2016/whats-new-android-opening.jpg" %}

The layout designer will see a complete overhaul, with the added option to design your layout using constraints. Rather than creating a view from nested layouts, you will connect elements of your UI together using constraints - all controlled through the graphical layout designer. One nice feature of this new type of layout is that you will be able to position elements based on them being a certain percentage of the way down or across the screen.


{% include post-image.html
            id="whatsNewAndroidConstraintLayoutModal"
            img="posts/google-io-2016/whats-new-android-constraint-layout.png"
            title="Android Layout Designer using constraints"
            caption="Design an Android layout using constraints" %}
{% include modals/view-image.html
            id="whatsNewAndroidConstraintLayoutModal"
            img="posts/google-io-2016/whats-new-android-constraint-layout.png" %}

### Multi-window

Users have often requested the opportunity to use two apps next to each other, e.g. making notes whilst watching a video. The multi-window feature of Android N will allow this through split-screen activities, accessed through long-pressing on the recent apps button. This will allow two activities to be displayed side-by-side or top-to-bottom, depending on screen orientation. There is a bar drawn between the two windows, meaning you can make one window smaller than the other, if you wish.

{% include post-image.html
            id="whatsNewAndroidSplitScreenModal"
            img="posts/google-io-2016/whats-new-android-splitscreen.png"
            title="Split-screen activities"
            caption="Two activities side-by-side on Android N" %}
{% include modals/view-image.html
            id="whatsNewAndroidSplitScreenModal"
            img="posts/google-io-2016/whats-new-android-splitscreen.png" %}

Once your app targets Android N, it will be opted into the multi-window mode by default. You will either need to update all the activities within your app to support it correctly or you can disable it through the app manifest. There are some parameters available to tweak the split-screen behaviour, such as specifying a minimum width and height for your activity.

When you have two activities displayed in split-screen, you will be able to drag and drop content from one to the other. This will make multi-window a very useful feature for many users.

### Notifications

The main visible difference to notifications is a nice refresh to their design. The new template looks much cleaner, highlights the app that is showing it and allows the notification to be read much more easily. If an app shows many notifications, then these can be grouped together like a conversation. Much like you can on Android Wear, you will also be able to quick-reply to a notification, direct from the notification area - even on the lock-screen.

The quick settings area above the notifications has also been tidied up. Users will now be able to select their favourite quick settings tiles, reorder them and even add custom ones provided by apps on their device. To support this feature there is a new quick settings API for apps to interact with.

{% include post-image.html
            id="whatsNewAndroidNotificationsModal"
            img="posts/google-io-2016/whats-new-android-notifications.png"
            title="Notification re-design"
            caption="New design for notifications and quick settings" %}
{% include modals/view-image.html
            id="whatsNewAndroidNotificationsModal"
            img="posts/google-io-2016/whats-new-android-notifications.png" %}

### Accessibility

Previously, users were able to change the device text size. Now you will also be able to select the display size, which not only changes text but the whole user interface, including action bars, system icons and more. This feature works by changing the screen density the device reports, making it larger or smaller than the screen's true pixel density.

Android N will support multiple user-specified languages. You will be able to select your different languages and order them by preference, giving the system a fallback order for languages.

### Power and Data Saving

A feature called [Doze](https://developer.android.com/training/monitoring-device-state/doze-standby.html) was added in Marshmallow, which helped save battery life whilst the device has its screen off and is stationary. Doze disables most background activity, allowing time windows in which it can occur. The concept is to limit battery consumption whilst you aren't using your device, likely whilst asleep. Android N will feature an additional light version of Doze that will run even if the device is moving. The idea here is to save battery life whilst the device is likely in your pocket. However, this version of Doze won't be as limiting to background activity, so that your device and apps work as you would expect.

A team at Google underwent Project Svelte, which had the goal of determining the causes for Android devices having suboptimal battery consumption. One outcome of this, which will feature in N, is that they have dropped some Intent actions which were causing lots of apps to wake up at once. The suggested way to respond to these events will now be to use the `JobScheduler`. This works in a more efficient manner as it determines when to schedule each Job rather than simply waking them all up. Incase you are interested, these actions are `CONNECTIVITY_ACTION`, `ACTION_NEW_PICTURE` and `ACTION_NEW_VIDEO`.

Many users have to limit how much mobile data they use due to the cost or how many MB they get in their contract. Android N will add a feature called Data Saver which will allow you to control how much data can be used overall and on an app-by-app basis. It will also let you find out exactly how much mobile data each app is using.

### Direct Boot

Currently in Android, if your device has to restart you will likely find your device stuck at the password prompt. After you have unlocked it you will need to wait for it to turn on fully before you can use it. Android N instead will boot up all the way to the lock-screen. It will show non-sensitive notifications and hide the content of sensitive ones until the device has been unlocked.

Coupled with Direct Boot, Android N will include seamless system updates. This means that the device will download new updates in the background and switch over to them when the device comes on. Through this mechanism, you will always be using the latest software on your device - giving you access to the latest security updates and fixes.

### Support Library

All Android developers should be familiar with the support libraries. Some changes are coming to the support-v4 compatibility library. Firstly, support for OS versions below API 9 will soon be dropped. It turns out supporting below API 9 requires a lot of work, so dropping it will enable more regular updates to the library. Secondly, the library will be split into multiple modules, so that you can include only the parts you need.

### Wrap Up

Android N may not be a complete user interface refresh like Lollipop, but it does include some nice user-facing changes and a lot of background improvements. The [developer preview](https://developer.android.com/preview) is available now and a full consumer release should be available later this summer.

You can check out the full "What's New in Android" talk on [YouTube](https://www.youtube.com/watch?v=B08iLAtS3AQ) if you are interested.
