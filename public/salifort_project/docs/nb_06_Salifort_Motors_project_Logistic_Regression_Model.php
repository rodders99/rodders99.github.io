<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>nb 06_Salifort Motors project Logistic Regression Model</title>
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
<body class="jp-Notebook exclude-page" data-jp-theme-light="false" data-jp-theme-name="JupyterLab Dark" >
<main>


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

<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser"></div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt"></div>
<div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
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
<h1 id="Salifort-Motors---ML-Modelling---Logistic-Regression"><a id="toc1_"></a>
  <a href="#toc0_">Salifort Motors - ML Modelling - Logistic Regression</a>
  <a class="anchor-link" href="#Salifort-Motors---ML-Modelling---Logistic-Regression">¶</a></h1>
  <h3 id="Document-Information"><a id="toc1_1_1_"></a><a href="#toc0_">Document Information</a>
    <a class="anchor-link" href="#Document-Information">¶</a></h3>
    
<table style="margin-right:auto;margin-left:0px">
<tbody>
<tr>
<td>Document Title</td>
<td>Salifort Motors - ML Modelling - Logistical Regression</td>
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
<h3 id="Document-Overview"><a id="toc1_1_3_"></a><a href="#toc0_">Document Overview</a><a class="anchor-link" href="#Document-Overview">¶</a></h3><p>ML Modelling using Logistical Regression for HR Data provided by Salifort Motors. This notebook details the Logistical Regression Modelling process and Performance comparisons</p>
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
<h1 id="Table-of-contents">Table of contents<a id="toc0_"></a><a class="anchor-link" href="#Table-of-contents">¶</a></h1><ul>
<li><a href="#toc1_">Salifort Motors - ML Modelling - Logistic Regression</a><ul>
<li><a href="#toc1_1_1_">Document Information</a></li>
<li><a href="#toc1_1_2_">Client Details</a></li>
<li><a href="#toc1_1_3_">Document Overview</a></li>
</ul>
</li>
<li><a href="#toc2_"></a></li>
<li><a href="#toc3_">Logistic Regression:</a><ul>
<li><a href="#toc3_1_">Notes</a></li>
<li><a href="#toc3_2_">Initialise Notebook</a><ul>
<li><a href="#toc3_2_1_">Import Packages</a></li>
<li><a href="#toc3_2_2_">Initialise Notebook Options</a></li>
<li><a href="#toc3_2_3_">Set Pandas Options</a></li>
</ul>
</li>
<li><a href="#toc3_3_">Define Functions</a><ul>
<li><a href="#toc3_3_1_1_">make_lr_results(model_name: string, model_object: object)</a></li>
<li><a href="#toc3_3_1_2_">display_results() - Function to retrieve scores from Results.csv and display them</a></li>
<li><a href="#toc3_3_1_3_">classification_report_summary(name: str, y_var: str, y_pred_var: str)</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#toc4_">Construct Models - Logistical Regression</a><ul>
<li><a href="#toc4_1_">Construct Model - Logistical Regression 1</a><ul>
<li><a href="#toc4_1_1_">Import data - <code>model_lr1</code></a><ul>
<li><a href="#toc4_1_1_1_">Code flags:</a></li>
</ul>
</li>
<li><a href="#toc4_1_2_">Prepare data for modelling - <code>model_lr1</code></a></li>
<li><a href="#toc4_1_3_">Isolate Outcome and Feature Variables - <code>model_lr1</code></a></li>
<li><a href="#toc4_1_4_">Train Test split data - <code>model_lr1</code></a></li>
<li><a href="#toc4_1_5_">Apply StandardScalar to feature variables - model_lr1</a></li>
<li><a href="#toc4_1_6_">Instantiate Model - <code>model_lr1</code></a></li>
<li><a href="#toc4_1_7_">Fit Data for <code>model_lr1</code> - Train data</a></li>
<li><a href="#toc4_1_8_">Make Predictions - <code>model_lr1</code> - Test data</a></li>
<li><a href="#toc4_1_9_">Classification Report - <code>model_lr1</code> - Test data</a></li>
<li><a href="#toc4_1_10_">Prepare and Save Results - <code>model_lr1</code> - Test data</a></li>
</ul>
</li>
<li><a href="#toc4_2_">Performance Results &amp; Comparisons - <code>model_lr1</code> - Test data</a><ul>
<li><a href="#toc4_2_1_">Display Results - <code>model_lr1</code> - Test Data</a></li>
<li><a href="#toc4_2_2_">Make Predictions - <code>model_lr1</code> - Train data</a></li>
<li><a href="#toc4_2_3_">Classification Report - <code>model_lr1</code> - Train data</a></li>
<li><a href="#toc4_2_4_">Prepare and Save Results - <code>model_lr1</code> - Train data</a></li>
</ul>
</li>
<li><a href="#toc4_3_">Performance Results &amp; Comparisons - <code>model_lr1</code> - Train data</a><ul>
<li><a href="#toc4_3_1_">Display Results - <code>model_lr1</code> - Train data</a></li>
</ul>
</li>
<li><a href="#toc4_4_">Construct Model - Logistical Regression 2</a><ul>
<li><a href="#toc4_4_1_">Import data - <code>model_lr2</code></a><ul>
<li><a href="#toc4_4_1_1_">Code flags:</a></li>
</ul>
</li>
<li><a href="#toc4_4_2_">Prepare data for modelling - <code>model_lr2</code></a></li>
<li><a href="#toc4_4_3_">Isolate Outcome and Feature Variables - <code>model_lr2</code></a></li>
<li><a href="#toc4_4_4_">Train Test split data - <code>model_lr2</code></a></li>
<li><a href="#toc4_4_5_">Apply StandardScalar to feature variables - <code>model_lr2</code></a></li>
<li><a href="#toc4_4_6_">Instantiate Model - <code>model_lr2</code></a></li>
<li><a href="#toc4_4_7_">Fit Data for <code>model_lr2</code> - Train data</a></li>
<li><a href="#toc4_4_8_">Make Predictions - <code>model_lr2</code> - Test data</a></li>
<li><a href="#toc4_4_9_">Classification Report - <code>model_lr2</code> - Test data</a></li>
<li><a href="#toc4_4_10_">Prepare and Save Results - <code>model_lr2</code> - Test data</a></li>
</ul>
</li>
<li><a href="#toc4_5_">Performance Results &amp; Comparisons - <code>model_lr2</code> - Test data</a><ul>
<li><a href="#toc4_5_1_">Display Results - <code>model_lr2</code> - Test Data</a></li>
<li><a href="#toc4_5_2_">Make Predictions - <code>model_lr2</code> - Train data</a></li>
<li><a href="#toc4_5_3_">Classification Report - <code>model_lr1</code> - Train data</a></li>
<li><a href="#toc4_5_4_">Prepare and Save Results - <code>model_lr2</code> - Train data</a></li>
</ul>
</li>
<li><a href="#toc4_6_">Performance Results &amp; Comparisons - <code>model_lr2</code> - Train data</a><ul>
<li><a href="#toc4_6_1_">Display Results - <code>model_lr2</code> - Train data</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#toc5_">Review Results</a><ul>
<li><a href="#toc5_1_">Dataset comparison - Logistical Regression</a></li>
<li><a href="#toc5_2_">Model performance</a><ul>
<li><a href="#toc5_2_1_">Confusion Matrix Heatmap - <code>model_lr1</code></a></li>
<li><a href="#toc5_2_2_">Feature Importance</a></li>
</ul>
</li>
<li><a href="#toc5_3_">Precision / Recall Curve</a></li>
<li><a href="#toc5_4_">ROC Curve Plot</a></li>
<li><a href="#toc5_5_">Conclusions</a></li>
<li><a href="#toc5_6_">Conclusion, dataset comparison - Logistical Regression.</a></li>
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
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h1 id="Logistic-Regression:"><a id="toc3_"></a><a href="#toc0_">Logistic Regression:</a><a class="anchor-link" href="#Logistic-Regression:">¶</a></h1><p>For the purposes of self education, I'll model this on the two data sets. First with all features and second with <code>dept</code> features removed</p>
<h2 id="Notes"><a id="toc3_1_"></a><a href="#toc0_">Notes</a><a class="anchor-link" href="#Notes">¶</a></h2><p>This runs very quickly, no real need to pickle the model.</p>
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
<h2 id="Initialise-Notebook"><a id="toc3_2_"></a><a href="#toc0_">Initialise Notebook</a><a class="anchor-link" href="#Initialise-Notebook">¶</a></h2>
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
<h3 id="Import-Packages"><a id="toc3_2_1_"></a><a href="#toc0_">Import Packages</a><a class="anchor-link" href="#Import-Packages">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [88]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Import packages</span>

<span class="c1"># Data manipulation</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>

<span class="c1"># Data visualization</span>
<span class="kn">import</span> <span class="nn">matplotlib.pyplot</span> <span class="k">as</span> <span class="nn">plt</span>
<span class="kn">import</span> <span class="nn">seaborn</span> <span class="k">as</span> <span class="nn">sns</span>

<span class="c1"># Set Options</span>
<span class="n">pd</span><span class="o">.</span><span class="n">set_option</span><span class="p">(</span><span class="s1">'display.max_columns'</span><span class="p">,</span> <span class="kc">None</span><span class="p">)</span>

<span class="c1"># Data modelling Imports</span>
<span class="kn">from</span> <span class="nn">xgboost</span> <span class="kn">import</span> <span class="n">XGBClassifier</span><span class="p">,</span> <span class="n">XGBRegressor</span><span class="p">,</span> <span class="n">plot_importance</span>

<span class="kn">from</span> <span class="nn">sklearn.linear_model</span> <span class="kn">import</span> <span class="n">LogisticRegression</span>
<span class="kn">from</span> <span class="nn">sklearn.tree</span> <span class="kn">import</span> <span class="n">DecisionTreeClassifier</span>
<span class="kn">from</span> <span class="nn">sklearn.ensemble</span> <span class="kn">import</span> <span class="n">RandomForestClassifier</span>

<span class="c1"># For metrics and helpful functions</span>
<span class="kn">from</span> <span class="nn">sklearn.model_selection</span> <span class="kn">import</span> <span class="n">GridSearchCV</span><span class="p">,</span> <span class="n">train_test_split</span>
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="kn">import</span> <span class="n">accuracy_score</span><span class="p">,</span> <span class="n">precision_score</span><span class="p">,</span> <span class="n">recall_score</span><span class="p">,</span> <span class="n">f1_score</span>
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="kn">import</span> <span class="n">confusion_matrix</span><span class="p">,</span> <span class="n">ConfusionMatrixDisplay</span><span class="p">,</span> <span class="n">classification_report</span>
<span class="kn">from</span> <span class="nn">sklearn</span> <span class="kn">import</span> <span class="n">metrics</span>
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="kn">import</span> <span class="n">roc_auc_score</span><span class="p">,</span> <span class="n">roc_curve</span><span class="p">,</span> <span class="n">precision_recall_fscore_support</span><span class="p">,</span> <span class="n">precision_recall_curve</span><span class="p">,</span> <span class="n">auc</span>
<span class="kn">from</span> <span class="nn">sklearn.tree</span> <span class="kn">import</span> <span class="n">plot_tree</span>
<span class="kn">from</span> <span class="nn">sklearn.preprocessing</span> <span class="kn">import</span> <span class="n">StandardScaler</span>

<span class="kn">import</span> <span class="nn">statsmodels.api</span> <span class="k">as</span> <span class="nn">sm</span>

<span class="kn">from</span> <span class="nn">datetime</span> <span class="kn">import</span> <span class="n">datetime</span> <span class="k">as</span> <span class="n">dt</span>

<span class="kn">import</span> <span class="nn">json</span>

<span class="c1"># For saving models</span>
<span class="kn">import</span> <span class="nn">pickle</span>
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
<h3 id="Initialise-Notebook-Options"><a id="toc3_2_2_"></a><a href="#toc0_">Initialise Notebook Options</a><a class="anchor-link" href="#Initialise-Notebook-Options">¶</a></h3>
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
<h3 id="Set-Pandas-Options"><a id="toc3_2_3_"></a><a href="#toc0_">Set Pandas Options</a><a class="anchor-link" href="#Set-Pandas-Options">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [89]:</div>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [90]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Source folder for cleaned data</span>
<span class="n">load_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/00-data_cleaned/"</span> 
<span class="n">load_path</span> <span class="o">=</span> <span class="s2">"./00-data_cleaned/"</span> 
<span class="c1"># destination for pickle saved models</span>
<span class="n">save_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/04-pickle-ML-models/"</span> 
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
<h2 id="Define-Functions"><a id="toc3_3_"></a><a href="#toc0_">Define Functions</a><a class="anchor-link" href="#Define-Functions">¶</a></h2>
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
<h4 id="make_lr_results(model_name:-string,-model_object:-object)"><a id="toc3_3_1_1_"></a><a href="#toc0_">make_lr_results(model_name: string, model_object: object)</a><a class="anchor-link" href="#make_lr_results(model_name:-string,-model_object:-object)">¶</a></h4>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [91]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Get results from Logistic Regression to store in comparison table</span>
<span class="k">def</span> <span class="nf">make_results</span><span class="p">(</span><span class="n">model_name</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span> <span class="n">model_object</span><span class="p">:</span> <span class="nb">object</span><span class="p">,</span> <span class="n">X_var</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span> <span class="n">y_var</span><span class="p">:</span> <span class="nb">str</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">:</span> <span class="nb">str</span><span class="p">):</span>
<span class="w">    </span><span class="sd">'''</span>
<span class="sd">    Returns a pandas df with the F1, recall, precision, and accuracy scores</span>
<span class="sd">    for the model with the best mean F1 score across all validation folds.     </span>

<span class="sd">    In: </span>
<span class="sd">        model_name (string):  How you want your model to be named in the output table</span>
<span class="sd">        model_object:         The model object</span>
<span class="sd">        X_var:                numpy array of X data</span>
<span class="sd">        y_var:                numpy array of y data</span>
<span class="sd">        y_pred_var:           numpy array of predict</span>

<span class="sd">    Out: pandas df containing precision, recall, f1, accuracy, and AUC scores of the models</span>
<span class="sd">  </span>
<span class="sd"> </span>
<span class="sd">    '''</span>

    <span class="c1"># Get all the results from the CV and put them in a dict</span>
    <span class="n">report</span> <span class="o">=</span> <span class="n">classification_report</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">,</span>  <span class="n">output_dict</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>

    <span class="c1"># Calculate precision, recall, and F1 score for the "True" class</span>
    <span class="n">predict_precision</span><span class="p">,</span> <span class="n">predict_recall</span><span class="p">,</span> <span class="n">predict_f1_score</span><span class="p">,</span> <span class="n">_</span> <span class="o">=</span> <span class="n">precision_recall_fscore_support</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">,</span> <span class="n">average</span><span class="o">=</span><span class="kc">None</span><span class="p">)</span>
    <span class="n">f1_true_class</span> <span class="o">=</span> <span class="n">predict_f1_score</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span>  <span class="c1"># Index 1 corresponds to the "True" class</span>
    <span class="n">f1_false_class</span> <span class="o">=</span> <span class="n">predict_f1_score</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span>  <span class="c1"># Index 1 corresponds to the "True" class</span>


    <span class="c1"># Extract accuracy, precision, recall, and f1 score from that row</span>
    <span class="n">f1</span> <span class="o">=</span> <span class="n">report</span><span class="p">[</span><span class="s1">'weighted avg'</span><span class="p">][</span><span class="s1">'f1-score'</span><span class="p">]</span>
    <span class="n">recall</span> <span class="o">=</span> <span class="n">report</span><span class="p">[</span><span class="s1">'weighted avg'</span><span class="p">][</span><span class="s1">'recall'</span><span class="p">]</span>
    <span class="n">precision</span> <span class="o">=</span> <span class="n">report</span><span class="p">[</span><span class="s1">'weighted avg'</span><span class="p">][</span><span class="s1">'precision'</span><span class="p">]</span>
    <span class="n">accuracy</span> <span class="o">=</span> <span class="n">report</span><span class="p">[</span><span class="s1">'accuracy'</span><span class="p">]</span>
    <span class="n">auc</span> <span class="o">=</span> <span class="n">roc_auc_score</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">model_object</span><span class="o">.</span><span class="n">predict_proba</span><span class="p">(</span><span class="n">X_var</span><span class="p">)[:,</span><span class="mi">1</span><span class="p">])</span>
    <span class="c1"># Create table of results</span>
    <span class="n">table</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">({</span><span class="s1">'Model'</span><span class="p">:</span> <span class="n">model_name</span><span class="p">,</span>
                          <span class="s1">'Precision'</span><span class="p">:</span> <span class="n">precision</span><span class="p">,</span>
                          <span class="s1">'Recall'</span><span class="p">:</span> <span class="n">recall</span><span class="p">,</span>
                          <span class="s1">'F1'</span><span class="p">:</span> <span class="n">f1</span><span class="p">,</span>
                          <span class="s1">'Accuracy'</span><span class="p">:</span> <span class="n">accuracy</span><span class="p">,</span>
                          <span class="s1">'AUC'</span><span class="p">:</span> <span class="n">auc</span><span class="p">,</span>
                          <span class="s1">'Predict Leave'</span><span class="p">:</span> <span class="n">f1_true_class</span><span class="p">,</span>
                          <span class="s1">'Predict Stay'</span> <span class="p">:</span> <span class="n">f1_false_class</span>
                                          
                        <span class="p">},</span>
                        <span class="n">index</span><span class="o">=</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span>
                       <span class="p">)</span>
  
    <span class="k">return</span> <span class="n">table</span>
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
<h4 id="display_results()---Function-to-retrieve-scores-from-Results.csv-and-display-them"><a id="toc3_3_1_2_"></a><a href="#toc0_">display_results() - Function to retrieve scores from Results.csv and display them</a><a class="anchor-link" href="#display_results()---Function-to-retrieve-scores-from-Results.csv-and-display-them">¶</a></h4>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [92]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">display_results</span><span class="p">():</span>
<span class="w">    </span><span class="sd">'''</span>
<span class="sd">    Load Results.csv containing store test scores, return the scores for display</span>

<span class="sd">    In: </span>
<span class="sd">        none</span>

<span class="sd">    Out: pandas df of Results,csv containing precision, recall, f1, accuracy, and AUC scores of the models</span>
<span class="sd">    '''</span>
    <span class="n">model_results</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="s2">"Results.csv"</span><span class="p">)</span>
    <span class="n">model_results</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="n">columns</span><span class="o">=</span><span class="p">[</span><span class="s1">'Unnamed: 0'</span><span class="p">],</span> <span class="n">inplace</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
    <span class="n">model_results</span> <span class="o">=</span> <span class="n">model_results</span><span class="o">.</span><span class="n">sort_values</span><span class="p">(</span><span class="n">by</span><span class="o">=</span><span class="s1">'AUC'</span><span class="p">,</span> <span class="n">ascending</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span>
    
    <span class="k">return</span> <span class="n">model_results</span>
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
<h4 id="classification_report_summary(name:-str,-y_var:-str,-y_pred_var:-str)"><a id="toc3_3_1_3_"></a><a href="#toc0_">classification_report_summary(name: str, y_var: str, y_pred_var: str)</a><a class="anchor-link" href="#classification_report_summary(name:-str,-y_var:-str,-y_pred_var:-str)">¶</a></h4>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [93]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">classification_report_summary</span><span class="p">(</span><span class="n">name</span><span class="p">:</span><span class="nb">str</span><span class="p">,</span> <span class="n">y_var</span><span class="p">:</span><span class="nb">str</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">:</span><span class="nb">str</span><span class="p">):</span>
<span class="w">    </span><span class="sd">'''</span>
<span class="sd">    Gather stats from predictions</span>

<span class="sd">    In: </span>
<span class="sd">        name:str    : Test data name for report header e.g. TEST or TRAIN</span>
<span class="sd">        y_var       : y variable</span>
<span class="sd">        y_pred_var  : y prediction variable</span>

<span class="sd">    Out: Display of precision, recall, f1, accuracy, and AUC scores of the models, Weighted Average and Prediction f1 score for true/false</span>
<span class="sd">    '''</span>
    <span class="n">targetnames</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'Predicted would not leave'</span><span class="p">,</span> <span class="s1">'Predicted would leave'</span><span class="p">]</span>

  
    
    <span class="nb">print</span><span class="p">(</span><span class="s2">"</span><span class="se">\n</span><span class="s2">Classification Report : "</span><span class="p">,</span> <span class="n">name</span><span class="p">)</span>
    <span class="nb">print</span><span class="p">(</span><span class="n">classification_report</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">,</span> <span class="n">target_names</span><span class="o">=</span><span class="n">targetnames</span><span class="p">))</span>
    
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Recall        : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">recall_score</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">)))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"f1_score      : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">f1_score</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">)))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Precision     : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">precision_score</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">)))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Accuracy      : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">accuracy_score</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">)))</span>
    
    <span class="n">report</span> <span class="o">=</span> <span class="n">classification_report</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">,</span>  <span class="n">output_dict</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
    
    <span class="nb">print</span><span class="p">()</span>
    <span class="nb">print</span><span class="p">(</span><span class="s1">'</span><span class="se">\u2500</span><span class="s1">'</span> <span class="o">*</span> <span class="mi">35</span><span class="p">)</span> 
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Weighted Average"</span><span class="p">)</span>
    <span class="nb">print</span><span class="p">(</span><span class="s1">'</span><span class="se">\u2500</span><span class="s1">'</span> <span class="o">*</span> <span class="mi">35</span><span class="p">)</span> 
    
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Recall        : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">report</span><span class="p">[</span><span class="s1">'weighted avg'</span><span class="p">][</span><span class="s1">'recall'</span><span class="p">]))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"f1 Score      : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">report</span><span class="p">[</span><span class="s1">'weighted avg'</span><span class="p">][</span><span class="s1">'f1-score'</span><span class="p">]))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Precision     : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">report</span><span class="p">[</span><span class="s1">'weighted avg'</span><span class="p">][</span><span class="s1">'precision'</span><span class="p">]))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Support       : </span><span class="si">{:.0f}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">report</span><span class="p">[</span><span class="s1">'weighted avg'</span><span class="p">][</span><span class="s1">'support'</span><span class="p">]))</span>
    
      <span class="c1"># Calculate precision, recall, and F1 score for the "True" class</span>
    <span class="n">predict_precision</span><span class="p">,</span> <span class="n">predict_recall</span><span class="p">,</span> <span class="n">predict_f1_score</span><span class="p">,</span> <span class="n">_</span> <span class="o">=</span> <span class="n">precision_recall_fscore_support</span><span class="p">(</span><span class="n">y_var</span><span class="p">,</span> <span class="n">y_pred_var</span><span class="p">,</span> <span class="n">average</span><span class="o">=</span><span class="kc">None</span><span class="p">)</span>
    <span class="n">f1_true_class</span> <span class="o">=</span> <span class="n">predict_f1_score</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span>  <span class="c1"># Index 1 corresponds to the "True" class</span>
    <span class="n">f1_false_class</span> <span class="o">=</span> <span class="n">predict_f1_score</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span>  <span class="c1"># Index 0 corresponds to the "False" class</span>
    
    <span class="nb">print</span><span class="p">()</span>
    <span class="nb">print</span><span class="p">(</span><span class="s1">'</span><span class="se">\u2500</span><span class="s1">'</span> <span class="o">*</span> <span class="mi">35</span><span class="p">)</span> 
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Prediction F1 score"</span><span class="p">)</span>
    <span class="nb">print</span><span class="p">(</span><span class="s1">'</span><span class="se">\u2500</span><span class="s1">'</span> <span class="o">*</span> <span class="mi">35</span><span class="p">)</span> 
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Predict Leave : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">f1_true_class</span><span class="p">))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Support Stay  : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">f1_false_class</span><span class="p">))</span>
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
<h1 id="Construct-Models---Logistical-Regression"><a id="toc4_"></a><a href="#toc0_">Construct Models - Logistical Regression</a><a class="anchor-link" href="#Construct-Models---Logistical-Regression">¶</a></h1><ul>
<li>Feature Engineered</li>
<li>Outliers Removed</li>
<li>All Features</li>
</ul>
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
<h2 id="Construct-Model---Logistical-Regression-1"><a id="toc4_1_"></a><a href="#toc0_">Construct Model - Logistical Regression 1</a><a class="anchor-link" href="#Construct-Model---Logistical-Regression-1">¶</a></h2><p>This is the model that will include all of the features included after Feature Engineering has been completed.
There are 17 features in total.</p>
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
<h3 id="Import-data---model_lr1"><a id="toc4_1_1_"></a><a href="#toc0_">Import data - <code>model_lr1</code></a><a class="anchor-link" href="#Import-data---model_lr1">¶</a></h3><p>Two datasets for model performance comparison, :</p>
<ul>
<li><code>salifort_data_FE.csv</code> is the full data set feature engineered with <code>salary</code> encoded to ordinal,  <code>avg_mth_hrs</code> binary encoded to <code>overwork</code> and dept encoded with dummies</li>
<li><code>salifort_data_FE_focus.csv</code> is the same data with the dummy encoded dept fields removed.</li>
</ul>
<p><code>Dept</code> appears to have low correlation across the dataset and I'm curious how much the models are influenced with low correlation features. It turns out that low correlation features have little impact on model performance. which is no surprise really!</p>
<h4 id="Code-flags:"><a id="toc4_1_1_1_"></a><a href="#toc0_">Code flags:</a><a class="anchor-link" href="#Code-flags:">¶</a></h4><p><strong>rerun</strong> = flag to identify the first run of the model comparisons and write a NEW Results.csv file. 0 = first run and a new file will be created with headers / 1 = Continuation, Results will be appended to the file.</p>
<p><strong>dataset</strong> = Text indicating which dataset is being used, added to the model description during csv save to Results.csv</p>
<p><strong>model_prefix</strong> = text indicating which ML model is being used, added to the model description during csv save to Results.csv</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [94]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">df1</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_NoOl_NoFE_AllFeat.csv"</span><span class="p">,</span> <span class="n">index_col</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span> 

<span class="nb">print</span><span class="p">(</span><span class="s2">"</span><span class="se">\n</span><span class="s2">data_cleaned_NoOl_NoFE_AllFeat.csv"</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">shape</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">head</span><span class="p">(</span><span class="mi">1</span><span class="p">))</span>

