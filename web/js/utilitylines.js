window.onload = function () {
    var r = Raphael("holder", 3560000, 5332000),
        discattr = {fill: "#00ff00", stroke: "none"},
        discactattr = {fill: "#ff0000", stroke: "none"};
        
    r.setViewBox(3559160, 5330520, 3559890, 5331340, false);
    
    r.rect(0, 0, 3560000, 5332000, 3).attr({stroke: "#666"});
    var points = [],
        points_data = [],
        choosen_points = [];
    
    // draw points
    $.ajax({
        type:"POST",
        dataType: "json",
        url: document.URL + "/nodes",
        async: false,
        success: function(response){
            if (response.status == true) {
                for(var i in response.data) {
                    points_data[response.data[i].id] = response.data[i];
                    points[i] = r.circle(parseFloat(response.data[i].xr), parseFloat(response.data[i].yh), 5).attr(discattr).data('point-id', response.data[i].id).attr({ title: response.data[i].oname + ', x: ' + response.data[i].xr + ', y: ' + response.data[i].yh});
                    
                    points[i].click(function() {
                        var elem = this;
                        var j = elem.data('point-id');
                        if (this.attr('fill')=="#00ff00") {
                            this.attr('fill', "#ff0000");
                            choosen_points.push(points_data[j]);
                            clearChoosenPointsWhenNeeded(j);
                        }
                        else {
                            this.attr('fill', "#00ff00");
                            for (var a in choosen_points) {
                                if (i == choosen_points[a].id) {
                                    var choosen_index = this.indexOf(a);
                                    if (choosen_index !== -1) {
                                        choosen_points.splice(choosen_index, 1);
                                    }
                                }
                            }
                            clearChoosenPointsWhenNeeded();
                        }
                    });
                }
            } else {
                console.log(response.message);
            }
        }
    });
    
    // draw pipes
    var pipes = [];
    $.ajax({
        type:"POST",
        dataType: "json",
        url: document.URL + "/pipes",
        async: false,
        success: function(response){
            if (response.status == true) {
                for (var i in response.data) {
                    pipes[i] = r.path(
                        "M " + points_data[parseInt(response.data[i].ann)].xr 
                        + " " + points_data[parseInt(response.data[i].ann)].yh 
                        + " L " + points_data[parseInt(response.data[i].art)].xr 
                        + " " + points_data[parseInt(response.data[i].art)].yh 
                    ).attr({stroke: "#666"});
                }
            } else {
                console.log(response.message);
            }
        }
    });
    
    /**
     * Does not allow to mark more as 2 points
     * ToDo: change reload to proper drawing not market points
     * 
     * @param {integer} i
     * @returns undefined
     */
    var clearChoosenPointsWhenNeeded = function(i) {
        if (choosen_points.length > 2) {
            location.reload();
        }
        else if (choosen_points.length == 2) {
            calculateWay(choosen_points);
        }
    }
    
    /**
     * Draw shortest way
     * 
     * @param {array} points
     * @returns undefined
     */
    var calculateWay = function(points) {
        var way = null;
        var data = [];
        data = {
            'start': points[0].id,
            'end': points[1].id
        };
        $.ajax({
            type:"POST",
            dataType: "json",
            data: data,
            url: document.URL + "/distance",
            async: false,
            success: function(response){
                if (response.status == true) {            
                    var path_string = '';
                    for (var i = 0; i < response.results.length; i++) {
                        if (i == 0) {
                            path_string += 'M';
                        }
                        else {
                            path_string += ' L';
                        }
                        path_string += points_data[parseInt(response.results[i])].xr + ',' + points_data[parseInt(response.results[i])].yh;
                    }
                    var way_path = r.path(path_string).attr({stroke: "#f00"});
                    
                } else {
                    console.log(response.message);
                }
            }
        });
    }
}