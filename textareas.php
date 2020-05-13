<form class="row pt-4" id="mainForm">
  <div class="col">
    <p class="h4">Text</p>
    <textarea class="form-control" rows="10" id="source" placeholder="Type or paste your content here"></textarea>
    <p class="text-center pt-2">
      <button type="button" class="btn btn-light" onclick="$('form[id$=mainForm]')[0].reset()">Clear</button>
    </p>
  </div>
  <div class="col">
    <p class="h4">Converted Text</p>
    <textarea class="form-control" rows="10" id="result"></textarea>
    <p class="text-center pt-2">
      <button type="button" class="btn btn-light" data-toggle="tooltip" title="Text copied!" onclick="copyToClipborad()">Copy to clipboard</button>
    </p>
  </div>
</form>

<script>
  function copyToClipborad() {
    var copyText = $('textarea[id$=result]')
    copyText.select();
    document.execCommand("copy");
  }
  $('button[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'bottom',
    trigger: 'click',
  });
</script>