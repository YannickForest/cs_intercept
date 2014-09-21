#Career Site Intercept snippet#

##Description##

A simple PHP snippet that ensures that the main landing points to the staging instance while the product is under development.
The snippet also ensure that the staging instance has access control (i.e., password-protected access).
The snippet has no effect on installations other than those living on the pre-defined domains.
The code should be SVC and integration compatible.

##Flow##

As long as the product is in "dev" mode, the main URL will be forwarded to the specified staging URL.
Once the site goes live, the client will need to visit the staging URL explicitly in order to complete the acceptance stage
(there's no logical way around this use case).


##Usage##

1. Copy the files in the applications code's root
2. Set the necessary variables in /intercept.php (see inline instructions)
3. Add <?php require 'intercept.php'; ?> at the top of the root's index.php script
4. Style "intercept/index.html" as you wish


##Credits##

<pre>
||                          ||
||                          ||
||                          ||
||                          ||
||                          ||
||           ____           ||
||         .''''''.         ||
||        /   __   \        ||
||\__..-':   /\/\   :'-..__/||
||=__ =|='  |-()-|  '=|= __=||
||/  ''-.:   \/\/   :.-''  \||
||        \   ""   /        ||
||         `.____.'         ||
||                          ||
||                          ||
||                          ||
||                          ||
||                          ||
||                          ||
</pre>



