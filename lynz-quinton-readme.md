#Lynsey Quinton Readme

##Partial Files and CodeKit Compilation

I have used CodeKit to compile the Index and Internal HTML files from the index.kit and internal.kit files. These two files become the template files for the CMS.

CodeKit partials are named with convention of `_*.kit`. these files can be renamed to just `*.html` and dropped into CraftCMS Partials folder.

When CodeKit compiles the `index.kit` and `internal.kit` files it automatically includes the `_*.kit` files into them. You may elect to use Partials extracted from the resulting `*.html` files or you may just copy the `_*.kit` files. If you copy the `_*.kit` files, be aware that you will need to replace any CodeKit variables, such as `<!-- @site -->` with CraftCMS data.