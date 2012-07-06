<?php

class GoogleReport extends SS_Report {

	function title() {
		return "Google Analytics";
	}

	function description() {
		return "add description";
	}

	function sourcerecords() {
		return false;
	}

	function columns() {
		return array();
	}

	function getCMSFields() {
		$fields = new FieldSet();
		
		$chart = new GooglePerformanceChart(); 
		
		$fields->push(new LiteralField('ReportTitle', "<h3>{$this->title()}</h3>"));
		$fields->push(new LiteralField('ReportDescription', $chart->renderWith('GooglePerformanceChart')));
		
		return $fields;
	}
}
