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

### Multi-window

Users have often requested the opportunity to use two apps next to each other, e.g. making notes whilst watching a video. The multi-window feature of Android N will allow this through split-screen activities, accessed through long-pressing on the recent apps button. This will allow multiple activities to be displayed side-by-side or top-to-bottom (depending on screen orientation). There is a bar drawn between the two windows, to allow you to control where the divide is. This means one window can be made smaller than the other, if you wish.

Once your app targets Android N then it will be opted into the multi-window mode by default. You will either need to update all the activities within your app to support it properly, or you can disable it through the app manifest. There are some parameters available to tweak the split-screen behaviour, such as specifying a minimum width and height for your activity.

When you have two activities displayed in split-screen, you will be able to drag and drop content from one to the other. This will make multi-window a very useful feature for many users.

### Notifications

The main noticeable difference is the complete change in design. New templates are used, which now show which app is displaying the notification and provide a much cleaner user interface. Apps will be able to bundle notifications together, which would be useful if it is different messages within a chat conversation for example. You will also now be able to quick-reply within the notification, even when it is shown on the lock-screen.

Some changes have also been made above the notifications area to the quick settings tiles. Users will be able to select their favourite quick settings tiles, reorder them and even use new custom tiles provided by the apps installed on the device. To support this there will be a new quick settings API for apps to interact with.

### Accessibility

Previously, users were able to change the device text size. Now you will be able to select the display size, which not only changes text size but the whole user interface, including action bars, system icons and more. This feature works by changing what screen density the device will report, to be larger or smaller than the screen's true pixel density.

Android N will support multiple user-specified languages. You will be able to select your different languages and order them by preference, giving the system a fallback order for languages.

### Power and Data Saving

Lighter version of Doze
Project Svelte
Data Saver

### Direct Boot

Seamless system updates
Direct Boot

### Support Library
