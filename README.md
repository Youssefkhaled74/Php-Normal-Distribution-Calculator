# Normal Distribution Calculator

## Overview
This PHP application calculates the first moment (mean), second moment (variance), and expectation of a normal distribution. Users input the mean and standard deviation of the distribution through a form, and the application computes and displays the results.

## Normal Distribution

### Definition
A normal distribution, also known as a Gaussian distribution, is a type of continuous probability distribution for a real-valued random variable. It is characterized by its bell-shaped curve and is defined by two parameters: the mean (\(\mu\)) and the standard deviation (\(\sigma\)).

### Probability Density Function (PDF)
For a normal distribution \( N(\mu, \sigma^2) \), the probability density function is:
\[ f(x) = \frac{1}{\sigma \sqrt{2\pi}} e^{-\frac{1}{2} \left(\frac{x - \mu}{\sigma}\right)^2} \]

### Expectation and Variance
- **Expectation (Mean) \( E(X) \)**: The average value of the distribution, equal to the mean (\(\mu\)).
  \[ E(X) = \mu \]

- **Variance \( Var(X) \)**: A measure of the spread of the distribution, equal to the square of the standard deviation (\(\sigma^2\)).
  \[ Var(X) = \sigma^2 \]

### Moments
- **First Moment (Mean) \( E(X) \)**: Equal to \(\mu\).
- **Second Moment (Variance) \( Var(X) \)**: Equal to \(\sigma^2\).

### Example
For a normal distribution with mean \(\mu = 0\) and standard deviation \(\sigma = 1\):
- The expectation (mean) is:
  \[ E(X) = 0 \]
- The variance is:
  \[ Var(X) = 1 \]

## PHP Application

### Requirements
- PHP 5.3 or later

### Installation
1. Clone the repository to your local machine:
   ```sh
   git clone https://github.com/your-username/normal-distribution-calculator.git
