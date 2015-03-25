var DDX = {
    
    
    // for DEMOPACK DEMO ONLY ------------------------ start demo option 
    keys : ["dd-option-population", "dd-option-homevideo", "dd-option-video", "dd-option-plm", "dd-option-vision", "dd-option-dental", "dd-option-backto", "dd-option-homeimg"],
	defaults : [
		0, // population
        0, // video: home page
		0, // video: q/a page
		1, // people like me
		1, // vision
		1, // dental
        1, // back to
        0  // custom home imgage
	],
    
	custom : [
		"dd-option-population",
        "dd-option-homevideo",
		"dd-option-video",
		"dd-option-plm",
		"dd-option-vision",
		"dd-option-dental",
        "dd-option-backto",
        "dd-option-homeimg"
	],
    // for DEMOPACK DEMO ONLY -------------------------- end demo option
    
    
    // TEMP SAMPLE QUESTION BRANCHING
    qflow : [1],

    sampleFlow : function(f, s){
        var flow;
        
        // Sample branching for DEMO only---------------- !!!!!!!!!!!!!!!!!!!!!!!! DEMO ONLY --- !
        if (s === "q1-a3") {flow = 3}
            else if (s === "q3-a2") {flow = 6}
            else if (s === "q6-a2") {flow = 8}
        else{
            // If no answer is chosen, always flow to next question (current id + 1)
            flow = parseInt(f) + 1;
            // The above behavior is for DEMO ONLY.
            // Actual site shouls require an answer to be chose before moving forward.
            // Please add popup or alert dialog that prompts for required action.
        }
        
       return flow;
    }
};

     