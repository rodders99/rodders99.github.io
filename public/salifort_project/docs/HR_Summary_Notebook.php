<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>HR_Summary_Notebook</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"/>
<link href="/css/custom-menu2.css" rel="stylesheet" type="text/css"/>
<link href="/css/project-style.css" rel="stylesheet" type="text/css" >
<link href="/css/custom.css" rel="stylesheet" type="text/css"/>
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
    <?php include 'menu-salifort.php'; ?>        
</div>
<!-- END NAVIGATION -->

  
  
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>

<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h1 id="Salifort-Motors---HR-Team-Summary"><a id="toc1_"></a><a href="#toc0_">Salifort Motors - HR Team Summary</a><a class="anchor-link" href="#Salifort-Motors---HR-Team-Summary">¶</a></h1><h3 id="Document-Information"><a id="toc1_1_1_"></a><a href="#toc0_">Document Information</a><a class="anchor-link" href="#Document-Information">¶</a></h3><table style="margin-right:auto;margin-left:0px">
<tbody>
<tr>
<td>Document Title</td>
<td>Salifort Motors - HR Team Summary</td>
</tr>
<tr>
<td>Author</td>
<td>Rod Slater</td>
</tr>
<tr>
<td>Version</td>
<td>1.0</td>
</tr>
<tr>
<td>Created</td>
<td>01-11-2023</td>
</tr>
<tr>
<td>Modified</td>
<td>16-11-2023</td>
</tr>
</tbody></table>
<h3 id="Client-Details"><a id="toc1_1_2_"></a><a href="#toc0_">Client Details</a><a class="anchor-link" href="#Client-Details">¶</a></h3> <table style="margin-right:auto;margin-left:0px">
<tbody>
<tr>
<td>Client Name</td>
<td>Salifort Motors</td>
</tr>
<tr>
<td>Client Contact</td>
<td>Mr HR Team</td>
</tr>
<tr>
<td>Client Email </td>
<td>hr@salifortmotors.it</td>
</tr>
<tr>
<td>Client Project</td>
<td>HR Team Data Driven Solutions from Machine Learning Models</td>
</tr>
</tbody>
</table>
<h3 id="Document-Overview"><a id="toc1_1_3_"></a><a href="#toc0_">Document Overview</a><a class="anchor-link" href="#Document-Overview">¶</a></h3><p>Summary plots and Analysis for the HR Team</p>
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
<h1 id="Table-of-contents"><strong>Table of contents</strong><a id="toc0_"></a><a class="anchor-link" href="#Table-of-contents">¶</a></h1><ul>
<li><a href="#toc1_">Salifort Motors - HR Team Summary</a><ul>
<li><a href="#toc1_1_1_">Document Information</a></li>
<li><a href="#toc1_1_2_">Client Details</a></li>
<li><a href="#toc1_1_3_">Document Overview</a></li>
</ul>
</li>
<li><a href="#toc2_"></a><ul>
<li><a href="#toc2_1_">Visualisations - counts and percentages by department</a></li>
<li><a href="#toc2_2_">Employees who left percentage by department total and salary range</a><ul>
<li><a href="#toc2_2_1_">Distribution of Salary Levels by Department for Employees who Left</a></li>
<li><a href="#toc2_2_2_">Visualisations - Comparison of All Employees Vs stayed employees vs left employees</a></li>
</ul>
</li>
<li><a href="#toc2_3_">Visualisations of variables By Department</a></li>
</ul>
</li>
</ul>
<!-- vscode-jupyter-toc-config
	numbering=false
	anchor=true
	flat=false
	minLevel=1
	maxLevel=6
	/vscode-jupyter-toc-config -->
<!-- THIS CELL WILL BE REPLACED ON TOC UPDATE. DO NOT WRITE YOUR TEXT IN THIS CELL -->
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [2]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="kn">import</span> <span class="nn">pickle</span>
<span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="kn">import</span> <span class="nn">matplotlib.pyplot</span> <span class="k">as</span> <span class="nn">plt</span>
<span class="kn">import</span> <span class="nn">seaborn</span> <span class="k">as</span> <span class="nn">sns</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [3]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># set Pandas Display Options</span>
<span class="n">pd</span><span class="o">.</span><span class="n">options</span><span class="o">.</span><span class="n">display</span><span class="o">.</span><span class="n">float_format</span> <span class="o">=</span> <span class="s1">'</span><span class="si">{:.2f}</span><span class="s1">'</span><span class="o">.</span><span class="n">format</span>
<span class="n">pd</span><span class="o">.</span><span class="n">set_option</span><span class="p">(</span><span class="s1">'display.precision'</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span>
<span class="n">pd</span><span class="o">.</span><span class="n">set_option</span><span class="p">(</span><span class="s1">'display.max_columns'</span><span class="p">,</span> <span class="kc">None</span><span class="p">)</span>
<span class="n">pd</span><span class="o">.</span><span class="n">set_option</span><span class="p">(</span><span class="s1">'display.width'</span><span class="p">,</span> <span class="mi">120</span><span class="p">)</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [4]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">load_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/00-data_cleaned/"</span>
<span class="n">save_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/00-data_cleaned/"</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [5]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Load dataset into a dataframe</span>
<span class="n">df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_Ol_NoFE_AllFeat.csv"</span><span class="p">)</span>          <span class="c1"># 11991 rows, all data including outliers</span>
<span class="c1">#df1  = pd.read_csv(load_path + "data_cleaned_NoOl_NoFE_AllFeat.csv")      # 11167 rows, no outliers (mostly from tenure)</span>

<span class="c1"># Display first few rows of the dataframe</span>

<span class="n">df</span><span class="o">.</span><span class="n">head</span><span class="p">()</span>
</pre></div>
</div>
</div>
</div>
</div>
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child jp-OutputArea-executeResult">
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[5]:</div>
<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/html" tabindex="0">
<div>
<style scoped="">
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
<thead>
<tr style="text-align: right;">
<th></th>
<th>satisfaction</th>
<th>last_eval</th>
<th>number_project</th>
<th>avg_mnth_hrs</th>
<th>tenure</th>
<th>accident</th>
<th>left</th>
<th>promotion</th>
<th>dept</th>
<th>salary</th>
</tr>
</thead>
<tbody>
<tr>
<th>0</th>
<td>0.38</td>
<td>0.53</td>
<td>2</td>
<td>157</td>
<td>3</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>sales</td>
<td>low</td>
</tr>
<tr>
<th>1</th>
<td>0.80</td>
<td>0.86</td>
<td>5</td>
<td>262</td>
<td>6</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>sales</td>
<td>medium</td>
</tr>
<tr>
<th>2</th>
<td>0.11</td>
<td>0.88</td>
<td>7</td>
<td>272</td>
<td>4</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>sales</td>
<td>medium</td>
</tr>
<tr>
<th>3</th>
<td>0.72</td>
<td>0.87</td>
<td>5</td>
<td>223</td>
<td>5</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>sales</td>
<td>low</td>
</tr>
<tr>
<th>4</th>
<td>0.37</td>
<td>0.52</td>
<td>2</td>
<td>159</td>
<td>3</td>
<td>0</td>
<td>1</td>
<td>0</td>
<td>sales</td>
<td>low</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [6]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">pd</span><span class="o">.</span><span class="n">options</span><span class="o">.</span><span class="n">display</span><span class="o">.</span><span class="n">float_format</span> <span class="o">=</span> <span class="s1">'</span><span class="si">{:.2f}</span><span class="s1">'</span><span class="o">.</span><span class="n">format</span>
<span class="n">counts</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span><span class="o">.</span><span class="n">value_counts</span><span class="p">()</span>
<span class="n">perc</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span><span class="o">.</span><span class="n">value_counts</span><span class="p">(</span><span class="n">normalize</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span><span class="o">*</span><span class="mi">100</span>

<span class="n">summary_table</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">({</span><span class="s2">"Counts "</span> <span class="p">:</span> <span class="n">counts</span><span class="p">,</span>
                              <span class="s2">"Percentage "</span> <span class="p">:</span> <span class="n">perc</span><span class="p">})</span>

<span class="n">summary_table</span>
</pre></div>
</div>
</div>
</div>
</div>
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child jp-OutputArea-executeResult">
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[6]:</div>
<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/html" tabindex="0">
<div>
<style scoped="">
    .dataframe tbody tr th:only-of-type {
        vertical-align: middle;
    }

    .dataframe tbody tr th {
        vertical-align: top;
    }

    .dataframe thead th {
        text-align: right;
    }
</style>
<table border="1" class="dataframe">
<thead>
<tr style="text-align: right;">
<th></th>
<th>Counts</th>
<th>Percentage</th>
</tr>
<tr>
<th>left</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<th>0</th>
<td>10000</td>
<td>83.40</td>
</tr>
<tr>
<th>1</th>
<td>1991</td>
<td>16.60</td>
</tr>
</tbody>
</table>
</div>
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
<h2 id="Visualisations---counts-and-percentages-by-department"><a id="toc2_1_"></a><a href="#toc0_">Visualisations - counts and percentages by department</a><a class="anchor-link" href="#Visualisations---counts-and-percentages-by-department">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [7]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Calculate counts and percentages by department</span>
<span class="n">dept_counts</span> <span class="o">=</span> <span class="n">df</span><span class="o">.</span><span class="n">groupby</span><span class="p">(</span><span class="s1">'dept'</span><span class="p">)[</span><span class="s1">'left'</span><span class="p">]</span><span class="o">.</span><span class="n">value_counts</span><span class="p">()</span><span class="o">.</span><span class="n">unstack</span><span class="p">()</span><span class="o">.</span><span class="n">fillna</span><span class="p">(</span><span class="mi">0</span><span class="p">)</span> <span class="c1"># counts, combine grouped columns into an index, replace an values with 0</span>
<span class="n">dept_counts</span><span class="p">[</span><span class="s1">'total'</span><span class="p">]</span> <span class="o">=</span> <span class="n">dept_counts</span><span class="o">.</span><span class="n">sum</span><span class="p">(</span><span class="n">axis</span><span class="o">=</span><span class="mi">1</span><span class="p">)</span>  <span class="c1"># Total across columns</span>
<span class="n">dept_counts</span><span class="p">[</span><span class="s1">'left_percentage'</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="n">dept_counts</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">/</span> <span class="n">dept_counts</span><span class="p">[</span><span class="s1">'total'</span><span class="p">])</span> <span class="o">*</span> <span class="mi">100</span> 

<span class="c1"># Plot the bar graph</span>
<span class="n">fig</span><span class="p">,</span> <span class="n">ax</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span> <span class="mi">6</span><span class="p">))</span>
<span class="n">dept_counts</span><span class="p">[</span><span class="s1">'left_percentage'</span><span class="p">]</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">kind</span><span class="o">=</span><span class="s1">'bar'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">ax</span><span class="p">)</span>

<span class="c1"># Add lines at 16.6% and 2.8%</span>
<span class="n">ax</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mf">16.6</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'16.6% Salifort Average'</span><span class="p">)</span>
<span class="n">ax</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mf">17.8</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'17.8% Business Avg 2022-2023'</span><span class="p">)</span>

<span class="c1"># Add labels and legend</span>
<span class="n">ax</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Department'</span><span class="p">)</span>
<span class="n">ax</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="s1">'Percentage Left'</span><span class="p">)</span>
<span class="n">ax</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="s1">'Percentage of Employees Left by Department'</span><span class="p">)</span>
<span class="n">ax</span><span class="o">.</span><span class="n">legend</span><span class="p">([</span><span class="s1">'16.6% Salifort Avg'</span><span class="p">,</span><span class="s1">'17.8% Business Avg 2022-23'</span><span class="p">,</span><span class="s1">'left %'</span><span class="p">],</span> <span class="n">loc</span><span class="o">=</span><span class="s1">'upper center'</span><span class="p">,</span> <span class="n">bbox_to_anchor</span><span class="o">=</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="o">-</span><span class="mf">0.3</span><span class="p">),</span> <span class="n">fancybox</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">shadow</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">ncol</span><span class="o">=</span><span class="mi">3</span><span class="p">)</span>

