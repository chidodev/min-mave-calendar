// JavaScript Document Min-mave.dk Kalender Responsive

// Accordion tabs js 
jQuery(function() 
{
	if(jQuery(window).width() > 768)
	{
		// Hide all but first tab content on larger viewports
		jQuery('.accordion__content:not(:first)').hide();

		// Activate first tab
		jQuery('.accordion__title:first-child').addClass('active');
	} 
	else 
	{  
		// Hide all content items on narrow viewports
		jQuery('.accordion__content').hide();
	};

	// Wrap a div around content to create a scrolling container which we're going to use on narrow viewports
	jQuery( ".accordion__content" ).wrapInner( "" );

	// The clicking action
	jQuery('.accordion__title').on('click', function() 
	{
		jQuery('.accordion__content').hide();
		jQuery(this).next().show().prev().addClass('active').siblings().removeClass('active');
	});
});

