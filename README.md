# onpagecounter
This tool is a very simple visitor counter that tracks visits for a specific page.

The counter can be freely styled but is not hardened against manipulation attempts. A somewhat experienced coder can manipulate the viewcount. But i guess this is a common flaw of trackers of this kind.

Documentation:
Please embed the following code in your website. Please do not change the IDs.

<script async="" id="bh-dev-counter-script" src="https://xyz.com/js/widget.js" data-uid="1585052222" data-start="30"></script>
<span id="bh-dev-counter-element"></span>

data-uid: Set a unique UID. If no uid is specified, the URL of the page is used as the identifier

data-start: Optionally enter a start value here. This is added to the displayed count.