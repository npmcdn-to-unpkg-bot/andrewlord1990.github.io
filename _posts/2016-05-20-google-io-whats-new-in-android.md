---
layout: inner
title: 'Google IO: What''s New in Android'
date: 2016-05-20
categories: dev android google-io
tags: blog dev google-io conference android
lead_text: 'Some parts of the Android N release were quickly mentioned during the keynote speech. However, this talk dedicated to Android took a bit more time going over these new additions to the platform.'
---

{% include post-image.html
            id="whatsNewAndroidModal"
            img="posts/google-io-2016/whats-new-android-opening.jpg"
            title="What's New in Android"
            caption="A great set of presenters to discuss the new Android features" %}
{% include modals/view-image.html
            id="whatsNewAndroidModal"
            img="posts/google-io-2016/whats-new-android-opening.jpg" %}

The layout designer will see a complete overhaul, with the added option to design your layout using constraints. Rather than creating a view from nested layouts, you will connect elements on your UI together using constraints - all controlled through the graphical layout designer. One nice feature of this new type of layout is that you will be able to position elements based on them being a certain percentage of the way down or across the screen.

[TODO add image]

### Multi-window

Users have often requested the opportunity to use two apps next to each other, e.g. making notes whilst watching a video. The multi-window feature of Android N will allow this through split-screen activities, accessed through long-pressing on the recent apps button. This will allow multiple activities to be displayed side-by-side or top-to-bottom (depending on screen orientation). There is a bar drawn between the two windows, to allow you to control where the divide is. This means one window can be made smaller than the other, if you wish. [TODO add image]

Once your app targets Android N then it will be opted into the multi-window mode by default. You will either need to update all the activities within your app to support it properly, or you can disable it through the app manifest. There are some parameters available to tweak the split-screen behaviour, such as specifying a minimum width and height for your activity.

When you have two activities displayed in split-screen, you will be able to drag and drop content from one to the other. This will make multi-window a very useful feature for many users.

### Notifications

The main noticeable difference is the complete change in design. New templates are used, which now show which app is displaying the notification and provide a much cleaner user interface. Apps will be able to bundle notifications together, which would be useful if it is different messages within a chat conversation for example. You will also now be able to quick-reply within the notification, even when it is shown on the lock-screen. [TODO add image]

Some changes have also been made above the notifications area to the quick settings tiles. Users will be able to select their favourite quick settings tiles, reorder them and even use new custom tiles provided by the apps installed on the device. To support this there will be a new quick settings API for apps to interact with. [TODO add image]

### Accessibility

Previously, users were able to change the device text size. Now you will be able to select the display size, which not only changes text size but the whole user interface, including action bars, system icons and more. This feature works by changing what screen density the device will report, to be larger or smaller than the screen's true pixel density.

Android N will support multiple user-specified languages. You will be able to select your different languages and order them by preference, giving the system a fallback order for languages.

### Power and Data Saving

A feature called Doze [TODO add link] was added in Marshmallow, which helped save battery life whilst the device has its screen off and is stationary. Doze disables most background activity, allowing windows in which it can occur, at increasingly spaced-out intervals. The concept is to limit battery consumption whilst you aren't using your device, likely whilst asleep. Android N will feature an extra light version of Doze that will run even if the device is moving. The idea here is to save battery life whilst the device is likely in your pocket. However, this version of Doze won't be as limiting to background activity, so that your device and apps work as you would expect.

A team at Google underwent Project Svelte, which had the goal of determining the causes for Android devices to have suboptimal battery consumption. One outcome of this which will feature in N is that they have dropped some Intent actions, which were causing lots of apps to wake up and then likely do nothing before going back to sleep again. These revolve around when the network connection type changes and when you have taken a photo. The suggested way to respond to these events will now be to use the JobScheduler. This works in a more efficient manner, as it determines when to schedule each Job, rather than simply waking them all up. [TODO add intent actions]

Many users have to limit how much mobile data they use, due to the cost or how many MB they get in their contract. Android N will add a feature called Data Saver [TODO add image] which will allow you to control how much data can be used overall and on an app-by-app basis. It will also let you find out exactly how much mobile data each app is using.

### Direct Boot

Currently in Android, if your device has to restart you will likely come back to your device only to find it stuck at a prompt to enter your password or PIN. After you have unlocked it then you will need to wait for it to turn on properly before you can use it. Android N instead will boot up all the way to the lock-screen. It will show non-sensitive notifications and hide the content of sensitive ones until the device is unlocked.

Coupled with this Android N will include seamless system updates. This means that the device will download the new update in the background and will simply switch them over when the device comes on. This means you will always be using the latest software on your device. This will ensure everyone has the latest security updates and fixes.

### Support Library

All Android developers should be familiar with the support libraries. Some changes are coming soon to the support-v4 compatibility library. Firstly, they will be dropped support for below API 9. Supporting below API 9 requires a lot of work and by dropped it they will be able to make more regular updates to the library. Secondly, the library will be split up into multiple modules, so that you can include only which parts you need. These will include, for example, support-compat, support-fragment, support-media etc.

### Wrap Up

Android N may not be a complete user interface refresh like Lollipop, but it does include some nice user-facing changes and a lot of background improvements. The [TODO link to beta] beta is available now and a full consumer release should be available later this summer.
