var fluid_1_4=fluid_1_4||{};(function($,fluid){fluid.defaults("fluid.uiOptions.fullNoPreview",{gradeNames:["fluid.uiOptions.inline"],container:"{fullNoPreview}.container",derivedDefaults:{templateLoader:{options:{templates:{uiOptions:"%prefix/FullNoPreviewUIOptions.html"}}},uiOptions:{options:{components:{preview:{type:"fluid.emptySubcomponent"},settingsStore:"{uiEnhancer}.settingsStore"},listeners:{onReset:function(uiOptions){uiOptions.save()},onUIOptionsRefresh:"{uiEnhancer}.updateFromSettingsStore"}}}}});fluid.uiOptions.inline.makeCreator("fluid.uiOptions.fullNoPreview",fluid.identity)})(jQuery,fluid_1_4);