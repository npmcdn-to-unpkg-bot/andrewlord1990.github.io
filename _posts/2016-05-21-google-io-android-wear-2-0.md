---
layout: inner
title: 'Google IO: Android Wear'
date: 2016-05-21
categories: dev android google-io
tags: blog dev google-io conference android wear
lead_text: 'Version 2 of the Android operating system for wearables was announced at this year''s Google IO. It boasts a complete design and navigation overhaul, more powerful watch faces and standalone apps.'
---

The problems with Android Wear were that information was harder to get to than it needed to be, navigation was confusing and the reliance on the phone seemed awkward and unnecessary. Taking these things into account allowed them to develop Wear 2.0, a major rethink of the wearable operating system.

{% include post-image.html
            id="wear2InfographicModal"
            img="posts/google-io-2016/wear-2-infographic.jpg"
            title="Wear 2 new features"
            caption="Lots of interesting changes - wait, did that say standalone apps?" %}
{% include modals/view-image.html
            id="wear2InfographicModal"
            img="posts/google-io-2016/wear-2-infographic.jpg" %}

### New User interface

The user will be able to select different watch faces, by maintaining a list of favourites. On each of these watch faces you will be able to customise various settings and add complications to it. Complications is the name for extra bits of information on a watch face beyond the time, such as heart rate, event reminders and incoming messages. Swiping left and right will allow you to switch between your favourite watch faces. Whereas swiping down from the top will give you access to quick settings, such as WiFi, flight mode, brightness and alarms. As before, swiping downwards will take you through your various notifications.

Android Wear 2.0 watches will feature a hardware button which will act as a back key. Upon pressing it you will be taken back one step, the same as the back key on Android phones and tablets. When looking at your main watch face, pressing back will slide out the app launcher. This is presented to you as a vertically scrolling list, with your most used apps repeated at the top.

### Design and navigation

In the first version of Android Wear, navigation existed in all 4 directions, which made it very easy to get lost. It also meant you were never really sure which way you needed to swipe to perform a particular action. Wear 2.0 improves on this by focusing purely on vertical navigation.

When you launch an app it will consist of a sequence of vertically positioned screens. At the bottom of the list is a wearable action drawer, which contains the primary action and an overflow icon. You can drag up to expand the drawer and interact with the full list of actions, presented as a vertically scrolling list. Likewise, at the top of the app will be a wearable navigation drawer if an app wishes. This will contain navigational elements to take you to different parts of the app.

When designing your Wear 2.0 app it is suggested that you use a dark theme. Users generally don't want their watch to emit a lot of light. Watches are often viewed at night and you also want the battery to last as long as possible.
