HTML names

Use html 5 structure (header, main, article, section, aside, footer)

Good div names: 
container + description
wrapper
entry-content
page-content
Blog post: Article
CSS / Sass: 
Everything related to typography should be in Typography.scss 
Use rem to set the font size, not pixels or em 
Use rem for padding and margin as well, unless it should not be absolute
All the constant measurement that will not be changed by viewport dimensions can be styled with px
We should set the font size depending on screen size (use media queries)
Media queries: Add the media queries in the bottom in the files 
Add all colors as variables in SASS and give it a descriptive names 
Device sizes as variables 
Use variables as much as possible and give it descriptive names 
Never remove styling 
Do not use magic numbers 
Quotations marks / strings
Always use double quotation marks
Tab space
2 spaces. Clean. No special characters.
Variable names / method names / classes
Always snake case and always lowercase
Classes must start with a big letter
Good naming for functions are:
get_something (to get from a database for example)
is_something / has_something (to check a condition)
The names need to be descriptive 
Class names: Don’t name the classes after what they look like
Block code
Click enter before opening curly brackets
Function usage
Very little php inside html
Comments
// single comments
/* 
* multi line comment
*/
Includes and partials
Write a comment in the top of the include where the include should be included
Division of code
All database functions should be in its own php file
