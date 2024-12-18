delimiter ;

insert ignore into custom_types (
        vendor,
        name,
        id,
        xtype_long_classic,
        extendsxtype_classic,
        xtype_long_modern,
        extendsxtype_modern
    )
values (
        "Tualo",
        "Tualo.QRCodeJS.form.field.Display",
        "Tualo.QRCodeJS.form.field.Display",

        "widget.tualo_display_qrcode",
        "Ext.form.field.Display",


        "widget.textarea",
        "Ext.field.Text"
    ) on duplicate key
update id =
values(id),
    xtype_long_classic =
values(xtype_long_classic),
    extendsxtype_classic =
values(extendsxtype_classic),
    name =
values(name),
    vendor =
values(vendor);