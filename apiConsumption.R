if (require("httr")) {
  require("httr")
} else {
  install.packages("httr", dependencies = TRUE,
                   repos = "https://cloud.r-project.org")
}

## jsonlite ----
if (require("jsonlite")) {
  require("jsonlite")
} else {
  install.packages("jsonlite", dependencies = TRUE,
                   repos = "https://cloud.r-project.org")
}


get_orders_predictions <-
  function(arg_week,arg_center_id, arg_meal_id, arg_checkout_price, arg_base_price) {
    
    base_url <- "http://127.0.0.1:5022/orders"
    
    params <- data.frame(arg_week = arg_week, 
                   arg_center_id =arg_center_id,
                   arg_meal_id = arg_meal_id,
                   arg_checkout_price = arg_checkout_price, 
                   arg_base_price = arg_base_price)
    
    query_url <- modify_url(url = base_url, query = params)
    
    model_prediction <- GET(query_url)
    
    model_prediction_raw <- content(model_prediction, as = "text",
                                    encoding = "utf-8")
    
    jsonlite::fromJSON(model_prediction_raw)
  }


get_orders_predictions(113, 150, 1971,200, 250)
