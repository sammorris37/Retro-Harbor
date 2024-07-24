<div class="grid-content">
    <h2>Title</h2>
    <p></p>
    <a href=""></a>
</div>

{% schema %}
{
"name": "Section Name",
"tag": "section",
"class": "grid-container",
"settings": [
    {
        "type": "header",
        "content": "Container Width"
    },
    {
        "type": "select",
        "id": "containerWidth",
        "options": [
            {
                "value": "grid-full_width",
                "label": "Full Width"
            },
            {
                "value": "grid-breakout",
                "label": "Breakout"
            },
            {
                "value": "grid-content",
                "label": "Content"
            },
            {
                "value": "grid-indent",
                "label": "Indented"
            },
            {
                "value": "grid-thin",
                "label": "Thin"
            },
            {
                "value": "grid-extrathin",
                "label": "Extra Thin"
            }
        ],
            "default": "white",
            "label": "Color"
    },
],
  "max_blocks": 3,
  "blocks": [
    
  ],
  "presets": [
    {
      "name": "Section Name"
    }
  ]
}
{% endschema %}