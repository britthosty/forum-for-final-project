
////////////////////////////////////////////////////
// spellChecker.js
//
// spellChecker object
//
// This file is sourced on web pages that have a textarea object to evaluate
// for spelling. It includes the implementation for the spellCheckObject.
//
////////////////////////////////////////////////////


// constructor
function spellChecker( textAreaObject ) {

	// public properties - configurable
	this.popUpUrl = '/spellcheck/index.html';
	this.popUpName = 'spellchecker';
	this.popUpProps = "menu=no,width=440,height=350,top=70,left=120,resizable=yes,status=yes";
	this.spellCheckScript = '/tool/view/spellcheck';

	// values used to keep track of what happened to a word
	this.replWordFlag = "R";	// single replace
	this.ignrWordFlag = "I";	// single ignore
	this.replAllFlag = "RA";	// replace all occurances
	this.ignrAllFlag = "IA";	// ignore all occurances
	this.fromReplAll = "~RA";	// an occurance of a "replace all" word
	this.fromIgnrAll = "~IA";	// an occurance of a "ignore all" word
	// properties set at run time
	this.textArea = textAreaObject;	
	this.wordFlags = new Array();
	this.currentWordIndex = 0;
	this.spellCheckerWin = null;
	this.controlWin = null;
	this.wordWin = null;

	// CHANGED
	this.spellcheckCompleted = 0;

	// private methods
	this._spellcheck = _spellcheck;
	this._getSuggestions = _getSuggestions;
	this._setAsIgnored = _setAsIgnored;
	this._getTotalReplaced = _getTotalReplaced;
	this._setWordText = _setWordText;

	// public methods
	this.openChecker = openChecker;
	this.startCheck = startCheck;
	this.ignoreWord = ignoreWord;
	this.ignoreAll = ignoreAll;
	this.replaceWord = replaceWord;
	this.replaceAll = replaceAll;
	this.terminateSpell = terminateSpell;
	this.undo = undo;

	// set the current window's "speller" property to the instance of this class.
	// this object can now be referenced by child windows/frames.
	window.speller = this;
}

function openChecker() {

	// Use tinyMCE's function to get textarea contents.
	// For a regular textbox this.textArea.value already has correct contents
	if (typeof tinyMCE != 'undefined') {
		this.textArea.value = tinyMCE.activeEditor.getContent();
	}
	this.spellCheckerWin = window.open( this.popUpUrl, this.popUpName, this.popUpProps );
	if( !this.spellCheckerWin.opener ) {
		this.spellCheckerWin.opener = window;
	}
}

function startCheck( wordWindowObj, controlWindowObj ) {

	// set properties from args
	this.wordWin = wordWindowObj;
	this.controlWin = controlWindowObj;
	
	// reset properties
	this.wordWin.resetForm();
	this.controlWin.resetForm();
	this.currentWordIndex = 0;
	this.wordFlags = new Array(this.wordWin.suggestions.length);

	// start
	this._spellcheck();
	
	return true;
}

function ignoreWord() {
	if( !this.wordWin ) {
		alert( 'Error: Word frame not available.' );
		return false;
	}
	if( !this.wordWin.getTextVal( this.currentWordIndex )) {
		alert( 'Error: "Not in dictionary" text is missing.' );
		return false;
	}
	// set as ignored
	if( this._setAsIgnored( this.currentWordIndex, this.ignrWordFlag )) {
		this.currentWordIndex++;
		this._spellcheck();
	}
}

function ignoreAll() {
	if( !this.wordWin ) {
		alert( 'Error: Word frame not available.' );
		return false;
	}
	if( !this.wordWin.getTextVal( this.currentWordIndex )) {
		alert( 'Error: "Not in dictionary" text is missing' );
		return false;
	}
	// get the word that is currently being evaluated.
	var s_word_to_repl = this.wordWin.getTextVal(this.currentWordIndex);
	// loop through all the words (this word and after)  that 
	// 1) do not already have a flag and 2) have the same value 
	// as s_word_to_repl and flag it as ignored.
	var ub = this.wordWin.getTotalWords();
	for( var i = this.currentWordIndex; i < ub; i++ ) {
		if(( this.wordWin.getTextVal( i ) == s_word_to_repl )
		&& ( !this.wordFlags[i] )) {
			// set as ignored
			this._setAsIgnored( i, this.fromIgnrAll );
		}
	}
	// overwrite the flag for this word to specify ignore ALL
	this.wordFlags[this.currentWordIndex] = this.ignrAllFlag

	// finally, move on
	this.currentWordIndex++;
	this._spellcheck();
}

