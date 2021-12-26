weeks_steps <- function(country, num_week) {
  groupA <- c("Morocco","Nepal","Indonesia","Nigeria","Argentina","Taiwan",
              "Brazil","Colombia","Costa Rica","Honduras","Mexico")
  groupB <- c("Bolivia","Ghana","India","Kenya","Mozambique","Philippines",
              "Uganda","Vietnam")
  groupC <- c("Austria","Moldova","South Africa","Ecuador","Poland","Russia",
              "Spain","Slovakia","Iceland","Tanzania","Italy")
  priceA <- 140000
  priceB <- 150000
  priceC <- 160000
  countryname <- c(groupA, groupB, groupC)
  numweek <- c(4:24)
  if(!country %in% countryname) stop("invalid name")
  if(!num_week %in% numweek) stop("invalid number")
  if(country %in% groupA)
    return(priceA+(num_week-4)*15000)
  else if(country %in% groupB)
    return(priceB+(num_week-4)*18000)
  else(country %in% groupC)
    return(priceC+(num_week-4)*21000)
}

weeks_steps(country = "Iceland", num_week = 8)
weeks_steps("Iceland",8)

days_steps <- function(country, num_days) {
  groupA <- c("Morocco","Nepal","Indonesia","Nigeria","Argentina","Taiwan",
              "Brazil","Colombia","Costa Rica","Honduras","Mexico")
  groupB <- c("Bolivia","Ghana","India","Kenya","Mozambique","Philippines",
              "Uganda","Vietnam")
  groupC <- c("Austria","Moldova","South Africa","Ecuador","Poland","Russia",
              "Spain","Slovakia","Iceland","Tanzania","Italy")
  priceA <- 140000
  priceB <- 150000
  priceC <- 160000
  priceperdayA <- 15000/7
  priceperdayB <- 18000/7
  priceperdayC <- 21000/7
  countryname <- c(groupA, groupB, groupC)
  numday <- c(28:168)
  if(!country %in% countryname) stop("invalid name")
  if(!num_days %in% numday) stop("invalid number")
  if(country %in% groupA)
    return(priceA+(num_days-28)*priceperdayA)
  if(country %in% groupB)
    return(priceB+(num_days-28)*priceperdayB)
  if(country %in% groupC)
  return(priceC+(num_days-28)*priceperdayC)
}
days_steps("Ghana",70)

months_steps <- function(country, num_month) {
  groupA <- c("Morocco","Nepal","Indonesia","Nigeria","Argentina","Taiwan",
              "Brazil","Colombia","Costa Rica","Honduras","Mexico")
  groupB <- c("Bolivia","Ghana","India","Kenya","Mozambique","Philippines",
              "Uganda","Vietnam")
  groupC <- c("Austria","Moldova","South Africa","Ecuador","Poland","Russia",
              "Spain","Slovakia","Iceland","Tanzania","Italy")
  priceA <- 140000
  priceB <- 150000
  priceC <- 160000
  pricepermonthA <- 15000*4
  pricepermonthB <- 18000*4
  pricepermonthC <- 21000*4
  countryname <- c(groupA, groupB, groupC)
  nummonth <- c(1:12)
  if(!country %in% countryname) stop("invalid name")
  if(!num_month %in% nummonth) stop("invalid number")
  if(country %in% groupA)
    return(priceA+(num_month-1)*pricepermonthA)
  if(country %in% groupB)
    return(priceB+(num_month-1)*pricepermonthB)
  if(country %in% groupC)
  return(priceC+(num_month-1)*pricepermonthC)
}