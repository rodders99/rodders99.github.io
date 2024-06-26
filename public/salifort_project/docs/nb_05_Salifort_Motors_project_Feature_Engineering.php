<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>nb_05_Salifort_Motors_project_Feature_Engineering</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" >
<link href="/css/custom-menu2.css" rel="stylesheet" type="text/css" >
<link href="/css/project-style.css" rel="stylesheet" type="text/css" >
<link href="/css/custom.css" rel="stylesheet" type="text/css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>
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
<h1 id="Salifort-Motors---Feature-Engineering"><a id="toc1_"></a><a href="#toc0_">Salifort Motors - Feature Engineering</a><a class="anchor-link" href="#Salifort-Motors---Feature-Engineering">¶</a></h1><h3 id="Document-Information"><a id="toc1_1_1_"></a><a href="#toc0_">Document Information</a><a class="anchor-link" href="#Document-Information">¶</a></h3><table style="margin-right:auto;margin-left:0px">
<tbody>
<tr>
<td>Document Title</td>
<td>Salifort Motors Feature Engineering</td>
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
<h3 id="Document-Overview"><a id="toc1_1_3_"></a><a href="#toc0_">Document Overview</a><a class="anchor-link" href="#Document-Overview">¶</a></h3><p>Feature Engineering for HR Data provided by Salifort Motors. This notebook details the feature engineering carried out on the provided data.</p>
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
<li><a href="#toc1_">Salifort Motors - Feature Engineering</a><ul>
<li><a href="#toc1_1_1_">Document Information</a></li>
<li><a href="#toc1_1_2_">Client Details</a></li>
<li><a href="#toc1_1_3_">Document Overview</a></li>
</ul>
</li>
<li><a href="#toc2_">Table of contents</a><ul>
<li><a href="#toc2_1_">Initialise Notebook</a><ul>
<li><a href="#toc2_1_1_">Import Packages</a></li>
<li><a href="#toc2_1_2_">Set Pandas Options</a></li>
<li><a href="#toc2_1_3_">Initialise Notebook Options</a></li>
<li><a href="#toc2_1_4_">Import data</a></li>
</ul>
</li>
<li><a href="#toc2_2_">Gather information about the data</a><ul>
<li><a href="#toc2_2_1_">Describe the dataframe</a></li>
<li><a href="#toc2_2_2_">Check for missing values</a></li>
<li><a href="#toc2_2_3_">Check for duplicates</a></li>
<li><a href="#toc2_2_4_">Check Categorical values for consistency</a></li>
</ul>
</li>
</ul>
</li>
<li><a href="#toc3_">Feature Engineering</a><ul>
<li><a href="#toc3_1_1_">Encode categorical values 'dept' as dummies</a></li>
<li><a href="#toc3_1_2_">Feature Engineer continuous values <code>avg_mnth_hrs</code> to binary <code>overworked</code></a></li>
<li><a href="#toc3_1_3_">Correlation Heatmap (full)</a></li>
<li><a href="#toc3_1_4_">Correlation Heatmap (Focus)</a></li>
<li><a href="#toc3_1_5_">Discard problematic columns</a><ul>
<li><a href="#toc3_1_5_1_"><code>accident</code></a></li>
</ul>
</li>
<li><a href="#toc3_2_">Save the Feature Engineered dataframe</a><ul>
<li><a href="#toc3_2_1_">Focus Features</a></li>
</ul>
</li>
<li><a href="#toc3_3_">Save the Focus Features dataframe</a></li>
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
<h2 id="Initialise-Notebook"><a id="toc2_1_"></a><a href="#toc0_">Initialise Notebook</a><a class="anchor-link" href="#Initialise-Notebook">¶</a></h2><h3 id="Import-Packages"><a id="toc2_1_1_"></a><a href="#toc0_">Import Packages</a><a class="anchor-link" href="#Import-Packages">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [56]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Import packages</span>

