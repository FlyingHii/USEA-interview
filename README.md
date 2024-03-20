# Project USEA-interview

## Description

This project fetches and stores voiceovers from the [e-Solat](https://www.e-solat.gov.my/) website, providing users with
access to prayer times and announcements up to 7 days in advance.

## Installation and Configuration

To use this project, follow these steps:

1. **Clone the repository:**

    ```bashprayer_time_seq
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

- The DB should be improved. The `songs` table columns is duplicated with the other tables. In conclusion, our DB should be refactored like this:
- New tables:
`prayers`: id, name, zone (unique)
`boxes`: id, name, sub_id, pray_id (FK to prayers.id)
`songs`: id, name, box_id
`voiceover`: id, prayer_time_date, prayer_time, song_id (fk to songs.id, unique)
`subscribers`: (the same)
