---
layout: default
title: Razor-qt - How to install Razor-qt in Ubuntu
menuItem: Downloads
---

How to install Razor-qt in Ubuntu?
==================================
 
To make Razor-qt available to install and update you'll need to tell Ubuntu where to find the repository and how to verify the authenticity of its software.

### Adding the Razor-qt PPA in console

If you're using the most recent version of Ubuntu (or any version from Ubuntu 9.10 onwards), you can add a PPA to your system with a single line in your terminal.
<b>Step 1:</b> Open a terminal and enter:
<code>sudo add-apt-repository ppa:razor-qt</code>

<b>Step 2:</b> Now, as a one-off, you should tell your system to pull down the latest list of software from each archive it knows about, including the PPA you just added:
<code>sudo apt-get update</code>

<b>Step 3:</b> Now you're ready to start installing rasor-qt from the PPA:
The stable version:
<code>sudo apt-get install razorqt</code>

