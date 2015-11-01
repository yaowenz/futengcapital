<div id="page-side">
	<ul id="secondary-nav">
		<li>Nav 1</li>
		<li>Nav 2</li>
	</ul>
</div>
<div class="primary-content">
	<div>
	Property Values
Value	Description	Play it
linear	The animation has the same speed from start to end	Play it »
ease	Default value. The animation has a slow start, then fast, before it ends slowly	Play it »
ease-in	The animation has a slow start	Play it »
ease-out	The animation has a slow end	Play it »
ease-in-out	The animation has both a slow start and a slow end	Play it »
cubic-bezier(n,n,n,n)	Define your own values in the cubic-bezier function
Possible values are numeric values from 0 to 1	
initial	Sets this property to its default value. Read about initial	
inherit	Inherits this property from its parent element. Read about inherit	
Tip: Try the different values in the Try it Yourself section below.

Examples
More Examples

Example
To better understand the different timing function values;
Here are five different <div> elements with five different values:

/* For Chrome, Safari and Opera */
#div1 {-webkit-animation-timing-function: linear;}
#div2 {-webkit-animation-timing-function: ease;}
#div3 {-webkit-animation-timing-function: ease-in;}
#div4 {-webkit-animation-timing-function: ease-out;}
#div5 {-webkit-animation-timing-function: ease-in-out;}

/* Standard syntax */
#div1 {animation-timing-function: linear;}
#div2 {animation-timing-function: ease;}
#div3 {animation-timing-function: ease-in;}
#div4 {animation-timing-function: ease-out;}
#div5 {animation-timing-function: ease-in-out;}
Try it yourself »

Example
Same as the example above, but the speed curves are defined with the cubic-bezier function:

/* For Chrome, Safari and Opera */
#div1 {-webkit-animation-timing-function: cubic-bezier(0,0,1,1);}
#div2 {-webkit-animation-timing-function: cubic-bezier(0.25,0.1,0.25,1);}
#div3 {-webkit-animation-timing-function: cubic-bezier(0.42,0,1,1);}
#div4 {-webkit-animation-timing-function: cubic-bezier(0,0,0.58,1);}
#div5 {-webkit-animation-timing-function: cubic-bezier(0.42,0,0.58,1);} 

/* Standard syntax */
#div1 {animation-timing-function: cubic-bezier(0,0,1,1);}
#div2 {animation-timing-function: cubic-bezier(0.25,0.1,0.25,1);}
#div3 {animation-timing-function: cubic-bezier(0.42,0,1,1);}
#div4 {animation-timing-function: cubic-bezier(0,0,0.58,1);}
#div5 {animation-timing-function: cubic-bezier(0.42,0,0.58,1);}
Try it yourself »
Related Pages
	</div>
</div>