<span class="c1"># Data manipulation</span>
<span class="kn">import</span> <span class="nn">numpy</span> <span class="k">as</span> <span class="nn">np</span>
<span class="kn">import</span> <span class="nn">pandas</span> <span class="k">as</span> <span class="nn">pd</span>

<span class="c1"># Data visualization</span>
<span class="kn">import</span> <span class="nn">matplotlib.pyplot</span> <span class="k">as</span> <span class="nn">plt</span>
<span class="kn">import</span> <span class="nn">seaborn</span> <span class="k">as</span> <span class="nn">sns</span>


<span class="c1"># Data modelling Imports</span>
<span class="kn">from</span> <span class="nn">xgboost</span> <span class="kn">import</span> <span class="n">XGBClassifier</span><span class="p">,</span> <span class="n">XGBRegressor</span><span class="p">,</span> <span class="n">plot_importance</span>

<span class="kn">from</span> <span class="nn">sklearn.linear_model</span> <span class="kn">import</span> <span class="n">LogisticRegression</span>
<span class="kn">from</span> <span class="nn">sklearn.tree</span> <span class="kn">import</span> <span class="n">DecisionTreeClassifier</span>
<span class="kn">from</span> <span class="nn">sklearn.ensemble</span> <span class="kn">import</span> <span class="n">RandomForestClassifier</span>

<span class="c1"># For metrics and helpful functions</span>
<span class="kn">from</span> <span class="nn">sklearn.model_selection</span> <span class="kn">import</span> <span class="n">GridSearchCV</span><span class="p">,</span> <span class="n">train_test_split</span>
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="kn">import</span> <span class="n">accuracy_score</span><span class="p">,</span> <span class="n">precision_score</span><span class="p">,</span> <span class="n">recall_score</span><span class="p">,</span>\
<span class="n">f1_score</span><span class="p">,</span> <span class="n">confusion_matrix</span><span class="p">,</span> <span class="n">ConfusionMatrixDisplay</span><span class="p">,</span> <span class="n">classification_report</span>
<span class="kn">from</span> <span class="nn">sklearn</span> <span class="kn">import</span> <span class="n">metrics</span>
<span class="kn">from</span> <span class="nn">sklearn.metrics</span> <span class="kn">import</span> <span class="n">roc_auc_score</span><span class="p">,</span> <span class="n">roc_curve</span>
<span class="kn">from</span> <span class="nn">sklearn.tree</span> <span class="kn">import</span> <span class="n">plot_tree</span>
<span class="kn">from</span> <span class="nn">sklearn.preprocessing</span> <span class="kn">import</span> <span class="n">StandardScaler</span>

<span class="kn">import</span> <span class="nn">statsmodels.api</span> <span class="k">as</span> <span class="nn">sm</span>

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
<h3 id="Set-Pandas-Options"><a id="toc2_1_2_"></a><a href="#toc0_">Set Pandas Options</a><a class="anchor-link" href="#Set-Pandas-Options">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [57]:</div>
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
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h3 id="Initialise-Notebook-Options"><a id="toc2_1_3_"></a><a href="#toc0_">Initialise Notebook Options</a><a class="anchor-link" href="#Initialise-Notebook-Options">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [58]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">load_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/00-data_cleaned/"</span>
<span class="n">save_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/00-data_cleaned/"</span>
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
<h3 id="Import-data"><a id="toc2_1_4_"></a><a href="#toc0_">Import data</a><a class="anchor-link" href="#Import-data">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [59]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Load cleaned dataset, with outliers removed, into a dataframe</span>
<span class="n">df1</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_NoOl_NoFE_AllFeat.csv"</span><span class="p">)</span>

<span class="n">df1</span><span class="o">.</span><span class="n">info</span><span class="p">()</span>
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
<pre>&lt;class 'pandas.core.frame.DataFrame'&gt;
RangeIndex: 11167 entries, 0 to 11166
Data columns (total 10 columns):
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
 8   dept            11167 non-null  object 
 9   salary          11167 non-null  object 
