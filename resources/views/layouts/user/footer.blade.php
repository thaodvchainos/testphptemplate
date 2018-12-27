<div class="row footer" style="position: fixed;bottom: 0;width: 100%;">
<div class="container">

<div class="pull-left">
<p>&copy; 2017 - <a href="{{Setting::get('copyrights_url') ? Setting::get('copyrights_url') : url('/')}}">{{Setting::get('site_name' , 'StreamHash')}} </a></p>

</div>

<div class="pull-right">
<?php $pages = pages();?>

@if(count($pages) > 0)
<ul>

	@foreach($pages as $page)
	<li><a href="{{route('page', $page->type)}}">{{$page->heading}}</a></li>&nbsp;|&nbsp; 
	@endforeach
</ul>
@endif

</div>

<div class="clearfix"></div>
</div>
</div>
