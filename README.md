## Overview

Wordpress plugin that allows a symlinked folder to be used as the plugins folder.

Install in a subdirectory ending with 'plugin-symlink', so the path can be detected correctly.

Plugins are loaded in alphabetical order, so make sure the folder name comes first in your list of plugins.

## Installation

```
cd plugins
git clone git://github.com/liggitt/wordpress-plugin-symlink.git aaa-plugin-symlink
```

Open the Wordpress admin interface and activate the plugin.

## Upgrades

```
cd plugins/aaa-plugin-symlink
git pull
```
