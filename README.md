# Sacsi SalesRuleShipping Module for Magento 2

## Overview

The SalesRuleShipping module extends Magento's Cart Price Rules functionality by adding a new "Free Shipping Methods" field, allowing merchants to specify which shipping methods should be free when a cart rule is applied.

## Features

- Extends the Magento_SalesRule admin UI
- Adds a new multiselect field "Free Shipping Methods" under the Actions tab
- Populates the field with all available shipping methods in the system
- Saves selected shipping methods to the database

## Benefits

This module enhances the native Magento cart price rules by providing more granular control over free shipping promotions. Instead of making all shipping methods free when a cart rule is applied, merchants can now specify exactly which shipping methods should be offered for free.

## Requirements

- Magento 2.3.x or 2.4.x Open Source Edition
- TBD

## Installation

### Manual Installation

1. Download the module and place it in `<magento_root>/app/code/Sacsi/SalesRuleShipping`
2. Enable the module:
```bash
bin/magento module:enable Sacsi_SalesRuleShipping
```
3. Run the setup upgrade command:
```bash
bin/magento setup:upgrade
```
4. Compile the code (production mode):
```bash
bin/magento setup:di:compile
```
5. Deploy static content (production mode):
```bash
bin/magento setup:static-content:deploy
```
6. Clear the cache:
```bash
bin/magento cache:clean
```

### Composer Installation (Future)

```bash
composer require sacsi/module-salesrule-shipping
bin/magento module:enable Sacsi_SalesRuleShipping
bin/magento setup:upgrade
```

## Usage

1. Navigate to **Marketing > Promotions > Cart Price Rules**
2. Create a new rule or edit an existing one
3. Go to the **Actions** tab
4. Find the **Free Shipping Methods** field
5. Select the shipping methods that should be free when this rule is applied
6. Save the rule

## Configuration

No additional configuration is required. The module works out of the box after installation.

## Support

If you encounter any issues or have questions, please [open an issue](https://github.com/sacsi/module-salesrule-shipping/issues) on our GitHub repository.

## Roadmap

- Add comprehensive test coverage for Magento 2.4.x compatibility
- Implement Composer installation support
- Enhance UI to better display selected shipping methods
- Extend functionality to create specialized cart rules based on shipping methods
- Add compatibility with Magento Commerce edition

## License

[Open Software License (OSL 3.0)](https://opensource.org/licenses/OSL-3.0)

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.
