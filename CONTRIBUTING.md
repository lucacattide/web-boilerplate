# Best Practices

## Styles & Coding

- HTML, CSS and Javascript follow in general the Google Style Guide conventions (https://github.com/google/styleguide);
- Custom CSS follows the BEM convention (http://getbem.com/);

Please be sure to check and follow them before attempt any modification to the sources, in order to preserve the general integrity of the project patterns.
Third-party linter plugins like ESLint, Beautify, Prettier or any other similar resource are welcome (configuration files of the mentioned ones are already present);


## Assets

### Common Guidelines

- For assets inclusion location, specifications or their variations, please refeer to __TODO__ comments inside the sources;


### List of common assets

- Paths:
    * __/css/__: Contains all the shared styles (__development__ version);
    * __/css/dist/__: Contains all the shared styles (__production__ version);
    * __/css/lib/__: Contains all the shared third-party styles;
    * __/img/__: Contains all the iconographic assets;
    * __/js/__: Contains all the shared scripts (__development__ version);
    * __/js/dist/__: Contains all the shared scripts (__production__ version);
    * __/js/lib/__: Contains all the shared third-party scripts;
    * __/php/__: Contains all the shared section snippets;
    * __/sass/__: Contains all the shared preprocessed styles;
    * __/sass/lib/__: Contains all the shared third-party preprocessed styles;
    * __/test/__: Contains all the shared unit tests;

- Sources:
    * __/js/back-to-top.js__: Back to top JavaScript module;
    * __/js/cookies.js__: Cookies JavaScript module;
    * __/js/index.js__: Main module
        - Includes:
            - __/sass/index.scss__: Main style preprocessor import;
            - __\<function-name\>__: Common proprietary and third-party modules import;
    * __/js/<section-name\>.js__: Section module
        - Includes:
            - __/sass/<section-name\>.scss__: Section style preprocessor import;
            - __\<function-name\>__: Common proprietary and third-party modules import;
    * __/js/install.js__: Progressive Web App local installation settings;
    * __/js/refresh.js__: Progressive Web App refresh UX;
    * __/js/service-worker.js__: Progressive Web App service worker configuration;
    * __/js/manifest.json__: _Webpack_ manifest file;
    * __/php/head.php__: HEAD definition snippet
        - Includes:
            - All the common third-party library (style/script) preloads
                - jQuery - CDN;
            - All the specific third-party library (style/script) preloads by current section
            - All the specific proprietary library (style/script) preloads by current section
                - __css/\<section-name\>.css__: Section styles;
                - __/js/\<section-name\>.js__: Section scripts;
            - All the common third-party library (style) imports
            - All the specific third-party library (style) imports by current section
            - All the specific proprietary library (style) imports by current section
                - __css/\<section-name\>.css__: Section styles;
    * __/php/scripts.php__: Scripts definition snippet
        - Includes:
            - All the common third-party library (script) imports
                - Respond.js;
                - jQuery - CDN;
            - All the specific third-party library (script) imports by current section
            - All the specific proprietary library (script) imports by current section
                - __/js/\<section-name\>.js__: Section scripts;


## Repository

- .gitignore
    * __/js/*:__ Front-End development files (_JavaScript_);
	* __/log/:__ Various operational registries;
    * __/node_modules/:__ Full-Stack Front-End dependencies (_NodeJS_);
    * __/sass/:__ Front-End development files (_SASS_);
    * __/test/:__ Unit testing files (_JavaScript_);
    * __/\_.browserslistrc/:__ _NodeJS_ configuration files;
    * __/.:__ Various system and configuration files;
    * __/!.htaccess:__ Host configuration file;
    * __/.json:__ Full-Stack Front-End various configuration files;
    * __/babel.config.js:__ ES6 compiler configuration files (_JavaScript_);
    * __/config.rb:__ Front-End Framework configuration files (_Compass_);
	* __/gulpfile.js:__ Front-End task-runner configuration files (_Gulp_);
    * __/jest.*.js:__ Unit testing plugin configuration files (_Jest_);
    * __/postcss.config.js:__ Module plugin bundler configuration files (_Webpack_);
	* __/webpack.*.js__: Module plugin bundler configuration files (_Webpack_);


I.e.

```
    # Repository - Configuration
    /config/
    /js/*
    !/js/*/
    /lib/
    /log/
    /node_modules/
    /sass/
    /test/
    /_.browserlistrc
    /.*
    !/.htaccess
    !/manfest.json
    /*.json
    /babel.config.js
    /Capfile
    /config.rb
    /Gemfile
    /Gemfile.lock
    /gulpfile.js
    /jest.*.js
    /postcss.config.js
    /webpack.*.js
```


### Branches

- __develop__ (Development);
- __staging__ (Beta);
- __master__ (Production - _Default_);


### Commits

- __< Label/Title >: < Description >__;

- __Label__: Implementation subject identification label (if expected);
- __Title__: Short unique naming of the implementation subject
- __Description__: Short descriptive note of the implementation done;

I.e.

```
	Updates: Icons updated;
```


### Merges

- __staging__: merging from __develop__;
- __master__: merging from __staging__;


## Host

### Essential files^!

- __.ftpquota__
- __revisions.log__

^! __Not delete__
