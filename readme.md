eos
================

## What is EOS?
EOS is an experimental PHP 5.5+ CMF/S built on top of the Laravel 5 framework. EOS is meant to be Page/Document Centric, lightweight, and flexible. The end goal is to allow developers to quickly turn  HTML mockups in to live pages quickly. Bonus points for HHVM Compability, ya?

### Immediate Goals
* Finish merging various experiments in to: core & plugins
* Finish functional prototype of backend

### Mid Term Project Goals
####EOS Management
** command line management utility / wrapper for artisan, composer, etc

### Long Term Project Goals

####Multi-CSS Framework capable layout system
* Bootstrap
* YAML
* etc

####RESPONSIVE ALL THE THINGS

##
Templating/Design goals
* Provide a set of commonly used page layout skeletons (or chunks of layouts) similar to what can be found in the [Dell Design Library](http://www.delldesignlibrary.com)

* Bonus points for an algorithm that can analyze a tempolate and "see what you were trying to do" and provide a better implementation of layout


Core Concepts and Terminology
================

####Page / eosWebDocument
A page is simply a route (page alias, slug, whatever), a layout, a collection of content nodes, and some basic web/app meta data. At the end of the day, a template engine is sent an eosWebDocument as the data to render.

#### Layout
The Raw HTML skeleton / structure of a page, sans CSS, Content, or Scripts. A layout may contain layout chunks and defines Content Zones

#### Layout Chunk
A portion of a Layout which is reusable or which may be overridden in certain contexts. A layout chunk can also define content zones. Content Zones missing from an overridden layout chunk will be disregarded

#### Content Node
The named Blade/Mustache/Twig or a specific XPATH to a region of your page layout where module output can written
* content_nodes is a generic content table that can contain different sorts of content pieces
*Similar concept as in ModX "ContentElement" (modDocument, modSnippet, modChunk) 
* nodeTypes enumaration: eosDocument, eosDocumentChunk

#### Theme
A theme is the collection of LESS/SASS portions of a Template

#### Template
The whole thing. A collection of layouts, themes (css & images), and javascript resources

## Buy me a beer, or new development tools! 
<a href='https://pledgie.com/campaigns/31329'><img alt='Click here to lend your support to: EOS - Laravel CMS and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/31329.png?skin_name=chrome' border='0' ></a>