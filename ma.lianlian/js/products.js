

$(()=>{
	$(".image-thumbs img").on("mouseenter",function(e){
		let src = $(this).attr("src");
		$(".image-main img").attr("src",src);
	})
})



const checkSort = el => {
	console.log(el)

	let form = el.closest('form');
	console.log(form)

	let selected = el.querySelector(':checked');
	console.log(selected)

	let orderby = selected.dataset.orderby;
	let orderby_direction = selected.dataset.direction;

	form.orderby.value = orderby;
	form.orderby_direction.value = orderby_direction;

	form.submit();

	console.log(orderby,orderby_direction)
}