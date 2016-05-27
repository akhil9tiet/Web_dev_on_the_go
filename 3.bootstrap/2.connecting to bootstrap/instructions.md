Notice the "Skillfair" webpage to the right and locate the diagonal arrows in the top right corner of the web browser (near https://localhost:8000/). Click the arrows to toggle the web browser between narrow and full-width views, and observe the following:

Navbar items do not change position as you toggle the webpage width.

The "Homemade Goods" text appears on the far left side of the webpage.

Photographs increase in size when the web browser is toggled to full-width.

Social media icons at the bottom of the webpage appear disorganized.
Click Run after you have observed these points.
2.
Now we will connect to Bootstrap and see changes to the webpage layout.

In index.html, locate the head element. Inside head, create a link element to link to Bootstrap:

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
Click Run.

Toggle the web browser's width again to notice the following changes:

Navbar items change position based on the webpage's width.

The "Homemade Goods" text is now centered.

"Kitchen", "woodwork", "antique" and "gifts" photographs are arranged two per row when the webpage is full-width.

Social media icons appear organized and change position at full and narrow widths.
Bootstrap's grid is responsible for this screen-width responsiveness. Click Next to learn more!