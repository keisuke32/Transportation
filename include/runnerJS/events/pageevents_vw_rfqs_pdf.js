
Runner.pages.PageSettings.addPageEvent('vw_rfqs_pdf',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'RFQStatusID');ctrl.makeReadonly();});Runner.pages.PageSettings.addPageEvent('vw_rfqs_pdf',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'RFQStatusID');ctrl.makeReadonly();});