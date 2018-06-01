var outfit = {
  init:function () {
    console.log('hello my outfit');
    $('.reload').on('click', outfit.reload)
  },
  reload:function () {
    console.log('reloadfit');
    location.reload();
  }
}
$(outfit.init);
