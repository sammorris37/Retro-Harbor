# Retro Harbor

## Overview

This is just a starter framework to save some time with the basics. Made specifically by/for `Sam Morris`.

## Repository Contents

This repository includes the following components:

- `Containers`: Modular sections designed for flexible use across various pages.
- `Grids`: Example of grid layouts for use throughout the site.
- `Navigation`: Examples of navigation menus and structures.
- `Buttons`: Configurable and reusable button elements.
- `Chips`: Configurable and reusable chip elements.
- `Typography`: Standardized text styles and formats for consistency.
- `Inputs`: Customizable input fields for forms and data entry.
- `Images`: Guidelines and templates for using images effectively.
- `Videos`: Guidelines and templates for integrating video content.

### Other

- `Utility Classes`: Starter utility classes that can be expended upon.
- `Variables`: Starter variables that can be expended upon.

### Locations

- `CCS`: /assets/retro-harbor
- `Examples`: /examples

## Containers

**CSS Usage**
```css
.container /* Global Use */
.container__full-width /* Full Width  (Without Gutters) */
.container__max-width /* Max Width Container (With Gutters) */
.container__max-indent /* Indented Container (With Gutters) */
.container__max-thin /* Thin Container (With Gutters) */
.container__max-extrathin /* Extra Thin Container (With Gutters) */
```
**HTML Example**
```html
<div class="container container__full-width padding-block-l margin-block-l dark-bg light-t center-t no-gap">
  <div class="container container__max-width">
    <h2>Full Width Section</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <a href="" class="button button__orange has-outline">Button</a>
  </div>
</div>

<div class="container container__max-width padding-block-l padding-inline-l margin-block-l dark-bg light-t center-t">
  <h2>Max Width Section</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  <a href="" class="button button__orange has-outline">Button</a>
</div>
```

## Grids
This comes with some basic grids to get you started, more complex grids will need to be added manually.

**CSS Usage**
```css
.grid /* Global Use */
.grid-2-col /* 2 Columns */
.grid-3-col /* 3 Columns */
.grid-4-col /* 4 Columns */
```
**HTML Example**
```html
<div class="grid grid-2-col">
  <div class="card">
    <h3>Title</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
  <div class="card">
    <h3>Title</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  </div>
</div>
```

## Buttons
This framework includes default buttons that you can use as-is or customize to fit your needs. To display a button with an icon, simply add an SVG to the button.

**CSS Usage**
```css
.button /* Global Use */
.button__orange /* Custom Color Class */
```
**HTML Example**
```html
<button class="button">Button</button> <!-- Default Button -->
<button class="button orange__button">Button</button> <!-- Button Custom Color -->
<button class="button">Button Icon [SVG Code Here]</button> <!-- Button With Icon -->
```

## Chips
This framework includes default chips that you can use as-is or customize to fit your needs.

**CSS Usage**
```css
.chip /* Global Use */
.chip__orange /* Custom Color Class */
```
**HTML Example**
```html
<span class="chip">Button</span> <!-- Default Chip -->
<span class="chip chip__orange">Button</span> <!-- Chip Custom Color -->
```

## Images
This framework allows you to specify distinct image sources using the <picture> element for various screen sizes, optimizing page load speeds.

**HTML Example**
```html
<picture class="img-holder">
    <source srcset="<!-- image src -->" media="(max-width 480px)">
    <source srcset="<!-- image src -->" media="(max-width 769px)">
    <img src="<!-- image src -->" alt="placeholder image test" title="placeholder image test">
</picture>
```

## Videos
This framework allows you to add youtube and vimdeo videos while also having a thumbnail and play overlay before playing the video. This helps with page load speeds and the visual style.

**YouTube Example**
```html
<div class="video-holder img-holder">
    <div class="play-video" onclick="playVideo(this)"></div>
    <img src="<!-- Thumbnail URL -->" alt="Thumbnail" loading="lazy" />
    <iframe class="videoIframe" title="" data-src="https://www.youtube.com/embed/aLuj7Lw9hVk?feature=oembed&controls=1&hd=1&autohide=1&autoplay=1" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
    </iframe>
</div>
```

**Vimeo Example**
```html
<div class="video-holder img-holder">
    <div class="play-video" onclick="playVideo(this)"></div>
    <img src="<!-- Thumbnail URL -->" alt="Thumbnail" loading="lazy" />
    <iframe class="videoIframe" title="" data-src="https://player.vimeo.com/video/235215203?h=f7635d145a&autoplay=1" src="" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
    </iframe>
</div>
```

**JS Usage**
```javascript
<script>
    function playVideo(e) {
        const container = e.closest('.video-holder');
        const iframe = container.querySelector('.videoIframe');
        iframe.src = iframe.dataset.src;
        iframe.style.display = 'block';
        e.style.display = 'none';
    }
</script>
```
