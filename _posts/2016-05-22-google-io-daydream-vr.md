---
layout: inner
title: 'Google IO: Daydream VR'
date: 2016-05-22
categories: dev android google-io
tags: blog dev google-io conference android daydream vr
lead_text: 'Everyone wants to throw their hat into the VR-ring - Google''s attempt brings it to the Android community. The platform promises high-quality virtual reality for Android phones and tablets. Find out what to create and how to get it into user''s hands.'
---

Daydream was announced as part of the keynote speech and considering Android is already available on phones, tablets, wearables and TVs, it makes sense that Google would look to add virtual reality into the mix. Android already has a community of app and game developers - the prospect of using your favourite Android apps and games within VR are pretty exciting. The technical details of developing for Daydream are [available online](https://vr.google.com/daydream/), the talk I attended focused on how to design your VR app and how to deliver it to your users.

Users tend to use mobile apps and games for short periods of time, roughly 5 minutes, several times a day. Conversely, VR apps tend to be used for longer sessions - around 30 minutes and often only once a day. Therefore, it is important to design your virtual reality app to take this into account.

### The Apps

It is crucial to give the user a good first experience with your app - first impression matters. Imagine you are trying out a new game and it doesn't work properly or you are harassed with constant adverts, you aren't going to bother trying it again. Virtual reality apps should consist of content delivering an immersive and interactive narrative. The best way to monetise this would be letting users try out your app and to provide the entire experience with a single purchase.

### Getting it out there

Daydream apps will be delivered to users through Google Play, which has been given a virtual reality overhaul. The whole interface appears in front of you, giving you access to featured and popular apps, followed by areas dedicated separately to apps and then to games. You will see that a lot of space is given to each app, meaning less apps are shown to the user at once. This is to ensure the experience is simple and not distracting.

{% include post-image.html
            id="daydreamHomeModal"
            img="posts/google-io-2016/daydream-home.jpg"
            title="Daydream VR"
            caption="Daydream VR - the home screen" %}
{% include modals/view-image.html
            id="daydreamHomeModal"
            img="posts/google-io-2016/daydream-home.jpg"
            title="Daydream VR" %}

When you want to publish a Daydream app there will be an app review process to ensure it is of sufficient quality for the platform.

- Obviously, the app must install correctly.
- It must be able to maintain a stable 60 frames-per-second during lengthy play sessions on a Daydream-ready device. (Google will announce at a later date which devices will be used for testing.)
- You should be able to use the app without removing your phone from the headset viewer. Therefore, it must not fallback to 2D at any point or bring up any system dialogs - as such you should avoid asking for any dangerous system permissions.
- It should run in immersive fullscreen mode, hiding the status bar and navigation bar.
- A user should be able to focus on elements, so you should avoid placing objects too close.
- The app should maintain head tracking - continuing to update the display based on motion even during screen load. You can either load new scenes in the background or fade to a solid colour during loading.
- Whenever there is a visible horizon line it should remain stable.
- The app must work with the Daydream controller.
- There should be a 3D VR app icon and a 360 degree photosphere screenshot provided. Scripts will be published to help create these within Android and Unity.

### What should I create?

When creating your app there are two different routes you can go down. A self-contained VR environment that is accessible entirely in VR with no 2D flows. Or a hybrid app that contains both 2D and Daydream experiences - allowing you to simply add VR content to your existing app.

It is important to consider that different people look for different things in the apps they use. An obvious application for VR is a rollercoaster simulator, however, as in real life not everyone is a fan of roller coasters. Therefore, both thrilling and relaxing experiences will do well on Daydream. You can categorise virtual reality apps into levels of motion intensity: no motion, moderate motion and intense motion. No motion is when the user only moves around when they choose to, for example sitting in a virtual movie theatre. Moderate motion consists of motion within 2 degrees of freedom, for example walking or driving. Finally, intense motion involves motion within 3 to 6 degrees of freedom - such as flying a spaceship or riding a rollercoaster. There is room for apps to be created in each of these different areas, where each can produce a truly immersive experience for the user.

Check out the full talk on [YouTube](https://www.youtube.com/watch?v=LutcJT1t9t0) if you are interested.