<span class="n">df1</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_Ol_NoFE_AllFeat.csv"</span><span class="p">,</span> <span class="n">index_col</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span> <span class="c1"># includes outliers</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"</span><span class="se">\n</span><span class="s2">data_cleaned_Ol_NoFE_AllFeat.csv"</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">shape</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">head</span><span class="p">(</span><span class="mi">1</span><span class="p">))</span>

<span class="n">df1</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_NoOl_FE_AllFeat.csv"</span><span class="p">,</span> <span class="n">index_col</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span> 
<span class="nb">print</span><span class="p">(</span><span class="s2">"</span><span class="se">\n</span><span class="s2">data_cleaned_NoOl_FE_AllFeat.csv"</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">shape</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">head</span><span class="p">(</span><span class="mi">1</span><span class="p">))</span>
<span class="n">df1</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_NoOl_FE_NoDept.csv"</span><span class="p">,</span> <span class="n">index_col</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span> 
<span class="nb">print</span><span class="p">(</span><span class="s2">"</span><span class="se">\n</span><span class="s2">data_cleaned_NoOl_FE_NoDept.csv"</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">shape</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">head</span><span class="p">(</span><span class="mi">1</span><span class="p">))</span>

<span class="c1"># model_prefix : Str = prefix for results.csv added to dataset</span>
<span class="n">model_prefix</span>      <span class="o">=</span> <span class="s1">'lr1'</span>

<span class="c1"># dataset : Str = dataset name for results.csv</span>
<span class="n">dataset</span>           <span class="o">=</span> <span class="s1">'ALLFeat'</span>

<span class="c1"># rerun : int 1 = append to the Results.csv file with no headers / 0 = Write new file with headers</span>
<span class="n">rerun</span>             <span class="o">=</span> <span class="mi">0</span>

<span class="nb">print</span><span class="p">(</span><span class="s2">"df1 - Feature engineering on salary, avg_mnth_hrs, dept, outliers removed</span><span class="se">\n</span><span class="s2">"</span><span class="p">)</span>

<span class="c1"># Display dataframe columns</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="o">.</span><span class="n">shape</span><span class="p">)</span>
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
<pre>
data_cleaned_NoOl_NoFE_AllFeat.csv
(11167, 10)
   satisfaction  last_eval  number_project  avg_mnth_hrs  tenure  accident  left  promotion   dept salary
0          0.38       0.53            2.00        157.00    3.00      0.00  1.00       0.00  sales    low

data_cleaned_Ol_NoFE_AllFeat.csv
(11991, 10)
   satisfaction  last_eval  number_project  avg_mnth_hrs  tenure  accident  left  promotion   dept salary
0          0.38       0.53               2           157       3         0     1          0  sales    low

data_cleaned_NoOl_FE_AllFeat.csv
(11167, 18)
   satisfaction  last_eval  number_project  tenure  left  promotion  salary  dept_accounting  dept_hr  dept_it  \
0          0.38       0.53            2.00    3.00  1.00       0.00       0            False    False    False   

   dept_management  dept_marketing  dept_product_mng  dept_randd  dept_sales  dept_support  dept_technical  overworked  
0            False           False             False       False        True         False           False           0  

data_cleaned_NoOl_FE_NoDept.csv
(11167, 8)
   satisfaction  last_eval  number_project  overworked  tenure  left  promotion  salary
0          0.38       0.53            2.00           0    3.00  1.00       0.00       0
df1 - Feature engineering on salary, avg_mnth_hrs, dept, outliers removed

(11167, 8)
</pre>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [95]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Load cleaned dataset into a dataframe</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Started // Last Run ="</span><span class="p">,</span> <span class="n">dt</span><span class="o">.</span><span class="n">now</span><span class="p">()</span><span class="o">.</span><span class="n">strftime</span><span class="p">(</span><span class="s2">"%Y-%m-</span><span class="si">%d</span><span class="s2"> %H:%M:%S"</span><span class="p">),</span><span class="s2">"</span><span class="se">\n</span><span class="s2">"</span><span class="p">)</span>

<span class="c1"># data_cleaned_NoOl_FE_AllFeat.csv = Feature engineering on salary, avg_mnth_hrs, dept. Accident, Duplicates, and Outliers removed</span>
<span class="n">df1</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_NoOl_NoFE_AllFeat.csv"</span><span class="p">,</span> <span class="n">index_col</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span> 
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
<pre>Started // Last Run = 2023-12-04 12:00:15 

</pre>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [96]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># little bit of feature engineering</span>

<span class="n">df1</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span>
    <span class="n">df1</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">]</span><span class="o">.</span><span class="n">astype</span><span class="p">(</span><span class="s1">'category'</span><span class="p">)</span>
    <span class="o">.</span><span class="n">cat</span><span class="o">.</span><span class="n">set_categories</span><span class="p">([</span><span class="s1">'low'</span><span class="p">,</span> <span class="s1">'medium'</span><span class="p">,</span> <span class="s1">'high'</span><span class="p">])</span>
    <span class="o">.</span><span class="n">cat</span><span class="o">.</span><span class="n">codes</span>
<span class="p">)</span>

<span class="c1"># One Hot Encode dept</span>
<span class="n">df1</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">get_dummies</span><span class="p">(</span><span class="n">df1</span><span class="p">,</span> <span class="n">columns</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'dept'</span><span class="p">])</span>
<span class="n">df1</span><span class="o">.</span><span class="n">dtypes</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[96]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>satisfaction        float64
last_eval           float64
number_project      float64
avg_mnth_hrs        float64
tenure              float64
accident            float64
left                float64
promotion           float64
salary                 int8
dept_accounting        bool
dept_hr                bool
dept_it                bool
dept_management        bool
dept_marketing         bool
dept_product_mng       bool
dept_randd             bool
dept_sales             bool
dept_support           bool
dept_technical         bool
dtype: object</pre>
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
<h3 id="Prepare-data-for-modelling---model_lr1"><a id="toc4_1_2_"></a><a href="#toc0_">Prepare data for modelling - <code>model_lr1</code></a><a class="anchor-link" href="#Prepare-data-for-modelling---model_lr1">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [97]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">model_data</span> <span class="o">=</span> <span class="n">df1</span><span class="o">.</span><span class="n">copy</span><span class="p">()</span> <span class="c1"># copy df to df used for modelling</span>
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
<h3 id="Isolate-Outcome-and-Feature-Variables---model_lr1"><a id="toc4_1_3_"></a><a href="#toc0_">Isolate Outcome and Feature Variables - <code>model_lr1</code></a><a class="anchor-link" href="#Isolate-Outcome-and-Feature-Variables---model_lr1">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [98]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Linear Regression model</span>

<span class="c1"># Save X and Y data into variables</span>
<span class="n">Y</span> <span class="o">=</span> <span class="n">model_data</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="c1"># Isolate the outcome variable</span>
<span class="n">X</span> <span class="o">=</span> <span class="n">model_data</span><span class="o">.</span><span class="n">copy</span><span class="p">()</span>
<span class="n">X</span> <span class="o">=</span> <span class="n">X</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="s1">'left'</span><span class="p">,</span> <span class="n">axis</span> <span class="o">=</span> <span class="mi">1</span><span class="p">)</span> <span class="c1"># Isolate the feature variables, drop the outcome variable left</span>
<span class="c1">#X = sm.add_constant(X)</span>
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
<h3 id="Train-Test-split-data---model_lr1"><a id="toc4_1_4_"></a><a href="#toc0_">Train Test split data - <code>model_lr1</code></a><a class="anchor-link" href="#Train-Test-split-data---model_lr1">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [99]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Split Test/Train Data</span>
<span class="n">X_train</span><span class="p">,</span> <span class="n">X_test</span><span class="p">,</span> <span class="n">y_train</span><span class="p">,</span> <span class="n">y_test</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">X</span><span class="p">,</span><span class="n">Y</span><span class="p">,</span> <span class="n">test_size</span><span class="o">=</span><span class="mf">0.25</span><span class="p">,</span> <span class="n">stratify</span><span class="o">=</span><span class="n">Y</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span><span class="mi">42</span><span class="p">)</span>
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
<h3 id="Apply-StandardScalar-to-feature-variables---model_lr1"><a id="toc4_1_5_"></a><a href="#toc0_">Apply StandardScalar to feature variables - model_lr1</a><a class="anchor-link" href="#Apply-StandardScalar-to-feature-variables---model_lr1">¶</a></h3><p>Standardize features by removing the mean and scaling to unit variance. Generally only required for regression models.</p>
<p>The standard score of a sample x is calculated as:</p>
<p>$$ z = \frac{(x - u)}{s}$$</p>
<p>where u is the mean of the training samples or zero if with_mean=False, and s is the standard deviation of the training samples or one if with_std=False.</p>
<p>Centering and scaling happen independently on each feature by computing the relevant statistics on the samples in the training set. Mean and standard deviation are then stored to be used on later data using transform.</p>
<p>Standardisation of a dataset is a common requirement for many machine learning estimators: they might behave badly if the individual features do not more or less look like standard normally distributed data (e.g. Gaussian with 0 mean and unit variance).</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [100]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">scaler</span> <span class="o">=</span> <span class="n">StandardScaler</span><span class="p">()</span>
<span class="n">X_train</span> <span class="o">=</span> <span class="n">scaler</span><span class="o">.</span><span class="n">fit_transform</span><span class="p">(</span><span class="n">X_train</span><span class="p">)</span>
<span class="n">X_test</span> <span class="o">=</span> <span class="n">scaler</span><span class="o">.</span><span class="n">transform</span><span class="p">(</span><span class="n">X_test</span><span class="p">)</span>
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
<h3 id="Instantiate-Model---model_lr1"><a id="toc4_1_6_"></a><a href="#toc0_">Instantiate Model - <code>model_lr1</code></a><a class="anchor-link" href="#Instantiate-Model---model_lr1">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [101]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Fit the multiple regression model</span>
<span class="n">model_lr1</span> <span class="o">=</span> <span class="n">LogisticRegression</span><span class="p">()</span> <span class="c1"># Training Data</span>
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
<h3 id="Fit-Data-for-model_lr1---Train-data"><a id="toc4_1_7_"></a><a href="#toc0_">Fit Data for <code>model_lr1</code> - Train data</a><a class="anchor-link" href="#Fit-Data-for-model_lr1---Train-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [102]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">model_lr1</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">X_train</span><span class="p">,</span> <span class="n">y_train</span><span class="p">)</span> <span class="c1"># Training data for model_lr1</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[102]:</div>
<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/html" tabindex="0">
<style>#sk-container-id-3 {color: black;}#sk-container-id-3 pre{padding: 0;}#sk-container-id-3 div.sk-toggleable {background-color: white;}#sk-container-id-3 label.sk-toggleable__label {cursor: pointer;display: block;width: 100%;margin-bottom: 0;padding: 0.3em;box-sizing: border-box;text-align: center;}#sk-container-id-3 label.sk-toggleable__label-arrow:before {content: "▸";float: left;margin-right: 0.25em;color: #696969;}#sk-container-id-3 label.sk-toggleable__label-arrow:hover:before {color: black;}#sk-container-id-3 div.sk-estimator:hover label.sk-toggleable__label-arrow:before {color: black;}#sk-container-id-3 div.sk-toggleable__content {max-height: 0;max-width: 0;overflow: hidden;text-align: left;background-color: #f0f8ff;}#sk-container-id-3 div.sk-toggleable__content pre {margin: 0.2em;color: black;border-radius: 0.25em;background-color: #f0f8ff;}#sk-container-id-3 input.sk-toggleable__control:checked~div.sk-toggleable__content {max-height: 200px;max-width: 100%;overflow: auto;}#sk-container-id-3 input.sk-toggleable__control:checked~label.sk-toggleable__label-arrow:before {content: "▾";}#sk-container-id-3 div.sk-estimator input.sk-toggleable__control:checked~label.sk-toggleable__label {background-color: #d4ebff;}#sk-container-id-3 div.sk-label input.sk-toggleable__control:checked~label.sk-toggleable__label {background-color: #d4ebff;}#sk-container-id-3 input.sk-hidden--visually {border: 0;clip: rect(1px 1px 1px 1px);clip: rect(1px, 1px, 1px, 1px);height: 1px;margin: -1px;overflow: hidden;padding: 0;position: absolute;width: 1px;}#sk-container-id-3 div.sk-estimator {font-family: monospace;background-color: #f0f8ff;border: 1px dotted black;border-radius: 0.25em;box-sizing: border-box;margin-bottom: 0.5em;}#sk-container-id-3 div.sk-estimator:hover {background-color: #d4ebff;}#sk-container-id-3 div.sk-parallel-item::after {content: "";width: 100%;border-bottom: 1px solid gray;flex-grow: 1;}#sk-container-id-3 div.sk-label:hover label.sk-toggleable__label {background-color: #d4ebff;}#sk-container-id-3 div.sk-serial::before {content: "";position: absolute;border-left: 1px solid gray;box-sizing: border-box;top: 0;bottom: 0;left: 50%;z-index: 0;}#sk-container-id-3 div.sk-serial {display: flex;flex-direction: column;align-items: center;background-color: white;padding-right: 0.2em;padding-left: 0.2em;position: relative;}#sk-container-id-3 div.sk-item {position: relative;z-index: 1;}#sk-container-id-3 div.sk-parallel {display: flex;align-items: stretch;justify-content: center;background-color: white;position: relative;}#sk-container-id-3 div.sk-item::before, #sk-container-id-3 div.sk-parallel-item::before {content: "";position: absolute;border-left: 1px solid gray;box-sizing: border-box;top: 0;bottom: 0;left: 50%;z-index: -1;}#sk-container-id-3 div.sk-parallel-item {display: flex;flex-direction: column;z-index: 1;position: relative;background-color: white;}#sk-container-id-3 div.sk-parallel-item:first-child::after {align-self: flex-end;width: 50%;}#sk-container-id-3 div.sk-parallel-item:last-child::after {align-self: flex-start;width: 50%;}#sk-container-id-3 div.sk-parallel-item:only-child::after {width: 0;}#sk-container-id-3 div.sk-dashed-wrapped {border: 1px dashed gray;margin: 0 0.4em 0.5em 0.4em;box-sizing: border-box;padding-bottom: 0.4em;background-color: white;}#sk-container-id-3 div.sk-label label {font-family: monospace;font-weight: bold;display: inline-block;line-height: 1.2em;}#sk-container-id-3 div.sk-label-container {text-align: center;}#sk-container-id-3 div.sk-container {/* jupyter's `normalize.less` sets `[hidden] { display: none; }` but bootstrap.min.css set `[hidden] { display: none !important; }` so we also need the `!important` here to be able to override the default hidden behavior on the sphinx rendered scikit-learn.org. See: https://github.com/scikit-learn/scikit-learn/issues/21755 */display: inline-block !important;position: relative;}#sk-container-id-3 div.sk-text-repr-fallback {display: none;}</style><div class="sk-top-container" id="sk-container-id-3"><div class="sk-text-repr-fallback"><pre>LogisticRegression()</pre><b>In a Jupyter environment, please rerun this cell to show the HTML representation or trust the notebook. <br/>On GitHub, the HTML representation is unable to render, please try loading this page with nbviewer.org.</b></div><div class="sk-container" hidden=""><div class="sk-item"><div class="sk-estimator sk-toggleable"><input checked="" class="sk-toggleable__control sk-hidden--visually" id="sk-estimator-id-3" type="checkbox"/><label class="sk-toggleable__label sk-toggleable__label-arrow" for="sk-estimator-id-3">LogisticRegression</label><div class="sk-toggleable__content"><pre>LogisticRegression()</pre></div></div></div></div></div>
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
<h3 id="Make-Predictions---model_lr1---Test-data"><a id="toc4_1_8_"></a><a href="#toc0_">Make Predictions - <code>model_lr1</code> - Test data</a><a class="anchor-link" href="#Make-Predictions---model_lr1---Test-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [103]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Make Predictions using Logistic Regression</span>
<span class="n">y_pred_test</span> <span class="o">=</span> <span class="n">model_lr1</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_test</span><span class="p">)</span>

<span class="n">y_pred_test</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[103]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>array([0., 0., 0., ..., 0., 0., 0.])</pre>
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
<h3 id="Classification-Report---model_lr1---Test-data"><a id="toc4_1_9_"></a><a href="#toc0_">Classification Report - <code>model_lr1</code> - Test data</a><a class="anchor-link" href="#Classification-Report---model_lr1---Test-data">¶</a></h3>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="n">classification_report_summary</span><span class="p">(</span><span class="n">model_prefix</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="n">dataset</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="s1">'TEST'</span><span class="p">,</span> <span class="n">y_test</span><span class="p">,</span> <span class="n">y_pred_test</span><span class="p">)</span>
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
<pre>
Classification Report :  lr1 - ALLFeat - TEST
                           precision    recall  f1-score   support

Predicted would not leave       0.86      0.93      0.90      2321
    Predicted would leave       0.45      0.27      0.34       471

                 accuracy                           0.82      2792
                macro avg       0.66      0.60      0.62      2792
             weighted avg       0.79      0.82      0.80      2792

Recall        : 27.3885%
f1_score      : 34.1270%
Precision     : 45.2632%
Accuracy      : 82.1633%

───────────────────────────────────
Weighted Average
───────────────────────────────────
Recall        : 82.1633%
f1 Score      : 80.3127%
Precision     : 79.4256%
Support       : 2792

───────────────────────────────────
Prediction F1 score
───────────────────────────────────
Predict Leave : 34.1270%
Support Stay  : 89.6852%
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
<h3 id="Prepare-and-Save-Results---model_lr1---Test-data"><a id="toc4_1_10_"></a><a href="#toc0_">Prepare and Save Results - <code>model_lr1</code> - Test data</a><a class="anchor-link" href="#Prepare-and-Save-Results---model_lr1---Test-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [105]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">result_table</span> <span class="o">=</span> <span class="n">make_results</span><span class="p">(</span><span class="n">model_prefix</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="n">dataset</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="s1">'test'</span><span class="p">,</span><span class="n">model_lr1</span><span class="p">,</span> <span class="n">X_test</span><span class="p">,</span> <span class="n">y_test</span><span class="p">,</span> <span class="n">y_pred_test</span><span class="p">)</span>

<span class="c1"># If the model is being run for the first time, create a new Results.csv file</span>
<span class="k">if</span> <span class="n">rerun</span> <span class="o">==</span> <span class="mi">0</span><span class="p">:</span>

    <span class="c1"># First save to Results.csv, no mode set, write headers, write new file</span>
    <span class="n">result_table</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="s2">"Results.csv"</span><span class="p">,</span> <span class="n">index</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">header</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span> 

<span class="c1"># If the model is being RERUN with a new data, APPEND to existing Results.csv</span>
<span class="k">elif</span> <span class="n">rerun</span> <span class="o">==</span> <span class="mi">1</span> <span class="p">:</span> 
    
    <span class="c1"># APPEND save to Results.csv, don't write headers, APPEND new file</span>
    <span class="n">result_table</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="s2">"Results.csv"</span><span class="p">,</span> <span class="n">index</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">mode</span><span class="o">=</span><span class="s1">'a'</span><span class="p">,</span> <span class="n">header</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span> 
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
<h2 id="Performance-Results-&amp;-Comparisons---model_lr1---Test-data"><a id="toc4_2_"></a><a href="#toc0_">Performance Results &amp; Comparisons - <code>model_lr1</code> - Test data</a><a class="anchor-link" href="#Performance-Results-&amp;-Comparisons---model_lr1---Test-data">¶</a></h2>
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
<h3 id="Display-Results---model_lr1---Test-Data"><a id="toc4_2_1_"></a><a href="#toc0_">Display Results - <code>model_lr1</code> - Test Data</a><a class="anchor-link" href="#Display-Results---model_lr1---Test-Data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [106]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">result_table</span><span class="p">)</span>
<span class="nb">print</span><span class="p">()</span>
<span class="n">display_results</span><span class="p">()</span>
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
<pre>                  Model  Precision  Recall   F1  Accuracy  AUC  Predict Leave  Predict Stay
0  lr1 - ALLFeat - test       0.79    0.82 0.80      0.82 0.88           0.34          0.90

</pre>
</div>
</div>
<div class="jp-OutputArea-child jp-OutputArea-executeResult">
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[106]:</div>
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
<th>Model</th>
<th>Precision</th>
<th>Recall</th>
<th>F1</th>
<th>Accuracy</th>
<th>AUC</th>
<th>Predict Leave</th>
<th>Predict Stay</th>
</tr>
</thead>
<tbody>
<tr>
<th>0</th>
<td>lr1 - ALLFeat - test</td>
<td>0.79</td>
<td>0.82</td>
<td>0.80</td>
<td>0.82</td>
<td>0.88</td>
<td>0.34</td>
<td>0.90</td>
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
<h3 id="Make-Predictions---model_lr1---Train-data"><a id="toc4_2_2_"></a><a href="#toc0_">Make Predictions - <code>model_lr1</code> - Train data</a><a class="anchor-link" href="#Make-Predictions---model_lr1---Train-data">¶</a></h3><p>Use the already fitted lr1_model with the training data</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [107]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Make Predictions using Logistic Regression</span>

<span class="n">y_pred_train</span> <span class="o">=</span> <span class="n">model_lr1</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_train</span><span class="p">)</span> <span class="c1"># worth a look!</span>
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
<h3 id="Classification-Report---model_lr1---Train-data"><a id="toc4_2_3_"></a><a href="#toc0_">Classification Report - <code>model_lr1</code> - Train data</a><a class="anchor-link" href="#Classification-Report---model_lr1---Train-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [108]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">classification_report_summary</span><span class="p">(</span><span class="n">model_prefix</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="n">dataset</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="s1">'TRAIN'</span><span class="p">,</span> <span class="n">y_train</span><span class="p">,</span> <span class="n">y_pred_train</span><span class="p">)</span>
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
<pre>
Classification Report :  lr1 - ALLFeat - TRAIN
                           precision    recall  f1-score   support

Predicted would not leave       0.86      0.94      0.90      6964
    Predicted would leave       0.47      0.25      0.33      1411

                 accuracy                           0.83      8375
                macro avg       0.67      0.60      0.61      8375
             weighted avg       0.80      0.83      0.80      8375

Recall        : 25.1595%
f1_score      : 32.8400%
Precision     : 47.2703%
Accuracy      : 82.6627%

───────────────────────────────────
Weighted Average
───────────────────────────────────
Recall        : 82.6627%
f1 Score      : 80.4086%
Precision     : 79.5988%
Support       : 8375

───────────────────────────────────
Prediction F1 score
───────────────────────────────────
Predict Leave : 32.8400%
Support Stay  : 90.0466%
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
<h3 id="Prepare-and-Save-Results---model_lr1---Train-data"><a id="toc4_2_4_"></a><a href="#toc0_">Prepare and Save Results - <code>model_lr1</code> - Train data</a><a class="anchor-link" href="#Prepare-and-Save-Results---model_lr1---Train-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [109]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">result_table</span> <span class="o">=</span> <span class="n">make_results</span><span class="p">(</span><span class="n">model_prefix</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="n">dataset</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="s1">'train'</span><span class="p">,</span><span class="n">model_lr1</span><span class="p">,</span> <span class="n">X_train</span><span class="p">,</span> <span class="n">y_train</span><span class="p">,</span> <span class="n">y_pred_train</span><span class="p">)</span>
<span class="n">result_table</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="s2">"Results.csv"</span><span class="p">,</span> <span class="n">index</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">mode</span><span class="o">=</span><span class="s1">'a'</span><span class="p">,</span> <span class="n">header</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span> <span class="c1"># Append to existing Results.csv file, mode = 'a', no headers</span>
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
<h2 id="Performance-Results-&amp;-Comparisons---model_lr1---Train-data"><a id="toc4_3_"></a><a href="#toc0_">Performance Results &amp; Comparisons - <code>model_lr1</code> - Train data</a><a class="anchor-link" href="#Performance-Results-&amp;-Comparisons---model_lr1---Train-data">¶</a></h2>
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
<h3 id="Display-Results---model_lr1---Train-data"><a id="toc4_3_1_"></a><a href="#toc0_">Display Results - <code>model_lr1</code> - Train data</a><a class="anchor-link" href="#Display-Results---model_lr1---Train-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [110]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">pd</span><span class="o">.</span><span class="n">set_option</span><span class="p">(</span><span class="s1">'display.max_columns'</span><span class="p">,</span> <span class="kc">None</span><span class="p">)</span>
<span class="n">pd</span><span class="o">.</span><span class="n">set_option</span><span class="p">(</span><span class="s1">'display.width'</span><span class="p">,</span> <span class="mi">120</span><span class="p">)</span>
<span class="n">pd</span><span class="o">.</span><span class="n">options</span><span class="o">.</span><span class="n">display</span><span class="o">.</span><span class="n">float_format</span> <span class="o">=</span> <span class="s1">'</span><span class="si">{:.3f}</span><span class="s1">'</span><span class="o">.</span><span class="n">format</span>
<span class="nb">print</span><span class="p">(</span><span class="n">result_table</span><span class="p">)</span>
<span class="nb">print</span><span class="p">()</span>
<span class="n">display_results</span><span class="p">()</span>
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
<pre>                   Model  Precision  Recall    F1  Accuracy   AUC  Predict Leave  Predict Stay
0  lr1 - ALLFeat - train      0.796   0.827 0.804     0.827 0.892          0.328         0.900

