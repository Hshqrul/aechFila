<p align="center">
    A starting point to create your next Filament 3 💡 app. With pre-installed plugins, pre-configured, and custom page. So you don't start all over again.
</p>

#### Features

- 🛡 [Filament Shield](#plugins-used) for managing role access
- 👨🏻‍🦱 customizable profile page from [Filament Breezy](#plugins-used)
- 🌌 Managable media with [Filament Spatie Media](#plugins-used)
- 🖼 Theme settings for changing panel color
- 💌 Setting mail on the fly in Mail settings
- 🅻 Lang Generator
- Etc..

#### Latest update

##### Version: v1.15.xx

- Add *opcodesio/log-viewer*
- Add new plugins
- Bugs fix & Improvement
- Etc

*Sadly, Filament Multi-Tenancy will not be included in this starter kit. This repository will focus on improvements for non-multi-tenants, since many rooms should be improved.*

<a href="https://buymeacoffee.com/hashaqirul" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

#### Getting Started

Create project with this composer command:

```bash
composer create-project riodwanto/superduper-filament-starter-kit
```

Setup your env:

```bash
cd superduper-filament-starter-kit
cp .env.example .env
```

Run migration & seeder:

```bash
php artisan migrate
php artisan db:seed
```

<p align="center">or</p>

```bash
php artisan migrate:fresh --seed
```

Generate key:

```bash
php artisan key:generate
```

Run :

```bash
npm install
npm run dev
OR
npm run build
```

```bash
php artisan serve
```

Now you can access with `/admin` path, using:

```bash
email: superadmin@starter-kit.com
password: superadmin
```

#### Performance

*It's recommend to run below command as suggested in [Filament Documentation](https://filamentphp.com/docs/3.x/panels/installation#improving-filament-panel-performance) for improving panel perfomance.*

```bash
php artisan icons:cache
```

Please see this [Improving Filament panel performance](https://filamentphp.com/docs/3.x/panels/installation#improving-filament-panel-performance) documentation for further improvement

#### Language Generator

This project include lang generator.

```bash
php artisan superduper:lang-translate [from] [to]
```

Generator will look up files inside folder `[from]`. Get all variables inside the file; create a file and translate using `translate.googleapis.com`.

This is what the translation process looks like.

```bash
❯ php artisan superduper:lang-translate en fr es

 🔔 Translate to 'fr'
 3/3 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100% -- ✅

 🔔 Translate to 'es'
 1/3 [▓▓▓▓▓▓▓▓▓░░░░░░░░░░░░░░░░░░░]  33% -- 🔄 Processing: page.php
```

##### Usage example

- Single output

```bash
php artisan superduper:lang-translate en fr
```

- Multiple output

```bash
php artisan superduper:lang-translate en es ar fr pt-PT pt-BR zh-CN zh-TW
```

###### If you are using json translation

```bash
php artisan superduper:lang-translate en fr --json
```

###### If your laravel filament app slow

```bash
php artisan icons:cache
```

#### Plugins

These are [Filament Plugins](https://filamentphp.com/plugins) use for this project.

| **Plugin**                                                                                          | **Author**                                          |
| :-------------------------------------------------------------------------------------------------- | :-------------------------------------------------- |
| [Filament Spatie Media Library](https://github.com/filamentphp/spatie-laravel-media-library-plugin) | [Filament Official](https://github.com/filamentphp)   |
| [Filament Spatie Settings](https://github.com/filamentphp/spatie-laravel-settings-plugin)           | [Filament Official](https://github.com/filamentphp)   |
| [Filament Spatie Tags](https://github.com/filamentphp/spatie-laravel-tags-plugin)                   | [Filament Official](https://github.com/filamentphp)   |
| [Shield](https://github.com/bezhanSalleh/filament-shield)                                           | [bezhansalleh](https://github.com/bezhansalleh)     |
| [Exceptions](https://github.com/bezhansalleh/filament-exceptions)                                   | [bezhansalleh](https://github.com/bezhansalleh)     |
| [Breezy](https://github.com/jeffgreco13/filament-breezy)                                            | [jeffgreco13](https://github.com/jeffgreco13)       |
| [Logger](https://github.com/z3d0x/filament-logger)                                                  | [z3d0x](https://github.com/z3d0x)                   |
| [Ace Code Editor](https://github.com/riodwanto/filament-ace-editor)                                 | [riodwanto](https://github.com/riodwanto)           |
| [Filament Record Navigation Plugin](https://github.com/josespinal/filament-record-navigation)       | [josespinal](https://github.com/josespinal)         |
| [Filament media manager](https://github.com/tomatophp/filament-media-manager)                       | [tomatophp](https://github.com/tomatophp)           |
| [Filament Menu Builder](https://github.com/datlechin/filament-menu-builder)                         | [datlechin](https://github.com/datlechin)           |

#### Plugins Recommendation

Other recommendations for your starter, in my personal opinion:

- [Rupadana - API Resources](https://filamentphp.com/plugins/rupadana-api-service) : Generate API for your Resources.
- [Bezhan Salleh - Language Switch](https://filamentphp.com/plugins/bezhansalleh-language-switch) : Zero config Language Switcher plugin for Filament Panels.
- [Kenepa - Resource Lock](https://filamentphp.com/plugins/kenepa-resource-lock) : Resource locking when other user begins editing a resource.
- [Ralph J. Smit - Components](https://filamentphp.com/plugins/ralphjsmit-components) : A collection of handy components.
- [Tapp Network - Laravel Auditing](https://filamentphp.com/plugins/tapp-network-laravel-auditing) : Resource locking when other user begins editing a resource.
- [Shuvro Roy - Spatie Laravel Health](https://filamentphp.com/plugins/shuvroroy-spatie-laravel-health) : Health monitoring for Filament.

<a href="https://buymeacoffee.com/hashaqirul" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

### License

Filament Starter is provided under the [MIT License](LICENSE.md).