dtypes: float64(8), object(2)
memory usage: 872.6+ KB
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
<h2 id="Gather-information-about-the-data"><a id="toc2_2_"></a><a href="#toc0_">Gather information about the data</a><a class="anchor-link" href="#Gather-information-about-the-data">¶</a></h2>
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
<h3 id="Describe-the-dataframe"><a id="toc2_2_1_"></a><a href="#toc0_">Describe the dataframe</a><a class="anchor-link" href="#Describe-the-dataframe">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [60]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Assuming you have a DataFrame named 'df'</span>
<span class="n">summary</span> <span class="o">=</span> <span class="n">df1</span><span class="o">.</span><span class="n">describe</span><span class="p">(</span><span class="n">include</span><span class="o">=</span><span class="s1">'all'</span><span class="p">)</span>

<span class="c1"># Additional summary information</span>
<span class="n">info</span> <span class="o">=</span> <span class="n">df1</span><span class="o">.</span><span class="n">info</span><span class="p">()</span>

<span class="c1"># Combine summary statistics and information</span>
<span class="n">summary_info</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">concat</span><span class="p">([</span><span class="n">summary</span><span class="p">,</span> <span class="n">info</span><span class="p">],</span> <span class="n">axis</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>

<span class="n">summary_info</span>
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
<pre>&lt;class 'pandas.core.frame.DataFrame'&gt;
RangeIndex: 11167 entries, 0 to 11166
Data columns (total 10 columns):
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
 8   dept            11167 non-null  object 
 9   salary          11167 non-null  object 
dtypes: float64(8), object(2)
memory usage: 872.6+ KB
</pre>
</div>
</div>
<div class="jp-OutputArea-child jp-OutputArea-executeResult">
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[60]:</div>
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
<th>count</th>
<td>11167.00</td>
<td>11167.00</td>
<td>11167.00</td>
<td>11167.00</td>
<td>11167.00</td>
<td>11167.00</td>
<td>11167.00</td>
<td>11167.00</td>
<td>11167</td>
<td>11167</td>
</tr>
<tr>
<th>unique</th>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>10</td>
<td>3</td>
</tr>
<tr>
<th>top</th>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>sales</td>
<td>low</td>
</tr>
<tr>
<th>freq</th>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>NaN</td>
<td>2997</td>
<td>5429</td>
</tr>
<tr>
<th>mean</th>
<td>0.63</td>
<td>0.72</td>
<td>3.79</td>
<td>200.14</td>
<td>3.11</td>
<td>0.15</td>
<td>0.17</td>
<td>0.01</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>std</th>
<td>0.24</td>
<td>0.17</td>
<td>1.16</td>
<td>48.56</td>
<td>0.90</td>
<td>0.36</td>
<td>0.37</td>
<td>0.12</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>min</th>
<td>0.09</td>
<td>0.36</td>
<td>2.00</td>
<td>96.00</td>
<td>2.00</td>
<td>0.00</td>
<td>0.00</td>
<td>0.00</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>25%</th>
<td>0.49</td>
<td>0.57</td>
<td>3.00</td>
<td>157.00</td>
<td>2.00</td>
<td>0.00</td>
<td>0.00</td>
<td>0.00</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>50%</th>
<td>0.66</td>
<td>0.72</td>
<td>4.00</td>
<td>199.00</td>
<td>3.00</td>
<td>0.00</td>
<td>0.00</td>
<td>0.00</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>75%</th>
<td>0.82</td>
<td>0.86</td>
<td>5.00</td>
<td>243.00</td>
<td>4.00</td>
<td>0.00</td>
<td>0.00</td>
<td>0.00</td>
<td>NaN</td>
<td>NaN</td>
</tr>
<tr>
<th>max</th>
<td>1.00</td>
<td>1.00</td>
<td>7.00</td>
<td>310.00</td>
<td>5.00</td>
<td>1.00</td>
<td>1.00</td>
<td>1.00</td>
<td>NaN</td>
<td>NaN</td>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [61]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">df1</span><span class="o">.</span><span class="n">dtypes</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[61]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>satisfaction      float64
last_eval         float64
number_project    float64
avg_mnth_hrs      float64
tenure            float64
accident          float64
left              float64
promotion         float64
dept               object
salary             object
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
<h3 id="Check-for-missing-values"><a id="toc2_2_2_"></a><a href="#toc0_">Check for missing values</a><a class="anchor-link" href="#Check-for-missing-values">¶</a></h3>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="n">df1</span><span class="o">.</span><span class="n">isna</span><span class="p">()</span><span class="o">.</span><span class="n">sum</span><span class="p">()</span>
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
<pre>satisfaction      0
last_eval         0
number_project    0
avg_mnth_hrs      0
tenure            0
accident          0
left              0
promotion         0
dept              0
salary            0
dtype: int64</pre>
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
<h3 id="Check-for-duplicates"><a id="toc2_2_3_"></a><a href="#toc0_">Check for duplicates</a><a class="anchor-link" href="#Check-for-duplicates">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [63]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">df1</span><span class="o">.</span><span class="n">duplicated</span><span class="p">()</span><span class="o">.</span><span class="n">sum</span><span class="p">()</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[63]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>0</pre>
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
<h3 id="Check-Categorical-values-for-consistency"><a id="toc2_2_4_"></a><a href="#toc0_">Check Categorical values for consistency</a><a class="anchor-link" href="#Check-Categorical-values-for-consistency">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [64]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">]</span><span class="o">.</span><span class="n">unique</span><span class="p">())</span>
<span class="nb">print</span><span class="p">(</span><span class="n">df1</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span><span class="o">.</span><span class="n">unique</span><span class="p">())</span>
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
<pre>['low' 'medium' 'high']
['sales' 'accounting' 'hr' 'technical' 'support' 'management' 'it'
 'product_mng' 'marketing' 'randd']
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
<h1 id="Feature-Engineering"><a id="toc3_"></a><a href="#toc0_">Feature Engineering</a><a class="anchor-link" href="#Feature-Engineering">¶</a></h1>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [65]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Encode salary as an ordinal numeric rather than get_dummies. </span>
<span class="c1"># The data is ordinal and we want to preserve that, encoding dummies would </span>
<span class="c1"># add three additional dimension and we want to avoid large dimension models </span>

