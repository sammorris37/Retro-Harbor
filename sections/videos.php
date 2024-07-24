<div class="container" id="videos">
    <h2>Videos</h2>
    <p>This framework allows you to add youtube and vimdeo videos while also having a thumbnail and play overlay before playing th evideo. This helps with page load speeds and the visual style.</p>

<pre>
<code><span class="comment">/* Youtube */</span>
&lt;div class="video-holder img-holder"&gt;
    &lt;div class="play-video" onclick="playVideo(this)"&gt;&lt;/div&gt;
    &lt;img src="<span class="comment">/* Thumbnail URL */</span>" alt="Thumbnail" loading="lazy" /&gt;
    &lt;iframe class="videoIframe" title="" data-src="https://www.youtube.com/embed/aLuj7Lw9hVk?feature=oembed&amp;controls=1&amp;hd=1&amp;autohide=1&amp;autoplay=1" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
    &lt;/iframe&gt;
&lt;/div&gt;</code>
</pre>

<pre>
<code><span class="comment">/* Vimeo */</span>
&lt;div class="video-holder img-holder"&gt;
    &lt;div class="play-video" onclick="playVideo(this)"&gt;&lt;/div&gt;
    &lt;img src="<span class="comment">/* Thumbnail URL */</span>" alt="Thumbnail" loading="lazy" /&gt;
    &lt;iframe class="videoIframe" title="" data-src="https://player.vimeo.com/video/235215203?h=f7635d145a&autoplay=1" src="" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
    &lt;/iframe&gt;
&lt;/div&gt;</code>
</pre>

<pre>
<code><span class="comment">/* JS */</span>
&lt;script&gt;
    function playVideo(e) {
        const container = e.closest('.video-holder');
        const iframe = container.querySelector('.videoIframe');
        iframe.src = iframe.dataset.src;
        iframe.style.display = 'block';
        e.style.display = 'none';
    }
&lt;/script&gt;</code>
</pre>

    <h4>YouTube</h4>
    <div class="video-holder img-holder">
        <div class="play-video" onclick="playVideo(this)"></div>
        <img src="./assets/images/600x400.svg" alt="Thumbnail" loading="lazy">
        <iframe class="videoIframe" title="Oliver Tree - Placeholder [Lyric Video]" data-src="https://www.youtube.com/embed/aLuj7Lw9hVk?feature=oembed&amp;controls=1&amp;hd=1&amp;autohide=1&amp;autoplay=1" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <h4 style="margin-top:var(--gutter-s);">Vimeo</h4>
    <div class="video-holder img-holder">
        <div class="play-video" onclick="playVideo(this)"></div>
        <img src="./assets/images/600x400.svg" alt="Thumbnail" loading="lazy">
        <iframe class="videoIframe" title="Vimeo Video" data-src="https://player.vimeo.com/video/235215203?h=f7635d145a&autoplay=1" src="" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
    </div>

    <script>
        function playVideo(e) {
            const container = e.closest('.video-holder');
            const iframe = container.querySelector('.videoIframe');
            iframe.src = iframe.dataset.src;
            iframe.style.display = 'block';
            e.style.display = 'none';
        }
    </script>

</div>