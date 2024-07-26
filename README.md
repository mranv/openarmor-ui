<div align="center">

# OpenArmor-GUI

<img src="assets/154563680.png" alt="OpenArmor-GUI Logo" width="200"/>

**Elevate your security operations with an intuitive web interface.**

[Website](https://www.theopenarmor.org) • [Docs](https://www.theopenarmor.org/docs/) • [Downloads](https://www.theopenarmor.org/downloads/) • [Community](https://discord.gg/BXzM75Xzq7)

[![Build Status](https://img.shields.io/travis/openarmor/openarmor-gui/master.svg?style=flat-square)](https://travis-ci.org/openarmor/openarmor-gui)
[![GitHub stars](https://img.shields.io/github/stars/openarmor/openarmor-gui.svg?style=flat-square)](https://github.com/openarmor/openarmor-gui/stargazers)

</div>

## 🛠️ About OpenArmor-GUI

OpenArmor-GUI is a sophisticated web interface designed for seamless integration with OpenArmor, supporting versions 2.9.3 and above. This evolution from Analogi and OpenArmor-WUI enhances your ability to manage and visualize security data.

**Key Features:**

- 📊 **Statistics & Visualizations:** Gain insights through detailed statistical analysis and visual representations.
- 🚨 **Alert Management:** Effortlessly remove alerts and reorganize databases (MySQL/MariaDB) with dedicated tools.
- 🔧 **Signature & Category Management:** Map and manage security signatures and categories effectively.
- 🔑 **Advanced Authentication:** Implement a three-tier authentication system to control access to various features.
- 🗄️ **Dual Database System:**
  - **Active Database:** Continuously updated by OpenArmor, allowing record deletion for resolved issues.
  - **Historical Database:** Automatically retains deleted records for statistical and historical review via alert table triggers.
- ⚡ **Enhanced SQL Management:** Optimized handling of SQL operations for improved performance.

## 🚀 Getting Started

To install OpenArmor-GUI, follow these steps:

```bash
git clone https://github.com/openarmor/openarmor-gui.git
cd openarmor-gui
./install.sh
```

For comprehensive installation and configuration instructions, visit our [documentation](https://www.theopenarmor.org/docs/).

## 🌐 Technologies

- **AmCharts:** For creating interactive charts and graphs ([AmCharts](https://www.amcharts.com)).
- **PHP Auth by Delight-IM:** Robust authentication management ([PHP-Auth](https://github.com/delight-im/PHP-Auth)).

## 🔒 Security

Authentication is optional but recommended. Detailed setup instructions are available in the `doc/AUTH` directory. By default, OpenArmor-GUI operates without authentication.

## 📋 System Requirements

- **Web Server:** Apache 2.4.25 or later with PHP support.
- **PHP Extensions:** php7-curl, php7-json, php7-mbstring, php7-mysql, php7-xml.
- **Database:** MySQL 5.7 or MariaDB (versions 10.1 and 10.3) on Debian Stretch.

## 🤝 Community & Support

- [Discord](https://discord.gg/BXzM75Xzq7)
- [Slack](https://openarmor.slack.com) (Invite: slack@theopenarmor.org)

<div align="center">
Made with ❤️ by the OpenArmor community
</div>