<span class="n">df1</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span>
    <span class="n">df1</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">]</span><span class="o">.</span><span class="n">astype</span><span class="p">(</span><span class="s1">'category'</span><span class="p">)</span>
    <span class="o">.</span><span class="n">cat</span><span class="o">.</span><span class="n">set_categories</span><span class="p">([</span><span class="s1">'low'</span><span class="p">,</span> <span class="s1">'medium'</span><span class="p">,</span> <span class="s1">'high'</span><span class="p">])</span>
    <span class="o">.</span><span class="n">cat</span><span class="o">.</span><span class="n">codes</span>
<span class="p">)</span>
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
<h3 id="Encode-categorical-values-'dept'-as-dummies"><a id="toc3_1_1_"></a><a href="#toc0_">Encode categorical values 'dept' as dummies</a><a class="anchor-link" href="#Encode-categorical-values-'dept'-as-dummies">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [66]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># One Hot Encode dept</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[66]:</div>
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
<h3 id="Feature-Engineer-continuous-values-avg_mnth_hrs-to-binary-overworked"><a id="toc3_1_2_"></a><a href="#toc0_">Feature Engineer continuous values <code>avg_mnth_hrs</code> to binary <code>overworked</code></a><a class="anchor-link" href="#Feature-Engineer-continuous-values-avg_mnth_hrs-to-binary-overworked">¶</a></h3><p>See EDA notes, overworked threshold is set to 175 hours.</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [67]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">pd</span><span class="o">.</span><span class="n">options</span><span class="o">.</span><span class="n">display</span><span class="o">.</span><span class="n">float_format</span> <span class="o">=</span> <span class="s1">'</span><span class="si">{:.2f}</span><span class="s1">'</span><span class="o">.</span><span class="n">format</span>