</pre>
</div>
</div>
<div class="jp-OutputArea-child jp-OutputArea-executeResult">
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[110]:</div>
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
<th>Model</th>
<th>Precision</th>
<th>Recall</th>
<th>F1</th>
<th>Accuracy</th>
<th>AUC</th>
<th>Predict Leave</th>
<th>Predict Stay</th>
</tr>
</thead>
<tbody>
<tr>
<th>1</th>
<td>lr1 - ALLFeat - train</td>
<td>0.796</td>
<td>0.827</td>
<td>0.804</td>
<td>0.827</td>
<td>0.892</td>
<td>0.328</td>
<td>0.900</td>
</tr>
<tr>
<th>0</th>
<td>lr1 - ALLFeat - test</td>
<td>0.794</td>
<td>0.822</td>
<td>0.803</td>
<td>0.822</td>
<td>0.882</td>
<td>0.341</td>
<td>0.897</td>
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
<h2 id="Construct-Model---Logistical-Regression-2"><a id="toc4_4_"></a><a href="#toc0_">Construct Model - Logistical Regression 2</a><a class="anchor-link" href="#Construct-Model---Logistical-Regression-2">¶</a></h2><p>This is the model that will exclude the departments</p>
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
<h3 id="Import-data---model_lr2"><a id="toc4_4_1_"></a><a href="#toc0_">Import data - <code>model_lr2</code></a><a class="anchor-link" href="#Import-data---model_lr2">¶</a></h3><p>Two datasets for model performance comparison, :</p>
<ul>
<li><code>salifort_data_FE.csv</code> is the full data set feature engineered with <code>salary</code> encoded to ordinal,  <code>avg_mth_hrs</code> binary encoded to <code>overwork</code> and dept encoded with dummies</li>
<li><code>salifort_data_FE_focus.csv</code> is the same data with the dummy encoded dept fields removed.</li>
</ul>
<p><code>Dept</code> appears to have low correlation across the dataset and I'm curious how much the models are influenced with low correlation features. It turns out that low correlation features have little impact on model performance. which is no surprise really!</p>
<h4 id="Code-flags:"><a id="toc4_4_1_1_"></a><a href="#toc0_">Code flags:</a><a class="anchor-link" href="#Code-flags:">¶</a></h4><p><strong>rerun</strong> = flag to identify the first run of the model comparisons and write a NEW Results.csv file. 0 = first run and a new file will be created with headers / 1 = Continuation, Results will be appended to the file.</p>
<p><strong>dataset</strong> = Text indicating which dataset is being used, added to the model description during csv save to Results.csv</p>
<p><strong>model_prefix</strong> = text indicating which ML model is being used, added to the model description during csv save to Results.csv</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [111]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">df1</span><span class="o">.</span><span class="n">columns</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[111]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>Index(['satisfaction', 'last_eval', 'number_project', 'avg_mnth_hrs', 'tenure', 'accident', 'left', 'promotion',
       'salary', 'dept_accounting', 'dept_hr', 'dept_it', 'dept_management', 'dept_marketing', 'dept_product_mng',
       'dept_randd', 'dept_sales', 'dept_support', 'dept_technical'],
      dtype='object')</pre>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [112]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1">#df2 = pd.read_csv(load_path + "data_cleaned_NoOl_FE_NoDept.csv", index_col = False) # Feature engineering on salary, avg_mnth_hrs, outliers removed, departments removed</span>

<span class="n">df2</span><span class="o">=</span> <span class="n">df1</span><span class="p">[[</span><span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'accident'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'promotion'</span><span class="p">,</span>
        <span class="s1">'salary'</span><span class="p">]]</span>

<span class="c1"># prefix for results.csv added to dataset</span>
<span class="n">model_prefix</span>         <span class="o">=</span> <span class="s1">'lr2'</span>

<span class="c1"># dataset name for results.csv</span>
<span class="n">dataset</span>              <span class="o">=</span> <span class="s1">'NOdept'</span>

<span class="c1"># 1 = append to the Results.csv file with no headers / 0 = Write new file with headers</span>
<span class="n">rerun</span>                <span class="o">=</span> <span class="mi">1</span>

<span class="nb">print</span><span class="p">(</span><span class="s2">"df2 - Feature engineering on salary, avg_mnth_hrs, dept REMOVED, outliers removed</span><span class="se">\n</span><span class="s2">"</span><span class="p">)</span>
<span class="c1"># Display dataframe columns</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df2</span><span class="o">.</span><span class="n">info</span><span class="p">())</span>
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
<pre>df2 - Feature engineering on salary, avg_mnth_hrs, dept REMOVED, outliers removed

&lt;class 'pandas.core.frame.DataFrame'&gt;
RangeIndex: 11167 entries, 0 to 11166
Data columns (total 9 columns):
 #   Column          Non-Null Count  Dtype  
---  ------          --------------  -----  
 0   satisfaction    11167 non-null  float64
 1   last_eval       11167 non-null  float64
 2   number_project  11167 non-null  float64
 3   avg_mnth_hrs    11167 non-null  float64
 4   tenure          11167 non-null  float64
 5   accident        11167 non-null  float64
 6   left            11167 non-null  float64
 7   promotion       11167 non-null  float64
 8   salary          11167 non-null  int8   
dtypes: float64(8), int8(1)
memory usage: 709.0 KB
None
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
<h3 id="Prepare-data-for-modelling---model_lr2"><a id="toc4_4_2_"></a><a href="#toc0_">Prepare data for modelling - <code>model_lr2</code></a><a class="anchor-link" href="#Prepare-data-for-modelling---model_lr2">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [113]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">model_data2</span> <span class="o">=</span> <span class="n">df2</span><span class="o">.</span><span class="n">copy</span><span class="p">()</span> <span class="c1"># copy df to df used for modelling</span>
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
<h3 id="Isolate-Outcome-and-Feature-Variables---model_lr2"><a id="toc4_4_3_"></a><a href="#toc0_">Isolate Outcome and Feature Variables - <code>model_lr2</code></a><a class="anchor-link" href="#Isolate-Outcome-and-Feature-Variables---model_lr2">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [114]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Linear Regression model</span>

<span class="c1"># Save X and Y data into variables</span>
<span class="n">Y2</span> <span class="o">=</span> <span class="n">model_data2</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="c1"># Isolate the outcome variable</span>
<span class="n">X2</span> <span class="o">=</span> <span class="n">model_data2</span><span class="o">.</span><span class="n">copy</span><span class="p">()</span>
<span class="n">X2</span> <span class="o">=</span> <span class="n">X2</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="s1">'left'</span><span class="p">,</span> <span class="n">axis</span> <span class="o">=</span> <span class="mi">1</span><span class="p">)</span> <span class="c1"># Isolate the feature variables, drop the outcome variable left</span>
<span class="c1">#X = sm.add_constant(X)</span>
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
<h3 id="Train-Test-split-data---model_lr2"><a id="toc4_4_4_"></a><a href="#toc0_">Train Test split data - <code>model_lr2</code></a><a class="anchor-link" href="#Train-Test-split-data---model_lr2">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [115]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Split Test/Train Data</span>
<span class="n">X_train2</span><span class="p">,</span> <span class="n">X_test2</span><span class="p">,</span> <span class="n">y_train2</span><span class="p">,</span> <span class="n">y_test2</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">X2</span><span class="p">,</span><span class="n">Y2</span><span class="p">,</span> <span class="n">test_size</span><span class="o">=</span><span class="mf">0.25</span><span class="p">,</span> <span class="n">stratify</span><span class="o">=</span><span class="n">Y</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span><span class="mi">42</span><span class="p">)</span>
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
<h3 id="Apply-StandardScalar-to-feature-variables---model_lr2"><a id="toc4_4_5_"></a><a href="#toc0_">Apply StandardScalar to feature variables - <code>model_lr2</code></a><a class="anchor-link" href="#Apply-StandardScalar-to-feature-variables---model_lr2">¶</a></h3><p>Standardize features by removing the mean and scaling to unit variance. Generally only required for regression models.</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [116]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">scaler</span> <span class="o">=</span> <span class="n">StandardScaler</span><span class="p">()</span>
<span class="n">X_train2</span> <span class="o">=</span> <span class="n">scaler</span><span class="o">.</span><span class="n">fit_transform</span><span class="p">(</span><span class="n">X_train2</span><span class="p">)</span>
<span class="n">X_test2</span> <span class="o">=</span> <span class="n">scaler</span><span class="o">.</span><span class="n">transform</span><span class="p">(</span><span class="n">X_test2</span><span class="p">)</span>
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
<h3 id="Instantiate-Model---model_lr2"><a id="toc4_4_6_"></a><a href="#toc0_">Instantiate Model - <code>model_lr2</code></a><a class="anchor-link" href="#Instantiate-Model---model_lr2">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [117]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Fit the multiple regression model</span>
<span class="n">model_lr2</span> <span class="o">=</span> <span class="n">LogisticRegression</span><span class="p">()</span> <span class="c1"># Training Data</span>
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
<h3 id="Fit-Data-for-model_lr2---Train-data"><a id="toc4_4_7_"></a><a href="#toc0_">Fit Data for <code>model_lr2</code> - Train data</a><a class="anchor-link" href="#Fit-Data-for-model_lr2---Train-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [118]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">model_lr2</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">X_train2</span><span class="p">,</span> <span class="n">y_train2</span><span class="p">)</span> <span class="c1"># Training data for model_lr1</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[118]:</div>
<div class="jp-RenderedHTMLCommon jp-RenderedHTML jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/html" tabindex="0">
<style>#sk-container-id-4 {color: black;}#sk-container-id-4 pre{padding: 0;}#sk-container-id-4 div.sk-toggleable {background-color: white;}#sk-container-id-4 label.sk-toggleable__label {cursor: pointer;display: block;width: 100%;margin-bottom: 0;padding: 0.3em;box-sizing: border-box;text-align: center;}#sk-container-id-4 label.sk-toggleable__label-arrow:before {content: "▸";float: left;margin-right: 0.25em;color: #696969;}#sk-container-id-4 label.sk-toggleable__label-arrow:hover:before {color: black;}#sk-container-id-4 div.sk-estimator:hover label.sk-toggleable__label-arrow:before {color: black;}#sk-container-id-4 div.sk-toggleable__content {max-height: 0;max-width: 0;overflow: hidden;text-align: left;background-color: #f0f8ff;}#sk-container-id-4 div.sk-toggleable__content pre {margin: 0.2em;color: black;border-radius: 0.25em;background-color: #f0f8ff;}#sk-container-id-4 input.sk-toggleable__control:checked~div.sk-toggleable__content {max-height: 200px;max-width: 100%;overflow: auto;}#sk-container-id-4 input.sk-toggleable__control:checked~label.sk-toggleable__label-arrow:before {content: "▾";}#sk-container-id-4 div.sk-estimator input.sk-toggleable__control:checked~label.sk-toggleable__label {background-color: #d4ebff;}#sk-container-id-4 div.sk-label input.sk-toggleable__control:checked~label.sk-toggleable__label {background-color: #d4ebff;}#sk-container-id-4 input.sk-hidden--visually {border: 0;clip: rect(1px 1px 1px 1px);clip: rect(1px, 1px, 1px, 1px);height: 1px;margin: -1px;overflow: hidden;padding: 0;position: absolute;width: 1px;}#sk-container-id-4 div.sk-estimator {font-family: monospace;background-color: #f0f8ff;border: 1px dotted black;border-radius: 0.25em;box-sizing: border-box;margin-bottom: 0.5em;}#sk-container-id-4 div.sk-estimator:hover {background-color: #d4ebff;}#sk-container-id-4 div.sk-parallel-item::after {content: "";width: 100%;border-bottom: 1px solid gray;flex-grow: 1;}#sk-container-id-4 div.sk-label:hover label.sk-toggleable__label {background-color: #d4ebff;}#sk-container-id-4 div.sk-serial::before {content: "";position: absolute;border-left: 1px solid gray;box-sizing: border-box;top: 0;bottom: 0;left: 50%;z-index: 0;}#sk-container-id-4 div.sk-serial {display: flex;flex-direction: column;align-items: center;background-color: white;padding-right: 0.2em;padding-left: 0.2em;position: relative;}#sk-container-id-4 div.sk-item {position: relative;z-index: 1;}#sk-container-id-4 div.sk-parallel {display: flex;align-items: stretch;justify-content: center;background-color: white;position: relative;}#sk-container-id-4 div.sk-item::before, #sk-container-id-4 div.sk-parallel-item::before {content: "";position: absolute;border-left: 1px solid gray;box-sizing: border-box;top: 0;bottom: 0;left: 50%;z-index: -1;}#sk-container-id-4 div.sk-parallel-item {display: flex;flex-direction: column;z-index: 1;position: relative;background-color: white;}#sk-container-id-4 div.sk-parallel-item:first-child::after {align-self: flex-end;width: 50%;}#sk-container-id-4 div.sk-parallel-item:last-child::after {align-self: flex-start;width: 50%;}#sk-container-id-4 div.sk-parallel-item:only-child::after {width: 0;}#sk-container-id-4 div.sk-dashed-wrapped {border: 1px dashed gray;margin: 0 0.4em 0.5em 0.4em;box-sizing: border-box;padding-bottom: 0.4em;background-color: white;}#sk-container-id-4 div.sk-label label {font-family: monospace;font-weight: bold;display: inline-block;line-height: 1.2em;}#sk-container-id-4 div.sk-label-container {text-align: center;}#sk-container-id-4 div.sk-container {/* jupyter's `normalize.less` sets `[hidden] { display: none; }` but bootstrap.min.css set `[hidden] { display: none !important; }` so we also need the `!important` here to be able to override the default hidden behavior on the sphinx rendered scikit-learn.org. See: https://github.com/scikit-learn/scikit-learn/issues/21755 */display: inline-block !important;position: relative;}#sk-container-id-4 div.sk-text-repr-fallback {display: none;}</style><div class="sk-top-container" id="sk-container-id-4"><div class="sk-text-repr-fallback"><pre>LogisticRegression()</pre><b>In a Jupyter environment, please rerun this cell to show the HTML representation or trust the notebook. <br/>On GitHub, the HTML representation is unable to render, please try loading this page with nbviewer.org.</b></div><div class="sk-container" hidden=""><div class="sk-item"><div class="sk-estimator sk-toggleable"><input checked="" class="sk-toggleable__control sk-hidden--visually" id="sk-estimator-id-4" type="checkbox"/><label class="sk-toggleable__label sk-toggleable__label-arrow" for="sk-estimator-id-4">LogisticRegression</label><div class="sk-toggleable__content"><pre>LogisticRegression()</pre></div></div></div></div></div>
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
<h3 id="Make-Predictions---model_lr2---Test-data"><a id="toc4_4_8_"></a><a href="#toc0_">Make Predictions - <code>model_lr2</code> - Test data</a><a class="anchor-link" href="#Make-Predictions---model_lr2---Test-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [119]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Make Predictions using Logistic Regression</span>
<span class="n">y_pred_test2</span> <span class="o">=</span> <span class="n">model_lr2</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_test2</span><span class="p">)</span>
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
<h3 id="Classification-Report---model_lr2---Test-data"><a id="toc4_4_9_"></a><a href="#toc0_">Classification Report - <code>model_lr2</code> - Test data</a><a class="anchor-link" href="#Classification-Report---model_lr2---Test-data">¶</a></h3>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="n">classification_report_summary</span><span class="p">(</span><span class="n">model_prefix</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="n">dataset</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="s1">'TEST'</span><span class="p">,</span> <span class="n">y_test2</span><span class="p">,</span> <span class="n">y_pred_test2</span><span class="p">)</span>
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
<pre>
Classification Report :  lr2 - NOdept - TEST
                           precision    recall  f1-score   support

Predicted would not leave       0.86      0.93      0.90      2321
    Predicted would leave       0.46      0.27      0.34       471

                 accuracy                           0.82      2792
                macro avg       0.66      0.60      0.62      2792
             weighted avg       0.80      0.82      0.80      2792

Recall        : 27.3885%
f1_score      : 34.2629%
Precision     : 45.7447%
Accuracy      : 82.2708%

───────────────────────────────────
Weighted Average
───────────────────────────────────
Recall        : 82.2708%
f1 Score      : 80.3926%
Precision     : 79.5204%
Support       : 2792

───────────────────────────────────
Prediction F1 score
───────────────────────────────────
Predict Leave : 34.2629%
Support Stay  : 89.7537%
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
<h3 id="Prepare-and-Save-Results---model_lr2---Test-data"><a id="toc4_4_10_"></a><a href="#toc0_">Prepare and Save Results - <code>model_lr2</code> - Test data</a><a class="anchor-link" href="#Prepare-and-Save-Results---model_lr2---Test-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [121]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">result_table</span> <span class="o">=</span> <span class="n">make_results</span><span class="p">(</span><span class="n">model_prefix</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="n">dataset</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="s1">'test'</span><span class="p">,</span><span class="n">model_lr2</span><span class="p">,</span> <span class="n">X_test2</span><span class="p">,</span> <span class="n">y_test2</span><span class="p">,</span> <span class="n">y_pred_test2</span><span class="p">)</span>

<span class="c1"># If the model is being run for the first time, create a new Results.csv file</span>
<span class="k">if</span> <span class="n">rerun</span> <span class="o">==</span> <span class="mi">0</span><span class="p">:</span>

    <span class="c1"># First save to Results.csv, no mode set, write headers, write new file</span>
    <span class="n">result_table</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="s2">"Results.csv"</span><span class="p">,</span> <span class="n">index</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">header</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span> 

<span class="c1"># If the model is being RERUN with a new data, APPEND to existing Results.csv</span>
<span class="k">elif</span> <span class="n">rerun</span> <span class="o">==</span> <span class="mi">1</span> <span class="p">:</span> 
    
    <span class="c1"># APPEND save to Results.csv, don't write headers, APPEND new file</span>
    <span class="n">result_table</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="s2">"Results.csv"</span><span class="p">,</span> <span class="n">index</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">mode</span><span class="o">=</span><span class="s1">'a'</span><span class="p">,</span> <span class="n">header</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span> 
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
<h2 id="Performance-Results-&amp;-Comparisons---model_lr2---Test-data"><a id="toc4_5_"></a><a href="#toc0_">Performance Results &amp; Comparisons - <code>model_lr2</code> - Test data</a><a class="anchor-link" href="#Performance-Results-&amp;-Comparisons---model_lr2---Test-data">¶</a></h2>
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
<h3 id="Display-Results---model_lr2---Test-Data"><a id="toc4_5_1_"></a><a href="#toc0_">Display Results - <code>model_lr2</code> - Test Data</a><a class="anchor-link" href="#Display-Results---model_lr2---Test-Data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [122]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">result_table</span><span class="p">)</span>
<span class="nb">print</span><span class="p">()</span>
<span class="n">display_results</span><span class="p">()</span>
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
<pre>                 Model  Precision  Recall    F1  Accuracy   AUC  Predict Leave  Predict Stay
0  lr2 - NOdept - test      0.795   0.823 0.804     0.823 0.882          0.343         0.898

</pre>
</div>
</div>
<div class="jp-OutputArea-child jp-OutputArea-executeResult">
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[122]:</div>
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
<th>Model</th>
<th>Precision</th>
<th>Recall</th>
<th>F1</th>
<th>Accuracy</th>
<th>AUC</th>
<th>Predict Leave</th>
<th>Predict Stay</th>
</tr>
</thead>
<tbody>
<tr>
<th>1</th>
<td>lr1 - ALLFeat - train</td>
<td>0.796</td>
<td>0.827</td>
<td>0.804</td>
<td>0.827</td>
<td>0.892</td>
<td>0.328</td>
<td>0.900</td>
</tr>
<tr>
<th>0</th>
<td>lr1 - ALLFeat - test</td>
<td>0.794</td>
<td>0.822</td>
<td>0.803</td>
<td>0.822</td>
<td>0.882</td>
<td>0.341</td>
<td>0.897</td>
</tr>
<tr>
<th>2</th>
<td>lr2 - NOdept - test</td>
<td>0.795</td>
<td>0.823</td>
<td>0.804</td>
<td>0.823</td>
<td>0.882</td>
<td>0.343</td>
<td>0.898</td>
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
<h3 id="Make-Predictions---model_lr2---Train-data"><a id="toc4_5_2_"></a><a href="#toc0_">Make Predictions - <code>model_lr2</code> - Train data</a><a class="anchor-link" href="#Make-Predictions---model_lr2---Train-data">¶</a></h3><p>Use the already fitted lr2_model with the training data</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [123]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Make Predictions using Logistic Regression</span>

<span class="n">y_pred_train2</span> <span class="o">=</span> <span class="n">model_lr2</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_train2</span><span class="p">)</span> <span class="c1"># worth a look!</span>
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
<h3 id="Classification-Report---model_lr1---Train-data"><a id="toc4_5_3_"></a><a href="#toc0_">Classification Report - <code>model_lr1</code> - Train data</a><a class="anchor-link" href="#Classification-Report---model_lr1---Train-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [124]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">classification_report_summary</span><span class="p">(</span><span class="n">model_prefix</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="n">dataset</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="s1">'TRAIN'</span><span class="p">,</span> <span class="n">y_train2</span><span class="p">,</span> <span class="n">y_pred_train2</span><span class="p">)</span>
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
<pre>
Classification Report :  lr2 - NOdept - TRAIN
                           precision    recall  f1-score   support

Predicted would not leave       0.86      0.94      0.90      6964
    Predicted would leave       0.46      0.24      0.32      1411

                 accuracy                           0.82      8375
                macro avg       0.66      0.59      0.61      8375
             weighted avg       0.79      0.82      0.80      8375

Recall        : 24.2381%
f1_score      : 31.7992%
Precision     : 46.2162%
Accuracy      : 82.4836%

───────────────────────────────────
Weighted Average
───────────────────────────────────
Recall        : 82.4836%
f1 Score      : 80.1540%
Precision     : 79.2962%
Support       : 8375

───────────────────────────────────
Prediction F1 score
───────────────────────────────────
Predict Leave : 31.7992%
Support Stay  : 89.9514%
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
<h3 id="Prepare-and-Save-Results---model_lr2---Train-data"><a id="toc4_5_4_"></a><a href="#toc0_">Prepare and Save Results - <code>model_lr2</code> - Train data</a><a class="anchor-link" href="#Prepare-and-Save-Results---model_lr2---Train-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [125]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">result_table</span> <span class="o">=</span> <span class="n">make_results</span><span class="p">(</span><span class="n">model_prefix</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="n">dataset</span><span class="o">+</span><span class="s1">' - '</span><span class="o">+</span><span class="s1">'train'</span><span class="p">,</span><span class="n">model_lr2</span><span class="p">,</span> <span class="n">X_train2</span><span class="p">,</span> <span class="n">y_train2</span><span class="p">,</span> <span class="n">y_pred_train2</span><span class="p">)</span>
<span class="n">result_table</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="s2">"Results.csv"</span><span class="p">,</span> <span class="n">index</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">mode</span><span class="o">=</span><span class="s1">'a'</span><span class="p">,</span> <span class="n">header</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span> <span class="c1"># Append to existing Results.csv file, mode = 'a', no headers</span>
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
<h2 id="Performance-Results-&amp;-Comparisons---model_lr2---Train-data"><a id="toc4_6_"></a><a href="#toc0_">Performance Results &amp; Comparisons - <code>model_lr2</code> - Train data</a><a class="anchor-link" href="#Performance-Results-&amp;-Comparisons---model_lr2---Train-data">¶</a></h2>
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
<h3 id="Display-Results---model_lr2---Train-data"><a id="toc4_6_1_"></a><a href="#toc0_">Display Results - <code>model_lr2</code> - Train data</a><a class="anchor-link" href="#Display-Results---model_lr2---Train-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [126]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">pd</span><span class="o">.</span><span class="n">set_option</span><span class="p">(</span><span class="s1">'display.max_columns'</span><span class="p">,</span> <span class="kc">None</span><span class="p">)</span>
<span class="n">pd</span><span class="o">.</span><span class="n">set_option</span><span class="p">(</span><span class="s1">'display.width'</span><span class="p">,</span> <span class="mi">120</span><span class="p">)</span>
<span class="n">pd</span><span class="o">.</span><span class="n">options</span><span class="o">.</span><span class="n">display</span><span class="o">.</span><span class="n">float_format</span> <span class="o">=</span> <span class="s1">'</span><span class="si">{:.4f}</span><span class="s1">'</span><span class="o">.</span><span class="n">format</span>
<span class="nb">print</span><span class="p">(</span><span class="n">result_table</span><span class="p">)</span>
<span class="nb">print</span><span class="p">()</span>
<span class="n">display_results</span><span class="p">()</span>
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
<pre>                  Model  Precision  Recall     F1  Accuracy    AUC  Predict Leave  Predict Stay
0  lr2 - NOdept - train     0.7930  0.8248 0.8015    0.8248 0.8919         0.3180        0.8995

</pre>
</div>
</div>
<div class="jp-OutputArea-child jp-OutputArea-executeResult">
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[126]:</div>
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
<th>Model</th>
<th>Precision</th>
<th>Recall</th>
<th>F1</th>
<th>Accuracy</th>
<th>AUC</th>
<th>Predict Leave</th>
<th>Predict Stay</th>
</tr>
</thead>
<tbody>
<tr>
<th>1</th>
<td>lr1 - ALLFeat - train</td>
<td>0.7960</td>
<td>0.8266</td>
<td>0.8041</td>
<td>0.8266</td>
<td>0.8923</td>
<td>0.3284</td>
<td>0.9005</td>
</tr>
<tr>
<th>3</th>
<td>lr2 - NOdept - train</td>
<td>0.7930</td>
<td>0.8248</td>
<td>0.8015</td>
<td>0.8248</td>
<td>0.8919</td>
<td>0.3180</td>
<td>0.8995</td>
</tr>
<tr>
<th>0</th>
<td>lr1 - ALLFeat - test</td>
<td>0.7943</td>
<td>0.8216</td>
<td>0.8031</td>
<td>0.8216</td>
<td>0.8819</td>
<td>0.3413</td>
<td>0.8969</td>
</tr>
<tr>
<th>2</th>
<td>lr2 - NOdept - test</td>
<td>0.7952</td>
<td>0.8227</td>
<td>0.8039</td>
<td>0.8227</td>
<td>0.8819</td>
<td>0.3426</td>
<td>0.8975</td>
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
<h1 id="Review-Results"><a id="toc5_"></a><a href="#toc0_">Review Results</a><a class="anchor-link" href="#Review-Results">¶</a></h1>
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
<h2 id="Dataset-comparison---Logistical-Regression"><a id="toc5_1_"></a><a href="#toc0_">Dataset comparison - Logistical Regression</a><a class="anchor-link" href="#Dataset-comparison---Logistical-Regression">¶</a></h2><p>There is little difference in performance between the two datasets.</p>
<ul>
<li><code>ALLFeat</code> = complete feature engineered dataset</li>
<li><code>NoDept</code> = dataset with dummy encoded dept removed</li>
</ul>
<h2 id="Model-performance"><a id="toc5_2_"></a><a href="#toc0_">Model performance</a><a class="anchor-link" href="#Model-performance">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [127]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Set parameters for following cells</span>

