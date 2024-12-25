Ext.define('Tualo.QRCodeJS.form.field.Display', {
    extend:'Ext.form.field.Display',
    alias: 'widget.tualo_display_qrcode',
    requires: ['Ext.util.Format', 'Ext.XTemplate'],
    fieldSubTpl: [
        '<div id="{id}" data-ref="inputEl" tabindex="-1" role="textbox" aria-readonly="true"  aria-labelledby="{cmpId}-labelEl" {inputAttrTpl} <tpl if="fieldStyle"> style="width:100%;{fieldStyle}"</tpl>  class="{fieldCls} {fieldCls}-{ui}">',
        '<div id="{id}-image"></div>',
        '</div>',
        {
            compiled: true,
            disableFormats: true
        }
    ],
  
    setValue: function(v) {
        console.log('QR',v)
        if (!Ext.isEmpty(v))
      this.loadFile(v);
    },
    getValue: function() {
      return this.getRawValue();
    },
    height: 45,
    loadFile: function(data) {
        let me = this;
        console.log('QR',data,me.id+'-inputEl-image')


        if (typeof me.qrcode=='object'){
            me.qrcode.clear();
            me.qrcode.makeCode(data);
        }else{
            me.qrcode = new QRCode(document.getElementById(me.id+'-inputEl-image'),
            {
                text: data,
                useSVG: true,/*
                width: 128,
                height: 128,
                */
            });
        }

      /*try{
        console.log('loadFile',name);
        var me = this;
        var el = document.getElementById(me.id+'-bodyEl');
        el.innerHTML = '<img width="100%" style="max-width:300px;" src="'+ name +'"/>';
      }catch(e){
        console.log(e);
      }*/
    },
    onDisable: function() {
      try{
        this.callParent(arguments);
      }catch(e){
        console.log('*',e);
      }
    },
    onEnable: function() {
      try{
        this.callParent(arguments);
      }catch(e){
        console.log('*',e);
      }
    }
  });
  