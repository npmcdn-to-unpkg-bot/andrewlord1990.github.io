---
layout: inner
title: 'Google IO: Android TV'
date: 2016-05-25
categories: dev android google-io
tags: blog dev google-io conference android tv
lead_text: 'There are millions of Android TV devices, some TVs with it built-in and some set top boxes. By making an app with Android TV support will allow your app to be seen on the biggest screen in the house!'
---

There are many people who think that developing for Android TV will be difficult. However, in reality it couldn't be easier - it's just Android, same SDK, same tools, same IDE. You can even create a single SDK that supports phones, tablets and TVs.

### Features

When designing your app for TV it is important to remember that TVs often have very different hardware to phones and tablets. Firstly, they don't usually have a touchscreen or things like gyroscopes and microphones. Make sure your app doesn't have these features marked as required in the `AndroidManifest`. Also, watch out for permissions that add an implicit feature requirement. For example, the `RECORD_AUDIO` permission will automatically add that your app requires a microphone. You can get around this by manually adding the feature tag and setting it to `required=false`.

Navigation on the TV is achieved using a remote control with a DPAD, allowing you to move horizontally and vertically. You therefore need to make sure any selectable view is marked as focusable as not all views are focusable by default (e.g. `ImageView`).

Historically TVs were unable to display information in the areas around the edge of the screen. This meant video streams had a blank area around them to ensure the whole video was seen. When we made the shift to high-definition TVs we were able to draw right to the edge, but the video broadcasts still had this empty area. Therefore, TVs started cutting out this area at the edge of the video to ensure it reaches the edge of the screen. This is called Overscan Protection and it is something you will need to account for in your apps. The general rule is to not draw anything important in the outer 5% of the screen as it might be cropped by the TV.

### The SDKs

It uses the same Android SDK as other devices, so no changes are required here. The Unity game engine also has full support for Android TV and the DPAD, it even handles the Overscan Protection for you.

In order to design your TV app user interface the Leanback support library is available. This provides UI components with the TV best practices built-in. The `BrowseFragment` helps you create a well-designed home page, containing a grid of content, sidebar and search option. Selecting one of the items of content can take you to a `DetailsFragment`, which you can customise to show your detail page such as product information. There is a `PlaybackOverlayFragment` for showing playback controls and a `SearchFragment` to give you access to voice search, a text search field and search results.

Users can perform a global search on Android TV, which gives them access to Google search results. By using a feature called Universal Search [TODO add link] you can also get your app content included in these global search results. It works by you providing a content provider to search your data and specifying `includeInGlobalSearch` in your searchable configuration file. Doing this will really help users discover the content your app has to offer.

### Test and Release

Another reason people think it will be hard to develop for TV is that they don't own an Android TV. However, there is an emulator available which is very performant. It is perfectly good enough to develop the whole app, even when testing playback of video. There is an extended controls window that gives you access to the DPAD and all the other inputs you will need to the TV.

You have finished your app and are ready to release it, making it available is as simple as checking a box in Google Play to distribute to TV. It is up to you whether you have a single APK for phones and TV or whether you have separate APKs. Generally, this decision would come down to how similar the two apps are. If they just have different layouts for the pages then a single APK would likely be better. However, if the two platforms show different screens entirely or serve different data, then in this case separate APKs might be better.

### Wrap Up

I hadn't actually tried out an Android TV before and didn't realise quite how good it would be. I am now eager to get my hands on one and then to start developing apps for it!

You can check out the full talk on YouTube if you are interested.

{% include youtube-embed.html
            video_id="[TODO add video id]" %}
