<div class="container" id="images">
    <h2>Images</h2>
    <p>This framework allows you to specify distinct image sources using the &lt;picture&gt; element for various screen sizes, optimizing page load speeds.</p>

<pre>
<code>&lt;picture class="img-holder"&gt;
    &lt;source srcset="<span class="comment">/* image src */</span>" media="(max-width 480px)"&gt;
    &lt;source srcset="<span class="comment">/* image src */</span>" media="(max-width 769px)"&gt;
    &lt;img src="<span class="comment">/* image src */</span>" alt="placeholder image test" title="placeholder image test"&gt;
&lt;/picture&gt;</code>
</pre>


<div class="grid grid-2-col">
    <div class="card">
        <picture class="img-holder img-holder-square">
            <source srcset="./assets/images/400x400.svg" media="(max-width: 480px)">
            <source srcset="./assets/images/600x400.svg" media="(max-width: 769px)">
            <img src="./assets/images/1000x1000.svg" alt="placeholder image test" title="placeholder image test" loading="lazy">
        </picture>
    </div>
    <div class="card">
        <picture class="img-holder img-holder-square">
            <source srcset="./assets/images/400x400.svg" media="(max-width: 480px)">
            <source srcset="./assets/images/600x400.svg" media="(max-width: 769px)">
            <img src="./assets/images/1000x1000.svg" alt="placeholder image test" title="placeholder image test" loading="lazy">
        </picture>
    </div>
    <div class="card">
        <picture class="img-holder img-holder-golden">
            <source srcset="./assets/images/400x400.svg" media="(max-width: 480px)">
            <source srcset="./assets/images/600x400.svg" media="(max-width: 769px)">
            <img src="./assets/images/1000x1000.svg" alt="placeholder image test" title="placeholder image test" loading="lazy">
        </picture>
    </div>
    <div class="card">
        <picture class="img-holder img-holder-golden">
            <source srcset="./assets/images/400x400.svg" media="(max-width: 480px)">
            <source srcset="./assets/images/600x400.svg" media="(max-width: 769px)">
            <img src="./assets/images/1000x1000.svg" alt="placeholder image test" title="placeholder image test" loading="lazy">
        </picture>
    </div>
</div>
   
</div>