<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
		<url>
        	<loc>{{ route('home') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
		<url>
        	<loc>{{ route('about-us') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
		<url>
        	<loc>{{ route('services') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>	
		<url>
        	<loc>{{ route('how-it-works') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
		<url>
        	<loc>{{ route('faqs') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
		<url>
        	<loc>{{ route('contacts') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
		<url>
        	<loc>{{ route('blog') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
		<url>
        	<loc>{{ route('destination') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
		<url>
        	<loc>{{ route('terms') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
		<url>
        	<loc>{{ route('privacy') }}</loc>
        	<lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
			<changefreq>monthly</changefreq>
			<priority>1</priority>
        </url>
</urlset>
