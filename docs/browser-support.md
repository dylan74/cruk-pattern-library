---
layout: page
title: Browser Support
---

Browser &amp; Device Support should be dictated (if possible) by previous years statistics for the project or proposition being worked on. Where this isn't possible we rely on the following list as a baseline for the Browsers, Versions and Devices we should support.

## Browsers

  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <td></td>
          <th>Chrome</th>
          <th>Firefox</th>
          <th>Internet Explorer</th>
          <th>Opera</th>
          <th>Safari</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Android</th>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-muted" rowspan="3" style="vertical-align: middle;">N/A</td>
          <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
          <td class="text-muted">N/A</td>
        </tr>
        <tr>
          <th scope="row">iOS</th>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-muted">N/A</td>
          <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
        </tr>
        <tr>
          <th scope="row">Mac OS X</th>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
        </tr>
        <tr>
          <th scope="row">Windows</th>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
          <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not Supported</td>
        </tr>
      </tbody>
    </table>
  </div>

### Support for Internet Explorer 8 and 9

As we implement Bootstrap 3 the same rules apply as to what they support. In short Internet Explorer 8 won't look quite the same, and 9 will be missing out on a few things. This is where we make use of Plugins to polyfill what's missing. See [Utilities](/utilities).

  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th class="col-xs-4">Feature</th>
          <th class="col-xs-4">Internet Explorer 8</th>
          <th class="col-xs-4">Internet Explorer 9</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><code>border-radius</code></th>
          <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
        </tr>
        <tr>
          <th scope="row"><code>box-shadow</code></th>
          <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported</td>
        </tr>
        <tr>
          <th scope="row"><code>transform</code></th>
          <td class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
          <td class="text-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Supported, with <code>-ms</code> prefix</td>
        </tr>
        <tr>
          <th scope="row"><code>transition</code></th>
          <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
        </tr>
        <tr>
          <th scope="row"><code>placeholder</code></th>
          <td colspan="2" class="text-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Not supported</td>
        </tr>
      </tbody>
    </table>
  </div>
