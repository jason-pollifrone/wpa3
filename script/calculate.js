
        $( document ).ready(function() {
            

            

            $(".qty").val('');
            $("#movie")[0].selectedIndex = 0;

                $('.qty').change(function(){
                    
                    if(dayV == 'monday' | 'tuesday' || dayV == 'wednesday' | 'thursday' | 'friday' && timeV == 'one'){
                        var parent = $(this).parents('tr');
                        var discount = $('.discount', parent);
                        var total = $('.subtotal', parent);
                        var valueD = parseInt(this.value) * parseFloat(discount.get(0).innerHTML||0);
                        total.text(valueD.toFixed(2));
                        getDiscount();
                    }
                    else{
                    var parent = $(this).parents('tr');
                    var price = $('.price', parent);
                    var total = $('.subtotal', parent);
                    var value = parseInt(this.value) * parseFloat(price.get(0).innerHTML||0);
                    total.text(value.toFixed(2));
				      getTotal();   
                    }
                            
                })	
		
                                 
            function getDiscount(){   
                    var total = 0;
                    $('.subtotal').each(function(){
                    total += parseFloat(this.innerHTML);
                    });
                    $('.total').text(total.toFixed(2));
                }
            
            function getTotal(){
                    var total = 0;
                    $('.subtotal').each(function(){
                    total += parseFloat(this.innerHTML);
                    });
                    $('.total').text(total.toFixed(2));
                }
        
        })


                    $('#day').hide();
                    $('#time').hide();
                    $('#movie').change(function(){
                    $(".qty").val('');
                    $(".subtotal").text('0.00');
                    $(".total").text('0.00');
                    $("#day")[0].selectedIndex = 0;
                    $("select option[value*='none']").prop('disabled',true);
                    $('#time').empty();
                        $('#day').show();
                        propV = $(this).prop('value');
                        
                        if(propV == 'fnf7'){
                            $("select option[value*='monday']").prop('disabled',true);
                            $("select option[value*='tuesday']").prop('disabled',true);
                            $("select option[value*='wednesday']").prop('disabled',false);
                            $("select option[value*='thursday']").prop('disabled',false);
                            $("select option[value*='friday']").prop('disabled',false);
                            $("select option[value*='saturday']").prop('disabled',false);
                            $("select option[value*='sunday']").prop('disabled',false);
                        }
                        else if(propV == 'boruto'){
                            $("select option[value*='monday']").prop('disabled',false);
                            $("select option[value*='tuesday']").prop('disabled',false);
                            $("select option[value*='wednesday']").prop('disabled',true);
                            $("select option[value*='thursday']").prop('disabled',true);
                            $("select option[value*='friday']").prop('disabled',true);
                            $("select option[value*='saturday']").prop('disabled',false);
                            $("select option[value*='sunday']").prop('disabled',false);
                        }
                        else if(propV == 'aloha'){
                            $("select option[value*='monday']").prop('disabled',false);
                            $("select option[value*='tuesday']").prop('disabled',false);
                            $("select option[value*='wednesday']").prop('disabled',false);
                            $("select option[value*='thursday']").prop('disabled',false);
                            $("select option[value*='friday']").prop('disabled',false);
                            $("select option[value*='saturday']").prop('disabled',false);
                            $("select option[value*='sunday']").prop('disabled',false);
                        }
                        else if(propV == 'minions'){
                            $("select option[value*='monday']").prop('disabled',false);
                            $("select option[value*='tuesday']").prop('disabled',false);
                            $("select option[value*='wednesday']").prop('disabled',false);
                            $("select option[value*='thursday']").prop('disabled',false);
                            $("select option[value*='friday']").prop('disabled',false);
                            $("select option[value*='saturday']").prop('disabled',false);
                            $("select option[value*='sunday']").prop('disabled',false);
                        }
                        else if(propV == 'none'){
                            $('#day').empty();
                            $('#time').hide();
                        }
                        else{
                        }

                    })

                    $('#day').change(function() {
                        $(".subtotal").text('0.00');
                        $(".total").text('0.00');
                        $(".qty").val('');
                        $("select option[value*='none']").prop('disabled',true);
                        $('#time').show(); 
                        dayV = $('#day').prop('value');
                        propV = $(this).prop('value');
                        timeV = $('#time').prop('value');
                        movieV = $('#movie').prop('value');
                        if(movieV == 'fnf7'){
                            if(propV == 'wednesday' || propV == 'thursday' || propV == 'friday' || propV == 'saturday' || propV == 'sunday'){
                                $('#time').empty().prepend("<option value='nine'>9:00pm</option>");    
                               }
                            }
                        
                        else if (movieV == 'aloha'){
                                if(propV == 'monday' || propV == 'tuesday'){
                                    $('#time').empty().append("<option value='one'>1:00pm</option>");
                                }
                                
                                else if (propV == 'wednesday' || propV == 'thursday' || propV == 'friday'){
                                    $('#time').empty().append("<option value='six'>6:00pm</option>");
                                }
                                    
                                else {
                                    if(propV == 'saturday' || propV == 'sunday'){
                                        $('#time').empty().append("<option value='twelve'>12:00pm</option>");
                                    }
                                }
                        }
                        
                        else if (movieV == 'boruto'){
                                if(propV == 'monday' || propV == 'tuesday'){
                                    $('#time').empty().append("<option value='six'>6:00pm</option>");
                                }
                                else {
                                    if(propV == 'saturday' || propV == 'sunday'){
                                        $('#time').empty().append("<option value='three'>3:00pm</option>");
                                    }
                                }
                        }
                        
                        else if (movieV == 'minions'){
                                if(propV == 'monday' || propV == 'tuesday'){
                                    $('#time').empty().append("<option value='nine'>9:00pm</option>");
                                }
                                else if(propV == 'wednesday' || propV == 'thursday' || propV == 'friday'){
                                    $('#time').empty().append("<option value='one'>1:00pm</option>");
                                }
                                else {
                                    if(propV == 'saturday' || propV == 'sunday'){
                                        $('#time').empty().append("<option value='six'>6:00pm</option>");
                                    }
                                }
                        }
                        
                        else if(movieV == 'none' || propV == 'none'){

                            $('#time').empty();
                        }
                      

                    })