<span class="c1"># Create `overworked` column. For now, it's identical to average monthly hours.</span>
<span class="n">df1</span><span class="p">[</span><span class="s1">'overworked'</span><span class="p">]</span> <span class="o">=</span> <span class="n">df1</span><span class="p">[</span><span class="s1">'avg_mnth_hrs'</span><span class="p">]</span>

<span class="c1"># Inspect mean, max and min average monthly hours values</span>
<span class="nb">print</span><span class="p">(</span><span class="s1">'Max hours  :'</span><span class="p">,</span> <span class="n">df1</span><span class="p">[</span><span class="s1">'overworked'</span><span class="p">]</span><span class="o">.</span><span class="n">max</span><span class="p">())</span>
<span class="nb">print</span><span class="p">(</span><span class="s1">'Min hours  : '</span><span class="p">,</span> <span class="n">df1</span><span class="p">[</span><span class="s1">'overworked'</span><span class="p">]</span><span class="o">.</span><span class="n">min</span><span class="p">())</span>
<span class="nb">print</span><span class="p">(</span><span class="s1">'Mean hours :'</span><span class="p">,</span> <span class="nb">round</span><span class="p">(</span><span class="n">df1</span><span class="p">[</span><span class="s1">'overworked'</span><span class="p">]</span><span class="o">.</span><span class="n">mean</span><span class="p">(),</span><span class="mi">2</span><span class="p">))</span>
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
<pre>Max hours  : 310.0
Min hours  :  96.0
Mean hours : 200.14
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [68]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Define `overworked` as working &gt; 175 hrs/week</span>
<span class="n">df1</span><span class="p">[</span><span class="s1">'overworked'</span><span class="p">]</span> <span class="o">=</span> <span class="p">(</span><span class="n">df1</span><span class="p">[</span><span class="s1">'overworked'</span><span class="p">]</span> <span class="o">&gt;</span> <span class="mi">175</span><span class="p">)</span><span class="o">.</span><span class="n">astype</span><span class="p">(</span><span class="nb">int</span><span class="p">)</span>

<span class="c1"># Display first few rows of new column</span>
<span class="n">df1</span><span class="o">.</span><span class="n">head</span><span class="p">()</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[68]:</div>
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
<th>salary</th>
<th>dept_accounting</th>
<th>dept_hr</th>
<th>dept_it</th>
<th>dept_management</th>
<th>dept_marketing</th>
<th>dept_product_mng</th>
<th>dept_randd</th>
<th>dept_sales</th>
<th>dept_support</th>
<th>dept_technical</th>
<th>overworked</th>
</tr>
</thead>
<tbody>
<tr>
<th>0</th>
<td>0.38</td>
<td>0.53</td>
<td>2.00</td>
<td>157.00</td>
<td>3.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>0</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>0</td>
</tr>
<tr>
<th>1</th>
<td>0.11</td>
<td>0.88</td>
<td>7.00</td>
<td>272.00</td>
<td>4.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>1</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>1</td>
</tr>
<tr>
<th>2</th>
<td>0.72</td>
<td>0.87</td>
<td>5.00</td>
<td>223.00</td>
<td>5.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>0</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>1</td>
</tr>
<tr>
<th>3</th>
<td>0.37</td>
<td>0.52</td>
<td>2.00</td>
<td>159.00</td>
<td>3.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>0</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>0</td>
</tr>
<tr>
<th>4</th>
<td>0.41</td>
<td>0.50</td>
<td>2.00</td>
<td>153.00</td>
<td>3.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>0</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>0</td>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [69]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Drop the `average_monthly_hours` column</span>
<span class="n">df1</span> <span class="o">=</span> <span class="n">df1</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="s1">'avg_mnth_hrs'</span><span class="p">,</span> <span class="n">axis</span><span class="o">=</span><span class="mi">1</span><span class="p">)</span>

