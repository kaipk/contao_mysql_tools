window.addEvent('domready', function() {

	// get the elements
    var fieldSelect = document.id('mysql_tools_select');
    var divOptions = document.id('mysql_tools_options');

	// set the options on startup
	setOptions();

	// add the "change" event
    fieldSelect.addEvent('change', function(){
    	setOptions();
    });


	/**
	 * Set the options based on the selected method
	 */
	function  setOptions()
	{
    	divOptions.empty();

		switch (fieldSelect.value)
		{
			case "check":
				addQuick();
				addFast();
				addMedium();
				addExtended();
				addChanged();
				break;

			case "analyze":
				break;

			case "checksum":
				addQuick();
				addExtended();
				break;

			case "optimize":
				break;

			case "repair":
				addQuick();
				addExtended();
				addUseFrmFile();
				break;
		}
	}


	/**
	 * Add the "quick" checkbox
	 */
    function addQuick()
    {
    	var objLabel = new Element('label', {
    		'for': 'quick',
    		'html': 'quick'
    	});

		var objInput = new Element('input', {
			'type': 'checkbox',
			'id': 'quick',
			'name': 'quick'
		});

		objLabel.inject(divOptions);
		objInput.inject(divOptions);
    };


	/**
	 * Add the "fast" checkbox
	 */
	function addFast()
	{
    	var objLabel = new Element('label', {
    		'for': 'fast',
    		'html': 'fast'
    	});

		var objInput = new Element('input', {
			'type': 'checkbox',
			'id': 'fast',
			'name': 'fast'
		});

		objLabel.inject(divOptions);
		objInput.inject(divOptions);
	};


	/**
	 * Add the "medium" checkbox
	 */
	function addMedium()
	{
    	var objLabel = new Element('label', {
    		'for': 'medium',
    		'html': 'medium'
    	});

		var objInput = new Element('input', {
			'type': 'checkbox',
			'id': 'medium',
			'name': 'medium'
		});

		objLabel.inject(divOptions);
		objInput.inject(divOptions);
	};


	/**
	 * Add the "extended" checkbox
	 */
	function addExtended()
	{
    	var objLabel = new Element('label', {
    		'for': 'extended',
    		'html': 'extended'
    	});

		var objInput = new Element('input', {
			'type': 'checkbox',
			'id': 'extended',
			'name': 'extended'
		});

		objLabel.inject(divOptions);
		objInput.inject(divOptions);
	};


	/**
	 * Add the "changed" checkbox
	 */
	function addChanged()
	{
    	var objLabel = new Element('label', {
    		'for': 'changed',
    		'html': 'changed'
    	});

		var objInput = new Element('input', {
			'type': 'checkbox',
			'id': 'changed',
			'name': 'changed'
		});

		objLabel.inject(divOptions);
		objInput.inject(divOptions);
	};


	/**
	 * Add the "use FRM file" checkbox
	 */
	function addUseFrmFile()
	{
    	var objLabel = new Element('label', {
    		'for': 'usefrmfile',
    		'html': 'use FRM file'
    	});

		var objInput = new Element('input', {
			'type': 'checkbox',
			'id': 'usefrmfile',
			'name': 'usefrmfile'
		});

		objLabel.inject(divOptions);
		objInput.inject(divOptions);
	}

});