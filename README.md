# Project USEA-interview

## Description

This project fetches and stores voiceovers from the [e-Solat](https://www.e-solat.gov.my/) website, providing users with
access to prayer times and announcements up to 7 days in advance.

## Installation and Configuration

To use this project, follow these steps:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/FlyingHii/USEA-interview.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd USEA-interview
    ```

3. **Install dependencies:**

    ```bash
    composer install
    ```

4. **Configuration:**

    - [List any configuration steps required]

## Usage

To run the code, follow these steps:

1. **Migrate DB schemas & sample data:**

    ```bash
    php vendor/bin/doctrine-migrations migrate --configuration ./config/migrations.php --db-configuration ./config/migrations-db.php 
    ```

2. **Run the application:**

    ```
    php public/index.php
    ```

## Credits

- **e-Solat Website**: accessibility to necessary data.

## Contact

- **Gmail**: vovanthanhhai.96@gmail.com
- **LinkedIn**: https://www.linkedin.com/in/hai-vo-02211112b/

## Future of the Project and Future Tasks

### Future Development

- Implement a user-friendly interface for easier navigation.
- Enhance error handling and reporting for a smoother user experience.

### Future Tasks

- Improve data fetching efficiency.
- Add support for additional languages.
- Implement automated testing for reliability.