<span class="c1"># Display first few rows of resulting dataframe</span>
<span class="n">df1</span><span class="o">.</span><span class="n">head</span><span class="p">()</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[69]:</div>
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
<th>tenure</th>
<th>accident</th>
<th>left</th>
<th>promotion</th>
<th>salary</th>
<th>dept_accounting</th>
<th>dept_hr</th>
<th>dept_it</th>
<th>dept_management</th>
<th>dept_marketing</th>
<th>dept_product_mng</th>
<th>dept_randd</th>
<th>dept_sales</th>
<th>dept_support</th>
<th>dept_technical</th>
<th>overworked</th>
</tr>
</thead>
<tbody>
<tr>
<th>0</th>
<td>0.38</td>
<td>0.53</td>
<td>2.00</td>
<td>3.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>0</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>0</td>
</tr>
<tr>
<th>1</th>
<td>0.11</td>
<td>0.88</td>
<td>7.00</td>
<td>4.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>1</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>1</td>
</tr>
<tr>
<th>2</th>
<td>0.72</td>
<td>0.87</td>
<td>5.00</td>
<td>5.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>0</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>1</td>
</tr>
<tr>
<th>3</th>
<td>0.37</td>
<td>0.52</td>
<td>2.00</td>
<td>3.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>0</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>0</td>
</tr>
<tr>
<th>4</th>
<td>0.41</td>
<td>0.50</td>
<td>2.00</td>
<td>3.00</td>
<td>0.00</td>
<td>1.00</td>
<td>0.00</td>
<td>0</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>False</td>
<td>True</td>
<td>False</td>
<td>False</td>
<td>0</td>
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
<h3 id="Correlation-Heatmap-(full)"><a id="toc3_1_3_"></a><a href="#toc0_">Correlation Heatmap (full)</a><a class="anchor-link" href="#Correlation-Heatmap-(full)">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [70]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1">## Correlation Heatmap </span>

<span class="n">df_corr</span> <span class="o">=</span> <span class="n">df1</span><span class="o">.</span><span class="n">corr</span><span class="p">()</span> <span class="c1">#.sort_values(by = 'left', ascending = False)</span>

<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span> <span class="o">=</span> <span class="p">(</span><span class="mi">12</span><span class="p">,</span><span class="mi">12</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">heatmap</span><span class="p">(</span><span class="n">df_corr</span><span class="p">,</span> <span class="n">annot</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">annot_kws</span><span class="o">=</span><span class="p">{</span><span class="s2">"size"</span><span class="p">:</span> <span class="mi">7</span><span class="p">},</span> <span class="n">fmt</span><span class="o">=</span><span class="s1">'.1%'</span><span class="p">,</span> <span class="n">cmap</span><span class="o">=</span><span class="s1">'YlOrRd'</span><span class="p">)</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[70]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>&lt;Axes: &gt;</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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"/>
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
<h3 id="Correlation-Heatmap-(Focus)"><a id="toc3_1_4_"></a><a href="#toc0_">Correlation Heatmap (Focus)</a><a class="anchor-link" href="#Correlation-Heatmap-(Focus)">¶</a></h3>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [71]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1">## Focus on features with higher correlation values:</span>
<span class="n">df_corr</span> <span class="o">=</span> <span class="n">df1</span><span class="p">[[</span><span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'overworked'</span><span class="p">,</span> 
               <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'accident'</span><span class="p">,</span><span class="s1">'promotion'</span><span class="p">,</span> <span class="s1">'salary'</span><span class="p">]]</span> 
<span class="n">df_corr</span> <span class="o">=</span> <span class="n">df_corr</span><span class="o">.</span><span class="n">corr</span><span class="p">()</span> <span class="c1">#.sort_values(by = 'left', ascending = False)</span>

