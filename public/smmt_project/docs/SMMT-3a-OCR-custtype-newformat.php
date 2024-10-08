<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>SMMT-3a-OCR-custtype-newformat</title><script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>
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
  -moz-appearance: none;
  appearance: none;
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

Note: input and output wrappers have "display: block" propery in print mode.
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
/* Force rendering true colors when outputing to pdf */
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
    <div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput" style="padding: 20px 0"></div><main>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Import-Libraries">Import Libraries<a class="anchor-link" href="#Import-Libraries">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [35]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="ch">#!/usr/bin/env python3</span>
<span class="kn">from</span> <span class="nn">PIL</span> <span class="kn">import</span> <span class="n">Image</span>
<span class="kn">import</span> <span class="nn">pytesseract</span>
<span class="kn">from</span> <span class="nn">os</span> <span class="kn">import</span> <span class="n">listdir</span>
<span class="kn">from</span> <span class="nn">os.path</span> <span class="kn">import</span> <span class="n">isfile</span><span class="p">,</span> <span class="n">join</span>
<span class="kn">from</span> <span class="nn">pathlib</span> <span class="kn">import</span> <span class="n">Path</span>
<span class="kn">import</span> <span class="nn">psutil</span>
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
<h1 id="Initialise-notebook-options">Initialise notebook options<a class="anchor-link" href="#Initialise-notebook-options">¶</a></h1>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [36]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">source_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Development/smmtdata-evolved/cust_type/"</span>

<span class="n">output_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Development/smmtdata-evolved/ocr/"</span>
<span class="n">output_name</span> <span class="o">=</span> <span class="n">output_path</span> <span class="o">+</span> <span class="s2">"OUT_3a_custtype_OCR_newformat-2023.txt"</span>
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
<h2 id="Define-Functions">Define Functions<a class="anchor-link" href="#Define-Functions">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [37]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">doit</span><span class="p">(</span><span class="n">img_crop</span><span class="p">):</span>
    <span class="n">output_file</span> <span class="o">=</span> <span class="nb">open</span><span class="p">(</span><span class="n">output_name</span> <span class="p">,</span><span class="s2">"a"</span><span class="p">)</span>

    <span class="n">text</span> <span class="o">=</span> <span class="n">pytesseract</span><span class="o">.</span><span class="n">image_to_string</span><span class="p">(</span><span class="n">img_crop</span><span class="p">,</span> <span class="n">config</span><span class="o">=</span><span class="s2">"-c tessedit_char_whitelist=' 0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'  --psm 6"</span><span class="p">)</span>
    <span class="nb">print</span><span class="p">(</span><span class="n">text</span><span class="p">)</span>
    
    <span class="k">for</span> <span class="n">line</span> <span class="ow">in</span> <span class="n">text</span><span class="p">:</span>
        <span class="n">output_file</span><span class="o">.</span><span class="n">write</span><span class="p">(</span><span class="n">line</span><span class="p">)</span>
    <span class="n">output_file</span><span class="o">.</span><span class="n">close</span><span class="p">()</span>
    <span class="c1">#display(img_crop)</span>
    <span class="c1">#input()</span>
   <span class="c1"># a = input()</span>
   <span class="c1"># for proc in psutil.process_iter():</span>
   <span class="c1">#     #print(proc)</span>
   <span class="c1">#     if proc.name() == "shotwell":</span>
   <span class="c1">#         proc.kill()</span>
   <span class="c1">#     if proc.name() == "display":</span>
   <span class="c1">#         proc.kill()</span>
</pre></div>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [38]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Set debug to 1 to display cropped images rather than run OCR</span>
<span class="n">debug</span> <span class="o">=</span> <span class="mi">0</span>


