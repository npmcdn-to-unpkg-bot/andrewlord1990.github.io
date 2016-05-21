---
layout: inner
title: 'Google IO: Mobile App Design'
date: 2016-05-23
categories: dev android google-io
tags: blog dev google-io conference android
lead_text: 'Put forward are a set of best practices when designing a mobile app, in particular one for retail.'
---

### Navigation and Exploration

Many apps offer location-based features such as 'find hotels near me'. A common mistake is to forget that they may wish to use another location beyond their current one. It should be easy for them to manually change it - such as allowing them to search near an address as well as searching near their current location. The Google Places API [TODO add link] helps with location-based information such as this.

Whenever possible you should avoid redirecting to the website and should try to keep the user within the app. If it is required then you should ensure the transition is a frictionless experience. Instead of taking them to the web browser, considering using Chrome Custom Tabs to show the content within the app. Chrome Custom Tabs are much more performant than using an embedded `WebView` and they also share cookies and cached data with the Chrome web browser. With Custom Tabs you are also able to change the toolbar colour and control enter and exit transitions. [TODO add link]

### Search and Commerce

Search should be featured prominently, following the Material Design guidelines for search [TODO add link]. Hiding the option away in an overflow menu or only offering it in specific parts of the app will make it much harder for users to find the content they are interested in. If search is the main feature of your app, consider using a persistent search field instead of a standard action bar.

[TODO add image of search on material design]

When providing searchable data, such as products, you should have obvious filtering and sorting options. Many apps use an icon for these, however, many users may not know what they mean. One option would be to offer clear filter and sort text buttons at the top of the page.

You should consider including comparison features, to help the customer decide between different items. This can be quite hard to do with a mobile app, one possibility is providing toggles next to each and a compare button at the top. It is very common that many users will add multiple products to their basket, just so that they can easily compare them in one place, unless a comparison feature is offered.

There is nothing worse than a customer downloading your app, adding items to their basket only for them to give up when trying to pay. The experience of managing payment cards and checking out the order should be a simple one. Try to avoid simply redirecting them to the website to complete.

### Sign In and Sign Up

There examples of apps which refer to login and register as 'sign in' and 'sign up', leaving customers confused. It is important you clearly differentiate between these options, so that the customer knows what to press. Users find login and registration difficult, many will just give up and not continue with your app. Passwords are hard to remember, people forget which email they used, users will forget if they actually had an account and if multiple login types are offered they will forget which one they used. You can help by making the login and registration forms quick and easy to fill in - ensuring the fields are easy to navigate and enter into. The Google Identity framework can help, allowing users to login using their Google account - or you could allow them to use their fingerprint.

The framework also includes a feature called Smart Lock [TODO add link]. This provides users with an assisted sign in process, possibly even skipping the whole process entirely. It works by allowing the login credential to be stored within Google, so that if you have logged in before the app can just sign you in automatically. This feature is available on both clients and websites. You can store the password or an account login such as Facebook or Google, then just request this from Smart Lock instead of asking the user for it.

You should aim to build user-friendly forms, not requiring the user to manually press many small input fields. You could even consider scrolling the page down as the fields are filled in. Simple aids can also be made by matching the keyboard offered with the input type of the field they are entering into.

### Usability

Whenever you offer visual information to the user, it should be labelled with text to help clarify it. For example, if an icon is vague or the meaning isn't immediately obvious, considering adding a text label to it.

Android 6 added runtime permissions, meaning if a feature requires a dangerous permission the user is asked to allow access. If you open an app and are immediately asked for a permission for which the usage isn't obvious then most people with simply deny it. Therefore, you should try to ask for permissions in context. To demonstrate this, if you required the location to show their position on a map, consider waiting until the map is on the screen before asking. This has the added benefit that in this situation the user will have performed an action, such as searching for nearby places and so is more inclined to allow the permission.

### Wrap Up

There are many more principles, for mobile apps, retail apps and mobile websites - available at [thinkwithgoogle.com](http://thinkwithgoogle.com). You can also check out the full talk on YouTube [TODO add link] if you are interested.
