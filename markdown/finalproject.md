Business Intelligence Project
================
Fareed Matovu Kimuli
11/3/2023

- [Student Details](#student-details)
- [Setup Chunk](#setup-chunk)
- [Understanding the Dataset (Exploratory Data Analysis
  (EDA))](#understanding-the-dataset-exploratory-data-analysis-eda)
  - [Loading the Dataset](#loading-the-dataset)
    - [Source:](#source)
    - [Reference:](#reference)
  - [ggplot2 - For data visualizations using the Grammar for Graphics
    package
    —-](#ggplot2---for-data-visualizations-using-the-grammar-for-graphics-package--)
  - [ggrepel - Additional options for the Grammar for Graphics package
    —-](#ggrepel---additional-options-for-the-grammar-for-graphics-package--)
  - [ggraph - Additional options for the Grammar for Graphics package
    —-](#ggraph---additional-options-for-the-grammar-for-graphics-package--)
  - [tidytext - For text mining —-](#tidytext---for-text-mining--)
  - [tidyr - To tidy messy data —-](#tidyr---to-tidy-messy-data--)
  - [widyr - To widen, process, and re-tidy a dataset
    —-](#widyr---to-widen-process-and-re-tidy-a-dataset--)
  - [gridExtra - to arrange multiple grid-based plots on a page
    —-](#gridextra---to-arrange-multiple-grid-based-plots-on-a-page--)
  - [knitr - for dynamic report generation
    —-](#knitr---for-dynamic-report-generation--)
  - [kableExtra - for nicely formatted output tables
    —-](#kableextra---for-nicely-formatted-output-tables--)
  - [formattable - To create a formattable object
    —-](#formattable---to-create-a-formattable-object--)
- [A formattable object is an object to which a formatting function and
  related](#a-formattable-object-is-an-object-to-which-a-formatting-function-and-related)
- [attributes are attached.](#attributes-are-attached)
  - [circlize - To create a cord diagram or visualization
    —-](#circlize---to-create-a-cord-diagram-or-visualization--)
- [by Gu et al. (2014)](#by-gu-et-al-2014)
  - [memery - For creating data analysis related memes
    —-](#memery---for-creating-data-analysis-related-memes--)
- [The memery package generates internet memes that optionally include
  a](#the-memery-package-generates-internet-memes-that-optionally-include-a)
- [superimposed inset plot and other atypical features, combining the
  visual](#superimposed-inset-plot-and-other-atypical-features-combining-the-visual)
- [impact of an attention-grabbing meme with graphic results of data
  analysis.](#impact-of-an-attention-grabbing-meme-with-graphic-results-of-data-analysis)
  - [magick - For image processing in R
    —-](#magick---for-image-processing-in-r--)
  - [yarrr - To create a pirate plot
    —-](#yarrr---to-create-a-pirate-plot--)
  - [radarchart - To create interactive radar charts using ChartJS
    —-](#radarchart---to-create-interactive-radar-charts-using-chartjs--)
  - [igraph - To create ngram network diagrams
    —-](#igraph---to-create-ngram-network-diagrams--)
  - [wordcloud2 - For creating wordcloud by using ’wordcloud2.JS
    —-](#wordcloud2---for-creating-wordcloud-by-using-wordcloud2js--)
  - [plumber —-](#plumber--)
- [Create a histogram](#create-a-histogram)
- [Create a ggplot scatter plot](#create-a-ggplot-scatter-plot)
- [Sample data with two variables](#sample-data-with-two-variables)
- [Create a boxplot for each
  variable](#create-a-boxplot-for-each-variable)
- [AFTER](#after)
  - [3. Test the trained linear regression model using the testing
    dataset
    —-](#3-test-the-trained-linear-regression-model-using-the-testing-dataset--)
  - [4. View the RMSE and the predicted values for the 12 observations
    —-](#4-view-the-rmse-and-the-predicted-values-for-the-12-observations--)
    - [2.b. Test the trained linear model using the testing dataset
      —-](#2b-test-the-trained-linear-model-using-the-testing-dataset--)
    - [2.c. View the RMSE and the predicted values
      ====](#2c-view-the-rmse-and-the-predicted-values-)
  - [LINEAR regression without
    Carret](#linear-regression-without-carret)
    - [Train the model —-](#train-the-model--)
    - [Make predictions —-](#make-predictions--)
- [SST is the total sum of squares (the sum of squared
  differences](#sst-is-the-total-sum-of-squares-the-sum-of-squared-differences)
- [between observed values and their
  mean)](#between-observed-values-and-their-mean)
  - [Train the model —-](#train-the-model---1)
  - [Display the model’s details —-](#display-the-models-details--)
  - [Make predictions —-](#make-predictions---1)
  - [Display the model’s evaluation metrics
    —-](#display-the-models-evaluation-metrics--)
- [SSR is the sum of squared residuals (the sum of squared
  differences](#ssr-is-the-sum-of-squared-residuals-the-sum-of-squared-differences)
- [between observed and predicted
  values)](#between-observed-and-predicted-values)
- [SST is the total sum of squares (the sum of squared
  differences](#sst-is-the-total-sum-of-squares-the-sum-of-squared-differences-1)
- [between observed values and their
  mean)](#between-observed-values-and-their-mean-1)
- [We then use SSR and SST to compute the value of R
  squared.](#we-then-use-ssr-and-sst-to-compute-the-value-of-r-squared)
- [The closer the R squared value is to 1, the better the
  model.](#the-closer-the-r-squared-value-is-to-1-the-better-the-model)
- [MAE is expressed in the same units as the target variable, making it
  easy
  to](#mae-is-expressed-in-the-same-units-as-the-target-variable-making-it-easy-to)
- [interpret. For example, if you are predicting the amount paid in
  rent,](#interpret-for-example-if-you-are-predicting-the-amount-paid-in-rent)
- [and the MAE is KES. 10,000, it means, on average, your model’s
  predictions](#and-the-mae-is-kes-10000-it-means-on-average-your-models-predictions)
- [are off by about KES. 10,000.](#are-off-by-about-kes-10000)
- [STEP 5. Save and Load your Model
  —-](#step-5-save-and-load-your-model--)
- [Saving a model into a file allows you to load it later and use it to
  make](#saving-a-model-into-a-file-allows-you-to-load-it-later-and-use-it-to-make)
- [predictions. Saved models can be loaded by calling the `readRDS()`
  function](#predictions-saved-models-can-be-loaded-by-calling-the-readrds-function)
- [STEP 6. Creating Functions in R
  —-](#step-6-creating-functions-in-r--)
- [Plumber requires functions, an example of the syntax for creating a
  function](#plumber-requires-functions-an-example-of-the-syntax-for-creating-a-function)
- [in R is:](#in-r-is)
- [We can now call the function predict_diabetes() instead of calling
  the](#we-can-now-call-the-function-predict_diabetes-instead-of-calling-the)
- [predict() function directly](#predict-function-directly)

# Student Details

|                                              |                      |
|----------------------------------------------|----------------------|
| **Student ID Number**                        | 135590               |
| **Student Name**                             | Fareed Matovu Kimuli |
| **BBIT 4.2 Group**                           | B                    |
| **BI Project Group Name/ID (if applicable)** | Rush hours           |

# Setup Chunk

**Note:** the following KnitR options have been set as the global
defaults: <BR>
`knitr::opts_chunk$set(echo = TRUE, warning = FALSE, eval = TRUE, collapse = FALSE, tidy = TRUE)`.

More KnitR options are documented here
<https://bookdown.org/yihui/rmarkdown-cookbook/chunk-options.html> and
here <https://yihui.org/knitr/options/>.

# Understanding the Dataset (Exploratory Data Analysis (EDA))

## Loading the Dataset

### Source:

The dataset that was used can be downloaded here: *\<provide a link\>*

### Reference:

*\<Cite the dataset here using APA\>  
Refer to the APA 7th edition manual for rules on how to cite datasets:
<https://apastyle.apa.org/style-grammar-guidelines/references/examples/data-set-references>*

\#Import packages \## naniar —- \# Documentation: \#
<https://cran.r-project.org/package=naniar> or \#
<https://www.rdocumentation.org/packages/naniar/versions/1.0.0> if
(!is.element(“naniar”, installed.packages()\[, 1\])) {
install.packages(“naniar”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“naniar”)

if (require(“caret”)) { require(“caret”) } else {
install.packages(“caret”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) }

if (!is.element(“dplyr”, installed.packages()\[, 1\])) {
install.packages(“dplyr”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“dplyr”)

## ggplot2 - For data visualizations using the Grammar for Graphics package —-

if (!is.element(“ggplot2”, installed.packages()\[, 1\])) {
install.packages(“ggplot2”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“ggplot2”)

## ggrepel - Additional options for the Grammar for Graphics package —-

if (!is.element(“ggrepel”, installed.packages()\[, 1\])) {
install.packages(“ggrepel”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“ggrepel”)

## ggraph - Additional options for the Grammar for Graphics package —-

if (!is.element(“ggraph”, installed.packages()\[, 1\])) {
install.packages(“ggraph”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“ggraph”)

## tidytext - For text mining —-

if (!is.element(“tidytext”, installed.packages()\[, 1\])) {
install.packages(“tidytext”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“tidytext”)

## tidyr - To tidy messy data —-

if (!is.element(“tidyr”, installed.packages()\[, 1\])) {
install.packages(“tidyr”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“tidyr”)

## widyr - To widen, process, and re-tidy a dataset —-

if (!is.element(“widyr”, installed.packages()\[, 1\])) {
install.packages(“widyr”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“widyr”)

## gridExtra - to arrange multiple grid-based plots on a page —-

if (!is.element(“gridExtra”, installed.packages()\[, 1\])) {
install.packages(“gridExtra”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“gridExtra”)

## knitr - for dynamic report generation —-

if (!is.element(“knitr”, installed.packages()\[, 1\])) {
install.packages(“knitr”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“knitr”)

## kableExtra - for nicely formatted output tables —-

if (!is.element(“kableExtra”, installed.packages()\[, 1\])) {
install.packages(“kableExtra”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“kableExtra”)

## formattable - To create a formattable object —-

# A formattable object is an object to which a formatting function and related

# attributes are attached.

if (!is.element(“formattable”, installed.packages()\[, 1\])) {
install.packages(“formattable”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“formattable”)

## circlize - To create a cord diagram or visualization —-

# by Gu et al. (2014)

if (!is.element(“circlize”, installed.packages()\[, 1\])) {
install.packages(“circlize”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“circlize”)

## memery - For creating data analysis related memes —-

# The memery package generates internet memes that optionally include a

# superimposed inset plot and other atypical features, combining the visual

# impact of an attention-grabbing meme with graphic results of data analysis.

if (!is.element(“memery”, installed.packages()\[, 1\])) {
install.packages(“memery”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“memery”)

## magick - For image processing in R —-

if (!is.element(“magick”, installed.packages()\[, 1\])) {
install.packages(“magick”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“magick”)

## yarrr - To create a pirate plot —-

if (!is.element(“yarrr”, installed.packages()\[, 1\])) {
install.packages(“yarrr”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“yarrr”)

## radarchart - To create interactive radar charts using ChartJS —-

if (!is.element(“radarchart”, installed.packages()\[, 1\])) {
install.packages(“radarchart”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“radarchart”)

## igraph - To create ngram network diagrams —-

if (!is.element(“igraph”, installed.packages()\[, 1\])) {
install.packages(“igraph”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“igraph”)

## wordcloud2 - For creating wordcloud by using ’wordcloud2.JS —-

if (!is.element(“wordcloud2”, installed.packages()\[, 1\])) {
install.packages(“wordcloud2”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } require(“wordcloud2”)

if (!is.element(“mlbench”, installed.packages()\[, 1\])) {
install.packages(“mlbench”, dependencies = TRUE) } require(“mlbench”)

if (!is.element(“e1071”, installed.packages()\[, 1\])) {
install.packages(“e1071”, dependencies = TRUE) } require(“e1071”)

if (require(“randomForest”)) { require(“randomForest”) } else {
install.packages(“randomForest”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) } if (require(“RRF”)) { require(“RRF”)
} else { install.packages(“RRF”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) }

## plumber —-

if (require(“plumber”)) { require(“plumber”) } else {
install.packages(“plumber”, dependencies = TRUE, repos =
“<https://cloud.r-project.org>”) }

\#Import data set library(readr) Food_demand \<- read_csv(“data/Food
demand.csv”, col_types = cols( homepage_featured = col_factor(levels =
c(“0”,“1”)), emailer_for_promotion = col_factor(levels = c(“0”,“1”)),
num_orders = col_double() )) View(Food_demand)

\#Measure of frequency food_demand_homepage_featured_freq \<-
Food_demand\$homepage_featured cbind(frequency =
table(food_demand_freq), percentage =
prop.table(table(food_demand_freq)) \* 100)

food_demand_email_promotion_freq \<- Food_demand\$emailer_for_promotion
cbind(frequency = table(food_demand_freq), percentage =
prop.table(table(food_demand_freq)) \* 100)

\#Measures of central tendency \#Mode food_demand_number_orders_mode \<-
names(table(Food_demand$num_orders))[  which(table(Food_demand$num_orders)
== max(table(Food_demand\$num_orders))) \]
print(food_demand_number_orders_mode)

\#Measure of distribution \#standard deviation sapply(Food_demand\[,
c(5,6)\], sd) \#variance sapply(Food_demand\[, c(5,6)\], var) \#Kurtosis
sapply(Food_demand\[, c(5,6)\], kurtosis, type =2) \#skewness
sapply(Food_demand\[, c(5,6)\], skewness, type = 2)

\#Neasure of relationship

\#covariance food_demand_cov \<- cov(Food_demand\[, c(5,6)\])
View(food_demand_cor)

\#correlation food_demand_cor \<- cor(Food_demand\[, c(5,6)\])
View(food_demand_cor)

\#Check for missing data any_na(Food_demand) \#false

\#check how many n_miss(Food_demand) \#0 missing data

# Create a histogram

hist(Food_demand$num_orders, main = "Histogram of Data", xlab = "Values", col = "skyblue", border = "black") boxplot(Food_demand$num_orders,
main = “Boxplot of Data”, xlab = “Values”, col = “lightgreen”, border =
“black”)

data \<- data.frame(x =
Food_demand$base_price, y = Food_demand$checkout_price)

# Create a ggplot scatter plot

ggplot(data, aes(x = x, y = y)) + geom_point(color = “blue”) +
labs(title = “Scatter Plot of Base price against checkout price”, x =
“Base price”, y = “Checkout price”)

# Sample data with two variables

data \<- data.frame(x =
Food_demand$checkout_price, y = Food_demand$num_orders)

# Create a boxplot for each variable

boxplot(data, main = “Boxplot of checkout price and number of orders”,
col = c(“lightblue”, “lightgreen”), border = “black”)

\#Anova

\#Data transformation

\#standardize

\#Before sapply(Food_demand\[, c(5,6)\], sd)

model_of_the_transform \<- preProcess(Food_demand, method = c(“scale”,
“center”)) print(model_of_the_transform)
food_demand_standardize_transform \<- predict(model_of_the_transform, \#
nolint Food_demand)

# AFTER

summary(food_demand_standardize_transform)
sapply(food_demand_standardize_transform\[, c(5,6)\], sd)

\#Data splitting \# Define an 80:20 train:test data split of the
dataset. train_index \<- createDataPartition(Food_demand\$num_orders, p
= 0.8, list = FALSE) food_demand_train \<- Food_demand\[train_index, \]
food_demand_test \<- Food_demand\[-train_index, \]

\#Bootstrapping train_control \<- trainControl(method = “boot”, number =
500)

food_demand_dataset_model_lm \<- \# nolint caret::train(num_orders ~ .,
data = food_demand_train, trControl = train_control, na.action =
na.omit, method = “lm”, metric = “RMSE”)

## 3. Test the trained linear regression model using the testing dataset —-

predictions_lm \<- predict(food_demand_dataset_model_lm,
food_demand_test\[, 1:9\])

## 4. View the RMSE and the predicted values for the 12 observations —-

print(food_demand_dataset_model_lm) print(predictions_lm)

\#Cross Validation train_control \<- trainControl(method = “cv”, number
= 10)

food_dateset_model_lm \<- caret::train(num_orders ~ ., data =
food_demand_train, trControl = train_control, na.action = na.omit,
method = “lm”, metric = “RMSE”)

### 2.b. Test the trained linear model using the testing dataset —-

predictions_lm \<- predict(food_dateset_model_lm, food_demand_test\[,
1:9\])

### 2.c. View the RMSE and the predicted values ====

print(food_dateset_model_lm) print(predictions_lm)

## LINEAR regression without Carret

#### Train the model —-

food_demand_model_lm \<- lm(num_orders ~ ., food_demand_train)

#### Make predictions —-

predictions \<- predict(food_demand_model_lm, food_demand_test\[, 1:9\])

rmse \<- sqrt(mean((food_demand_test\$num_orders - predictions)^2))
print(paste(“RMSE =”, sprintf(rmse, fmt = “%#.4f”)))

ssr \<- sum((food_demand_test\$num_orders - predictions)^2)
print(paste(“SSR =”, sprintf(ssr, fmt = “%#.4f”)))

##### SST —-

# SST is the total sum of squares (the sum of squared differences

# between observed values and their mean)

sst \<-
sum((food_demand_test$num_orders - mean(food_demand_test$num_orders))^2)
print(paste(“SST =”, sprintf(sst, fmt = “%#.4f”)))

r_squared \<- 1 - (ssr / sst) print(paste(“R Squared =”,
sprintf(r_squared, fmt = “%#.4f”)))

absolute_errors \<- abs(predictions - food_demand_test\$num_orders) mae
\<- mean(absolute_errors) print(paste(“MAE =”, sprintf(mae, fmt =
“%#.4f”)))

\#Linear Regression with carret train_index \<-
createDataPartition(Food_demand\$num_orders, p = 0.8, list = FALSE)
Food_demand_train \<- Food_demand\[train_index, c(2,3,4,5,6,9) \]
Food_demand_test \<- Food_demand\[-train_index, c(2,3,4,5,6,9)\]

#### Train the model —-

set.seed(7) train_control \<- trainControl(method = “cv”, number = 5)
food_demand_caret_model_lm \<- train(num_orders ~ ., data =
Food_demand_train, method = “lm”, metric = “RMSE”, preProcess =
c(“center”, “scale”), trControl = train_control)

#### Display the model’s details —-

print(food_demand_caret_model_lm)

#### Make predictions —-

predictions \<- predict(food_demand_caret_model_lm,
Food_demand_test\[\])

#### Display the model’s evaluation metrics —-

##### RMSE —-

rmse \<- sqrt(mean((Food_demand_test\$num_orders - predictions)^2))
print(paste(“RMSE =”, sprintf(rmse, fmt = “%#.4f”)))

##### SSR —-

# SSR is the sum of squared residuals (the sum of squared differences

# between observed and predicted values)

ssr \<- sum((Food_demand_test\$num_orders - predictions)^2)
print(paste(“SSR =”, sprintf(ssr, fmt = “%#.4f”)))

##### SST —-

# SST is the total sum of squares (the sum of squared differences

# between observed values and their mean)

sst \<-
sum((Food_demand_test$num_orders - mean(Food_demand_test$num_orders))^2)
print(paste(“SST =”, sprintf(sst, fmt = “%#.4f”)))

##### R Squared —-

# We then use SSR and SST to compute the value of R squared.

# The closer the R squared value is to 1, the better the model.

r_squared \<- 1 - (ssr / sst) print(paste(“R Squared =”,
sprintf(r_squared, fmt = “%#.4f”)))

##### MAE —-

# MAE is expressed in the same units as the target variable, making it easy to

# interpret. For example, if you are predicting the amount paid in rent,

# and the MAE is KES. 10,000, it means, on average, your model’s predictions

# are off by about KES. 10,000.

absolute_errors \<- abs(predictions - Food_demand_test\$num_orders) mae
\<- mean(absolute_errors) print(paste(“MAE =”, sprintf(mae, fmt =
“%#.4f”)))

print(food_demand_caret_model_lm\$finalModel)

set.seed(9) predictions \<- predict(food_demand_caret_model_lm, newdata
= Food_demand_test)

# STEP 5. Save and Load your Model —-

# Saving a model into a file allows you to load it later and use it to make

# predictions. Saved models can be loaded by calling the `readRDS()` function

saveRDS(food_demand_caret_model_lm,
“./saved_food_demand_caret_model_lda.rds”) \# The saved model can then
be loaded later as follows: loaded_demand_model_caret_lr \<-
readRDS(“./saved_food_demand_caret_model_lda.rds”)
print(loaded_demand_model_caret_lr)

predictions_with_loaded_model \<- predict(loaded_demand_model_caret_lr,
newdata = Food_demand_test)

# STEP 6. Creating Functions in R —-

# Plumber requires functions, an example of the syntax for creating a function

# in R is:

\#\* @apiTitle Order Prediction Model API

\#\* @apiDescription Used to predict predict possible number of orders
from a product.

\#\* @param arg_week The \#\* @param arg_meal_id The ID number of the
meal \#\* @param arg_checkout The price of meal at final sale \#\*
@param arg_base_price The base price for 1 item

\#\* @get /orders

predict_num_orders \<- function(arg_week,arg_center_id, arg_meal_id,
arg_checkout_price, arg_base_price) { \# Create a data frame using the
arguments to_be_predicted \<- data.frame(week = arg_week, center_id =
arg_center_id, meal_id = arg_meal_id, checkout_price =
arg_checkout_price, base_price = arg_base_price)

    # Make a prediction based on the data frame
    predict(loaded_demand_model_caret_lr, to_be_predicted)

}

# We can now call the function predict_diabetes() instead of calling the

# predict() function directly

predict_num_orders(113, 150, 1971,200, 250)