<span class="c1"># ** img_spec DEPRECATED ** Different images formats and resolutions used over the years, a cludgy way of dealing with this:</span>
<span class="n">file_specs</span> <span class="o">=</span> <span class="p">[[</span><span class="s1">'*2023*-cars.png'</span>   <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">655</span><span class="p">,</span> <span class="mi">400</span><span class="p">)],</span>
              <span class="p">[</span><span class="s1">'*202x3*-cars.png'</span>  <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">880</span><span class="p">,</span> <span class="mi">500</span><span class="p">)],</span>
              <span class="p">[</span><span class="s1">'*2022*-cars.png'</span>   <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">880</span><span class="p">,</span> <span class="mi">500</span><span class="p">)],</span>
              <span class="p">[</span><span class="s1">'*2021*-cars.png'</span>   <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">650</span><span class="p">,</span> <span class="mi">380</span><span class="p">)],</span>
              <span class="p">[</span><span class="s1">'*20x21*-cars.png'</span>  <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">880</span><span class="p">,</span> <span class="mi">500</span><span class="p">)],</span>
              <span class="p">[</span><span class="s1">'*2020*-cars.png'</span>   <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">650</span><span class="p">,</span> <span class="mi">380</span><span class="p">)],</span>
              <span class="p">[</span><span class="s1">'*20x20*-cars.png'</span>  <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">880</span><span class="p">,</span> <span class="mi">500</span><span class="p">)],</span>
              <span class="p">[</span><span class="s1">'*2019*-cars.png'</span>   <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">650</span><span class="p">,</span> <span class="mi">380</span><span class="p">)],</span>
              <span class="p">[</span><span class="s1">'*20x19*-cars.png'</span>  <span class="p">,</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">880</span><span class="p">,</span> <span class="mi">500</span><span class="p">)]</span>
              <span class="p">]</span>
</pre></div>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [39]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">for</span> <span class="n">path</span><span class="p">,</span> <span class="n">img_spec</span> <span class="ow">in</span> <span class="n">file_specs</span><span class="p">:</span> <span class="c1">#img_spec deprecated, newer images are more consistent, only required for old format</span>

    <span class="k">for</span> <span class="n">path</span> <span class="ow">in</span> <span class="n">Path</span><span class="p">(</span><span class="n">source_path</span><span class="p">)</span><span class="o">.</span><span class="n">glob</span><span class="p">(</span><span class="n">path</span><span class="p">):</span>
        <span class="nb">print</span><span class="p">(</span><span class="n">path</span><span class="p">)</span>
        <span class="n">img</span> <span class="o">=</span> <span class="n">Image</span><span class="o">.</span><span class="n">open</span><span class="p">(</span><span class="n">path</span><span class="p">)</span>
        <span class="n">wid</span><span class="p">,</span> <span class="n">hgt</span> <span class="o">=</span> <span class="n">img</span><span class="o">.</span><span class="n">size</span> 
        <span class="n">img_spec</span> <span class="o">=</span> <span class="p">(</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">,</span><span class="n">wid</span><span class="o">*</span><span class="mf">.55</span><span class="p">,</span> <span class="n">hgt</span> <span class="o">*</span><span class="mf">.45</span><span class="p">)</span>
        <span class="n">im_crop</span> <span class="o">=</span> <span class="n">img</span><span class="o">.</span><span class="n">crop</span><span class="p">(</span><span class="n">img_spec</span><span class="p">)</span>
        <span class="k">if</span> <span class="n">debug</span> <span class="o">==</span> <span class="mi">1</span><span class="p">:</span> 
            <span class="k">pass</span> <span class="c1">#Image._show(im_crop)</span>
        <span class="k">else</span><span class="p">:</span>
            
            <span class="n">display</span><span class="p">(</span><span class="n">im_crop</span><span class="p">)</span>
            <span class="n">doit</span><span class="p">(</span><span class="n">im_crop</span><span class="p">)</span>
            <span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">"edit - </span><span class="si">{</span><span class="n">output_name</span><span class="si">}</span><span class="se">\n</span><span class="s2">"</span><span class="p">)</span>

<span class="nb">print</span><span class="p">(</span><span class="s2">"</span><span class="se">\n</span><span class="s2">"</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"========================================="</span><span class="p">)</span>

<span class="nb">print</span><span class="p">(</span><span class="s2">"output file saved in "</span> <span class="o">+</span> <span class="n">output_name</span><span class="p">)</span>

<span class="nb">print</span><span class="p">(</span><span class="s2">"========================================="</span><span class="p">)</span>
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
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>/home/hass/Development/smmtdata-evolved/cust_type/June-Sales-2023-and-YTD-cars.png
</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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6JrQEfdLxpD5a7zeZikAfvxIQhCKYEMONmiVBolfyUf2rgsoJaQoQgj0KY90SsI/pwdiA8g1TiBabC6zijKEoFPHTz/9NFglpv/85/u8Phxo9ZLMpjLrhpuK6TRramvWfdLTRw6awVAqy5d/bSQKlzd+tRDBvGOsyD9nrKcnPjVUbmp9BQPbRn4KpKb/QlQcTrjOKFamWCtNE8IZxmygDVKalOP84FdmSV0AFb4QztWqyTBfmWLJ0qX0cRYrlVSXav/FLy67554/isNbir7xxpsYXqR3aFOZYNuRoiEqKbJt81gF2FDF48AS29RHLS2DE1AZRuZQM6+NDZDStVKHn4OTwkxkijxr2Jm1Ntd11Vbem4sKsZ1IgUiBSqJA8Kp/+curnnlmtL28Z5xxxm9+M4wWJy4rqcfY7NZNAauclksuvXQA14gF5k2dRxxxBE93637q0k8X10pL0yTeiRSIFNg8FOB/CGMOH37zk08+SVsfeGArC5yc3Qqc483TcWxlK6WAHd7C1IMHXyNSLTzUr1//jh07iiptpY9b0WP9R+yiooLxt0iBSIFIgY2hQMkuu+wmgGmx0xtBmjZtJrS4BYKKGzPSWOd7TwGhafrbUqmIjiz0n/3sQgH2ZAX9ez/8zTnAGDbfnNSMbUUKRApkUSCsbk6bNlUqWdOme8kRySoQv0YKrD8FxG/kOckse//99xxgLoRDeW+btmBU3usPm1gyUiBSYIMpQNrS3/LUCFmfrEylDW4uVtjmKUBhyxGTkiZavi2vv8Q1721+KkQCRApUJgV4RfS3DDWdRM1dmZTeVtqGImkTPh542/S5A6fjmve2gvj4nJECkQKRApECWw0FovLealgZHyRSIFIgUiBSYFuhQFTe2wqn43NGCkQKRApECmw1FEiteVuR8tlqHik+SKRApECkQKRApMDWTYGCank5Derk56Te2BM/kQKRApECkQKRApECVYACBctza7744bIadHj8RApECkQKRApECkQKVAUKFLz9Rd6p939WZ4eK3upTFR4kjjFSIFIgUiBSIFJgW6FA7pKvV7/72fICL4GPn0iBSIFIgUiBSIFIgapAgdT5CVVhnHGMkQKRApECkQKRApEC31AgLnVHKEQKRApECkQKRApUMQpE5V3FGBaHGykQKRApECkQKRCVd8RApECkQKRApECkQBWjQFTeVYxhcbiRApECkQKRApECUXlHDEQKRApECkQKRApUMQpE5V3FGBaHGykQKRApECkQKRCVd8RApECkQKRApECkQBWjQFTeVYxhcbiRApECkQKRApEC/w8Q+R+5ECEbQwAAAABJRU5ErkJggg=="/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>JUNE
2023 2022
Private 79798  69485
Fleet 92699  67243
Business 4769 4230
TOTAL  177266  140958

edit - /home/hass/Development/smmtdata-evolved/ocr/OUT_3a_custtype_OCR_newformat-2023.txt

/home/hass/Development/smmtdata-evolved/cust_type/May-Sales-2023-and-YTD-cars.png
</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>MAY
2023 2022
Private 65932  66242
Fleet 76207 55649
Business 3065 2503
TOTAL  145204  124394

edit - /home/hass/Development/smmtdata-evolved/ocr/OUT_3a_custtype_OCR_newformat-2023.txt

/home/hass/Development/smmtdata-evolved/cust_type/July-Sales-2023-and-YTD-cars.png
</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>JULY
2023 2022
Private 60045 59883
Fleet 80961 50014
Business  2915 2265
TOTAL  143921  112162

edit - /home/hass/Development/smmtdata-evolved/ocr/OUT_3a_custtype_OCR_newformat-2023.txt

/home/hass/Development/smmtdata-evolved/cust_type/Sept-Sales-2023-and-YTD-cars.png
</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>SEPTEMBER
2023 2022
Private 122944 2 116227
Fleet 143256 101761
Business 6410  7281
TOTAL  272610  225269

edit - /home/hass/Development/smmtdata-evolved/ocr/OUT_3a_custtype_OCR_newformat-2023.txt

/home/hass/Development/smmtdata-evolved/cust_type/Nov-Sales-202x3-and-YTD-cars.png
</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>NOVEMBER
2023 2022
Private 60506 64291
Fleet 93049  74185
Business 2970 4413
TOTAL  156525  142889

edit - /home/hass/Development/smmtdata-evolved/ocr/OUT_3a_custtype_OCR_newformat-2023.txt

/home/hass/Development/smmtdata-evolved/cust_type/October-Sales-202x3-and-YTD-cars.png
</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>OCTOBER
2023 2022
Private 62915  62738
Fleet 87479  67911
Business 3135 3695
TOTAL  153529  134344

edit - /home/hass/Development/smmtdata-evolved/ocr/OUT_3a_custtype_OCR_newformat-2023.txt

/home/hass/Development/smmtdata-evolved/cust_type/Nov-Sales-2022-and-YTD-cars.png
</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>NOVEMBER
2022 2021
Private 64292 62621
Fleet 74184  51005
Business 4413 2080
TOTAL  142889  115706

edit - /home/hass/Development/smmtdata-evolved/ocr/OUT_3a_custtype_OCR_newformat-2023.txt



=========================================
output file saved in /home/hass/Development/smmtdata-evolved/ocr/OUT_3a_custtype_OCR_newformat-2023.txt
=========================================
</pre>
</div>
</div>
</div>
</div>
</div>
</main>
</body>
</html>
