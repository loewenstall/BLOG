var BLOG = BLOG || {};

BLOG.Initialize = {
	rteTextarea: null,

	create: function() {
		this.rteTextarea = jQuery('textarea#rte');

		this.loadRTE();
	},

	loadRTE: function() {
		if (this.rteTextarea.length > 0) {
			jQuery(this.rteTextarea).htmlarea({
			toolbar: ["html", "|",
				"forecolor",  // <-- Add the "forecolor" Toolbar Button
				"|", "bold", "italic", "underline", "|", "h3", "h4", "|", "link", "unlink"] // Overrides/Specifies the Toolbar buttons to show
			});
		}
	}
};

jQuery(document).ready(function() {
	BLOG.Initialize.create();
});