<span class="c1"># Show the plot</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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2rRpY/j6+hpvvPGGMXPmTKNPnz5Gnjx5jMceeyzLf4v777/fmDhxojFkyBDDx8fHZox//vln48UXXzQkGWPGjDEWLFhgbNmy5baPuXr1auPixYs2P5cuXbL2O3XqlCHJqFmzplG5cmVjwoQJxttvv214enoaDRo0MIYNG2Y0atTImDx5stGvXz/DYrEYvXr1snmukJAQo3z58kaBAgWMIUOGGBMmTDCqVatmuLm5GT///LO137p16wxJxrp16+x67bGxsYaPj48xcODANK+zcuXKRsuWLa2316xZY3h6ehoNGzY0xo8fb0ycONGoXr264enpaWzbts3aLzIy0rjvvvuM4OBgY8yYMcb06dONRx991JBkTJw40drv008/NSQZTzzxhDFz5kxj0qRJxvPPP2/069cv079p6rh++OGHGfbJynoTFxdnLFiwwKhYsaJx3333WdflrVu3ZrqOpycsLMzw9vY2ypUrZ3Tv3t2YMmWK8fDDDxuSjOHDh1v7/ec//zE8PDyMqKgom/t//fXXhiRj48aNmb72kJAQo0OHDhkuf/755w1J1verYdj3/s/KurZjxw6jTJkyxpAhQ4yZM2caY8aMMUqUKGH4+/sbf/75p7Vf6jpZuXJlo2bNmsaECROMcePGGb///num45u6HSpWrJgxatQoY+LEiUaJEiWMfPnyGV988YVRsmRJ47333jPee+89w9/f3yhbtqyRlJRkfd6DBw8a/v7+RuXKlY3333/fmDJlitG0aVPDYrEYy5Yts/ZLfX/UqlXLaNmypfHJJ58YAwcONNzd3Y0uXbpY+y1fvty47777jIoVK1prvXU8ANiPcAXALv/+8H327Fnjf//7n1G4cGHDx8fHOHfunHH69GnD3d3dePfdd23ue+DAASNPnjw27c2aNbMJZanmzJljSDImTJiQpobk5GTDMAzj119/NSQZCxcutFm+atWqNO0hISFpPuBduHDB8PLysvnwvXjx4jQf5FPFx8enaXvppZcMX19f4/r164ZhGMaNGzeMwoULG/fff7+RmJho7Tdv3jxDkk24WrBggeHm5mb8+uuvNo85Y8YMQ5KxefPmNM+XKiEhwQgICDCqVq1qXLt2zdr+/fffG5KMESNGWNsyCsTpSe2b3o+Xl5e1X2oIKFq0qHH58mVr+9ChQw1JRo0aNWxef7du3QxPT0/rOBnG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f34lJSVl6XphefPm1VNPPaWnnnpKCQkJ6ty5s959910NHTrU5nBGe93JeiNlvI5nJjk5WSdPnrR5P6f3dypUqJA6dOighQsX6plnntHmzZv18ccf2/18/xYXF6fly5crODhYlSpVkmT/+z8r69qSJUvUokULzZ492+a+ly9fVpEiRbJU650e/piR1D2HHh4eWb5eXVbkVL1AbsU5VwBM17lzZ7m7u2v06NFpviE1DMO6ByAzjz/+uC5duqQpU6akWZb6mF26dFFSUpLeeeedNH1u3rypy5cv21173rx5JSnNfVO/Ab719SQkJGjatGk2/erWravChQvrs88+082bN63tCxcuTHMoTpcuXfTnn3/qs88+S1PHtWvXdPXq1QzrrFu3rgICAjRjxgybadtXrlypw4cPq0OHDrd5pc7hr7/+0vLly623Y2NjNX/+fNWsWTPdQwIl+1979erVVb16dc2aNUtLly5V165dbQ43rVOnjsqUKaOPPvrIeujZrVKnrnZ3d9fjjz+upUuXWveipNdPUpp13NPTU5UrV5ZhGEpMTMxsSG7rTtYbKeN1/HZufS8ahqEpU6bIw8NDrVq1sunXvXt3HTp0SG+++abc3d3VtWtXu57n365du6bu3bsrOjpa//nPf6xhwN73f1bWNXd39zTbrMWLF6c5lykz2R3f2wkICFDz5s01c+ZMRUREpFl+6/pnj7x585peK5CbsecKgOnKlCmj//73vxo6dKhOnz6tjh07Kn/+/Dp16pSWL1+uF198UYMGDcr0MXr06KH58+drwIAB2r59u5o0aaKrV69q9erVevXVV/XYY4+pWbNmeumllzRu3Djt3btXbdq0kYeHh44dO6bFixdr0qRJeuKJJ+yqvWbNmnJ3d9f777+vmJgYeXl5qWXLlmrUqJEKFiyosLAw9evXTxaLRQsWLEjzQczT01OjRo1S37591bJlS3Xp0kWnT5/WvHnzVKZMGZtvibt3766vv/5aL7/8statW6cHHnhASUlJOnLkiL7++mv99NNPGR566eHhoffff1+9evVSs2bN1K1bN50/f16TJk1SaGio+vfvb9fr/reVK1daJ+m4VaNGjdKce3Mnypcvr+eff147duxQYGCg5syZo/Pnz2vu3LkZ3ic7r71Hjx7Wde7fF6l1c3PTrFmz1K5dO1WpUkW9evVSiRIl9Oeff2rdunXy8/PTd999J0l67733tG7dOtWvX1+9e/dW5cqVFR0drd27d2v16tXWa3m1adNGQUFBeuCBBxQYGKjDhw9rypQp6tChg/WcocysWbNG169fT9PesWPHO1pvpIzX8YzOXZIkb29vrVq1SmFhYapfv75WrlypH374QcOGDUtz+F2HDh1UuHBhLV68WO3atcv0cf/tzz//1BdffCEpZW/VoUOHtHjxYkVGRmrgwIE218qy9/2flXXt4Ycf1pgxY9SrVy81atRIBw4c0MKFC+1a57Mzvlk1depUNW7cWNWqVVPv3r1VunRpnT9/Xr/99pvOnTuX5npcWVGnTh1Nnz5d//3vf1W2bFkFBASk2SMMwA53eXZCAC7Onmm9ly5dajRu3NjImzevkTdvXqNixYrGa6+9Zhw9etTaJ72polPFx8cb//nPf4xSpUoZHh4eRlBQkPHEE08YJ06csOn36aefGnXq1DF8fHyM/PnzG9WqVTPeeust46+//rL2yWia52bNmqWZhvizzz4zSpcubbi7u9tMhbx582ajQYMGho+Pj1G8eHHjrbfesk6j/O9plydPnmyEhIQYXl5eRr169YzNmzcbderUMR566CGbfgkJCcb7779vVKlSxfDy8jIKFixo1KlTxxg9erQRExNzuyE2Fi1aZNSqVcvw8vIyChUqZDzzzDPGuXPnbPqYNRW7bpm+PKMpw1OnqF68ePFta0j9m/z0009G9erVDS8vL6NixYpp7pveda6y+tpTRUREGO7u7kb58uUzfO179uwxOnfubBQuXNjw8vIyQkJCjC5duhhr1qyx6Xf+/HnjtddeM4KDg63rZatWrYxPP/3U2mfmzJlG06ZNrY9VpkwZ480337zt3zR1XDP6WbBggWEYWV9vMnp/ZbSOpycsLMzImzevceLECev1tQIDA42RI0emmbY81auvvmpIMr788stMX++tUqcpl2RYLBbDz8/PqFKlitG7d2+ba439mz3v/9uta9evXzcGDhxoFCtWzPDx8TEeeOAB47fffkuznchoPU+V0fhmtB2SZLz22ms2bRm9x06cOGH06NHDCAoKMjw8PIwSJUoYDz/8sLFkyRJrn4ze8+m9lyIjI40OHToY+fPnT3O5CAD2sxgGZzUCQE5LTk5W0aJF1blz53QP58qNQkNDVbVqVX3//fc5/lyXLl1SsWLF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LwAAAADkJJeZiv38+fP64Ycf9PnnmUzJ/f+OHTum4sWLy9vbWw0bNtS4ceNUsmTJDPvfuHFDN278cyJebGysKTWn4twhAAAA4N7nMlOxf/7558qfP786d+6cab/69etr3rx5WrVqlaZPn65Tp06pSZMmunLlSob3GTdunPz9/a0/wcHBZpcPAAAA4B7nNLMFWiwWLV++XB07dkx3ecWKFfXggw/qk08+setxL1++rJCQEE2YMEHPP/98un3S23MVHBxs2myB7LnKHsYNAAAAjmbPbIEucVjgr7/+qqNHj2rRokV237dAgQIqX768jh8/nmEfLy8veXl53UmJAAAAAHI5lzgscPbs2apTp45q1Khh933j4uJ04sQJFStWLAcqAwAAAHIvi8V5fxzBoeEqLi5Oe/fu1d69eyVJp06d0t69exUeHm7tExsbq8WLF+uFF15I9zFatWqlKVOmWG8PGjRIGzZs0OnTp7VlyxZ16tRJ7u7u6tatW46+FgAAAAC5m0MPC9y5c6datGhhvT1gwABJUlhYmObNmydJ+t///ifDMDIMRydOnNClS5est8+dO6du3bopKipKRYsWVePGjbV161YVLVo0514IAAAAgFzPaSa0cCb2nLSWFUzMkD2MGwAAgHPLDZ/X7MkGLnHOFQAAAAA4O5eYLRAAAADISblhDwxyHnuuAAAAAMAEhCsAAAAAMAHhCgAAAABMwDlXAAAA9xjOHwIcgz1XAAAAAGACwhUAAAAAmIBwBQAAAAAmIFwBAAAAgAkIVwAAAABgAsIVAAAAAJiAqdgzc/Wq5O6ett3dXfL2tu2XETc3ST7Wm77KuG+y3HT9lr4+ipdF6c9Xasiia/LNVl9vXZObkv+/9nTukDfvP79fuyYlJ2dYs03f69elpCRz+vr6SkqZR9ZTN5RHNzPsGq+s970mHxn//52ChxLkocTs9f33uHl7/7OuJCRIiRk/rk3fxMSU/hnx8pLy5LG/782b0o0bGff19JQ8POzvm5SU8rfLiIdHSn97+yYnp6xrZvTNkydlLKSU+X7j483pa8/73t5thI9P9vrGx2c8p7HF8v/vo2z0ted978htROpc0zdupKzHZvT18fn/7bZu/162py/biBRsI+zvewfbiLvyOSId8cqbed9bX4KTbSPu2ueIf7kubyXLPeO+t46Zk20j3HVTXsq4b4I8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JSUladu2bRy+lYkCBQooNjbWej2YVEwEkjEuWG2/WrVqaceOHSpXrpyaNWumESNG6NKlS1qwYIGqVq3q6PKc0qOPPqrBgwdr165d1j3LW7du1eLFizV69GibizRzEeZ/3IsTznBYoAto0aKFli1bpoIFCzq6FADpqFGjhsqUKaPBgwenO8lASEiIgypzPi1atJAkbdiwQQ0bNpSnp6d1WeqXRoMGDVK5cuUcVaJTq1evnvLkyaPXX3893XWtWbNmDqrMeX3++eeZLr91Aimk2Llzp65cuaIWLVrowoUL6tGjh7Zs2aLy5ctr1qxZfAGSjtQ9fbfDlyC22rVrp/DwcPXp0yfdCWcee+wxB1WWfYQrALhD+fPn1549e9IcDoKM9erVS5MmTeIwNjv5+vpqz549qlChgqNLwT3s2rVrMgzDumf59OnTWr58uSpXrqy2bds6uDrcS+7FCWc4LNAFJCUlad68edZdpv8+n2Pt2rUOqgyAJLVq1Ur79u0jXNkhdQao48eP68SJE2ratKl8fHwyPBcLKerWrauzZ88SrrLp+vXraa7ZRMBP67HHHlPnzp318ssv6/Lly2rQoIE8PDx06dIlTZgwQa+88oqjS8Q9Ijg4OM2hgK6OPVcuoE+fPpo3b546dOiQ7i7T1HOzADjGpUuXFBYWpnr16qU7yQDH16cVHR2tJ598UuvWrZPFYtGxY8dUunRpPffccypYsKDGjx/v6BKd0uLFizVq1Ci9+eabqlatWpp1jclT0rp69aoGDx6sr7/+WlFRUWmWc4hWWkWKFNGGDRtUpUoVzZo1S5988on27NmjpUuXasSIEdaL5MLWmjVrNHHiRJuLCL/xxhtq3bq1gytzXj///LPGjx9/T004Q7hyAUWKFNH8+fPVvn17R5cCIB3fffedunfvrtjY2DTLOL4+fT169NCFCxc0a9YsVapUSfv27VPp0qX1008/acCAAfr9998dXaJTSu+8DovFwoQWmXjttde0bt06vfPOO+revbumTp2qP//8UzNnztR7772nZ555xtElOh1fX18dOXJEJUuWVJcuXVSlShWNHDnSuteUacXTmjZtml5//XU98cQTNhcRXrJkiSZOnKjXXnvNwRU6p4IFCyo+Pl43b968ZyacIVy5gOLFi2v9+vUqX768o0sBkI7Q0FA9/PDDGj58uAIDAx1djksI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jql06dJ67rnnVLBgQY0fP97RJdqNg/9dwOTJk1WmTBk1bNhQ3t7e8vb21gMPPKCyZctq0qRJji4PyPWCg4M1e/bsNO2zZ89WcHCwpJR/IAULFrzbpTm1JUuWqEuXLmrQoIFq165t84P0Va5cWfv371eXLl104cIFXblyRT169NCRI0cIVoADPfHEEwoPD9fOnTu1atUqa3urVq0yvIA6pP79+8vDw0Ph4eE2l5h46qmnbMbRlXBYoAsoUKCAvvnmGx0/ftx6QmSlSpXSnNAMwDE++ugjPfnkk1q5cqXuv/9+SdLOnTt15MgRLVmyRJK0Y8cOPfXUU44s06lMnjzZep7aN998o169eunEiRPasWOHXnvtNUeX59SKFy+usWPHOroMAP8SFBSkoKAgm7bUI46Qvp9//lk//fST7rvvPpv2cuXKuey5ahwWCAAmOH36tGbOnKmjR49KkipUqKCXXnqJ6w5loGLFiho5cqS6deum/Pnza9++fSpdurRGjBih6OhoTZkyxdElOqWNGzdmurxp06Z3qRIAuHP58+fX7t27Va5cOZv/BTt37lTbtm0VFRXl6BLtRrhyAY8//rjq1aunwYMH27R/8MEH2rFjhxYvXuygygAge3x9fXX48GGFhIQoICBAv/zyi2rUqKFjx46pQYMGLvkP9W5Ibyr/W0/6ZsZAAK6kffv2qlOnjt555x3lz59f+/fvV0hIiLp27ark5GTr0R+uhMMCXcDGjRs1atSoNO3t2rVzyRP9gHtVfHy8wsPD01w4uHr16g6qyHkFBQUpOjpaISEhKlmypLZu3aoaNWro1KlT4ju/jP399982txMTE7Vnzx4NHz5c7777roOqAoDs+eCDD9SqVSvt3LlTCQkJeuutt/T7778rOjpamzdvdnR52UK4cgEZTbnu4eGh2NhYB1QE4FYXL15Ur169MpwNir0JabVs2VLffvutatWqpV69eql///5asmSJdu7cqc6dOzu6PKfl7++fpu3BBx+Up6enBgwYoF27djmgKgDIHj8/Px0+fFjTp09X/vz5FRcXp86dO+u1115TYmKio8vLFg4LdAH16tXTww8/nOZK1aNGjdJ3333HP1PAwZ555hmdOXNGH3/8sZo3b67ly5fr/Pnz+u9//6vx48erQ4cOji7R6SQnJys5OVl58qR8x7do0SJt3rxZ5cqV08svvywPDw8HV+hajhw5orp16youLs7RpQBAlrm7uysiIkIBAQE27VFRUQoICHDJLyfZc+UChg8frs6dO+vEiRNq2bKlJGnNmjX66quvON8KcAJr167VN998o7p168rNzU0hISF68MEH5efnp3HjxhGu0uHm5qaEhATt3r1bFy5ckI+Pj1q3bi1JWrVqlR555BEHV+ic9u/fb3PbMAxFRETovffeU82aNR1TFABkU0b7eOLi4uTt7X2XqzEH4coFPPLII1qxYoXGjh2rJUuWyMfHR9WrV9fq1avVrFkzR5cH5HpXr161futWsGBBXbx4UeXLl1e1atW0e/duB1fnnFatWqXu3bunO3GFxWJxyW8r74aaNWvKYrGk+UDSoEEDzZkzx0FVAYB9BgwYICllez9ixAiba1wlJSVp27ZtLvuFEeHKRXTo0IFvvwEnVaFCBR09elShoaGqUaOGZs6cqdDQUM2YMUPFihVzdHlOqW/fvurSpYtGjBihwMBAR5fjMk6dOmVz283NTUWLFnXZb3gB5E579uyRlLLn6sCBAzZzC3h6eqpGjRoaNGiQo8q7I5xz5QJ27Nih5ORk1a9f36Z927Ztcnd3V926dR1UGQBJ+uKLL3Tz5k317NlTu3bt0kMPPaTo6Gh5enpq3rx5XDw4HX5+ftqzZ4/KlCnj6FIAAA7Sq1cvTZo0SX5+fo4uxTSEKxdQr149vfXWW3riiSds2pctW6b3339f27Ztc1BlANITHx+vI0eOqGTJkipSpIijy3FKzz33nB544AE9//zzji7F6U2ePDnLffv165eDlQAAbodw5QLy5cun/fv3q3Tp0jbtp06dUvXq1XXlyhUHVQYA2RMfH68nn3xSRYsWVbVq1dLMDkhI+EepUqVsbl+8eFHx8fEqUKCAJOny5cvy9fVVQECATp486YAKAQCpOOfKBXh5een8+fNpwlVERIR1GmMAjpOUlKR58+ZpzZo1unDhgpKTk22Wr1271kGVOa+vvvpKP//8s7y9vbV+/XpZLBbrMovFQri6xa3nWX355ZeaNm2aZs+erQoVKkiSjh49qt69e+ull15yVIkAgP/HnisX0K1bN0VEROibb76xXkDy8uXL6tixowICAvT11187uEIgd+vTp4/mzZunDh06qFixYjZBQZImTpzooMqcV1BQkPr166chQ4bIzc3N0eW4jDJlymjJkiWqVauWTfuuXbv0xBNPpJnwAgBwd7HbwwV89NFHatq0qUJCQqz/UPfu3avAwEAtWLDAwdUB+N///qevv/5a7du3d3QpLiMhIUFPPfUUwcpOERERunnzZpr2pKQknT9/3gEVAQBuxX81F1CiRAnt379fH3zwgSpXrqw6depo0qRJOnDggIKDgx1dHpDreXp6qmzZso4uw6WEhYVp0aJFji7D5bRq1UovvfSSzfXTdu3apVdeecV6EWYAgONwWKALOXTokMLDw5WQkGDT/uijjzqoIgCSNH78eJ08eVJTpkxJc0gg0tevXz/Nnz9fNWrUUPXq1dNMaDFhwgQHVebcLl68qLCwMK1atco6Zjdv3lTbtm01b94868WsAQCOQbhyASdPnlSnTp104MABWSwWGYZh8wEuKSnJgdUB6NSpk9atW6dChQqpSpUqaYLCsmXLHFSZ82rRokWGyywWC5OA3MYff/yhw4cPy2KxqGLFiipfvryjSwIAiHDlEh555BG5u7tr1qxZKlWqlLZt26bo6GgNHDhQH330kZo0aeLoEoFcrVevXpkunzt37l2qBLlJ6r9v9pYCgPMgXLmAIkWKaO3atapevbr8/f21fft2VahQQWvXrtXAgQO1Z88eR5cIALhL5s+frw8//FDHjh2TJJUvX15vvvmmunfv7uDKAADMFugCkpKSlD9/fkkpQeuvv/5ShQoVFBISoqNHjzq4OgDA3TJhwgQNHz5cffr00QMPPCBJ2rRpk15++WVdunRJ/fv3d3CFAJC7Ea5cQNWqVbVv3z6VKlVK9evX1wcffCBPT099+umnaS4sDMAxlixZoq+//jrdSWdundkNuBOffPKJpk+frh49eljbHn30UVWpUkWjRo0iXAGAgzEVuwt4++23lZycLEkaM2aMTp06pSZNmujHH3/U5MmTHVwdgMmTJ6tXr14KDAzUnj17VK9ePRUuXFgnT55Uu3btHF0e7iERERFq1KhRmvZGjRopIiLCARUBAG7FOVcuKjo6WgULFuREZsAJVKxYUSNHjlS3bt2UP39+7du3T6VLl9aIESMUHR2tKVOmOLpE3COqVq2qp59+WsOGDbNp/+9//6tFixbpwIEDDqoMACARrgDgjvn6+urw4cMKCQlRQECAfvnlF9WoUUPHjh1TgwYNFBUV5egScY9YunSpnnrqKbVu3dp6ztXmzZu1Zs0aff311+rUqZODKwSA3I3DAgHgDgUFBSk6OlqSVLJkSW3dulWSdOrUKfH9Fcz0+OOPa/v27SpSpIhWrFihFStWqEiRItq+fTvBCgCcABNaAMAdatmypb799lvVqlVLvXr1Uv/+/bVkyRLt3LlTnTt3dnR5uEckJibqpZde0vDhw/XFF184uhwAQDo4LBAA7lBycrKSk5OVJ0/K91WLFi3S5s2bVa5cOb388svy8PBwcIW4V/j7+2vv3r0qVaqUo0sBAKSDcAUAJrh+/br279+vCxcuWGf3lCSLxaJHHnnEgZXhXhIWFqaaNWsy5ToAOCkOCwSAO7Rq1Sp179493YkrLBaLkpKSHFAV7kXlypXTmDFjtHnzZtWpU0d58+a1Wd6vXz8HVQYAkNhzBQB3rFy5cmrTpo1GjBihwMBAR5eDe1hmhwNaLBadPHnyLlYDAPg3whUA3CE/Pz/t2bNHZcqUcXQpyEVS/31zvUMAcB5MxQ4Ad+iJJ57Q+vXrHV0GconZs2eratWq8vb2lre3t6pWrapZs2Y5uiwAgNhzBQB3LD4+Xk8++aSKFi2qatWqpZkdkPNgYJYRI0ZowoQJ6tu3rxo2bChJ+u233zRlyhT1799fY8aMcXCFAJC7Ea4A4A7Nnj1bL7/8sry9vVW4cGGbw7Q4DwZmKlq0qCZPnqxu3brZtH/11Vfq27evLl265KDKAAAS4QoA7lhQUJD69eunIUOGyM2No62RcwoUKKAdO3aoXLlyNu1//PGH6tWrp8uXLzumMACAJM65AoA7lpCQoKeeeopghRzXvXt3TZ8+PU37p59+qmeeecYBFQEAbsWeKwC4Q/3791fRokU1bNgwR5eCe1zfvn01f/58BQcHq0GDBpKkbdu2KTw8XD169LA532/ChAmOKhMAci3CFQDcoX79+mn+/PmqUaOGqlevnmZCCz7kwiwtWrTIUj+LxaK1a9fmcDUAgH8jXAHAHcrsAy8fcgEAyD0IVwAAAABgAs6+BgAAAAATEK4AAAAAwASEKwAAAAAwAeEKAAAAAExAuAIAAAAAExCuAAAO07NnT1ksFlksFnl4eCgwMFAPPvig5syZo+TkZEeXJ0lav369LBaLLl++7OhSrCwWi1asWOHoMgAA/0K4AgA41EMPPaSIiAidPn1aK1euVIsWLfT666/r4Ycf1s2bNx1aW2JiokOfHwDgWghXAACH8vLyUlBQkEqUKKHatWtr2LBh+uabb7Ry5UrNmzdPknT58mW98MILKlq0qPz8/NSyZUvt27fP+hijRo1SzZo1NXPmTAUHB8vX11ddunRRTEyMtc+OHTv04IMPqkiRIvL391ezZs20e/dum1osFoumT5+uRx99VHnz5lXv3r2tF4kuWLCgLBaLevbsKUlq3ry5+vbtqzfeeEMFCxZUYGCgPvvsM129elW9evVS/vz5VbZsWa1cudLmOQ4ePKh27dopX758CgwMVPfu3XXp0iXr8ubNm6tfv3566623VKhQIQUFBWnUqFHW5aGhoZKkTp06yWKxWG8DAByPcAUAcDotW7ZUjRo1tGzZMknSk08+qQsXLmjlypXatWuXateurVatWik6Otp6n+PHj+vrr7/Wd999p1WrVmnPnj169dVXrcuvXLmisLAwbdq0SVu3blW5cuXUvn17Xblyxea5R40apU6dOunAgQMaPXq0li5dKkk6evSoIiIiNGnSJGvfzz//XEWKFNH27dvVt29fvfLKK3ryySfVqFEj7d69W23atFH37t0VHx8vKSUktmzZUrVq1dLOnTu1atUqnT9/Xl26dLGp4fPPP1fevHm1bds2ffDBBxozZox++eUXSSkhUZLmzp2riIgI620AgBMwAABwkLCwMOOxxx5Ld9lTTz1lVKpUyfj1118NPz8/4/r16zbLy5QpY8ycOdMwDMMYOXKk4e7ubpw7d866fOXKlYabm5sRERGR7uMnJSUZ+fPnN7777jtrmyTjjTfesOm3bt06Q5Lx999/27Q3a9bMaNy4sfX2zZs3jbx58xrdu3e3tkVERBiSjN9++80wDMN45513jDZt2tg8ztmzZw1JxtGjR9N9XMMwjPvvv98YPHiwTZ3Lly9P93UBABwnj0OTHQAAGTAMQxaLRfv27VNcXJwKFy5ss/zatWs6ceKE9XbJkiVVokQJ6+2GDRsqOTlZR48eVVBQkM6fP6+3335b69ev14ULF5SUlKT4+HiFh4fbPG7dunWzXGP16tWtv7u7u6tw4cKqVq2atS0wMFCSdOHCBUnSvn37tG7dOuXLly/NY504cULly5dP87iSVKxYMetjAACcF+EKAOCUDh8+rFKlSikuLk7FihXT+vXr0/QpUKBAlh8vLCxMUVFRmjRpkkJCQuTl5aWGDRsqISHBpl/evHmz/JgeHh42t1NnPbz1tiTrzIdxcXF65JFH9P7776d5rGLFimX6uM4yeyIAIGOEKwCA01m7dq0OHDig/v3767777lNkZKTy5MmT6eQN4eHh+uuvv1S8eHFJ0tatW+Xm5qYKFSpIkjZv3qxp06apffv2kqSzZ8/aTCSREU9PT0lSUlLSHb4qqXbt2lq6dKlCQ0OVJ0/2/wV7eHiYUg8AwFxMaAEAcKgbN24oMjJSf/75p3bv3q2xY8fqscce08MPP6wePXqodevWatiwoTp27Kiff/5Zp0+f1pYtW/Sf//xHO3futD6Ot7e3wsLCtG/fPv3666/q16+funTpoqCgIElSuXLltGDBAh0+fFjbtm3TM888Ix8fn9vWFxISIovFou+//14XL15UXFxctl/ra6+9pujoaHXr1k07duzQiRMn9NNPP6lXr152haXQ0FCtWbNGkZGR+vvvv7NdDwDAXIQrAIBDrVq1SsWKFVNoaKgeeughrVu3TpMnT9Y333wjd3d3WSwW/fjjj2ratKl69eql8uXLq2vXrjpz5oz1nCZJKlu2rDp37qz27durTZs2ql69uqZNm2ZdPnv2bP3999+qXbu2unfvrn79+ikgIOC29ZUoUUKjR4/WkCFDFBgYqD59+mT7tRYvXlybN29WUlKS2rRpo2rVqumNN95QgQIF5OaW9X/J48eP1y+//KLg4GDVqlUr2/UAAMxlMQzDcHQRAADciVGjRmnFihXau3evo0sBAORi7LkCAAAAABMQrgAAAADABBwWCAAAAAAmYM8VAAAAAJiAcAUAAAAAJiBcAQAAAIAJCFcAAAAAYALCFQAAAACYgHAFAAAAACYgXAEAAACACQhXAAAAAGACwhUAAAAAmIBwBQAAAAAmIFwBAAAAgAkIVwAAAABgAsIVAAAAAJiAcAUAAAAAJiBcAQAAAIAJCFcAAAAAYALCFQAAAACYgHAFAAAAACYgXAEAAACACQhXAAAAAGCCPI4uAMgpN2/eVEJCgqPLAAAAuZynp6fy5OFjd27AXxn3HMMwFB4erkuXLjm6FAAAAElSkSJFVLJkSVksFkeXghxEuMI9JzVYlShRQvny5ZObG0e/AgAAx0hOTlZcXJz+/PNPGYah0NBQR5eEHES4wj3l5s2b1mAVFBTk6HIAAACUL18+SdKff/6p/fv3q3nz5vLz83NwVcgJfKWPe0rqOVapGzH8X3t3HtXE1f4B/BsCgRAERGSz7BqhKLgUN1TcoWhc6gIUXy1qrdaF+mqr/aloXwWLRW3f+tZWCuJboVqrWPcWEbRVDy5gccEgHlGPglgVEFAM4fn9wWFeYwiLolh5PufkHCbz3Ds3Q25m7tw7dxhjjDH2Kqg5N7l27Rr27t2LkpKSZi4RexG4ccVeSzwUkDHGGGOvkppzE2tra+Tl5eHKlSvNXCL2IvAZKGOMMcYYYy+JWCyGSCRCWVlZcxeFvQDcuGKMvTKcnJzw5ZdfCssikQi7du0Sli9duoRevXrByMgIXbp0eenlY+xV8nR9YawlGjBgAD766KNGpdm1axfat28PsVjc6LSM1YcbV4y9Ao4ePQqFQgE7OzutBsWTsrOzMXLkSJiZmUEmk8Hb2xvXr1+vM++ioiLMmjULtra2MDQ0hFwux/79+4X1CQkJsLe3R+vWrfHPf/5TI21eXh7kcnmDxoUnJSWhV69eMDMzQ6tWreDh4fHcB638/Hy8/fbbwvKyZcsgk8mgVCqRkpLyXHk39sR01apVEIvF+OKLL55ru6x+DakPIpGo1ldd/x+1Wo2lS5fC2dkZUqkUrq6uWLFiBYhIiImOjoaVlRWsrKywZs0ajfTp6eno3r07Kisr6yx/WlqaRpmkUik8PDywcePGxu2Iepw6dQrTp09v0jxfhA8++ABisRjbt29/4dtSqVRYuHAhOnfuDJlMBjs7O0yaNAm3bt3SiLt37x5CQkJgamoKc3NzTJ06FaWlpcL6tLQ0jBo1Cra2tpDJZOjSpQsSEhI08oiJiUG/fv3QunVrtG7dGkOGDMHJkyfrLN+9e/cwZ84cdOzYEVKpFA4ODpg7dy6Ki4uFmLt378Lf3x92dnYwNDSEvb09Zs+e3Wz354hEL+/1snzwwQcYN24cbty4gRUrVuC9997D6NGj603XVMdL9nrjxhVjr4CysjJ4eXnhP//5j86YK1euoG/fvnBzc0NaWhqysrKwdOlSGBkZ6Uzz+PFjDB06FHl5efj555+hVCoRExODdu3aAQD++usvTJs2DdHR0fjtt9+wZcsW7N27V0j/4Ycf4vPPP693RqOUlBQEBgZi7NixOHnyJM6cOYOIiAioVKpG7glNNjY2MDQ01NoHjo6OaNOmzTPl+awPlo6Li8Mnn3yCuLi4Z0rPGq4h9SE/P1/jFRcXB5FIhLFjx+pMExUVhQ0bNmD9+vXIzs5GVFQUVq9eja+//hoAkJWVhfDwcGzduhU//vgjlixZgnPnzgGonol0xowZ+Pbbbxv8IFClUon8/HxcvHgRH3zwAWbOnPncFwWe1LZtWxgbGzdZfi9CeXk5tm7d+tLqTnl5OTIyMrB06VJkZGRg586dUCqVGDlypEZcSEgILly4gOTkZOzduxdHjx7VaKgeP34cnp6e2LFjB7KyshAaGopJkyZp/D6mpaUhODgYqampOHHiBOzt7TFs2DDcvHlTZ/lu3bqFW7duITo6GufPn0d8fDwOHjyIqVOnCjF6enoYNWoUdu/ejZycHMTHx+PQoUOYMWNGE+6plqu0tBSFhYXw8/ODnZ0dWrVq1aB0TXW8ZC0AMfYaKSsro9OnT1NZWVlzF+WZAaCkpCSt9wMDA2nixImNymvDhg3k4uJCjx8/rnV9eno6WVtbC8sTJkyg1atXExFRYmIijRw5skHbCQsLowEDBtQZk5ubSyNHjiQrKyuSyWT01ltvUXJyskaMo6MjrVu3Tlh+cl8A0HgtW7aMiIiysrJo4MCBZGRkRBYWFvT+++/TgwcPhDwmT55Mo0aNopUrV5KtrS05OTmRr6+vVn51SUtLo3bt2tHjx4/Jzs6Ojh07RkREarWa2rVrR998841GfEZGBolEIsrLyyMiouzsbPLx8SFDQ0Nyd3en5ORknf9npqmh+2nUqFE0aNCgOmOGDx9OU6ZM0XjvnXfeoZCQECIi2rZtG/Xs2VNY16NHD/rpp5+IiCgyMpLmzp3boDKnpqYSALp//77G+66urkL9ItL+vhMReXl5Cd/tqqoqWrZsGdnb25NEIiFbW1uaM2eOzvQAKCYmhkaPHk1SqZTat29Pv/zyi0b+586dI39/f5LJZGRlZUUTJ06kO3fuCOu3b99OnTp1EurT4MGDqbS0VPhc3t7eZGxsTGZmZtSnTx/hO65LfHw89erVi4qKisjY2JiuX79ORETFxcVkZGRE+/fv14jfuXMnmZiYCL/hx44dIy8vLzI0NKTu3btTUlISAaDMzMw6t/ukkydPEgC6du0aERFdvHiRANCpU6eEmAMHDpBIJKKbN2/qzCcgIIBCQ0N1rq+srKRWrVrR5s2bG1w2IqKffvqJJBIJqVQqnTFfffUVvfHGG43Kt6kAL+/1LHx9fSksLExYfvToEc2fP5/s7OzI2NiYevToQampqUT0v7r55Ku240FN/JOa4nhZc47y888/U2RkJP3+++/P9qHZK417rljLUFam+/XoUcNjHz5sWGwTq6qqwr59+yCXy+Hn5wcrKyv07NlT5/DBGrt370bv3r0xa9YsWFtbo1OnToiMjIRarQYAdOjQAeXl5cjMzMS9e/dw6tQpeHp64v79+1i6dCnWr1/foPLZ2NjgwoULOH/+vM6Y0tJSBAQEICUlBZmZmfD394dCoah3WGON/Px8eHh4YP78+cjPz8eCBQtQVlYGPz8/tG7dGqdOncL27dtx6NAhzJ49WyNtSkoKlEqlcJV6586deOONN/Cvf/1L6PmoS2xsLIKDg2FgYIDg4GDExsYCqL7CHBwcjMTERI34hIQE+Pj4wNHREWq1GqNHj4axsTHS09OxceNGLF68uEGf+UUpe1ym8/Wo8lGDYx+qHtYb+zLcvn0b+/bt07j6X5s+ffogJSUFOTk5AIA///wTf/zxhzD0tHPnzsjJycH169dx7do15OTkoFOnTrhy5Qo2bdqElStXPlP5iAgHDx7E9evX0bNnzwan27FjB9atW4fvvvsOly9fxq5du9C5c+c603z22WeYMGECsrKyEBAQgJCQENy7dw9A9RDhQYMGoWvXrjh9+jQOHjyI27dvY8KECQCq61hwcDCmTJmC7OxspKWl4Z133gERobKyEqNHj4avry+ysrJw4sQJTJ8+HaJ6xnLFxsZi4sSJMDMzw9tvv434+HgAgKmpKUaMGFFr3ampLyUlJVAoFOjcuTMyMjKwYsUKLFy4sMH7r0ZxcTFEIhHMzc0BACdOnIC5uTneeustIWbIkCHQ09NDenp6nflYWFjoXF9eXg6VSlVnjK58TU1NdfaI3rp1Czt37oSvr2+j8m2pZs+ejRMnTmDr1q3IysrC+PHj4e/vj8uXL6NPnz5QKpUAqutXfn4+du/ejQkTJsDf3184HvTp00cr36Y6XrIWoLlbd4w1JZ09V3VdKgsI0Iw1NtYd6+urGWtp2XSX34Sial+pz8/PJwBkbGxMa9eupczMTFq1ahWJRCJKS0vTmVfHjh3J0NCQpkyZQqdPn6atW7eShYUFLV++XIjZuXMnderUiVxdXYUr5lOmTKF169bRkSNHqEuXLuTh4UHbt2/XuZ3S0lIKCAggAOTo6EiBgYEUGxtLjx49qvOzenh40Ndffy0s19VzRaR5VZ+IaOPGjdS6dWvhyjoR0b59+0hPT48KCgqIqLrnytramioqKjS2XVuvQW2Ki4tJKpXS2bNniYgoMzOTTExMhN6xzMxMEolEwlXxmt6sDRs2EFH1FXF9fX3Kz88X8mzunissh85XQIJmfTCOMNYZ67vJVyPWcrWlVsxzl7UB+ykqKopat25NDx8+rDNOrVbTwoULSSQSkb6+PolEIoqMjNSI2bBhA8nlcpLL5cL/cPDgwZSUlETbt28nDw8P6tKlCx05ckTndmqujstkMpLJZKSvr096enq0cuVKjbj6eq7WrFlDcrlcZ89zbfVlyZIlwnJpaSkBoAMHDhAR0YoVK2jYsGEaedy4cYMAkFKppDNnzhCAWnuj7t69SwDq/L15Wk5ODhkYGAg9Y0lJSeTs7ExVVVXC8pO9VDW9WTXl3bBhA7Vp00bj/xoTE9OonquHDx9St27d6N133xXei4iIILlcrhXbtm1brV7oGtu2bSOJRELnz5/Xua2ZM2eSi4tLvd/DJ925c4ccHBzo//7v/7TWBQUFkVQqJQCkUCgalW9T+jv1XF27do3EYrFWD+TgwYPp008/JSKi+/fva/VO1YxwqM/zHi+556pl4J4rxv4GqqqqAACjRo3CvHnz0KVLFyxatAgjRozAt99+W2c6KysrbNy4Ed27d0dgYCAWL16skWbMmDE4d+4ccnNzsXz5chw5cgRZWVmYPn06goKC8OWXX2LHjh2YOnUqCgsLa92OTCbDvn37kJubiyVLlsDExATz589Hjx49UF5eDqC652rBggVwd3eHubk5TExMkJ2d3eCeq9pkZ2fDy8sLMplMeM/HxwdVVVXC1UmgukdCIpE80zZ+/PFHuLq6wsvLCwDQpUsXODo6Ytu2bcKyu7u7cAX+yJEjKCwsxPjx4wFU33djb28PGxsbIc8ePXo8U1lY7eLi4hASElLn/YcA8NNPPyEhIQGJiYnIyMjA5s2bER0djc2bNwsxM2bMgFKphFKpxIwZM7B582a0atUKvXv3xrRp05CUlIS1a9ciKCgIFRUVdW7v999/x9mzZ3H27Fl8//33iIyMxIYNGxr8ucaPH4+HDx/CxcUF77//PpKSkuqdTMPT01P4WyaTwdTUVKi3f/75J1JTU2FiYiK83NzcAFTfz+jl5YXBgwejc+fOGD9+PGJiYnD//n0AgIWFBd577z34+flBoVDgq6++qrfHNy4uDn5+frC0tAQABAQEoLi4GIcPHxaWDQwMsHv3bgDVPQmmpqYYMmQIgOq64+npqfF/bUzdUalUmDBhAoioUfv9aampqQgNDUVMTAw8PDxqjfn888+xdetWJCUlCeWNjIzU2NdP/9aVlJRg+PDhePPNN7F8+XKtPNetW4eMjAz88ssvuHLlitYECkzbuXPnoFarIZfLNfb9kSNHmuSZUk1xvGSvv4bdlcvY390Ts0BpEYs1l+v6QXz64cR5ec9cpMawtLSEvr4+3nzzTY333d3d8ccff+hMZ2trCwMDA4if+Izu7u4oKCjA48ePtRocFRUV+PDDD/HDDz8gNzcXlZWVwlAUuVyO9PR0KBQKndtzdXWFq6srpk2bhsWLF0Mul2Pbtm0IDQ3FggULkJycjOjoaLRv3x5SqRTjxo175gkmGuPJxldjxcbG4sKFCxpDdqqqqhAXFycMQwsJCUFiYiIWLVqExMRE+Pv7P/OEGy9D6ae664NYT7M+FC7QXR/0RJr1IS8s77nK9Sx+//13KJVKobFbl48//hiLFi1CUFAQgOpG97Vr17Bq1SpMnjxZK/6vv/7CZ599hqNHjyI9PR1yuRwdOnRAhw4doFKpkJOTU+cwPWdnZ2EomoeHB9LT0xEREYGZM2cCqB5WSk/MVAhAYxIYe3t7KJVKHDp0CMnJyfjwww/xxRdf4MiRIzAwMKh1m0+/LxKJhIszpaWlUCgUiIqK0kpna2sLsViM5ORkHD9+HL/99hu+/vprLF68GOnp6XB2dsamTZswd+5cHDx4ENu2bcOSJUuQnJyMXr16aeWnVquxefNmFBQUaNQdtVqNuLg4DB48GBKJBOPGjUNiYiKCgoKQmJiIwMDABk8YUpeahtW1a9dw+PBhjUkGbGxstE58Kysrce/ePY2LIED1xRKFQoF169Zh0qRJtW4rOjoan3/+OQ4dOqTRuJ0xY4Yw5BIA7OzshL8fPHgAf39/tGrVCklJSbX+P21sbGBjYwM3NzdYWFigX79+WLp0KWxtbRu3M1qQ0tJSiMVinDlzRuO4BwAmJiZNuq3nPV6y1xc3rljL0JiT6xcV+xwkEgm8vb01emMAICcnB46OjjrT+fj4IDExEVVVVcKT4XNycmBra1trT87KlSvh7++Pbt26ITMzU+MquUqlEu7VaggnJycYGxsLD0k8duwY3nvvPYwZMwZA9UEw7zkbp+7u7oiPj0dZWZnQgDp27Bj09PTQsWPHOtNKJJJ6P8+5c+dw+vRppKWladxHce/ePQwYMACXLl2Cm5sb3n33XSxZsgRnzpzBzz//rNEz2LFjR9y4cQO3b9+GtbU1gOoptJuTTNLw7+2Lim0qsbGx6N69u9CzWJfy8nKhHtQQi8VC4+Np8+bNw7x58/DGG2/g1KlTGg2fysrKRtWHmm09fOK+zbZt22r0/pSUlODq1asaaaRSKRQKBRQKBWbNmgU3NzecO3cO3bp1a9S2AaBbt27YsWMHnJycdDZgRCIRfHx84OPjg/DwcDg6OiIpKUnoNenatSu6du2KTz/9FL1790ZiYmKtjav9+/fjwYMHyMzM1DjJPX/+PEJDQ1FUVARzc3OEhIRg6NChuHDhAg4fPqxxX1vHjh2xZcsWVFRUCLOGNqTu1DSsLl++jNTUVK0LHb1790ZRURHOnDmD7t27AwAOHz6MqqoqjXvi0tLSMGLECERFRemc8n716tWIiIjAr7/+qnEPF1Dd21fb/VclJSXw8/ODoaEhdu/eXW+PK/C/0Qv19Za2dF27doVarUZhYSH69evX4HQNOR48rSmPl+z1wo0rxl4BpaWlyM3NFZavXr2Ks2fPwsLCAg4ODgCqr7oHBgaif//+GDhwIA4ePIg9e/YgLS1NSDdp0iS0a9cOq1atAgDMnDkT69evR1hYGObMmYPLly8jMjISc+fO1SrDxYsXsW3bNmRmZgIA3NzcoKenh9jYWNjY2ODSpUvw9vautfzLly9HeXk5AgIC4OjoiKKiIvz73/+GSqXC0KFDAVTfDLxz504oFAqIRCIsXbpU50ltQ4WEhGDZsmWYPHkyli9fjjt37mDOnDn4xz/+ITRkdHFycsLRo0cRFBQEQ0NDYejSk2JjY9GjRw/0799fa523tzdiY2PxxRdfwMnJCX369MHUqVOhVqs1pn0eOnQoXF1dMXnyZKxevRoPHjzAkiVLAKDeyQBaqobUB6D6JHX79u1az6OqMXjwYIwZM0aY4EShUCAiIgIODg7w8PBAZmYm1q5diylTpmilTU5ORk5OjjBk0NvbG5cuXcKBAwdw48YNiMXiehvwhYWFePToESoqKnDy5En88MMPGDdunLB+0KBBiI+Ph0KhgLm5OcLDwzUaIvHx8VCr1ejZsyeMjY2xZcsWSKXSOi+o1GXWrFmIiYlBcHAwPvnkE1hYWCA3Nxdbt27F999/j9OnTyMlJQXDhg2DlZUV0tPTcefOHbi7u+Pq1avYuHEjRo4cCTs7OyiVSly+fFlnb05sbCyGDx+u1eh98803MW/ePCQkJGDWrFno378/bGxsEBISAmdnZ43GzbvvvovFixdj+vTpWLRoEa5fv47o6GgAuuuOSqXCuHHjkJGRgb1790KtVqOgoABAdWNHIpHA3d0d/v7+eP/99/Htt99CpVJh9uzZCAoKEnqXUlNTMWLECISFhWHs2LFCHhKJRGgwRUVFITw8HImJiXBychJiaoai1aakpATDhg1DeXk5tmzZgpKSEuG5SG3btoVYLMb+/ftx+/ZteHt7w8TEBBcuXMDHH38MHx8fODk51ft/bsnkcjlCQkIwadIkrFmzBl27dsWdO3eQkpICT09PDB8+vNZ0Tk5O+PXXX6FUKtGmTRuYmZnp7B0Gnu94yVqA5r7pi7Gm9Hedir226WEB0OTJkzXiYmNjqX379mRkZEReXl60a9cujfW+vr5aaY4fP049e/YkQ0NDcnFxoYiICKqsrNSIqaqqIh8fH9qzZ4/G+3v27CEHBweytrammJgYneU/fPgwjR07Vpgy2tramvz9/TVu1r169SoNHDiQpFIp2dvb0/r167Wm0G3shBZEDZ+K/WknTpwgT09PMjQ0rHUq9oqKCmrTpo3G1NlPioqKIisrK2GygW+++YYA0KRJk7Ria6Zil0gk5ObmRnv27CEAdPDgwVrzbukaWh++++47kkqlVFRUVGs+jo6OGt+XkpISCgsLIwcHBzIyMiIXFxdavHix1mQn5eXlJJfLtSZNiImJIWtra3JwcKC9e/c2uPz6+vrk7OxMCxYs0Jh8pbi4mAIDA8nU1JTs7e0pPj5e4zuelJREPXv2JFNTU5LJZNSrVy86dOiQxuerq74QEZmZmdGmTZuE5ZycHBozZgyZm5uTVColNzc3+uijj6iqqoouXrxIfn5+1LZtWzI0NCS5XC5MOFNQUECjR48mW1tbkkgk5OjoSOHh4aRWq7U+f0FBAenr6wvT2D9t5syZ1LVrV2H5k08+IQAUHh6uFXvs2DHy9PQkiURC3bt3p8TERAJAly5dqjXvq1ev1vrdwVMTGNy9e5eCg4PJxMSETE1NKTQ0VOt3o7Y8fJ+Y1MjR0bHWmKd/o56k67sNgK5evUpE1b+nvXv3JjMzMzIyMqIOHTrQwoULtab2Z9WePo48fvyYwsPDycnJiQwMDMjW1pbGjBlDWVlZRFT7hBaFhYU0dOhQMjEx0TkVe43nOV7yhBYtg4joqQHfjP2NlZeXIzs7G+7u7q/8wzVZy3Xs2DH07dsXubm5cHV1be7iMPa3kZCQgNDQUBQXF0MqlTZ3cRhrlJpzlLy8POTk5KBfv37o27dvcxeLNTEeFsgYYy9YUlISTExM0KFDB+Tm5iIsLAw+Pj7csGKsHv/973/h4uKCdu3a4c8//8TChQsxYcIEblgxxl5Z3LhijLEX7MGDB1i4cCGuX78OS0tLDBkyROd9Qoyx/ykoKEB4eDgKCgpga2uL8ePHIyIiormLxRhjOvGwQPZa4WGBjDHGGHsV8bDAloEfIswYY4wxxhhjTYAbV+y19LxTfDPGGGOMNSU+N2kZuHHFXis1D8YtLS1t5pIwxhhjjP1PzbnJkw8kZ68fntCCvVb09fVhaWmJmzdvAqh+mKOeHl9DYIwxxljzqKqqQmlpKW7evImioiLuwXrNceOKvXYcHBxAREIDizHGGGOsuRUVFeH27dvCsoGBQTOWhr0o3Lhirx2RSAQnJydcunQJly9fhqWlpTBckDHGGGPsZVOpVKiqqgIR4c6dO5BKpWjbtm1zF4u9ANy4Yq+tgQMHQqVSITs7G2q1GiKRqLmLxBhjjLEWztjYGAMHDoSLi0tzF4W9APycK/Zaq6ioQH5+PsrLy8FfdcYYY4w1J7FYDHNzc9jY2DR3UdgLwo0rxhhjjDHGGGsCPI0aY4wxxhhjjDUBblwxxhhjjDHGWBPgxhVjjDHGGGOMNQFuXDHGGGOMMcZYE+DGFWOMMcYYY4w1gf8HEpP4d+1m54QAAAAASUVORK5CYII="/>
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
<h2 id="Employees-who-left-percentage-by-department-total-and-salary-range"><a id="toc2_2_"></a><a href="#toc0_">Employees who left percentage by department total and salary range</a><a class="anchor-link" href="#Employees-who-left-percentage-by-department-total-and-salary-range">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [8]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1">## Employees who left percentage by department total and salary band / Total employees by department and salary band</span>

