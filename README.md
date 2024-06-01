# Morres Magento 2 Greeting Module

## Description
This module extends Magento 2 with a personalized greeting feature for users.

## Installation
### Prerequisites
- Magento 2.x installed

### Steps
1. Copy the module to `app/code/Morres/Greeting`
2. Run the following commands:

```bash
sudo bin/magento module:enable Morres_Greeting
sudo bin/magento setup:upgrade
sudo bin/magento setup:di:compile
sudo bin/magento cache:flush
```

### Configuration

Go to ```Stores > Configuration > General > Greeting Settings``` to configure the module.

### Features

Customizable greeting message.

### Result

Go to ```http://your.domain/casestudy``` to see the result
