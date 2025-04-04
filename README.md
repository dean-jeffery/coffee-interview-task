(wasn't sure what the best practice was for wordpress repos
so i've just dumped the whole lot in here - the works all in this theme though
wp-content/themes/coffee-theme. )

I wasn't able to get Adobe XD running on my mac, apparently its no longer available for apple silicon macs(?) Anyway, got it converted into Figma but couldn't export some of the images - used placeholders. Also couldn't be certain on fonts/colours/spacing etc. so just gone with instinct on those.

In terms of the frontend build, pretty straightforward for the most part. The Hero section with the white cutout gave me the most issues, especially when considering mobile. On mobile I opted to hide the white background and move the text overlay to below the image, placed on a grey background just to provide some seperation from the next part of the page. If this was a production site I would most likely speak with the designer to make sure we were on the same page, my personal preference is to usually have a mobile specific version of the hero image which is in portrait orientation. Then the text can still sit on top of the image.

The "Innovation" block (first blue background section) seemed a bit strange to me, not sure if it was not rendered properly after converting the design file. On mobile I opted to split the 4 across part into a 2x2, and then push the logo and button to below the text.

The blog/article section is pulling in the 3 latest blog posts, then showing the title, excerpt and thumbnail. Again fairly straight forward, and just stack them 1 wide on mobile.

Moving onto the more "backend" side of things, interms of getting the most out of wordpress and client editable content, definitely took a lot more work with my professional experience all being front-end focused. Had a bit of a false start at first going down the blocks route, soon pivoted back to how I remember building wordpress sites in the past. Given more time to research more modern wordpress development I'd definitely be able to provide more customisability for the user, I just wanted to maek sure I got a presentable site for the deadline.

Header content is dynamic, and in my testing was scaling well with more links added. I haven't actually added any sort of burger menu on mobile given it has only two links in the design. However, as the client would be able to add more I would ensure this was added if it was a production build.
As mentioned before the blog posts are dynamic, pulling in the latest 3 posts.
Then on the hero section, the title is customisable. There's a header line one and line two. I did it this way to split the heading as shown in the design and it would give the client a bit more interms of customisation rather than relying on the text wrapping. If this was a full build I would extend this to the buttons and image, and then throughout the page. However with the time constraints and a bit of a lack of platform knowledge at the moment I just wasn't able to expand this any futher.
I'd still restrict the client to edit content in this way to ensure they aren't able to break anything essentially. Prehaps its the Visualsoft/ecommerce part of my still but I'd be wary giving them a full rtf editor or anything like that just incase. Obviously that would be client dependant, maybe some would need more control. I always just tend to think of "what happens if they make a mistake" and with plain text inputs / image uploads etc. they can be a lot more forgiving.

Thanks