<span class="n">df_left_1</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">1</span><span class="p">]</span>
<span class="n">left_1</span> <span class="o">=</span> <span class="n">df_left_1</span><span class="o">.</span><span class="n">groupby</span><span class="p">([</span><span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'salary'</span><span class="p">])</span><span class="o">.</span><span class="n">size</span><span class="p">()</span><span class="o">.</span><span class="n">unstack</span><span class="p">()</span>

<span class="n">total_df</span> <span class="o">=</span> <span class="n">df</span><span class="o">.</span><span class="n">groupby</span><span class="p">([</span><span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'salary'</span><span class="p">])</span><span class="o">.</span><span class="n">size</span><span class="p">()</span><span class="o">.</span><span class="n">unstack</span><span class="p">()</span>

<span class="n">df_percentage</span> <span class="o">=</span> <span class="p">(</span><span class="n">left_1</span> <span class="o">/</span> <span class="n">total_df</span><span class="p">)</span> <span class="o">*</span> <span class="mi">100</span>

<span class="c1"># Reset index to bring 'department' back as a column</span>
<span class="n">df_percentage</span><span class="o">.</span><span class="n">reset_index</span><span class="p">(</span><span class="n">inplace</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>

<span class="c1"># Print the result</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df_percentage</span><span class="p">)</span>
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
<pre>salary         dept  high   low  medium
0        accounting  4.76 19.93   17.94
1                hr  7.89 20.95   17.98
2                it  5.63 18.28   15.62
3        management  0.78 23.02   11.24
4         marketing  4.84 24.52   10.96
5       product_mng  7.69 17.20   16.15
6             randd  6.38 15.84    9.54
7             sales  5.06 20.54   15.11
8           support  3.97 22.03   14.01
9         technical  6.02 20.91   15.11
</pre>
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
<h3 id="Distribution-of-Salary-Levels-by-Department-for-Employees-who-Left"><a id="toc2_2_1_"></a><a href="#toc0_">Distribution of Salary Levels by Department for Employees who Left</a><a class="anchor-link" href="#Distribution-of-Salary-Levels-by-Department-for-Employees-who-Left">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [11]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">melted_df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">melt</span><span class="p">(</span><span class="n">df_percentage</span><span class="p">,</span><span class="n">value_vars</span><span class="o">=</span><span class="p">[</span><span class="s1">'high'</span><span class="p">,</span><span class="s1">'low'</span><span class="p">,</span><span class="s1">'medium'</span><span class="p">],</span> <span class="n">id_vars</span><span class="o">=</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">],</span> <span class="n">value_name</span><span class="o">=</span><span class="s1">'percentage'</span><span class="p">)</span>

<span class="n">melted_df</span><span class="o">.</span><span class="n">sort_values</span><span class="p">(</span><span class="n">by</span><span class="o">=</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">],</span> <span class="n">inplace</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">ascending</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span>



<span class="c1"># Plot the bar graph</span>

<span class="n">x_order</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'low'</span><span class="p">,</span><span class="s1">'medium'</span><span class="p">,</span><span class="s1">'high'</span><span class="p">]</span> <span class="c1"># set order of labels of x axis</span>

<span class="n">fig</span><span class="p">,</span> <span class="n">ax</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span> <span class="mi">8</span><span class="p">))</span>

<span class="c1"># Plot bars for each salary level in each department</span>
<span class="c1">#df_percentage.plot(kind='bar', x = 'dept', stacked=False, ax=ax, order=x_order)</span>

<span class="n">sns</span><span class="o">.</span><span class="n">barplot</span><span class="p">(</span><span class="n">x</span> <span class="o">=</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="s1">'percentage'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">melted_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>


<span class="c1"># Add lines at 16.6% and 2.8%</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mf">16.6</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Salifort Average Turnover'</span><span class="p">)</span>
<span class="n">ax</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mf">17.8</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'US Business Avg 2022-23'</span><span class="p">)</span>

<span class="c1"># Add labels and legend</span>
<span class="n">ax</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Department'</span><span class="p">)</span>
<span class="n">ax</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="s1">'%'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xticks</span><span class="p">(</span><span class="n">rotation</span><span class="o">=</span><span class="mi">90</span><span class="p">)</span>
<span class="n">ax</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="s1">'Distribution of Salary Levels by Department for Employees who Left'</span><span class="p">)</span>

<span class="n">ax</span><span class="o">.</span><span class="n">legend</span><span class="p">(</span><span class="n">loc</span><span class="o">=</span><span class="s1">'upper center'</span><span class="p">,</span> <span class="n">bbox_to_anchor</span><span class="o">=</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="o">-</span><span class="mf">0.2</span><span class="p">),</span> <span class="n">fancybox</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">shadow</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">ncol</span><span class="o">=</span><span class="mi">3</span><span class="p">)</span>


