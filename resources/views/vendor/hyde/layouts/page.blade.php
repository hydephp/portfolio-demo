{{-- The Markdown Page Layout --}}
@extends('hyde::layouts.app')
@section('content')

<main id="content" class="mx-auto max-w-7xl py-12 px-8">
	<article id="article" @class(['mx-auto prose dark:prose-invert', 'torchlight-enabled' => Hyde\Framework\Helpers\Features::hasTorchlight()])>
		{!! $markdown !!}
	</article>
	<div id="source" style="display: none">
		@include('components.code-card')
	</div>
</main>

@push('scripts')
<noscript>
	<style>
		#view-source-btn {
			display: none!important;
		}
	</style>
</noscript>
<style>
	#view-source-btn {
		background-image: linear-gradient(to right, #1FA2FF 0%, #12D8FA  51%, #1FA2FF  100%);
		margin: 10px;
		padding: .5rem 1rem;
		text-align: center;
		transition: 0.5s;
		background-size: 200% auto;
		background-position: right center;
		color: white;
		box-shadow: 0 0 20px #162134;
		border-radius: 10px;
		display: block;
		position: fixed;
		right: 1rem;
		bottom: 1rem
	}

	#view-source-btn:hover {
		background-position: left center;
		color: #fff;
		text-decoration: none;
	}

	@media screen and (max-width: 1024px) {
		#view-source-btn {
			display: none!important;
		}
	}
</style>

<a href="#" id="view-source-btn" title="Switch to source code viewer">View source code</a>
<script>
	const viewSourceBtn = document.getElementById('view-source-btn');
	const source = document.getElementById('source');
	const content = document.getElementById('article');
	const footerAttribution = document.getElementById('footerAttribution');
	const footerAttributionDefault = footerAttribution.innerHTML;

	function toggleSourceView(event) {
		event.preventDefault();

		if (source.style.display === 'none') {
			source.style.display = 'block';
			content.style.display = 'none';
			viewSourceBtn.innerText = 'View rendered page';
			footerAttribution.innerHTML = 'Syntax highlighting by <a href="https://torchlight.dev" target="_blank" rel="nofollow noopener">Torchlight.dev</a>.';
		} else {
			source.style.display = 'none';
			content.style.display = 'block';
			viewSourceBtn.innerText = 'View source code';
			footerAttribution.innerHTML = footerAttributionDefault;
		}
	}

	viewSourceBtn.addEventListener('click', toggleSourceView);
</script>
@endpush
@endsection
