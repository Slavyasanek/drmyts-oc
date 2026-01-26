/**
 * Script Module D.Menu Editor
 *
 * @version 1.0
 * 
 * @author D.art <d.art.reply@gmail.com>
 */

jQuery(function($) {
    // Temporary module JS-data.
    window.DMETemp = {
        filter : {
            meaning : 'reset'
        }
    };

    // Set width of window to global variable.
    window.widthWindowDME = $(window).width();

    // Fire on document
    $(document).ready(function() {
        // Sortable Menu Items.
        dmenuSortableMenuItems();

        // Sortable Sticky Items.
        dmenuSortableStickyItems();

        // When Display device <= 1200px.
        if (widthWindowDME <= 1200) {
            // Open/Hide Menu Items.
            $('.sticky-menu_items_button button').on('click', function(){
                $(this).closest('.module-menu_items_add').toggleClass('active');
            });
        }

        // Save Module.
        $('#submit-form-module_dmenu_editor').on('click', function(){
            var _this = $(this);
            var action = _this.data('action');
            var formID = _this.data('form');

            // Add visual loader.
            _this.prop('disabled', true).addClass('loading');
            $('#' + formID).append('<div class="loader-repair"><div class="lds-dual-ring"></div></div>');

            // Cleaning alerts.
            $('#alert-module-dmenu_editor .alert-dismissible').remove();
            $('#nav-tabs-menu a').removeClass('alert_warning');
            $('#tab-content-menu .nav-tabs-menu-stores a').removeClass('alert_warning');
            $('#tab-content-menu .module-dmenu_editor-item_title').removeClass('alert_warning');
            $('#' + formID + ' .input-group').removeClass('has-error');
            $('#' + formID + ' .text-danger').removeClass('d-block');

            // Send form.
            setTimeout(function(){
                $.ajax({
                    url: action.replaceAll('&amp;','&'),
                    type: 'post',
                    //data: { request : JSON.stringify($('#form-module_dmenu_editor').serializeArray()) },
                    data: { request : $('#' + formID).serializeJSON() },
                    dataType: 'json',
                    beforeSend: function() {},
                    complete: function() {
                        // Remove visual loader.
                        _this.prop('disabled', false).removeClass('loading');
                        $('#' + formID).find('.loader-repair').remove();
                    },
                    success: function(json) {
                        //console.log(json);

                        if (json['redirect']) {
                            location = json['redirect'];
                        }

                        if (json['success']) {
                            $('#alert-module-dmenu_editor').prepend('<div class="alert alert-success alert-dismissible"><div class="dmenu-alert-content"><i class="fa fa-exclamation-circle"></i> <span>' + json['success'] + '</span> <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button></div></div>');

                            // Change icon class.
                            $('#tab-content-menu .module-dmenu_editor-item_title_languages.item_url i').removeClass('invisible');
                        } else if (json['error']) {
                            if (json['error']['warning']) {
                                $('#alert-module-dmenu_editor').append('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button></div>');
                            }

                            if (typeof json['error']['error_items'] !== 'undefined') {
                                var timeout = 300;

                                for (key_menu in json['error']['error_items']) {
                                    var menuName = $('#nav-tabs-menu a[href="#tab-menu_' + key_menu + '"]').text();

                                    for (key_store in json['error']['error_items'][key_menu]) {
                                        var storeName = $('#tab-content-menu .nav-tabs-menu-stores a[href="#tab-menu_' + key_menu + '_' + key_store + '"]').text();

                                        setTimeout(function(){
                                            $('#alert-module-dmenu_editor').append('<div class="alert alert-warning alert-dismissible"><div class="dmenu-alert-title">' + menuName + ' - ' + dmenu_translated_text['text_store'] + ' «' + storeName + '»</div><div class="dmenu-alert-content"><i class="fa fa-exclamation-circle"></i> <span>' + json['error']['error_items'][key_menu][key_store]['empty_fields'] + '</span> <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button></div></div>');
                                        }, timeout);

                                        var store = key_store.split('_');
                                        var storeID = store[store.length-1];

                                        if (typeof json['error']['POST']['module_dmenu_editor_items_' + key_menu + '_' + storeID] !== 'undefined' && 
                                            json['error']['POST']['module_dmenu_editor_items_' + key_menu + '_' + storeID].length) {
                                                var items = json['error']['POST']['module_dmenu_editor_items_' + key_menu + '_' + storeID];

                                                var params = {
                                                    menu    : key_menu,
                                                    store   : key_store,
                                                    storeID : storeID,
                                                    row     : ''
                                                }

                                                setErrorToMenuItems(items, params);
                                        }

                                        timeout += timeout;
                                    }
                                }
                            }
                        } else {}

                        // Delete Sticky Blog Items from Document.
                        $('#tab-menu_general .sticky-menu_items-content').find('.sticky-menu_item_blog').remove();

                        // Set Sticky Blog Items to Document.
                        $('#tab-menu_general .sticky-menu_items-content').append(json['sticky_blog']);

                        // Sortable Sticky Items.
                        dmenuSortableStickyItems();
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
            }, 500);
        });

        // Show/Hide Sticky Item.
        $('.sticky-menu_items_add').on('click', '.sticky-menu_item_title', function(){
            var _this = $(this);

            if (!_this.closest('.sticky-menu_item_wrap').hasClass('open')) {
                _this.closest('.sticky-menu_items_add').find('.sticky-menu_item_wrap').removeClass('open').find('.sticky-menu_item_content').hide(200, 'linear');
                _this.closest('.sticky-menu_item_wrap').toggleClass('open').find('.sticky-menu_item_content').first().toggle(200, 'linear');
            }
        });

        // Show/Hide Menu Item.
        $('.module-menu_items').on('click', '.fa_arrow_open', function(){
            $(this).closest('.module-menu_item_wrap').toggleClass('open').find('.module-dmenu_editor-item_content').first().toggle(200, 'linear');
        });

        // Change Title Menu Item (current language).
        $('.module-menu_items_wrap').on('change paste keyup', 'input.name_' + dmenu_configLanguageID, function() {
            var _this = $(this);
            var title = _this.val();

            if (title.length <= 0) {
                title = _this.closest('.module-menu_item_wrap').data('title');
            }

            _this.closest('.module-menu_item_wrap').find('.module-dmenu_editor-item_title').first().find('.text').text(title);
        });

        // Lock/Unlock URL field.
        $('.module-menu_items_wrap').on('click', '.item_url i', function() {
            var _this = $(this);
            var lock = _this.data('lock');
            var unlock = _this.data('unlock');

            // Change icon and tooltip.
            if (_this.hasClass('fa-lock')) {
                _this.removeClass('fa-lock').addClass('fa-unlock').attr('data-original-title', lock);
                _this.prev().removeAttr('readonly');
            } else {
                _this.removeClass('fa-unlock').addClass('fa-lock').attr('data-original-title', unlock);
                _this.prev().attr('readonly', '');
            }

            // Refresh tooltips.
            _this.closest('.module-menu_items_wrap').find('[data-toggle="tooltip"]').tooltip();
        });

        // Checked Default Store Menu.
        $('.store-tab_pane .field-checkbox_default').on('change', function() {
            var field = $(this);
            var meaning = field.data('meaning');

            switch (meaning) {
                case 'menu':
                    if (field.is(':checked')) {
                        field.closest('.module_menu').find('.field-checkbox_default').attr('checked', false).prop('checked', false);
                        field.attr('checked', true).prop('checked', true);
                    } else {
                        field.closest('.module_menu').find('.field-checkbox_default').attr('checked', false).prop('checked', false);
                    }

                    break;
                case 'style':
                    var menu = field.closest('.module_style-menu').data('menu');
                    var device = field.closest('.tab-pane').data('device');

                    if (field.is(':checked')) {
                        field.closest('#tab-style-menu_' + menu).find('.' + device + '-tab_pane .field-checkbox_default').attr('checked', false).prop('checked', false);
                        field.attr('checked', true).prop('checked', true);
                    } else {
                        field.closest('#tab-style-menu_' + menu).find('.' + device + '-tab_pane .field-checkbox_default').attr('checked', false).prop('checked', false);
                    }

                    break;
                default:
                    break;
            }
        });

        // Enable/Disable Status.
        $('.module-menu_items_wrap').on('change', '.field-status', function(){
            var field = $(this);
            var itemStatus = field.val();

            // Display Status on Item.
            if (itemStatus == '1') {
                field.closest('.module-dmenu_editor-item').removeClass('enabled disabled').addClass('enabled');
            } else {
                field.closest('.module-dmenu_editor-item').removeClass('enabled disabled').addClass('disabled');
            }
        });

        // Show/Hide Title Catalog Settings.
        $('.module-menu_items_wrap').on('change', '.setting-dropdown select', function(){
            var field = $(this);
            var categoryDisplay = field.val();

            if (categoryDisplay == '1') {
                field.closest('.module-dmenu_editor-item_content').find('.setting-dropdown_hidden_block').removeClass('hidden');
            } else {
                field.closest('.module-dmenu_editor-item_content').find('.setting-dropdown_hidden_block').addClass('hidden');
            }
        });

        // Search Sticky Data. AJAX.
        $('.sticky-menu_items_add').on('click', '.sticky_menu_item_search_button', function(){
            var _this = $(this);
            var layout = _this.data('layout');
            var search = _this.prev().val();

            var textButton = _this.text();
            var textLoading = _this.data('text_loading');

            $.ajax({
                url: dmenu_actionAjaxSearch.replaceAll('&amp;','&'),
                type: 'post',
                data: 'layout=' + layout + '&limit=' + dmenu_searchLimit + '&search=' + search,
                dataType: 'json',
                beforeSend: function(){
                    _this.closest('.tab-pane').find('.sticky_menu_item_search_wrap').html(textLoading);

                    _this.closest('.sticky_menu_item_search_form').find('input').prop('disabled', true);
                    _this.closest('.sticky_menu_item_search_form').find('button').prop('disabled', true);

                    _this.closest('.sticky_menu_item_search_form').find('button').text(textLoading);
                },
                complete: function(){
                    _this.closest('.sticky_menu_item_search_form').find('input').prop('disabled', false);
                    _this.closest('.sticky_menu_item_search_form').find('button').prop('disabled', false);

                    _this.closest('.sticky_menu_item_search_form').find('button').text(textButton);
                },
                success: function(json) {
                    //console.log(json);

                    if (json && (typeof json === 'object') && (Object.keys(json).length !== 0) && (Object.getPrototypeOf(json) !== Object.prototype)) {
                        var searchResults = '';

                        for (var i = 0; i < json.length; i++) {
                            var searchDataNamesSeo = '';

                            for (language in dmenu_languages) {
                                searchDataNamesSeo += ' data-name_' + dmenu_languages[language]["language_id"] + '="' + ( ( typeof json[i]['names'] !== 'undefined' ) && ( typeof json[i]['names']['language_' + dmenu_languages[language]["language_id"]] !== 'undefined' ) ? json[i]['names']['language_' + dmenu_languages[language]["language_id"]] : '' ) + '" data-url_seo_' + dmenu_languages[language]["language_id"] + '="' + ( ( typeof json[i]['url']['seo'] !== 'undefined' ) && ( typeof json[i]['url']['seo'][dmenu_languages[language]["language_id"]] !== 'undefined' ) ? json[i]['url']['seo'][dmenu_languages[language]["language_id"]] : '' ) + '"';
                            }

                            searchResults += '<div class="sticky-menu_item-item sticky-menu_item-item_' + i + '">';
                                searchResults += '<span data-id="' + json[i]['id'] + '" data-url_link="' + json[i]['url']['link'] + '" data-layout="' + json[i]['layout'] + '" ' + searchDataNamesSeo + '>' + ( json[i]['title'] ? json[i]['title'] : dmenu_translated_text['note_title_empty'] ) + '</span>';
                            searchResults += '</div>';
                        }

                        _this.closest('.tab-pane').find('.sticky_menu_item_search_wrap').html(searchResults);
                    } else {
                        _this.closest('.tab-pane').find('.sticky_menu_item_search_wrap').html(dmenu_translated_text['text_search_missing']);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });

        // Remove Menu Item.
        var dmenuTimeoutRemoveID = null;
        $('.module-menu_items_wrap').on('click', '.fa_row_remove', function(){
            var textMissing = '';
            var speedAnimationHide = 200;
            var timeoutBeforeRepair = 500;
            var item = $(this).closest('.module-menu_item_wrap');
            var siblingsLength = item.siblings().length;
            var isSortableWrap = item.parent().is('.module-menu_items_wrap');
            var container = item.closest('.module-menu_items_wrap').prop('id');
            var removeOrNotRemove = null;

            // Remove or Not Remove, that is the question;
            // Whether 'tis nobler in the mind to suffer
            // The Slings and Arrows of outrageous Fortune
            // Or to take arms against a sea of troubles,
            // And by opposing, end them.
            if (item.find('.module-menu_item_wrap').length > 0) {
                removeOrNotRemove = confirm(dmenu_translated_text['note_item_not_empty']);
            }

            // The choice is made.
            // Remove.
            if (removeOrNotRemove || (removeOrNotRemove === null)) {
                // Removing.
                if (siblingsLength > 1) {
                    item.hide(speedAnimationHide, function(){ item.remove(); });
                } else if (siblingsLength == 1) {
                    if (item.siblings('.sortable_filtered').length > 0) {
                        item.hide(speedAnimationHide, function(){ item.remove(); });

                        //textMissing = dmenuDisplayMessageMissing(dmenu_translated_text['text_menu_item_missing']);
                        //item.closest('.module-menu_items_wrap').append(textMissing);
                    } else {
                        item.hide(speedAnimationHide, function(){ item.remove(); });
                    }
                } else {
                    if (!$(this).hasClass('sortable_filtered')) {
                        item.hide(speedAnimationHide, function(){ item.remove(); });

                        if (isSortableWrap) {
                            textMissing = dmenuDisplayMessageMissing(dmenu_translated_text['text_menu_item_missing']);
                            item.closest('.module-menu_items_wrap').append(textMissing);
                        }
                    }
                }

                // Repair Menu Items.
                if (dmenuTimeoutRemoveID != null) {
                    window.clearTimeout(dmenuTimeoutRemoveID);

                    dmenuTimeoutRemoveID = window.setTimeout(function(){
                        dmenuRepairMenuItems(container);
                    }, timeoutBeforeRepair);
                } else {
                    dmenuTimeoutRemoveID = window.setTimeout(function(){
                        dmenuRepairMenuItems(container);
                    }, timeoutBeforeRepair);
                }

            // or Not?..
            } else {}
        });

        // Download Catalog Items.
        $('.menu-catalog').on('click', '.fa_children_download.has-children', function(){
            var item = $(this).closest('.module-menu_item_wrap');
            var container = item.closest('.module-menu_items_wrap').prop('id');

            // Get data from attributes.
            var store_id = item.closest('.store-tab_pane').data('store');
            var row = item.data('row');
            var id = item.data('id');
            var layout = item.data('layout');

            // Get depth of attributes: FOR, ID, NAME
            var targetID = item.prop('id');
            var targetIdRows = targetID.match(/\w+$/);

            // Get data from attributes.
            var attrIdDepth = targetIdRows[0];

            // Params Menu Item.
            var params = {
                filter    : {},
                menu_type : 'catalog',
                store_id  : store_id,
                layout    : layout,
                id        : id,
                row       : row,
                item_id   : attrIdDepth
            };

            if (!item.find('#module_menu_catalog_store_' + params['store_id'] + '_nested_sortable-' + params['item_id']).html().trim()) {
                dmenuDownloadCategories(item, container, params);
                item.find('.fa_children_download').addClass('downloaded');
            }
        });

        // Filter/Reset Catalog Items.
        // Expecting meaning-data: filter, reset.
        $('.button-menu_catalog-filter').on('click', function(){
            var buttonFilter = $(this);
            var meaning = buttonFilter.data('meaning');
            var categoryName = buttonFilter.closest('#filter-menu_catalog').find('#input-menu_catalog-filter-title').val().trim();
            var categoryStatus = buttonFilter.closest('#filter-menu_catalog').find('#input-menu_catalog-filter-status').val();

            var container = 'tab-catalog .module-menu_items_wrap';

            // Params Menu Item.
            var params = {
                filter    : {
                    meaning : meaning,
                    limit   : dmenu_searchLimit,
                    name    : categoryName,
                    status  : categoryStatus
                },
                menu_type : 'catalog',
                store_id  : 0,
                layout    : 'category',
                id        : 0,
                row       : 0,
                item_id   : ''
            };

            if (meaning == 'filter') {
                if (categoryName || categoryStatus) {
                    DMETemp.filter.meaning = 'filter';
                    dmenuDownloadCategories(buttonFilter, container, params);
                }
            } else {
                if (DMETemp.filter.meaning != 'reset') {
                    DMETemp.filter.meaning = 'reset';

                    buttonFilter.closest('#filter-menu_catalog').find('#input-menu_catalog-filter-title').val('');
                    buttonFilter.closest('#filter-menu_catalog').find('#input-menu_catalog-filter-status').val('');

                    dmenuDownloadCategories(buttonFilter, container, params);
                }
            }
        });

        // Save/Remove Catalog Item.
        $('.menu-catalog').on('click', '.button-catalog-item-save, .button-catalog-item-remove', function(){
            var button = $(this);
            var messageEl = button.parent().find('.message');

            var items = {};
            items.fields = [];
            items.id = button.closest('.module-menu_item_wrap').data('id');
            items.store_id = button.closest('.store-tab_pane').data('store');
            items.meaning = button.data('meaning');

            var fields = button.closest('.module-dmenu_editor-item').find('input, select, textarea');
            var container = button.closest('.module-menu_items_wrap').prop('id');

            fields.each(function(index){
                var _this = $(this);
                var item = {};

                item.field = _this.data('field');

                switch (item.field) {
                    case 'names':
                        item.language = _this.data('language');
                        item.value = _this.val();
                        break;
                    case 'names_hide':
                        if (_this.prop('checked')) item.value = 1;
                        else item.value = 0;
                        break;
                    default:
                        item.value = _this.val();
                        break;
                }

                items.fields.push(item);
            });

            dmenuChangeCategory(items, container, messageEl);
        });

        // Refresh/Remove Catalog.
        // Expecting meaning-data: save, remove.
        $('#button-menu_catalog-refresh, #button-menu_catalog-clear').on('click', function(){
            var button = $(this);
            var messageEl = button.parent().find('.message');
            var container = $('#tab-catalog').prop('id');

            var data = {
                meaning : button.data('meaning')
            };

            var doConfirm = confirm(dmenu_translated_text['note_are_you_sure']);

            // Remove.
            if (doConfirm) {
                dmenuChangeCatalog(data, container, messageEl);
            }
        });

        // Copy current menu to selected store.
        $('#module-menu-copy_btn').on('click', function(){
            var button = $(this);
            var messageEl = button.closest('.module-copy').find('.copy-message');

            messageEl.removeClass('success error').text(dmenu_translated_text['text_copying']);

            var targetStoreID = button.closest('.module-copy').find('select').val();
            var currentMenuType = $('#tab-content-menu > .tab-pane.active .module-menu_items').data('menu');
            var currentStoreID = $('#tab-content-menu > .tab-pane.active .store-tab_pane.active').data('store');

            var menuStore = $('#tab-content-menu > .tab-pane.active .store-tab_pane.active .module-menu_items_wrap');
            var menuHTML = menuStore.html();

            // Store Menu is not empty.
            if (!menuStore.find('.not_repair').length) {
                switch(targetStoreID) {
                    // Store not selected.
                    case '':
                        // Display message.
                        dmenuTimeoutMessage(messageEl, dmenu_translated_text['text_store_not_selected'], 'error');

                        break;

                    // Copy to all stores in current menu.
                    case 'all':
                        // Set menu HTML to all stores.
                        for (store in dmenu_stores) {
                            if (dmenu_stores[store]['store_id'] != currentStoreID) {
                                var storeTargetID = dmenu_stores[store]['store_id'];
                                var items = $(menuHTML);

                                // Params to change attributes.
                                var dataChange = {
                                    mode           : 'copy',
                                    menu           : currentMenuType,
                                    storeIdCurrent : currentStoreID,
                                    storeIdTarget  : storeTargetID,
                                    attrIdDepth    : false,
                                    attrNameDepth  : false
                                };

                                // Change attributes.
                                items = dmenuChangeAttributes(items, dataChange);

                                // Set new HTML to Document.
                                $('#tab-content-menu #module_menu_' + currentMenuType + '_store_' + storeTargetID + '_sortable_wrap').html(items);

                                // Hide Menu Items.
                                $('#tab-content-menu #module_menu_' + currentMenuType + '_store_' + storeTargetID + '_sortable_wrap').find('.module-menu_item_wrap').removeClass('open').find('.module-dmenu_editor-item_content').css('display', 'none');
                            }
                        }

                        // Display message.
                        dmenuTimeoutMessage(messageEl, dmenu_translated_text['text_message_success'], 'success');

                        break;

                    // Copy to selected Store.
                    default:
                        // Store is not current.
                        if (targetStoreID != currentStoreID) {
                            var items = $(menuHTML);

                            // Params to change attributes.
                            var dataChange = {
                                mode           : 'copy',
                                menu           : currentMenuType,
                                storeIdCurrent : currentStoreID,
                                storeIdTarget  : targetStoreID,
                                attrIdDepth    : false,
                                attrNameDepth  : false
                            };

                            // Change attributes.
                            items = dmenuChangeAttributes(items, dataChange);

                            // Set new HTML to Document.
                            $('#tab-content-menu #module_menu_' + currentMenuType + '_store_' + targetStoreID + '_sortable_wrap').html(items);

                            // Hide Menu Items.
                            $('#tab-content-menu #module_menu_' + currentMenuType + '_store_' + targetStoreID + '_sortable_wrap').find('.module-menu_item_wrap').removeClass('open').find('.module-dmenu_editor-item_content').css('display', 'none');

                            // Display message.
                            dmenuTimeoutMessage(messageEl, dmenu_translated_text['text_message_success'], 'success');

                        // Store current.
                        } else {
                            // Display message.
                            dmenuTimeoutMessage(messageEl, dmenu_translated_text['text_unable_copy_to_store'], 'error');
                        }

                        break;
                }

            // Store Menu is empty.
            } else {
                // Display message.
                dmenuTimeoutMessage(messageEl, dmenu_translated_text['text_menu_item_missing'], 'error');
            }
        });

        // Select 'Show on site' info-block.
        $('#tab-settings_menu .select-setting-display').on('change', function(){
            var _this = $(this);
            var value = _this.val();
            var menu = _this.closest('.tab-pane').data('menu');

            // Show selected Info-block.
            _this.closest('.form-group').find('.alert').css('display', 'none');
            _this.closest('.form-group').find('#alert-' + menu + '_display-' + value).css('display', '');
        });

        // Hide 'Show on site' info-block.
        $('#tab-settings_menu .field-display-hide input').on('change', function(){
            var checkbox = $(this);

            // Hide Info-block in current menu settings.
            if (checkbox.is(':checked')) {
                checkbox.closest('.form-group').find('.field-display-info').css('display', 'none');
            } else {
                checkbox.closest('.form-group').find('.field-display-info').css('display', '');
            }
        });

        // Copy code to clipboard.
        $('#tab-settings_menu .field-display-info .copy-code').on('click', function(){
            var button = $(this);
            var messageEl = button.closest('.block').find('.message');

            // Remove message.
            messageEl.removeClass('success error').html('');

            // Get code.
            var code = button.closest('.dmenu-alert-content').find('code').text();

            // Create temporary INPUT field.
            var tempInput = $('<input type="text">');
            $('body').append(tempInput);

            // Select INPUT field.
            tempInput.val(code).select();

            // Copy code to clipboard.
            try {
                // Copy code.
                document.execCommand('copy');

                // Display message.
                dmenuTimeoutMessage(messageEl, dmenu_translated_text['text_message_success'], 'success');
            } catch (err) {
                // Error.
                console.error('Unable to copy to clipboard!', err);

                // Display message.
                dmenuTimeoutMessage(messageEl, dmenu_translated_text['text_message_error'], 'error');
            }

            // Remove temporary INPUT field.
            tempInput.remove();
        });
    });

    // Sortable Menu Items.
    function dmenuSortableMenuItems () {
        var menuSortable = [];
        var menuSortableWrap = [].slice.call(document.querySelectorAll('.nested-sortable'));

        for (var i = 0; i < menuSortableWrap.length; i++) {
            menuSortable[i] = new Sortable(menuSortableWrap[i], {
                group: {
                    name : 'shared',
                    pull : true,
                    put  : true
                },
                handle               : '.module-dmenu_editor-item_title',
                filter               : '.sortable_filtered',
                preventOnFilter      : false,
                animation            : 150,
                fallbackOnBody       : true,
                fallbackTolerance    : 0, //20
                swapThreshold        : 0.65,
                emptyInsertThreshold : 0, //5

                onEnd: function (event) {
                    //console.log(event);

                    var container = $(event.item).closest('.module-menu_items_wrap').prop('id');

                    // Repair Menu Items.
                    dmenuRepairMenuItems(container);
                }
            });
        }
    }

    // Sortable Sticky Items.
    function dmenuSortableStickyItems() {
        var menuStickySortable = [];
        var menuStickySortableWrap = [].slice.call(document.querySelectorAll('.sticky-clone-sortable'));

        for (var i = 0; i < menuStickySortableWrap.length; i++) {
            menuStickySortable[i] = new Sortable(menuStickySortableWrap[i], {
                group: {
                    name : 'shared',
                    pull : 'clone',
                    put  : false
                },
                animation : 150,
                sort      : false,

                onStart: function (event) {
                    if (widthWindowDME <= 1200) {
                        $(event.item).closest('.module-menu_items_add').toggleClass('active');
                    }
                },

                onEnd: function (event) {
                    //console.log(event);

                    if (!$(event.to).hasClass('sticky-clone-sortable')) {
                        var _item = $(event.item);
                        var container = _item.closest('.module-menu_items_wrap').prop('id');
                        var menu_type = _item.closest('.module-menu_items').data('menu');
                        var store_id = _item.closest('.store-tab_pane').data('store');

                        // Add visual loader.
                        $('#' + container).closest('.module_menu').append('<div class="loader-repair"><div class="lds-dual-ring"></div></div>');

                        // Remove Missing message.
                        _item.closest('.module-menu_items_wrap').find('.not_repair').remove();

                        // Get data from attributes.
                        var id = _item.children().data('id');
                        var layout = _item.children().data('layout');
                        var urlLink = _item.children().data('url_link');

                        var urlSeo = {};
                        var names = {};

                        for (language in dmenu_languages) {
                            if (typeof _item.children().data('url_seo_' + dmenu_languages[language]["language_id"]) !== 'undefined') {
                                urlSeo['language_' + dmenu_languages[language]["language_id"]] = _item.children().data('url_seo_' + dmenu_languages[language]["language_id"]);
                            } else {
                                urlSeo['language_' + dmenu_languages[language]["language_id"]] = '';
                            }

                            if (typeof _item.children().data('name_' + dmenu_languages[language]["language_id"]) !== 'undefined') {
                                names['language_' + dmenu_languages[language]["language_id"]] = _item.children().data('name_' + dmenu_languages[language]["language_id"]);
                            } else {
                                names['language_' + dmenu_languages[language]["language_id"]] = '';
                            }
                        }

                        // Row number.
                        var row = event.newIndex;

                        // Get depth of attributes: FOR, ID, NAME
                        var attrIdDepth = '';
                        var attrNameDepth = '';

                        if ($(event.to).is('.module-menu_items_wrap')) {
                            attrIdDepth = '';
                            attrNameDepth = '';
                        } else {
                            var targetID = $(event.to).closest('.module-menu_item_wrap').prop('id');
                            var targetIdRows = targetID.match(/\w+$/);
                            var targetNameRows = targetIdRows[0].replaceAll('_', '][rows][');

                            attrIdDepth = targetIdRows[0];
                            attrNameDepth = '[' + targetNameRows + ']';
                        }

                        // Params Menu Item.
                        var params = {
                            status    : 1,
                            menu_type : menu_type,
                            store_id  : store_id,
                            layout    : layout,
                            names     : names,
                            id        : id,
                            url       : {
                                link : urlLink,
                                seo  : urlSeo
                            },
                            row       : row,
                            item_id   : attrIdDepth,
                            item_name : attrNameDepth
                        };

                        // Change Menu Item.
                        dmenuChangeSortableStickyItem(event.item, container, params);
                    }
                }
            });
        }
    }

    // Repair Menu Items.
    function dmenuRepairMenuItems(container) {
        // Add visual loader.
        $('#' + container).closest('.module_menu').append('<div class="loader-repair"><div class="lds-dual-ring"></div></div>');

        // Repair attributes.
        dmenuRepairAttributes(container);

        // Remove visual loader.
        $('#' + container).closest('.module_menu').find('.loader-repair').remove();
    }

    // Repair attributes. Recursion.
    function dmenuRepairAttributes(container) {
        var _container = $('#' + container);
        var menu = _container.closest('.module-menu_items').data('menu');
        var store = _container.closest('.store-tab_pane').data('store');

        // Recursion condition.
        if (_container.children().length > 0) {
            _container.children().each(function(index, element) {
                var _this = $(this);

                if (!_this.is('.not_repair')) {
                    // Set data row to each element.
                    _this.attr('data-row', index).data('row', index);

                    // Get depth of attributes: FOR, ID, NAME.
                    var attrIdDepth = '';
                    var attrNameDepth = '';

                    if (_container.is('.module-menu_items_wrap')) {
                        attrIdDepth = index;
                        attrNameDepth = '[' + index + ']';
                    } else {
                        var targetID = _container.closest('.module-menu_item_wrap').prop('id');
                        var targetIdRows = targetID.match(/\w+$/);
                        var targetNameRows = targetIdRows[0].replaceAll('_', '][rows][');

                        attrIdDepth = targetIdRows[0] + '_' + index;
                        attrNameDepth = '[' + targetNameRows + '][rows][' + index + ']';
                    }

                    // Params to change attributes.
                    var dataChange = {
                        mode           : 'sort',
                        menu           : menu,
                        storeIdCurrent : store,
                        storeIdTarget  : store,
                        attrIdDepth    : attrIdDepth,
                        attrNameDepth  : attrNameDepth
                    };

                    // Change attributes.
                    _this = dmenuChangeAttributes(_this, dataChange);

                    // Recursion.
                    if (_this.find('.nested-sortable').first().children().length > 0) {
                        dmenuRepairAttributes(_this.find('.nested-sortable').first().prop('id'));
                    }
                }
            });
        } else {
            return;
        }
    }

    // Change attributes.
    function dmenuChangeAttributes(jqHTML, data) {
        var jqElement = null;
        var regExp = null;
        var attrTarget = null;
        var attrCurrent = null;

        // Change attributes: FOR.
        jqHTML.find('label').each(function(index, element) {
            jqElement = $(element);

            if (jqElement.is('[for]')) {
                attrCurrent = jqElement.prop('for');

                if (data.mode == 'sort') {
                    regExp = new RegExp(data.menu + '-store_' + data.storeIdCurrent + '-item-\\w+-', 'g');
                    attrTarget = attrCurrent.replace(regExp, data.menu + '-store_' + data.storeIdTarget + '-item-' + data.attrIdDepth + '-');
                } else {
                    regExp = new RegExp(data.menu + '-store_' + data.storeIdCurrent + '-item-', 'g');
                    attrTarget = attrCurrent.replace(regExp, data.menu + '-store_' + data.storeIdTarget + '-item-');
                }

                jqElement.attr('for', attrTarget).prop('for', attrTarget);
            }
        });

        // Set attributes: ID.
        if (data.mode == 'sort') {
            jqHTML.attr('id', data.menu + '-store_' + data.storeIdTarget + '-item-' + data.attrIdDepth).prop('id', data.menu + '-store_' + data.storeIdTarget + '-item-' + data.attrIdDepth);
        }

        // Change attributes: ID, NAME.
        jqHTML.find('input, select, a').each(function(index, element) {
            jqElement = $(element);

            if (jqElement.is('[id]')) {
                attrCurrent = jqElement.prop('id');

                if (data.mode == 'sort') {
                    regExp = new RegExp(data.menu + '-store_' + data.storeIdCurrent + '-item-\\w+-', 'g');
                    attrTarget = attrCurrent.replace(regExp, data.menu + '-store_' + data.storeIdTarget + '-item-' + data.attrIdDepth + '-');
                } else {
                    regExp = new RegExp(data.menu + '-store_' + data.storeIdCurrent + '-item-', 'g');
                    attrTarget = attrCurrent.replace(regExp, data.menu + '-store_' + data.storeIdTarget + '-item-');
                }

                jqElement.attr('id', attrTarget).prop('id', attrTarget);
            }

            if (jqElement.is('[name]')) {
                attrCurrent = jqElement.prop('name');

                if (data.mode == 'sort') {
                    regExp = new RegExp('module_dmenu_editor_items_' + data.menu + '_' + data.storeIdCurrent + '[\\w\\[\\]]+?\\[data\\]', 'g');
                    attrTarget = attrCurrent.replace(regExp, 'module_dmenu_editor_items_' + data.menu + '_' + data.storeIdTarget + data.attrNameDepth + '[data]');
                } else {
                    regExp = new RegExp('module_dmenu_editor_items_' + data.menu + '_' + data.storeIdCurrent + '\\[', 'g');
                    attrTarget = attrCurrent.replace(regExp, 'module_dmenu_editor_items_' + data.menu + '_' + data.storeIdTarget + '[');
                }

                jqElement.attr('name', attrTarget).prop('name', attrTarget);
            }
        });

        // Change sortable container attributes: ID.
        jqHTML.find('.module-menu_items_wrap_content').each(function(index, element) {
            jqElement = $(element);

            if (jqElement.is('[id]')) {
                attrCurrent = jqElement.prop('id');

                if (data.mode == 'sort') {
                    regExp = new RegExp('module_menu_' + data.menu + '_store_' + data.storeIdCurrent + '_nested_sortable-\\w+', 'g');
                    attrTarget = attrCurrent.replace(regExp, 'module_menu_' + data.menu + '_store_' + data.storeIdTarget + '_nested_sortable-' + data.attrIdDepth);
                } else {
                    regExp = new RegExp('module_menu_' + data.menu + '_store_' + data.storeIdCurrent + '_nested_sortable-', 'g');
                    attrTarget = attrCurrent.replace(regExp, 'module_menu_' + data.menu + '_store_' + data.storeIdTarget + '_nested_sortable-');
                }

                jqElement.attr('id', attrTarget).prop('id', attrTarget);
            }
        });

        return jqHTML;
    }

    // HTML Menu Item. AJAX.
    function dmenuChangeSortableStickyItem(item, container, params) {
        $.ajax({
            url: dmenu_actionAjaxItem.replaceAll('&amp;','&'),
            type: 'post',
            data: params,
            dataType: 'json',
            beforeSend: function() {
                // Add visual loader.
                //$('#' + container).closest('.module_menu').append('<div class="loader-repair"><div class="lds-dual-ring"></div></div>');
            },
            complete: function() {
                // Remove visual loader.
                $('#' + container).closest('.module_menu').find('.loader-repair').remove();
            },
            success: function(json) {
                //console.log(json);

                if (json['success']) {
                    _item = $(item);

                    // Replace Menu Item.
                    _item.replaceWith(json['html']);

                    // Repair Menu Items.
                    dmenuRepairMenuItems(container);

                    // Refresh tooltips.
                    _item.closest('.module-menu_items_wrap').find('[data-toggle="tooltip"]').tooltip();

                    // Refresh Sortable Menu Items.
                    dmenuSortableMenuItems();
                } else {
                    if (json['error']) {
                        console.log(json['error']);
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }

    // HTML Catalog Items. AJAX.
    function dmenuDownloadCategories(item, container, params) {
        $.ajax({
            url: dmenu_actionAjaxItem.replaceAll('&amp;','&'),
            type: 'post',
            data: params,
            dataType: 'json',
            beforeSend: function() {
                // Add visual loader.
                $('#' + container).closest('.module_menu').append('<div class="loader-repair"><div class="lds-dual-ring"></div></div>');
            },
            complete: function() {
                // Remove visual loader.
                $('#' + container).closest('.module_menu').find('.loader-repair').remove();
            },
            success: function(json) {
                //console.log(json);

                if (json['success']) {
                    // Download subcategories.
                    if (jQuery.isEmptyObject(params['filter'])) {
                        for (store in json['html']) {
                            // Add categories to Document.
                            item.find('#module_menu_catalog_' + store + '_nested_sortable-' + params['item_id']).html(json['html'][store]);

                            // Refresh tooltips.
                            item.find('#module_menu_catalog_' + store + '_nested_sortable-' + params['item_id'] + ' [data-bs-toggle="tooltip"]').tooltip();
                        }

                    // Download filtered categories.
                    } else {
                        for (store in json['html']) {
                            if (json['html'][store]) {
                                // Add categories to Document.
                                item.closest('#tab-catalog').find('#module_menu_catalog_' + store + '_sortable_wrap').html(json['html'][store]);

                                // Refresh tooltips.
                                item.closest('#tab-catalog').find('#module_menu_catalog_' + store + '_sortable_wrap [data-bs-toggle="tooltip"]').tooltip();
                            } else {
                                var textMissing = dmenuDisplayMessageMissing(dmenu_translated_text['text_categories_missing']);
                                item.closest('#tab-catalog').find('#module_menu_catalog_' + store + '_sortable_wrap').html(textMissing);
                            }
                        }
                    }
                } else {
                    if (json['error']) {
                        console.log(json['error']);
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }

    // Save/Remove Catalog Item. AJAX.
    // Expecting items['meaning']-data: save, remove.
    function dmenuChangeCategory(items, container, messageEl) {
        $.ajax({
            url: dmenu_actionAjaxCategory.replaceAll('&amp;','&'),
            type: 'post',
            data: items,
            dataType: 'json',
            beforeSend: function() {
                // Add visual loader.
                $('#' + container).closest('.module_menu').append('<div class="loader-repair"><div class="lds-dual-ring"></div></div>');

                // Remove error data.
                messageEl.closest('.module-dmenu_editor-item').find('.text-danger').remove();
                messageEl.closest('.module-dmenu_editor-item').find('.input-name').removeClass('has-error');
                messageEl.closest('.module-dmenu_editor-item').find('.module-dmenu_editor-item_title').removeClass('alert_warning');
            },
            complete: function() {
                // Remove visual loader.
                $('#' + container).closest('.module_menu').find('.loader-repair').remove();
            },
            success: function(json) {
                //console.log(json);

                if (json['success']) {
                    // If data reset.
                    // Reset category to default fields.
                    if (items.meaning == 'remove') {
                        for (key in items.fields) {
                            switch(items.fields[key].field) {
                                case 'names':
                                    let title = messageEl.closest('.module-dmenu_editor-item').find('input.name_' + items.fields[key].language).data('title');
                                    messageEl.closest('.module-dmenu_editor-item').find('input.name_' + items.fields[key].language).val(title);
                                    break;
                                case 'names_hide':
                                    messageEl.closest('.module-dmenu_editor-item').find('[data-field="names_hide"]').prop('checked', false);
                                    break;
                                case 'icon_image':
                                    var field = messageEl.closest('.module-dmenu_editor-item').find('[data-field="icon_image"]');
                                    field.parent().find('img').attr('src', dmenu_itemPlaceholder).prop('src', dmenu_itemPlaceholder);
                                    field.val('');
                                    break;
                                case 'status':
                                    let fieldEl = messageEl.closest('.module-dmenu_editor-item').find('[data-field="status"]');
                                    let statusNum = Number(fieldEl.data('status'));

                                    if (statusNum) {
                                        fieldEl.val(statusNum);
                                        messageEl.closest('.module-dmenu_editor-item').removeClass('enabled disabled').addClass('enabled');
                                    } else {
                                        fieldEl.val('0');
                                        messageEl.closest('.module-dmenu_editor-item').removeClass('enabled disabled').addClass('disabled');
                                    }

                                    break;
                                default:
                                    messageEl.closest('.module-dmenu_editor-item').find('[data-field="' + items.fields[key].field + '"]').val('');
                                    break;
                            }
                        }

                        // Set Title on Catalog Item.
                        let title = messageEl.closest('.module-menu_item_wrap').data('title');
                        messageEl.closest('.module-dmenu_editor-item').find('.module-dmenu_editor-item_title .text').text(title);

                        // Remove 'Saved' Title.
                        messageEl.closest('.module-dmenu_editor-item').find('.field-title_saved').remove();

                        // Remove 'Saved' Icon.
                        messageEl.closest('.module-dmenu_editor-item').find('.icon-saved').remove();

                    // If data saved.
                    } else {
                        // Display 'Saved' Icon.
                        var iconHTML = dmenuDisplaySavedIcon();
                        messageEl.closest('.module-dmenu_editor-item').find('.module-dmenu_editor-item_title').prepend(iconHTML);
                    }

                    // Display message.
                    dmenuTimeoutMessage(messageEl, json['message'], json['class']);
                } else {
                    if (json['error']) {
                        // Display error to category.
                        if (json['warning']['names']) {
                            for (language in json['warning']['names']) {
                                let languageArr = language.split('_');
                                let languageID = languageArr[languageArr.length-1];

                                messageEl.closest('.module-dmenu_editor-item').find('.input-name_' + languageID).addClass('has-error').after('<div class="text-danger d-block">' + json['warning']['names'][language] + '</div>');
                            }

                            messageEl.closest('.module-dmenu_editor-item').find('.module-dmenu_editor-item_title').addClass('alert_warning');

                        // Display error to console.
                        } else {
                            console.log(json['error']);
                        }
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }

    // Refresh/Remove Catalog. AJAX.
    function dmenuChangeCatalog(data, container, messageEl) {
        $.ajax({
            url: dmenu_actionAjaxCatalogChange.replaceAll('&amp;','&'),
            type: 'post',
            data: data,
            dataType: 'json',
            beforeSend: function() {
                // Add visual loader.
                $('#' + container).append('<div class="loader-repair"><div class="lds-dual-ring"></div></div>');
            },
            complete: function() {
                // Remove visual loader.
                $('#' + container).find('.loader-repair').remove();
            },
            success: function(json) {
                //console.log(json);

                if (json['success']) {
                    DMETemp.filter.meaning = 'filter';
                    $('#button-menu_catalog-filter-reset').trigger('click');

                    // Display message.
                    dmenuTimeoutMessage(messageEl, json['message'], json['class']);
                } else {
                    console.log(json['error']);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }

    // Set errors to Menu Items. Recursion.
    function setErrorToMenuItems(items, params) {
        const errorKeys = {
            names : { key: 'names', id: 'names' },
            seo : { key: 'seo', id: 'url-seo' }
        };

        for (key_row in items) {
            for (key_error in errorKeys) {
                if ((typeof items[key_row]['error'] !== 'undefined') && (typeof items[key_row]['error'][errorKeys[key_error]['key']] !== 'undefined') && 
                    Object.keys(items[key_row]['error'][errorKeys[key_error]['key']]).length) {
                        for (key_language in items[key_row]['error'][errorKeys[key_error]['key']]) {
                            let language = key_language.split('_');
                            let languageID = language[language.length-1];
                            let row = params.row + key_row;
                            let itemId = params.menu + '-' + params.store + '-item-' + row + '-data-' + errorKeys[key_error]['id'] + '_' + languageID;

                            $('#' + itemId).closest('.field-content').find('#error-' + itemId).html(items[key_row]['error'][errorKeys[key_error]['key']][key_language]);

                            $('#' + itemId).closest('.input-group').addClass('has-error');
                            $('#' + itemId).closest('.field-content').find('#error-' + itemId).addClass('d-block');
                            $('#' + itemId).closest('.module-dmenu_editor-item').find('.module-dmenu_editor-item_title').addClass('alert_warning');

                            $('#nav-tabs-menu').find('a[href="#tab-menu_' + params.menu + '"]').addClass('alert_warning');
                            $('#tab-content-menu').find('.nav-tabs-menu-stores a[href="#tab-menu_' + params.menu + '_' + params.store + '"]').addClass('alert_warning');

                            // Change icon class.
                            if (key_error == 'seo') {
                                $('#' + itemId).closest('.field-content').find('i').addClass('invisible');
                            }
                        }
                }
            }

            if ((typeof items[key_row]['rows'] !== 'undefined') && Object.keys(items[key_row]['rows']).length) {
                params.row = params.row + key_row + '_';
                setErrorToMenuItems(items[key_row]['rows'], params);
            }
        }
    }

    // HTML Missing message.
    function dmenuDisplayMessageMissing(message) {
        var textMissing = '';

        textMissing += '<div class="not_repair sortable_filtered">';
            textMissing += '<div class="module-menu_items_missing_text">' + message + '</div>';
        textMissing += '</div>';

        return textMissing;
    }

    // HTML 'Saved' Icon.
    function dmenuDisplaySavedIcon() {
        var html = '';

        html += '<span class="icon-saved">';
            html += '<i class="fa fa-save"></i>';
        html += '</span>';

        return html;
    }

    // Timeout with message.
    // Expecting classText params: success, error.
    var dmenuTimeoutClearMessage = null;
    function dmenuTimeoutMessage(container, html, classText) {
        container.removeClass('success error').html('');
        container.addClass(classText).html(html);

        if (dmenuTimeoutClearMessage != null) {
            window.clearTimeout(dmenuTimeoutClearMessage);
        }

        dmenuTimeoutClearMessage = window.setTimeout(function(){
            container.removeClass('success error').html('');
        }, 3000);
    }
});
