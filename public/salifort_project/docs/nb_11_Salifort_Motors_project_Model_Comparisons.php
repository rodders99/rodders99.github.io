<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>nb_11_Salifort_Motors_project_Model_Comparisons</title>
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
<body class="jp-Notebook exclude-page" data-jp-theme-light="false" data-jp-theme-name="JupyterLab Dark">

<<div class="page-container">
     <!-- BEGIN NAVIGATION -->
     <div class="toolbar" style="width:100%; text-align:center; align-items: center;">
    <?php include 'menu-salifort.php'; ?>        
</div>
<!-- END NAVIGATION -->
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs jp-mod-noInput"></div>


  

<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">

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
<h1 id="Salifort-Motors---ML-Models-Comparisons"><a id="toc1_"></a>
  <a href="#toc0_">Salifort Motors - ML Models Comparisons</a>
  <a class="anchor-link" href="#Salifort-Motors---ML-Models-Comparisons">¶</a>
</h1>
<h3 id="Document-Information">
  <a id="toc1_1_1_"></a><a href="#toc0_">Document Information</a><a class="anchor-link" href="#Document-Information">¶</a></h3>
  <table style="margin-right:auto;margin-left:0px">
<tbody>
<tr>
<td>Document Title</td>
<td>Salifort Motors - ML Modelling - Random Forest</td>
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
<h3 id="Document-Overview"><a id="toc1_1_3_"></a><a href="#toc0_">Document Overview</a><a class="anchor-link" href="#Document-Overview">¶</a></h3><p>Comparisons of the three ML Models developed : Random Forest, Decision Tree and XGBoost.</p>
<h3 id="Notes"><a id="toc1_1_4_"></a><a href="#toc0_">Notes</a><a class="anchor-link" href="#Notes">¶</a></h3><p>Models have been pickle saved</p>
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
<h2 id="Table-of-contents">Table of contents<a id="toc0_"></a><a class="anchor-link" href="#Table-of-contents">¶</a></h2><ul>
<li><a href="#toc1_">Salifort Motors - ML Models Comparisons</a><ul>
<li><a href="#toc1_1_1_">Document Information</a></li>
<li><a href="#toc1_1_2_">Client Details</a></li>
<li><a href="#toc1_1_3_">Document Overview</a></li>
<li><a href="#toc1_1_4_">Notes</a></li>

<li><a href="#toc1_3_">Initialise Notebook</a><ul>
<li><a href="#toc1_3_1_">Import Packages</a></li>
<li><a href="#toc1_3_2_">Set Pandas Options</a></li>
<li><a href="#toc1_3_3_">Initialise Notebook Options</a></li>
<li><a href="#toc1_3_4_">Define Functions</a><ul>
<li><a href="#toc1_3_4_1_">display_results() - Function to retrieve scores from Results.csv and display them</a></li>
<li><a href="#toc1_3_4_2_">Read / Write Pickle Function</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#toc1_4_"> Model Performance</a><ul>
<li><a href="#toc1_4_1_">Import data</a></li>
<li><a href="#toc1_4_2_">Code flags:</a></li>
<li><a href="#toc1_4_3_">Prepare data for SHAP Plots</a></li>
<li><a href="#toc1_4_4_">Shap Plots for feature importance</a></li>
</ul>
</li>
<li><a href="#toc1_5_">Get previous models results data</a><ul>
<li><a href="#toc1_5_1_">Conclusion</a></li>
</ul>
</li>
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
<h2 id="Initialise-Notebook"><a id="toc1_3_"></a><a href="#toc0_">Initialise Notebook</a><a class="anchor-link" href="#Initialise-Notebook">¶</a></h2>
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
<h3 id="Import-Packages"><a id="toc1_3_1_"></a><a href="#toc0_">Import Packages</a><a class="anchor-link" href="#Import-Packages">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [102]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Import packages</span>

<span class="c1"># Data manipulation</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>

<span class="c1"># Data visualization</span>
<span class="kn">import</span> <span class="nn">matplotlib.pyplot</span> <span class="k">as</span> <span class="nn">plt</span>
<span class="kn">import</span> <span class="nn">matplotlib.image</span> <span class="k">as</span> <span class="nn">mpimg</span>
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
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="kn">import</span> <span class="n">accuracy_score</span><span class="p">,</span> <span class="n">precision_score</span><span class="p">,</span> <span class="n">recall_score</span><span class="p">,</span> <span class="n">precision_recall_fscore_support</span><span class="p">,</span> \
<span class="n">f1_score</span><span class="p">,</span> <span class="n">confusion_matrix</span><span class="p">,</span> <span class="n">ConfusionMatrixDisplay</span><span class="p">,</span> <span class="n">classification_report</span>
<span class="kn">from</span> <span class="nn">sklearn</span> <span class="kn">import</span> <span class="n">metrics</span>
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="kn">import</span> <span class="n">roc_auc_score</span><span class="p">,</span> <span class="n">roc_curve</span>
<span class="kn">from</span> <span class="nn">sklearn.tree</span> <span class="kn">import</span> <span class="n">plot_tree</span>
<span class="kn">from</span> <span class="nn">sklearn.preprocessing</span> <span class="kn">import</span> <span class="n">StandardScaler</span>
<span class="kn">from</span> <span class="nn">datetime</span> <span class="kn">import</span> <span class="n">datetime</span> <span class="k">as</span> <span class="n">dt</span>

<span class="kn">import</span> <span class="nn">statsmodels.api</span> <span class="k">as</span> <span class="nn">sm</span>

<span class="c1"># For saving models</span>
<span class="kn">import</span> <span class="nn">pickle</span>

<span class="kn">import</span> <span class="nn">shap</span>
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
<h3 id="Set-Pandas-Options"><a id="toc1_3_2_"></a><a href="#toc0_">Set Pandas Options</a><a class="anchor-link" href="#Set-Pandas-Options">¶</a></h3>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># set Pandas Display Options</span>
<span class="n">pd</span><span class="o">.</span><span class="n">options</span><span class="o">.</span><span class="n">display</span><span class="o">.</span><span class="n">float_format</span> <span class="o">=</span> <span class="s1">'</span><span class="si">{:.2f}</span><span class="s1">'</span><span class="o">.</span><span class="n">format</span>
<span class="c1">#pd.set_option('display.precision', 2)</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [3]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Add a little colour</span>

<span class="k">class</span> <span class="nc">color</span><span class="p">:</span>
   <span class="n">PURPLE</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[95m'</span>
   <span class="n">CYAN</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[96m'</span>
   <span class="n">DARKCYAN</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[36m'</span>
   <span class="n">BLUE</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[94m'</span>
   <span class="n">GREEN</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[92m'</span>
   <span class="n">YELLOW</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[93m'</span>
   <span class="n">RED</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[91m'</span>
   <span class="n">BOLD</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[1m'</span>
   <span class="n">UNDERLINE</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[4m'</span>
   <span class="n">END</span> <span class="o">=</span> <span class="s1">'</span><span class="se">\033</span><span class="s1">[0m'</span>
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
<h3 id="Initialise-Notebook-Options"><a id="toc1_3_3_"></a><a href="#toc0_">Initialise Notebook Options</a><a class="anchor-link" href="#Initialise-Notebook-Options">¶</a></h3>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="n">load_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/00-data_cleaned/"</span> <span class="c1"># Source folder for cleaned data</span>
<span class="c1">#save_path = "/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/04-pickle-ML-models/" # destination for pickle saved models</span>

<span class="n">model_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/04-pickle-ML-models/"</span> <span class="c1"># path to load/save pickled models</span>
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
<h3 id="Define-Functions"><a id="toc1_3_4_"></a><a href="#toc0_">Define Functions</a><a class="anchor-link" href="#Define-Functions">¶</a></h3>
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
<h4 id="display_results()---Function-to-retrieve-scores-from-Results.csv-and-display-them"><a id="toc1_3_4_1_"></a><a href="#toc0_">display_results() - Function to retrieve scores from Results.csv and display them</a><a class="anchor-link" href="#display_results()---Function-to-retrieve-scores-from-Results.csv-and-display-them">¶</a></h4>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [5]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">display_results</span><span class="p">():</span>
<span class="w">    </span><span class="sd">'''</span>
<span class="sd">    Load Results.csv containing store test scores, return the scores for display</span>
<span class="sd">    In: none</span>
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
<h4 id="Read-/-Write-Pickle-Function"><a id="toc1_3_4_2_"></a><a href="#toc0_">Read / Write Pickle Function</a><a class="anchor-link" href="#Read-/-Write-Pickle-Function">¶</a></h4><ul>
<li>write_pickle = Write the model</li>
<li>read_pickle  = Read the model</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [6]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">write_pickle</span><span class="p">(</span><span class="n">path</span><span class="p">,</span> <span class="n">model_object</span><span class="p">,</span> <span class="n">save_as</span><span class="p">:</span><span class="nb">str</span><span class="p">):</span>
<span class="w">    </span><span class="sd">'''</span>
<span class="sd">    In: </span>
<span class="sd">        path:         path of folder where you want to save the pickle</span>
<span class="sd">        model_object: a model you want to pickle</span>
<span class="sd">        save_as:      filename for how you want to save the model</span>

<span class="sd">    Out: A call to pickle the model in the folder indicated</span>
<span class="sd">    '''</span>    

    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="n">path</span> <span class="o">+</span> <span class="n">save_as</span> <span class="o">+</span> <span class="s1">'.pickle'</span><span class="p">,</span> <span class="s1">'wb'</span><span class="p">)</span> <span class="k">as</span> <span class="n">to_write</span><span class="p">:</span>
        <span class="n">pickle</span><span class="o">.</span><span class="n">dump</span><span class="p">(</span><span class="n">model_object</span><span class="p">,</span> <span class="n">to_write</span><span class="p">)</span>
        
<span class="k">def</span> <span class="nf">read_pickle</span><span class="p">(</span><span class="n">path</span><span class="p">,</span> <span class="n">saved_model_name</span><span class="p">:</span><span class="nb">str</span><span class="p">):</span>
<span class="w">    </span><span class="sd">'''</span>
<span class="sd">    In: </span>
<span class="sd">        path:             path to folder where you want to read from</span>
<span class="sd">        saved_model_name: filename of pickled model you want to read in</span>

<span class="sd">    Out: </span>
<span class="sd">        model: the pickled model </span>
<span class="sd">    '''</span>
    <span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="n">path</span> <span class="o">+</span> <span class="n">saved_model_name</span> <span class="o">+</span> <span class="s1">'.pickle'</span><span class="p">,</span> <span class="s1">'rb'</span><span class="p">)</span> <span class="k">as</span> <span class="n">to_read</span><span class="p">:</span>
        <span class="n">model</span> <span class="o">=</span> <span class="n">pickle</span><span class="o">.</span><span class="n">load</span><span class="p">(</span><span class="n">to_read</span><span class="p">)</span>

    <span class="k">return</span> <span class="n">model</span>
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
<h2 id="-Model-Performance"><a id="toc1_4_"></a><a href="#toc0_"> Model Performance</a><a class="anchor-link" href="#-Model-Performance">¶</a></h2>
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
<h3 id="Import-data"><a id="toc1_4_1_"></a><a href="#toc0_">Import data</a><a class="anchor-link" href="#Import-data">¶</a></h3><p>Two datasets for model performance comparison, :</p>
<ul>
<li><code>data_cleaned_NoOl_FE_AllFeat.csv</code> (THIS DATA) is the full data set feature engineered with <code>salary</code> encoded to ordinal,  <code>avg_mth_hrs</code> binary encoded to <code>overwork</code> and dept encoded with dummies</li>
<li><code>data_cleaned_NoOl_FE_NoDept.csv</code> is the same data with the dummy encoded dept fields removed.</li>
</ul>
<p><code>Dept</code> appears to have low correlation across the dataset and I'm curious how much the models are influenced with low correlation features. It turns out that low correlation features have little impact on model performance. which is no surprise really!</p>
<h3 id="Code-flags:"><a id="toc1_4_2_"></a><a href="#toc0_">Code flags:</a><a class="anchor-link" href="#Code-flags:">¶</a></h3><p><strong>rerun</strong> = flag to identify the first run of the model comparisons and write a NEW Results.csv file. 0 = first run and a new file will be created with headers / 1 = Continuation, Results will be appended to the file.</p>
<p><strong>dataset</strong> = Text indicating which dataset is being used, added to the model description during csv save to Results.csv</p>
<p><strong>model_prefix</strong> = text indicating which ML model is being used, added to the model description during csv save to Results.csv</p>
<p><strong>refit</strong> = Random Forest fits with this data takes 20-30 mins.
1 = Fit Data and Pickle Save Model
0 = don't refit data, Pickle load model</p>
<p><strong>fitver</strong> = suffix added to pickle save model file name to help distinguish rf1/rf2 and all feature or focus features datasets</p>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Load cleaned dataset into a dataframe</span>
<span class="nb">print</span><span class="p">(</span><span class="s2">"Started / Last Run ="</span><span class="p">,</span> <span class="n">dt</span><span class="o">.</span><span class="n">now</span><span class="p">()</span><span class="o">.</span><span class="n">strftime</span><span class="p">(</span><span class="s2">"%Y-%m-</span><span class="si">%d</span><span class="s2"> %H:%M:%S"</span><span class="p">),</span><span class="s2">"</span><span class="se">\n</span><span class="s2">"</span><span class="p">)</span>

<span class="c1"># Feature engineering on salary, avg_mnth_hrs, dept, outliers removed, all features</span>
<span class="n">AllFeat_df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_NoOl_FE_AllFeat.csv"</span><span class="p">,</span> <span class="n">index_col</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span> 
<span class="n">AllFeat_df</span><span class="o">.</span><span class="n">sort_index</span><span class="p">(</span><span class="n">axis</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span> <span class="n">inplace</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>

<span class="c1"># Feature engineering - departments removed</span>
<span class="n">NoDept_df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_NoOl_FE_NoDept.csv"</span><span class="p">,</span> <span class="n">index_col</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span> 
<span class="n">NoDept_df</span><span class="o">.</span><span class="n">sort_index</span><span class="p">(</span><span class="n">axis</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span> <span class="n">inplace</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>
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
<pre>Started / Last Run = 2023-12-01 09:25:03 

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
<h3 id="Prepare-data-for-SHAP-Plots"><a id="toc1_4_3_"></a><a href="#toc0_">Prepare data for SHAP Plots</a><a class="anchor-link" href="#Prepare-data-for-SHAP-Plots">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [8]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># List of models to pickle load</span>
<span class="n">model_list</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'hr_dt1-AllFeat'</span><span class="p">,</span> <span class="s1">'hr_dt2-NOdept'</span><span class="p">,</span> 
              <span class="s1">'hr_rf1-AllFeat'</span><span class="p">,</span><span class="s1">'hr_rf2-NOdept'</span><span class="p">,</span> 
              <span class="s1">'hr_xg1-AllFeat'</span><span class="p">,</span><span class="s1">'hr_xg2-NOdept'</span><span class="p">]</span>

<span class="c1"># List of dataframes to iterate</span>
<span class="n">data_list</span>  <span class="o">=</span> <span class="p">[</span><span class="s1">'AllFeat_df'</span><span class="p">,</span> <span class="s1">'NoDept_df'</span><span class="p">,</span>
              <span class="s1">'AllFeat_df'</span><span class="p">,</span> <span class="s1">'NoDept_df'</span><span class="p">,</span>
              <span class="s1">'AllFeat_df'</span><span class="p">,</span> <span class="s1">'NoDept_df'</span><span class="p">]</span>

<span class="c1"># List of titles for the shap plots</span>
<span class="n">model_name</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'Decision Tree - All Features'</span><span class="p">,</span> <span class="s1">'Decision Tree - No Departments'</span><span class="p">,</span> 
              <span class="s1">'Random Forest - All Features'</span><span class="p">,</span><span class="s1">'Random Forest- No Departments'</span><span class="p">,</span> 
              <span class="s1">'XGBoost - All Features'</span><span class="p">,</span> <span class="s1">'XGBoost - No Departments'</span><span class="p">]</span>
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
<h3 id="Shap-Plots-for-feature-importance"><a id="toc1_4_4_"></a><a href="#toc0_">Shap Plots for feature importance</a><a class="anchor-link" href="#Shap-Plots-for-feature-importance">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [10]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="kn">import</span> <span class="nn">warnings</span>

<span class="n">warnings</span><span class="o">.</span><span class="n">filterwarnings</span><span class="p">(</span><span class="s2">"ignore"</span><span class="p">)</span>

<span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="nb">len</span><span class="p">(</span><span class="n">model_list</span><span class="p">)):</span>
    <span class="n">model_file</span> <span class="o">=</span> <span class="n">model_list</span><span class="p">[</span><span class="n">i</span><span class="p">]</span>
    <span class="n">model_data</span> <span class="o">=</span> <span class="nb">globals</span><span class="p">()[</span><span class="n">data_list</span><span class="p">[</span><span class="n">i</span><span class="p">]]</span><span class="o">.</span><span class="n">copy</span><span class="p">()</span>
    <span class="n">model_title</span> <span class="o">=</span> <span class="n">model_name</span><span class="p">[</span><span class="n">i</span><span class="p">]</span>

    <span class="c1"># Isolate the outcome variable</span>
    <span class="n">y</span> <span class="o">=</span> <span class="n">model_data</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span>

    <span class="c1"># Select &amp; Isolate the feature variables and drop the outcome variable</span>
    <span class="n">X</span> <span class="o">=</span> <span class="n">model_data</span><span class="o">.</span><span class="n">copy</span><span class="p">()</span>
    <span class="n">X</span> <span class="o">=</span> <span class="n">X</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="s1">'left'</span><span class="p">,</span> <span class="n">axis</span> <span class="o">=</span> <span class="mi">1</span><span class="p">)</span>

    <span class="c1"># Prepare training and test data</span>
    <span class="n">X_train</span><span class="p">,</span> <span class="n">X_test</span><span class="p">,</span> <span class="n">y_train</span><span class="p">,</span> <span class="n">y_test</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">X</span><span class="p">,</span><span class="n">y</span><span class="p">,</span> <span class="n">test_size</span><span class="o">=</span><span class="mf">0.25</span><span class="p">,</span> <span class="n">stratify</span><span class="o">=</span><span class="n">y</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>

    <span class="c1">#model_file = model_list[0]</span>
    <span class="n">model</span> <span class="o">=</span> <span class="n">read_pickle</span><span class="p">(</span><span class="n">model_path</span><span class="p">,</span> <span class="n">model_file</span><span class="p">)</span>
    <span class="nb">print</span><span class="p">(</span><span class="n">color</span><span class="o">.</span><span class="n">BOLD</span> <span class="o">+</span> <span class="n">model_title</span> <span class="o">+</span> <span class="s2">" - "</span> <span class="o">+</span> <span class="n">model_file</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">END</span><span class="p">)</span>
    <span class="n">best_model</span> <span class="o">=</span> <span class="n">model</span><span class="o">.</span><span class="n">best_estimator_</span> <span class="c1"># Store best model parameters for later testing</span>
    
    <span class="n">y_pred_test</span> <span class="o">=</span> <span class="n">best_model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_test</span><span class="p">)</span>

    <span class="n">explainer</span> <span class="o">=</span> <span class="n">shap</span><span class="o">.</span><span class="n">TreeExplainer</span><span class="p">(</span><span class="n">best_model</span><span class="p">)</span>

    <span class="c1"># Calculate SHAP values for a specific observation</span>
    <span class="n">shap_values</span> <span class="o">=</span> <span class="n">explainer</span><span class="o">.</span><span class="n">shap_values</span><span class="p">(</span><span class="n">X_test</span><span class="p">)</span>

    <span class="c1">#shap_values = shap_values[..., 1]</span>
    

    <span class="n">predict_precision</span><span class="p">,</span> <span class="n">predict_recall</span><span class="p">,</span> <span class="n">predict_f1_score</span><span class="p">,</span> <span class="n">_</span> <span class="o">=</span> <span class="n">precision_recall_fscore_support</span><span class="p">(</span><span class="n">y_test</span><span class="p">,</span> <span class="n">y_pred_test</span><span class="p">,</span> <span class="n">average</span><span class="o">=</span><span class="kc">None</span><span class="p">)</span>
    <span class="n">f1_true_class</span> <span class="o">=</span> <span class="nb">round</span><span class="p">(</span><span class="n">predict_f1_score</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span><span class="mi">3</span><span class="p">)</span>  <span class="c1"># Index 1 corresponds to the "True" class</span>
    <span class="n">f1_false_class</span> <span class="o">=</span> <span class="nb">round</span><span class="p">(</span><span class="n">predict_f1_score</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span><span class="mi">3</span><span class="p">)</span>  <span class="c1"># Index o corresponds to the "False" class</span>

<span class="c1"># Plot the SHAP values for that observation</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Predict will leave (True)  : </span><span class="si">{}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">f1_true_class</span><span class="p">))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Predict will stay (True)  : </span><span class="si">{}</span><span class="se">\n</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">f1_false_class</span><span class="p">))</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="n">model_title</span><span class="p">)</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">grid</span><span class="p">(</span><span class="kc">True</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">alpha</span><span class="o">=</span><span class="mf">0.7</span><span class="p">)</span>
    <span class="n">shap</span><span class="o">.</span><span class="n">summary_plot</span><span class="p">(</span><span class="n">shap_values</span><span class="p">,</span> <span class="n">X_test</span><span class="p">)</span>
    
    <span class="c1">#shap.plots.waterfall(shap_values)</span>

    
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
<pre><span class="ansi-bold">Decision Tree - All Features - hr_dt1-AllFeat</span>
Predict will leave (True)  : 0.936
Predict will stay (True)  : 0.987

</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAxYAAAMzCAYAAAA734QiAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAEAAElEQVR4nOzde1wU5f4H8M/MLgt4AbyAIOsF0LxfWdMs0TTTFKwUTa1MLW9lWZrndM75ZXqqk5WZlZZIR9O8ZHgpULt7qeMpE29kgqhoCXjDC6ACy87M7w/Pjq4LCiL7sOzn/Xr5Kh+enXmezyDsd2fmGUnTNA1EREREREQVIIseABERERERuT8WFkREREREVGEsLIiIiIiIqMJYWBARERERUYWxsCAiIiIiogpjYUFERERERBXGwoKIiIiIiCqMhQUREREREVUYCwsiIiIiIqowFhZERHTbHDt2DJIk4ZNPPinX63r16oVevXpVypioZNdnfqvHjojIjoUFEVE18sknn0CSJP2Pj48PGjZsiH79+uH9999Hfn6+6CFWGU2bNnXIqrQ/7vhGOzU1VT/+Fy5cuK3b3rp1a6lZDR8+/Lbuy+7AgQOYOXMmjh07VinbJ6Lbwyh6AEREdPv985//RFhYGIqLi3Hy5Els3boVzz//PObOnYvExES0b9++UvbbpEkTFBQUwMvLq1yv+/bbbytlPDcyb948XLx4Uf/7pk2bsGrVKrz77ruoX7++3t69e3eXj62ili9fjuDgYJw/fx5r1qzBU089ddv38dxzz6FLly4ObU2bNr3t+wGuFBazZs1Cr169Km0fRFRxLCyIiKqhBx54ABaLRf/73/72N2zevBnR0dEYNGgQUlNT4evre9v3a/+UvLxMJtNtH8vNPPTQQw5/P3nyJFatWoWHHnrohm9eL126hJo1a1bu4CpA0zSsXLkSI0eOxNGjR7FixYpKKSx69OiB2NjY275dV6rqx5LI3fBSKCIiD9G7d2+8/PLL+OOPP7B8+XKHr6WlpSE2NhZ169aFj48PLBYLEhMTnbZx4cIFvPDCC2jatCm8vb1hNpsxatQo5OTkACj5Ov2TJ09izJgxMJvN8Pb2RkhICB588EGHy1pKusfi9OnTePLJJ9GgQQP4+PigQ4cOWLp0qUMf+/7mzJmDRYsWISIiAt7e3ujSpQt27txZscAAjB49GrVq1cKRI0cwYMAA1K5dG48++igAQFVVzJs3D23atIGPjw8aNGiACRMm4Pz5807b+eqrr9CjRw/UrFkTtWvXxsCBA/H7779XeHwl2b59O44dO4bhw4dj+PDh+PHHH5GZmVkp+7qRHTt2oH///vD390eNGjXQs2dPbN++3aHPH3/8gaeffhotWrSAr68v6tWrh6FDhzp8b3zyyScYOnQoAODee+/VL7vaunUrgCvF7MyZM53237RpU4wePdphO5IkYdu2bXj66acRFBQEs9msf70sx6gs38tEnoxnLIiIPMjjjz+Ov//97/j2228xbtw4AMDvv/+Ou+++G6GhoXjppZdQs2ZNfP7553jooYewdu1aPPzwwwCAixcvokePHkhNTcXYsWPRuXNn5OTkIDExEZmZmQ6XD11ryJAh+P333/Hss8+iadOmOH36NL777jv8+eefpZ4ZKCgoQK9evXD48GFMnjwZYWFhSEhIwOjRo3HhwgVMmTLFof/KlSuRn5+PCRMmQJIkvPXWWxg8eDAyMjLKfVnW9Ww2G/r164d77rkHc+bMQY0aNQAAEyZMwCeffIIxY8bgueeew9GjRzF//nzs2bMH27dv1/f76aef4oknnkC/fv3w5ptv4vLly/joo49wzz33YM+ePbf90p4VK1YgIiICXbp0Qdu2bVGjRg2sWrUK06dPv637yc/P1wtKu7p160KWZWzevBkPPPAAIiMj8corr0CWZSxZsgS9e/fGTz/9hDvvvBMAsHPnTvz3v//F8OHDYTabcezYMXz00Ufo1asXDhw4gBo1aiAqKgrPPfcc3n//ffz9739Hq1atAED/b3k9/fTTCAwMxIwZM3Dp0iUAZT9Gt/K9TORRNCIiqjaWLFmiAdB27txZah9/f3+tU6dO+t/79OmjtWvXTissLNTbVFXVunfvrjVv3lxvmzFjhgZAW7dundM2VVXVNE3Tjh49qgHQlixZommapp0/f14DoL399ts3HHfPnj21nj176n+fN2+eBkBbvny53ma1WrW77rpLq1WrlpaXl+ewv3r16mnnzp3T+3755ZcaAC0pKemG+73W22+/rQHQjh49qrc98cQTGgDtpZdecuj7008/aQC0FStWOLR//fXXDu35+flaQECANm7cOId+J0+e1Pz9/Z3aK8pqtWr16tXT/vGPf+htI0eO1Dp06ODU9/rMrz92pdmyZYsGoMQ/R48e1VRV1Zo3b67169dP/77QNE27fPmyFhYWpvXt29eh7Xo///yzBkBbtmyZ3paQkKAB0LZs2eLUH4D2yiuvOLU3adJEe+KJJ/S/2/9t3HPPPZrNZtPby3qMyvq9TOTJeCkUEZGHqVWrlr461Llz57B582YMGzZM/wQ6JycHZ8+eRb9+/XDo0CFkZWUBANauXYsOHTroZzCuJUlSifvy9fWFyWTC1q1bS7xEqDSbNm1CcHAwRowYobd5eXnhueeew8WLF7Ft2zaH/o888gjq1Kmj/71Hjx4AgIyMjDLv80YmTZrk8PeEhAT4+/ujb9++emY5OTmIjIxErVq1sGXLFgDAd999hwsXLmDEiBEO/QwGA7p27ar3u12++uornD171iG3ESNGYN++fbf90qsZM2bgu+++c/gTHByMvXv34tChQxg5ciTOnj2rz/nSpUvo06cPfvzxR6iqCgAO9/kUFxfj7NmzaNasGQICArB79+7bOl67cePGwWAw6H8v6zG61e9lIk/CS6GIiDzMxYsXERQUBAA4fPgwNE3Dyy+/jJdffrnE/qdPn0ZoaCiOHDmCIUOGlGtf3t7eePPNNzFt2jQ0aNAA3bp1Q3R0NEaNGoXg4OBSX/fHH3+gefPmkGXHz7/sl7/88ccfDu2NGzd2+Lu9yLgdbwCNRqPDtfgAcOjQIeTm5uo5Xu/06dN6P+DK/S0l8fPzK3W/iqLgzJkzDm1169a94Y3uy5cvR1hYGLy9vXH48GEAQEREBGrUqIEVK1bgX//6V6mvLa927drhvvvuc2q3z/mJJ54o9bW5ubmoU6cOCgoK8MYbb2DJkiXIysqCpmkOfSpDWFhYieO92TG61e9lIk/CwoKIyINkZmYiNzcXzZo1AwD9k+MXX3wR/fr1K/E19r636vnnn0dMTAy++OILfPPNN3j55ZfxxhtvYPPmzejUqVOFtm137SfQ17r2jeqt8vb2dipwVFVFUFAQVqxYUeJrAgMD9X7AlWv4S3rzaTSW/mv4+PHjTm+Ct2zZUuqDBPPy8pCUlITCwkI0b97c6esrV67E66+/XurZpdvFPue3334bHTt2LLFPrVq1AADPPvsslixZgueffx533XUX/P399edh2LdzqxRFKbH9+tXQynOMXPG9TOTOWFgQEXmQTz/9FAD0IiI8PBzAlcuMSvr0+VoRERHYv3//Le03IiIC06ZNw7Rp03Do0CF07NgR77zzjtPqVHZNmjRBSkoKVFV1eFOflpamf12kiIgIfP/997j77rtvuGxvREQEACAoKOim+V4vODgY3333nUNbhw4dSu2/bt06FBYW4qOPPnK6kf7gwYP4v//7P2zfvh333HNPucZRXvY5+/n53XTOa9aswRNPPIF33nlHbyssLHR6qN+NiqE6deo49bdarThx4kS5xlvWY1Te72UiT8J7LIiIPMTmzZvx6quvIiwsTF8yNSgoCL169UJcXFyJb8SuvRRnyJAh2LdvH9avX+/Ur7QzA5cvX0ZhYaFDW0REBGrXro2ioqJSxzpgwACcPHkSq1ev1ttsNhs++OAD1KpVCz179rzxZCvZsGHDoCgKXn31Vaev2Ww2/Y1uv3794Ofnh3/9618oLi526nv9pU7X8vHxwX333efw59r7SK63fPlyhIeHY+LEiYiNjXX48+KLL6JWrVqlnmG5nSIjIxEREYE5c+Y4PIDQ7to5GwwGp++dDz74wOlsg/1ZEyU9RTwiIgI//vijQ9uiRYtKPWNxvbIeo1v9XibyJDxjQURUDX311VdIS0uDzWbDqVOnsHnzZnz33Xdo0qQJEhMTHR5it2DBAtxzzz1o164dxo0bh/DwcJw6dQo///wzMjMzsW/fPgDA9OnTsWbNGgwdOhRjx45FZGQkzp07h8TERCxcuLDET9PT09PRp08fDBs2DK1bt4bRaMT69etx6tQpDB8+vNTxjx8/HnFxcRg9ejR27dqFpk2bYs2aNdi+fTvmzZuH2rVr3/7QyqFnz56YMGEC3njjDezduxf3338/vLy8cOjQISQkJOC9995DbGws/Pz88NFHH+Hxxx9H586dMXz4cAQGBuLPP//Exo0bcffdd2P+/PkVHk92dja2bNmC5557rsSve3t7o1+/fkhISMD7779f4SV4b0SWZXz88cd44IEH0KZNG4wZMwahoaHIysrCli1b4Ofnh6SkJABAdHQ0Pv30U/j7+6N169b4+eef8f3336NevXoO2+zYsSMMBgPefPNN5ObmwtvbG71790ZQUBCeeuopTJw4EUOGDEHfvn2xb98+fPPNN6Uuf3y9sh6jW/1eJvIoQtekIiKi28q+pKb9j8lk0oKDg7W+fftq7733nr5M6/WOHDmijRo1SgsODta8vLy00NBQ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C9mxYwc0Gg2OHDmCuLg4REZG4sknn8TgwYOxb98+k75RUVEYMWIEUlNTMW7cOHTt2hUvvfSS/PixY8cwZswYdO3aFU899RReeeUVbNu2zew1R4wYgaioKGRlZWHixIno1q0bnn76aUydOhW3bt2CwWDAihUrEB0djY4dO+KVV17B77//brad4uJiLFy4EP3798eTTz6JZ555BpMnT8bff/9tUt+oUaMAANOmTYNGo4FGo8GIESMAVHyNhU6nw9dff42YmBh07NgRPXr0wMSJE3H27FmTfnc+/3//+x+GDBmCjh074plnnsGCBQug0+mqtD94OFYchUIBZ2dnKBQK0UOxScxfHGYvFvMXh9mLZcn8+fWxhX3xxRcoLi7GoEGDANz+hfxf//oXtFotoqKi5H5Xr17F6NGj0bNnT3Tv3h23bt0CAPz8889477334O3tjVdffRUuLi749ttvMX36dGRmZmLs2LEmr1dcXIzRo0cjPDwc48aNw59//onExESUlpbCy8sLp06dwgsvvACdTofVq1djwoQJ2LFjB1xdXQHc/sV/3LhxOHHiBHr06IFXX30Vly5dwubNm3HkyBGsWrUKDRo0QNu2bREbG4v4+Hg8//zzaNu2LQCgXr1698zjo48+wv79+9G+fXsMHDgQN27cQEJCAmJjY7F06VKEhoaa9D948CA2bdqEgQMHIjo6Gj/99BO++eYbuLu747XXXqv0figoKJDrAwClUgmlUgmDwWBy7YWxXa/Xm1z0VFG7SqWCQqEwm+gYTwG7e0JTUbvx4vI72xUKBVQqldkYK2qvrTVJkoRWrVrJ9dWFmqxtP7Vq1QpKpdJs7NZc073aa1NNYWFhda4ma9lPKpUKrVu3hiRJZp/91lqTtewnhUIhf+7rdLo6UZO17adWrVrJj1W2puqcZcKJhYXl5uZi/fr1cHNzAwAMGjQIgwcPxrx589CrVy84OTkBADIzM/Hvf/8bzz33nPxcvV6PWbNmwdnZGStXroSvry8A4IUXXsDIkSOxcuVKREVFISAgwOT1hgwZgiFDhshtBQUF+O677xAaGor4+Hj5jdO0aVO8++672Lt3LwYOHAjg9sTnxIkT+Mc//oHx48fL22jfvj3efvttLFy4EP/5z3/g7++P9u3bIz4+HmFhYejbt+99szh8+DD279+PXr164b///a88k+7Vqxf+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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre><span class="ansi-bold">Decision Tree - No Departments - hr_dt2-NOdept</span>
Predict will leave (True)  : 0.936
Predict will stay (True)  : 0.987

</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAxYAAAGkCAYAAACsI7PwAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAACwrklEQVR4nOzdeXxMV/8H8M+dySorEhJGSWKJIrZJEURaVCuiaiva0lBbKW3R7VdF99IqpSrRUhS11Zpq6VNLS5HU1rRICSViSZBN1pl7f39oRsbMRBaZOcPn/Xo9r6fO3Llzznwyy3fuPedKiqIoICIiIiIiqgSVrTtARERERET2j4UFERERERFVGgsLIiIiIiKqNBYWRERERERUaSwsiIiIiIio0lhYEBERERFRpbGwICIiIiKiSmNhQURERERElcbCgoiIiIiIKo2FBRGRnTt79iwkScI333xTrvtFREQgIiKiSvpERET3HxYWRESV9M0330CSJMP/XFxcUKdOHfTo0QOff/45srOzbd1FYTRo0MDoubL0v/IWSbZSXNRJkoT169eb3D59+nRIkoT09PS78ni7du0yep6cnZ1Ru3ZtRERE4IMPPkBaWtpdeRxrWLlyJebMmWPrbpRJamoqpk+fjiNHjti6K0RCc7B1B4iI7hXvvPMOAgICUFRUhEuXLmHXrl146aWXMHv2bGzevBkhISFV8rj169dHXl4eHB0dy3W/7du3V0l/SjNnzhzk5OQY/v3DDz9g1apV+Oyzz+Dj42NoDwsLs3rfKuudd95B3759IUlSlT/WhAkTEBoaCr1ej7S0NOzbtw/Tpk3D7NmzsWbNGjzyyCNV3ofKWrlyJRITE/HSSy/Zuit3lJqaihkzZqBBgwZo1aqVrbtDJCwWFkREd8njjz8OrVZr+Pcbb7yBX375Bb169ULv3r1x/PhxuLq63vXHLT5KUl5OTk53vS930qdPH6N/X7p0CatWrUKfPn3QoEEDi/e7ceMG3NzcqrZzldCqVSscOXIEGzZsQN++fav88Tp37oz+/fsbtR09ehSPPvoo+vXrh7///hv+/v5V3o+KED1LIqo4ngpFRFSFHnnkEUydOhX//vsvvv32W6PbTpw4gf79+6NGjRpwcXGBVqvF5s2bTfaRkZGBl19+GQ0aNICzszM0Gg2GDh1qOL3G3ByLS5cuITo6GhqNBs7OzvD398cTTzyBs2fPGrYxN8fiypUrGDFiBGrXrg0XFxe0bNkSS5cuNdqm+PE++eQTxMbGIigoCM7OzggNDUV8fHzlnjAAzz33HNzd3XH69Gn07NkTHh4eePrppwEAsixjzpw5aNasGVxcXFC7dm2MHj0a169fN9nPtm3b0LlzZ7i5ucHDwwORkZH466+/Kt0/cwYNGoTGjRvjnXfegaIod9x+7dq1aNu2LVxdXeHj44NnnnkGFy5cqFQfWrZsiTlz5iAjIwPz5883uu3ChQsYPnw4ateuDWdnZzRr1gyLFy822qb4NKvVq1fjzTffhJ+fH9zc3NC7d2+cP3/eaNtff/0VAwYMwAMPPABnZ2fUq1cPL7/8MvLy8oy2s5RlREQE4uLi8O+//xpO6youLIv7sWbNGsyYMQN169aFh4cH+vfvj8zMTBQUFOCll15CrVq14O7ujujoaBQUFJg8H99++63hOa5RowYGDRpkMo6IiAg0b94cf//9Nx5++GFUq1YNdevWxcyZM42el9DQUABAdHS0yel6//zzD/r16wc/Pz+4uLhAo9Fg0KBByMzMLHt4RPcIHrEgIqpizz77LN58801s374dI0eOBAD89ddf6NixI+rWrYvXX38dbm5uWLNmDfr06YP169fjySefBADk5OSgc+fOOH78OIYPH442bdogPT0dmzdvRkpKitHpQyX169cPf/31F1588UU0aNAAV65cwY4dO3Du3DmLRwby8vIQERGBU6dOYfz48QgICMDatWvx3HPPISMjAxMnTjTafuXKlcjOzsbo0aMhSRJmzpyJvn37Ijk5udynZd1Op9OhR48e6NSpEz755BNUq1YNADB69Gh88803iI6OxoQJE3DmzBnMnz8fhw8fxt69ew2Pu3z5cgwbNgw9evTAxx9/jNzcXHz55Zfo1KkTDh8+XOrRkYpQq9V46623MHTo0DsetSjuf2hoKD788ENcvnwZc+fOxd69e3H48GF4e3tXuB/9+/fHiBEjsH37drz//vsAgMuXL6N9+/aQJAnjx4+Hr68vtm3bhhEjRiArK8vkVKT3338fkiThtddew5UrVzBnzhx069YNR44cMRxxW7t2LXJzczF27FjUrFkTBw8exLx585CSkoK1a9ca7c9cln5+fsjMzERKSgo+++wzAIC7u7vR/T788EO4urri9ddfx6lTpzBv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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre><span class="ansi-bold">Random Forest - All Features - hr_rf1-AllFeat</span>
Predict will leave (True)  : 0.943
Predict will stay (True)  : 0.989

</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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LT4+3lZr3ry5FhAQoF2+fNlW++677zQAWu3atW219evXawC0d9991+75+/btq0mSpJ04ccJWA6B5eHhop06dstViY2M1AFr16tW1rKwsW/3f//63BsBu21u9ToX9d+Ncqlatql28eNFWO3TokCbLsvbss8/aahMmTNAAaAMHDrR7jtOnT2sGg0F777337Oq//fabZjQabfUDBw5oALRVq1bdcsze3t7a4MGDb7lNSTRt2lR76qmnbP/+z3/+o/n5+WkFBQV22w0ePNguS027ltGECRNuuX/r91Fh/23dulXTNE3r1KmT1rRpUy0vL8/2OFVVtdatW2v16tWz1fLy8jRFURz27+Hhob399tu22r59+zQA2sKFCx3GU7t27UJfz/bt22vt27e3/Xvr1q0aAC0kJETLycmxG1e9evW0Ll26aKqq2uo5OTlacHCw1rlzZ1vNx8dHGz169C1fH6KyjKdCERHp2KOPPgp/f3/UrFkTffv2hbe3N+Li4uyOHBgMBri7uwMAVFVFRkYGLBYLTCZToadoPPnkk3ZHPKyfACcnJwMA/v77bxw8eBCDBw+Gj4+PbbvOnTujUaNGdvv65ptvYDAY8PLLL9vVx44dC03TsHnzZrt6p06d7I4QtGrVCgDwxBNPoEKFCg5165huZ/bs2fj+++/t/rtxLs899xwqV65s2z4sLAydO3fGN99847CvmJgYu3+vXbsWqqqif//+SE9Pt/1XvXp11KtXz3bKmfW1+vbbb5GTk1OscZe2w4cP47fffsPAgQNttYEDByI9PR3ffvttqT7XiBEjHF7zZs2aISMjAz/99BP69++P7Oxs2+t18eJFdOnSBX/88YdtZTMPDw/b9Q2KouDixYsoX7486tevf89OLxo8eDC8vLxs/z548CD++OMPDBo0CBcvXrSN9+rVq+jUqRN27NgBVVUBAL6+vti7dy9SU1PvydiIRMdToYiIdGz27Nl44IEHkJmZiQULFmDHjh3w8PBw2G7x4sX4+OOPkZiYiIKCAlv95pWSAKBWrVp2/7Y2GZcuXQIA/PnnnwCAevXqOTz25jd8f/75J2rUqGHXFABAw4YN7fZV1HNb34zXrFmz0Lp1TLfz4IMPFnrxtvX569ev7/C1hg0b4ttvv3W4QPvm1+yPP/6ApmmFvh4AbKePBQcH47XXXsO0adOwbNkytGvXDj17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PnXqVC08PFx7/vnnbbW0tDTt4Ycf1v7zn/847GfKlClaRESEdubMGVutR48eWnh4uLZs2TK7bZcuXaqFh4drCxcutNXi4uK08PBwbd++fXc1j3379mnh4eFaXFycw9d++uknLTw8XFuzZo1dvaCgQHv66ae16OhoTVVVTdM07bffftPCw8O1kSNHanl5eXbbq6pq2876fF26dNGys7Nt2+Tm5mqdOnXSnnvuObvHWl+L7777zq7+4YcfauHh4dqpU6dstcJei0WLFmnh4eHarFmzHOanKIrd81vHeKP//ve/WkREhJaWlmar3eo1K8p/l+7Syn98VStw76MVFBTYnltRFK2goMD2n7VusViKVbeO+caata6qarHrmqY51C0WS6FjLKquhznl5eVpu3fv1vLz88vMnPSaU15envbzzz/bvlYW5qTXnKxZ5OXllZk56TWnG7MoK3PSY075+fna7t27bTmUhTnpLafiKjNHLLZt24YqVaogKirKrj548GCsWLHCrvbDDz/AbDajV69euHz5st3X2rVrh5UrV+KXX36xO9Lg7e2Nfv362W3br18/zJs3D1u3bsVzzz1XqvMpzDfffANvb2906NCh0HHPmzcPf/31F2rXro0tW7YAAF588UV4eHjYbVvYOYrR0dEoX7687d+enp5o2rSpXQds5e/vj86dO9vVTCYTVq1ahTNnzqBOnTpFzmHLli2oWLEihg8f7vC1Gw+zWT8dAq4d5cjJyYGmaXj44YexefNmHD16FJGRkUU+z+1okGDWDDCaFcB4/cfAetjvZkWdelVU3Wgs/EfrTuqSJBVaL2qMd1oXbU6lMVfR5qS3nKy/G8rSnKz0NifrqQnWTMrCnIpTF21O1gwMBoPduPQ8Jz3mZD0t6OYc7mbsRdWZ063rxVVmGouUlBQ0atTIISA/Pz9UqFDBrmY95eKFF14ocn8ZGRl2/w4MDHS4JsHd3R2BgYFISUkpwciL7/Tp07h69Soee+yxIrfJyMhA7dq18ddff0GSJNSrV69Y+w4MDHSo+fj42B22u922AArd/kZ//fUX6tev79Ds3MxisWDRokX45ptvcObMGbvzDwEgKyvrlo8nIiIiovurzDQWd8L6JnXSpEl2FxvfqLA3z86maRoqVaqEd999t8htbjwHTpKkYq+gcCcXQ9+qc725Abhb06dPx1dffYXO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yrIMWZahqipU9fpqUda6oih2N+Ypqm4wGCBJksN5oNaVLG4+lFtU3Wg0QtM0u7okSTAYDA5jLKquhzkBQFhYmMP+9TwnveakaRoaN24Mg8FQZuZkpbecrFlommZ7rN7nVJy6iHO6MQuLxVIm5qTHnCRJQlhYGADYjV/Pc9JbTtb3cbfjso3FkiVLkJqairfeegs9e/YEAPTr1w8ff/wxVqxYYbdteno6pk6disceewzvvfeerd6vXz9MnToVy5YtwxNPPGHXEJw9exavvfYaBg0aZKuFhIRg+vTpWLlyJZ577jnUq1cPYWFhWLduHVq1amU7YnAntm7diuDgYEyfPt2u/tJLL93xvm5mMBjw+eefw83NDQDQs2dP9O3bF1OmTMHq1avttj1x4gSmTp2KDh06ALj+2qxcuRLff/89unTpAgCYPXs2Ll26hBkzZqBt27a2bT/55BN8+eWX2LhxI3r37m237/Llyzs0HA888ADeeustBAYGonv37nc8t0ZeGfj19Q7AP0c4/P39ERoailOnTiEtLc22XVBQEIKCgpCUlITMzExbPSQkBFWrVsWRI0eQm5trqzdo0AC+vr44cOCA3Q9zWFgY3N3dHY6omEwmmM1mHD582FYzGAyIiIhAZmYmEhMTbXUvLy80a9YM6enpSE5OttV9fHzQsGFDpKam4uzZs7a6XubUuHFjpKen49SpU2VmTnrNSZblMjcnveakaRokSSpTc9JjTgcPHoTFYrGtRlQW5qTHnIKDg1GlShX8/vvvZWZOesspNDQUxaK5qL59+2qPPfaYZrFY7OppaWlaeHi49vzzz9tqK1as0MLDw7W9e/dqly5dsvtvz549Wnh4uLZmzRrb9j169NAiIyM1s9lst+/8/HwtMjJSe/bZZ221uLg4LTw8XNu3b99dzWPEiBFaZGSkduDAgVtuFx4erk2YMMGhXtjzz507VwsPD9e2bNnisP27776rhYeHa8nJyXb77tOnj8O21tfyzTff1DRN0xRF0dq1a6cNGjTIYdvLly9rERER2pgxYxzGsXXr1juaU3H8d+kuLa98P62goEArKCjQFEWxjdFau7FusViKVVdVVdM0za5mrauqWuy6pmkOdev36s1jLKquhznl5eVpu3fv1vLz88vMnPSaU15envbzzz/bvlYW5qTXnKxZ5OXllZk56TWnG7MoK3PS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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre><span class="ansi-bold">Random Forest- No Departments - hr_rf2-NOdept</span>
Predict will leave (True)  : 0.943
Predict will stay (True)  : 0.989

</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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BRERERERlVq5KiwSEhKg0+kQERFh7a4Ig68JEREREf0bylVhQdaTkZGBiIgIxMTElOj5P932gZGzDgnJqErMR1CyUYHvT/GQjTxdQESyLMPX15cz2wiK+YiL2dgu3nm7nKtWrRoOHz4MjUbzSLeTkZGBpUuXAgB0Ot1DP/9QRvWy7hKVESNk5iMo2ajC91CctbtBhcj7cURiYj7iYja2i6VgKRgMBuTk5Pxr2zMajcjOzn6o50iSBAcHB2i1YteQAyqeh51ktHY3qAB2kpH5CMpop8HZAc1htHu0Ow6oZIxGI86ePQujkZ8dETEfcTEb2/XQhUVkZCR0Oh2io6OxevVq9OrVC08++SSef/557Ny507RcUef2R0REQKfTISEhwdQ2ffp06HQ6pKamYvr06ejcuTOCg4MxadIkJCUlAQC2bNmC8PBwtG3bFn369MGBAwcK7ecPP/yA/v37o23btggNDUVERAQMBst7JSQlJeHTTz9FaGgo2rRpg2eeeQYff/wxUlJSCuzzxYsXMWfOHHTv3h1t27bF77//XuzXLiwsDCNHjsS5c+cwevRodOjQAU899RSmTZtmsb281/no0aP473//i169eqFt27bYs2cPACArKwsLFiwwvf7dunXD+++/j+vXr5utp6gcdu/ejeHDhyM4OBjt2rXD4MGDsXfv3gL7HhMTgwkTJqBz585o27YtevXqhQ8++ACpqamIiYlBz549AQBLly6FTqeDTqdDWFhYsV8bP4d08EQbMUlgPqJSJSDNryJ4lpqYVFVFWloaeLsoMTEfcTEb21Xi3dgLFy5ETk4Onn/+edjb22PTpk2YPn06fH190axZsxJ3aPz48ahSpQpGjx6NK1eu4LvvvsOUKVPQqVMnbN26Fb169YK9vT2+++47vPXWW9iyZQuqVzc/TePQoUO4du0a+vbti0qVKuHQoUNYunQpbty4gWnTppmWu3HjBoYOHYrc3Fz06tULvr6+uHLlCjZv3oyYmBisXr0aLi4uZuueOnUqHBwc8OKLL0KSJFSuXPmhxnfz5k2MGTMGTz31FDp37oxz585hx44dOHv2LFatWgVHR0ez5efNmweDwYDnnnsOzs7OqFWrFgwGA8aNG4dTp06hc+fOeOmll3D58mVs3rwZR48exapVq1C1atUi+7Fo0SIsX74cbdu2xejRoyHLMvbv34+3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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre><span class="ansi-bold">XGBoost - All Features - hr_xg1-AllFeat</span>
Predict will leave (True)  : 0.938
Predict will stay (True)  : 0.988

</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAwQAAAMzCAYAAAAYhNX3AAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAEAAElEQVR4nOzdd3wUZf7A8c/MbMlmUza9EFoIkV4DSBFRUFRERBSxixV7O3/nFRXbWe4OPbvoWRCxICroiV3BgnTpvYf03rbOzO+PTTZZNoEEkk1CnvfrtS/I7OzMM8/OPjPfeZqk67qOIAiCIAiCIAgdktzaCRAEQRAEQRAEofWIgEAQBEEQBEEQOjAREAiCIAiCIAhCByYCAkEQBEEQBEHowERAIAiCIAiCIAgdmAgIBEEQBEEQBKEDEwGBIAiCIAiCIHRgIiAQBEEQBEEQhA5MBASCIAiCIAiC0IGJgEAQBEHokGbPno0kSX7LunXrxrXXXts6CRIEQWglIiAQBEEIoiuvvJKQkBB27twZ8N5TTz2FJEl88cUXfsudTicvvPACY8aMISoqCpPJRHJyMhdccAHvv/8+qqr61t2/fz+SJPm9IiIiGDRoEC+++KLfuq3l5Zdf5u23327RfaiqSnJyMpIksXTp0mbf/pF5XPNKTExs9n0BVFVVMXv2bH766acW2b4gCB2bobUTIAiC0JHMmTOHL7/8klmzZvHDDz/4lu/bt49HH32UadOmcf755/uW5+fnc+6557J27VomTpzI3//+d6Kjo8nJyeG7777j8ssvZ/fu3Tz44IN++7nssss477zzACgtLeXLL7/kjjvu4MCBA/zzn/8MzsE24OWXXyY2NrZFn8T/8MMPZGdn061bN9577z3OPffcZt/HWWedxdVXX+23zGKxNPt+wBsQPPLIIwCMGzeuRfYhCELHJQICQRCEIIqPj+fpp5/mpptu4p133uGaa64B4NZbb8VoNPKf//zHb/2rrrqK9evXs2jRIi666CK/9/7yl7+wZs0aduzYEbCfIUOGcOWVV/r+vvXWWxkxYgQLFixo9YAgGObPn8+QIUO45ppr+Otf/0plZSVWq7VZ95Genu6Xx+2Rx+NB0zRMJlNrJ0UQhFYkmgwJgiAE2Q033MDo0aP505/+RGFhIR988AFfffUVjz/+OJ06dfKtt2LFCr7++mtuuummgGCgRkZGBldcccUx9ylJEgkJCRgMgc+BXn75Zfr27YvZbCY5OZnbbruNkpKSgPUWLlzI0KFDsVgsxMbGcuWVV3L48GG/dXJycpg5cyYpKSmYzWaSkpKYMmUK+/fvB7xt9Lds2cKyZct8zWya+4m33W7n008/ZcaMGUyfPh273c7ixYubdR+NcfjwYa677joSEhIwm8307duXN998028dl8vFQw89xNChQ4mMjMRqtXLaaafx448/+tbZv38/cXFxADzyyCO+fJs9ezbgrTGoLw+vvfZaunXr5rcdSZL417/+xXPPPUePHj0wm81s3boVgO3bt3PxxRcTHR1NSEgIGRkZLFmyxG+bbrebRx55hJ49exISEkJMTAxjxozh22+/bYYcEwShtYgaAkEQhCCTJInXXnuNwYMHc8stt/Dzzz+TkZHBbbfd5rfe559/DnBcT6GrqqooKCgAoKysjKVLl/LVV1/xl7/8xW+92bNn88gjjzBhwgRuueUWduzYwSuvvMLq1av59ddfMRqNALz99tvMnDmTYcOG8eSTT5Kbm8t//vMffv31V9avX4/NZgNg2rRpbNmyhTvuuINu3bqRl5fHt99+y8GDB+nWrRvPPfccd9xxB2FhYfztb38DICEhocnHdzRLliyhoqKCGTNmkJiYyLhx43jvvfe4/PLLm3U/DofDl8c1wsPDMZvN5ObmcuqppyJJErfffjtxcXEsXbqU66+/nrKyMu6++27A+9288cYbXHbZZdx4442Ul5fz3//+l4kTJ7Jq1SoGDRpEXFwcr7zyCrfccgtTp071BYcDBgw4rnS/9dZbOBwObrrpJsxmM9HR0WzZsoXRo0fTqVMnHnjgAaxWKx999BEXXnghixYtYurUqYD3fHnyySe54YYbGD58OGVlZaxZs4Z169Zx1llnHX9mCoLQunRBEAShVfzlL3/RAV1RFH3t2rUB70+dOlUH9JKSEr/ldrtdz8/P972Ki4t97+3bt08H6n3dcsstuqZpvnXz8vJ0k8mkn3322bqqqr7lL774og7ob775pq7ruu5yufT4+Hi9X79+ut1u9633xRdf6ID+0EMP6bqu68XFxTqg//Of/zzqcfft21c//fTTG51PTXX++efro0eP9v09d+5c3WAw6Hl5eX7rPfzww/qRl8GuXbvq11xzzTH30VAev/XWW7qu6/r111+vJyUl6QUFBX6fmzFjhh4ZGalXVVXpuq7rHo9HdzqdfusUFxfrCQkJ+nXXXedblp+frwP6ww8/HJCW008/vd78vOaaa/SuXbv6/q45NyIiIgLyYvz48Xr//v11h8PhW6Zpmj5q1Ci9Z8+evmUDBw7UJ02adNS8EQSh/RFNhgRBEFpJbGwsAMnJyfTr1y/g/bKyMgDCwsL8lr/66qvExcX5XmPGjAn47E033cS3337Lt99+y6JFi7jtttt47bXXuPfee33rfPfdd7hcLu6++25kufZycOONNxIREcH//vc/ANasWUNeXh633norISEhvvUmTZpEr169fOtZLBZMJhM//fQTxcXFx5stJ6SwsJCvv/6ayy67zLds2rRpSJLERx991Kz7mjJlii+Pa14TJ05E13UWLVrE5MmT0XWdgoIC32vixImUlpaybt06ABRF8bXf1zSNoqIiPB4PGRkZvnWa27Rp03xNkACKior44YcfmD59OuXl5b60FhYWMnHiRHbt2uVrGmaz2diyZQu7du1qkbQJgtA6RJMhQRCEVnDo0CEefvhh+vXrx+bNm3nmmWf4+9//7rdOeHg4ABUVFURGRvqWT5s2zRdA3HffffUOJdqzZ08mTJjg+/uiiy5CkiSee+45rrvuOvr378+BAwcAOOWUU/w+azKZSE1N9b3f0HoAvXr14pdffgHAbDbz9NNPc99995GQkMCpp57K+eefz9VXX33cw3Hm5+f7HV9YWFhAgFTXhx9+iNvtZvDgwezevdu3fMSIEbz33nsBzbJOREpKil8e18jLy6OkpIS5c+cyd+7cej+bl5fn+/8777zDv//9b7Zv347b7fYt7969e7Olta4jt7t79250XefBBx8MGK2qbno7derEo48+ypQpU0hPT6dfv36cc845XHXVVcfdfEkQhLZBBASCIAit4Pbbbwdg6dKl3HvvvTzxxBNcfvnlpKam+tbp1asXAJs3b2b06NG+5Z07d6Zz584AREVFBbRjb8j48eN58cUXWb58Of3792+uQ/Fz9913M3nyZD777DO+/vprHnzwQZ588kl++OEHBg8e3OTtDRs2zBeQADz88MO+zrT1ee+99wD88quuvXv3+uVxS9A0DfD2/agZRepINTfQ8+fP59prr+XCCy/k/vvvJz4+HkVRePLJJ9mzZ0+j9idJErquByxvaM6JI4dGrUnvn/70JyZOnFjvZ9LS0gAYO3Yse/bsYfHixXzzzTe88cYbPPvss7z66qvccMMNjUqvIAhtjwgIBEEQguzTTz9lyZIlPPvss6SkpPDcc8/x9ddfc9ttt/lNonX++efz1FNP8d577zV4g9sUHo8H8NY4AHTt2hWAHTt2+N0ku1wu9u3b53v6XXe9M88802+bO3bs8L1fo0ePHtx3333cd9997Nq1i0GDBvHvf/+b+fPnAwTMDnw07733Hna73ff30W7m9+3bx2+//cbtt9/O6aef7veepmlcddVVLFiwIKAmprnFxcURHh6Oqqr11iDU9fHHH5Oamsonn3zily8PP/yw33pHy7OoqCj27t0bsLxuIHU0NXlqNBqPmV6A6OhoZs6cycyZM6moqGDs2LHMnj1bBASC0I6JPgSCIAhBVF5ezp133sngwYO54447AG8fgscee4yvvvqKhQsX+tYdPXo0Z511FnPnzm1w2Mz6ngw3pGbUooEDBwIwYcIETCYTzz//vN92/vvf/1JaWsqkSZMA79Cm8fHxvPrqqzidTt96S5cuZdu2bb71qqqqcDgcfvvs0aMH4eHhfp+zWq31Dmtan9GjRzNhwgTf62gBQU3twP/93/9x8cUX+72mT5/O6aef7lunJSmKwrRp01i0aBGbN28OeD8/P99vXfD/HleuXMmKFSv8PhMaGgpQb7716NGD7du3+213w4YN/Prrr41Kb3x8POPGjeO1114jOzv7qOktLCz0ey8sLIy0tDS/71cQhPZH1BAIgiAE0d///neysrL45JNPfDeDALfddhvvvPMOd999N+ecc46v/8D8+fM555xzuPDCCzn33HOZMGECUVFRvpmKly9fXu8svOvWrfM9kS8vL+f7779n0aJFjBo1irPPPhvwPsn+y1/+wiOPPMI555zDBRdcwI4dO3j55ZcZNmyYb7hTo9HI008/zcyZMzn99NO57LLLfMOOduvWjXvuuQeAnTt3Mn78eKZPn06fPn0wGAx8+umn5ObmMmPGDF/ahg4dyiuvvMLjjz9OWloa8fHxATUPx+O9995j0KBBvuZUR7rgggu44447WLduHUOGDDnh/R3NU089xY8//siIESO48cYb6dOnD0VFRaxbt47vvvuOoqIiwFsL9MknnzB16lQmTZrEvn37ePXVV+nTp4+vJge8zXz69OnDhx9+SHp6OtHR0fTr149+/fpx3XXXMWfOHCZOnMj1119PXl4er776Kn379vV1TD+Wl156iTFjxtC/f39uvPFGUlNTyc3NZcWKFWRmZrJhwwYA+vTpw7hx4xg6dCjR0dGsWbOGjz/+2NcEThCEdqoVRzgSBEHoUNasWaMriqLffvvt9b6/atUqXZZl/c477/Rbbrfb9eeee04fOXKkHhERoRsMBj0xMVE///zz9ffee0/3eDy+desbdtRgMOipqan6/fffr5eXlwfs98UXX9R79eqlG41GPSEhQb/lllv8hjKt8eGHH+qDBw/WzWazHh0drV9xxRV6Zmam7/2CggL9tttu03v16qVbrVY9MjJSHzFihP7RRx/5bScnJ0efNGmSHh4ergPNMgTp2rVrdUB/8MEHG1xn//79OqDfc889uq6f+LCjt91221HXyc3N1W+77Ta9c+fOutFo1BMTE/Xx48frc+fO9a2jaZr+j3/8Q+/atatuNpv1wYMH61988UXAkKG6ruu//fabPnToUN1kMgUMQTp//nw9NTVVN5lM+qBBg/Svv/66wWFHGxoWds+ePfrVV1+tJyYm6kajUe/UqZN+/vnn6x9//LFvnccff1wfPny4brPZdIvFovfq1Ut/4okndJfLdcw8EwSh7ZJ0vQn1zYIgCIIgCIIgnFREHwJBEARBEARB6MBEQCAIgiAIgiAIwOzZsxuc66Tue/v370eSJD7++OMmbf94P9fSRKdiQRAEQRAEQWiCpKQkVqxYQXp6emsnpVmIgEAQBEEQBEEQmsBsNnPqqae2djKajWgyJAiCIAiCIAhNUF/TH5fLxZ133kl0dDQ2m42bb76ZBQsWIEkS+/fv9/u8w+Hg9ttvJyoqiqSkJP70pz/5Jo9sDSIgEARBEARBEIQ6PB5PwEvTtKN+5oEHHuC1117jz3/+Mx9++CGapvHAAw/Uu+7f/vY3ZFnmo48+YtasWfz73//mjTfeaIlDaRTRZEgQBEFoFLfbzVtvvQXAzJkzMRqNrZwiQRCEekgXHXsd/ZMG36qsrGywfLNarfUuLyoq4pVXXuHvf/87f/7znwGYOHEiEyZM4NChQwHrjxgxgueffx6As846ix9//JGPP/6YWbNmHTvtLUAEBIIgCIIgCIJQzWKxsHz58oDlc+fOZcGCBfV+ZtOmTTgcDi644AK/5VOmTOH7778PWL9mxvgaffr04YcffjiBVJ8Y0WRIEFqAx+Nh9erVrdoesCMR+R1ckZGRqKra2snoEMS5HTwir4UasiyTkZER8EpOTm7wM9nZ2QDExcX5LY+Pj693fZvN5ve3yWTC4XCcWMJPgAgIBKGFiBum4BL5HTySJLV2EjoUcW4Hj8jrk4XUiFfzSkpKAiA/P99veV5eXrPvqyWIgEAQBEEQBEEQTkC/fv0ICQlh8eLFfss/++yz1klQE4k+BIIgCIIgCIJwAmJiYrjlllt44oknCAkJYdCgQSxcuJCdO3cC3mZIbVnbTp0gtFOKojBgwAAURWntpHQIIr+Dq6ysrM1f3E4W4twOHpHXJ5PgNxkCeOqpp7jpppt48sknueSSS3C73b5hRyMjI1tkn81F0nVdb+1ECMLJRtd1VFVFURTR3joIRH4HR91hR6+99lpMJlMrp+jkJ87t4BF5fRKRLj72OvrHx16nGVx11VX88ssv7Nu3Lyj7O17iEY8gtABVVVmzZo3ooBYkIr+Dy2azHXOCHqF5iHM7eEReCydq2bJl/OMf/+Drr79m6dKl3Hbbbbz33nvcddddrZ20YxJ9CARBEARBEISTSOvU8ISFhfHFF1/w9NNPY7fb6d69O3PmzOHuu+9ulfQ0hQgIBEEQBEEQBOEEDR06lN9++621k3FcRJMhQRAEQRAEQejARA2BILQARVHIyMgQo1UEicjv4CopKRGjDAWJOLeDR+T1yUR0Cm8qUaILQgtxuVytnYQOReR38IhgILjEuR08Iq+FjkqU6oLQAlRVZePGjWK0iiAR+R1cERERYpShIBHndvCIvBY6MhEQCIIgCIIgCEIHJgICQRAEQRAEQejARKdiQWghomNacIn8Dh4xwX1wiXM7eERenyxEp+KmEgGBILQAg8HAsGHDWjsZHYbI7+AqLS0VN05BIs7t4BF5LXRkosmQILQAXdcpKSkRT1KDROR3cBkMBpHXQSLO7eAReS10ZCIgEIQWoKoq27dvF6NVBInI7+AKCwsTowwFiTi3g0fk9clEasRLqEsEBIIgCIIgCILQgYmAQBAEQRAEQRA6MNGpWBBagCRJWCwWJElUSwZDW8zvinwnB1YXIedUYDOpJFzaE9l4cnTEFU0qgqctntsnK5HXJxPxHTaVCAgEoQUoisLAgQNbOxkdRlvIb1eJk+1/W0/ZsmyyVIlMWzhU31jIbg8h/9hJ6vgExs8ZhmJs35Wz5eXlYpShIGkL53ZHIfJa6Mja91VJENooTdPIy8sTHS+DpDXzW3d7KJ72Ou7oO+j28juE7tpBdpjVFwwAaEYDHoPC/m+y+P6hjUFPY3MzmUzi3A4SUZYEj8hroSMTAYEgtABN09i7d6+4sARJa+Z34UVvEfnJL1h0J2FU0c+zE7WepkGeECOSDnsWH2z3wxqGhoa2+2NoL0RZEjwir08mYpShphJNhgRBEJrInmfn4OKDlP2SS68v1/q9Z9BUIu1llFoi/D8kSegAms4Ln5Vy51TbCadj6+8FWB/6HNv6vaBpGMINGIZ3wfifachJJ759QRAEoWMQAYEgCEITFG0o4tfxX2EucqEj4ZKMWLH7rdOzcD9rOvX3NhvSdSRdR1ZVJCA7MoxftqncOroKKdSAEmZqchoqXRrnPF3EvGf+SVJFiW+5q8iEfiAP15ebMec/jWRp+rYFQRCEjkcEBILQAiRJIjIyUoxWESTBzO8//rqWkEInEhIVEQY2G3syunCtr/2lQzGxJ6oLiqZR06hG0nQ0p4cNneKwOlxc/9p3/PpkKbFOB7H3DiHhqTHH3O/KwxqfrKwg7mAeW3Ik/vnfRVgrZEqJwkoZBlQMuKkiDGtlJe5//YDpwXNaJA/cbneLbFcIJMqS4BF5fTIR32FTiYBAEFqAoij07t27tZPRYQQzv+2bijEhoRokqiKMVJHId3Gj6GrPwm4O4Y+UXpSbw4DqS5KuYyytIKbSTlp2Pkv7p/HM2SOY9fMf9MrKh6fXYBmeSMRFaQ3uc8GyMuKueIc/ZWVTaTJyvm5CcRkpJRqAMmwkcggjHhyEYqUSLbO0xfKgsrJSjDIUJKIsCR6R10JHJgICQWgBmqaRlZVFcnIystxMffftLljwC/x7CRzIgxADXHsGPH01bM303n2WVoHTDaf3BUPHuWFrkfyuo/ijXRQv3I0rz054RRUuCTx1hg4tMkdRZI7CrchUGEL9PhtZVsnQXQcpCQtlb1Is/QpK6FpWyR8p8URV2okvr6Ti2wNHDQgGXfgiiSXlAEQ4XSjI2MjBQhUuTBSSQDk2rJTjxoyKTOWbmyh/fychV/cnbPZ4pNjwZsuPkJAQ0fGyjlUryvjwnTw0j86Uy2IYNz662bbd0ue2UEvktdCRiYBAEFqApmlkZmaSmJjYPBcWtwcG/x/sOAxUTwpVBcz53Ps6Uo9E+H42dI0/8X23A82e33VkP7yS7EdX40EGZHSjAbfRhNGlga77+glYSz0YHSrxh6oojw4hp5sNXYJOuUW4jQb2JURj8niwm42EeVQS7E606qYJpp5RAfvVPSoHbliI4d3NxPvdfOvEko0JFwBmnCSSSR7JlBKNATd2rCgeN55yjYKXNnP4pd0ooQpRfxtF7F9HnHCehISEiFGGqn3yQT4/LMxDBnQJPnspi1++K+PvT3Zrlu235Lkt+BN5fTIRTYaaSgQEgtAefLEOdmTjCwYaVP2T3pMLD38Ib9/R0ik7qekejexn1uFBomaUZofJgMOkEFbqJqzERVW4EZNdAxncYQZvcFDupNPuIlRZR9d1NGDonkwAXIrCpu7JJAKF1hAqQkzEjE7x269md3Nwwjz4LRc3oYALGTDgJoRyXzBQQ0YjjDI0FCRAxduZ2IBOBJW4ceGpMlD8t5+o+Gw3XZZNR7YYWzTvOgJN0/nuwxxcZhMVJhNIEgZVxbOzErtdw2IRN5WCILQPorQShPZgWybQmCYaKt6gwATLt7Zsmk5i76xz0/2ZSu49fRlOp4Tkff6Ljk60owQZnbIoE+4QBaNbQ0EHufqJlCThCZEJLXdhrfTgMBqwuD2+bZtUlbSsfHTgQIyNdWmdq2sfauWc/SHabwVoyICEBzMuzFQRRgWR1PdsPgQ7Fqow4sKEA6k6ePSGMhoKGlbsGFdvpXTuhpbItg7ll6WF/PXCPzDpUGE2+yai8ygK5SFmtmyuaOUUCoIgNJ4ICNqJm266icmTJx/XZw8fPsx9993HhAkTyMjIYPbs2c2buEZqzX0HmyzLxMXFNV+1c0o03pv9I6tBa55cy9X/16tfEpS66CiaM79f+M3FtQsdXPb+Ci75fScmXUcGFLy57FZDiC8uR9b02tmIjxyVRJLQDN5loS4PRwq3OzkYbiWpvApN09kfF8m/l5axYsA7HJIewfFLZu2mjvisCwuV+M9x4MQMSEiAghsFNyYc1ASR1TMgIOFtYqS/88vxZE3t/pzORo3E4ly6jZK42RSbH6DknDfQHCfH6EQ7NlTwyevZKB4Nuymwot2lKDiqjlWb1zjNXpYIDTqZ81rTddLf8CD9y/vq96YHh+fkbfanIx3zJfgTTYbakAULFhAeHn7cN/4NeeSRR9i1axfXXXcdMTExpKSkHPtDx6G8vJwFCxYwdOhQMjIyWmQf7YUsy/To0aP5Nvjmd1B9uwd1bzDrXrgk/GoROtAY9M2V3y6Pzt1fOjGbZTakJnHRH7v894P3ttuDgqbU5r0qg2qQ0SWQNR2DSwN0qkINqErg95ATYaXEYKCzBEMPHcTS/z9Mc9ixag50JNyEHCWVEuVE4yYEEw7cGDHhQqluRiSjYaASF2EoqGhACJUYcePGiAEH+v5DqN9uoWjeWixGGdUUimtHGQfio/nAHM2aqCTCu0cz/6ZwisogMUrGYq49Xrvd7rtpch8uJW/ce2iHSlG624j76nKMXSOxz12J8+YPUKprJ9SvN1Fq/Rs255NIrdzhPTfTwaHtlSiaRkQnC7EpIURGNv5yuPSDPFBV76+v5p6qpk9FdaC0YVUFY04P7BvSVM1elggNOpny2qPpfL1Pp9QFmWUaf/nZv455SxH0+q/K/pvFbaDgJc6ENuT9998nKSmp3oDgpZdeOq5OfC6Xi/Xr1zN9+nSuuuqq5khmg8rLy3n99dcB6g0Ifv311w4zVKGmaezbt4/u3bs3z9OmXTkEPiuub7t1agq62ODxhTC6F4zt471xOUlHHqrJ75CYLpiNCnY3HCjWGJgkoyFR7oKUiNr8++mAxu+HdYYmSqRWlPPEd05yLSGcO9CMZjYyZus+/vrJL/U+Q5LQUdCRPBq6QUaXvEOQ1twIaoqExwiFcWFUhZkwuD1EOBzEVlQhAU5FITs8jB2JMTisRi7YsA4PChZcSL7te1Cri+fq+p46+9e82yEUJ6FIqIRRUed9tbqJkAsNnVAcvs8bcAM6h+0GkibOwaZL/Nw9jeWpfSi19uGMdRu5K+cnYqrK2ZjQnX65NxNb5qRnXgGRsgGr1cigAgt6pc6Ve7IZt3o75/y4prpuArTtRWR3e57k/Ptw3PwhRtTqdyQUNGTNQeV1CwmbN8N7bDmlaJsz8YSHsiPbiJ5gpe8wGwZD45/eqape21qr+j/2KpVDB11YjDqxCUbMFgO5B+2UFbr54v08Du9zetfXNEJcbnRJwh0RwtnTY7HnOdn+axFVBS48gD0sBD0hjJRuIZw9MZKeaSG43N7aoZpO4VaXC4OmVT95BI8sUVzePE8gm70sERrUXvJ6a4HGc2s1DpVDqRMSrPDNPnCokBoJY1Ng4S4oP0Yl8YFy+PdqD4cq4Lq+MgPiZVTN+3sSczF0PCIgaCeMxuPrAFhUVISu60RERBx75RZmNptbOwlBo2ka+fn5dO3a9cQuLMUVMOmfkFWG9/mOhreWwFDn7yN5vK8VO7wvX1MioHcKvHQjnNH/+NPUBuWUuhm0II4KjxucDu9CSQJVA4MMFiPRIWCsnlAr120ARaJHdgF7rGGgWECHL/c5mbRtLw998RseDGj4h106oCHhkSRMTo1QrRSL7iDXEotLqj2/VYNMhc0CsoTLZGBDr67EZXv7HlSEmtF1GHogm2fPPpVrf19H96ISX7MegFCqcGDGg9FvuYyKggfvOeC1MSWenmVOIpwOQCXKWeVLbQiOenJLItpVTLEUy4zrZ/LTKd7hTrvllfFtly6oTKZzRSkXbl/DY58v5dQd2YR4PDhlmcpIjZ7F+QCct3wLRVKMLxjw7lFGRqM47lGM1ZXyUp39Suh43l+Den4q+tVvoDtVCgwJuLUQ4jSNKpOJeQMHcOFHpxPdrXaY1M2bqvh0URFFeS46q3akYgdh0UbsHon8LFf1nmHgWBspY+N565UcTJUuFF3H6PZ4b9a9dzneuFiWcUsSMjpVJiMeWaIKAx98VEJklZ0IpxMJMAJKmZ2DipmsMok1f+QQV1VFWkYkhp3lqLqOjI6i6dT2NPFORFeQ1zzNo5qtLBGOqa3k9Sc7NR7/XSPfDpekS/zjNJmQ6iD56v95eHdbw5/dXep9Ndaflnn//c/a6pq86uWjkuHnyxRkERh0GJIuxo47bk6nk7fffpuvv/6a3NxcjEYjCQkJjBo1irvuuguAb775hqVLl7Jz506KiooIDQ1l0KBBzJo1i549e/q21VATmyVLlpCcnMxNN91EdnY2n39eO8Tknj17mDt3Lhs3bqSkpISIiAi6devGVVddxZgxY5g9ezZffPFFwDZfffVVMjIyWLhwIT/99BN79+6luLiYyMhIhg8fzi233EJycnLA59asWcO7777L5s2bsdvtxMXFMXToUO688052797NrFmzAj6TlJTkS3NGRgbnn39+QD+Czz77jIULF7J//34MBgP9+vXjxhtvZNCgQX7r1Xz+oosu4sUXX2Tr1q2YzWbGjRvHfffdR2io//jvrcnj8bBmzRoyMjIwGE4g7v7z+/DMEsCN9+bf2wrcS8e/+ZBOwx2Ppdp1wi2Q+TpEtJ38OlFd/13FwXIJPNX9LOpezN0eUGTvvA2qBo7qPAs1QpXbf13gm2ffJ8LuRkUBdAx4b/q8uS2jIlGpGOmvbyFJywVARWaFbSjZIQkAaJJEborNr2+BudyOZpB9y3RN554Lx3HNyj+4/4dfCVerMOLf30ADVJTqG20PJpwYcOHGzM9dezJvRAYZOXu4b/n3dT6louBEw4Rcb/djKCOS9wedyu1XTAUgssJJeGEVGhCratQ8flBUlQe++Zox+3choWE+YnSjAmL9AgLwBi3hFAMyZpwB+/Y2YaoAJEqJxoXV732PLLP8tGFc8dO5AOTluvnrnw/i8UBiSSlhzto06IDLYKjNU12nICaSkCqnt65MVQlxe3zBAIBcPYO0u87nqowGb8dgIL60DOsRMzFXmEwcirIBEF1ZRbjThUeRkFWdstAQpCNyQQfiOxt49F8n3vyk2coS4ZjaQl6vydEZ8Z6KVuene8dgiefHK2zM0xg4L3jzf8zoJfH++e2zVlmXjt0iQtLfDUJK2g9RupyAp59+miVLljBp0iSuuOIKVFXl0KFDrF692rfORx99RGRkJFOnTiU2NpbMzEw+/fRTrr/+eubPn0+XLl0AePTRR5kzZw42m43rrrvO9/moqPrboJaUlHDLLbcAMG3aNBITEykpKWHbtm1s3ryZMWPGcNFFF5Gens6cOXM444wzOOOMMwDo3r07APPnz6dfv35ceumlREZGsmfPHj777DNWr17NBx98gM1m8+1v0aJFPPXUU8THxzNt2jSSkpLIycnh559/Jjc3l+7du3PvvfcG7OtYN+nPP/888+bNo2/fvtx6661UVVXx6aefcvPNN/Pvf/+bMWPG+K2/c+dO7rnnHiZPnszEiRNZu3YtixcvRpZl/va3vzXma2txmqahqiq6rqOqKrIsI8symqb5TeZUs7xm3fqWy7/vqn5CXPO5I/sMGPDefrihgZs/Lx3vU2UVyu3oP2xCPX9o7ZYkCUVRAtLY0PITOaa6yxVFQZIkPB7/G+GapmWqqjZq+aHy6v9oeGsE6jIooOnVWVDnPaca2BkY2J4Uw8i9WdUBgVQ95ChoMhRGmrHaXcS4inzBAICCxuCyzWSb40GSqIgICdh23WAAvM1bRu3LoiLExLQbZ2A3KLz5wcf0LvCOQKSiYMZBCPbqVvgGwIAHAwbc/HPiGPZHx/Lux2/4Dl6ufr7nwYKOhEzgU2onIZQRxY7E2jkqwsqdqJJEqFYbDACoisL8EcMZv38L9QWbRjx48K+9lFBR0PBgDGju5O3yrvtS6yKwfDBoGlJBJaqqoigKq1eV4/GApOtYnf4BiQQomoZafV54DAoeDRRdR5ckjJq3eZVene+SpmFQVarqjAoEEOr2YDcYURUZsxrYGVipc47reEeKqjKYkY3ev498liwBki41y+8J8JUlR67fUr8ng8EQsM/2XkY05pjqltsGg6FVjun9bZpfMACwYJvOf87UmbshuJMBfr5bb7bvKfhNkETNRlOJgOAE/PTTT4waNYpHHnmkwXVeeOEFLBaL37JJkyZx+eWXs2DBAh544AEAzjvvPF555RWio6M577zzjrnvDRs2UFRUxJNPPslZZ51V7zoDBgwgNjaWOXPmkJaWFrDdDz74ICBtY8eO5dZbb2Xx4sVcc801AOTm5vKvf/2Lbt268eabbxIeXluVf8stt6BpGrIsM27cuAb3VZ/9+/fz7rvvMnDgQF599VVfs6gLL7yQSy65hKeffpqRI0f69TvYtWsXb731Fv369QO8wVBlZSVLlizhnnvuaRO1BDt37qSwsBC328369euJjIwkJSWFvLw88vPz0TQNj8dDamoqKSkp7Ny5k7y8PF+TqtTUVFRVJS8vj7hOFvzrao686ZcaWH4kyW+dCpuZdb/+6tunxWIhISEBSZLYt28fAG63m6ioKPr160dWVhYHDhxA13UMBgNxcXF07tyZHTt2UFlZ6duu1Wqlf//+7Ny5k9LSUpxOJ2azmdTUVOLj41m1apXfhSE5OZmEhAQ2btyIqqq+i8yQIUMwmUysWrUKj8eDyeTtmJuRkUFmZiY5OTm+bbjdbozyUFwatUN/NpQFda+0EvUGBJ/3T2P03sMY8OCpbpojoxOieQgtdqFJoMgylVixUufYNTs9qg5Qbg0lO7KX/0YbmNV35P4snj77VN8N64HoGE4pKMSDAZCwE4aEhgmn302nipEQl0pKaTEGzduBWfa11/eGDd6aBf8zpAwbhSRgwsnIvQd4YfxowNvmXQYM9ZxG2RGRdTLMf4VwSiglqjpYAQsVyLiqn5fruDFjxOn7pAszGjIWKuuMexQo1O1g586d9O7dG5e73Jd+XZKQjqjU1ut8h4qqIes6UnVAoEqSN2XVE8jJ1cvr+94NmoaqyHhqPlNHWYi3k7ek64Q7XbgUBVny1jaEudzYjUa/beqAwaSxd+9eCgoKatOnKAwbNoysrCwyMzN9v4+4uDh69OjBxo0bcThqm3nZbDa6du2KoiisX7/e9/tIT08nPj6ejRs3Ul5e7vt99OrVC7vdTmZmpu/G1+l0MmzYMEwmE2vWrPHtE7y/p7y8PPbv3+8XfPTr1w9VVdm+fbuvvIqMjGTgwIEUFBSwbds23zYiIyOx2WyoqkpmZqZvnykpKfTo0YN9+/aRlZWFoijIskxKSgo2m409e/Zgt9sB70OU+Ph40tLSfDXQNens1asXNpuNFStW+DWdTUpKIjk5mbVr1wLeckBRFIYPH+7rO1dTXimKwsCBA8nOziY7O7v2e9J1Ro4cSUFBAXv37vXl/Z49e+jTpw9bt26loqK2f47VaiU9PZ3MzEzy8/N930e3bt1ISUlh27ZtFBUV+b6PumV5zbE6nU4GDhyIzWZj/fr1VFVV+fJywIABmDUV8L8uR5g07HYXSmk20DXg3G0pZgONLsvj4uJITU31nac138egQYMwmUyidqsdEN/QCQgLC2Pv3r3s3r2btLS0etepueHWdZ3Kyko8Hg9RUVF07dqVzZs3n9C+AX777TdGjhzp+7spatKmaRpVVVV4PB7S09MJCwvzS9t3332H2+3mxhtv9AsGahxvW8tly5ah6zpXX321X0EfFxfH5MmTef/999mxYwd9+vTxvde/f39fMFBj2LBh/Prrr2RlZTX4PQRTenp6vU+PrFYrXbt29Vtes37d5mM168fHx6PP6YL+4x6knAJq+wyo1LYhr6kdOBYZ3xPeaacSdvpARjfwpCwmJsZvOXhv3BMTEwPS2Ldv33qfaKanpwc8VQIYPnx4vU+VBg8e7JfamiBw+PDhAcu7du0aMFLWPXaVp39TvQFBzezBNbyNxr3/d1Y/vZIAk+LthXeECLsLFaV6dBz3Ee3gQdEB1cgeetObP3zNfMoJo2f5AfRKnVLVhu5RcBsVnBEyHk3GZTbgMfoXuVaH0++GNtMWgVZdM1FDQ8aNEfMR3/OSt+dy6ZXXkhMWTlJFScCttYKKGzMSKpWEUUIMbsyATgT5nJITwq0//sbrp42gODKEmNwKHJJE2BE33MMP7qMm03R0NElC0XUywyPoUX6YUMpwEoKCihE3BSQAVRjw4MZUPVmaVl1vYPTNj+Bd3477iJufXQmJjJ4cT3R6OgBnT+zErz8fpiDfQ3GohZjKKt+6Gvg69oJ3IrZxoyys+d4Buo6qKOgeFVnT0eTq9v11AoYaOuCurj2qNJsx2u3I1flQZTRSbjJhcbmIrrJjVlWqTN7yyqRq6IqMSVW9TZdq8l5VcWgmUlO70q1bN9/yo/2ewHtDWF/ZMXTo0Hp/TwMGDAj4PdlsNuLi4vzytOb3dGTTVEVRSEpKIj7ef0bzmqfpddevSXtsbCyjR4/2W15TdtR3TN27dw8o92RZpl+/fvUe05HLa9I+cuTIRh+TxWJhxAj/GbkNBgNdunShU6dO9R5TdHR0wPI+ffrU+33Ud0wAvXv3rvdpenx8fL3HVF+5d/twnf/u0MirPc35ywgFi8XI38/pyvy3oai+rkEt4B+nSc1WlgttnwgITsC9997Lww8/zIwZM+jUqRMZGRmcdtppjB071vej2b59O6+++ipr1671PSGoUbdgaqqhQ4cyadIkPv/8c5YuXUqfPn0YMWIEZ511FqmpqY3axurVq3n99dfZsmULTqd/W9/y8nLf/w8dOgTAKaecctzprU9WVhZAvcO81Sw7fPiwX0BQX55FRnqfYJaWNqEnVQuSZRld19m5cyfp6em+c6Hm4nCkhgpMRVEgMQqyXoG+98G2/dXvuKmdk6C+sc6rb/4NBu8LID0Zzh0AI9LhgmFIklTvE5uG0tjU5Uc9pno09PSoscufGC8Rp2bzwrYEcst1PB5vtbvN5SLV6KZH3wgmdJdYeciA2SCxsVhiXS6EmHUKS2sv+JFOJ2N2Z7KxUyyDDhdUj+hzxBNpvGNcaxg5QBqp7MSJiW30IQQHpaGh4PbOGGxyqRgLPIR5HFSEmsiOs6ErMug6slvFdURH+w8GD+CqVX9UDyAr4fH1YDCxPyaClPJ8rC4HoKPg5p333+Ob9F5M2LOZKFdlPemU0aubG7l9fU8kdAx8Nbgrh6JtXPfLSgYfyMKpy7wyciRlJjNh1XMvdCvM4+7l3/q26TCYufeCS+lcmMPwg7sJ18pJrCz1dV52EoKLUEIkO4quI6HiqbNfb4o8vhqDCIqoJAInFlwGM44uMWQ8OpLQKwb69mm1GnjokRR+/L6UwsJwEo0etAI7tsQQortZWPW/AkpynSR0NjPxps5EJ1voPySMj184hKNKQzcryG4VWfXWoCgGCbPbjdNo9AYFuo7DoKDJMorHg9XpREdCrT6vDZqORXUT7nYTYgRFljB4NDyK4ovbzKrqrWGQJN+xhZvlZvk9qarqK0uO/P201O8JOOnKCDj2MdXN66OlvSWPKTlcYu1VEq9tqO1UPL6rd19xYQa2ztR5dq3G4l0624vr3SyX9IS+cRKzf2t8F1GrAc7vAV/vhxAFnhorcU2/hm/mm/o9BVtj5hkQjYr8tY1vrp0aN24cS5Ys4ddff2XdunWsWrWKxYsXM3jwYF5++WUKCwu56aabsFqtXH/99XTr1o2QkBAkSeLf//53QIDQVI888ghXXXUVv/32G+vXr2f+/Pm8+eab3HvvvVx66aVH/eyWLVu4/fbbSUlJ4fbbbyc5ORmz2YwkSfz1r3/1eyrSlhztaUNb6h+v6zqlpaXNkyZJgqUPQLdbqG2yUff7qduUQ6n9f5INDs498f23A7quMzoqh7vuTDniguTfYfWGYYGfdXl01mdrpEVLlDkt3L+lCw989bt3u9Uj4/j2Q814Nt5LSRnRrJZPpVILASTKpHCqDP7zDkhIFFtDSc0vpNhqwV099KsuSVidLgweFU/1so2dkvmkfx+mbdrmCwZqthFfWM63A4cwcetKotzeGgGz6mbSth2AobpWozZAVDFU9ynQCaOcMiJ9QUEJMdy5bDkp/Sr5snc/NnVOYk1EDL0KDpEflUihJYxoewWZETa+PqUvY7P2khUawQcjRqElOsnoW0BY/8n8/OQKxm76g0hPJW7MVBCBeXIPIhf/lXLbAxjKnNVpMVbnmIqFUkiIQP7XpRiuHEljZsuIiFCYMjW63vf6jA5c3n90FP1H19//ymVX+XlhNj99Xki5G8pCLWiyTFycgT/9pTNhJolv3jnMlvWVSDYzZ1yayKiRtTWwj0xbj1FVcWpH3JzrOoquU2k0osoSoSHNc7vRrGWJcFRtJa9TwiUeG1P/tS7BKvHUWIWnxnr/Xpuj4fJoPLwCiuww5wwY29lbBmYkaNzyjcahyno3BYDrHgWHCuEmcXvc0YmA4ARFRkZy3nnncd5556HrOi+88ALz5s1j2bJl5OfnU1VVxZw5cwKqNUtLS33tDGscT6ebtLQ00tLSuPrqqykvL+eaa67hxRdfZPr06Ufd3ldffYWqqjz//PN+T93tdrtf7QDg6/i8c+dOv2rSIzU1/TX73bNnT0ATkL179/qt0+FVuaivDbdXTediqt+vvimMsNSzrnAkk0FiRGfvxTfEqPO/YWnc/MNaol1uvKP+EzB8Zl0GDaqsMugyTosBzSB5Jydz1z6jqjIb0SVQJImKMAugoxkUQj0q//r4Cz4f0ofD0TZ2RUTx58kTmbJphy8YqLvXyIoq9ifEYcsspQIbToxg8GDSVVDDkHH7nsDXzMdJ9VEkcphDdK/+y4Dp5RlcOrAzl2SXoyTFUdE1lijdya4v9/BHZAjpwzpjNEv0TJiOySDRGxjrdvPWW2+h2mycNjmBkEtm4Fw7lvJ3NqNYFJJuH4ahs3eI4/DDj1Ae+xAGpxsDHjQklAnpWD68AiJDkZTAJ6zBYLIojL86hfFXe8scj0fH7dKxhNamZ+pd3ZjawOdtiWby99kJd7pwyxIuRcFYfQPpUmSqTN7O1G4tcIZqQWhuQxO9M9V/c0nge5N6yBy8xVtjPe0zlU/3+L9/Yz8wKhJG0apHQAQEx01VVaqqqvza1EuS5GtWU1pa6tdJq65PP/2UwsJCkpKS/JZbLBbKysoatf/S0lLCw8P9qi3Dw8Pp1KkThw4dwul0EhLS8GynNU/aj0zbm2++GVA7MH78eF544QVef/31evsr6LqOJEm+PgmNPYaxY8fywgsv8O677zJ69Gjfk92CggI+//xzkpKSmr2ZUrsVZaXhIUUbeJp1w4SWSs1Jy2qSeHqimZuzJvLuW19i1rTqKbU0NHR0SQ7oeCsBEQ4XubHh/pOToWN0a7gNEh4DZEZFUhxTuw6AZjTQNy+LyOvO49ozwjh4yM6HT2ynxGQhvDogqavSEoJLNVJFJFUGI/dMuZAvBp2ComlcseoP7v/yZxL1HCT0gCE/DaiEYMeNEYvkwHDJQOTY2t+y9zm7lfSboklvQp6ZhyZjHho4TLEUFkKE4xlcP+1BXXUI0+WDUFJsTdhycBgMUpMmQhszNYFFzx1A0r3zD7hkmTKz9+FOTTMjdB1VE5dXoW2QJIlPphr4YJvKHd/rIMEzY2Fm/5P5HBU1Hk11Mp8NLaqqqopzzjmHsWPHcsoppxAVFUVWVhYff/wxERERjB07FqfTyQsvvMBDDz3E9OnTCQ8PZ8OGDfz222+kpKQEDIvWv39/Fi9ezCuvvEL37t2RJImxY8cGjAQE8L///Y8FCxZwxhlnkJLibSaxbt06VqxYwVlnnXXUYAC8zZ0WLFjAXXfdxdSpUzEajaxcuZLdu3f7DTcKkJCQwH333cfTTz/NjBkzmDRpEklJSeTl5bFs2TIeeughTjnlFGw2G507d+abb74hJSWF6OhoLBYLY8eOrTcNNXMmzJs3jxtvvJGzzjrLN+xoVVUVjz32WLvtkCTLMqmpqc03uU1i/c0fvI4c2LHajDEBa56smjO/7xxt4sweySy/+HL6fLmV0JfXgyp7n9frNUGZ/8VGlWWMTg23uXZoUU0Gya1SHGtFUXWKw0PrHd0mJzyR0V+uhjPOoEtnC/e/OpTsQ3uxf7nHb5SgnKhI8iIjGLd3NToyz44by/bOUUzfuJZVnbvy3zHD6FRQwa0rlwFSvXMAxJJNKTFEvz3VLxhoqqqqqkbXCJrG9YBxJz4ef1sx+Ixo9m6qYP0PRaDrmDwqlSH+Ixcpms7godajbKXxmr0sERp0suf1jN4KM3q3diqEtkoEBMcpJCSEyy67jFWrVrFq1SqqqqqIjY1l7NixzJw50zfKw/PPP89LL73EW2+9hSzLDBw4kNdee41nnnnGb/gzgFtvvZXS0lIWLlxIeXk5uq6zZMmSegOCoUOHsmPHDn7++WcKCgpQFIXk5GTuvvtupk+ffsz0Dxo0iGeeeYY33niDV199FbPZzPDhw5k7dy433nhjwPoXX3wxKSkpzJs3jw8++AC3201cXBzDhg0jISHBt95jjz3GnDlzeOmll3A4HCQlJTUYEADceeeddO7cmYULF/Liiy9iNBrp27cvjz/+eMBoBe1JzcgSzWp0L/h1J4H9B46cSxe4bMwxgoiTS3Pnd79EhX7nhMM5IygYEcXeK39A9/Uo0AMm47J63Djs3qfE7pDaPgJVoQYMHs07MhEgu1W0uvXzuk6FEoq+O89vezHPjifzu33g8pAVE0VOTBRVFiOTty0ntqqECqJJL8nk6ec+8n3mwYnns6xXT25a+RsyevV8BXWbrahoGIh89lwsV5/Yb8vlcp20N03HIisSl9zTlQlXJJGX6WDhvBwqs1VURfbO/aBrKJrOaeOb5/fXImWJUC+R10JHJmYqFoQWoKoqmzdvpl+/fs1Xy1FSAX3vgay6oynV6VdgkOCUBHhgGlwxtt6n0SerFsnvOipW5LBz0hd4StzoeuCTFA3IN4ehyVAVWdN8BDRZwmlSUFQNTZIwSG5ki0xBWDSRjjLUKhmPUWHslEh6P3m63zZdWwsoe3Ed6qYsDL9sw4wdGRUVIw4sWKVSlDrFt0tRuH7KtZxSUIDTCI98v9jXn0AzmXCcNpiQO8YQMuWIORKawF3dhyA8PJypU6cesyayo7j3ul1UVWq+X+Pk6TFMmhbbLNtu6XNbqCXy+uShSTOPuY6svxWElLQfooZAEFqAruvY7fbmHa3CFgaHX4fsQnj3Fwg1w7XjwFo9rGMHCgCO1CL5XUfYyESGFN1Axa/ZrBr7JRGay6+OwCF7x6XXJQlNAl0CXfbWI5hdKrLZxdkHfyfSXY6M96ZxbVQftkX2wB0i0+XOjIB9mvrEEvvy2QAcjn8GPb82EDTg9AsGwDt77uG4MBYOG4iiqtwfm0tU3xikByZiMhppzlt3cbPkb86bPSnIc3Fwr4PeA6xYQpsvf1r63BZqibwWOjIREAhCe5MUA/83pbVT0SGFjU5CR6LUYMaqupF1HYdioELx1go4LQqaUj05WjUJmHBwJVHucnTgcGgM28J6khmWAGY46+F+WJOO3t48ft0sCia8Czvy0GUNzWDC4qr0C0pKQiz8kewdOceg6YT+c6pvxB+h5cXGm4iNb8wgqoIgCG2PCAgEQRCaIGJgFMWbSikyhVYv0XEbZFwWxdt/4IiZkk2qC5u7AvAGBwn2Yj7plczEhwbTa0qXRu3TmBJB0vbb0F0qGGUKEp7Eme/AiBMFjfxQKzddfAVVJm9t0VXOw1g7t/6s3YIgCK2hMROTCf46Zq8wQWhhiqLQq1cv0bQiSIKZ34OXTyKim5VQl4sQlxu3ScIRbvR1JvZruiXpjCxaj1KnI7hB1yifkNLoYKAuyaQgSRJRK2ehJsZSSjS5JLPf2I3YYjdnbt/Nk7//zMv3tuz8HRUVFR22U3GwibIkeEReCx2ZqCEQhBYgSVLA8K1CywlmfhvCTJy66xJcBQ7cxS6+HLcUSQNJ09Hl6iFHgTKbFd0EsZnFfp93SwqVUfXPutvoNHSPJjr7r+iVLlzfbCfi7T94ITYT06ldMM8YjRxuPqHtH4vH4zmuiRSFphNlSfCIvD6ZiPKpqcQjHkFoAR6Ph9WrV+PxiNlKg6E18tsUG4K1ZwSdz01Gk0BRdSSPTnxpGUmV5aTlFjBwRyY/dh6OU/F2OnbKRn7qPIzJpzXPkJSS1YR56gBsi68m8r8XYbkxo8WDAfDO0H7kPCpCyxBlSfCIvBY6MlFDIAgtRNwwBVdr5feIuWMoy1hMYa4TdIhwlhBd7sSJFRkPhxI78W7vyUQ4KygzhxE+LIGJo22tktbmImoHgkuUJcEj8lroqERAIAiCcAIkWeLsdRdS8lMWVVtLMHUdhTVBoXTJVn77qoRipwUNKA6LYvDFKWTc27e1kywIgnBSEwPHNp0ICARBEJqBbVwytnHJvr8tGclc9GgrJkgQBEEQGkn0IRCEFqAoCgMGDBCjVQSJyO/gKisrE6MMBYk4t4NH5LXQkYkaAkFoISaTmKQomER+B4+macdeSWg24twOHpHXJwvRz6mpxCMeQWgBqqqyZs0a0UEtSER+B5fNZhNBQZCIczt4RF4LHZkICARBEARBEAShAxNNhgRBEARBEISThi6aDDWZCAgEQRCC6Pfvi3nz+wr+MFiIS7Py6oVmOkeIylpBEASh9YirkCC0AEVRyMjIEKNVBEl7ye8fl+TzzqvZlB9yUuKUWLNXpd/zDnYVt6/2+CUlJWKUoSBpL+f2yUDktdCRiRJdEFqIy+Vq7SR0KG09v8tK3Hz2Th5mTSehysk5u3MYsz8Xp0FhwkftKyAQwUBwtfVz+2Qi8vpkITXiJdQlSnVBaAGqqrJx40YxWkWQtKX81nSdb/ZrvLlJ5edMDYfHO2fmW88cQgL226wsOaUTn/fqRFGomTEH8smsaN00N1VERETAKEPff5bHny7dwt3TtvDQVVsoyra3UupOLm3p3D7ZibwWOjLRh0AQBKGZrN9QycQfDJTbNVwGBU2WMXtUnuzjYtcBF1m2UBb36gSS9+nU/qgwTj2Qj0HSWznlx2fvtko+euEQOdlu7zFVH1dZFTx62x5uvieJ3qfFtHIqBUEQhGMRAYEgCEIzmDN7P78c0DnL7eGDAd3QZO/NsdOg8MBWE1drsCY5xnfTXGNPTDgDyis4tCeE7RsqcDs1ohOMDBgWQWh42y2i87Jc/Pf+3Rgdbs7Ysp/I8ipy4mys69cdl8kIksTbz2Xxj1HRKIqonhcEIXjEKENN13avNoLQzomOacHVWvltd+s8/1IO2ZsqsZkMrOoU7QsGargMCp+ndyI33BLw+RKLEZdL4o7Hs+lW5m1mowPvStkUhZpJG2PjnmmR/PFLCTmHnMQmmugzNJyU7oHbChZd11n/SznR+aWM/GMXIS4PABGVdsIr7Xx72kAAnMgU5rqITza3WlpPBqIsCR6R10JHJem63j7rqgVBEFqJputsztfZX6Zz0WKd61bvJtStsrBPCrKmY1Y1TKpGQoWD1SkxVJoMATUDNUKdbgbllmBQVQbllAY81zoYYSHM4SLKpfq9d+p4GzNu7dRix1gft9vNW2+9BUDXwrGUvrKZtEN5AestPPdU7BYzstvD7Hf6EBFlDGo6BUHo2FzSzcdcx6S/FoSUtB+ihkAQWoCu65SWlhIZGYnUwI2g0HyCld/f7le56DOdCo//8j8SIigzmwl3uNkRH+m7+d8Wr3PagTx+7pZQX6KxuDxcsvkgNpcn8P1qncvs9VZ+//59CSPOjKJ7r1AAnA4NWQajqeXHijAYDCTkFJFjDrzR1yTQqkchSs4twuloXyMotTWiLAkekdcnE/H9NZUYZUgQWoCqqmzfvl2MVhEkwcjvLfkqZ38cGAwArE6JI9Sjkh8e4lcTEOF0o0oyQw4XEuIOTJvdbOTdwan8kWhrcL9Hu6z9/kMRX32Uxz2XbOHPV2zj/su28eGrh9G046v4Lf85i8K3t6NWunEdKKNg3g7smwoD1gsLC+NwpcT2Hp3IjwpnR/ckNqV3pizMwp4uiTirAwVdlrFYRROME9FuyxK7Ax5+H656Dt5f3tqpaZR2m9eC0AxEDYEgCEIjTFvS8E12v7xSeueXsSnB5luWXFbF1K2ZGKpbZQ7JLuaD/l2pqHmqXh04aLLEz13jSSuqIOwoNQX1Wfl9acCyFd+W8Pv3JQDoGkTYFK68K4X0AWHkZTmRciqwJYVgTLLidnjY9lk2HpOM4b4f8OwvB2D/zB+8SQQqQ0yYJnWn+/NjiIqrfYa0KzIKe5GHpeMG+45lfd/u3g4QNXSdonwXYRHiUtOh7DgM/e4CT3Xt0PzlcOOrsOlZ6F5PbZkgNDPRqbjpRCktCIJQh9OjY1RArvOkf2Oeyo7ihj8TYXexYEBXv9qBEZmFvmAAwOpWGZRdzC/d4gM+H+lw4VBkwuos2x4bzpZ4G5KuMzCnhB7FTZiswKOhVzfbKStRefP/tqMZDd7Rf3Qda6UDRddIyiuh157DRFTYqTIoIEuYtNpLqQ5YHS4q/reP1wotSGk2lLhEwtJc2D1yYL8ISfJVaRhdbg4nRFH55Gp27CjC1NlK+NkpFH+4B0+Bg6jpacTfOxBZERXVJ51zH6sNBmpUOiD1FvjsAZgyvHXSJQhCg0RA0IHs2LGDn376icmTJ5OcnNzayTmpSZKExWIR7VCDpDnyu8iuc9FilWWZ1dsEIk1Q0oiJS3/rGhdwc1zf0/7wBmoAikPNLE1P5soN+5HwBgNf96z9jR6yWblgWybdSyobdSz6ETMJOy0h6DUjH0kSlWHeEYrKwq3s7prIOcv+IKY0MOCoOaIwh4tJP/2B/hOoskRViIlu7h/5YnwGVaEhAZ+zVtjpv+MgPQ7mYq8OiiqB4vd3+9axr8kn6/9WEP+XwaT8Y2SjjqsjapdlyYH8ht+76GkoXwChbW/kqXaZ14LQTMSjmQ5k586dvP7662RlZbV2Uk56iqIwcOBAMYRdkJxIfquazrf7NU57vzYYAO/T8cYEAwA2h5u0wnLCnW7fsr1R1oD19kaFBSyrURRqZt6g7uyKDmNLvC3g/S0JkY1LTD10ueEbHNWgsC2tcaMVSYBB04mochLiVhm0dX+96yXnF5N+IAelEYPY5T25nvXmV8l/YwtqpfuY67dJVU7YkwNa83egbndlia7D0fqwaDr8sDF46WmCdpfXgtCMRA2B0KZ5PB5UVcVsbntPk45G0zQKCgqIjY1FlkXc3dKOlt8Ltnp4fj10DoOdxbC7BGxmSLHCunzwnODAyyMOFTAisxAJ0IDl3eLZkBTF7ymxRDg89CwqRwdWdYrG6vJw3do9lJkMfNy/a8C2SiwmvkxPJr7CEfBeS05m7DId36Ug7WAuf/TpFlBLUFFPrcHR6C6NQzcu49CNywCdyMhKUqP3IiXYYHB3+Ho95JRCeAgoCvSIh8GpsHIXJEfD2QPB5YEtB6G0CnZlQ3goPH45LN8CT3/mnT65LosJHC5vlBNmgaGpUFL9WUWGAV1h6yEorK45kSVvlBgVCgk2yCkGWxiU26GgvP4Ds5i8beZHpMG3GyCzyLu/qDDvPlQNRp3iXe/rP7xPzSNCYVeWd19GBT3UhLtLLMaYSKQz+sLkYbB+H8RHQl4p7M+D5Vurm+QkePPD5YH+XeHnreD0wFWnw8Bu8N0G2JYJWzOhsNxbq3V6X3j8MjAdMWKUyw3XPA/fbQSbFa45A2ZN9B6HxQQf/AJfrAGD4v2OJg2F6yfA52uO/YU/8RGMHwCWtlWui3Jb6MjEPAQdxGuvvcbrr78esPz8889n9uzZuFwu5s+fz1dffUVmZiYmk4nBgwdz880306tXL9/6a9asYdasWTz88MPous78+fM5dOgQMTExXHLJJVxzzTV+28/IyPDto67PP/+cRx55hFdffZWMjAy/NH744YcsXryY7777joKCAl5++WUyMjIanca2wOPxsGbNGjIyMjAYRNzd0hrK7/MWeVi6r+X2G+Fwcc36fX5VrR5J4o2hPXAaFXrnlTDqQD5hHo3dUVbSimub/HzcpzOHI0Pr3W58uZ28OpOYSbrO1K2H6Fw9cVmT6XqD8yAkZxcxZs02TG5Pk6uMy0JD+HVYL/Jj/Gsvhm7cQ9/dmQ18qnGS2EMSLfjlCbWirLDrZYgJ9/7tcELMNVB1RBWZUYF6RsvyCQuBeoLZ+vcZBuv+BfX0qWktotw+eTilW465jll/JQgpaT/EGd9BnHnmmRQUFPDpp58yc+ZMunfvDkBKSgoej4c77riDjRs3ct555zF9+nQqKir49NNPuf7663n99dfp06eP3/YWLVpEUVERF1xwAeHh4SxdupQXXniBhIQEzjnnnBNK64MPPojZbOaKK65AkiRiY2OPK42tRdM0VFVF13VUVUWWZWRZRtM0tDpNCmqW16x7rOWKoiBJEh6Pfzv0murtI4fKa2i5wWDwpa2GJEkoihKQxoaWt7VjAgKOya3RosEAQEyVK+Am2qDr2BwuYoscTNhbO2lXj2L/9v+Tdxxmedc4ttYZmaiG3egtmiVNp2tJJUOyi44/GABfMDBi3Q6slQ5+Gd4bl9lE/+0HGNxAs59jqbCY+GL8UDzG2suIpOmkHsql957Dx5/WagV0EgFBsBRXoj2xEO2ZqwEw3PFGYDAARw8GoPHBAEBxBdrjC9Fe9U4g1RbKvbrltsFgaPPlXnsqy4PdL0OMMtR0IiDoIHr27MmAAQP49NNPGTFihO+pPMB7773H2rVreeGFFxg5srZz38UXX8yll17Kc889x9y5c/22l5OTw8cff0xYmLdN9JQpUzj//PP58MMPTzggCAsL4+WXX/Z7QnM8aWwtO3fupLCwkLKyMtatW4fNZiMlJYW8vDzy8/PRNA2Px0NqaiopKSns3LmTvLw8X7Oo1NRUVFUlLy8Pu917E+h0OhkwYABRUVGsX78eh8OBoijIssyAAQNwu91s2rTJl2eappGWlkZYWBgbN270bSM0NJRhw4ZRWlrKhg0bfPu0WCwkJCQgSRL79nlvwtxuN1FRUfTr14+srCwOHDiArusYDAbi4uLo3LkzO3bsoLKy9kbXarXSv39/du7cSWlpKU6nE7PZTGpqKvHx8axatcrvwpCcnExCQgIbN25EVVXfRWbIkCGYTCZWrVqFx+PBZDIB3hqnzMxMcnJyfNtwu92MHDkSj8fDunXrcLlcmM1m9rttQFrLfMnVcsNC8EiS32hCxWbvd7AnOpxii5kxB/JJqnAEXJ7MqkZaUUVAQKBoGufszOJAVCj5VgthTteJBQPgqyHYmZrMeT+uA0nC5HIzYPuB497kT6f28wsGAMas2kr3rIITS6vQKkpXbGHHmjXous7wFTsJRiv6ijU72LpmDZqmER8fT1paGps3b8Zut/vKjl69emGz2VixYgVGY22zpqSkJJKTk1m7di3gLQcURWH48OG4XC7Wr1/vK69q+gZkZ2eTnZ3t24au64wcOZKCggL27t2Lw+HAbreze/du+vbty9atW6moqO1sb7VaSU9PJzMzk/z8fF951a1bN1JSUti2bRtFRUW+8qqhsnzgwIHYbDbWr19PVVWVrxweMGAAlZWV7Nq1y9dkSVVV+vbti8lkYuPGjb7rh8ViabAsj4+PR1EU9u7d69tnfHw8vXv3Jisri3379vmuH3FxcSQkJHDw4EHKysoA7/UjKiqK3r17N7osj4uLIzU1lfXr16Oqqu/7GDRoECaTSdS4tAPiGxJYunQp3bp1o3fv3pSUlPi9N2LECP73v//hcDgICaltFzx58mRfMAAQEhJC//79fTefJ+Lyyy8PKDyOJ42tJT09HY/Hw65du+jZsycGgwFZlrFarXTtWttuvKbAT09Pp2fPnn7LZVkmPj4+4AkMwODBg/32pygKFouFU089NWA54Bf81YiMjGT06NG+v+s+PYqJifFbDt4b98TExIA09u3bN+CpUs0xHflUCWD48OH1PlWq75hq1j9yedeuXUlJSfFbLkkSMTExpKWl+fbV1wPSSv9h8ZtblcnAD6kJnLk3F4Ou41BkvumZTG51c58so4HPeqcwc/1eQjwaqgRKdYI8ksSaTtEB21Rlma9OSeaqP/Zh1IqaJ/3V32OxLZxVA9JwmYxEllWiNHECMx1vE3iHyUCRLbCDdFlEKDTTmAWxnHgtg9B4EVeO95UVyrjNsOVQi+8zbPKpvn3W/G779etXb7lX90FQ3eVHlm815eGIESP8lhsMBrp06UKnTrUd6GvKt9jYWKKjo9E0zVduA/Tp06fep+bdu3evtyzv3bt3vU/Tm1qWR0VFNepY4ehleXR0tN9yaLgs79WrV4uW5ULbJwICgX379uF0OpkwYUKD65SUlPgVInUL1RqRkZGUlgZOlNRUXbp0aZY0thZZljGZTPTt2zdgeX0d1RoqMBta3tCTlqYslySp3uUNpbGpy1vjmI5sMhZugAdHqjy6omW7Se2MDef0fbnkWUPYERNOTp22/wAug8I+WxjphWXeDsOVTmRNZ1tcBMUNDL3okSXKzEZi7K5mr/jOi7MBUBYeSoXFTJjd2eRtaHI9cxAAOXE2Bm4/eELpk/HQiV1NDwhqOunWZQ3xdrY9WciSt0NvpdP7/8YGdD2TvB2m8+spnyXg4lEoN0/0dhAGePJKWLIKDtWZpbp7vLcz9e87699Hks3bIXpHIyPCqSOQ/zIN+YjfcmuXe3XL7fZQ7rWXsjz4RJOhpmor35zQytLS0rjnnnsafL+hJxbH62hTwzf0lL+paWxNmqaRlZVFcnKyGK0iCBrK70dGK8waqPPZbp3hiRBugu8OaBQ6JIYmSGSWazz+O2SWH39NgkHVMWs6yRUONElic2IU2hHDfBaGmliY2IXccAt7o8Nr36g7pkP1DbZR1bh000EinS0zBGdUaSWlEVZ0SWLZiD6cs/yPRtcU1BxVqMNFUm4R2Qm1TyAVj0pCfjGrBvTglL1Z6JJEeaiZzrlHmdHtiI2HWqroFHEYS3oUUnI3OPUUuPEs78y3X66FC0+F9CQ4WAC2UPh4BXSNg/Rk72g+u7Jh/V7vCEN9U6BrvHdI0G/+8I64szcHcsvgUAFUOSA0BFLjITYSkqMg0ur9Nz4SRp7iHUln8SooKAODAbrFwcDukBAJv2zzdsKNDPWOELT5IKDDKSneTrp7crw34q/fAskx8ND7kFXkHSXorAGwbIt3RKSzB3tH9PnzuxBihOmjvendmwsJNvSiCorOSCfqvFORU2K8gc+hQugUBYeLIdEGB/NhZzZEWKBXJ+9oRqcke9OdGOUdvUjXvXmz6aA3fZOGQk4JhJhqOxPXCLfAgbne0Z0yi+DKsd71wHsMJgOs3gUvfAk9EuGh6RAX6d3HA+/CM58d/bvuGgef/Llx50UQiXJb6MhEQNCBNNSpp3PnzhQXFzNs2LBmLwQbqjU4fLhpT/9aMo0tQdM0MjMzSUxMbBfpbe+Olt9JYRK3DKo999Oj674vc9NA7+zEQ+apbC1q+r6dRoXMCAspZXZSyu0MyC3hj6Ta4DTC4aLSqPiaEfmp/k2mlFSSafPOW5BWWN68wUCdEYaslXaGbdyNxeFke48UCqMjWDE4nTFrdzR5s6ev2sr6Pt3JibMRWV7FwG37iSyr4pNzTmV7mrdJV9/tB44ZEBi7h5O+7ELMncMbXmlwqvdVo0d1TeDNE/3XS0/2vuoKNcOFI7yvprpvivdVn9vPq/3/P6489rb+da3/39NG+f+98P7a/08e5vuv6vGwa80aMrrH1z5Nrzn+mn97d/a+aiRVB2oRdUaxkiQY0sP7qtGptnlgAEmCc4YELk+u3va5Q72vIz9z/YRjBwRn9jv6+61ElNtCRybO+A7EYqmenbS641CNSZMmUVhYyHvvvVfv5woLC+td3hhdunRh06ZNOBy11fZlZWUsWbKkSdtpyTQKgtkg8dsVCv88XWZmX5ieDrcMgEvSYUAs2IxH+bCu81XPZPZEheEBYiscDMoqIrWwnJSSSroXlmNQdUye2loxo0dlyOFCoqu8zXXO2JdLRmYhCeV2Opc2bjbi+picLuQjJseKLi4nvLwSNB1baSXr+3RnX0o8I9bv5Lwf1zFqnbcJSFNqSHQACUZs2M2U79YwbuVWosqqkAGrvfa3vqVnCuUWU4Pbibm5D/33XnX0YEBoX9KTvXM6NEQCHr40aMkROiYd6ZgvwZ+oIehA+vbtiyzLvPnmm5SVlWGxWOjUqROXXXYZK1eu5D//+Q+rV69m2LBhWK1WcnJyWL16NSaTiddee+249jl9+nQefPBBZs2axXnnnUd5eTmfffYZSUlJTbqJb8k0CgJApFniT8MkGnpOYvuPh9L6HtxLEpUmA1/06kTv3FJ2xoWj1nm6mBkZismj4qpunx3i9nD1+n1YVI2Rhwr5qF8XnIrM6EMFcJz9OFP3Z2Mrt9PjYA7FkWGsHJRGudUCkkRJhJUe3Y30czopKdSpMJpRbGY2DkolZX8etqgwXAYDlSYDw7bux3BE8yEVvCPOGCUiLurOb70OYEm1kf92IkN+3u4X6NjNRgpttTf3tgo7oR9PoU+akZB0GwC6R8OxswRT5zCU8IaDBaEd+/VJCJ1Rfx+HHS96m3IJgtCmiICgA0lMTOShhx7inXfe4amnnsLj8fgmDXvuuef4+OOP+fLLL3031nFxcfTt25fzzz//uPd57rnnkp+fz0cffcSzzz5Lp06duOGGG5Blmc2bNzd6OwaDocXS2BJqhnMT1c7BEYz8npoOb285+jrlIQa/YAAAScJTZ5nDaCArIpQexRUYdJ0h2UWYjniq3yS6TpfsQrpkewNsT6Wds3rB4QMlFMdEkHF1Z4afHti/xuPWKC9ViYw24D5Yzt6pX2HXdHRAlaDKYqYoJpyR9/ch6Q5vEw+3280Pb72FJLkoT41hmbsvI9btIKLKiSZJeBSFbpl57O2aCLpOn52HOGXUEELqVLFIBhlLn8DRlYT6tcuyxGyETc/BlCdhd/UQwbZQePtO6Jl81I+2pnaZ14LQTMRMxYIgCI1Q6tTp/KpK+VGa90uajknVcBrrdLqvZ5bgC7Zl0r3E2zTILUkY6ymGa5YcWbFdZlTYHR3OkNwSzr8inuSuJj55MxcOlBEXBmc/1IvufQKHBG0MtcyFbDUgKTJquQvZYkAy1N4cud1u3nrrLQAi1XNY9VUJ/XYeDBhZ6NvR/cmOj+LM3zdzQdaM40qLcBIprfT2Zwjy5FRCx2WX7jjmOhb9hSCkpP0QNQSC0AI0TWPfvn10795dPG0KgmDkd6RZYt9NCg/+ovH1Pp1yNxglyKrUCfFomFSVIVnF2BwuPu/Vqbam4IiboCi7ky51+gnUFwxAYCDgkWBHTDiVJiNDsotJ7mbijCmxKIpEn6GRzXKMSkRtE56jNeexWCzk7/YQUVpB98z8gPe7H8ojOz6Kgv6tPwxwe3dSlCWR1tZOQaOcFHktCMdJBASC0AI0TSM/P5+uXbuKC0sQBCu/YywSL5/lP+Tul1vdfPLoPsLctW3pQ9wqleYj0lF943/mnhzf5GR+b9PwyNkes4TBqdO3oBxJglFnR3HhtYkoSus8ca2ZFbU4JhKnMfAy4jIZQJI4ILePG8G2TJQlwSPyWujIREAgCIJwAs7rYyTn3Gg2Lql9Uh7lcFFp9h+aKKnMjkHTSKoInCirwiBTPDSeHhtycTm80YJsgKTOIZx/RQK9B4fhcWs4qjTCIttGsT38zHB2b7azOb0Lp6/c4uuK7TIq7Ej1TlxYFmLBaVcxW8RspYIgBI8YRajp2saVRRAEoR277pp43q9y88uyMkoNBnRd9+s7YFJVJuQXsM0cWu/4nnsTIvn+/mgkKQaXU8N0ZO0CYDDKhEW2naeWA0aEs2uck9U/wVenDyL1UB5ug8Ku7klUWKvnXFAkJFlcmAVBENo6ERAIQguQZZmUlBRR7RwkbSG/L7ulE5fd0ondRSoXfuQhpwIUWeeMRJ3/Tjbx9HV2Rml2dkWFkVTpINzlQQO2xkVgNddOHFhfMNDWOBwOJEniijtSOHNKLAvnZrFqW2A/hozTI9vF8bRlbeHc7ihEXgsdmQgIBKEF1FxYhOBoS/mdFq2weVZgExkFb+VAz+IK1iVFsScqDAmdXgXlTEppX4O9ORwO301TUpcQ7nw8lcpyD998nMf2PypRDBIjJ0QxeqIYXvREtaVz+2Qn8lroyERAIAgtQFVVdu7cSXp6Oooi2k+3tPaQ3517hHBwlwMJGJpdzNDsYt97Z8zq2noJOw5WqxVVVTEaa/tJWMMNTJ3ZdseYb6/aw7l9shB5LXRkol5MEFqAruuUlpYipvkIjvaQ3zf/vSsmc2B7+sGjIkgf0L5G46kbCAgtqz2c2ycLkdcnDx3pmC/Bn6ghEARBCAJrmIFH3ziFNctLObTXTmi4wuCRkXRJs7R20gRBEIQOTgQEgiAIQRISqjDmHNGuXhAEQWhbREAgCC1AlmVSU1PFaBVBIvI7uKqqqnyjIgktS5zbwSPy+mQiyqemEgGBILQAWZaJj49v7WR0GCK/g8vlcombpiAR53bwiLwWOjJRogtCC1BVlQ0bNqCqamsnpUMQ+R1c4eHhIq+DRJzbwSPyWujIRA2BILQAXdex2+1itIogEfkdXGJIxuAR53bwiLw+eYhRhJpO1BAIgiC0c44iJxte28GBH7JaOymCIAhCOyRqCARBEILM49FZ8n05h7LddE8xMn6UFWvo8T11/3bmcg4uz4c6nXxH/K0//Wb2RPNoeOwqpnAxb4AgCILQMBEQCEILUBSFXr16iaYVQdJe8ju3wM1/3ilm4zZXnaV25n5Qxn3XR3HGyKZNULbq3l/J+TEHDP5F+conNrHm31tQHRrhTgdm1UPydb0Z9viwZjgKqKioEJ2Kg6S9nNsnA5HXJw/RZKjpREAgCC1AkiRsNltrJ6PDaKv5XVah8tXyStZvsbN1pxv1KE2T//3fYob0MxMZ3rhi2V3pwfHfjbjiEgLf1HUiC0rpXlpElMPuXf/JLNb8eoCMHy8+nkPx4/F4xLCjQdJWz+2TkchroSMTj3gEoQV4PB5Wr16Nx+Np7aR0CG0xv/cecnHdn7OZ90kZm3YcPRio8cEX5Y3efnlmJWEuJ8b6jlmSKAm1EuF0+BYZNQ3zbwdQ8yobvY+GREZGipFYgqQtntsnK5HXQkcmAgJBaCHihim42lp+L1hcisPZtM/8utbe6HUju4VREGpFbaDpjibL/JHYiTKTybcszOWk5PsD3ver3Mc9moqoHQiumnN7Y57G8PkeQuZ4sD7n4aLPPBwoFSPiNKe2Vo4IQrCIJkOCIAgt4GBW028siku1Rq+rmBUO2aL9OhMHbC80jFUWK92KC4mtqqDCZGbtfeuQ711Dj8J8bLgJv20o0c+e1eS0CsFV6oSB8+qcHxp8uhs+36uSNUshLlQEaYIgHD8REAiCILQAjcbf3B+3Rjypl4C04gIAbE4HsZUVIEmEqB4cioGCVzYjhRiIevKMFk6scCLu+an+5R4N/vKzxhsTRUdYQaghOhU3nWgyJAgtQFEUBgwYIEarCJK2mN+5+U0PCMKtjb+IqZ7GbV/RVOx1RiEK0VRCVG8b6RDVQ5TTQf6/VuLYWtDofZeVlYlRhoKk5tz+cl/D66zNEc2GmkNbLEcEIVhEiS4ILcRUp+220PLaWn4fT/N8p1Nn6bKjdyxWXRrL/7yGt3t91qideRQDv3XpQa41vN73FXT2R8SyKeM9djyyqlHp1LQg1H60JUXl6PtzUbXWufE2mUyoR8nyKT2Cl5aTXVsrRwQhWERAIAgtQFVV1qxZIzqoBcnJkt9ON7z0binX/bnhGYfXv7CNXYsO+i88RtMhXZLYFRNLfbezGpAbHs7GpBSKn/md/YYnOdx3Lq5NeQ1uz2azdYygQNepmPIMWsw1SN1vQVOm8cGl71HiCF5gUHNud64/ngMgMTRoyTmpnSzliADexpLHegl1iYBAEAShBYQ1bY4xP3mFGstX1j886K5FB45rm9F2e72XwDJzCLokgSSxPT4JVB3P1gKyh72FVuUOWD/sgJuU+flUzduMWtz4UZHao98f/YawJb/7LpRG4NKPFvHtjR8FPS09bQ2/N3tF0JIhCMJJSgQEJyArK4uMjAxee+211k5KmyHyRBDg5feKqDjB4f6//60qYFn+hiLcVcc3Rnqo21XvcpvTwdj9u+laVICqKBRbqh83O1XsX+zyrad7NHIG/pfR/yil0+ellN/8DZkxz+L4PfO40tPWuVUd7d1lAcslYOr8D4OaFocqsbek4ffzTu64TBCEIBABgdAulZeX89prr7FmzZrWToog+Pns63K+/DHwZr6ptu1xUl5R23ThhztWsmTaT7grmh4QSLqO8ygdJSWgZ3EByWUl1G1XVPVjbW1E2XOr0LYV+X9Qh9zxC5qcnhOl6zq/ZGp8s6/lmi0VO6BLbv1Nt5xGExxqfCfsE/FzJpz9+yD+KGx4HdH4oR0rq4LsomOvJzSJjnTMl+BPDDsqNKukpCR+/fXXFh+loby8nNdffx2AjIyMFt3X8VAUhYyMDDFaRZC0hfxWNZ31W+y8sbC0WbZX5YAb/5rDgmeT+HTKD5RsL2vyNuLKS/FIMn0Kc7FUz76q0/ANZI/CfExabRBS9ep6Mn86QOjUUyj/TwMdjqs8aHY3ssV49MToOmQWwob98N0G1EonB1I6kfDrRqzLN4NBhqGpEBsJXWNhZxaezGK+ieyKIuu4BvXAM7QHMR/+xFNxQ1ndpQehTifZ4ZEM6myms+Jgd6YDi8vFzLIdzOhv4LfYbtx+KImC3Aoe/G4RQzL3URwWTnmoldI+3Tln1hBOSTaxwWMl02Nk/y8H+GNXBV33HcBdWMHpsclEOx0BtSsfDBzFuac+xKK3/8HP9jDiLJAWJXFON3hrMyzdryPpcH1/uH2IQk4lRIeAxdj4m5BCu065U+Oiz8GtH/28Frc2zSOo5Yiuw7gHYfnW2mXpyfDSjXBmfxCjeAlBJgKCdsTj8aCqKmazOSj7U1UVt9tNSEhIoz8jSVLQ0tfWuVwuLBZLayejw2iN/FZVnVcWlPDNz5W0RB/bigqVtwd9jm4/vk6ORaFhDMg97AsGwHvzWGY0EVFPEyKzFrgfdXsR5U8evZG6Z1cxpgHx/gv/8TH8azFUOLxRiMd/2wrQnTo3s05g+Tbf+25J5oOBpzL9l5+96fppGU5ZJu2BF8mMivWuFAayphK2fAOf9OyPrBvRjFCudeP5dSpbkxO9O7CE8cC5V/Dd3MeYtnElAFVrTRz4fCm7NRWX2cKZuYcxq27uvuBaHhxzrrej9viLmT//OS7ctg6r2zvttIpEv+xDWApL2f+fH1g47gLvzZ0E9x6RL3f/BHf/pPryXZJA0yHM6A0Wnh6r4Nbgb79oLNyhU+oEh4cmz2ChAjmVOolNGLZWOMIb38JLXyHnlXi/qLhIuPUcmDAAHngX1uyBXp28X+CubBjYFdbvg315EGKE+6fAo5c3fn9/ne8fDADszIKzHvGeLE9eBX+e2pxHKAhH1eZD0M8//5yMjAxWr17Nu+++y5QpUxg5ciQXXXQRX3zxhW+9o7Vdf+2118jIyCArq7b6d/bs2WRkZFBSUsLs2bMZP348Y8eO5b777qOgwFsV/Mknn3DxxRczatQopk2bxk8//dRgOr/66itmzJjBqFGjmDRpEq+99hoeT2DVfkFBAU8++SSTJk3i1FNP5ZxzzuGJJ56gqMi/yrAmzXv27GHOnDmcd955jBo1ik2bNjU67yZPnsxNN93E9u3bmTVrFqeddhpnnnkmDz/8cMD+avJ55cqVvPHGG0yZMoVRo0bx7bffAmC323nxxRd9+T9x4kQeeughsrOz/bZztO/hm2++4frrr2fs2LGMHj2aa665hu+++67etK9Zs4a77rqL8ePHM2rUKKZMmcKjjz5KSUkJa9as4YILLgDg9ddfJyMjg4yMDCZPntzovGlpqqqyceNGMVpFkLRWfi/6upyvlrVMMAAg66AdZzCArqMqCpEOR+BbkoS7GZ9AGtKi/Be8+jX8bQEUV4JbDQgGahzt9tWoa1z1x29+QcqKbr1qg4FqmqyQXFHKrN+/Q1MUUBS2JnZma3JXv9GXZGBI1n7f36FuF2aPm7TCXIZl7ceiupGB55e8zauLXq9OoETfvMO+YAC8w7SOOLwHm9NOUnmxb71j0fHeSwJUuOE/6+BPyzRu+Frj+XU62ZVQdRzBQI3siuP8oADv/ww3voL0xz7krGKkw0Xwxz646RUY+QB89BvszYUv18FX62FPDnyy0hsMADjc8NjH8OXaxu9z7jcNv6fjDUL25pzQYXVkoslQ07WbGoKXXnoJp9PJRRddhMlk4uOPP2b27NmkpKQwaNCg497unXfeSXx8PLNmzeLQoUN8+OGH3H///Zxxxhl8+umnTJkyBZPJxIcffsif//xnPvnkEzp16uS3jeXLl3P48GEuueQSYmJiWL58Oa+//jo5OTk8/PDDvvVycnKYOXMmbrebKVOmkJKSwqFDh1i0aBFr1qzh3XffJSwszG/bDz74IGazmSuuuAJJkoiN9b8YHkteXh633HILZ555JuPHj2f79u0sWbKEbdu2MW/evICn///5z3/weDxMnToVq9VK165d8Xg83H777WzYsIHx48dz5ZVXcvDgQRYtWsTKlSuZN28eCQkJR03Hyy+/zJtvvsmoUaOYNWsWsizz448/8sADD/B///d/TJ8+3bfuokWLeOqpp4iPj2fatGkkJSWRk5PDzz//TG5uLt27d+fee+9lzpw5nHHGGZxxhneG1dDQtjH2nqZpqKqKruuoqoosy8iyjKZpfkM11iyvWfdYyxVFQZKkgECzpnr7yJvhhpYbDAZf2mpIkoSiKAFpbGh5WzsmoFWOafmqE+8rcDSKR236ZUvXiXDYKavuHFxmDiHa4Z/OzMhoikJDGZZ5wDdJ2YnQTBJane9QmftNi1xuw1yBwQ1Api2Gz996mvlDTqMipLqW6IibdLfBwA9p/bhwy2rfsm4l9fcDuHHV9/xz3AXsiUlgYM7BeteRgMLQo4wF2gjvbNY5zj7ifhSgT5SKrosy4niOSX/nx4bP19zGNwHU//MF6tkDG3dMlc76NuFH/b956B/ce1J8T1IjgmahdbWbgMDlcjFv3jyMRm871fHjxzNlyhQ++uijEwoI+vbty5///Ge/ZQsWLCAvL48PP/zQd4M+bNgwLrvsMj799FNuv/12v/V37drFvHnz6NWrFwCXXnop999/P59//jkXXXQR/fv3B+CZZ57B4/Hw3nvv+d1AT5gwgZkzZ/Lee+9x8803+207LCyMl19+GYPh+L6qzMxM7r33Xi6/vLYqMzU1lWeffZYPPviAa6+91m99h8PBggUL/AKFTz/9lA0bNnDVVVdx1113+ZaPGDGCu+++mxdffJHHHnuswTRs376dN998k5kzZ3Lbbbf5ls+YMYP77ruPl156iUmTJmG1WsnNzeVf//oX3bp148033yQ8vPaCe8stt6BpGrIsM27cOObMmUNaWhrnnXfeceVNS9m5cyeFhYWUlZWxbt06bDYbKSkp5OXlkZ+fj6ZpeDweUlNTSUlJYefOneTl5fmaWqWmpqKqKnl5edjt3uFDnE4nAwYMICoqivXr1+NwOFAUBVmWGTBgAG63m02bNvnOE03TSEtLIywsjI0bN/q2ERoayrBhwygtLWXDhg2+fVosFhISEpAkiX37vFOiut1uoqKi6NevH1lZWRw4cABd1zEYDMTFxdG5c2d27NhBZWXtcDpWq5X+/fuzc+dOSktLcTqdmM1mUlNTiY+PZ9WqVX4XhuTkZBISEnxP92suMkOGDMFkMrFq1So8Ho9vsqCMjAwyMzPJyal9cuZ2uxk5ciQej4d169bhcrkwm81YLBYGDhzIvn37yM3N9c2sa7FYSE1NpbS0lMzMTN/30alTJ3r06MG+ffvIzMz05U1KSgqKolBSUkJpaakvL3v16kV0pML+zGa4o2uAqkhHbfMfQNPol5dNYmU5v6d0o8Icws7YeAZlZ/pu/POsYeSER6BLEocio+hZlH/C6VyzcjUo3lQ6nU5OCwtpkYAgI3MvnUoKOGzzfzBy/rZ1hDsddC3JZ0tilwY/n1RW7Pf3z916cfq+bQHrybpO55IC9sQmokkSSgMTvxVaI47jKGoZdBcmScF+jD4Cx5JmrWD9uu306tULu91OZmam7ybR6XQybNgwTCYTa9as8f0mwft7ysvLY//+/b7fh67r9OvXD1VV2b59u+/3ERkZycCBAykoKGDbtm2+bURGRmKz2VBVlczMTN8+U1JSfL+nrKwsX3mVkpKCzWZjz549vvJN0zTi4+NJS0tj8+bN2O12Xzp79eqFzWZjxYoVvus/ePurJScns3at96m82+1GURSGDx+Oy+Vi/fr1vvJKURQGDhxIdna2X622ruuMHDkSp0mm8Q1jG1Zi0tn022++8qqhsnzgwIHYeibB5kNH3V6+u4o9K1fSt29fTCYTGzdu9H0fFoulwbI8Pj4eRVHYu3evb5/x8fH07t2brKws9u3b5/s+4uLiSEhI4ODBg5SVlfm+j6ioKHr37t3osjwuLo7U1FTWr1/va26sKAqDBg3CZDId9z2MEDzt5hu65JJL/AqD+Ph4unTpwqFDR/9BHctll13m9/fgwYNZsGABkyZN8nta37NnT6xWKwcPBj4tGjFihC8YAG8kfPXVV/PTTz/x448/0r9/fyoqKvjll1+YPHkyZrOZkpIS3/rJycmkpKSwcuXKgIDg8ssvP6EfktVq5ZJLLvFbdskllzB37lx+/PHHgIDg4osvDqg1+PHHH5FlmZkzZ/otHzNmDOnp6Sxfvtx3o16fpUuXIkkSkyZN8jtugLFjx7Js2TI2bdrEqaeeynfffYfb7ebGG2/0CwZqNLSPtiQ9PR23280ff/zBoEGDMBqNyLLsq3GpUXMs6enp9OzZ02+5LMvEx8cHPIEB7zlal6IoWCwWTj311IDlUH+n68jISEaPHu37u+7To5iYGL/l4D1HExMTA9LYt2/fgKdKNcd05FMlgOHDh9f7VKm+Y6pZ/8jlXbt2JSUlJeCYzGYzAwcODHgi1b17d798rzlWq9UacEz1rd/Q9yHLMpdf4OaPrfm01AS2ehPPd5Oqsis2HofRSHxFOXajkQpzCL927YHNUYVLVqg01/6+7cZjdARupAGh3TD1j/P9LT0Qhv7zE80SFBwZEK18/m+cccvD7IpLRtJ1Ltq0kjt+WUp2uI0dccl1PqgH1BJ837Mfg7L2Y1Y9bErszPdp/eoNCPKt4fzeNR2AwtAw4isDZ4/2SBJL+gw9oWP7yygTBVXwzAkOluZUwnydYW02G3FxcX7vN1QWKIpCUlIS8fH+/T9qnjzXXb/m9xQbG9tg2dGU31O/fv3qLSOOXF6T9pEjRzb6mCwWCyNGjAg4pi5duvjV8Ncck+lPU9GXbkA6ommbblDQ+3dBXr+PYzIoRLx8G6OSapvPHbUsv3MS3PRqg5vTJYh9bhaxnWOPuyyPjo4OONaGyvJevXq1aFkefKJGoqnaTUBwZDMd8P4Q6j4pbI7t1tyEJicnB6wbERHhe0JYV7du3QKWpaamAnD48GEA9u/fj6ZpLF68mMWLFzcqLQBdujT8tKsxOnXq5BdIgXdq9k6dOvnSdqz9ZWVlERcXR0RE4NOwHj16sHPnTkpKSvwKn7r27duHrutcfPHFDaazsNA7pl5NgHfKKac0fFBtnCzLmM3mgAtSTcF7pIYKzIaWNxQgNmW5JEn1Lm8ojU1d3hrHdGTwcKw0Nscx9eph5pXHEvjvwlK27nJQ0cwtiHRZpjDcSmx54yY1cFX/1nfH+N/g6ZJEcUhowA1ybGXzNDyXHar/d3LeUPjpUfjre5BTAhGhsD8PSiv9hjWt+a/UwN8AOaFhRLichHi8bfw7lRez8vm/8sSZF3LXL1/RuayIPGs4V152B6okMyhzL2fs3syzY88PON6/nXs5/xw7mbjKMkYc3MW7H75MZUgIB8Ns9CjyjrDkkWQW98lg8ta1TNzxB7H1BAMlZgun3v44uRFR9QYeRzJI0CMSIs3gUCEpDG4eKDO1p4yu6wyI11myW6PS4511+Ov9kNmEr8Ys+/8mRBnRxGMa2xd++we8/h3kVNciJUYh3TgBqU9neOUrb6figd28/WG2HIJRp0BeKXy6CjrHwIs3oHSOC9h2g8d049kNBwRdYpEW3Iuhe6Lf4vb8PQltX7v55hp6MlwToR6tfdrROho29WTXG6g6bqxzzz2X888/v9736hudpykj/DSHltqfJEk8//zzDX6PPXr0aJH9thZd1yktLSUyMlK0nQyC1szvTolGHrrD24SlrFzl8nuyj/GJJtB14gZF0T3Cxt7/BQbwjRFTWUFaUT4mj4et8YkUhYYh6xqdS4tJqvA2EXDLMsb6ekbLkLjtZkzdbRTc/x1V/6m/06SxV0zgwtP7wa9P1p+oPTlgVJC6xEFmAbz1PeXZ5VRMO42k8afAy0th1S4cM07HputYbBb06DBWOcPQV+3k9V0GloR1578jJ3D+rg0kdg7nqov78WFYGWEuK8tDL+TaUDAbJMKddvbM/YV3s60Uh0cQ1j+RK7ZsYWznQvj1H1hH9aJ3TboOF6L+tpMbDhcwdf6XbM2vv+uhzWln9Qt/5X/r5xMbKjMyGUKNEh4Nih06f+TpuDSJUckS0Zajn4+SJHFFH4kr+gSWjaqmE/KsiucYl538E5wETwCG9UTPSKu/HPnThQ1/7vErjn+fq5+BCbOhtMrb5O7FG2HWOce/PUE4Ae0mIDiWmqfXNW3g6qrvSXhz2r9/f8CymrZ7NU/9U1JSfB1ujnxy3JIOHz6M2+32qyVwuVwcPny43pqN+nTq1IkVK1ZQXl4e0Ixn7969WK1WbDZbg5/v3Lkzv/32G4mJiXTv3v2o+6qpodi5c6dfNfOR2vpNdk3724yMDPHEJAjaSn5HhCvcfW0Uz71dfOyVj0HRVGb29zD51qEoZoW0i3L48e5VuMsb32chxO1iYE6mbzi5wTmHsSsGzKrHt8wjyaxO7goSmDxuehbmE+nydnhMWDkTc7r3Zj/myTPrDQjM56aiRDVxuNcedZ58psTCg5cSDvhKl1vPhVvP9WvXLQEjAAYMw79x3Ol1/u9N69l+74eS/PDZnOa3rIF+R51iMF/ibZoSc/dkckc9h3RwZ72rfnHWWVzWx//BkVGBeKvE2Ucv5hpNkSUeHw0P/HL0niRF7ubZX0cX9HIkIw1K5rf8fjqgFmrFeVJr+w2yG8lqtRITE8Pq1av9nuJnZmYedbjQ5rBy5Uq2b9/u+1vXdebNmwfAuHHjALDZbIwePZoffvih3qFDdV2nuPjEbyKOVFlZycKFC/2WLVy4kMrKSl/ajmXcuHFomsbbb7/tt/zXX39lx44djB079qht+2s6/b700kv11tbUNBcCb2dxo9HI66+/TkVFYJ15zXdbM958fQGgILSmCWOsvPOvxGOveAy9e1u48J4eKGbvTWfn0xO5at3kJj3GsTqdeGT/m9YQ1UN2eAQOxUCZycz6pBSqzGaqTGYqzSGUm2prKkMyknz/ly1GbAsmo9W5Lw05pzuJX844vgNsBwacmlTvjYVDkvnkpmuCkob7MuCjoZvpZWt4nbb9eEQQhPbgpHp0OX36dF555RXuvPNOTj/9dAoKCli0aBE9evRg69atx97AcerZsyezZs3ikksuITY2lmXLlrFq1SrOO+88BgwY4FvvgQce4IYbbuDGG29k0qRJnHLKKWiaxuHDh1m+fDnnnXdeQKfiE5WSksLrr7/Onj176N27N9u2bWPJkiV069aNGTMadyGfPHkyX3zxBe+88w5ZWVkMGTKEQ4cO8fHHHxMTE+M3clB9+vbty0033cTcuXO5/PLLmTBhAnFxcb7RKn799Vd+//13ABISErjvvvt4+umnmTFjBpMmTSIpKYm8vDyWLVvGQw89xCmnnILNZqNz58588803pKSkEB0djcViYezYsSecZ4JwomJsJ1603n6VLWCZJEkYTAqeBsb1P1JiZbnfzMM1OpV7A+kQ1UOf/BxWd+qCRzHglmXiq7ztT6z3DAv4XOjFvfiwfAXR5ggmTZ9y0k+8l/7Pi9n86Wr67d/rW+aUZa694i7+b1jwnqd1tji5Zwjc/EP975tPmkd7giC0lpMqILjmmmuoqKjgyy+/ZO3atXTv3p0HH3yQbdu2tWhAMHbsWLp27crbb7/NgQMHiI6O5oYbbuCGG27wWy8xMZH58+fzzjvvsGzZMpYuXYrJZCIhIYHTTjuNs846q9nTFh8fz1NPPcVzzz3H119/jdFo5JxzzuHuu+9u9MXcYDDw4osv8t///pdvv/2WH3/8kfDwcMaPH8+tt97qN2JBQ2666Sb69OnDBx98wPvvv4/dbic6OpoePXrwpz/9yW/diy++mJSUFObNm8cHH3yA2+0mLi6OYcOG+Q3X+thjjzFnzhxeeuklHA4HSUlJbSYgkCQJi8XS5ps2nSzaYn5n9DeyZlPT23LIMtx6ZSQpiaZ630+/uCtb5+2t970jhbmOPda51e0isbwMp8FIuNtBaN9ooudMwDKh4XYvbpPepvK6xSgK/fb9ixV/+YLD3+7gQGQMm84bx6Mzu5AeHZzjrzm3i47WYb0DfBXB0BbLEeH4iInHmk7ST7SXrNBmTZ48maSkJObOnRu0fWZmZnLhhRcya9asgIBIEDqSpctKeendwBFqjiYqQuLdOYGjjdWlOlV+eWg9ez47iK4evW15r/wcUspKjrlfHSge0pUBv83wNVGqj9vt5q233gJg5syZASOYCS2n0yseshroPGw1QMXdJ9XzPUE4IUXSA8dcJ1p/KggpaT9ERaPQrPLzvZMcNTQEaUehaRp5eXl+4zoLLact5veCJU0f0rOk/NjPZxSzwulPZzB92Tkc69HwnuhYSurMO1BhDKx10AE9wsTgtVccNRioy2Qytam8PpnVnNslR6nsiTm5W24FTVssR4TjJTXiJdQlHim0M6WlpbjdR2+GEBIS4jepWjDY7Xa+/vprFi9e7JstsiPTNI29e/cSHR3dLiZTa+/aYn6XlDW98rUp9bWq/dj9CNyKgTUp3Qh1OYmvKKNHcSElRjMRbic6EnJ1l9mYBRc2KZ2hoaEnPASz0Dg15/bpKdEs3V//Oo+OCmqSTlptsRwRhGARAUE7c//997Nu3bqjrnP++ecze/bs4CSoWnFxMU899RSdO3fmiSeeqHcmWUHoSAwGOEbsHqApk3pGdGt80F9lMmM3mb3PxdKiqChzEZZTjMcagm3ueURMSmtaQoWgWzQZwl8E9Yg4bHwXuKa/uJQLgnBiRCnSztxzzz3HHGqzZtr6zz//PBhJArwzO9eMFCQIAowdFsr3vzVt6uLhAwInJ2yIo/DYHYbrclUPP2pLjaDLFw3PGi60TUYFCm6TmfmVzsZ8neGJ8Ow4icTwJkSRgtBBiE7FTScCgnamd+/ex15JaHWSJIlZioOoLeb3PddFs/eQk32HGjdEKMCMyZGNXtdsq38UoobEVHn7NBgHJxxjzWM7VrNFofnUPbdtITKfXtjaKTp5tcVyRBCCRQQEgtACFEURwVsQtdX8fuHhJErKVFass1NUqvLRl+XUMzcfAN06KfTo0vibfNkgIxslNHc9bflr2vdX39iEupx0KiulwBbBkEfHNPUwAlRWVqI0pX2TcNza6rl9MhJ5LXRkoteMILQATdPIzMwUo1UESVvOb1uEwrnjwrhiSiSLX0vh0bujsYb4rzOot4l//qXpT+5PmdHAXAGSRNduJrpLlZxSmkfv8gIqzj6FAduubZannyEhIW0yr09GbfncPtmIvD556EjHfAn+RA2BILSAmgtLYmKiGK0iCNpTfg/pF8qHL4aiajpFJSrRkQqKcnwXp1P/OoCKzCoO/Zjjt7zrWUmMmzMMg6VliviQkBAxylCQtKdzu70TeS10ZCIgEARBaAWKLBEXfWJFsGyUOfv12jEnHcVO0CEkuvGdkwVBEARBBASCIAgniZAoEQgIgiAITSfqxAShBciyTFxcnKh2DhKR38HldDrFSCxBIs7t4BF5LXRkooZAEFqALMv06NGjtZPRYYj8Di673S5umoJEnNvBI/Ja6MhEiS4ILUDTNPbs2SNGqwgSkd/BZbFYRF4HiTi3g0fk9clDjDLUdCIgEIQWoGka+fn54sISJCK/g8tsNotRhoJEnNvBI/Ja6MhEkyFBEIQ25OPn9rPllxLMFoVzb+jEwNOjWztJgiAIwklOBASCIAhtwE/flvDZq5lYnW4AXA4PHz2zn/Xf5zPh+i6kdLW0XuI8Kny+FmnLQbpm5VN6WkTAKpqmU+7UibSIimdBEFqXaBLUdCIgEIQWIMsyKSkpouNlkLT3/F67spwP38jBVh0M+EgSB5cXsPT9LcTMOIWLHusb/MRtOACj/w6VThTgTAxIr2zF/VZnuHY0AO+8uI+n18PhiHC6lJfyxGi4YKbonNkc2vu53Z6IvBY6MnHWC0ILEBeW4Grv+f3TkgI65RWi1TOUZ2lkOIqmU7xgO+V59qCnTT/rMah0AiABRjw4CYeZ89Dyy/n+1EX8ZVsI2+LjKAsJYXNcAreutlDy7vqgp/Vk1N7P7fZE5PXJRGrES6hLnPWC0AJUVWXbtm2oqtraSekQ2nt+V2wswOTxsC8yzG+5R5LYGhMJeC9fWz86ENyEuTx4CioCFptwUmGIYM61v7Cj2MWlf2zh8g0bCXW5AG9NwadPb6OoSnQ8PlHt/dxuT0ReCx2ZaDIkCC1A13VKS0vFSCxB0t7zW650IQE/pcSzIyqMvoVlOGWJ7VERVJoMFEVFEF1cRmhiaHATVm4nJzSazpUFuDFjJxIZD+sTUliZksYeu4W7dm3lrJ2HAbhm9RZKwmHMwf0YNJ0NqXOIinEyIFZD+tdlSMNEM6Kmau/ndnsi8lroyERAIAiC0ErslR6+fDebKrMJs9uDRVXZGBdFnsXM9B0HGFBQjEeScJsMoGn89F0BuU8uJam8CM7oyykvTMJgUpotPQ63zl1L3bzzhwePR8fo1HglZTDTd6yiiC7UVLMnFBl4YsZ4DKrOjLXbSS7z1iKkF+SRr8qs75TM8EOZDMzNR89VUclHGfEorHgQaURas6VXEAShPiKkazoREAiCIATZ5l+L+eztbA6VK+hApCxTbA1lQGEZh8IsTN19iGint/mNQddxRVhZktoFu0Phl9SxxFeUctvHi9m/+zBp39/SbOl68AcPc9eqDMnaz/V/LCe+opTMsAjyDTEontr1Qt0eLtuwmVdOHcan/Xrwf7/9TBjlhGAnuRiqyo38dfwk/rziazpXFnkvzjro98xH+m12s6VXEARBaB6SLurGBKHZaZpGQUEBsbGxooNaELSn/N70UwHvPJdFpcmEXZKQVA8OkxFJlglVNYpNBpLLKqg0GohyOIlweUceyg0xk1xSjllV+X/27js+ijJ/4PhndjebbArZAEkg2VASSmgJxAREBWwoR7MAip4NG3ji6WE5f57n6VnPs5dTREUUFcUGiKBYAEUQAkhoIZRA2ARIQkhvuzPz+yNmYElCCJBN+75fr7yUZ5+deZ7v8+zsPjPPPFNmMbO5UxivLHqF8IPPYQr0a1AZdF2nMqsUn1A/TNVXGFxuYh7JJfLAAX744Fl8NBdw9AFNZQRzmKNTfpb0iqF33kHOyt2DCQ0znvOuSy0WgtxFHrfulXUIIiD3tQaVta1rSX27pZNYtx6HlEfqzROu/9sLJWk55AqBEI3AZDIRFhbW1MVoM1pSvL9/LwsFsJWWcrBDCBXWAOO1crebcsXE7+GhRlqPvHyi8/LpkZmDX6WL0gA/fAFfl4vrJtxN0kcl3DrOQo/OJ3c4L1qXQ+o1P2LdfQALLjI62CkZ2IGYPTvIuHY6z635Fh/NzbGDAQAbBVgpppKqG58v3LObju48TOgotVyg93e7a6Ttx0bvlakow2NrLZtb0xn7QTnfp2ugwwVdFJbd4o+u6/x5XhkLd+gE2xQevsCHOwb7nFR9W7qW1LdbOol16yHPIWg4GQIL0QhUVWXTpk2yWoWXtKR4l+RVEFBejtvHQoXV80dtucVCsY/nD/s8s4WYVCdR+3MJPVRAREYu6zqHsalTKNlBwSxOUbnhhSPkFtZfd13T2TZhGX67M3HjSzmBtCvQ+W/UIJ7sex6vfP4JUQWH63y/govDNhuf9+uNv9uN6Y+rArV9+eqAGz/c+KDig4aZX8O6sOWyD9Df/8Ujb2aByiOzDtL34Vy+zTKj+llRbVa+z7Yw6JVi2j1SxMdbdErcCllF8JcFlTz5U2W99W0NWlLfbukk1qItkwGBEI1A13XKyspktQovaUnx1rUTnLuqpfyJO/fj4z76A8XHrRKzP8cjT1GZzjdrjj6jQNd1dty3lhW2OfxofpeVXT+lNKuIsl2FtNu/l0qOPvXYz63y9qez+Wzxi9yR+g2JB/fUWjQNE8vD+jPwr7fz+YC+ALix/vGqgnbMdQKNqgGBhg8qvmhY0LBybeom3hg0DP3fC4zt7j/sZsBT+TyeGczOgGA49lkMisLvR8wUu5Qa6Y8v93yIm67rFFU2//ZvqJbUt1s6ibVoy2TKUDOWnJzMtGnT+Ne//sW4ceOaujjN1qOPPsrXX39NcnJyUxdFCAAqKnVy9pWxdVU+luIyAopK6HJhZ1I3l1CpKljQqbRYMGk6munoD10/t0qx2XPVoJDimg8ja19SM23zYxv5+SOdgthwbE/+hrm4nGDlMBZdIz+jA5mRz9LRkoMvHSklxHifmUr6lW47ZktVP+XzfNrRzlWChoUCOlFOO/plH8ZXdfNL1y785ohkiNOJCRXF5MZl8uGjPvHM6Z+Ar+bip0/eRMUCKOiYqoYMupmDoYGcHX0jw8ctoXekH7/6hHKkY4+qH/y1jZTMpqrXtKppRJiqBgcVx8xIuu9HFy9sqLpSYTXpLLzCxKXdz9zqS0KIlkWmDDWcDAjauEWLFlFUVMS1117b1EURXubWdCymEx80VU3/4/eXHFyPp2lVZxFNJgVnlovPX97L4R1FuN06BVYrqslM+9x8eu87gEXV2PlmGru7hONq54+iaZT6+hJc6aLMYkZVFHw0jbDiUjqUlLInuB2VFjP+lS5U35o/bA+1b+fxb79KF/2c2RzZWoa9YCc+lBPPavz1cgBUwIwGbljRsycLeiTRLTufS37fTbBajum4+wVAZ1GnoSRmFmHVdKp/qfug8978+cwcksjU8aP55JNPqTB35LLJk9FRqLQc/UpZF96FhEOHPLaqoBBVUszbCz6mXUU5LpOJrRdexogIE/euWMFv3brw5KhLPN9TXoleedwUDqulamAA3PeDi+fXV2fWqVRh1OcaT52n07u9iSt6Kg3vv7peNQAxy6BCCNE2yICgjVu0aBEHDhyQAcEZZjabiY2NxXyaPyicRTqvbdBwFsPUOIWB4QqvbtD5dq9GTimcGwEXd4N//wqFlXB5D4i2w8xNsL8AMIGqgVurOtHaKQDK3ZBTVnWyVQHMQDtf6BkCSZ0V7hqo88VOeGcz7CqoKocCWM3gCIK4jhDsC3GhVenz0yDQB+LDYITDxKXdlXoHGmfamYp3bdyqzm9bKvh1VSGHdxTjE2Qm/bCOXqzi53JjV1wohZW0LylF9/OlOMAfl4+FUrOZIRkHsahVP7ZNuk6PfQfZ3y2csoCqKTtmIPCY6UB+LheO4hK65eXjUhRsZRVYVZVKHzM+rqp8eSGBVNoDiS4u5aDVhy65Rxi8az/h2cWYK3VcmAimEDMWwPeP/eiAi2dHjOHvY68z9rcwqRdzZ85F1xWPG4MrTGYsFT74aW40j68JhXP3ZXHZvncp9vEhyFXEhk4OKiw1b/B1K9VpOsofA45NnSL493cLCHBVzf/30TSe/mEBRXTAosO5+/Zh1TReGT6Mw342zGWVUFKJarF4TqeqdIPZxMNPpfK8ORoUBavbxaSU1ZRYfflqwBAe+gVAQwHC/OAvg+CRc4+py48pMGc5BPgBOuzNBnsA/LgZDhUczRfoC+0DIfMIBNlgSE9I2QsoEOBbNTAZGQ+DoqHcBet2QaAfjBoIt/6valsKENm+6oPYPhBevQ0uHFB3pztGY/Zt4UliLdoyGRAI0QgURcFut5/WNlJydAbPVan44/fih9t1OgXAwZKjebbnwdtbjv77td+P28gxJ35VDTKKPF+uuvET8irgt4Pw20Gd1zbWLIsOVKiwO7/qrzbf7YP/rtOIbQ8rrjYTFuC9QcGZiHdtjhSqTH/+MGX7SulWUIQJ2Ovvx2E/XwIs4DKZiMw6QlB5BQA+JaUouk5+uyB83SqqxQzH/OBXgO47szgQ2ZGdHdtz7M9ok6YRUlJq5LO6VcIOHcFa6UY3weHQIDSzCd2k0DsjE4vWmd7lLvqnpqNo4FNefZFcIZfOZFFCd9KP2bOVv676id+69OaLuCQANsRE4Iw2Ebvbs96720VwyL8jJT752FyeVw90zLiw4O9yAxaGHEwnPjuTTWGRRp647CySDmZU1QsVBfi2V1/eO2sIn3w864/tgBtf3LoPFtzoWFCA6T+v4ubVa4m5856qYYyftWo0q+lVgwJFqfp/fzNPljjA4gKbBXtZCR8mDK9xH4YOHCqHf62GhXvcJF9vgYfmwtNfnFwnKK6o+gPIL4Fvf6+ZJ+1AzbTXl3gWwplX9f8H8+Gif8H7f4Xrz693943Vt0VNEuvWRK5qN5QMCFoQTdOYPXs2a9asISMjg4KCAjp06MB5553HHXfcUeNA9vXXX/Ppp5+SkZGB2+2mQ4cODBgwgHvvvZeQkBDGjRvHgQNVX2SJiYnG+958802Pf9cnNzeXWbNm8csvv3D48GHsdjvDhg3jjjvuoH379gB89tlnPPPMMzz//POMGDGiRr3Gjh2L3W7no48+AmDNmjUsWLCAbdu2kZubi4+PD/369ePmm2/mrLPOOpXweY2mabhcLn7//XcGDhyIj48PJpMJTdPQtKM/rkwmEyaTCVVVPW5iq05/dNXRwUC1YwcDzVVqHjyzVuXZYUfT6qqr2WxGURTcxy1RWX2G7vjVPupKB9iwYQPx8fFGHkVRMJvNNeJeV3p1GY9N//DbYrIOuOhdWoYJyLL5kRXgT7eyqh+ItooKYzBQLbC0jMKAADSziZyOdro4s43XdMDZuSO4XcTu2c+hTqG4fCz4qCrti0swHxMb34pKrJVVcanw9UH1OXrWUgEc2bls7tGNszbuwbe8ssbX3wEijhkQVPFzu3l1wVy+6RXPqOQ99MnIxSfPBw2Tx3MEeuVnsc5WhEmteXNlJVYO4UBBI5gjdKSIZfNf55/njuGXiJ6YFJ2ehXl8G9Obi3enY6WE1wcN41+XjiWiIJ8KsxlfVaWUYCrxN7b7+rCzSQ8JZfC+/QzflWrU85x9u3hh+RcMOuTk18juTL/karaGRYJbh3bWqpGqopAdZK9uYIwnoR03VWj9ISjJLsT/v181+c8F/Y6ZqNecB9Te96rTNU2r0bcb+/NksVjQdd0j/Ux8nk5U9uZQJ1VVjeO2r69vq6hTfeneqpNMO23+ZEDQgrhcLj744AMuvPBCRowYgZ+fH9u2bWPBggX8/vvvzJ07Fx+fqnOOixcv5tFHH2XQoEFMmzYNX19fDh06xKpVq8jLyyMkJIR7772X1157jfz8fGbMmGHsp3v37iddpoMHDzJlyhRcLheXXXYZDoeD/fv38/nnn5OcnMwHH3xAYGAgl1xyCS+88AKLFy+uMSBYu3Yt2dnZ/PnPfzbSFi1aREFBAaNHjyY8PJzs7GwWLFjAX/7yF958800GDRp0mtFsPGlpaRw+fJjCwkI2bNiA3W7H4XCQnZ1NTk4OmqbhdruJjo7G4XCQlpZGdnY2vr5V0zuio6NRVZWtBwPhmNVgWpK1+0pItm2noqICX19foqOjCQsLY+3atR5fDBEREYSHh5OSkoKqqsaXTEJCAlarlbVr1+J2u7Faq1azSUxMxOl0cvDgQWMbLpeLoUOHUlFRwYYNG6isrMTX1xebzUZ8fDzp6ekcOnTIeNCQzWYjOjqagoICnE6n0R6RkZHExMSQnp6O0+nE19eX31PDMOGL5Y8vyswAG6GVR1e3OXb1n2oKYNY0NLOJ3JB2ODKzMelVv1F3d+1MhY+Jg+EdcVss+LhVgioqsLrd6KaqmfzVS78px/wW12p5SJKPy42uKPiVqgSU1lzz//gHhRkxL8zn3++vYMjODCy46ME+qiYvQfX6QAoagw7koOKDSiXmY9YQ0v/Iq2Min/YEc5CgChfXpqbwaf8kjvj7o5gsbAvuTruOFlIjAngrbjBFZl92hHbm/y6+nKe/XegxGJibNIh/j74E3aTw/rkJ9N8/BB0IcFXw1Vdv0aG86srJcOduvvp8Jr1vewRN+eM+Ar+GfY0t/H4z17iPv2eiCZRWsGrVKnx9fQkNDSUmJoaUlBTKy8uNLHa7nS5duhjHEk3T0HWdXr16ERYWRkpKCkVFRcbnIzY2lrKyMpxOp/EjsaKigqSkJKxWK8nJycZnEqo+T9nZ2ezdu9f4fOi6Tv/+/VFVldTUVOPzERwcTHx8PLm5uWzfvt3YRnBwMHa7HVVVcTqdxj4dDofxecrKysJsNmMymXA4HNjtdnbv3k1ZWdXN8ZqmERYWRo8ePdiyZQtlZWVGOWNjY7Hb7axevdr4fgPo3LkzERERrF9fdQOJy+XCbDYzePBgKisr2bhxI7quY7FYMJvNxMfHc+DAAeMkWHVdhw4dSm5uLnv27KG8vJyysjJ27dpFv3792LZtG8XFxUb+gIAAevXqhdPpJCcnxzhedevWDYfDwfbt28nLyzPao/pYnp2dbdS1oqKC+Ph47HY7GzdupLS01IhlXFwcJSUl7Ny502gPVVXp168fVquVlJQUoz1sNhtJSUkUFBSwadMmYxs2m42wsDDMZjN79uwx9hkWFkafPn3IysoiPT3daI/Q0FDCw8PJyMigsLDQaI+QkBD69OlDWloaBQUF9R7LQ0NDiY6OZuPGjaiqarTHwIEDsVqtWCzyc7O5kycVN2PHrzKk6zoVFRX4+Xk+lfSrr77iiSee4Omnn2bkyJEA3H///axdu5YffvjhhB/E22+/nQMHDrBo0aJTKuOMGTPYvHkzc+fOJTw83Ejftm0bU6ZM4eabb2bq1KkA/P3vf+fnn39m6dKltGt39KbIf/7zn3z33XcsWbLEuKJQVlaGzeb5Y/jw4cNcddVV9OvXj1deecVIb26rDFVfIdiwYQMJCQmnfIXgiV/d/PPXpqjB6fv3OfB/g4/+2xtXCNatW0dCQsIZvUIw99sS3l1QTPfiUkLLylnfwU5Hlxtb9Q3Fmkbs/iyPM/sus5mDHdujKQpFvlZ8Kt3Yi0ooCrBRZvMloKSMkgAbFlUlpKzc40y1j6sSi0vFz+1GR8eRfggft4rbYqbI7s+xDrcLosTHxqXfpwBH7wmp5mA/vUitcSZ8d0AngktK6Eg2OmYUjxw6oHKYTjjpA0AXtmLDTRntyaXmQ5vC2IeCmQrFxo1XTKTQauODT7/C548YVppNjL75GnZ07mS8Z0JKCm98VXXMURWFAf+YQW5QoMd2gw8WMHz3dr5a+HaNfQ6+/n7WR3aDEN8arxkUalwhAMi9A9r3noaSmVf3e71AD2uHmllVt/quEBzft+XMc+NdIag+bssVgpZ9hSBLqf8pxBF6/U8zbktkyNaCKIpiDAZUVaW0tBRVVUlKqpoPvGXLFmNAEBgYSHl5Ob/88gsjRoxolA9jcXExv/zyC+PGjcPX15f8/HzjtYiICBwOB7/99psxIBg7diw//PAD3333HRMnTgSgtLSU5cuXc8455xiDAcBjMFBaWkplZSVms5n+/fuzZcsxk+abIZPJZBwcq8/CVKdX//+x6rqB7f/ONrP2kMqiP+Z3W83w5Lnw7Lqqm4KN9ytQy8yOJjMuRuHeJBMWS80+V1dd6xq0nmy62+024n38a3XF/WTSrxnZjh37VNZt1DHrGlHFpWQF+mOrqLpKoJlM7AvrQNfsw5h1nXIfCzn2YMotFirNZnRFodJqIbuj3dh+iX/VZ9jP7a7xY73Cx4qmuLEogK5zKKI99rxibKXl+BeWURboi2YyUWSz4VOicX7K0eVCtT82ZtZ1LKjkEcZG2tGBgzhwYkajHF+CSsrpSNU0JqVGCRR+7xRDZU4XnPZg5p7Vm6Kgs7h4zx5u27gJBQ39uMfXKOi48cWs60xfu5pK3c8YDABYVY3z92Z4DAi+6dOHvG+/p31ZGWU+lhqDAYBSPx+yAtrVSFcVhUNBwVX3ChRVQpC1Rp6qgtXsf5fFQIcAC/zwKJz/SNV8/iaiLPi/k+qrmqbV2bcb6/MEVd83taWfzufpWHWVvanrVB3rE5W9pdXpdNLPVJ1E8yct18IsW7aMuXPnsmPHjhoj8erLfQBTpkxhw4YN3HfffQQHB5OQkMC5557LyJEjCQgIOCNl2bt3L5qmsWDBAhYsWFBrnsjIozcaDh06lPbt2/PNN98YA4Iff/yRsrIyxowZ4/E+p9PJ66+/zpo1aygq8rwTtiXMRTSbzcTFxZ3WahVmk8LCKyyUuTTSjkAPu0KAVeG+wfDzfo3fDmhcFqPQs4OZfQUa3+3V2JWvMKSzQt8OGrM3w2c7q2ZVDO5UdQOySam6uXh3QdVCLcG+cG4kPDJUwdeiEOyr4CyCdQc1egXrvL8NvtxVNV27ow3+lqAwI8nE2gMaGw5BbAeFED+ICYbsMgWLAl2Dvd8+ZyLetfG1Kjz9l/YcPNyOwnw3+37Pp9BqZdnaCkoyy/E1wXl9bfi8doCD7QMp6WinzMeHij+eNmxSVaL3HWRvVDhuHwtmt4pJ03BZa67KA+A2mfBXVUyqSsihPHxcVZ9x1WzCt9KNb54bHdB93fTblWu8T1NAM4FV1/DRVSqx4MZMKVba4ySNnpTQjjJsnMXPx+zx+OsK8MxF4+i/tZgXzx5EsW/Vj+2Vjt44gzry8MpVFNLOeI8/Bbg5+mM+srCQ0MIcNDzrd1bWgaM3BANlPj7854JzuXvVGiIKiolzZpHiiDimWDp6pUZKmIOF0f0Zv+foSYC348/F2a7qOQoxSjl7FR9UvZY+p+lgUrBZqlbjmpFk4k/d//jB09sBB96FzMNQVFa18k92Afj7wr2zYf0e6NAOzupedTPw+t1VofrbOLjvMnj9G1ixrepDND4Jbjwf1u6CnVlgs8Jlg6ti9MD7sHYnFJdVrTYU7A+XD4Z/TIQwe6194HiN1bdFTRJr0ZbJgKAF+fHHH/m///s/+vXrx3333Ud4eDhWqxVN07jrrrs8Lt916dKF+fPns3btWtatW8eGDRt44oknmDlzJrNmzcLhcJyxcv3pT39i7Nixtb5WPa8Rqs4cXHrppXz88cfs37+fqKgoFi9eTLt27Rg+fLiRr7S0lNtuu42ysjKuueYaevToQUBAAIqi8N5777Fu3bozVvbGVD2P9HTZfEzEHzdTY1iUiWFRR8/mdA02cVv8sWd3TPznfPjP+Q3fX0QgDO5c9YU4Mrr2PEMizAyJ8EwLOsHsDW84U/GuTacOFjp1sNArpuos94TjnhNYNLEjez/cTcHBMg4GVLCj0E3BwQrKfXzJ7xhMj4wDuC0mdkWGo/qYMasqZRYfbC7PqwR+5RWoJhOB+cV/3CMAmsmM9Y9lOqHqp7i9spzl8d3ol55NUYAvqgVCSsqwulTCi0qw4UJHQUfjEJ2J43eslFFEO2yUHrNHjaP3D8DWMAebQ7qz4jwfis2eP+rn9o/n3z//QEe9AjcKgeTgRzH5dGFvSEd+iYkm6shhHIX7KDtuQLA8NqZqVyYdRddR3Bpfde2Fb0UxhcHtKPKx0OVwHhkd2oOqYS6swPTHPP9rRt/A5fu2EZ+dyerI7izsGWdsd9e/O5Bf5ibk1eMukSmw6hqFbsEmIoJqnvU0RHY4+v/VP9C//L+681ebcVnV37HO71/1d6w3pta/rZPQmH1beJJYtw7N6KJ5iyEDghbkm2++wdfXl5kzZ3rcR7B3795a81utVs477zzOO69qJYtffvmFe+65hw8//JC///3vwOmdbXc4HMacwSFDhpzUe8aOHcvHH3/M4sWLufzyy1m/fj1XXHGFx0F47dq15OTk8MgjjzB+/HiP97/xxhunXF5vUlWV5ORkEhMT5RKqFzR1vIN6tmPAozVvdD+cWsChnUXodMBxVnsCw/3464TNxBzMxlRaiW42URwchGo2EXykEJfVSnanDlgqXeiKQnmgn7HS0LHMus6afg4WnNuHAQeyuWD9Tn568AIevzGEoLJyto77jsIt+VQovuiKHyu1CwjWi3DjQ29+J5ScP7ZUdc9A1TBD5534C9gW2QlTSQWWoqrVk6KPHEFVFHICbASQhRkwc/TG6o8T47lrwlXGjc9XbVjPS58s+eMpxVDsa6Hwjysijrw8rkzZwdbOQVxgK2LqDQ5Klx/i26+Xc23aGj7sG8/0kVd4DJI0s4V5fRKZ1y+p1tjbbRZ+vVZlzBca+RXQwQaLrjRzdsQJBgItSFP37bZEYi3aMunxLUj1/L5jb/zRdZ133nmnRt78/Pway5DGxsYCUFBw9KE7/v7+FBYWout6gwcHdrudc889lx9//JHNmzczYIDng3Z0XSc/P5+QkBAjrXfv3vTs2ZMlS5YYVzeOv7pQfbn2+Pvd16xZ0+zvHxDiWB1ig+kQG+yRFlRaigkIKK/ArGoEFx5dSzbTEY6uKJT4+xFYVg4mEy6rBV05btUhRWHI/iwCd7sIqKhkwDkh3Hp/9U39Vs5KmUjR1nwOfppO0W85+EcH0uVv/bH1CGJF0By6lG4lWq9++IBO9fm0koCqz55m86FdbgGzFi5mSFYWADtCOmDWNY/Vi8rNFh4eM9ZjFaT2hW7UY64QBFao/OOb5Wy4oSOHbIH0z9/GSz//jLL9RYiNRLuykhH93idD6cLBIHuNuxp0ALcbjptmZT9mzYGhDjN5f5VpHkKIKnqNI4mojwwIWpCLLrqIH3/8kWnTpjFmzBjcbjcrVqzwWKau2p133klQUBCDBg0iPDycoqIiFi1ahKIojB492sjXv39/fv75Z5599lni4uIwmUwkJSV53OB7Ig8++CC33nort912G2PGjKF3795omkZmZiYrV65k9OjRxk3F1caMGcNLL73EnDlz6NKlS42BxMCBA+nQoQMvvfQSBw4cICwsjLS0NL755ht69OjBrl27TiF6QjQPIcFmKISKAD9shaXG19aRQH8WxHbHZbHQ09+Pc9LSMQG6yURhSACB+aWYNR0dKAnyo1NxKWg6XaP9GPLxBTX2E9TPTtBjNa9aDFk3npT4IuyuI7Tn6Eo7LsXMoj5/POPDbOKvmzYagwGA3kcOc5AYOrMTEzo6CjsDe3DE3/OG4ItTa34+HQWFjN+yE7e1lFs2/0Le366gQ2zV/UWmQCs9d02hcOEezv7hABZdxa0c/XE/yGGmWDOx7ZAbLCb4Y/Dxwy0tc0leIYRojmRA0IJceumllJaW8tFHH/Hyyy8TFBTE8OHDmT59OhdddJFH3okTJ7Js2TK++OILCgoKCA4Opnfv3jzwwAMeDx3785//TGZmJj/88AOff/45mqbx5ptvnvSAoFOnTsydO5c5c+awYsUK48x/eHg4w4YNM1Y9Otaf/vQnXn31VUpKSrjhhhtqvB4UFMRrr73GK6+8wieffIKqqsTGxvLyyy+zYMECGRCIFu2qB2L46q4NuH19KG4fhLWsgn3t7Szp3xP/ShcJWQdph0ZOxxDCj1Rdzav0s5IX7kOFYqZbei6hh4opCvTlQFQHxn4+rJ49erL1ac+QyrvQbngVbd7PKG6VSnsgZSUafhVHL0Mk7s+s8V4VX/YyECulVOKPb4EPMTk57A4NNfI47cEMwenxPgUYtTMNq60I99436NDV8/ii+JgJntCTSyb0ZEeBxu2flpJ1xM2Uwb5MH+6H2aSQesjNrGQ37XwVpg+10sGLT8IWQojWTp5DIEQjqF4bunr5UdG4Wlq8t39/iPlP7EQB8toFktwplKSt+zhv+z7Muk6pvy97e3ZCNYHF5cKiapT6WNgXHobbx4JfhYtyXx+uvTqES8d3qHd/J2X5Vmbev42VUd1Y1zWSO1eu5qoNmz2yVOCDC8+7xzd07cjkaddWLWEFDMzIYsHrHxyzOKmOCRXN4iLk70kEPHH5mSlvG9HS+nZLJrFuPZzKE/XmcegPe6EkLUfruOtKiGaosrKy/kzijGlJ8e5zcTgTX4gjs1NH8toF0SszhxHb9hoPOPMvrcCxNwfV6kNm+xBy/Wx0zswlsLQM3WSizM9Kb7/KMzcYADi/H4PeupSpK3/jx5feZeymHZT6HL2IrANWKjEd9wTkMsUXs370vqbfu0Rww5QJKKgoqJhQMePGbi7B/2HP5YXFyWlJfbulk1iLtkqmDIkaSktLKS0tPWEes9nscbOw8KSqKikpKbJahZe0xHj3TWjHm/PakZfj4vNxK2q8HlhY9fS53nsz8S8uQwf6Fh2hzOqi/+hOXHxrzBkv0+BB7fjml6k88XY6rqx8sjoF8+rr8wiorL5FT8FGGaX4o2PiUKA/uq+Oety67Stie7C7cyD9DxxCQYdgH/x/+z8Uv9qfvyDq1hL7dkslsRZtmfR4UcMHH3zArFmzTpinc+fOLFq0yEslEqL1ah/qQ6Fm5rhHTVAS4IficmMrqRoYKMB548Ppd2+/Ri3P6FgfRj/Xy/h31kues0oVIJgj5JuCsOGm55GaZ1RtlZV0LcrDclk/fB66FNvgTjXyCCFEY5FVhhpOBgSihjFjxjBw4MAT5jn2gWNCiNPjMikcsQcSkl8MgGoysbNXJKr56HKjlRYzPW6q40lxjarqGQXHMqHy1YCuXORMp1d2Lrf/soa3zju7Krem849vv6PLt1NQzunRBOUVQgjRUDIgEDU4HI4z+iTjtspslnXRvaklxzv0SCEbEmIIOVKMb6Wbwx3a4bJasFVU4LaYUTSdLhOj8e3g/aU21djOWLZnHZOiUeCn8LdNP5I9fRyVr23iiUXfcvX6TWztHE7S3v2c9UA/GQycQS25b7c0EmvRVskqQ0II0cR++PNKVh6wcqTD0YeYmVUNW0UFSkUliWPDuOKeprg6ABXpBWQOnYvvoRyslBNAPmbFTdmNwwh+53qKZm+mcMa3WIpKUEL8CFl2I9aEiCYpqxBCAGQoT9abp4v+Dy+UpOWQAYEQjUDXdeP5D7J8XeNr6fEuzSzhu8t+ZE1YJC5fH0yajo/bjdlq4t6ZfbCHNe0UPV3TKUs+hOZn4tPln2Py9eHaKTdgtVqbtFxtQUvv2y2JxLr1kAFBw8myo0I0AlVVSU1NRVXV+jOL09bS4+0fGcBla8dy32NRXHJRINE9fDl7bCj3v92vyQcDAIpJwX9wJ3z7hOD2M+Mf0g5N0+p/ozhtLb1vtyQSa9GWyT0EQgjRDCgmhY5JoVyaFFp/ZiGEEHWSVYYaTq4QCCGEEEII0YbJgECIRqAoCjabTeaheonE27tkSoX3SN/2Hom1aMtkypAQjcBsNhMfH9/UxWgzJN7eVVRUJMszeon0be+RWLceMmWo4eQKgRCNQNM0srOz5cZLL5F4e5fVapVYe4n0be+RWIu2TAYEQjQCTdPYs2ePfLF4icTbu/z9/alrxeqfMjQW7dbqfF00jPRt75FYi7ZMpgwJIYQ4bUfKdTq/oVJxzO0FP0yEC7vJ14wQwttkylBDyRUCIYQQp23Q+56DAYCLPmuasgghhGgYGRAI0QgURZGnXXqRxLtxHT/9x+Vy1cizr7D295a5ZPrF6ZC+7T0S69ZDP4k/4Umu5QrRCMxmM3369GnqYrQZEu/GkbP5MF9P/hmtoupHfdRF4XAWlJSUeKwydKC47mVI7/tJ4/VL5NzTqZK+7T0Sa9GWyVFaiEagaRpOp1NuTvMSifeZt2TKLyy8YoUxGADY/8MhWO6Hn5+fR6wvnFf3+bb/pTRqMVs96dveI7EWbZkMCIRoBPLF4l0S7zNrx/x0sn7OrvU101p//Pz8PKYR7cz3UsHaIOnb3iOxbj10lHr/hCcZEAghhPDwy/9tPMGrNb9I6/tqnbvVfVrlEUII0bhkQCCEEMKQ/NLWBr+nvp/7f19+SkURQgjhJXJTsRCNwGQyERoaiskkY25vkHifOZvfSqs3T0VFBc6sSmYtzsennQ8QfML8JXKB4JRJ3/YeiXXrIVOCGk4GBEI0ApPJRExMTFMXo82QeJ85WuWJF+RTUNj0c0duOuCHZvKHHEDX4QRLNQb5nOFCtiHSt71HYi3aMhkGC9EINE1j9+7dcnOal0i8veuLoLPQjj2LWs+67c7SRi5QKyZ923sk1qItkwGBOKNuv/12xo0b19TFaHKappGTkyNfLF4i8faum5dv5LJ1qVjcdT9/QJwZ0re9R2LdesgqQw0nAwIhhGiO3Cq8sRT+/j4cruMxwGdY5vralxo9XueCEsatT+OFOUsZtDuzasqQEEKIFkvuIRBCiKaWlQcBvnDN87Dk95qvP/tV1X9NwNBecPc4mHTumS3CmkMsvW5Vg97j51LJCmlX75QhgNu/dTPzEjPKSeQVQgjhXTIgEM1eeXk5FosFi6XldFeTyYTD4ZDVKrykRcXbrcLUN2HuCqhs4PI7GrAqDVY9Dzx/NN3HDLdeDK/fflI/zo9VUVjJ19esIH9HUcPKQtX45P6vf+VfV11AiZ/1hHlnbYZZm1VWXQPnRLacz3JTa1F9u4WTWLcecs2y4eSo3MZVVFTw3nvv8e2333Lo0CF8fHwIDw/nnHPO4e677wbgu+++Y8mSJaSlpZGXl4e/vz8DBw5k2rRp9OzZs959bNmyhc8++4yUlBQOHTqE2WymR48eXH/99VxwwQUeeR999FG+/vprli1bxiuvvMKqVas4cuQIs2fP5tZbb+Xiiy/miSeeqLGP//znP3z22WcsWLCAiIiIMxOc01D9xSK8o0XF+7b/wXs/ndltulR441uIaA8PT2rQW3+c/tspDQaq2UsrGLwrk5/6dz+p/Od+DK4ZOhaTXCk4GS2qb7dwEmvRlsmAoI37z3/+w8KFCxkzZgx//vOfUVWV/fv3s27dOiPPp59+SnBwMFdccQUdO3bE6XTy5ZdfcssttzB37ly6dOlywn0sX76cvXv3cvHFF9O5c2cKCgr4+uuvuf/++3niiScYNWpUjffceeeddOjQgVtuuYWysjIcDgfDhw/np59+oqioiKCgICNvRUUFS5cuZfDgwc1iMKBpGm63m507d9KzZ08sFgsmkwlN0zxuVjOZTJhMJlRVRT9mDnZd6WZz1XQLt9vzrLLZbAZAVdWTSrdYLOi67pGuKApms7lGGetKry5jc6mToijs2LGDHj16GGf3mmudmLeq0W5n01/9BvXBK066ToWZxWT9mnNK+9rYrROfD+lDbpA/HYrLGvTeX50q5/zxUW2u7dRcPk+6rpOamkrPnj2Nvt3S69Rc20nTNOO4bbVaW0Wd6kv3Vp1kqmDzJwOCNm758uWcc845PPbYY3XmefXVV7HZbB5pY8aM4dprr+Wjjz7iwQcfPOE+brnlFqZPn+6RNnnyZK699lreeeedWgcEMTExPP744x5pV155JT/++CNLly5l0qSjZ0F//PFHioqKuPzyy09YDm9JS0vj8OHDFBYWUlhYiN1ux+FwkJ2dbaxg4Xa7iY6OxuFwkJaWRnZ2Nr6+vgBER0ejqirZ2dmUlVX90KqoqCAuLo6QkBA2btxIeXk5ZrMZk8lEXFwcLpeLzZs3G9OqNE2jR48eBAYGkpKSYmzD39+fpKQkCgoK2LRpk7FPm81GeHg4iqKQnp4OgMvlIiQkhP79+5OVlcW+ffvQdR2LxUJoaChRUVHs2LGDkpISo+4BAQEMGDCAtLQ0CgoKqKiowNfXl+joaMLCwli7dq3HF0NERATh4eGkpKSgqqrxJZOQkIDVamXt2rW43W6s1qrpKImJiTidTg4ePGhsw+VyMXToUA4fPkxBQQGVlZX4+vpis9mIj48nPT2dQ4cOGT+mbDYb0dHRFBQU4HQ6jfaIjIwkJiaG9PR0nE6nERuHw4HZbCY/P5+CggIjlrGxsYSHh7NlyxYKCwuN9oiNjcVisbB582ajrpqm0bVr1z9irGM+kx3uGC6LwobkZOPfvr6+DBo0iPT0dHJycoz2cDgcOBwOtm7fCgoNvr5+KDiAN0cmopqrYnrIHtig9x/cuYnkLBdQ9aOmd+/elJWVsWfPHqM9QkND6dOnD1lZWezevdtoj9DQUPz9/SktLSUnp2owU1FRQXR0NFFRUaSlpZGbm2u0R3R0NP7+/qSmpho/VjRNIzIykq5du7Jx40ZUVTViExcXh9VqZdWqVcY+AaKiorDb7WzevLkq1i4XVquVIUOGUFBQwNatW43Ph81mo0+fPmRkZJCbm2tsw2w2k5SURFZWFk6n09hnaGgoMTExpKSkUF5ebuS32+106dKFAwcOUFhYiKZp6LpOr169CAsLIyUlhaKiIuPzERsbS1lZGU6n0/iRWFFRQVJSElarleTkZGOfUPV5ys7OZu/evcbnQ9d1+vfvj6qqpKamGu0RHBxMfHw8ubm5bN++3dhGcHAwdrsdVVVxOp3GPh0Oh/F5ysrKMtrD4XBgt9vZvXu3cXzTNI2wsDB69OjBli1bKCsrM8oZGxuL3W5n9erV+PgcfaBF586diYiIYP369UZ7mM1mBg8eTGVlJRs3bjTaw2w2Ex8fz4EDBzhw4ICxDV3XGTp0KLm5uezZs4fy8nKjTP369WPbtm0UFxcb+QMCAujVqxdOp5OcnBzjeNWtWzccDgfbt28nLy/PaI+6juXx8fHY7XY2btxIaWmpEcu4uDhKSkrYuXOn0R6qqtKvXz+sVispKSlGe9hstjqP5WFhYZjNZvbs2WPsMywszPg8paenG+0RGhpKeHg4GRkZFBYWGu0REhJCnz59TvpYHhoaSnR0tPF5qm6PgQMHYrVam2DKrwxAGkrRdVkeoi0bP348mqbx0ksv0aNHjxPm1XWdkpIS40t12rRpWCwW5s6da+S5/fbbOXDgAIsWLap1G+Xl5cYX3htvvMHnn3/O8uXLCQys+kFRPWXoww8/pHfv3jX2f/nllxMUFOSxz2nTprFz506WLl3q8YXRVDRNw+VysWHDBhISEvDx8ZGzSo1cJ4B169aRkJDgcUaqOdZJe2AO5ucW1ij/maC9MRXt1osaVKcVM5JJX5x50vvIt1n5YHg8m7p3PqUy+puh4K6j/26u7dRcPk+aptXo2y29Ts21nVRVNY7bvr6+raJO9aW31isEO5Xn6s3TU7/PCyVpOeQKQRs3Y8YM/vWvfzF58mQiIyNJTExk2LBhDB8+3DhDkZqayptvvsn69euNsxzVIiMj691HXl4eb7zxBitWrCAvL6/G68XFxcaAoFrXrl1r5FMUhcsuu4z//e9/7Nixg969e+N0Olm/fj2TJ09uFoMBqDpgVh8cq8/CVKfXdrOaMZXkJNPrOtPSkHRFUWpNr6uMDU33dp3cbrcR7+Nfa251Mv/3JghtB/9dAEdKQD2NNc9tPmAyg90fnrke03Ujal1L+kR1GvHfJAId/myeufOkdrm6d5dTHgxYgCN3mbBYTr89mkvfg8b9PGmaVmffbql1gubbTtWxPlHZW1qdTif9TNXJ2+Q5Aw3XPFpONJnzzz+fhQsXsmrVKjZs2MDatWtZsGABgwYN4n//+x+HDx/m9ttvJyAggFtuuYVu3brh5+eHoig8//zzNQYIx9N1nenTp5Oens7kyZPp27cvgYGBmEwmFi1axNKlS2t9CIyfn1+t2xs/fjwzZ85kwYIFPPDAAyxcuNC4ctCcVE9VqO0AK868FhfvB66s+jve/xbDPbPBVccgIb4rPDoZxiaC5cxMPDJbTQy+fwBJ9/Xn3Z5f1pvffYoxfuNimDZQvnIaqsX17RZMYi3aMjk6C4KDgxk9ejSjR49G13VeffVV3n//fVasWEFOTg6lpaW88MILJCYmeryvoKDAmCtZl507d5KWlsZtt93G1KlTPV776quvGlzWjh07Mnz4cJYuXcpdd93F119/Tf/+/YmJiWnwthqTyWQiLCysqYvRZrSaeP9lTNVfteIyKCyrWj2okSmKwmULL2DB+BOvgHTOjgyWDOpBpU/Dvj6mxjfWnROtW6vp2y2AxFq0ZTIMbsNUVaWoyHO5QUVRjLn7BQUFHjeaHevLL7/k8OHD9e6jrvfv2rWL5cuXn1K5L7/8cgoLC3nqqafIzs5udlcHoCq2mzZtqnWuuzjzWm28A21eGQxU69g3pN48HUrKOW/rXkKKyzDVcnWvLrLKyKlptX27GZJYtx46Sr1/wpNcIWjDSktLGTVqFMOHD6d3796EhISQlZXFZ599Rrt27Rg+fDgVFRW8+uqrPPLII1x11VUEBQWxadMmfv31VxwOR70Hzu7duxMdHc37779PeXk5Xbt2JSMjgy+++IIePXqwffv2Bpd76NChdO7cmSVLluDv788ll1xyqiFoNLquU1ZWVmMgJBqHxNt7dGBFv26oDbhC0E6+aU6Z9G3vkViLtkyuELRhfn5+XHPNNWRmZvLBBx/wzDPP8M033zB8+HDee+89QkNDcTgcvPLKK0RERDB79mxee+01CgsLmTlz5kldWjWbzbz88ssMGzaMr7/+mueee47169fz6KOPct55551SuU0mE5dddhkAF198Mf7+/qe0HSHEqdC50L4Pqn80ncSPJ//mcb+/EEKIOsiyo6JFmjNnDq+++irvvvsucXFxTV2cGtxuN8nJySQmJjabVRdaM4n3mfPOgC/gBGsF6Oi0e0rl3JHj2XTEynmREPzqiacORQVCxjRpl1Mhfdt7JNatR6ryQr15YvUZXihJyyFXCESL43a7jSlHzXEwAFVXRmJjY+tcmk2cWRLvM2f4Y2fVm6e4uJjQABOjo020863/a+SiEz/MXJyA9G3vkViLtkwGBKLFyMzMZOnSpfzzn/8kMzOTKVOmNHWR6qQoCna7XW6k9BKJ95nT88qazwA5XvVzH07WGyPlq+ZUSd/2Hom1aMvkKC1ajA0bNvDwww+zbt06brvtNi699NKmLlKd3G4369atq/HURtE4JN5n1qgPzq3zNa2Dm+DgYI8FBeo7n+rnI181p0r6tvdIrFsPWWWo4WSSnGgxxo0bx7hx45q6GCdNlq7zLon3mRM5NJyek7qwc35GzRf/XICi2D2S+nWElNzat9VOZl+cNunb3iOxFm2VnLYRQghRw/CnE7lmzZ8I7hmIYoGASBvjF4+AWh4ivmxS3Wfb3h7ViIUUQghxRsgVAiGEELXy72hj4pKjz/lwuVywoma+sAAzUPs0i17t5dK8EMK7ZEpQw8kVAiEagdlsJi4uTlar8BKJt3cVFhYaTyGv1stee974cGmT0yF923sk1qItkwGBEI3EarU2dRHaFIm392hazecO7LjVgiPw6L9NwJIr5SzdmSB923sk1qKtkgGBEI1AVVWSk5PlBjUvkXh7l91ur3VQsH+ahaK/mkm72YTrXjOjouVM6+mSvu09EuvWQz+JP+FJ7iEQQghxxgRaFXrKfQNCCNGiyBUCIYQQQggh2jC5QiCEEEIIIVoNWWWo4eQKgRCNwGw2k5iYKKtVeInE27vy8/NrrDIkGof0be+RWIu2TI7oQjSSysrKpi5CmyLx9h4ZDHiX9G3vkVi3DjpKvX/CkxzVhWgEqqqSkpIiq1V4icTbSw4c4cK3fueaB5djuvFVqHQ1dYlaPenb3iOxFm2ZDAiEEEJUSd4Ff5kJby+D45cVLSnH0ms6PdYfJOBwKZZ5qyD4OtBlAT8hhGjpZEAghBACbngZkh6AN76F296AdtfBsWdKX1mMUuH2fE+5C/79qXfLKYQQ9ZDnEDScDAiEaCRyY5p3SbxPQ2EpfLDCM62kHC5/+ui/562q9a3660sasWACpG97k8RatFWy7KgQjcBisZCUlNTUxWgzJN6naeXW2tMXbzD+t7K0AmstWcrKXPg3TqkE0re9SWIt2jK5QiBEI9B1nfz8fHSZX+0VEu/To85diQ5sC4vk07ihOIPbA563B5j259T63iy/IC+UsO2Svu09EuvWQ1YZajgZEAjRCFRVJTU1VVar8BKJ9+nZvzSV+8ZcxwNjriMttDP3jLuRd5IuQAe25GhQXIr5+PsH/tA9N9u7hW1jpG97j8RatGUyZUgIIdq4zCA7PQ4f4vnFc420zwYMocjqS8Ytb9PX50idZ48UgKJSCJKJQ0II0VLJFQIhhGjLyiv5oXc8U3/73iN54ubfyA6003flOkxf/IZK7StzKEBl6M3eKKkQQpwUmTLUcDIgEKIRKIqCzWZDUeSg4w0S71P3wp8XsLjvWZhqmTftX1lBl4LD6IAZav0KVQCfikpYuJZ9BRr3/eTm5WQ3FW6Zh30mSN/2Hom1aMsUXe6eEUKINmf7YR0fE1z434P87eevufuXJTXOEGmc/FmjnRGR9Prbix5pB6dBeKDMTBVCeNfvymv15hmoT/dCSVoOuUIgGsW4ceO4/fbbvbKvmTNnkpiYSFZWllf2dzI0TSM7Oxvt+Ke9ikYh8T55K5OP8Mmg54jqfA2RoVcz78OX+FstgwFo2BfExz0Ta6R1evOUiyn+IH3beyTWrYc8mKzhZEAgRCPQNI09e/bIF4uXSLxPTuaOw/QdcTdX//4rga5KbKqbczJ21vs+l8nzYU3Hf5nqwFMXXVnre3/YJyu2nA7p294jsRZtmQwIhBCiFcss0vg1UyV1xxGev38lHUuLG7yNhy69mjKLDwCVJhNPXHQl6jHzrOcOPJdKX99a33vXMjkXJ4QQzZ1M7mwlysvLsVgsWCxN16SqquJyufDz82uyMgjRWu3J19mWWcnZe1IpTj8Mc1ewNrgzCy8Zhd4rEs2kkF0KpWvTCSgooMjXD5vbxabIbvhoGp0L8rjfmV7rtostVgLdlTXSVUVhae945sedzTWbVpOQlY7bbMFltrAvJJTovGyW9B7IzZOno5tqP7+0Pf9MRkEIIeonqwg1nFwhOAX5+fn85z//YcyYMZx99tmMGTOG//znP+Tn5xt5Vq1aRWJiIvPmzat1G1OmTOHiiy/G7T76sJ+MjAz++c9/cumll3L22Wczbtw4Xn75ZcrKyjze++ijj5KYmMiRI0d47LHHuOSSSxg2bBjZ2dmMHz++xtz92bNnk5iYyIwZMzzSX3nlFRITEzl8+HCD6gawaNEiEhMT+e2333j77be57LLLOOecc1i2bFmdccvMzOTKK69k1KhRpKWlGenfffcdt9xyC8OHD+fcc8/lxhtv5Pvvv6/xfk3TmD17NuPHj+ecc87hqquuYsmSJXXurykpikJwcLCsVuElrT3e//hZpcfbbsYtMfPA+wfpcvdrdFu3mau+/47HnvkPS38vZt4O+HE/rOncnfVdepAbZCejfRjtS0sYuzWZlW/8i6tSVvNTTD+2hUUa23aZTEy84V5eP+dSDtsCjPSDgcHEzXiOsbc8xMwv3yEhq2ow4e+q5N/ffUqngjwW9klg0vUzcJvNNcp8rGfW1P5QM1G/1t63mxOJtWjL5ApBAxUXF3PzzTezf/9+xo8fT2xsLDt27OCzzz5j3bp1zJkzh4CAAM4++2w6dOjA4sWLmTx5ssc2MjIy2Lx5M5MnTzbO6G/fvp1p06YRFBTElVdeSVhYGGlpacybN49Nmzbx1ltv1Tj7f+edd9KhQwduueUWysrK8Pf3JzExkSVLllBeXm6cqV+3bh0mk4kNGzagqirmP768k5OTiY6OpkOHDg2q27Fefvll3G43V1xxBQEBAXTt2rXWuKWmpnL33XcTFBTE7Nmz6dy5MwD/+9//ePfddznnnHOYNm0aJpOJn376iQcffJAHHniAq666ytjGiy++yMcff0xCQgLXXnsteXl5/Oc//yEyMrLWfTYVTdPQdZ2ePXui6zqapmEymdA0zWNuqslkwmQyoaoqxy72VVe62WxGURSPQWR1OlDj6Zp1pVssFnRd90hXFAWz2VyjjHWlV5exOdUpNjYWVVWNbbWGOum6Tkq2ylO/QfWin89//YHHmZyYvEPcuvYHnr3gciNNUxT2dOxk/HtPx06ElxQy56wRHAhuD8CkTauZ/cnrTLjhXr6NHUSljw+3/PaD8Z4Kiw/ZgcEAXLwzhePt6RDOvy69mhLf+q8I/nMV3JfobrV9rzHrZDab6dWrF7quG2Vt6XVqzu3Us2dP4/XWUqcTpXurTjLIav5kQNBAc+bMISMjg7///e9MmjTJSO/VqxfPPvss77//PnfccQdms5nRo0fzwQcfsGfPHqKjo428ixcvBmDs2LFG2r///W86duzI+++/7/Gje/Dgwdx///0sWbKEcePGeZQlJiaGxx9/3CMtKSmJhQsX8vvvv3P22WdTWVnJpk2buPTSS1myZAnbt2+nf//+FBcXs2PHDiZMmNDguh2rvLycjz766ITThNasWcMDDzxAjx49eOGFF7Db7UDVIOHdd99lypQp3HnnnUb+yZMnc++99/L6668zZswYAgIC2Lt3L/PmzSMpKYnXXnvNOMhceOGFXH/99XXuuymkpaVx+PBhY/pUcHAwDoeD7OxscnJy0DQNt9tNdHQ0DoeDtLQ0srOz8f1jDnZ0dDSqqpKdnW1cHaqoqCAuLo6QkBA2btxIeXk5ZrMZk8lEXFwcLpeLzZs3G4NGTdPo0aMHgYGBpKSkGNvw9/cnKSmJgoICNm3aZOzTZrMRHh6Ooiikp1edCXa5XISEhNC/f3+ysrLYt28fuq5jsVgIDQ0lKiqKHTt2UFJSYtQ9ICCAAQMGkJaWRkFBARUVFfj6+hIdHU1YWBhr1671+GKIiIggPDyclJQUVFU1vmQSEhKwWq2sXbsWt9uN1WoFIDExEafTycGDB41tuFwuzj33XHbt2kVeXp6xT5vNRnx8POnp6Rw6dAjTH1NabDYb0dHRFBQU4HQ6jfaIjIwkJiaG9PR0nE6nERuHw4HZbCY/P5+CggIjlrGxsYSHh7NlyxYKCwuN9oiNjcVisbB582ajrpqm0bVrV8LDw0lOTja24evrS2JiIpWVlaxbt87Yp9lsJioqCl9fX778LQc4evwILi+t0eei8g97/Lt9WQmFNs/B++vnXEqR39GnCc+PH8o3sYOMH/SPL/0EP/Xol3nX/Fymrf6OJ0ZOZEdoBH2zMz221z87k4OB7WqUpTZuXWfjxt9JSkpi//79OJ1Ooz0sFgu9e/emrKzMuKHT7XYTGhpKnz59yMrKYvfu3UZsQkND8ff3p7S0lJycHCOW0dHRREVFkZaWRm5urtEe0dHR+Pv7k5qaavxY0TSNyMhIunbtysaNG1FV1WiPuLg4rFYrq1atMvYJEBUVhd1uZ/PmzUBVv7NarQwZMoSCggK2bt1qfD5sNht9+vQhIyOD3NxcYxtms5mkpCSysrJwOp3GPkNDQ4mJiSElJYXy8nIjv91up2vXrmzevBlN04zPR69evQgLCyMlJYWioiLj8xEbG0tZWRlOp9P4kVhRUUFSUhJWq5Xk5GRjn1D1ecrOzmbv3r1Ge+i6Tv/+/VFVldTUVKM9goODiY+PJzc3l+3btxvbCA4Oxm63o6oqTqfT2KfD4TA+T1lZWUZ7OBwO7HY7u3fvNo5vmqYRFhZGjx492LJlC2VlZUY5Y2NjsdvtrF69Gh8fHyM2nTt3JiIigvXr1xvtYTabGTx4MJWVlWzcuNFoD7PZTHx8PAcOHODAgQPGNnRdZ+jQoeTm5rJnzx4j9mFhYfTt25dt27ZRXHz0npuAgAB69eqF0+kkJyfHaI9u3brhcDjYvn07eXl5RnvUdSyPj4/HbrezceNGSktLjVjGxcVRUlLCzp07jfZQVZV+/fphtVpJSUkx2sNms9V5LA8LC8NsNrNnzx5jn2FhYcbnKT093WiP0NBQwsPDycjIoLCw0GiPkJAQ+vTpc9LH8tDQUKKjo43PU3V7DBw4EKvV2gTTmWUA0lDyHIIGmjRpEvn5+SxZssSjg7vdbv70pz8REhLCp59+CsCuXbuYPHkyN954I3fddRdQdQC67LLLsNlsfPLJJx75pk6d6vFDvDr/+PHjGT58OE8++SRQNWXo66+/5sMPP6R3794e+XNzcxk1ahQ33XQT06dPJzk5mWnTpjFv3jxuvfVWbrzxRqZMmcKKFSu49957+e9//8sFF1zQ4LotWrSIxx57jBkzZnDttdfWiNO4cePo3Lkzl19+Of/+978555xzeOqppzwGDi+++CIfffQR8+fPNwYJ1VasWMHjjz/Oa6+9xtlnn82cOXN49dVXeemllzjvvPM88k6fPp01a9awcOFCIiIi6mnBxqdpGi6Xiw0bNpCQkICPj4+cVWrkOkHVlbCEhASPM1ItuU7V7bTjsErf946u7JP96C2ElhR55B1528N83yvO+He3vEPsbR/ukcekaWh1zPMH2P/ENBwFeR5pbw++kNsmTWNU6ka+nPMcfm6Xx+u3Tridd86+uM5tVguyQN701tn3GrtOmqbV6NstvU7NtZ1UVTWO276+vq2iTvWlt9YrBBuU/9WbJ0H/ixdK0nLIFYIGysrKok+fPjVGuxaLhS5dupCammqk9ejRg9jYWJYuXcqdd95pTNvJysrir3/9q5Gv+ozszJkzmTlzZq37zcvLq5FW2/Scjh070q1bN9atWwdUTQvq0KEDPXr0ICEhgXXr1jFlyhSSk5MxmUycddZZp1S3al26dKm1vFB1BeBf//oXQ4cO5b///a9xYDi23rquM3HixDq3UX1/Q2Zm1dnJbt261cjTvXt31qxZU+c2vK36Mn/1Abj6TE/1gfR4x8elvvS6zrQ0JF1RlFrT6ypjQ9O9XSe3223E+/jXWmqdoKqdYjta+O8IjX/8rFKhKdw1fgrvfPYmVtVNvi2AJy+60mMwgK5T4mPF11VJhU/VmUqzqhKbncnWzp6f19DCfHLa2QFYHJvA1N88791Z0msgAEtjB/Hna+7iw49e8biKcP7uLSc1IFh5jYLFcvSHQWvqe9C4ddI0rc6+3VLrBM23napjfaKyt7Q6nU76maqTt8lNxQ3XPFquFRszZgzPP/8869atY8iQISxevNiYTlStepR93XXXMXTo0Fq3065dzUvzdU3TSUpK4osvvqC4uJh169aRmJhopL/22mvG9IRevXrVut2GONFUoaioKCwWC8nJyaxevbrGmX2oOpi98sortR6IoGpalBBt3b1JJm7sp7DrsErcuQ4Kb3oE/a1lZAUGc9m4WHp2h5wysJpgabqCKTmHqO0byQ2yY9J1rG4XhwKC6FhcQO4f9wUM2r+bYbu2UOHnz3uJI3ho1GRCyoq5cstaiq1+PD98LD/17M9vL/8fQRVl9Mmp+eC/637/lduuuoNyn9qXHK02MPzENx0LIYRoWjIgaKDIyEj27duH2+2uMa0mIyOjxg2uo0aN4uWXX2bx4sXEx8fzww8/MGTIEDp27GjkqT7LbjKZGDJkyGmXMTExkfnz5/PLL7+wdetW496DpKQkKioqWLlyJbt37+a66647rbrVJyAggBdeeIG//vWv3H///Tz99NOcf/75xutRUVH8+uuvdOrUie7du59wW9X73rt3Lw6Hw+O16isszUn13My6BjrizGoL8e7or9DR3wJRPfAHuKQvnf947YJj8j00FLi2L9AXgHK3jkXRsRSWcs1fk5n2y3dEFOfTM/cgn/YfwsQtv/HKV+/w0aDz+LVbb/YFd+DV8/7E/vZhXPX7rwx27q6zTDrw7rz/ccO1d+E21/51Et/+9OvelrWFvt1cSKxFWya9voFGjBjBkSNH+OqrrzzSv/rqK44cOWLMx68WEhLCOeecw08//cTSpUspKSlhzJgxHnl69+5NTEwMn3/+uXFT1rHcbrdxM+PJSExMRFEU3nnnHdxuN0lJSUDVFKb27dvz1ltvoeu6ceXgVOt2MgIDA3nttdfo378/Dz74ID/8cHQVk+qrJK+//nqtc8KPXQ51xIgRKIrChx9+6JE3NTWVtWvXNrhcjc1kMhETEyNfLF4i8a6bn0XBYjZBSCAz3x5Bu8oyeuZW3ZQ9actvVJgtvHLeaKZMns7Lw8bwwPgbiSjKJyFjJ1H5OSfctgJMTllNwv7dxGTXvIIA8Mt10ianQ/q290isWw/9JP6EJ7lC0EA33ngjP/zwA88++yw7duygd+/e7NixgwULFtC1a1duuOGGGu8ZO3YsK1eu5MUXXyQwMNDjLDlUTZv597//zR133ME111zD+PHjiY6Opry8HKfTyY8//sj06dNrrDJUl+DgYHr27ElaWhoREREeZ/bPOussli1bhsViYdCgQaddt5Ph7+/PK6+8wt/+9jceeughHn/8cS655BL69evH7bffzltvvcW1117LxRdfTGhoqLGKxapVq4x7A7p168akSZP49NNPueOOO7jwwgvJy8vj008/pWfPnuzYseOUytZYNE0jPT2d7t27y5eLF0i8T047X4WB6/5J+YAZ+OVVrSiyoXMXHr/Y8z6e37r24t15r3PD+hX1blMBHv7hC/7vTzUXF7AqEGiV9jgd0re9R2It2jIZEDRQYGAg77zzDjNnzmTlypUsXLiQDh06MGHCBKZOnVpjnX6AYcOGERwcTEFBAZdffrnHUnbVevfuzYcffsjs2bNZuXIln3/+OQEBAXTu3Jlx48YZZ/lPVlJSEmlpaTWuAgwePJhly5bRt29f/P39PV47lbqdLJvNxksvvcR9993HP//5T1RV5U9/+hO33347ffv2Zd68eXz88ceUlZXRvn17YmJiuO+++zy2cd9999GhQwe+/PJLXn75ZaKiovj73/9ORkZGsxwQ5OTk0LVrV/li8QKJ98lTItrjd/g9yMpD8fdl8eRFFNr8a+Qr8fU76UvIPprGlfm72BpxdKEDE7DrNmmL0yV923sk1qItk2VHhWgEbreb5ORkEhMTm82qC62ZxPvUrb5qFtMcF5AS0c1Is6hudjx7D9F52TXyV5jM+GqeU/weuvRqHnztAny6hjJ3m47NB67ureBjlpU+Tpf0be+RWLce65Q3682TpE/zQklaDhkCCyFEGzb0k1sZv3ktl+74HUXTiMk9yKdzXzQGA3lWGxs6d6V6hXJfTWVrWARlFgtHfG18Enc2Z1kKaNcjDJuPwm3xJq7ra5LBgBBCtCAyBBaiEVQ/kVMuO3uHxPs0KAqDsvby2PefoeD5fM8iHytbbhuP3jEE9fG3MP3x4KJ+f9xA7Od2MyFlDebkT71f7jZC+rb3SKxFWyZThoQQoq1TrkSHGo/yKbH4EFD8AfhYWB91H2dl7a3x1swgO5GF73qjlEIIcVLWnsSUocEyZciDDIOFaASqqrJ9+/Zal1MVZ57E+zS9cFOtyf5uF/hawWSi3Fb7Qwgzukc1YsGE9G3vkViLtkwGBEI0Al3XKSgoQC7AeYfE+zRNH11rstt89AnDQ7N2G/cRHCup8FAjFUqA9G1vkliLtkwGBEII0db5WMhtX/ORwjtuPPoQRVOgrcYXhg5Ygm2NWzYhhGggDaXeP+FJBgRCCCGo2DOTLdExaIAbhVUXj6Dv2zcezXBTzSeVKwAzTu6BiUIIIZovualYiEagaRq5ubl07NhRVqzwAon3mbPziE6wFcICjjuDVlaBHnIdSsUx86tD20H2e14tX1sjfdt7JNatxxplZr15ztaneqEkLYcMCIQQQpwUV/YR0iY9Slh6PiG3jsbyyNVNXSQhhKhhtfJWvXmG6rd7oSQthwyBhWgEqqqyadMmWa3CSyTeXhISyKo/9+P7/4zC/cBlTV2aNkH6tvdIrEVbJg8mE6IR6LpOWVmZrFbhJRJv7zIfs/qQaFzSt71HYt16SAs2nFwhEEIIIYQQog2TAYEQQgghhBBtmEwZEqIRmM1mYmNjZWqFl0i8vau4uFhWYfES6dveI7FuPXR5zkCDyRFdiEagKAp2ux1FkYOSN0i8vWN1Fnxf3ofiSl1i7SXSt71HYi3aMhkQCNEI3G4369atw+12N3VR2gSJd+OzvehmxHyF+ZVDubv4BqZ/LyuxeIP0be+RWIu2TAYEQjQSWbrOuyTejefCeW7KPcKr8NZWmVbhLdK3vUdi3TroKPX+CU8yIBBCCHFCPzlrS1X4IlXOpAohRGsgAwIhhBCn5JNtTV0CIYQQZ4KsMiREIzCbzcTFxclqFV4i8W4ai/c0dQlaP+nb3iOxbj3kwWQNJ1cIhGgkVqu1qYvQpki8va+kqQvQRkjf9h6JtWirZEAgRCNQVZXk5GS5Qc1LJN6itZK+7T0Sa9GWyZQhIYQQQgjRasgqQg0nVwiEEEIIIYRow2RAIIQQok5bsk+wtKhMrRBCiFZBBgRCNAKz2UxiYqKsVuElEu/GM+D9ul+bNX8mKFfCvbO9V6A2Rvq290isWw95MFnDyYCgCYwbN47bb7+9qYvRZB599FESExObuhiNrrKysqmL0KZIvM+8crd2wtf3dAit+p8XFkFOfuMXqI2Svu09EmvRVsmAoJXbsWMHM2fOJCsrq6mL0qaoqkpKSoqsVuElEu/GEfzKiQcEJX7+R/8RdjPYroJzH4LrX4Il6xu3cG2E9G3vkViLtkwGBK1cWloas2bNkgGBEKLBKk88HmBF9z6eCeVu+DUV5q6E0U+CdWLjFU4IIeqgn8Sf8CQDAiGEEA3WsaiABe/998SZXBr0vsM7BRJCCHHK5DkEjejgwYO89NJLrF69GoCEhATuvffeOvP/9ttvvP/++2zdupXKykq6dOnCxIkTmTjR8yzbuHHj6Ny5MzNmzOCll15i69at+Pj4MGzYMO6++27at28PwMyZM5k1axYA06ZNM94/duxYHn300ZOqg6ZpzJs3j4ULF5KVlYWiKHTo0IGBAwfy0EMPYbFUdaE1a9awYMECtm3bRm5uLj4+PvTr14+bb76Zs84666T2lZuby6xZs/jll184fPgwdrudYcOGcccddxh1AigoKODtt99m5cqV5OTkYLPZ6Ny5M5dccgk33HDDSe3LG+TGNO+SeJ9Z+/PrXl2oXVkJzifvwFc9wQpE1dIOncFStU3St71HYt06yE3DDScDgkZSVFTE7bffzqFDh7jyyiuJjo5mw4YNTJ06lYqKihr5v/jiC55++mkGDBjAzTffjM1m47fffuOZZ54hMzOTu+++2yN/dnY2d9xxBxdeeCEXXXQRqampLFy4kO3bt/P+++/j5+fHhRdeSG5uLl9++SVTpkyhe/fuADgcjpOux7vvvsubb77JsGHDmDBhAiaTiaysLFauXEllZaUxIFi0aBEFBQWMHj2a8PBwsrOzWbBgAX/5y1948803GTRo0An3c/DgQaZMmYLL5eKyyy7D4XCwf/9+Pv/8c5KTk/nggw8IDAwE4MEHH2TDhg1MmDCBnj17UlFRQXp6OuvXr28WAwJNq5pnUV1nTdMwmUxomma8BmAymTCZTKiqiq7r9aabzWYURcHt9vwRVv0Fdvy817rSLRYLuq57pCuKgtlsrlHGutKry9ic6pSYmIiqqsa2WkOdmrKdfthDnaat/u7kBgNUXZpX/4hFU9epJbaTxWIhISEBXdeNsrb0OjXndho0aBCKUvVjsrXU6UTp3qpTdUxF8yUDgkby/vvvk5WVxSOPPML48eMBmDRpEs8//zwff/yxR97c3Fyee+45LrnkEp588kkjfdKkSTz33HN8+OGHTJgwweOHvNPpZMaMGVx77bVGWnR0NC+++CLz5s3jpptuomfPnsTFxfHll18yZMiQU1rZ56effqJ79+68+OKLHul33XWXx78ffvhhbDabR9qECRO46qqrmD17dr0DgmeffRa3282HH35IeHi4kX7xxRczZcoUPvzwQ6ZOnUpxcTHr1q1j4sSJPPDAAw2ujzekpaWRl5eHqqr4+PgQHByMw+EgOzubnJwcNE3D7XYTHR2Nw+EgLS2N7OxsfH19gap2VFWV7OxsysrKAKioqCAuLo6QkBA2btxIeXk5ZrMZk8lEXFwcLpeLzZs3GwM0TdPo0aMHgYGBpKSkGNvw9/cnKSmJgoICNm3aZOzTZrMRHh6Ooiikp6cD4HK5CAkJoX///mRlZbFv3z50XcdisRAaGkpUVBQ7duygpKTEqHtAQAADBgwgLS2NgoICKioq8PX1JTo6mrCwMNauXevxxRAREUF4eLhxI1/1l0xCQgJWq5W1a9fidruxWq0AJCYm4nQ6OXjwoLENl8vFeeedh9PpJDMz09inzWYjPj6e9PR0Dh06hMlkMuoaHR1NQUEBTqfTaI/IyEhiYmJIT0/H6XQasXE4HJjNZvLz8ykoKDBiGRsbS3h4OFu2bKGwsNBoj9jYWCwWC5s3b/b4YdG1a1fCw8NJTk42tuHr60tiYiKVlZWsW7fO2KfZbCYqKgpfX1927Nhh1DMgIICEhARyc3PZuXOn0R7BwcHExMSwe/duo4wAvr6+DBo0iPT0dHJycox9OhwOHA4HGzdu9PgCDw0NxeFwkJqayq69AP1q7ePXJ6+s51PgKTk5GbPZTFJSEvv378fpdBrtYbFY6N27N2VlZezZs8doj9DQUPr06UNWVha7d+82YhMaGoq/vz+lpaXk5OQYsYyOjiYqKoq0tDRyc3ON9oiOjsbf35/U1FSjrpqmERkZSdeuXdm4cSOqqhqxiYuLw2q1smrVKmOfAFFRUdjtdjZv3my0h9VqZciQIRQUFLB161ajPWw2G3369CEjI4Pc3FxjG9UxyMrKwul0GvsMDQ0lJiaGlJQUysvLjfx2u51u3bqxfft2KioqjM9Hr169CAsLIyUlhaKiIuPzERsbS1lZGU6n0/iRWFFRQVJSElarleTkZGOfUPV5ys7OZu/evUZ76LpO//79UVWV1NRUoz2Cg4OJj48nNzeX7du3G9sIDg7GbrejqipOp9PYp8PhMD5PWVlZRns4HA7sdju7d+82jm+aphEWFkaPHj3YsmULZWVlRjljY2Ox2+2sXr0aHx8fIzadO3cmIiKC9evXG+1hNpsZPHgwlZWVbNy40WgPs9lMfHw8Bw4c4MCBA8Y2dF1n6NCh5ObmsmfPHuO42rFjR/r06cO2bdsoLi428gcEBNCrVy+cTic5OTlGe3Tr1g2Hw8H27dvJy8sz2qOuY3l8fDx2u52NGzdSWlpqxDIuLo6SkhJ27txptIeqqvTr1w+r1UpKSorRHjabrc5jeVhYGGazmT179hj7DAsLMz5P6enpRnuEhoYSHh5ORkYGhYWFRnuEhITQp0+fkz6Wh4aGEh0dbXyeqttj4MCBWK1W47tJNF+KfuwQT5wxkyZNorCwkG+++cbjEmRubi6jRo0iISGBt956C4B58+bx3HPP8b///Y9evXp5bGfHjh3ceeedPPTQQ1x55ZVA1ZShwsJCvv/+e48DZGVlJSNHjqRbt27MmTMHqDpz/9hjj/Hmm2+e0oBg6tSppKam8vLLLzNw4MCTek9paamxdNu//vUvtmzZwg8//GC8/uijj/L1118bP4yKi4u58MILGTduXI2BBsAtt9xCcHAw7777Li6XixEjRhAdHc2zzz5LREREg+vU2DRNw+VysWHDBhISEvDx8ZGzSo1cJ4B169aRkJDgcUaqJdepqdvpUKFO5Ds1wkz7kiKyH70V80nelqcDquvTZlGnlthOmqbV6NstvU7NtZ1UVTWO276+vq2iTvWlt9YrBD8q9T8b5UJ9ihdK0nLIkK2RZGZm0rdv3xrzETt27EhQUJBH2t69ewH4y1/+Uuf28vLyPP4dGRnpMRgAsFqtREZGkpmZeRol93TnnXdy3333ceuttxIaGspZZ53Feeedx0UXXeSxf6fTyeuvv86aNWsoKiry2EZ9B4K9e/eiaRoLFixgwYIFteaJjIwEwMfHhxkzZvD8888zfvx4oqOjSUxM5Pzzz2fw4MGnWdszw2QyGQfH6rMw1enV/3+suuas1pVe15mWhqQrilJrel1lbGi6t+vkdruNeB//WkutEzRtO0WEANScFhRRcJgCPxvty0trfe/xlLN7eNShtfU9aNw6aZpWZ99uqXWC5ttO1bE+UdlbWp1OJ/1M1Uk0f9JyzUD1KPuxxx6jY8eOteap/kHsbXFxcXz11VesXr2a5ORk1q9fz9KlS3nnnXd4++23CQ4OprS0lNtuu42ysjKuueYaevToQUBAAIqi8N5777Fu3bqT2tef/vQnxo4dW+trx166nzhxIueffz6//PIL69ev54cffuDTTz9l5MiRPP3002ek3kKI2m2J6MblUx5g+RuP1r9MXcdAWP2sN4olhBDiNMiAoJFERkayf/9+VFWtMWXo+DPoUVFRQNV80SFDhpzU9jMzM3G5XDWmDGVmZtKtWzcj7UxcpvP39+eiiy7ioosuAmD+/Pn85z//YcGCBdxwww2sXbuWnJwcj/slqr3xxhv1bt/hcBiXGk+2/h07duTyyy/n8ssvR1VVHnnkEb799luuu+46+vWrfd6zNymKgs1mkxupvETi3Tg6WOFwLQ9u/Tm6L6NveYgP5r1KaMkfxzOrCTq3h+tGQK8IuDgeItrXfLNoEOnb3iOxbj1klaGGk+cQNJIRI0Zw+PBhFi9e7JFePbf/WCNHjsRqtTJz5kyPG8qqFRcX13iceklJCfPnz/dImz9/PiUlJZx//vlGWvWNvtU3CzVUfn5+jbTY2FiPbVYPeI6/HWXNmjVs2bKl3n3Y7XbOPfdcfvzxR+OGvWPpus6RI0cAKC8vrxEjs9lMz549PcrU1KpvYpMl7LxD4t04cv9a9zmjb2MH8kHC8KMJB2fD3rfgiT/DDRfIYOAMkb7tPRJr0ZbJFYJGcsMNN7B06VKefPJJtm/fTkxMDOvXryclJQW73e6RNzw8nAcffJAnnniCSZMmMXr0aDp37syRI0fYtWsXy5cvZ/78+R430DocDmbNmsXu3bvp06cP27dvZ+HChXTr1o3Jkycb+fr164fJZOLdd9+lsLAQm81GZGQk/fv3P6l6TJw4kQEDBtCvXz9CQ0ONZUx9fHy45JJLABg4cCAdOnTgpZde4sCBA4SFhZGWlsY333xDjx492LVrV737efDBB7n11lu57bbbGDNmDL1790bTNDIzM1m5ciWjR49m6tSp7Nu3j9tvv50LLriAmJgYgoKC2Lt3L5999hmRkZH1rmbkLZqmkZubS8eOHWudlynOLIl30/ihex9m/LwYHpkIIUH1v0E0mPRt75FYi7ZMBgSNpF27drz99tu88MILfPPNN0DVg8lmzpzJHXfUfHLn+PHj6dKlC3PnzuWLL76gqKgIu91O165dueOOO+jQoYNH/rCwMJ555hleeuklvv32W3x8fBg1ahT33HOPx/KfnTp14pFHHmHOnDk888wzuN1uxo4de9IDguuuu45Vq1bxySefUFxcTPv27enfvz9TpkwxVkQKCgritdde45VXXuGTTz5BVVViY2N5+eWXWbBgwUkNCDp16sTcuXOZM2cOK1asYMmSJVitVsLDwxk2bBgjR44EqgZP48ePZ/369SxfvhyXy0VoaChXXHEFN954I35+fidVr8amaRp79uyhffv28sXiBRLvxrPzZuj5bu2vfdP3LNC/8G6B2hjp294jsW49ZMpQw8myoy1Q9ZOKq5ctFc2P2+0mOTmZxMREWXXBCyTejUt5ru6HkOn3Sbwbk/Rt75FYtx7fKzWnZx/vYv1GL5Sk5ZAhsBBCCCGEEG2YDIHbIFVVjZt0TyQ4OLjGsw7EyVEUheDgYFmtwksk3qK1kr7tPRLr1kOrP4s4jgwI2qBDhw7VWB60Nqf6dGNRtVpFnz59mroYbYbEW7RW0re9R2It2jIZELRAixYtOq33d+jQgddff73efNU3DYuG0zSNrKwsIiIi5OY0L5B4Nw3f+rOI0yR923sk1qItkwFBG+Tr63vSDwATp0bTNJxOJ506dZIvFi+QeDeN0V2bugStn/Rt75FYtx66SaZ9NZT0eCGEEKfk70ObugRCCCHOBBkQCCGEOKFre9eWqjPEIReZhRDNj67U/yc8yYBAiEZgMpkIDQ2Vy85eIvFuXB+Os9DZH6D6sTU6sy+WdTy8Qfq290isRVsmDyYTQghxUg4Vunj9wy9xmPOZMmWKLEsshGiWllrerzfPKPcNXihJyyHDYCEagaZp7N69G02Ts6jeIPH2jvY2cJjzsdlsEmsvkb7tPRLr1kM3KfX+CU8yIBCiEWiaRk5OjnyxeInE27t8fX2Ri8veIX3beyTWoi2TAYEQQgghhBBtmCwRIYQQQgghWg1dTnc3mIRMiEZgMplwOByyWoWXSLy9q7y8HEWRObjeIH3beyTWoi2TVYaEEEKclE6vuDhUefTfDyUqPHm+XGgWQjQv3/h9UG+e0eXXe6EkLYcMg4VoBKqqsn37dlRVbeqitAkS78b32m/uPwYDivH3VHLTlqktkL7tPRLr1kM3K/X+CU8yIBCiEei6TkFBgazE4iUS78Z3189QNRDwpDzn9npZ2hLp294jsRZtmQwIhBBCCCGEaMNk8qcQQgghhGg1tFb64LHMzExWrlxJdnY2EyZMwOFwoKoqBQUFBAcHYzabT3nbcoVAiEZgMpmIjo6W1Sq8ROItWivp294jsRbNla7rzJgxg+7du/PnP/+ZGTNmkJaWBkBxcTHdunXj1VdfPa19SK8XohGYTCbCwsLki8VLJN6itZK+7T0Sa9Fc/fe//+Xll1/mvvvuY9myZR73uQQHB3PllVfy+eefn9Y+pNcL0QhUVWXTpk2yWoWXSLxFayV923sk1q2Hbqr/ryWZNWsWN9xwA0899RQDBw6s8XpcXJxxxeBUtbCQCNEy6LpOWVmZrFbhJRJv0VpJ3/YeibVorvbv388555xT5+sBAQEUFhae1j5kQCCEEEIIIUQzFRYWxv79++t8ff369XTp0uW09iEDAiGEEEII0WroJqXev5bkyiuv5M0332TPnj1GmqJU1eG7777jvffeY9KkSae1D0WXa2NCnHHVD7gJDg42PrSi8Ui8G9+JHkCm3ycrWDcW6dveI7FuPRaEfFRvnsuOXOuFkpwZBQUFDB8+nPT0dIYNG8bSpUsZOXIkxcXFrF69mkGDBrFy5Ur8/f1PeR9yhUB4RVZWFomJicycObOpi+IViqJgt9vlS8VLJN6itZK+7T0S69ZDV+r/a0mCg4NZs2YNDzzwAJmZmfj5+bFixQry8/P517/+xc8//3xagwGQAYE4g7Kyspg5cyY7duxo6qI0Obfbzbp163C76z6rKs4cibdoraRve4/EWjRnNpuNhx9+mN9//52SkhLKysrYsmULjzzyCDab7bS3L9d5xRmTlZXFrFmziIiIoHfv3h6vde7cmVWrVp3WU/RaGlm6zrsk3icw8Rn4fC2YgbN7Q6wDbhsJT34GVgscOALD+8DTNzR1SUUtpG97j8RatFUyIGghSkpKCAgIaOpinDJFUfD19W3qYgjR9ihXHv1/FVi1o+rvnR888/26A579CnLeg/btvFhAIYQ4s1raTcP1ufnmm+vNoygK77zzzinvQwYEXrJo0SIee+wxXn/9dX7//XcWLVrE4cOH6dq1K1OmTOHSSy818o4bN47OnTszY8YMXnvtNTZv3kxwcDALFy4EYMOGDbz99tts3boVt9tNt27dmDRpEpdffrnHPm+//XYOHDjAzJkzeeGFF0hOTkZRFEaMGMEDDzyAn58f7733Hl999RW5ubl0796d+++/v8ZDL8rKynjnnXdYtmwZ2dnZtGvXjiFDhnDHHXfQuXNnj/oBPPbYY8b/JyQk8NZbb5GVlcX48eO57bbbmDp1qrFtt9vN3LlzWbx4MZmZmdhsNgYNGsS0adPo0aOHke/Y9/ft25dZs2axa9cugoKCGD16NHfeeScWi3RnITwMvq9h+TXgnIcg9bVGKY4QQoiG+/HHH2vc26KqKgcOHEBVVUJDQ0/7pLH8gvKyV199lbKyMiZOnAhU/ZD+xz/+QWVlJePGjTPyHTp0iDvuuIOLL76YCy+8kNLSUgBWrlzJ/fffT4cOHbjuuuvw9/fnu+++44knniAzM5M777zTY39lZWXccccdJCQkMH36dLZt28bChQupqKjAbrezZcsWrrrqKuOH+YwZM1i0aJHRsdxuN9OnT2fTpk1cdNFFXHfddWRkZPD555/z22+/8f777xMeHs6gQYOYMmUKs2fP5oorrmDQoEEAtG/f/oTx+Oc//8myZcsYMmQIEyZM4PDhw8yfP58pU6Ywa9YsYmNjPfKvWrWKzz77jAkTJjB+/HhWrFjBBx98QFBQ0EmNoL1B0zR0Xadfv37ouo6maZhMJjRNQ9M0I5/JZMJkMqGqqseDcOpKN5vNKIpSY35r9TSs4y9115VusVjQdd0jXVEUzGZzjTLWlV5dxuZSJ7PZzIABA9B13dhWS6/TGWmnDekNv1Fsb3atdTqRk61ra+x7jV0ns9lsHEuqy9rS69Rc26n6uF2tNdSpvnRv1Ulu1D49e/furTXd5XIxc+ZMXnrpJZYtW3Za+5ABgZfl5+czb948AgMDAZg4cSKTJ0/mxRdfZOTIkfj5+QGQmZnJww8/7HHWX1VVnn32WWw2G3PmzCE0NBSAq666iqlTpzJnzhzGjRvn8XCK/Px8brjhBm644ejc4KKiIr7//ntiY2OZPXu2cWa9e/fu3HvvvSxdupQJEyYAVQOWTZs2cf3113P33Xcb2xgyZAj33HMPr732Go8//jgOh4MhQ4Ywe/Zs4uLiGD16dL2xWLNmDcuWLWPkyJE89dRTxgFj5MiRXH/99Tz33HO8/fbbHu/Zs2cPn376KREREQBMmDCBq6++mk8++aTZDAjS0tLIy8tDURQURSE4OBiHw0F2djY5OTlomobb7SY6OhqHw0FaWhrZ2dnGlKro6GhUVSU7O5uysjIAKioqiIuLIyQkhI0bN1JeXo7ZbMZkMhEXF4fL5WLz5s1GW2qaRo8ePQgMDCQlJcXYhr+/P0lJSRQUFLBp0yZjnzabjfDwcBRFIT09Hag60ISEhNC/f3+ysrLYt28fuq5jsVgIDQ0lKiqKHTt2UFJSYtQ9ICCAAQMGkJaWRkFBARUVFfj6+hIdHU1YWBhr1671+GKIiIggPDyclJQUVFU1vmQSEhKwWq2sXbsWt9uN1WoFIDExEafTycGDB41tuFwuzjvvPMrLy9m8ebOxT5vNRnx8POnp6Rw6dAiTyWTUNTo6moKCApxOp9EekZGRxMTEkJ6ejtPpNGLjcDgwm83k5+dTUFBgxDI2Npbw8HC2bNlCYWGh0R6xsbFYLBY2b95s1FXTNLp27Up4eDjJycnGNnx9fUlMTKSyspJ169YZ+zSbzURFReHr62vcpO9yuQgICCAhIYHc3Fx27txptEdwcDAxMTHs3r3bKCNAv55hBKUealD/1bqGsmXLFsrKyoz26N+/PxBYxztcJCdvMv5VUVHBueeeS2VlJSkpKUY9zWYzSUlJ7N+/H6fTabSHxWKhd+/elJWVsWfPHqM9QkND6dOnD1lZWezevduITWhoKP7+/pSWlpKTk2PsMzo6mqioKNLS0sjNzTXaIzo6Gn9/f1JTU40fK5qmERkZSdeuXdm4cSOqqhrljIuLw2q1smrVKo9pjlFRUdjtdjZv3my0h9VqZciQIRQUFLB161ajPWw2G3369CEjI4Pc3FxjG9UxyMrKwul0GvsMDQ0lJiaGlJQUysvLjfx2u51u3bqRkZFBUVGR0R69evUiLCyMlJQUioqKjM9HbGwsZWVlOJ1O40diRUUFSUlJWK1WkpOTjX1C1ecpOzubvXv3Gu1R3d6qqpKammq0R3BwMPHx8eTm5rJ9+3ZjG8HBwdjtdlRVxel0Gvt0OBzG5ykrK8toD4fDgd1uZ/fu3cbxTdM0wsLC6NGjh9H3qssZGxuL3W5n9erV+Pj4GLHp3LkzERERrF+/3mgPs9nM4MGDqaysZOPGjUZ7mM1m4uPjOXDgAAcOHDC2oes6Q4cOJTc3lz179lBeXo6vry92u50+ffqwbds2iouLjfwBAQH06tULp9NJTk6O0R7dunXD4XCwfft28vLyjPao61geHx+P3W5n48aNlJaWGrGMi4ujpKSEnTt3Gu2hqir9+vXDarWSkpJitIfNZqvzWB4WFobZbDbWrK+oqCAsLMz4PKWnpxvtERoaSnh4OBkZGcaTbjVNIyQkhD59+pz0sTw0NJTo6Gjj81TdHgMHDsRqtXr9Cr7WRsYfPj4+xsne6dOns3jx4lPeljyHwEuqp9RMnz6dm266yeO12bNn8/rrr/Pyyy9z7rnnMm7cOEpLS/nuu+88zsxt2bKFm266iWuvvZYZM2Z4bGP58uXcd9993H333Vx//fVA1ZShTZs2sXLlSo8vtg8//JAXX3yxxoCjsLCQCy+8kOuuu4577rkHgL/+9a+sWbOG77//nnbtPOcVX3vttWRmZvLTTz9hMplITk5m2rRp/Otf//K42gHUOmXomWee4bPPPuPjjz+mZ8+eHvnvu+8+li9fzrJlywgJCTHeP2rUKJ544gmPvM8++yyffvrpaa/Be6ZomobL5WLDhg0kJCTg4+MjZ5UauU4A69atIyEhweOMVEuu0xlrJ/PEGrGqi66AcngOajv/GnUyPV/3zZauezz/3Zb6XmPXSdO0Gn27pdepubaTqqrGcdvX17dV1Km+9NZ6heDz0I/rzTMh5xovlMQ7Zs6cyX333UdRUdEpb0OuEHhZt27daqR1794dqLoqUC0yMrLGZfqsrCyg6qzD8WJiYmpsA6Bjx441buat/mFffZb9+PRjzzBmZWURGhpaYzBQvc+0tDTy8/PrnRpUm6ysLEwmk1H/Y0VHR7N8+XIyMzMJCQkx0iMjI2vkDQ4ONsrdHAYE1Zf5qw/A1Wd6qg+kx6trOkZd6XWdaWlIuqIotabXVcaGpnu7Tm6324j38a+11DrBGWon/QsY+zgs3li1ytCQXsesMjQffH2qVhka1g/lmaqTCQ1dC6wt9z1o3DppmlZn326pdYLm207VsT5R2VtanU4n/UzVSTSuZcuWnfbvH2m5Zqp66tDpqu0DXt9rzfmi0Ynq05zLLUST+vqftacveti75RBCCC9obasM/fvf/641PT8/n5UrV7JhwwYefPDB09qHDAi8rLYbQ6rnbNd29vtY1a9Xzws8VnVafdtoqMjISFavXk1RURFBQUE19hkQEIDdbgcafkkwMjISTdNIT0+vMWXoZGMihBBCCNGaPfroo7Wmh4SEEBMTw5tvvsltt912WvuQJxV72WeffeZxk1JxcTGff/45QUFBnHXWWSd8b2xsLJ06dWLRokUeN6q53W4++OADY0nRM+n8889H0zTee+89j/RVq1axY8cOhg8fbpy1r75cdeyUoxOpLuvs2bM9zu7v2rWLlStXMnDgQI/pQi2J2WwmMTGxTT2IrSlJvEVrJX3beyTWormqvsfj+L/Dhw+zdu1abr/99tO+T0OuEHiZ3W7nxhtvNG66XbRoEQcPHuThhx+ud5qQ2WzmgQce4P777+fGG2/kiiuuwN/fn2XLlrF582amTJniscLQmTBu3Di+/vpr5syZQ1ZWFgkJCezfv5/PPvuMDh06eCxz2r17dwICAvjss8/w8/MjKCiI9u3bk5SUVOu2zz77bEaOHMl3331HUVER5513nrHsqNVq5b77GriGejNTWVl5Rh4nLk6OxFu0VtK3vUdi3TrorWvGkFfIgMDL7rrrLn7//Xfmz59PXl4eXbp04YknnmDUqFEn9f7hw4fzv//9j3feeYcPPvgAl8tFt27daqwYdKZYLBZee+0148FkP/30E0FBQVx00UX85S9/oVOnTkZePz8/nnzySd544w1eeOEFKisrSUhIqHNAAPD444/Tu3dvvv76a1566SVsNhsJCQnccccdHg8ma2lUVSUlJYXExES5ycoLJN6itZK+7T0Sa9FcZGRknNL7TueksCw76iXVy46++eabJCYmNnVxRCNzu90kJyfLF4uXSLwbn/Kcu87X9Psk5o1F+rb3SKxbj/md5tWbZ9LByV4oyakxmUynNAWotiW5T5b0eCGEEEII0WroLfzJyO+++67Xn90gAwIhGoncmOZdEm/RWknf9h6JtWgOjn+ArTfIgECIRmCxWE5474Q4syTeorWSvu09EmvRlsmAwEvGjRtnrCwkWj9d1ykoKCA4ONjrl/3aIom3aK2kb3uPxLr10Fpp861atYoNGzZQUFCApmkerymKwj//WcdDKE+CDAiEaASqqpKamio3p3mJxFu0VtK3vUdiLZqrvLw8xowZw9q1a9F1HUVRjOc3Vf//6Q4I5MFkQgghhBCi1dBNSr1/Lcn9999PSkoKH330EXv2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t912G3/84x8xmUzKfQoAn332mRI3R9rlcrRTdnY2jz76KCNGjGDs2LG8+uqrWCwWqqqqWLFiBbfeeis33HADjzzyCLm5uQ3Wbc+ePbz33nvcfvvtDBs2jClTpvDZZ5/V26fVauXtt99m4sSJSh/66quvSEpKIj4+vlVdKbJarWRmZspqFW4i8XaBz/7j9M/iDn7186hU+JWWuKc87ZT0bfeRWIv27Iqui5WWljJz5kxOnz7NlClTMBqN7Nu3j1mzZlFVVVUvf0pKCi+++CIDBgxgxowZ6HQ6du3axbJly8jPz+eJJ55wyl9YWMicOXMYPXo0Y8aMITMzk82bN5ORkcHatWvp0KEDo0ePxmw2s2nTJh588EF69eoFgMFgaHZ9Nm7cyJkzZ5gyZQq+vr58+eWXLF++nJKSkno3SJeXlzNr1ixiY2N59NFHlUHKoUOHmDlzJl5eXiQmJtK1a1d++ukn/v73v3P48GGWLFmibOPAgQM8+uij+Pr6ct9999GpUye++uornn/++WaX/WI//fQTv//979HpdNx+++2EhYVx5swZdu7cyZEjRxg6dCgvvPACCxcuZPDgwfzmN7+54n0VFhby2GOPMXbsWEaPHs2uXbtYv349Go2Go0ePUlVVxf33309xcTHvvfceTz31FB999BFqtfM4dOXKlVRVVTFlyhS0Wi0fffQRixYtwmAwMGjQICXfX/7yFz7++GPi4+O59957OX/+PC+99BI9evS44jq4gs1mw2q1YrfbsVqtqNVq1Go1NpsNm82m5HOkO/I2la7RaFCpVFgsFqf9Oea8Xvwl1li6l5eXUjYHlUqFRqOpV8bG0ltbnQCPq1OLttONz3LxTOohJw7zeb+LThzY7UzO3IvF8uvWX6c22k5Qv2+39Tq11naqe9z28vLyiDo1le6uOqncvOqPrDLUfFc0IFi7di0FBQUsXLiQyZMnA5CYmMjLL7/MBx984JTXbDazfPlyxo0bx9KlS5X0xMREli9fzvr165k6darTD3mTycT8+fO55557lDSj0cirr77Khg0beOCBB+jTpw+xsbFs2rSJoUOHNvsMd115eXkkJycTHBwMwJ133slDDz3EO++8w+23366kAxQXFzN16lQeffRRp20sX76cmpoaVq9eTZ8+fQC46667+MMf/sC2bduYPHkyQ4YMAeCVV17BZrPxzjvv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6AaDgVWrVpGTk0N0dDQZGRls3ryZnj17Mn36dCWf4yard999l5KSEnQ6HaGhocTExDSrPuHh4TzwwANMnToVX19ftm3bxqFDh3j44Yedbr65lKeffpqZM2fyyCOPKMuO/vzzz+zcuZPx48c73Rw5b948Zs2axUMPPURiYqKy7GhDU4B69uzJkCFDSElJUVaXyM7OZvv27YSFhTmtENKhQweee+45nn32We666y5l2dFz587x73//m3vuuUcZUMXExLB7927++c9/0r17d1QqFbfcckuz4uZOkZGR/OY3v2HTpk08+uij3HTTTZw/f57k5GSuu+46MjIy3L6smRBCCCGEJ7iiAUHnzp15++23eeWVV9i6dSsAcXFxJCUlMWfOnHr5J0+eTHh4OOvWrSMlJYXS0lL0ej0RERHMmTPHaVUTqF1lZtmyZaxYsYIvv/wSb29vxo8fz5NPPqlcFQDo3r07CxcuZM2aNSxbtgyLxcLEiRObPSC46667KCsrY+PGjZw6dYru3bvz1FNPcffdd1/2Nvr168e7775LUlISH330ERUVFYSGhvL4449z7733OuWNjY1l5cqVvP7666xZs4aOHTsyZswYpk6d6jTgcXjhhRf461//yrZt29i6dSuDBw/mzTff5MUXX3RaQg1qr968/fbbrF69mk8//ZTy8nK6dOnC4MGD6d27t5JvwYIFvPTSS6xevVpZNrI1DwigtsyBgYF8+umnvPbaa0RERLBgwQIOHjzotAxea6BSqfD395dBiptIvIWnkr7tPhJrz2FH2rC5VPZWdufmpEmTCAkJ4a233nL5vlJTU5k9ezbPP/98g0/8FW3DvHnz2LNnDz/88IMscSaEi6gucQ+B/enWsbKIEEIALLw1tck8L3xx5c+v8kRy14xoMxq6B+Xw4cP861//IiEhoVUNBmw2m/LQK+F6Em/hqaRvu4/EWrRnHndax2q1cu7cuSbz+fv7u6E0bUtxcTE1NTWXzNOhQwc6duzophI5++yzz9i6dSvDhw8nICCAY8eOsWnTJry8vJg1a1aLlKkxji+W7t27y2oVbiDxFp5K+rb7SKw9hzyHoPk8bkBw+vRpJk+e3GS+N9980w2laVueeeYZ9u3bd8k8EydOZNGiRe4p0EWioqLYvn07GzdupLi4GD8/P+Lj45k5c6bbHsYmhBBCCOFpWt2AYMuW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3ETi3TIsXt5Unf0Q34AW/yrxWNK33UdiLdqzFn8OwahRozhz5gyff/65U7pjbn9dY8eORavVkpSU5HTjlcOFCxeorq52SisrKyM5OdkpLTk5mbKyMm666SYlTaerXTyv7tSe5nCc5a47B89ut/POO+/Uy3vLLbcA8MYbb1BTU1Pv744z47feeisAf/vb35y2WzcP1Mbw3LlzfPLJJ055PvnkE86dO8evf/1rJS0iIgKoXbq1rvfff7/ePprLEcNrMY3oYiNHjgRqy1nXzz//3KqmCzloNBqio6MveXVFXDsS75YjF/JcS/q2+0isPYnqMl6irhY/rXPfffexbds2li5dSkZGBpGRkezdu5f09PR6a/cHBwezYMEClixZQmJiIhMmTCAkJIRz585x5MgRtm/fTnJystOZb4PBwKpVq8jJySE6OpqMjAw2b95Mz549mT59upKvf//+qNVq3n33XUpKStDpdISGhl7yDH5dY8aMUZYMve2227BYLPzwww8NDlxiYmK4//77WbNmDb/97W8ZN24cXbt2paCggG+//ZY1a9bQqVMnbr75ZsaOHcvnn3/OiRMnGDlyJJ06dSIvL4+dO3cqNwrff//9fPvtt/zlL38hKyuL6667jqysLD799FMiIiK47777lH0PGTKEiIgIkpKSKC4upkePHvzyyy/s37+/wWclNMeAAQP48MMPWbZsGTfeeCNeXl7ExMRck2lcw4cPZ9iwYWzatInz588ry46mpKTQp08fDh8+fNX7uJZsNhsFBQX06NGj0SlR4tqReAtPJX3bfSTWoj1r8QFB586defvtt3nllVfYunUrUPtgsqSkpAaXypw8eTLh4eGsW7eOlJQUSktLlaXZ5syZU29qTVBQEMuWLWPFihV8+eWXeHt7M378eJ588knljDZA9+7dWbhwIWvWrGHZsmVYLBYmTpx42QOCW265hfLyct5//31ee+01OnXqxMiRI5k7dy5jxoypl//xxx+nT58+fPjhh6xduxabzUZwcDDDhw93mnK0dOlSBg8ezKeffsqqVavQaDT06NGDm2++WcnTsWNH3nnnHeXBZJs3b6Zr165MnTqVWbNmOT2DQKPR8Morr7B8+XI2btyIt7c3119/PW+99RYPPfTQZdX1UjHIysriq6++4ttvv8Vms/H8889fkwGBSqXiL3/5i/Jgsn/961/0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"/>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre><span class="ansi-bold">XGBoost - No Departments - hr_xg2-NOdept</span>
Predict will leave (True)  : 0.942
Predict will stay (True)  : 0.988

</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAvoAAAGkCAYAAABAc4HPAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAEAAElEQVR4nOydd3wU1fbAvzOzNb2HhEASQgm9gwgiCohS7GIv2B5gffpsP/tTn/X5VBRF7AUL+BDEhwVFVECp0iGUUEKA9L7ZMjO/PzbZZLMbSCDJhnC/n89C9s6dO+eemb1z5sy550q6rusIBAKBQCAQCASCNoUcaAEEAoFAIBAIBAJB0yMMfYFAIBAIBAKBoA0iDH2BQCAQCAQCgaANIgx9gUAgEAgEAoGgDSIMfYFAIBAIBAKBoA0iDH2BQCAQCAQCgaANIgx9gUAgEAgEAoGgDSIMfYFAIBAIBAKBoA0iDH2BQCAQCAQCgaANIgx9gUAgEAgEAoGgDSIMfYFA0Ga55pprsFgsZGRk+Gx77rnnkCSJRYsWeZXb7XZmzJjBiBEjiIyMxGQykZiYyPnnn89nn32Gqqqeunv37kWSJK9PWFgY/fr14/XXX/eqGyhmzpzJBx980Cxtp6SkIEkSd9xxh8+2X375BUmSmDdvXpMdr7aeDQYDUVFRDBw4kLvuuoutW7c22XGamxUrVvDEE09QVFQUaFEaxL/+9S++/vrrQIshEAiOA0nXdT3QQggEAkFzkJOTQ3p6Ov369ePnn3/2lGdmZtKzZ0/Gjx/vZYjm5uZy3nnnsXbtWsaNG8fYsWOJiori8OHDLFmyhJ9//pl//vOfPProo4Db0E9NTeXKK69k/PjxABQXF/O///2P//3vf/zjH//gxRdfbNlO16FXr17ExMTwyy+/NHnbKSkp7Nu3D7PZzJ49e0hMTPRs++WXXzjrrLOYO3cul156aZMcT5Ikxo4dy3XXXYeu6xQXF7Nhwwbmzp1LeXk5zz//PPfcc0+THKs5eemll7jvvvvIzMwkJSUl0OIck5CQEC699NJme2AUCATNhyHQAggEAkFzERcXx/PPP8+tt97Khx9+yPXXXw/A9OnTMRqNvPrqq171r732WtavX89XX33FxRdf7LXtoYceYs2aNezYscPnOAMGDOCaa67xfJ8+fTpDhw5lzpw5ATf0m5uePXuyY8cOnnvuOV577bVmP17Xrl29dA3utzOTJk3i3nvvJT093fPQ1dooLy8nODg40GIIBIJTCBG6IxAI2jQ333wzw4cP5x//+Af5+fl8/vnnfPfddzz99NO0b9/eU2/lypV8//333HrrrT5GfjWDBg3i6quvPuYxJUkiPj4eg8HXlzJz5kx69uyJ2WwmMTGR2267zW8Ix9y5cxk4cCBWq5WYmBiuueYaDh486FXn8OHDTJkyhaSkJMxmMwkJCVxwwQXs3bsXcHvct2zZwrJlyzwhL6NGjTqm/I0hJSWF6667jtmzZ5OdnX3M+uvXr+e8884jLCyMkJAQRo8ezR9//HFCMkRHR/P5559jMBh45plnvLbZ7XYef/xxOnfujNlspkOHDtx///3Y7XavepIkcfvtt/Ppp5/SrVs3LBYLAwcO5Ndff/Wqt2/fPqZPn063bt2wWq1ER0dz2WWXeXRezQcffIAkSSxbtozp06cTFxdHUlISTzzxBPfddx8AqampnvNSvX+1HHPnzqVHjx5YrVaGDRvGpk2bAJg1axadO3fGYrEwatQon+MC/Pnnn5x77rmEh4cTFBTEmWeeyfLly73qPPHEE0iSxK5du7jhhhuIiIggPDycKVOmUFFR4aWX8vJyPvzwQ4+sN9xwAwClpaXcfffdpKSkYDabiYuLY+zYsaxbt65B500gEDQ/wqMvEAjaNJIkMWvWLPr378+0adP47bffGDRoELfddptXvW+++QbAx1vcECoqKsjLywOgpKSExYsX89133/HQQw951XviiSd48sknGTNmDNOmTWPHjh28+eabrF69muXLl2M0GgG3kThlyhQGDx7Ms88+y5EjR3j11VdZvnw569evJyIiAoBLLrmELVu2cMcdd5CSkkJOTg4//vgj+/fvJyUlhVdeeYU77riDkJAQHn74YQDi4+Mb3b9j8fDDD/PRRx8d06u/ZcsWzjjjDMLCwrj//vsxGo3MmjWLUaNGsWzZMoYOHXrcMnTs2JEzzzyTpUuXUlJSQlhYGJqmcf755/P7779z66230r17dzZt2sR//vMfMjIyfOLOly1bxhdffMGdd96J2Wxm5syZnHvuuaxatYpevXoBsHr1alasWMEVV1xBUlISe/fu5c0332TUqFFs3bqVoKAgrzanT59ObGwsjz32GOXl5Zx33nlkZGTw2Wef8Z///IeYmBgAYmNjPfv89ttvLFy40HONPvvss0ycOJH777+fmTNnMn36dAoLC3nhhRe48cYbvcLSfv75Z8477zwGDhzI448/jizLvP/++5x99tn89ttvDBkyxEu+yZMnk5qayrPPPsu6det45513PG/CAD7++GNuvvlmhgwZwq233gpAWloaAFOnTmXevHncfvvt9OjRg/z8fH7//Xe2bdvGgAEDjvtcCgSCJkQXCASCU4CHHnpIB3RFUfS1a9f6bL/ooot0QC8qKvIqt9lsem5urudTWFjo2ZaZmakDfj/Tpk3TNU3z1M3JydFNJpN+zjnn6Kqqespff/11HdDfe+89Xdd13eFw6HFxcXqvXr10m83mqbdo0SId0B977DFd13W9sLBQB/QXX3zxqP3u2bOnfuaZZzZYT40hOTlZnzBhgq7ruj5lyhTdYrHo2dnZuq7r+tKlS3VAnzt3rqf+hRdeqJtMJn337t2esuzsbD00NFQfOXLkMY8H6Lfddlu92++66y4d0Dds2KDruq5//PHHuizL+m+//eZV76233tIBffny5V5tA/qaNWs8Zfv27dMtFot+0UUXecoqKip8jrty5Uod0D/66CNP2fvvv68D+ogRI3SXy+VV/8UXX9QBPTMz028fzWaz17ZZs2bpgN6uXTu9pKTEU159TVfX1TRN79Kliz5u3Diva6+iokJPTU3Vx44d6yl7/PHHdUC/8cYbvY5/0UUX6dHR0V5lwcHB+vXXX+8ja3h4+FHPh0AgCDwidEcgEJwSVHtOExMTPd7Z2pSUlADuiYe1eeutt4iNjfV8RowY4bPvrbfeyo8//siPP/7IV199xW233casWbO8JoYuWbIEh8PB3XffjSzXDL233HILYWFhfPvttwCsWbOGnJwcpk+fjsVi8dSbMGEC6enpnnpWqxWTycQvv/xCYWHh8aqlyXjkkUdwuVw899xzfrerqsoPP/zAhRdeSKdOnTzlCQkJXHXVVfz++++ec3C8VJ+70tJSwB3+1L17d9LT08nLy/N8zj77bACWLl3qtf+wYcMYOHCg53vHjh254IIL+P777z0ZlKxWq2e70+kkPz+fzp07ExER4Tdk5ZZbbkFRlEb1Y/To0V6TdKvfdFxyySWEhob6lO/ZsweAv/76i507d3LVVVeRn5/v6W95eTmjR4/m119/RdM0r2NNnTrV6/sZZ5xBfn5+g85FREQEf/75Z4NCtgQCQWAQhr5AIGjzHDhwgMcff5xevXpx4MABXnjhBZ861QZUWVmZV/kll1ziMeL79Onjt/0uXbowZswYxowZw8UXX8zrr7/O9OnTeeWVVzyx1fv27QOgW7duXvuaTCY6derk2V5fPYD09HTPdrPZzPPPP8/ixYuJj49n5MiRvPDCCxw+fLjBeqlLbm4uhw8f9nzq6uJodOrUiWuvvZa3336bQ4cO+W27oqLCb7+6d++OpmkcOHDguGWHmnNXfS537tzJli1bvB7UYmNj6dq1K+DOylSbLl26+LTZtWtXKioqyM3NBcBms/HYY4/RoUMHzGYzMTExxMbGUlRURHFxsc/+qampje5Hx44dvb6Hh4cD0KFDB7/l1Q96O3fuBOD666/36fM777yD3W73kbHusSIjI73aPBovvPACmzdvpkOHDgwZMoQnnnjC89AhEAhaB8LQFwgEbZ7bb78dgMWLF3PZZZfxzDPP+Bgk6enpAGzevNmrvEOHDh4jvtoIagijR48G8JnM2ZTcfffdZGRk8Oyzz2KxWHj00Ufp3r0769evP672Bg8eTEJCgufz0ksvNWr/hx9+GJfL5Ynvbmk2b96Moige41rTNHr37u15UKv7mT59eqOPcccdd/DMM88wefJkvvzyS3744Qd+/PFHoqOjfbzl4P0GoKHU9wagvnK9Kkt29fFffPHFevtc943Vsdo8GpMnT2bPnj3MmDGDxMREXnzxRXr27MnixYuPua9AIGgZxGRcgUDQppk/fz4LFy7kP//5D0lJSbzyyit8//333HbbbV4GycSJE3nuuef49NNPGT58+Akf1+VyATVe5uTkZAB27NjhFbricDjIzMxkzJgxPvWqQ0yq2bFjh2d7NWlpadx7773ce++97Ny5k379+vHvf/+bTz75BHBPRm4on376KTabzfO9tpwNIS0tjWuuuYZZs2b5TKyNjY0lKCjIb3rS7du3I8uyj8e6Mezfv59ly5YxbNgwj0c/LS2NDRs2MHr06AbpodojXpuMjAyCgoI8k2XnzZvH9ddfz7///W9PncrKykYtftWYc9IYqifJhoWFea6npuBo8iYkJDB9+nSmT59OTk4OAwYM4JlnnuG8885rsuMLBILjR3j0BQJBm6W0tJQ777yT/v37e1ZvTUxM5KmnnuK7775j7ty5nrrDhw9n7NixvP322yxYsMBvew3xclZTncWnb9++AIwZMwaTycRrr73m1c67775LcXExEyZMANwpPOPi4njrrbe8UkAuXryYbdu2eepVVFRQWVnpdcy0tDRCQ0O99gsODm6wETp8+HDP24sxY8Y02tAHd6y+0+n0CY9SFIVzzjmHBQsWeKWEPHLkCHPmzGHEiBGEhYU1+ngABQUFXHnllaiq6skuBG6P88GDB5k9e7bPPjabjfLycq+ylStXesXZHzhwgAULFnDOOed4PN+KovhcBzNmzGjUKsjVufSbemXcgQMHkpaWxksvveQ37Ko6/Kix+LuGVFX1CQOKi4sjMTHRJ3WpQCAIHMKjLxAI2iyPPPII2dnZ/Pe///UKUbjtttv48MMPufvuuzn33HM9HuBPPvmEc889lwsvvJDzzjvPE65TvTLur7/+6tdTuW7dOo8HvbS0lJ9++omvvvqK008/nXPOOQdwe7QfeughnnzySc4991zOP/98duzYwcyZMxk8eLAnrafRaOT5559nypQpnHnmmVx55ZWe9JopKSn8/e9/B9ye5tGjRzN58mR69OiBwWBg/vz5HDlyhCuuuMIj28CBA3nzzTd5+umn6dy5M3FxcT5vCpqSaq/+hx9+6LPt6aef5scff2TEiBFMnz4dg8HArFmzsNvtfudN+CMjI4NPPvkEXdcpKSnxrIxbVlbGyy+/zLnnnuupe+211/Lll18ydepUli5dyvDhw1FVle3bt/Pll1/y/fffM2jQIE/9Xr16MW7cOK/0mgBPPvmkp87EiRP5+OOPCQ8Pp0ePHqxcuZIlS5YQHR3dYB1VT/h9+OGHueKKKzAajUyaNOmEF9OSZZl33nmH8847j549ezJlyhTat2/PwYMHWbp0KWFhYZ4H0MYwcOBAlixZwssvv0xiYiKpqal069aNpKQkLr30Uvr27UtISAhLlixh9erVXm87BAJBgAlkyh+BQCBoLtasWaMriqLffvvtfrevWrVKl2VZv/POO73KbTab/sorr+jDhg3Tw8LCdIPBoLdr106fOHGi/umnn3qlSvSXXtNgMOidOnXS77vvPr20tNTnuK+//rqenp6uG41GPT4+Xp82bZpXys5qvvjiC71///662WzWo6Ki9KuvvlrPysrybM/Ly9Nvu+02PT09XQ8ODtbDw8P1oUOH6l9++aVXO4cPH9YnTJigh4aG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iG/P6F2bsSsG+t79Ai5j84cTVSMDIUYocdaUjU2GTyco/H2pyvydUNFCIfT6P8S4BICuw4tfw9s/QqnNfeEHW+DG0fB/l0DtheD+7xP0lxci2V3oiozUMQbMRiiugAkD4aXrITz46MeLuwFy/bxyGpQGCx6CxCjfbYIm53fpHa/vI/SbAyRJ47nxxhuPWUeSJN59993jav+4R4Y33ngDu93OxRdfjMlkYt68eTzxxBMkJSXRr1+/422WO++8k7i4OKZOncqBAwf44osvuO+++zjrrLOYP38+F1xwASaTiS+++IIHHniA//73v7Rv396rjV9//ZWDBw9y2WWXER0dza+//srs2bM5fPgwjz/+uKfe4cOHmTJlCk6nkwsuuICkpCQOHDjAV1995TFsQ0K83SiPPvooZrOZq6++GkmSiImJaVT/cnJymDZtGmeffTajR49m+/btLFy4kG3btvHRRx/5eOtfffVVXC4XF110EcHBwSQnJ+Nyubj99tvZsGEDo0eP5pprrmH//v189dVX/Pnnn3z00UfEx8cfVY6ZM2fy3nvvcfrppzN16lRkWWbp0qU8+OCD3H///UyePNlT96uvvuK5554jLi6OSy65hISEBA4fPsxvv/3GkSNHSE1N5Z577uHll1/mrLPO4qyzzgIgKOjkf50uODVwunSefC0PVwvPa+ySdfiYdSRNQ68vfrjaT1NnFVuXovBnUgpRtgpkXaPQEoSi6yQVF9Cp6MTmHTgJopxIQqgJbZKAJd36Ema38fsbjxJut3m2rW2fymXX3uNl5APosoxLknh15ETeHTqaCoMJrcrIT80/wqsLP8BQlcvfqrr8hhp9170/z519EbKmcebuLS1q5IP7wam2kQ/w4z4YPkdlZ1GLiiKo5q3v4YGP6xQWwyNzINgMd09yF338Czz735p0s6oGmbVio95ZAoVlMO/+ox/Pn5EPsGY3/P09+OIfje+D4JTi559/9lmJXFVVDh06hKqqxMbGEhx8jAfOo3Dchr7D4eCjjz7CWDWwjh49mgsuuIAvv/zyhAz9nj178sADD3iVzZkzh5ycHL744guP4T148GCuvPJK5s+fz+233+5Vf+fOnXz00Uekp6cDcPnll3PffffxzTffcPHFF9O7d28AXnjhBVwuF59++qmXYTxmzBimTJnCp59+6uMFDwkJYebMmcftXczK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q5btO3WVHxFG1cmYad+cgRqIKtLWPUPi3jLIrDt1M3i6AC1VRUUFBoMBg8FzIXY6ndjtdry9vT1WhpbEaJT5BT1B4u7O7tS4fraTn3eCpqnE5h/Cx25nc2QHUJ2gKJWPI1SdjoVdexH75GTCS4roeTCTSfN/pNeBvZQYvfG3VQDUevman93m+n/7w3lnumqtnrR1z5C4i5asRfToFxYW8sorrzBs2DAGDhzIsGHDeOWVVygsLHSts3z5cpKTk/nuu+9q3ca4ceO48MIL3a68z8zM5JlnnuGSSy5h4MCBDB8+nLfffpvy8nK3106aNInk5GQOHz7Mc889x8UXX8yQIUPIyclhxIgRNcbGT506leTkZCZOnOi2/J133iE5OZn8/PyTqhvArFmzSE5O5p9//uGTTz7hyiuv5Oyzz2bBggV1xm3//v1cffXVXHrppaSlpbmWz58/n9tvv52UlBQGDx7M2LFj+eOPP2q8XlVVpk6dyogRIzj77LO57rrrmDt3bp37a86cTidr1qyRi7YaWauO+85seP57yro+QHrkfewOv5tNEfdzwy1LGfT65/z4+f/ImXQ7u195kE1vPMKu/95Hp/yDbkl+dcXePuwObcuvPfpz7oT/kOfjj9+RJP9EVCDHx/80Vk4cq1W3dQ+SuLcMMutO3Zp9j35JSQm33XYb+/btY8SIESQkJLBjxw6mT5/O6tWr+fzzz/H19WXgwIGEhIQwZ84cxowZ47aNzMxMNm3axJgxY1w98Nu2bWPChAn4+/tz9dVXEx4eTlpaGt999x0bN27ko48+qtFbf++99xISEsLtt99OeXk5Pj4+JCcnM3fuXCoqKlw966tXr0an07Fu3TqcTqfrJ8M1a9YQGxtLSEjISdWturfffhuHw8HIkSPx9fWlY8eOtcZt+/btPPjgg/j7+zN16lQiIyMBeP/99/nss884++yzmTBhAjqdjkWLFvHEE0/w2GOPcd1117m28eabb/Ltt9/St29fbrjhBgoKCnjllVdo165dQw+nEALgvblw/yegafgAsUcW3z/iVr7+fjLGI0nJwrjujL92AlmBITh1CqqufsMPCn38+KVHf8avWnjilansEQotKz75egghRCNwSm5fp2af6H/++edkZmby+OOPc+2117qWd+nShVdffZUvvviCu+++G71ez+WXX86XX35Jeno6sbGxrnXnzJkDwBVXXOFa9vzzzxMaGsoXX3zhlkz379+fRx99lLlz5zJ8+HC3ssTFxfHCCy+4LevXrx8zZ85kw4YNDBw4EJvNxsaNG7nkkkuYO3cu27Zto0ePHpSUlLBjxw5GjRp10nWrrqKigm+++ea4w3VWrlzJY489Rnx8PG+88QZBQUFAZfL/2WefMW7cOO69917X+mPGjOHhhx/mvffeY9iwYfj6+rJnzx6+++47+vXrx+TJk11fVs4//3xuvvnmOvftCaqqoqpHLzjU6XTodLo6lzudTjRNc1sOleOhq/f66PV6FEWpMf9yVSyO7SGqa7nBYKixbUVR0Ov1NcpY1/KG1Km25U2tTlAz7s29Tic8TsXl6J/4EkXT0Dg6pGZreDsu2ZnqSvKLTd5cc8vDFPr40RDeDtuJVzpCA3aERtGO0/N+ahHH6TTXqeq1mqbVWL+51ul4y5tKnar/v6XUqaqMnjpOniDj8uvW7BP9xYsXExwczMiRI92WX3311Xz88ccsWrTIlQwPGzaML7/8kjlz5nD//fcDlUnE3LlziYuLIyEhAYBdu3axc+dO7rrrLux2u9swmd69e2M2m1m5cmWNRP+mm26qUb5+/foBlb31AwcOJDU1FavVytixY/nrr79YvXo1PXr0YO3atTidTtf6J1u3Ktdcc81xk/zffvuN559/nrPPPpuXX37Zbd25c+eiKArDhg2rMTQoJSWFJUuWsGnTJgYOHMiSJUvQNI0bb7zR7Y2dkJDAgAEDWLlyZZ1laGxpaWkUFBS4EsfAwECio6PJyckhNzcXVVVxOBzExsYSHR1NWloaOTk5mEyVNxOKjY3FZrNRXFzMunXrUBQFq9VKUlISwcHBrF+/noqKCvR6PTqdjqSkJOx2O5s2bXL96qOqKvHx8fj5+ZGamgqA1WrFx8eHfv36YbFY2Lhxo2ufZrOZiIgIFEUhIyMDALvdTnBwMD169CA7O5u9e/eiaRoGg4GwsDDat2/Pjh07KC0tddXd19eXnj17kpaWhsViwWq1YjKZiI2NJTw8nFWrVrndETIqKoqIiAhSU1NxOp2uD4++fftiNBpZtWoVDofDNaY1OTmZrKwsDh486NqG3W5nyJAhWCwWtm/f7tqn2WymV69eZGRkcOjQIdfxMJvNxMbGYrFYyMrKch2Pdu3a0bFjR8rLy1mxYoWrrUZHR6PX6yksLMRisbhimZCQQEREBJs3b6aoqMh1PBISEjAYDGzatMlVV1VV6dixIxEREaxZs8a1DZPJRHJyMjabjdWrV7uOh16vp3379phMJnbs2OGqp6+vL3379iUvL4+dO3e6jkdgYCBxcXHs3r3bVUYAk8lEnz59yMjIIDc317XP6OhooqOjWb9+PYZdh+hdUnPc/OroODrnH43zwvieDU7yOxzOZeTmVbU+V/3LRRUFKDdVxj87O5vdu3e7YhMWFoaPjw9lZWXk5ua6YhkbG0v79u1JS0sjLy/PdTxiY2Px8fFh+/btriREVVXX8V6/fj1Op9MVm6SkJIxGI8uXL3ftE6B9+/YEBQWxadMmoPJ4GI1GBgwYgMViYcuWLa7jYTabSUxMJDMzk7y8o9ca6PV6+vXrR3Z2NllZWa59hoWFERcXR2pqKhUVR4c3BQUFERMTQ3p6OhaLxfX+6NKlC+Hh4aSmplJcXOx6fyQkJFBeXk5WVpYrUbJarfTr1w+j0ciaNWtc+6xK0g4dOkRmZqbbF90ePXrgdDrZvn276/0RGBhIr169yMvLY9u2ba7YBAYGEhQUhNPpJCsry7XP6Oho4uLiyMjIIDs723U8oqOjCQoKYvfu3a5hqaqqEh4eTnx8PJs3b6a8vNxVzoSEBIKCglixYgVeXl6u2ERGRhIVFcXatWtdx0Ov19O/f39sNhvr1693HQ+9Xk+vXr04cOAABw4cnbZV0zQGDRpEXl4e6enprn0GBgaSmJjI1q1bKSk5eotmX19funTpQlZWFrm5ua7j0alTJ6Kjo9m2bRsFBQWu4xEbG4vT6SQnJ8dV16pzN8D69espKytzxTIpKYnS0lJ27tzpOh5Op5Pu3btjNBpJTU11HQ+z2VznuTw8PBy9Xk96errreISHh5OYmEh2djYZGRmu4xEWFkZERASZmZkUFRW5jkdwcDCJiYn1PpeHhYURGxvrej9VHY/evXtjNBr5559/XMcDoFevXhQUFLBv3z7XNk50Lk9LS3PLFYxGI3379sUTZKaduila9a+AzdDgwYNJTEzkk08+qfHc7bffzvbt21m+fLlr2U033cThw4eZNWsWOp2OtWvXctddd/HAAw9wyy23ALBgwQKefPLJ4+63X79+fPDBB0DlGP3Zs2ezbNmyWpPsa665Bl9fXz7//HM+/PBDfvnlF37//XcmTpxIRUUF77//Pq+//jrff/89f/zxBwEBASddt1mzZvHcc8/x1ltvcc4559RYf/jw4VgsFsrLyxk0aBBvvvlmjW/eDzzwAH///fdx6/3cc88xbNgwXn75ZX7++Wd+/fVXoqOj3dZ5/fXX+fbbb5k5cyZRUVHH3V5jOB09JoqiYLPZXP+Hltez1RTrpCgKdrsdRVFccW/udTrhcXI40Xe+F2VfvlvSnevrz4sXXM3bMz8HYGWHzgy6/yVOVnhxIeveepx2RYdP6nXpQaHEHv6o1bS9xq5T1euqytMS6nS85U2lTlX/GgyGepe9qdepqoytqUf/8vFZbn//9nF0HWu2Ps2+R/9kDRs2jNdff53Vq1czYMAA5syZ4xrWU6XqzXLTTTcxaNCgWrdTlYxXV1dPer9+/fj5558pKSlh9erVJCcnu5ZPnjzZ1XvYpUuXWrd7Mo7Xm9++fXsMBgNr1qxhxYoVtX4hUBSFd955x9V7cay4uLhTKp8nVJ0I67u8thNV1YnOaDS69ZoAdc6sdDLLFUWpdfnJlv1k6nS85U2lTlXDGMxmc424N9c6HW+5Xq8HvR6+nQg3voWyN5cSLyN2nR6dprE1LIpnLr6O8asWEl5ioVNBDnvahNda/rrcuH6ZK8l3Ujn+/kSdYQd9A4gpzIMyKzofU6toe8dbfibqpGka5eXldc7W1hzrdKLlTaFOJ4p7XWWva3lTqNOJyniyy0+2Tp4gF+DWrdkn+u3atWPv3r04HA63huhwOMjMzKxxYeill17K22+/zZw5c+jVqxcLFy5kwIABhIaGutbp0KEDUNmIBwwYcMplTE5O5scff2TZsmVs2bLFNeSnX79+WK1Wli5dyu7du2sM/TnZup2Ir68vb7zxBg888ACPPvoo//3vfzn33HNdz7dv356///6btm3bEhMTc9xtVe17z549NXr0q4aatCROp5PU1FSSk5M9OmVqa9Nq4z44EdI/gD05eBsM5JeAX/o+WB3I5A7xvHjhKPfZdTQNo8OGXadH09cdp4vSNvKfBT9WW6Kg1DqDfqVfE8+ic/5BOhXkVP66cExPszh9Wm1b9zCJe8vglDH6dWoaX8VOwdChQzl8+DC//vqr2/Jff/2Vw4cPc95557ktDw4O5uyzz2bRokXMmzeP0tJShg0b5rZO165diYuL46effnKNcazO4XC4jbs9keTkZBRF4dNPP8XhcLjG4cfHx9OmTRs++ugjNE1z9fQ3tG714efnx+TJk+nRowdPPPEECxcenXWj6leN9957r9apxqpP+zl06FAUReHrr792W3f79u2sWlX72F8hxEnQ6SC2LYYOoXTsFkrIFX1Y8Fwsh58NpuB+A//uD219wKgDvaJg8zIdN8k/b+cm5n/8EoEVR6cH1h8nyQe4YPcWYvMP4euwV17s5mc+bdUTQojTRe6MW7dm//V17NixLFy4kFdffZUdO3bQtWtXduzYwYwZM+jYsaNr3H11V1xxBUuXLuXNN9/Ez8/PrVcbKn+mev7557n77ru5/vrrGTFiBLGxsVRUVJCVlcWff/7JfffdV+Ni3LoEBgbSuXNn0tLSiIqKcuuJP+uss1iwYAEGg4E+ffqcct3qw8fHh3feeYd//etf/Pvf/+aFF17g4osvpnv37tx555189NFH3HDDDVx44YWEhYW5LvZavny56yLbTp06ce211/LDDz9w9913c/7551NQUMAPP/xA586dXRcsCiFOv2BvhZdSDLyUUvO53tMcbKzl3laLOvfkkWE38cSiGQRYy5jZLZn04DAeXTq7zh+9q26mVWgykxobRy27E0II0YQ1+0Tfz8+PTz/9lClTprB06VJmzpxJSEgIo0aN4q677qoxzzzAkCFDCAwMxGKxcNVVV7nN5FCla9eufP3110ydOpWlS5fy008/4evrS2RkJMOHD3ebHac++vXrR1paWo1e+/79+7NgwQK6deuGj4/PKdetvsxmM2+99RaPPPIIzzzzDE6nk8suu4w777yTbt268d133/Htt99SXl5OmzZtiIuL45FHHnHbxiOPPEJISAi//PILb7/9Nu3bt+fxxx8nMzOzRSb6cot0z5C4n5y1t+gZ+LWTNQdVwP0uuW+mXMHrQ4ej0zRUnY4rU/9h2G09GJi5k8Hp2xi0dydmp71G4u9nq+Cre2+XRP8Mk7buGRL35s8pY/Tr1Oxn3RFCCFGTQ9UY9JWTNTlHl3UuPMSozf/wZ4dErGZvOmdnMb3XIIwOO7M/+z8u2rmpzu29++IT3P9U/0YouRBCnJwhEw64/f3Xh5EeKknT0+x79IVoDJqmYbFYCAwMrDH7izhzJO4NZ9AprL7FwJzdTr7YonFee4U7ekVh0F1ducL8dYT/3Y37l/3Gi3O/I8BWUee2NkR2ZK05tM7nxamTtu4ZEveWQW6YVbdmfzGuEI2h6mY1tV2kLM4cifupGxan5/sRBib00WPQVfswLCpn5KZ/eGfGtDqTfLtOx+yE3lx2+5MkFeU2UolbJ2nrniFxbxmciuL2EEdJoi+EEK1RWDBPL/z5uKt4qSoX7dxMn+w9WCPaNFLBhBBCnC6S6AshRGt0dhfaWwpqLD52pnyT08H//fYNprCGX/wvhBBnkuOYhzhKEn0h6kFRlFrvzirOLIn7GeRlgLsuclvk0On4LaFvjVXj8g+yzz+4sUrWKklb9wyJe8sgQ3fqJom+EPWg1+vp1auXTMPWyCTuZ9gVZ7n9mR4cjkNf82PBavBC21ez91+cPtLWPUPi3jI4FPeHOEoSfSHqQVVVcnJyUNVjBzaIM0nifoYld3a7N26X/IMM27auxmptykvpbCtstGK1RtLWPUPiLlo6SfSFqAdVVUlPT5cPg0YmcT/D2gajxEW4Lcr2C6p11WuSvBuhQK2XtHXPkLi3DA4Ut4c4ShJ9IYRozba8A/ddBuGBaGH+hNstFBvd7xae3r49EefEeaiAQghxfHbF/SGOkhtmCSFEa2bygnfHw7vjcdjtfDl1KiGKD71+zMa8I4vy85KIe2O0p0sphBB1sssFuHWSRF+IelAURe6c6AESd8+o8FGInvkA3t4yXKexSFv3DIl7y2D3dAGaMEn0hagHvV5PYmKip4vR6kjcPaO0tFRmIWlk0tY9Q+IuWjoZoy9EPaiqSlZWllyw1cgk7p7h7e0tMW9k0tY9Q+LeMpQpittDHCWJvhD1IB8GniFx9wxvb280TTvxiuK0kbbuGRL3lqFccX+Io2TojhBCCCGEaLZsMqVmnaRHXwghhBtVOvOFEKJFkB59IepBp9MRFhaGTiffjRuTxL1xRb8HOY5xUKTAZA0TDioekY+JxiBt3TMk7i2EdOjXSVq2EPWg0+mIi4uTD4NGJnFvPNlFDnIccPQTU8EKvLnC4blCtSLS1j1D4t5CKIr7Q7hIyxaiHlRVZffu3XLBViOTuDeedh9Bbd1iE5c3elFaJWnrniFxFy2dJPpC1IOqquTm5sqHQSOTuIvWQtq6Z0jcWwjp0a+TJPpCCCGEEEK0QHKVlRBCCCGEaL6kE79OkugLUQ86nY7o6Gi5YKuRSdxFayFt3TMk7i2FZPp1kURfiHqo+jAQjUviLloLaeueIXFvISTPr5N8hRWiHpxOJ9u2bcPpdHq6KK2KxF20FtLWPUPiLlo66dEXoh40TcNisaBpcsvQxiRxF62FtHXPkLi3ENKjXydJ9IUQQgghRDMmmX5dZOhOK5SdnU1ycjJTpkzxdFGEEEIIIU6NcsxDuEii30JlZ2czZcoUduzY4emitAg6nY7Y2FiZmaGRSdxFayFt3TMk7i2FZPp1kaE7LVR2djYff/wxUVFRdO3a1e25yMhIli9fjl6v91Dpmh+dTkd4eLini9HqSNxFayFt3TMk7qKlk6+wDVBaWurpIpwSRVEwmUwYDPI9r76cTicbN26UmRkaWauI+9Z9sGP/0b/358Mz38DaXUeXOZ3Q6S4IuRkWrIcPfoMRL8OyLfDxAnhjJvy9DfKL4J80WL4NMg5VvvanFfDfn8Buh8c+r9w2wIECWLMLHC04ts1Iq2jrTZDEvYWQDv06KVorvNR81qxZPPfcc7z33nts2LCBWbNmkZ+fT8eOHRk3bhyXXHKJa93hw4cTGRnJxIkTmTx5Mps2bSIwMJCZM2cCsG7dOj755BO2bNmCw+GgU6dOXHvttVx11VVu+7zzzjs5cOAAU6ZM4Y033mDNmjUoisLQoUN57LHH8Pb2Ztq0afz666/k5eURExPDo48+Su/evd22U15ezqeffsqCBQvIyckhICCAAQMGcPfddxMZGelWv2P17duXjz76iOzsbEaMGMH48eO56667XM87HA6++uor5syZw/79+zGbzfTp04cJEyYQHx/vWq/667t168bHH3/Mrl278Pf35/LLL+fee+9tcV8iHA4Ha9asITk5ucXVrSlr0XEvKIYR/4Xl2yv/vjAJAn0rE/MqSR3h0RFw87sN24deB071+OtEh8CvT6As6ljnKtojLSz2TVCLbutNmMS9ZVCeLHb7W/uvv4dK0vS06lb97rvvUl5ezjXXXANUJshPPfUUNpuN4cOHu9Y7dOgQd999NxdeeCHnn38+ZWVlACxdupRHH32UkJAQbrrpJnx8fJg/fz4vvvgi+/fv595773XbX3l5OXfffTd9+/blvvvuY+vWrcycOROr1UpQUBCbN2/muuuucyXcEydOZNasWfj6+gKVJ6T77ruPjRs3csEFF3DTTTeRmZnJTz/9xD///MMXX3xBREQEffr0Ydy4cUydOpWRI0fSp08fANq0aXPceDzzzDMsWLCAAQMGMGrUKPLz8/nxxx8ZN24cH3/8MQkJCW7rL1++nOnTpzNq1ChGjBjBkiVL+PLLL/H39+e22247tYMjREv3/A9Hk3yAP1JrrpO6t+FJPpw4yQfIyofb34ObXm34foQQwqOkG78urTrRLyws5LvvvsPPzw+Aa665hjFjxvDmm29y0UUX4e3tDcD+/ft5+umn3XrpnU4nr776Kmazmc8//5ywsDAArrvuOu666y4+//xzhg8fTocOHdz2d8stt3DLLbe4lhUXF/PHH3+QkJDA1KlTXT0KMTExPPzww8ybN49Ro0YBlV9ENm7cyM0338yDDz7o2saAAQN46KGHmDx5Mi+88ALR0dEMGDCAqVOnkpSUxOWXX37CWKxcuZIFCxZw0UUX8fLLL6MolW+aiy66iJtvvpn//e9/fPLJJ26vSU9P54cffiAqKgqAUaNGMXr0aL7//vsmleirqoqqHk14dDodOp2uzuVOp9NtTuWqi7Q0TXP7eVev16MoCg6Hw21/Vdc+HPtTcF3LDQZDjW0rioJer69RxrqWN6ROtS1vanWCmnFv7nWqOk7K8u1N56Np4x64QYU6Lkh0OBytru01dp2qXqtpWo31m2udjre8qdSp+v9bSp2qyuip4ySallad6F9zzTWuJB/Az8+PUaNG8d5777F27VoGDx4MQGBgoFsPP8C2bds4ePAgN9xwgyvJB/Dy8uKWW27hkUceYcmSJdx8882u5/R6PaNHj3bbTu/evVm0aBGjRo1y+9mwqhd+3759rmWLFi1Cp9Mxbtw4t22cc845dOnShaVLl6KqaoNmD1i8eDEAt912myvJB+jSpQtDhgxh8eLFHD58mODgYNdz5557rivJh8o3eXJyMj/88ANlZWX4+PicdDnOhLS0NAoKClxxCQwMJDo6mpycHHJzc1FVFYfDQWxsLNHR0aSlpZGTk4PJZAIgNjYWh8OBwWBg/fr1AFitVpKSkggODmb9+vVUVFSg1+vR6XQkJSVht9vZtGmT65iqqkp8fDx+fn6kpqa6tuHj40O/fv2wWCxs3LjRtU+z2UxERASKopCRkQGA3W4nODiYHj16kJ2dzd69e9E0DYPBQFhYGO3bt2fHjh1u15D4+vrSs2dP0tLSsFgsWK1WTCYTsbGxhIeHs2rVKrfjHRUVRUREBKmpqTidTteHR9++fTEajaxatQqHw4HRaAQgOTmZrKwsDh486NqG3W5nyJAhWCwWtm/f7tqn2WymV69eZGRkcOjQIdfxMJvNxMbGYrFYyMrKch2Pdu3aERsbi7+/PytWrHB98Y6Ojkav11NYWIjFYnHFMiEhgYiICDZv3kxRUZHreCQkJGAwGNi0aZOrrqqq0rFjRyIiIlizZo1rGyaTieTkZGw2G6tXr3YdD71eT/v27TGZTK6ZrOx2O76+vvTt25e8vDx27tzpOh6BgYHExcWxe/duVxkBTCYTffr0ISMjA792vkSscW+rGjX7pWpbdrqVtw8+zhVbKn//vZKwsDASExPJzs5m9+7drtiEhYXh4+NDWVkZubm5QGUsY2Njad++PWlpaeTl5bmOR2xsLD4+Pmzfvt2VhKiqSrt27ejYsSPr16/H6XS6jkdSUhJGo5Hly5e79gnQvn17goKC2LRpE1B5PIxGIwMGDMBisbBlyxbX8TCbzSQmJpKZmUleXp5rG3q9nn79+pGdnU1WVpZrn2FhYcTFxZGamkpFRYVr/aCgIGJiYkhPT8disbjeH126dCE8PJzU1FSKi4td74+EhATKy8vJyspyJUpWq5V+/fphNBpZs2aNa59Qeb7Nyclh7969bl90e/TogdPpZPv27a73R2BgIL169SIvL49t27a5thEYGEhQUBBOp5OsrCzXPqOjo4mLiyMjI4Ps7GzX8YiOjiYoKIjdu3dTXl7uOh7h4eHEx8ezefNmysvLXeVMSEggKCiIFStW4OXl5YpNZGQkUVFRrF271nU89Ho9/fv3x2azsX79etfx0Ov19OrViwMHDnDgwAHXNjRNY9CgQeTl5ZGenu7aZ2BgIImJiWzdupWSkhLX+r6+vnTp0oWsrCxyc3Ndx6NTp05ER0ezbds2CgoKXMcjNjYWp9NJTk6Oq64VFRXExcWh1+tZs2YNZWVlrlgmJSVRWlrKzp07XcfD6XTSvXt3jEYjqampruNhNpvrPJeHh4ej1+tJT093HY/w8HDX+ykjI8N1PMLCwoiIiCAzM5OioiLX8QgODiYxMbHe5/KwsDBiY2Nd76eq49G7d2+MRiP//POP63gA9OrVi4KCArec40Tn8rS0NAoLC13rG41G+vbti0c0mV6TpqdVJ/qdOnWqsSwmJgao7MWv0q5duxrfUrOzs4HKE8ex4uLiamwDIDQ01O2DCiAgIADALWGuvrx6kpCdnU1YWJjruWP3WfWmO9EQndpkZ2ej0+lc9a8uNjaWxYsXs3//frdEv127djXWDQwMdJW7qST6Xbp0qbVnxNfXl44dO7otr1q/c+fONdaPiIio0WMCR7+UVV9uNpsZOHBgjeVQmRwfKzAw0PXFEtx7TEJCQtyWQ2V7adu2bY0ydu/evdZe8S5dutT6K0X//v1r7QWqrU5V6x+7vGPHjkRHR9dap+p1rSp7TEyMW9yr6urr61ujToqi0K1bt1qPX3h4eK116tGjR6116tevX611OvZ4VB2/6scDjvZs1Van0NBQt/ddVZ26du1a6/GIiYlBffsetG3PoaQdSXSSOqL5meDvNNdnltauDcqdF6L954d6fY4d+6VAU0DRaj7n9n9/M8ZP7oPUujJ9HWefffYJ217Vl6dj61rX+6lPnz71fj8BNY7Hid5PAwYMcP1ddTxiY2PdzvvHqxNUJnq1tb263k9JSUk16hQUFOTWGXS8slctj4iIcFt+orZX17mjtjod+/6rqtOx75vjvZ8ABg0aVO86mc1mt+NRVacOHTq4fY4c7/0E1HkuqK1OAImJibX2fh977jjeec9sNrt97h2vrnD8c3ltdarr/ZSQkHBGz+XHHg+9Xu/q6KmtTrW1vWM/W6t/0Wh0ntx3E9eqE/36qupJPFXH62mv67mmfK308erTlMpddeKs7/Lafnp0OBysX7+ePn361Lhgq64LuE5muaIotS4/2bKfTJ2Ot7yp1Ol4cW+udXIt7xgOW96BJVvAoIchiZXrLtkCk3+DEf1Qbj63cr93XQwx94DdAf+5DrZkwYYMuPU8yLFAcQUM7YaS1BF2ZEO5FTpHoQzsWjnLzp4clGdGwaNfgtGA8vVDsD0b9uaiDO2OPsAHUh01yllbLFpL2zve8jNRp6qLQmtr69A863Si5U2hTieKe11lr2t5U6jTicp4sstPtk6iaWnVif6ePXtqLKsaJlFbb3V1Vc9X/RRXXdWyE23jZLVr144VK1ZQXFyMv7/7FeXp6en4+voSFBQEnPw363bt2qGqKhkZGW69b1D/mLR0Mv2aZ7TouBv0cEGS+7Kh3Ssf1UW0gbLv6rfNnp3c/37hhqP/n/Hvo/9P6lT5EE1Gi27rTZjEvQWQDv06teqvYtOnT3cb71dSUsJPP/2Ev78/Z5111nFfm5CQQNu2bZk1a5bbmE+Hw8GXX37pmjrzdDr33HNRVZVp06a5LV++fDk7duwgJSXF9e26athM9aE/x1NV1qlTp7r1xu/atYulS5fSu3fvGj9fCiGEEEKIpqtV9+gHBQUxduxY14W2s2bN4uDBgzz99NMnHK6j1+t57LHHePTRRxk7diwjR47Ex8eHBQsWsGnTJsaNG+c2487pMHz4cGbPns3nn39OdnY2ffv2Zd++fUyfPp2QkBC36TxjYmLw9fVl+vTpeHt74+/vT5s2bWqMU64ycOBALrroIubPn09xcTHnnHOOa3pNo9HII488clrrIoQQQghxekiXfl1adaJ///33s2HDBn788UcKCgro0KEDL774Ipdeemm9Xp+SksL777/Pp59+ypdffondbqdTp041puI8XQwGA5MnT3bdMGvRokX4+/tzwQUXcM8997hd0OPt7c1LL73EBx98wBtvvIHNZqNv3751JvoAL7zwAl27dmX27Nm89dZbmM1m+vbty9133+12w6zWSK/Xk5SUJFOHNTKJu2gtpK17hsS9hZA8v06t+s64H374Ya1XzQtxrKp5hKtmMhCNQ+LeeJT/1X0xrtwZ98yTtu4ZEveWQXm2zO1v7fmmMetfU9Cqx+gLUV9Op5M1a9bIRVuNTOIuWgtp654hcRctnXTTCCGEEEKIZkx+jamLJPpCCCGEEKL5kjy/Tq0y0R8+fLhrph0hhBBCCCFaolZ5Ma4QJ0su2PIMiXvjkYtxPUvaumdI3FsGZVK529/aJLOHStL0yMW4QtSTzWbzdBFaJYm7aC2krXuGxF20ZJLoC1EPTqeT1NRUmZmhkUncRWshbd0zJO4thKK4P4SLJPpCCCGYexVAzZGcbw1p7JIIIYQ4XSTRF0IIwaXxhiMfCFXJfuW/Dw6Q8flCiCZOOeYhXOQMLkQ9yS3SPUPi3ngqHoTPPptKtimGh68ZQoCft6eL1KpIW/cMibtoyaRHX4h6MBgM9OvXD4NBvhs3Jol741MUaGfLwGyS5KcxSVv3DIl7SyFd+nWRRF+IetA0jcLCQmQ22sYlcfcMg8EgMW9k0tY9Q+LeQkieXydJ9IWoB6fTyfbt22VmhkYmcfcMPz8/VFX1dDFaFWnrniFxFy2d/FYlhBBCCCGaL+nFr5P06AshhBBCCNECSaIvRD0oioLZbJZbpDcyibtnyDCGxidt3TMk7qKlk6E7QtSDXq+nV69eni5GqyNx94zi4mKZcrCRSVv3DIl7CyFf1OokPfpC1IOqquTk5MgFio1M4u4ZRqNRYt7IpK17hsS9hZBZd+okib4Q9aCqKunp6fJh0Mgk7p7h4+Mj0w02MmnrniFxFy2dJPpCCCGEEEK0QDJGXwghhBBCNF8yXKdOkugLUQ+KohAYGCgzMzQyibtn2O12Txeh1ZG27hkS95ZCjl9dJNEXoh70ej2JiYmeLkarI3H3jNLSUpl1p5FJW/cMiXsLIXl+nWSMvhD1oKoqWVlZcsFWI5O4e4a3t7fEvJFJW/cMibto6STRF6Ie5MPAMyTunuHt7S2z7jQyaeueIXEXLZ0M3RFCCCGEEM2XDN2pk/ToCyGEEEII0QJJoi9EPeh0OsLCwtDp5C3TmCTunmG1WmUWkkYmbd0zJO6ty6RJk/Dz8/N0MRqVDN0Roh50Oh1xcXGeLkarI3H3jPLyckl8Gpm0dc+QuLcQ0i9RJzmTC1EPqqqye/duuWCrkUncPcNsNkvMG5m0dc+QuIuWThJ9IepBVVVyc3Plw6CRSdw9w2Qyyaw7jUzaumdI3FsIRXF/NNCmTZu45JJL8PX1JTAwkGuuuYbMzEzX87fffjtDhgxx/Z2Xl4dOp6Nfv36uZSUlJXh5efHjjz82uBynkyT6QgghhBCi+VKOeTTAvn37SElJIT8/n6+++ooPP/yQdevWMXToUIqLiwFISUlh9erVVFRUALB06VJMJhPr1693rfP333/jcDhISUk59XqdBjJGX7Romqa53nynwuFwUFpaSlFREQaDvG0ai8S9cdntdsrLyzEajRQVFWGz2TxdpFZD2rpnSNxPP39//2Z5Mf+bb76J3W5n/vz5tGnTBoA+ffrQrVs3pk2bxv33309KSgpWq5V//vmHoUOHsnTpUkaOHMn8+fNZvnw5l156KUuXLqVLly5ERER4uEaVpFWLFq24uJjAwEBPF0MIIYRoFSwWCwEBAY26T+2RU09n//rrL84//3xXkg+QkJBAr169WLZsGffffz8xMTFER0ezdOlSV6I/YcIEysvLWbJkiSvRbyq9+SCJvmjh/P39sVgsp7ydkpIShg0bxpw5c1rd1FyeJHFvfBJzz5C4e4bE/fTz9/f3dBEa5PDhw/Tu3bvG8oiICAoKClx/VyX4RUVFbNy4kZSUFEpLS5k+fTpWq5VVq1Yxfvz4Riz58UmiL1o0RVFOS8+CTqdDr9cTEBAgHwaNSOLe+CTmniFx9wyJu6jSpk0bcnJyaiw/dOgQXbp0cf2dkpLCxIkTWbx4MaGhoSQkJFBaWsrjjz/OokWLsFqtbhfseppcjCuEEEIIIVq1c845h4ULF3L48GHXsh07dpCamso555zjWlbVg//GG2+4huj07t0bs9nM//3f/9G+fXs6derU2MWvk/ToCyGEEEKIVsHpdDJ9+vQayx988EGmTp3KxRdfzFNPPUVFRQVPP/00HTp04NZbb3Wtl5CQQHh4OEuWLOGdd94BQK/XM3jwYObOncuNN97YWFWpF0n0hagHo9HI+PHjMRqNni5KqyJxb3wSc8+QuHuGxL31qaio4Nprr62x/Msvv2TJkiU88sgj3Hjjjej1ei666CLeeOONGtcdpKSkMH36dLeLbocOHcrcuXOb1IW4AIomd0URQgghhBCixZEx+kIIIYQQQrRAkugLIYQQQgjRAskYfSFOwbZt2xg7diwmk4m//vrL08VpsZxOJ1999RXLli0jPT0dTdPo3LkzEyZMoE+fPp4uXouwZ88eXn31VVJTU/H19eXyyy/nnnvuwcvLy9NFa7H++OMPfvvtN7Zv305RUREdOnRg9OjRjBgxolneWbS5Kisr45prriEnJ4cvvviCbt26ebpIQpw2kugL0UCapvHqq68SHBxMWVmZp4vTolmtVqZNm8YVV1zB2LFj0el0/PLLL0yYMIHJkyfTr18/TxexWSsqKmLChAl06NCB1157jZycHN58800qKip4/PHHPV28Fuvrr78mMjKShx56iODgYP755x9eeuklDh06xJ133unp4rUan3zyCU6n09PFEOKMkERfiAaaOXMmhYWFjBgxgu+++87TxWnRTCYTM2bMcLv52YABAxg9ejTffPONJPqn6KeffqK0tJTXXnuNwMBAoPJXlFdeeYXbbruNsLAwD5ewZXrzzTcJCgpy/d2vXz8sFgtff/01d9xxBzqdjK490/bs2cOPP/7IQw89xH//+19PF0eI007OIkI0QHFxMZMnT2bixIkYDPJ9+UyrunPlscs6d+5Mbm6uh0rVcvz999/079/fleQDXHTRRaiqysqVKz1YspatepJfpWvXdi4QIAAAGN9JREFUrpSWllJeXt74BWqFXn31VUaNGkXH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"/>
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
<h2 id="Get-previous-models-results-data"><a id="toc1_5_"></a><a href="#toc0_">Get previous models results data</a><a class="anchor-link" href="#Get-previous-models-results-data">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [13]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">pd</span><span class="o">.</span><span class="n">options</span><span class="o">.</span><span class="n">display</span><span class="o">.</span><span class="n">float_format</span> <span class="o">=</span> <span class="s1">'</span><span class="si">{:.4f}</span><span class="s1">'</span><span class="o">.</span><span class="n">format</span>
<span class="n">results_df</span> <span class="o">=</span> <span class="n">display_results</span><span class="p">()</span>
<span class="n">results_df</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[13]:</div>
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
<th>12</th>
<td>rf1 - ALLFeat - train</td>
<td>0.9799</td>
<td>0.9801</td>
<td>0.9798</td>
<td>0.9801</td>
<td>0.9874</td>
<td>0.9390</td>
<td>0.9881</td>
</tr>
<tr>
<th>15</th>
<td>rf2 - NOdept - train</td>
<td>0.9799</td>
<td>0.9801</td>
<td>0.9798</td>
<td>0.9801</td>
<td>0.9873</td>
<td>0.9390</td>
<td>0.9881</td>
</tr>
<tr>
<th>18</th>
<td>xg1 - ALLFeat - train</td>
<td>0.9797</td>
<td>0.9798</td>
<td>0.9796</td>
<td>0.9798</td>
<td>0.9870</td>
<td>0.9386</td>
<td>0.9879</td>
</tr>
<tr>
<th>17</th>
<td>xg1 - ALLFeat - test</td>
<td>0.9791</td>
<td>0.9792</td>
<td>0.9791</td>
<td>0.9792</td>
<td>0.9860</td>
<td>0.9376</td>
<td>0.9875</td>
</tr>
<tr>
<th>22</th>
<td>xg2 - NOdept - train</td>
<td>0.9803</td>
<td>0.9804</td>
<td>0.9802</td>
<td>0.9804</td>
<td>0.9854</td>
<td>0.9404</td>
<td>0.9883</td>
</tr>
<tr>
<th>20</th>
<td>xg2 - NOdept - train</td>
<td>0.9803</td>
<td>0.9804</td>
<td>0.9802</td>
<td>0.9804</td>
<td>0.9854</td>
<td>0.9404</td>
<td>0.9883</td>
</tr>
<tr>
<th>14</th>
<td>rf2 - NOdept - test</td>
<td>0.9809</td>
<td>0.9810</td>
<td>0.9809</td>
<td>0.9810</td>
<td>0.9833</td>
<td>0.9426</td>
<td>0.9886</td>
</tr>
<tr>
<th>21</th>
<td>xg2 - NOdept - test</td>
<td>0.9805</td>
<td>0.9807</td>
<td>0.9805</td>
<td>0.9807</td>
<td>0.9833</td>
<td>0.9418</td>
<td>0.9884</td>
</tr>
<tr>
<th>23</th>
<td>xg2 - NOdept - test</td>
<td>0.9805</td>
<td>0.9807</td>
<td>0.9805</td>
<td>0.9807</td>
<td>0.9833</td>
<td>0.9418</td>
<td>0.9884</td>
</tr>
<tr>
<th>11</th>
<td>rf1 - ALLFeat - test</td>
<td>0.9809</td>
<td>0.9810</td>
<td>0.9809</td>
<td>0.9810</td>
<td>0.9832</td>
<td>0.9426</td>
<td>0.9886</td>
</tr>
<tr>
<th>16</th>
<td>xg1 - ALLFeat - GS train</td>
<td>0.9570</td>
<td>0.9100</td>
<td>0.9330</td>
<td>0.9780</td>
<td>0.9820</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>19</th>
<td>xg2 - NOdept - GS train</td>
<td>0.9600</td>
<td>0.9130</td>
<td>0.9360</td>
<td>0.9790</td>
<td>0.9810</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>13</th>
<td>rf2 - NOdept - GS train</td>
<td>0.9639</td>
<td>0.9086</td>
<td>0.9354</td>
<td>0.9789</td>
<td>0.9808</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>10</th>
<td>rf1 - ALLFeat - GS train</td>
<td>0.9638</td>
<td>0.9079</td>
<td>0.9350</td>
<td>0.9787</td>
<td>0.9802</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>8</th>
<td>dt2 - NOdept - test</td>
<td>0.9784</td>
<td>0.9785</td>
<td>0.9785</td>
<td>0.9785</td>
<td>0.9791</td>
<td>0.9359</td>
<td>0.9871</td>
</tr>
<tr>
<th>5</th>
<td>dt1 - ALLFeat - test</td>
<td>0.9784</td>
<td>0.9785</td>
<td>0.9785</td>
<td>0.9785</td>
<td>0.9791</td>
<td>0.9359</td>
<td>0.9871</td>
</tr>
<tr>
<th>9</th>
<td>dt2 - NOdept - train</td>
<td>0.9784</td>
<td>0.9786</td>
<td>0.9784</td>
<td>0.9786</td>
<td>0.9789</td>
<td>0.9352</td>
<td>0.9872</td>
</tr>
<tr>
<th>6</th>
<td>dt1 - ALLFeat - train</td>
<td>0.9784</td>
<td>0.9786</td>
<td>0.9784</td>
<td>0.9786</td>
<td>0.9789</td>
<td>0.9352</td>
<td>0.9872</td>
</tr>
<tr>
<th>7</th>
<td>dt2 - NOdept - GS train</td>
<td>0.9506</td>
<td>0.9135</td>
<td>0.9317</td>
<td>0.9774</td>
<td>0.9737</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>4</th>
<td>dt1 - ALLFeat - GS train</td>
<td>0.9506</td>
<td>0.9135</td>
<td>0.9317</td>
<td>0.9774</td>
<td>0.9737</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>1</th>
<td>lr1 - ALLFeat - train</td>
<td>0.7737</td>
<td>0.8130</td>
<td>0.7860</td>
<td>0.8130</td>
<td>0.8867</td>
<td>0.2578</td>
<td>0.8930</td>
</tr>
<tr>
<th>3</th>
<td>lr2 - NOdept - train</td>
<td>0.7702</td>
<td>0.8111</td>
<td>0.7833</td>
<td>0.8111</td>
<td>0.8860</td>
<td>0.2467</td>
<td>0.8920</td>
</tr>
<tr>
<th>2</th>
<td>lr2 - NOdept - test</td>
<td>0.7670</td>
<td>0.8062</td>
<td>0.7806</td>
<td>0.8062</td>
<td>0.8783</td>
<td>0.2476</td>
<td>0.8888</td>
</tr>
<tr>
<th>0</th>
<td>lr1 - ALLFeat - test</td>
<td>0.7760</td>
<td>0.8112</td>
<td>0.7878</td>
<td>0.8112</td>
<td>0.8781</td>
<td>0.2771</td>
<td>0.8915</td>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [28]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">results_test_df</span> <span class="o">=</span> <span class="n">results_df</span><span class="p">[</span><span class="n">results_df</span><span class="p">[</span><span class="s1">'Model'</span><span class="p">]</span><span class="o">.</span><span class="n">str</span><span class="o">.</span><span class="n">contains</span><span class="p">(</span><span class="s1">'test'</span><span class="p">)]</span>
<span class="n">results_test_df</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[28]:</div>
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
<th>17</th>
<td>xg1 - ALLFeat - test</td>
<td>0.9791</td>
<td>0.9792</td>
<td>0.9791</td>
<td>0.9792</td>
<td>0.9860</td>
<td>0.9376</td>
<td>0.9875</td>
</tr>
<tr>
<th>14</th>
<td>rf2 - NOdept - test</td>
<td>0.9809</td>
<td>0.9810</td>
<td>0.9809</td>
<td>0.9810</td>
<td>0.9833</td>
<td>0.9426</td>
<td>0.9886</td>
</tr>
<tr>
<th>21</th>
<td>xg2 - NOdept - test</td>
<td>0.9805</td>
<td>0.9807</td>
<td>0.9805</td>
<td>0.9807</td>
<td>0.9833</td>
<td>0.9418</td>
<td>0.9884</td>
</tr>
<tr>
<th>23</th>
<td>xg2 - NOdept - test</td>
<td>0.9805</td>
<td>0.9807</td>
<td>0.9805</td>
<td>0.9807</td>
<td>0.9833</td>
<td>0.9418</td>
<td>0.9884</td>
</tr>
<tr>
<th>11</th>
<td>rf1 - ALLFeat - test</td>
<td>0.9809</td>
<td>0.9810</td>
<td>0.9809</td>
<td>0.9810</td>
<td>0.9832</td>
<td>0.9426</td>
<td>0.9886</td>
</tr>
<tr>
<th>8</th>
<td>dt2 - NOdept - test</td>
<td>0.9784</td>
<td>0.9785</td>
<td>0.9785</td>
<td>0.9785</td>
<td>0.9791</td>
<td>0.9359</td>
<td>0.9871</td>
</tr>
<tr>
<th>5</th>
<td>dt1 - ALLFeat - test</td>
<td>0.9784</td>
<td>0.9785</td>
<td>0.9785</td>
<td>0.9785</td>
<td>0.9791</td>
<td>0.9359</td>
<td>0.9871</td>
</tr>
<tr>
<th>2</th>
<td>lr2 - NOdept - test</td>
<td>0.7670</td>
<td>0.8062</td>
<td>0.7806</td>
<td>0.8062</td>
<td>0.8783</td>
<td>0.2476</td>
<td>0.8888</td>
</tr>
<tr>
<th>0</th>
<td>lr1 - ALLFeat - test</td>
<td>0.7760</td>
<td>0.8112</td>
<td>0.7878</td>
<td>0.8112</td>
<td>0.8781</td>
<td>0.2771</td>
<td>0.8915</td>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [30]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">10</span><span class="p">,</span> <span class="mi">6</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">barplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'Model'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="s1">'AUC'</span><span class="p">,</span> <span class="n">hue</span><span class="o">=</span><span class="s1">'AUC'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">results_test_df</span><span class="p">,</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xlabel</span><span class="p">(</span><span class="s1">'Model'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylabel</span><span class="p">(</span><span class="s1">'AUC'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">title</span><span class="p">(</span><span class="s1">'Model Comparison test data'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">ylim</span><span class="p">(</span><span class="mf">0.75</span><span class="p">,</span> <span class="mi">1</span><span class="p">)</span>  <span class="c1"># Set y-axis range between 0 and 1</span>
<span class="n">plt</span><span class="o">.</span><span class="n">legend</span><span class="p">(</span><span class="n">title</span><span class="o">=</span><span class="s1">'AUC Score'</span><span class="p">)</span>
<span class="n">plt</span><span class="o">.</span><span class="n">xticks</span><span class="p">(</span><span class="n">rotation</span><span class="o">=</span><span class="s1">'vertical'</span><span class="p">)</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA1cAAAKcCAYAAAAEmkAzAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAACF/0lEQVR4nOzde3zP9f//8ft7YweHmeOwMENjkomIDqJlTEgnh4QVRZYyhxCGiiRrkqKclVIfkqJJCyUi58oh58PY5rgxjG2v3x9+3t/ebYRe24u9btfL5X3J+/l6vl/vx2vPXnvv/n69Xs+XwzAMQwAAAACA/8TN6gIAAAAAID8gXAEAAACACQhXAAAAAGACwhUAAAAAmIBwBQAAAAAmIFwBAAAAgAkIVwAAAABgAsIVAAAAAJiAcAUAAAAAJiBcAQDyhMPh0PDhw6/7dfv27ZPD4dCMGTNMryk/CggIUNeuXa0uAwBsiXAFADYyY8YMORwOORwOrVy5MttywzBUoUIFORwOPfLIIxZU+N8lJSWpX79+ql69ugoVKqTChQurbt26euONN3Tq1CmrywMA5GMFrC4AAJD3vLy8NGfOHN13330u7StWrNChQ4fk6elpUWX/zW+//abw8HCdOXNGnTp1Ut26dSVJ69at01tvvaWffvpJ33//vcVV5q4dO3bIzY3vTgHACoQrALCh8PBwffnll3rvvfdUoMD/fRTMmTNHdevW1bFjxyys7sacOnVKbdu2lbu7uzZu3Kjq1au7LH/zzTf18ccfW1Rd7jIMQ+fPn5e3t/ctG4wBID/gqy0AsKEOHTro+PHjWrp0qbPtwoUL+t///qeOHTvm+Jq0tDT17dtXFSpUkKenp4KCgvTOO+/IMAyXfunp6erTp49Kly6tokWLqnXr1jp06FCO60xISNCzzz4rPz8/eXp6qmbNmpo2bdoNbdPkyZOVkJCgmJiYbMFKkvz8/DRkyBCXtg8++EA1a9aUp6enypcvr169emU7dfDBBx/UHXfcoS1btqhx48YqVKiQqlatqv/973+SLh3ta9Cggby9vRUUFKQffvjB5fXDhw+Xw+HQ9u3b9dRTT8nHx0clS5bUyy+/rPPnz7v0nT59upo2baoyZcrI09NTwcHB+vDDD7NtS0BAgB555BEtWbJE9erVk7e3tyZPnuxc9vdrri5evKgRI0aoWrVq8vLyUsmSJXXfffe5jL0k/fjjj7r//vtVuHBh+fr6qk2bNtq2bVuO27Jr1y517dpVvr6+KlasmCIiInT27NkcRgUA7IVwBQA2FBAQoIYNG+qzzz5ztn333XdKSUlR+/bts/U3DEOtW7fWu+++q+bNmysmJkZBQUHq37+/oqKiXPp269ZNsbGxatasmd566y0VLFhQLVu2zLbOpKQk3XPPPfrhhx8UGRmp8ePHq2rVqnruuecUGxt73du0cOFCeXt764knnrim/sOHD1evXr1Uvnx5jRs3To8//rgmT56sZs2a6eLFiy59T548qUceeUQNGjTQ22+/LU9PT7Vv315z585V+/btFR4errfeektpaWl64okndPr06Wzv99RTT+n8+fMaPXq0wsPD9d577+n555936fPhhx+qUqVKGjx4sMaNG6cKFSroxRdf1MSJE7Otb8eOHerQoYMefvhhjR8/XiEhIVfczhEjRqhJkyZ6//339dprr6lixYrasGGDs88PP/ygsLAwJScna/jw4YqKitKqVat07733at++fTluy+nTpzV69Gg99dRTmjFjhkaMGHENP3UAyOcMAIBtTJ8+3ZBk/Pbbb8b7779vFC1a1Dh79qxhGIbx5JNPGk2aNDEMwzAqVapktGzZ0vm6BQsWGJKMN954w2V9TzzxhOFwOIxdu3YZhmEYmzZtMiQZL774oku/jh07GpKM6OhoZ9tzzz1nlCtXzjh27JhL3/bt2xvFihVz1rV3715DkjF9+vSrblvx4sWN2rVrX9PPITk52fDw8DCaNWtmZGZmOtvff/99Q5Ixbdo0Z1vjxo0NScacOXOcbdu3bzckGW5ubsavv/7qbF+yZEm2WqOjow1JRuvWrV1qePHFFw1JxubNm51tl7f578LCwozAwECXtkqVKhmSjLi4uGz9K1WqZHTp0sX5vHbt2i5jmZOQkBCjTJkyxvHjx51tmzdvNtzc3IzOnTtn25Znn33W5fVt27Y1SpYsedX3AAA74MgVANjUU089pXPnzunbb7/V6dOn9e23317xlMDFixfL3d1dvXv3dmnv27evDMPQd9995+wnKVu/V155xeW5YRiaN2+eWrVqJcMwdOzYMecjLCxMKSkpLkdWrkVqaqqKFi16TX1/+OEHXbhwQa+88orL5A/du3eXj4+PFi1a5NK/SJEiLkf0goKC5Ovrqxo1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kHr37q3evXtr2rRpevDBBxUQEKAHHnhAU6ZM0bBhw3J83S+//KKUlBRNmTJFderUUeXKldWkSRO9++67qly5srPfn3/+qUceeUQ+Pj4qWrSo7r//fu3evVuSlJWVpZEjR+q2226Tp6enQkJCFBcX53ztvn375HA4NHfuXDVu3FheXl769NNPJUlTpkxRjRo15OXlperVq+uDDz64oe2/HoQrAAAAIB/64osvVL16dQUFBalTp06aNm2aDMO47vV8+eWXunDhggYMGJDjcl9f3xzby5Ytq4yMDH311VdXfN+EhAQ98MAD8vT01I8//qj169fr2WefVUZGhiRp/PjxGjdunN555x1t2bJFYWFhat26tXbu3OmynoEDB+rll1/Wtm3bFBYWpk8//VTDhg3Tm2++qW3btmnUqFEaOnSoZs6ced3bfz24iTAAAACQD02dOlWdOnWSJDVv3lwpKSlasWKFHnzwwetaz86dO+Xj46Ny5cpd1+vuueceDR48WB07dlSPHj1Uv359NW3aVJ07d5afn58kaeLEiSpWrJg+//xzFSxYUJJ0++23O9fxzjvv6NVXX1X79u0lSWPGjNGyZcsUGxuriRMnOvu98soreuyxx5zPo6OjNW7cOGdb5cqVtXXrVk2ePFldunS5ru24Hhy5AgAAAPKZHTt2aO3aterQoYMkqUCBAmrXrp2mTp163esyDOOG7wP15ptvKjExUZMmTVLNmjU1adIkVa9eXb///rskadOmTbr//vudwervUlNTdfjwYd17770u7ffee6+2bdvm0lavXj3nv9PS0rR7924999xzKlKkiPPxxhtvOE83zC0cuQIAAADymalTpyojI0Ply5d3thmGIU9PT73//vsqVqyYfHx8JEkpKSnZTu07deqUihUrJunSkaSUlBQdOXLkuo9eSVLJkiX15JNP6sknn9SoUaNUp04dvfPOO5o5c6a8vb1vfCP/pnDhws5/nzlzRpL08ccfq0GDBi793N3dTXm/K+HIFQAAAJCPZGRkaNasWRo3bpw2bdrkfGzevFnly5fXZ599JkmqVq2a3NzctH79epfX79mzRykpKc7T85544gl5eHjo7bffzvH9cprK/Uo8PDxUpUoV52yBd955p37++eccZ/jz8fFR+fLl9csvv7i0//LLLwoODr7ie/j5+al8+fLas2ePqlat6vL4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1q3TF198keP/wPPnz7eoKvuYN2+e2rdvr3r16qlhw4aSpF9//VW//fabPv/8c04FyQMZGRkaMWKE3nvvPZ05c0aSVKRIEb300kuKjo5WwYIFLa4w/9uzZ4/atm2r33//XQ6Hwzk1/uWL+5klLfclJCSoffv2+uWXX+Tr6ytJOnXqlBo1aqTPP/9ct912m7UF2kBmZqbefffdK34mnzhxwqLK7OOnn35Sq1atVKxYMdWrV0+StH79ep06dUrffPONHnjgAYsrzP+OHj2qiIgIfffddzkuz8+fB/Y7VpcPff7552rUqJG2bdumr776ShcvXtSff/6pH3/8kZmJ8siAAQM0aNAgrV69WjExMYqJidGqVas0ePBgDRgwwOrybOGll17SRx99pLffflsbN27Uxo0b9fbbb2vq1Knq3bu31eXZwssvv6zKlSsrOTlZhQoV0p9//qmffvpJ9erV0/Lly60uzxaee+45Xbx4Udu2bdOJEyd04sQJbdu2TVlZWerWrZvV5dnCiBEjFBMTo3bt2iklJUVRUVF67LHH5ObmpuHDh1tdni306tVL7dq10969ezV//nzNnz9fe/bsUfv27dWrVy+ry7OFV155RadOndKaNWvk7e2tuLg4zZw5U9WqVdPChQutLi93Gbjl1apVy3j//fcNwzCMIkWKGLt37zaysrKM7t27G8OGDbO4Onvw9vY2du7cma39r7/+Mry9vS2oyH58fHyMxYsXZ2tftGiR4ePjY0FF9lOyZElj8+bNhmFcGo/t27cbhmEY8fHxRkhIiJWl2YaXl5exYcOGbO3r1q3jd1EeCQwMNL799lvDMC59Ju/atcswDMMYP3680aFDBytLsw0vLy/n75+/2759u+Hl5WVBRfZTtmxZY82aNYZhGEbRokWNHTt2GIZhGF9//bVx7733WllaruPIVT6we/dutWzZUtKlmVjS0tLkcDjUp08fffTRRxZXZw8PPvigfv7552ztK1eu1P33329BRfbj6empgICAbO2VK1d2mUEQuSczM1NFixaVJJUqVUqHDx+WJFWqVEk7duywsjTbqFChQo43a87MzMz3M3TdLBITE1WrVi1Jl05NTklJkSQ98sgjWrRokZWl2cZdd93lvNbq77Zt26batWtbUJH9pKWlOe9nVbx4cR09elSSVKtWLW3YsMHK0nIdU7HnA8WLF9fp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HjuZPn261SXg/0tNTdXRo0eztR89elSnT5+2oCL7eOCBB7Rjxw7n80aNGmnPnj0WVmRf3t7e+uWXX7KFq19++UVeXl4WVWUPfz+CKElt2rSxqBLrcOQKMMGMGTPUrVs3tWjRQg0aNJAkrVmzRnFxcfr444/VtWtXawu0gQceeEBeXl6aPXu28+htUlKSOnfurPPnz+f/mxbexDIyMpScnKzy5ctbXUq+17lzZ/38888aN26c6tevL+nS76L+/fvr/vvv18yZMy2uEMh9b731lkaMGKHu3bu77AfTpk3T0KFDNXDgQIsrRH5GuMrHkpOTNWXKFA0ePNjqUmxhzZo1eu+995ynn9WoUUO9e/d2hi3krl27dqlt27b666+/VKFCBUmX7v1WrVo1LViwINspm8g7mzdv1l133cVR9Dxw9uxZ9evXT9OmTdPFixclSQUKFNBzzz2nsWPHqnDhwhZXaF979uxRjx499P3331tdii188cUXGj9+vMtn8ssvv6ynnnrK4srsbcuWLapXr57LbNf5DeEqH+MPGtiNYRhaunSptm/fLunSh2loaKjtLqa92fC7KO+lpaVp9+7dkqQqVaoQqm4C7AfApf2gTp06+fp2HVxzBZggISFB8+bN019//SVJCgoK0uOPP85pUHnM4XCoWbNmatasmdWlAJY5deqUdu3aJUmqWrUqwQq2c+7cOS1dutTlMzk0NFTe3t4WVwZJ+f4LT8IV8B998MEHioqK0oULF+Tj4yPp0kXl/fv3V0xMDPfUyAMZGRl699139dlnnzk/TG+//XZ17NhRL7/8sgoWLGhxhUDu27dvn3r16qUlS5Y477HkcDjUvHlzvf/++woICLC2QCAPLFy4UN26ddOxY8dc2kuVKqWpU6eqVatWFlUGuyBcAf/BokWL1Lt3b73yyivq27evypUrJ0k6cuSIxo4dq5dfflkBAQEKDw+3uNL869y5c3r44Ye1evVqhYaG6oEHHpAkbdu2Ta+++qoWLlyo77//nhmictGWLVuuuvzvM6ghdxw8eFD33HOPChYsqNdff101atSQJG3dulUffvihGjZsqN9++0233XabxZUCuWfVqlV64okn1Lp1a/Xt29dlPxg3bpyeeOIJrVixQvfcc4/FleZfqampV11uh1lLuebqFhYVFXXV5UePHtWcOXM4vzsXPfjgg7rvvvv0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"/>
</div>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [12]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="kn">import</span> <span class="nn">warnings</span>
<span class="n">pd</span><span class="o">.</span><span class="n">options</span><span class="o">.</span><span class="n">display</span><span class="o">.</span><span class="n">float_format</span> <span class="o">=</span> <span class="s1">'</span><span class="si">{:.4f}</span><span class="s1">'</span><span class="o">.</span><span class="n">format</span>

<span class="n">warnings</span><span class="o">.</span><span class="n">filterwarnings</span><span class="p">(</span><span class="s2">"ignore"</span><span class="p">)</span>

<span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">6</span><span class="p">):</span>
    <span class="n">model_file</span> <span class="o">=</span> <span class="n">model_list</span><span class="p">[</span><span class="n">i</span><span class="p">]</span>
    <span class="n">model_data</span> <span class="o">=</span> <span class="nb">globals</span><span class="p">()[</span><span class="n">data_list</span><span class="p">[</span><span class="n">i</span><span class="p">]]</span><span class="o">.</span><span class="n">copy</span><span class="p">()</span>
    <span class="n">model_title</span> <span class="o">=</span> <span class="n">model_name</span><span class="p">[</span><span class="n">i</span><span class="p">]</span>

    <span class="c1"># Isolate the outcome variable</span>
    <span class="n">Y</span> <span class="o">=</span> <span class="n">model_data</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span>

    <span class="c1"># Select &amp; Isolate the feature variables and drop the outcome variable</span>
    <span class="n">X</span> <span class="o">=</span> <span class="n">model_data</span><span class="o">.</span><span class="n">copy</span><span class="p">()</span>
    <span class="n">X</span> <span class="o">=</span> <span class="n">X</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="s1">'left'</span><span class="p">,</span> <span class="n">axis</span> <span class="o">=</span> <span class="mi">1</span><span class="p">)</span>

    <span class="c1"># Prepare training and test data</span>
    <span class="n">X_train</span><span class="p">,</span> <span class="n">X_test</span><span class="p">,</span> <span class="n">y_train</span><span class="p">,</span> <span class="n">y_test</span> <span class="o">=</span> <span class="n">train_test_split</span><span class="p">(</span><span class="n">X</span><span class="p">,</span><span class="n">Y</span><span class="p">,</span> <span class="n">test_size</span><span class="o">=</span><span class="mf">0.25</span><span class="p">,</span> <span class="n">stratify</span><span class="o">=</span><span class="n">Y</span><span class="p">,</span> <span class="n">random_state</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>

    <span class="c1">#model_file = model_list[0]</span>
    <span class="n">model</span> <span class="o">=</span> <span class="n">read_pickle</span><span class="p">(</span><span class="n">model_path</span><span class="p">,</span> <span class="n">model_file</span><span class="p">)</span>
    <span class="nb">print</span><span class="p">(</span><span class="n">color</span><span class="o">.</span><span class="n">BOLD</span> <span class="o">+</span> <span class="n">model_title</span> <span class="o">+</span> <span class="s2">" - "</span> <span class="o">+</span> <span class="n">model_file</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">END</span><span class="p">)</span>
    <span class="n">best_model</span> <span class="o">=</span> <span class="n">model</span><span class="o">.</span><span class="n">best_estimator_</span> <span class="c1"># Store best model parameters for later testing</span>
    
    <span class="n">y_pred_test</span> <span class="o">=</span> <span class="n">best_model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">X_train</span><span class="p">)</span>

<span class="c1">#    explainer = shap.TreeExplainer(best_model)</span>

    <span class="c1"># Calculate SHAP values for a specific observation</span>
<span class="c1">#    shap_values = explainer.shap_values(X_train)</span>

    <span class="c1">#shap_values = shap_values[..., 1]</span>
    

    <span class="n">predict_precision</span><span class="p">,</span> <span class="n">predict_recall</span><span class="p">,</span> <span class="n">predict_f1_score</span><span class="p">,</span> <span class="n">_</span> <span class="o">=</span> <span class="n">precision_recall_fscore_support</span><span class="p">(</span><span class="n">y_train</span><span class="p">,</span> <span class="n">y_pred_test</span><span class="p">,</span> <span class="n">average</span><span class="o">=</span><span class="kc">None</span><span class="p">)</span>
    <span class="n">f1_true_class</span> <span class="o">=</span> <span class="n">predict_f1_score</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span>  <span class="c1"># Index 1 corresponds to the "True" class</span>
    <span class="n">f1_false_class</span> <span class="o">=</span> <span class="n">predict_f1_score</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span>  <span class="c1"># Index o corresponds to the "False" class</span>


    <span class="nb">print</span><span class="p">(</span><span class="s2">"Predict will leave (True)  : </span><span class="si">{:.4%}</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">f1_true_class</span><span class="p">))</span>
    <span class="nb">print</span><span class="p">(</span><span class="s2">"Predict will stay (False)  : </span><span class="si">{:.4%}</span><span class="se">\n</span><span class="s2">"</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">f1_false_class</span><span class="p">))</span>
    

    
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
<pre><span class="ansi-bold">Decision Tree - All Features - hr_dt1-AllFeat</span>
Predict will leave (True)  : 93.5215%
Predict will stay (False)  : 98.7202%

<span class="ansi-bold">Decision Tree - No Departments - hr_dt2-NOdept</span>
Predict will leave (True)  : 93.5215%
Predict will stay (False)  : 98.7202%

<span class="ansi-bold">Random Forest - All Features - hr_rf1-AllFeat</span>
Predict will leave (True)  : 93.9029%
Predict will stay (False)  : 98.8081%

<span class="ansi-bold">Random Forest- No Departments - hr_rf2-NOdept</span>
Predict will leave (True)  : 93.9029%
Predict will stay (False)  : 98.8081%

<span class="ansi-bold">XGBoost - All Features - hr_xg1-AllFeat</span>
Predict will leave (True)  : 93.8568%
Predict will stay (False)  : 98.7928%

<span class="ansi-bold">XGBoost - No Departments - hr_xg2-NOdept</span>
Predict will leave (True)  : 94.0407%
Predict will stay (False)  : 98.8284%

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
<h2 id="Comparing-ROC-and-Precision-Recall-across-models">Comparing ROC and Precision-Recall across models<a class="anchor-link" href="#Comparing-ROC-and-Precision-Recall-across-models">¶</a></h2>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">PIL</span> <span class="kn">import</span> <span class="n">Image</span>
<span class="n">plots</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'./99-documentation-project/08-plot_data/plot-pr-curve1.png'</span><span class="p">,</span>
         <span class="s1">'./99-documentation-project/08-plot_data/plot-pr-curve2.png'</span><span class="p">,</span>
         <span class="s1">'./99-documentation-project/08-plot_data/plot-roc-curve1.png'</span><span class="p">,</span>
         <span class="s1">'./99-documentation-project/08-plot_data/plot-roc-curve2.png'</span><span class="p">]</span>

<span class="n">image_path</span> <span class="o">=</span> <span class="s1">'./99-documentation-project/08-plot_data/plot-pr-curve1.png'</span>

<span class="k">for</span> <span class="n">plot</span> <span class="ow">in</span> <span class="n">plots</span><span class="p">:</span>
    <span class="n">img</span> <span class="o">=</span> <span class="n">Image</span><span class="o">.</span><span class="n">open</span><span class="p">(</span><span class="n">plot</span><span class="p">)</span>
    <span class="n">display</span><span class="p">(</span><span class="n">img</span><span class="p">)</span>
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
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h3 id="Conclusion"><a id="toc1_5_1_"></a><a href="#toc0_">Conclusion</a><a class="anchor-link" href="#Conclusion">¶</a></h3><p>The best performing models are RandomForest and XGBoost.</p>
<p>There's not a great deal of difference between Random Forest and XGBoost.</p>
<p>Removing features to simplify the model, doesn't appear to make a significant difference in smaller datasets, although I would imagine it makes a larger computational time difference for larger datasets.</p>
<p>I'll proceed with the demonstration model using XGBoost, but will also compare predictions across the three main models.</p>
</div>
</div>
</div>
</div>
</main>
</body>
<script src="../../scripts/projects.js"> </script>

</html>