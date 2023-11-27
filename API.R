if (require("plumber")) {
  require("plumber")
} else {
  install.packages("plumber", dependencies = TRUE,
                   repos = "https://cloud.r-project.org")
}

# STEP 2. Process a Plumber API ----
# This allows us to process a plumber API
api <- plumber::plumb("PlumberAPI.R")

# STEP 3. Run the API on a specific port ----
# Specify a constant localhost port to use
api$run(host = "127.0.0.1", port = 5022)
