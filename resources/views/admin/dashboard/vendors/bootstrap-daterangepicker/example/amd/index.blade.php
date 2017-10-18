<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <meta charset="UTF-8" />
      <title>A date range picker for Bootstrap</title>
      <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" media="all" href="../../daterangepicker.css" />
      <style type="text/css">
      .demo { position: relative; }
      .demo i {
        position: absolute; bottom: 10px; right: 24px; top: auto; cursor: pointer;
      }
      </style>
   </head>
   <body style="margin: 60px 0">

      <div class="container">

        <h1 style="margin: 0 0 20px 0">Configuration Builder</h1>

        <div class="well configurator">

          <form>
          <div class="row">

            <div class="col-md-4">

              <div class="form-group">
                <label for="parentEl">parentEl</label>
                <input type="text" class="form-control" id="parentEl" value="" placeholder="body">
              </div>

              <div class="form-group">
                <label for="startDate">startDate</label>
                <input type="text" class="form-control" id="startDate" value="07/01/2015">
              </div>

              <div class="form-group">
                <label for="endDate">endDate</label>
                <input type="text" class="form-control" id="endDate" value="07/15/2015">
              </div>

              <div class="form-group">
                <label for="minDate">minDate</label>
                <input type="text" class="form-control" id="minDate" value="" placeholder="MM/DD/YYYY">
              </div>

              <div class="form-group">
                <label for="maxDate">maxDate</label>
                <input type="text" class="form-control" id="maxDate" value="" placeholder="MM/DD/YYYY">
              </div>

            </div>
            <div class="col-md-4">

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="autoApply"> autoApply
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="singleDatePicker"> singleDatePicker
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="showDropdowns"> showDropdowns
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="showWeekNumbers"> showWeekNumbers
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="showISOWeekNumbers"> showISOWeekNumbers
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="timePicker"> timePicker
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="timePicker24Hour"> timePicker24Hour
                </label>
              </div>

              <div class="form-group">
                <label for="timePickerIncrement">timePickerIncrement (in minutes)</label>
                <input type="text" class="form-control" id="timePickerIncrement" value="1">
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="timePickerSeconds"> timePickerSeconds
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="dateLimit"> dateLimit (with example date range span)
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="ranges"> ranges (with example predefined ranges)
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="locale"> locale (with example settings)
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="linkedCalendars" checked="checked"> linkedCalendars
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="autoUpdateInput" checked="checked"> autoUpdateInput
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="alwaysShowCalendars"> alwaysShowCalendars
                </label>
              </div>

            </div>
            <div class="col-md-4">

              <div class="form-group">
                <label for="opens">opens</label>
                <select id="opens" class="form-control">
                  <option value="right" selected>right</option>
                  <option value="left">left</option>
                  <option value="center">center</option>
                </select>
              </div>

              <div class="form-group">
                <label for="drops">drops</label>
                <select id="drops" class="form-control">
                  <option value="down" selected>down</option>
                  <option value="up">up</option>
                </select>
              </div>

              <div class="form-group">
                <label for="buttonClasses">buttonClasses</label>
                <input type="text" class="form-control" id="buttonClasses" value="btn btn-sm">
              </div>

              <div class="form-group">
                <label for="applyClass">applyClass</label>
                <input type="text" class="form-control" id="applyClass" value="btn-success">
              </div>

              <div class="form-group">
                <label for="cancelClass">cancelClass</label>
                <input type="text" class="form-control" id="cancelClass" value="btn-default">
              </div>

            </div>

          </div>
          </form>

        </div>

        <div class="row">

          <div class="col-md-4 col-md-offset-2 demo">
            <h4>Your Date Range Picker</h4>
            <input type="text" id="config-demo" class="form-control">
            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
          </div>

          <div class="col-md-6">
            <h4>Configuration</h4>

            <div class="well">
              <textarea id="config-text" style="height: 300px; width: 100%; padding: 10px"></textarea>
            </div>
          </div>

        </div>

      </div>


      <script type="text/javascript" src="require.js" data-main="main.js"></script>
   </body>
</html>