<span class="c1"># Show the plot</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA+QAAANCCAYAAADvGAbiAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAACqi0lEQVR4nOzdd3gU1dvG8XvTCym0EGoCoSNNUECQLoiIUhRQpCqgP4o0BVSqBUGRIigqCIKoFBEUpUhvUgQElSJNUOkghNDS5v0jb1aWFBLI5oTN93NduWBnT3aenMyc7L1zZsZmWZYlAAAAAACQqdxMFwAAAAAAQHZEIAcAAAAAwAACOQAAAAAABhDIAQAAAAAwgEAOAAAAAIABBHIAAAAAAAwgkAMAAAAAYACBHAAAAAAAAwjkAAAAAAAYQCAHspnhw4fLZrNlyrrq1q2runXr2h+vWbNGNptN8+fPz5T1d+rUSeHh4ZmyrtsVFRWl5557TqGhobLZbOrTp0+mrTvx97FmzZpMW+fd7M8//5TNZtOMGTPu+LU6deqkHDly3HlRcAkmx4Gs4ua/F3CUOP68++67pktJl9jYWL388ssqXLiw3Nzc1Lx5c9MlAVkOgRy4i82YMUM2m83+5ePjowIFCqhx48aaOHGiLl26lCHrOX78uIYPH65ffvklQ14vI2Xl2tLirbfe0owZM/TCCy9o1qxZat++fYpto6OjNWHCBFWuXFmBgYEKDg5WuXLl1K1bN+3bty8Tq3aexA+Mzp49a7oUlxAeHm4fH9zc3BQcHKzy5curW7du2rJli+ny0mzPnj0aPny4/vzzT9OlpMkHH3yQrg9u0jMOZIQbt4ubvx5++GGnrhtZW0YH/08//VTvvPOOnnjiCX322Wfq27fvXbc/A87mYboAAHdu5MiRKlq0qGJiYnTy5EmtWbNGffr00Xvvvadvv/1WFSpUsLd97bXXNGjQoHS9/vHjxzVixAiFh4erUqVKaf6+5cuXp2s9tyO12j755BPFx8c7vYY7sWrVKlWvXl3Dhg27ZdtWrVppyZIleuqpp9S1a1fFxMRo3759Wrx4sR544AGVLl06EyrG3aZSpUrq37+/JOnSpUvau3ev5s2bp08++UR9+/bVe++9Z7jCW9uzZ49GjBihunXrZvlZL1JCIM+TJ486deqUpvbpGQcyyo3bxY0KFCiQaTXA9a1atUoFCxbUuHHj7Mvmz59/V+3PgLMRyAEX0KRJE1WtWtX+ePDgwVq1apUeffRRPfbYY9q7d698fX0lSR4eHvLwcO6uf+XKFfn5+cnLy8up67kVT09Po+tPi9OnT6ts2bK3bLdt2zYtXrxYb775pl555RWH5yZNmqQLFy44qcK0u3z5svz9/U2XgZsULFhQzzzzjMOy0aNH6+mnn9a4ceNUokQJvfDCC4aqS921a9eMjyOZIa3jQFrFxsYqPj4+1b5LbrsAMtrp06cVHBxsugwgS2PKOuCi6tevryFDhujo0aP6/PPP7cuTO4f8xx9/VK1atRQcHKwcOXKoVKlS9tC3Zs0a3XfffZKkzp0726c1Jk7HrFu3ru655x5t375dtWvXlp+fn/17UzonMC4uTq+88opCQ0Pl7++vxx57TH/99ZdDm/Dw8GSPLt34mreqLblzyC9fvqz+/furcOHC8vb2VqlSpfTuu+/KsiyHdjabTT179tTChQt1zz33yNvbW+XKldPSpUuT7/CbnD59Ws8++6zy5csnHx8fVaxYUZ999pn9+cTzt48cOaLvv//eXntKU/gOHTokSapZs2aS59zd3ZU7d27746NHj+p///ufSpUqJV9fX+XOnVtPPvlkmqYHrl+/Xk8++aSKFCkib29vFS5cWH379tXVq1cd2iWeA33o0CE98sgjCggIULt27TRs2DB5enrqzJkzSV67W7duCg4O1rVr125Zx63s27dPTzzxhHLlyiUfHx9VrVpV3377rf35n3/+WTabzaHPEy1btkw2m02LFy+2L/vnn3/UpUsX5cuXz/67/vTTT29Zx8mTJ9W5c2cVKlRI3t7eyp8/vx5//PE0T8U8fPiwGjduLH9/fxUoUEAjR460b4uWZSk8PFyPP/54ku+7du2agoKC1L179zSt52a+vr6aNWuWcuXKpTfffNNh+4+Pj9f48eNVrlw5+fj4KF++fOrevbv+/fdfh9cIDw/Xo48+quXLl6tSpUry8fFR2bJltWDBAod258+f14ABA1S+fHnlyJFDgYGBatKkiXbt2uXQLnGf+Oqrr/Taa6+pYMGC8vPz08SJE/Xkk09KkurVq2ffVxKvfZBYx5o1a1S1alX5+vqqfPny9ucXLFig8uXLy8fHR1WqVNHOnTuT9Mettifpv1OENm7cqH79+ilv3rzy9/dXixYtHLb38PBw/f7771q7dq291pTOjb7VOHCrcURynGI8fvx4RUREyNvbW3v27El2nemRuJ8fO3ZMjz76qHLkyKGCBQtq8uTJkqRff/1V9evXl7+/v8LCwvTFF18k22fr1q1T9+7dlTt3bgUGBqpDhw5Jtqfk3OrnT+8+cv36dQ0bNkzFixe3j28vv/yyrl+/nuT7P//8c1WpUkW+vr7KlSuX2rZtm+Tv1IEDB9SqVSuFhobKx8dHhQoVUtu2bXXx4sUUf6aJEyfK3d3d4UPUsWPHymazqV+/fvZlcXFxCggI0MCBA5O8xscff2z/Pd93333atm1bkjarVq3Sgw8+KH9/fwUHB+vxxx/X3r17U6wrvW7Vl4nb5erVq/X77787/H1ObX8GsiOOkAMurH379nrllVe0fPlyde3aNdk2v//+ux599FFVqFBBI0eOlLe3tw4ePKiNGzdKksqUKaORI0dq6NCh6tatmx588EFJ0gMPPGB/jXPnzqlJkyZq27atnnnmGeXLly/Vut58803ZbDYNHDhQp0+f1vjx49WwYUP98ssv9iP5aZGW2m5kWZYee+wxrV69Ws8++6wqVaqkZcuW6aWXXtI///zjMKVOkjZs2KAFCxbof//7nwICAjRx4kS1atVKx44dcwjAN7t69arq1q2rgwcPqmfPnipatKjmzZunTp066cKFC3rxxRdVpkwZzZo1S3379lWhQoXsU0fz5s2b7GuGhYVJkmbPnq2aNWumOsth27Zt2rRpk9q2batChQrpzz//1Icffqi6detqz5498vPzS/F7582bpytXruiFF15Q7ty5tXXrVr3//vv6+++/NW/ePIe2sbGxaty4sWrVqqV3331Xfn5+qlGjhkaOHKk5c+aoZ8+e9rbR0dGaP3++WrVqJR8fnxTXnxa///67atasqYIFC2rQoEHy9/fX3Llz1bx5c3399ddq0aKFqlatqmLFimnu3Lnq2LGjw/fPmTNHOXPmVOPGjSVJp06dUvXq1e0fwuTNm1dLlizRs88+q8jIyFQvsNWqVSv9/vvv6tWrl8LDw3X69Gn9+OOPOnbs2C2nYsbFxenhhx9W9erVNWbMGC1dulTDhg1TbGysRo4cKZvNpmeeeUZjxozR+fPnlStXLvv3fvfdd4qMjLyjI5w5cuRQixYtNG3aNO3Zs0flypWTJHXv3l0zZsxQ586d1bt3bx05ckSTJk3Szp07tXHjRoeZJwcOHFCbNm30/PPPq2PHjpo+fbqefPJJLV26VA899JCkhA8dFi5cqCeffFJFixbVqVOn9NFHH6lOnTras2dPkinSr7/+ury8vDRgwABdv35djRo1Uu/evTVx4kS98sorKlOmjCTZ/5WkgwcP6umnn1b37t31zDPP6N1331WzZs00ZcoUvfLKK/rf//4nSRo1apRat26t/fv3y80t4ZhEWranG/Xq1Us5c+bUsGHD9Oeff2r8+PHq2bOn5syZI0kaP368evXqpRw5cujVV1+VpBTHxNTGgbSMIzeaPn26rl27pm7dusnb29the0lOTExMstdq8Pf3dxiH4+Li1KRJE9WuXVtjxozR7Nmz1bNnT/n7++vVV19Vu3bt1LJlS02ZMkUdOnRQjRo1VLRoUYfX7Nmzp4KDgzV8+HDt379fH374oY4ePWr/QCI5afn507OPxMfH67HHHtOGDRvUrVs3lSlTRr/++qvGjRunP/74QwsXLrR/75tvvqkhQ4aodevWeu6553TmzBm9//77ql27tnbu3Kng4GBFR0ercePGun79unr16qXQ0FD9888/Wrx4sS5cuKCgoKBkf64HH3xQ8fHx2rBhgx599FFJCR+Eurm5af369fZ2O3fuVFRUlGrXru3w/V988YUuXbqk7t27y2azacyYMWrZsqUOHz5s3zdXrFihJk2aqFixYho+fLiuXr2q999/XzVr1tSOHTvueJp4Wvoyb968mjVrlt58801FRUVp1KhRkqQSJUrccn8Gsh0LwF1r+vTpliRr27ZtKbYJCgqyKleubH88bNgw68Zdf9y4cZYk68yZMym+xrZt2yxJ1vTp05M8V6dOHUuSNWXKlGSfq1Onjv3x6tWrLUlWwYIFrcjISPvyuXPnWpKsCRMm2JeFhYVZHTt2vOVrplZbx44drbCwMPvjhQsXWpKsN954w6HdE088YdlsNuvgwYP2ZZIsLy8vh2W7du2yJFnvv/9+knXdaPz48ZYk6/PPP7cvi46OtmrUqGHlyJHD4WcPCwuzmjZtmurrWZZlxcfH2/s6X7581lNPPWVNnjzZOnr0aJK2V65cSbLsp59+siRZM2fOtC9L/H2sXr061e8dNWqUZbPZHNbVsWNHS5I1aNCgJO1r1KhhVatWzWHZggULkqwrOYnbZ2rbY4MGDazy5ctb165dsy+Lj4+3HnjgAatEiRL2ZYMHD7Y8PT2t8+fP25ddv37dCg4Otrp06WJf9uyzz1r58+e3zp4967Cetm3bWkFBQfY+OXLkiMO29u+//1qSrHfeeSfVnyk5if3Xq1cvh5+hadOmlpeXl/3n379/vyXJ+vDDDx2+/7HHHrPCw8Ot+Pj4VNdzq+0rcf9ftGiRZVmWtX79ekuSNXv2bId2S5cuTbI8LCzMkmR9/fXX9mUXL1608ufP7zDmXLt2zYqLi3N4vSNHjlje3t7WyJEj7csSt8dixYol2Q7nzZuX4vaTWMemTZvsy5YtW2ZJsnx9fR22248++ijJ66R1e0ocbxs2bOjQ73379rXc3d2tCxcu2JeVK1fOYZy6leR+T2kdRxK3y8DAQOv06dNpXp+kZL9GjRplb5e4nb711lv2Zf/++6/l6+tr2Ww266uvvrIv37dvnyXJGjZsmH1ZYp9VqVLFio6Oti8fM2aMw3ZnWUnH9rT+/GndR2bNmmW5ublZ69evd2g3ZcoUS5K1ceNGy7Is688//7Tc3d2tN99806Hdr7/+anl4eNiX79y505JkzZs3L5WeTiouLs4KDAy0Xn75ZcuyEra13LlzW08++aTl7u5uXbp0ybIsy3rvvfcsNzc3699//7Us67/fc+7cuR3GtEWLFlmSrO+++86+rFKlSlZISIh17tw5+7Jdu3ZZbm5uVocOHVKtL3E9qY1rae1Ly0r4vZYrV86hXWr7M5AdMWUdcHE5cuRI9Wrried2LVq06LYvgObt7a3OnTunuX2HDh0UEBBgf/zEE08of/78+uGHH25r/Wn1ww8/yN3dXb1793ZY3r9/f1mWpSVLljgsb9iwoSIiIuyPK1SooMDAQB0+fPiW6wkNDdVTTz1lX+bp6anevXsrKipKa9euTXftNptNy5Yt0xtvvKGcOXPqyy+/VI8ePRQWFqY2bdo4TH+88ehWTEyMzp07p+LFiys4OFg7duxIdT03fu/ly5d19uxZPfDAA7IsK9mpvsmde9yhQwdt2bLFPs1eSjiyX7hwYdWpUyc9P3YS58+f16pVq9S6dWtdunRJZ8+e1dmzZ3Xu3Dk1btxYBw4c0D///CNJatOmjWJiYhymUC9fvlwXLlxQmzZtJCXMmvj666/VrFkzWZZlf72zZ8+qcePGunjxYop95uvrKy8vL61ZsyZN02+Tc+MsgsQj9NHR0VqxYoUkqWTJkqpWrZpmz57t0AdLlixRu3bt7vgWhom3XkscI+bNm6egoCA99NBDDn1RpUoV5ciRQ6tXr3b4/gIFCjgcQU6cjrxz506dPHlSUsL4kHg0Oi4uTufOnbOfGpNc33bs2DFdM2UkqWzZsqpRo4b9cbVq1SQlnLpTpEiRJMsT9+H0bE+JunXr5tDvDz74oOLi4nT06NF01Xwr6R1HWrVqleIMm+RUq1ZNP/74Y5KvG9eX6LnnnrP/Pzg4WKVKlZK/v79at25tX16qVCkFBwcnOz5269bNYWbFCy+8IA8Pj1TH/LT+/GndR+bNm6cyZcqodOnSDtt2/fr1Jcm+bS9YsEDx8fFq3bq1Q7vQ0FCVKFHC3i7xCPiyZct05cqVFH+Om7m5uemBBx7QunXrJEl79+7VuXPnNGjQIFmWpZ9++klSwlHze+65J8n5123atFHOnDntjxNnhiX2+4kTJ/TLL7+oU6dODjMGKlSooIceeihD/s6mtS8BpA2BHHBxUVFRDuH3Zm3atFHNmjX13HPPKV++fGrbtq3mzp2brnBesGDBdF14qUSJEg6PbTabihcv7vRboBw9elQFChRI0h+JU+VufkN94xv5RDlz5rxl+Dp69KhKlChhDyG3Wk9aeXt769VXX9XevXt1/Phxffnll6pevbrmzp3rEOyuXr2qoUOH2s+Tz5Mnj/LmzasLFy6kem6jJB07dsz+Ri5HjhzKmzevPUTf/L0eHh4qVKhQktdo06aNvL297W+QL168qMWLF2dIgDx48KAsy9KQIUOUN29eh6/EK1SfPn1aklSxYkWVLl3aPpVYSpiunidPHvsbxzNnzujChQv6+OOPk7xe4odMia93M29vb40ePVpLlixRvnz57FN6E4Porbi5ualYsWIOy0qWLClJDvtChw4dtHHjRvt2M2/ePMXExGTIrbGioqIkyb5PHDhwQBcvXlRISEiS/oiKikrSF8WLF0/yO735Z4iPj7dfPO7G7XH37t3Jbo83T3dOi5v31cSwVLhw4WSXJ+7D6dmeUlpXYji63Q9lUpLecSS9/ZYnTx41bNgwyVfi6TGJfHx8kgT9oKAgFSpUKMnvPigoKNl+uHnMz5Ejh/Lnz5/qmJ+enz8t+8iBAwf0+++/J/k9J26vib/nAwcOyLIslShRIknbvXv32tsVLVpU/fr109SpU5UnTx41btxYkydPvuUYKyWE6O3bt+vq1atav3698ufPr3vvvVcVK1a0T1vfsGGDPWzf6FbbX2IflCpVKsn3lilTRmfPntXly5dvWWNq0tqXANKGc8gBF/b333/r4sWLKl68eIptfH19tW7dOq1evVrff/+9li5dqjlz5qh+/fpavny53N3db7me9B7NSouUgltcXFyaasoIKa3HuukCcCbkz59fbdu2VatWrVSuXDnNnTtXM2bMkIeHh3r16qXp06erT58+qlGjhoKCgmSz2dS2bdtUP2iJi4vTQw89pPPnz2vgwIEqXbq0/P399c8//6hTp05JvvfGI583ypkzpx599FHNnj1bQ4cO1fz583X9+vUMuaJzYg0DBgywnwN+sxu39zZt2ujNN9/U2bNnFRAQoG+//VZPPfWU/Rz8xNd75plnkpxrnujG2wberE+fPmrWrJkWLlyoZcuWaciQIRo1apRWrVqlypUr39bPeLO2bduqb9++mj17tl555RV9/vnnqlq1arJvuNPrt99+k/Rfn8XHxyskJMThaOON0nMENtFbb72lIUOGqEuXLnr99deVK1cuubm5qU+fPsluj7cznqS0r95qH07v9pSW1zTFGeOwdPt9m5nSso/Ex8erfPnyKd7mL/HDm/j4eNlsNi1ZsiTZnzFxVomUcDG2Tp06adGiRVq+fLl69+6tUaNGafPmzcl+WJmoVq1aiomJ0U8//aT169fbg/eDDz6o9evXa9++fTpz5kyygTwr9Hta+xJA2hDIARc2a9YsSUrxjWYiNzc3NWjQQA0aNNB7772nt956S6+++qpWr16thg0b3vFRzZsdOHDA4bFlWTp48KBD8MmZM2eyt/I6evSow1HF9NQWFhamFStW6NKlSw5Hyfft22d/PiOEhYVp9+7dio+PdwisGb0eKWEKZ4UKFXTgwAH7tMr58+erY8eOGjt2rL3dtWvXbnlrtF9//VV//PGHPvvsM3Xo0MG+/Mcff0x3XR06dNDjjz+ubdu2afbs2apcubL9omF3IvF37+npqYYNG96yfZs2bTRixAh9/fXXypcvnyIjI9W2bVv783nz5lVAQIDi4uLS9HrJiYiIUP/+/dW/f38dOHBAlSpV0tixYx3ubpCc+Ph4HT582H5USZL++OMPSXK46FKuXLnUtGlTzZ49W+3atdPGjRs1fvz426r1RlFRUfrmm29UuHBh+1HHiIgIrVixQjVr1kxTwEs8wnzjfnjzzzB//nzVq1dP06ZNc/jeCxcuKE+ePGmqNaPHoETp3Z7SKiPqzcxxxNkOHDigevXq2R9HRUXpxIkTeuSRR1L8nvT8/GnZRyIiIrRr1y41aNAg1d9PRESELMtS0aJFHfbNlJQvX17ly5fXa6+9pk2bNqlmzZqaMmWK3njjjRS/5/7775eXl5fWr1+v9evX66WXXpIk1a5dW5988olWrlxpf5xeif2yf//+JM/t27dPefLkuePbU6a1L1PirP0ZuFsxZR1wUatWrdLrr7+uokWLql27dim2O3/+fJJllSpVkiT77UsS/3hn1L2uZ86c6XBe+/z583XixAk1adLEviwiIkKbN29WdHS0fdnixYuT3HYmPbU98sgjiouL06RJkxyWjxs3TjabzWH9d+KRRx7RyZMnHaZKx8bG6v3331eOHDlu6zzqAwcO6NixY0mWX7hwQT/99JNy5sxpP3rp7u6e5GjJ+++/r7i4uFTXkXjk5cbvtSxLEyZMSHe9TZo0UZ48eTR69GitXbs2w+53HBISorp16+qjjz7SiRMnkjx/8+3WypQpo/Lly2vOnDmaM2eO8ufP7/Am193dXa1atdLXX39tP1qc2uvd6MqVK0lu4RYREaGAgIBkb6OUnBu3RcuyNGnSJHl6eqpBgwYO7dq3b689e/bopZdekru7u8OHCrfj6tWrat++vc6fP69XX33V/ga5devWiouL0+uvv57ke2JjY5PsZ8ePH9c333xjfxwZGamZM2eqUqVKCg0NlZT89jhv3rwk52anJqPHoETp3Z7Syt/f/45rdcY4YsrHH3+smJgY++MPP/xQsbGxqY656f35b7WPtG7dWv/8848++eSTJOu6evWqfRp3y5Yt5e7urhEjRiTZbi3L0rlz5yQlbOuxsbEOz5cvX15ubm633P99fHx033336csvv9SxY8ccjpBfvXpVEydOVEREhPLnz5/q6yQnf/78qlSpkj777DOHbfC3337T8uXLU/0QJK3S2pcpcdb+DNytOEIOuIAlS5Zo3759io2N1alTp7Rq1Sr9+OOPCgsL07fffpvqbaZGjhypdevWqWnTpgoLC9Pp06f1wQcfqFChQqpVq5akhJARHBysKVOmKCAgQP7+/qpWrdptnespJRzNqFWrljp37qxTp05p/PjxKl68uMOt2Z577jnNnz9fDz/8sFq3bq1Dhw7p888/d7jIWnpra9asmerVq6dXX31Vf/75pypWrKjly5dr0aJF6tOnT5LXvl3dunXTRx99pE6dOmn79u0KDw/X/Pnz7UdtUjunPyW7du3S008/rSZNmujBBx9Urly59M8//+izzz7T8ePHNX78eHugfvTRRzVr1iwFBQWpbNmy+umnn7RixYpUb9UmSaVLl1ZERIQGDBigf/75R4GBgfr6669v69xYT09PtW3bVpMmTZK7u3uyF4pKzXvvvZfk9mxubm565ZVXNHnyZNWqVUvly5dX165dVaxYMZ06dUo//fST/v777yT3t27Tpo2GDh0qHx8fPfvss0mm2b/99ttavXq1qlWrpq5du6ps2bI6f/68duzYoRUrViT7oZWUcCS4QYMGat26tcqWLSsPDw998803OnXqVJoCs4+Pj5YuXaqOHTuqWrVqWrJkib7//nu98sorSaaGN23aVLlz59a8efPUpEkThYSEpKUbJSXcYz3xaH1UVJT27NmjefPm6eTJk+rfv7/DfZrr1Kmj7t27a9SoUfrll1/UqFEjeXp66sCBA5o3b54mTJigJ554wt6+ZMmSevbZZ7Vt2zbly5dPn376qU6dOqXp06fb2zz66KMaOXKkOnfurAceeEC//vqrZs+eneT8+dRUqlRJ7u7uGj16tC5evChvb2/Vr18/Xf2QkvRuT2lRpUoVffjhh3rjjTdUvHhxhYSE2K9bkFbOGEdudON2caMcOXKoefPmd/TaN4uOjrbvK/v379cHH3ygWrVq6bHHHkvxe9L7899qH2nfvr3mzp2r559/XqtXr1bNmjUVFxenffv2ae7cuVq2bJmqVq2qiIgIvfHGGxo8eLD+/PNPNW/eXAEBATpy5Ii++eYbdevWTQMGDNCqVavUs2dPPfnkkypZsqRiY2M1a9Ys+4d8t/Lggw/q7bffVlBQkMqXLy8p4QOiUqVKaf/+/erUqVP6O/r/vfPOO2rSpIlq1KihZ5991n7bs6CgIA0fPjxNr7Fy5cokHzhKUvPmzdPclylx5v4M3JUy8YruADJY4i1lEr+8vLys0NBQ66GHHrImTJjgcHutRDff9mzlypXW448/bhUoUMDy8vKyChQoYD311FPWH3/84fB9ixYtssqW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"/>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [29]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1">#left_df = df[df['left'] == 1][['salary', 'dept', 'last_eval', 'tenure', 'satisfaction', 'left', 'number_project', 'avg_mnth_hrs']]</span>
<span class="c1">#stayed_df = df[['salary', 'dept', 'last_eval', 'tenure', 'satisfaction', 'left', 'number_project', 'avg_mnth_hrs']]</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [62]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1">#df['dept'].unique()</span>
</pre></div>
</div>
</div>
</div>
</div>
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child jp-OutputArea-executeResult">
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[62]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>array(['sales', 'accounting', 'hr', 'technical', 'support', 'management',
       'it', 'product_mng', 'marketing', 'randd'], dtype=object)</pre>
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
<h3 id="Visualisations---Comparison-of-All-Employees-Vs-stayed-employees-vs-left-employees"><a id="toc2_2_2_"></a><a href="#toc0_">Visualisations - Comparison of All Employees Vs stayed employees vs left employees</a><a class="anchor-link" href="#Visualisations---Comparison-of-All-Employees-Vs-stayed-employees-vs-left-employees">¶</a></h3><p>Box plots of feature vs salary for all employees next to employees who left</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [116]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">plot_compare_company</span><span class="p">(</span><span class="n">var</span><span class="p">:</span><span class="nb">str</span><span class="p">):</span>

