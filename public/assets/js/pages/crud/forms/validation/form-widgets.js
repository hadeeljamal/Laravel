// Class definition

var KTFormWidgetsValidation = function () {
    // Private functions
    var validator;

    var _initWidgets = function() {
        // Initialize Plugins
        // Datepicker
        $('#kt_datepicker').datepicker({
            todayHighlight: true,
            templates: {
                leftArrow: '<i class=\"la la-angle-left\"></i>',
                rightArrow: '<i class=\"la la-angle-right\"></i>'
            }
        }).on('changeDate', function(e) {
            // Revalidate field
            validator.revalidateField('date');
        });

        // Datetimepicker
        $('#kt_datetimepicker').datetimepicker({
            pickerPosition: 'bottom-left',
            todayHighlight: true,
            autoclose: true,
            format: 'yyyy.mm.dd hh:ii'
        });

        $('#kt_datetimepicker').change(function() {
            // Revalidate field
            validator.revalidateField('datetime');
        });

        // Timepicker
        $('#kt_timepicker').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: true
        });

        $('#kt_timepicker').change(function() {
            // Revalidate field
            validator.revalidateField('time');
        });

        // Daterangepicker
        $('#kt_daterangepicker').daterangepicker({
            buttonClasses: ' btn',
            applyClass: 'btn-primary',
            cancelClass: 'btn-light-primary'
        }, function(start, end, label) {
            var input = $('#kt_daterangepicker').find('.form-control');
            input.val( start.format('YYYY/MM/DD') + ' / ' + end.format('YYYY/MM/DD'));

            // Revalidate field
            validator.revalidateField('daterangepicker');
        });

        // Bootstrap Switch
        $('[data-switch=true]').bootstrapSwitch();
        $('[data-switch=true]').on('switchChange.bootstrapSwitch', function() {
            // Revalidate field
            validator.revalidateField('switch');
        });

        // Bootstrap Select
        $('#kt_bootstrap_select').selectpicker();
        $('#kt_bootstrap_select').on('changed.bs.city', function() {
            // Revalidate field
            validator.revalidateField('city');
        });

        // Select2
        $('#kt_select2').select2({
            placeholder: "Select a state",
        });

        $('#kt_select2').on('change', function(){
            // Revalidate field
            validator.revalidateField('select2');
        });

        // Typeahead
        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: HOST_URL + '/api/?file=typeahead/countries.json'
        });

        $('#kt_typeahead').typeahead(null, {
            name: 'countries',
            source: countries
        });

        $('#kt_typeahead').bind('typeahead:select', function(ev, suggestion) {
            // Revalidate field
            validator.revalidateField('typeahead');
        });
    }

    var _initValidation = function () {
        // Validation Rules
        validator = FormValidation.formValidation(
            document.getElementById('kt_form'),
            {
                fields: {
                    date: {
                        validators: {
                            notEmpty: {
                                message: 'Date is required'
                            }
                        }
                    },
                    studentEnglish: {
                        validators: {
                            notEmpty: {
                                message: 'Student Name in English  is required'
                            }
                        }
                    },
                    studentArabic: {
                        validators: {
                            notEmpty: {
                                message: 'Student Name in Arabic  is required'
                            }
                        }
                    },
                    idNumber: {
                        validators: {
                            notEmpty: {
                                message: 'ID Number  is required'
                            }
                        }
                    },
                    birthDay: {
                        validators: {
                            notEmpty: {
                                message: 'BirthDay  is required'
                            }
                        }
                    },
                    phoneNumber: {
                        validators: {
                            notEmpty: {
                                message: 'Phone Number  is required'
                            }
                        }
                    },
                    alternateNumber: {
                        validators: {
                            notEmpty: {
                                message: 'Alternate Number  is required'
                            }
                        }
                    },
                    alternateName: {
                        validators: {
                            notEmpty: {
                                message: 'Alternate Name  is required'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Email is required'
                            }
                        }
                    },
                   address: {
                        validators: {
                            notEmpty: {
                                message: 'Address  is required'
                            }
                        }
                    },
                    alternateName: {
                        validators: {
                            notEmpty: {
                                message: 'Alternate Name  is required'
                            }
                        }
                    },
                   city: {
                        validators: {
                            notEmpty: {
                                message: 'City  is required'
                            }
                        }
                    },
                    qualification: {
                        validators: {
                            notEmpty: {
                                message: 'Qualification  is required'
                            }
                        }
                    },
                    specialization: {
                        validators: {
                            notEmpty: {
                                message: 'Specializationis required'
                            }
                        }
                    },
                    currentJob: {
                        validators: {
                            notEmpty: {
                                message: 'Current Job  is required'
                            }
                        }
                    },
                    workPlace: {
                        validators: {
                            notEmpty: {
                                message: 'Work Place  is required'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
					// Validate fields when clicking the Submit button
					submitButton: new FormValidation.plugins.SubmitButton(),
            		// Submit the form when all fields are valid
            		defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        eleInvalidClass: '',
                        eleValidClass: '',
                    })
                }
            }
        );
    }

    return {
        // public functions
        init: function() {
            _initWidgets();
            _initValidation();
        }
    };
}();

jQuery(document).ready(function() {
    KTFormWidgetsValidation.init();
});
