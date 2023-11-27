if (require("plumber")) {
  require("plumber")
} else {
  install.packages("plumber", dependencies = TRUE,
                   repos = "https://cloud.r-project.org")
}

## caret ----
if (require("caret")) {
  require("caret")
} else {
  install.packages("caret", dependencies = TRUE,
                   repos = "https://cloud.r-project.org")
}


loaded_demand_model_caret_lr <- readRDS("./saved_food_demand_caret_model_lda.rds")

#*@apiTitle  Order Prediction Model API

#* @apiDescription Used to predict predict possible number of orders from a product.

#* @param arg_week The week
#* @param arg_center_id Where it is made
#* @param arg_meal_id The ID number of the meal
#* @param arg_checkout_price The price of meal at final sale
#* @param arg_base_price The base price for 1 item 

#* @get /orders

predict_num_orders <-
  function(arg_week,arg_center_id, arg_meal_id, arg_checkout_price, arg_base_price) {
    # Create a data frame using the arguments
    to_be_predicted <-
      data.frame(week = as.numeric(arg_week),  
                 center_id = as.numeric(arg_center_id), 
                 meal_id = as.numeric(arg_meal_id), 
                 checkout_price = as.numeric(arg_checkout_price), 
                 base_price = as.numeric(arg_base_price))
    
    # Make a prediction based on the data frame
    predict(loaded_demand_model_caret_lr, to_be_predicted)
  }

