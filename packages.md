**atom packages list:**

1. 书签功能在atom/bookmarks包中实现。

2. 空白字符命令在atom/whitespace中实现。

3. 括号功能在atom/bracket-matcher包中实现。

4. 编码选择器在atom/encoding-selector包中实现。

5. 查找和替换功能在atom/find-and-replace包中实现，并且使用了atom/scandal包执行实际的查找。

6. 代码段功能在atom/snippets包中实现。

7. 自动补全功能在atom/autocomplete包中实现。

8. 语法选择工具的功能在atom/grammar-selector包中实现。

9. 拼写检查功能在atom/spell-check包中实现。

10. Markdown预览在atom/markdown-preview包中实现。


atom themes list:

* isotope-ui
* seti-ui
* monokai-flat

**安装插件：**

* Emmet- 这个是书写HTML、CSS的神器，用过的都说好，相关语法文档可以看官网cheat-sheet,安装上面的语法也是经常写的就记住了。

* autoprefixer - 用来补全CSS前缀的，会自动生成浏览器前缀

* color-picker - 取色器，比Sublime那个好用，快

* linter- 这个是检查各种语言的语法错误的，可以使用linter这个，也可以针对某些语言使用特定的lineter
  * linter-jshint, for JavaScript and JSON, using jshint
  * linter-coffeelint, for CoffeeScript, using coffeelint
  * linter-tslint, for Typescript, using tslint
  * linter-php, for PHP using php -l
  * linter-pylint, for Python, using pylint
  * linter-scss-lint, for SASS/SCSS, using scss-lint
  * linter-less, for LESS, using less
  * linter-csslint, for CSS, using csslint
  * linter-stylint, for Stylus, using stylint
  * linter-stylus, for Stylus, using stylus


* autocomplete-plus 自动补全功能，可以设置一些语言的自动提示补全，挺好的

* atom-ternjs js 代码提示，可以提示browser、es5、es6、jquery都可以

* atom-beautify 格式化代码

* atom-minify css/js压缩神器,执行压缩快捷键
  * ctrl-shift-m:执行压缩，生成一个带min后缀的(如果不想使用min可以进行设置修改)
  * ctrl-alt-shift-m / ctrl-cmd-shift-m:全局开启或者关闭保存自动生成压缩软件
  * ctrl-alt-shift-h / ctrl-cmd-shift-h:全局开启或者关闭执行后弹出的消息面板
  * less-autocompile 实时编辑的工具


* atom-css-comb 对于css代码进来排版的

* docblockr 注释插件

* file-icons 文件图标，侧边栏前面的icon

* git-plus git协作工具

* minimap 编辑器内部的代码缩略视图

* active-power-mode 装逼插件，代码酷炫的效果

* power-mode 也是装逼插件，大家自行去试验

*如果下载很慢，直接去GitHub下载插件，然后放入Packages文件夹下即可。在点击Install，编译一会，一会就好了。*

**atom无法安装插件的解决方法之一**

atom通过setting中无法下载插件，通过apm也无法下载插件，可能是网络、config配置的问题，不好解决。

下面的方法全手动，基本属于万金油方法：

1，在atom的setting页面中点击open config folder进入到atom的配置项目，然后我们转到该项目下的windows窗口进入package文件夹，这将是我们放置插件包的地方。

2，打开https://atom.io/packages浏览自己需要的插件

3，选择插件中的repo，复制github地址

4，在步骤一的文件夹中运行git bash命令

输入以下：

git clone https://github.com/emmetio/emmet-atom （将插件的源代码克隆岛文件夹中）
cd emmet-atom （进入插件包文件夹）
npm install （下载，生成插件）
5，重启atom 或者 control + alt + R 刷新atom

**部分插件手动安装所需模块**(命令行用命令 "npm install [modename]" 安装)

* activate-power-mode
  * lodash.debounce
  * lodash.defer
  * lodash.random
  * lodash.sample
  * lodash.throttle


* atom-material-ui
  * tinycolor2


* atom-minimap-linter
  * atom-package-deps


* expose
  * atom-space-pen-views
  * sortablejs


* linter
  * atom-package-deps
  * lodash.uniq
  * minimatch
  * sb-debounce


* linter-jshint
  * atom-linter
  * atom-package-deps
  * jshint-json


* minimap
  * atom-utils
  * element-resize-detector
  * mixto
  * underscore-plus


* vim-mode
  * event-kit
  * grim
  * underscore-plus
