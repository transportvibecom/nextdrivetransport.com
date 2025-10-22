<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ url('sitemap/services') }}</loc>
        <lastmod>{{ $service->updated_at->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ url('sitemap/blogs') }}</loc>
        <lastmod>{{ $blog->updated_at->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ url('sitemap/index') }}</loc>
        <lastmod>{{ \Carbon\Carbon::now()->subDay()->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
        <loc>{{ url('sitemap/destinations') }}</loc>
        <lastmod>{{ $destination->updated_at->toAtomString() }}</lastmod>
    </sitemap>
</sitemapindex>