function replaceWord() {
	if( !this.wordWin ) {
		alert( 'Error: Word frame not available.' );
		return false;
	}
	if( !this.wordWin.getTextVal( this.currentWordIndex )) {
		alert( 'Error: "Not in dictionary" text is missing' );
		return false;
	}
	if( !this.controlWin.replacementText ) {
		return;
	}
	var txt = this.controlWin.replacementText;
	if( txt.value ) {
		var newspell = new String( txt.value );
		if( this._setWordText(
			this.currentWordIndex, newspell, this.replWordFlag
		)) {
			this.currentWordIndex++;
			this._spellcheck();
		}
	}
}

function replaceAll() {
	if( !this.wordWin ) {
		alert( 'Error: Word frame not available.' );
		return false;
	}
	if( !this.wordWin.getTextVal( this.currentWordIndex )) {
		alert( 'Error: "Not in dictionary" text is missing' );
		return false;
	}
	if( !this.controlWin.replacementText ) {
		return;
	}
	var txt = this.controlWin.replacementText;
	if( txt.value ) {
		var newspell = new String( txt.value );
		// get the word that is currently being evaluated.
		var s_word_to_repl = this.wordWin.getTextVal( this.currentWordIndex );
		// loop through all the words (this word and after)  that 
		// 1) do not already have a flag and 2) have the same value 
		// as s_word_to_repl and setWordText()!
		var ub = this.wordWin.getTotalWords();
		for( var i = this.currentWordIndex; i < ub; i++ ) {
			if(( this.wordWin.getTextVal( i ) == s_word_to_repl )
			&& ( !this.wordFlags[i] )) {
				this._setWordText( i, newspell, this.fromReplAll );
			}
		}
		// overwrite the flag for this word to specify ignore ALL
		this.wordFlags[this.currentWordIndex] = this.replAllFlag
		// finally, move on
		this.currentWordIndex++;
		this._spellcheck();
	}
}

function terminateSpell() {
	if (this.spellcheckCompleted == 1) {
		return true;
	} else {
		this.spellcheckCompleted = 1;
	}

	// called when we have reached the end of the spell checking.
	var msg = "Spell check complete:\n\n";
	var numrepl = this._getTotalReplaced();
	if( numrepl == 0 ) {
		// see if there were no misspellings to begin with
		if( this.wordWin.suggestions.length ) {
			msg += "No words changed.";
		} else {
			msg += "No misspellings found.";
		}
	} else if( numrepl == 1 ) {
		msg += "One word changed.";
	} else {
		msg += numrepl + " words changed.";
	}
	msg += "\n";
	alert( msg );

	if( numrepl > 0 ) {
		// update the textarea on the opener window
		// CHANGED
		if (this.spellCheckerWin.opener._editor_url) {
			this.spellCheckerWin.opener.editor_setHTML(this.textArea.name, this.wordWin.text);
		} else if (this.spellCheckerWin.opener.htmlEditor) {
			this.spellCheckerWin.opener.htmlEditor.body.innerHTML = this.wordWin.text;
		} else if (typeof tinyMCE != 'undefined') {
			tinyMCE.activeEditor.setContent(this.wordWin.text)
		} else {
			this.textArea.value = this.wordWin.text;
		}
	}

	// return back to the calling window
	this.spellCheckerWin.close();

	return true;
}