<span class="n">model1</span> <span class="o">=</span> <span class="n">model_lr1</span>
<span class="n">model2</span> <span class="o">=</span> <span class="n">model_lr2</span>


<span class="n">model_name1</span> <span class="o">=</span> <span class="s2">"model_lr1"</span>
<span class="n">model_name2</span> <span class="o">=</span> <span class="s2">"model_lr2"</span>

<span class="c1"># model_best_model1 = N/A not grid searched</span>
<span class="c1"># model_best_model2 = N/A not grid searched</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [128]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">display_results</span><span class="p">()</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[128]:</div>
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
<th>Model</th>
<th>Precision</th>
<th>Recall</th>
<th>F1</th>
<th>Accuracy</th>
<th>AUC</th>
<th>Predict Leave</th>
<th>Predict Stay</th>
</tr>
</thead>
<tbody>
<tr>
<th>1</th>
<td>lr1 - ALLFeat - train</td>
<td>0.7960</td>
<td>0.8266</td>
<td>0.8041</td>
<td>0.8266</td>
<td>0.8923</td>
<td>0.3284</td>
<td>0.9005</td>
</tr>
<tr>
<th>3</th>
<td>lr2 - NOdept - train</td>
<td>0.7930</td>
<td>0.8248</td>
<td>0.8015</td>
<td>0.8248</td>
<td>0.8919</td>
<td>0.3180</td>
<td>0.8995</td>
</tr>
<tr>
<th>0</th>
<td>lr1 - ALLFeat - test</td>
<td>0.7943</td>
<td>0.8216</td>
<td>0.8031</td>
<td>0.8216</td>
<td>0.8819</td>
<td>0.3413</td>
<td>0.8969</td>
</tr>
<tr>
<th>2</th>
<td>lr2 - NOdept - test</td>
<td>0.7952</td>
<td>0.8227</td>
<td>0.8039</td>
<td>0.8227</td>
<td>0.8819</td>
<td>0.3426</td>
<td>0.8975</td>
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
<h3 id="Confusion-Matrix-Heatmap---model_lr1"><a id="toc5_2_1_"></a><a href="#toc0_">Confusion Matrix Heatmap - <code>model_lr1</code></a><a class="anchor-link" href="#Confusion-Matrix-Heatmap---model_lr1">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [129]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Prepare confusion matrices for LR1 test</span>
<span class="n">cm_test1</span> <span class="o">=</span> <span class="n">metrics</span><span class="o">.</span><span class="n">confusion_matrix</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">y_pred_test</span><span class="p">)</span>  <span class="c1"># Use the optimized model</span>
<span class="c1">#cm_test1_percent = cm_test1 / cm_test1.sum() * 100</span>

<span class="c1"># Prepare confusion matrices for LR1 train</span>
<span class="n">cm_test2</span> <span class="o">=</span> <span class="n">metrics</span><span class="o">.</span><span class="n">confusion_matrix</span><span class="p">(</span><span class="n">y_test2</span><span class="p">,</span> <span class="n">y_pred_test2</span><span class="p">)</span>  <span class="c1"># Use the optimized model</span>
<span class="c1">#cm_test2_percent = cm_test2 / cm_test2.sum() * 100</span>

<span class="c1">#cm = confusion_matrix(y_test, y_pred_test, labels=model_lr1.classes_)</span>

<span class="c1"># Plot confusion matrix</span>
<span class="c1">#disp = ConfusionMatrixDisplay(confusion_matrix=cm,</span>
<span class="c1">#                             display_labels=model_lr1.classes_)</span>
<span class="c1">#disp.plot(values_format='');</span>

<span class="n">fig</span><span class="p">,</span> <span class="n">ax</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span><span class="mi">8</span><span class="p">))</span>

<span class="c1"># Calculate percentages for TEST</span>
<span class="n">sum_by_true_class</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">sum</span><span class="p">(</span><span class="n">cm_test1</span><span class="p">,</span> <span class="n">axis</span><span class="o">=</span><span class="mi">1</span><span class="p">)</span>
<span class="n">percentage_matrix</span> <span class="o">=</span> <span class="n">cm_test1</span> <span class="o">/</span> <span class="n">sum_by_true_class</span><span class="p">[:,</span> <span class="n">np</span><span class="o">.</span><span class="n">newaxis</span><span class="p">]</span>
<span class="n">model_name</span> <span class="o">=</span> <span class="s2">"lr1 - AllFeat - Test"</span>
<span class="c1"># Create a figure and plot the percentage confusion matrix as a heatmap</span>

<span class="n">sns</span><span class="o">.</span><span class="n">heatmap</span><span class="p">(</span><span class="n">percentage_matrix</span><span class="p">,</span> <span class="n">annot</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">fmt</span><span class="o">=</span><span class="s2">".2%"</span><span class="p">,</span> <span class="n">cmap</span><span class="o">=</span><span class="s2">"Blues"</span><span class="p">,</span> <span class="n">ax</span> <span class="o">=</span> <span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">])</span> <span class="c1">#, xticklabels=model_lr1.classes_, yticklabels=model_lr1.classes_)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="s1">'</span><span class="si">{}</span><span class="s1"> Confusion Matrix (Percentage)'</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">model_name</span><span class="p">))</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="s1">'True label'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Predicted label'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.3</span><span class="p">,</span> <span class="mf">0.25</span><span class="p">,</span> <span class="s1">'(TN)</span><span class="se">\n</span><span class="s1">True Stay'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'white'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">1.3</span><span class="p">,</span> <span class="mf">0.25</span><span class="p">,</span> <span class="s1">'(FP) type 1</span><span class="se">\n</span><span class="s1"> False Leave'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.3</span><span class="p">,</span> <span class="mf">1.25</span><span class="p">,</span> <span class="s1">'(FN) type 2</span><span class="se">\n</span><span class="s1"> False Stay'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'white'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">1.3</span><span class="p">,</span> <span class="mf">1.25</span><span class="p">,</span> <span class="s1">'(TP)</span><span class="se">\n</span><span class="s1">True Leave'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>



<span class="c1"># Create a figure and plot the COUNT confusion matrix as a heatmap for TEST</span>
<span class="n">sns</span><span class="o">.</span><span class="n">heatmap</span><span class="p">(</span><span class="n">cm_test1</span><span class="p">,</span> <span class="n">annot</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">fmt</span><span class="o">=</span><span class="s2">".0f"</span><span class="p">,</span> <span class="n">cmap</span><span class="o">=</span><span class="s2">"Blues"</span><span class="p">,</span> <span class="n">ax</span> <span class="o">=</span> <span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">])</span><span class="c1">#, xticklabels=class_labels, yticklabels=class_labels)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="s1">'</span><span class="si">{}</span><span class="s1"> Confusion Matrix (Count)'</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">model_name</span><span class="p">))</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="s1">'True label'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Predicted label'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.3</span><span class="p">,</span> <span class="mf">0.25</span><span class="p">,</span> <span class="s1">'(TN)</span><span class="se">\n</span><span class="s1">True Stay'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'white'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">1.3</span><span class="p">,</span> <span class="mf">0.25</span><span class="p">,</span> <span class="s1">'(FP) type 1</span><span class="se">\n</span><span class="s1"> False Leave'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.3</span><span class="p">,</span> <span class="mf">1.25</span><span class="p">,</span> <span class="s1">'(FN) type 2</span><span class="se">\n</span><span class="s1"> False Stay'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">1.3</span><span class="p">,</span> <span class="mf">1.25</span><span class="p">,</span> <span class="s1">'(TP)</span><span class="se">\n</span><span class="s1">True Leave'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>



<span class="c1"># Calculate percentages for TRAIN</span>
<span class="n">sum_by_true_class</span> <span class="o">=</span> <span class="n">np</span><span class="o">.</span><span class="n">sum</span><span class="p">(</span><span class="n">cm_test2</span><span class="p">,</span> <span class="n">axis</span><span class="o">=</span><span class="mi">1</span><span class="p">)</span>
<span class="n">percentage_matrix</span> <span class="o">=</span> <span class="n">cm_test2</span> <span class="o">/</span> <span class="n">sum_by_true_class</span><span class="p">[:,</span> <span class="n">np</span><span class="o">.</span><span class="n">newaxis</span><span class="p">]</span>
<span class="n">model_name</span> <span class="o">=</span> <span class="s2">"lr2 - NoDept - Test"</span>

<span class="n">sns</span><span class="o">.</span><span class="n">heatmap</span><span class="p">(</span><span class="n">percentage_matrix</span><span class="p">,</span> <span class="n">annot</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">fmt</span><span class="o">=</span><span class="s2">".2%"</span><span class="p">,</span> <span class="n">cmap</span><span class="o">=</span><span class="s2">"Blues"</span><span class="p">,</span> <span class="n">ax</span> <span class="o">=</span> <span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">])</span><span class="c1">#, xticklabels=class_labels, yticklabels=class_labels)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="s1">'</span><span class="si">{}</span><span class="s1"> Confusion Matrix (Percentage)'</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">model_name</span><span class="p">))</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="s1">'True label'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Predicted label'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.3</span><span class="p">,</span> <span class="mf">0.25</span><span class="p">,</span> <span class="s1">'(TN)</span><span class="se">\n</span><span class="s1">True Stay'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'white'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">1.3</span><span class="p">,</span> <span class="mf">0.25</span><span class="p">,</span> <span class="s1">'(FP) type 1</span><span class="se">\n</span><span class="s1"> False Leave'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.3</span><span class="p">,</span> <span class="mf">1.25</span><span class="p">,</span> <span class="s1">'(FN) type 2</span><span class="se">\n</span><span class="s1"> False Stay'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'white'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">1.3</span><span class="p">,</span> <span class="mf">1.25</span><span class="p">,</span> <span class="s1">'(TP)</span><span class="se">\n</span><span class="s1">True Leave'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>


<span class="c1"># Create a figure and plot the COUNT confusion matrix as a heatmap for TRAIN</span>
<span class="n">sns</span><span class="o">.</span><span class="n">heatmap</span><span class="p">(</span><span class="n">cm_test2</span><span class="p">,</span> <span class="n">annot</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">fmt</span><span class="o">=</span><span class="s2">".0f"</span><span class="p">,</span> <span class="n">cmap</span><span class="o">=</span><span class="s2">"Blues"</span><span class="p">,</span> <span class="n">ax</span> <span class="o">=</span> <span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">])</span><span class="c1">#, xticklabels=class_labels, yticklabels=class_labels)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="s1">'</span><span class="si">{}</span><span class="s1">  Confusion Matrix (Count)'</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">model_name</span><span class="p">))</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="s1">'True label'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Predicted label'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.3</span><span class="p">,</span> <span class="mf">0.25</span><span class="p">,</span> <span class="s1">'(TN)</span><span class="se">\n</span><span class="s1">True Stay'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'white'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">1.3</span><span class="p">,</span> <span class="mf">0.25</span><span class="p">,</span> <span class="s1">'(FP) type 1</span><span class="se">\n</span><span class="s1"> False Leave'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.3</span><span class="p">,</span> <span class="mf">1.25</span><span class="p">,</span> <span class="s1">'(FN) type 2</span><span class="se">\n</span><span class="s1"> False Stay'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">ax</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">1.3</span><span class="p">,</span> <span class="mf">1.25</span><span class="p">,</span> <span class="s1">'(TP)</span><span class="se">\n</span><span class="s1">True Leave'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>


<span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[129]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>&lt;function matplotlib.pyplot.show(close=None, block=None)&gt;</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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EZHGyo+81kQ8Qk1ERGqj7BHqwMBABAQESM3j6dlERESqp0xmK5LXVlZW0NbWRmRkpNT8yMjIAnlPEx6hJiIitREpOYnFYpiamkpN8gJa08KZiIiooMmPvAYAPT09eHp64sSJE5J56enpOHHiBGrWrJln25db7FATEVGhp2nhTERE9CMLCAjA2rVrsWnTJty7dw+DBw9GQkICevfuDQDo2bOn1H1RkpOTERYWhrCwMCQnJ+PNmzcICwvD48eP87ytPOWbiIjUR8lTvhUREBAAPz8/VK1aFdWrV8fixYtlwrlYsWKSa7qSk5Nx9+5dyX9nhLOxsTFcXFzyr+FEREQFQT5mdqdOnfD+/XtMnjwZERERcHd3x+HDhyX3Qnn58iW0tP47Nvz27Vt4eHhIXs+fPx/z589H/fr1cfr06TxtKzvURESkNqJ8TGdNCmciIqKCJj8zGwCGDRuGYcOGyV32fQ47OTlBEIR8aJUsdqiJiEhtlL0pmaI0JZyJiIgKmvzObE3BDjUREakNs5mIiEgzMLPl403JiIiIiIiIiHKBR6iJiEh9ONxNRESkGZjZcrFDTUREapPfNzghIiKi3GFmy8cONRERqQ1vcEJERKQZmNnyiQTewpRyICkpCcHBwQgMDIRYLFZ3c4gyxc8qEf3I+B1ImoSfVyoM2KGmHImLi4OZmRliY2Nhamqq7uYQZYqfVSL6kfE7kDQJP69UGPAu30RERERERES5wA41ERERERERUS6wQ01ERERERESUC+xQU46IxWJMmTKFN4ygAo+fVSL6kfE7kDQJP69UGPCmZERERERERES5wCPURERERERERLnADjURERERERFRLrBDTURERERERJQL7FATERERERER5QI71JStFStWwMnJCfr6+vDy8sLly5fV3SQiGWfOnEHLli1hb28PkUiEPXv2qLtJRET5jplNmoCZTYUJO9SUpR07diAgIABTpkzB9evX4ebmBl9fX7x7907dTSOSkpCQADc3N6xYsULdTSEiUgtmNmkKZjYVJnxsFmXJy8sL1apVw/LlywEA6enpcHBwwPDhwzFhwgQ1t45IPpFIhL///htt2rRRd1OIiPINM5s0ETObNB2PUFOmkpOTce3aNXh7e0vmaWlpwdvbG6GhoWpsGREREX2LmU1EpB7sUFOmPnz4gLS0NNjY2EjNt7GxQUREhJpaRURERN9jZhMRqQc71ERERERERES5wA41ZcrKygra2tqIjIyUmh8ZGQlbW1s1tYqIiIi+x8wmIlIPdqgpU3p6evD09MSJEyck89LT03HixAnUrFlTjS0jIiKibzGziYjUQ0fdDaCCLSAgAH5+fqhatSqqV6+OxYsXIyEhAb1791Z304ikxMfH4/Hjx5LXz549Q1hYGCwtLVGiRAk1toyIKH8ws0lTMLOpMOFjsyhby5cvx7x58xAREQF3d3csXboUXl5e6m4WkZTTp0+jYcOGMvP9/PywcePG/G8QEZEaMLNJEzCzqTBhh5qIiIiIiIgoF3gNNREREREREVEusENNRERERERElAvsUBMRERERERHlAjvURERERERERLnADjURERERERFRLrBDTURERERERJQL7FATERERERER5QI71ETZ6NWrF9q0aSN53aBBA4waNSrf23H69GmIRCLExMRkWkYkEmHPnj05rjMoKAju7u5Ktev58+cQiUQICwtTqh4iIiJlMK+zxrwmyhvsUJNG6tWrF0QiEUQiEfT09ODi4oJp06YhNTU1z9/7r7/+wvTp03NUNiehSkREVFgxr4mosNNRdwOIcqtJkybYsGEDkpKScOjQIQwdOhS6uroIDAyUKZucnAw9PT2VvK+lpaVK6iEiIvoRMK+JqDDjEWrSWGKxGLa2tnB0dMTgwYPh7e2Nffv2AfjvtK+ZM2fC3t4eZcuWBQC8evUKHTt2hLm5OSwtLdG6dWs8f/5cUmdaWhoCAgJgbm6OIkWKYNy4cRAEQep9vz+FLCkpCePHj4eDgwPEYjFcXFzw+++/4/nz52jYsCEAwMLCAiKRCL169QIApKenIzg4GM7OzjAwMICbmxt2794t9T6HDh1CmTJlYGBggIYNG0q1M6fGjx+PMmXKwNDQECVLlsSkSZOQkpIiU+63336Dg4MDDA0N0bFjR8TGxkotX7duHcqXLw99fX2UK1cOK1euVLgtRET0Y2JeZ495TaS52KGmQsPAwADJycmS1ydOnMCDBw9w7NgxHDhwACkpKfD19YWJiQnOnj2L8+fPw9jYGE2aNJGst2DBAmzcuBHr16/HuXPnEBUVhb///jvL9+3Zsyf++OMPLF26FPfu3cNvv/0GY2NjODg44M8//wQAPHjwAOHh4ViyZAkAIDg4GJs3b8bq1atx584d+Pv7o3v3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"/>
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
<h3 id="Feature-Importance"><a id="toc5_2_2_"></a><a href="#toc0_">Feature Importance</a><a class="anchor-link" href="#Feature-Importance">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [130]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Get Feature Importance function, returns a dataframe of features </span>

<span class="k">def</span> <span class="nf">get_feature_importance</span><span class="p">(</span><span class="n">model</span><span class="p">,</span> <span class="n">feature_names</span><span class="p">,</span> <span class="n">model_name</span><span class="p">):</span>
<span class="w">    </span><span class="sd">''' Get Feature Importance function, returns a dataframe of features '''</span>
    <span class="n">feature_importance</span> <span class="o">=</span> <span class="n">model</span><span class="o">.</span><span class="n">coef_</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span>
    <span class="n">sorted_indices</span> <span class="o">=</span> <span class="n">feature_importance</span><span class="o">.</span><span class="n">argsort</span><span class="p">()[::</span><span class="o">-</span><span class="mi">1</span><span class="p">]</span>
    <span class="n">sorted_feature_names</span> <span class="o">=</span> <span class="p">[</span><span class="n">feature_names</span><span class="p">[</span><span class="n">i</span><span class="p">]</span> <span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="n">sorted_indices</span><span class="p">]</span>
    <span class="n">sorted_importance</span> <span class="o">=</span> <span class="n">feature_importance</span><span class="p">[</span><span class="n">sorted_indices</span><span class="p">]</span>

    <span class="n">feature_importance_df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">({</span>
        <span class="s1">'Feature'</span><span class="p">:</span> <span class="n">sorted_feature_names</span><span class="p">,</span>
        <span class="s1">'Importance'</span><span class="p">:</span> <span class="n">sorted_importance</span>
    <span class="p">})</span>

    <span class="k">return</span> <span class="n">feature_importance_df</span>

<span class="c1"># Get feature importance for the second model</span>
<span class="n">feature_importance_1</span> <span class="o">=</span> <span class="n">get_feature_importance</span><span class="p">(</span><span class="n">model_lr1</span><span class="p">,</span> <span class="n">X</span><span class="o">.</span><span class="n">columns</span><span class="p">,</span> <span class="s2">"LogisticalRegression model_lr1 - All Feat"</span><span class="p">)</span>

<span class="c1"># Get feature importance for the second model</span>
<span class="n">feature_importance_2</span> <span class="o">=</span> <span class="n">get_feature_importance</span><span class="p">(</span><span class="n">model_lr2</span><span class="p">,</span> <span class="n">X2</span><span class="o">.</span><span class="n">columns</span><span class="p">,</span> <span class="s2">"LogisticalRegression model_lr2 - NoDept"</span><span class="p">)</span>

<span class="n">merged_df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">merge</span><span class="p">(</span><span class="n">feature_importance_1</span><span class="p">,</span> <span class="n">feature_importance_2</span><span class="p">,</span> <span class="n">on</span><span class="o">=</span><span class="s1">'Feature'</span><span class="p">,</span> <span class="n">how</span><span class="o">=</span><span class="s1">'left'</span><span class="p">,</span> <span class="n">suffixes</span> <span class="o">=</span> <span class="p">(</span><span class="s1">'model_lr1 - AllFeat'</span><span class="p">,</span> <span class="s1">'model_lr2 - NoDept'</span><span class="p">))</span>

<span class="c1"># Print the merged DataFrame</span>
<span class="nb">print</span><span class="p">(</span><span class="n">merged_df</span><span class="p">)</span>


<span class="c1"># Plot side-by-side bar plots</span>
<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span> <span class="mi">5</span><span class="p">))</span>

<span class="n">plt</span><span class="o">.</span><span class="n">subplot</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">barh</span><span class="p">(</span><span class="n">feature_importance_1</span><span class="p">[</span><span class="s1">'Feature'</span><span class="p">],</span> <span class="n">feature_importance_1</span><span class="p">[</span><span class="s1">'Importance'</span><span class="p">],</span> <span class="n">color</span><span class="o">=</span><span class="s1">'skyblue'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s1">'Feature Importance - model_lr1 - AllFeat'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">'Importance'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">'Feature'</span><span class="p">)</span>

