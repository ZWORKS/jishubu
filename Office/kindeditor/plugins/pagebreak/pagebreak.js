// +----------------------------------------------------------------------
// | 启点在线企业网站管理系统PHP版
// +----------------------------------------------------------------------
// | Copyright (c) 2010-2016 http://kelvinvt.com All rights reserved.
// +----------------------------------------------------------------------
// | Sale ( http://www.kelvinvt.com/ )
// +----------------------------------------------------------------------
// | Design: kelvinvt <kelvinvt@qq.com>
// +----------------------------------------------------------------------

KindEditor.plugin('pagebreak', function(K) {
	var self = this;
	var name = 'pagebreak';
	var pagebreakHtml = K.undef(self.pagebreakHtml, '<hr style="page-break-after: always;" class="ke-pagebreak" />');

	self.clickToolbar(name, function() {
		var cmd = self.cmd, range = cmd.range;
		self.focus();
		var tail = self.newlineTag == 'br' || K.WEBKIT ? '' : '<span id="__kindeditor_tail_tag__"></span>';
		self.insertHtml(pagebreakHtml + tail);
		if (tail !== '') {
			var p = K('#__kindeditor_tail_tag__', self.edit.doc);
			range.selectNodeContents(p[0]);
			p.removeAttr('id');
			cmd.select();
		}
	});
});