<span class="w">    </span><span class="sd">''' Violinplot, side by side comparison: All Company, employees who left, employees who stayed</span>
<span class="sd">     in : </span>
<span class="sd">        team : Str : Team name to analyse</span>
<span class="sd">        var  : dataset variable to plot</span>
<span class="sd">    '''</span>

    <span class="c1">#df[(df['left'] == 1)] # &amp; (df['dept'] == 'sales')]</span>

    <span class="c1">#left_df = df[(df['left'] == 1) &amp; (df['dept'] == team)][['salary', 'dept', 'last_eval', 'tenure', 'satisfaction', 'left', 'number_project', 'avg_mnth_hrs']]</span>
    <span class="n">left_df</span> <span class="o">=</span> <span class="n">df</span><span class="p">[(</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span> <span class="p">][[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>
    <span class="c1">#stayed_df = df[(df['left'] == 0) &amp; (df['dept'] == team)][['salary', 'dept', 'last_eval', 'tenure', 'satisfaction', 'left', 'number_project', 'avg_mnth_hrs']]</span>
    <span class="n">stayed_df</span> <span class="o">=</span> <span class="n">df</span><span class="p">[(</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">][[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>
    
    <span class="n">all_df</span><span class="o">=</span> <span class="n">df</span><span class="p">[[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>
    
    <span class="n">labels</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">]</span><span class="o">.</span><span class="n">unique</span><span class="p">()</span>
    <span class="c1"># Set the style of the visualization</span>
    <span class="n">sns</span><span class="o">.</span><span class="n">set</span><span class="p">(</span><span class="n">style</span><span class="o">=</span><span class="s2">"darkgrid"</span><span class="p">)</span>

    
    <span class="c1">#plt.figure(figsize=(8, 6))</span>
    <span class="n">fig</span><span class="p">,</span> <span class="n">axes</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">nrows</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">ncols</span><span class="o">=</span><span class="mi">3</span><span class="p">,</span> <span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">16</span><span class="p">,</span> <span class="mi">6</span><span class="p">),</span> <span class="n">sharey</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
    <span class="c1">#sns.barplot(x='dept', y='satisfaction', hue='salary', data=df, ci=None, estimator='mean', palette='colorblind')</span>
    <span class="c1"># sns.boxplot(x='dept', y=var, hue='left', data=df, palette='colorblind')</span>

    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">all_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - All Employees'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>
    <span class="c1">#plt.title(f'Employees who left, {var} by Department')</span>

    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">left_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - Employees who Left'</span><span class="p">)</span>

    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>

    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">stayed_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - Employees who Stayed'</span><span class="p">)</span>

    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>

    <span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>
    <span class="c1"># Show the plot</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>

<span class="n">varlist</span><span class="o">=</span> <span class="n">df</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="n">columns</span><span class="o">=</span><span class="p">[</span><span class="s1">'accident'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span><span class="s1">'promotion'</span><span class="p">])</span>
<span class="n">variables</span> <span class="o">=</span> <span class="n">varlist</span><span class="o">.</span><span class="n">columns</span>

<span class="k">for</span> <span class="n">var</span> <span class="ow">in</span> <span class="n">variables</span><span class="p">:</span>

    <span class="n">plot_compare_company</span><span class="p">(</span><span class="n">var</span><span class="p">)</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABi8AAAJICAYAAAAZ/HckAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAEAAElEQVR4nOzdd3hU1dbH8e+k905C7yQEQkcRAUFE7L1d22uvFBWRoldFRcEuTRABG4j0ElF6772XQOiB9Dq9nfePMLlGAoQwyZmZrM/z+KiTyZxfcpLsM2ftvbZGURQFIYQQQgghhBBCCCGEEEIIF+GldgAhhBBCCCGEEEIIIYQQQoh/kuKFEEIIIYQQQgghhBBCCCFcihQvhBBCCCGEEEIIIYQQQgjhUqR4IYQQQgghhBBCCCGEEEIIlyLFCyGEEEIIIYQQQgghhBBCuBQpXgghhBBCCCGEEEIIIYQQwqVI8UIIIYQQQgghhBBCCCGEEC5FihdCCCGEEEIIIYQQQgghhHApUrwQQgghhBBCCCGEEEIIIYRLkeKFEG4qISGBMWPGXPXnzZ8/n9tvv52WLVvSsWPHSkh2aRXN7Mr+/TXNnTuXhIQEzp49q2KqinHn7EIIUZlkzK0+tmzZQkJCAlu2bFE7issaMmQI7dq1UzvGVdu7dy//+c9/aNu2LQkJCRw6dEjtSEIIJ5FxuvqQcfrK3HWcdgVjxowhISFB7RjiX3zUDiCEuLQ1a9awd+9e+vXr55TXS01NZejQoXTr1o2XX36ZgIAAp7zuPzk7s5qmTZvGxx9/TOvWrZk1a5ZTX3vMmDGMHTv2kh9fv349NWrUcOoxhRBCXJqMuVVv7ty5DB069JIfnzFjBm3btq26QMKlDBkyhCVLlrBr165rfi2LxcKbb76Jn58fQ4cOJSAggNq1azNt2jQCAwN58MEHnZBYCFGZZJyuejJOiytZuXIlU6ZMITU1Fb1eT0xMDElJSTz00EPcdNNNAGRkZDBz5kx69epFYmKiyomFO5LihRAubM2aNUybNq3Mi529e/fi7e19Va+3detW7HY77733Hg0aNHBWzFKcnVlNycnJ1KlTh71793Lq1KlK+Z4NGzaMoKCgix4PCwtz+rGEEEJcmoy56unfvz9169a96PH69eurkEZ4otOnT5OWlsbw4cN55JFHSh6fPn06kZGRUrwQwg3IOK0eGadFWSZPnswXX3zB9ddfzyuvvEJAQACnTp1i06ZN/PXXXyXFi8zMTMaOHUudOnWkeCEqRIoXQrgpf3//q/6cnJwcAEJDQ50dp1wqklktZ86cYdeuXYwdO5YPPviA5ORk+vbt6/Tj3HbbbURFRTn9dYUQQjiPjLmV66abbqJVq1ZqxxAeLDc3F1Dv91EIUblknK5cMk6Lf7NarXz//fd06dKFKVOmXPRxx++XEM4ge14I4WRarZZPP/2Unj17kpSUROfOnXnuuec4cOBAyXO2b99O//796dGjB0lJSXTv3p3PPvsMo9FY8pwhQ4Ywbdo0oLgfpuMfh3/3yLzScXv27Fny/M6dO5f6/OXLl/Pyyy/TtWtXkpKS6NWrF+PGjcNms1309e3Zs4eXXnqJ6667jrZt23LPPffwyy+/VCgzwMGDB3nxxRdp37497dq145lnnmH37t2lnuPYi2HHjh2MGDGCG264gbZt29KnT5+SN6POlpycTHh4ON27d+e2224jOTm5Uo5zJY6enn/99Rdjx46lW7dutGvXjv79+1NUVITZbObTTz+lc+fOtGvXjqFDh2I2m0u9RkJCAh9//DELFy7ktttuo1WrVjz44INs27atXBmmTZvGXXfdRVJSEl27duWjjz6isLCw5OOjR4+mZcuWZZ6L999/n44dO2IymUoeW7NmDU888QRt27alXbt2vPzyyxw9evSiz01NTaV///5cf/31JZlXrFhR6jkWi4WxY8fSu3dvWrVqRadOnXj88cfZsGFDub42IYR7kzHXM8bcKzl79iwJCQlMnjyZadOmccstt9CmTRuef/55zp8/j6IojBs3jptuuonWrVvz2muvkZ+fX+o1evbsySuvvML69eu57777aNWqFXfeeSdLly4tV4a///6bBx98kNatW9OpUycGDhxIRkZGycfnzJlDQkICBw8evOhzJ0yYQGJiYqnn79mzhxdeeIEOHTrQpk0bnnrqKXbs2HHR52ZkZDB06FBuvPFGkpKSuOuuu5g9e/ZFz/vtt9+46667aNOmDddddx0PPvjgZa9dFEWhU6dOjBgxouQxu91Ox44dSUxMLDXOT5w4kRYtWqDT6S7K9vrrr9OuXTtuuOEGPv/884t+jvV6PSNHjqR79+4kJSVx2223MXnyZBRFuWS2q3Wl7+WQIUN46qmnAHjjjTdISEjg6aefpmfPnhw9epStW7eW/P48/fTTTsslhJBxWsZpGacdPG2czsvLQ6vV0r59+zI/Hh0dDRTfz3j44YcBGDp0aMnvwdy5c4Hy/f5X1rnbvn07Dz30EK1ataJXr1788ccfl/2ahXpk5YUQTvbhhx+yZMkSnnrqKZo0aUJ+fj47duwgNTWVli1bArB48WKMRiOPP/44ERER7N27l6lTp5Kens7o0aMBeOyxx8jMzGTDhg188cUX13zcd999l/nz57Ns2bKSVkWOi6d58+YRFBTEc889R1BQEJs3b2b06NFotVoGDx5ccowNGzbwyiuvEBsby//93/8RExNDamoqq1ev5plnnrnqzEePHuXJJ58kODiYF198ER8fH2bMmMHTTz/N1KlTadOmTannDx8+nLCwMPr27UtaWhq//PILH3/8Md999115T0+5JScnc+utt+Ln58fdd9/N9OnT2bt3L61bt3bqcQoKCi56zMfH56K2URMnTiQgIICXX36ZU6dOMXXqVHx8fNBoNBQWFtK3b1/27NnD3LlzqVOnzkWrRLZt28Zff/3F008/jZ+fH9OnT+fFF19k1qxZxMfHXzKfY2+OG2+8kccff5wTJ04wffp09u3bx/Tp0/H19eW+++5j3Lhx/PXXXyU3BwDMZjNLliyhd+/eJTOL5s+fz5AhQ+jatSsDBw7EYDAwffp0nnjiCebNm1eyHPno0aM8/vjjxMXF8dJLLxEUFMTff/9Nnz59GDNmDLfeeisAY8eO5YcffuCRRx6hdevWaLVa9u/fz4EDB+jSpUvFTooQwm3ImOsZY65Wq73ohotGoyEyMrLUY8nJyVgsFp5++mny8/OZNGkSb775JjfccANbtmzhpZdeKhkjP//881Jv+AFOnjzJW2+9xX/+8x8eeOAB5syZwxtvvMGkSZMuO2Y4en63atWKAQMGkJOTw6+//srOnTuZP38+YWFh3HbbbXz88cckJyfTokWLi3Jff/31xMXFAbBp0yZeeuklkpKS6Nu3LxqNhrlz5/LMM8/w+++/l1xrZGdn8+ijj6LRaHjyySeJiopi7dq1vPfee2i1Wp599lkAZs6cyfDhw7ntttv4v//7P0wmE0eOHGHPnj3cc889ZX5NGo2G9u3bl5rIcOTIEYqKivDy8mLnzp306NEDgB07dpCYmEhwcHDJc202Gy+88AKtW7dm0KBBbNq0iSlTplCvXj2eeOIJoPjGy2uvvVZy4yIxMZF169bxxRdfkJGRwbvvvnvJ73l5led7+dhjjxEXF8eECRN4+umnadWqFTExMRgMBj755BOCgoJ49dVXAYiJibnmTEKI/5FxWsZpGac9c5yOjo4mICCAlStX8tRTTxEREVHm85o0aUL//v0ZPXo0jz32GB06dAAoKXqU5/e/Ms7dkSNHeOGFF4iKiqJfv35YrVbGjBlTUnQRLkYRQjhVhw4dlI8++uiyzzEYDBc99sMPPygJCQlKWlpayWMfffSREh8fX+ZrxMfHK6NHj76q444ePVqJj49XcnJyrpjn/fffV9q0aaOYTCZFURTFarUqPXv2VG6++WaloKCg1HPtdnuFMr/++utKy5YtldOnT5c8lpGRobRr10558sknSx6bM2eOEh8frzz77LOljvXZZ58piYmJSmFh4WW/7qu1b98+JT4+XtmwYYOiKMVf30033aQMHz78il+TI+uZM2cuewzHuSjrn9tuu63keZs3b1bi4+OVu+++WzGbzSWPDxgwQElISFBefPHFUq/72GOPKTfffPNFGePj45V9+/aVPJaWlqa0atVK6dOnzyWz5+TkKC1btlSef/55xWazlTxv6tSpSnx8vDJ79uxSx33kkUdKHXfp0qVKfHy8snnzZkVRFEWr1SodO3ZU/vvf/5Z6XlZWltKhQ4dSjz/zzDPK3XffXfLzpyjF5+Gxxx5TevfuXfLYvffeq7z88ssXfX+FENWDjLnuPeY6jlXWP0lJSSXPO3PmjBIfH6/ccMMNpY7/9ddfK/Hx8cq9996rWCyWkscHDBigtGzZstQYcvPNNyvx8fHKkiVLSh4rKipSunTpotx///0ljznGXcfYZTablc6dOyt33323YjQaS563atUqJT4+Xhk1alSp43bt2rXUmHngwAElPj5emTNnjqIoxeevd+/eyvPPP1/q+2swGJSePXsqzz33XMlj7777rtKlSxclNze31PftrbfeUjp06FDys/Taa68pd9111xW/3/82adIkJTExUSkqKlIURVF+/fVX5eabb1Yefvhh5csvv1QURVFsNpvSsWNH5bPPPiv5vMGDByvx8fHK2LFjS73e/fffrzzwwAMl/79s2TIlPj5e+f7770s9r1+/fkpCQoJy6tSpy+YbPHiw0rZt20t+/Gq+l47z+vfff5d6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1pdffqnt27erbdu2p93v+eefV5s2bTRkyBCZzWa9++67+u1vfyuv16uf/exnpz2usLBQL7/8skaPHq3JkyerqKhIr7zyim644Qa9/PLLat++fa39X331VZWVlemKK66Q1WpVUlKShg0bpjfffFN33nmnTCZTzb7//Oc/5fV6NWbMmPr/RQAAECao7QAAhBdqOwBfMXi9Xm+gQwDAufroo480c+ZMSVKXLl3Us2dP9evXT3369JHFYqnZr7S0VHa7vdaxM2bM0N69e7V+/fqabdVzbT733HOSpKqqKlVVVdUaQpqfn69Ro0bpoosu0uLFiyWduINj6NChcrvdWrdunZo0aVKz/4cffqgZM2bo6aef1qBBg2q2jx07VlFRUTXPBQAAqO0AAIQbajsAX2HaKAAhZcCAAXrhhRc0ZMgQbd26Vf/3f/+nGTNmaNCgQXr77bdr9vvxBVBBQYFyc3PVu3dv7d+/XwUFBac9v8lkqrkA8ng8On78uCorK9WpUyd99913J+1/ySWX1LoAkqT+/fsrISFBa9asqdm2fft2bdu2TWPHjq3zawcAIBxR2wEACC/UdgC+wrRRAEJOly5dtHLlSpWXl2vr1q1av369Vq1apVtuuUV///vf1bp1a33xxRdasWKFvvrqK5WUlNQ6vqCgQBEREac9/2uvvaZnn31We/bsUUVFRc325s2bn7TvqbYZjUaNGTNGzz//vEpKSuRwOLRmzRrZbDaNHDmyHq8cAIDwRG0HACC8UNsB+ALNCwAhy2q1qkuXLurSpYtatmypO++8U2vXrtXYsWM1ffp0paamasGCBUpMTJTFYtH777+vVatWyePxnPac//jHP7RgwQINGzZMM2bMUGxsrEwmk5588knt37//pP1/OsS12rhx4/TMM89o/fr1Gj16tP75z39q8ODBZ7z4AgCgsaO2AwAQXqjtAOqD5gWAsNCpUydJUlZWlt555x2Vl5fr97//vZKSkmr22bhx41nP89ZbbyklJUUrV66UwWCo2b58+fLzytO2bVt16NBBa9asUbNmzXTo0CHdfffd53UOAAAaM2o7AADhhdoO4Hyx5gWAkLJhwwZ5vd6Ttr///vuSpNTUVJlMJkmqtV9BQYFWr1591vOf6tjNmzfrq6++Ou+sl19+uT766CP96U9/UnR0dK1FwAAAwAnUdgAAwgu1HYCvMPICQEhZtGiRSkpKNHz4cKWmpqqiokKbNm3Sm2++qeTkZE2YMEFHjx6VxWLRz3/+c1111VUqKirSyy+/rNjYWGVnZ5/x/IMHD9a///1vzZkzR4MHD9aBAwf0wgsvqHXr1iouLj6vrKNHj9bDDz+sdevWacqUKbJYLPV56QAAhCVqOwAA4YXaDsBXaF4ACCl33HGH1q5dq/fff18vvviiKioqlJSUpKlTp+rGG29UZGSkIiMjtXz5cj3++ON66KGHFBcXpylTpqhJkyZauHDhGc9ffRH14osv6sMPP1Tr1q318MMPa+3atfr000/PK2tcXJwGDBig999/X5dffnl9XjYAAGGL2g4AQHihtgPwFYP3VOO4AAA+MWfOHG3fvl3r1q0LdBQAAOAD1HYAAMILtR0IXqx5AQANJCsri7s3AAAII9R2AADCC7UdCG5MGwUAPrZ//35t2rRJr7zyisxms6688spARwIAAPVAbQcAILxQ24HQwMgLAPCxzz77THfccYcOHDigJUuWKD4+PtCRAABAPVDbAQAIL9R2IDSw5gUAAAAAAAAAAAgqjLwAAAAAAAAAAABBheYFAAAAAAAAAAAIKjQvAAAAAAAAAABAUKF5AQAAAAAAAAAAggrNCwAAAAAAAAAAEFRoXgAAAAAAAAAAgKBC8wIAAAAAAAAAAAQVmhcAAAAAAAAAACCo0LwAAAAAAAAAAABB5f8Bh8RKBm//GoQAAAAASUVORK5CYII="/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABjAAAAJICAYAAADPWa1BAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAEAAElEQVR4nOzdd3gU5drH8e9ueu+0QOgJvYNSBMHej76WY8HeFbBSFFERpQgWFAEB6b333nvvnVACIUD69j7vHzE5RloCm8wmuT/XxaXMzs78srvk2Zn7KRpFURSEEEIIIYQQQgghhBBCCCE8iFbtAEIIIYQQQgghhBBCCCGEEP8mBQwhhBBCCCGEEEIIIYQQQngcKWAIIYQQQgghhBBCCCGEEMLjSAFDCCGEEEIIIYQQQgghhBAeRwoYQgghhBBCCCGEEEIIIYTwOFLAEEIIIYQQQgghhBBCCCGEx5EChhBCCCGEEEIIIYQQQgghPI4UMIQQQgghhBBCCCGEEEII4XGkgCGEEEIIIYQQQgghhBBCCI8jBQwh3GzOnDkkJCRw4cIFtaN4jM6dO9O5c2fVzn+t90TtTLejJGcXQoiiJu3w1cpKu9GzZ086deqkdgyPlpCQQN++fdWOUWijR4/mnnvuoW7dujzxxBNqxxFCuJG021eTdlvkKqnttifo1KkTPXv2VDuGcBNvtQMIIQpnxIgR1KpVi3vvvVftKB7j6aef5uDBg3z99de88MILbj12p06dSE5OvuZj7dq1Y8yYMW49nxBCCM8m7XCOzp07s2PHjms+Vr16dZYtW1bMiYQnSUhI4MUXX6RPnz63faxNmzbx448/8vjjj9OlSxciIiK4fPkyM2bM4N5776Vu3bpuSCyEKK2k3c4h7ba4EaPRyJgxY1ixYgUXLlzAz8+PChUq0LJlS9566y3Kly8PwPr16zlw4ABdunRRObEoa6SAIUQJM3LkSB544IEy/wUs19mzZzl48CCxsbEsXLjQ7QUMgLp16/Laa69dtb1cuXJuP5cQQgjPJu3w/1SoUIFPPvnkqu0hISEqpBGl1bZt29BqtXz//ff4+voCcPDgQX7//XdiY2OlgCGEuCFpt/9H2m1xLXa7nZdeeonTp0/zn//8h5deegmTycTJkydZtGgR9913X74CxuTJk6WAIYqdFDCEECXaggULiIqKomfPnnTt2pULFy5QuXJlt56jfPnyMl2BEEII8S8hISHSPooil56ejr+/f17xQgghxK2Rdltcy6pVqzhy5AiDBw/msccey/eY1WrFbrerlEyI/5E1MIQoBqtWreLtt9+mXbt2NGjQgHvvvZdhw4bhdDrz7Xf27Fm6dOlC27ZtadiwIe3bt+fjjz9Gr9cDOcPxTSYTc+fOJSEhgYSEhELN6edyuRg3bhyPPPIIDRs2pE2bNvTp04fs7Oy8fd555x3uueeeaz7/ueee46mnnsr7++zZs3n55Zdp3bo1DRo04OGHH2bKlCmFeWlu26JFi3jggQe4++67CQkJYdGiRcV6/lw9e/akadOmXLx4kXfeeYemTZty1113MXnyZACOHz/Oyy+/TJMmTejYsSMLFy7M9/zcuV937txJnz59uOOOO2jWrBndu3fP9/5cT3p6Ol988QVt2rShYcOGPP7448ydOzfvcUVR6NSpE++9995Vz7VarTRv3jzfNA82m42hQ4dy33330aBBAzp06MCgQYOw2WxXPX/+/Pk89dRTNGrUiFatWvHxxx+TkpKSb5+bfbaFEKIoSTusnt9++42EhATOnDnDZ599RvPmzbnzzjv55ZdfUBSFlJQU3nvvPZo1a0bbtm3566+/8j1/+/btJCQksGTJEn766Sfatm1LkyZNePfdd69qa67FZDIxYMAAOnToQIMGDXjggQcYM2YMiqLk7fPSSy/x+OOPX/P5DzzwAG+88Ube3wvyHuZav349L7zwAk2aNKFp06a8/fbbnDx5Mt8+qamp9OrVi/bt29OgQQPatWvHe++9d8O54FevXk1CQgLHjh3L27Z8+XISEhL48MMP8+370EMP8dFHH111jFWrVvHoo4/SoEEDHnnkETZs2HDVPkeOHOHNN9+kWbNmNG3alFdeeYV9+/ZdN1dhFeS1TEhIYM6cOZhMprx/c3PmzOHpp58GoFevXvm2CyFKB2m31SPtdtlrt8+fPw9As2bNrnrMz8+P4OBgIOeeR+79jdx/TwkJCXn7jhkzhv/+97/ccccdNGrUiKeeeuqqqcmK4r1TFIU//viD9u3b07hxYzp37nzV+yZKPhmBIUQxmDt3LoGBgbz22msEBgaybds2hg4disFgoEePHkDODeM33ngDm83GSy+9RHR0NJcvX2bdunXodDpCQkIYNGgQvXv3plGjRjz77LMAxMXFFThH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KTRv3px77rnnus957rnnmD59Oj179uTw4cPExsayfPnyvNEV//6y0qFDB8LDw1m2bBnt27cnKioq3+NPPPEES5cu5euvv2b79u00a9YMp9PJ6dOnWbZsGaNHj6Zhw4bExcXx0UcfMWTIEJKTk7n33nsJCgriwoULeb0o3njjjQJ/toUQoihIO1x09Hr9NdtHIN88xu4QFhbGCy+8wFNPPUV6ejrjx4+natWqPPvss9d9TqdOnbjjjjv4+eefSU5OJiEhgc2bN7N69WpeeeWVfAtiAtSrV4/4+HiWLVtGzZo1r7qJUND3MDg4mG+++Ybu3bvz1FNP8fDDDxMZGcnFixdZv349zZo1o0+fPpw9e5ZXX32VBx98kFq1auHl5cWqVatIS0u7qnPBtbRo0YKFCxei0WjyboR4eXnRtGlTNm3aRKtWrfL1giyMjz76iC1btvDCCy/wwgsv4OXlxfTp07HZbHz++ecFOsahQ4eueeOhVatWhf738G9xcXGEhoYybdo0goKCCAwMpFGjRvl6XwohSiZpt4uOtNvSbl/L5s2b+e233+jUqRONGzcmMDCQCxcuMHv2bGw2G126dMnbN/c17tevH+3atcvrENmhQwfGjh3Lm2++yaOPPkp6ejpTpkwhLi6O48ePX3VOd713kZGRvP7664wcOZJ33nmHDh06cOTIETZs2EBERMQtvZbCM0kBQ4giFhERwYgRIxg4cCC//PILoaGhPP7447Ru3Zo33ngjb7+EhATatWvH2rVruXz5MgEBASQkJDBq1CiaNGmSt1/Pnj3p06cPv/zyCxaLhSeffLJAX8AA+vbtS4MGDZg2bRo///wzXl5exMbG8vjjj9OsWbN8+/r5+dGpUycWLlxImzZtrrrJXaNGDYYOHcovv/zCwIEDiY6O5vnnnycyMvKqKYncKT09na1bt/LII49cdy7I1q1bExAQwIIFC9xSwDh69Cjdu3e/antsbKzbCxh9+vRh4cKFDB06FLvdziOPPELv3r1vOFWCv78/EydOZPDgwcydOxeDwUD16tXp378/Tz311FX7+/r68vDDDzNlypRrflHVarUMGzaMcePGMX/+fFauXElAQACVK1emc+fO+XpgvP3221SrVo1x48YxbNgwIGeNjLZt29KpUyeg4J9tIYQoCtIOF51Lly5ds30E998Ieffddzl+/Dh//vkn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lZaW6sYbb9TRo0fV0tKiO++8UxUVFVqzZo3+8z//c9i5//u//6uNGzeqtLRUixYt0l/91V+pq6tr2DH79u3TjTfeqJKSEq1Zs0avvfbaiBi+PN301VdfVUFBgZqamoYdd8UVV2jLli0BiR3Tz44dO3TllVeqrKxMX/nKV/Tpp5/69315yqjX69WTTz6ppUuXqry8XN/73vf0zjvvqKCgQDt27Bh23YGBAT3xxBNasmSJFi5cqPvuu2/E+xwIJXI9zhe5HtMFuR6RglyP80Gex3RCrg9/zMDApNTW1urGG29Udna2HnnkEfX29urHP/6xbrzxRv36179WTEyMqqur9frrr6u3t1cOh0Pvvfee7Ha7Pv/8c3V0dCgmJkYffPCB+vr6VF1dbfSPhBBpaGjQQw89pFtvvVVWq1UPPPCA7rnnHrlcLlVVVenaa6/Vr371K917771asGCBMjMz9eabb+quu+7S1Vdfre9+97tqaGjQo48+qra2Nv34xz+WJPX29uqb3/ymXC6XHn74YUnS448/ro6ODuXk5BgWO6afhoYGPfDAA7rlllsUGxurRx99VHfccYe2bt0qm8024vjnn39eTz75pG6++WYtWrRI27dv1/333z/qtX/xi1+osrJSDz30kA4ePKiHH35YiYmJuueee4L9YwEjkOsxUeR6THXkekQKcj0mgjyP6YBcPzVQwMCkPPfcc+rr69Ozzz6r+Ph4SVJRUZEuvfRSvfbaa9q0aZOqqqrk8Xj00UcfqaamRjt37tTatWv19ttva9euXVqxYoV27typnJwcJSUlGfsDIWRaW1v1r//6r8rLy5Mk1dfX62//9m/1rW99S7fffrskqaSkRFu3btVbb72lm266SQ8//LDWr1+vv/u7v/NfJzk5Wbfccotuu+025eXl6dVXX1V9fb3eeOMN/83NvHnzdMkllwTsZud8Y//a174WkO+L8PLl94HL5dJNN92kjz76SFVVVcOO7e/v19NPP62rr77af7OybNkyNTc36+WXXx5x7eTkZD366KOSpBUrVuizzz7Tb3/7W250YAhyPSaKXI+pjlyPSEGux0SQ5zEdkOunBlpIYVLee+89LVy40H+TI0lz585VYWGh3n//fUlSdna20tLStHPnTv85NTU1qqqqGraNURqRJSUlxZ8gJPlvRJYsWeLf5na7lZCQoLq6Oh04cEDHjh3TunXr1NfX5/9TU1Mjs9nsn+L38ccfKy8vb9iNzaxZs1RYWGhY7Jievvw+yM3NlSSdOHFixLF1dXVqaGjQ6tWrh22/8MILR7320PeSNPh7lfcSjEKux0SR6zHVkesRKcj1mAjyPKYDcv3UwAwMTEpbW5uKiopGbE9MTFRra6v/6+rqar333nvq6OjQ7t27VVVVpe7ubr355pvyeDz6+OOPtXHjxlCGDoO53e5hX/um5sXGxg7bbrfb1dvbq+bmZknyj4b4straWkmDIycSExNH7E9MTFRvb++k45bOP3ZMT2O9D0b7b97Q0CBJSkhIGLZ9tPfqWNf2eDwTjhWYDHI9Jopcj6mOXI9IQa7HRJDnMR2Q66cGChiYlLi4ODU2No7Y3tjYOKxaXl1drYceekg7duzQjBkzNHfuXHV3d+tHP/qRtm/fLo/HM2JqFjCUbzTQX/7lX6q0tHTE/pSUFP/ff/rTn0bsb2xsVExMzJjXdzgckqRTp04N297W1jbRkAG/5ORkSRqxoNxovz+BcEOuR6iQ6zGVkesxlZHrEQrkeUx15Hrj0EIKk1JZWant27cPG5Wxf/9+7dmzR5WVlf5tVVVV6urq0nPPPee/oSkqKpLD4dDPfvYzpaenKysrK+TxY+qYM2eO0tLSdOTIEZWUlIz4k5qaKmmwT+Wf//xnHTp0yH/uoUOHtHv37rNe33f+/v37/dv27dvnHwUCTEZaWpqSk5P1u9/9btj2t956y6CIgPEj1yNUyPWYysj1mMrI9QgF8jymOnK9cZiBgUn5+te/rldffVXf/OY3deutt6q3t1ePPfaY0tPTddVVV/mPmzt3rhITE/Xuu+/q/vvvlyRZLBZVVFTo97//vS677DKjfgRMESaTSVu2bNE999yjrq4urVq1Si6XS8ePH9e2bdt01113afbs2br66qv105/+VN/+9rd15513SpIef/zxcy4kt2DBAqWnp+vBBx/U3XffrY6ODj399NPD+sACE2WxWHTLLbfowQcfVFJSkhYuXKgdO3boj3/8oyTJbGY8AcIXuR6hQq7HVEaux1RGrkcokOcx1ZHrjcO/LCYlPT1dzz//vOLi4nTPPffohz/8oQoLC/X888+PmNrnG6ExdFEv32sW+sJ4rFu3Tk8//bQOHDigu+++W7fddpt+/vOfKzMz038z43Q69eyzzyoxMVH33nuvfvSjH+nmm29WSUnJWa9ts9n05JNPyuFw6M4779RTTz2l++67zz+KA5isTZs26Y477tArr7yiO+64Q1988YXuvfdeSSN7rQLhhFyPUCLXYyoj12OqItcjVMjzmOrI9cYweb1er9FBAAAQiR577DH9/Oc/144dO+R0Oo0OBwAABBi5HgCA6Y1cH3y0kAIAIAT27dunX//61yovL5fNZtO7776rZ555Rtdffz03OQAATAPkegAApjdyvTEoYAAAEAJOp1MffPCBXnjhBXV2dio1NVWbN2/Wd7/7XaNDAwAAAUCuBwBgeiPXG4MWUgAAAAAAAAAAIOywiDcAAAAAAAAAAAg7FDAAAAAAAAAAAEDYoYABAAAAAAAAAADCDgUMAAAAAAAAAAAQdihgAAAAAAAAAACAsEMBA8C0tGnTJm3atMnoMAAAQJCQ6wEAmN7I9QAkyWp0AADgs2fPHv3DP/yDPvnkE508eVLx8fHKzc3V6tWruWkBAGAaINcDADC9kesBBBoFDABhYdeuXbrpppuUkZGhjRs3Kjk5WbW1tfroo4/0L//yL9zoAAAwxZHrAQCY3sj1AIKBAgaAsPCP//iPio2N1csvvyy32z1sX2Njo0FRDerr69PAwIDsdruhcQAAMJWR6wEAmN7I9QCCgTUwAISFw4cPKzc3d8RNjiQlJib6X7/yyiu66aabtHjxYhUXF2v9+vX6t3/7t3Ne3+Px6Cc/+YmuvvpqVVZWqqysTDfccIO2b98+7LijR4+qoKBAzzzzjJ577jmtWbNGJSUl+vjjj1VWVqYHHnhgxLXr6upUVFSkp556agI/OQAAkYFcDwDA9EauBxAMzMAAEBYyMzP1wQcfaO/evcrPzx/zuBdeeEF5eXlavXq1rFar/ud//kd//dd/La/Xq69+9atjntfR0aGXXnpJGzZs0MaNG9XZ2amXX35ZN998s1566SUVFRUNO/7VV19Vb2+vrr32WtntdmVkZGjNmjV64403dN9998lisfiP/c1vfiOv16vLLrts8v8QAABMU+R6AACmN3I9gGAweb1er9FBAMAf/vAHfetb35IklZaWqrKyUosXL9bChQtls9n8x/X09MjpdA47d/PmzTp06JDeeust/zZfb83nn39ektTf36/+/v5h00Xb2tq0bt06rVy5Ug8++KCkwZEaF154oWJiYrR161YlJCT4j3/77be1efNm/exnP9OKFSv82y+//HLFxcX5vxcAABiJXA8AwPRGrgcQDLSQAhAWli5dql/+8pdavXq1du/erX/6p3/S5s2btWLFCv3ud7/zHzf0Jqe9vV1NTU2qqanRkSNH1N7ePub1LRaL/yZnYGBALS0t6uvrU3FxsT777LMRx1900UXDbnIkacmSJUpJSdHrr7/u37Z3717t2bNHl19++YR/dgAAIgG5HgCA6Y1cDyAYaCEFIGyUlpbqySeflMfj0e7du/XWW2/pueee05133ql///d/V25urt5//3098cQT+vDDD9Xd3T3s/Pb2dsXGxo55/ddee03PPvusDhw4oFOnTvm3Z2VljTh2tG1ms1mXXXaZXnjhBXV3d8vlcun111+Xw+HQJZdcMomfHACAyECuBwBgeiPXAwg0ChgAwo7dbldpaalKS0uVk5Oj++67T2+++aYuv/xyff3rX9ecOXO0ZcsWpaeny2azadu2bXruuec0MDAw5jX/4z/+Q1u2bNGaNWu0efNmJSYmymKx6KmnntKRI0dGHP/l6aw+V155pZ555hm99dZb2rBhg37zm99o1apVZ73BAgAAw5HrAQCY3sj1AAKFAgaAsFZcXCxJqq+v13//93/L4/Hopz/9qTIyMvzH7Nix45zX+e1vf6vs7Gw9+eSTMplM/u2PP/74ecWTn5+vefPm6fXXX1daWpqOHz+u+++//7yuAQAAziDXAwAwvZHrAUwGa2AACAvbt2+X1+sdsX3btm2SpDlz5shisUjSsOPa29v1yiuvnPP6o5370Ucf6cMPPzzvWK+44gr94Q9/0D//8z8rPj5+2MJfAABgdOR6AACmN3I9gGBgBgaAsPDAAw+ou7tba9eu1Zw5c3Tq1Cnt2rVLb7zxhjIzM3X11Vfr5MmTstls+s53vqPrrrtOnZ2deumll5SYmKiGhoazXn/VqlX6r//6L91+++1atWqVjh49ql/+8pfKzc1VV1fXecW6YcMGPfLII9q6dauuv/562Wy2yfzoAABEBHI9AADTG7keQDBQwAAQFr7//e/rzTff1LZt2/Tiiy/q1KlTysjI0A033KBbb71Vbrdbbrdbjz/+uB577DH9/d//vZKSknT99dcrISFBP/jBD856fd+N0osvvqi3335bubm5euSRR/Tmm2/q3XffPa9Yk5KStHTpUm3btk1XXHHFZH5sAAAiBrkeAIDpjVwPIBhM3tHmdgEAzur222/X3r17tXXrVqNDAQAAQUCuBwBgeiPXA1MDa2AAwHmqr69nlAYAANMYuR4AgOmNXA9MHbSQAoBxOnLkiHbt2qWXX35ZVqtVf/EXf2F0SAAAIIDI9QAATG/kemDqYQYGAIzTzp079f3vf19Hjx7VQw89pOTkZKNDAgAAAUSuBwBgeiPXA1MPa2AAAAAAAAAAAICwwwwMAAAAAAAAAAAQdihgAAAAAAAAAACAsEMBAwAAAAAAAAAAhB0KGAAAAAAAAAAAIOxQwAAAAAAAAAAAAGGHAgYAAAAAAAAAAAg7FDAAAAAAAAAAAEDYoYABAAAAAAAAAADCDgUMAAAAAAAAAAAQdv4/aJWe4gSAOpEAAAAASUVORK5CYII="/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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lmVkZHgtLqJAxra8c2zLvY9tefC15UVFRRg+fHibHQhiY2M9f2dkZMBkMuG7775r0U4DQGlpKV544QVce+21GD9+PKZNm4ZHH320xb0RX7135eXl+O1vf4uJEydixowZePXVV1u9b+QbHIFBfdbvf/97pKWl4YknnkBeXh6++eYbxMTE4A9/+EOP9/n4449j2LBhePLJJ/HDDz/gP//5D6KiovDVV19h+vTpeOqpp7B8+XL84x//wLhx43DxxRe32P4///kPFAoFHnzwQVRXV+Ozzz7Dz372MyxduhR6vR6A6wbxgw8+iLFjx+KRRx6BQqHAkiVLcP/99+PLL7/E+PHjW+zzsccew6BBg/D44493qRHubjwAUFdXhwcffBA33HADbr75ZsTGxsJisWDu3LkoKirCPffcg7S0NKxZswbPPPMMGhoacP/997d73KqqKtx+++1QKBS45557EBMTg61bt+L5559HU1MTfvaznwEAnE4nfv3rX2PXrl244YYbcN9998FoNGLHjh0oKCjAzJkz8cILL+CFF17AnDlzMGfOHADw+o/J5cuXY+DAgRg/fjzS09Oh1+uxYsUKPPDAA149jtFobLPxj46OhkKh8Dzeu3cvNm3a5Pky/eGHH+Khhx7CAw88gC+//BJ333036uvr8dFHH+G5557D559/3mJ/9fX1+NWvfoXrrrsON9xwA1avXo0XXngBGo0GP/3pT9uNb+fOnXjwwQeRlpaGRx55BBaLBfPnz8ddd92FJUuWIC0tDdOmTUNycjKWL1/ueT/c3OfxoosuAgAcO3YMd911FxITE/Hggw8iJCQEq1evxsMPP4x33nnHs73ZbMa9996LiooK3HnnnUhOTsa+ffvw5ptv4uzZs3j++ecBuL7APfHEE5gxYwaeeuopAMCJEyeQk5PT4fVIRP7BdrlzbJe7xmw2t9leRkREQK0+9/Pl9OnTePLJJ3HnnXfi5ptvxscff4yHHnoIL774Iv71r3/hrrvuAuBqR3//+99jzZo1UCrP9d9yOp144IEHMGHCBPzhD3/Atm3b8M4778DpdOKxxx5rN75jx47hnnvuQWhoKB544AGo1WosWrQIc+fOxfz58zFhwgQMGDAAkyZNwrJlyzzn12358uUIDQ311Ajv6vsjSRJ+85vfIDs7G7fffjuGDRuGgoICfPbZZzh16hTee+89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cMstt+Af//iHF18dEfUE22XvCdZ2ubv6Snu5Zs0a5OTkID09HZs2bcJdd93luba78/5IkoT09HQ8++yzba7nvtmj1+uxYMECZGVlYcuWLdi2bRtWrVqFRYsW4eOPP273/ADApEmT8P7778NqtWLv3r146KGHEBERgREjRiA7O9szwWZbNz06+wzwNTmvdaL+gm2597At7xq25S0FU1uu1Woxfvx4jB8/HoMHD8azzz6LNWvW4JFHHulwu5dfftkzx83EiRMRHh4OhULR5pw23nzvSF5MYFC/5e5hcWGGvr1eDd7g7sHvJoTA6dOnPR947p4BYWFhXeqN4Ot4OpKamoqjR49CkqQWjdiJEycAtM7Mu8XExCA0NBSSJHX6GgcOHIgDBw7Abre3O9FTd5IH8fHx+OSTT1osGzlyZLvrr1u3DlarFS+88AKio6NbPHfy5Em89dZbnh4LfUllZaVntISbu2dSampqm9u438+TJ0+2eu7EiROIjo5usb/rr78ef//737FixQpYLBZoNBpcd911nufd17pGo+nSdWAymbr0b0Kr1WL27NmYPXs2JEnCCy+8gEWLFuG3v/1tq95QRBRY2C6zXQY6bpf9TZIkFBcXt+g5524H22svY2JiYDAY2m0vlUpli96kl156KWJiYrB8+XJMmDABZrPZM2m0e3/deX/y8/MxY8aMTt8HpVKJGTNmYMaMGXj22Wfx/vvv41//+heysrI6PM6UKVNgt9uxYsUKVFRUeL4DXXzxxdi7dy9iY2MxePBgxMXFdXj8triv0RMnTrToLWuz2VBSUtLrf4PdOZft8XenFaK+hm0523KAbTnbcu+35WPHjgXgupfRmbVr1+KWW27BM88841lmtVpbjL5w8+Z7l5qaioKCAgghWrx3bV1H5H2cA4P6rbCwMERHR3uGzrl9+eWXPjvm999/36I+6Jo1a3D27FlPiZuxY8di4MCB+Pjjj2E0Gltt7+1h7Z3F05HLLrsMZ8+exapVqzzLHA4HvvjiC4SEhODiiy9uczuVSoVrr70Wa9euRUFBQavnz3+N11xzDWpra7FgwYJW67kz5waDAUDrL8lt0el0mDlzZov/Lpxf4nzLli3DgAEDcNddd+FHP/pRi/9++ctfIiQkpEW9xL7C4XC0GP5os9mwaNEixMTEYMyYMW1uk5CQgFGjRuH7779vca4LCgqwY8cOXH755S3Wj4mJwaWXXoply5Zh+fLluOSSS1oMA4+NjcXUqVOxaNGiNr+EnH8dXHfdddi3bx+2bdvWar2GhgY4HA4AQG1tbYvnlEql54eCzWZr93wQUWBgu8x2ubN2WQ7nv1YhBBYsWACNRtNuaQeVSoVZs2Zh48aNKCkp8SyvqqrCihUrMHny5BZlVtRqNW644QasXr0aS5YsQXp6eosbP915f6677jpUVFTg66+/brWexWKByWQCgDZLsLh7JXfWXk6YMAEajQb//e9/ERUVhREjRgAAJk+ejAMHDmDPnj097tgxc+ZMaDQafPHFFy16SC5evBiNjY2tvmt0V3fOZXu6c30TBSO25WzL2ZazLe9NW56ZmdnmaA733Bnnl6YKCQlp8xpta/TJF1980eZIMG++d5dddhkqKytbzAVqNpvbfC/J+zgCg/q12267DR9++CGef/55jB07Fnv37vVpdjQyMhJ33303br31VlRXV+Ozzz7DoEGDPJP6KJVKvPLKK3jwwQdx44034tZbb0ViYiIqKiqQlZWFsLAwvP/++36LpyN33HEHFi1ahGeeeQa5ublITU3F2rVrkZOTg+eee67DGqhPPvkksrKycPvtt+O2227D8OHDUV9fj9zcXOzatQu7d+8G4BrO9/333+O1117DwYMHMXnyZJjNZuzatQt33XUXrr76auj1egwfPhyrV6/G4MGDPQ1wenp6r86N+5zPnTu3zee1Wi0uvfRSrFmzBn/605/a7b3SHXv37oXVam21PCMjw6u9WBISEvDf//4XpaWlGDx4MFatWoUjR47g5Zdf7vB1/PGPf8SDDz6IO+64Az/96U9hsVgwf/58hIeHtzmM85ZbbsGjjz4KAHjsscdaPf/Xv/4Vd999N2666SbcfvvtGDBgAKqqqrB//36Ul5dj2bJlAIBf/vKX2LRpEx566CH85Cc/wZgxY2A2m1FQUIC1a9di48aNiImJwZ/+9CfU19dj+vTpSExMxJkzZzB//nyMGjXKUzeWiAIb22W2y12Rl5eHpUuXtlo+cODAFhN99pZOp8O2bdvw9NNPY/z48di2bRu2bNmChx56qFVt9vP9/ve/x86dO3H33Xfj7rvvhkqlwqJFi2Cz2fCHP/yh1fq33HILvvjiC2RlZeGpp55q9XxX358f//jHWL16Nf76178iKysLkyZNgtPpxIkTJ7BmzRp89NFHGDduHN59913s3bsXl19+OVJTU1FdXY0vv/wSSUlJbU7YeT6DwYAxY8Zg//79uPLKKz09DC+++GKYTCaYTKYe3/SIiYnBr3/9a8ybNw8PPPAAZs+ejZMnT+LLL7/EuHHjPBNqdubbb79ts9PDfffd1+Vz2R53R49XXnkFl1xyCVQqFW644Ybuv1iifoxtOdvyrmBbzra8La+88grMZjPmzJmDoUOHwm63IycnB6tXr0ZqamqLie/HjBmDXbt24ZNPPkFCQgLS0tIwYcIEXHHFFVi6dCnCwsIwfPhw7N+/Hzt37kRUVFSbx/TWe3f77bdjwYIFePrpp5Gbm4v4+HgsXbrUq+XiqH1MYFC/9vDDD6OmpgZr167F6tWrcdlll+Gjjz5qNxPfWw899BCOHj2KDz/8EEajETNmzMBf//pXTw8HAJg2bRoWLVqE9957D/Pnz4fJZEJ8fDzGjx+PO+64w+/xtEev1+OLL77A//3f/+G7775DU1MThgwZgtdee61Fo9KWuLg4fPPNN3j33Xexfv16LFy4EFFRURg+fHiLBkOlUuG///0v/vOf/2DFihVYt24doqKiMGnSpBZDcF955RW8/PLLeO2112C32/HII4/0+svVqlWrIEkSrrzyynbXufLKK7F27Vps3bq1Vd3Pnvjiiy/aXP7II494NYERGRmJv//973jllVfw9ddfIy4uDn/5y186/VI9c+ZMfPTRR3j77bfx9ttvQ61W4+KLL8Yf/vCHVhOjAa7zExkZCUmS2jw/w4cPx7fffot58+bhu+++Q11dHWJiYjB69Gg8/PDDnvUMBgO++OILfPDBB1izZg2+//57hIWFYfDgwfjd737nmcjt5ptvxtdff40vv/wSDQ0NiI+Px3XXXYff/e53HU5kRkSBg+0y2+WuWLFiBVasWNFq+U9+8hOv3vRQqVT46KOP8MILL+D1119HaGgoHnnkkRZtVFtGjBiBBQsW4I033sAHH3wAIQTGjx+P119/HRMmTGi1/tixYzFixAgUFha2+cO+q++PUqnEu+++i08//RRLly7F+vXrYTAYkJaWhrlz53rKZ8yePRulpaX49ttvUVtbi+joaEydOrVFm9qRyZMnY//+/S1ukMTHx2PQoEE4ffp0r0pr/u53v0NMTAzmz5+P1157DZGRkbj99tvxxBNPdLmzyMKFC9tcfuuttyIpKalL57I911xzDebOnYuVK1di2bJlEEIwgUF0AbblbMu7gm052/K2/PGPf8SaNWvwww8/YNGiRbDb7UhJScHdd9+N3/zmN55JwwHgmWeewV/+8he89dZbsFgs+MlPfoIJEybg+eefh1KpxPLly2G1WjFp0iR88skn7c6p6a33zmAw4NNPP8XLL7+M+fPnQ6/X46abbsJll13W7rHJexRCjhlwiMinsrKycN999+Hf//43fvSjH/n0WE6nE6NHj8Zjjz2G3/72tz49FnVu7ty5qK2tbfPLorc5HA5ceumluPLKK/Hqq6/6/HhERH0V2+XA88wzz2Dt2rXYt2+fX453yy23IDIyEp999plfjkdERN7FtjzwsC2nruJ71/exyyoR9crZs2cBoNUk2NT/bdiwATU1NbjlllvkDoWIiJqxXQ48hw4dwpEjR9heEhFRl7AtDzxsy/suvnf9A0tIEfUhNpsN9fX1Ha7TleGE3uIu96NQKDBt2jS/HZfkdeDAARw9ehTvvfceRo8ejalTp8odEhGRLNguU0cKCgqQm5uLjz/+GPHx8bj++uvlDomIiC7Atpw6wra87+J7178wgUHUh+zbtw/33Xdfh+u89tprSE1N9Us8r7/+OhQKBf72t79h6NChfjkmyW/hwoVYtmwZRo4cib///e9yh0NEJBu2y9SRtWvX4t1338WQIUPw5ptvQqfTyR0SERFdgG05dYRted/F965/4RwYRH1IfX09cnNzO1xn+PDhSEhI8FNEREREwYvtMhERUd/GtpyIKPAxgUFERERERERERERERAGHk3gTEREREREREREREVHAYQKDiIiIiIiIiIiIiIgCTlBM4i2EgCSxUhYREVGgUyoVUCgUXtkX238iIqLAx7afiIgo+HSn/Q+KBIYkCdTUGOUOg4iIiDoRExMKlco7NzHY/hMREQU+tv1ERETBpzvtP0tIERERERERERERERFRwGECg4iIiIiIiIiIiIiIAg4TGEREREREREREREREFHCYwCAiIiIiIiIiIiIiooDDBAYREREREREREREREQUcJjCIiIiIiIiIiIiIiCjgMIFBREREREREREREREQBhwkMIiIiIiIiIiIiIiIKOExgEBERERERERERERFRwGECg4iIiIiIiIiIiIiIAg4TGEREREREREREREREFHCYwCAiIiIiIiIiIiIiooDDBAYREREREREREREREQUcJjCIiIiIiIiIiIiIiCjgMIFBREREREREREREREQBhwkMIiIiIiIiIiIiIiIKOExgEBERERERERERERFRwGECg4iIiIiIiIiIiIiIAg4TGEREREREREREREREFHCYwCAiIiIiIiIiIiIiooCjljsAIiIiIiIior6ktrYGb7zxdxiNRkREROLpp/+EkJAQucMiIiIi6neYwCAiIiIiIiLqhoMH92P37kzP46NHj+CiiybLGBERERFR/8QSUkRERERERETdYDKZAAC22DAAgNlskjMcIiIion6LCQwiIiIiIiKibrBYzAAAp0ELADCZzHKGQ0RERNRvMYFBRERERERE1A3uERhOgwbAuYQGEREREXkXExhERERERERE3eBOWEieERhGOcMhIiIi6reYwCAiIiIiIiLqBqPRlbBwhuhaPCYiIiIi72ICg4iIiIiIiKgb3AkLR6grgcERGERERES+wQQGERERERERUTc0NTUCAJyh2ubHTXKGQ0RERNRvMYFBRERERERE1A1GoxFCqYCk1zY/ZgKDiIiIyBeYwCAiIiIiIiLqBqOxCUKrhlArIRQKjsAgIiIi8hEmMIiIiIiIiIi6oaGhAU6tGlAoIHRqNDY2yh0SERERUb/EBAYRERERERFRFwkh0NTUCEmrBgA4tWo0NjXIHBURERFR/8QEBhEREREREVEXWa1W2O12SDpXAkPScgQGERERka8wgUFERERERETURY2NrtEWonkEhtCqYbfZYLFY5AyLiIiIqF9iAoOIiIiIiIioi+rr6wDg3AiM5v83NNTLFRIRERFRv8UEBhEREREREVEX1dXVAQCcOo3r/3pNi+VERERE5D1MYBARERERERF1kWcERnPiwj0Cw72ciIiIiLyHCQwiIiIiIiKiLjpXQqo5gdGcyGACg4iIiMj7mMAgIiIiIiIi6qLa2loA54/A0DQvr5EtJiIiIqL+igkMIiIiIiIioi5yJyqchuY5MAzaFsuJiIiIyHuYwCAiIiIiIiLqopqaagDnEhfuREZNDRMYRERERN7GBAYRERERERFRF9XU1EBo1YDK9XPaXUqKIzCIiIiIvI8JDCIiIiIiIqIuqq6pgqM5aQEAUCoh6TWorq6WLygiIiKifooJDCIiIiIiIqIusNlsqK+r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IiIiIiLyaQ0aJKBu3XrQXM9x2SwMZXo+VBkFaNmyNapWre6ScxARERF5GxYwiIiIiIiIyOf17TsQAKA7fd0lx9eduv7XeQa55PhERERE3ogFDCIiIiIiIvJ5CQmNUbVadfglZUGeb3TqsRWZBVCn5qFRoyaoVo2zL4iIiIgeFAsYRERERERE5PMkEgn69yueHeF/+oZTj63763j9+nH2BREREVFJsIBBREREREREBKBZs5aILV8BfkmZkJqsTjmmrNAEzfVs1KpVB3XqxDvlmERERES+ggUMIiIiIiIiIgBSqRQ9nngKErsDfolpTjmm9kIqAKBHj15OOR4RERGRL2EBg4iIiIiIiOgvjz76GNRqDfwvpgEOoVTHktjs8E9MR2BgEFq1auOkhERERES+Qy52ACIiIiIiIiJPodVq0alTZ/z440boj1+DTad+6GMpcg2QWGzo9kwPKBQKJ6YkIiIi8g0sYBARERERERH9P0888RQ2bfoBujOl38xbJpeja9fuTkhFRERE5HtYwCAiIiIiIiL6f8qXr4hFi5YjPb30+2DExJRDaGiYE1IRERER+R4WMIiIiIiIiIj+pnbtuqhdu67YMYiIiIh8GjfxJiIiIiIiIiIiIiIij8MCBhEREREREREREREReRwWMIiIiIiIiIiIiIiIyOOwgEFERERERERERERERB6HBQwiIiIiIiIiIiIiIvI4LGAQEREREREREREREZHHYQGDiIiIiIiIiIiIiIg8DgsYRERERERERERERETkcTyugJGYmIjnn38e9evXR8uWLbFgwQJYLBaxYxERERERERERERERkRvJxQ7w/+Xl5WHw4MGoWLEili1bhrS0NMyfPx8mkwmvvvqq2PGIiIiIiIiIiIiIiMhNPKqA8eWXX8JgMGD58uUIDAwEANjtdsyZMwcjRoxARESEuAGJiIiIiIiIiIiIiMgtPGoJqT///BPNmze/XbwAgC5dusDhcGD37t3iBSMiIiIiIiIiIiIiIrfyqALG5cuXERcXd8drer0eYWFhuHz5skipiIiIiIiIiIiIiIjI3TxqCan8/Hzo9fq7Xg8ICEBeXl6pji2Xe1SthoiIiNyA7T8REZFvYdtPRETkXTyqgOEqUqkEQUFasWMQERGRG7H9JyIi8i1s+4mIiLyPRxUw9Ho9CgoK7no9Ly8PAQEBD31ch0NAfn5RaaIRERGRG+j1Gshkzhk5yfafiIjI87HtJyIi8j0laf89qoARFxd3114XBQUFyMjIuGtvjJKy2Ryl+jwRERGVPWz/iYiIfAvbfiIiIu/iUYtDtmnTBnv27EF+fv7t17Zs2QKpVIqWLVuKmIyIiIiIiIiIiIiIiNxJIgiCIHaIW/Ly8vD444+jUqVKGDFiBNLS0jB//nx0794dr7766kMfVxAEOBwe820SERHRfUilEkgkEqcci+0/ERGR52PbT0RE5HtK0v57VAEDABITEzF37lwcPXoUWq0WPXr0wMSJE6FUKsWORkREREREREREREREbuJxBQwiIiIiIiIiIiIiIiKP2gODiIiIiIiIiIiIiIgIYAGDiIiIiIiIiIiIiIg8EAsYRERERERERERERETkcVjAICIiIiIiIiIiIiIij8MCBhEREREREREREREReRwWMIiIiIiIiIiIiIiIyOOwgEFERERERERERERERB6HBQwiIiIiIiIiIiIiIvI4LGAQEREREREREREREZHHYQGDiIiIiIiIiIiIiIg8DgsYRERERERERERERETkcVjA8GHTpk1Dt27dxI5B9FBGjx6NgQMH3v7/ZcuWoUGDBiImIm/wIL8Xq1evjo8//rjEx37YzxE5G9t/KqvY9pOrsP0nX8D2n8oqtv/kCmz7yxa52AGIiJyhd+/eaNu2rdgxyAd89dVXiI6OFjsGEZHPY9tP7sT2n4jIM7D9J3dh2+85WMAgIq8QGRmJyMhIsWOQD6hfv77YEYiICGz7yb3Y/hMReQa2/+QubPs9B5eQotvOnz+PIUOGoH79+khISMCLL76Imzdv3v76jBkz0K9fv9v/n52djRo1aqBXr163XzMYDKhduzY2b97s1uwkrltT7/bs2YPu3bsjPj4eAwYMwPXr15Gbm4vx48ejYcOG6NChA37++ec7Pvv777+jd+/eiI+PR7NmzTB79mwUFRXd8Z7ExEQMGDAAdevWRYcOHbBx48a7Mvx9Gun333+P6tWrIzs7+4739ejRA9OmTXNKdvJe+/fvx5NPPon69evj6aefxqlTp25/7e/TQQVBwPLly9GyZUs0aNAAL774Ivbs2YPq1atj//79dxzX4XBg2bJlaNGiBZo2bYrp06ffdb0TuRvbf3oYbPvJG7H9J1/C9p8eBtt/8jZs+8sGzsAgAEBKSgoG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NCIiInIRtv9ERES+hW2/eLiEFBEREREREREREREReRxu4k1ERERERERERERERB6HBQwiIiIiIiIiIiIiIvI4LGAQEREREREREREREZHHYQGDiIiIiIiIiIiIiIg8DgsYRERERERERERERETkcVjAIKIyYeDAgRg4cKDYMYiIiMhN2PYTERH5Hrb/RPR3crEDEJH3On/+PFasWIGTJ08iMzMTgYGBqFKlCtq3b88bEiIiIi/Etp+IiMj3sP0nIldiAYOIXOLIkSMYNGgQoqOj0bt3b4SFhSElJQXHjx/Hp59+ypsYIiIiL8O2n4iIyPew/SciV2MBg4hc4oMPPoBOp8O3334LvV5/x9eysrJESlXMZrPB4XBAqVSKmoOIiMibsO0nIiLyPWz/icjVuAcGEbnEtWvXUKVKlbtuYAAgJCTk9n9/9913GDRoEJo3b446deqga9eu+OKLL/71+BaLBUuXLkXPnj2RkJCA+vXro1+/fti3b98d77t+/TqqV6+Ojz/+GOvWrUOHDh1Qt25dnDhxAvXr18cbb7xx17FTU1NRs2ZNfPjhhw/xnRMREfkmtv1ERES+h+0/EbkaZ2AQkUvExMTg6NGjuHDhAqpVq3bf923YsAFVq1ZF+/btIZfLsWPHDsyZMweCIKB///73/VxhYSG++eYbdOvWDb1794bBYMC3336LoUOH4ptvvkHNmjXveP/3338Ps9mMZ555BkqlEtHR0ejQoQM2b96M6dOnQyaT3X7vTz/9BEEQ0L1799L/QRAREfkItv1ERES+h+0/EbmaRBAEQewQROR9du/ejWHDhgEA4uPjkZCQgObNm6Np06ZQKBS332cymaBWq+/47JAhQ5CUlIRt27bdfu3WupmfffYZAMBut8Nut98xFTQ/Px9dunRB27ZtMW/ePADFozAeffRR+Pv7Y+vWrQgODr79/l27dmHIkPHF1HAAAATHSURBVCFYvXo12rRpc/v1J554AgEBAbfPRURERP+ObT8REZHvYftPRK7GJaSIyCVatmyJL7/8Eu3bt8e5c+fw0UcfYciQIWjTpg22b99++33//wamoKAA2dnZaNKkCZKTk1FQUHDf48tksts3MA6HA7m5ubDZbKhTpw7OnDlz1/s7dep0xw0MALRo0QLh4eHYtGnT7dcuXLiA8+fP44knnnjo752IiMgXse0nIiLyPWz/icjVuIQUEblMfHw8li9fDovFgnPnzmHbtm1Yt24dxo8fjx9++AFVqlTB4cOHsWzZMhw7dgxGo/GOzxcUFECn0933+Bs3bsSaNWtw5coVWK3W26+XK1furvfe6zWpVIru3btjw4YNMBqN0Gg02LRpE1QqFTp37lyK75yIiMg3se0nIiLyPWz/iciVWMAgIpdTKpWIj49HfHw8KlasiOnTp2PLli144okn8NxzzyEuLg7Tpk1DVFQUFAoF/vjjD6xbtw4Oh+O+x/zPf/6DadOmoUOHDhgyZAhCQkIgk8nw4YcfIjk5+a73/32q6i1PPvkkPv74Y2zbtg3dunXDTz/9hHbt2v3jzRMRERH9M7b9REREvoftPxG5AgsYRORWderUAQCkp6fjt99+g8ViwcqVKxEdHX37Pfv37//X4/zyyy+IjY3F8uXLIZFIbr/+3nvvlShPtWrVUKtWLWzatAmRkZG4efMmXnnllRIdg4iIiO6PbT8REZHvYftPRM7CPTCIyCX27dsHQRDuev2PP/4AAMTFxUEmkwHAHe8rKCjAd99996/Hv9dnjx8/jmPHjpU4a48ePbB792588sknCAwMvGNTLyIiInowbPuJiIh8D9t/InI1zsAgIpd44403YDQa0bFjR8TFxcFqteLIkSPYvHkzYmJi0LNnT2RmZkKhUGDkyJF49tlnYTAY8M033yAkJAQZGRn/ePx27drh119/xZgxY9CuXTtcv34dX375JapUqYKioqISZe3WrRveeecdbN26FX379oVCoSjNt05EROST2PYTERH5Hrb/RORqLGAQkUtMnToVW7ZswR9//IGvvvoKVqsV0dHR6NevH0aNGgW9Xg+9Xo/33nsPS5Yswdtvv43Q0FD07dsXwcHBmDFjxj8e/9ZN0FdffYVdu3ahSpUqeOedd7BlyxYcOHCgRFlDQ0PRsmVL/PHHH+jRo0dpvm0iIiKfxbafiIjI97D9JyJXkwj3mudFRORjxowZgwsXLmDr1q1iRyEiIiI3YNtPRETke9j+E5U93AODiHxeeno6R2AQERH5ELb9REREvoftP1HZxCWkiMhnJScn48iRI/j2228hl8vRp08fsSMRERGRC7HtJyIi8j1s/4nKNs7AICKfdfDgQUydOhXXr1/H/PnzERYWJnYkIiIiciG2/URERL6H7T9R2cY9MIiIiIiIiIiIiIiIyONwBgYREREREREREREREXkcFjCIiIiIiIiIiIiIiMjjsIBBREREREREREREREQehwUMIiIiIiIiIiIiIiLyOCxgEBERERERERERERGRx2EBg4iIiIiIiIiIiIiIPA4LGERERERERERERERE5HFYwCAiIiIiIiIiIiIiIo/DAgYREREREREREREREXmc/wPXTzLUQxB0OwAAAABJRU5ErkJggg=="/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABjAAAAJICAYAAADPWa1BAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAABRI0lEQVR4nO3dZ5hV5aE24IcqKMVQFEWxUFXEQlOJoKCxoSCxRAU1FmIvJ2jQGNOMIRqPRkxsQTFq1GMUhagY0QQTC4oaTaxfLASsCEZqQJj9/chhjuOAwjA4a+C+r4tL9trvWvvdZXi286xSp1QqlQIAAAAAAFAgdWt6AgAAAAAAAJ+lwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAqs3o0aPTuXPnmp7Gl2LKlCnp3LlzpkyZUr5s5MiR6d+/fw3Oqupq89wB1kbrUqZ+WbymX6x///751re+VdPTWGX33HNP9t1332y33Xbp0aNHTU8HqOXkRfXzmn6x2prBRTBs2LAMGzaspqfBGlS/picAUERnnnlmJk6cmBNOOCHnnHNOtW572LBheeqpp5Z731ZbbZWJEydW6+MBwJdt5MiRGTdu3HLva9iwYf72t799yTOiSPr375+OHTvm2muvXe1tvf766znvvPOy++67Z/jw4WnUqFEWLlyYX//61+nVq1d69+5dDTMGqD1kMJ9n8eLFue222zJu3Lj885//TN26dbPxxhtn5513zrHHHpv27dsnSZ599tk89thjOeaYY9KsWbManjXrOgUGwGfMmzcvf/zjH9O2bdvcd999GTFiROrUqVOtj9GmTZv813/9V6XlTZs2rdbHAYCa0rBhw1x00UWVlterV68GZsPa6qmnnkpZWVm++93vZosttkiSzJ49O1dddVVOO+00BQawTpLBrMgZZ5yRRx99NAcccEAOPfTQLFmyJG+88Ub+9Kc/ZaeddiovMJ577rlcddVVOfjggxUY1DgFBlBIpVIpixYtSqNGjb70x37wwQdTVlaWiy++OMccc0yefvrp9OrVq1ofo2nTphk0aFC1bhMAlqemMrV+/fqyjjVu1qxZSewEAhSTDKZIXnjhhfzxj3/M2WefnZNOOqnCfUuXLs2cOXNqaGbw+VwDA9Zx8+bNy09+8pP0798/Xbt2za677ppvfvObefHFF8vHTJ06NWeccUb22GOPdO3aNf369cvFF1+cf//731+4/bvuuitHH310dt1113Tt2jX7779/fvvb31Yat+x8j3/+858zZMiQdOvWLbfffnuGDh2agw46aLnb3meffXL88cdX/cmvwIQJE7Lbbrtll112Sfv27TNhwoRqf4yVsew8oW+++WZGjBiR7t27Z5dddskVV1yRUqmUd999NyeffHJ23nnn9OnTJzfccEOF9Zddp+P+++/Pf//3f6dPnz7Zcccdc9JJJ+Xdd9/9wsdfsGBBRo0alX79+qVr167ZZ599MmbMmJRKpfIxq/L+lJWVZezYsTnggAOy/fbbZ7fddsuFF16Yjz/+uNK6kydPzpFHHpkdd9wxO+20U4YPH57/9//+X4UxM2fOzHnnnZe+ffuma9eu+epXv5qTTz45M2bM+MLnBrAmyNRVd/fdd6dz586ZOnVqLrroouyyyy7p0aNHLrzwwixevDhz5szJueeem549e6Znz5655JJLKuTQjBkz0rlz54wZMyZjx47NnnvumW7dumXo0KF57bXXvvDxlyxZkl/+8pfZa6+90rVr1/Tv3z///d//ncWLF5eP+c53vpPevXvnk08+qbT+cccdl3322afCsnvvvbf8de/Vq1fOPvvs5ebu888/n+OPPz7du3fPDjvskKFDh+aZZ56pMGZlPlOf9corr6Rz5855+OGHy5f9/e9/T+fOnXPwwQdXGHvCCSfk0EMPrbSNqVOn5pBDDsn222+fAQMG5J577qk0Zvr06TnjjDPSq1ev7LDDDjnssMPypz/9aYXzqoovei379++f0aNHJ0l23XXXdO7cOSNHjsyuu+6aJLnqqqvSuXPndO7cuXwcsHaSwatOBq97GTx9+vQkyc4771zpvnr16uUrX/lKkv/8LuKSSy5JkgwYMKA8S5f9v/bK/DysqffujjvuyF577ZVu3brlkEMOydSpU7/weVP7OQID1nHf//738+CDD2bo0KFp3759/vWvf+WZZ57J66+/nu222y5JMnHixPz73//OEUcckQ033DAvvPBCbrnllrz33nu58sorP3f7t912Wzp27Jj+/funfv36+eMf/5gf/vCHKZVKOeqooyqMffPNN/Ptb387hx9+eA477LBstdVW2WCDDXLBBRfktddeS6dOncrHvvDCC3nrrbdy8sknV+vr8f7772fKlCkZNWpUkuSAAw7ITTfdlO9973tp2LBhtT3O0qVLM3v27ErLGzVqlPXXX7/CsrPPPjvt27fPt7/97UyePDlXX311Ntxww9x+++3ZZZddMmLEiEyYMCE/+9nPsv3226dnz54V1r/66qtTp06dnHjiiZk1a1ZuuummHHvssbn33ntXuCdQqVTKySefnClTpuSQQw7JNttskz//+c+55JJL8v777+f8889PkgwaNGil358LL7ww48aNy5AhQzJs2LDMmDEjt956a1566aXcdtttadCgQZL/XIhz5MiR+epXv5oRI0Zk4cKFue2223LkkUdm3Lhx2WyzzZIkp59+ev7xj39k6NChadu2bWbPnp3HHnss7777bvkYgC+TTK1seVnXsGHDNGnSpMKyiy66KK1atcrpp5+e559/PnfccUeaNm2a5557LptssknOPvvsPProoxkzZkw6deqUwYMHV1j/nnvuyfz583PkkUdm0aJFufnmm3PMMcdkwoQJadWq1Qrnd8EFF2TcuHHZZ5998s1vfjMvvPBCrr322rz++uv55S9/meQ/WXfPPffkL3/5S/bcc8/ydWfOnJknn3wyp556avmyq6++Or/4xS+y33775ZBDDsns2bNzyy235Kijjso999xTfgqGJ554IieeeGK6du2a0047LXXq1Mndd9+dY445Jr/97W/TrVu3JCv3mfqsTp06pVmzZpk6dWoGDBiQ5D+/DKlbt25eeeWVzJs3L02aNElZWVmee+65HHbYYRXWnzZtWs4888wccsghOfjgg3PXXXdl5MiR2W677dKxY8ckyYcffphvfOMbWbhwYYYNG5avfOUrGTduXE4++eRceeWV2XvvvVf4mq+slXktzz///Nxzzz156KGH8oMf/CDrr79+OnfunB122CE/+MEPsvfee5fPxcVjYe0mgyuTwTL4szbddNMk/9lpc+edd079+sv/tfDee++dt956K7///e9z3nnnlRcbLVq0SLJyPw9r4r278847c+GFF2annXbKMccck+nTp+fkk09O8+bNs8kmm6zwebMWKAHrtO7du5d++MMffu6YhQsXVlp27bXXljp37lx6++23y5ddeeWVpU6dOn3huscdd1xpwIABFZbtueeepU6dOpUeffTRCsvnzJlT2n777UuXXnppheU//vGPSzvuuGNp/vz5nzv3VTVmzJhSt27dSnPnzi2VSqXSm2++WerUqVPpoYceqjDuySefLHXq1Kn05JNPli/7zne+U9pzzz2/8DGGDh1a6tSp03L/fO973ysft+z1/PSyJUuWlPr27Vvq3Llz6dprry1f/vHHH5e6detW+s53vlNpjrvvvnv58ymVSqX777+/1KlTp9JNN920wrk/9NBDpU6dOpV+9atfVZj76aefXurcuXNp2rRppVJp5d+fp59+utSpU6fS+PHjK4x79NFHKyyfN29eqUePHqULLrigwriZM2eWunfvXr78448/LnXq1Kn061//eoWvM8CXTab+n+985zsrzLrjjjuufNxdd91VvqysrKx8+eGHH17q3Llz6cILLyxftiwDhw4dWr5s+vTppU6dOpW6detWeu+998qXP//886VOnTqVLr744vJln31NX3755VKnTp1K3/3udyvMfdSoUaVOnTqVnnjiiVKpVCotXbq01Ldv39JZZ51VYdyNN95Y6ty5c+mf//xnqVQqlWbMmFHaZpttSldffXWFca+++mpp2223LV9eVlZW+trXvlbpOS9cuLDUv3//0je/+c3yZSvzmVqe4cOHlw455JDy26eddlrptNNOK22zzTalyZMnl0qlUunFF18sderUqTRp0qTyccs+O08//XT5slmzZpW6du1aGjVqVPmyn/zkJ5XGzZs3r9S/f//SnnvuWVq6dOnnzm/PPfcsDR8+fIX3r+xrWSr93/s6a9asCnPu1KlT6corr/zceQBrDxn8f2Tw/5HBFZWVlZX/PmK33XYr/dd//VfplltuqfD5X+bXv/51qVOnTqXp06dXum9lfh6q+71bvHhxaddddy0NGjSotGjRovJxd9xxR6lTp04VPpusfZxCCtZxzZo1y/PPP5/3339/hWM+vZf+ggULMnv27Oy0004plUp56aWXPnf7n1537ty5mT17dnr16pXp06dn7ty5FcZuttlm2X333Sssa9q0aQYMGJD77ruv/HDVpUuX5oEHHsiAAQMqHa2wuiZMmJB+/fqV75Wy5ZZbZrvttsv48eOr9XHatm2bG2+8sdKfY445ptLYQw45pPzv9erVS9euXVMqlSosb9asWbbaaqvyQ0I/bfDgwRX2stl3333TunXrTJ48eYXze/TRR1OvXr0MGzaswvLjjjsupVIpjz76aJKVf38mTpyYpk2bpk+fPpk9e3b5n+222y7rr79+pkyZkiR5/PHHM2fOnBxwwAEVxtWtWzc77LBD+bhGjRqlQYMGeeqpp5Z7CiqAmiBTK1pvvfWWm3UjRoyoNPaQQw5JnTp1ym9369atUtYty8DlZd1ee+2VjTfeuML6O+yww+dm3bL7vvnNb1ZYftxxx1W4v27dujnwwAPzyCOPZN68eeXjxo8fn5122imbb755kuShhx5KWVlZ9ttvvwoZ1qpVq2yxxRblGfbyyy/nrbfeyoEHHpiPPvqofNyCBQuy66675umnn05ZWVmSlftMLU/37t3z0ksvZcGCBUmSZ555Jn379k2XLl3KT5ExderU1KlTJ927d6+wbocOHdKjR4/y2y1atKj0HWPy5Mnp1q1bhXEbbLBBDj/88Lz99tv5xz/+sUrz/ayVfS0BlpHBFclgGbw8derUyZgxY3LWWWelWbNm+f3vf58f/ehH2XPPPXPWWWet9DUwVubnobrfu7///e+ZNWtWvvGNb1Q4O8bBBx/sOljrAKeQgnXciBEjMnLkyOyxxx7Zbrvt0q9fvwwePLg8TJLknXfeyZVXXplHHnmk0i+LPx1Ey/PMM89k9OjR+etf/5qFCxdWuG/u3LkVgmZFp/0ZPHhw7r///kydOjU9e/bM448/ng8//PALL0o2d+7cCuczbdCgQTbccMMVjn/99dfz0ksvZdCgQZk2bVr58t69e+fWW28tP9yzOqy//vrZbbfdVmrsssM8l2natGnWW2+98sM3P738X//6V6X1t9hiiwq369Spky222CJvv/32Ch/z7bffzkYbbVTp+bZv3778/mVW5v2ZNm1a5s6dW35O6s9adgHOt956K0mWW+QkKZ9Pw4YNM2LEiPzsZz9Lnz59ssMOO2SPPfbI4MGD07p16xU+L4A1SaZWVK9evdXKuiSVTgfQtGnT5RbXn8265D87ITzwwAMrfMy33347devWTbt27Sosb926dZo1a1Yp666//vpMmjQpgwcPzhtvvJEXX3wxP/zhD8vHvPXWWymVSvna17623MdbdpqGZVn3ne98Z4Vzmzt3bpo3b75Sn6nl6dGjR5YsWZK//vWvadOmTWbNmpUePXrkH//4R/m5oqdOnZoOHTpUeh+XdwqG5s2bV3jd33nnneywww6Vxm299dbl93/6FCmramVfS4BlZHBFMrgiGfx/GjZsmJNPPjknn3xyPvjggzz99NP5zW9+kwceeCD169fPz3/+8899fsnK/zxU53v3zjvvJKn8eWvQoMEXvifUfr75wTpu//33T48ePfLQQw/lsccey5gxY3L99ddn9OjR6devX5YuXZpvfvOb+fjjj3PCCSdk6623zvrrr5/3338/I0eOLN87YXn++c9/5thjj83WW2+dkSNHZpNNNkmDBg0yefLkjB07ttK6K7oew1e/+tW0atUq48ePT8+ePTN+/Pi0bt36C7+Q/eQnP8m4cePKb/fq1Ss333zzCscvO8ripz/9aX76059Wuv/BBx/M17/+9c99zDWhbt3KB8vVq1dvuWNLn7qo2pdlZd6fsrKytGzZcoVfhpaVMcvmf8kllyy3iPj08z722GPTv3//TJo0KX/5y1/yi1/8Itddd11uuummbLvtttX5FAFWikytuuVl3ectr06f3ut0RTp06FB+RObgwYMzfvz4NGjQIPvtt1/5mLKystSpUyfXX3/9cnN62d61y7Lu3HPPzTbbbLPcx1s29os+UyvStWvXrLfeenn66aez6aabpmXLltlqq63So0eP/Pa3v83ixYvzzDPPZK+99qq07oq+Y3yZVva1BFhGBledDF7+2HUhgzfaaKMccMAB+drXvpaBAwdm4sSJGTVq1OfuKLAqPw/V+d6xblNgANloo41y1FFH5aijjsqsWbNy8MEH55prrkm/fv3y2muv5a233srPfvazChfreuyxx75wu4888kgWL16cq6++usJeHat62H+9evUycODAjBs3LiNGjMikSZNy2GGHfWG4n3DCCTnooIPKby+78NPylEqlTJgwIb17986RRx5Z6f5f/epXmTBhQo0UGKvr00eTJP95rtOmTfvci1m2bds2TzzxRKWjTt54443y+5dZmfenXbt2eeKJJ7Lzzjuv8At9kvI9J1q2bLlSewy1a9cuxx13XI477ri89dZbGTx4cG644YaV2msEYE2QqTXjs1mX/GePvk/n1We1bds2ZWVlmTZtWvkRhsl/Lo45Z86cSusOHjw4o0aNygcffJDf//732WOPPdK8efPy+9u1a5dSqZTNNtssW2211Qofd1nWNWnSZKWy7vM+UyvSsGHDdOvWLVOnTs2mm25afpqJ7t27Z/HixRk/fnw+/PDD9OzZ8wsff3k23XTTvPnmm5WWL/ue8Nm9eVfVyr6WK7IyvxAD1j4yuGbI4IpqYwY3aNAgnTt3zltvvZWPPvoorVu3XmGWrurPQ3W9d8sea9q0aRXO7PDJJ59kxowZ6dKlyyo9Z2oX18CAddjSpUsrna+zZcuW2WijjbJ48eIk/7fXxaf37C+VSvnNb37zhdtf9kXs0+vOnTs3d9111yrPddCgQfn4449z4YUXZsGCBRW+wK1Ihw4dsttuu5X/6dq16wrHPvPMM3n77bczZMiQ7LvvvpX+7L///pkyZcoqn/+yCO65554Kh0RPnDgxM2fOTN++fVe4Tt++fbN06dLceuutFZaPHTs2derUqbTuF70/++23X5YuXZpf/epXlR5ryZIl5efa3H333dOkSZNce+21+eSTTyqNnT17dpJk4cKFWbRoUYX72rVrlw022KD8swvwZZKpNWvSpEkVMvqFF17I888//7lZt+yXDzfddFOF5TfeeGOF+5cZOHBg6tSpk5/85CeZPn16pdfta1/7WurVq5errrqq0hGRpVIpH330UZL/7JnZrl273HDDDZk/f36leS3LupX5TH2e7t2754UXXsiUKVPKz7HdokWLtG/fPtdff32SVDh/9qro169fXnjhhTz33HPlyxYsWJD/+Z//Sdu2bdOhQ4cqbXeZlX0tV6Rx48ZJstLn8gZqNxlcs2RwZUXN4Lfeeqv8VEyfNmfOnDz33HNp3rx5+dkRlmXpZ1+HVf15qM73rkWLFrn99tsrvAfjxo2T9+sAR2DAOmz+/Pnp169f9tlnn3Tp0iXrr79+Hn/88fztb3/LyJEjk/znPIrt2rXLz372s7z//vtp0qRJHnzwwZUKiD59+qRBgwY56aST8o1vfCPz58/PnXfemZYtW2bmzJmrNNdtt902nTp1ysSJE9O+fftst912VXrOKzJhwoTUq1cve+yxx3Lv79+/fy6//PLcf//9lS40VhVz587Nvffeu9z7vugcqKuqefPmOfLIIzNkyJDMmjUrN910U7bYYoscdthhK1ynf//+6d27dy6//PK8/fbb6dy5cx577LE8/PDDOeaYYyqdq/SL3p9evXrl8MMPz7XXXpuXX365/LPx1ltvZeLEifnud7+bfffdN02aNMkPfvCDnHvuuRkyZEj233//tGjRIu+8804mT56cnXfeORdeeGHeeuutHHvssdl3333ToUOH1KtXL5MmTcqHH36YAw44oFpfP4CVIVMrW7JkyQqzbu+9967WUwK0a9cuRxxxRI444ogsXrw4v/nNb7LhhhvmhBNOWOE6Xbp0ycEHH5w77rgjc+bMSc+ePfO3v/0t48aNy1577ZVddtmlwvgWLVpk9913z8SJE9OsWbNK3xnatWuXs846K5dddlnefvvt7LXXXtlggw0yY8aM8r1sjz/++NStWzcXXXRRTjzxxAwcODBDhgzJxhtvnPfffz9TpkxJkyZNcs0116zUZ+rz9OjRI9dcc03efffdCr8k6dGjR+644460bds2bdq0WbUX+n8NHz489913X0488cQMGzYszZs3zz333JMZM2Zk9OjRK3XakWnTpi13x4Ztt902e+yxx0q9livSqFGjdOjQIQ888EC23HLLbLjhhunYseNqXZcDKC4ZXJkMlsHL88orr2TEiBHZfffd06NHjzRv3jzvv/9+7rnnnnzwwQc5//zzywuKZZ/Nyy+/PPvvv38aNGiQPffcc5V/HqrrvWvQoEHOOuusXHjhhTnmmGOy//77Z8aMGbn77rtdA2MdoMCAdVijRo1yxBFH5LHHHssf/vCHlEqltGvXLt///vfLT6PUoEGDXHPNNbnoooty7bXXZr311svee++do4466gt/0b711lvnyiuvzBVXXJGf/exnadWqVY444oi0aNEi559//irPd9CgQbn00kur/Rf8n3zySSZOnJiddtpphRdD69SpUzbbbLOMHz++WgqM9957L+eee+5y76vu53fSSSfl1VdfzXXXXZf58+dn1113zfe///3yPSqWp27durn66qtz5ZVX5v7778/dd9+dtm3b5txzz81xxx23wnl/3vvzox/9KF27ds3tt9+eyy+/PPXq1Uvbtm1z0EEHZeeddy4fd+CBB2ajjTbKddddlzFjxmTx4sXZeOON06NHjwwZMiRJ0qZNmxxwwAF54oknMn78+NSrVy9bb711rrjiiuyzzz6r8WoBVI1MrWzx4sUrzLqHH364Wn95Mnjw4NStWzc33XRTZs2alW7duuV73/teNtpoo89d76KLLspmm22WcePGZdKkSWnVqlW+9a1v5bTTTlvu+EGDBuWPf/xj9ttvvzRs2LDS/cOHD8+WW26ZsWPH5pe//GWS/2RWnz590r9///JxvXv3zh133JFf/epXueWWW7JgwYK0bt063bp1y+GHH55k5T5Tn2ennXZKvXr10qhRowqnVVj2y5Oq7vmZJK1atcrtt9+eSy+9NLfccksWLVqUzp0755prrlnhziCf9eabb+YXv/hFpeWHHHJI9thjj5V+LVfkoosuyo9//OP89Kc/zSeffJLTTjtNgQFrKRlcmQyWwcvTs2fPnHHGGfnzn/+cG2+8MR999FE22GCDbLPNNhkxYkSF/5fu1q1bzjzzzNx+++3585//nLKysjz88MNV+nmorvfu8MMPz9KlSzNmzJhccskl6dSpU66++urlfp9g7VKnVBNXfAWogptuuik//elP88gjj6z2uZXXBVOmTMnRRx+dX/ziF9l3333X+ON5fwBqj7Xl3+wZM2ZkwIABOffccz93j/zqMmnSpJx66qm59dZbV+uXDwCsu2Rw1cjg2st7x+pyDQygViiVSvnd736Xnj171uoveWsr7w9A7eHf7Kq78847s/nmm5efzxoAVoUMrjoZXHt571hdTiEFFNqCBQvyyCOPZMqUKXnttdeWe65kao73B6D28G921d1333159dVX86c//Snf/e53U6dOnZqeEgC1iAyuOhlce3nvqC4KDKDQZs+enW9/+9tp1qxZTjrppAwYMKCmp8SneH8Aag//Zlfdf/3Xf2X99dfPIYccslLnvgaAT5PBVSeDay/vHdXFNTAAAAAAAIDCcQ0MAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwnER71qqVCqlrMzlSwBgTalbt07q1KlTLduS2wCwZsltAKg9ViW3FRi1VFlZKbNnz6/paQDAWqtFiw1Sr171/CJEbgPAmiW3AaD2WJXcdgopAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBcYXGDlyZAYOHFjT0wAAAAAAgHWKAgMAAAAAACgcBQYAAAAAAFA4CoxV9Oqrr+b444/PjjvumO7du+eMM87IO++8U37/+eefnyOPPLL89uzZs9OlS5d8/etfL182f/78bLfddnnggQe+1LkDAAAAAEBtocBYBe+++26GDh2ajz76KJdeeml++MMf5sUXX8zQoUMzb968JEnPnj3zt7/9LYsWLUqSTJ06NQ0bNszLL79cPua5557LkiVL0rNnzxp7LgAAAAAAUGT1a3oCtcnYsWOzZMmS3HDDDdlwww2TJNtss00OOOCAjBs3LsOGDUuPHj2yePHiPP/88+nVq1eefvrp7L333vnLX/6SZ599Nn379s3TTz+dLbfcMq1atVqt+dSvv+r903XX/SqTJ/9xtR6X2qtfvz0zfPgpNT0NgHVSVXI7kd3rOtkNUDPkNlUhtwGqnwJjFUydOjW9e/cuLy+SpH379unSpUueeeaZDBs2LJtvvnnatGmTp59+Or169crUqVPzjW98I//+97/z9NNPp2/fvpk6depqH31Rt26dfOUrG6zyeo0aNUzdug68WVc1atSwSp8bAFZPVXM7kd3rOtkN8OWT21SV3AaofgqMVTBnzpxss802lZa3bNkyH3/8cfntnj17ZurUqZk3b15eeeWV9OjRIwsXLszEiROzePHivPDCCzn00ENXay5lZaXMmbNgldc7+ugTcvTRJ6zWY1O7ffTR/JqeAkCt0KxZ49SrVz2/gKhqbieyG9kNsDLkNkUhtwG+2KrktgJjFTRv3jyzZs2qtHzWrFnZcssty2/37Nkzo0aNypQpU/KVr3wl7du3z8KFC/Pzn/88Tz75ZBYvXpwePXqs9nyWLClb7W0AAF8OuQ0AtYfcBoBicFzjKujevXuefPLJCkdbvPHGG3n11VfTvXv38mU9evTIggULMnbs2PKiYptttsl6662X66+/Pptsskk222yzL33+AAAAAABQWygwVsGxxx6b+vXr57jjjsukSZNy33335Vvf+lY22WSTHHzwweXj2rdvn5YtW+app54qv9ZFvXr1svPOO+epp56qlqMvAAAAAABgbabAWAWbbLJJbr755jRv3jwjRozI9773vXTp0iU333xzmjRpUmHsspLi0xfrXvb31b2ANwAAAAAArO3qlEqlUk1PglW3dGlZZs92YSgAWFNatNig2i4GKrcBYM2S2wBQe6xKbjsCAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFE6VC4wTTjghEyZMyL///e/qnA8AAAAAAEDqV3XF6dOn55xzzsn666+fvffeO4MGDcquu+6aOnXqVOf8AAAAAACAdVCdUqlUqurKL7zwQsaPH5+JEydm1qxZadWqVQYOHJiDDjoo22yzTXXOk89YurQss2fPr+lpAMBaq0WLDVKvXvWcbVNuA8CaJbcBoPZYldxerQJjmbKysjz22GMZP358Hn744SxcuDDt27fPoEGDcuCBB6ZNmzar+xB8hi9UALBm+UUIANQechsAao8vvcD4tDlz5uTCCy/MxIkTkyR169ZNr169cuyxx2aPPfaozodap/lCBQBrll+EAEDtIbcBoPZYldyu8jUwPmvq1KkZP358HnzwwXz88cfp2LFjBg8enPr16+euu+7KySefnJNOOilnnnlmdT0kAAAAAACwllqtIzD+8Y9/ZPz48fn973+fd999Ny1btszAgQMzaNCgStfA+N73vpc//OEPmTJlympPGnuEAMCaZk9OAKg95DYA1B5fyhEYgwYNymuvvZaGDRtmwIAB+f73v5/dd989desu/4F79+6dO++8s6oPBwAAAAAArEOqXGA0a9YsP/rRj7LffvulSZMmXzh+wIABefjhh6v6cAAAAAAAwDqkSsdXLlq0KHvvvXe23HLLlSovkqRx48Zp27ZtVR4OAAAAAABYx1SpwFhvvfVy2WWX5c0336zu+QAAAAAAAFStwEiSDh065O23367OuQAAAAAAACRZjQLj7LPPzu23357HH3+8OucDAAAAAABQ9Yt433LLLdlwww1z/PHHZ7PNNstmm22W9dZbr8KYOnXq5Oqrr17tSQIAAAAAAOuWKhcYr732WpJkk002ydKlSzNt2rRKY+rUqVP1mQEAAAAAAOusKhcYjzzySHXOAwAAAAAAoFyVr4EBAAAAAACwplT5CIxPmzdvXubNm5eysrJK92266abV8RBrzCmnnJK5c+fm5ptvTpKMHj06N9xwQ5577rkanhkAAAAAAKy7VqvA+O1vf5uxY8dm+vTpKxzz8ssvr85DfOkOPfTQ9OvXr6anAQAAAAAA67Qqn0Lqtttuy49+9KO0a9cuZ511VkqlUo455pgMHz48rVq1SpcuXfKTn/ykOuf6pWjTpk26detW09MAAAAAAIB1WpULjFtuuSVf/epX8+tf/zqHHXZYkqRfv345++yzc//992f+/Pn517/+tUrbHDlyZAYOHJjHH388Bx54YLp165ahQ4dmxowZ+de//pUzzzwzO++8c/baa6/cf//9Fdb905/+lEMPPTTdunXLLrvsku9///tZsGBBhTGvv/56hg4dmu233z577bVXxo0bV2kOo0ePzk477VR+++67707nzp0ze/bsCuMGDRqUkSNHVsvc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AwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAAoHAUGAAAAAAAQOEoMAAAAAAAgMJRYAAAAAAAAIWjwAAAAAAAAApHgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwAAAAAACAwlFgAAAAAAAAhaPAAAAAAAAACkeBAQAAAAAAFI4CAwAAAAAAKBwFBgAAAAAAUDgKDAAAAAAA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pVKuuuqq9OnTJzvttFPOOOOMPP744+ncuXOmTJlSYbtlZWUZPXp0dtttt/Tu3TvnnXdepc81rClymy8it6mt5DZrK9nN55Hb1FZyu7gcgcFa5d13383QoUOz+eab59JLL82iRYty+eWXZ+jQoRk/fnyaNGmSnj17ZsKECVm0aFHWW2+9TJ06NQ0bNszLL7+cefPmpUmTJnnuueeyZMmS9OzZs6afEmvIzJkzM2rUqJx88smpX79+LrrooowYMSKNGzdOjx49cthhh+V//ud/cs4552SHHXZI27ZtM3HixJx99tkZMmRITj/99MycOTOXXXZZ5syZk8svvzxJsmjRohx33HFp3LhxLrnkkiTJlVdemXnz5mXLLbessblT+82cOTMXXXRRhg8fnqZNm+ayyy7LaaedloceeigNGjSoNP7mm2/OVVddlRNOOCG77LJLnnzyyVxwwQXL3fatt96a7t27Z9SoUXnrrbdyySWXpGXLlhkxYsSaflqs4+Q2K0tuU9vIbdZWspuVIbepbeR2sSkwWKuMHTs2S5YsyQ033JANN9wwSbLNNtvkgAMOyLhx4zJs2LD06NEjixcvzvPPP59evXrl6aefzt57752//OUvefbZZ9O3b988/fTT2XLLLdOqVauafUKsMR9//HFuueWWdOzYMUnywQcf5Mc//nFOPPHEnHrqqUmS7bffPg899FAmTZqUo48+Opdcckn233///OQnPynfTuvWrTN8+PCccsop6dixY+6+++588MEHeeCBB8q/QG277bbZd999q+0L1arO/ZhjjqmWx6VmffZ9b9y4cY4++ug8//zz6dGjR4WxS5cuzXXXXZchQ4aUfyn66le/mo8++ii/+93vKm27devWueyyy5Ikffv2zUsvvZQHH3zQFyrWOLnNypLb1DZym7WV7GZlyG1qG7ldbE4hxVpl6tSp6d27d/kXqSRp3759unTpkmeeeSZJsvnmm6dNmzZ5+umny9fp1atXevToUWGZPUHWbhtttFF5MCUp/7Kz2267lS9r1qxZWrRokffeey9vvvlm3n777ey3335ZsmRJ+Z9evXqlbt265YcWvvDCC+nYsWOFL09bbLFFunTpUmNzZ+3w2fe9Q4cOSZL333+/0tj33nsvM2fOTP/+/SssHzBgwHK3/enPTvKffzd9dvgyyG1WltymtpHbrK1kNytDblPbyO1icwQGa5U5c+Zkm222qbS8ZcuW+fjjj8tv9+zZM1OnTs28efPyyiuvpEePHlm4cGEmTpyYxYsX54UXXsihhx76ZU6dL1mzZs0q3F52SGDTpk0rLG/YsGEWLVqUjz76KEnK97j4rHfffTfJf/bOaNmyZaX7W7ZsmUWLFq32vJNVnztrhxW978t7j2fOnJkkadGiRYXly/tsrmjbixcvrvJcYWXJbVaW3Ka2kdusrWQ3K0NuU9vI7WJTYLBWad68eWbNmlVp+axZsyo09D179syoUaMyZcqUfOUrX0n79u2zcOHC/PznP8+TTz6ZxYsXVzpEjHXbsj2MLrzwwnTr1q3S/RtttFH5f1988cVK98+aNStNmjRZ4fbXW2+9JMknn3xSYfmcOXOqOmXWYa1bt06SShepW96/j1CT5DZritymNpHb1CaymzVBblObyO0vn1NIsVbp3r17nnzyyQp7frzxxht59dVX07179/JlPXr0yIIFCzJ27NjyL03bbLNN1ltvvVx//fXZZJNNstlmm33p86e4tt5667Rp0ybTp0/P9ttvX+nPxhtvnOQ/58L8f//v/2XatGnl606bNi2vvPLK525/2fpvvPFG+bLXX3+9fE8TWBVt2rRJ69at8/DDD1dYPmnSpBqaESyf3GZNkdvUJnKb2kR2sybIbWoTuf3lcwQGa5Vjjz02d999d4477ricfPLJWbRoUa644opssskmOfjgg8vHtW/fPi1btsxTTz2VCy64IElSr1697Lzzznn00Udz4IEH1tRToKDq1KmTkSNHZsSIEVmwYEH22GOPNG7cOO+8804mT56cs88+O1tttVWGDBmSq6++Ot/61rdy5plnJkmuvPLKL7w43Q477JBNNtkkF198cb797W9n3rx5ue666yqcWxZWVr169TJ8+PBcfPHFadWqVXr37p0pU6bkiSeeSJLUrWv/BYpBbrOmyG1qE7lNbSK7WRPkNrWJ3P7yeUVZq2yyySa5+eab07x584wYMSLf+9730qVLl9x8882VDidcthfIpy8ctuzvLibG8uy333657rrr8uabb+bb3/52TjnllNx4441p27Zt+RemRo0a5YYbbkjLli1zzjnn5Oc//3lOOOGEbL/99p+77QYNGuSqq67KeuutlzPPPDPXXnttzjvvvPI9RWBVDRs2LKeddlruuuuunHbaafnHP/6Rc845J0nl87dCTZHbrElym9pEblNbyG7WFLlNbSK3v1x1SqVSqaYnAQCseVdccUVuvPHGTJkyJY0aNarp6QAAn0NuA0DtIbfXHKeQAoC10Ouvv57x48dnp512SoMGDfLUU09lzJgxOeKII3yZAoCCkdsAUHvI7S+XAgMA1kKNGjXKc889l9tuuy3z58/PxhtvnOOPPz6nn356TU8NAPgMuQ0AtYfc/nI5hRQAAAAAAFA4LuINAAAAAAAUjgIDAAAAAAAoHAUGAAAAAABQOAoMAAAAAACgcBQYAAAAAABA4SgwANaAYcOGZdiwYTU9DQBgJchtAKg95DasW+rX9AQAiuLVV1/NL3/5y/ztb3/Lhx9+mA033DAdOnRI//79fTkCgIKR2wBQe8htoKoUGABJnn322Rx99NHZdNNNc+ihh6Z169Z599138/zzz+c3v/mNL1QAUCByGwBqD7kNrA4FBkCSa665Jk2bNs3vfve7NGvWrMJ9s2bNqqFZ/ceSJUtSVlaWhg0b1ug8AKAo5DYA1B5yG1gdroEBkOSf//xnOnToUOnLVJK0bNmy/O933XVXjj766Oy6667p2rVr9t9///z2t7/9wu0vXrw4v/jFLzJkyJB07949O+64Y4488sg8+eSTFcbNmDEjnTt3zpgxYzJ27Njstdde2X777fPCCy9kxx13zEUXXVRp2++991622WabXHvttVV45gBQ+8htAKg95DawOhyBAZCkbdu2ee655/Laa6+lU6dOKxx32223pWPHjunfv3/q16+fP/7xj/nhD3+YUqmUo446aoXrzZs3L3feeWcGDhyYQw89NPPnz8/vfve7nHDCCbnzzjuzzTbbVBh/9913Z9GiRTnssMPSsGHDbLrpptlrr73ywAMP5Lzzzku9evXKx/7+979PqVTKgQceuPovBADUAnIbAGoPuQ2sjjqlUqlU05MAqGmPPfZYTjzxxCRJt27d0r179+y6667p3bt3GjRoUD7u3//+dxo1alRh3eOPPz7Tpk3LpEmTypctO4fnzTffnCRZunRpli5dWuGw1Dlz5mS//fZLv379cvHFFyf5zx4hAwYMSJMmTfLQQw+lRYsW5eP/8pe/5Pjjj8/111+fvn37li8/6KCD0rx58/LHAoC1ndwGgNpDbgOrwymkAJL06dMnt99+e/r3759XXnklv/71r3P88cenb9++efjhh8vHffrL1Ny5czN79uz06tUr06dPz9y5c1e4/Xr16pV/mSorK8u//vWvLFmyJF27ds1LL71UafzXvva1Cl+mkmS33XbLRhttlAkTJpQve+211/Lqq6/moIMOqvJzB4DaRm4DQO0ht4HV4RRSAP+rW7duueqqq7J48eK88sormTRpUsaOHZszzzwz99xzTzp06JBnnnkmo0ePzl//+tcsXLiwwvpz585N06ZNV7j9cePG5YYbbsibb76ZTz75pHz5ZpttVmns8pbVrVs3Bx54YG677bYsXLgwjRs3zoQJE7Leeutl3333XY1nDgC1j9wGgNpDbgNVpcAA+IyGDRumW7du6datW7bccsucd955mThxYg466KAce+yx2XrrrTNy5MhssskmadCgQSZPnpyxY8emrKxshdu89957M3LkyOy11145/vjj07Jly9SrVy/XXnttpk+fXmn8Zw+bXWbw4MEZM2ZMJk2alIEDB+b3v/999thjj8/9IgcAazO5DQC1h9wGVpUCA+BzdO3aNUnywQcf5JFHHsnixYtz9dVXZ9NNNy0fM2XKlC/czoMPPpjNN988V111VerUqVO+/Morr1yl+XTq1CnbbrttJkyYkDZt2uSdd97JBRdcsErbAIC1ldwGgNpDbgMrwzUwAJI8+eSTKZVKlZZPnjw5SbL11lunXr16SVJh3Ny5c3PXXXd94faXt+7zzz+fv/71r6s810GDBuWxxx7LTTfdlA033LDCBcYAYF0gtwGg9pDbwOpwBAZAkosuuigLFy7M3nvvna233jqffPJJnn322TzwwANp27ZthgwZkg8//DANGjTISSedlG984xuZP39+7rzzzrRs2TIzZ8783O3vscce+cMf/pBTTz01e+yxR2bMmJHbb789HTp0yIIFC1ZprgMHDsyll16ahx56KEcccUQaNGiwOk8dAGoduQ0AtYfcBlaHAgMgybnnnpuJEydm8uTJueOOO/LJJ59k0003zZFHHpmTTz45zZo1S7NmzXLllVfmiiuuyM9+9rO0atUqRxxxRFq0aJHzzz//c7e/7AvZHXfckb/85S/p0KFDLr300kycODFPPfXUKs21VatW6dOnTyZPnpxBgwatztMGgFpJbgNA7SG3gdVRp7S8Y7gAKLRTTz01r732Wh566KGangoA8AXkNgDUHnIbisU1MABqmQ8++MDeIABQS8htAKg95DYUj1NIAdQS06dPz7PPPpvf/e53qV+/fg4//PCanhIAsAJyGwBqD7kNxeUIDIBa4umnn865556bGTNmZNSoUWndunVNTwkAWAG5DQC1h9yG4nINDAAAAAAAoHAcgQEAAAAAABSOAgMAAAAAACgcBQYAAAAAAFA4CgwAAAAAAKBwFBgAAAAAAEDhKDAAAAAAAIDCUWAAAAAAAACFo8AAAAAAAAAKR4EBAAAAAAAUzv8Htpa/QKvgYDMAAAAASUVORK5CYII="/>
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
<h2 id="Visualisations-of-variables-By-Department"><a id="toc2_3_"></a><a href="#toc0_">Visualisations of variables By Department</a><a class="anchor-link" href="#Visualisations-of-variables-By-Department">¶</a></h2><p>Plot of key features by dept quartile distribution &amp; Violin plot</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [120]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">var</span> <span class="o">=</span> <span class="s1">'number_project'</span> <span class="c1"># Variable to plot</span>
<span class="n">hsplit</span> <span class="o">=</span> <span class="mi">4</span> <span class="c1"># Where to place the horizontal line</span>

<span class="c1"># List of unique departments</span>
<span class="n">departments</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span><span class="o">.</span><span class="n">unique</span><span class="p">()</span>
<span class="c1">#dep = ['sales']</span>
<span class="c1">#departments = np.array(dep)</span>

<span class="c1"># Set the style of the visualization</span>
<span class="n">sns</span><span class="o">.</span><span class="n">set</span><span class="p">(</span><span class="n">style</span><span class="o">=</span><span class="s2">"darkgrid"</span><span class="p">)</span>

<span class="c1"># Loop through departments</span>
<span class="k">for</span> <span class="n">department</span> <span class="ow">in</span> <span class="n">departments</span><span class="p">:</span>
    <span class="c1"># Subset data for the current department</span>
    <span class="n">department_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span> <span class="o">==</span> <span class="n">department</span><span class="p">]</span>
    
    <span class="c1"># Create a figure with two subplots (box plot and scatter plot)</span>
    <span class="n">fig</span><span class="p">,</span> <span class="n">axes</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">nrows</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">ncols</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">15</span><span class="p">,</span> <span class="mi">6</span><span class="p">),</span> <span class="n">sharey</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span>

    <span class="c1"># Box plot</span>
    <span class="n">sns</span><span class="o">.</span><span class="n">boxplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">department_data</span><span class="p">,</span> <span class="n">hue</span> <span class="o">=</span> <span class="s1">'left'</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - Quartile Distribution for </span><span class="si">{</span><span class="n">department</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
   <span class="c1"># axes[0].axhline(y=hsplit, color='red', linestyle='--', linewidth=2.5, label='Vertical Line 2')</span>

    <span class="c1"># Scatter plot</span>
    <span class="c1">#sns.scatterplot(x='salary', y='last_eval', data=department_data, hue='left', ax=axes[1], palette='colorblind')</span>
    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">department_data</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span><span class="s1">'left'</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">0.08</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 1'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">0.32</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">1.08</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 1'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">1.32</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">2.08</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 1'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">2.32</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span>  <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - Violin Plot for </span><span class="si">{</span><span class="n">department</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>

    <span class="c1"># Adjust layout</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>

    <span class="c1"># Show the plots</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
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
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [104]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">var</span> <span class="o">=</span> <span class="s1">'avg_mnth_hrs'</span> <span class="c1"># Variable to plot</span>
<span class="n">hsplit</span> <span class="o">=</span> <span class="mi">175</span> <span class="c1"># Where to place the horizontal line</span>

<span class="c1"># List of unique departments</span>
<span class="n">departments</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span><span class="o">.</span><span class="n">unique</span><span class="p">()</span>
<span class="c1">#dep = ['sales']</span>
<span class="c1">#departments = np.array(dep)</span>
<span class="c1"># Set the style of the visualization</span>
<span class="n">sns</span><span class="o">.</span><span class="n">set</span><span class="p">(</span><span class="n">style</span><span class="o">=</span><span class="s2">"whitegrid"</span><span class="p">)</span>

<span class="c1"># Loop through departments</span>
<span class="k">for</span> <span class="n">department</span> <span class="ow">in</span> <span class="n">departments</span><span class="p">:</span>
    <span class="c1"># Subset data for the current department</span>
    <span class="n">department_data</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span> <span class="o">==</span> <span class="n">department</span><span class="p">]</span>
    
    <span class="c1"># Calculate the percentage of outliers (for example, considering values beyond 1.5*IQR as outliers)</span>
    <span class="n">Q1</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">var</span><span class="p">]</span><span class="o">.</span><span class="n">quantile</span><span class="p">(</span><span class="mf">0.25</span><span class="p">)</span>
    <span class="n">Q3</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="n">var</span><span class="p">]</span><span class="o">.</span><span class="n">quantile</span><span class="p">(</span><span class="mf">0.75</span><span class="p">)</span>
    <span class="n">IQR</span> <span class="o">=</span> <span class="n">Q3</span> <span class="o">-</span> <span class="n">Q1</span>
    <span class="n">lower_bound</span> <span class="o">=</span> <span class="n">Q1</span> <span class="o">-</span> <span class="mf">.25</span> <span class="o">*</span> <span class="n">IQR</span>
    <span class="n">upper_bound</span> <span class="o">=</span> <span class="n">Q3</span> <span class="o">+</span> <span class="mf">.25</span> <span class="o">*</span> <span class="n">IQR</span>

    <span class="n">outliers_percentage</span> <span class="o">=</span> <span class="p">((</span><span class="n">department_data</span><span class="p">[</span><span class="n">var</span><span class="p">]</span> <span class="o">&lt;</span> <span class="n">lower_bound</span><span class="p">)</span> <span class="o">|</span> <span class="p">(</span><span class="n">department_data</span><span class="p">[</span><span class="n">var</span><span class="p">]</span> <span class="o">&gt;</span> <span class="n">upper_bound</span><span class="p">))</span><span class="o">.</span><span class="n">mean</span><span class="p">()</span> <span class="o">*</span> <span class="mi">100</span>

<span class="c1"># Annotate the plot with the percentage of outliers</span>
    



    <span class="c1"># Create a figure with two subplots (box plot and scatter plot)</span>
    <span class="n">fig</span><span class="p">,</span> <span class="n">axes</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">nrows</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">ncols</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">15</span><span class="p">,</span> <span class="mi">6</span><span class="p">),</span> <span class="n">sharey</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>

    <span class="c1"># Box plot</span>
    <span class="n">sns</span><span class="o">.</span><span class="n">boxplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">department_data</span><span class="p">,</span> <span class="n">hue</span> <span class="o">=</span> <span class="s1">'left'</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Quartile Distribution for </span><span class="si">{</span><span class="n">department</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>

    <span class="c1"># Scatter plot</span>
    <span class="c1">#sns.scatterplot(x='salary', y='last_eval', data=department_data, hue='left', ax=axes[1], palette='colorblind')</span>
    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">department_data</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span><span class="s1">'left'</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">0.08</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 1'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">0.32</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">1.08</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 1'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">1.32</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">2.08</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 1'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mf">2.32</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span>  <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Scatter Plot for </span><span class="si">{</span><span class="n">department</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="mf">1.05</span><span class="p">,</span> <span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">outliers_percentage</span><span class="si">:</span><span class="s1">.2f</span><span class="si">}</span><span class="s1">% Outliers'</span><span class="p">,</span> <span class="n">transform</span><span class="o">=</span><span class="n">plt</span><span class="o">.</span><span class="n">gca</span><span class="p">()</span><span class="o">.</span><span class="n">transAxes</span><span class="p">,</span> <span class="n">fontsize</span><span class="o">=</span><span class="mi">10</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>

    <span class="c1"># Adjust layout</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>

    <span class="c1"># Show the plots</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
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
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
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
<p><a href="#top"> scroll to top </a></p>
</div>
</div>
</div>
</div>
</main>
</body>
</html>