<span class="n">plt</span><span class="o">.</span><span class="n">subplot</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">2</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">barh</span><span class="p">(</span><span class="n">feature_importance_2</span><span class="p">[</span><span class="s1">'Feature'</span><span class="p">],</span> <span class="n">feature_importance_2</span><span class="p">[</span><span class="s1">'Importance'</span><span class="p">],</span> <span class="n">color</span><span class="o">=</span><span class="s1">'salmon'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s1">'Feature Importance - model_lr2 - NoDept'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">'Importance'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">'Feature'</span><span class="p">)</span>

<span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>
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
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>             Feature  Importancemodel_lr1 - AllFeat  Importancemodel_lr2 - NoDept
0             tenure                         0.9972                        0.9950
1       avg_mnth_hrs                         0.1764                        0.1736
2         dept_sales                         0.0364                           NaN
3       dept_support                         0.0304                           NaN
4     dept_technical                         0.0289                           NaN
5            dept_hr                         0.0115                           NaN
6          last_eval                        -0.0081                       -0.0096
7   dept_product_mng                        -0.0115                           NaN
8            dept_it                        -0.0122                           NaN
9     dept_marketing                        -0.0126                           NaN
10   dept_management                        -0.0281                           NaN
11   dept_accounting                        -0.0535                           NaN
12        dept_randd                        -0.0648                           NaN
13         promotion                        -0.1910                       -0.1970
14            salary                        -0.3332                       -0.3367
15          accident                        -0.5551                       -0.5574
16    number_project                        -0.5710                       -0.5675
17      satisfaction                        -1.0622                       -1.0588
</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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lCnMpZD/eU/Xl+cGS59v2bIlX9e+keeff94CWI4fP37DMuHh4RbAcuDAAYvFcu3fzLBhw3Lcx/Ux3WoJ5Gx5edaxsbGWtm3bWhwcHCzVqlWzTJgwwfLdd9/luGZKSoplyJAhFjc3txzLXItI6aB20K2fh9pB16gdZO1uawcNGzbshm2g6/8NFoabxZH9bze3f1N5ee//8z4cHR0tXl5elscee8zyxRdfWDIzM28Y063+hmX/Wz9+/LjloYcesjg6OlqqVKlimT59eo56t2/fbmnRooXFzs4u179xpYHJYimC2fFERIpAdHQ0w4cPZ/fu3bmu7CMiIiJSWqkdJHJ3CAoK4osvvrDq7XYv05xSIiIiIiIiIiJS5DSnlIiI3LPOnj170yXA7ezsqFChQhFGJCIiIlI01A6SkkBJKRERuWe1atXqpkuA+/v7ExMTU3QBiYiIiBQRtYOkJNCcUiIics+KjY3l77//vuHx8uXLG6s3iYiIiJQmagdJSaCklIiIiIiIiIiIFDlNdC4iIiIiIiIiIkVOc0rJXSErK4v//ve/ODs7YzKZijscERGRXFksFv766y+qVatGmTL67k/uDLWLRESkpMtrm0hJKbkr/Pe//8XT07O4wxAREcmTU6dOUaNGjeIOQ0optYtERORucas2kZJScldwdnYGrr2hXVxcijkaERGR3CUnJ+Pp6Wl8boncCWoXiYhISZfXNpGSUnJXyO6a7uLiosaXiIiUeBpSJXeS2kUiInK3uFWbSJMdiIiIiIiIiIhIkVNSSkREREREREREipySUiIiIiIiIiIiUuSUlBIRERERERERkSKnpJSIiIiIiIiIiBQ5JaVERERERERERKTIKSklIiIiIiIiIiJFTkkpEREREREREREpckpKiYiIiIiIiIhIkVNSSkREREREREREipySUiIiIiIiIiIiUuSUlBIRERERERERkSKnpJSIiIiIiIiIiBQ5JaVERERERERERKTIKSklIiIiIiIiIiJFTkkpEREREREREREpcmWLOwCR4vLK/nPFHYJIifWSb6XiDkFERIpIesS44g5BpMSynR5Z3CGIlGrqKSUiIiIiIiIiIkVOSakSLDw8nGbNmuW5/LvvvounpydlypRh7ty5dyyugIAAQkND71j9IiIiIiIiIlL6KSlVQphMJlavXm21LywsjE2bNuXp/OTkZEJCQpg4cSKnT59m1KhRtx1TTEwMJpOJixcvWu1fuXIlM2fOvO36RUREREREROTepTmlSjCz2YzZbM5T2cTERNLT0+nZsydVq1a9o3FVqFDhjtYvIiIiIiIiIqWfekoVoi+++ILGjRvj4OBAxYoV6dq1K5cvX2b37t08+OCDVKpUCVdXV/z9/dm3b59xnpeXFwB9+/bFZDIZ2/8cvhcTE0Pr1q1xcnLCzc0NPz8/fvvtN6Kjo2ncuDEAderUwWQycfLkSY4fP86jjz5KlSpVMJvNtGrVio0bN1rFnJqaysSJE/H09MTe3p569erxwQcfcPLkSTp16gRA+fLlMZlMBAUFATmH7124cIHAwEDKly+Po6MjDz/8MEePHjWOR0dH4+bmxnfffYePjw9ms5nu3buTlJRUSE9eRERERERERO42SkoVkqSkJAYPHsyIESNISEggJiaGfv36YbFY+Ouvvxg2bBg//PADO3fuxNvbmx49evDXX38BsHv3bgCioqJISkoytq+XkZFBnz598Pf358cff2THjh2MGjUKk8nEwIEDjWTTrl27SEpKwtPTk5SUFHr06MGmTZvYv38/3bt3p3fv3iQmJhr1BgYG8umnnzJ//nwSEhJ45513MJvNeHp68uWXXwJw5MgRkpKSmDdvXq73HhQUxJ49e1izZg07duzAYrHQo0cP0tPTjTJXrlzhjTfe4KOPPmLbtm0kJiYSFhZWOA9fRERERERERO46Gr5XSJKSksjIyKBfv37UqlULwOi91LlzZ6uy7777Lm5ubmzdupVevXrh7u4OgJubGx4eHrnWn5yczKVLl+jVqxd169YFwMfHxzhesWJFANzd3Y06mjZtStOmTY0yM2fOZNWqVaxZs4aQkBB++eUXPvvsMzZs2EDXrl2Baz2tsmUP06tcuTJubm65xnX06FHWrFlDbGws7du3B2DZsmV4enqyevVq+vfvD0B6ejpvv/22EXtISAgzZsy44fNMTU0lNTXV6v5FREREREREpPRQT6lC0rRpU7p06ULjxo3p378/7733HhcuXADgjz/+IDg4GG9vb1xdXXFxcSElJcWqx9KtVKhQgaCgILp160bv3r2ZN2/eLYe/paSkEBYWho+PD25ubpjNZhISEozrxsfHY2Njg7+/f4HvOyEhgbJly9KmTRtjX8WKFWnQoAEJCQnGPkdHRyMh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xvHHHnuM7t2706lTJ9zd3fn0008LFOvo0aPp168fAwcOpE2bNpw/f96q11ReRUVFUa1aNfz9/enXrx+jRo2icuXKxvEyZcqwatUq/v77b1q3bs1TTz3FrFmzChSziIiI3HvKly9PxYoVeffddzl27BibN2+26jk0ePBgPDw86NOnD7Gxsfz66698+eWX7NixA4Dp06fz6aefMn36dBISEjh48CCvvvpqrtfKy5dpQ4cOpVKlSjz66KN8//33nDhxgpiYGMaMGcPvv/+e5/vy8vJi27ZtnD59mnPnzhXgyYiIiNzdTBaLxVLcQcj/iY6OJjQ01Gr4m1zrpu7q6sqlS5f07aBIAbyyP3//s/OSb6U7FIlI6abPqztn48aNjBkzhl9//ZUGDRowf/58AgICWLVqFX369OG3335j3LhxbNiwgYyMDO677z7+/e9/Gz3NV65cycyZMzl06BAuLi488MADfPnll8C15FBoaKixyt4vv/zCyJEj2bVrF15eXsyfP5/u3bsb1wL43//+x8SJE/nmm2/466+/qF69Ol26dOGNN97AxcWFoKAgLl68yOrVq417CA0NJT4+npiYGOBaD6zRo0dz5MgRUlNTyWuzXO+z0iM9YlxxhyC3YDs9srhDELkr5fWzSkmpEkZJqdyp8SVye5SUEika+rySoqD3WemhpFTJp6SUSMHk9bNKw/dKgWXLlmE2m3N9NWrUqLjDExERERERERHJQavvlTBBQUEEBQXl65xHHnmENm3a5Hrsn6u+iMi9ST2fRERERESkpFFSqhRwdnbG2dm5uMMQEREREREREckzDd8TEREREREREZEip6SUiIiIiIiIiIgUOQ3fExG5h+R1FT7NQSUiIiIiIneaekqJiIiIiIiIiEiRU1JKRERERERERESKXKlMSgUEBBAaGlrcYZRaQUFB9OnTp7jDEBEREREREZG7WKlMShW28PBwmjVrVtxhFLmTJ09iMpmIj4+32j9v3jyio6OLJSYRERERERERKR000bnkm6ura3GHICIiIiIiIiJ3ubu+p9Tly5cJDAzEbDZTtWpVIiMjrY6npqYSFhZG9erVcXJyok2bNsTExBjHo6OjcXNzY/Xq1Xh7e1OuXDm6devGqVOnjOMREREcOHAAk8mEyWTKUy+hN998k8aNG+Pk5ISnpyfPPvssKSkpVmViY2MJCAjA0dGR8uXL061bNy5cuABAVlYWr732GvXq1cPe3p6aNWsya9Ys49yDBw/SuXNnHBwcqFixIqNGjbKqP7chjH369CEoKMjY9vLyYvbs2YwYMQJnZ2dq1qzJu+++axyvXbs2AL6+vphMJgICAoCcw/cCAgIYM2YMEyZMoEKFCnh4eBAeHm517cOHD9OhQwfKlSvHfffdx8aNGzGZTKxevfqWz1JERERERERESp+7Pik1fvx4tm7dyldffcX69euJiYlh3759xvGQkBB27NjB8uXL+fHHH+nfvz/du3fn6NGjRpkrV64wa9Ysli5dSmxsLBcvXmTQoEEADBw4kHHjxtGoUSOSkpJISkpi4MCBt4yrTJkyzJ8/n59//pklS5awefNmJkyYYByPj4+nS5cu3HfffezYsYMffviB3r17k5mZCcCkSZN45ZVXmDp1KocOHeKTTz6hSpUqwLVEXLdu3Shfvjy7d+/m888/Z+PGjYSEhOT7+UVGRtKyZUv279/Ps88+yzPPPMORI0cA2LVrFwAbN24kKSmJlStX3rCeJUuW4OTkRFxcHK+99hozZsxgw4YNAGRmZtKnTx8cHR2Ji4vj3XffZfLkyTeNKzU1leTkZKuXiIiIiIiIiJQed/XwvZSUFD744AM+/vhjunTpAlxLjtSoUQOAxMREoqKiSExMpFq1agCEhYWxbt06oqKimD17NgDp6eksXLiQNm3aGHX4+Piwa9cuWrdujdlspmzZsnh4eOQ5tut7KXl5efHyyy/z9NNPs2jRIgBee+01WrZsaWwDNGrUCIC//vqLefPmsXDhQoYNGwZA3bp16dChAwCffPIJV69eZenSpTg5OQGwcOFCevfuzauvvmokr/KiR48ePPvsswBMnDiRt956iy1bttCgQQPc3d0BqFix4i3vvUmTJkyfPh0Ab29vFi5cyKZNm3jwwQfZsGEDx48fJyYmxqhn1qxZPPjggzesb86cOUREROT5PkRERERE7ja20yNvXUhEpBS7q3tKHT9+nLS0NCOZBFChQgUaNGgAXBvilpmZSf369TGbzcZr69atHD9+3DinbNmytGrVythu2LAhbm5uJCQkFDi2jRs30qVLF6pXr46zszNPPvkk58+f58qVK8D/9ZTKTUJCAqmpqTc93rRpUyMhBeDn50dWVpbRyymvmjRpYvxsMpnw8PDgzJkz+arjn/UAVK1a1ajnyJEjeHp6WiW2WrdufdP6Jk2axKVLl4xX9nBKERERERERESkd7uqeUreSkpKCjY0Ne/fuxcbGxuqY2Wy+Y9c9efIkvXr14plnnmHWrFlUqFCBH374gZEjR5KWloajoyMODg43PP9mx/KqTJkyWCwWq33p6ek5ytna2lptm0wmsrKy8n29wqonm729Pfb29gU+X0RERERERERKtru6p1TdunWxtbUlLi7O2HfhwgV++eUX4NoE3ZmZmZw5c4Z69epZva7vtZORkcGePXuM7SNHjnDx4kV8fHwAsLOzM+Z6you9e/eSlZVFZGQkbdu2pX79+vz3v/+1KtOkSRM2bdqU6/ne3t44ODjc8LiPjw8HDhzg8uXLxr7Y2FjKlClj9BJzd3cnKSnJOJ6ZmclPP/2U53uAa/edfe7taNCgAadOneKPP/4w9u3evfu26hQRERERERGRu9tdnZQym82MHDmS8ePHs3nzZn766SeCgoIoU+babdWvX5+hQ4cSGBjIypUrOXHiBLt27WLOnDmsXbvWqMfW1pbnn3+euLg49u7dS1BQEG3btjWGmHl5eXHixAni4+M5d+4cqampN42rXr16pKens2DBAn799Vc++ugj3n77basykyZNYvfu3Tz77LP8+OOPHD58mMWLF3Pu3DnKlSvHxIkTmTBhAkuXLuX48ePs3LmTDz74AIChQ4dSrlw5hg0bxk8//cSWLVt4/vnnefLJJ435pDp37szatWtZu3Ythw8f5plnnuHixYv5er6VK1fGwcGBdevW8ccff3Dp0qV8nZ/twQcfpG7dugwbNowff/yR2NhYpkyZAlzrUSUiIiIiIiIi9567OikF8Prrr9OxY0d69+5N165d6dChAy1atDCOR0VFERgYyLhx42jQoAF9+vRh9+7d1KxZ0yjj6OjIxIkTGTJkCH5+fpjNZlasWGEcf+yxx+jevTudOnXC3d2dTz/99KYxNW3alDfffJNXX32V+++/n2XLljFnzhyrMvXr12f9+vUcOHCA1q1b065dO7766ivKlr02onLq1KmMGzeOadOm4ePjw8CBA405mhwdHfnuu+/4888/adWqFY8//jhdunRh4cKFRv0jRoxg2LBhBAYG4u/vT506dejUqVO+nm3ZsmWZP38+77zzDtWqVePRRx/N1/nZbGxsWL16NSkpKbRq1YqnnnrKWH2vXLlyBapTRERERERERO5uJss/Jx66x0RHRxMaGprvXkRye2JjY+nQoQPHjh2jbt26tyyfnJyMq6srly5dwsXFpQgiFCmdXtl/Lk/lXvKtdIcjESmd9HklRUHvMxERKeny+llVqic6l5Jj1apVmM1mvL29OXbsGC+88AJ+fn55SkiJiIiIiIiISOmjpFQBLFu2jNGjR+d6rFatWvz8889FHFHJ99dffzFx4kQSExOpVKkSXbt2JTIysrjDErnnqAeUiIiIiIiUFPf88L2C+Ouvv6xWkruera0ttWrVKuKISj91UxcRkbuBPq+kKOh9JkUtPWJccYdQbGyn64t0kYLQ8L07yNnZGWdn5+IOQ0RERERERETkrnXXr74nIiIiIiIiIiJ3H/WUEhG5x+W2Ip/mnhIRERERkTtNPaVERERERERERKTIKSklIiIiIiIiIiJFrsQlpQICAggNDS3uMERERERERERE5A4qcUmpwhYeHk6zZs2KOwz5/6Kjo3FzcyvuMERERERERESkmJX6pJSIiIiIiIiIiJQ8xZqUunz5MoGBgZjNZqpWrUpkZKTV8dTUVMLCwqhevTpOTk60adOGmJgY43h2r5vVq1fj7e1NuXLl6NatG6dOnTKOR0REcODAAUwmEyaTiejo6FvGZTKZeOedd+jVqxeOjo74+PiwY8cOjh07RkBAAE5OTrRv357jx48b5xw/fpxHH32UKlWqYDabadWqFRs3brSq18vLi9mzZzNixAicnZ2pWbMm7777rlWZiRMnUr9+fRwdHalTpw5Tp04lPT3dqszLL79M5cqVcXZ25qmnnuKll17K0Rvs/fffx8fHh3LlytGwYUMWLVpkHDt58iQmk4nPPvuMjh074uDgQKtWrfjll1/YvXs3LVu2xGw28/DDD3P27Nl817ty5Uo6deqEo6MjTZs2ZceOHQDExMQwfPhwLl26ZPw+wsPDb/n7EBEREREREZHSp1iTUuPHj2fr1q189dVXrF+/npiYGPbt22ccDwkJYceOHSxfvpwff/yR/v370717d44ePWqUuXLlCrNmzWLp0qXExsZy8eJFBg0aBMDAgQMZN24cjRo1IikpiaSkJAYOHJin2GbOnElgYCDx8fE0bNiQIUOGMHr0aCZNmsSePXuwWCyEhIQY5VNSUujRowebNm1i//79dO/end69e5OY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X1/fHPvt7e25fPnybQclIiIicq9Te6twubi4sG3bNnr06EH9+vWZMmUKkZGRPPzww3zwwQdcuHCB5s2b8+STTzJmzBgqV658w7oeeeQRXnzxRUJCQmjWrBnbt29n6tSpeY7F1dWVxx57DLPZbKzmJyIici8q0JxStWvXJj4+Psdwt3Xr1uHj41MogYmISNF7Zf+14SqaZ0qk+Km9Vbh8fHxYt25drsd8fX3ZvXu31b7HH3/cattisVhtv/baa7z22mtW+0JDQ42fw8PDCQ8Pv2E8p0+fZujQodjb2+chehERkdKpQEmpsWPH8txzz3H16lUsFgu7du3i008/Zc6cObz//vuFHaOIiIjIPUftrdLpwoULxMTEEBMTw6JFi4o7HBERkWJVoKTUU089hYODA1OmTOHKlSsMGTKEatWqMW/ePAYNGlTYMYqIiIjcc9TeKp18fX25cOECr776Kg0aNCjucERERIpVvpNSGRkZfPLJJ3Tr1o2hQ4dy5coVUlJSbjruviQICAigWbNm98xqNSdPnqR27drs37+fZs2aFVq94eHhrF69mvj4+EKrU0RERKzdre0tubWTJ08WdwgiIiIlRr4nOi9btixPP/00V69eBcDR0fGebCCFh4cXarKnJDKZTKxevdpqX1hYGJs2bSqegERERO4Ram+JiIjIvaBAq++1bt2a/fv3F3YsUkjS0tLuWN1ms5mKFSvesfpFRETkGrW3REREpLQrUFLq2WefZdy4cSxcuJAdO3bw448/Wr2K2+XLlwkMDMRsNlO1alUiIyOtjqemphIWFkb16tVxcnKiTZs2xMTEGMejo6Nxc3Nj9erVeHt7U65cObp168apU6eM4xERERw4cACTyYTJZCI6OvqWcZlMJt555x169eqFo6MjPj4+7Nixg2PHjhEQEICTkxPt27fn+PHjxjnHjx/n0UcfpUqVKpjNZlq1asXGjRut6vXy8mLmzJkEBgbi4uLCqFGjclw7MzOTESNG0LBhQxITEwH46quvaN68OeXKlaNOnTpERESQkZFh1AnQt29fTCaTsf3PHmJBQUH06dOHN954g6pVq1KxYkWee+450tPTjTJJSUn07NkTBwcHateuzSeffIKXl9c9M5RSRESkIEp6e0tERETkdhVoovPsyTXHjBlj7DOZTFgsFkwmE5mZmYUTXQGNHz+erVu38tVX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CAwM5LbbbmPcuHFWvxQGBgYyd+5cHn74YTw8PGjcuDFvvPGGVdtffPEF7dq1M673yrVkZmZeNS4RERGpnmJjY/n111/p3Lkzjz/+OE8++SRjxowpt3779u15++23SUtL4/bbb2f69OnMmjXLapHz61GZdmfNmsWJEydo3rw5Pj4+ZbbTv39/FixYwLx582jbti2LFy8mOTmZqKioPxSfiIhIdfWH3r53o0yaNIktW7bw/vvvU79+fZ555hm++uor43G7sWPHcujQIdLS0ggICGDdunX06dOH/fv3ExQUBMD58+eZM2cOy5cvx8nJiccee4whQ4awbds2Bg8ezIEDB0hPTzd+qarstPdp06aRlJTEggULWLFihfGq4ODgYKPOlClTmD9/vpFkWrBgAfPnz2fx4sWEhYXx1ltv8ec//5mDBw8SFBREQUEB999/P3fddRcrV67k+PHjPPnkk9d83zZu3MiAAQN49tlnWb58ORcvXuTDDz8ELq8zcccddzBmzBjjDTaVcf78eRYuXEhaWhpnz57lgQceYMCAAXh7e/Phhx/yzTffMHDgQLp3787gwYON8+bPn8/s2bN55plnePfdd3n00UeJjIykVatW5Ofn07dvX+69915WrVrFt99+S3x8/DVfr4iIiFQvjo6OvPzyy7z22mulyk6cOFHmOQMHDmTgwIHltlnWeb9/g2FgYGCpY1drt0uXLuzbt8/qWFxcXKmE2KOPPsqjjz5abjtlvU0xLy+v3PoiIiLVmd2TUgUFBbz55pusXLmSXr16AbBs2TIaNmwIXJ7WnZycTE5ODgEBAQBMnDiR9PR0kpOTmTt3LnD5sblFixYRHh5utBEcHMzOnTvp3LkzZrMZBweHCl/jW5YHH3yQUaNGATB79mw++eQTXnnlFavp3PHx8TzwwAPG/rx585g8eTJDhgwB4O9//zufffYZL7/8Mv/4xz9YtWoVJSUlvPnmm7i4uNC2bVv+85//VDiAKcucOXMYMmSI1SuC77jjDoBKv7r494qKinjttddo3rw5AH/5y19YsWIFP/30E2azmTZt2nDnnXfy2WefWSWl7r33XuP1x5MnT+all17is88+o1WrVqxatQqTycSSJUtwcXGhTZs2fP/99xUmywoLCyksLDT28/PzK30NIiIiIiIiInLrs/vje9nZ2Vy8eNFIJsHlhEqrVq0A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lLS0NNq1a8fTTz/NF198cd19nTt3juzsbEaOHInZbDa2559/nuzsbOByouvuu+8mNTUVgOPHj7N9+3ZiYmIqHXNlTJ06lTNnzhjbd999d93XJSIiIiIiIiK3HiWlbmHnzp0jOjoaT09PUlNT2bVrF+vWrQPg4sWLANxzzz18++23PPXUU/zwww/06tWLiRMnXld/BQUFACxZsoTMzExjO3DgAF9++aVRLyYmhnfffZeioiJWrVpFSEgIISEhlY65MpydnfH09LTaRERERERERKT6UFLqFvbvf/+bX375haSkJCIiImjdunWZC4b7+PgwYsQIVq5cycsvv8wbb7wBgJOTEwDFxcWV6s/X15eAgAC++eYbWrRoYbVdWTQdoF+/fly4cIH09HRWrVplNUuqsjGLiIiIiIiISM2mNaVuYY0bN8bJyYlXXnmFv/3tbxw4cIDZs2db1Zk+fTodOnSgbdu2FBYWsmHDBoKDgwGoX78+rq6upKen07BhQ1xcXPDy8qqwz4SEBMaNG4eXlxd9+vShsLCQ3bt3c/r0acaPHw+Au7s7/fv3Z9q0aWRlZTF06NBrillERERERERERDOlbmE+Pj6kpKTwzjvv0KZNG5KSkpg3b55VHScnJ6ZOnUpoaCg9e/akdu3apKWlAeDg4MDChQtZvHgxAQEB9OvX76p9jho1iqVLl5KcnExISAiRkZGkpKRYzZSCy4/w7du3j4iICBo3bnxNMYuIiIiIiIiImCwWi8XeQYhcTX5+Pl5eXpw5c0brS4ncREl7TwEwJayenSMRqZr0fSW2oM+ZyM2nt++J/DGV/a7STCkREREREREREbE5rSlVw5jN5nLLPvroIyIiImwYjYjcajRDSkREREREbEVJqRomMzOz3LIGDRrYLhARERERERERqdGUlKphWrRoYe8QRERERERERES0ppSIiIiIiIiIiNieklIiIiIiIiIiImJzSkqJiEgpSXtPkbT3lL3DEBERERGRakxJKRERERG5ZUVFRREfH2/vMG6ajIwMTCYTeXl59g5FRETE5pSUqkZuhUGbyWRi/fr1do1BRERE5PdOnDiByWSq8E3EIiIiYltKSkm5Zs6cSbt27ewdhoiIiIiIiIhUQ0pKiV1ZLBYuXbpk7zBERESkClixYgUdO3bEw8MDPz8/hg0bxsmTJ43y06dPExMTg4+PD66u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keHDh9O8eXM6d+5cqf9GhYWFFBYWGvv5+fmVOk9EREREREREqoYal5QqKCjgzTffZOXKlfTq1QuAZcuW0bBhQwBycnJITk4mJyeHgIAAACZOnEh6ejrJycnMnTsXgKKiIhYtWkR4eLjRRnBwMDt37qRz586YzWYcHBzw8/OrVFxXHo/z9va2OichIYEpU6YwYsQIAJo1a8bs2bN5+umnmTFjBps2bWLnzp1kZWXRsmVLo85vFRUV8frrr9O8eXPgctJt1qxZVnVuu+02Fi1aRO3atWndujX33XcfmzdvLjMpdbU+GzRowMSJE439J554go8//pi333670kmpxMREEhISKlVXRERERERERKqeGpeUys7O5uLFi0YyCaBOnTq0atUKgP3791NcXGwkW64oLCykbt26xr6DgwOdOnUy9lu3bo23tzdZWVmVTrxUxr59+9i2bRtz5swxjhUXF3PhwgXOnz9PZmYmDRs2LBXvb7m5uRkJKQB/f39OnjxpVadt27ZWs6v8/f3Zv39/me1drc/i4mLmzp3L22+/zffff8/FixcpLCzEzc2tUtcMMHXqVMaPH2/s5+fn06hRo0qfLyIiIiIiIiK3thqXlLqagoICateuzZ49e6ySNABms9ku8SQkJPDAAw+UKnNxccHV1fWqbTg6Olrtm0wmLBbLVeuUlJSU2d7V+nzxxRdZsGABL7/8MiEhIbi7uxMfH8/FixevGusVzs7OODs7V7q+iIiIiIiIiFQtNS4p1bx5cxwdHdmxYweNGzcG4PTp0xw5coTIyEjCwsIoLi7m5MmTRERElNvOpUuX2L17tzEr6vDhw+Tl5REcHAyAk5MTxcXF1xSbo6NjqXPat2/P4cOHadGiRZnnhIaG8p///IcjR45UOFvqRrpan9u2baNfv3789a9/BS6vQXXkyBHatGljk/hERERERERE5NZX496+ZzabGTlyJJMmTeLTTz/lwIEDxMXFUavW5VvRsmVLYmJiiI2NZe3atRw/fpydO3eSmJjIxo0bjXYcHR154okn2LFjB3v27CEuLo4uXboYSarAwECOHz9OZmYmp06dslq0uzyBgYFs3ryZH3/8kdOnTwMwffp0li9fTkJCAgcPHiQrK4u0tDSee+45ACIjI+nZsycDBw7kk08+4fjx43z00Uekp6ff6FtnuFqfQUFBfPLJJ3zxxRdkZWXxyCOP8NNPP920eERERERERESk6qlxSSm4/HhZREQEffv2pXfv3vTo0YMOHToY5cnJycTGxjJhwgRatWpF//792bVrlzGzCi6v0zR58mSGDRtG9+7dMZvNrFmzxigfOHAgffr04c4778THx4fVq1dfNa758+fzySef0KhRI8LCwgCIjo5mw4YN/Otf/6JTp0506dKFl156iSZNmhjnvffee3Tq1ImhQ4fSpk0bnn766WuepXWtKurzueeeo3379kRHRxMVFYWfnx/9+/e/qfGIiIiIiIiISNVisvx+cSG5qpSUFOLj48nLy7N3KDVGfn4+Xl5enDlzBk9PT3uHI1LtJe09VerYlLB6dohEpGrR95XYgj5nIiJyq6vsd1WNW1NKREREREREpDKKEibYOwQcZ8y3dwgiN02NfHzPHlJTUzGbzWVubdu2tXd4IiIiIiIiIiI2pZlS1yEuLo64uLhrOufPf/4z4eHhZZY5OjregKhERG4cPaonIiIiIiI3m5JSNuLh4YGHh4e9wxARERERERERuSXo8T0REREREREREbE5JaVERERERERERMTm9PieiIiUkrT3VJnHtdaUiIiIiIjcKJopJSIiIiIiIiIiNqeklIiIiIiIiIiI2JySUtcoKiqK+Ph4e4chIiIiIiIiIlKlKSllZzNnzqRdu3b2DsNmTpw4gclkIjMz096hiIiIiIiIiIgdKSklNnPx4kV7hyAiIiIiIiIitwglpSpw7tw5YmNjMZvN+Pv7M3/+fKvywsJCJk6cSIMGDXB3dyc8PJyMjAyjPCUlBW9vb9avX09QUBAuLi5ER0fz3XffGeUJCQns27cPk8mEyWQiJSWlwpgsFgszZ86kcePGODs7ExAQwLhx44xyk8nE+vXrrc7x9vY22r0yUyktLY1u3brh4uLC7bffzpYtW4z6GRkZmEwmNm7cSGhoKC4uLnTp0oUDBw5Ytfvee+/Rtm1bnJ2dCQwMLHV/AgMDmT17NrGxsXh6ejJmzBiaNm0KQFhYGCaTiaioqAqvV0RERERERESqJyWlKjBp0iS2bNnC+++/z7/+9S8yMjL46quvjPKxY8eyfft20tLS+Prrr3nwwQfp06cPR48eNeqcP3+eOXPmsHz5crZt20ZeXh5DhgwBYPDgwUyYMIG2bduSm5tLbm4ugwcPrjCm9957j5deeonFixdz9OhR1q9fT0hIyHVd24QJE9i7dy9du3alb9++/PLLL6XqzJ8/n127duHj40Pfvn0pKioCYM+ePQwaNIghQ4awf/9+Zs6cybRp00ol1ebNm8cdd9zB3r17mTZtGjt37gRg06ZN5Obmsnbt2jLjKywsJD8/32oTERERuZGu/BCXl5d3XefXtGUYREREbjQHewdwqyooKODNN99k5cqV9OrVC4Bly5bRsGFDAHJyckhOTiYnJ4eAgAAAJk6cSHp6OsnJycydOxeAoqIiFi1aRHh4uNFGcHAwO3fupHPnzpjNZhwcHPDz86tUXDk5Ofj5+dG7d28cHR1p3LgxnTt3vubrGzt2LAMHDgTgtddeIz09nTfffJOnn37aqDNjxgzuuusuq2tft24dgwYN4n/+53/o1asX06ZNA6Bly5YcOnSIF198kbi4OKONP/3pT0yYMMHYr127NgB169at8JoTExNJSEi45usSERERKUtUVBTt2rXj5ZdftncoIiIi8v9pplQ5srOzuXjxopFMAqhTpw6tWrUCYP/+/RQXF9OyZUvMZrOxbdmyhezsbOMcBwcHOnXqZOy3bt0ab29vsrKyriuuBx98kF9//ZVmzZoxevRo1q1bx6VLl665na5du1rF2LFjx1Ix/bbOlWu/UicrK4vu3btb1e/evTtHjx6luLjYONaxY8drjg1g6tSpnDlzxtiuPPIoIiIiUpVpjU0REZH/o6TUdSooKKB27drs2bOHzMxMY8vKymLBggU3rd9GjRpx+PBhXn31VVxdXXnsscfo2bOn8VidyWTCYrFYnXOlzB7c3d2v6zxnZ2c8PT2tNhEREbn50tPT6dGjB97e3tStW5f777/f+MGtW7duTJ482ar+zz//jKOjI59//jkAubm53Hfffbi6utK0aVNWrVpFYGBgpWcomUwmFi9ezP3334+bmxvBwcFs376dY8eOERUVhbu7O926dbP6EfDKY3QrVqwgMDAQLy8vhgwZwtmzZwGIi4tjy5YtLFiwwFjH88SJE8b5e/bsoWPHjri5udGtWzcOHz58TfesvH7h8gytsWPHEh8fT7169YiOjr7qGqEiIiI1hZJS5WjevDmOjo7s2LHDOHb69GmOHDkCXF6ou7i4mJMnT9KiRQur7bePpV26dIndu3cb+4cPHyYvL4/g4GAAnJycrGYWVYarqyt9+/Zl4cKF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s2cPffv2pXHjxnh4eBAZGQlcTmaVZd++faSkpFhdQ3R0NCUlJRw/fpy77rqLJk2a0KxZM4YPH05qairnz58vN77ExES8vLyMrVGjRtd1nSIiIiIiIiJya1JSys4KCgqoXbs2e/bsITMz09iysrJYsGDBTeu3UaNGHD58mFdffRVXV1cee+wxevbsSVFREefOnSM6OhpPT09SU1PZtWsX69atA+DixYvlXscjjzxidQ379u3j6NGjNG/eHA8PD7766itWr16Nv78/06dP54477iAvL6/M9qZOncqZM2eM7cr6WSIiIiIiIiJSPejxvZusefPmODo6smPHDho3bgzA6dOnOXLkCJGRkYSFhVFcXMzJkyeJiIgot51Lly6xe/du4xG7w4cPk5eXR3BwMABOTk4UFxdfU2yurq707duXvn378vjjj9O6dWv279+PxWLhl19+ISkpyZihtHv37grbat++PYcOHaJFixbl1nFwcKB379707t2bGTNm4O3tzaeffsoDDzxQqq6zszPOzs7XdD0iIiIiIiI3kuOM+VevJCLXTUmpm8xsNjNy5EgmTZpE3bp1qV+/Ps8++yy1al2epNayZUtiYmKIjY1l/vz5hIWF8fPPP7N582ZCQ0O57777AHB0dOSJJ55g4cKFODg4MHbsWLp06WIkqQIDAzl+/DiZmZk0bNgQDw+PCpM6KSkpFBcXEx4ejpubGytXrsTV1ZUmTZpQUlKCk5MTr7zyCn/72984cOAAs2fPrvA6J0+eTJcuXRg7diyjRo3C3d2dQ4cO8cknn7Bo0SI2bNjAN998Q8+ePbntttv48MMPKSkpMR5jFBEREREREZGaRY/v2cCLL75IREQEffv2pXfv3vTo0YMOHToY5cnJycTGxjJhwgRatWpF//792bVrlzGzCsDNzY3JkyczbNgwunfvjtlsZs2aNUb5wIED6dOnD3feeSc+Pj6sXr26wpi8vb1ZsmQJ3bt3JzQ0lE2bNvHBBx9Qt25dfHx8SElJ4Z133qFNmzYkJSUxb968CtsLDQ1ly5YtHDlyhIiICMLCwpg+fbqxeLu3tzdr167lT3/6E8HBwbz++uusXr2atm3bXs8tFREREREREZEqzmSxWCz2DkIqlpKSQnx8fLnrL9UE+fn5eHl5cebMGTw9Pe0djki1l7T3VLllU8Lq2TASkapF31diC/qciYjIra6y31WaKSUiIiIiIiIiIjanpFQ1lZqaitlsLnPTI3MiIiIiIiIiYm96fK+aOnv2LD/99FOZZY6OjjRp0sTGEf0xmqYuIiJVgb6vxBb0ORMRkVtdZb+r9Pa9asrDwwMPDw97hyEiIiIiIiIiUiY9viciIiIiIiIiIjanpJSIiIiIiIiIiNicHt8TEZFSkvaesncITAmrZ+8QREREpIYrSphg7xBEbMpxxnyb9qeZUiIiIiIiIiIiYnNKSomIiIiIiIiIiM0pKVXDZGRkYDKZyMvLu67zZ86cSbt27W5oTCIiIiIiIiJS8ygpVY1FRUURHx9v7zBEREREREREREpRUkpuuosXL9o7BBERERERERG5xSgpBaSnp9OjRw+8vb2pW7cu999/P9nZ2QB069aNyZMnW9X/+eefcXR05PPPPwcgNzeX++67D1dXV5o2bcqqVasIDAzk5ZdfrlT/JpOJxYsXc//99+Pm5kZwcDDbt2/n2LFjREVF4e7uTrdu3YyY4P8eo1uxYgWBgYF4eXkxZMgQzp49C0BcXBxbtmxhwYIFmEwmTCYTJ06cMM7fs2cPHTt2xM3NjW7dunH48OFrumfl9QuXZ2iNHTuW+Ph46tWrR3R0NBaLhZkzZ9K4cWOcnZ0JCAhg3Lhx19SniIiIiIiIiFQfSkoB586dY/z48ezevZvNmzdTq1YtBgwYQElJCTExMaSlpWGxWIz6a9asISAggIiICABiY2P54YcfyMjI4L333uONN97g5MmT1xTD7NmziY2NJTMzk9atWzNs2DAeeeQRpk6dyu7du7FYLIwdO9bqnOzsbNavX8+GDRvYsGEDW7ZsISkpCYAFCxbQtWtXRo8eTW5uLrm5uTRq1Mg499lnn2X+/Pns3r0bBwcHHn744UrHWlG/VyxbtgwnJye2bdvG66+/znvvvcdLL73E4sWLOXr0KOvXryckJKTcPgoLC8nPz7faRERERERERKT6cLB3ALeCgQMHWu2/9dZb+Pj4cOjQIQYNGkR8fDxbt241klCrVq1i6NChmEwm/v3vf7Np0yZ27dpFx44dAVi6dClBQUHXFMNDDz3EoEGDAJg8eTJdu3Zl2rRpREdHA/Dkk0/y0EMPWZ1TUlJCSkoKHh4eAAwfPpzNmzczZ84cvLy8cHJyws3NDT8/v1L9zZkzh8jISACmTJnCfffdx4ULF3BxcblqrBX1e0VQUBAvvPCCsb9x40b8/Pzo3bs3jo6ONG7cmM6dO5fbR2JiIgkJCVeNRURERERERESqJs2UAo4ePcrQoUNp1qwZnp6eBAYGApCTk4OPjw933303qampABw/fpzt27cTExMDwOHDh3FwcKB9+/ZGey1atOC22267phhCQ0ONv319fQGsZhL5+vpy4cIFqxlDgYGBRmIIwN/fv9IztH7bn7+/P0Clz61Mvx06dLDaf/DBB/n1119p1qwZo0ePZt26dVy6dKncPqZOncqZM2eM7bvvvqtUbCIiIiIiIiJSNSgpBfTt25f//ve/LFmyhB07drBjxw7g/xbojomJ4d1336WoqIhVq1YREhJS4aNn18PR0dH422QylXuspKSkzHOu1Plt+bX2dz3nltevu7u71X6jRo04fPgwr776Kq6urjz22GP07NmToqKiMvtwdnbG09PTahMRERERERGR6qPGJ6V++eUXDh8+zHPPPUevXr0IDg7m9OnTVnX69evHhQsXSE9PZ9WqVcYsKYBWrVpx6dIl9u7daxw7duxYqTbswcnJieLiYnuHYXB1daVv374sXLiQjIwMtm/fzv79++0dloiIiIiIiIjYQY1fU+q2226jbt26vPHGG/j7+5OTk8OUKVOs6ri7u9O/f3+mTZtGVlYWQ4cONcpat25N7969GTNmDK+99hqOjo5MmDABV1dXYwaSvQQGBrJjxw5OnDiB2WymTp06doslJSWF4uJiwsPDcXNzY+XKlbi6utKkSRO7xSQiIiIiIiIi9lPjZ0rVqlWLtLQ09uzZw+23385TTz3Fiy++WKpeTEwM+/btIyIigsaNG1uVLV++HF9fX3r27MmAAQMYPXo0Hh4elVo0/GaaOHEitWvXpk2bNvj4+JCTk2O3WLy9vVmyZAndu3cnNDSUTZs28cEHH1C3bl27xSQiIiIiIiIi9mOyWCwWewdR3fznP/+hUaNGbNq0iV69etk7nGohPz8fLy8vzpw5o/WlRGwgae8pe4fAlLB69g5B5Jrp++rWExUVRbt27Xj55ZftHcoNo8+ZiO0UJUywdwgiNuU4Y/4Naaey31U1/vG9G+HTTz+loKCAkJAQcnNzefrppwkMDKRnz572Dk1EREREbgEWi4Xi4mIcHDT8FhERuaLGP753IxQVFfHMM8/Qtm1bBgwYgI+PDxkZGTg6OpKamorZbC5za9u2rb1DL6Vt27blxpuammrv8EREREQqLS4uji1btrBgwQJMJhMmk4kTJ05w4MAB7rnnHsxmM76+vgwfPpxTp/5vhmhUVBTjxo3j6aefpk6dOvj5+TFz5kyj/MSJE5hMJjIzM41jeXl5mEwmMjIyAMjIyMBkMvHRRx/RoUMHnJ2d2bp1KyUlJSQmJtK0aVNcXV254447ePfdd210R0RERG4t+qnmBoiOjiY6OrrMsj//+c+Eh4eXWebo6Hgzw7ouH374IUVFRWWW+fr62jgaEbEXPTonItXBggULOHLkCLfffjuzZs0CLo+/OnfuzKhRo3jppZf49ddfmTx5MoMGDeLTTz81zl22bBnjx49nx44dbN++nbi4OLp3785dd911TTFMmTKFefPm0axZM2677TYSExNZuXIlr7/+OkFBQXz++ef89a9/xcfHh8jIyDLbKCwspLCw0NjPz8+/jrshIiJy61FS6ibz8PDAw8PD3mFUmt6GJyIiItWFl5cXTk5OuLm54efnB8Dzzz9PWFgYc+fONeq99dZbNGrUiCNHjtCyZUsAQkNDmTFjBgBBQUEsWrSIzZs3X3NSatasWcY5hYWFzJ07l02bNtG1a1cAmjVrxtatW1m8eHG5SanExEQSEhKu7eJFRESqACWlRERERKTG2LdvH5999hlms7lUWXZ2tlVS6rf8/f05efLkNffXsWNH4+9jx45x/vz5UomtixcvEhYWVm4bU6dOZfz48cZ+fn4+jRo1uuZYREREbjVKSomIiIhIjVFQUEDfvn35+9//XqrM39/f+Pv3yyyYTCZKSkoAqFXr8rKsv32JdXnLH7i7u1v1DbBx40YaNGhgVc/Z2bncmJ2dnSssFxERqaqUlBIRkVKS9p66eiWRakJrqFVvTk5OFBcXG/vt27fnvffeIzAw8LrfhOfj4wNAbm6uMcPpt4uel6dNmzY4OzuTk5NT7qN6IiIiNYmSUiIiIiJSbQUGBrJjxw5OnDiB2Wzm8ccfZ8mSJQwdOtR4u96xY8dIS0tj6dKl1K5d+6pturq60qVLF5KSkmjatCknT57kueeeu+p5Hh4eTJw4kaeeeoqSkhJ69OjBmTNn2LZtG56enowYMeJGXLKIiEiVUcveAYiIiIiI3CwTJ06kdu3atGnTBh8fHy5evMi2bdsoLi7m7rvvJiQkhPj4eLy9vY3H8irjrbfe4tKlS3To0IH4+Hief/75Sp03e/Zspk2bRmJiIsHBwfTp04eNGzfStGnT671EERGRKstk+e3D8CK3qPz8fLy8vDhz5gyenp72Dkek2tPje1KT3MjH9/R9Jbagz5mI7RQlTLB3CCI25Thj/g1pp7LfVZopVQ1FRUURHx9v7zBERERERERERMqlpJTcNBaLhUuXLtk7DBERERERERG5BSkpVc3ExcWxZcsWFixYgMlkwmQyceLECQ4cOMA999yD2WzG19eX4cOHc+rU/z2eExUVxbhx44wFP/38/Jg5c6ZRfuLECUwmk9WbZfLy8jCZTGRkZACQkZGByWTio48+okOHDjg7O7N161ZKSkpITEykadOmuLq6cscdd/Duu+/a6I6IiIiIiIiIyK1ISalqZsGCBXTt2pXRo0eTm5tLbm4uHh4e/OlPfyIsLIzdu3eTnp7OTz/9xKBBg6zOXbZsGe7u7uzYsYMXXniBWbNm8cknn1xzDFOmTCEpKYmsrCxCQ0NJTExk+fLlvP766xw8eJCnnnqKv/71r2zZsqXcNgoLC8nPz7faRERERERERKT6cLB3AHJjeXl54eTkhJubG35+fgA8//zzhIWFMXfuXKPeW2+9RaNGjThy5AgtW7YEIDQ0lBkzZgAQFBTEokWL2Lx5M3fdddc1xTBr1izjnMLCQubOncumTZvo2rUrAM2aNWPr1q0sXryYyMjIMttITEwkISHh2i5eRERERERERKoMJaVqgH379vHZZ59hNptLlWVnZ1slpX7L39+fkydPXnN/HTt2NP4+duwY58+fL5XYunjxImFhYeW2MXXqVMaPH2/s5+fn06hRo2uORURERERERERuTUpK1QAFBQX07duXv//976XK/P39jb8dHR2tykwmEyUlJQDUqnX5SU+LxWKUFxUVldmfu7u7Vd8AGzdupEGDBlb1nJ2dy43Z2dm5wnIRERERERERqdqUlKqGnJycKC4uNvbbt2/Pe++9R2BgIA4O1/ef3MfHB4Dc3FxjhtNvFz0vT5s2bXB2diYnJ6fcR/VEREREREREpOZRUqoaCgwMZMeOHZw4cQKz2czjjz/OkiVLGDp0qPF2vWPHjpGWlsbSpUupXbv2Vdt0dXWlS5cuJCUl0bRpU06ePMlzzz131fM8PDyYOHEiTz31FCUlJfTo0YMzZ86wbds2PD09GTFixI24ZBERERERERGpYvT2vWpo4sSJ1K5dmzZt2uDj48PFixfZtm0bxcXF3H333YSEhBAfH4+3t7fxWF5lvPXWW1y6dIkOHToQHx/P888/X6nzZs+ezbRp00hMTCQ4OJg+ffqwceNGmjZter2XKCIiIiIiIiJVnMny20WCRG5R+fn5eHl5cebMGTw9Pe0djki1l7T3lL1DELGZKWH1blhb+r4SW9DnTMR2ihIm2DsEEZtynDH/hrRT2e8qzZQSERERERERERGb05pSIiJSyo2cOSIiIiJSVd2oWSMiUjbNlBIREREREREREZtTUkpERERERERERGxOSSkREREREREREbE5JaVERERERERERMTmlJQSERERERERERGbU1JKRERERERERERsTkkpERERERERERGxOSWlRERERERERETE5pSUEhERERERERERm1NSSkREREREREREbE5JKRERERERERERsTklpURERERERERExOaUlBIREREREREREZtTUkpERERERERERGxOSSkREREREREREbE5JaVERERERERERMTmlJQSERERERERERGbc7B3ACKVYbFYAMjPz7dzJCIiIuW78j115XtL5GbQuEhERG51lR0TKSklVcLZs2cBaNSokZ0jERERubqzZ8/i5eVl7zCkmtK4SEREqoqrjYlMFv2UJ1VASUkJP/zwAx4eHphMJpv2nZ+fT6NGjfjuu+/w9PS0ad81ne69fei+24fuu/3cyHtvsVg4e/YsAQEB1KqlVRLk5rDXuEj/TtmP7r196L7bj+69/dyoe1/ZMZFmSkmVUKtWLRo2bGjXGDw9PfUPop3o3tuH7rt96L7bz42695ohJTebvcdF+nfKfnTv7UP33X507+3nRtz7yoyJ9BOeiIiIiIiIiIjYnJJSIiIiIiIiIiJic0pKiVyFs7MzM2bMwNnZ2d6h1Di69/ah+24fuu/2o3svUjn6f8V+dO/tQ/fdfnTv7cfW914LnYuIiIiIiIiIiM1pppSIiIiIiIiIiNicklIiIiIiIiIiImJzSkqJiIiIiIiIiIjNKSklUoY5c+bQrVs33Nzc8Pb2rtQ5FouF6dOn4+/vj6urK7179+bo0aM3N9Bq5r///S8xMTF4enri7e3NyJEjKSgoqPCcqKgoTCaT1fa3v/3NRhFXXf/4xz8IDAzE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"/>
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
<h3 id="Precision-/-Recall-Curve"><a id="toc5_3_"></a><a href="#toc0_">Precision / Recall Curve</a><a class="anchor-link" href="#Precision-/-Recall-Curve">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [136]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">y_prob1</span> <span class="o">=</span> <span class="n">model_lr1</span><span class="o">.</span><span class="n">predict_proba</span><span class="p">(</span><span class="n">X_test</span><span class="p">)[:,</span> <span class="mi">1</span><span class="p">]</span>
<span class="n">y_prob2</span> <span class="o">=</span> <span class="n">model_lr2</span><span class="o">.</span><span class="n">predict_proba</span><span class="p">(</span><span class="n">X_test2</span><span class="p">)[:,</span> <span class="mi">1</span><span class="p">]</span>

<span class="n">precision1</span><span class="p">,</span> <span class="n">recall1</span><span class="p">,</span> <span class="n">_</span> <span class="o">=</span> <span class="n">precision_recall_curve</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">y_prob1</span><span class="p">)</span>
<span class="n">precision2</span><span class="p">,</span> <span class="n">recall2</span><span class="p">,</span> <span class="n">_</span> <span class="o">=</span> <span class="n">precision_recall_curve</span><span class="p">(</span><span class="n">y_test2</span><span class="p">,</span> <span class="n">y_prob2</span><span class="p">)</span>

<span class="c1"># Compute area under the curve (AUC)</span>
<span class="n">auc_score1</span> <span class="o">=</span> <span class="n">auc</span><span class="p">(</span><span class="n">recall1</span><span class="p">,</span> <span class="n">precision1</span><span class="p">)</span>
<span class="n">auc_score2</span> <span class="o">=</span> <span class="n">auc</span><span class="p">(</span><span class="n">recall2</span><span class="p">,</span> <span class="n">precision2</span><span class="p">)</span>

<span class="c1">#plt.subplot(1, 2, 1)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span> <span class="mi">5</span><span class="p">))</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">recall1</span><span class="p">,</span> <span class="n">precision1</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">model_name1</span><span class="si">}</span><span class="s1"> - AUC = </span><span class="si">{</span><span class="n">auc_score1</span><span class="si">:</span><span class="s1">.2f</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">'Recall'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">'Precision'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Precision-Recall Curve - </span><span class="si">{</span><span class="n">model_name1</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">legend</span><span class="p">(</span><span class="n">loc</span><span class="o">=</span><span class="s1">'best'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mf">0.5</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Random Guess'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Perfect'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Perfect'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.2</span><span class="p">,</span> <span class="mf">0.52</span><span class="p">,</span> <span class="s1">'Random Guess'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.4</span><span class="p">,</span> <span class="mf">0.8</span><span class="p">,</span> <span class="s1">'Better'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.4</span><span class="p">,</span> <span class="mf">0.4</span><span class="p">,</span> <span class="s1">'Worse'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.8</span><span class="p">,</span> <span class="mf">1.01</span><span class="p">,</span> <span class="s1">'Perfect'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">)</span>
<span class="c1">#plt.savefig('plot-prc-curve1.png')</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>

<span class="c1">#plt.subplot(1, 2, 2)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span> <span class="mi">5</span><span class="p">))</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">recall2</span><span class="p">,</span> <span class="n">precision2</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'blue'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">model_name2</span><span class="si">}</span><span class="s1"> - AUC = </span><span class="si">{</span><span class="n">auc_score2</span><span class="si">:</span><span class="s1">.2f</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">'Recall'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">'Precision'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Precision-Recall Curve - </span><span class="si">{</span><span class="n">model_name2</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">legend</span><span class="p">(</span><span class="n">loc</span><span class="o">=</span><span class="s1">'best'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mf">0.5</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Random Guess'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Perfect'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Perfect'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.2</span><span class="p">,</span> <span class="mf">0.52</span><span class="p">,</span> <span class="s1">'Random Guess'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.4</span><span class="p">,</span> <span class="mf">0.8</span><span class="p">,</span> <span class="s1">'Better'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.4</span><span class="p">,</span> <span class="mf">0.4</span><span class="p">,</span> <span class="s1">'Worse'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.8</span><span class="p">,</span> <span class="mf">1.01</span><span class="p">,</span> <span class="s1">'Perfect'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">)</span>

<span class="c1">#plt.tight_layout()</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
<span class="n">plt</span><span class="o">.</span><span class="n">savefig</span><span class="p">(</span><span class="s1">'plot-prc-curve2.png'</span><span class="p">)</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA+kAAAHWCAYAAAALjsguAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAACMcUlEQVR4nOzdd3gU5drH8d+mNzqEZiAU6VXaQcSAhi6KBTmINAULYENQsIBYwAKISlOUoi8KgqIoTURQmoI0QZDeBEJRICSB1Hn/eE42WVJIwia7Sb6f65prZ2ef3b13MzuZe55msyzLEgAAAAAAcDkPVwcAAAAAAAAMknQAAAAAANwESToAAAAAAG6CJB0AAAAAADdBkg4AAAAAgJsgSQcAAAAAwE2QpAMAAAAA4CZI0gEAAAAAcBMk6QAAAAAAuAmSdACAW+nXr59CQ0Oz9Zw1a9bIZrNpzZo1uRJTftemTRu1adPGfv/IkSOy2WyaPXu2y2JC1uXkN5Hs6r99bj0HAOA8JOkAUMjNnj1bNpvNvvj5+alGjRoaMmSITp8+7erw3F5ywpu8eHh4qGTJkurUqZM2btzo6vCc4vTp0xo2bJhq1aqlgIAABQYGqkmTJnr99dd14cIFV4cHF3vjjTd05513qmzZsrLZbHrllVdcHRIA5Gterg4AAOAeXn31VVWpUkVXrlzRunXrNG3aNC1dulS7du1SQEBAnsUxY8YMJSUlZes5t956qy5fviwfH59ciuraevbsqc6dOysxMVH79u3T1KlT1bZtW23evFn169d3WVzXa/PmzercubOioqL04IMPqkmTJpKk33//XW+++aZ++eUX/fDDDy6OEq700ksvqVy5cmrcuLFWrFjh6nAAIN8jSQcASJI6deqkpk2bSpIGDBigUqVKaeLEifr222/Vs2fPdJ8THR2twMBAp8bh7e2d7ed4eHjIz8/PqXFk10033aQHH3zQfr9169bq1KmTpk2bpqlTp7owspy7cOGC7r77bnl6emrbtm2qVauWw+NvvPGGZsyY4ZT3yo19CbnnypUr8vHxkYeHhw4fPqzQ0FCdO3dOZcqUcXVoAJDv0dwdAJCu2267TZJ0+PBhSaZfbFBQkA4ePKjOnTurSJEi6tWrlyQpKSlJkyZNUt26deXn56eyZcvq0Ucf1fnz59O87rJlyxQWFqYiRYqoaNGiatasmT7//HP74+n1v503b56aNGlif079+vX13nvv2R/PqE/6ggUL1KRJE/n7+6t06dJ68MEHdeLECYcyyZ/rxIkT6tatm4KCglSmTBkNGzZMiYmJOf7+WrduLUk6ePCgw/YLFy7o6aefVkhIiHx9fVW9enW99dZbaVoPJCUl6b333lP9+vXl5+enMmXKqGPHjvr999/tZWbNmqXbbrtNwcHB8vX1VZ06dTRt2rQcx3y1Dz/8UCdOnNDEiRPTJOiSVLZsWb300kv2+xk1dQ4NDVW/fv3s95O7WPz8888aNGiQgoODdcMNN2jhwoX27enFYrPZtGvXLvu2v/76S/fdd59KliwpPz8/NW3aVIsXL76+D50Om82mIUOGaMGCBapTp478/f3VsmVL7dy50x5b9erV5efnpzZt2ujIkSNpXiMr+6IkffPNN6pXr578/PxUr149LVq0KN2YsvObu17Jv6958+bppZdeUsWKFRUQEKDIyEhJynF/eQBA+qhJBwCkKzm5LFWqlH1bQkKCOnTooFtuuUXjx4+3N4N/9NFHNXv2bPXv319PPvmkDh8+rMmTJ2vbtm1av369vXZ89uzZeuihh1S3bl2NHDlSxYsX17Zt27R8+XI98MAD6caxcuVK9ezZU7fffrveeustSdKePXu0fv16PfXUUxnGnxxPs2bNNG7cOJ0+fVrvvfee1q9fr23btql48eL2somJierQoYNatGih8ePH68cff9SECRNUrVo1Pf744zn6/pITtRIlSti3xcTEKCwsTCdOnNCjjz6qSpUqacOGDRo5cqROnTqlSZMm2cs+/PDDmj17tjp16qQBAwYoISFBa9eu1a+//mpv8TBt2jTVrVtXd955p7y8vPTdd99p0KBBSkpK0uDBg3MUd2qLFy+Wv7+/7rvvvut+rfQMGjRIZcqU0ahRoxQdHa0uXbooKChIX375pcLCwhzKzp8/X3Xr1lW9evUkSX/++adatWqlihUrasSIEQoMDNSXX36pbt266auvvtLdd9/t1FjXrl2rxYsX27/XcePG6Y477tBzzz2nqVOnatCgQTp//rzefvttPfTQQ/rpp5/sz83qvvjDDz/o3nvvVZ06dTRu3Dj9888/6t+/v2644YY08WT1N+dMr732mnx8fDRs2DDFxsa6tHsJABRoFgCgUJs1a5Ylyfrxxx+ts2fPWsePH7fm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lsaMGZOmXPJ3lVyDm/q7u3jxombNmpXtz5aRxx57TOXLl9ezzz6rffv2pXn8zJkzev311+33q1WrZu9Xn+yjjz7K9lR24eHhKlmypObPn6/58+erefPmDk2tg4OD1aZNG3344YfpXgA4e/Zspq+f3b/l9cjqvli+fHk1atRIc+bMcRhPYOXKldq9e7fDa2b1NwcAyJ+oSQcAXJewsDA9+uijGjdunLZv36727dvL29tb+/fv14IFC/Tee+/pvvvuU9GiRfXuu+9qwIABatasmR544AGVKFFCO3bsUExMTIZN1wcMGKB///1Xt912m2644QYdPXpUH3zwgRo1aqTatWun+xxvb2+99dZb6t+/v8LCwtSzZ0/7tFehoaF65plncvMrsXvqqac0adIkvfnmm5o3b56GDx+uxYsX64477lC/fv3UpEkTRUdHa+fOnVq4cKGOHDmi0qVLq23bturdu7fef/997d+/Xx07dlRSUpLWrl2rtm3basiQIWrfvr29hcGjjz6qqKgozZgxQ8HBwdmuuc5IiRIltGjRInXu3FmNGjXSgw8+qCZNmkiStm7dqi+++EItW7a0lx8wYIAee+wx3XvvvWrXrp127NihFStWqHTp0tl6X29vb91zzz2aN2+eoqOjNX78+DRlpkyZoltuuUX169fXwIEDVbVqVZ0+fVobN27U33//rR07dlzfh3eS7OyL48aNU5cuXXTLLbfooYce0r///qsPPvhAdevWVVRUlL1cVn9zeeWzzz7T0aNH7eMi/PLLL/aLN717985RyxUAKNRcOLI8AMANJE+HtXnz5kzL9e3b1woMDMzw8Y8++shq0qSJ5e/vbxUpUsSqX7++9dxzz1knT550KLd48WLr5ptvtvz9/a2iRYtazZs3t7744guH90k93dTChQut9u3bW8HBwZaPj49VqVIl69FHH7VOnTplL3P1FGzJ5s+fbzVu3Njy9fW1SpYsafXq1cs+pdy1Ptfo0aOtrPybTJ7O7J133kn38X79+lmenp7WgQMHLMuyrEuXLlkjR460qlevbvn4+FilS5e2br75Zmv8+PFWXFyc/XkJCQnWO++8Y9WqVcvy8fGxypQpY3Xq1MnasmWLw3fZoEEDy8/PzwoNDbXeeusta+bMmQ5TgFlWzqdgS3by5EnrmWeesWrUqGH5+flZAQEBVpMmTaw33njD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+v333+3b1q5dq3Llyum3335zGAx19erVqlSpUrYTdMuyGKcFAOAWbDYzQ9H770tr15qm7pJp/h4aKp0969LwnMrH00ez7pqlWXfNko+nj6vDcZpsJemffvqppk6dqhUrVuibb77Rd999p7lz5yopKSm34gNy1dKlUocO0qVLZmC0VauubyCxy5dNgt+1q/TZZ2aguKv7/pw9a0aJDwqSxoyRfvvNzCdeuvT1fZarrVxp+r7feadpwl6rlmnibrNJAweaxPzwYWnBAqlyZee+N+BOatasqfLly6epMb/rrrtUpUoV/frrrw7b27Ztq9jYWD355JMKDg6Wn5+fbrnlFm3evNmhnM1m07Jly9SkSRP5+vpq3bp12rFjh9q2basiRYqoaNGiatKkicPFgXXr1ql169by9/dXSEiInnzySUVHR+fJ9wAAKJzat5e8vc16XJz0449mQOMNG1Km2c2vvD291a9RP/Vr1E/ent6uDsdpspWkHzt2TJ07d7bfDw8Pl81m08mTJ50eGJDbvvxSuusu6coVqUsXM3haTgfTKFnS3LZrJ23davqkP/ig4zzbyWXatDHNjS5dMgPO+fhIffqY5L1WrZy9f2KimaN9zRqTgLdvb5bNm6XvvjPzuF+5Yt5761bpo4+kGjXM1VSgMGjbtq1WJ8+XKFNj3qZNG4WFhdm3X758Wb/99pvatm2r5557Tl999ZXmzJmjrVu3qnr16urQoYP+/fdfh9cdMWKE3nzzTe3Zs0cNGjRQr169dMMNN2jz5s3asmWLRowYIe//nRkdPHhQHTt21L333qs//vhD8+fP17p16zRkyJC8+yIAAIXO44+b88AbbjD3H3jAtORs1Up66CGXhoYMZKtPekJCgvz8/By2eXt7Kz4+3qlBAbklMdH0N//jDzNau2WZJumffppyhTEnPvrINCG/886MR0OfOdNctezaNXsjpsfGmib0J0+aJktvvGFG6Uy2dasZBCR5ZPb0VK1q5svs1s3xwgFQWLRt21ZPP/20EhISdPnyZW3btk1hYWGKj4/X9OnTJUkbN25UbGys2rRpo4EDB2r27Nnq1KmTJGnGjBlauXKlPvnkEw0fPtz+uq+++qratWtnv3/s2DENHz5ctf53xe3GVINLjBs3Tr169dLTTz9tf+z9999XWFiYpk2blub/KwAAzuLhIYWHS7Nnm/te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IeratatWrVrl9JhTW7BggWrVqiU/Pz/Vr19fS5cuzfJz169fLy8vr3QvmJw4cUIPPvigSpUqJX9/f9WvX1+///67EyMHALgLknQ3deFCyrqnp8vCAABAcf9r3hUdHa1bbrlFb731Vq68z7p163T58mXdd999mjNnTo5f58iRI2rSpIl++uknvfPOO9q5c6eWL1+utm3bavDgwU6M2NGGDRvUs2dPPfzww9q2bZu6deumbt26adeuXdd87oULF9SnTx/dfvvtaR47f/68WrVqJW9vby1btky7d+/WhAkTVKJEidz4GAAAFyNJd1Opa9IBoLCxLCk62jWLZWU9zjZt2uiJJ57Q008/rRIlSqhs2bKaMWOGoqOj1b9/fxUpUkTVq1fXsmXLHJ73888/q3nz5vL19VX58uU1YsQIJSQk2B+Pjo5Wnz59FBQUpPLly2vChAlp3js2NlbDhg1TxYoVFRgYqBYtWmjNmjU5/cod9OvXT926ddMbb7yhChUqqGbNmpKk3r17a9SoUQoPD3fK+1ztk08+0QMPPKDevXtr5syZOX6dQYMGyWazadOmTbr33ntVo0YN1a1bV0OHDtWvv/7qxIgdvffee+rYsaOGDx+u2rVr67XXXtNNN92kyZMnX/O5jz32mB544AG1bNkyzWNvvfWWQkJCNGvWLDVv3lxVqlRR+/btVa1atdz4GACQr5QOKK3SAaVdHYZTuUWSPmXKFIWGhsrPz08tWrTQpk2bMi1/PU3J8ovUNekAUNjExEhBQa5ZYmKyF+ucOXNUunRpbdq0SU888YQef/xxde/eXTfffLO2bt2q9u3bq3fv3or53wufOHFCnTt3VrNmzbRjxw5NmzZNn3zyiV5//XX7aw4fPlw///yzvv32W/3www9as2aNtm7d6vC+Q4YM0caNGzVv3jz98ccf6t69uzp27Kj9+/df9/cvSatWrdLevXu1cuVKff/99055zcxcunRJCxYs0IMPPqh27drp4sWLWrt2bbZf599//9Xy5cs1ePBgBQYGpnk8s376c+fOVVBQUKZLZjFt3LgxzQWMDh06aOPGjZnGPGvWLB06dEijR49O9/HFixeradOm6t69u4KDg9W4cWPNmDEj09cEgMIg0CdQZ4ef1dnhZxXok/aYn1+5fJ70+fPna+jQoZo+fbpatGihSZMmqUOHDtq7d6+Cg4PTlE9uSjZu3Djdcccd+vzzz9WtWzdt3bpV9erVc8EnyB0k6QCQPzRs2FAvvfSSJGnkyJF68803Vbp0aQ0cOFCSNGrUKE2bNk1//PGH/vOf/2jq1KkKCQnR5MmTZbPZVKtWLZ08eVLPP/+8Ro0apZiYGH3yySf6v//7P3vT5zlz5uiGG26wv+exY8c0a9YsHTt2TBUqVJAkDRs2TMuXL9esWbM0duzY6/5cgYGB+vjjj+Xj43Pdr5UV8+bN04033qi6detKkv773//qk08+UevWrbP1OgcOHJBlWapVq1a2Y7jzzjvVokWLTMtUrFgxw8ciIiJUtmxZh21ly5ZNt399sv3792vEiBFau3atvLzSPy07dOiQpk2bpqFDh+qFF17Q5s2b9eSTT8rHx0d9+/bNNF4AQP7j8iR94sSJGjhwoPr37y9Jmj59upYsWaKZM2dqxIgRacqnbkomSa+99ppWrlypyZMna/r06Xkae24iSQdQmAUESFFRrnvv7GjQoIF93dPTU6VKlVL9+vXt25KTtjNnzkiS9uzZo5YtW8pms9nLtGrVSlFRUfr77791/vx5xcXFOSSLJUuWtDc5l6SdO3cqMTFRNWrUcIglNjZWpUqVyt4HyED9+vWvO0Ffu3atOnXqZL//4YcfqlevXumWnTlzph588EH7/QcffFBhYWH64IMPVKRIkSy/p5Wd/gpXKVKkSLbe63olJibqgQce0JgxY9L8LVNLSkpS06ZN7RdfGjdurF27dmn69Okk6QBQALk0SY+Li9OWLVs0cuRI+zYPDw+Fh4dn2DRs48aNGjp0qMO2Dh066Jtvvkm3fGxsrGJjY+33IyMjrz/wPECfdACFmc0mpdNS2S15e3s73LfZbA7bkpPxpKQkp71nVFSUPD09tWXLFnleNbpoUFCQU94jvabi2dW0aVOHEeCvrmVOtnv3bv3666/atGmTnn/+efv2xMREzZs3z94qoWjRorqYzj/ICxcuqFixYpKkG2+8UTabTX/99Ve24507d64effTRTMssW7Ysw9r9cuXK6fTp0w7bTp8+rXLlyqVb/tKlS/r999+1bds2DRkyRJLZTyzLkpeXl3744QfddtttKl++vOrUqePw3Nq1a+urr77K6kcDgALpcvxldZprLgYv67VM/t7+Lo7IOVyapJ87d06JiYnpNg3L6J9rdpuSjRs3TmPGjHFOwHlo1Chp2DDpkUdcHQkAwJmSkyvLsuwJ/Pr161WkSBHdcMMNKlmypLy9vfXbb7+pUqVKkszo3vv27VNYWJgkU5OamJioM2fOZLs5eF7y9/dX9erVr1nuk08+0a233qopU6Y4bJ81a5Y++eQTe5Jes2ZNbdmyJc3zt27dam9pULJkSXXo0EFTpkzRk08+meZiw4ULFzLsl369zd1btmypVatWOcxnv3LlynQHg5PMRYedO3c6bJs6dap++uknLVy4UFWqVJFkWlrs3bvXody+fftUuXLlTGMFgIIuyUrSz0d/tq8XFC5v7p7bRo4c6VDzHhkZqZCQEBdGlDVDh0qdO0uZtH4DAORDgwYN0qRJk/TEE09oyJAh2rt3r0aPHq2hQ4fKw8NDQUFBevjhhzV8+HCVKlVKwcHBevHFF+XhkTLWa40aNdSrVy/16dNHEyZMUOPGjXX27FmtWrVKDRo0UJcuXXIl9n///VfHjh3TyZMnJcmeOJYrVy7D2uJriY+P12effaZXX301zdgyAwYM0MSJE/Xnn3+qbt26euaZZ9S6dWu98cYbuueee5SYmKgvvvhCGzdu1NSpU+3PmzJlilq1aqXmzZvr1VdfVYMGDZSQkKCVK1dq2rRp2rNnT7qxXG9z96eeekphYWGaMGGCunTponnz5un333/XRx99ZC8zcuRInThxQp9++qk8PDzSfObg4GD5+fk5bH/mmWd08803a+zYsbr//vu1adMmffTRRw6vCwAoOFw6unvp0qXl6emZraZh2W1K5uvrq6JFizos+YHNJtWuzRzpAFDQVKxYUUuXLtWmTZvUsGFDPfbYY3r44Yftg89J0jvvvKPWrVura9euCg8P1y233KImTZo4vM6sWbPUp08fPfvss6pZs6a6deumzZs322vfc8PixYvVuHFj+0WA//73v2rcuPF1jQmzePFi/fPPP7r77rvTPFa7dm3Vrl1bn3zyiSTp5ptv1rJly7Rs2TK1atVKbdq00YYNG7Rq1SqHpLZq1araunWr2rZtq2effVb16tVTu3bttGrVKk2bNi3HsV7LzTffrM8//1wfffSRGjZsqIULF+qbb75xiO3UqVM6duxYtl63WbNmWrRokb744gvVq1dPr732miZNmpRh/34AQP5ms65nhBUnaNGihZo3b64PPvhAkumLValSJQ0ZMiTdgeN6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9Nprr7k6NKDAoCbdBUqXLi1PT0+dPn3aYfvp06dVrly5dJ9Trly5bJUHrldO9tNk48eP15tvvqkff/xRDRo0yM0wUYhldx89ePCgjhw5oq5du9q3JSUlSZK8vLy0d+9eVatWLXeDRqGSk+No+fLl5e3tLU9PT/u22rVrKyIiQnFxcfLx8cnVmFG45GQfffnll9W7d28NGDBAklS/fn1FR0frkUce0YsvvigPD+oA4VoZ5U1FixbNF7XoEjXpLuHj46MmTZpo1apV9m1JSUlatWqVWrZsme5zWrZs6VBeklauXJlheeB65WQ/laS3335br732mpYvX66mTZvmRagopLK7j9aqVUs7d+7U9u3b7cudd95pH/01JCQkL8NHIZCT42irVq104MAB+wUkSdq3b5/Kly9Pgg6ny8k+GhMTkyYRT76oZFlW7gULZFGByJtcPXJdYTVv3jzL19fXmj17trV7927rkUcesYoXL25FRERYlmVZvXv3tkaMGGEvv379esvLy8saP368tWfPHmv06NGWt7e3tXPnTld9BBQC2d1P33zzTcvHx8dauHChderUKfty6dIlV30EFHDZ3UevxujuyG3Z3UePHTtmFSlSxBoyZIi1d+9e6/vvv7eCg4Ot119/3VUfAQVcdvfR0aNHW0WKFLG++OIL69ChQ9YPP/xgVatWzbr//vtd9RFQwF26dMnatm2btW3bNkuSNXHiRGvbtm3W0aNHLcuyrBEjRli9e/e2lz906JAVEBBgDR8+3NqzZ481ZcoUy9PT01q+fLmrPkK2kaS70AcffGBVqlTJ8vHxsZo3b279+uuv9sfCwsKsvn37OpT/8ssvrRo1alg+Pj5W3bp1rSVLluRxxCiMsrOfVq5c2ZKUZhk9enTeB45CI7vH0tRI0pEXsruPbtiwwWrRooXl6+trVa1a1XrjjTeshISEPI4ahUl29tH4+HjrlVdesapVq2b5+flZISEh1qBBg6zz58/nfeAoFFavXp3u+WXyftm3b18rLCwszXMaNWpk+fj4WFWrVrVmzZqV53FfD5tl0S4FAAAAAAB3QJ90AAAAAADcBEk6AAAAAABugiQdAAAAAAA3QZIOAAAAAICbIEkHAAAAAMBNkKQDAAAAAOAmSNIBAAAAAHATJOkAAAAAALgJknQAAJDrbDabvvnmG0nSkSNHZLPZtH37dpfGBACAOyJJBwCggOvXr59sNptsNpu8vb1VpUoVPffcc7py5YqrQwMAAFfxcnUAAAAg93Xs2FGzZs1SfHy8tmzZor59+8pms+mtt95ydWgAACAVatIBACgEfH19Va5cOYWEhKhbt24KDw/XypUrJUlJSUkaN26cqlSpIn9/fzVs2FALFy50eP6ff/6pO+64Q0WLFlWRIkXUunVrHTx4UJK0efNmtWvXTqVLl1axYsUUFhamrVu35vlnBACgICBJBwCgkNm1a5c2bNggHx8fSdK4ceP06aefavr06frzzz/1zDPP6MEHH9TPP/8sSTpx4oRuvfVW+fr66qefftKWLVv00EMPKSEhQZJ06dIl9e3bV+vWrdOvv/6qG2+8UZ07d9alS5dc9hkBAMivaO4OAEAh8P333ysoKEgJCQmKjY2Vh4eHJk+erNjYWI0dO1Y//vj/7dzPK2x9HMDx9zWjSRamZCUpYSU/ZjdJJ8pGdlLKws5qNjQ2kzVlIwmNGnWajX/A7iaKhZJsJIQaK2KjzGIkz+6WJ9278tzzmPdr/T3fcz7Ld99v5yfpdBqAtrY2Dg4OyOfzBEHA2toaDQ0NbG9vU1tbC0BnZ+evvYeGhj68a3Nzk2Qyyf7+PqOjo//dkJIkfQNGuiRJVWBwcJCNjQ1eXl5YXl4mHo8zNjbG2dkZ5XKZ4eHhD+srlQp9fX0AnJ6eMjAw8CvQ/+3+/p75+Xn29vZ4eHjg7e2NcrlMqVT68rkkSfpujHRJkqpAfX097e3tAGxtbdHT00OhUKCrqwuAnZ0dmpubPzyTSCQAqKur++3eU1NTPD09sbKyQmtrK4lEgnQ6TaVS+YJJJEn63ox0SZKqTE1NDblcjtnZWS4vL0kkEpRKJYIg+HR9d3c3YRjy+vr66Wn64eEh6+vrjIyMAHB3d8fj4+OXziBJ0nflj+MkSapC4+PjxGIx8vk82WyWmZkZwjDk+vqak5MTVldXCcMQgEwmw/PzMxMTExwfH3N1dUWxWOTi4gKAjo4OisUi5+fnHB0dMTk5+cfTd0mS9DlP0iVJqkLxeJxMJsPS0hK3t7c0NTWxuLjIzc0NyWSSVCpFLpcDoLGxkd3dXebm5giCgFgsRm9vL/39/QAUCgWmp6dJpVK0tLSwsLBANpv9m+NJkvS/9eP9/f39b3+EJEmSJEnyurskSZIkSZFhpEuSJEmSFBFGuiRJkiRJEWGkS5IkSZIUEUa6JEmSJEkRYaRLkiRJkhQRRrokSZIkSRFhpEuSJEmSFBFGuiRJkiRJEWGkS5IkSZIUEUa6JEmSJEkR8Q+irASpQYB/aAAAAABJRU5ErkJggg=="/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA+kAAAHWCAYAAAALjsguAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAACMtklEQVR4nOzdd3gU5drH8d+mNzqEZiT00EGaNAGNVFGwwEGQImABbAgKFop6BAscbBRBQc9RQVQUpSqC0pSOIEiTotQgJSSBtJ33j+fNJksKJGyym+T7ua69MjP77Oy9m9nZvedpNsuyLAEAAAAAALfzcncAAAAAAADAIEkHAAAAAMBDkKQDAAAAAOAhSNIBAAAAAPAQJOkAAAAAAHgIknQAAAAAADwESToAAAAAAB6CJB0AAAAAAA9Bkg4AAAAAgIcgSQcAeJQBAwYoPDw8W49ZvXq1bDabVq9enSsx5Xft2rVTu3btHOuHDx+WzWbT3Llz3RYTrl1OPhMprvzf59ZjAACuQ5IOAIXc3LlzZbPZHLeAgADVqFFDw4cP16lTp9wdnsdLSXhTbl5eXipZsqQ6d+6sDRs2uDs8lzh16pRGjhypiIgIBQUFKTg4WI0bN9Yrr7yi8+fPuzs8uNEff/yhZ555Rg0bNlSRIkVUvnx5de3aVZs3b3Z3aACQb/m4OwAAgGd46aWXVLlyZV2+fFlr167V9OnTtWTJEu3atUtBQUF5FsesWbNkt9uz9ZhbbrlFly5dkp+fXy5FdXW9e/dWly5dlJycrH379mnatGlq3769Nm3apHr16rktruu1adMmdenSRTExMerbt68aN24sSdq8ebMmTZqkn3/+WStWrHBzlHCX2bNn64MPPtA999yjoUOH6sKFC5o5c6ZuvvlmLVu2TJGRke4OEQDyHZJ0AIAkqXPnzmrSpIkkafDgwSpVqpSmTJmib775Rr17987wMbGxsQoODnZpHL6+vtl+jJeXlwICAlwaR3bddNNN6tu3r2O9TZs26ty5s6ZPn65p06a5MbKcO3/+vHr06CFvb29t27ZNERERTvf/+9//1qxZs1zyXLlxLCH3XL58WX5+furdu7fGjx+vkJAQx30PPvigatWqpfHjx5OkA0AO0NwdAJChW2+9VZJ06NAhSaZfbEhIiA4ePKguXbqoSJEi6tOnjyTJbrdr6tSpqlOnjgICAlS2bFk9/PDDOnfuXLr9Ll26VG3btlWRIkVUtGhRNW3aVJ9++qnj/oz6386bN0+NGzd2PKZevXp66623HPdn1id9wYIFaty4sQIDA1W6dGn17dtXx44dcyqT8rqOHTum7t27KyQkRGXKlNHIkSOVnJyc4/evTZs2kqSDBw86bT9//ryefPJJhYWFyd/fX9WqVdNrr72WrvWA3W7XW2+9pXr16ikgIEBlypRRp06dnJoRz5kzR7feeqtCQ0Pl7++v2rVra/r06TmO+UozZ87UsWPHNGXKlHQJuiSVLVtWL7zwgmPdZrNp/Pjx6cqFh4drwIABjvWULhY//fSThg4dqtDQUN1www364osvHNszisVms2nXrl2ObX/88YfuvfdelSxZUgEBAWrSpIkWLVp0fS86AzabTcOHD9eCBQtUu3ZtBQYGqkWLFtq5c6cjtmrVqikgIEDt2rXT4cOH0+3jWo5FSfr6669Vt25dBQQEqG7dulq4cGGGMWXnM3e9Uj5f8+bN0wsvvKCKFSsqKChI0dHRaty4sVOCLkmlSpVSmzZttGfPHpfHAgCFATXpAIAMpSSXpUqVcmxLSkpSx44d1bp1a7355puOZvAPP/yw5s6dq4EDB+rxxx/XoUOH9O6772rbtm1at26do3Z87ty5evDBB1WnTh2NGTNGxYsX17Zt27Rs2TLdf//9Gcbx/fffq3fv3rrtttv02muvSZL27NmjdevW6Yknnsg0/pR4mjZtqokTJ+rUqVN66623tG7dOm3btk3Fixd3lE1OTlbHjh3VvHlzvfnmm/rhhx80efJkVa1aVY8++miO3r+URK1EiRKObXFxcWrbtq2OHTumhx9+WDfeeKPWr1+vMWPG6MSJE5o6daqj7KBBgzR37lx17txZgwcPVlJSktasWaNffvnF0eJh+vTpqlOnju688075+Pjo22+/1dChQ2W32zVs2LAcxZ3WokWLFBgYqHvvvfe695WRoUOHqkyZMho7dqxiY2PVtWtXhYSE6PPPP1fbtm2dys6fP1916tRR3bp1JUm///67WrVqpYoVK2r06NEKDg7W559/ru7du+vLL79Ujx49XBrrmjVrtGjRIsf7OnHiRN1xxx165plnNG3aNA0dOlTnzp3T66+/rgcffFA//vij47HXeiyuWLFC99xzj2rXrq2JEyfqn3/+0cCBA3XDDTeki+daP3Ou9PLLL8vPz08jR45UfHx8lt1LTp48qdKlS7s8BgAoFCwAQKE2Z84cS5L1ww8/WFFRUdZff/1lzZs3zypVqpQVGBho/f3335ZlWVb//v0tSdbo0aOdHr9mzRpLkvXJJ584bV+2bJnT9vPnz1tFihSxmjdvbl26dMmprN1udyz379/fqlSpkmP9iSeesIoWLWolJSVl+hpWrVplSbJWrVplWZZlJSQkWKGhoVbdunWdnuu7776zJFljx451ej5J1ksvveS0z0aNGlmNGzfO9DlTHDp0yJJkTZgwwYqKirJOnjxprVmzxmratKklyVqwYIGj7Msvv2wFBwdb+/btc9rH6NGjLW9vb+vo0aOWZVnWjz/+aEmyHn/88XTPl/a9iouLS3d/x44drSpVqjhta9u2rdW2bdt0Mc+ZMyfL11aiRAmrQYMGWZZJS5I1bty4dNsrVapk9e/f37Gecsy1bt063f+1d+/eVmhoqNP2EydOWF5eXk7/o9tuu82qV6+edfnyZcc2u91utWzZ0qpevfo1x3wtJFn+/v7WoUOHHNtmzpxpSbLKlStnRUdHO7aPGTPGkuQom51jsWHDhlb58uWt8+fPO7atWLHCkuT0mbjWz5xlpf/fX4srH5Py+apSpUqGx9yVfv75Z8tms1kvvvhitp4XAGDQ3B0AIEmKjIxUmTJlFBYWpn/9618KCQnRwoULVbFiRadyV9YsL1iwQMWKFdPtt9+uM2fOOG4pzWBXrVolydSIX7x4UaNHj07Xf9xms2UaV/HixRUbG6vvv//+ml/L5s2bdfr0aQ0dOtTpubp27aqIiAgtXrw43WMeeeQRp/U2bdrozz//vObnHDdunMqUKaNy5co5mvpOnjzZqRZ6wYIFatOmjUqUKOH0XkVGRio5OVk///yzJOnLL7+UzWbTuHHj0j1P2vcqMDDQsXzhwgWdOXNGbdu21Z9//qkLFy5cc+yZiY6OVpEiRa57P5kZMmSIvL29nbb16tVLp0+fduq68MUXX8hut6tXr16SpLNnz+rHH39Uz549dfHiRcf7+M8//6hjx47av39/hk3Jr8dtt93m1A2jefPmkqR77rnH6T1K2Z5y7FzrsXjixAlt375d/fv3V7FixRzlbr/9dtWuXdsplmv9zLla//79nY65jJw+fVr333+/KleurGeeeSZX4gCAgo7m7gAASdJ7772nGjVqyMfHR2XLllXNmjXl5eV8LdfHxydd09v9+/frwoULCg0NzXC/p0+flpTafD6lufK1Gjp0qD7//HN17txZFStWVIcOHdSzZ0916tQp08ccOXJEklSzZs1090VERGjt2rVO21L6fKdVokQJp/69UVFRTn3UQ0JCnPriPvTQQ7rvvvt0+fJl/fjjj3r77bfT9Wnfv3+/fvvtt3TPlSLte1WhQgWVLFky09coSevWrdO4ceO0YcMGxcXFOd134cIFp2QvJ4oWLaqLFy9e1z6yUrly5XTbOnXqpGLFimn+/Pm67bbbJJmm7g0bNlSNGjUkSQcOHJBlWXrxxRf14osvZrjv06dPp7vAlOJq/8uM3HjjjU7rKe9tWFhYhttTjp1rPRZTylWvXj1duZo1a2rr1q2O9Wv9zLlaRv+vtGJjY3XHHXfo4sWLWrt27VXfUwBAxkjSAQCSpGbNmjn6OmfG398/XeJut9sVGhqqTz75JMPHZJaQXqvQ0FBt375dy5cv19KlS7V06VLNmTNH/fr100cffXRd+05xZW1uRpo2bepIpCRTc552kLTq1as7RrK+44475O3trdGjR6t9+/aO99Vut+v222/PtIYxJQm9FgcPHtRtt92miIgITZkyRWFhYfLz89OSJUv0n//8J9vT2GUkIiJC27dvV0JCwnVNb5fZAHwZ1cr6+/ure/fuWrhwoaZNm6ZTp05p3bp1evXVVx1lUl7byJEj1bFjxwz3Xa1atUzjudr/MiOZHSOZbbcsK8v9XY/c/sxlJqta9ISEBN1999367bfftHz58mxfjAMApCJJBwBcl6pVq+qHH35Qq1atsvwRX7VqVUnSrl27skygMuLn56du3bqpW7dustvtGjp0qGbOnKkXX3wxw31VqlRJkrR3717HKPUp9u7d67g/Oz755BNdunTJsV6lSpUsyz///POaNWuWXnjhBS1btkySeQ9iYmKuOi1V1apVtXz5cp09ezbT2vRvv/1W8fHxWrRokVMtryubOnfr1k0bNmzQl19+mek0fGmVKFFC58+fd9qWkJCgEydOZOt5e/XqpY8++kgrV67Unj17ZFmWo6m7lPre+/r65miKr+z+L6/HtR6LKX/379+fbh979+51Wr/Wz1xesdvt6tevn1auXJnhoH8AgOyhTzoA4Lr07NlTycnJevnll9Pdl5SU5EjaOnTooCJFimjixIm6fPmyU7msah3/+ecfp3UvLy/Vr19fkhQfH5/hY5o0aaLQ0FDNmDHDqczSpUu1Z88ede3a9ZpeW1qtWrVSZGSk43a1xK548eJ6+OGHtXz5cm3fvl2Sea82bNig5cuXpyt//vx5JSUlSTL9nC3L0oQJE9KVS3mvUmpw0753Fy5c0Jw5c7L92jLzyCOPqHz58nr66ae1b9++dPefPn1ar7zyimO9atWqjn71Kd5///1sT2UXGRmpkiVLav78+Zo/f76aNWvm1NQ6NDRU7dq108yZMzO8ABAVFZXl/rP7v7we13osli9fXg0bNtRHH33kNJ7A999/r927dzvt81o/c3nlscce0/z58zVt2jTdfffdefrcAFAQUZMOALgubdu21cMPP6yJEydq+/bt6tChg3x9fbV//34tWLBAb731lu69914VLVpU//nPfzR48GA1bdpU999/v0qUKKEdO3YoLi4u06brgwcP1tmzZ3Xrrbfqhhtu0JEjR/TOO++oYcOGqlWrVoaP8fX11WuvvaaBAweqbdu26t27t2Paq/DwcD311FO5+ZY4PPHEE5o6daomTZqkefPmadSoUVq0aJHuuOMODRgwQI0bN1ZsbKx27typL774QocPH1bp0qXVvn17PfDAA3r77be1f/9+derUSXa7XWvWrFH79u01fPhwdejQwdHC4OGHH1ZMTIxmzZql0NDQbNdcZ6ZEiRJauHChunTpooYNG6pv375q3LixJGnr1q367LPP1KJFC0f5wYMH65FHHtE999yj22+/XTt27NDy5cuzPRWXr6+v7r77bs2bN0+xsbF6880305V577331Lp1a9WrV09DhgxRlSpVdOrUKW3YsEF///23duzYcX0v3kWycyxOnDhRXbt2VevWrfXggw/q7Nmzeuedd1SnTh3FxMQ4yl3rZy4vTJ06VdOmTVOLFi0UFBSk//3vf0739+jRQ8HBwXkSCwAUFCTpAIDrNmPGDDVu3FgzZ87Uc889Jx8fH4WHh6tv375q1aqVo9ygQYMUGhqqSZMm6eWXX5avr68iIiKyTJr79u2r999/X9OmTdP58+dVrlw59erVS+PHj0/XPz6tAQMGKCgoSJMmTdKzzz6r4OBg9ejRQ6+99prTHOm5qUKFCrr//vv13//+VwcPHlTVqlX1008/6dVXX9WCBQv08ccf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B+qGG26Qv7+/KleurN69e2vz5s0uizcj7733nsLDwxUQEKDmzZtr48aN1/zYefPmyWazpXstkrRnzx7deeedKlasmIKDg9W0aVMdPXrUhZEDADwFSbqHOncudZmBjgEA7pSQkKC4uDht3bpVL774orZu3aqvvvpKe/fu1Z133umy5/nyyy9Vp04dRUREZJiMX6vNmzercePG2rdvn2bOnKndu3dr4cKFioiI0NNPP+2yeK80f/58jRgxQuPGjdPWrVvVoEEDdezYUadPn77qYw8fPqyRI0eqTZs26e47ePCgWrdurYiICK1evVq//fabXnzxRUZtB4ACiiTdQ6VN0pkqGEBhY1lSbKx7bmm7G11Nu3bt9Nhjj+nJJ59UiRIlVLZsWc2aNUuxsbEaOHCgihQpomrVqmnp0qVOj/vpp5/UrFkz+fv7q3z58ho9erSSkpIc98fGxqpfv34KCQlR+fLlNXny5HTPHR8fr5EjR6pixYoKDg5W8+bNtXr16py+5U5Saqb//e9/q0KFCqpZs6aKFSum77//Xj179lTNmjV18803691339WWLVtcVqP7wQcfqG/fvurbt68++OCDHO3DsiwNGDBA1atX15o1a9S1a1dVrVpVDRs21Lhx4/TNN9+4JNaMTJkyRUOGDNHAgQNVu3ZtzZgxQ0FBQfrwww+zfFxycrL69OmjCRMmqEqVKunuf/7559WlSxe9/vrratSokapWrao777xToaGhufVSACDfKB1UWqWDSrs7DJfyiCQ9u03DFixYoIiICAUEBKhevXpasmRJHkWad9Im6QBQ2MTFSSEh7rnFxWUv1o8++kilS5fWxo0b9dhjj+nRRx/Vfffdp5YtW2rr1q3q0KGDHnjgAcX9/46PHTumLl26qGnTptqxY4emT5+uDz74QK+88opjn6NGjdJPP/2kb775RitWrNDq1au1detWp+cdPny4NmzYoHnz5um3337Tfffdp06dOmn//v3X/f5L0sqVK7V37159//33+u677zIsc+HCBdlstmvu+56VgwcPasOGDerZs6d69uypNWvW6MiRI9nez/bt2/X777/r6aefznAasqxiffXVVxUSEpLlLbMLEgkJCdqyZYsiIyMd27y8vBQZGakNGzZkGfNLL72k0NBQDRo0KN19drtdixcvVo0aNdSxY0eFhoaqefPm19XSAAAKimC/YEWNilLUqCgF+wW7OxyXcXuSnt2mYevXr1fv3r01aNAgbdu2Td27d1f37t21a9euPI48d5GkA0D+0KBBA73wwguqXr26xowZo4CAAJUuXVpDhgxR9erVNXbsWP3zzz/67bffJEnTpk1TWFiY3n33XUVERKh79+6aMGGCJk+eLLvdrpiYGH3wwQd68803ddttt6levXr66KOPnGrajx49qjlz5mjBggVq06aNqlatqpEjR6p169aaM2eOS15XcHCwZs+erTp16qhOnTrp7r98+bKeffZZ9e7dW0WLFr3u5/vwww/VuXNnlShRQiVLllTHjh1z9FpSLlJERERk+7GPPPKItm/fnuWtQoUKGT72zJkzSk5OVtmyZZ22ly1bVidPnsz0OdeuXasPPvhAs2bNyvD+06dPKyYmRpMmTVKnTp20YsUK9ejRQ3fffbd++umnbL9GAIDn83F3AGmbhknSjBkztHjxYn344YcaPXp0uvJvvfWWOnXqpFGjRkmSXn75ZX3//fd69913NWPGjDyNPTeRpAMozIKCnAfQzOvnzo769es7lr29vVWqVCnVq1fPsS0laUu5+Lxnzx61aNFCtjR9mVq1aqWYmBj9/fffOnfunBISEtS8eXPH/SVLllTNmjUd6zt37lRycrJq1KjhFEt8fLxKlSqVvReQiXr16snPzy/D+xITE9WzZ09ZlqXp06dnuo9PPvlEDz/8sGN96dKlGfa5Tk5O1kcffaS33nrLsa1v374aOXKkxo4dm2GNeGas7PRXuELJkiVVsmTJHD8+uy5evKgHHnhAs2bNUunSGTfVtNvtkqS77rpLTz31lCSpYcOGWr9+vWbMmKG2bdvmWbwAgLzh1iQ9pWnYmDFjHNuu1jRsw4YNGjFihNO2jh07ZtrsKz4+3mmE2Ojo6OsPPA+QpAMozGw2KTiftFrz9fV1WrfZbE7bUpLxlGTLFWJiYuTt7a0tW7bI29vb6b6QkBCXPEdwJv+AlAT9yJEj+vHHH7OsRb/zzjudLjZUrFgxw3LLly/XsWPH1KtXL6ftycnJWrlypW6//XZJUpEiRXThwoV0jz9//ryKFSsmSY4LF3/88YcaNWqUxStM79VXX9Wrr76aZZndu3frxhtvTLe9dOnS8vb21qlTp5y2nzp1SuXKlctwXwcPHtThw4fVrVs3x7aU48THx0d79+5VWFiYfHx8VLt2bafH1qpVS2vXrr2m1wUABdWlxEvq/ElnSdLSPksV6Bvo5ohcw63N3XPSNOzkyZPZKj9x4kQVK1bMcQsLC3NN8Lls3Djz96GH3BsHAMC1atWqpQ0bNjjV+K5bt05FihTRDTfcoKpVq8rX11e//vqr4/5z585p3759jvVGjRopOTlZp0+fVrVq1ZxumSWErpCSoO/fv18//PDDVWvtUwbOS7kFBmb84+mDDz7Qv/71r3RNy//1r385DSBXs2ZNbdmyxemxycnJ2rFjhyM5b9iwoWrXru3oPnCl8+fPZxrv9TR39/PzU+PGjbVy5UrHNrvdrpUrV6pFixYZPiYiIkI7d+502v+dd96p9u3ba/v27QoLC5Ofn5+aNm2qvXv3Oj123759qlSpUqavBQAKA7tl109HftJPR36S3XLdxXB3c3tz99w2ZswYp5r36OjofJGoP/WU1LmzdEVLRgBAPjd06FBNnTpVjz32mIYPH669e/dq3LhxGjFihLy8vBQSEqJBgwZp1KhRKlWqlEJDQ/X88887NfmuUaOG+vTpo379+mny5Mlq1KiRoqKitHLlStWvX19du3Z1edyJiYm69957tXXrVn333XdKTk52XCAvWbJkpk3jryYqKkrffvutFi1apLp16zrd169fP/Xo0UNnz55VyZIlNWLECA0aNEgRERG6/fbbFRsbq3feeUfnzp3T4MGDJZmWC3PmzFFkZKTatGmj559/XhEREYqJidG3336rFStWZNqX+3qbu48YMUL9+/dXkyZN1KxZM02dOtUx0n/a11SxYkVNnDhRAQEB6V5zysB2abePGjVKvXr10i233KL27dtr2bJl+vbbb102mj8AwLO4NUnPSdOwcuXKZau8v7+//P39XRNwHrLZpFq13B0FAMDVKlasqCVLlmjUqFFq0KCBSpYsqUGDBumFF15wlHnjjTcUExOjbt26qUiRInr66afTNfOeM2eOXnnlFT399NM6duyYSpcurZtvvll33HFHrsR97NgxLVq0SJKprU5r1apVateuXY72+/HHHys4OFi33XZbuvtuu+02BQYG6n//+58ef/xx9e7dW5ZlacqUKRo9erSCgoLUuHFj/fzzz06t7Jo1a6bNmzfr3//+t4YMGaIzZ86ofPnyatmypaZOnZqjOK9Fr169FBUVpbFjx+rkyZNq2LCh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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>&lt;Figure size 640x480 with 0 Axes&gt;</pre>
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
<h3 id="ROC-Curve-Plot"><a id="toc5_4_"></a><a href="#toc0_">ROC Curve Plot</a><a class="anchor-link" href="#ROC-Curve-Plot">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [135]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Compute ROC curve</span>
<span class="n">fpr1</span><span class="p">,</span> <span class="n">tpr1</span><span class="p">,</span> <span class="n">_</span> <span class="o">=</span> <span class="n">roc_curve</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">y_prob1</span><span class="p">)</span>
<span class="n">fpr2</span><span class="p">,</span> <span class="n">tpr2</span><span class="p">,</span> <span class="n">_</span> <span class="o">=</span> <span class="n">roc_curve</span><span class="p">(</span><span class="n">y_test2</span><span class="p">,</span> <span class="n">y_prob2</span><span class="p">)</span>

<span class="c1"># Compute area under the curve (AUC)</span>
<span class="n">roc_auc1</span> <span class="o">=</span> <span class="n">auc</span><span class="p">(</span><span class="n">fpr1</span><span class="p">,</span> <span class="n">tpr1</span><span class="p">)</span>
<span class="n">roc_auc2</span> <span class="o">=</span> <span class="n">auc</span><span class="p">(</span><span class="n">fpr2</span><span class="p">,</span> <span class="n">tpr2</span><span class="p">)</span>


<span class="c1">#plt.subplot(1, 2, 1)</span>

<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span> <span class="mi">5</span><span class="p">))</span>
<span class="c1"># Plot ROC curve</span>

