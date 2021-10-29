<div id="ratingComponent" class="rating rating-layout-1 py-2">

	@if($ratingSum>0)

    	<div class="d-flex flex-row w-25">
    		<div class="star1">
    			<svg class="@if($rating >= 1 ) text-primary @else text-secondary @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
    		</div>
  			<div class="star2">
  				<svg class="@if($rating >= 2 ) text-primary @else text-secondary @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
  			</div>
 			<div class="star3">
 				<svg class="@if($rating >= 2 ) text-primary @else text-secondary @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
 			</div>
 			<div class="star4">
 				<svg class="@if($rating >= 2 ) text-primary @else text-secondary @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
 			</div>
 			<div class="star5">
 				<svg class="@if($rating >= 2 ) text-primary @else text-secondary @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
 			</div>
    	</div>

    @endif
   	
</div>