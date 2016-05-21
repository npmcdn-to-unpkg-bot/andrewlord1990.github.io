---
layout: inner
title: 'Google IO: Android Wear'
date: 2016-05-21
categories: dev android google-io
tags: blog dev google-io conference android wear
lead_text: 'Version 2 of the Android operating system for wearables was announced at this year''s Google IO. It boasts a complete design and navigation overhaul, more powerful watch faces and standalone apps.'
---

There were some things about the original Android Wear that made it less than perfect. These were that information was was harder to get to than it needed to be, navigation was confusing and the reliance on the phone seemed awkward and unnecessary. Taking these things into account allowed them to develop Wear 2.0, a major rethink of the wearable operating system.

{% include post-image.html
            id="wear2InfographicModal"
            img="posts/google-io-2016/wear-2-infographic.jpg"
            title="Wear 2 new features"
            caption="Lots of interesting changes - wait, did that say standalone apps?" %}
{% include modals/view-image.html
            id="wear2InfographicModal"
            img="posts/google-io-2016/wear-2-infographic.jpg"
            title="Wear 2 new features" %}

### New User interface

Selecting different watch faces is as simple as swiping left and right between your favourites and adding new faces to the list by selecting the option on the right-hand end. Watch faces will now be able to be customised with various settings and have complications added to them. Complications are the extra bits of information on a watch face, in this instance things such as heart rate, event reminders and steps taken today. A new API has been developed for apps to act as data providers giving access to this data and watch faces can show this data. The watch face will have control over how it is displayed, so that it fits in with the rest of the watch face. However, the data provider can specify the type of data it contains, such as short text, icon, value within a range - to give some control over how it will be displayed.

Swiping down from the top will give you access to quick settings, such as WiFi, flight mode, brightness and alarms. This area will be familiar to users of Android on phones and tablets. As before, swiping downwards will take you through your various notifications.

Android Wear 2.0 watches feature a physical button on the side which acts as a back key. Upon pressing it you will be taken back one step, the same as the back key on Android phones and tablets. When looking at your watch face, pressing back will slide out the app launcher. This is presented to you as a vertically scrolling list, with your most used apps repeated at the top.

### Design and navigation

In the first version of Android Wear, navigation existed in all 4 directions, which made it very easy to get lost. It also meant you were never really sure which way you needed to swipe to perform a particular action. Wear 2.0 improves on this by focusing purely on vertical navigation.

When you launch an app it will consist of a sequence of vertically positioned screens. At the bottom of the list is a wearable action drawer, which contains the primary action and an overflow icon. You can drag up to expand the drawer and interact with the full list of actions, presented as a vertically scrolling list. Likewise, at the top of the app will be a wearable navigation drawer if an app wishes. This will contain navigational elements to take you to different parts of the app.

When designing your Wear 2.0 app it is suggested that you use a dark theme. Users generally don't want their watch to emit a lot of light. Watches are often viewed at night and you also want the battery to last as long as possible.

### Messaging

When you receive a message, such as an email, SMS or chat, a notification is displayed in the notifications area. Instead of having to swipe to the side to reply, an action will be shown inline at the bottom of the notification. Once you select to reply, you will be given the option of doing this through voice, on-screen keyboard, handwriting and smart-reply. The smart-reply option uses machine learning to predict how you would want to reply to the message. Unlike before the messages won't be taken away until the user chooses to dismiss them. This allows you to follow the whole conversation on your watch and view past messages.

### Standalone Apps

You can now have standalone apps that don't require any form of connection to your phone. The watch will still maintain a connection to your phone if it is there as it did before, to share notifications and other features. However, you can now have apps that run in an untethered mode, where they have direct access to the internet and other sensors directly on the watch. This will allow you to go for a run without taking your phone, giving you access to activity tracking, music streaming - all directly on the watch.

Android Wear uses a notification bridge, to share them between the watch and the phone. Now you will be able to register your watch as a separate device in Firebase Cloud Messaging (previously Google Cloud Messaging), allowing you to deliver watch-specific notifications. If you do this, make sure you disable the notification bridge for your app, to stop it interfering.

Google Fit will allow the watch to perform real-time activity recognition and tracking of you running and cycling. A future expansion to this is in development to allow the watch to automatically detect which workout you are doing at the gym, be it deadlifts, press-ups or shoulder presses.

### Wrap Up

Android Wear 2.0 makes owning an Android smart watch an even more exciting prospect than the already great 1st version. From apps not requiring the phone, to many more reply options and a much clearer navigation flow. The [developer preview](https://developer.android.com/wear/preview/index.html) is available now and hopefully the consumer release will be rolled out later this year.