<span class="n">plt</span><span class="o">.</span><span class="n">figure</span><span class="p">(</span><span class="n">figsize</span> <span class="o">=</span> <span class="p">(</span><span class="mi">12</span><span class="p">,</span><span class="mi">6</span><span class="p">))</span>
<span class="n">sns</span><span class="o">.</span><span class="n">heatmap</span><span class="p">(</span><span class="n">df_corr</span><span class="p">,</span> <span class="n">annot</span><span class="o">=</span><span class="kc">True</span><span class="p">,</span> <span class="n">annot_kws</span><span class="o">=</span><span class="p">{</span><span class="s2">"size"</span><span class="p">:</span> <span class="mi">8</span><span class="p">},</span> <span class="n">fmt</span><span class="o">=</span><span class="s1">'.2%'</span><span class="p">,</span> <span class="n">cmap</span><span class="o">=</span><span class="s1">'YlOrRd'</span><span class="p">)</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[71]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>&lt;Axes: &gt;</pre>
</div>
</div>
<div class="jp-OutputArea-child">
<div class="jp-OutputPrompt jp-OutputArea-prompt"></div>
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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4MF06tRJq0E+fvx4duzYIUMxhSJq1arFxx9/THBwsNbr8siRI7Rt25abN28qHVG8hYyNjTl37txzFxOtWLEiqampCiUTQuQXA6UDCPE8c+fOpUuXLtSqVStnqFtmZib+/v7MmTNH4XS6p3Hjxjg5OdGhQwc6deqEt7e30pF01v79+1m4cCFXr17ll19+wcnJiZUrV+Lu7i43PfJozJgxdOnShVu3bpGdnc369eu5ePEiK1asYNOmTUrH0yn79u17abls1ZV3Z86c4ccff8x13N7ensTERAUS6bbMzEz27t1LTEwMHTt2xNLSktu3b2NlZSXb8r0GZ2dndu3alatBvnPnTpydnRVKpXuysrKYNWsWP//8M3FxcaSnp2uVy8hLoSRpkItCycbGhl9//ZXLly9r7VMsq7b+O7dv32b16tX89NNPTJkyBV9fXwIDA+nQoQOlS5dWOp7OWLduHZ07dyYwMJATJ06QlpYGaFZZnzRpEps3b1Y4oW5o06YNv/32G+PHj8fc3JwxY8ZQtWpVfvvtN9577z2l4+mUhg0b5jr297nkMoc872xsbIiPj8+1hVxUVBROTk4KpdJN169fp0WLFsTFxZGWlsZ7772HpaUlU6dOJS0tjdDQUKUj6owhQ4YwYMAATp48mTONLzIykmXLlkkHxWsICQlh8eLFDBkyhFGjRjFy5EhiY2MJCwtjzJgxSscTbzu1EOKtcvXqVfXEiRPVPj4+an19fXWjRo2UjqQzKleurF6+fLlarVarLSws1DExMWq1Wq0+ceKE2sHBQcloOuXGjRsvLDt48GABJtF9jx490vq5d++eevv27ep3331XvXPnTqXj6ZQhQ4ao69atq46Pj1dbWlqqL1++rI6IiFB7eHiox40bp3Q8ndKmTRt1p06d1GlpaVrXyj179qjLli2rcDrds379enWdOnXUxYoVUxcrVkxdp04ddVhYmNKxdIqHh4d606ZNarVa8/l95coVtVqtVs+ZM0fdoUMHJaMJoZY55KLQCA4OZsKECZibmxMcHPzSc2fOnFlAqYqmrKwstmzZwujRozl9+rT0ouWRmZkZ58+fx83NTWuO6dWrV/H29pa5fHnk7e1NREREroXwIiMjadWqFY8ePVImWBESHh5OcHAwx48fVzqKzkhPT6dv374sW7aMrKwsDAwMyMzMJDAwkGXLlqGvr690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"/>
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
<h3 id="Discard-problematic-columns"><a id="toc3_1_5_"></a><a href="#toc0_">Discard problematic columns</a><a class="anchor-link" href="#Discard-problematic-columns">¶</a></h3><h4 id="accident"><a id="toc3_1_5_1_"></a><a href="#toc0_"><code>accident</code></a><a class="anchor-link" href="#accident">¶</a></h4><p><code>Accident</code> seems  very high compared to the national average (See EDA) This require further investigation.</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [72]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Drop `accident` and save resulting dataframe in new variable</span>
<span class="n">df1</span><span class="o">.</span><span class="n">drop</span><span class="p">([</span><span class="s1">'accident'</span><span class="p">],</span> <span class="n">axis</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">inplace</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>

<span class="c1"># Display first few rows of new dataframe</span>
<span class="n">df1</span><span class="o">.</span><span class="n">columns</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[72]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>Index(['satisfaction', 'last_eval', 'number_project', 'tenure', 'left', 'promotion', 'salary', 'dept_accounting',
       'dept_hr', 'dept_it', 'dept_management', 'dept_marketing', 'dept_product_mng', 'dept_randd', 'dept_sales',
       'dept_support', 'dept_technical', 'overworked'],
      dtype='object')</pre>
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
<h2 id="Save-the-Feature-Engineered-dataframe"><a id="toc3_2_"></a><a href="#toc0_">Save the Feature Engineered dataframe</a><a class="anchor-link" href="#Save-the-Feature-Engineered-dataframe">¶</a></h2>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [73]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Required for the XGBoost modelling</span>
<span class="n">df1</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="n">save_path</span><span class="o">+</span><span class="s1">'data_cleaned_NoOl_FE_AllFeat.csv'</span><span class="p">,</span> <span class="n">index</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span> <span class="c1"># Feature Engineered on avg_mnth_hrs, salary, dept</span>
<span class="n">df1</span><span class="o">.</span><span class="n">columns</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[73]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>Index(['satisfaction', 'last_eval', 'number_project', 'tenure', 'left', 'promotion', 'salary', 'dept_accounting',
       'dept_hr', 'dept_it', 'dept_management', 'dept_marketing', 'dept_product_mng', 'dept_randd', 'dept_sales',
       'dept_support', 'dept_technical', 'overworked'],
      dtype='object')</pre>
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
<h3 id="Focus-Features"><a id="toc3_2_1_"></a><a href="#toc0_">Focus Features</a><a class="anchor-link" href="#Focus-Features">¶</a></h3><p>Remove the departments from the model data so we can compare how they perform</p>
<p>Remove <code>accident</code></p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [74]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">df2</span> <span class="o">=</span> <span class="n">df1</span><span class="p">[[</span><span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'overworked'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'promotion'</span><span class="p">,</span> <span class="s1">'salary'</span><span class="p">]]</span> 
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
<h2 id="Save-the-Focus-Features-dataframe"><a id="toc3_3_"></a><a href="#toc0_">Save the Focus Features dataframe</a><a class="anchor-link" href="#Save-the-Focus-Features-dataframe">¶</a></h2><p>Excludes departments which appear to have a low correlation</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [75]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Feature Engineered on avg_mnth_hrs, salary. </span>
<span class="c1"># dept REMOVED</span>
<span class="n">df2</span><span class="o">.</span><span class="n">to_csv</span><span class="p">(</span><span class="n">save_path</span> <span class="o">+</span> <span class="s1">'data_cleaned_NoOl_FE_NoDept.csv'</span><span class="p">,</span> <span class="n">index</span> <span class="o">=</span> <span class="kc">False</span><span class="p">)</span> 
<span class="n">df2</span><span class="o">.</span><span class="n">columns</span>
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
<div class="jp-OutputPrompt jp-OutputArea-prompt">Out[75]:</div>
<div class="jp-RenderedText jp-OutputArea-output jp-OutputArea-executeResult" data-mime-type="text/plain" tabindex="0">
<pre>Index(['satisfaction', 'last_eval', 'number_project', 'overworked', 'tenure', 'left', 'promotion', 'salary'], dtype='object')</pre>
</div>
</div>
</div>
</div>
</div>
</main>
</body>
<script src="../../scripts/projects.js"> </script>
</html>
