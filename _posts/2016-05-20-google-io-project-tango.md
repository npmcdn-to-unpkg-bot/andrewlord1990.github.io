---
layout: inner
title: 'Google IO: Project Tango'
date: 2016-05-20
categories: dev android google-io
tags: blog dev google-io conference android ar
lead_text: 'Hands-on with a Project Tango dev kit and a selection of different apps built for the platform.'
---

There is a lot of talk this year at Google IO 2016 about virtual reality. However, another interesting area is augmented reality in the form of [Project Tango](https://www.google.com/atap/project-tango/). I got the opportunity to try it out at one of the displays present at the conference. Project Tango can track 3D space, track motion and can be used to create applications that merge the physical and digital worlds. Virtual reality seems to be getting much more attention at the moment, however, in many ways augmented reality may prove to be much more useful.

### Dev Kit

The device itself was a specially made developer kit tablet. For Project Tango to work a device must have a wide-angle lens camera for motion and depth tracking; a sufficiently powerful graphics card and a high quality accelerometer and gyroscope. The developer kit is [available for purchase](https://store.google.com/product/project_tango_tablet_development_kit) and a consumer device is in development by Lenovo, which will be properly announced at a later date.

### The Apps

The first app I tried out is called [Measure It](https://play.google.com/store/apps/details?id=com.projecttango.tangomeasureit), which allows you to measure real-world objects through your display. Once you have aimed the camera, you can select points on the screen you wish to measure between. The app is able to snap the selection to edges detected within the scene, to make it easy to measure the height of a kitchen worktop for example. It is easy to see many situations this would come in handy.

{% include post-row-images.html
            id0="tangoMeasureItModal"
            img0="posts/google-io-2016/tango-measure-it.png"
            title0="Tango Measure It two points"
            caption0="Measure it - sizing objects with ease"
            id1="tangoMeasureItMultiPointModal"
            img1="posts/google-io-2016/tango-measure-it-multi-point.png"
            title1="Tango Measure It multiple points"
            caption1="Measure it - measure between multiple points" %}
{% include modals/view-image.html
            id="tangoMeasureItModal"
            img="posts/google-io-2016/tango-measure-it.png"
            title="Tango Measure It two points" %}
{% include modals/view-image.html
            id="tangoMeasureItMultiPointModal"
            img="posts/google-io-2016/tango-measure-it-multi-point.png"
            title="Tango Measure It multiple points" %}

Next, I tried out an app called [Constructor](https://play.google.com/store/apps/details?id=com.projecttango.constructor), which allows you to build a 3D mesh of your surroundings. By moving the device around, the 3D space around you is captured by the camera, including colour and depth. The app uses this information to build a 3D mesh in real-time. If you scan the scene carefully enough it can build a very accurate mesh, with a very small number of gaps within it.

{% include post-image.html
            id="tangoConstructorModal"
            img="posts/google-io-2016/tango-constructor.png"
            title="Tango Constructor"
            caption="Scan your surroundings to build a 3D mesh" %}
{% include modals/view-image.html
            id="tangoConstructorModal"
            img="posts/google-io-2016/tango-constructor.png"
            title="Tango Constructor" %}

You want to buy a new dish washer or cabinet, but you aren't sure if it will fit in the available space or if it will look good in your kitchen. US retailer [Wayfair](https://www.wayfair.com) has an application that will allow you to see a virtual overlay of the product as if it is actually there in the room. You can move around and view it from different angles, whilst also being able to see if it fits in the available space.

The final app I got to see was a game called [Woorld](http://www.funomena.com/woorld) by the developer [Funomena](http://www.funomena.com/). The game plays out as a virtual playground overlaid on top of your real surroundings. You are able to place many different 3D objects and then interact with them in fun ways. The best example was by placing a tap, you can have it fill the area with water. It was very impressive to see the water correctly fill the space, detecting the edges formed by the wall and a nearby cabinet.

### Wrap Up

Augmented Reality is not a new idea, but Project Tango was very impressive to see. The applications seemed to work really well and there was a great blend between the real world seen through the camera and the virtual objects placed within it. There are many situations this technology could be of great help and it will be interesting to see how the project evolves going forward.
