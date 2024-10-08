<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SMMT-1a-OCR-fueltype-newformat</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/custom.css">
<link rel="stylesheet" type="text/css" href="/css/custom-menu2.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" type="text/css" href="/css/project-style.css">
<style type="text/css">
    pre { line-height: 125%; }
td.linenos .normal { color: inherit; background-color: transparent; padding-left: 5px; padding-right: 5px; }
span.linenos { color: inherit; background-color: transparent; padding-left: 5px; padding-right: 5px; }
td.linenos .special { color: #000000; background-color: #ffffc0; padding-left: 5px; padding-right: 5px; }
span.linenos.special { color: #000000; background-color: #ffffc0; padding-left: 5px; padding-right: 5px; }
.highlight .hll { background-color: var(--jp-cell-editor-active-background) }
.highlight { background: var(--jp-cell-editor-background); color: var(--jp-mirror-editor-variable-color) }
.highlight .c { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment */
.highlight .err { color: var(--jp-mirror-editor-error-color) } /* Error */
.highlight .k { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword */
.highlight .o { color: var(--jp-mirror-editor-operator-color); font-weight: bold } /* Operator */
.highlight .p { color: var(--jp-mirror-editor-punctuation-color) } /* Punctuation */
.highlight .ch { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Hashbang */
.highlight .cm { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Multiline */
.highlight .cp { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Preproc */
.highlight .cpf { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.PreprocFile */
.highlight .c1 { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Single */
.highlight .cs { color: var(--jp-mirror-editor-comment-color); font-style: italic } /* Comment.Special */
.highlight .kc { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Constant */
.highlight .kd { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Declaration */
.highlight .kn { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Namespace */
.highlight .kp { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Pseudo */
.highlight .kr { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Reserved */
.highlight .kt { color: var(--jp-mirror-editor-keyword-color); font-weight: bold } /* Keyword.Type */
.highlight .m { color: var(--jp-mirror-editor-number-color) } /* Literal.Number */
.highlight .s { color: var(--jp-mirror-editor-string-color) } /* Literal.String */
.highlight .ow { color: var(--jp-mirror-editor-operator-color); font-weight: bold } /* Operator.Word */
.highlight .pm { color: var(--jp-mirror-editor-punctuation-color) } /* Punctuation.Marker */
.highlight .w { color: var(--jp-mirror-editor-variable-color) } /* Text.Whitespace */
.highlight .mb { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Bin */
.highlight .mf { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Float */
.highlight .mh { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Hex */
.highlight .mi { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Integer */
.highlight .mo { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Oct */
.highlight .sa { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Affix */
.highlight .sb { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Backtick */
.highlight .sc { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Char */
.highlight .dl { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Delimiter */
.highlight .sd { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Doc */
.highlight .s2 { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Double */
.highlight .se { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Escape */
.highlight .sh { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Heredoc */
.highlight .si { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Interpol */
.highlight .sx { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Other */
.highlight .sr { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Regex */
.highlight .s1 { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Single */
.highlight .ss { color: var(--jp-mirror-editor-string-color) } /* Literal.String.Symbol */
.highlight .il { color: var(--jp-mirror-editor-number-color) } /* Literal.Number.Integer.Long */
  </style>
<style type="text/css">
    /* Style the dropdown button */
.dropbtn {
    background-color: #2a3338;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    font-family: system-ui, -apple-system, 
    'Segoe UI', helvetica, arial, sans-serif, 'Apple Color Emoji',
    'Segoe UI Emoji', 'Segoe UI Symbol';
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #2a3338;
    min-width: 160px;

    z-index: 1;
    font-family: sans-serif;

}

/* Style the links inside the dropdown */
.dropdown-content a {
    color: white;
    padding: 6px 16px;
    text-decoration: none;
    display: block;
    font-family: sans-serif;

}

/* Change color on hover */
.dropdown-content a:hover {
    background-color: rgb(61, 68, 73);
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

.submenu {
    padding-left: 20px; /* Adjust the indentation as needed */
}

  </style>
<style type="text/css">
/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*
 * Mozilla scrollbar styling
 */

/* use standard opaque scrollbars for most nodes */
[data-jp-theme-scrollbars='true'] {
  scrollbar-color: rgb(var(--jp-scrollbar-thumb-color))
    var(--jp-scrollbar-background-color);
}

/* for code nodes, use a transparent style of scrollbar. These selectors
 * will match lower in the tree, and so will override the above */
[data-jp-theme-scrollbars='true'] .CodeMirror-hscrollbar,
[data-jp-theme-scrollbars='true'] .CodeMirror-vscrollbar {
  scrollbar-color: rgba(var(--jp-scrollbar-thumb-color), 0.5) transparent;
}

/* tiny scrollbar */

.jp-scrollbar-tiny {
  scrollbar-color: rgba(var(--jp-scrollbar-thumb-color), 0.5) transparent;
  scrollbar-width: thin;
}

/* tiny scrollbar */

.jp-scrollbar-tiny::-webkit-scrollbar,
.jp-scrollbar-tiny::-webkit-scrollbar-corner {
  background-color: transparent;
  height: 4px;
  width: 4px;
}

.jp-scrollbar-tiny::-webkit-scrollbar-thumb {
  background: rgba(var(--jp-scrollbar-thumb-color), 0.5);
}

.jp-scrollbar-tiny::-webkit-scrollbar-track:horizontal {
  border-left: 0 solid transparent;
  border-right: 0 solid transparent;
}

.jp-scrollbar-tiny::-webkit-scrollbar-track:vertical {
  border-top: 0 solid transparent;
  border-bottom: 0 solid transparent;
}

/*
 * Lumino
 */

.lm-ScrollBar[data-orientation='horizontal'] {
  min-height: 16px;
  max-height: 16px;
  min-width: 45px;
  border-top: 1px solid #a0a0a0;
}

.lm-ScrollBar[data-orientation='vertical'] {
  min-width: 16px;
  max-width: 16px;
  min-height: 45px;
  border-left: 1px solid #a0a0a0;
}

.lm-ScrollBar-button {
  background-color: #f0f0f0;
  background-position: center center;
  min-height: 15px;
  max-height: 15px;
  min-width: 15px;
  max-width: 15px;
}

.lm-ScrollBar-button:hover {
  background-color: #dadada;
}

.lm-ScrollBar-button.lm-mod-active {
  background-color: #cdcdcd;
}

.lm-ScrollBar-track {
  background: #f0f0f0;
}

.lm-ScrollBar-thumb {
  background: #cdcdcd;
}

.lm-ScrollBar-thumb:hover {
  background: #bababa;
}

.lm-ScrollBar-thumb.lm-mod-active {
  background: #a0a0a0;
}

.lm-ScrollBar[data-orientation='horizontal'] .lm-ScrollBar-thumb {
  height: 100%;
  min-width: 15px;
  border-left: 1px solid #a0a0a0;
  border-right: 1px solid #a0a0a0;
}

.lm-ScrollBar[data-orientation='vertical'] .lm-ScrollBar-thumb {
  width: 100%;
  min-height: 15px;
  border-top: 1px solid #a0a0a0;
  border-bottom: 1px solid #a0a0a0;
}

.lm-ScrollBar[data-orientation='horizontal']
  .lm-ScrollBar-button[data-action='decrement'] {
  background-image: var(--jp-icon-caret-left);
  background-size: 17px;
}

.lm-ScrollBar[data-orientation='horizontal']
  .lm-ScrollBar-button[data-action='increment'] {
  background-image: var(--jp-icon-caret-right);
  background-size: 17px;
}

.lm-ScrollBar[data-orientation='vertical']
  .lm-ScrollBar-button[data-action='decrement'] {
  background-image: var(--jp-icon-caret-up);
  background-size: 17px;
}

.lm-ScrollBar[data-orientation='vertical']
  .lm-ScrollBar-button[data-action='increment'] {
  background-image: var(--jp-icon-caret-down);
  background-size: 17px;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-Widget {
  box-sizing: border-box;
  position: relative;
  overflow: hidden;
}

.lm-Widget.lm-mod-hidden {
  display: none !important;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

.lm-AccordionPanel[data-orientation='horizontal'] > .lm-AccordionPanel-title {
  /* Title is rotated for horizontal accordion panel using CSS */
  display: block;
  transform-origin: top left;
  transform: rotate(-90deg) translate(-100%);
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-CommandPalette {
  display: flex;
  flex-direction: column;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.lm-CommandPalette-search {
  flex: 0 0 auto;
}

.lm-CommandPalette-content {
  flex: 1 1 auto;
  margin: 0;
  padding: 0;
  min-height: 0;
  overflow: auto;
  list-style-type: none;
}

.lm-CommandPalette-header {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.lm-CommandPalette-item {
  display: flex;
  flex-direction: row;
}

.lm-CommandPalette-itemIcon {
  flex: 0 0 auto;
}

.lm-CommandPalette-itemContent {
  flex: 1 1 auto;
  overflow: hidden;
}

.lm-CommandPalette-itemShortcut {
  flex: 0 0 auto;
}

.lm-CommandPalette-itemLabel {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.lm-close-icon {
  border: 1px solid transparent;
  background-color: transparent;
  position: absolute;
  z-index: 1;
  right: 3%;
  top: 0;
  bottom: 0;
  margin: auto;
  padding: 7px 0;
  display: none;
  vertical-align: middle;
  outline: 0;
  cursor: pointer;
}
.lm-close-icon:after {
  content: 'X';
  display: block;
  width: 15px;
  height: 15px;
  text-align: center;
  color: #000;
  font-weight: normal;
  font-size: 12px;
  cursor: pointer;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-DockPanel {
  z-index: 0;
}

.lm-DockPanel-widget {
  z-index: 0;
}

.lm-DockPanel-tabBar {
  z-index: 1;
}

.lm-DockPanel-handle {
  z-index: 2;
}

.lm-DockPanel-handle.lm-mod-hidden {
  display: none !important;
}

.lm-DockPanel-handle:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: '';
}

.lm-DockPanel-handle[data-orientation='horizontal'] {
  cursor: ew-resize;
}

.lm-DockPanel-handle[data-orientation='vertical'] {
  cursor: ns-resize;
}

.lm-DockPanel-handle[data-orientation='horizontal']:after {
  left: 50%;
  min-width: 8px;
  transform: translateX(-50%);
}

.lm-DockPanel-handle[data-orientation='vertical']:after {
  top: 50%;
  min-height: 8px;
  transform: translateY(-50%);
}

.lm-DockPanel-overlay {
  z-index: 3;
  box-sizing: border-box;
  pointer-events: none;
}

.lm-DockPanel-overlay.lm-mod-hidden {
  display: none !important;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-Menu {
  z-index: 10000;
  position: absolute;
  white-space: nowrap;
  overflow-x: hidden;
  overflow-y: auto;
  outline: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.lm-Menu-content {
  margin: 0;
  padding: 0;
  display: table;
  list-style-type: none;
}

.lm-Menu-item {
  display: table-row;
}

.lm-Menu-item.lm-mod-hidden,
.lm-Menu-item.lm-mod-collapsed {
  display: none !important;
}

.lm-Menu-itemIcon,
.lm-Menu-itemSubmenuIcon {
  display: table-cell;
  text-align: center;
}

.lm-Menu-itemLabel {
  display: table-cell;
  text-align: left;
}

.lm-Menu-itemShortcut {
  display: table-cell;
  text-align: right;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-MenuBar {
  outline: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.lm-MenuBar-content {
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: row;
  list-style-type: none;
}

.lm-MenuBar-item {
  box-sizing: border-box;
}

.lm-MenuBar-itemIcon,
.lm-MenuBar-itemLabel {
  display: inline-block;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-ScrollBar {
  display: flex;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.lm-ScrollBar[data-orientation='horizontal'] {
  flex-direction: row;
}

.lm-ScrollBar[data-orientation='vertical'] {
  flex-direction: column;
}

.lm-ScrollBar-button {
  box-sizing: border-box;
  flex: 0 0 auto;
}

.lm-ScrollBar-track {
  box-sizing: border-box;
  position: relative;
  overflow: hidden;
  flex: 1 1 auto;
}

.lm-ScrollBar-thumb {
  box-sizing: border-box;
  position: absolute;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-SplitPanel-child {
  z-index: 0;
}

.lm-SplitPanel-handle {
  z-index: 1;
}

.lm-SplitPanel-handle.lm-mod-hidden {
  display: none !important;
}

.lm-SplitPanel-handle:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: '';
}

.lm-SplitPanel[data-orientation='horizontal'] > .lm-SplitPanel-handle {
  cursor: ew-resize;
}

.lm-SplitPanel[data-orientation='vertical'] > .lm-SplitPanel-handle {
  cursor: ns-resize;
}

.lm-SplitPanel[data-orientation='horizontal'] > .lm-SplitPanel-handle:after {
  left: 50%;
  min-width: 8px;
  transform: translateX(-50%);
}

.lm-SplitPanel[data-orientation='vertical'] > .lm-SplitPanel-handle:after {
  top: 50%;
  min-height: 8px;
  transform: translateY(-50%);
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-TabBar {
  display: flex;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.lm-TabBar[data-orientation='horizontal'] {
  flex-direction: row;
  align-items: flex-end;
}

.lm-TabBar[data-orientation='vertical'] {
  flex-direction: column;
  align-items: flex-end;
}

.lm-TabBar-content {
  margin: 0;
  padding: 0;
  display: flex;
  flex: 1 1 auto;
  list-style-type: none;
}

.lm-TabBar[data-orientation='horizontal'] > .lm-TabBar-content {
  flex-direction: row;
}

.lm-TabBar[data-orientation='vertical'] > .lm-TabBar-content {
  flex-direction: column;
}

.lm-TabBar-tab {
  display: flex;
  flex-direction: row;
  box-sizing: border-box;
  overflow: hidden;
  touch-action: none; /* Disable native Drag/Drop */
}

.lm-TabBar-tabIcon,
.lm-TabBar-tabCloseIcon {
  flex: 0 0 auto;
}

.lm-TabBar-tabLabel {
  flex: 1 1 auto;
  overflow: hidden;
  white-space: nowrap;
}

.lm-TabBar-tabInput {
  user-select: all;
  width: 100%;
  box-sizing: border-box;
}

.lm-TabBar-tab.lm-mod-hidden {
  display: none !important;
}

.lm-TabBar-addButton.lm-mod-hidden {
  display: none !important;
}

.lm-TabBar.lm-mod-dragging .lm-TabBar-tab {
  position: relative;
}

.lm-TabBar.lm-mod-dragging[data-orientation='horizontal'] .lm-TabBar-tab {
  left: 0;
  transition: left 150ms ease;
}

.lm-TabBar.lm-mod-dragging[data-orientation='vertical'] .lm-TabBar-tab {
  top: 0;
  transition: top 150ms ease;
}

.lm-TabBar.lm-mod-dragging .lm-TabBar-tab.lm-mod-dragging {
  transition: none;
}

.lm-TabBar-tabLabel .lm-TabBar-tabInput {
  user-select: all;
  width: 100%;
  box-sizing: border-box;
  background: inherit;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-TabPanel-tabBar {
  z-index: 1;
}

.lm-TabPanel-stackedPanel {
  z-index: 0;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-Collapse {
  display: flex;
  flex-direction: column;
  align-items: stretch;
}

.jp-Collapse-header {
  padding: 1px 12px;
  background-color: var(--jp-layout-color1);
  border-bottom: solid var(--jp-border-width) var(--jp-border-color2);
  color: var(--jp-ui-font-color1);
  cursor: pointer;
  display: flex;
  align-items: center;
  font-size: var(--jp-ui-font-size0);
  font-weight: 600;
  text-transform: uppercase;
  user-select: none;
}

.jp-Collapser-icon {
  height: 16px;
}

.jp-Collapse-header-collapsed .jp-Collapser-icon {
  transform: rotate(-90deg);
  margin: auto 0;
}

.jp-Collapser-title {
  line-height: 25px;
}

.jp-Collapse-contents {
  padding: 0 12px;
  background-color: var(--jp-layout-color1);
  color: var(--jp-ui-font-color1);
  overflow: auto;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* This file was auto-generated by ensureUiComponents() in @jupyterlab/buildutils */

/**
 * (DEPRECATED) Support for consuming icons as CSS background images
 */

/* Icons urls */

:root {
  --jp-icon-add-above: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzEzN18xOTQ5MikiPgo8cGF0aCBjbGFzcz0ianAtaWNvbjMiIGQ9Ik00Ljc1IDQuOTMwNjZINi42MjVWNi44MDU2NkM2LjYyNSA3LjAxMTkxIDYuNzkzNzUgNy4xODA2NiA3IDcuMTgwNjZDNy4yMDYyNSA3LjE4MDY2IDcuMzc1IDcuMDExOTEgNy4zNzUgNi44MDU2NlY0LjkzMDY2SDkuMjVDOS40NTYyNSA0LjkzMDY2IDkuNjI1IDQuNzYxOTEgOS42MjUgNC41NTU2NkM5LjYyNSA0LjM0OTQxIDkuNDU2MjUgNC4xODA2NiA5LjI1IDQuMTgwNjZINy4zNzVWMi4zMDU2NkM3LjM3NSAyLjA5OTQxIDcuMjA2MjUgMS45MzA2NiA3IDEuOTMwNjZDNi43OTM3NSAxLjkzMDY2IDYuNjI1IDIuMDk5NDEgNi42MjUgMi4zMDU2NlY0LjE4MDY2SDQuNzVDNC41NDM3NSA0LjE4MDY2IDQuMzc1IDQuMzQ5NDEgNC4zNzUgNC41NTU2NkM0LjM3NSA0Ljc2MTkxIDQuNTQzNzUgNC45MzA2NiA0Ljc1IDQuOTMwNjZaIiBmaWxsPSIjNjE2MTYxIiBzdHJva2U9IiM2MTYxNjEiIHN0cm9rZS13aWR0aD0iMC43Ii8+CjwvZz4KPHBhdGggY2xhc3M9ImpwLWljb24zIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTExLjUgOS41VjExLjVMMi41IDExLjVWOS41TDExLjUgOS41Wk0xMiA4QzEyLjU1MjMgOCAxMyA4LjQ0NzcyIDEzIDlWMTJDMTMgMTIuNTUyMyAxMi41NTIzIDEzIDEyIDEzTDIgMTNDMS40NDc3MiAxMyAxIDEyLjU1MjMgMSAxMlY5QzEgOC40NDc3MiAxLjQ0NzcxIDggMiA4TDEyIDhaIiBmaWxsPSIjNjE2MTYxIi8+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzEzN18xOTQ5MiI+CjxyZWN0IGNsYXNzPSJqcC1pY29uMyIgd2lkdGg9IjYiIGhlaWdodD0iNiIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0ibWF0cml4KC0xIDAgMCAxIDEwIDEuNTU1NjYpIi8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg==);
  --jp-icon-add-below: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzEzN18xOTQ5OCkiPgo8cGF0aCBjbGFzcz0ianAtaWNvbjMiIGQ9Ik05LjI1IDEwLjA2OTNMNy4zNzUgMTAuMDY5M0w3LjM3NSA4LjE5NDM0QzcuMzc1IDcuOTg4MDkgNy4yMDYyNSA3LjgxOTM0IDcgNy44MTkzNEM2Ljc5Mzc1IDcuODE5MzQgNi42MjUgNy45ODgwOSA2LjYyNSA4LjE5NDM0TDYuNjI1IDEwLjA2OTNMNC43NSAxMC4wNjkzQzQuNTQzNzUgMTAuMDY5MyA0LjM3NSAxMC4yMzgxIDQuMzc1IDEwLjQ0NDNDNC4zNzUgMTAuNjUwNiA0LjU0Mzc1IDEwLjgxOTMgNC43NSAxMC44MTkzTDYuNjI1IDEwLjgxOTNMNi42MjUgMTIuNjk0M0M2LjYyNSAxMi45MDA2IDYuNzkzNzUgMTMuMDY5MyA3IDEzLjA2OTNDNy4yMDYyNSAxMy4wNjkzIDcuMzc1IDEyLjkwMDYgNy4zNzUgMTIuNjk0M0w3LjM3NSAxMC44MTkzTDkuMjUgMTAuODE5M0M5LjQ1NjI1IDEwLjgxOTMgOS42MjUgMTAuNjUwNiA5LjYyNSAxMC40NDQzQzkuNjI1IDEwLjIzODEgOS40NTYyNSAxMC4wNjkzIDkuMjUgMTAuMDY5M1oiIGZpbGw9IiM2MTYxNjEiIHN0cm9rZT0iIzYxNjE2MSIgc3Ryb2tlLXdpZHRoPSIwLjciLz4KPC9nPgo8cGF0aCBjbGFzcz0ianAtaWNvbjMiIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMi41IDUuNUwyLjUgMy41TDExLjUgMy41TDExLjUgNS41TDIuNSA1LjVaTTIgN0MxLjQ0NzcyIDcgMSA2LjU1MjI4IDEgNkwxIDNDMSAyLjQ0NzcyIDEuNDQ3NzIgMiAyIDJMMTIgMkMxMi41NTIzIDIgMTMgMi40NDc3MiAxMyAzTDEzIDZDMTMgNi41NTIyOSAxMi41NTIzIDcgMTIgN0wyIDdaIiBmaWxsPSIjNjE2MTYxIi8+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzEzN18xOTQ5OCI+CjxyZWN0IGNsYXNzPSJqcC1pY29uMyIgd2lkdGg9IjYiIGhlaWdodD0iNiIgZmlsbD0id2hpdGUiIHRyYW5zZm9ybT0ibWF0cml4KDEgMS43NDg0NmUtMDcgMS43NDg0NmUtMDcgLTEgNCAxMy40NDQzKSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo=);
  --jp-icon-add: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE5IDEzaC02djZoLTJ2LTZINXYtMmg2VjVoMnY2aDZ2MnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-bell: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE2IDE2IiB2ZXJzaW9uPSIxLjEiPgogICA8cGF0aCBjbGFzcz0ianAtaWNvbjIganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjMzMzMzMzIgogICAgICBkPSJtOCAwLjI5Yy0xLjQgMC0yLjcgMC43My0zLjYgMS44LTEuMiAxLjUtMS40IDMuNC0xLjUgNS4yLTAuMTggMi4yLTAuNDQgNC0yLjMgNS4zbDAuMjggMS4zaDVjMC4wMjYgMC42NiAwLjMyIDEuMSAwLjcxIDEuNSAwLjg0IDAuNjEgMiAwLjYxIDIuOCAwIDAuNTItMC40IDAuNi0xIDAuNzEtMS41aDVsMC4yOC0xLjNjLTEuOS0wLjk3LTIuMi0zLjMtMi4zLTUuMy0wLjEzLTEuOC0wLjI2LTMuNy0xLjUtNS4yLTAuODUtMS0yLjItMS44LTMuNi0xLjh6bTAgMS40YzAuODggMCAxLjkgMC41NSAyLjUgMS4zIDAuODggMS4xIDEuMSAyLjcgMS4yIDQuNCAwLjEzIDEuNyAwLjIzIDMuNiAxLjMgNS4yaC0xMGMxLjEtMS42IDEuMi0zLjQgMS4zLTUuMiAwLjEzLTEuNyAwLjMtMy4zIDEuMi00LjQgMC41OS0wLjcyIDEuNi0xLjMgMi41LTEuM3ptLTAuNzQgMTJoMS41Yy0wLjAwMTUgMC4yOCAwLjAxNSAwLjc5LTAuNzQgMC43OS0wLjczIDAuMDAxNi0wLjcyLTAuNTMtMC43NC0wLjc5eiIgLz4KPC9zdmc+Cg==);
  --jp-icon-bug-dot: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiM2MTYxNjEiPgogICAgICAgIDxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMTcuMTkgOEgyMFYxMEgxNy45MUMxNy45NiAxMC4zMyAxOCAxMC42NiAxOCAxMVYxMkgyMFYxNEgxOC41SDE4VjE0LjAyNzVDMTUuNzUgMTQuMjc2MiAxNCAxNi4xODM3IDE0IDE4LjVDMTQgMTkuMjA4IDE0LjE2MzUgMTkuODc3OSAxNC40NTQ5IDIwLjQ3MzlDMTMuNzA2MyAyMC44MTE3IDEyLjg3NTcgMjEgMTIgMjFDOS43OCAyMSA3Ljg1IDE5Ljc5IDYuODEgMThINFYxNkg2LjA5QzYuMDQgMTUuNjcgNiAxNS4zNCA2IDE1VjE0SDRWMTJINlYxMUM2IDEwLjY2IDYuMDQgMTAuMzMgNi4wOSAxMEg0VjhINi44MUM3LjI2IDcuMjIgNy44OCA2LjU1IDguNjIgNi4wNEw3IDQuNDFMOC40MSAzTDEwLjU5IDUuMTdDMTEuMDQgNS4wNiAxMS41MSA1IDEyIDVDMTIuNDkgNSAxMi45NiA1LjA2IDEzLjQyIDUuMTdMMTUuNTkgM0wxNyA0LjQxTDE1LjM3IDYuMDRDMTYuMTIgNi41NSAxNi43NCA3LjIyIDE3LjE5IDhaTTEwIDE2SDE0VjE0SDEwVjE2Wk0xMCAxMkgxNFYxMEgxMFYxMloiIGZpbGw9IiM2MTYxNjEiLz4KICAgICAgICA8cGF0aCBkPSJNMjIgMTguNUMyMiAyMC40MzMgMjAuNDMzIDIyIDE4LjUgMjJDMTYuNTY3IDIyIDE1IDIwLjQzMyAxNSAxOC41QzE1IDE2LjU2NyAxNi41NjcgMTUgMTguNSAxNUMyMC40MzMgMTUgMjIgMTYuNTY3IDIyIDE4LjVaIiBmaWxsPSIjNjE2MTYxIi8+CiAgICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-bug: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIj4KICAgIDxwYXRoIGQ9Ik0yMCA4aC0yLjgxYy0uNDUtLjc4LTEuMDctMS40NS0xLjgyLTEuOTZMMTcgNC40MSAxNS41OSAzbC0yLjE3IDIuMTdDMTIuOTYgNS4wNiAxMi40OSA1IDEyIDVjLS40OSAwLS45Ni4wNi0xLjQxLjE3TDguNDEgMyA3IDQuNDFsMS42MiAxLjYzQzcuODggNi41NSA3LjI2IDcuMjIgNi44MSA4SDR2MmgyLjA5Yy0uMDUuMzMtLjA5LjY2LS4wOSAxdjFINHYyaDJ2MWMwIC4zNC4wNC42Ny4wOSAxSDR2MmgyLjgxYzEuMDQgMS43OSAyLjk3IDMgNS4xOSAzczQuMTUtMS4yMSA1LjE5LTNIMjB2LTJoLTIuMDljLjA1LS4zMy4wOS0uNjYuMDktMXYtMWgydi0yaC0ydi0xYzAtLjM0LS4wNC0uNjctLjA5LTFIMjBWOHptLTYgOGgtNHYtMmg0djJ6bTAtNGgtNHYtMmg0djJ6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-build: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIHZpZXdCb3g9IjAgMCAyNCAyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE0LjkgMTcuNDVDMTYuMjUgMTcuNDUgMTcuMzUgMTYuMzUgMTcuMzUgMTVDMTcuMzUgMTMuNjUgMTYuMjUgMTIuNTUgMTQuOSAxMi41NUMxMy41NCAxMi41NSAxMi40NSAxMy42NSAxMi40NSAxNUMxMi40NSAxNi4zNSAxMy41NCAxNy40NSAxNC45IDE3LjQ1Wk0yMC4xIDE1LjY4TDIxLjU4IDE2Ljg0QzIxLjcxIDE2Ljk1IDIxLjc1IDE3LjEzIDIxLjY2IDE3LjI5TDIwLjI2IDE5LjcxQzIwLjE3IDE5Ljg2IDIwIDE5LjkyIDE5LjgzIDE5Ljg2TDE4LjA5IDE5LjE2QzE3LjczIDE5LjQ0IDE3LjMzIDE5LjY3IDE2LjkxIDE5Ljg1TDE2LjY0IDIxLjdDMTYuNjIgMjEuODcgMTYuNDcgMjIgMTYuMyAyMkgxMy41QzEzLjMyIDIyIDEzLjE4IDIxLjg3IDEzLjE1IDIxLjdMMTIuODkgMTkuODVDMTIuNDYgMTkuNjcgMTIuMDcgMTkuNDQgMTEuNzEgMTkuMTZMOS45NjAwMiAxOS44NkM5LjgxMDAyIDE5LjkyIDkuNjIwMDIgMTkuODYgOS41NDAwMiAxOS43MUw4LjE0MDAyIDE3LjI5QzguMDUwMDIgMTcuMTMgOC4wOTAwMiAxNi45NSA4LjIyMDAyIDE2Ljg0TDkuNzAwMDIgMTUuNjhMOS42NTAwMSAxNUw5LjcwMDAyIDE0LjMxTDguMjIwMDIgMTMuMTZDOC4wOTAwMiAxMy4wNSA4LjA1MDAyIDEyLjg2IDguMTQwMDIgMTIuNzFMOS41NDAwMiAxMC4yOUM5LjYyMDAyIDEwLjEzIDkuODEwMDIgMTAuMDcgOS45NjAwMiAxMC4xM0wxMS43MSAxMC44NEMxMi4wNyAxMC41NiAxMi40NiAxMC4zMiAxMi44OSAxMC4xNUwxMy4xNSA4LjI4OTk4QzEzLjE4IDguMTI5OTggMTMuMzIgNy45OTk5OCAxMy41IDcuOTk5OThIMTYuM0MxNi40NyA3Ljk5OTk4IDE2LjYyIDguMTI5OTggMTYuNjQgOC4yODk5OEwxNi45MSAxMC4xNUMxNy4zMyAxMC4zMiAxNy43MyAxMC41NiAxOC4wOSAxMC44NEwxOS44MyAxMC4xM0MyMCAxMC4wNyAyMC4xNyAxMC4xMyAyMC4yNiAxMC4yOUwyMS42NiAxMi43MUMyMS43NSAxMi44NiAyMS43MSAxMy4wNSAyMS41OCAxMy4xNkwyMC4xIDE0LjMxTDIwLjE1IDE1TDIwLjEgMTUuNjhaIi8+CiAgICA8cGF0aCBkPSJNNy4zMjk2NiA3LjQ0NDU0QzguMDgzMSA3LjAwOTU0IDguMzM5MzIgNi4wNTMzMiA3LjkwNDMyIDUuMjk5ODhDNy40NjkzMiA0LjU0NjQzIDYuNTA4MSA0LjI4MTU2IDUuNzU0NjYgNC43MTY1NkM1LjM5MTc2IDQuOTI2MDggNS4xMjY5NSA1LjI3MTE4IDUuMDE4NDkgNS42NzU5NEM0LjkxMDA0IDYuMDgwNzEgNC45NjY4MiA2LjUxMTk4IDUuMTc2MzQgNi44NzQ4OEM1LjYxMTM0IDcuNjI4MzIgNi41NzYyMiA3Ljg3OTU0IDcuMzI5NjYgNy40NDQ1NFpNOS42NTcxOCA0Ljc5NTkzTDEwLjg2NzIgNC45NTE3OUMxMC45NjI4IDQuOTc3NDEgMTEuMDQwMiA1LjA3MTMzIDExLjAzODIgNS4xODc5M0wxMS4wMzg4IDYuOTg4OTNDMTEuMDQ1NSA3LjEwMDU0IDEwLjk2MTYgNy4xOTUxOCAxMC44NTUgNy4yMTA1NEw5LjY2MDAxIDcuMzgwODNMOS4yMzkxNSA4LjEzMTg4TDkuNjY5NjEgOS4yNTc0NUM5LjcwNzI5IDkuMzYyNzEgOS42NjkzNCA5LjQ3Njk5IDkuNTc0MDggOS41MzE5OUw4LjAxNTIzIDEwLjQzMkM3LjkxMTMxIDEwLjQ5MiA3Ljc5MzM3IDEwLjQ2NzcgNy43MjEwNSAxMC4zODI0TDYuOTg3NDggOS40MzE4OEw2LjEwOTMxIDkuNDMwODNMNS4zNDcwNCAxMC4zOTA1QzUuMjg5MDkgMTAuNDcwMiA1LjE3MzgzIDEwLjQ5MDUgNS4wNzE4NyAxMC40MzM5TDMuNTEyNDUgOS41MzI5M0MzLjQxMDQ5IDkuNDc2MzMgMy4zNzY0NyA5LjM1NzQxIDMuNDEwNzUgOS4yNTY3OUwzLjg2MzQ3IDguMTQwOTNMMy42MTc0OSA3Ljc3NDg4TDMuNDIzNDcgNy4zNzg4M0wyLjIzMDc1IDcuMjEyOTdDMi4xMjY0NyA3LjE5MjM1IDIuMDQwNDkgNy4xMDM0MiAyLjA0MjQ1IDYuOTg2ODJMMi4wNDE4NyA1LjE4NTgyQzIuMDQzODMgNS4wNjkyMiAyLjExOTA5IDQuOTc5NTggMi4yMTcwNCA0Ljk2OTIyTDMuNDIwNjUgNC43OTM5M0wzLjg2NzQ5IDQuMDI3ODhMMy40MTEwNSAyLjkxNzMxQzMuMzczMzcgMi44MTIwNCAzLjQxMTMxIDIuNjk3NzYgMy41MTUyMyAyLjYzNzc2TDUuMDc0MDggMS43Mzc3NkM1LjE2OTM0IDEuNjgyNzYgNS4yODcyOSAxLjcwNzA0IDUuMzU5NjEgMS43OTIzMUw2LjExOTE1IDIuNzI3ODhMNi45ODAwMSAyLjczODkzTDcuNzI0OTYgMS43ODkyMkM3Ljc5MTU2IDEuNzA0NTggNy45MTU0OCAxLjY3OTIyIDguMDA4NzkgMS43NDA4Mkw5LjU2ODIxIDIuNjQxODJDOS42NzAxNyAyLjY5ODQyIDkuNzEyODUgMi44MTIzNCA5LjY4NzIzIDIuOTA3OTdMOS4yMTcxOCA0LjAzMzgzTDkuNDYzMTYgNC4zOTk4OEw5LjY1NzE4IDQuNzk1OTNaIi8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-caret-down-empty-thin: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPgoJCTxwb2x5Z29uIGNsYXNzPSJzdDEiIHBvaW50cz0iOS45LDEzLjYgMy42LDcuNCA0LjQsNi42IDkuOSwxMi4yIDE1LjQsNi43IDE2LjEsNy40ICIvPgoJPC9nPgo8L3N2Zz4K);
  --jp-icon-caret-down-empty: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiIHNoYXBlLXJlbmRlcmluZz0iZ2VvbWV0cmljUHJlY2lzaW9uIj4KICAgIDxwYXRoIGQ9Ik01LjIsNS45TDksOS43bDMuOC0zLjhsMS4yLDEuMmwtNC45LDVsLTQuOS01TDUuMiw1Ljl6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-caret-down: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiIHNoYXBlLXJlbmRlcmluZz0iZ2VvbWV0cmljUHJlY2lzaW9uIj4KICAgIDxwYXRoIGQ9Ik01LjIsNy41TDksMTEuMmwzLjgtMy44SDUuMnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-caret-left: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPgoJCTxwYXRoIGQ9Ik0xMC44LDEyLjhMNy4xLDlsMy44LTMuOGwwLDcuNkgxMC44eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-caret-right: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiIHNoYXBlLXJlbmRlcmluZz0iZ2VvbWV0cmljUHJlY2lzaW9uIj4KICAgIDxwYXRoIGQ9Ik03LjIsNS4yTDEwLjksOWwtMy44LDMuOFY1LjJINy4yeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-caret-up-empty-thin: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPgoJCTxwb2x5Z29uIGNsYXNzPSJzdDEiIHBvaW50cz0iMTUuNCwxMy4zIDkuOSw3LjcgNC40LDEzLjIgMy42LDEyLjUgOS45LDYuMyAxNi4xLDEyLjYgIi8+Cgk8L2c+Cjwvc3ZnPgo=);
  --jp-icon-caret-up: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPgoJCTxwYXRoIGQ9Ik01LjIsMTAuNUw5LDYuOGwzLjgsMy44SDUuMnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-case-sensitive: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KICA8ZyBjbGFzcz0ianAtaWNvbjIiIGZpbGw9IiM0MTQxNDEiPgogICAgPHJlY3QgeD0iMiIgeT0iMiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+CiAgPC9nPgogIDxnIGNsYXNzPSJqcC1pY29uLWFjY2VudDIiIGZpbGw9IiNGRkYiPgogICAgPHBhdGggZD0iTTcuNiw4aDAuOWwzLjUsOGgtMS4xTDEwLDE0SDZsLTAuOSwySDRMNy42LDh6IE04LDkuMUw2LjQsMTNoMy4yTDgsOS4xeiIvPgogICAgPHBhdGggZD0iTTE2LjYsOS44Yy0wLjIsMC4xLTAuNCwwLjEtMC43LDAuMWMtMC4yLDAtMC40LTAuMS0wLjYtMC4yYy0wLjEtMC4xLTAuMi0wLjQtMC4yLTAuNyBjLTAuMywwLjMtMC42LDAuNS0wLjksMC43Yy0wLjMsMC4xLTAuNywwLjItMS4xLDAuMmMtMC4zLDAtMC41LDAtMC43LTAuMWMtMC4yLTAuMS0wLjQtMC4yLTAuNi0wLjNjLTAuMi0wLjEtMC4zLTAuMy0wLjQtMC41IGMtMC4xLTAuMi0wLjEtMC40LTAuMS0wLjdjMC0wLjMsMC4xLTAuNiwwLjItMC44YzAuMS0wLjIsMC4zLTAuNCwwLjQtMC41QzEyLDcsMTIuMiw2LjksMTIuNSw2LjhjMC4yLTAuMSwwLjUtMC4xLDAuNy0wLjIgYzAuMy0wLjEsMC41LTAuMSwwLjctMC4xYzAuMiwwLDAuNC0wLjEsMC42LTAuMWMwLjIsMCwwLjMtMC4xLDAuNC0wLjJjMC4xLTAuMSwwLjItMC4yLDAuMi0wLjRjMC0xLTEuMS0xLTEuMy0xIGMtMC40LDAtMS40LDAtMS40LDEuMmgtMC45YzAtMC40LDAuMS0wLjcsMC4yLTFjMC4xLTAuMiwwLjMtMC40LDAuNS0wLjZjMC4yLTAuMiwwLjUtMC4zLDAuOC0wLjNDMTMuMyw0LDEzLjYsNCwxMy45LDQgYzAuMywwLDAuNSwwLDAuOCwwLjFjMC4zLDAsMC41LDAuMSwwLjcsMC4yYzAuMiwwLjEsMC40LDAuMywwLjUsMC41QzE2LDUsMTYsNS4yLDE2LDUuNnYyLjljMCwwLjIsMCwwLjQsMCwwLjUgYzAsMC4xLDAuMSwwLjIsMC4zLDAuMmMwLjEsMCwwLjIsMCwwLjMsMFY5Ljh6IE0xNS4yLDYuOWMtMS4yLDAuNi0zLjEsMC4yLTMuMSwxLjRjMCwxLjQsMy4xLDEsMy4xLTAuNVY2Ljl6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-check: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIj4KICAgIDxwYXRoIGQ9Ik05IDE2LjE3TDQuODMgMTJsLTEuNDIgMS40MUw5IDE5IDIxIDdsLTEuNDEtMS40MXoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-circle-empty: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEyIDJDNi40NyAyIDIgNi40NyAyIDEyczQuNDcgMTAgMTAgMTAgMTAtNC40NyAxMC0xMFMxNy41MyAyIDEyIDJ6bTAgMThjLTQuNDEgMC04LTMuNTktOC04czMuNTktOCA4LTggOCAzLjU5IDggOC0zLjU5IDgtOCA4eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-circle: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTggMTgiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPGNpcmNsZSBjeD0iOSIgY3k9IjkiIHI9IjgiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-clear: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8bWFzayBpZD0iZG9udXRIb2xlIj4KICAgIDxyZWN0IHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgZmlsbD0id2hpdGUiIC8+CiAgICA8Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSI4IiBmaWxsPSJibGFjayIvPgogIDwvbWFzaz4KCiAgPGcgY2xhc3M9ImpwLWljb24zIiBmaWxsPSIjNjE2MTYxIj4KICAgIDxyZWN0IGhlaWdodD0iMTgiIHdpZHRoPSIyIiB4PSIxMSIgeT0iMyIgdHJhbnNmb3JtPSJyb3RhdGUoMzE1LCAxMiwgMTIpIi8+CiAgICA8Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSIxMCIgbWFzaz0idXJsKCNkb251dEhvbGUpIi8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-close: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbi1ub25lIGpwLWljb24tc2VsZWN0YWJsZS1pbnZlcnNlIGpwLWljb24zLWhvdmVyIiBmaWxsPSJub25lIj4KICAgIDxjaXJjbGUgY3g9IjEyIiBjeT0iMTIiIHI9IjExIi8+CiAgPC9nPgoKICA8ZyBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIGpwLWljb24tYWNjZW50Mi1ob3ZlciIgZmlsbD0iIzYxNjE2MSI+CiAgICA8cGF0aCBkPSJNMTkgNi40MUwxNy41OSA1IDEyIDEwLjU5IDYuNDEgNSA1IDYuNDEgMTAuNTkgMTIgNSAxNy41OSA2LjQxIDE5IDEyIDEzLjQxIDE3LjU5IDE5IDE5IDE3LjU5IDEzLjQxIDEyeiIvPgogIDwvZz4KCiAgPGcgY2xhc3M9ImpwLWljb24tbm9uZSBqcC1pY29uLWJ1c3kiIGZpbGw9Im5vbmUiPgogICAgPGNpcmNsZSBjeD0iMTIiIGN5PSIxMiIgcj0iNyIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-code-check: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBzaGFwZS1yZW5kZXJpbmc9Imdlb21ldHJpY1ByZWNpc2lvbiI+CiAgICA8cGF0aCBkPSJNNi41OSwzLjQxTDIsOEw2LjU5LDEyLjZMOCwxMS4xOEw0LjgyLDhMOCw0LjgyTDYuNTksMy40MU0xMi40MSwzLjQxTDExLDQuODJMMTQuMTgsOEwxMSwxMS4xOEwxMi40MSwxMi42TDE3LDhMMTIuNDEsMy40MU0yMS41OSwxMS41OUwxMy41LDE5LjY4TDkuODMsMTZMOC40MiwxNy40MUwxMy41LDIyLjVMMjMsMTNMMjEuNTksMTEuNTlaIiAvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-code: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjIiIGhlaWdodD0iMjIiIHZpZXdCb3g9IjAgMCAyOCAyOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CgkJPHBhdGggZD0iTTExLjQgMTguNkw2LjggMTRMMTEuNCA5LjRMMTAgOEw0IDE0TDEwIDIwTDExLjQgMTguNlpNMTYuNiAxOC42TDIxLjIgMTRMMTYuNiA5LjRMMTggOEwyNCAxNEwxOCAyMEwxNi42IDE4LjZWMTguNloiLz4KCTwvZz4KPC9zdmc+Cg==);
  --jp-icon-collapse-all: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGgKICAgICAgICAgICAgZD0iTTggMmMxIDAgMTEgMCAxMiAwczIgMSAyIDJjMCAxIDAgMTEgMCAxMnMwIDItMiAyQzIwIDE0IDIwIDQgMjAgNFMxMCA0IDYgNGMwLTIgMS0yIDItMnoiIC8+CiAgICAgICAgPHBhdGgKICAgICAgICAgICAgZD0iTTE4IDhjMC0xLTEtMi0yLTJTNSA2IDQgNnMtMiAxLTIgMmMwIDEgMCAxMSAwIDEyczEgMiAyIDJjMSAwIDExIDAgMTIgMHMyLTEgMi0yYzAtMSAwLTExIDAtMTJ6bS0yIDB2MTJINFY4eiIgLz4KICAgICAgICA8cGF0aCBkPSJNNiAxM3YyaDh2LTJ6IiAvPgogICAgPC9nPgo8L3N2Zz4K);
  --jp-icon-console: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwMCAyMDAiPgogIDxnIGNsYXNzPSJqcC1jb25zb2xlLWljb24tYmFja2dyb3VuZC1jb2xvciBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiMwMjg4RDEiPgogICAgPHBhdGggZD0iTTIwIDE5LjhoMTYwdjE1OS45SDIweiIvPgogIDwvZz4KICA8ZyBjbGFzcz0ianAtY29uc29sZS1pY29uLWNvbG9yIGpwLWljb24tc2VsZWN0YWJsZS1pbnZlcnNlIiBmaWxsPSIjZmZmIj4KICAgIDxwYXRoIGQ9Ik0xMDUgMTI3LjNoNDB2MTIuOGgtNDB6TTUxLjEgNzdMNzQgOTkuOWwtMjMuMyAyMy4zIDEwLjUgMTAuNSAyMy4zLTIzLjNMOTUgOTkuOSA4NC41IDg5LjQgNjEuNiA2Ni41eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-copy: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTggMTgiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTExLjksMUgzLjJDMi40LDEsMS43LDEuNywxLjcsMi41djEwLjJoMS41VjIuNWg4LjdWMXogTTE0LjEsMy45aC04Yy0wLjgsMC0xLjUsMC43LTEuNSwxLjV2MTAuMmMwLDAuOCwwLjcsMS41LDEuNSwxLjVoOCBjMC44LDAsMS41LTAuNywxLjUtMS41VjUuNEMxNS41LDQuNiwxNC45LDMuOSwxNC4xLDMuOXogTTE0LjEsMTUuNWgtOFY1LjRoOFYxNS41eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-copyright: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDI0IDI0IiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCI+CiAgPGcgY2xhc3M9ImpwLWljb24zIiBmaWxsPSIjNjE2MTYxIj4KICAgIDxwYXRoIGQ9Ik0xMS44OCw5LjE0YzEuMjgsMC4wNiwxLjYxLDEuMTUsMS42MywxLjY2aDEuNzljLTAuMDgtMS45OC0xLjQ5LTMuMTktMy40NS0zLjE5QzkuNjQsNy42MSw4LDksOCwxMi4xNCBjMCwxLjk0LDAuOTMsNC4yNCwzLjg0LDQuMjRjMi4yMiwwLDMuNDEtMS42NSwzLjQ0LTIuOTVoLTEuNzljLTAuMDMsMC41OS0wLjQ1LDEuMzgtMS42MywxLjQ0QzEwLjU1LDE0LjgzLDEwLDEzLjgxLDEwLDEyLjE0IEMxMCw5LjI1LDExLjI4LDkuMTYsMTEuODgsOS4xNHogTTEyLDJDNi40OCwyLDIsNi40OCwyLDEyczQuNDgsMTAsMTAsMTBzMTAtNC40OCwxMC0xMFMxNy41MiwyLDEyLDJ6IE0xMiwyMGMtNC40MSwwLTgtMy41OS04LTggczMuNTktOCw4LThzOCwzLjU5LDgsOFMxNi40MSwyMCwxMiwyMHoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-cut: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTkuNjQgNy42NGMuMjMtLjUuMzYtMS4wNS4zNi0xLjY0IDAtMi4yMS0xLjc5LTQtNC00UzIgMy43OSAyIDZzMS43OSA0IDQgNGMuNTkgMCAxLjE0LS4xMyAxLjY0LS4zNkwxMCAxMmwtMi4zNiAyLjM2QzcuMTQgMTQuMTMgNi41OSAxNCA2IDE0Yy0yLjIxIDAtNCAxLjc5LTQgNHMxLjc5IDQgNCA0IDQtMS43OSA0LTRjMC0uNTktLjEzLTEuMTQtLjM2LTEuNjRMMTIgMTRsNyA3aDN2LTFMOS42NCA3LjY0ek02IDhjLTEuMSAwLTItLjg5LTItMnMuOS0yIDItMiAyIC44OSAyIDItLjkgMi0yIDJ6bTAgMTJjLTEuMSAwLTItLjg5LTItMnMuOS0yIDItMiAyIC44OSAyIDItLjkgMi0yIDJ6bTYtNy41Yy0uMjggMC0uNS0uMjItLjUtLjVzLjIyLS41LjUtLjUuNS4yMi41LjUtLjIyLjUtLjUuNXpNMTkgM2wtNiA2IDIgMiA3LTdWM3oiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-delete: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CiAgICA8cGF0aCBkPSJNMCAwaDI0djI0SDB6IiBmaWxsPSJub25lIiAvPgogICAgPHBhdGggY2xhc3M9ImpwLWljb24zIiBmaWxsPSIjNjI2MjYyIiBkPSJNNiAxOWMwIDEuMS45IDIgMiAyaDhjMS4xIDAgMi0uOSAyLTJWN0g2djEyek0xOSA0aC0zLjVsLTEtMWgtNWwtMSAxSDV2MmgxNFY0eiIgLz4KPC9zdmc+Cg==);
  --jp-icon-download: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE5IDloLTRWM0g5djZINWw3IDcgNy03ek01IDE4djJoMTR2LTJINXoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-duplicate: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggY2xhc3M9ImpwLWljb24zIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTIuNzk5OTggMC44NzVIOC44OTU4MkM5LjIwMDYxIDAuODc1IDkuNDQ5OTggMS4xMzkxNCA5LjQ0OTk4IDEuNDYxOThDOS40NDk5OCAxLjc4NDgyIDkuMjAwNjEgMi4wNDg5NiA4Ljg5NTgyIDIuMDQ4OTZIMy4zNTQxNUMzLjA0OTM2IDIuMDQ4OTYgMi43OTk5OCAyLjMxMzEgMi43OTk5OCAyLjYzNTk0VjkuNjc5NjlDMi43OTk5OCAxMC4wMDI1IDIuNTUwNjEgMTAuMjY2NyAyLjI0NTgyIDEwLjI2NjdDMS45NDEwMyAxMC4yNjY3IDEuNjkxNjUgMTAuMDAyNSAxLjY5MTY1IDkuNjc5NjlWMi4wNDg5NkMxLjY5MTY1IDEuNDAzMjggMi4xOTA0IDAuODc1IDIuNzk5OTggMC44NzVaTTUuMzY2NjUgMTEuOVY0LjU1SDExLjA4MzNWMTEuOUg1LjM2NjY1Wk00LjE0MTY1IDQuMTQxNjdDNC4xNDE2NSAzLjY5MDYzIDQuNTA3MjggMy4zMjUgNC45NTgzMiAzLjMyNUgxMS40OTE3QzExLjk0MjcgMy4zMjUgMTIuMzA4MyAzLjY5MDYzIDEyLjMwODMgNC4xNDE2N1YxMi4zMDgzQzEyLjMwODMgMTIuNzU5NCAxMS45NDI3IDEzLjEyNSAxMS40OTE3IDEzLjEyNUg0Ljk1ODMyQzQuNTA3MjggMTMuMTI1IDQuMTQxNjUgMTIuNzU5NCA0LjE0MTY1IDEyLjMwODNWNC4xNDE2N1oiIGZpbGw9IiM2MTYxNjEiLz4KPHBhdGggY2xhc3M9ImpwLWljb24zIiBkPSJNOS40MzU3NCA4LjI2NTA3SDguMzY0MzFWOS4zMzY1QzguMzY0MzEgOS40NTQzNSA4LjI2Nzg4IDkuNTUwNzggOC4xNTAwMiA5LjU1MDc4QzguMDMyMTcgOS41NTA3OCA3LjkzNTc0IDkuNDU0MzUgNy45MzU3NCA5LjMzNjVWOC4yNjUwN0g2Ljg2NDMxQzYuNzQ2NDUgOC4yNjUwNyA2LjY1MDAyIDguMTY4NjQgNi42NTAwMiA4LjA1MDc4QzYuNjUwMDIgNy45MzI5MiA2Ljc0NjQ1IDcuODM2NSA2Ljg2NDMxIDcuODM2NUg3LjkzNTc0VjYuNzY1MDdDNy45MzU3NCA2LjY0NzIxIDguMDMyMTcgNi41NTA3OCA4LjE1MDAyIDYuNTUwNzhDOC4yNjc4OCA2LjU1MDc4IDguMzY0MzEgNi42NDcyMSA4LjM2NDMxIDYuNzY1MDdWNy44MzY1SDkuNDM1NzRDOS41NTM2IDcuODM2NSA5LjY1MDAyIDcuOTMyOTIgOS42NTAwMiA4LjA1MDc4QzkuNjUwMDIgOC4xNjg2NCA5LjU1MzYgOC4yNjUwNyA5LjQzNTc0IDguMjY1MDdaIiBmaWxsPSIjNjE2MTYxIiBzdHJva2U9IiM2MTYxNjEiIHN0cm9rZS13aWR0aD0iMC41Ii8+Cjwvc3ZnPgo=);
  --jp-icon-edit: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTMgMTcuMjVWMjFoMy43NUwxNy44MSA5Ljk0bC0zLjc1LTMuNzVMMyAxNy4yNXpNMjAuNzEgNy4wNGMuMzktLjM5LjM5LTEuMDIgMC0xLjQxbC0yLjM0LTIuMzRjLS4zOS0uMzktMS4wMi0uMzktMS40MSAwbC0xLjgzIDEuODMgMy43NSAzLjc1IDEuODMtMS44M3oiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-ellipses: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPGNpcmNsZSBjeD0iNSIgY3k9IjEyIiByPSIyIi8+CiAgICA8Y2lyY2xlIGN4PSIxMiIgY3k9IjEyIiByPSIyIi8+CiAgICA8Y2lyY2xlIGN4PSIxOSIgY3k9IjEyIiByPSIyIi8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-error: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KPGcgY2xhc3M9ImpwLWljb24zIiBmaWxsPSIjNjE2MTYxIj48Y2lyY2xlIGN4PSIxMiIgY3k9IjE5IiByPSIyIi8+PHBhdGggZD0iTTEwIDNoNHYxMmgtNHoiLz48L2c+CjxwYXRoIGZpbGw9Im5vbmUiIGQ9Ik0wIDBoMjR2MjRIMHoiLz4KPC9zdmc+Cg==);
  --jp-icon-expand-all: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGgKICAgICAgICAgICAgZD0iTTggMmMxIDAgMTEgMCAxMiAwczIgMSAyIDJjMCAxIDAgMTEgMCAxMnMwIDItMiAyQzIwIDE0IDIwIDQgMjAgNFMxMCA0IDYgNGMwLTIgMS0yIDItMnoiIC8+CiAgICAgICAgPHBhdGgKICAgICAgICAgICAgZD0iTTE4IDhjMC0xLTEtMi0yLTJTNSA2IDQgNnMtMiAxLTIgMmMwIDEgMCAxMSAwIDEyczEgMiAyIDJjMSAwIDExIDAgMTIgMHMyLTEgMi0yYzAtMSAwLTExIDAtMTJ6bS0yIDB2MTJINFY4eiIgLz4KICAgICAgICA8cGF0aCBkPSJNMTEgMTBIOXYzSDZ2MmgzdjNoMnYtM2gzdi0yaC0zeiIgLz4KICAgIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-extension: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTIwLjUgMTFIMTlWN2MwLTEuMS0uOS0yLTItMmgtNFYzLjVDMTMgMi4xMiAxMS44OCAxIDEwLjUgMVM4IDIuMTIgOCAzLjVWNUg0Yy0xLjEgMC0xLjk5LjktMS45OSAydjMuOEgzLjVjMS40OSAwIDIuNyAxLjIxIDIuNyAyLjdzLTEuMjEgMi43LTIuNyAyLjdIMlYyMGMwIDEuMS45IDIgMiAyaDMuOHYtMS41YzAtMS40OSAxLjIxLTIuNyAyLjctMi43IDEuNDkgMCAyLjcgMS4yMSAyLjcgMi43VjIySDE3YzEuMSAwIDItLjkgMi0ydi00aDEuNWMxLjM4IDAgMi41LTEuMTIgMi41LTIuNVMyMS44OCAxMSAyMC41IDExeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-fast-forward: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTQgMThsOC41LTZMNCA2djEyem05LTEydjEybDguNS02TDEzIDZ6Ii8+CiAgICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-file-upload: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTkgMTZoNnYtNmg0bC03LTctNyA3aDR6bS00IDJoMTR2Mkg1eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-file: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTkuMyA4LjJsLTUuNS01LjVjLS4zLS4zLS43LS41LTEuMi0uNUgzLjljLS44LjEtMS42LjktMS42IDEuOHYxNC4xYzAgLjkuNyAxLjYgMS42IDEuNmgxNC4yYy45IDAgMS42LS43IDEuNi0xLjZWOS40Yy4xLS41LS4xLS45LS40LTEuMnptLTUuOC0zLjNsMy40IDMuNmgtMy40VjQuOXptMy45IDEyLjdINC43Yy0uMSAwLS4yIDAtLjItLjJWNC43YzAtLjIuMS0uMy4yLS4zaDcuMnY0LjRzMCAuOC4zIDEuMWMuMy4zIDEuMS4zIDEuMS4zaDQuM3Y3LjJzLS4xLjItLjIuMnoiLz4KPC9zdmc+Cg==);
  --jp-icon-filter-dot: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiNGRkYiPgogICAgPHBhdGggZD0iTTE0LDEyVjE5Ljg4QzE0LjA0LDIwLjE4IDEzLjk0LDIwLjUgMTMuNzEsMjAuNzFDMTMuMzIsMjEuMSAxMi42OSwyMS4xIDEyLjMsMjAuNzFMMTAuMjksMTguN0MxMC4wNiwxOC40NyA5Ljk2LDE4LjE2IDEwLDE3Ljg3VjEySDkuOTdMNC4yMSw0LjYyQzMuODcsNC4xOSAzLjk1LDMuNTYgNC4zOCwzLjIyQzQuNTcsMy4wOCA0Ljc4LDMgNSwzVjNIMTlWM0MxOS4yMiwzIDE5LjQzLDMuMDggMTkuNjIsMy4yMkMyMC4wNSwzLjU2IDIwLjEzLDQuMTkgMTkuNzksNC42MkwxNC4wMywxMkgxNFoiIC8+CiAgPC9nPgogIDxnIGNsYXNzPSJqcC1pY29uLWRvdCIgZmlsbD0iI0ZGRiI+CiAgICA8Y2lyY2xlIGN4PSIxOCIgY3k9IjE3IiByPSIzIj48L2NpcmNsZT4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-filter-list: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEwIDE4aDR2LTJoLTR2MnpNMyA2djJoMThWNkgzem0zIDdoMTJ2LTJINnYyeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-filter: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiNGRkYiPgogICAgPHBhdGggZD0iTTE0LDEyVjE5Ljg4QzE0LjA0LDIwLjE4IDEzLjk0LDIwLjUgMTMuNzEsMjAuNzFDMTMuMzIsMjEuMSAxMi42OSwyMS4xIDEyLjMsMjAuNzFMMTAuMjksMTguN0MxMC4wNiwxOC40NyA5Ljk2LDE4LjE2IDEwLDE3Ljg3VjEySDkuOTdMNC4yMSw0LjYyQzMuODcsNC4xOSAzLjk1LDMuNTYgNC4zOCwzLjIyQzQuNTcsMy4wOCA0Ljc4LDMgNSwzVjNIMTlWM0MxOS4yMiwzIDE5LjQzLDMuMDggMTkuNjIsMy4yMkMyMC4wNSwzLjU2IDIwLjEzLDQuMTkgMTkuNzksNC42MkwxNC4wMywxMkgxNFoiIC8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-folder-favorite: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDI0IDI0IiB3aWR0aD0iMjRweCIgZmlsbD0iIzAwMDAwMCI+CiAgPHBhdGggZD0iTTAgMGgyNHYyNEgwVjB6IiBmaWxsPSJub25lIi8+PHBhdGggY2xhc3M9ImpwLWljb24zIGpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iIzYxNjE2MSIgZD0iTTIwIDZoLThsLTItMkg0Yy0xLjEgMC0yIC45LTIgMnYxMmMwIDEuMS45IDIgMiAyaDE2YzEuMSAwIDItLjkgMi0yVjhjMC0xLjEtLjktMi0yLTJ6bS0yLjA2IDExTDE1IDE1LjI4IDEyLjA2IDE3bC43OC0zLjMzLTIuNTktMi4yNCAzLjQxLS4yOUwxNSA4bDEuMzQgMy4xNCAzLjQxLjI5LTIuNTkgMi4yNC43OCAzLjMzeiIvPgo8L3N2Zz4K);
  --jp-icon-folder: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTAgNEg0Yy0xLjEgMC0xLjk5LjktMS45OSAyTDIgMThjMCAxLjEuOSAyIDIgMmgxNmMxLjEgMCAyLS45IDItMlY4YzAtMS4xLS45LTItMi0yaC04bC0yLTJ6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-home: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjRweCIgdmlld0JveD0iMCAwIDI0IDI0IiB3aWR0aD0iMjRweCIgZmlsbD0iIzAwMDAwMCI+CiAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPjxwYXRoIGNsYXNzPSJqcC1pY29uMyBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiM2MTYxNjEiIGQ9Ik0xMCAyMHYtNmg0djZoNXYtOGgzTDEyIDMgMiAxMmgzdjh6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-html5: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDUxMiA1MTIiPgogIDxwYXRoIGNsYXNzPSJqcC1pY29uMCBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiMwMDAiIGQ9Ik0xMDguNCAwaDIzdjIyLjhoMjEuMlYwaDIzdjY5aC0yM1Y0NmgtMjF2MjNoLTIzLjJNMjA2IDIzaC0yMC4zVjBoNjMuN3YyM0gyMjl2NDZoLTIzbTUzLjUtNjloMjQuMWwxNC44IDI0LjNMMzEzLjIgMGgyNC4xdjY5aC0yM1YzNC44bC0xNi4xIDI0LjgtMTYuMS0yNC44VjY5aC0yMi42bTg5LjItNjloMjN2NDYuMmgzMi42VjY5aC01NS42Ii8+CiAgPHBhdGggY2xhc3M9ImpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iI2U0NGQyNiIgZD0iTTEwNy42IDQ3MWwtMzMtMzcwLjRoMzYyLjhsLTMzIDM3MC4yTDI1NS43IDUxMiIvPgogIDxwYXRoIGNsYXNzPSJqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiNmMTY1MjkiIGQ9Ik0yNTYgNDgwLjVWMTMxaDE0OC4zTDM3NiA0NDciLz4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1zZWxlY3RhYmxlLWludmVyc2UiIGZpbGw9IiNlYmViZWIiIGQ9Ik0xNDIgMTc2LjNoMTE0djQ1LjRoLTY0LjJsNC4yIDQ2LjVoNjB2NDUuM0gxNTQuNG0yIDIyLjhIMjAybDMuMiAzNi4zIDUwLjggMTMuNnY0Ny40bC05My4yLTI2Ii8+CiAgPHBhdGggY2xhc3M9ImpwLWljb24tc2VsZWN0YWJsZS1pbnZlcnNlIiBmaWxsPSIjZmZmIiBkPSJNMzY5LjYgMTc2LjNIMjU1Ljh2NDUuNGgxMDkuNm0tNC4xIDQ2LjVIMjU1Ljh2NDUuNGg1NmwtNS4zIDU5LTUwLjcgMTMuNnY0Ny4ybDkzLTI1LjgiLz4KPC9zdmc+Cg==);
  --jp-icon-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1icmFuZDQganAtaWNvbi1zZWxlY3RhYmxlLWludmVyc2UiIGZpbGw9IiNGRkYiIGQ9Ik0yLjIgMi4yaDE3LjV2MTcuNUgyLjJ6Ii8+CiAgPHBhdGggY2xhc3M9ImpwLWljb24tYnJhbmQwIGpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iIzNGNTFCNSIgZD0iTTIuMiAyLjJ2MTcuNWgxNy41bC4xLTE3LjVIMi4yem0xMi4xIDIuMmMxLjIgMCAyLjIgMSAyLjIgMi4ycy0xIDIuMi0yLjIgMi4yLTIuMi0xLTIuMi0yLjIgMS0yLjIgMi4yLTIuMnpNNC40IDE3LjZsMy4zLTguOCAzLjMgNi42IDIuMi0zLjIgNC40IDUuNEg0LjR6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-info: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDUwLjk3OCA1MC45NzgiPgoJPGcgY2xhc3M9ImpwLWljb24zIiBmaWxsPSIjNjE2MTYxIj4KCQk8cGF0aCBkPSJNNDMuNTIsNy40NThDMzguNzExLDIuNjQ4LDMyLjMwNywwLDI1LjQ4OSwwQzE4LjY3LDAsMTIuMjY2LDIuNjQ4LDcuNDU4LDcuNDU4CgkJCWMtOS45NDMsOS45NDEtOS45NDMsMjYuMTE5LDAsMzYuMDYyYzQuODA5LDQuODA5LDExLjIxMiw3LjQ1NiwxOC4wMzEsNy40NThjMCwwLDAuMDAxLDAsMC4wMDIsMAoJCQljNi44MTYsMCwxMy4yMjEtMi42NDgsMTguMDI5LTcuNDU4YzQuODA5LTQuODA5LDcuNDU3LTExLjIxMiw3LjQ1Ny0xOC4wM0M1MC45NzcsMTguNjcsNDguMzI4LDEyLjI2Niw0My41Miw3LjQ1OHoKCQkJIE00Mi4xMDYsNDIuMTA1Yy00LjQzMiw0LjQzMS0xMC4zMzIsNi44NzItMTYuNjE1LDYuODcyaC0wLjAwMmMtNi4yODUtMC4wMDEtMTIuMTg3LTIuNDQxLTE2LjYxNy02Ljg3MgoJCQljLTkuMTYyLTkuMTYzLTkuMTYyLTI0LjA3MSwwLTMzLjIzM0MxMy4zMDMsNC40NCwxOS4yMDQsMiwyNS40ODksMmM2LjI4NCwwLDEyLjE4NiwyLjQ0LDE2LjYxNyw2Ljg3MgoJCQljNC40MzEsNC40MzEsNi44NzEsMTAuMzMyLDYuODcxLDE2LjYxN0M0OC45NzcsMzEuNzcyLDQ2LjUzNiwzNy42NzUsNDIuMTA2LDQyLjEwNXoiLz4KCQk8cGF0aCBkPSJNMjMuNTc4LDMyLjIxOGMtMC4wMjMtMS43MzQsMC4xNDMtMy4wNTksMC40OTYtMy45NzJjMC4zNTMtMC45MTMsMS4xMS0xLjk5NywyLjI3Mi0zLjI1MwoJCQljMC40NjgtMC41MzYsMC45MjMtMS4wNjIsMS4zNjctMS41NzVjMC42MjYtMC43NTMsMS4xMDQtMS40NzgsMS40MzYtMi4xNzVjMC4zMzEtMC43MDcsMC40OTUtMS41NDEsMC40OTUtMi41CgkJCWMwLTEuMDk2LTAuMjYtMi4wODgtMC43NzktMi45NzljLTAuNTY1LTAuODc5LTEuNTAxLTEuMzM2LTIuODA2LTEuMzY5Yy0xLjgwMiwwLjA1Ny0yLjk4NSwwLjY2Ny0zLjU1LDEuODMyCgkJCWMtMC4zMDEsMC41MzUtMC41MDMsMS4xNDEtMC42MDcsMS44MTRjLTAuMTM5LDAuNzA3LTAuMjA3LDEuNDMyLTAuMjA3LDIuMTc0aC0yLjkzN2MtMC4wOTEtMi4yMDgsMC40MDctNC4xMTQsMS40OTMtNS43MTkKCQkJYzEuMDYyLTEuNjQsMi44NTUtMi40ODEsNS4zNzgtMi41MjdjMi4xNiwwLjAyMywzLjg3NCwwLjYwOCw1LjE0MSwxLjc1OGMxLjI3OCwxLjE2LDEuOTI5LDIuNzY0LDEuOTUsNC44MTEKCQkJYzAsMS4xNDItMC4xMzcsMi4xMTEtMC40MSwyLjkxMWMtMC4zMDksMC44NDUtMC43MzEsMS41OTMtMS4yNjgsMi4yNDNjLTAuNDkyLDAuNjUtMS4wNjgsMS4zMTgtMS43MywyLjAwMgoJCQljLTAuNjUsMC42OTctMS4zMTMsMS40NzktMS45ODcsMi4zNDZjLTAuMjM5LDAuMzc3LTAuNDI5LDAuNzc3LTAuNTY1LDEuMTk5Yy0wLjE2LDAuOTU5LTAuMjE3LDEuOTUxLTAuMTcxLDIuOTc5CgkJCUMyNi41ODksMzIuMjE4LDIzLjU3OCwzMi4yMTgsMjMuNTc4LDMyLjIxOHogTTIzLjU3OCwzOC4yMnYtMy40ODRoMy4wNzZ2My40ODRIMjMuNTc4eiIvPgoJPC9nPgo8L3N2Zz4K);
  --jp-icon-inspector: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaW5zcGVjdG9yLWljb24tY29sb3IganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMjAgNEg0Yy0xLjEgMC0xLjk5LjktMS45OSAyTDIgMThjMCAxLjEuOSAyIDIgMmgxNmMxLjEgMCAyLS45IDItMlY2YzAtMS4xLS45LTItMi0yem0tNSAxNEg0di00aDExdjR6bTAtNUg0VjloMTF2NHptNSA1aC00VjloNHY5eiIvPgo8L3N2Zz4K);
  --jp-icon-json: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtanNvbi1pY29uLWNvbG9yIGpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iI0Y5QTgyNSI+CiAgICA8cGF0aCBkPSJNMjAuMiAxMS44Yy0xLjYgMC0xLjcuNS0xLjcgMSAwIC40LjEuOS4xIDEuMy4xLjUuMS45LjEgMS4zIDAgMS43LTEuNCAyLjMtMy41IDIuM2gtLjl2LTEuOWguNWMxLjEgMCAxLjQgMCAxLjQtLjggMC0uMyAwLS42LS4xLTEgMC0uNC0uMS0uOC0uMS0xLjIgMC0xLjMgMC0xLjggMS4zLTItMS4zLS4yLTEuMy0uNy0xLjMtMiAwLS40LjEtLjguMS0xLjIuMS0uNC4xLS43LjEtMSAwLS44LS40LS43LTEuNC0uOGgtLjVWNC4xaC45YzIuMiAwIDMuNS43IDMuNSAyLjMgMCAuNC0uMS45LS4xIDEuMy0uMS41LS4xLjktLjEgMS4zIDAgLjUuMiAxIDEuNyAxdjEuOHpNMS44IDEwLjFjMS42IDAgMS43LS41IDEuNy0xIDAtLjQtLjEtLjktLjEtMS4zLS4xLS41LS4xLS45LS4xLTEuMyAwLTEuNiAxLjQtMi4zIDMuNS0yLjNoLjl2MS45aC0uNWMtMSAwLTEuNCAwLTEuNC44IDAgLjMgMCAuNi4xIDEgMCAuMi4xLjYuMSAxIDAgMS4zIDAgMS44LTEuMyAyQzYgMTEuMiA2IDExLjcgNiAxM2MwIC40LS4xLjgtLjEgMS4yLS4xLjMtLjEuNy0uMSAxIDAgLjguMy44IDEuNC44aC41djEuOWgtLjljLTIuMSAwLTMuNS0uNi0zLjUtMi4zIDAtLjQuMS0uOS4xLTEuMy4xLS41LjEtLjkuMS0xLjMgMC0uNS0uMi0xLTEuNy0xdi0xLjl6Ii8+CiAgICA8Y2lyY2xlIGN4PSIxMSIgY3k9IjEzLjgiIHI9IjIuMSIvPgogICAgPGNpcmNsZSBjeD0iMTEiIGN5PSI4LjIiIHI9IjIuMSIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-julia: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDMyNSAzMDAiPgogIDxnIGNsYXNzPSJqcC1icmFuZDAganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjY2IzYzMzIj4KICAgIDxwYXRoIGQ9Ik0gMTUwLjg5ODQzOCAyMjUgQyAxNTAuODk4NDM4IDI2Ni40MjE4NzUgMTE3LjMyMDMxMiAzMDAgNzUuODk4NDM4IDMwMCBDIDM0LjQ3NjU2MiAzMDAgMC44OTg0MzggMjY2LjQyMTg3NSAwLjg5ODQzOCAyMjUgQyAwLjg5ODQzOCAxODMuNTc4MTI1IDM0LjQ3NjU2MiAxNTAgNzUuODk4NDM4IDE1MCBDIDExNy4zMjAzMTIgMTUwIDE1MC44OTg0MzggMTgzLjU3ODEyNSAxNTAuODk4NDM4IDIyNSIvPgogIDwvZz4KICA8ZyBjbGFzcz0ianAtYnJhbmQwIGpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iIzM4OTgyNiI+CiAgICA8cGF0aCBkPSJNIDIzNy41IDc1IEMgMjM3LjUgMTE2LjQyMTg3NSAyMDMuOTIxODc1IDE1MCAxNjIuNSAxNTAgQyAxMjEuMDc4MTI1IDE1MCA4Ny41IDExNi40MjE4NzUgODcuNSA3NSBDIDg3LjUgMzMuNTc4MTI1IDEyMS4wNzgxMjUgMCAxNjIuNSAwIEMgMjAzLjkyMTg3NSAwIDIzNy41IDMzLjU3ODEyNSAyMzcuNSA3NSIvPgogIDwvZz4KICA8ZyBjbGFzcz0ianAtYnJhbmQwIGpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iIzk1NThiMiI+CiAgICA8cGF0aCBkPSJNIDMyNC4xMDE1NjIgMjI1IEMgMzI0LjEwMTU2MiAyNjYuNDIxODc1IDI5MC41MjM0MzggMzAwIDI0OS4xMDE1NjIgMzAwIEMgMjA3LjY3OTY4OCAzMDAgMTc0LjEwMTU2MiAyNjYuNDIxODc1IDE3NC4xMDE1NjIgMjI1IEMgMTc0LjEwMTU2MiAxODMuNTc4MTI1IDIwNy42Nzk2ODggMTUwIDI0OS4xMDE1NjIgMTUwIEMgMjkwLjUyMzQzOCAxNTAgMzI0LjEwMTU2MiAxODMuNTc4MTI1IDMyNC4xMDE1NjIgMjI1Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-jupyter-favicon: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTUyIiBoZWlnaHQ9IjE2NSIgdmlld0JveD0iMCAwIDE1MiAxNjUiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgPGcgY2xhc3M9ImpwLWp1cHl0ZXItaWNvbi1jb2xvciIgZmlsbD0iI0YzNzcyNiI+CiAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjA3ODk0NywgMTEwLjU4MjkyNykiIGQ9Ik03NS45NDIyODQyLDI5LjU4MDQ1NjEgQzQzLjMwMjM5NDcsMjkuNTgwNDU2MSAxNC43OTY3ODMyLDE3LjY1MzQ2MzQgMCwwIEM1LjUxMDgzMjExLDE1Ljg0MDY4MjkgMTUuNzgxNTM4OSwyOS41NjY3NzMyIDI5LjM5MDQ5NDcsMzkuMjc4NDE3MSBDNDIuOTk5Nyw0OC45ODk4NTM3IDU5LjI3MzcsNTQuMjA2NzgwNSA3NS45NjA1Nzg5LDU0LjIwNjc4MDUgQzkyLjY0NzQ1NzksNTQuMjA2NzgwNSAxMDguOTIxNDU4LDQ4Ljk4OTg1MzcgMTIyLjUzMDY2MywzOS4yNzg0MTcxIEMxMzYuMTM5NDUzLDI5LjU2Njc3MzIgMTQ2LjQxMDI4NCwxNS44NDA2ODI5IDE1MS45MjExNTgsMCBDMTM3LjA4Nzg2OCwxNy42NTM0NjM0IDEwOC41ODI1ODksMjkuNTgwNDU2MSA3NS45NDIyODQyLDI5LjU4MDQ1NjEgTDc1Ljk0MjI4NDIsMjkuNTgwNDU2MSBaIiAvPgogICAgPHBhdGggdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMzczNjgsIDAuNzA0ODc4KSIgZD0iTTc1Ljk3ODQ1NzksMjQuNjI2NDA3MyBDMTA4LjYxODc2MywyNC42MjY0MDczIDEzNy4xMjQ0NTgsMzYuNTUzNDQxNSAxNTEuOTIxMTU4LDU0LjIwNjc4MDUgQzE0Ni40MTAyODQsMzguMzY2MjIyIDEzNi4xMzk0NTMsMjQuNjQwMTMxNyAxMjIuNTMwNjYzLDE0LjkyODQ4NzggQzEwOC45MjE0NTgsNS4yMTY4NDM5IDkyLjY0NzQ1NzksMCA3NS45NjA1Nzg5LDAgQzU5LjI3MzcsMCA0Mi45OTk3LDUuMjE2ODQzOSAyOS4zOTA0OTQ3LDE0LjkyODQ4NzggQzE1Ljc4MTUzODksMjQuNjQwMTMxNyA1LjUxMDgzMjExLDM4LjM2NjIyMiAwLDU0LjIwNjc4MDUgQzE0LjgzMzA4MTYsMzYuNTg5OTI5MyA0My4zMzg1Njg0LDI0LjYyNjQwNzMgNzUuOTc4NDU3OSwyNC42MjY0MDczIEw3NS45Nzg0NTc5LDI0LjYyNjQwNzMgWiIgLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-jupyter: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzkiIGhlaWdodD0iNTEiIHZpZXdCb3g9IjAgMCAzOSA1MSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTYzOCAtMjI4MSkiPgogICAgIDxnIGNsYXNzPSJqcC1qdXB5dGVyLWljb24tY29sb3IiIGZpbGw9IiNGMzc3MjYiPgogICAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjM5Ljc0IDIzMTEuOTgpIiBkPSJNIDE4LjI2NDYgNy4xMzQxMUMgMTAuNDE0NSA3LjEzNDExIDMuNTU4NzIgNC4yNTc2IDAgMEMgMS4zMjUzOSAzLjgyMDQgMy43OTU1NiA3LjEzMDgxIDcuMDY4NiA5LjQ3MzAzQyAxMC4zNDE3IDExLjgxNTIgMTQuMjU1NyAxMy4wNzM0IDE4LjI2OSAxMy4wNzM0QyAyMi4yODIzIDEzLjA3MzQgMjYuMTk2MyAxMS44MTUyIDI5LjQ2OTQgOS40NzMwM0MgMzIuNzQyNCA3LjEzMDgxIDM1LjIxMjYgMy44MjA0IDM2LjUzOCAwQyAzMi45NzA1IDQuMjU3NiAyNi4xMTQ4IDcuMTM0MTEgMTguMjY0NiA3LjEzNDExWiIvPgogICAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjM5LjczIDIyODUuNDgpIiBkPSJNIDE4LjI3MzMgNS45MzkzMUMgMjYuMTIzNSA1LjkzOTMxIDMyLjk3OTMgOC44MTU4MyAzNi41MzggMTMuMDczNEMgMzUuMjEyNiA5LjI1MzAzIDMyLjc0MjQgNS45NDI2MiAyOS40Njk0IDMuNjAwNEMgMjYuMTk2MyAxLjI1ODE4IDIyLjI4MjMgMCAxOC4yNjkgMEMgMTQuMjU1NyAwIDEwLjM0MTcgMS4yNTgxOCA3LjA2ODYgMy42MDA0QyAzLjc5NTU2IDUuOTQyNjIgMS4zMjUzOSA5LjI1MzAzIDAgMTMuMDczNEMgMy41Njc0NSA4LjgyNDYzIDEwLjQyMzIgNS45MzkzMSAxOC4yNzMzIDUuOTM5MzFaIi8+CiAgICA8L2c+CiAgICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjY5LjMgMjI4MS4zMSkiIGQ9Ik0gNS44OTM1MyAyLjg0NEMgNS45MTg4OSAzLjQzMTY1IDUuNzcwODUgNC4wMTM2NyA1LjQ2ODE1IDQuNTE2NDVDIDUuMTY1NDUgNS4wMTkyMiA0LjcyMTY4IDUuNDIwMTUgNC4xOTI5OSA1LjY2ODUxQyAzLjY2NDMgNS45MTY4OCAzLjA3NDQ0IDYuMDAxNTEgMi40OTgwNSA1LjkxMTcxQyAxLjkyMTY2IDUuODIxOSAxLjM4NDYzIDUuNTYxNyAwLjk1NDg5OCA1LjE2NDAxQyAwLjUyNTE3IDQuNzY2MzMgMC4yMjIwNTYgNC4yNDkwMyAwLjA4MzkwMzcgMy42Nzc1N0MgLTAuMDU0MjQ4MyAzLjEwNjExIC0wLjAyMTIzIDIuNTA2MTcgMC4xNzg3ODEgMS45NTM2NEMgMC4zNzg3OTMgMS40MDExIDAuNzM2ODA5IDAuOTIwODE3IDEuMjA3NTQgMC41NzM1MzhDIDEuNjc4MjYgMC4yMjYyNTkgMi4yNDA1NSAwLjAyNzU5MTkgMi44MjMyNiAwLjAwMjY3MjI5QyAzLjYwMzg5IC0wLjAzMDcxMTUgNC4zNjU3MyAwLjI0OTc4OSA0Ljk0MTQyIDAuNzgyNTUxQyA1LjUxNzExIDEuMzE1MzEgNS44NTk1NiAyLjA1Njc2IDUuODkzNTMgMi44NDRaIi8+CiAgICAgIDxwYXRoIHRyYW5zZm9ybT0idHJhbnNsYXRlKDE2MzkuOCAyMzIzLjgxKSIgZD0iTSA3LjQyNzg5IDMuNTgzMzhDIDcuNDYwMDggNC4zMjQzIDcuMjczNTUgNS4wNTgxOSA2Ljg5MTkzIDUuNjkyMTNDIDYuNTEwMzEgNi4zMjYwNyA1Ljk1MDc1IDYuODMxNTYgNS4yODQxMSA3LjE0NDZDIDQuNjE3NDcgNy40NTc2MyAzLjg3MzcxIDcuNTY0MTQgMy4xNDcwMiA3LjQ1MDYzQyAyLjQyMDMyIDcuMzM3MTIgMS43NDMzNiA3LjAwODcgMS4yMDE4NCA2LjUwNjk1QyAwLjY2MDMyOCA2LjAwNTIgMC4yNzg2MSA1LjM1MjY4IDAuMTA1MDE3IDQuNjMyMDJDIC0wLjA2ODU3NTcgMy45MTEzNSAtMC4wMjYyMzYxIDMuMTU0OTQgMC4yMjY2NzUgMi40NTg1NkMgMC40Nzk1ODcgMS43NjIxNyAwLjkzMTY5NyAxLjE1NzEzIDEuNTI1NzYgMC43MjAwMzNDIDIuMTE5ODMgMC4yODI5MzUgMi44MjkxNCAwLjAzMzQzOTUgMy41NjM4OSAwLjAwMzEzMzQ0QyA0LjU0NjY3IC0wLjAzNzQwMzMgNS41MDUyOSAwLjMxNjcwNiA2LjIyOTYxIDAuOTg3ODM1QyA2Ljk1MzkzIDEuNjU4OTYgNy4zODQ4NCAyLjU5MjM1IDcuNDI3ODkgMy41ODMzOEwgNy40Mjc4OSAzLjU4MzM4WiIvPgogICAgICA8cGF0aCB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNjM4LjM2IDIyODYuMDYpIiBkPSJNIDIuMjc0NzEgNC4zOTYyOUMgMS44NDM2MyA0LjQxNTA4IDEuNDE2NzEgNC4zMDQ0NSAxLjA0Nzk5IDQuMDc4NDNDIDAuNjc5MjY4IDMuODUyNCAwLjM4NTMyOCAzLjUyMTE0IDAuMjAzMzcxIDMuMTI2NTZDIDAuMDIxNDEzNiAyLjczMTk4IC0wLjA0MDM3OTggMi4yOTE4MyAwLjAyNTgxMTYgMS44NjE4MUMgMC4wOTIwMDMxIDEuNDMxOCAwLjI4MzIwNCAxLjAzMTI2IDAuNTc1MjEzIDAuNzEwODgzQyAwLjg2NzIyMiAwLjM5MDUxIDEuMjQ2OTEgMC4xNjQ3MDggMS42NjYyMiAwLjA2MjA1OTJDIDIuMDg1NTMgLTAuMDQwNTg5NyAyLjUyNTYxIC0wLjAxNTQ3MTQgMi45MzA3NiAwLjEzNDIzNUMgMy4zMzU5MSAwLjI4Mzk0MSAzLjY4NzkyIDAuNTUxNTA1IDMuOTQyMjIgMC45MDMwNkMgNC4xOTY1MiAxLjI1NDYyIDQuMzQxNjkgMS42NzQzNiA0LjM1OTM1IDIuMTA5MTZDIDQuMzgyOTkgMi42OTEwNyA0LjE3Njc4IDMuMjU4NjkgMy43ODU5NyAzLjY4NzQ2QyAzLjM5NTE2IDQuMTE2MjQgMi44NTE2NiA0LjM3MTE2IDIuMjc0NzEgNC4zOTYyOUwgMi4yNzQ3MSA0LjM5NjI5WiIvPgogICAgPC9nPgogIDwvZz4+Cjwvc3ZnPgo=);
  --jp-icon-jupyterlab-wordmark: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIHZpZXdCb3g9IjAgMCAxODYwLjggNDc1Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjIiIGZpbGw9IiM0RTRFNEUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQ4MC4xMzY0MDEsIDY0LjI3MTQ5MykiPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDU4Ljg3NTU2NikiPgogICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjA4NzYwMywgMC4xNDAyOTQpIj4KICAgICAgICA8cGF0aCBkPSJNLTQyNi45LDE2OS44YzAsNDguNy0zLjcsNjQuNy0xMy42LDc2LjRjLTEwLjgsMTAtMjUsMTUuNS0zOS43LDE1LjVsMy43LDI5IGMyMi44LDAuMyw0NC44LTcuOSw2MS45LTIzLjFjMTcuOC0xOC41LDI0LTQ0LjEsMjQtODMuM1YwSC00Mjd2MTcwLjFMLTQyNi45LDE2OS44TC00MjYuOSwxNjkuOHoiLz4KICAgICAgPC9nPgogICAgPC9nPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTU1LjA0NTI5NiwgNTYuODM3MTA0KSI+CiAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuNTYyNDUzLCAxLjc5OTg0MikiPgogICAgICAgIDxwYXRoIGQ9Ik0tMzEyLDE0OGMwLDIxLDAsMzkuNSwxLjcsNTUuNGgtMzEuOGwtMi4xLTMzLjNoLTAuOGMtNi43LDExLjYtMTYuNCwyMS4zLTI4LDI3LjkgYy0xMS42LDYuNi0yNC44LDEwLTM4LjIsOS44Yy0zMS40LDAtNjktMTcuNy02OS04OVYwaDM2LjR2MTEyLjdjMCwzOC43LDExLjYsNjQuNyw0NC42LDY0LjdjMTAuMy0wLjIsMjAuNC0zLjUsMjguOS05LjQgYzguNS01LjksMTUuMS0xNC4zLDE4LjktMjMuOWMyLjItNi4xLDMuMy0xMi41LDMuMy0xOC45VjAuMmgzNi40VjE0OEgtMzEyTC0zMTIsMTQ4eiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzOTAuMDEzMzIyLCA1My40Nzk2MzgpIj4KICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS43MDY0NTgsIDAuMjMxNDI1KSI+CiAgICAgICAgPHBhdGggZD0iTS00NzguNiw3MS40YzAtMjYtMC44LTQ3LTEuNy02Ni43aDMyLjdsMS43LDM0LjhoMC44YzcuMS0xMi41LDE3LjUtMjIuOCwzMC4xLTI5LjcgYzEyLjUtNywyNi43LTEwLjMsNDEtOS44YzQ4LjMsMCw4NC43LDQxLjcsODQuNywxMDMuM2MwLDczLjEtNDMuNywxMDkuMi05MSwxMDkuMmMtMTIuMSwwLjUtMjQuMi0yLjItMzUtNy44IGMtMTAuOC01LjYtMTkuOS0xMy45LTI2LjYtMjQuMmgtMC44VjI5MWgtMzZ2LTIyMEwtNDc4LjYsNzEuNEwtNDc4LjYsNzEuNHogTS00NDIuNiwxMjUuNmMwLjEsNS4xLDAuNiwxMC4xLDEuNywxNS4xIGMzLDEyLjMsOS45LDIzLjMsMTkuOCwzMS4xYzkuOSw3LjgsMjIuMSwxMi4xLDM0LjcsMTIuMWMzOC41LDAsNjAuNy0zMS45LDYwLjctNzguNWMwLTQwLjctMjEuMS03NS42LTU5LjUtNzUuNiBjLTEyLjksMC40LTI1LjMsNS4xLTM1LjMsMTMuNGMtOS45LDguMy0xNi45LDE5LjctMTkuNiwzMi40Yy0xLjUsNC45LTIuMywxMC0yLjUsMTUuMVYxMjUuNkwtNDQyLjYsMTI1LjZMLTQ0Mi42LDEyNS42eiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2MDYuNzQwNzI2LCA1Ni44MzcxMDQpIj4KICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC43NTEyMjYsIDEuOTg5Mjk5KSI+CiAgICAgICAgPHBhdGggZD0iTS00NDAuOCwwbDQzLjcsMTIwLjFjNC41LDEzLjQsOS41LDI5LjQsMTIuOCw0MS43aDAuOGMzLjctMTIuMiw3LjktMjcuNywxMi44LTQyLjQgbDM5LjctMTE5LjJoMzguNUwtMzQ2LjksMTQ1Yy0yNiw2OS43LTQzLjcsMTA1LjQtNjguNiwxMjcuMmMtMTIuNSwxMS43LTI3LjksMjAtNDQuNiwyMy45bC05LjEtMzEuMSBjMTEuNy0zLjksMjIuNS0xMC4xLDMxLjgtMTguMWMxMy4yLTExLjEsMjMuNy0yNS4yLDMwLjYtNDEuMmMxLjUtMi44LDIuNS01LjcsMi45LTguOGMtMC4zLTMuMy0xLjItNi42LTIuNS05LjdMLTQ4MC4yLDAuMSBoMzkuN0wtNDQwLjgsMEwtNDQwLjgsMHoiLz4KICAgICAgPC9nPgogICAgPC9nPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODIyLjc0ODEwNCwgMC4wMDAwMDApIj4KICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMS40NjQwNTAsIDAuMzc4OTE0KSI+CiAgICAgICAgPHBhdGggZD0iTS00MTMuNywwdjU4LjNoNTJ2MjguMmgtNTJWMTk2YzAsMjUsNywzOS41LDI3LjMsMzkuNWM3LjEsMC4xLDE0LjItMC43LDIxLjEtMi41IGwxLjcsMjcuN2MtMTAuMywzLjctMjEuMyw1LjQtMzIuMiw1Yy03LjMsMC40LTE0LjYtMC43LTIxLjMtMy40Yy02LjgtMi43LTEyLjktNi44LTE3LjktMTIuMWMtMTAuMy0xMC45LTE0LjEtMjktMTQuMS01Mi45IFY4Ni41aC0zMVY1OC4zaDMxVjkuNkwtNDEzLjcsMEwtNDEzLjcsMHoiLz4KICAgICAgPC9nPgogICAgPC9nPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOTc0LjQzMzI4NiwgNTMuNDc5NjM4KSI+CiAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAuOTkwMDM0LCAwLjYxMDMzOSkiPgogICAgICAgIDxwYXRoIGQ9Ik0tNDQ1LjgsMTEzYzAuOCw1MCwzMi4yLDcwLjYsNjguNiw3MC42YzE5LDAuNiwzNy45LTMsNTUuMy0xMC41bDYuMiwyNi40IGMtMjAuOSw4LjktNDMuNSwxMy4xLTY2LjIsMTIuNmMtNjEuNSwwLTk4LjMtNDEuMi05OC4zLTEwMi41Qy00ODAuMiw0OC4yLTQ0NC43LDAtMzg2LjUsMGM2NS4yLDAsODIuNyw1OC4zLDgyLjcsOTUuNyBjLTAuMSw1LjgtMC41LDExLjUtMS4yLDE3LjJoLTE0MC42SC00NDUuOEwtNDQ1LjgsMTEzeiBNLTMzOS4yLDg2LjZjMC40LTIzLjUtOS41LTYwLjEtNTAuNC02MC4xIGMtMzYuOCwwLTUyLjgsMzQuNC01NS43LDYwLjFILTMzOS4yTC0zMzkuMiw4Ni42TC0zMzkuMiw4Ni42eiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMjAxLjk2MTA1OCwgNTMuNDc5NjM4KSI+CiAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEuMTc5NjQwLCAwLjcwNTA2OCkiPgogICAgICAgIDxwYXRoIGQ9Ik0tNDc4LjYsNjhjMC0yMy45LTAuNC00NC41LTEuNy02My40aDMxLjhsMS4yLDM5LjloMS43YzkuMS0yNy4zLDMxLTQ0LjUsNTUuMy00NC41IGMzLjUtMC4xLDcsMC40LDEwLjMsMS4ydjM0LjhjLTQuMS0wLjktOC4yLTEuMy0xMi40LTEuMmMtMjUuNiwwLTQzLjcsMTkuNy00OC43LDQ3LjRjLTEsNS43LTEuNiwxMS41LTEuNywxNy4ydjEwOC4zaC0zNlY2OCBMLTQ3OC42LDY4eiIvPgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgoKICA8ZyBjbGFzcz0ianAtaWNvbi13YXJuMCIgZmlsbD0iI0YzNzcyNiI+CiAgICA8cGF0aCBkPSJNMTM1Mi4zLDMyNi4yaDM3VjI4aC0zN1YzMjYuMnogTTE2MDQuOCwzMjYuMmMtMi41LTEzLjktMy40LTMxLjEtMy40LTQ4Ljd2LTc2IGMwLTQwLjctMTUuMS04My4xLTc3LjMtODMuMWMtMjUuNiwwLTUwLDcuMS02Ni44LDE4LjFsOC40LDI0LjRjMTQuMy05LjIsMzQtMTUuMSw1My0xNS4xYzQxLjYsMCw0Ni4yLDMwLjIsNDYuMiw0N3Y0LjIgYy03OC42LTAuNC0xMjIuMywyNi41LTEyMi4zLDc1LjZjMCwyOS40LDIxLDU4LjQsNjIuMiw1OC40YzI5LDAsNTAuOS0xNC4zLDYyLjItMzAuMmgxLjNsMi45LDI1LjZIMTYwNC44eiBNMTU2NS43LDI1Ny43IGMwLDMuOC0wLjgsOC0yLjEsMTEuOGMtNS45LDE3LjItMjIuNywzNC00OS4yLDM0Yy0xOC45LDAtMzQuOS0xMS4zLTM0LjktMzUuM2MwLTM5LjUsNDUuOC00Ni42LDg2LjItNDUuOFYyNTcuN3ogTTE2OTguNSwzMjYuMiBsMS43LTMzLjZoMS4zYzE1LjEsMjYuOSwzOC43LDM4LjIsNjguMSwzOC4yYzQ1LjQsMCw5MS4yLTM2LjEsOTEuMi0xMDguOGMwLjQtNjEuNy0zNS4zLTEwMy43LTg1LjctMTAzLjcgYy0zMi44LDAtNTYuMywxNC43LTY5LjMsMzcuNGgtMC44VjI4aC0zNi42djI0NS43YzAsMTguMS0wLjgsMzguNi0xLjcsNTIuNUgxNjk4LjV6IE0xNzA0LjgsMjA4LjJjMC01LjksMS4zLTEwLjksMi4xLTE1LjEgYzcuNi0yOC4xLDMxLjEtNDUuNCw1Ni4zLTQ1LjRjMzkuNSwwLDYwLjUsMzQuOSw2MC41LDc1LjZjMCw0Ni42LTIzLjEsNzguMS02MS44LDc4LjFjLTI2LjksMC00OC4zLTE3LjYtNTUuNS00My4zIGMtMC44LTQuMi0xLjctOC44LTEuNy0xMy40VjIwOC4yeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-kernel: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiIgZmlsbD0iIzYxNjE2MSIgZD0iTTE1IDlIOXY2aDZWOXptLTIgNGgtMnYtMmgydjJ6bTgtMlY5aC0yVjdjMC0xLjEtLjktMi0yLTJoLTJWM2gtMnYyaC0yVjNIOXYySDdjLTEuMSAwLTIgLjktMiAydjJIM3YyaDJ2MkgzdjJoMnYyYzAgMS4xLjkgMiAyIDJoMnYyaDJ2LTJoMnYyaDJ2LTJoMmMxLjEgMCAyLS45IDItMnYtMmgydi0yaC0ydi0yaDJ6bS00IDZIN1Y3aDEwdjEweiIvPgo8L3N2Zz4K);
  --jp-icon-keyboard: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMjAgNUg0Yy0xLjEgMC0xLjk5LjktMS45OSAyTDIgMTdjMCAxLjEuOSAyIDIgMmgxNmMxLjEgMCAyLS45IDItMlY3YzAtMS4xLS45LTItMi0yem0tOSAzaDJ2MmgtMlY4em0wIDNoMnYyaC0ydi0yek04IDhoMnYySDhWOHptMCAzaDJ2Mkg4di0yem0tMSAySDV2LTJoMnYyem0wLTNINVY4aDJ2MnptOSA3SDh2LTJoOHYyem0wLTRoLTJ2LTJoMnYyem0wLTNoLTJWOGgydjJ6bTMgM2gtMnYtMmgydjJ6bTAtM2gtMlY4aDJ2MnoiLz4KPC9zdmc+Cg==);
  --jp-icon-launch: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMzIgMzIiIHdpZHRoPSIzMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIj4KICAgIDxwYXRoIGQ9Ik0yNiwyOEg2YTIuMDAyNywyLjAwMjcsMCwwLDEtMi0yVjZBMi4wMDI3LDIuMDAyNywwLDAsMSw2LDRIMTZWNkg2VjI2SDI2VjE2aDJWMjZBMi4wMDI3LDIuMDAyNywwLDAsMSwyNiwyOFoiLz4KICAgIDxwb2x5Z29uIHBvaW50cz0iMjAgMiAyMCA0IDI2LjU4NiA0IDE4IDEyLjU4NiAxOS40MTQgMTQgMjggNS40MTQgMjggMTIgMzAgMTIgMzAgMiAyMCAyIi8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-launcher: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTkgMTlINVY1aDdWM0g1YTIgMiAwIDAwLTIgMnYxNGEyIDIgMCAwMDIgMmgxNGMxLjEgMCAyLS45IDItMnYtN2gtMnY3ek0xNCAzdjJoMy41OWwtOS44MyA5LjgzIDEuNDEgMS40MUwxOSA2LjQxVjEwaDJWM2gtN3oiLz4KPC9zdmc+Cg==);
  --jp-icon-line-form: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGZpbGw9IndoaXRlIiBkPSJNNS44OCA0LjEyTDEzLjc2IDEybC03Ljg4IDcuODhMOCAyMmwxMC0xMEw4IDJ6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-link: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTMuOSAxMmMwLTEuNzEgMS4zOS0zLjEgMy4xLTMuMWg0VjdIN2MtMi43NiAwLTUgMi4yNC01IDVzMi4yNCA1IDUgNWg0di0xLjlIN2MtMS43MSAwLTMuMS0xLjM5LTMuMS0zLjF6TTggMTNoOHYtMkg4djJ6bTktNmgtNHYxLjloNGMxLjcxIDAgMy4xIDEuMzkgMy4xIDMuMXMtMS4zOSAzLjEtMy4xIDMuMWgtNFYxN2g0YzIuNzYgMCA1LTIuMjQgNS01cy0yLjI0LTUtNS01eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-list: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiM2MTYxNjEiIGQ9Ik0xOSA1djE0SDVWNWgxNG0xLjEtMkgzLjljLS41IDAtLjkuNC0uOS45djE2LjJjMCAuNC40LjkuOS45aDE2LjJjLjQgMCAuOS0uNS45LS45VjMuOWMwLS41LS41LS45LS45LS45ek0xMSA3aDZ2MmgtNlY3em0wIDRoNnYyaC02di0yem0wIDRoNnYyaC02ek03IDdoMnYySDd6bTAgNGgydjJIN3ptMCA0aDJ2Mkg3eiIvPgo8L3N2Zz4K);
  --jp-icon-markdown: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1jb250cmFzdDAganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjN0IxRkEyIiBkPSJNNSAxNC45aDEybC02LjEgNnptOS40LTYuOGMwLTEuMy0uMS0yLjktLjEtNC41LS40IDEuNC0uOSAyLjktMS4zIDQuM2wtMS4zIDQuM2gtMkw4LjUgNy45Yy0uNC0xLjMtLjctMi45LTEtNC4zLS4xIDEuNi0uMSAzLjItLjIgNC42TDcgMTIuNEg0LjhsLjctMTFoMy4zTDEwIDVjLjQgMS4yLjcgMi43IDEgMy45LjMtMS4yLjctMi42IDEtMy45bDEuMi0zLjdoMy4zbC42IDExaC0yLjRsLS4zLTQuMnoiLz4KPC9zdmc+Cg==);
  --jp-icon-move-down: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggY2xhc3M9ImpwLWljb24zIiBkPSJNMTIuNDcxIDcuNTI4OTlDMTIuNzYzMiA3LjIzNjg0IDEyLjc2MzIgNi43NjMxNiAxMi40NzEgNi40NzEwMVY2LjQ3MTAxQzEyLjE3OSA2LjE3OTA1IDExLjcwNTcgNi4xNzg4NCAxMS40MTM1IDYuNDcwNTRMNy43NSAxMC4xMjc1VjEuNzVDNy43NSAxLjMzNTc5IDcuNDE0MjEgMSA3IDFWMUM2LjU4NTc5IDEgNi4yNSAxLjMzNTc5IDYuMjUgMS43NVYxMC4xMjc1TDIuNTk3MjYgNi40NjgyMkMyLjMwMzM4IDYuMTczODEgMS44MjY0MSA2LjE3MzU5IDEuNTMyMjYgNi40Njc3NFY2LjQ2Nzc0QzEuMjM4MyA2Ljc2MTcgMS4yMzgzIDcuMjM4MyAxLjUzMjI2IDcuNTMyMjZMNi4yOTI4OSAxMi4yOTI5QzYuNjgzNDIgMTIuNjgzNCA3LjMxNjU4IDEyLjY4MzQgNy43MDcxMSAxMi4yOTI5TDEyLjQ3MSA3LjUyODk5WiIgZmlsbD0iIzYxNjE2MSIvPgo8L3N2Zz4K);
  --jp-icon-move-up: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMTQiIHZpZXdCb3g9IjAgMCAxNCAxNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggY2xhc3M9ImpwLWljb24zIiBkPSJNMS41Mjg5OSA2LjQ3MTAxQzEuMjM2ODQgNi43NjMxNiAxLjIzNjg0IDcuMjM2ODQgMS41Mjg5OSA3LjUyODk5VjcuNTI4OTlDMS44MjA5NSA3LjgyMDk1IDIuMjk0MjYgNy44MjExNiAyLjU4NjQ5IDcuNTI5NDZMNi4yNSAzLjg3MjVWMTIuMjVDNi4yNSAxMi42NjQyIDYuNTg1NzkgMTMgNyAxM1YxM0M3LjQxNDIxIDEzIDcuNzUgMTIuNjY0MiA3Ljc1IDEyLjI1VjMuODcyNUwxMS40MDI3IDcuNTMxNzhDMTEuNjk2NiA3LjgyNjE5IDEyLjE3MzYgNy44MjY0MSAxMi40Njc3IDcuNTMyMjZWNy41MzIyNkMxMi43NjE3IDcuMjM4MyAxMi43NjE3IDYuNzYxNyAxMi40Njc3IDYuNDY3NzRMNy43MDcxMSAxLjcwNzExQzcuMzE2NTggMS4zMTY1OCA2LjY4MzQyIDEuMzE2NTggNi4yOTI4OSAxLjcwNzExTDEuNTI4OTkgNi40NzEwMVoiIGZpbGw9IiM2MTYxNjEiLz4KPC9zdmc+Cg==);
  --jp-icon-new-folder: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTIwIDZoLThsLTItMkg0Yy0xLjExIDAtMS45OS44OS0xLjk5IDJMMiAxOGMwIDEuMTEuODkgMiAyIDJoMTZjMS4xMSAwIDItLjg5IDItMlY4YzAtMS4xMS0uODktMi0yLTJ6bS0xIDhoLTN2M2gtMnYtM2gtM3YtMmgzVjloMnYzaDN2MnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-not-trusted: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI1IDI1Ij4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiIgc3Ryb2tlPSIjMzMzMzMzIiBzdHJva2Utd2lkdGg9IjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMgMykiIGQ9Ik0xLjg2MDk0IDExLjQ0MDlDMC44MjY0NDggOC43NzAyNyAwLjg2Mzc3OSA2LjA1NzY0IDEuMjQ5MDcgNC4xOTkzMkMyLjQ4MjA2IDMuOTMzNDcgNC4wODA2OCAzLjQwMzQ3IDUuNjAxMDIgMi44NDQ5QzcuMjM1NDkgMi4yNDQ0IDguODU2NjYgMS41ODE1IDkuOTg3NiAxLjA5NTM5QzExLjA1OTcgMS41ODM0MSAxMi42MDk0IDIuMjQ0NCAxNC4yMTggMi44NDMzOUMxNS43NTAzIDMuNDEzOTQgMTcuMzk5NSAzLjk1MjU4IDE4Ljc1MzkgNC4yMTM4NUMxOS4xMzY0IDYuMDcxNzcgMTkuMTcwOSA4Ljc3NzIyIDE4LjEzOSAxMS40NDA5QzE3LjAzMDMgMTQuMzAzMiAxNC42NjY4IDE3LjE4NDQgOS45OTk5OSAxOC45MzU0QzUuMzMzMTkgMTcuMTg0NCAyLjk2OTY4IDE0LjMwMzIgMS44NjA5NCAxMS40NDA5WiIvPgogICAgPHBhdGggY2xhc3M9ImpwLWljb24yIiBzdHJva2U9IiMzMzMzMzMiIHN0cm9rZS13aWR0aD0iMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOS4zMTU5MiA5LjMyMDMxKSIgZD0iTTcuMzY4NDIgMEwwIDcuMzY0NzkiLz4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiIgc3Ryb2tlPSIjMzMzMzMzIiBzdHJva2Utd2lkdGg9IjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDkuMzE1OTIgMTYuNjgzNikgc2NhbGUoMSAtMSkiIGQ9Ik03LjM2ODQyIDBMMCA3LjM2NDc5Ii8+Cjwvc3ZnPgo=);
  --jp-icon-notebook: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtbm90ZWJvb2staWNvbi1jb2xvciBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiNFRjZDMDAiPgogICAgPHBhdGggZD0iTTE4LjcgMy4zdjE1LjRIMy4zVjMuM2gxNS40bTEuNS0xLjVIMS44djE4LjNoMTguM2wuMS0xOC4zeiIvPgogICAgPHBhdGggZD0iTTE2LjUgMTYuNWwtNS40LTQuMy01LjYgNC4zdi0xMWgxMXoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-numbering: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjIiIGhlaWdodD0iMjIiIHZpZXdCb3g9IjAgMCAyOCAyOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CgkJPHBhdGggZD0iTTQgMTlINlYxOS41SDVWMjAuNUg2VjIxSDRWMjJIN1YxOEg0VjE5Wk01IDEwSDZWNkg0VjdINVYxMFpNNCAxM0g1LjhMNCAxNS4xVjE2SDdWMTVINS4yTDcgMTIuOVYxMkg0VjEzWk05IDdWOUgyM1Y3SDlaTTkgMjFIMjNWMTlIOVYyMVpNOSAxNUgyM1YxM0g5VjE1WiIvPgoJPC9nPgo8L3N2Zz4K);
  --jp-icon-offline-bolt: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjE2Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEyIDIuMDJjLTUuNTEgMC05Ljk4IDQuNDctOS45OCA5Ljk4czQuNDcgOS45OCA5Ljk4IDkuOTggOS45OC00LjQ3IDkuOTgtOS45OFMxNy41MSAyLjAyIDEyIDIuMDJ6TTExLjQ4IDIwdi02LjI2SDhMMTMgNHY2LjI2aDMuMzVMMTEuNDggMjB6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-palette: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE4IDEzVjIwSDRWNkg5LjAyQzkuMDcgNS4yOSA5LjI0IDQuNjIgOS41IDRINEMyLjkgNCAyIDQuOSAyIDZWMjBDMiAyMS4xIDIuOSAyMiA0IDIySDE4QzE5LjEgMjIgMjAgMjEuMSAyMCAyMFYxNUwxOCAxM1pNMTkuMyA4Ljg5QzE5Ljc0IDguMTkgMjAgNy4zOCAyMCA2LjVDMjAgNC4wMSAxNy45OSAyIDE1LjUgMkMxMy4wMSAyIDExIDQuMDEgMTEgNi41QzExIDguOTkgMTMuMDEgMTEgMTUuNDkgMTFDMTYuMzcgMTEgMTcuMTkgMTAuNzQgMTcuODggMTAuM0wyMSAxMy40MkwyMi40MiAxMkwxOS4zIDguODlaTTE1LjUgOUMxNC4xMiA5IDEzIDcuODggMTMgNi41QzEzIDUuMTIgMTQuMTIgNCAxNS41IDRDMTYuODggNCAxOCA1LjEyIDE4IDYuNUMxOCA3Ljg4IDE2Ljg4IDkgMTUuNSA5WiIvPgogICAgPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik00IDZIOS4wMTg5NEM5LjAwNjM5IDYuMTY1MDIgOSA2LjMzMTc2IDkgNi41QzkgOC44MTU3NyAxMC4yMTEgMTAuODQ4NyAxMi4wMzQzIDEySDlWMTRIMTZWMTIuOTgxMUMxNi41NzAzIDEyLjkzNzcgMTcuMTIgMTIuODIwNyAxNy42Mzk2IDEyLjYzOTZMMTggMTNWMjBINFY2Wk04IDhINlYxMEg4VjhaTTYgMTJIOFYxNEg2VjEyWk04IDE2SDZWMThIOFYxNlpNOSAxNkgxNlYxOEg5VjE2WiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-paste: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTE5IDJoLTQuMThDMTQuNC44NCAxMy4zIDAgMTIgMGMtMS4zIDAtMi40Ljg0LTIuODIgMkg1Yy0xLjEgMC0yIC45LTIgMnYxNmMwIDEuMS45IDIgMiAyaDE0YzEuMSAwIDItLjkgMi0yVjRjMC0xLjEtLjktMi0yLTJ6bS03IDBjLjU1IDAgMSAuNDUgMSAxcy0uNDUgMS0xIDEtMS0uNDUtMS0xIC40NS0xIDEtMXptNyAxOEg1VjRoMnYzaDEwVjRoMnYxNnoiLz4KICAgIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-pdf: url(data:image/svg+xml;base64,PHN2ZwogICB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMiAyMiIgd2lkdGg9IjE2Ij4KICAgIDxwYXRoIHRyYW5zZm9ybT0icm90YXRlKDQ1KSIgY2xhc3M9ImpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iI0ZGMkEyQSIKICAgICAgIGQ9Im0gMjIuMzQ0MzY5LC0zLjAxNjM2NDIgaCA1LjYzODYwNCB2IDEuNTc5MjQzMyBoIC0zLjU0OTIyNyB2IDEuNTA4NjkyOTkgaCAzLjMzNzU3NiBWIDEuNjUwODE1NCBoIC0zLjMzNzU3NiB2IDMuNDM1MjYxMyBoIC0yLjA4OTM3NyB6IG0gLTcuMTM2NDQ0LDEuNTc5MjQzMyB2IDQuOTQzOTU0MyBoIDAuNzQ4OTIgcSAxLjI4MDc2MSwwIDEuOTUzNzAzLC0wLjYzNDk1MzUgMC42NzgzNjksLTAuNjM0OTUzNSAwLjY3ODM2OSwtMS44NDUxNjQxIDAsLTEuMjA0NzgzNTUgLTAuNjcyOTQyLC0xLjgzNDMxMDExIC0wLjY3Mjk0MiwtMC42Mjk1MjY1OSAtMS45NTkxMywtMC42Mjk1MjY1OSB6IG0gLTIuMDg5Mzc3LC0xLjU3OTI0MzMgaCAyLjIwMzM0MyBxIDEuODQ1MTY0LDAgMi43NDYwMzksMC4yNjU5MjA3IDAuOTA2MzAxLDAuMjYwNDkzNyAxLjU1MjEwOCwwLjg5MDAyMDMgMC41Njk4MywwLjU0ODEyMjMgMC44NDY2MDUsMS4yNjQ0ODAwNiAwLjI3Njc3NCwwLjcxNjM1NzgxIDAuMjc2Nzc0LDEuNjIyNjU4OTQgMCwwLjkxNzE1NTEgLTAuMjc2Nzc0LDEuNjM4OTM5OSAtMC4yNzY3NzUsMC43MTYzNTc4IC0wLjg0NjYwNSwxLjI2NDQ4IC0wLjY1MTIzNCwwLjYyOTUyNjYgLTEuNTYyOTYyLDAuODk1NDQ3MyAtMC45MTE3MjgsMC4yNjA0OTM3IC0yLjczNTE4NSwwLjI2MDQ5MzcgaCAtMi4yMDMzNDMgeiBtIC04LjE0NTg1NjUsMCBoIDMuNDY3ODIzIHEgMS41NDY2ODE2LDAgMi4zNzE1Nzg1LDAuNjg5MjIzIDAuODMwMzI0LDAuNjgzNzk2MSAwLjgzMDMyNCwxLjk1MzcwMzE0IDAsMS4yNzUzMzM5NyAtMC44MzAzMjQsMS45NjQ1NTcwNiBRIDkuOTg3MTk2MSwyLjI3NDkxNSA4LjQ0MDUxNDUsMi4yNzQ5MTUgSCA3LjA2MjA2ODQgViA1LjA4NjA3NjcgSCA0Ljk3MjY5MTUgWiBtIDIuMDg5Mzc2OSwxLjUxNDExOTkgdiAyLjI2MzAzOTQzIGggMS4xNTU5NDEgcSAwLjYwNzgxODgsMCAwLjkzODg2MjksLTAuMjkzMDU1NDcgMC4zMzEwNDQxLC0wLjI5ODQ4MjQxIDAuMzMxMDQ0MSwtMC44NDExNzc3MiAwLC0wLjU0MjY5NTMxIC0wLjMzMTA0NDEsLTAuODM1NzUwNzQgLTAuMzMxMDQ0MSwtMC4yOTMwNTU1IC0wLjkzODg2MjksLTAuMjkzMDU1NSB6IgovPgo8L3N2Zz4K);
  --jp-icon-python: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iLTEwIC0xMCAxMzEuMTYxMzYxNjk0MzM1OTQgMTMyLjM4ODk5OTkzODk2NDg0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjMzA2OTk4IiBkPSJNIDU0LjkxODc4NSw5LjE5Mjc0MjFlLTQgQyA1MC4zMzUxMzIsMC4wMjIyMTcyNyA0NS45NTc4NDYsMC40MTMxMzY5NyA0Mi4xMDYyODUsMS4wOTQ2NjkzIDMwLjc2MDA2OSwzLjA5OTE3MzEgMjguNzAwMDM2LDcuMjk0NzcxNCAyOC43MDAwMzUsMTUuMDMyMTY5IHYgMTAuMjE4NzUgaCAyNi44MTI1IHYgMy40MDYyNSBoIC0yNi44MTI1IC0xMC4wNjI1IGMgLTcuNzkyNDU5LDAgLTE0LjYxNTc1ODgsNC42ODM3MTcgLTE2Ljc0OTk5OTgsMTMuNTkzNzUgLTIuNDYxODE5OTgsMTAuMjEyOTY2IC0yLjU3MTAxNTA4LDE2LjU4NjAyMyAwLDI3LjI1IDEuOTA1OTI4Myw3LjkzNzg1MiA2LjQ1NzU0MzIsMTMuNTkzNzQ4IDE0LjI0OTk5OTgsMTMuNTkzNzUgaCA5LjIxODc1IHYgLTEyLjI1IGMgMCwtOC44NDk5MDIgNy42NTcxNDQsLTE2LjY1NjI0OCAxNi43NSwtMTYuNjU2MjUgaCAyNi43ODEyNSBjIDcuNDU0OTUxLDAgMTMuNDA2MjUzLC02LjEzODE2NCAxMy40MDYyNSwtMTMuNjI1IHYgLTI1LjUzMTI1IGMgMCwtNy4yNjYzMzg2IC02LjEyOTk4LC0xMi43MjQ3NzcxIC0xMy40MDYyNSwtMTMuOTM3NDk5NyBDIDY0LjI4MTU0OCwwLjMyNzk0Mzk3IDU5LjUwMjQzOCwtMC4wMjAzNzkwMyA1NC45MTg3ODUsOS4xOTI3NDIxZS00IFogbSAtMTQuNSw4LjIxODc1MDEyNTc5IGMgMi43Njk1NDcsMCA1LjAzMTI1LDIuMjk4NjQ1NiA1LjAzMTI1LDUuMTI0OTk5NiAtMmUtNiwyLjgxNjMzNiAtMi4yNjE3MDMsNS4wOTM3NSAtNS4wMzEyNSw1LjA5Mzc1IC0yLjc3OTQ3NiwtMWUtNiAtNS4wMzEyNSwtMi4yNzc0MTUgLTUuMDMxMjUsLTUuMDkzNzUgLTEwZS03LC0yLjgyNjM1MyAyLjI1MTc3NCwtNS4xMjQ5OTk2IDUuMDMxMjUsLTUuMTI0OTk5NiB6Ii8+CiAgPHBhdGggY2xhc3M9ImpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iI2ZmZDQzYiIgZD0ibSA4NS42Mzc1MzUsMjguNjU3MTY5IHYgMTEuOTA2MjUgYyAwLDkuMjMwNzU1IC03LjgyNTg5NSwxNi45OTk5OTkgLTE2Ljc1LDE3IGggLTI2Ljc4MTI1IGMgLTcuMzM1ODMzLDAgLTEzLjQwNjI0OSw2LjI3ODQ4MyAtMTMuNDA2MjUsMTMuNjI1IHYgMjUuNTMxMjQ3IGMgMCw3LjI2NjM0NCA2LjMxODU4OCwxMS41NDAzMjQgMTMuNDA2MjUsMTMuNjI1MDA0IDguNDg3MzMxLDIuNDk1NjEgMTYuNjI2MjM3LDIuOTQ2NjMgMjYuNzgxMjUsMCA2Ljc1MDE1NSwtMS45NTQzOSAxMy40MDYyNTMsLTUuODg3NjEgMTMuNDA2MjUsLTEzLjYyNTAwNCBWIDg2LjUwMDkxOSBoIC0yNi43ODEyNSB2IC0zLjQwNjI1IGggMjYuNzgxMjUgMTMuNDA2MjU0IGMgNy43OTI0NjEsMCAxMC42OTYyNTEsLTUuNDM1NDA4IDEzLjQwNjI0MSwtMTMuNTkzNzUgMi43OTkzMywtOC4zOTg4ODYgMi42ODAyMiwtMTYuNDc1Nzc2IDAsLTI3LjI1IC0xLjkyNTc4LC03Ljc1NzQ0MSAtNS42MDM4NywtMTMuNTkzNzUgLTEzLjQwNjI0MSwtMTMuNTkzNzUgeiBtIC0xNS4wNjI1LDY0LjY1NjI1IGMgMi43Nzk0NzgsM2UtNiA1LjAzMTI1LDIuMjc3NDE3IDUuMDMxMjUsNS4wOTM3NDcgLTJlLTYsMi44MjYzNTQgLTIuMjUxNzc1LDUuMTI1MDA0IC01LjAzMTI1LDUuMTI1MDA0IC0yLjc2OTU1LDAgLTUuMDMxMjUsLTIuMjk4NjUgLTUuMDMxMjUsLTUuMTI1MDA0IDJlLTYsLTIuODE2MzMgMi4yNjE2OTcsLTUuMDkzNzQ3IDUuMDMxMjUsLTUuMDkzNzQ3IHoiLz4KPC9zdmc+Cg==);
  --jp-icon-r-kernel: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1jb250cmFzdDMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjMjE5NkYzIiBkPSJNNC40IDIuNWMxLjItLjEgMi45LS4zIDQuOS0uMyAyLjUgMCA0LjEuNCA1LjIgMS4zIDEgLjcgMS41IDEuOSAxLjUgMy41IDAgMi0xLjQgMy41LTIuOSA0LjEgMS4yLjQgMS43IDEuNiAyLjIgMyAuNiAxLjkgMSAzLjkgMS4zIDQuNmgtMy44Yy0uMy0uNC0uOC0xLjctMS4yLTMuN3MtMS4yLTIuNi0yLjYtMi42aC0uOXY2LjRINC40VjIuNXptMy43IDYuOWgxLjRjMS45IDAgMi45LS45IDIuOS0yLjNzLTEtMi4zLTIuOC0yLjNjLS43IDAtMS4zIDAtMS42LjJ2NC41aC4xdi0uMXoiLz4KPC9zdmc+Cg==);
  --jp-icon-react: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMTUwIDE1MCA1NDEuOSAyOTUuMyI+CiAgPGcgY2xhc3M9ImpwLWljb24tYnJhbmQyIGpwLWljb24tc2VsZWN0YWJsZSIgZmlsbD0iIzYxREFGQiI+CiAgICA8cGF0aCBkPSJNNjY2LjMgMjk2LjVjMC0zMi41LTQwLjctNjMuMy0xMDMuMS04Mi40IDE0LjQtNjMuNiA4LTExNC4yLTIwLjItMTMwLjQtNi41LTMuOC0xNC4xLTUuNi0yMi40LTUuNnYyMi4zYzQuNiAwIDguMy45IDExLjQgMi42IDEzLjYgNy44IDE5LjUgMzcuNSAxNC45IDc1LjctMS4xIDkuNC0yLjkgMTkuMy01LjEgMjkuNC0xOS42LTQuOC00MS04LjUtNjMuNS0xMC45LTEzLjUtMTguNS0yNy41LTM1LjMtNDEuNi01MCAzMi42LTMwLjMgNjMuMi00Ni45IDg0LTQ2LjlWNzhjLTI3LjUgMC02My41IDE5LjYtOTkuOSA1My42LTM2LjQtMzMuOC03Mi40LTUzLjItOTkuOS01My4ydjIyLjNjMjAuNyAwIDUxLjQgMTYuNSA4NCA0Ni42LTE0IDE0LjctMjggMzEuNC00MS4zIDQ5LjktMjIuNiAyLjQtNDQgNi4xLTYzLjYgMTEtMi4zLTEwLTQtMTkuNy01LjItMjktNC43LTM4LjIgMS4xLTY3LjkgMTQuNi03NS44IDMtMS44IDYuOS0yLjYgMTEuNS0yLjZWNzguNWMtOC40IDAtMTYgMS44LTIyLjYgNS42LTI4LjEgMTYuMi0zNC40IDY2LjctMTkuOSAxMzAuMS02Mi4yIDE5LjItMTAyLjcgNDkuOS0xMDIuNyA4Mi4zIDAgMzIuNSA0MC43IDYzLjMgMTAzLjEgODIuNC0xNC40IDYzLjYtOCAxMTQuMiAyMC4yIDEzMC40IDYuNSAzLjggMTQuMSA1LjYgMjIuNSA1LjYgMjcuNSAwIDYzLjUtMTkuNiA5OS45LTUzLjYgMzYuNCAzMy44IDcyLjQgNTMuMiA5OS45IDUzLjIgOC40IDAgMTYtMS44IDIyLjYtNS42IDI4LjEtMTYuMiAzNC40LTY2LjcgMTkuOS0xMzAuMSA2Mi0xOS4xIDEwMi41LTQ5LjkgMTAyLjUtODIuM3ptLTEzMC4yLTY2LjdjLTMuNyAxMi45LTguMyAyNi4yLTEzLjUgMzkuNS00LjEtOC04LjQtMTYtMTMuMS0yNC00LjYtOC05LjUtMTUuOC0xNC40LTIzLjQgMTQuMiAyLjEgMjcuOSA0LjcgNDEgNy45em0tNDUuOCAxMDYuNWMtNy44IDEzLjUtMTUuOCAyNi4zLTI0LjEgMzguMi0xNC45IDEuMy0zMCAyLTQ1LjIgMi0xNS4xIDAtMzAuMi0uNy00NS0xLjktOC4zLTExLjktMTYuNC0yNC42LTI0LjItMzgtNy42LTEzLjEtMTQuNS0yNi40LTIwLjgtMzkuOCA2LjItMTMuNCAxMy4yLTI2LjggMjAuNy0zOS45IDcuOC0xMy41IDE1LjgtMjYuMyAyNC4xLTM4LjIgMTQuOS0xLjMgMzAtMiA0NS4yLTIgMTUuMSAwIDMwLjIuNyA0NSAxLjkgOC4zIDExLjkgMTYuNCAyNC42IDI0LjIgMzggNy42IDEzLjEgMTQuNSAyNi40IDIwLjggMzkuOC02LjMgMTMuNC0xMy4yIDI2LjgtMjAuNyAzOS45em0zMi4zLTEzYzUuNCAxMy40IDEwIDI2LjggMTMuOCAzOS44LTEzLjEgMy4yLTI2LjkgNS45LTQxLjIgOCA0LjktNy43IDkuOC0xNS42IDE0LjQtMjMuNyA0LjYtOCA4LjktMTYuMSAxMy0yNC4xek00MjEuMiA0MzBjLTkuMy05LjYtMTguNi0yMC4zLTI3LjgtMzIgOSAuNCAxOC4yLjcgMjcuNS43IDkuNCAwIDE4LjctLjIgMjcuOC0uNy05IDExLjctMTguMyAyMi40LTI3LjUgMzJ6bS03NC40LTU4LjljLTE0LjItMi4xLTI3LjktNC43LTQxLTcuOSAzLjctMTIuOSA4LjMtMjYuMiAxMy41LTM5LjUgNC4xIDggOC40IDE2IDEzLjEgMjQgNC43IDggOS41IDE1LjggMTQuNCAyMy40ek00MjAuNyAxNjNjOS4zIDkuNiAxOC42IDIwLjMgMjcuOCAzMi05LS40LTE4LjItLjctMjcuNS0uNy05LjQgMC0xOC43LjItMjcuOC43IDktMTEuNyAxOC4zLTIyLjQgMjcuNS0zMnptLTc0IDU4LjljLTQuOSA3LjctOS44IDE1LjYtMTQuNCAyMy43LTQuNiA4LTguOSAxNi0xMyAyNC01LjQtMTMuNC0xMC0yNi44LTEzLjgtMzkuOCAxMy4xLTMuMSAyNi45LTUuOCA0MS4yLTcuOXptLTkwLjUgMTI1LjJjLTM1LjQtMTUuMS01OC4zLTM0LjktNTguMy01MC42IDAtMTUuNyAyMi45LTM1LjYgNTguMy01MC42IDguNi0zLjcgMTgtNyAyNy43LTEwLjEgNS43IDE5LjYgMTMuMiA0MCAyMi41IDYwLjktOS4yIDIwLjgtMTYuNiA0MS4xLTIyLjIgNjAuNi05LjktMy4xLTE5LjMtNi41LTI4LTEwLjJ6TTMxMCA0OTBjLTEzLjYtNy44LTE5LjUtMzcuNS0xNC45LTc1LjcgMS4xLTkuNCAyLjktMTkuMyA1LjEtMjkuNCAxOS42IDQuOCA0MSA4LjUgNjMuNSAxMC45IDEzLjUgMTguNSAyNy41IDM1LjMgNDEuNiA1MC0zMi42IDMwLjMtNjMuMiA0Ni45LTg0IDQ2LjktNC41LS4xLTguMy0xLTExLjMtMi43em0yMzcuMi03Ni4yYzQuNyAzOC4yLTEuMSA2Ny45LTE0LjYgNzUuOC0zIDEuOC02LjkgMi42LTExLjUgMi42LTIwLjcgMC01MS40LTE2LjUtODQtNDYuNiAxNC0xNC43IDI4LTMxLjQgNDEuMy00OS45IDIyLjYtMi40IDQ0LTYuMSA2My42LTExIDIuMyAxMC4xIDQuMSAxOS44IDUuMiAyOS4xem0zOC41LTY2LjdjLTguNiAzLjctMTggNy0yNy43IDEwLjEtNS43LTE5LjYtMTMuMi00MC0yMi41LTYwLjkgOS4yLTIwLjggMTYuNi00MS4xIDIyLjItNjAuNiA5LjkgMy4xIDE5LjMgNi41IDI4LjEgMTAuMiAzNS40IDE1LjEgNTguMyAzNC45IDU4LjMgNTAuNi0uMSAxNS43LTIzIDM1LjYtNTguNCA1MC42ek0zMjAuOCA3OC40eiIvPgogICAgPGNpcmNsZSBjeD0iNDIwLjkiIGN5PSIyOTYuNSIgcj0iNDUuNyIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-redo: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgd2lkdGg9IjE2Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgICA8cGF0aCBkPSJNMCAwaDI0djI0SDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTE4LjQgMTAuNkMxNi41NSA4Ljk5IDE0LjE1IDggMTEuNSA4Yy00LjY1IDAtOC41OCAzLjAzLTkuOTYgNy4yMkwzLjkgMTZjMS4wNS0zLjE5IDQuMDUtNS41IDcuNi01LjUgMS45NSAwIDMuNzMuNzIgNS4xMiAxLjg4TDEzIDE2aDlWN2wtMy42IDMuNnoiLz4KICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-refresh: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDE4IDE4Ij4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTkgMTMuNWMtMi40OSAwLTQuNS0yLjAxLTQuNS00LjVTNi41MSA0LjUgOSA0LjVjMS4yNCAwIDIuMzYuNTIgMy4xNyAxLjMzTDEwIDhoNVYzbC0xLjc2IDEuNzZDMTIuMTUgMy42OCAxMC42NiAzIDkgMyA1LjY5IDMgMy4wMSA1LjY5IDMuMDEgOVM1LjY5IDE1IDkgMTVjMi45NyAwIDUuNDMtMi4xNiA1LjktNWgtMS41MmMtLjQ2IDItMi4yNCAzLjUtNC4zOCAzLjV6Ii8+CiAgICA8L2c+Cjwvc3ZnPgo=);
  --jp-icon-regex: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KICA8ZyBjbGFzcz0ianAtaWNvbjIiIGZpbGw9IiM0MTQxNDEiPgogICAgPHJlY3QgeD0iMiIgeT0iMiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+CiAgPC9nPgoKICA8ZyBjbGFzcz0ianAtaWNvbi1hY2NlbnQyIiBmaWxsPSIjRkZGIj4KICAgIDxjaXJjbGUgY2xhc3M9InN0MiIgY3g9IjUuNSIgY3k9IjE0LjUiIHI9IjEuNSIvPgogICAgPHJlY3QgeD0iMTIiIHk9IjQiIGNsYXNzPSJzdDIiIHdpZHRoPSIxIiBoZWlnaHQ9IjgiLz4KICAgIDxyZWN0IHg9IjguNSIgeT0iNy41IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjg2NiAtMC41IDAuNSAwLjg2NiAtMi4zMjU1IDcuMzIxOSkiIGNsYXNzPSJzdDIiIHdpZHRoPSI4IiBoZWlnaHQ9IjEiLz4KICAgIDxyZWN0IHg9IjEyIiB5PSI0IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjUgLTAuODY2IDAuODY2IDAuNSAtMC42Nzc5IDE0LjgyNTIpIiBjbGFzcz0ic3QyIiB3aWR0aD0iMSIgaGVpZ2h0PSI4Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-run: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTggNXYxNGwxMS03eiIvPgogICAgPC9nPgo8L3N2Zz4K);
  --jp-icon-running: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDUxMiA1MTIiPgogIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICA8cGF0aCBkPSJNMjU2IDhDMTE5IDggOCAxMTkgOCAyNTZzMTExIDI0OCAyNDggMjQ4IDI0OC0xMTEgMjQ4LTI0OFMzOTMgOCAyNTYgOHptOTYgMzI4YzAgOC44LTcuMiAxNi0xNiAxNkgxNzZjLTguOCAwLTE2LTcuMi0xNi0xNlYxNzZjMC04LjggNy4yLTE2IDE2LTE2aDE2MGM4LjggMCAxNiA3LjIgMTYgMTZ2MTYweiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-save: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTE3IDNINWMtMS4xMSAwLTIgLjktMiAydjE0YzAgMS4xLjg5IDIgMiAyaDE0YzEuMSAwIDItLjkgMi0yVjdsLTQtNHptLTUgMTZjLTEuNjYgMC0zLTEuMzQtMy0zczEuMzQtMyAzLTMgMyAxLjM0IDMgMy0xLjM0IDMtMyAzem0zLTEwSDVWNWgxMHY0eiIvPgogICAgPC9nPgo8L3N2Zz4K);
  --jp-icon-search: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMTggMTgiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEyLjEsMTAuOWgtMC43bC0wLjItMC4yYzAuOC0wLjksMS4zLTIuMiwxLjMtMy41YzAtMy0yLjQtNS40LTUuNC01LjRTMS44LDQuMiwxLjgsNy4xczIuNCw1LjQsNS40LDUuNCBjMS4zLDAsMi41LTAuNSwzLjUtMS4zbDAuMiwwLjJ2MC43bDQuMSw0LjFsMS4yLTEuMkwxMi4xLDEwLjl6IE03LjEsMTAuOWMtMi4xLDAtMy43LTEuNy0zLjctMy43czEuNy0zLjcsMy43LTMuN3MzLjcsMS43LDMuNywzLjcgUzkuMiwxMC45LDcuMSwxMC45eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-settings: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIiBkPSJNMTkuNDMgMTIuOThjLjA0LS4zMi4wNy0uNjQuMDctLjk4cy0uMDMtLjY2LS4wNy0uOThsMi4xMS0xLjY1Yy4xOS0uMTUuMjQtLjQyLjEyLS42NGwtMi0zLjQ2Yy0uMTItLjIyLS4zOS0uMy0uNjEtLjIybC0yLjQ5IDFjLS41Mi0uNC0xLjA4LS43My0xLjY5LS45OGwtLjM4LTIuNjVBLjQ4OC40ODggMCAwMDE0IDJoLTRjLS4yNSAwLS40Ni4xOC0uNDkuNDJsLS4zOCAyLjY1Yy0uNjEuMjUtMS4xNy41OS0xLjY5Ljk4bC0yLjQ5LTFjLS4yMy0uMDktLjQ5IDAtLjYxLjIybC0yIDMuNDZjLS4xMy4yMi0uMDcuNDkuMTIuNjRsMi4xMSAxLjY1Yy0uMDQuMzItLjA3LjY1LS4wNy45OHMuMDMuNjYuMDcuOThsLTIuMTEgMS42NWMtLjE5LjE1LS4yNC40Mi0uMTIuNjRsMiAzLjQ2Yy4xMi4yMi4zOS4zLjYxLjIybDIuNDktMWMuNTIuNCAxLjA4LjczIDEuNjkuOThsLjM4IDIuNjVjLjAzLjI0LjI0LjQyLjQ5LjQyaDRjLjI1IDAgLjQ2LS4xOC40OS0uNDJsLjM4LTIuNjVjLjYxLS4yNSAxLjE3LS41OSAxLjY5LS45OGwyLjQ5IDFjLjIzLjA5LjQ5IDAgLjYxLS4yMmwyLTMuNDZjLjEyLS4yMi4wNy0uNDktLjEyLS42NGwtMi4xMS0xLjY1ek0xMiAxNS41Yy0xLjkzIDAtMy41LTEuNTctMy41LTMuNXMxLjU3LTMuNSAzLjUtMy41IDMuNSAxLjU3IDMuNSAzLjUtMS41NyAzLjUtMy41IDMuNXoiLz4KPC9zdmc+Cg==);
  --jp-icon-share: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIHZpZXdCb3g9IjAgMCAyNCAyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTSAxOCAyIEMgMTYuMzU0OTkgMiAxNSAzLjM1NDk5MDQgMTUgNSBDIDE1IDUuMTkwOTUyOSAxNS4wMjE3OTEgNS4zNzcxMjI0IDE1LjA1NjY0MSA1LjU1ODU5MzggTCA3LjkyMTg3NSA5LjcyMDcwMzEgQyA3LjM5ODUzOTkgOS4yNzc4NTM5IDYuNzMyMDc3MSA5IDYgOSBDIDQuMzU0OTkwNCA5IDMgMTAuMzU0OTkgMyAxMiBDIDMgMTMuNjQ1MDEgNC4zNTQ5OTA0IDE1IDYgMTUgQyA2LjczMjA3NzEgMTUgNy4zOTg1Mzk5IDE0LjcyMjE0NiA3LjkyMTg3NSAxNC4yNzkyOTcgTCAxNS4wNTY2NDEgMTguNDM5NDUzIEMgMTUuMDIxNTU1IDE4LjYyMTUxNCAxNSAxOC44MDgzODYgMTUgMTkgQyAxNSAyMC42NDUwMSAxNi4zNTQ5OSAyMiAxOCAyMiBDIDE5LjY0NTAxIDIyIDIxIDIwLjY0NTAxIDIxIDE5IEMgMjEgMTcuMzU0OTkgMTkuNjQ1MDEgMTYgMTggMTYgQyAxNy4yNjc0OCAxNiAxNi42MDE1OTMgMTYuMjc5MzI4IDE2LjA3ODEyNSAxNi43MjI2NTYgTCA4Ljk0MzM1OTQgMTIuNTU4NTk0IEMgOC45NzgyMDk1IDEyLjM3NzEyMiA5IDEyLjE5MDk1MyA5IDEyIEMgOSAxMS44MDkwNDcgOC45NzgyMDk1IDExLjYyMjg3OCA4Ljk0MzM1OTQgMTEuNDQxNDA2IEwgMTYuMDc4MTI1IDcuMjc5Mjk2OSBDIDE2LjYwMTQ2IDcuNzIyMTQ2MSAxNy4yNjc5MjMgOCAxOCA4IEMgMTkuNjQ1MDEgOCAyMSA2LjY0NTAwOTYgMjEgNSBDIDIxIDMuMzU0OTkwNCAxOS42NDUwMSAyIDE4IDIgeiBNIDE4IDQgQyAxOC41NjQxMjkgNCAxOSA0LjQzNTg3MDYgMTkgNSBDIDE5IDUuNTY0MTI5NCAxOC41NjQxMjkgNiAxOCA2IEMgMTcuNDM1ODcxIDYgMTcgNS41NjQxMjk0IDE3IDUgQyAxNyA0LjQzNTg3MDYgMTcuNDM1ODcxIDQgMTggNCB6IE0gNiAxMSBDIDYuNTY0MTI5NCAxMSA3IDExLjQzNTg3MSA3IDEyIEMgNyAxMi41NjQxMjkgNi41NjQxMjk0IDEzIDYgMTMgQyA1LjQzNTg3MDYgMTMgNSAxMi41NjQxMjkgNSAxMiBDIDUgMTEuNDM1ODcxIDUuNDM1ODcwNiAxMSA2IDExIHogTSAxOCAxOCBDIDE4LjU2NDEyOSAxOCAxOSAxOC40MzU4NzEgMTkgMTkgQyAxOSAxOS41NjQxMjkgMTguNTY0MTI5IDIwIDE4IDIwIEMgMTcuNDM1ODcxIDIwIDE3IDE5LjU2NDEyOSAxNyAxOSBDIDE3IDE4LjQzNTg3MSAxNy40MzU4NzEgMTggMTggMTggeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-spreadsheet: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8cGF0aCBjbGFzcz0ianAtaWNvbi1jb250cmFzdDEganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNENBRjUwIiBkPSJNMi4yIDIuMnYxNy42aDE3LjZWMi4ySDIuMnptMTUuNCA3LjdoLTUuNVY0LjRoNS41djUuNXpNOS45IDQuNHY1LjVINC40VjQuNGg1LjV6bS01LjUgNy43aDUuNXY1LjVINC40di01LjV6bTcuNyA1LjV2LTUuNWg1LjV2NS41aC01LjV6Ii8+Cjwvc3ZnPgo=);
  --jp-icon-stop: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPgogICAgICAgIDxwYXRoIGQ9Ik02IDZoMTJ2MTJINnoiLz4KICAgIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-tab: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTIxIDNIM2MtMS4xIDAtMiAuOS0yIDJ2MTRjMCAxLjEuOSAyIDIgMmgxOGMxLjEgMCAyLS45IDItMlY1YzAtMS4xLS45LTItMi0yem0wIDE2SDNWNWgxMHY0aDh2MTB6Ii8+CiAgPC9nPgo8L3N2Zz4K);
  --jp-icon-table-rows: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPgogICAgICAgIDxwYXRoIGQ9Ik0yMSw4SDNWNGgxOFY4eiBNMjEsMTBIM3Y0aDE4VjEweiBNMjEsMTZIM3Y0aDE4VjE2eiIvPgogICAgPC9nPgo8L3N2Zz4K);
  --jp-icon-tag: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjgiIGhlaWdodD0iMjgiIHZpZXdCb3g9IjAgMCA0MyAyOCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KCTxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CgkJPHBhdGggZD0iTTI4LjgzMzIgMTIuMzM0TDMyLjk5OTggMTYuNTAwN0wzNy4xNjY1IDEyLjMzNEgyOC44MzMyWiIvPgoJCTxwYXRoIGQ9Ik0xNi4yMDk1IDIxLjYxMDRDMTUuNjg3MyAyMi4xMjk5IDE0Ljg0NDMgMjIuMTI5OSAxNC4zMjQ4IDIxLjYxMDRMNi45ODI5IDE0LjcyNDVDNi41NzI0IDE0LjMzOTQgNi4wODMxMyAxMy42MDk4IDYuMDQ3ODYgMTMuMDQ4MkM1Ljk1MzQ3IDExLjUyODggNi4wMjAwMiA4LjYxOTQ0IDYuMDY2MjEgNy4wNzY5NUM2LjA4MjgxIDYuNTE0NzcgNi41NTU0OCA2LjA0MzQ3IDcuMTE4MDQgNi4wMzA1NUM5LjA4ODYzIDUuOTg0NzMgMTMuMjYzOCA1LjkzNTc5IDEzLjY1MTggNi4zMjQyNUwyMS43MzY5IDEzLjYzOUMyMi4yNTYgMTQuMTU4NSAyMS43ODUxIDE1LjQ3MjQgMjEuMjYyIDE1Ljk5NDZMMTYuMjA5NSAyMS42MTA0Wk05Ljc3NTg1IDguMjY1QzkuMzM1NTEgNy44MjU2NiA4LjYyMzUxIDcuODI1NjYgOC4xODI4IDguMjY1QzcuNzQzNDYgOC43MDU3MSA3Ljc0MzQ2IDkuNDE3MzMgOC4xODI4IDkuODU2NjdDOC42MjM4MiAxMC4yOTY0IDkuMzM1ODIgMTAuMjk2NCA5Ljc3NTg1IDkuODU2NjdDMTAuMjE1NiA5LjQxNzMzIDEwLjIxNTYgOC43MDUzMyA5Ljc3NTg1IDguMjY1WiIvPgoJPC9nPgo8L3N2Zz4K);
  --jp-icon-terminal: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0IiA+CiAgICA8cmVjdCBjbGFzcz0ianAtdGVybWluYWwtaWNvbi1iYWNrZ3JvdW5kLWNvbG9yIGpwLWljb24tc2VsZWN0YWJsZSIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyIDIpIiBmaWxsPSIjMzMzMzMzIi8+CiAgICA8cGF0aCBjbGFzcz0ianAtdGVybWluYWwtaWNvbi1jb2xvciBqcC1pY29uLXNlbGVjdGFibGUtaW52ZXJzZSIgZD0iTTUuMDU2NjQgOC43NjE3MkM1LjA1NjY0IDguNTk3NjYgNS4wMzEyNSA4LjQ1MzEyIDQuOTgwNDcgOC4zMjgxMkM0LjkzMzU5IDguMTk5MjIgNC44NTU0NyA4LjA4MjAzIDQuNzQ2MDkgNy45NzY1NkM0LjY0MDYyIDcuODcxMDkgNC41IDcuNzc1MzkgNC4zMjQyMiA3LjY4OTQ1QzQuMTUyMzQgNy41OTk2MSAzLjk0MzM2IDcuNTExNzIgMy42OTcyNyA3LjQyNTc4QzMuMzAyNzMgNy4yODUxNiAyLjk0MzM2IDcuMTM2NzIgMi42MTkxNCA2Ljk4MDQ3QzIuMjk0OTIgNi44MjQyMiAyLjAxNzU4IDYuNjQyNTggMS43ODcxMSA2LjQzNTU1QzEuNTYwNTUgNi4yMjg1MiAxLjM4NDc3IDUuOTg4MjggMS4yNTk3NyA1LjcxNDg0QzEuMTM0NzcgNS40Mzc1IDEuMDcyMjcgNS4xMDkzOCAxLjA3MjI3IDQuNzMwNDdDMS4wNzIyNyA0LjM5ODQ0IDEuMTI4OTEgNC4wOTU3IDEuMjQyMTkgMy44MjIyN0MxLjM1NTQ3IDMuNTQ0OTIgMS41MTU2MiAzLjMwNDY5IDEuNzIyNjYgMy4xMDE1NkMxLjkyOTY5IDIuODk4NDQgMi4xNzk2OSAyLjczNDM3IDIuNDcyNjYgMi42MDkzOEMyLjc2NTYyIDIuNDg0MzggMy4wOTE4IDIuNDA0MyAzLjQ1MTE3IDIuMzY5MTRWMS4xMDkzOEg0LjM4ODY3VjIuMzgwODZDNC43NDAyMyAyLjQyNzczIDUuMDU2NjQgMi41MjM0NCA1LjMzNzg5IDIuNjY3OTdDNS42MTkxNCAyLjgxMjUgNS44NTc0MiAzLjAwMTk1IDYuMDUyNzMgMy4yMzYzM0M2LjI1MTk1IDMuNDY2OCA2LjQwNDMgMy43NDAyMyA2LjUwOTc3IDQuMDU2NjRDNi42MTkxNCA0LjM2OTE0IDYuNjczODMgNC43MjA3IDYuNjczODMgNS4xMTEzM0g1LjA0NDkyQzUuMDQ0OTIgNC42Mzg2NyA0LjkzNzUgNC4yODEyNSA0LjcyMjY2IDQuMDM5MDZDNC41MDc4MSAzLjc5Mjk3IDQuMjE2OCAzLjY2OTkyIDMuODQ5NjEgMy42Njk5MkMzLjY1MDM5IDMuNjY5OTIgMy40NzY1NiAzLjY5NzI3IDMuMzI4MTIgMy43NTE5NUMzLjE4MzU5IDMuODAyNzMgMy4wNjQ0NSAzLjg3Njk1IDIuOTcwNyAzLjk3NDYxQzIuODc2OTUgNC4wNjgzNiAyLjgwNjY0IDQuMTc5NjkgMi43NTk3NyA0LjMwODU5QzIuNzE2OCA0LjQzNzUgMi42OTUzMSA0LjU3ODEyIDIuNjk1MzEgNC43MzA0N0MyLjY5NTMxIDQuODgyODEgMi43MTY4IDUuMDE5NTMgMi43NTk3NyA1LjE0MDYyQzIuODA2NjQgNS4yNTc4MSAyLjg4MjgxIDUuMzY3MTkgMi45ODgyOCA1LjQ2ODc1QzMuMDk3NjYgNS41NzAzMSAzLjI0MDIzIDUuNjY3OTcgMy40MTYwMiA1Ljc2MTcyQzMuNTkxOCA1Ljg1MTU2IDMuODEwNTUgNS45NDMzNiA0LjA3MjI3IDYuMDM3MTFDNC40NjY4IDYuMTg1NTUgNC44MjQyMiA2LjMzOTg0IDUuMTQ0NTMgNi41QzUuNDY0ODQgNi42NTYyNSA1LjczODI4IDYuODM5ODQgNS45NjQ4NCA3LjA1MDc4QzYuMTk1MzEgNy4yNTc4MSA2LjM3MTA5IDcuNSA2LjQ5MjE5IDcuNzc3MzRDNi42MTcxOSA4LjA1MDc4IDYuNjc5NjkgOC4zNzUgNi42Nzk2OSA4Ljc1QzYuNjc5NjkgOS4wOTM3NSA2LjYyMzA1IDkuNDA0MyA2LjUwOTc3IDkuNjgxNjRDNi4zOTY0OCA5Ljk1NTA4IDYuMjM0MzggMTAuMTkxNCA2LjAyMzQ0IDEwLjM5MDZDNS44MTI1IDEwLjU4OTggNS41NTg1OSAxMC43NSA1LjI2MTcyIDEwLjg3MTFDNC45NjQ4NCAxMC45ODgzIDQuNjMyODEgMTEuMDY0NSA0LjI2NTYyIDExLjA5OTZWMTIuMjQ4SDMuMzMzOThWMTEuMDk5NkMzLjAwMTk1IDExLjA2ODQgMi42Nzk2OSAxMC45OTYxIDIuMzY3MTkgMTAuODgyOEMyLjA1NDY5IDEwLjc2NTYgMS43NzczNCAxMC41OTc3IDEuNTM1MTYgMTAuMzc4OUMxLjI5Njg4IDEwLjE2MDIgMS4xMDU0NyA5Ljg4NDc3IDAuOTYwOTM4IDkuNTUyNzNDMC44MTY0MDYgOS4yMTY4IDAuNzQ0MTQxIDguODE0NDUgMC43NDQxNDEgOC4zNDU3SDIuMzc4OTFDMi4zNzg5MSA4LjYyNjk1IDIuNDE5OTIgOC44NjMyOCAyLjUwMTk1IDkuMDU0NjlDMi41ODM5OCA5LjI0MjE5IDIuNjg5NDUgOS4zOTI1OCAyLjgxODM2IDkuNTA1ODZDMi45NTExNyA5LjYxNTIzIDMuMTAxNTYgOS42OTMzNiAzLjI2OTUzIDkuNzQwMjNDMy40Mzc1IDkuNzg3MTEgMy42MDkzOCA5LjgxMDU1IDMuNzg1MTYgOS44MTA1NUM0LjIwMzEyIDkuODEwNTUgNC41MTk1MyA5LjcxMjg5IDQuNzM0MzggOS41MTc1OEM0Ljk0OTIyIDkuMzIyMjcgNS4wNTY2NCA5LjA3MDMxIDUuMDU2NjQgOC43NjE3MlpNMTMuNDE4IDEyLjI3MTVIOC4wNzQyMlYxMUgxMy40MThWMTIuMjcxNVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMuOTUyNjQgNikiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=);
  --jp-icon-text-editor: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8cGF0aCBjbGFzcz0ianAtdGV4dC1lZGl0b3ItaWNvbi1jb2xvciBqcC1pY29uLXNlbGVjdGFibGUiIGZpbGw9IiM2MTYxNjEiIGQ9Ik0xNSAxNUgzdjJoMTJ2LTJ6bTAtOEgzdjJoMTJWN3pNMyAxM2gxOHYtMkgzdjJ6bTAgOGgxOHYtMkgzdjJ6TTMgM3YyaDE4VjNIM3oiLz4KPC9zdmc+Cg==);
  --jp-icon-toc: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij4KICA8ZyBjbGFzcz0ianAtaWNvbjMganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjNjE2MTYxIj4KICAgIDxwYXRoIGQ9Ik03LDVIMjFWN0g3VjVNNywxM1YxMUgyMVYxM0g3TTQsNC41QTEuNSwxLjUgMCAwLDEgNS41LDZBMS41LDEuNSAwIDAsMSA0LDcuNUExLjUsMS41IDAgMCwxIDIuNSw2QTEuNSwxLjUgMCAwLDEgNCw0LjVNNCwxMC41QTEuNSwxLjUgMCAwLDEgNS41LDEyQTEuNSwxLjUgMCAwLDEgNCwxMy41QTEuNSwxLjUgMCAwLDEgMi41LDEyQTEuNSwxLjUgMCAwLDEgNCwxMC41TTcsMTlWMTdIMjFWMTlIN000LDE2LjVBMS41LDEuNSAwIDAsMSA1LjUsMThBMS41LDEuNSAwIDAsMSA0LDE5LjVBMS41LDEuNSAwIDAsMSAyLjUsMThBMS41LDEuNSAwIDAsMSA0LDE2LjVaIiAvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-tree-view: url(data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsYXNzPSJqcC1pY29uMyIgZmlsbD0iIzYxNjE2MSI+CiAgICAgICAgPHBhdGggZD0iTTAgMGgyNHYyNEgweiIgZmlsbD0ibm9uZSIvPgogICAgICAgIDxwYXRoIGQ9Ik0yMiAxMVYzaC03djNIOVYzSDJ2OGg3VjhoMnYxMGg0djNoN3YtOGgtN3YzaC0yVjhoMnYzeiIvPgogICAgPC9nPgo8L3N2Zz4K);
  --jp-icon-trusted: url(data:image/svg+xml;base64,PHN2ZyBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDI0IDI1Ij4KICAgIDxwYXRoIGNsYXNzPSJqcC1pY29uMiIgc3Ryb2tlPSIjMzMzMzMzIiBzdHJva2Utd2lkdGg9IjIiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIgMykiIGQ9Ik0xLjg2MDk0IDExLjQ0MDlDMC44MjY0NDggOC43NzAyNyAwLjg2Mzc3OSA2LjA1NzY0IDEuMjQ5MDcgNC4xOTkzMkMyLjQ4MjA2IDMuOTMzNDcgNC4wODA2OCAzLjQwMzQ3IDUuNjAxMDIgMi44NDQ5QzcuMjM1NDkgMi4yNDQ0IDguODU2NjYgMS41ODE1IDkuOTg3NiAxLjA5NTM5QzExLjA1OTcgMS41ODM0MSAxMi42MDk0IDIuMjQ0NCAxNC4yMTggMi44NDMzOUMxNS43NTAzIDMuNDEzOTQgMTcuMzk5NSAzLjk1MjU4IDE4Ljc1MzkgNC4yMTM4NUMxOS4xMzY0IDYuMDcxNzcgMTkuMTcwOSA4Ljc3NzIyIDE4LjEzOSAxMS40NDA5QzE3LjAzMDMgMTQuMzAzMiAxNC42NjY4IDE3LjE4NDQgOS45OTk5OSAxOC45MzU0QzUuMzMzMiAxNy4xODQ0IDIuOTY5NjggMTQuMzAzMiAxLjg2MDk0IDExLjQ0MDlaIi8+CiAgICA8cGF0aCBjbGFzcz0ianAtaWNvbjIiIGZpbGw9IiMzMzMzMzMiIHN0cm9rZT0iIzMzMzMzMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOCA5Ljg2NzE5KSIgZD0iTTIuODYwMTUgNC44NjUzNUwwLjcyNjU0OSAyLjk5OTU5TDAgMy42MzA0NUwyLjg2MDE1IDYuMTMxNTdMOCAwLjYzMDg3Mkw3LjI3ODU3IDBMMi44NjAxNSA0Ljg2NTM1WiIvPgo8L3N2Zz4K);
  --jp-icon-undo: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMjQgMjQiIHdpZHRoPSIxNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTEyLjUgOGMtMi42NSAwLTUuMDUuOTktNi45IDIuNkwyIDd2OWg5bC0zLjYyLTMuNjJjMS4zOS0xLjE2IDMuMTYtMS44OCA1LjEyLTEuODggMy41NCAwIDYuNTUgMi4zMSA3LjYgNS41bDIuMzctLjc4QzIxLjA4IDExLjAzIDE3LjE1IDggMTIuNSA4eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-user: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIHZpZXdCb3g9IjAgMCAyNCAyNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8ZyBjbGFzcz0ianAtaWNvbjMiIGZpbGw9IiM2MTYxNjEiPgogICAgPHBhdGggZD0iTTE2IDdhNCA0IDAgMTEtOCAwIDQgNCAwIDAxOCAwek0xMiAxNGE3IDcgMCAwMC03IDdoMTRhNyA3IDAgMDAtNy03eiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-users: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDM2IDI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgogPGcgY2xhc3M9ImpwLWljb24zIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjczMjcgMCAwIDEuNzMyNyAtMy42MjgyIC4wOTk1NzcpIiBmaWxsPSIjNjE2MTYxIj4KICA8cGF0aCB0cmFuc2Zvcm09Im1hdHJpeCgxLjUsMCwwLDEuNSwwLC02KSIgZD0ibTEyLjE4NiA3LjUwOThjLTEuMDUzNSAwLTEuOTc1NyAwLjU2NjUtMi40Nzg1IDEuNDEwMiAwLjc1MDYxIDAuMzEyNzcgMS4zOTc0IDAuODI2NDggMS44NzMgMS40NzI3aDMuNDg2M2MwLTEuNTkyLTEuMjg4OS0yLjg4MjgtMi44ODA5LTIuODgyOHoiLz4KICA8cGF0aCBkPSJtMjAuNDY1IDIuMzg5NWEyLjE4ODUgMi4xODg1IDAgMCAxLTIuMTg4NCAyLjE4ODUgMi4xODg1IDIuMTg4NSAwIDAgMS0yLjE4ODUtMi4xODg1IDIuMTg4NSAyLjE4ODUgMCAwIDEgMi4xODg1LTIuMTg4NSAyLjE4ODUgMi4xODg1IDAgMCAxIDIuMTg4NCAyLjE4ODV6Ii8+CiAgPHBhdGggdHJhbnNmb3JtPSJtYXRyaXgoMS41LDAsMCwxLjUsMCwtNikiIGQ9Im0zLjU4OTggOC40MjE5Yy0xLjExMjYgMC0yLjAxMzcgMC45MDExMS0yLjAxMzcgMi4wMTM3aDIuODE0NWMwLjI2Nzk3LTAuMzczMDkgMC41OTA3LTAuNzA0MzUgMC45NTg5OC0wLjk3ODUyLTAuMzQ0MzMtMC42MTY4OC0xLjAwMzEtMS4wMzUyLTEuNzU5OC0xLjAzNTJ6Ii8+CiAgPHBhdGggZD0ibTYuOTE1NCA0LjYyM2ExLjUyOTQgMS41Mjk0IDAgMCAxLTEuNTI5NCAxLjUyOTQgMS41Mjk0IDEuNTI5NCAwIDAgMS0xLjUyOTQtMS41Mjk0IDEuNTI5NCAxLjUyOTQgMCAwIDEgMS41Mjk0LTEuNTI5NCAxLjUyOTQgMS41Mjk0IDAgMCAxIDEuNTI5NCAxLjUyOTR6Ii8+CiAgPHBhdGggZD0ibTYuMTM1IDEzLjUzNWMwLTMuMjM5MiAyLjYyNTktNS44NjUgNS44NjUtNS44NjUgMy4yMzkyIDAgNS44NjUgMi42MjU5IDUuODY1IDUuODY1eiIvPgogIDxjaXJjbGUgY3g9IjEyIiBjeT0iMy43Njg1IiByPSIyLjk2ODUiLz4KIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-vega: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtaWNvbjEganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjMjEyMTIxIj4KICAgIDxwYXRoIGQ9Ik0xMC42IDUuNGwyLjItMy4ySDIuMnY3LjNsNC02LjZ6Ii8+CiAgICA8cGF0aCBkPSJNMTUuOCAyLjJsLTQuNCA2LjZMNyA2LjNsLTQuOCA4djUuNWgxNy42VjIuMmgtNHptLTcgMTUuNEg1LjV2LTQuNGgzLjN2NC40em00LjQgMEg5LjhWOS44aDMuNHY3Ljh6bTQuNCAwaC0zLjRWNi41aDMuNHYxMS4xeiIvPgogIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-word: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIwIDIwIj4KIDxnIGNsYXNzPSJqcC1pY29uMiIgZmlsbD0iIzQxNDE0MSI+CiAgPHJlY3QgeD0iMiIgeT0iMiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+CiA8L2c+CiA8ZyBjbGFzcz0ianAtaWNvbi1hY2NlbnQyIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSguNDMgLjA0MDEpIiBmaWxsPSIjZmZmIj4KICA8cGF0aCBkPSJtNC4xNCA4Ljc2cTAuMDY4Mi0xLjg5IDIuNDItMS44OSAxLjE2IDAgMS42OCAwLjQyIDAuNTY3IDAuNDEgMC41NjcgMS4xNnYzLjQ3cTAgMC40NjIgMC41MTQgMC40NjIgMC4xMDMgMCAwLjItMC4wMjMxdjAuNzE0cS0wLjM5OSAwLjEwMy0wLjY1MSAwLjEwMy0wLjQ1MiAwLTAuNjkzLTAuMjItMC4yMzEtMC4yLTAuMjg0LTAuNjYyLTAuOTU2IDAuODcyLTIgMC44NzItMC45MDMgMC0xLjQ3LTAuNDcyLTAuNTI1LTAuNDcyLTAuNTI1LTEuMjYgMC0wLjI2MiAwLjA0NTItMC40NzIgMC4wNTY3LTAuMjIgMC4xMTYtMC4zNzggMC4wNjgyLTAuMTY4IDAuMjMxLTAuMzA0IDAuMTU4LTAuMTQ3IDAuMjYyLTAuMjQyIDAuMTE2LTAuMDkxNCAwLjM2OC0wLjE2OCAwLjI2Mi0wLjA5MTQgMC4zOTktMC4xMjYgMC4xMzYtMC4wNDUyIDAuNDcyLTAuMTAzIDAuMzM2LTAuMDU3OCAwLjUwNC0wLjA3OTggMC4xNTgtMC4wMjMxIDAuNTY3LTAuMDc5OCAwLjU1Ni0wLjA2ODIgMC43NzctMC4yMjEgMC4yMi0wLjE1MiAwLjIyLTAuNDQxdi0wLjI1MnEwLTAuNDMtMC4zNTctMC42NjItMC4zMzYtMC4yMzEtMC45NzYtMC4yMzEtMC42NjIgMC0wLjk5OCAwLjI2Mi0wLjMzNiAwLjI1Mi0wLjM5OSAwLjc5OHptMS44OSAzLjY4cTAuNzg4IDAgMS4yNi0wLjQxIDAuNTA0LTAuNDIgMC41MDQtMC45MDN2LTEuMDVxLTAuMjg0IDAuMTM2LTAuODYxIDAuMjMxLTAuNTY3IDAuMDkxNC0wLjk4NyAwLjE1OC0wLjQyIDAuMDY4Mi0wLjc2NiAwLjMyNi0wLjMzNiAwLjI1Mi0wLjMzNiAwLjcwNHQwLjMwNCAwLjcwNCAwLjg2MSAwLjI1MnoiIHN0cm9rZS13aWR0aD0iMS4wNSIvPgogIDxwYXRoIGQ9Im0xMCA0LjU2aDAuOTQ1djMuMTVxMC42NTEtMC45NzYgMS44OS0wLjk3NiAxLjE2IDAgMS44OSAwLjg0IDAuNjgyIDAuODQgMC42ODIgMi4zMSAwIDEuNDctMC43MDQgMi40Mi0wLjcwNCAwLjg4Mi0xLjg5IDAuODgyLTEuMjYgMC0xLjg5LTEuMDJ2MC43NjZoLTAuODV6bTIuNjIgMy4wNHEtMC43NDYgMC0xLjE2IDAuNjQtMC40NTIgMC42My0wLjQ1MiAxLjY4IDAgMS4wNSAwLjQ1MiAxLjY4dDEuMTYgMC42M3EwLjc3NyAwIDEuMjYtMC42MyAwLjQ5NC0wLjY0IDAuNDk0LTEuNjggMC0xLjA1LTAuNDcyLTEuNjgtMC40NjItMC42NC0xLjI2LTAuNjR6IiBzdHJva2Utd2lkdGg9IjEuMDUiLz4KICA8cGF0aCBkPSJtMi43MyAxNS44IDEzLjYgMC4wMDgxYzAuMDA2OSAwIDAtMi42IDAtMi42IDAtMC4wMDc4LTEuMTUgMC0xLjE1IDAtMC4wMDY5IDAtMC4wMDgzIDEuNS0wLjAwODMgMS41LTJlLTMgLTAuMDAxNC0xMS4zLTAuMDAxNC0xMS4zLTAuMDAxNGwtMC4wMDU5Mi0xLjVjMC0wLjAwNzgtMS4xNyAwLjAwMTMtMS4xNyAwLjAwMTN6IiBzdHJva2Utd2lkdGg9Ii45NzUiLz4KIDwvZz4KPC9zdmc+Cg==);
  --jp-icon-yaml: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgdmlld0JveD0iMCAwIDIyIDIyIj4KICA8ZyBjbGFzcz0ianAtaWNvbi1jb250cmFzdDIganAtaWNvbi1zZWxlY3RhYmxlIiBmaWxsPSIjRDgxQjYwIj4KICAgIDxwYXRoIGQ9Ik03LjIgMTguNnYtNS40TDMgNS42aDMuM2wxLjQgMy4xYy4zLjkuNiAxLjYgMSAyLjUuMy0uOC42LTEuNiAxLTIuNWwxLjQtMy4xaDMuNGwtNC40IDcuNnY1LjVsLTIuOS0uMXoiLz4KICAgIDxjaXJjbGUgY2xhc3M9InN0MCIgY3g9IjE3LjYiIGN5PSIxNi41IiByPSIyLjEiLz4KICAgIDxjaXJjbGUgY2xhc3M9InN0MCIgY3g9IjE3LjYiIGN5PSIxMSIgcj0iMi4xIi8+CiAgPC9nPgo8L3N2Zz4K);
}

/* Icon CSS class declarations */

.jp-AddAboveIcon {
  background-image: var(--jp-icon-add-above);
}

.jp-AddBelowIcon {
  background-image: var(--jp-icon-add-below);
}

.jp-AddIcon {
  background-image: var(--jp-icon-add);
}

.jp-BellIcon {
  background-image: var(--jp-icon-bell);
}

.jp-BugDotIcon {
  background-image: var(--jp-icon-bug-dot);
}

.jp-BugIcon {
  background-image: var(--jp-icon-bug);
}

.jp-BuildIcon {
  background-image: var(--jp-icon-build);
}

.jp-CaretDownEmptyIcon {
  background-image: var(--jp-icon-caret-down-empty);
}

.jp-CaretDownEmptyThinIcon {
  background-image: var(--jp-icon-caret-down-empty-thin);
}

.jp-CaretDownIcon {
  background-image: var(--jp-icon-caret-down);
}

.jp-CaretLeftIcon {
  background-image: var(--jp-icon-caret-left);
}

.jp-CaretRightIcon {
  background-image: var(--jp-icon-caret-right);
}

.jp-CaretUpEmptyThinIcon {
  background-image: var(--jp-icon-caret-up-empty-thin);
}

.jp-CaretUpIcon {
  background-image: var(--jp-icon-caret-up);
}

.jp-CaseSensitiveIcon {
  background-image: var(--jp-icon-case-sensitive);
}

.jp-CheckIcon {
  background-image: var(--jp-icon-check);
}

.jp-CircleEmptyIcon {
  background-image: var(--jp-icon-circle-empty);
}

.jp-CircleIcon {
  background-image: var(--jp-icon-circle);
}

.jp-ClearIcon {
  background-image: var(--jp-icon-clear);
}

.jp-CloseIcon {
  background-image: var(--jp-icon-close);
}

.jp-CodeCheckIcon {
  background-image: var(--jp-icon-code-check);
}

.jp-CodeIcon {
  background-image: var(--jp-icon-code);
}

.jp-CollapseAllIcon {
  background-image: var(--jp-icon-collapse-all);
}

.jp-ConsoleIcon {
  background-image: var(--jp-icon-console);
}

.jp-CopyIcon {
  background-image: var(--jp-icon-copy);
}

.jp-CopyrightIcon {
  background-image: var(--jp-icon-copyright);
}

.jp-CutIcon {
  background-image: var(--jp-icon-cut);
}

.jp-DeleteIcon {
  background-image: var(--jp-icon-delete);
}

.jp-DownloadIcon {
  background-image: var(--jp-icon-download);
}

.jp-DuplicateIcon {
  background-image: var(--jp-icon-duplicate);
}

.jp-EditIcon {
  background-image: var(--jp-icon-edit);
}

.jp-EllipsesIcon {
  background-image: var(--jp-icon-ellipses);
}

.jp-ErrorIcon {
  background-image: var(--jp-icon-error);
}

.jp-ExpandAllIcon {
  background-image: var(--jp-icon-expand-all);
}

.jp-ExtensionIcon {
  background-image: var(--jp-icon-extension);
}

.jp-FastForwardIcon {
  background-image: var(--jp-icon-fast-forward);
}

.jp-FileIcon {
  background-image: var(--jp-icon-file);
}

.jp-FileUploadIcon {
  background-image: var(--jp-icon-file-upload);
}

.jp-FilterDotIcon {
  background-image: var(--jp-icon-filter-dot);
}

.jp-FilterIcon {
  background-image: var(--jp-icon-filter);
}

.jp-FilterListIcon {
  background-image: var(--jp-icon-filter-list);
}

.jp-FolderFavoriteIcon {
  background-image: var(--jp-icon-folder-favorite);
}

.jp-FolderIcon {
  background-image: var(--jp-icon-folder);
}

.jp-HomeIcon {
  background-image: var(--jp-icon-home);
}

.jp-Html5Icon {
  background-image: var(--jp-icon-html5);
}

.jp-ImageIcon {
  background-image: var(--jp-icon-image);
}

.jp-InfoIcon {
  background-image: var(--jp-icon-info);
}

.jp-InspectorIcon {
  background-image: var(--jp-icon-inspector);
}

.jp-JsonIcon {
  background-image: var(--jp-icon-json);
}

.jp-JuliaIcon {
  background-image: var(--jp-icon-julia);
}

.jp-JupyterFaviconIcon {
  background-image: var(--jp-icon-jupyter-favicon);
}

.jp-JupyterIcon {
  background-image: var(--jp-icon-jupyter);
}

.jp-JupyterlabWordmarkIcon {
  background-image: var(--jp-icon-jupyterlab-wordmark);
}

.jp-KernelIcon {
  background-image: var(--jp-icon-kernel);
}

.jp-KeyboardIcon {
  background-image: var(--jp-icon-keyboard);
}

.jp-LaunchIcon {
  background-image: var(--jp-icon-launch);
}

.jp-LauncherIcon {
  background-image: var(--jp-icon-launcher);
}

.jp-LineFormIcon {
  background-image: var(--jp-icon-line-form);
}

.jp-LinkIcon {
  background-image: var(--jp-icon-link);
}

.jp-ListIcon {
  background-image: var(--jp-icon-list);
}

.jp-MarkdownIcon {
  background-image: var(--jp-icon-markdown);
}

.jp-MoveDownIcon {
  background-image: var(--jp-icon-move-down);
}

.jp-MoveUpIcon {
  background-image: var(--jp-icon-move-up);
}

.jp-NewFolderIcon {
  background-image: var(--jp-icon-new-folder);
}

.jp-NotTrustedIcon {
  background-image: var(--jp-icon-not-trusted);
}

.jp-NotebookIcon {
  background-image: var(--jp-icon-notebook);
}

.jp-NumberingIcon {
  background-image: var(--jp-icon-numbering);
}

.jp-OfflineBoltIcon {
  background-image: var(--jp-icon-offline-bolt);
}

.jp-PaletteIcon {
  background-image: var(--jp-icon-palette);
}

.jp-PasteIcon {
  background-image: var(--jp-icon-paste);
}

.jp-PdfIcon {
  background-image: var(--jp-icon-pdf);
}

.jp-PythonIcon {
  background-image: var(--jp-icon-python);
}

.jp-RKernelIcon {
  background-image: var(--jp-icon-r-kernel);
}

.jp-ReactIcon {
  background-image: var(--jp-icon-react);
}

.jp-RedoIcon {
  background-image: var(--jp-icon-redo);
}

.jp-RefreshIcon {
  background-image: var(--jp-icon-refresh);
}

.jp-RegexIcon {
  background-image: var(--jp-icon-regex);
}

.jp-RunIcon {
  background-image: var(--jp-icon-run);
}

.jp-RunningIcon {
  background-image: var(--jp-icon-running);
}

.jp-SaveIcon {
  background-image: var(--jp-icon-save);
}

.jp-SearchIcon {
  background-image: var(--jp-icon-search);
}

.jp-SettingsIcon {
  background-image: var(--jp-icon-settings);
}

.jp-ShareIcon {
  background-image: var(--jp-icon-share);
}

.jp-SpreadsheetIcon {
  background-image: var(--jp-icon-spreadsheet);
}

.jp-StopIcon {
  background-image: var(--jp-icon-stop);
}

.jp-TabIcon {
  background-image: var(--jp-icon-tab);
}

.jp-TableRowsIcon {
  background-image: var(--jp-icon-table-rows);
}

.jp-TagIcon {
  background-image: var(--jp-icon-tag);
}

.jp-TerminalIcon {
  background-image: var(--jp-icon-terminal);
}

.jp-TextEditorIcon {
  background-image: var(--jp-icon-text-editor);
}

.jp-TocIcon {
  background-image: var(--jp-icon-toc);
}

.jp-TreeViewIcon {
  background-image: var(--jp-icon-tree-view);
}

.jp-TrustedIcon {
  background-image: var(--jp-icon-trusted);
}

.jp-UndoIcon {
  background-image: var(--jp-icon-undo);
}

.jp-UserIcon {
  background-image: var(--jp-icon-user);
}

.jp-UsersIcon {
  background-image: var(--jp-icon-users);
}

.jp-VegaIcon {
  background-image: var(--jp-icon-vega);
}

.jp-WordIcon {
  background-image: var(--jp-icon-word);
}

.jp-YamlIcon {
  background-image: var(--jp-icon-yaml);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/**
 * (DEPRECATED) Support for consuming icons as CSS background images
 */

.jp-Icon,
.jp-MaterialIcon {
  background-position: center;
  background-repeat: no-repeat;
  background-size: 16px;
  min-width: 16px;
  min-height: 16px;
}

.jp-Icon-cover {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/**
 * (DEPRECATED) Support for specific CSS icon sizes
 */

.jp-Icon-16 {
  background-size: 16px;
  min-width: 16px;
  min-height: 16px;
}

.jp-Icon-18 {
  background-size: 18px;
  min-width: 18px;
  min-height: 18px;
}

.jp-Icon-20 {
  background-size: 20px;
  min-width: 20px;
  min-height: 20px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.lm-TabBar .lm-TabBar-addButton {
  align-items: center;
  display: flex;
  padding: 4px;
  padding-bottom: 5px;
  margin-right: 1px;
  background-color: var(--jp-layout-color2);
}

.lm-TabBar .lm-TabBar-addButton:hover {
  background-color: var(--jp-layout-color1);
}

.lm-DockPanel-tabBar .lm-TabBar-tab {
  width: var(--jp-private-horizontal-tab-width);
}

.lm-DockPanel-tabBar .lm-TabBar-content {
  flex: unset;
}

.lm-DockPanel-tabBar[data-orientation='horizontal'] {
  flex: 1 1 auto;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/**
 * Support for icons as inline SVG HTMLElements
 */

/* recolor the primary elements of an icon */
.jp-icon0[fill] {
  fill: var(--jp-inverse-layout-color0);
}

.jp-icon1[fill] {
  fill: var(--jp-inverse-layout-color1);
}

.jp-icon2[fill] {
  fill: var(--jp-inverse-layout-color2);
}

.jp-icon3[fill] {
  fill: var(--jp-inverse-layout-color3);
}

.jp-icon4[fill] {
  fill: var(--jp-inverse-layout-color4);
}

.jp-icon0[stroke] {
  stroke: var(--jp-inverse-layout-color0);
}

.jp-icon1[stroke] {
  stroke: var(--jp-inverse-layout-color1);
}

.jp-icon2[stroke] {
  stroke: var(--jp-inverse-layout-color2);
}

.jp-icon3[stroke] {
  stroke: var(--jp-inverse-layout-color3);
}

.jp-icon4[stroke] {
  stroke: var(--jp-inverse-layout-color4);
}

/* recolor the accent elements of an icon */
.jp-icon-accent0[fill] {
  fill: var(--jp-layout-color0);
}

.jp-icon-accent1[fill] {
  fill: var(--jp-layout-color1);
}

.jp-icon-accent2[fill] {
  fill: var(--jp-layout-color2);
}

.jp-icon-accent3[fill] {
  fill: var(--jp-layout-color3);
}

.jp-icon-accent4[fill] {
  fill: var(--jp-layout-color4);
}

.jp-icon-accent0[stroke] {
  stroke: var(--jp-layout-color0);
}

.jp-icon-accent1[stroke] {
  stroke: var(--jp-layout-color1);
}

.jp-icon-accent2[stroke] {
  stroke: var(--jp-layout-color2);
}

.jp-icon-accent3[stroke] {
  stroke: var(--jp-layout-color3);
}

.jp-icon-accent4[stroke] {
  stroke: var(--jp-layout-color4);
}

/* set the color of an icon to transparent */
.jp-icon-none[fill] {
  fill: none;
}

.jp-icon-none[stroke] {
  stroke: none;
}

/* brand icon colors. Same for light and dark */
.jp-icon-brand0[fill] {
  fill: var(--jp-brand-color0);
}

.jp-icon-brand1[fill] {
  fill: var(--jp-brand-color1);
}

.jp-icon-brand2[fill] {
  fill: var(--jp-brand-color2);
}

.jp-icon-brand3[fill] {
  fill: var(--jp-brand-color3);
}

.jp-icon-brand4[fill] {
  fill: var(--jp-brand-color4);
}

.jp-icon-brand0[stroke] {
  stroke: var(--jp-brand-color0);
}

.jp-icon-brand1[stroke] {
  stroke: var(--jp-brand-color1);
}

.jp-icon-brand2[stroke] {
  stroke: var(--jp-brand-color2);
}

.jp-icon-brand3[stroke] {
  stroke: var(--jp-brand-color3);
}

.jp-icon-brand4[stroke] {
  stroke: var(--jp-brand-color4);
}

/* warn icon colors. Same for light and dark */
.jp-icon-warn0[fill] {
  fill: var(--jp-warn-color0);
}

.jp-icon-warn1[fill] {
  fill: var(--jp-warn-color1);
}

.jp-icon-warn2[fill] {
  fill: var(--jp-warn-color2);
}

.jp-icon-warn3[fill] {
  fill: var(--jp-warn-color3);
}

.jp-icon-warn0[stroke] {
  stroke: var(--jp-warn-color0);
}

.jp-icon-warn1[stroke] {
  stroke: var(--jp-warn-color1);
}

.jp-icon-warn2[stroke] {
  stroke: var(--jp-warn-color2);
}

.jp-icon-warn3[stroke] {
  stroke: var(--jp-warn-color3);
}

/* icon colors that contrast well with each other and most backgrounds */
.jp-icon-contrast0[fill] {
  fill: var(--jp-icon-contrast-color0);
}

.jp-icon-contrast1[fill] {
  fill: var(--jp-icon-contrast-color1);
}

.jp-icon-contrast2[fill] {
  fill: var(--jp-icon-contrast-color2);
}

.jp-icon-contrast3[fill] {
  fill: var(--jp-icon-contrast-color3);
}

.jp-icon-contrast0[stroke] {
  stroke: var(--jp-icon-contrast-color0);
}

.jp-icon-contrast1[stroke] {
  stroke: var(--jp-icon-contrast-color1);
}

.jp-icon-contrast2[stroke] {
  stroke: var(--jp-icon-contrast-color2);
}

.jp-icon-contrast3[stroke] {
  stroke: var(--jp-icon-contrast-color3);
}

.jp-icon-dot[fill] {
  fill: var(--jp-warn-color0);
}

.jp-jupyter-icon-color[fill] {
  fill: var(--jp-jupyter-icon-color, var(--jp-warn-color0));
}

.jp-notebook-icon-color[fill] {
  fill: var(--jp-notebook-icon-color, var(--jp-warn-color0));
}

.jp-json-icon-color[fill] {
  fill: var(--jp-json-icon-color, var(--jp-warn-color1));
}

.jp-console-icon-color[fill] {
  fill: var(--jp-console-icon-color, white);
}

.jp-console-icon-background-color[fill] {
  fill: var(--jp-console-icon-background-color, var(--jp-brand-color1));
}

.jp-terminal-icon-color[fill] {
  fill: var(--jp-terminal-icon-color, var(--jp-layout-color2));
}

.jp-terminal-icon-background-color[fill] {
  fill: var(
    --jp-terminal-icon-background-color,
    var(--jp-inverse-layout-color2)
  );
}

.jp-text-editor-icon-color[fill] {
  fill: var(--jp-text-editor-icon-color, var(--jp-inverse-layout-color3));
}

.jp-inspector-icon-color[fill] {
  fill: var(--jp-inspector-icon-color, var(--jp-inverse-layout-color3));
}

/* CSS for icons in selected filebrowser listing items */
.jp-DirListing-item.jp-mod-selected .jp-icon-selectable[fill] {
  fill: #fff;
}

.jp-DirListing-item.jp-mod-selected .jp-icon-selectable-inverse[fill] {
  fill: var(--jp-brand-color1);
}

/* stylelint-disable selector-max-class, selector-max-compound-selectors */

/**
* TODO: come up with non css-hack solution for showing the busy icon on top
*  of the close icon
* CSS for complex behavior of close icon of tabs in the main area tabbar
*/
.lm-DockPanel-tabBar
  .lm-TabBar-tab.lm-mod-closable.jp-mod-dirty
  > .lm-TabBar-tabCloseIcon
  > :not(:hover)
  > .jp-icon3[fill] {
  fill: none;
}

.lm-DockPanel-tabBar
  .lm-TabBar-tab.lm-mod-closable.jp-mod-dirty
  > .lm-TabBar-tabCloseIcon
  > :not(:hover)
  > .jp-icon-busy[fill] {
  fill: var(--jp-inverse-layout-color3);
}

/* stylelint-enable selector-max-class, selector-max-compound-selectors */

/* CSS for icons in status bar */
#jp-main-statusbar .jp-mod-selected .jp-icon-selectable[fill] {
  fill: #fff;
}

#jp-main-statusbar .jp-mod-selected .jp-icon-selectable-inverse[fill] {
  fill: var(--jp-brand-color1);
}

/* special handling for splash icon CSS. While the theme CSS reloads during
   splash, the splash icon can loose theming. To prevent that, we set a
   default for its color variable */
:root {
  --jp-warn-color0: var(--md-orange-700);
}

/* not sure what to do with this one, used in filebrowser listing */
.jp-DragIcon {
  margin-right: 4px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/**
 * Support for alt colors for icons as inline SVG HTMLElements
 */

/* alt recolor the primary elements of an icon */
.jp-icon-alt .jp-icon0[fill] {
  fill: var(--jp-layout-color0);
}

.jp-icon-alt .jp-icon1[fill] {
  fill: var(--jp-layout-color1);
}

.jp-icon-alt .jp-icon2[fill] {
  fill: var(--jp-layout-color2);
}

.jp-icon-alt .jp-icon3[fill] {
  fill: var(--jp-layout-color3);
}

.jp-icon-alt .jp-icon4[fill] {
  fill: var(--jp-layout-color4);
}

.jp-icon-alt .jp-icon0[stroke] {
  stroke: var(--jp-layout-color0);
}

.jp-icon-alt .jp-icon1[stroke] {
  stroke: var(--jp-layout-color1);
}

.jp-icon-alt .jp-icon2[stroke] {
  stroke: var(--jp-layout-color2);
}

.jp-icon-alt .jp-icon3[stroke] {
  stroke: var(--jp-layout-color3);
}

.jp-icon-alt .jp-icon4[stroke] {
  stroke: var(--jp-layout-color4);
}

/* alt recolor the accent elements of an icon */
.jp-icon-alt .jp-icon-accent0[fill] {
  fill: var(--jp-inverse-layout-color0);
}

.jp-icon-alt .jp-icon-accent1[fill] {
  fill: var(--jp-inverse-layout-color1);
}

.jp-icon-alt .jp-icon-accent2[fill] {
  fill: var(--jp-inverse-layout-color2);
}

.jp-icon-alt .jp-icon-accent3[fill] {
  fill: var(--jp-inverse-layout-color3);
}

.jp-icon-alt .jp-icon-accent4[fill] {
  fill: var(--jp-inverse-layout-color4);
}

.jp-icon-alt .jp-icon-accent0[stroke] {
  stroke: var(--jp-inverse-layout-color0);
}

.jp-icon-alt .jp-icon-accent1[stroke] {
  stroke: var(--jp-inverse-layout-color1);
}

.jp-icon-alt .jp-icon-accent2[stroke] {
  stroke: var(--jp-inverse-layout-color2);
}

.jp-icon-alt .jp-icon-accent3[stroke] {
  stroke: var(--jp-inverse-layout-color3);
}

.jp-icon-alt .jp-icon-accent4[stroke] {
  stroke: var(--jp-inverse-layout-color4);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-icon-hoverShow:not(:hover) .jp-icon-hoverShow-content {
  display: none !important;
}

/**
 * Support for hover colors for icons as inline SVG HTMLElements
 */

/**
 * regular colors
 */

/* recolor the primary elements of an icon */
.jp-icon-hover :hover .jp-icon0-hover[fill] {
  fill: var(--jp-inverse-layout-color0);
}

.jp-icon-hover :hover .jp-icon1-hover[fill] {
  fill: var(--jp-inverse-layout-color1);
}

.jp-icon-hover :hover .jp-icon2-hover[fill] {
  fill: var(--jp-inverse-layout-color2);
}

.jp-icon-hover :hover .jp-icon3-hover[fill] {
  fill: var(--jp-inverse-layout-color3);
}

.jp-icon-hover :hover .jp-icon4-hover[fill] {
  fill: var(--jp-inverse-layout-color4);
}

.jp-icon-hover :hover .jp-icon0-hover[stroke] {
  stroke: var(--jp-inverse-layout-color0);
}

.jp-icon-hover :hover .jp-icon1-hover[stroke] {
  stroke: var(--jp-inverse-layout-color1);
}

.jp-icon-hover :hover .jp-icon2-hover[stroke] {
  stroke: var(--jp-inverse-layout-color2);
}

.jp-icon-hover :hover .jp-icon3-hover[stroke] {
  stroke: var(--jp-inverse-layout-color3);
}

.jp-icon-hover :hover .jp-icon4-hover[stroke] {
  stroke: var(--jp-inverse-layout-color4);
}

/* recolor the accent elements of an icon */
.jp-icon-hover :hover .jp-icon-accent0-hover[fill] {
  fill: var(--jp-layout-color0);
}

.jp-icon-hover :hover .jp-icon-accent1-hover[fill] {
  fill: var(--jp-layout-color1);
}

.jp-icon-hover :hover .jp-icon-accent2-hover[fill] {
  fill: var(--jp-layout-color2);
}

.jp-icon-hover :hover .jp-icon-accent3-hover[fill] {
  fill: var(--jp-layout-color3);
}

.jp-icon-hover :hover .jp-icon-accent4-hover[fill] {
  fill: var(--jp-layout-color4);
}

.jp-icon-hover :hover .jp-icon-accent0-hover[stroke] {
  stroke: var(--jp-layout-color0);
}

.jp-icon-hover :hover .jp-icon-accent1-hover[stroke] {
  stroke: var(--jp-layout-color1);
}

.jp-icon-hover :hover .jp-icon-accent2-hover[stroke] {
  stroke: var(--jp-layout-color2);
}

.jp-icon-hover :hover .jp-icon-accent3-hover[stroke] {
  stroke: var(--jp-layout-color3);
}

.jp-icon-hover :hover .jp-icon-accent4-hover[stroke] {
  stroke: var(--jp-layout-color4);
}

/* set the color of an icon to transparent */
.jp-icon-hover :hover .jp-icon-none-hover[fill] {
  fill: none;
}

.jp-icon-hover :hover .jp-icon-none-hover[stroke] {
  stroke: none;
}

/**
 * inverse colors
 */

/* inverse recolor the primary elements of an icon */
.jp-icon-hover.jp-icon-alt :hover .jp-icon0-hover[fill] {
  fill: var(--jp-layout-color0);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon1-hover[fill] {
  fill: var(--jp-layout-color1);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon2-hover[fill] {
  fill: var(--jp-layout-color2);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon3-hover[fill] {
  fill: var(--jp-layout-color3);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon4-hover[fill] {
  fill: var(--jp-layout-color4);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon0-hover[stroke] {
  stroke: var(--jp-layout-color0);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon1-hover[stroke] {
  stroke: var(--jp-layout-color1);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon2-hover[stroke] {
  stroke: var(--jp-layout-color2);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon3-hover[stroke] {
  stroke: var(--jp-layout-color3);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon4-hover[stroke] {
  stroke: var(--jp-layout-color4);
}

/* inverse recolor the accent elements of an icon */
.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent0-hover[fill] {
  fill: var(--jp-inverse-layout-color0);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent1-hover[fill] {
  fill: var(--jp-inverse-layout-color1);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent2-hover[fill] {
  fill: var(--jp-inverse-layout-color2);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent3-hover[fill] {
  fill: var(--jp-inverse-layout-color3);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent4-hover[fill] {
  fill: var(--jp-inverse-layout-color4);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent0-hover[stroke] {
  stroke: var(--jp-inverse-layout-color0);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent1-hover[stroke] {
  stroke: var(--jp-inverse-layout-color1);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent2-hover[stroke] {
  stroke: var(--jp-inverse-layout-color2);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent3-hover[stroke] {
  stroke: var(--jp-inverse-layout-color3);
}

.jp-icon-hover.jp-icon-alt :hover .jp-icon-accent4-hover[stroke] {
  stroke: var(--jp-inverse-layout-color4);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-IFrame {
  width: 100%;
  height: 100%;
}

.jp-IFrame > iframe {
  border: none;
}

/*
When drag events occur, `lm-mod-override-cursor` is added to the body.
Because iframes steal all cursor events, the following two rules are necessary
to suppress pointer events while resize drags are occurring. There may be a
better solution to this problem.
*/
body.lm-mod-override-cursor .jp-IFrame {
  position: relative;
}

body.lm-mod-override-cursor .jp-IFrame::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: transparent;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2016, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-HoverBox {
  position: fixed;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-FormGroup-content fieldset {
  border: none;
  padding: 0;
  min-width: 0;
  width: 100%;
}

/* stylelint-disable selector-max-type */

.jp-FormGroup-content fieldset .jp-inputFieldWrapper input,
.jp-FormGroup-content fieldset .jp-inputFieldWrapper select,
.jp-FormGroup-content fieldset .jp-inputFieldWrapper textarea {
  font-size: var(--jp-content-font-size2);
  border-color: var(--jp-input-border-color);
  border-style: solid;
  border-radius: var(--jp-border-radius);
  border-width: 1px;
  padding: 6px 8px;
  background: none;
  color: var(--jp-ui-font-color0);
  height: inherit;
}

.jp-FormGroup-content fieldset input[type='checkbox'] {
  position: relative;
  top: 2px;
  margin-left: 0;
}

.jp-FormGroup-content button.jp-mod-styled {
  cursor: pointer;
}

.jp-FormGroup-content .checkbox label {
  cursor: pointer;
  font-size: var(--jp-content-font-size1);
}

.jp-FormGroup-content .jp-root > fieldset > legend {
  display: none;
}

.jp-FormGroup-content .jp-root > fieldset > p {
  display: none;
}

/** copy of `input.jp-mod-styled:focus` style */
.jp-FormGroup-content fieldset input:focus,
.jp-FormGroup-content fieldset select:focus {
  -moz-outline-radius: unset;
  outline: var(--jp-border-width) solid var(--md-blue-500);
  outline-offset: -1px;
  box-shadow: inset 0 0 4px var(--md-blue-300);
}

.jp-FormGroup-content fieldset input:hover:not(:focus),
.jp-FormGroup-content fieldset select:hover:not(:focus) {
  background-color: var(--jp-border-color2);
}

/* stylelint-enable selector-max-type */

.jp-FormGroup-content .checkbox .field-description {
  /* Disable default description field for checkbox:
   because other widgets do not have description fields,
   we add descriptions to each widget on the field level.
  */
  display: none;
}

.jp-FormGroup-content #root__description {
  display: none;
}

.jp-FormGroup-content .jp-modifiedIndicator {
  width: 5px;
  background-color: var(--jp-brand-color2);
  margin-top: 0;
  margin-left: calc(var(--jp-private-settingeditor-modifier-indent) * -1);
  flex-shrink: 0;
}

.jp-FormGroup-content .jp-modifiedIndicator.jp-errorIndicator {
  background-color: var(--jp-error-color0);
  margin-right: 0.5em;
}

/* RJSF ARRAY style */

.jp-arrayFieldWrapper legend {
  font-size: var(--jp-content-font-size2);
  color: var(--jp-ui-font-color0);
  flex-basis: 100%;
  padding: 4px 0;
  font-weight: var(--jp-content-heading-font-weight);
  border-bottom: 1px solid var(--jp-border-color2);
}

.jp-arrayFieldWrapper .field-description {
  padding: 4px 0;
  white-space: pre-wrap;
}

.jp-arrayFieldWrapper .array-item {
  width: 100%;
  border: 1px solid var(--jp-border-color2);
  border-radius: 4px;
  margin: 4px;
}

.jp-ArrayOperations {
  display: flex;
  margin-left: 8px;
}

.jp-ArrayOperationsButton {
  margin: 2px;
}

.jp-ArrayOperationsButton .jp-icon3[fill] {
  fill: var(--jp-ui-font-color0);
}

button.jp-ArrayOperationsButton.jp-mod-styled:disabled {
  cursor: not-allowed;
  opacity: 0.5;
}

/* RJSF form validation error */

.jp-FormGroup-content .validationErrors {
  color: var(--jp-error-color0);
}

/* Hide panel level error as duplicated the field level error */
.jp-FormGroup-content .panel.errors {
  display: none;
}

/* RJSF normal content (settings-editor) */

.jp-FormGroup-contentNormal {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}

.jp-FormGroup-contentNormal .jp-FormGroup-contentItem {
  margin-left: 7px;
  color: var(--jp-ui-font-color0);
}

.jp-FormGroup-contentNormal .jp-FormGroup-description {
  flex-basis: 100%;
  padding: 4px 7px;
}

.jp-FormGroup-contentNormal .jp-FormGroup-default {
  flex-basis: 100%;
  padding: 4px 7px;
}

.jp-FormGroup-contentNormal .jp-FormGroup-fieldLabel {
  font-size: var(--jp-content-font-size1);
  font-weight: normal;
  min-width: 120px;
}

.jp-FormGroup-contentNormal fieldset:not(:first-child) {
  margin-left: 7px;
}

.jp-FormGroup-contentNormal .field-array-of-string .array-item {
  /* Display `jp-ArrayOperations` buttons side-by-side with content except
    for small screens where flex-wrap will place them one below the other.
  */
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}

.jp-FormGroup-contentNormal .jp-objectFieldWrapper .form-group {
  padding: 2px 8px 2px var(--jp-private-settingeditor-modifier-indent);
  margin-top: 2px;
}

/* RJSF compact content (metadata-form) */

.jp-FormGroup-content.jp-FormGroup-contentCompact {
  width: 100%;
}

.jp-FormGroup-contentCompact .form-group {
  display: flex;
  padding: 0.5em 0.2em 0.5em 0;
}

.jp-FormGroup-contentCompact
  .jp-FormGroup-compactTitle
  .jp-FormGroup-description {
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color2);
}

.jp-FormGroup-contentCompact .jp-FormGroup-fieldLabel {
  padding-bottom: 0.3em;
}

.jp-FormGroup-contentCompact .jp-inputFieldWrapper .form-control {
  width: 100%;
  box-sizing: border-box;
}

.jp-FormGroup-contentCompact .jp-arrayFieldWrapper .jp-FormGroup-compactTitle {
  padding-bottom: 7px;
}

.jp-FormGroup-contentCompact
  .jp-objectFieldWrapper
  .jp-objectFieldWrapper
  .form-group {
  padding: 2px 8px 2px var(--jp-private-settingeditor-modifier-indent);
  margin-top: 2px;
}

.jp-FormGroup-contentCompact ul.error-detail {
  margin-block-start: 0.5em;
  margin-block-end: 0.5em;
  padding-inline-start: 1em;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

.jp-SidePanel {
  display: flex;
  flex-direction: column;
  min-width: var(--jp-sidebar-min-width);
  overflow-y: auto;
  color: var(--jp-ui-font-color1);
  background: var(--jp-layout-color1);
  font-size: var(--jp-ui-font-size1);
}

.jp-SidePanel-header {
  flex: 0 0 auto;
  display: flex;
  border-bottom: var(--jp-border-width) solid var(--jp-border-color2);
  font-size: var(--jp-ui-font-size0);
  font-weight: 600;
  letter-spacing: 1px;
  margin: 0;
  padding: 2px;
  text-transform: uppercase;
}

.jp-SidePanel-toolbar {
  flex: 0 0 auto;
}

.jp-SidePanel-content {
  flex: 1 1 auto;
}

.jp-SidePanel-toolbar,
.jp-AccordionPanel-toolbar {
  height: var(--jp-private-toolbar-height);
}

.jp-SidePanel-toolbar.jp-Toolbar-micro {
  display: none;
}

.lm-AccordionPanel .jp-AccordionPanel-title {
  box-sizing: border-box;
  line-height: 25px;
  margin: 0;
  display: flex;
  align-items: center;
  background: var(--jp-layout-color1);
  color: var(--jp-ui-font-color1);
  border-bottom: var(--jp-border-width) solid var(--jp-toolbar-border-color);
  box-shadow: var(--jp-toolbar-box-shadow);
  font-size: var(--jp-ui-font-size0);
}

.jp-AccordionPanel-title {
  cursor: pointer;
  user-select: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  text-transform: uppercase;
}

.lm-AccordionPanel[data-orientation='horizontal'] > .jp-AccordionPanel-title {
  /* Title is rotated for horizontal accordion panel using CSS */
  display: block;
  transform-origin: top left;
  transform: rotate(-90deg) translate(-100%);
}

.jp-AccordionPanel-title .lm-AccordionPanel-titleLabel {
  user-select: none;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.jp-AccordionPanel-title .lm-AccordionPanel-titleCollapser {
  transform: rotate(-90deg);
  margin: auto 0;
  height: 16px;
}

.jp-AccordionPanel-title.lm-mod-expanded .lm-AccordionPanel-titleCollapser {
  transform: rotate(0deg);
}

.lm-AccordionPanel .jp-AccordionPanel-toolbar {
  background: none;
  box-shadow: none;
  border: none;
  margin-left: auto;
}

.lm-AccordionPanel .lm-SplitPanel-handle:hover {
  background: var(--jp-layout-color3);
}

.jp-text-truncated {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2017, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-Spinner {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 10;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: var(--jp-layout-color0);
  outline: none;
}

.jp-SpinnerContent {
  font-size: 10px;
  margin: 50px auto;
  text-indent: -9999em;
  width: 3em;
  height: 3em;
  border-radius: 50%;
  background: var(--jp-brand-color3);
  background: linear-gradient(
    to right,
    #f37626 10%,
    rgba(255, 255, 255, 0) 42%
  );
  position: relative;
  animation: load3 1s infinite linear, fadeIn 1s;
}

.jp-SpinnerContent::before {
  width: 50%;
  height: 50%;
  background: #f37626;
  border-radius: 100% 0 0;
  position: absolute;
  top: 0;
  left: 0;
  content: '';
}

.jp-SpinnerContent::after {
  background: var(--jp-layout-color0);
  width: 75%;
  height: 75%;
  border-radius: 50%;
  content: '';
  margin: auto;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }
}

@keyframes load3 {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2017, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

button.jp-mod-styled {
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color0);
  border: none;
  box-sizing: border-box;
  text-align: center;
  line-height: 32px;
  height: 32px;
  padding: 0 12px;
  letter-spacing: 0.8px;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

input.jp-mod-styled {
  background: var(--jp-input-background);
  height: 28px;
  box-sizing: border-box;
  border: var(--jp-border-width) solid var(--jp-border-color1);
  padding-left: 7px;
  padding-right: 7px;
  font-size: var(--jp-ui-font-size2);
  color: var(--jp-ui-font-color0);
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

input[type='checkbox'].jp-mod-styled {
  appearance: checkbox;
  -webkit-appearance: checkbox;
  -moz-appearance: checkbox;
  height: auto;
}

input.jp-mod-styled:focus {
  border: var(--jp-border-width) solid var(--md-blue-500);
  box-shadow: inset 0 0 4px var(--md-blue-300);
}

.jp-select-wrapper {
  display: flex;
  position: relative;
  flex-direction: column;
  padding: 1px;
  background-color: var(--jp-layout-color1);
  box-sizing: border-box;
  margin-bottom: 12px;
}

.jp-select-wrapper:not(.multiple) {
  height: 28px;
}

.jp-select-wrapper.jp-mod-focused select.jp-mod-styled {
  border: var(--jp-border-width) solid var(--jp-input-active-border-color);
  box-shadow: var(--jp-input-box-shadow);
  background-color: var(--jp-input-active-background);
}

select.jp-mod-styled:hover {
  cursor: pointer;
  color: var(--jp-ui-font-color0);
  background-color: var(--jp-input-hover-background);
  box-shadow: inset 0 0 1px rgba(0, 0, 0, 0.5);
}

select.jp-mod-styled {
  flex: 1 1 auto;
  width: 100%;
  font-size: var(--jp-ui-font-size2);
  background: var(--jp-input-background);
  color: var(--jp-ui-font-color0);
  padding: 0 25px 0 8px;
  border: var(--jp-border-width) solid var(--jp-input-border-color);
  border-radius: 0;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

select.jp-mod-styled:not([multiple]) {
  height: 32px;
}

select.jp-mod-styled[multiple] {
  max-height: 200px;
  overflow-y: auto;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-switch {
  display: flex;
  align-items: center;
  padding-left: 4px;
  padding-right: 4px;
  font-size: var(--jp-ui-font-size1);
  background-color: transparent;
  color: var(--jp-ui-font-color1);
  border: none;
  height: 20px;
}

.jp-switch:hover {
  background-color: var(--jp-layout-color2);
}

.jp-switch-label {
  margin-right: 5px;
  font-family: var(--jp-ui-font-family);
}

.jp-switch-track {
  cursor: pointer;
  background-color: var(--jp-switch-color, var(--jp-border-color1));
  -webkit-transition: 0.4s;
  transition: 0.4s;
  border-radius: 34px;
  height: 16px;
  width: 35px;
  position: relative;
}

.jp-switch-track::before {
  content: '';
  position: absolute;
  height: 10px;
  width: 10px;
  margin: 3px;
  left: 0;
  background-color: var(--jp-ui-inverse-font-color1);
  -webkit-transition: 0.4s;
  transition: 0.4s;
  border-radius: 50%;
}

.jp-switch[aria-checked='true'] .jp-switch-track {
  background-color: var(--jp-switch-true-position-color, var(--jp-warn-color0));
}

.jp-switch[aria-checked='true'] .jp-switch-track::before {
  /* track width (35) - margins (3 + 3) - thumb width (10) */
  left: 19px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2016, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

:root {
  --jp-private-toolbar-height: calc(
    28px + var(--jp-border-width)
  ); /* leave 28px for content */
}

.jp-Toolbar {
  color: var(--jp-ui-font-color1);
  flex: 0 0 auto;
  display: flex;
  flex-direction: row;
  border-bottom: var(--jp-border-width) solid var(--jp-toolbar-border-color);
  box-shadow: var(--jp-toolbar-box-shadow);
  background: var(--jp-toolbar-background);
  min-height: var(--jp-toolbar-micro-height);
  padding: 2px;
  z-index: 8;
  overflow-x: hidden;
}

/* Toolbar items */

.jp-Toolbar > .jp-Toolbar-item.jp-Toolbar-spacer {
  flex-grow: 1;
  flex-shrink: 1;
}

.jp-Toolbar-item.jp-Toolbar-kernelStatus {
  display: inline-block;
  width: 32px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 16px;
}

.jp-Toolbar > .jp-Toolbar-item {
  flex: 0 0 auto;
  display: flex;
  padding-left: 1px;
  padding-right: 1px;
  font-size: var(--jp-ui-font-size1);
  line-height: var(--jp-private-toolbar-height);
  height: 100%;
}

/* Toolbar buttons */

/* This is the div we use to wrap the react component into a Widget */
div.jp-ToolbarButton {
  color: transparent;
  border: none;
  box-sizing: border-box;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  padding: 0;
  margin: 0;
}

button.jp-ToolbarButtonComponent {
  background: var(--jp-layout-color1);
  border: none;
  box-sizing: border-box;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  padding: 0 6px;
  margin: 0;
  height: 24px;
  border-radius: var(--jp-border-radius);
  display: flex;
  align-items: center;
  text-align: center;
  font-size: 14px;
  min-width: unset;
  min-height: unset;
}

button.jp-ToolbarButtonComponent:disabled {
  opacity: 0.4;
}

button.jp-ToolbarButtonComponent > span {
  padding: 0;
  flex: 0 0 auto;
}

button.jp-ToolbarButtonComponent .jp-ToolbarButtonComponent-label {
  font-size: var(--jp-ui-font-size1);
  line-height: 100%;
  padding-left: 2px;
  color: var(--jp-ui-font-color1);
  font-family: var(--jp-ui-font-family);
}

#jp-main-dock-panel[data-mode='single-document']
  .jp-MainAreaWidget
  > .jp-Toolbar.jp-Toolbar-micro {
  padding: 0;
  min-height: 0;
}

#jp-main-dock-panel[data-mode='single-document']
  .jp-MainAreaWidget
  > .jp-Toolbar {
  border: none;
  box-shadow: none;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

.jp-WindowedPanel-outer {
  position: relative;
  overflow-y: auto;
}

.jp-WindowedPanel-inner {
  position: relative;
}

.jp-WindowedPanel-window {
  position: absolute;
  left: 0;
  right: 0;
  overflow: visible;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/* Sibling imports */

body {
  color: var(--jp-ui-font-color1);
  font-size: var(--jp-ui-font-size1);
}

/* Disable native link decoration styles everywhere outside of dialog boxes */
a {
  text-decoration: unset;
  color: unset;
}

a:hover {
  text-decoration: unset;
  color: unset;
}

/* Accessibility for links inside dialog box text */
.jp-Dialog-content a {
  text-decoration: revert;
  color: var(--jp-content-link-color);
}

.jp-Dialog-content a:hover {
  text-decoration: revert;
}

/* Styles for ui-components */
.jp-Button {
  color: var(--jp-ui-font-color2);
  border-radius: var(--jp-border-radius);
  padding: 0 12px;
  font-size: var(--jp-ui-font-size1);

  /* Copy from blueprint 3 */
  display: inline-flex;
  flex-direction: row;
  border: none;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  text-align: left;
  vertical-align: middle;
  min-height: 30px;
  min-width: 30px;
}

.jp-Button:disabled {
  cursor: not-allowed;
}

.jp-Button:empty {
  padding: 0 !important;
}

.jp-Button.jp-mod-small {
  min-height: 24px;
  min-width: 24px;
  font-size: 12px;
  padding: 0 7px;
}

/* Use our own theme for hover styles */
.jp-Button.jp-mod-minimal:hover {
  background-color: var(--jp-layout-color2);
}

.jp-Button.jp-mod-minimal {
  background: none;
}

.jp-InputGroup {
  display: block;
  position: relative;
}

.jp-InputGroup input {
  box-sizing: border-box;
  border: none;
  border-radius: 0;
  background-color: transparent;
  color: var(--jp-ui-font-color0);
  box-shadow: inset 0 0 0 var(--jp-border-width) var(--jp-input-border-color);
  padding-bottom: 0;
  padding-top: 0;
  padding-left: 10px;
  padding-right: 28px;
  position: relative;
  width: 100%;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  font-size: 14px;
  font-weight: 400;
  height: 30px;
  line-height: 30px;
  outline: none;
  vertical-align: middle;
}

.jp-InputGroup input:focus {
  box-shadow: inset 0 0 0 var(--jp-border-width)
      var(--jp-input-active-box-shadow-color),
    inset 0 0 0 3px var(--jp-input-active-box-shadow-color);
}

.jp-InputGroup input:disabled {
  cursor: not-allowed;
  resize: block;
  background-color: var(--jp-layout-color2);
  color: var(--jp-ui-font-color2);
}

.jp-InputGroup input:disabled ~ span {
  cursor: not-allowed;
  color: var(--jp-ui-font-color2);
}

.jp-InputGroup input::placeholder,
input::placeholder {
  color: var(--jp-ui-font-color2);
}

.jp-InputGroupAction {
  position: absolute;
  bottom: 1px;
  right: 0;
  padding: 6px;
}

.jp-HTMLSelect.jp-DefaultStyle select {
  background-color: initial;
  border: none;
  border-radius: 0;
  box-shadow: none;
  color: var(--jp-ui-font-color0);
  display: block;
  font-size: var(--jp-ui-font-size1);
  font-family: var(--jp-ui-font-family);
  height: 24px;
  line-height: 14px;
  padding: 0 25px 0 10px;
  text-align: left;
  appearance: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}

.jp-HTMLSelect.jp-DefaultStyle select:disabled {
  background-color: var(--jp-layout-color2);
  color: var(--jp-ui-font-color2);
  cursor: not-allowed;
  resize: block;
}

.jp-HTMLSelect.jp-DefaultStyle select:disabled ~ span {
  cursor: not-allowed;
}

/* Use our own theme for hover and option styles */
/* stylelint-disable-next-line selector-max-type */
.jp-HTMLSelect.jp-DefaultStyle select:hover,
.jp-HTMLSelect.jp-DefaultStyle select > option {
  background-color: var(--jp-layout-color2);
  color: var(--jp-ui-font-color0);
}

select {
  box-sizing: border-box;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Styles
|----------------------------------------------------------------------------*/

.jp-StatusBar-Widget {
  display: flex;
  align-items: center;
  background: var(--jp-layout-color2);
  min-height: var(--jp-statusbar-height);
  justify-content: space-between;
  padding: 0 10px;
}

.jp-StatusBar-Left {
  display: flex;
  align-items: center;
  flex-direction: row;
}

.jp-StatusBar-Middle {
  display: flex;
  align-items: center;
}

.jp-StatusBar-Right {
  display: flex;
  align-items: center;
  flex-direction: row-reverse;
}

.jp-StatusBar-Item {
  max-height: var(--jp-statusbar-height);
  margin: 0 2px;
  height: var(--jp-statusbar-height);
  white-space: nowrap;
  text-overflow: ellipsis;
  color: var(--jp-ui-font-color1);
  padding: 0 6px;
}

.jp-mod-highlighted:hover {
  background-color: var(--jp-layout-color3);
}

.jp-mod-clicked {
  background-color: var(--jp-brand-color1);
}

.jp-mod-clicked:hover {
  background-color: var(--jp-brand-color0);
}

.jp-mod-clicked .jp-StatusBar-TextItem {
  color: var(--jp-ui-inverse-font-color1);
}

.jp-StatusBar-HoverItem {
  box-shadow: '0px 4px 4px rgba(0, 0, 0, 0.25)';
}

.jp-StatusBar-TextItem {
  font-size: var(--jp-ui-font-size1);
  font-family: var(--jp-ui-font-family);
  line-height: 24px;
  color: var(--jp-ui-font-color1);
}

.jp-StatusBar-GroupItem {
  display: flex;
  align-items: center;
  flex-direction: row;
}

.jp-Statusbar-ProgressCircle svg {
  display: block;
  margin: 0 auto;
  width: 16px;
  height: 24px;
  align-self: normal;
}

.jp-Statusbar-ProgressCircle path {
  fill: var(--jp-inverse-layout-color3);
}

.jp-Statusbar-ProgressBar-progress-bar {
  height: 10px;
  width: 100px;
  border: solid 0.25px var(--jp-brand-color2);
  border-radius: 3px;
  overflow: hidden;
  align-self: center;
}

.jp-Statusbar-ProgressBar-progress-bar > div {
  background-color: var(--jp-brand-color2);
  background-image: linear-gradient(
    -45deg,
    rgba(255, 255, 255, 0.2) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.2) 50%,
    rgba(255, 255, 255, 0.2) 75%,
    transparent 75%,
    transparent
  );
  background-size: 40px 40px;
  float: left;
  width: 0%;
  height: 100%;
  font-size: 12px;
  line-height: 14px;
  color: #fff;
  text-align: center;
  animation: jp-Statusbar-ExecutionTime-progress-bar 2s linear infinite;
}

.jp-Statusbar-ProgressBar-progress-bar p {
  color: var(--jp-ui-font-color1);
  font-family: var(--jp-ui-font-family);
  font-size: var(--jp-ui-font-size1);
  line-height: 10px;
  width: 100px;
}

@keyframes jp-Statusbar-ExecutionTime-progress-bar {
  0% {
    background-position: 0 0;
  }

  100% {
    background-position: 40px 40px;
  }
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Variables
|----------------------------------------------------------------------------*/

:root {
  --jp-private-commandpalette-search-height: 28px;
}

/*-----------------------------------------------------------------------------
| Overall styles
|----------------------------------------------------------------------------*/

.lm-CommandPalette {
  padding-bottom: 0;
  color: var(--jp-ui-font-color1);
  background: var(--jp-layout-color1);

  /* This is needed so that all font sizing of children done in ems is
   * relative to this base size */
  font-size: var(--jp-ui-font-size1);
}

/*-----------------------------------------------------------------------------
| Modal variant
|----------------------------------------------------------------------------*/

.jp-ModalCommandPalette {
  position: absolute;
  z-index: 10000;
  top: 38px;
  left: 30%;
  margin: 0;
  padding: 4px;
  width: 40%;
  box-shadow: var(--jp-elevation-z4);
  border-radius: 4px;
  background: var(--jp-layout-color0);
}

.jp-ModalCommandPalette .lm-CommandPalette {
  max-height: 40vh;
}

.jp-ModalCommandPalette .lm-CommandPalette .lm-close-icon::after {
  display: none;
}

.jp-ModalCommandPalette .lm-CommandPalette .lm-CommandPalette-header {
  display: none;
}

.jp-ModalCommandPalette .lm-CommandPalette .lm-CommandPalette-item {
  margin-left: 4px;
  margin-right: 4px;
}

.jp-ModalCommandPalette
  .lm-CommandPalette
  .lm-CommandPalette-item.lm-mod-disabled {
  display: none;
}

/*-----------------------------------------------------------------------------
| Search
|----------------------------------------------------------------------------*/

.lm-CommandPalette-search {
  padding: 4px;
  background-color: var(--jp-layout-color1);
  z-index: 2;
}

.lm-CommandPalette-wrapper {
  overflow: overlay;
  padding: 0 9px;
  background-color: var(--jp-input-active-background);
  height: 30px;
  box-shadow: inset 0 0 0 var(--jp-border-width) var(--jp-input-border-color);
}

.lm-CommandPalette.lm-mod-focused .lm-CommandPalette-wrapper {
  box-shadow: inset 0 0 0 1px var(--jp-input-active-box-shadow-color),
    inset 0 0 0 3px var(--jp-input-active-box-shadow-color);
}

.jp-SearchIconGroup {
  color: white;
  background-color: var(--jp-brand-color1);
  position: absolute;
  top: 4px;
  right: 4px;
  padding: 5px 5px 1px;
}

.jp-SearchIconGroup svg {
  height: 20px;
  width: 20px;
}

.jp-SearchIconGroup .jp-icon3[fill] {
  fill: var(--jp-layout-color0);
}

.lm-CommandPalette-input {
  background: transparent;
  width: calc(100% - 18px);
  float: left;
  border: none;
  outline: none;
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color0);
  line-height: var(--jp-private-commandpalette-search-height);
}

.lm-CommandPalette-input::-webkit-input-placeholder,
.lm-CommandPalette-input::-moz-placeholder,
.lm-CommandPalette-input:-ms-input-placeholder {
  color: var(--jp-ui-font-color2);
  font-size: var(--jp-ui-font-size1);
}

/*-----------------------------------------------------------------------------
| Results
|----------------------------------------------------------------------------*/

.lm-CommandPalette-header:first-child {
  margin-top: 0;
}

.lm-CommandPalette-header {
  border-bottom: solid var(--jp-border-width) var(--jp-border-color2);
  color: var(--jp-ui-font-color1);
  cursor: pointer;
  display: flex;
  font-size: var(--jp-ui-font-size0);
  font-weight: 600;
  letter-spacing: 1px;
  margin-top: 8px;
  padding: 8px 0 8px 12px;
  text-transform: uppercase;
}

.lm-CommandPalette-header.lm-mod-active {
  background: var(--jp-layout-color2);
}

.lm-CommandPalette-header > mark {
  background-color: transparent;
  font-weight: bold;
  color: var(--jp-ui-font-color1);
}

.lm-CommandPalette-item {
  padding: 4px 12px 4px 4px;
  color: var(--jp-ui-font-color1);
  font-size: var(--jp-ui-font-size1);
  font-weight: 400;
  display: flex;
}

.lm-CommandPalette-item.lm-mod-disabled {
  color: var(--jp-ui-font-color2);
}

.lm-CommandPalette-item.lm-mod-active {
  color: var(--jp-ui-inverse-font-color1);
  background: var(--jp-brand-color1);
}

.lm-CommandPalette-item.lm-mod-active .lm-CommandPalette-itemLabel > mark {
  color: var(--jp-ui-inverse-font-color0);
}

.lm-CommandPalette-item.lm-mod-active .jp-icon-selectable[fill] {
  fill: var(--jp-layout-color0);
}

.lm-CommandPalette-item.lm-mod-active:hover:not(.lm-mod-disabled) {
  color: var(--jp-ui-inverse-font-color1);
  background: var(--jp-brand-color1);
}

.lm-CommandPalette-item:hover:not(.lm-mod-active):not(.lm-mod-disabled) {
  background: var(--jp-layout-color2);
}

.lm-CommandPalette-itemContent {
  overflow: hidden;
}

.lm-CommandPalette-itemLabel > mark {
  color: var(--jp-ui-font-color0);
  background-color: transparent;
  font-weight: bold;
}

.lm-CommandPalette-item.lm-mod-disabled mark {
  color: var(--jp-ui-font-color2);
}

.lm-CommandPalette-item .lm-CommandPalette-itemIcon {
  margin: 0 4px 0 0;
  position: relative;
  width: 16px;
  top: 2px;
  flex: 0 0 auto;
}

.lm-CommandPalette-item.lm-mod-disabled .lm-CommandPalette-itemIcon {
  opacity: 0.6;
}

.lm-CommandPalette-item .lm-CommandPalette-itemShortcut {
  flex: 0 0 auto;
}

.lm-CommandPalette-itemCaption {
  display: none;
}

.lm-CommandPalette-content {
  background-color: var(--jp-layout-color1);
}

.lm-CommandPalette-content:empty::after {
  content: 'No results';
  margin: auto;
  margin-top: 20px;
  width: 100px;
  display: block;
  font-size: var(--jp-ui-font-size2);
  font-family: var(--jp-ui-font-family);
  font-weight: lighter;
}

.lm-CommandPalette-emptyMessage {
  text-align: center;
  margin-top: 24px;
  line-height: 1.32;
  padding: 0 8px;
  color: var(--jp-content-font-color3);
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2017, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-Dialog {
  position: absolute;
  z-index: 10000;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  top: 0;
  left: 0;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  background: var(--jp-dialog-background);
}

.jp-Dialog-content {
  display: flex;
  flex-direction: column;
  margin-left: auto;
  margin-right: auto;
  background: var(--jp-layout-color1);
  padding: 24px 24px 12px;
  min-width: 300px;
  min-height: 150px;
  max-width: 1000px;
  max-height: 500px;
  box-sizing: border-box;
  box-shadow: var(--jp-elevation-z20);
  word-wrap: break-word;
  border-radius: var(--jp-border-radius);

  /* This is needed so that all font sizing of children done in ems is
   * relative to this base size */
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color1);
  resize: both;
}

.jp-Dialog-content.jp-Dialog-content-small {
  max-width: 500px;
}

.jp-Dialog-button {
  overflow: visible;
}

button.jp-Dialog-button:focus {
  outline: 1px solid var(--jp-brand-color1);
  outline-offset: 4px;
  -moz-outline-radius: 0;
}

button.jp-Dialog-button:focus::-moz-focus-inner {
  border: 0;
}

button.jp-Dialog-button.jp-mod-styled.jp-mod-accept:focus,
button.jp-Dialog-button.jp-mod-styled.jp-mod-warn:focus,
button.jp-Dialog-button.jp-mod-styled.jp-mod-reject:focus {
  outline-offset: 4px;
  -moz-outline-radius: 0;
}

button.jp-Dialog-button.jp-mod-styled.jp-mod-accept:focus {
  outline: 1px solid var(--jp-accept-color-normal, var(--jp-brand-color1));
}

button.jp-Dialog-button.jp-mod-styled.jp-mod-warn:focus {
  outline: 1px solid var(--jp-warn-color-normal, var(--jp-error-color1));
}

button.jp-Dialog-button.jp-mod-styled.jp-mod-reject:focus {
  outline: 1px solid var(--jp-reject-color-normal, var(--md-grey-600));
}

button.jp-Dialog-close-button {
  padding: 0;
  height: 100%;
  min-width: unset;
  min-height: unset;
}

.jp-Dialog-header {
  display: flex;
  justify-content: space-between;
  flex: 0 0 auto;
  padding-bottom: 12px;
  font-size: var(--jp-ui-font-size3);
  font-weight: 400;
  color: var(--jp-ui-font-color1);
}

.jp-Dialog-body {
  display: flex;
  flex-direction: column;
  flex: 1 1 auto;
  font-size: var(--jp-ui-font-size1);
  background: var(--jp-layout-color1);
  color: var(--jp-ui-font-color1);
  overflow: auto;
}

.jp-Dialog-footer {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  align-items: center;
  flex: 0 0 auto;
  margin-left: -12px;
  margin-right: -12px;
  padding: 12px;
}

.jp-Dialog-checkbox {
  padding-right: 5px;
}

.jp-Dialog-checkbox > input:focus-visible {
  outline: 1px solid var(--jp-input-active-border-color);
  outline-offset: 1px;
}

.jp-Dialog-spacer {
  flex: 1 1 auto;
}

.jp-Dialog-title {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.jp-Dialog-body > .jp-select-wrapper {
  width: 100%;
}

.jp-Dialog-body > button {
  padding: 0 16px;
}

.jp-Dialog-body > label {
  line-height: 1.4;
  color: var(--jp-ui-font-color0);
}

.jp-Dialog-button.jp-mod-styled:not(:last-child) {
  margin-right: 12px;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

.jp-Input-Boolean-Dialog {
  flex-direction: row-reverse;
  align-items: end;
  width: 100%;
}

.jp-Input-Boolean-Dialog > label {
  flex: 1 1 auto;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2016, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-MainAreaWidget > :focus {
  outline: none;
}

.jp-MainAreaWidget .jp-MainAreaWidget-error {
  padding: 6px;
}

.jp-MainAreaWidget .jp-MainAreaWidget-error > pre {
  width: auto;
  padding: 10px;
  background: var(--jp-error-color3);
  border: var(--jp-border-width) solid var(--jp-error-color1);
  border-radius: var(--jp-border-radius);
  color: var(--jp-ui-font-color1);
  font-size: var(--jp-ui-font-size1);
  white-space: pre-wrap;
  word-wrap: break-word;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/**
 * google-material-color v1.2.6
 * https://github.com/danlevan/google-material-color
 */
:root {
  --md-red-50: #ffebee;
  --md-red-100: #ffcdd2;
  --md-red-200: #ef9a9a;
  --md-red-300: #e57373;
  --md-red-400: #ef5350;
  --md-red-500: #f44336;
  --md-red-600: #e53935;
  --md-red-700: #d32f2f;
  --md-red-800: #c62828;
  --md-red-900: #b71c1c;
  --md-red-A100: #ff8a80;
  --md-red-A200: #ff5252;
  --md-red-A400: #ff1744;
  --md-red-A700: #d50000;
  --md-pink-50: #fce4ec;
  --md-pink-100: #f8bbd0;
  --md-pink-200: #f48fb1;
  --md-pink-300: #f06292;
  --md-pink-400: #ec407a;
  --md-pink-500: #e91e63;
  --md-pink-600: #d81b60;
  --md-pink-700: #c2185b;
  --md-pink-800: #ad1457;
  --md-pink-900: #880e4f;
  --md-pink-A100: #ff80ab;
  --md-pink-A200: #ff4081;
  --md-pink-A400: #f50057;
  --md-pink-A700: #c51162;
  --md-purple-50: #f3e5f5;
  --md-purple-100: #e1bee7;
  --md-purple-200: #ce93d8;
  --md-purple-300: #ba68c8;
  --md-purple-400: #ab47bc;
  --md-purple-500: #9c27b0;
  --md-purple-600: #8e24aa;
  --md-purple-700: #7b1fa2;
  --md-purple-800: #6a1b9a;
  --md-purple-900: #4a148c;
  --md-purple-A100: #ea80fc;
  --md-purple-A200: #e040fb;
  --md-purple-A400: #d500f9;
  --md-purple-A700: #a0f;
  --md-deep-purple-50: #ede7f6;
  --md-deep-purple-100: #d1c4e9;
  --md-deep-purple-200: #b39ddb;
  --md-deep-purple-300: #9575cd;
  --md-deep-purple-400: #7e57c2;
  --md-deep-purple-500: #673ab7;
  --md-deep-purple-600: #5e35b1;
  --md-deep-purple-700: #512da8;
  --md-deep-purple-800: #4527a0;
  --md-deep-purple-900: #311b92;
  --md-deep-purple-A100: #b388ff;
  --md-deep-purple-A200: #7c4dff;
  --md-deep-purple-A400: #651fff;
  --md-deep-purple-A700: #6200ea;
  --md-indigo-50: #e8eaf6;
  --md-indigo-100: #c5cae9;
  --md-indigo-200: #9fa8da;
  --md-indigo-300: #7986cb;
  --md-indigo-400: #5c6bc0;
  --md-indigo-500: #3f51b5;
  --md-indigo-600: #3949ab;
  --md-indigo-700: #303f9f;
  --md-indigo-800: #283593;
  --md-indigo-900: #1a237e;
  --md-indigo-A100: #8c9eff;
  --md-indigo-A200: #536dfe;
  --md-indigo-A400: #3d5afe;
  --md-indigo-A700: #304ffe;
  --md-blue-50: #e3f2fd;
  --md-blue-100: #bbdefb;
  --md-blue-200: #90caf9;
  --md-blue-300: #64b5f6;
  --md-blue-400: #42a5f5;
  --md-blue-500: #2196f3;
  --md-blue-600: #1e88e5;
  --md-blue-700: #1976d2;
  --md-blue-800: #1565c0;
  --md-blue-900: #0d47a1;
  --md-blue-A100: #82b1ff;
  --md-blue-A200: #448aff;
  --md-blue-A400: #2979ff;
  --md-blue-A700: #2962ff;
  --md-light-blue-50: #e1f5fe;
  --md-light-blue-100: #b3e5fc;
  --md-light-blue-200: #81d4fa;
  --md-light-blue-300: #4fc3f7;
  --md-light-blue-400: #29b6f6;
  --md-light-blue-500: #03a9f4;
  --md-light-blue-600: #039be5;
  --md-light-blue-700: #0288d1;
  --md-light-blue-800: #0277bd;
  --md-light-blue-900: #01579b;
  --md-light-blue-A100: #80d8ff;
  --md-light-blue-A200: #40c4ff;
  --md-light-blue-A400: #00b0ff;
  --md-light-blue-A700: #0091ea;
  --md-cyan-50: #e0f7fa;
  --md-cyan-100: #b2ebf2;
  --md-cyan-200: #80deea;
  --md-cyan-300: #4dd0e1;
  --md-cyan-400: #26c6da;
  --md-cyan-500: #00bcd4;
  --md-cyan-600: #00acc1;
  --md-cyan-700: #0097a7;
  --md-cyan-800: #00838f;
  --md-cyan-900: #006064;
  --md-cyan-A100: #84ffff;
  --md-cyan-A200: #18ffff;
  --md-cyan-A400: #00e5ff;
  --md-cyan-A700: #00b8d4;
  --md-teal-50: #e0f2f1;
  --md-teal-100: #b2dfdb;
  --md-teal-200: #80cbc4;
  --md-teal-300: #4db6ac;
  --md-teal-400: #26a69a;
  --md-teal-500: #009688;
  --md-teal-600: #00897b;
  --md-teal-700: #00796b;
  --md-teal-800: #00695c;
  --md-teal-900: #004d40;
  --md-teal-A100: #a7ffeb;
  --md-teal-A200: #64ffda;
  --md-teal-A400: #1de9b6;
  --md-teal-A700: #00bfa5;
  --md-green-50: #e8f5e9;
  --md-green-100: #c8e6c9;
  --md-green-200: #a5d6a7;
  --md-green-300: #81c784;
  --md-green-400: #66bb6a;
  --md-green-500: #4caf50;
  --md-green-600: #43a047;
  --md-green-700: #388e3c;
  --md-green-800: #2e7d32;
  --md-green-900: #1b5e20;
  --md-green-A100: #b9f6ca;
  --md-green-A200: #69f0ae;
  --md-green-A400: #00e676;
  --md-green-A700: #00c853;
  --md-light-green-50: #f1f8e9;
  --md-light-green-100: #dcedc8;
  --md-light-green-200: #c5e1a5;
  --md-light-green-300: #aed581;
  --md-light-green-400: #9ccc65;
  --md-light-green-500: #8bc34a;
  --md-light-green-600: #7cb342;
  --md-light-green-700: #689f38;
  --md-light-green-800: #558b2f;
  --md-light-green-900: #33691e;
  --md-light-green-A100: #ccff90;
  --md-light-green-A200: #b2ff59;
  --md-light-green-A400: #76ff03;
  --md-light-green-A700: #64dd17;
  --md-lime-50: #f9fbe7;
  --md-lime-100: #f0f4c3;
  --md-lime-200: #e6ee9c;
  --md-lime-300: #dce775;
  --md-lime-400: #d4e157;
  --md-lime-500: #cddc39;
  --md-lime-600: #c0ca33;
  --md-lime-700: #afb42b;
  --md-lime-800: #9e9d24;
  --md-lime-900: #827717;
  --md-lime-A100: #f4ff81;
  --md-lime-A200: #eeff41;
  --md-lime-A400: #c6ff00;
  --md-lime-A700: #aeea00;
  --md-yellow-50: #fffde7;
  --md-yellow-100: #fff9c4;
  --md-yellow-200: #fff59d;
  --md-yellow-300: #fff176;
  --md-yellow-400: #ffee58;
  --md-yellow-500: #ffeb3b;
  --md-yellow-600: #fdd835;
  --md-yellow-700: #fbc02d;
  --md-yellow-800: #f9a825;
  --md-yellow-900: #f57f17;
  --md-yellow-A100: #ffff8d;
  --md-yellow-A200: #ff0;
  --md-yellow-A400: #ffea00;
  --md-yellow-A700: #ffd600;
  --md-amber-50: #fff8e1;
  --md-amber-100: #ffecb3;
  --md-amber-200: #ffe082;
  --md-amber-300: #ffd54f;
  --md-amber-400: #ffca28;
  --md-amber-500: #ffc107;
  --md-amber-600: #ffb300;
  --md-amber-700: #ffa000;
  --md-amber-800: #ff8f00;
  --md-amber-900: #ff6f00;
  --md-amber-A100: #ffe57f;
  --md-amber-A200: #ffd740;
  --md-amber-A400: #ffc400;
  --md-amber-A700: #ffab00;
  --md-orange-50: #fff3e0;
  --md-orange-100: #ffe0b2;
  --md-orange-200: #ffcc80;
  --md-orange-300: #ffb74d;
  --md-orange-400: #ffa726;
  --md-orange-500: #ff9800;
  --md-orange-600: #fb8c00;
  --md-orange-700: #f57c00;
  --md-orange-800: #ef6c00;
  --md-orange-900: #e65100;
  --md-orange-A100: #ffd180;
  --md-orange-A200: #ffab40;
  --md-orange-A400: #ff9100;
  --md-orange-A700: #ff6d00;
  --md-deep-orange-50: #fbe9e7;
  --md-deep-orange-100: #ffccbc;
  --md-deep-orange-200: #ffab91;
  --md-deep-orange-300: #ff8a65;
  --md-deep-orange-400: #ff7043;
  --md-deep-orange-500: #ff5722;
  --md-deep-orange-600: #f4511e;
  --md-deep-orange-700: #e64a19;
  --md-deep-orange-800: #d84315;
  --md-deep-orange-900: #bf360c;
  --md-deep-orange-A100: #ff9e80;
  --md-deep-orange-A200: #ff6e40;
  --md-deep-orange-A400: #ff3d00;
  --md-deep-orange-A700: #dd2c00;
  --md-brown-50: #efebe9;
  --md-brown-100: #d7ccc8;
  --md-brown-200: #bcaaa4;
  --md-brown-300: #a1887f;
  --md-brown-400: #8d6e63;
  --md-brown-500: #795548;
  --md-brown-600: #6d4c41;
  --md-brown-700: #5d4037;
  --md-brown-800: #4e342e;
  --md-brown-900: #3e2723;
  --md-grey-50: #fafafa;
  --md-grey-100: #f5f5f5;
  --md-grey-200: #eee;
  --md-grey-300: #e0e0e0;
  --md-grey-400: #bdbdbd;
  --md-grey-500: #9e9e9e;
  --md-grey-600: #757575;
  --md-grey-700: #616161;
  --md-grey-800: #424242;
  --md-grey-900: #212121;
  --md-blue-grey-50: #eceff1;
  --md-blue-grey-100: #cfd8dc;
  --md-blue-grey-200: #b0bec5;
  --md-blue-grey-300: #90a4ae;
  --md-blue-grey-400: #78909c;
  --md-blue-grey-500: #607d8b;
  --md-blue-grey-600: #546e7a;
  --md-blue-grey-700: #455a64;
  --md-blue-grey-800: #37474f;
  --md-blue-grey-900: #263238;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2017, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| RenderedText
|----------------------------------------------------------------------------*/

:root {
  /* This is the padding value to fill the gaps between lines containing spans with background color. */
  --jp-private-code-span-padding: calc(
    (var(--jp-code-line-height) - 1) * var(--jp-code-font-size) / 2
  );
}

.jp-RenderedText {
  text-align: left;
  padding-left: var(--jp-code-padding);
  line-height: var(--jp-code-line-height);
  font-family: var(--jp-code-font-family);
}

.jp-RenderedText pre,
.jp-RenderedJavaScript pre,
.jp-RenderedHTMLCommon pre {
  color: var(--jp-content-font-color1);
  font-size: var(--jp-code-font-size);
  border: none;
  margin: 0;
  padding: 0;
}

.jp-RenderedText pre a:link {
  text-decoration: none;
  color: var(--jp-content-link-color);
}

.jp-RenderedText pre a:hover {
  text-decoration: underline;
  color: var(--jp-content-link-color);
}

.jp-RenderedText pre a:visited {
  text-decoration: none;
  color: var(--jp-content-link-color);
}

/* console foregrounds and backgrounds */
.jp-RenderedText pre .ansi-black-fg {
  color: #3e424d;
}

.jp-RenderedText pre .ansi-red-fg {
  color: #e75c58;
}

.jp-RenderedText pre .ansi-green-fg {
  color: #00a250;
}

.jp-RenderedText pre .ansi-yellow-fg {
  color: #ddb62b;
}

.jp-RenderedText pre .ansi-blue-fg {
  color: #208ffb;
}

.jp-RenderedText pre .ansi-magenta-fg {
  color: #d160c4;
}

.jp-RenderedText pre .ansi-cyan-fg {
  color: #60c6c8;
}

.jp-RenderedText pre .ansi-white-fg {
  color: #c5c1b4;
}

.jp-RenderedText pre .ansi-black-bg {
  background-color: #3e424d;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-red-bg {
  background-color: #e75c58;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-green-bg {
  background-color: #00a250;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-yellow-bg {
  background-color: #ddb62b;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-blue-bg {
  background-color: #208ffb;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-magenta-bg {
  background-color: #d160c4;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-cyan-bg {
  background-color: #60c6c8;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-white-bg {
  background-color: #c5c1b4;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-black-intense-fg {
  color: #282c36;
}

.jp-RenderedText pre .ansi-red-intense-fg {
  color: #b22b31;
}

.jp-RenderedText pre .ansi-green-intense-fg {
  color: #007427;
}

.jp-RenderedText pre .ansi-yellow-intense-fg {
  color: #b27d12;
}

.jp-RenderedText pre .ansi-blue-intense-fg {
  color: #0065ca;
}

.jp-RenderedText pre .ansi-magenta-intense-fg {
  color: #a03196;
}

.jp-RenderedText pre .ansi-cyan-intense-fg {
  color: #258f8f;
}

.jp-RenderedText pre .ansi-white-intense-fg {
  color: #a1a6b2;
}

.jp-RenderedText pre .ansi-black-intense-bg {
  background-color: #282c36;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-red-intense-bg {
  background-color: #b22b31;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-green-intense-bg {
  background-color: #007427;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-yellow-intense-bg {
  background-color: #b27d12;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-blue-intense-bg {
  background-color: #0065ca;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-magenta-intense-bg {
  background-color: #a03196;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-cyan-intense-bg {
  background-color: #258f8f;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-white-intense-bg {
  background-color: #a1a6b2;
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-default-inverse-fg {
  color: var(--jp-ui-inverse-font-color0);
}

.jp-RenderedText pre .ansi-default-inverse-bg {
  background-color: var(--jp-inverse-layout-color0);
  padding: var(--jp-private-code-span-padding) 0;
}

.jp-RenderedText pre .ansi-bold {
  font-weight: bold;
}

.jp-RenderedText pre .ansi-underline {
  text-decoration: underline;
}

.jp-RenderedText[data-mime-type='application/vnd.jupyter.stderr'] {
  background: var(--jp-rendermime-error-background);
  padding-top: var(--jp-code-padding);
}

/*-----------------------------------------------------------------------------
| RenderedLatex
|----------------------------------------------------------------------------*/

.jp-RenderedLatex {
  color: var(--jp-content-font-color1);
  font-size: var(--jp-content-font-size1);
  line-height: var(--jp-content-line-height);
}

/* Left-justify outputs.*/
.jp-OutputArea-output.jp-RenderedLatex {
  padding: var(--jp-code-padding);
  text-align: left;
}

/*-----------------------------------------------------------------------------
| RenderedHTML
|----------------------------------------------------------------------------*/

.jp-RenderedHTMLCommon {
  color: var(--jp-content-font-color1);
  font-family: var(--jp-content-font-family);
  font-size: var(--jp-content-font-size1);
  line-height: var(--jp-content-line-height);

  /* Give a bit more R padding on Markdown text to keep line lengths reasonable */
  padding-right: 20px;
}

.jp-RenderedHTMLCommon em {
  font-style: italic;
}

.jp-RenderedHTMLCommon strong {
  font-weight: bold;
}

.jp-RenderedHTMLCommon u {
  text-decoration: underline;
}

.jp-RenderedHTMLCommon a:link {
  text-decoration: none;
  color: var(--jp-content-link-color);
}

.jp-RenderedHTMLCommon a:hover {
  text-decoration: underline;
  color: var(--jp-content-link-color);
}

.jp-RenderedHTMLCommon a:visited {
  text-decoration: none;
  color: var(--jp-content-link-color);
}

/* Headings */

.jp-RenderedHTMLCommon h1,
.jp-RenderedHTMLCommon h2,
.jp-RenderedHTMLCommon h3,
.jp-RenderedHTMLCommon h4,
.jp-RenderedHTMLCommon h5,
.jp-RenderedHTMLCommon h6 {
  line-height: var(--jp-content-heading-line-height);
  font-weight: var(--jp-content-heading-font-weight);
  font-style: normal;
  margin: var(--jp-content-heading-margin-top) 0
    var(--jp-content-heading-margin-bottom) 0;
}

.jp-RenderedHTMLCommon h1:first-child,
.jp-RenderedHTMLCommon h2:first-child,
.jp-RenderedHTMLCommon h3:first-child,
.jp-RenderedHTMLCommon h4:first-child,
.jp-RenderedHTMLCommon h5:first-child,
.jp-RenderedHTMLCommon h6:first-child {
  margin-top: calc(0.5 * var(--jp-content-heading-margin-top));
}

.jp-RenderedHTMLCommon h1:last-child,
.jp-RenderedHTMLCommon h2:last-child,
.jp-RenderedHTMLCommon h3:last-child,
.jp-RenderedHTMLCommon h4:last-child,
.jp-RenderedHTMLCommon h5:last-child,
.jp-RenderedHTMLCommon h6:last-child {
  margin-bottom: calc(0.5 * var(--jp-content-heading-margin-bottom));
}

.jp-RenderedHTMLCommon h1 {
  font-size: var(--jp-content-font-size5);
}

.jp-RenderedHTMLCommon h2 {
  font-size: var(--jp-content-font-size4);
}

.jp-RenderedHTMLCommon h3 {
  font-size: var(--jp-content-font-size3);
}

.jp-RenderedHTMLCommon h4 {
  font-size: var(--jp-content-font-size2);
}

.jp-RenderedHTMLCommon h5 {
  font-size: var(--jp-content-font-size1);
}

.jp-RenderedHTMLCommon h6 {
  font-size: var(--jp-content-font-size0);
}

/* Lists */

/* stylelint-disable selector-max-type, selector-max-compound-selectors */

.jp-RenderedHTMLCommon ul:not(.list-inline),
.jp-RenderedHTMLCommon ol:not(.list-inline) {
  padding-left: 2em;
}

.jp-RenderedHTMLCommon ul {
  list-style: disc;
}

.jp-RenderedHTMLCommon ul ul {
  list-style: square;
}

.jp-RenderedHTMLCommon ul ul ul {
  list-style: circle;
}

.jp-RenderedHTMLCommon ol {
  list-style: decimal;
}

.jp-RenderedHTMLCommon ol ol {
  list-style: upper-alpha;
}

.jp-RenderedHTMLCommon ol ol ol {
  list-style: lower-alpha;
}

.jp-RenderedHTMLCommon ol ol ol ol {
  list-style: lower-roman;
}

.jp-RenderedHTMLCommon ol ol ol ol ol {
  list-style: decimal;
}

.jp-RenderedHTMLCommon ol,
.jp-RenderedHTMLCommon ul {
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon ul ul,
.jp-RenderedHTMLCommon ul ol,
.jp-RenderedHTMLCommon ol ul,
.jp-RenderedHTMLCommon ol ol {
  margin-bottom: 0;
}

/* stylelint-enable selector-max-type, selector-max-compound-selectors */

.jp-RenderedHTMLCommon hr {
  color: var(--jp-border-color2);
  background-color: var(--jp-border-color1);
  margin-top: 1em;
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon > pre {
  margin: 1.5em 2em;
}

.jp-RenderedHTMLCommon pre,
.jp-RenderedHTMLCommon code {
  border: 0;
  background-color: var(--jp-layout-color0);
  color: var(--jp-content-font-color1);
  font-family: var(--jp-code-font-family);
  font-size: inherit;
  line-height: var(--jp-code-line-height);
  padding: 0;
  white-space: pre-wrap;
}

.jp-RenderedHTMLCommon :not(pre) > code {
  background-color: var(--jp-layout-color2);
  padding: 1px 5px;
}

/* Tables */

.jp-RenderedHTMLCommon table {
  border-collapse: collapse;
  border-spacing: 0;
  border: none;
  color: var(--jp-ui-font-color1);
  font-size: var(--jp-ui-font-size1);
  table-layout: fixed;
  margin-left: auto;
  margin-bottom: 1em;
  margin-right: auto;
}

.jp-RenderedHTMLCommon thead {
  border-bottom: var(--jp-border-width) solid var(--jp-border-color1);
  vertical-align: bottom;
}

.jp-RenderedHTMLCommon td,
.jp-RenderedHTMLCommon th,
.jp-RenderedHTMLCommon tr {
  vertical-align: middle;
  padding: 0.5em;
  line-height: normal;
  white-space: normal;
  max-width: none;
  border: none;
}

.jp-RenderedMarkdown.jp-RenderedHTMLCommon td,
.jp-RenderedMarkdown.jp-RenderedHTMLCommon th {
  max-width: none;
}

:not(.jp-RenderedMarkdown).jp-RenderedHTMLCommon td,
:not(.jp-RenderedMarkdown).jp-RenderedHTMLCommon th,
:not(.jp-RenderedMarkdown).jp-RenderedHTMLCommon tr {
  text-align: right;
}

.jp-RenderedHTMLCommon th {
  font-weight: bold;
}

.jp-RenderedHTMLCommon tbody tr:nth-child(odd) {
  background: var(--jp-layout-color0);
}

.jp-RenderedHTMLCommon tbody tr:nth-child(even) {
  background: var(--jp-rendermime-table-row-background);
}

.jp-RenderedHTMLCommon tbody tr:hover {
  background: var(--jp-rendermime-table-row-hover-background);
}

.jp-RenderedHTMLCommon p {
  text-align: left;
  margin: 0;
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon img {
  -moz-force-broken-image-icon: 1;
}

/* Restrict to direct children as other images could be nested in other content. */
.jp-RenderedHTMLCommon > img {
  display: block;
  margin-left: 0;
  margin-right: 0;
  margin-bottom: 1em;
}

/* Change color behind transparent images if they need it... */
[data-jp-theme-light='false'] .jp-RenderedImage img.jp-needs-light-background {
  background-color: var(--jp-inverse-layout-color1);
}

[data-jp-theme-light='true'] .jp-RenderedImage img.jp-needs-dark-background {
  background-color: var(--jp-inverse-layout-color1);
}

.jp-RenderedHTMLCommon img,
.jp-RenderedImage img,
.jp-RenderedHTMLCommon svg,
.jp-RenderedSVG svg {
  max-width: 100%;
  height: auto;
}

.jp-RenderedHTMLCommon img.jp-mod-unconfined,
.jp-RenderedImage img.jp-mod-unconfined,
.jp-RenderedHTMLCommon svg.jp-mod-unconfined,
.jp-RenderedSVG svg.jp-mod-unconfined {
  max-width: none;
}

.jp-RenderedHTMLCommon .alert {
  padding: var(--jp-notebook-padding);
  border: var(--jp-border-width) solid transparent;
  border-radius: var(--jp-border-radius);
  margin-bottom: 1em;
}

.jp-RenderedHTMLCommon .alert-info {
  color: var(--jp-info-color0);
  background-color: var(--jp-info-color3);
  border-color: var(--jp-info-color2);
}

.jp-RenderedHTMLCommon .alert-info hr {
  border-color: var(--jp-info-color3);
}

.jp-RenderedHTMLCommon .alert-info > p:last-child,
.jp-RenderedHTMLCommon .alert-info > ul:last-child {
  margin-bottom: 0;
}

.jp-RenderedHTMLCommon .alert-warning {
  color: var(--jp-warn-color0);
  background-color: var(--jp-warn-color3);
  border-color: var(--jp-warn-color2);
}

.jp-RenderedHTMLCommon .alert-warning hr {
  border-color: var(--jp-warn-color3);
}

.jp-RenderedHTMLCommon .alert-warning > p:last-child,
.jp-RenderedHTMLCommon .alert-warning > ul:last-child {
  margin-bottom: 0;
}

.jp-RenderedHTMLCommon .alert-success {
  color: var(--jp-success-color0);
  background-color: var(--jp-success-color3);
  border-color: var(--jp-success-color2);
}

.jp-RenderedHTMLCommon .alert-success hr {
  border-color: var(--jp-success-color3);
}

.jp-RenderedHTMLCommon .alert-success > p:last-child,
.jp-RenderedHTMLCommon .alert-success > ul:last-child {
  margin-bottom: 0;
}

.jp-RenderedHTMLCommon .alert-danger {
  color: var(--jp-error-color0);
  background-color: var(--jp-error-color3);
  border-color: var(--jp-error-color2);
}

.jp-RenderedHTMLCommon .alert-danger hr {
  border-color: var(--jp-error-color3);
}

.jp-RenderedHTMLCommon .alert-danger > p:last-child,
.jp-RenderedHTMLCommon .alert-danger > ul:last-child {
  margin-bottom: 0;
}

.jp-RenderedHTMLCommon blockquote {
  margin: 1em 2em;
  padding: 0 1em;
  border-left: 5px solid var(--jp-border-color2);
}

a.jp-InternalAnchorLink {
  visibility: hidden;
  margin-left: 8px;
  color: var(--md-blue-800);
}

h1:hover .jp-InternalAnchorLink,
h2:hover .jp-InternalAnchorLink,
h3:hover .jp-InternalAnchorLink,
h4:hover .jp-InternalAnchorLink,
h5:hover .jp-InternalAnchorLink,
h6:hover .jp-InternalAnchorLink {
  visibility: visible;
}

.jp-RenderedHTMLCommon kbd {
  background-color: var(--jp-rendermime-table-row-background);
  border: 1px solid var(--jp-border-color0);
  border-bottom-color: var(--jp-border-color2);
  border-radius: 3px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
  display: inline-block;
  font-size: var(--jp-ui-font-size0);
  line-height: 1em;
  padding: 0.2em 0.5em;
}

/* Most direct children of .jp-RenderedHTMLCommon have a margin-bottom of 1.0.
 * At the bottom of cells this is a bit too much as there is also spacing
 * between cells. Going all the way to 0 gets too tight between markdown and
 * code cells.
 */
.jp-RenderedHTMLCommon > *:last-child {
  margin-bottom: 0.5em;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Copyright (c) 2014-2017, PhosphorJS Contributors
|
| Distributed under the terms of the BSD 3-Clause License.
|
| The full license is in the file LICENSE, distributed with this software.
|----------------------------------------------------------------------------*/

.lm-cursor-backdrop {
  position: fixed;
  width: 200px;
  height: 200px;
  margin-top: -100px;
  margin-left: -100px;
  will-change: transform;
  z-index: 100;
}

.lm-mod-drag-image {
  will-change: transform;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

.jp-lineFormSearch {
  padding: 4px 12px;
  background-color: var(--jp-layout-color2);
  box-shadow: var(--jp-toolbar-box-shadow);
  z-index: 2;
  font-size: var(--jp-ui-font-size1);
}

.jp-lineFormCaption {
  font-size: var(--jp-ui-font-size0);
  line-height: var(--jp-ui-font-size1);
  margin-top: 4px;
  color: var(--jp-ui-font-color0);
}

.jp-baseLineForm {
  border: none;
  border-radius: 0;
  position: absolute;
  background-size: 16px;
  background-repeat: no-repeat;
  background-position: center;
  outline: none;
}

.jp-lineFormButtonContainer {
  top: 4px;
  right: 8px;
  height: 24px;
  padding: 0 12px;
  width: 12px;
}

.jp-lineFormButtonIcon {
  top: 0;
  right: 0;
  background-color: var(--jp-brand-color1);
  height: 100%;
  width: 100%;
  box-sizing: border-box;
  padding: 4px 6px;
}

.jp-lineFormButton {
  top: 0;
  right: 0;
  background-color: transparent;
  height: 100%;
  width: 100%;
  box-sizing: border-box;
}

.jp-lineFormWrapper {
  overflow: hidden;
  padding: 0 8px;
  border: 1px solid var(--jp-border-color0);
  background-color: var(--jp-input-active-background);
  height: 22px;
}

.jp-lineFormWrapperFocusWithin {
  border: var(--jp-border-width) solid var(--md-blue-500);
  box-shadow: inset 0 0 4px var(--md-blue-300);
}

.jp-lineFormInput {
  background: transparent;
  width: 200px;
  height: 100%;
  border: none;
  outline: none;
  color: var(--jp-ui-font-color0);
  line-height: 28px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) 2014-2016, Jupyter Development Team.
|
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-JSONEditor {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.jp-JSONEditor-host {
  flex: 1 1 auto;
  border: var(--jp-border-width) solid var(--jp-input-border-color);
  border-radius: 0;
  background: var(--jp-layout-color0);
  min-height: 50px;
  padding: 1px;
}

.jp-JSONEditor.jp-mod-error .jp-JSONEditor-host {
  border-color: red;
  outline-color: red;
}

.jp-JSONEditor-header {
  display: flex;
  flex: 1 0 auto;
  padding: 0 0 0 12px;
}

.jp-JSONEditor-header label {
  flex: 0 0 auto;
}

.jp-JSONEditor-commitButton {
  height: 16px;
  width: 16px;
  background-size: 18px;
  background-repeat: no-repeat;
  background-position: center;
}

.jp-JSONEditor-host.jp-mod-focused {
  background-color: var(--jp-input-active-background);
  border: 1px solid var(--jp-input-active-border-color);
  box-shadow: var(--jp-input-box-shadow);
}

.jp-Editor.jp-mod-dropTarget {
  border: var(--jp-border-width) solid var(--jp-input-active-border-color);
  box-shadow: var(--jp-input-box-shadow);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/
.jp-DocumentSearch-input {
  border: none;
  outline: none;
  color: var(--jp-ui-font-color0);
  font-size: var(--jp-ui-font-size1);
  background-color: var(--jp-layout-color0);
  font-family: var(--jp-ui-font-family);
  padding: 2px 1px;
  resize: none;
}

.jp-DocumentSearch-overlay {
  position: absolute;
  background-color: var(--jp-toolbar-background);
  border-bottom: var(--jp-border-width) solid var(--jp-toolbar-border-color);
  border-left: var(--jp-border-width) solid var(--jp-toolbar-border-color);
  top: 0;
  right: 0;
  z-index: 7;
  min-width: 405px;
  padding: 2px;
  font-size: var(--jp-ui-font-size1);

  --jp-private-document-search-button-height: 20px;
}

.jp-DocumentSearch-overlay button {
  background-color: var(--jp-toolbar-background);
  outline: 0;
}

.jp-DocumentSearch-overlay button:hover {
  background-color: var(--jp-layout-color2);
}

.jp-DocumentSearch-overlay button:active {
  background-color: var(--jp-layout-color3);
}

.jp-DocumentSearch-overlay-row {
  display: flex;
  align-items: center;
  margin-bottom: 2px;
}

.jp-DocumentSearch-button-content {
  display: inline-block;
  cursor: pointer;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
}

.jp-DocumentSearch-button-content svg {
  width: 100%;
  height: 100%;
}

.jp-DocumentSearch-input-wrapper {
  border: var(--jp-border-width) solid var(--jp-border-color0);
  display: flex;
  background-color: var(--jp-layout-color0);
  margin: 2px;
}

.jp-DocumentSearch-input-wrapper:focus-within {
  border-color: var(--jp-cell-editor-active-border-color);
}

.jp-DocumentSearch-toggle-wrapper,
.jp-DocumentSearch-button-wrapper {
  all: initial;
  overflow: hidden;
  display: inline-block;
  border: none;
  box-sizing: border-box;
}

.jp-DocumentSearch-toggle-wrapper {
  width: 14px;
  height: 14px;
}

.jp-DocumentSearch-button-wrapper {
  width: var(--jp-private-document-search-button-height);
  height: var(--jp-private-document-search-button-height);
}

.jp-DocumentSearch-toggle-wrapper:focus,
.jp-DocumentSearch-button-wrapper:focus {
  outline: var(--jp-border-width) solid
    var(--jp-cell-editor-active-border-color);
  outline-offset: -1px;
}

.jp-DocumentSearch-toggle-wrapper,
.jp-DocumentSearch-button-wrapper,
.jp-DocumentSearch-button-content:focus {
  outline: none;
}

.jp-DocumentSearch-toggle-placeholder {
  width: 5px;
}

.jp-DocumentSearch-input-button::before {
  display: block;
  padding-top: 100%;
}

.jp-DocumentSearch-input-button-off {
  opacity: var(--jp-search-toggle-off-opacity);
}

.jp-DocumentSearch-input-button-off:hover {
  opacity: var(--jp-search-toggle-hover-opacity);
}

.jp-DocumentSearch-input-button-on {
  opacity: var(--jp-search-toggle-on-opacity);
}

.jp-DocumentSearch-index-counter {
  padding-left: 10px;
  padding-right: 10px;
  user-select: none;
  min-width: 35px;
  display: inline-block;
}

.jp-DocumentSearch-up-down-wrapper {
  display: inline-block;
  padding-right: 2px;
  margin-left: auto;
  white-space: nowrap;
}

.jp-DocumentSearch-spacer {
  margin-left: auto;
}

.jp-DocumentSearch-up-down-wrapper button {
  outline: 0;
  border: none;
  width: var(--jp-private-document-search-button-height);
  height: var(--jp-private-document-search-button-height);
  vertical-align: middle;
  margin: 1px 5px 2px;
}

.jp-DocumentSearch-up-down-button:hover {
  background-color: var(--jp-layout-color2);
}

.jp-DocumentSearch-up-down-button:active {
  background-color: var(--jp-layout-color3);
}

.jp-DocumentSearch-filter-button {
  border-radius: var(--jp-border-radius);
}

.jp-DocumentSearch-filter-button:hover {
  background-color: var(--jp-layout-color2);
}

.jp-DocumentSearch-filter-button-enabled {
  background-color: var(--jp-layout-color2);
}

.jp-DocumentSearch-filter-button-enabled:hover {
  background-color: var(--jp-layout-color3);
}

.jp-DocumentSearch-search-options {
  padding: 0 8px;
  margin-left: 3px;
  width: 100%;
  display: grid;
  justify-content: start;
  grid-template-columns: 1fr 1fr;
  align-items: center;
  justify-items: stretch;
}

.jp-DocumentSearch-search-filter-disabled {
  color: var(--jp-ui-font-color2);
}

.jp-DocumentSearch-search-filter {
  display: flex;
  align-items: center;
  user-select: none;
}

.jp-DocumentSearch-regex-error {
  color: var(--jp-error-color0);
}

.jp-DocumentSearch-replace-button-wrapper {
  overflow: hidden;
  display: inline-block;
  box-sizing: border-box;
  border: var(--jp-border-width) solid var(--jp-border-color0);
  margin: auto 2px;
  padding: 1px 4px;
  height: calc(var(--jp-private-document-search-button-height) + 2px);
}

.jp-DocumentSearch-replace-button-wrapper:focus {
  border: var(--jp-border-width) solid var(--jp-cell-editor-active-border-color);
}

.jp-DocumentSearch-replace-button {
  display: inline-block;
  text-align: center;
  cursor: pointer;
  box-sizing: border-box;
  color: var(--jp-ui-font-color1);

  /* height - 2 * (padding of wrapper) */
  line-height: calc(var(--jp-private-document-search-button-height) - 2px);
  width: 100%;
  height: 100%;
}

.jp-DocumentSearch-replace-button:focus {
  outline: none;
}

.jp-DocumentSearch-replace-wrapper-class {
  margin-left: 14px;
  display: flex;
}

.jp-DocumentSearch-replace-toggle {
  border: none;
  background-color: var(--jp-toolbar-background);
  border-radius: var(--jp-border-radius);
}

.jp-DocumentSearch-replace-toggle:hover {
  background-color: var(--jp-layout-color2);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.cm-editor {
  line-height: var(--jp-code-line-height);
  font-size: var(--jp-code-font-size);
  font-family: var(--jp-code-font-family);
  border: 0;
  border-radius: 0;
  height: auto;

  /* Changed to auto to autogrow */
}

.cm-editor pre {
  padding: 0 var(--jp-code-padding);
}

.jp-CodeMirrorEditor[data-type='inline'] .cm-dialog {
  background-color: var(--jp-layout-color0);
  color: var(--jp-content-font-color1);
}

.jp-CodeMirrorEditor {
  cursor: text;
}

/* When zoomed out 67% and 33% on a screen of 1440 width x 900 height */
@media screen and (min-width: 2138px) and (max-width: 4319px) {
  .jp-CodeMirrorEditor[data-type='inline'] .cm-cursor {
    border-left: var(--jp-code-cursor-width1) solid
      var(--jp-editor-cursor-color);
  }
}

/* When zoomed out less than 33% */
@media screen and (min-width: 4320px) {
  .jp-CodeMirrorEditor[data-type='inline'] .cm-cursor {
    border-left: var(--jp-code-cursor-width2) solid
      var(--jp-editor-cursor-color);
  }
}

.cm-editor.jp-mod-readOnly .cm-cursor {
  display: none;
}

.jp-CollaboratorCursor {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: none;
  border-bottom: 3px solid;
  background-clip: content-box;
  margin-left: -5px;
  margin-right: -5px;
}

.cm-searching,
.cm-searching span {
  /* `.cm-searching span`: we need to override syntax highlighting */
  background-color: var(--jp-search-unselected-match-background-color);
  color: var(--jp-search-unselected-match-color);
}

.cm-searching::selection,
.cm-searching span::selection {
  background-color: var(--jp-search-unselected-match-background-color);
  color: var(--jp-search-unselected-match-color);
}

.jp-current-match > .cm-searching,
.jp-current-match > .cm-searching span,
.cm-searching > .jp-current-match,
.cm-searching > .jp-current-match span {
  background-color: var(--jp-search-selected-match-background-color);
  color: var(--jp-search-selected-match-color);
}

.jp-current-match > .cm-searching::selection,
.cm-searching > .jp-current-match::selection,
.jp-current-match > .cm-searching span::selection {
  background-color: var(--jp-search-selected-match-background-color);
  color: var(--jp-search-selected-match-color);
}

.cm-trailingspace {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAFCAYAAAB4ka1VAAAAsElEQVQIHQGlAFr/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA7+r3zKmT0/+pk9P/7+r3zAAAAAAAAAAABAAAAAAAAAAA6OPzM+/q9wAAAAAA6OPzMwAAAAAAAAAAAgAAAAAAAAAAGR8NiRQaCgAZIA0AGR8NiQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQyoYJ/SY80UAAAAASUVORK5CYII=);
  background-position: center left;
  background-repeat: repeat-x;
}

.jp-CollaboratorCursor-hover {
  position: absolute;
  z-index: 1;
  transform: translateX(-50%);
  color: white;
  border-radius: 3px;
  padding-left: 4px;
  padding-right: 4px;
  padding-top: 1px;
  padding-bottom: 1px;
  text-align: center;
  font-size: var(--jp-ui-font-size1);
  white-space: nowrap;
}

.jp-CodeMirror-ruler {
  border-left: 1px dashed var(--jp-border-color2);
}

/* Styles for shared cursors (remote cursor locations and selected ranges) */
.jp-CodeMirrorEditor .cm-ySelectionCaret {
  position: relative;
  border-left: 1px solid black;
  margin-left: -1px;
  margin-right: -1px;
  box-sizing: border-box;
}

.jp-CodeMirrorEditor .cm-ySelectionCaret > .cm-ySelectionInfo {
  white-space: nowrap;
  position: absolute;
  top: -1.15em;
  padding-bottom: 0.05em;
  left: -1px;
  font-size: 0.95em;
  font-family: var(--jp-ui-font-family);
  font-weight: bold;
  line-height: normal;
  user-select: none;
  color: white;
  padding-left: 2px;
  padding-right: 2px;
  z-index: 101;
  transition: opacity 0.3s ease-in-out;
}

.jp-CodeMirrorEditor .cm-ySelectionInfo {
  transition-delay: 0.7s;
  opacity: 0;
}

.jp-CodeMirrorEditor .cm-ySelectionCaret:hover > .cm-ySelectionInfo {
  opacity: 1;
  transition-delay: 0s;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-MimeDocument {
  outline: none;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Variables
|----------------------------------------------------------------------------*/

:root {
  --jp-private-filebrowser-button-height: 28px;
  --jp-private-filebrowser-button-width: 48px;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-FileBrowser .jp-SidePanel-content {
  display: flex;
  flex-direction: column;
}

.jp-FileBrowser-toolbar.jp-Toolbar {
  flex-wrap: wrap;
  row-gap: 12px;
  border-bottom: none;
  height: auto;
  margin: 8px 12px 0;
  box-shadow: none;
  padding: 0;
  justify-content: flex-start;
}

.jp-FileBrowser-Panel {
  flex: 1 1 auto;
  display: flex;
  flex-direction: column;
}

.jp-BreadCrumbs {
  flex: 0 0 auto;
  margin: 8px 12px;
}

.jp-BreadCrumbs-item {
  margin: 0 2px;
  padding: 0 2px;
  border-radius: var(--jp-border-radius);
  cursor: pointer;
}

.jp-BreadCrumbs-item:hover {
  background-color: var(--jp-layout-color2);
}

.jp-BreadCrumbs-item:first-child {
  margin-left: 0;
}

.jp-BreadCrumbs-item.jp-mod-dropTarget {
  background-color: var(--jp-brand-color2);
  opacity: 0.7;
}

/*-----------------------------------------------------------------------------
| Buttons
|----------------------------------------------------------------------------*/

.jp-FileBrowser-toolbar > .jp-Toolbar-item {
  flex: 0 0 auto;
  padding-left: 0;
  padding-right: 2px;
  align-items: center;
  height: unset;
}

.jp-FileBrowser-toolbar > .jp-Toolbar-item .jp-ToolbarButtonComponent {
  width: 40px;
}

/*-----------------------------------------------------------------------------
| Other styles
|----------------------------------------------------------------------------*/

.jp-FileDialog.jp-mod-conflict input {
  color: var(--jp-error-color1);
}

.jp-FileDialog .jp-new-name-title {
  margin-top: 12px;
}

.jp-LastModified-hidden {
  display: none;
}

.jp-FileSize-hidden {
  display: none;
}

.jp-FileBrowser .lm-AccordionPanel > h3:first-child {
  display: none;
}

/*-----------------------------------------------------------------------------
| DirListing
|----------------------------------------------------------------------------*/

.jp-DirListing {
  flex: 1 1 auto;
  display: flex;
  flex-direction: column;
  outline: 0;
}

.jp-DirListing-header {
  flex: 0 0 auto;
  display: flex;
  flex-direction: row;
  align-items: center;
  overflow: hidden;
  border-top: var(--jp-border-width) solid var(--jp-border-color2);
  border-bottom: var(--jp-border-width) solid var(--jp-border-color1);
  box-shadow: var(--jp-toolbar-box-shadow);
  z-index: 2;
}

.jp-DirListing-headerItem {
  padding: 4px 12px 2px;
  font-weight: 500;
}

.jp-DirListing-headerItem:hover {
  background: var(--jp-layout-color2);
}

.jp-DirListing-headerItem.jp-id-name {
  flex: 1 0 84px;
}

.jp-DirListing-headerItem.jp-id-modified {
  flex: 0 0 112px;
  border-left: var(--jp-border-width) solid var(--jp-border-color2);
  text-align: right;
}

.jp-DirListing-headerItem.jp-id-filesize {
  flex: 0 0 75px;
  border-left: var(--jp-border-width) solid var(--jp-border-color2);
  text-align: right;
}

.jp-id-narrow {
  display: none;
  flex: 0 0 5px;
  padding: 4px;
  border-left: var(--jp-border-width) solid var(--jp-border-color2);
  text-align: right;
  color: var(--jp-border-color2);
}

.jp-DirListing-narrow .jp-id-narrow {
  display: block;
}

.jp-DirListing-narrow .jp-id-modified,
.jp-DirListing-narrow .jp-DirListing-itemModified {
  display: none;
}

.jp-DirListing-headerItem.jp-mod-selected {
  font-weight: 600;
}

/* increase specificity to override bundled default */
.jp-DirListing-content {
  flex: 1 1 auto;
  margin: 0;
  padding: 0;
  list-style-type: none;
  overflow: auto;
  background-color: var(--jp-layout-color1);
}

.jp-DirListing-content mark {
  color: var(--jp-ui-font-color0);
  background-color: transparent;
  font-weight: bold;
}

.jp-DirListing-content .jp-DirListing-item.jp-mod-selected mark {
  color: var(--jp-ui-inverse-font-color0);
}

/* Style the directory listing content when a user drops a file to upload */
.jp-DirListing.jp-mod-native-drop .jp-DirListing-content {
  outline: 5px dashed rgba(128, 128, 128, 0.5);
  outline-offset: -10px;
  cursor: copy;
}

.jp-DirListing-item {
  display: flex;
  flex-direction: row;
  align-items: center;
  padding: 4px 12px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.jp-DirListing-checkboxWrapper {
  /* Increases hit area of checkbox. */
  padding: 4px;
}

.jp-DirListing-header
  .jp-DirListing-checkboxWrapper
  + .jp-DirListing-headerItem {
  padding-left: 4px;
}

.jp-DirListing-content .jp-DirListing-checkboxWrapper {
  position: relative;
  left: -4px;
  margin: -4px 0 -4px -8px;
}

.jp-DirListing-checkboxWrapper.jp-mod-visible {
  visibility: visible;
}

/* For devices that support hovering, hide checkboxes until hovered, selected...
*/
@media (hover: hover) {
  .jp-DirListing-checkboxWrapper {
    visibility: hidden;
  }

  .jp-DirListing-item:hover .jp-DirListing-checkboxWrapper,
  .jp-DirListing-item.jp-mod-selected .jp-DirListing-checkboxWrapper {
    visibility: visible;
  }
}

.jp-DirListing-item[data-is-dot] {
  opacity: 75%;
}

.jp-DirListing-item.jp-mod-selected {
  color: var(--jp-ui-inverse-font-color1);
  background: var(--jp-brand-color1);
}

.jp-DirListing-item.jp-mod-dropTarget {
  background: var(--jp-brand-color3);
}

.jp-DirListing-item:hover:not(.jp-mod-selected) {
  background: var(--jp-layout-color2);
}

.jp-DirListing-itemIcon {
  flex: 0 0 20px;
  margin-right: 4px;
}

.jp-DirListing-itemText {
  flex: 1 0 64px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  user-select: none;
}

.jp-DirListing-itemText:focus {
  outline-width: 2px;
  outline-color: var(--jp-inverse-layout-color1);
  outline-style: solid;
  outline-offset: 1px;
}

.jp-DirListing-item.jp-mod-selected .jp-DirListing-itemText:focus {
  outline-color: var(--jp-layout-color1);
}

.jp-DirListing-itemModified {
  flex: 0 0 125px;
  text-align: right;
}

.jp-DirListing-itemFileSize {
  flex: 0 0 90px;
  text-align: right;
}

.jp-DirListing-editor {
  flex: 1 0 64px;
  outline: none;
  border: none;
  color: var(--jp-ui-font-color1);
  background-color: var(--jp-layout-color1);
}

.jp-DirListing-item.jp-mod-running .jp-DirListing-itemIcon::before {
  color: var(--jp-success-color1);
  content: '\25CF';
  font-size: 8px;
  position: absolute;
  left: -8px;
}

.jp-DirListing-item.jp-mod-running.jp-mod-selected
  .jp-DirListing-itemIcon::before {
  color: var(--jp-ui-inverse-font-color1);
}

.jp-DirListing-item.lm-mod-drag-image,
.jp-DirListing-item.jp-mod-selected.lm-mod-drag-image {
  font-size: var(--jp-ui-font-size1);
  padding-left: 4px;
  margin-left: 4px;
  width: 160px;
  background-color: var(--jp-ui-inverse-font-color2);
  box-shadow: var(--jp-elevation-z2);
  border-radius: 0;
  color: var(--jp-ui-font-color1);
  transform: translateX(-40%) translateY(-58%);
}

.jp-Document {
  min-width: 120px;
  min-height: 120px;
  outline: none;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Main OutputArea
| OutputArea has a list of Outputs
|----------------------------------------------------------------------------*/

.jp-OutputArea {
  overflow-y: auto;
}

.jp-OutputArea-child {
  display: table;
  table-layout: fixed;
  width: 100%;
  overflow: hidden;
}

.jp-OutputPrompt {
  width: var(--jp-cell-prompt-width);
  color: var(--jp-cell-outprompt-font-color);
  font-family: var(--jp-cell-prompt-font-family);
  padding: var(--jp-code-padding);
  letter-spacing: var(--jp-cell-prompt-letter-spacing);
  line-height: var(--jp-code-line-height);
  font-size: var(--jp-code-font-size);
  border: var(--jp-border-width) solid transparent;
  opacity: var(--jp-cell-prompt-opacity);

  /* Right align prompt text, don't wrap to handle large prompt numbers */
  text-align: right;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;

  /* Disable text selection */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.jp-OutputArea-prompt {
  display: table-cell;
  vertical-align: top;
}

.jp-OutputArea-output {
  display: table-cell;
  width: 100%;
  height: auto;
  overflow: auto;
  user-select: text;
  -moz-user-select: text;
  -webkit-user-select: text;
  -ms-user-select: text;
}

.jp-OutputArea .jp-RenderedText {
  padding-left: 1ch;
}

/**
 * Prompt overlay.
 */

.jp-OutputArea-promptOverlay {
  position: absolute;
  top: 0;
  width: var(--jp-cell-prompt-width);
  height: 100%;
  opacity: 0.5;
}

.jp-OutputArea-promptOverlay:hover {
  background: var(--jp-layout-color2);
  box-shadow: inset 0 0 1px var(--jp-inverse-layout-color0);
  cursor: zoom-out;
}

.jp-mod-outputsScrolled .jp-OutputArea-promptOverlay:hover {
  cursor: zoom-in;
}

/**
 * Isolated output.
 */
.jp-OutputArea-output.jp-mod-isolated {
  width: 100%;
  display: block;
}

/*
When drag events occur, `lm-mod-override-cursor` is added to the body.
Because iframes steal all cursor events, the following two rules are necessary
to suppress pointer events while resize drags are occurring. There may be a
better solution to this problem.
*/
body.lm-mod-override-cursor .jp-OutputArea-output.jp-mod-isolated {
  position: relative;
}

body.lm-mod-override-cursor .jp-OutputArea-output.jp-mod-isolated::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: transparent;
}

/* pre */

.jp-OutputArea-output pre {
  border: none;
  margin: 0;
  padding: 0;
  overflow-x: auto;
  overflow-y: auto;
  word-break: break-all;
  word-wrap: break-word;
  white-space: pre-wrap;
}

/* tables */

.jp-OutputArea-output.jp-RenderedHTMLCommon table {
  margin-left: 0;
  margin-right: 0;
}

/* description lists */

.jp-OutputArea-output dl,
.jp-OutputArea-output dt,
.jp-OutputArea-output dd {
  display: block;
}

.jp-OutputArea-output dl {
  width: 100%;
  overflow: hidden;
  padding: 0;
  margin: 0;
}

.jp-OutputArea-output dt {
  font-weight: bold;
  float: left;
  width: 20%;
  padding: 0;
  margin: 0;
}

.jp-OutputArea-output dd {
  float: left;
  width: 80%;
  padding: 0;
  margin: 0;
}

.jp-TrimmedOutputs pre {
  background: var(--jp-layout-color3);
  font-size: calc(var(--jp-code-font-size) * 1.4);
  text-align: center;
  text-transform: uppercase;
}

/* Hide the gutter in case of
 *  - nested output areas (e.g. in the case of output widgets)
 *  - mirrored output areas
 */
.jp-OutputArea .jp-OutputArea .jp-OutputArea-prompt {
  display: none;
}

/* Hide empty lines in the output area, for instance due to cleared widgets */
.jp-OutputArea-prompt:empty {
  padding: 0;
  border: 0;
}

/*-----------------------------------------------------------------------------
| executeResult is added to any Output-result for the display of the object
| returned by a cell
|----------------------------------------------------------------------------*/

.jp-OutputArea-output.jp-OutputArea-executeResult {
  margin-left: 0;
  width: 100%;
}

/* Text output with the Out[] prompt needs a top padding to match the
 * alignment of the Out[] prompt itself.
 */
.jp-OutputArea-executeResult .jp-RenderedText.jp-OutputArea-output {
  padding-top: var(--jp-code-padding);
  border-top: var(--jp-border-width) solid transparent;
}

/*-----------------------------------------------------------------------------
| The Stdin output
|----------------------------------------------------------------------------*/

.jp-Stdin-prompt {
  color: var(--jp-content-font-color0);
  padding-right: var(--jp-code-padding);
  vertical-align: baseline;
  flex: 0 0 auto;
}

.jp-Stdin-input {
  font-family: var(--jp-code-font-family);
  font-size: inherit;
  color: inherit;
  background-color: inherit;
  width: 42%;
  min-width: 200px;

  /* make sure input baseline aligns with prompt */
  vertical-align: baseline;

  /* padding + margin = 0.5em between prompt and cursor */
  padding: 0 0.25em;
  margin: 0 0.25em;
  flex: 0 0 70%;
}

.jp-Stdin-input::placeholder {
  opacity: 0;
}

.jp-Stdin-input:focus {
  box-shadow: none;
}

.jp-Stdin-input:focus::placeholder {
  opacity: 1;
}

/*-----------------------------------------------------------------------------
| Output Area View
|----------------------------------------------------------------------------*/

.jp-LinkedOutputView .jp-OutputArea {
  height: 100%;
  display: block;
}

.jp-LinkedOutputView .jp-OutputArea-output:only-child {
  height: 100%;
}

/*-----------------------------------------------------------------------------
| Printing
|----------------------------------------------------------------------------*/

@media print {
  .jp-OutputArea-child {
    break-inside: avoid-page;
  }
}

/*-----------------------------------------------------------------------------
| Mobile
|----------------------------------------------------------------------------*/
@media only screen and (max-width: 760px) {
  .jp-OutputPrompt {
    display: table-row;
    text-align: left;
  }

  .jp-OutputArea-child .jp-OutputArea-output {
    display: table-row;
    margin-left: var(--jp-notebook-padding);
  }
}

/* Trimmed outputs warning */
.jp-TrimmedOutputs > a {
  margin: 10px;
  text-decoration: none;
  cursor: pointer;
}

.jp-TrimmedOutputs > a:hover {
  text-decoration: none;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Table of Contents
|----------------------------------------------------------------------------*/

:root {
  --jp-private-toc-active-width: 4px;
}

.jp-TableOfContents {
  display: flex;
  flex-direction: column;
  background: var(--jp-layout-color1);
  color: var(--jp-ui-font-color1);
  font-size: var(--jp-ui-font-size1);
  height: 100%;
}

.jp-TableOfContents-placeholder {
  text-align: center;
}

.jp-TableOfContents-placeholderContent {
  color: var(--jp-content-font-color2);
  padding: 8px;
}

.jp-TableOfContents-placeholderContent > h3 {
  margin-bottom: var(--jp-content-heading-margin-bottom);
}

.jp-TableOfContents .jp-SidePanel-content {
  overflow-y: auto;
}

.jp-TableOfContents-tree {
  margin: 4px;
}

.jp-TableOfContents ol {
  list-style-type: none;
}

/* stylelint-disable-next-line selector-max-type */
.jp-TableOfContents li > ol {
  /* Align left border with triangle icon center */
  padding-left: 11px;
}

.jp-TableOfContents-content {
  /* left margin for the active heading indicator */
  margin: 0 0 0 var(--jp-private-toc-active-width);
  padding: 0;
  background-color: var(--jp-layout-color1);
}

.jp-tocItem {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.jp-tocItem-heading {
  display: flex;
  cursor: pointer;
}

.jp-tocItem-heading:hover {
  background-color: var(--jp-layout-color2);
}

.jp-tocItem-content {
  display: block;
  padding: 4px 0;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow-x: hidden;
}

.jp-tocItem-collapser {
  height: 20px;
  margin: 2px 2px 0;
  padding: 0;
  background: none;
  border: none;
  cursor: pointer;
}

.jp-tocItem-collapser:hover {
  background-color: var(--jp-layout-color3);
}

/* Active heading indicator */

.jp-tocItem-heading::before {
  content: ' ';
  background: transparent;
  width: var(--jp-private-toc-active-width);
  height: 24px;
  position: absolute;
  left: 0;
  border-radius: var(--jp-border-radius);
}

.jp-tocItem-heading.jp-tocItem-active::before {
  background-color: var(--jp-brand-color1);
}

.jp-tocItem-heading:hover.jp-tocItem-active::before {
  background: var(--jp-brand-color0);
  opacity: 1;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

.jp-Collapser {
  flex: 0 0 var(--jp-cell-collapser-width);
  padding: 0;
  margin: 0;
  border: none;
  outline: none;
  background: transparent;
  border-radius: var(--jp-border-radius);
  opacity: 1;
}

.jp-Collapser-child {
  display: block;
  width: 100%;
  box-sizing: border-box;

  /* height: 100% doesn't work because the height of its parent is computed from content */
  position: absolute;
  top: 0;
  bottom: 0;
}

/*-----------------------------------------------------------------------------
| Printing
|----------------------------------------------------------------------------*/

/*
Hiding collapsers in print mode.

Note: input and output wrappers have "display: block" property in print mode.
*/

@media print {
  .jp-Collapser {
    display: none;
  }
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Header/Footer
|----------------------------------------------------------------------------*/

/* Hidden by zero height by default */
.jp-CellHeader,
.jp-CellFooter {
  height: 0;
  width: 100%;
  padding: 0;
  margin: 0;
  border: none;
  outline: none;
  background: transparent;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Input
|----------------------------------------------------------------------------*/

/* All input areas */
.jp-InputArea {
  display: table;
  table-layout: fixed;
  width: 100%;
  overflow: hidden;
}

.jp-InputArea-editor {
  display: table-cell;
  overflow: hidden;
  vertical-align: top;

  /* This is the non-active, default styling */
  border: var(--jp-border-width) solid var(--jp-cell-editor-border-color);
  border-radius: 0;
  background: var(--jp-cell-editor-background);
}

.jp-InputPrompt {
  display: table-cell;
  vertical-align: top;
  width: var(--jp-cell-prompt-width);
  color: var(--jp-cell-inprompt-font-color);
  font-family: var(--jp-cell-prompt-font-family);
  padding: var(--jp-code-padding);
  letter-spacing: var(--jp-cell-prompt-letter-spacing);
  opacity: var(--jp-cell-prompt-opacity);
  line-height: var(--jp-code-line-height);
  font-size: var(--jp-code-font-size);
  border: var(--jp-border-width) solid transparent;

  /* Right align prompt text, don't wrap to handle large prompt numbers */
  text-align: right;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;

  /* Disable text selection */
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/*-----------------------------------------------------------------------------
| Mobile
|----------------------------------------------------------------------------*/
@media only screen and (max-width: 760px) {
  .jp-InputArea-editor {
    display: table-row;
    margin-left: var(--jp-notebook-padding);
  }

  .jp-InputPrompt {
    display: table-row;
    text-align: left;
  }
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Placeholder
|----------------------------------------------------------------------------*/

.jp-Placeholder {
  display: table;
  table-layout: fixed;
  width: 100%;
}

.jp-Placeholder-prompt {
  display: table-cell;
  box-sizing: border-box;
}

.jp-Placeholder-content {
  display: table-cell;
  padding: 4px 6px;
  border: 1px solid transparent;
  border-radius: 0;
  background: none;
  box-sizing: border-box;
  cursor: pointer;
}

.jp-Placeholder-contentContainer {
  display: flex;
}

.jp-Placeholder-content:hover,
.jp-InputPlaceholder > .jp-Placeholder-content:hover {
  border-color: var(--jp-layout-color3);
}

.jp-Placeholder-content .jp-MoreHorizIcon {
  width: 32px;
  height: 16px;
  border: 1px solid transparent;
  border-radius: var(--jp-border-radius);
}

.jp-Placeholder-content .jp-MoreHorizIcon:hover {
  border: 1px solid var(--jp-border-color1);
  box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.25);
  background-color: var(--jp-layout-color0);
}

.jp-PlaceholderText {
  white-space: nowrap;
  overflow-x: hidden;
  color: var(--jp-inverse-layout-color3);
  font-family: var(--jp-code-font-family);
}

.jp-InputPlaceholder > .jp-Placeholder-content {
  border-color: var(--jp-cell-editor-border-color);
  background: var(--jp-cell-editor-background);
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Private CSS variables
|----------------------------------------------------------------------------*/

:root {
  --jp-private-cell-scrolling-output-offset: 5px;
}

/*-----------------------------------------------------------------------------
| Cell
|----------------------------------------------------------------------------*/

.jp-Cell {
  padding: var(--jp-cell-padding);
  margin: 0;
  border: none;
  outline: none;
  background: transparent;
}

/*-----------------------------------------------------------------------------
| Common input/output
|----------------------------------------------------------------------------*/

.jp-Cell-inputWrapper,
.jp-Cell-outputWrapper {
  display: flex;
  flex-direction: row;
  padding: 0;
  margin: 0;

  /* Added to reveal the box-shadow on the input and output collapsers. */
  overflow: visible;
}

/* Only input/output areas inside cells */
.jp-Cell-inputArea,
.jp-Cell-outputArea {
  flex: 1 1 auto;
}

/*-----------------------------------------------------------------------------
| Collapser
|----------------------------------------------------------------------------*/

/* Make the output collapser disappear when there is not output, but do so
 * in a manner that leaves it in the layout and preserves its width.
 */
.jp-Cell.jp-mod-noOutputs .jp-Cell-outputCollapser {
  border: none !important;
  background: transparent !important;
}

.jp-Cell:not(.jp-mod-noOutputs) .jp-Cell-outputCollapser {
  min-height: var(--jp-cell-collapser-min-height);
}

/*-----------------------------------------------------------------------------
| Output
|----------------------------------------------------------------------------*/

/* Put a space between input and output when there IS output */
.jp-Cell:not(.jp-mod-noOutputs) .jp-Cell-outputWrapper {
  margin-top: 5px;
}

.jp-CodeCell.jp-mod-outputsScrolled .jp-Cell-outputArea {
  overflow-y: auto;
  max-height: 24em;
  margin-left: var(--jp-private-cell-scrolling-output-offset);
  resize: vertical;
}

.jp-CodeCell.jp-mod-outputsScrolled .jp-Cell-outputArea[style*='height'] {
  max-height: unset;
}

.jp-CodeCell.jp-mod-outputsScrolled .jp-Cell-outputArea::after {
  content: ' ';
  box-shadow: inset 0 0 6px 2px rgb(0 0 0 / 30%);
  width: 100%;
  height: 100%;
  position: sticky;
  bottom: 0;
  top: 0;
  margin-top: -50%;
  float: left;
  display: block;
  pointer-events: none;
}

.jp-CodeCell.jp-mod-outputsScrolled .jp-OutputArea-child {
  padding-top: 6px;
}

.jp-CodeCell.jp-mod-outputsScrolled .jp-OutputArea-prompt {
  width: calc(
    var(--jp-cell-prompt-width) - var(--jp-private-cell-scrolling-output-offset)
  );
}

.jp-CodeCell.jp-mod-outputsScrolled .jp-OutputArea-promptOverlay {
  left: calc(-1 * var(--jp-private-cell-scrolling-output-offset));
}

/*-----------------------------------------------------------------------------
| CodeCell
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| MarkdownCell
|----------------------------------------------------------------------------*/

.jp-MarkdownOutput {
  display: table-cell;
  width: 100%;
  margin-top: 0;
  margin-bottom: 0;
  padding-left: var(--jp-code-padding);
}

.jp-MarkdownOutput.jp-RenderedHTMLCommon {
  overflow: auto;
}

/* collapseHeadingButton (show always if hiddenCellsButton is _not_ shown) */
.jp-collapseHeadingButton {
  display: flex;
  min-height: var(--jp-cell-collapser-min-height);
  font-size: var(--jp-code-font-size);
  position: absolute;
  background-color: transparent;
  background-size: 25px;
  background-repeat: no-repeat;
  background-position-x: center;
  background-position-y: top;
  background-image: var(--jp-icon-caret-down);
  right: 0;
  top: 0;
  bottom: 0;
}

.jp-collapseHeadingButton.jp-mod-collapsed {
  background-image: var(--jp-icon-caret-right);
}

/*
 set the container font size to match that of content
 so that the nested collapse buttons have the right size
*/
.jp-MarkdownCell .jp-InputPrompt {
  font-size: var(--jp-content-font-size1);
}

/*
  Align collapseHeadingButton with cell top header
  The font sizes are identical to the ones in packages/rendermime/style/base.css
*/
.jp-mod-rendered .jp-collapseHeadingButton[data-heading-level='1'] {
  font-size: var(--jp-content-font-size5);
  background-position-y: calc(0.3 * var(--jp-content-font-size5));
}

.jp-mod-rendered .jp-collapseHeadingButton[data-heading-level='2'] {
  font-size: var(--jp-content-font-size4);
  background-position-y: calc(0.3 * var(--jp-content-font-size4));
}

.jp-mod-rendered .jp-collapseHeadingButton[data-heading-level='3'] {
  font-size: var(--jp-content-font-size3);
  background-position-y: calc(0.3 * var(--jp-content-font-size3));
}

.jp-mod-rendered .jp-collapseHeadingButton[data-heading-level='4'] {
  font-size: var(--jp-content-font-size2);
  background-position-y: calc(0.3 * var(--jp-content-font-size2));
}

.jp-mod-rendered .jp-collapseHeadingButton[data-heading-level='5'] {
  font-size: var(--jp-content-font-size1);
  background-position-y: top;
}

.jp-mod-rendered .jp-collapseHeadingButton[data-heading-level='6'] {
  font-size: var(--jp-content-font-size0);
  background-position-y: top;
}

/* collapseHeadingButton (show only on (hover,active) if hiddenCellsButton is shown) */
.jp-Notebook.jp-mod-showHiddenCellsButton .jp-collapseHeadingButton {
  display: none;
}

.jp-Notebook.jp-mod-showHiddenCellsButton
  :is(.jp-MarkdownCell:hover, .jp-mod-active)
  .jp-collapseHeadingButton {
  display: flex;
}

/* showHiddenCellsButton (only show if jp-mod-showHiddenCellsButton is set, which
is a consequence of the showHiddenCellsButton option in Notebook Settings)*/
.jp-Notebook.jp-mod-showHiddenCellsButton .jp-showHiddenCellsButton {
  margin-left: calc(var(--jp-cell-prompt-width) + 2 * var(--jp-code-padding));
  margin-top: var(--jp-code-padding);
  border: 1px solid var(--jp-border-color2);
  background-color: var(--jp-border-color3) !important;
  color: var(--jp-content-font-color0) !important;
  display: flex;
}

.jp-Notebook.jp-mod-showHiddenCellsButton .jp-showHiddenCellsButton:hover {
  background-color: var(--jp-border-color2) !important;
}

.jp-showHiddenCellsButton {
  display: none;
}

/*-----------------------------------------------------------------------------
| Printing
|----------------------------------------------------------------------------*/

/*
Using block instead of flex to allow the use of the break-inside CSS property for
cell outputs.
*/

@media print {
  .jp-Cell-inputWrapper,
  .jp-Cell-outputWrapper {
    display: block;
  }
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Variables
|----------------------------------------------------------------------------*/

:root {
  --jp-notebook-toolbar-padding: 2px 5px 2px 2px;
}

/*-----------------------------------------------------------------------------

/*-----------------------------------------------------------------------------
| Styles
|----------------------------------------------------------------------------*/

.jp-NotebookPanel-toolbar {
  padding: var(--jp-notebook-toolbar-padding);

  /* disable paint containment from lumino 2.0 default strict CSS containment */
  contain: style size !important;
}

.jp-Toolbar-item.jp-Notebook-toolbarCellType .jp-select-wrapper.jp-mod-focused {
  border: none;
  box-shadow: none;
}

.jp-Notebook-toolbarCellTypeDropdown select {
  height: 24px;
  font-size: var(--jp-ui-font-size1);
  line-height: 14px;
  border-radius: 0;
  display: block;
}

.jp-Notebook-toolbarCellTypeDropdown span {
  top: 5px !important;
}

.jp-Toolbar-responsive-popup {
  position: absolute;
  height: fit-content;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: flex-end;
  border-bottom: var(--jp-border-width) solid var(--jp-toolbar-border-color);
  box-shadow: var(--jp-toolbar-box-shadow);
  background: var(--jp-toolbar-background);
  min-height: var(--jp-toolbar-micro-height);
  padding: var(--jp-notebook-toolbar-padding);
  z-index: 1;
  right: 0;
  top: 0;
}

.jp-Toolbar > .jp-Toolbar-responsive-opener {
  margin-left: auto;
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Variables
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------

/*-----------------------------------------------------------------------------
| Styles
|----------------------------------------------------------------------------*/

.jp-Notebook-ExecutionIndicator {
  position: relative;
  display: inline-block;
  height: 100%;
  z-index: 9997;
}

.jp-Notebook-ExecutionIndicator-tooltip {
  visibility: hidden;
  height: auto;
  width: max-content;
  width: -moz-max-content;
  background-color: var(--jp-layout-color2);
  color: var(--jp-ui-font-color1);
  text-align: justify;
  border-radius: 6px;
  padding: 0 5px;
  position: fixed;
  display: table;
}

.jp-Notebook-ExecutionIndicator-tooltip.up {
  transform: translateX(-50%) translateY(-100%) translateY(-32px);
}

.jp-Notebook-ExecutionIndicator-tooltip.down {
  transform: translateX(calc(-100% + 16px)) translateY(5px);
}

.jp-Notebook-ExecutionIndicator-tooltip.hidden {
  display: none;
}

.jp-Notebook-ExecutionIndicator:hover .jp-Notebook-ExecutionIndicator-tooltip {
  visibility: visible;
}

.jp-Notebook-ExecutionIndicator span {
  font-size: var(--jp-ui-font-size1);
  font-family: var(--jp-ui-font-family);
  color: var(--jp-ui-font-color1);
  line-height: 24px;
  display: block;
}

.jp-Notebook-ExecutionIndicator-progress-bar {
  display: flex;
  justify-content: center;
  height: 100%;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

/*
 * Execution indicator
 */
.jp-tocItem-content::after {
  content: '';

  /* Must be identical to form a circle */
  width: 12px;
  height: 12px;
  background: none;
  border: none;
  position: absolute;
  right: 0;
}

.jp-tocItem-content[data-running='0']::after {
  border-radius: 50%;
  border: var(--jp-border-width) solid var(--jp-inverse-layout-color3);
  background: none;
}

.jp-tocItem-content[data-running='1']::after {
  border-radius: 50%;
  border: var(--jp-border-width) solid var(--jp-inverse-layout-color3);
  background-color: var(--jp-inverse-layout-color3);
}

.jp-tocItem-content[data-running='0'],
.jp-tocItem-content[data-running='1'] {
  margin-right: 12px;
}

/*
 * Copyright (c) Jupyter Development Team.
 * Distributed under the terms of the Modified BSD License.
 */

.jp-Notebook-footer {
  height: 27px;
  margin-left: calc(
    var(--jp-cell-prompt-width) + var(--jp-cell-collapser-width) +
      var(--jp-cell-padding)
  );
  width: calc(
    100% -
      (
        var(--jp-cell-prompt-width) + var(--jp-cell-collapser-width) +
          var(--jp-cell-padding) + var(--jp-cell-padding)
      )
  );
  border: var(--jp-border-width) solid var(--jp-cell-editor-border-color);
  color: var(--jp-ui-font-color3);
  margin-top: 6px;
  background: none;
  cursor: pointer;
}

.jp-Notebook-footer:focus {
  border-color: var(--jp-cell-editor-active-border-color);
}

/* For devices that support hovering, hide footer until hover */
@media (hover: hover) {
  .jp-Notebook-footer {
    opacity: 0;
  }

  .jp-Notebook-footer:focus,
  .jp-Notebook-footer:hover {
    opacity: 1;
  }
}

/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| Imports
|----------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------
| CSS variables
|----------------------------------------------------------------------------*/

:root {
  --jp-side-by-side-output-size: 1fr;
  --jp-side-by-side-resized-cell: var(--jp-side-by-side-output-size);
  --jp-private-notebook-dragImage-width: 304px;
  --jp-private-notebook-dragImage-height: 36px;
  --jp-private-notebook-selected-color: var(--md-blue-400);
  --jp-private-notebook-active-color: var(--md-green-400);
}

/*-----------------------------------------------------------------------------
| Notebook
|----------------------------------------------------------------------------*/

/* stylelint-disable selector-max-class */

.jp-NotebookPanel {
  display: block;
  height: 100%;
}

.jp-NotebookPanel.jp-Document {
  min-width: 240px;
  min-height: 120px;
}

.jp-Notebook {
  padding: var(--jp-notebook-padding);
  outline: none;
  overflow: auto;
  background: var(--jp-layout-color0);
}

.jp-Notebook.jp-mod-scrollPastEnd::after {
  display: block;
  content: '';
  min-height: var(--jp-notebook-scroll-padding);
}

.jp-MainAreaWidget-ContainStrict .jp-Notebook * {
  contain: strict;
}

.jp-Notebook .jp-Cell {
  overflow: visible;
}

.jp-Notebook .jp-Cell .jp-InputPrompt {
  cursor: move;
}

/*-----------------------------------------------------------------------------
| Notebook state related styling
|
| The notebook and cells each have states, here are the possibilities:
|
| - Notebook
|   - Command
|   - Edit
| - Cell
|   - None
|   - Active (only one can be active)
|   - Selected (the cells actions are applied to)
|   - Multiselected (when multiple selected, the cursor)
|   - No outputs
|----------------------------------------------------------------------------*/

/* Command or edit modes */

.jp-Notebook .jp-Cell:not(.jp-mod-active) .jp-InputPrompt {
  opacity: var(--jp-cell-prompt-not-active-opacity);
  color: var(--jp-cell-prompt-not-active-font-color);
}

.jp-Notebook .jp-Cell:not(.jp-mod-active) .jp-OutputPrompt {
  opacity: var(--jp-cell-prompt-not-active-opacity);
  color: var(--jp-cell-prompt-not-active-font-color);
}

/* cell is active */
.jp-Notebook .jp-Cell.jp-mod-active .jp-Collapser {
  background: var(--jp-brand-color1);
}

/* cell is dirty */
.jp-Notebook .jp-Cell.jp-mod-dirty .jp-InputPrompt {
  color: var(--jp-warn-color1);
}

.jp-Notebook .jp-Cell.jp-mod-dirty .jp-InputPrompt::before {
  color: var(--jp-warn-color1);
  content: '•';
}

.jp-Notebook .jp-Cell.jp-mod-active.jp-mod-dirty .jp-Collapser {
  background: var(--jp-warn-color1);
}

/* collapser is hovered */
.jp-Notebook .jp-Cell .jp-Collapser:hover {
  box-shadow: var(--jp-elevation-z2);
  background: var(--jp-brand-color1);
  opacity: var(--jp-cell-collapser-not-active-hover-opacity);
}

/* cell is active and collapser is hovered */
.jp-Notebook .jp-Cell.jp-mod-active .jp-Collapser:hover {
  background: var(--jp-brand-color0);
  opacity: 1;
}

/* Command mode */

.jp-Notebook.jp-mod-commandMode .jp-Cell.jp-mod-selected {
  background: var(--jp-notebook-multiselected-color);
}

.jp-Notebook.jp-mod-commandMode
  .jp-Cell.jp-mod-active.jp-mod-selected:not(.jp-mod-multiSelected) {
  background: transparent;
}

/* Edit mode */

.jp-Notebook.jp-mod-editMode .jp-Cell.jp-mod-active .jp-InputArea-editor {
  border: var(--jp-border-width) solid var(--jp-cell-editor-active-border-color);
  box-shadow: var(--jp-input-box-shadow);
  background-color: var(--jp-cell-editor-active-background);
}

/*-----------------------------------------------------------------------------
| Notebook drag and drop
|----------------------------------------------------------------------------*/

.jp-Notebook-cell.jp-mod-dropSource {
  opacity: 0.5;
}

.jp-Notebook-cell.jp-mod-dropTarget,
.jp-Notebook.jp-mod-commandMode
  .jp-Notebook-cell.jp-mod-active.jp-mod-selected.jp-mod-dropTarget {
  border-top-color: var(--jp-private-notebook-selected-color);
  border-top-style: solid;
  border-top-width: 2px;
}

.jp-dragImage {
  display: block;
  flex-direction: row;
  width: var(--jp-private-notebook-dragImage-width);
  height: var(--jp-private-notebook-dragImage-height);
  border: var(--jp-border-width) solid var(--jp-cell-editor-border-color);
  background: var(--jp-cell-editor-background);
  overflow: visible;
}

.jp-dragImage-singlePrompt {
  box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.12);
}

.jp-dragImage .jp-dragImage-content {
  flex: 1 1 auto;
  z-index: 2;
  font-size: var(--jp-code-font-size);
  font-family: var(--jp-code-font-family);
  line-height: var(--jp-code-line-height);
  padding: var(--jp-code-padding);
  border: var(--jp-border-width) solid var(--jp-cell-editor-border-color);
  background: var(--jp-cell-editor-background-color);
  color: var(--jp-content-font-color3);
  text-align: left;
  margin: 4px 4px 4px 0;
}

.jp-dragImage .jp-dragImage-prompt {
  flex: 0 0 auto;
  min-width: 36px;
  color: var(--jp-cell-inprompt-font-color);
  padding: var(--jp-code-padding);
  padding-left: 12px;
  font-family: var(--jp-cell-prompt-font-family);
  letter-spacing: var(--jp-cell-prompt-letter-spacing);
  line-height: 1.9;
  font-size: var(--jp-code-font-size);
  border: var(--jp-border-width) solid transparent;
}

.jp-dragImage-multipleBack {
  z-index: -1;
  position: absolute;
  height: 32px;
  width: 300px;
  top: 8px;
  left: 8px;
  background: var(--jp-layout-color2);
  border: var(--jp-border-width) solid var(--jp-input-border-color);
  box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.12);
}

/*-----------------------------------------------------------------------------
| Cell toolbar
|----------------------------------------------------------------------------*/

.jp-NotebookTools {
  display: block;
  min-width: var(--jp-sidebar-min-width);
  color: var(--jp-ui-font-color1);
  background: var(--jp-layout-color1);

  /* This is needed so that all font sizing of children done in ems is
    * relative to this base size */
  font-size: var(--jp-ui-font-size1);
  overflow: auto;
}

.jp-ActiveCellTool {
  padding: 12px 0;
  display: flex;
}

.jp-ActiveCellTool-Content {
  flex: 1 1 auto;
}

.jp-ActiveCellTool .jp-ActiveCellTool-CellContent {
  background: var(--jp-cell-editor-background);
  border: var(--jp-border-width) solid var(--jp-cell-editor-border-color);
  border-radius: 0;
  min-height: 29px;
}

.jp-ActiveCellTool .jp-InputPrompt {
  min-width: calc(var(--jp-cell-prompt-width) * 0.75);
}

.jp-ActiveCellTool-CellContent > pre {
  padding: 5px 4px;
  margin: 0;
  white-space: normal;
}

.jp-MetadataEditorTool {
  flex-direction: column;
  padding: 12px 0;
}

.jp-RankedPanel > :not(:first-child) {
  margin-top: 12px;
}

.jp-KeySelector select.jp-mod-styled {
  font-size: var(--jp-ui-font-size1);
  color: var(--jp-ui-font-color0);
  border: var(--jp-border-width) solid var(--jp-border-color1);
}

.jp-KeySelector label,
.jp-MetadataEditorTool label,
.jp-NumberSetter label {
  line-height: 1.4;
}

.jp-NotebookTools .jp-select-wrapper {
  margin-top: 4px;
  margin-bottom: 0;
}

.jp-NumberSetter input {
  width: 100%;
  margin-top: 4px;
}

.jp-NotebookTools .jp-Collapse {
  margin-top: 16px;
}

/*-----------------------------------------------------------------------------
| Presentation Mode (.jp-mod-presentationMode)
|----------------------------------------------------------------------------*/

.jp-mod-presentationMode .jp-Notebook {
  --jp-content-font-size1: var(--jp-content-presentation-font-size1);
  --jp-code-font-size: var(--jp-code-presentation-font-size);
}

.jp-mod-presentationMode .jp-Notebook .jp-Cell .jp-InputPrompt,
.jp-mod-presentationMode .jp-Notebook .jp-Cell .jp-OutputPrompt {
  flex: 0 0 110px;
}

/*-----------------------------------------------------------------------------
| Side-by-side Mode (.jp-mod-sideBySide)
|----------------------------------------------------------------------------*/
.jp-mod-sideBySide.jp-Notebook .jp-Notebook-cell {
  margin-top: 3em;
  margin-bottom: 3em;
  margin-left: 5%;
  margin-right: 5%;
}

.jp-mod-sideBySide.jp-Notebook .jp-CodeCell {
  display: grid;
  grid-template-columns: minmax(0, 1fr) min-content minmax(
      0,
      var(--jp-side-by-side-output-size)
    );
  grid-template-rows: auto minmax(0, 1fr) auto;
  grid-template-areas:
    'header header header'
    'input handle output'
    'footer footer footer';
}

.jp-mod-sideBySide.jp-Notebook .jp-CodeCell.jp-mod-resizedCell {
  grid-template-columns: minmax(0, 1fr) min-content minmax(
      0,
      var(--jp-side-by-side-resized-cell)
    );
}

.jp-mod-sideBySide.jp-Notebook .jp-CodeCell .jp-CellHeader {
  grid-area: header;
}

.jp-mod-sideBySide.jp-Notebook .jp-CodeCell .jp-Cell-inputWrapper {
  grid-area: input;
}

.jp-mod-sideBySide.jp-Notebook .jp-CodeCell .jp-Cell-outputWrapper {
  /* overwrite the default margin (no vertical separation needed in side by side move */
  margin-top: 0;
  grid-area: output;
}

.jp-mod-sideBySide.jp-Notebook .jp-CodeCell .jp-CellFooter {
  grid-area: footer;
}

.jp-mod-sideBySide.jp-Notebook .jp-CodeCell .jp-CellResizeHandle {
  grid-area: handle;
  user-select: none;
  display: block;
  height: 100%;
  cursor: ew-resize;
  padding: 0 var(--jp-cell-padding);
}

.jp-mod-sideBySide.jp-Notebook .jp-CodeCell .jp-CellResizeHandle::after {
  content: '';
  display: block;
  background: var(--jp-border-color2);
  height: 100%;
  width: 5px;
}

.jp-mod-sideBySide.jp-Notebook
  .jp-CodeCell.jp-mod-resizedCell
  .jp-CellResizeHandle::after {
  background: var(--jp-border-color0);
}

.jp-CellResizeHandle {
  display: none;
}

/*-----------------------------------------------------------------------------
| Placeholder
|----------------------------------------------------------------------------*/

.jp-Cell-Placeholder {
  padding-left: 55px;
}

.jp-Cell-Placeholder-wrapper {
  background: #fff;
  border: 1px solid;
  border-color: #e5e6e9 #dfe0e4 #d0d1d5;
  border-radius: 4px;
  -webkit-border-radius: 4px;
  margin: 10px 15px;
}

.jp-Cell-Placeholder-wrapper-inner {
  padding: 15px;
  position: relative;
}

.jp-Cell-Placeholder-wrapper-body {
  background-repeat: repeat;
  background-size: 50% auto;
}

.jp-Cell-Placeholder-wrapper-body div {
  background: #f6f7f8;
  background-image: -webkit-linear-gradient(
    left,
    #f6f7f8 0%,
    #edeef1 20%,
    #f6f7f8 40%,
    #f6f7f8 100%
  );
  background-repeat: no-repeat;
  background-size: 800px 104px;
  height: 104px;
  position: absolute;
  right: 15px;
  left: 15px;
  top: 15px;
}

div.jp-Cell-Placeholder-h1 {
  top: 20px;
  height: 20px;
  left: 15px;
  width: 150px;
}

div.jp-Cell-Placeholder-h2 {
  left: 15px;
  top: 50px;
  height: 10px;
  width: 100px;
}

div.jp-Cell-Placeholder-content-1,
div.jp-Cell-Placeholder-content-2,
div.jp-Cell-Placeholder-content-3 {
  left: 15px;
  right: 15px;
  height: 10px;
}

div.jp-Cell-Placeholder-content-1 {
  top: 100px;
}

div.jp-Cell-Placeholder-content-2 {
  top: 120px;
}

div.jp-Cell-Placeholder-content-3 {
  top: 140px;
}

</style>
<style type="text/css">
/*-----------------------------------------------------------------------------
| Copyright (c) Jupyter Development Team.
| Distributed under the terms of the Modified BSD License.
|----------------------------------------------------------------------------*/

/*
The following CSS variables define the main, public API for styling JupyterLab.
These variables should be used by all plugins wherever possible. In other
words, plugins should not define custom colors, sizes, etc unless absolutely
necessary. This enables users to change the visual theme of JupyterLab
by changing these variables.

Many variables appear in an ordered sequence (0,1,2,3). These sequences
are designed to work well together, so for example, `--jp-border-color1` should
be used with `--jp-layout-color1`. The numbers have the following meanings:

* 0: super-primary, reserved for special emphasis
* 1: primary, most important under normal situations
* 2: secondary, next most important under normal situations
* 3: tertiary, next most important under normal situations

Throughout JupyterLab, we are mostly following principles from Google's
Material Design when selecting colors. We are not, however, following
all of MD as it is not optimized for dense, information rich UIs.
*/

:root {
  /* Elevation
   *
   * We style box-shadows using Material Design's idea of elevation. These particular numbers are taken from here:
   *
   * https://github.com/material-components/material-components-web
   * https://material-components-web.appspot.com/elevation.html
   */

  /* The dark theme shadows need a bit of work, but this will probably also require work on the core layout
   * colors used in the theme as well. */
  --jp-shadow-base-lightness: 32;
  --jp-shadow-umbra-color: rgba(
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    0.2
  );
  --jp-shadow-penumbra-color: rgba(
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    0.14
  );
  --jp-shadow-ambient-color: rgba(
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    var(--jp-shadow-base-lightness),
    0.12
  );
  --jp-elevation-z0: none;
  --jp-elevation-z1: 0 2px 1px -1px var(--jp-shadow-umbra-color),
    0 1px 1px 0 var(--jp-shadow-penumbra-color),
    0 1px 3px 0 var(--jp-shadow-ambient-color);
  --jp-elevation-z2: 0 3px 1px -2px var(--jp-shadow-umbra-color),
    0 2px 2px 0 var(--jp-shadow-penumbra-color),
    0 1px 5px 0 var(--jp-shadow-ambient-color);
  --jp-elevation-z4: 0 2px 4px -1px var(--jp-shadow-umbra-color),
    0 4px 5px 0 var(--jp-shadow-penumbra-color),
    0 1px 10px 0 var(--jp-shadow-ambient-color);
  --jp-elevation-z6: 0 3px 5px -1px var(--jp-shadow-umbra-color),
    0 6px 10px 0 var(--jp-shadow-penumbra-color),
    0 1px 18px 0 var(--jp-shadow-ambient-color);
  --jp-elevation-z8: 0 5px 5px -3px var(--jp-shadow-umbra-color),
    0 8px 10px 1px var(--jp-shadow-penumbra-color),
    0 3px 14px 2px var(--jp-shadow-ambient-color);
  --jp-elevation-z12: 0 7px 8px -4px var(--jp-shadow-umbra-color),
    0 12px 17px 2px var(--jp-shadow-penumbra-color),
    0 5px 22px 4px var(--jp-shadow-ambient-color);
  --jp-elevation-z16: 0 8px 10px -5px var(--jp-shadow-umbra-color),
    0 16px 24px 2px var(--jp-shadow-penumbra-color),
    0 6px 30px 5px var(--jp-shadow-ambient-color);
  --jp-elevation-z20: 0 10px 13px -6px var(--jp-shadow-umbra-color),
    0 20px 31px 3px var(--jp-shadow-penumbra-color),
    0 8px 38px 7px var(--jp-shadow-ambient-color);
  --jp-elevation-z24: 0 11px 15px -7px var(--jp-shadow-umbra-color),
    0 24px 38px 3px var(--jp-shadow-penumbra-color),
    0 9px 46px 8px var(--jp-shadow-ambient-color);

  /* Borders
   *
   * The following variables, specify the visual styling of borders in JupyterLab.
   */

  --jp-border-width: 1px;
  --jp-border-color0: var(--md-grey-700);
  --jp-border-color1: var(--md-grey-700);
  --jp-border-color2: var(--md-grey-800);
  --jp-border-color3: var(--md-grey-900);
  --jp-inverse-border-color: var(--md-grey-600);
  --jp-border-radius: 2px;

  /* UI Fonts
   *
   * The UI font CSS variables are used for the typography all of the JupyterLab
   * user interface elements that are not directly user generated content.
   *
   * The font sizing here is done assuming that the body font size of --jp-ui-font-size1
   * is applied to a parent element. When children elements, such as headings, are sized
   * in em all things will be computed relative to that body size.
   */

  --jp-ui-font-scale-factor: 1.2;
  --jp-ui-font-size0: 0.83333em;
  --jp-ui-font-size1: 13px; /* Base font size */
  --jp-ui-font-size2: 1.2em;
  --jp-ui-font-size3: 1.44em;
  --jp-ui-font-family: system-ui, -apple-system, blinkmacsystemfont, 'Segoe UI',
    helvetica, arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
    'Segoe UI Symbol';

  /*
   * Use these font colors against the corresponding main layout colors.
   * In a light theme, these go from dark to light.
   */

  /* Defaults use Material Design specification */
  --jp-ui-font-color0: rgba(255, 255, 255, 1);
  --jp-ui-font-color1: rgba(255, 255, 255, 0.87);
  --jp-ui-font-color2: rgba(255, 255, 255, 0.54);
  --jp-ui-font-color3: rgba(255, 255, 255, 0.38);

  /*
   * Use these against the brand/accent/warn/error colors.
   * These will typically go from light to darker, in both a dark and light theme.
   */

  --jp-ui-inverse-font-color0: rgba(0, 0, 0, 1);
  --jp-ui-inverse-font-color1: rgba(0, 0, 0, 0.8);
  --jp-ui-inverse-font-color2: rgba(0, 0, 0, 0.5);
  --jp-ui-inverse-font-color3: rgba(0, 0, 0, 0.3);

  /* Content Fonts
   *
   * Content font variables are used for typography of user generated content.
   *
   * The font sizing here is done assuming that the body font size of --jp-content-font-size1
   * is applied to a parent element. When children elements, such as headings, are sized
   * in em all things will be computed relative to that body size.
   */

  --jp-content-line-height: 1.6;
  --jp-content-font-scale-factor: 1.2;
  --jp-content-font-size0: 0.83333em;
  --jp-content-font-size1: 14px; /* Base font size */
  --jp-content-font-size2: 1.2em;
  --jp-content-font-size3: 1.44em;
  --jp-content-font-size4: 1.728em;
  --jp-content-font-size5: 2.0736em;

  /* This gives a magnification of about 125% in presentation mode over normal. */
  --jp-content-presentation-font-size1: 17px;
  --jp-content-heading-line-height: 1;
  --jp-content-heading-margin-top: 1.2em;
  --jp-content-heading-margin-bottom: 0.8em;
  --jp-content-heading-font-weight: 500;

  /* Defaults use Material Design specification */
  --jp-content-font-color0: rgba(255, 255, 255, 1);
  --jp-content-font-color1: rgba(255, 255, 255, 1);
  --jp-content-font-color2: rgba(255, 255, 255, 0.7);
  --jp-content-font-color3: rgba(255, 255, 255, 0.5);
  --jp-content-link-color: var(--md-blue-300);
  --jp-content-font-family: system-ui, -apple-system, blinkmacsystemfont,
    'Segoe UI', helvetica, arial, sans-serif, 'Apple Color Emoji',
    'Segoe UI Emoji', 'Segoe UI Symbol';

  /*
   * Code Fonts
   *
   * Code font variables are used for typography of code and other monospaces content.
   */

  --jp-code-font-size: 13px;
  --jp-code-line-height: 1.3077; /* 17px for 13px base */
  --jp-code-padding: 5px; /* 5px for 13px base, codemirror highlighting needs integer px value */
  --jp-code-font-family-default: menlo, consolas, 'DejaVu Sans Mono', monospace;
  --jp-code-font-family: var(--jp-code-font-family-default);

  /* This gives a magnification of about 125% in presentation mode over normal. */
  --jp-code-presentation-font-size: 16px;

  /* may need to tweak cursor width if you change font size */
  --jp-code-cursor-width0: 1.4px;
  --jp-code-cursor-width1: 2px;
  --jp-code-cursor-width2: 4px;

  /* Layout
   *
   * The following are the main layout colors use in JupyterLab. In a light
   * theme these would go from light to dark.
   */

  --jp-layout-color0: #111;
  --jp-layout-color1: var(--md-grey-900);
  --jp-layout-color2: var(--md-grey-800);
  --jp-layout-color3: var(--md-grey-700);
  --jp-layout-color4: var(--md-grey-600);

  /* Inverse Layout
   *
   * The following are the inverse layout colors use in JupyterLab. In a light
   * theme these would go from dark to light.
   */

  --jp-inverse-layout-color0: white;
  --jp-inverse-layout-color1: white;
  --jp-inverse-layout-color2: var(--md-grey-200);
  --jp-inverse-layout-color3: var(--md-grey-400);
  --jp-inverse-layout-color4: var(--md-grey-600);

  /* Brand/accent */

  --jp-brand-color0: var(--md-blue-700);
  --jp-brand-color1: var(--md-blue-500);
  --jp-brand-color2: var(--md-blue-300);
  --jp-brand-color3: var(--md-blue-100);
  --jp-brand-color4: var(--md-blue-50);
  --jp-accent-color0: var(--md-green-700);
  --jp-accent-color1: var(--md-green-500);
  --jp-accent-color2: var(--md-green-300);
  --jp-accent-color3: var(--md-green-100);

  /* State colors (warn, error, success, info) */

  --jp-warn-color0: var(--md-orange-700);
  --jp-warn-color1: var(--md-orange-500);
  --jp-warn-color2: var(--md-orange-300);
  --jp-warn-color3: var(--md-orange-100);
  --jp-error-color0: var(--md-red-700);
  --jp-error-color1: var(--md-red-500);
  --jp-error-color2: var(--md-red-300);
  --jp-error-color3: var(--md-red-100);
  --jp-success-color0: var(--md-green-700);
  --jp-success-color1: var(--md-green-500);
  --jp-success-color2: var(--md-green-300);
  --jp-success-color3: var(--md-green-100);
  --jp-info-color0: var(--md-cyan-700);
  --jp-info-color1: var(--md-cyan-500);
  --jp-info-color2: var(--md-cyan-300);
  --jp-info-color3: var(--md-cyan-100);

  /* Cell specific styles */

  --jp-cell-padding: 5px;
  --jp-cell-collapser-width: 8px;
  --jp-cell-collapser-min-height: 20px;
  --jp-cell-collapser-not-active-hover-opacity: 0.6;
  --jp-cell-editor-background: var(--jp-layout-color1);
  --jp-cell-editor-border-color: var(--md-grey-700);
  --jp-cell-editor-box-shadow: inset 0 0 2px var(--md-blue-300);
  --jp-cell-editor-active-background: var(--jp-layout-color0);
  --jp-cell-editor-active-border-color: var(--jp-brand-color1);
  --jp-cell-prompt-width: 64px;
  --jp-cell-prompt-font-family: var(--jp-code-font-family-default);
  --jp-cell-prompt-letter-spacing: 0;
  --jp-cell-prompt-opacity: 1;
  --jp-cell-prompt-not-active-opacity: 1;
  --jp-cell-prompt-not-active-font-color: var(--md-grey-300);

  /* A custom blend of MD grey and blue 600
   * See https://meyerweb.com/eric/tools/color-blend/#546E7A:1E88E5:5:hex */
  --jp-cell-inprompt-font-color: #307fc1;

  /* A custom blend of MD grey and orange 600
   * https://meyerweb.com/eric/tools/color-blend/#546E7A:F4511E:5:hex */
  --jp-cell-outprompt-font-color: #bf5b3d;

  /* Notebook specific styles */

  --jp-notebook-padding: 10px;
  --jp-notebook-select-background: var(--jp-layout-color1);
  --jp-notebook-multiselected-color: rgba(33, 150, 243, 0.24);

  /* The scroll padding is calculated to fill enough space at the bottom of the
  notebook to show one single-line cell (with appropriate padding) at the top
  when the notebook is scrolled all the way to the bottom. We also subtract one
  pixel so that no scrollbar appears if we have just one single-line cell in the
  notebook. This padding is to enable a 'scroll past end' feature in a notebook.
  */
  --jp-notebook-scroll-padding: calc(
    100% - var(--jp-code-font-size) * var(--jp-code-line-height) -
      var(--jp-code-padding) - var(--jp-cell-padding) - 1px
  );

  /* Rendermime styles */

  --jp-rendermime-error-background: rgba(244, 67, 54, 0.28);
  --jp-rendermime-table-row-background: var(--md-grey-900);
  --jp-rendermime-table-row-hover-background: rgba(3, 169, 244, 0.2);

  /* Dialog specific styles */

  --jp-dialog-background: rgba(0, 0, 0, 0.6);

  /* Console specific styles */

  --jp-console-padding: 10px;

  /* Toolbar specific styles */

  --jp-toolbar-border-color: var(--jp-border-color2);
  --jp-toolbar-micro-height: 8px;
  --jp-toolbar-background: var(--jp-layout-color1);
  --jp-toolbar-box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.8);
  --jp-toolbar-header-margin: 4px 4px 0 4px;
  --jp-toolbar-active-background: var(--jp-layout-color0);

  /* Statusbar specific styles */

  --jp-statusbar-height: 24px;

  /* Input field styles */

  --jp-input-box-shadow: inset 0 0 2px var(--md-blue-300);
  --jp-input-active-background: var(--jp-layout-color0);
  --jp-input-hover-background: var(--jp-layout-color2);
  --jp-input-background: var(--md-grey-800);
  --jp-input-border-color: var(--jp-inverse-border-color);
  --jp-input-active-border-color: var(--jp-brand-color1);
  --jp-input-active-box-shadow-color: rgba(19, 124, 189, 0.3);

  /* General editor styles */

  --jp-editor-selected-background: var(--jp-layout-color2);
  --jp-editor-selected-focused-background: rgba(33, 150, 243, 0.24);
  --jp-editor-cursor-color: var(--jp-ui-font-color0);

  /* Code mirror specific styles */

  --jp-mirror-editor-keyword-color: var(--md-green-500);
  --jp-mirror-editor-atom-color: var(--md-blue-300);
  --jp-mirror-editor-number-color: var(--md-green-400);
  --jp-mirror-editor-def-color: var(--md-blue-600);
  --jp-mirror-editor-variable-color: var(--md-grey-300);
  --jp-mirror-editor-variable-2-color: var(--md-blue-500);
  --jp-mirror-editor-variable-3-color: var(--md-green-600);
  --jp-mirror-editor-punctuation-color: var(--md-blue-400);
  --jp-mirror-editor-property-color: var(--md-blue-400);
  --jp-mirror-editor-operator-color: #a2f;
  --jp-mirror-editor-comment-color: #408080;
  --jp-mirror-editor-string-color: #ff7070;
  --jp-mirror-editor-string-2-color: var(--md-purple-300);
  --jp-mirror-editor-meta-color: #a2f;
  --jp-mirror-editor-qualifier-color: #555;
  --jp-mirror-editor-builtin-color: var(--md-green-600);
  --jp-mirror-editor-bracket-color: #997;
  --jp-mirror-editor-tag-color: var(--md-green-700);
  --jp-mirror-editor-attribute-color: var(--md-blue-700);
  --jp-mirror-editor-header-color: var(--md-blue-500);
  --jp-mirror-editor-quote-color: var(--md-green-300);
  --jp-mirror-editor-link-color: var(--md-blue-700);
  --jp-mirror-editor-error-color: #f00;
  --jp-mirror-editor-hr-color: #999;

  /*
    RTC user specific colors.
    These colors are used for the cursor, username in the editor,
    and the icon of the user.
  */

  --jp-collaborator-color1: #ad4a00;
  --jp-collaborator-color2: #7b6a00;
  --jp-collaborator-color3: #007e00;
  --jp-collaborator-color4: #008772;
  --jp-collaborator-color5: #0079b9;
  --jp-collaborator-color6: #8b45c6;
  --jp-collaborator-color7: #be208b;

  /* Vega extension styles */

  --jp-vega-background: var(--md-grey-400);

  /* Sidebar-related styles */

  --jp-sidebar-min-width: 250px;

  /* Search-related styles */

  --jp-search-toggle-off-opacity: 0.6;
  --jp-search-toggle-hover-opacity: 0.8;
  --jp-search-toggle-on-opacity: 1;
  --jp-search-selected-match-background-color: rgb(255, 225, 0);
  --jp-search-selected-match-color: black;
  --jp-search-unselected-match-background-color: var(
    --jp-inverse-layout-color0
  );
  --jp-search-unselected-match-color: var(--jp-ui-inverse-font-color0);

  /* scrollbar related styles. Supports every browser except Edge. */

  /* colors based on JetBrain's Darcula theme */

  --jp-scrollbar-background-color: #3f4244;
  --jp-scrollbar-thumb-color: 88, 96, 97; /* need to specify thumb color as an RGB triplet */
  --jp-scrollbar-endpad: 3px; /* the minimum gap between the thumb and the ends of a scrollbar */

  /* hacks for setting the thumb shape. These do nothing in Firefox */

  --jp-scrollbar-thumb-margin: 3.5px; /* the space in between the sides of the thumb and the track */
  --jp-scrollbar-thumb-radius: 9px; /* set to a large-ish value for rounded endcaps on the thumb */

  /* Icon colors that work well with light or dark backgrounds */
  --jp-icon-contrast-color0: var(--md-purple-600);
  --jp-icon-contrast-color1: var(--md-green-600);
  --jp-icon-contrast-color2: var(--md-pink-600);
  --jp-icon-contrast-color3: var(--md-blue-600);

  /* Button colors */
  --jp-accept-color-normal: var(--md-blue-700);
  --jp-accept-color-hover: var(--md-blue-800);
  --jp-accept-color-active: var(--md-blue-900);
  --jp-warn-color-normal: var(--md-red-700);
  --jp-warn-color-hover: var(--md-red-800);
  --jp-warn-color-active: var(--md-red-900);
  --jp-reject-color-normal: var(--md-grey-600);
  --jp-reject-color-hover: var(--md-grey-700);
  --jp-reject-color-active: var(--md-grey-800);

  /* File or activity icons and switch semantic variables */
  --jp-jupyter-icon-color: #f37626;
  --jp-notebook-icon-color: #f37626;
  --jp-json-icon-color: var(--md-orange-500);
  --jp-console-icon-background-color: var(--md-blue-500);
  --jp-console-icon-color: white;
  --jp-terminal-icon-background-color: var(--md-grey-200);
  --jp-terminal-icon-color: var(--md-grey-800);
  --jp-text-editor-icon-color: var(--md-grey-200);
  --jp-inspector-icon-color: var(--md-grey-200);
  --jp-switch-color: var(--md-grey-400);
  --jp-switch-true-position-color: var(--md-orange-700);
}
</style>
<style type="text/css">
/* Force rendering true colors when outputting to pdf */
* {
  -webkit-print-color-adjust: exact;
  print-color-adjust: exact;
}

/* Misc */
a.anchor-link {
  display: none;
}

/* Input area styling */
.jp-InputArea {
  overflow: hidden;
}

.jp-InputArea-editor {
  overflow: hidden;
}

.cm-editor.cm-s-jupyter .highlight pre {
/* weird, but --jp-code-padding defined to be 5px but 4px horizontal padding is hardcoded for pre.cm-line */
  padding: var(--jp-code-padding) 4px;
  margin: 0;

  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  color: inherit;

}

.jp-OutputArea-output pre {
  line-height: inherit;
  font-family: inherit;
}

.jp-RenderedText pre {
  color: var(--jp-content-font-color1);
  font-size: var(--jp-code-font-size);
}

/* Hiding the collapser by default */
.jp-Collapser {
  display: none;
}

@page {
    margin: 0.5in; /* Margin for each printed piece of paper */
}

@media print {
  .jp-Cell-inputWrapper,
  .jp-Cell-outputWrapper {
    display: block;
  }
}
</style>
<!-- Load mathjax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/latest.js?config=TeX-AMS_CHTML-full,Safe"> </script>
<!-- MathJax configuration -->
<script type="text/x-mathjax-config">
    init_mathjax = function() {
        if (window.MathJax) {
        // MathJax loaded
            MathJax.Hub.Config({
                TeX: {
                    equationNumbers: {
                    autoNumber: "AMS",
                    useLabelIds: true
                    }
                },
                tex2jax: {
                    inlineMath: [ ['$','$'], ["\\(","\\)"] ],
                    displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
                    processEscapes: true,
                    processEnvironments: true
                },
                displayAlign: 'center',
                CommonHTML: {
                    linebreaks: {
                    automatic: true
                    }
                }
            });

            MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
        }
    }
    init_mathjax();
    </script>
<!-- End of mathjax configuration --><script type="module">
  document.addEventListener("DOMContentLoaded", async () => {
    const diagrams = document.querySelectorAll(".jp-Mermaid > pre.mermaid");
    // do not load mermaidjs if not needed
    if (!diagrams.length) {
      return;
    }
    const mermaid = (await import("https://cdnjs.cloudflare.com/ajax/libs/mermaid/10.6.0/mermaid.esm.min.mjs")).default;
    const parser = new DOMParser();

    mermaid.initialize({
      maxTextSize: 100000,
      startOnLoad: false,
      fontFamily: window
        .getComputedStyle(document.body)
        .getPropertyValue("--jp-ui-font-family"),
      theme: document.querySelector("body[data-jp-theme-light='true']")
        ? "default"
        : "dark",
    });

    let _nextMermaidId = 0;

    function makeMermaidImage(svg) {
      const img = document.createElement("img");
      const doc = parser.parseFromString(svg, "image/svg+xml");
      const svgEl = doc.querySelector("svg");
      const { maxWidth } = svgEl?.style || {};
      const firstTitle = doc.querySelector("title");
      const firstDesc = doc.querySelector("desc");

      img.setAttribute("src", `data:image/svg+xml,${encodeURIComponent(svg)}`);
      if (maxWidth) {
        img.width = parseInt(maxWidth);
      }
      if (firstTitle) {
        img.setAttribute("alt", firstTitle.textContent);
      }
      if (firstDesc) {
        const caption = document.createElement("figcaption");
        caption.className = "sr-only";
        caption.textContent = firstDesc.textContent;
        return [img, caption];
      }
      return [img];
    }

    async function makeMermaidError(text) {
      let errorMessage = "";
      try {
        await mermaid.parse(text);
      } catch (err) {
        errorMessage = `${err}`;
      }

      const result = document.createElement("details");
      result.className = 'jp-RenderedMermaid-Details';
      const summary = document.createElement("summary");
      summary.className = 'jp-RenderedMermaid-Summary';
      const pre = document.createElement("pre");
      const code = document.createElement("code");
      code.innerText = text;
      pre.appendChild(code);
      summary.appendChild(pre);
      result.appendChild(summary);

      const warning = document.createElement("pre");
      warning.innerText = errorMessage;
      result.appendChild(warning);
      return [result];
    }

    async function renderOneMarmaid(src) {
      const id = `jp-mermaid-${_nextMermaidId++}`;
      const parent = src.parentNode;
      let raw = src.textContent.trim();
      const el = document.createElement("div");
      el.style.visibility = "hidden";
      document.body.appendChild(el);
      let results = null;
      let output = null;
      try {
        const { svg } = await mermaid.render(id, raw, el);
        results = makeMermaidImage(svg);
        output = document.createElement("figure");
        results.map(output.appendChild, output);
      } catch (err) {
        parent.classList.add("jp-mod-warning");
        results = await makeMermaidError(raw);
        output = results[0];
      } finally {
        el.remove();
      }
      parent.classList.add("jp-RenderedMermaid");
      parent.appendChild(output);
    }

    void Promise.all([...diagrams].map(renderOneMarmaid));
  });
</script>
<style>
  .jp-Mermaid:not(.jp-RenderedMermaid) {
    display: none;
  }

  .jp-RenderedMermaid {
    overflow: auto;
    display: flex;
  }

  .jp-RenderedMermaid.jp-mod-warning {
    width: auto;
    padding: 0.5em;
    margin-top: 0.5em;
    border: var(--jp-border-width) solid var(--jp-warn-color2);
    border-radius: var(--jp-border-radius);
    color: var(--jp-ui-font-color1);
    font-size: var(--jp-ui-font-size1);
    white-space: pre-wrap;
    word-wrap: break-word;
  }

  .jp-RenderedMermaid figure {
    margin: 0;
    overflow: auto;
    max-width: 100%;
  }

  .jp-RenderedMermaid img {
    max-width: 100%;
  }

  .jp-RenderedMermaid-Details > pre {
    margin-top: 1em;
  }

  .jp-RenderedMermaid-Summary {
    color: var(--jp-warn-color2);
  }

  .jp-RenderedMermaid:not(.jp-mod-warning) pre {
    display: none;
  }

  .jp-RenderedMermaid-Summary > pre {
    display: inline-block;
    white-space: normal;
  }
</style>
<!-- End of mermaid configuration --></head>
<body class="jp-Notebook" data-jp-theme-light="false" data-jp-theme-name="JupyterLab Dark">
  <div class="page-container">
    <!-- BEGIN NAVIGATION -->
    <div class="toolbar" style="width:100%; text-align:center; align-items: center;">
    <?php include 'menu-smmt.php'; ?>        
    </div>
    <!-- END NAVIGATION -->
    <div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput" style="padding: 20px 0"></div>

<main>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h1>Import and OCR the image files to wide format CSV</h1>
<p>This notebook carries out OCR and data formatting operations on the images files and saves it to unclean wide format csv.</p>
<table>
  <tr>
    <td>Notebook Name</td><td>Function</td></tr>
    <tr>
      <td><b>SMMT-1a-OCR-fueltype-newformat.ipynb</b></td>
      <td><b>Optical Character recognition of the image files in the import directory. Save to unclean csv</b></td>
    </tr>
    <tr>
      <td>SMMT-1b-CLEANSE-fueltype-newformat.ipynb</td>
      <td>Data cleanse, error detection and feature engineering. Saves to cleansed file</td>
    </tr>
    <tr>
      <td>SMMT-1b-CLEANSE-fueltype-newformat.ipynb</td>
      <td>Data cleanse, error detection and feature engineering. Saves to cleansed csv file in long data format.</td>
    </tr>

</table>

<h1 id="Notebook-for-importing-and-OCR-processing-images">Notebook for importing and OCR processing images<a class="anchor-link" href="#Notebook-for-importing-and-OCR-processing-images">¶</a></h1><p>designed specifically for data from the SMMT (Society for Motor Manufacturers and Traders - www.smmt.co.uk) who publish monthly data on car purchases in the UK. I'm particularly interested in fuel types and ownership.</p>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Import-python-packages">Import python packages<a class="anchor-link" href="#Import-python-packages">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [44]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="ch">#!/usr/bin/env python3</span>
<span class="kn">import</span> <span class="nn">psutil</span>
<span class="kn">from</span> <span class="nn">PIL</span> <span class="kn">import</span> <span class="n">Image</span>
<span class="kn">import</span> <span class="nn">pytesseract</span>
<span class="kn">from</span> <span class="nn">os</span> <span class="kn">import</span> <span class="n">listdir</span>
<span class="kn">import</span> <span class="nn">os</span>
<span class="kn">from</span> <span class="nn">os.path</span> <span class="kn">import</span> <span class="n">isfile</span><span class="p">,</span> <span class="n">join</span>
<span class="kn">from</span> <span class="nn">pathlib</span> <span class="kn">import</span> <span class="n">Path</span>
<span class="kn">from</span> <span class="nn">IPython.display</span> <span class="kn">import</span> <span class="n">Image</span> <span class="k">as</span> <span class="n">pimage</span><span class="p">,</span> <span class="n">display</span>
<span class="kn">from</span> <span class="nn">subprocess</span> <span class="kn">import</span> <span class="n">PIPE</span><span class="p">,</span> <span class="n">Popen</span><span class="p">,</span> <span class="n">STDOUT</span><span class="p">,</span> <span class="n">SubprocessError</span>
<span class="kn">from</span> <span class="nn">colorama</span> <span class="kn">import</span> <span class="n">Fore</span><span class="p">,</span> <span class="n">Style</span><span class="p">,</span> <span class="n">init</span>
</pre></div>
</div>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Initialise-notebook-variables-and-options">Initialise notebook variables and options<a class="anchor-link" href="#Initialise-notebook-variables-and-options">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [45]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">source_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Development/smmtdata-evolved/fuel_type/"</span>
<span class="n">output_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Development/smmtdata-evolved/ocr/"</span>
<span class="n">output_name</span> <span class="o">=</span> <span class="n">output_path</span> <span class="o">+</span> <span class="s2">"OUT_1a_fueltype_OCR_newformat-2023.txt"</span>

<span class="n">pytesseract</span><span class="o">.</span><span class="n">pytesseract</span><span class="o">.</span><span class="n">tesseract_cmd</span> <span class="o">=</span> <span class="sa">r</span><span class="s1">'/usr/bin/tesseract'</span>
</pre></div>
</div>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Define-functions">Define functions<a class="anchor-link" href="#Define-functions">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [46]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">doit</span><span class="p">(</span><span class="n">img_crop</span><span class="p">):</span>
    <span class="n">output_file</span> <span class="o">=</span> <span class="nb">open</span><span class="p">(</span><span class="n">output_name</span> <span class="p">,</span><span class="s2">"a"</span><span class="p">)</span>
    <span class="n">text</span> <span class="o">=</span> <span class="n">pytesseract</span><span class="o">.</span><span class="n">image_to_string</span><span class="p">(</span><span class="n">img_crop</span><span class="p">,</span> <span class="n">config</span><span class="o">=</span><span class="s2">"-c tessedit_char_whitelist=' 0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'  --psm 6"</span><span class="p">)</span>

    <span class="c1"># print(text)</span>
    <span class="c1"># for line in text:</span>
    <span class="n">output_file</span><span class="o">.</span><span class="n">write</span><span class="p">(</span><span class="n">text</span><span class="p">)</span>
    <span class="n">output_file</span><span class="o">.</span><span class="n">close</span><span class="p">()</span>
   <span class="c1"># img_crop.show()</span>
   <span class="c1"># a = input()</span>
   <span class="c1"># for proc in psutil.process_iter():</span>
   <span class="c1">#     #print(proc)</span>
   <span class="c1">#     if proc.name() == "shotwell":</span>
   <span class="c1">#         proc.kill()</span>
   <span class="c1">#     if proc.name() == "display":</span>
   <span class="c1">#         proc.kill()</span>
    
    <span class="k">return</span> <span class="n">text</span>
</pre></div>
</div>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h3 id="%3Cdeprecated%3E-img-dimensions-for-cropping"><code>&lt;deprecated&gt;</code> img dimensions for cropping<a class="anchor-link" href="#%3Cdeprecated%3E-img-dimensions-for-cropping">¶</a></h3><p>Since the old images are now in the DB, only new files need to be dealt with which seem to be more consistent. Keep this just in case smmt change formats again</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [47]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Set debug to 1 to display cropped images rather than run OCR</span>
<span class="n">debug</span> <span class="o">=</span> <span class="mi">0</span>


<span class="c1"># Different image formats and resolutions used over the years, pillow doesn't always report the right image dimensions, a cludgy way of dealing with this:</span>
<span class="n">file_specs_new</span> <span class="o">=</span> <span class="p">[[</span><span class="s1">'*.png'</span>   <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">655</span><span class="p">,</span> <span class="mi">850</span><span class="p">)]]</span>
<span class="c1">#,</span>
<span class="c1">#             ['*202x3*-cars.png'  , (0, 0, 655, 650)],</span>
<span class="c1">#             ['*202xx3*-cars.png'  , (0, 0, 890, 850)],</span>
<span class="c1">#             ['*202xxx3*-cars.png'  , (0, 0, 890, 650)],</span>
<span class="c1">#             ['*2022*-cars.png'   , (0, 0, 890, 890)],</span>
<span class="c1">#             ['*202x2*-cars.png'   , (0, 0, 890, 850)],</span>
<span class="c1">#             ['*2021*-cars.png'   , (0, 0, 650, 650)],</span>
<span class="c1">#             ['*202x1*-cars.png'  , (0, 0, 890, 850)],</span>
<span class="c1">#             ['*2020*-cars.png'   , (0, 0, 670, 660)],</span>
<span class="c1">#             ['*202x0*-cars.png'  , (0, 0, 890, 850)],</span>
<span class="c1">#             ['*202xx0*-cars.png' , (0, 0, 890, 850)],</span>
<span class="c1">#             ['*2019*-cars.png'   , (0, 0, 650, 660)],</span>
<span class="c1">#            ['*201xx9*-cars.png'  , (0, 0, 890, 850)]</span>
<span class="c1">#              ]</span>
</pre></div>
</div>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h1 id="Process-the-file-through-tesseract-OCR">Process the file through tesseract OCR<a class="anchor-link" href="#Process-the-file-through-tesseract-OCR">¶</a></h1><ul>
<li>Iterate over files in the ocr directory</li>
<li>Crop the image</li>
<li>OCR the image</li>
<li>Store the text (in the doit function)</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [48]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">line_num</span> <span class="o">=</span> <span class="mi">1</span> <span class="c1"># Keep a count of the line number so we can open the editor at the right line to correct errors</span>
<span class="k">for</span> <span class="n">path</span><span class="p">,</span> <span class="n">img_spec</span> <span class="ow">in</span> <span class="n">file_specs_new</span><span class="p">:</span>
    <span class="n">line_num</span> <span class="o">=</span> <span class="n">line_num</span> <span class="o">+</span> <span class="mi">1</span>
    <span class="k">for</span> <span class="n">path</span> <span class="ow">in</span> <span class="n">Path</span><span class="p">(</span><span class="n">source_path</span><span class="p">)</span><span class="o">.</span><span class="n">glob</span><span class="p">(</span><span class="n">path</span><span class="p">):</span>
        <span class="n">line_num</span> <span class="o">=</span> <span class="n">line_num</span> <span class="o">+</span> <span class="mi">1</span>
        <span class="c1"># print(path)</span>
        
        <span class="n">img</span> <span class="o">=</span> <span class="n">Image</span><span class="o">.</span><span class="n">open</span><span class="p">(</span><span class="n">path</span><span class="p">)</span>
        <span class="n">wid</span><span class="p">,</span> <span class="n">hgt</span> <span class="o">=</span> <span class="n">img</span><span class="o">.</span><span class="n">size</span> 
        <span class="n">img_spec</span> <span class="o">=</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">wid</span><span class="o">*</span><span class="mf">.55</span><span class="p">,</span> <span class="n">hgt</span> <span class="o">*</span><span class="mf">.45</span><span class="p">)</span> <span class="c1"># turns out we can math the image crop after all</span>
        <span class="n">im_crop</span> <span class="o">=</span> <span class="n">img</span><span class="o">.</span><span class="n">crop</span><span class="p">(</span><span class="n">img_spec</span><span class="p">)</span>
        <span class="k">if</span> <span class="n">debug</span> <span class="o">==</span> <span class="mi">1</span><span class="p">:</span> 
            <span class="k">pass</span> <span class="c1">#Image._show(im_crop)</span>
        <span class="k">else</span><span class="p">:</span>
            <span class="c1"># fetching the dimensions </span>
            <span class="n">wid</span><span class="p">,</span> <span class="n">hgt</span> <span class="o">=</span> <span class="n">img</span><span class="o">.</span><span class="n">size</span> 
  
        <span class="c1"># displaying the dimensions </span>
            <span class="c1">#hyperlink_text = f"Edit {str(wid)} x {str(hgt)} + {str(output_name)}"</span>
            <span class="c1">#shell_command = f"gedit '{output_name} +{line_num}'"</span>
            <span class="c1">#edit_name = f"'{output_name} +{line_num}'"</span>
            
            
            <span class="n">display</span><span class="p">(</span><span class="n">im_crop</span><span class="p">)</span>
            <span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">"</span><span class="si">{</span><span class="nb">str</span><span class="p">(</span><span class="n">wid</span><span class="p">)</span><span class="si">}</span><span class="s2"> x </span><span class="si">{</span><span class="nb">str</span><span class="p">(</span><span class="n">hgt</span><span class="p">)</span><span class="si">}</span><span class="s2"> - </span><span class="si">{</span><span class="nb">str</span><span class="p">(</span><span class="n">path</span><span class="p">)</span><span class="si">}</span><span class="s2"> - </span><span class="si">{</span><span class="n">line_num</span><span class="si">}</span><span class="s2">"</span><span class="p">)</span> <span class="c1"># display the full file path and line number. Can act as hyperlink in some terminals</span>
            <span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">"Edit </span><span class="si">{</span><span class="n">output_name</span><span class="si">}</span><span class="s2">"</span><span class="p">)</span> <span class="c1"># Display the output text file path. Can act as hyperlink in some terminals</span>
            <span class="n">text</span> <span class="o">=</span> <span class="n">doit</span><span class="p">(</span><span class="n">im_crop</span><span class="p">)</span> <span class="c1">#Call the doit function to OCR and save the text</span>
            <span class="nb">print</span><span class="p">(</span><span class="n">text</span><span class="p">)</span>
        <span class="c1">#input()</span>
</pre></div>
</div>
</div>
</div>
</div>
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>1618 x 1899 - /home/hass/Development/smmtdata-evolved/fuel_type/May-Fuel-2023-and-YTD-cars.png - 3
Edit /home/hass/Development/smmtdata-evolved/ocr/OUT_1a_fueltype_OCR_newformat-2023.txt
MAY

2023 2022
Diesel 5758 7614
Petrol 59766  56767
MHEVdiesel 5316 5823
MHEV petrol 23034 16842
BEV 24513 15448
PHEV 9025 7339
HEV 17792 14561
TOTAL 145204 124394

</pre>
</div>
</div>
</div>
</div>
</div>
</main>
</body>
</html>
