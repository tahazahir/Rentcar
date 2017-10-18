<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Change Log</title>
  </head>
  <body bgcolor="white">
    <a style="float:right" href="README.html">README</a>

    <h1>Known Issues</h1>
    <ul>
      <li>Perl formatting is really crappy.  Partly because the author is lazy and
      partly because Perl is
      <a href="http://www.perlmonks.org/?node_id=663393">hard</a> to parse.
      <li>On some browsers, <code>&lt;code&gt;</code> elements with newlines in the text
      which use CSS to specify <code>white-space:pre</code> will have the newlines
      improperly stripped if the element is not attached to the document at the time
      the stripping is done.  Also, on IE 6, all newlines will be stripped from
      <code>&lt;code&gt;</code> elements because of the way IE6 produces
      <code>innerHTML</code>.  Workaround: use <code>&lt;pre&gt;</code> for code with
      newlines.
    </ul>

    <h1>Change Log</h1>
    <h2>29 March 2007</h2>
    <ul>
      <li>Added <a href="tests/prettify_test.html#PHP">tests</a> for PHP support
        to address
      <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=3"
       >issue 3</a>.
      <li>Fixed
      <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=6"
       >bug</a>: <code>prettyPrintOne</code> was not halting.  This was not
        reachable through the normal entry point.
      <li>Fixed
      <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=4"
       >bug</a>: recursing into a script block or PHP tag that was not properly
        closed would not silently drop the content.
        (<a href="tests/prettify_test.html#issue4">test</a>)
      <li>Fixed
      <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=8"
       >bug</a>: was eating tabs
        (<a href="tests/prettify_test.html#issue8">test</a>)
      <li>Fixed entity handling so that the caveat
        <blockquote>
          <p>Caveats: please properly escape less-thans.  <tt>x&amp;lt;y</tt>
          instead of <tt>x&lt;y</tt>, and use <tt>&quot;</tt> instead of
          <tt>&amp;quot;</tt> for string delimiters.</p>
        </blockquote>
        is no longer applicable.
      <li>Added noisefree's C#
      <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=4"
       >patch</a>
      <li>Added a <a href="http://google-code-prettify.googlecode.com/files/prettify-small.zip">distribution</a> that has comments and
        whitespace removed to reduce download size from 45.5kB to 12.8kB.
    </ul>
    <h2>4 Jul 2008</h2>
    <ul>
      <li>Added <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=17">language specific formatters</a> that are triggered by the presence
      of a <code>lang-&lt;language-file-extension&gt;</code></li>
      <li>Fixed <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=29">bug</a>: python handling of <code>'''string'''</code>
      <li>Fixed bug: <code>/</code> in regex <code>[charsets] should not end regex</code>
    </ul>
    <h2>5 Jul 2008</h2>
    <ul>
      <li>Defined language extensions for Lisp and Lua</code>
    </ul>
    <h2>14 Jul 2008</h2>
    <ul>
      <li>Language handlers for F#, OCAML, SQL</code>
      <li>Support for <code>nocode</code> spans to allow embedding of line
      numbers and code annotations which should not be styled or otherwise
      affect the tokenization of prettified code.
      See the issue 22
      <a href="tests/prettify_test.html#issue22">testcase</a>.</code>
    </ul>
    <h2>6 Jan 2009</h2>
    <ul>
      <li>Language handlers for Visual Basic, Haskell, CSS, and WikiText</li>
      <li>Added <tt>.mxml</tt> extension to the markup style handler for
        Flex <a href="http://en.wikipedia.org/wiki/MXML">MXML files</a>.  See
        <a
        href="http://code.google.com/p/google-code-prettify/issues/detail?id=37"
        >issue 37</a>.
      <li>Added <tt>.m</tt> extension to the C style handler so that Objective
        C source files properly highlight.  See
        <a
        href="http://code.google.com/p/google-code-prettify/issues/detail?id=58"
       >issue 58</a>.
      <li>Changed HTML lexer to use the same embedded source mechanism as the
        wiki language handler, and changed to use the registered
        CSS handler for STYLE element content.
    </ul>
    <h2>21 May 2009</h2>
    <ul>
      <li>Rewrote to improve performance on large files.
        See <a href="http://mikesamuel.blogspot.com/2009/05/efficient-parsing-in-javascript.html">benchmarks</a>.</li>
      <li>Fixed bugs with highlighting of Haskell line comments, Lisp
        number literals, Lua strings, C preprocessor directives,
        newlines in Wiki code on Windows, and newlines in IE6.</li>
    </ul>
    <h2>14 August 2009</h2>
    <ul>
      <li>Fixed prettifying of <code>&lt;code&gt;</code> blocks with embedded newlines.
    </ul>
    <h2>3 October 2009</h2>
    <ul>
      <li>Fixed prettifying of XML/HTML tags that contain uppercase letters.
    </ul>
    <h2>19 July 2010</h2>
    <ul>
      <li>Added support for line numbers.  Bug
        <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=22"
         >22</a></li>
      <li>Added YAML support.  Bug
        <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=123"
         >123</a></li>
      <li>Added VHDL support courtesy Le Poussin.</li>
      <li>IE performance improvements.  Bug
        <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=102"
         >102</a> courtesy jacobly.</li>
      <li>A variety of markup formatting fixes courtesy smain and thezbyg.</li>
      <li>Fixed copy and paste in IE[678].
      <li>Changed output to use <code>&amp;#160;</code> instead of
        <code>&amp;nbsp;</code> so that the output works when embedded in XML.
        Bug
        <a href="http://code.google.com/p/google-code-prettify/issues/detail?id=108"
         >108</a>.</li>
    </ul>
    <h2>7 September 2010</h2>
    <ul>
      <li>Added support for coffeescript courtesy Cezary Bartoszuk.</li>
    </ul>
    <h2>4 March 2011</h2>
    <ul>
      <li>Added a <a href="http://google-code-prettify.googlecode.com/svn/trunk/styles/index.html">themes
      gallery</a> to showcase contributed styles.</li>
      <li>Added support for XQuery courtesy Patrick Wied, Nemerle
      courtesy Zimin A.V., and Latex support courtesy Martin S.</li>
    </ul>
    <h2>29 March 2011</h2>
    <ul>
      <li>Fixed IE newline issues, and copying/pasting of prettified
      source code from IE.  This required significant internal changes
      but involves no API changes.
      <b>Caveat:</b> <code>prettyPrintOne</code> injects the HTML
      passed to it into a <code>&lt;pre&gt;</code> element.
      If the HTML comes from a trusted source, this may allow XSS.
      Do not do this.  This should not be a problem for existing apps
      since the standard usage is to rewrite the HTML and then inject
      it, so anyone doing that with untrusted HTML already has an XSS
      vulnerability.  If you sanitize and prettify HTML from an
      untrusted source, sanitize first.
    </ul>
    <h2>4 February 2013</h2>
    <ul>
      <li>Language handlers for Dart, Erlang, Mumps, TCL, R, S., and others</li>
      <li>Bug fix: VB REM style comments.</li>
      <li>Bug fix: CSS color literals / ID selector confusion.</li>
      <li>Bug fix: IE8 line breaks.</li>
    </ul>
    <h2>24 February 2013</h2>
    <ul>
      <li>Added a one script autoload&amp;run mechanism and a way to
          embed hints in processing instructions/comments.
          See <a href="examples/quine.html">example</a>.
    </ul>
    <h2>4 March 2013</h2>
    <ul>
      <li>Matlab language handler courtesy Amro&#xb3;</li>
    </ul>
  </body>
</html>
