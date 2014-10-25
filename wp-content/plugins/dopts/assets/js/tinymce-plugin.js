/*
* Title                   : Thumbnail Scroller (WordPress Plugin)
* Version                 : 1.6
* File                    : tinymce-plugin.php
* File Version            : 1.0
* Created / Last Modified : 10 December 2012
* Author                  : Dot on Paper
* Copyright               : © 2012 Dot on Paper
* Website                 : http://www.dotonpaper.net
* Description             : TinyMCE Editor Plugin.
*/

(function(){
    var title, i,
    scrollersData,
    scrollers = new Array();

    tinymce.create('tinymce.plugins.DOPTS', {
        init:function(ed, url){
            title = DOPTS_tinyMCE_data.split(';;;;;')[0];
            scrollersData = DOPTS_tinyMCE_data.split(';;;;;')[1];
            scrollers = scrollersData.split(';;;');
        },

        createControl:function(n, cm){// Init Combo Box.
            switch (n){
                case 'DOPTS':
                    var mlb = cm.createListBox('DOPTS', {
                         title: title,
                         onselect: function(value){
                             tinyMCE.activeEditor.selection.setContent(value);
                         }
                    });

                    for (i=0; i<scrollers.length; i++){
                        if (scrollers[i] != ''){
                            mlb.add('ID '+scrollers[i].split(';;')[0]+': '+scrollers[i].split(';;')[1], '[dopts id="'+scrollers[i].split(';;')[0]+'"]');
                        }
                    }
                    
                    return mlb;
            }

            return null;
        },

        getInfo:function(){
            return {longname  : 'Thumbnail Scroller',
                    author    : 'Marius-Cristian Donea',
                    authorurl : 'http://www.mariuscristiandonea.com',
                    infourl   : 'http://www.mariuscristiandonea.com',
                    version   : '1.0'};
        }
    });

    tinymce.PluginManager.add('DOPTS', tinymce.plugins.DOPTS);
})();