<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">fpr1</span><span class="p">,</span> <span class="n">tpr1</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'darkorange'</span><span class="p">,</span> <span class="n">lw</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">model_name1</span><span class="si">}</span><span class="s1"> - AUC = </span><span class="si">{</span><span class="n">roc_auc1</span><span class="si">:</span><span class="s1">.2f</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">([</span><span class="mi">0</span><span class="p">,</span> <span class="mi">1</span><span class="p">],</span> <span class="p">[</span><span class="mi">0</span><span class="p">,</span> <span class="mi">1</span><span class="p">],</span> <span class="n">color</span><span class="o">=</span><span class="s1">'navy'</span><span class="p">,</span> <span class="n">lw</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Random'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">'False Positive Rate'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">'True Positive Rate'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Receiver Operating Characteristic Curve (ROC)  - </span><span class="si">{</span><span class="n">model_name1</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">legend</span><span class="p">(</span><span class="n">loc</span><span class="o">=</span><span class="s1">'best'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Perfect'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mi">0</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Perfect'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.4</span><span class="p">,</span> <span class="mf">0.6</span><span class="p">,</span> <span class="s1">'Better'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.4</span><span class="p">,</span> <span class="mf">0.3</span><span class="p">,</span> <span class="s1">'Worse'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.01</span><span class="p">,</span> <span class="mf">1.01</span><span class="p">,</span> <span class="s1">'Perfect'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>

<span class="c1">#plt.subplot(1, 2,2)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">12</span><span class="p">,</span> <span class="mi">5</span><span class="p">))</span>
<span class="c1"># Plot ROC curve</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">(</span><span class="n">fpr2</span><span class="p">,</span> <span class="n">tpr2</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'darkorange'</span><span class="p">,</span> <span class="n">lw</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">model_name2</span><span class="si">}</span><span class="s1"> AUC = </span><span class="si">{</span><span class="n">roc_auc2</span><span class="si">:</span><span class="s1">.2f</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">plot</span><span class="p">([</span><span class="mi">0</span><span class="p">,</span> <span class="mi">1</span><span class="p">],</span> <span class="p">[</span><span class="mi">0</span><span class="p">,</span> <span class="mi">1</span><span class="p">],</span> <span class="n">color</span><span class="o">=</span><span class="s1">'navy'</span><span class="p">,</span> <span class="n">lw</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Random'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">'False Positive Rate'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">'True Positive Rate'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Receiver Operating Characteristic (ROC) Curve - </span><span class="si">{</span><span class="n">model_name2</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">legend</span><span class="p">(</span><span class="n">loc</span><span class="o">=</span><span class="s1">'best'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Perfect'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">axvline</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="mi">0</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">label</span><span class="o">=</span><span class="s1">'Perfect'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.4</span><span class="p">,</span> <span class="mf">0.6</span><span class="p">,</span> <span class="s1">'Better'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.4</span><span class="p">,</span> <span class="mf">0.3</span><span class="p">,</span> <span class="s1">'Worse'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'black'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.01</span><span class="p">,</span> <span class="mf">1.01</span><span class="p">,</span> <span class="s1">'Perfect'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'green'</span><span class="p">)</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA+kAAAHWCAYAAAALjsguAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAC0cklEQVR4nOzdd1hT1/8H8HcChD0VFBEBBwpuAa11j2rde1RbcSvR2mq11far1g61tbW21eAGtU5ctWq11ap1VcE9cYtbUGTP5Pz+4EcgAkoQuAHer+fp09xzzr35EJJrPpwlE0IIEBEREREREZHk5FIHQEREREREREQZmKQTERERERERGQgm6UREREREREQGgkk6ERERERERkYFgkk5ERERERERkIJikExERERERERkIJulEREREREREBoJJOhEREREREZGBYJJOREREREREZCCYpBMR/T93d3cMHTpU6jDKnNatW6N169ZSh/FaX375JWQyGaKioqQOxeDIZDJ8+eWXhXKtO3fuQCaTITg4uFCuBwAnT56EQqHA3bt3C+2ahW3gwIHo37+/1GGQHg4ePAiZTIaDBw/qfW5wcDBkMhnu3LlTpOcQUcnEJJ2IikXml4vM/4yNjeHi4oKhQ4fiwYMHUodn0BISEvD111+jXr16sLCwgK2tLVq0aIHVq1dDCCF1ePly+fJlfPnllwb55VKtViMoKAitW7eGg4MDTE1N4e7ujmHDhiEsLEzq8ArFunXrsGDBAqnD0FGcMX3xxRd477334Obmpi1r3bq1zj3J3Nwc9erVw4IFC6DRaHK9zrNnzzBlyhTUrFkTZmZmcHBwQMeOHbFz5848nzs2NhazZs1C/fr1YWVlBXNzc9SpUwefffYZHj58qG332WefYcuWLTh37ly+f66y8N6lgklMTMSiRYvQoUMHODs7w9raGg0bNkRgYCDUarXU4RHRaxhLHQARlS1fffUVPDw8kJycjP/++w/BwcE4cuQILl68CDMzM0ljCw8Ph1xuWH+7fPLkCdq1a4crV65g4MCBGD9+PJKTk7Flyxb4+/tj9+7dWLt2LYyMjKQO9ZUuX76MWbNmoXXr1nB3d9ep++uvv6QJCkBSUhJ69+6NPXv2oGXLlvj888/h4OCAO3fuYNOmTVi1ahUiIiJQuXJlyWIsDOvWrcPFixfx8ccfF8n1k5KSYGys31eK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"/>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [137]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Save model plot data</span>

<span class="n">arrays</span> <span class="o">=</span> <span class="p">[[</span><span class="s1">'precision1'</span><span class="p">,</span><span class="n">model_name1</span><span class="p">],</span>
         <span class="p">[</span><span class="s1">'recall1'</span><span class="p">,</span> <span class="n">model_name1</span><span class="p">],</span>
         <span class="p">[</span><span class="s1">'precision2'</span><span class="p">,</span><span class="n">model_name2</span><span class="p">],</span>
         <span class="p">[</span><span class="s1">'recall2'</span><span class="p">,</span> <span class="n">model_name2</span><span class="p">],</span>
         <span class="p">[</span><span class="s1">'fpr1'</span><span class="p">,</span> <span class="n">model_name1</span><span class="p">],</span>
         <span class="p">[</span><span class="s1">'tpr1'</span><span class="p">,</span> <span class="n">model_name1</span><span class="p">],</span>
         <span class="p">[</span><span class="s1">'fpr2'</span><span class="p">,</span> <span class="n">model_name2</span><span class="p">],</span>
         <span class="p">[</span><span class="s1">'tpr2'</span><span class="p">,</span> <span class="n">model_name2</span><span class="p">],</span>
        <span class="p">]</span>

<span class="n">variables</span> <span class="o">=</span> <span class="p">[[</span><span class="s1">'auc_score1'</span><span class="p">,</span> <span class="n">model_name1</span><span class="p">],</span>
             <span class="p">[</span><span class="s1">'auc_score2'</span><span class="p">,</span> <span class="n">model_name2</span><span class="p">],</span>
             <span class="p">[</span><span class="s1">'roc_auc1'</span><span class="p">,</span> <span class="n">model_name1</span><span class="p">],</span>
             <span class="p">[</span><span class="s1">'roc_auc2'</span><span class="p">,</span> <span class="n">model_name2</span><span class="p">]</span>
             <span class="p">]</span>

<span class="c1"># Save plot data scores (auc, roc)</span>
<span class="k">for</span> <span class="n">var_name</span><span class="p">,</span> <span class="n">model</span> <span class="ow">in</span> <span class="n">variables</span><span class="p">:</span>
    <span class="c1">#print(var_name, model)</span>
    <span class="n">var</span> <span class="o">=</span> <span class="nb">globals</span><span class="p">()[</span><span class="n">var_name</span><span class="p">]</span>
    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="sa">f</span><span class="s1">'99-documentation-project/08-plot_data/</span><span class="si">{</span><span class="n">model</span><span class="si">}</span><span class="s1">-</span><span class="si">{</span><span class="n">var_name</span><span class="si">}</span><span class="s1">.csv'</span><span class="p">,</span> <span class="s1">'w'</span><span class="p">)</span> <span class="k">as</span> <span class="n">file</span><span class="p">:</span>
        <span class="n">json</span><span class="o">.</span><span class="n">dump</span><span class="p">(</span><span class="n">var</span><span class="p">,</span> <span class="n">file</span><span class="p">)</span>

<span class="c1"># Save plot data arrays (recall, precision, fpr, tpr)</span>
<span class="k">for</span> <span class="n">array_name</span><span class="p">,</span> <span class="n">model</span> <span class="ow">in</span> <span class="n">arrays</span><span class="p">:</span>
    <span class="c1">#print(array_name, model)</span>
    <span class="n">var</span> <span class="o">=</span> <span class="nb">globals</span><span class="p">()[</span><span class="n">array_name</span><span class="p">]</span>
    <span class="n">df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">DataFrame</span><span class="p">({</span><span class="n">array_name</span><span class="p">:</span> <span class="n">var</span><span class="p">})</span>
    <span class="n">df</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="sa">f</span><span class="s1">'99-documentation-project/08-plot_data/</span><span class="si">{</span><span class="n">model</span><span class="si">}</span><span class="s1">-</span><span class="si">{</span><span class="n">array_name</span><span class="si">}</span><span class="s1">.csv'</span><span class="p">,</span> <span class="n">index</span><span class="o">=</span><span class="kc">False</span><span class="p">,</span> <span class="n">header</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span>
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
<h2 id="Conclusions"><a id="toc5_5_"></a><a href="#toc0_">Conclusions</a><a class="anchor-link" href="#Conclusions">¶</a></h2><p>The AUC score (Area Under the Curve) is very low, making predictions very unreliable, the probabilities of correct predictions of staff leaving seem low, the model would be great at predicting who is going to stay, but that's not what the client is looking for.</p>
<p>While the ROC score at 0.88 looks ok, I think alternative models may perform better.</p>
<h2 id="Conclusion,-dataset-comparison---Logistical-Regression."><a id="toc5_6_"></a><a href="#toc0_">Conclusion, dataset comparison - Logistical Regression.</a><a class="anchor-link" href="#Conclusion,-dataset-comparison---Logistical-Regression.">¶</a></h2><p>There is almost no difference to the performance of the two datasets (AllFeat vs No Dept) when modelled through Logistic Regression. The dept features that showed low correlation in the correlation matrix carried through when the final models were run showing little difference in key metrics. However, the current Logistical Regression models would be better at predicting people who will stay rather than the goal of predicting who will leave.</p>
</div>
</div>
</div>
</div>
</main>
</body>
<script src="../../scripts/projects.js"> </script>
</html>