function undo() {
	// skip if this is the first word!
	if( this.currentWordIndex > 0 ) {
		
		// go back to the last word index that was acted upon 
		this.wordWin.removeFocus( this.currentWordIndex );
		do {
			this.currentWordIndex--;
		} while ( 
			this.wordFlags[this.currentWordIndex] == this.fromIgnrAll
			|| this.wordFlags[this.currentWordIndex] == this.fromReplAll
		); 
		
		// if we got back to the first word then set the Undo button back to disabled
		if( this.currentWordIndex == 0 ) {
			this.controlWin.disableUndo();
		}
		var idx = this.currentWordIndex
		
		// examine what happened to this current word.
		switch( this.wordFlags[this.currentWordIndex] ) {
			// replace all: go through this and all the future occurances of the word 
			// and revert them all to the original spelling and clear their flags
			case this.replAllFlag :
				for( var i = idx; i < this.wordWin.getTotalWords(); i++ ) {
					var origSpell = this.wordWin.originalSpellings[i];
					if( origSpell == this.wordWin.originalSpellings[idx] ) {
						this._setWordText ( i, origSpell, undefined );
					}
				}
				break;
				
			// ignore all: go through all the future occurances of the word 
			// and clear their flags
			case this.ignrAllFlag :
				for( var i = idx; i < this.wordWin.getTotalWords(); i++ ) {
					var origSpell = this.wordWin.originalSpellings[i];
					if( origSpell == this.wordWin.originalSpellings[idx] ) {
						this.wordFlags[i] = undefined; 
					}
				}
				break;
				
			// replace: revert the word to its original spelling
			case this.replWordFlag :
				var origSpell = this.wordWin.originalSpellings[idx]
				this._setWordText ( idx, origSpell, undefined );
				break;
		}

		// For all four cases, clear the wordFlag of this word. re-start the process
		this.wordFlags[this.currentWordIndex] = undefined; 
		this._spellcheck();
	}
}

function _spellcheck() {
	// check if this is the last one
	if( this.currentWordIndex == this.wordWin.suggestions.length ) {
		this.terminateSpell();
	} else {
		// if this is after the first one make sure the Undo button is enabled
		if( this.currentWordIndex > 0 ) {
			this.controlWin.enableUndo();
		}
	
		// skip the current word if it has already been worked on
		if( this.wordFlags[this.currentWordIndex] ) {
			// increment the global current word index and move on.
			this.currentWordIndex++;
			this._spellcheck();
		} else {
			var evalText = this.wordWin.getTextVal( this.currentWordIndex );
			if( evalText ) {
				this.controlWin.evaluatedText.value = evalText;
				this.wordWin.setFocus( this.currentWordIndex );
				this._getSuggestions( this.currentWordIndex );
			}
		}
	}
}

function _getSuggestions( word_num ) {
	this.controlWin.clearSuggestions();
	// add suggestion in list for each suggested word.
	// get the array of suggested words out of the
	// two-dimensional array containing all suggestions.
	var a_suggests = this.wordWin.suggestions[word_num];	
	if( a_suggests ) {
		// got an array of suggestions.
		for( var ii = 0; ii < a_suggests.length; ii++ ) {	
			this.controlWin.addSuggestion( a_suggests[ii] );
		}
	}
	this.controlWin.selectDefaultSuggestion();
}

function _setAsIgnored( word_num, flag ) {
	// set the UI
	this.wordWin.removeFocus( word_num );
	// do the bookkeeping
	this.wordFlags[word_num] = flag;
	return true;
}

function _getTotalReplaced() {
	var i_replaced = 0;
	for( var i = 0; i < this.wordFlags.length; i++ ) {
		if( this.wordFlags[i] ) {
			if(( this.wordFlags[i] == this.replWordFlag )
			|| ( this.wordFlags[i] == this.replAllFlag )
			|| ( this.wordFlags[i] == this.fromReplAll )) {
				i_replaced++;
			}
		}
	}
	return i_replaced;
}

function _setWordText( word_num, newText, flag ) {
	// set the UI and form inputs
	this.wordWin.setText( word_num, newText );
	// keep track of what happened to this word:
	this.wordFlags[word_num] = flag;
	return true;
}
