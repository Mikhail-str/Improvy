$(function() {
	$("#side").accordion({
		navigation: true,
		heightStyle: "content",
		animate: false
	});
	$("#side li a").click(function() {
		$.cookie("openItem", $(this).attr("href"));
	});
	$("#side h3  ").click(function() {
		$.cookie("openItem", $(this).children().children().attr("href"));
		document.location.href = $(this).children().children().attr("href");
	});

	$("#side li a[href$='" + $.cookie("openItem") + "']").addClass("open");
	$("#side li a[href$='" + $.cookie("openItem") + "']").parent().addClass('active');

});