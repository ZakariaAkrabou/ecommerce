<script>
  function getIds(checkboxName) {
      let checkBoxes = document.getElementsByName(checkboxName);
      let ids = Array.prototype.slice.call(checkBoxes)
                      .filter(ch => ch.checked==true)
                      .map(ch => ch.value);
      return ids;
  }

  function filterResults () {

      let catagoryIds = getIds("category");

      let href = 'shop?';


      if(catagoryIds.length) {
          href += '&filter[category]=' + catagoryIds;
      }

      document.location.href=href;
  }

  document.getElementById("filter").addEventListener("click", filterResults);
</script>
