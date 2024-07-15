# Example Plugin for Chatter Forums

## Overview
This plugin serves as a template for developers looking to create their own plugins for the Chatter Forums module.

## Features
- Adds a example widget to the forum and configuration settings.

## Installation

### Requirements
- HumHub 1.16.0+
- Chatter Forums module

### Steps
1. **Download:**
   ```bash
   git clone https://github.com/GreenMeteor/example-plugin.git
   ```
2. **Place:**
   - Extract and place the `example` folder in `chatter/plugins/`.
   - Or Admin Panel > Modules > Chatter Forums > Forum Settings > Plugin Uploads

## Configuration
1. **Settings:**
   - Admin Panel > Modules > Chatter Forums > Plugin Manager > `Example Plugin` settings.

## Usage
This example plugin displays an example widget on the forums of any Chatter Forums instance that is enabled.

## Development

### File Structure
```mermaid
graph TD
    A[example] --> B[assets]
    A --> C[controllers]
    A --> D[models]
    A --> E[views]
    A --> F[Plugin.php]
    A --> G[config.php]
    A --> H[plugin.json]
    A --> I[README.md]

    B -->|"CSS, JS, images"| B1[Static files]
    C -->|"Action handlers"| C1[Controller classes]
    D -->|"Data structures"| D1[Model classes]
    E -->|"Templates"| E1[View files]
    F -->|"Main plugin class"| F1[Plugin logic]
    G -->|"Configuration"| G1[Plugin settings]
    H -->|"Metadata"| H1[Plugin information]
    I -->|"Documentation"| I1[Usage instructions]
```

## Contributing
1. Fork the repo.
2. Create a branch.
3. Commit and push changes.
4. Create a pull request.

## Support
Visit [GitHub Issues](https://github.com/GreenMeteor/example/issues).

## License
Licensed under the AGPL-3.0 License. See the [LICENSE](LICENSE) file.

---

Developed by [Green Meteor](https://greenmeteor.net/).
