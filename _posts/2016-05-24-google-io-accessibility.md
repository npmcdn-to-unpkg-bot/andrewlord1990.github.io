---
layout: inner
title: 'Google IO: Accessibility'
date: 2016-05-24
categories: dev android google-io
tags: blog dev google-io conference android
lead_text: 'Many users have accessibility needs, it is important that we create products that can be used by everyone. We should aim to challenge assumptions for the benefit of all users.'
---

Accessibility affects more than just those with disabilities, such as blindness or not having use of their hands. There is also the concept of situational accessibility. When driving you are unable to look at your device and can't really touch it. If you are carrying some heavy shopping bags you are unable to pick up and operate your device. Therefore, making your app as accessible as possible will benefit everyone.

### APPlicable

There is a program called APPlicable [TODO add link] which is a Google Tel Aviv program. It helps startups make their apps more accessible by inviting developers to see how blind users interact with their app. Many are surprised to find it can be a horrible experience with parts of the app impossible to use. Some developers who were part of this program suggested simplifying the navigation into shorter lists and to ensure all UI elements are properly labelled.

### Accessibility Services

There are various different services within Android to help those with accessibility needs interact with their device.

TalkBack, which can be turned on in settings, enables the UI to be read out loud to the user. This allows those who are blind to navigate around the device and use apps. It allows you to swipe to move between elements on the screen or you can move your finger around and it will read out what you are pointing at.

BrailleBack is an extension to the TalkBack service that uses a refreshable braille display connected to the Android device. Braille dots on the keyboard will raise and lower to allow what is on screen to be provided to the user through braille.

Switch Access is a peripheral that consists of two large buttons, otherwise known as an adaptive switch. One button allows the user to navigate to the next element on the screen and the other is for selecting things. This input method is really useful for users who are unable to interact with a touchscreen.

When testing you app for accessibility it is suggested you first start with TalkBack as it will check how content is presented to the user. Then, if you can you should try with Switch Access to see how input into your app works for these users.

### App Changes

Text labels allow visual elements to be described by TalkBack, which is an attribute called `contentDescription` for `ImageView` and `CheckBox`. Editable fields should either have a `hint` set or a text field can have a `labelFor` attribute to link it to the field. When selecting your labels it is important they make sense, for example 'edit' would be more useful than 'pencil'. You should also remember it will be read out loud, so try not to make them too long.

If touchable areas are too small, users who have a tremor will struggle to select them. You should aim for making these targets a minimum of 48dp x 48dp. The visual area doesn't need to be this size, you could make the touchable area larger than what is seen - possibly using a `TouchDelegate`.

Proper contrast allows for visually distinguished elements, making them easier to see for everyone and in particular those with a form of visual impairment. Consider using a contrast ratio of 4.5:1 from foreground to background. To make this easier there are online tools available to measure the contrast ratio between two colour values [TODO add link]. When you have text content that is large (18sp or greater), then you should aim for a ratio of 3:1, or 4.5:1 with smaller text.

When creating your view layouts, there are attributes you can add to make sure it makes sense to a screen reader. Firstly, not all views are clickable by default (such as `ImageView`), so make you label the clickable views. Secondly, the `focusable` attribute is used to denote an element that should group content. For example, if you have a row of data with a label and a value, by making the parent layout focusable will mean the screen reader can read it out together. This should make the view more understandable and ensure everything is read out in the correct order.

### Testing

The best way to ensure the app is fully accessible is through manual testing with features like TalkBack enabled. However, there are some automated methods you can use as a first pass through the application. The Accessibility Testing Framework [TODO add link] is integrated with Espresso (`AccessibilityChecks.enable`) and Robolectric (`@AccessibilityChecks`). This will test the view currently being tested for common accessibility issues. There is also Accessibility scanner [TODO add link] that runs on the device for real time evaluations, which can be used by non-technical users. By scanning the screen it can show you a screenshot with suggested fixes highlighted. This can then be easily shared with your developers if you aren't the person working on the fixes. These tools are very good as a first pass, however, they won't catch everything and will likely report false positives. Ensure you test the app manually as well to see for yourself what it is like.

### Wrap Up

In short, to ensure your app gives the best possible experience to all users, first get familiar with the accessibility services like TalkBack. Second, follow the accessibility best practices. Third, develop and test the app with accessibility in mind.

You can check out the full talk on YouTube [TODO add link] if you are interested.
