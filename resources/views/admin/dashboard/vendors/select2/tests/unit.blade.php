<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="vendor/qunit-1.23.1.css" type="text/css" />
    <link rel="stylesheet" href="../../dist/css/select2.css" type="text/css" />
  </head>
  <body>
    <div id="qunit"></div>
    <div id="qunit-fixture">
      <div class="event-container">
        <select></select>
      </div>

      <select class="single">
        <option>One</option>
      </select>

      <select class="single-empty"></select>

      <select class="single-with-placeholder">
        <option>placeholder</option>
        <option>One</option>
      </select>

      <select class="multiple" multiple="multiple">
        <option>One</option>
        <option>Two</option>
      </select>

      <select class="groups">
        <optgroup label="Test">
          <option value="one">One</option>
          <option value="two">Two</option>
        </optgroup>
        <optgroup label="Empty"></optgroup>
      </select>

      <select class="duplicates">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="one">Uno</option>
      </select>

      <select class="duplicates-multi" multiple="multiple">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="one">Uno</option>
      </select>
    </div>

    <script src="vendor/qunit-1.23.1.js" type="text/javascript"></script>
    <script src="vendor/jquery-1.7.2.js" type="text/javascript"></script>
    <script src="../dist/js/select2.full.js" type="text/javascript"></script>

    <script src="helpers.js" type="text/javascript"></script>

    <script src="a11y/selection-tests.js" type="text/javascript"></script>
    <script src="a11y/search-tests.js" type="text/javascript"></script>

    <script src="data/array-tests.js" type="text/javascript"></script>
    <script src="data/base-tests.js" type="text/javascript"></script>
    <script src="data/inputData-tests.js" type="text/javascript"></script>
    <script src="data/select-tests.js" type="text/javascript"></script>
    <script src="data/tags-tests.js" type="text/javascript"></script>
    <script src="data/tokenizer-tests.js" type="text/javascript"></script>

    <script src="data/maximumInputLength-tests.js" type="text/javascript"></script>
    <script src="data/maximumSelectionLength-tests.js" type="text/javascript"></script>
    <script src="data/minimumInputLength-tests.js" type="text/javascript"></script>

    <script src="dropdown/dropdownCss-tests.js" type="text/javascript"></script>
    <script src="dropdown/positioning-tests.js" type="text/javascript"></script>
    <script src="dropdown/selectOnClose-tests.js" type="text/javascript"></script>
    <script src="dropdown/stopPropagation-tests.js" type="text/javascript"></script>

    <script src="options/ajax-tests.js" type="text/javascript"></script>
    <script src="options/data-tests.js" type="text/javascript"></script>
    <script src="options/deprecated-tests.js" type="text/javascript"></script>
    <script src="options/translation-tests.js" type="text/javascript"></script>
    <script src="options/width-tests.js" type="text/javascript"></script>

    <script src="results/focusing-tests.js" type="text/javascript"></script>

    <script src="selection/allowClear-tests.js" type="text/javascript"></script>
    <script src="selection/containerCss-tests.js" type="text/javascript"></script>
    <script src="selection/multiple-tests.js" type="text/javascript"></script>
    <script src="selection/placeholder-tests.js" type="text/javascript"></script>
    <script src="selection/search-tests.js" type="text/javascript"></script>
    <script src="selection/single-tests.js" type="text/javascript"></script>
    <script src="selection/stopPropagation-tests.js" type="text/javascript"></script>

    <script src="utils/decorator-tests.js" type="text/javascript"></script>
    <script src="utils/escapeMarkup-tests.js" type="text/javascript"></script>
  </body>
</html>
