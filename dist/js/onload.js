jQuery(document).ready(function(e){"use strict";var n=e("#nlmg_assign_to");n.autocomplete({minLength:1,source:NLMG.endpoint,focus:function(e,n){return!1},select:function(e,n){return jQuery(this).val(n.item.ID),!1}}).autocomplete("instance")._renderItem=function(e,n){return jQuery("<li>").append("<div class='nlmg-inc-search'>"+n.avatar+'<span class="nlmg-inc-name">'+n.display_name+"<small>("+n.user_login+')</small></span><div style="clear:left"></div></div>').appendTo(e)}});
//# sourceMappingURL=map/onload.js.map