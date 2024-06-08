# Multipurpose Calculator

This project is a versatile calculator application that can handle basic arithmetic operations as well as more complex mathematical calculations. It is implemented using PHP for the backend calculations and HTML/CSS for the frontend user interface.

## Features

- **Basic Arithmetic Operations**: Addition, Subtraction, Multiplication, Division.
- **Complex Calculations**: Exponentiation, Percentages, Square Root, Logarithm.
- **User-Friendly Interface**: Simple and intuitive form for inputting numerical values and selecting desired operations.

## Getting Started

These instructions will help you set up and run the calculator application on your local machine.

### Prerequisites

- A local server environment such as XAMPP, WAMP, or MAMP.
- PHP installed on your server.

### Installation

1. **Clone the repository** (if applicable):
    ```sh
    git clone https://github.com/your-username/multipurpose-calculator.git
    cd multipurpose-calculator
    ```

2. **Manual Setup**:
    - Download the project files.
    - Place the `index.php` file in the root directory of your server or a subdirectory.

### Running the Application

1. **Start your local server** (e.g., XAMPP, WAMP, MAMP).

2. **Navigate to the application**:
    - Open your web browser.
    - For a local server, go to `http://localhost/index.php` or `http://localhost/your_subdirectory/index.php`.

3. **Use the Calculator**:
    - Enter the numbers in the input fields.
    - Select the desired operation from the dropdown menu.
    - Click the "Calculate" button.
    - The result will be displayed below the form.

### File Structure

- `index.php`: The main PHP file containing both the HTML form and the PHP script for handling calculations.

## Usage

1. **Basic Operations**:
    - Enter values in both input fields.
    - Select an operation (Addition, Subtraction, Multiplication, Division).
    - Click "Calculate" to see the result.

2. **Exponentiation and Percentage**:
    - Enter values in both input fields.
    - Select either Exponentiation or Percentage from the dropdown.
    - Click "Calculate" to see the result.

3. **Square Root and Logarithm**:
    - Enter a value in the first input field.
    - Select Square Root or Logarithm from the dropdown.
    - The second input field will be hidden.
    - Click "Calculate" to see the result.

## Implementation Details

- **HTML Form**: 
    - Contains two input fields for numbers and a dropdown for selecting the operation.
    - A JavaScript function dynamically hides the second input field for operations that require only one input.

- **PHP Script**:
    - Processes form submissions, performs the selected calculations, and displays the result.
    - Handles errors like division by zero and invalid inputs for square roots and logarithms.




