<section>
  <h2>
    Can I change how the dropdown is placed?
  </h2>

  <h3 id="dropdown-attachContainer">
    Can the dropdown be placed directly after the selection container?
  </h3>

  {% include options/not-written.html %}

  <h3 id="dropdownParent">
    Can I pick an element for the dropdown to be appended to?
  </h3>

{% highlight js linenos %}
$('select').select2({
  dropdownParent: $('#my_amazing_modal')
});
{% endhighlight %}

  {% include options/not-written.html %}

  <h3>
    I&apos;m using a Bootstrap modal and I can&apos;t use the search box
  </h3>

  <p>
    Use the <code>dropdownParent</code> option, setting it to the modal.
  </p>

  {% include options/not-written.html %}

  <h3>
    I&apos;m using jQuery UI and I can&apos;t use the search box
  </h3>

  {% include options/not-written.html %}
</section>