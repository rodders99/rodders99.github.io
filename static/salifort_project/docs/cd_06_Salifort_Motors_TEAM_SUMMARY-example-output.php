<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>cd_06_Salifort_Motors_TEAM_SUMMARY-example-output</title>
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
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h1 id="Prepared-for-the-IT-Team">Prepared for the IT Team<a class="anchor-link" href="#Prepared-for-the-IT-Team">¶</a></h1><h2 id="Introduction">Introduction<a class="anchor-link" href="#Introduction">¶</a></h2><p>I trust this summary will provide valuable insights into the dynamics of your team.</p>
<p>By analysing the available data on team members, together with the HR team you
can begin to identify areas for improvement and develop strategies to enhance
overall team performance and satisfaction.</p>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Employee-Tenure">Employee Tenure<a class="anchor-link" href="#Employee-Tenure">¶</a></h2><ul>
<li>Reviewing the distribution of employee tenure within the team can offer insights into your team's stability.</li>
<li>Identify trends in tenure and address any patterns that may indicate potential turnover risks or opportunities for mentorship
and knowledge transfer.</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noInput">
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child">
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABjAAAAMQCAYAAACJ8yxvAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAEAAElEQVR4nOzdd3xT5f4H8M/JatK9C7RsaNlLhoiLIYggiBfFAa6rXu8Vtz/FOxz3ot7rHS5w40AcuFBAQGQLskfZlNWWtpTups1Ozvn9kSY0dqVtkpM2n/frBU1OTk6+TU7znHO+z/N9BEmSJBAREREREREREREREQURhdwBEBERERERERERERER/RYTGEREREREREREREREFHSYwCAiIiIiIiIiIiIioqDDBAYREREREREREREREQUdJjCIiIiIiIiIiIiIiCjoMIFBRERERERERERERERBhwkMIiIiIiIiIiIiIiIKOkxgEBERERERERERERFR0GECg4iIiIiIiIiIiIiIgg4TGETUZuTl5SEjIwPfffede9mbb76JjIwMGaNqubYcOxEREbXed999h4yMDOTl5ckdStCaM2cOpk6dKncYzbZlyxZMnz4dAwcOREZGBvR6vdwhERGRD7DtblpbbbuDwbx58zBu3Di5wwg6KrkDIAoF+/btw7Zt23DnnXciOjpa7nCC1iuvvIJFixZh8uTJeO2113y67Xnz5mHZsmX1PqbRaHDo0CGfvh4RUVvDtqpxe/bswTvvvIMTJ06goqICCQkJ6NOnD6ZMmYLrr7++3ufMnDkThw4dwnPPPYfbbrutzuPfffcdnnnmGXzzzTcYOHBgvdvIy8vD+PHjG4zriSeewP333w8AEEURy5cvx2effYacnBzYbDYkJydj8ODBuO222zBkyJBGf8faSXWlUonIyEikpaVh2LBhuOWWW9CrV69Gn+8L/twP33zzTSxYsKDBx7du3YqkpCSfvia1HXPmzEF5eTlWrlzZ6m2Vl5fj0UcfRe/evfHss89Co9FAp9PhnXfeQa9evTBhwgQfREzEtrspbLvZdlP75u3fz6lTp7B69WrMmDEDaWlp8gZNLcIEBlEA7N+/HwsWLMCMGTN4YNkASZLw448/IjU1FRs3bkR1dTUiIyN9+hoajQbz58+vs1ypVPr0dYiI2iK2VQ1bvXo1HnvsMfTt2xd33HEHYmJikJeXh927d+Orr76q9yJIdnY2Dh06hNTUVKxYsaLeiyDNMXXqVFx55ZV1lvfr1899e/78+fjss88wfvx4XH/99VAqlTh79ix++eUXdO7cucmLIAAwZswYTJ8+HZIkobq6GsePH8f333+PL774Ak8++STuvvvuVv0eTQnEfvj8888jPDy8znLu9+Qrhw4dgsFgwCOPPILLLrvMvfzdd9/FpEmTmMAgn2Hb3TC23Wy7qf3z9u/n1KlTWLBgAUaOHMkERhvFBAYReTCZTNDpdAF/3Z07d6KwsBCffPIJ7r33Xvz888+YMWOGT19DpVJh+vTpPt0mEREFXqDbqgULFqBXr15YunQpNBqNx2OlpaX1Pmf58uVISEjAvHnz8PDDDyMvL69VJ0z9+vVrtA0rKSnB559/jptvvhn/+Mc/PB6TJAllZWVevU63bt3qvM4TTzyBP/7xj/jnP/+JHj164Kqrrmr+LxBEJk2ahPj4eLnDoHbM9fcWFRUlcyREwYNtd11su73Htpt+y1d/P9Q2cA4MIj9788038corrwAAxo8fj4yMjDr1En/44QfceOONGDRoEEaOHInHHnsM58+f99iOq4bgqVOnMGfOHAwePBhXXHEF3n//fY/1GqrHuHPnTmRkZGDnzp11tnn48GHcfvvtGDx4MP73v/8BAKxWK9544w1cc801GDBgAK666iq88sorsFqtPn1/XFasWIFevXrh0ksvxejRo7FixQq/vE5TXO/fnj17MH/+fFx66aUYPnw4nn32WVitVuj1ejz11FMYMWIERowYgVdeeQWSJLmf75qnY9GiRfj4448xduxYDBo0CLNnz0ZWVlaTr2+327Fw4UJMmDABAwYMwLhx4/C///3P431/+umnMWrUKNhstjrPv+eeezBp0iSPZd7sXwCQmZmJ3//+97jkkkswePBgzJ49G3v37vVYp7q6Gi+++CLGjRuHAQMGYPTo0bj77rtx5MiRJn83IgpebKsal5ubi4EDB9a5AAIACQkJ9T5n5cqVmDRpEq6++mpERUX5pCxNY/Ly8iBJEoYNG1bnMUEQGozTG3Fxcfjf//4HlUqFt99+2+Mxbz+DjIwM/P3vf8fy5csxadIkDBw4EDfeeCN2797tXseb/TAQXPvhqlWrsGDBAlxxxRUYOnQoHn74YVRVVcFqteLFF1/E6NGjMXToUDzzzDMt+n0b89lnn2HKlCkYMGAALr/8crzwwgsecyi88cYb6N+/f70n53/7298wfPhwWCwW97LNmze7SykMHToU999/P06ePFnnuadPn8bDDz+MkSNHumNev369xzo2mw0LFizAxIkTMXDgQIwaNQq33nortm3b1uDvo9fr0bdvXyxevNi9rKysDH369MGoUaM8jqWee+45jBkzps42mvpeAZwXJf/85z/jsssuw8CBAzFt2rQGS4i2VFPv5Zw5c/D0008DcJaiycjIwLx585CRkQGj0Yhly5a59+158+b5NDYKLWy7G8e2m2032+6L2mPb7e3fz3fffYdHHnkEAHDHHXe491HXd9a6detw//334/LLL8eAAQMwYcIELFy4EA6Hw709f31269atw9SpUzFw4EBMnToVP//8c5O/d6jiCAwiP7vmmmuQnZ2NlStX4plnnkFcXBwAuHsPvP3223j99dcxefJkzJw5E2VlZViyZAluv/12fP/99x5DIisrK3HvvffimmuuweTJk/HTTz/hP//5D9LT01vco6KiogL33XcfpkyZgmnTpiEhIQGiKOKPf/wj9u7di5tvvhk9e/ZEVlYWPvnkE2RnZ+Ott95q/RtTi9Vqxdq1a91DW6dMmYI///nPKC4u9nk9y/oaHI1GU6dc1fz585GYmIiHHnoImZmZWLp0KaKiorB//3507NgRjz32GLZs2YJFixYhPT0dN9xwg8fzv//+exgMBtx2222wWCz49NNPceedd2LFihVITExsML6//vWvWLZsGSZNmoS7774bBw8exLvvvovTp09j4cKFAIDp06fj+++/x9atWzF27Fj3c4uLi7Fjxw48+OCD7mXe7l/bt2/HfffdhwEDBmDu3LkQBAHfffcd7rzzTnz++ecYNGgQAOeByU8//YTZs2ejZ8+eqKiowN69e3H69Gn079+/eR8GEQUNtlWN69SpE7Zv347CwkJ06NChyfUzMzORk5ODl156CRqNBtdccw1WrFiBBx54oMUxmEymetuw6OhoqFQqdOrUCQCwZs0aXHvttT7v5dqpUyeMGDECO3fudJd5bO5nsHv3bqxatQpz5syBRqPBF198gXvvvRdff/010tPTm9wPfaWysrLOMpVKVacMxXvvvQetVov7778fOTk5WLJkCVQqFQRBgF6vx9y5c5GZmYnvvvsOqampmDt3brN+34a46n1fdtlluPXWW3H27Fl88cUXOHToEL744guo1WpMnz4dCxcuxKpVqzB79mz3c61WK3766SdMnDgRYWFhAJzHJPPmzcPll1+OJ598EiaTCV988QVuu+02LFu2zN27+OTJk7j11luRkpKC++67D+Hh4Vi9ejUefPBBvPnmm7jmmmsAOHs1v/vuu7jpppswaNAgVFdX4/Dhwzhy5Ei9Fy8A537au3dv7NmzB3fccQcAZ810QRBQUVGBU6dOoXfv3gCAvXv34pJLLqnzmTX1vWI2mzFnzhzk5ubi9ttvR1paGtasWYN58+ZBr9fjzjvvbPA995Y37+UDDzyA7t27Y+nSpXj44YeRlpaGLl26YPTo0fjrX/+KQYMG4eabbwYAdOnSpdUxUehi2904tt1su9l2t++229u/nxEjRmDOnDn49NNP8cADD6BHjx4AgJ49ewIAli1bhvDwcNx9990IDw/Hjh078MYbb6C6utrdIcEfn93WrVvx0EMPoVevXnjiiSdQXl6OZ555xqvvq5AkEZHfffDBB1J6erp07tw5j+V5eXlS3759pbfffttj+YkTJ6R+/fp5LJ89e7aUnp4uLVu2zL3MYrFIY8aMkR566CH3sm+//bbe19qxY4eUnp4u7dixo842v/jiC491v//+e6lPnz7S7t27PZZ/8cUXUnp6urR3797mvQFNWLNmjZSeni5lZ2dLkiRJVVVV0sCBA6WPPvrIY71z585J6enp0rfffute9sYbb0jp6elNvsbTTz8tpaen1/vvnnvuca/nev/uueceSRRF9/JZs2ZJGRkZ0rPPPuteZrfbpSuvvFKaPXt2nRgHDRokFRYWupdnZmZK6enp0ksvvdRg7MeOHZPS09Olv/zlLx6x//Of/5TS09Ol7du3S5IkSQ6HQ7ryyiulRx991GO9jz76SMrIyJByc3MlSfJ+/xJFUZo4cWKd39lkMknjxo2T7r77bveySy65RHrhhRcafJ+JqO1iW9Wwr7/+WkpPT5f69+8vzZkzR3rttdek3bt3Sw6Ho971//73v0tXXXWV+zt169atUnp6unT06FGP9Vzvw8GDBxt8bVe70tC//fv3u9d96qmnpPT0dGnEiBHSgw8+KC1atEg6deqU179nenp6o9/x8+fPl9LT06Vjx45JktS8z8AV76FDh9zL8vPzpYEDB0oPPvig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EcePH8edd97pVe3o7Oxs/PDDD5AkCQaDAcePH8eaNWtgNBoxb948j0R8cz+D9PR0/P73v8ecOXOg0WjwxRdfAIBHr72G9kNfttE//fRTvdsbM2YMEhMTffY63vy+vxUfH48//OEPWLBgAe69916MGzcOZ8+exeeff46BAwfWOVFWq9WYMmUKlixZAqVSiSlTpng8HhkZieeffx5PPfUUbrzxRlx33XWIj49HQUEBNm/ejGHDhuHZZ58FADz33HO47bbbcP311+Pmm29G586dUVJSggMHDqCwsNBdYmXKlCkYOXIk+vfvj9jYWBw6dAg//fQTZs+e3eR74rrAcfbsWTz++OPu5SNGjMCWLVug0WgwaNAgL97dumbNmoWlS5di3rx5OHLkCFJTU/HTTz9h3759+POf/+zVHBVlZWV466236ixPS0vDtGnTvH4vG9K/f39s374dH330EZKTk5GWluaTY1wKXWy7G8a2m213S7DtritY2+7m/P307dsXSqUS77//PqqqqqDRaHDppZdi6NChiImJwbx58zBnzhwIguD+W6qPLz+7xx9/HH/4wx9w22234Xe/+x0qKiqwZMkS9O7du9FkbqhiAoMoAAYNGoRHHnkEX375JX755ReIooj169cjPDwc999/P7p164aPP/4YCxcuBOCsOzlmzBiMGzeuRa/3n//8B88++yzee+89REdHY+bMmRg1ahTuvvtur56vUCiwcOFCfPzxx/jhhx/w888/Q6fTIS0tDXPmzPHZMOQVK1agU6dODU4cFR0djWHDhmHVqlU+uUButVrx1FNP1fuY6/PwlRtuuAEKhQKffPIJSktLMWjQIPztb39DcnJyo8+bP38+0tLSsGzZMqxbtw6JiYn4wx/+gLlz59a7/vTp07Fx40ZMnjy5ziR5ALzev0aNGoWlS5firbfewpIlS2A0GpGUlIRBgwZh1qxZAJx1bG+99VZs27YNa9euhSRJ6NKli/ugiYjaNrZVDZs/fz7Wr1+P1atXo6ioCJIkoXPnznjggQdw3333QaVSobS0FNu3b8eUKVMa7KE3evRo6HQ6LF++3OMiiOvk+LduvPFG9+2VK1di5cqVddaZMWMGhg4diu7du+PPf/4zNm/ejM8//xylpaXQaDRIT0/H/PnzMXPmTK9+123btmHbtm1QKBSIjIxEWloabrjhBsyaNQu9evXyWLe5n8GIESMwZMgQLFy4EAUFBejVqxdefvllj+OAxvZDX3n++efrXb548WKfXgTx5vetz0MPPYT4+HgsWbIEL7/8MmJiYnDzzTfj8ccfh1qtrrP+9OnTsWTJEowePbre44zrr78eycnJeO+997Bo0SJYrVakpKRg+PDhHvtYr1698O2332LBggVYtmwZKioqEB8fj379+nmU+pwzZw42bNiAbdu2wWq1olOnTnj00Ue9uhjao0cPJCQkoLS01KO3puv2oEGD6j2e8YZWq8Wnn36K//znP1i2bBmqq6vRvXt3vPzyyx6/Z2NKS0vrnQh19OjRmDZtmtfvZUPmzZuHZ599Fq+99hrMZjNmzJjBBAa1CtvuhrHtZtvdEmy76wrWtrs5fz9JSUl44YUX8O677+Ivf/kLHA4HFi9ejFGjRuGdd97Bv/71L7z22muIjo7GtGnTMHr06AbfG199dldeeSVef/11vPbaa/jvf/+LLl264OWXX8b69euxa9euFr2f7ZkgBXrGGiKidiwvLw/jx4/HU0891exeTS2xbt06PPjgg/jss8/cwzmJiIiCTUZGBm6//fYme6i3F4H8fY8fP47p06fjX//6F2644Qa/vx4REYUGtt3+w7a77eJnJw/OgUFE1IZ9/fXX6Ny5c9DVDiUiIqLA+OqrrxAeHu7RM5iIiIiCF9vutoufnTxYQoqIqA368ccfceLECWzatAl/+ctfIAiC3CERERFRAG3YsAGnTp3CV199hdtvv92npTqIiIjI99h2t1387OTFBAYRURv0+OOPIzw8HDNnzuT8E0RERCFo/vz5KCkpwZVXXtno5KJEREQUHNh2t1387OTFOTCIiIiIiIiIiIiIiCjocA4MIiIiIiIiIiIiIiIKOkxgEBERERERERERERFR0GECg4iIiIiIiIiIiIiIgg4n8a4hSRJEkdOBEBERBSOFQoAgCD7ZFtt8IiKi4MT2noiIKDQ0p81nAqOGKEooKzPIHQYRERHVIz4+Akqlby5osM0nIiIKTmzviYiIQkNz2nyWkCIiIiIiIiIiIiIioqDDBAYREREREREREREREQUdJjCIiIiIiIiIiIiIiCjoMIFBRERERERERERERERBhwkMIiIiIiIiIiIiIiIKOkxgEBERERERERERERFR0GECg4iIiIiIiIiIiIiIgg4TGEREREREREREREREFHSYwCAiIiIiIiIiIiIioqDDBAYREREREREREREREQUdJjCIiIiIiIiIiIiIiCjoMIFBRERERERERERERNSE6uoq/PDDtzhy5JDcoYQMldwBEBEREREREREREREFu9WrV+L9998GAKxdu0XmaEIDR2AQERERERERERERETWhoqLCfVuSJPkCCSFMYBARERERERERERERNcFoNLhv22xWGSMJHUxgEBERERERERERERE1obq6ut7b5D9MYBAREfmJzWbDM888gbvvvg3vvLNA7nCIiIiIiIiIqBWqq6vqvU3+wwQGERGRn+TmZmPv3t3Iz8/Djz/+wPqYRERERERERG1YVdXFpIVer5cxktDBBAYREZGfnD9/3n3bYrGgoqJcxmiIiIiIiIiIqDUqKytq3a6UL5AQwgQGERGRnxQWFgAAbFFaAMD58wVyhkNERERERNQmnTx5Ar/++gscDofcoVCIq/BIYFQ0uB75DhMYREREfpKbmwMAMHdO8LhPRERERERE3pEkCQ8+eB+ef/4v2L9/r9zhUAgzm82wmM2QlM5L6uXlZTJHFBqYwCAiIvKTnJxsSAoB5rT4mvtnZY6IiIiIiIiobTGZTO7bpaUlMkZCoa6srBQAYIsLB8AERqAwgUFEROQHDocDZ86ehi1GB1us8+DmzJnTMkdFREREROQdq9WKLVs2oaKiQu5QKMRVV1+cNLmqipMmk3xcCQxrXITHffIvJjCIiIj84Ny5XFjMZtjiIyGplbBF63Ai6zhEUZQ7NCIiIiKiJq1duxrz5z+L1177t9yhUIir5JwDFCRcCQt7TDgkhcAERoAwgUFEROQHWVnHAQDWhEgAgC0hEkaDAQUF+XKGRURERETkleLiIgDA3r27ZY6EQl3tMj3l5eUyRkKhzlXCzBGugUOnQUkJS5oFAhMYREREfnD06GEAgC0hCgBgTYzyWE5ERERE1DZIcgdAIa520qKsjHMOkHxcCQtHuAaOcA1Ky0pZZSEAmMAgonbHYKjG//3fI1i06F25Q6EQdvjwIWfpqJr5LyxJzgTGkSOH5AyLiIiIiMgrouiQOwQiAEBxcbH7dmlpcSNrEvlXSYlz/3PonCMwHHY7KisrZY6q/WMCg3zGbrejqOiC3GEQISvrBDIz92Pp0s/kDoVClF5fidzcbFgSowCFAACwx4ZD0qhw6FCm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NWuW2rVrRwGjjKKAASCX1NRUubu7l/pxN2/erHPnzumLL77Q5MmTtWrVKg0fPrxYj+Hk5KShQ4cW6z4BAKWvtHPVrFmzFBwcrPnz58vFxSXXYzExMflus3jxYgUEBGj69Om67777FB0dfV0/mJo0aXLVHHbp0iV98803uummm/TCCy/keswwDMXGxhboOHXr1s1znIcfflh33XWXXnnlFdWvX1/dunUr/BOwI/369ZO/v7+tw0A5lv158/b2tnEkgP0gd+dF7i44cjf+rbg+PygbmAMDKGHvvvuuXnvtNUlSr169FBoamme8xJ9++kkjRoxQWFiY2rVrpwcffFBnz57NtZ/sMQSPHDmi8ePHq0WLFurSpYtmz56da70rjce4efNmhYaGavPmzXn2+ddff+mWW25RixYt9Oabb0qSzGaz3nnnHfXp00fNmjVTt27d9Nprr8lsNhfr65NtyZIlCg4OVocOHRQREaElS5aUyHGuJfv127p1q2bOnKkOHTqobdu2mjFjhsxmsxISEvTYY48pPDxc4eHheu2112QYRs722fN0fPrpp/r888/Vo0cPhYWFady4cTp06NA1j5+Zman33ntPvXv3VrNmzdSzZ0+9+eabuV73xx9/XO3bt1dGRkae7W+77Tb169cv17KCnF+StGvXLt1+++1q06aNWrRooXHjxmnbtm251klKStKLL76onj17qlmzZoqIiNCkSZO0d+/eaz43APaLXHV1p06dUvPmzfPcAJGkgICAfLdZunSp+vXrp+7du8vb27tYhqW5mujoaBmGodatW+d5zGQyXTHOgvDz89Obb74pJycnffDBB7keK+h7EBoaqv/85z9avHix+vXrp+bNm2vEiBGKjIzMWacg52FpyD4Ply1bplmzZqlLly5q1aqV7rvvPiUmJspsNuvFF19URESEWrVqpSeeeKJIz/dqvv76aw0cOFDNmjVT586d9fzzz+eaQ+Gdd95R06ZN8/1x/swzz6ht27ZKT0/PWbZu3bqcoRRatWqlKVOm6PDhw3m2PXr0qO677z61a9cuJ+Y1a9bkWicjI0OzZs1S37591bx5c7Vv315jxozRhg0brvh8EhIS1LhxY3355Zc5y2JjY9WoUSO1b98+17XUs88+q06dOuXZx7W+V6Ssm5JPPvmkOnbsqObNm2vIkCFXHEK0qK71Wo4fP16PP/64pKyhaEJDQzV9+nSFhoYqJSVFixYtyjm3p0+fXqyxoWIhd18duZvcTe7+f+Uxdxf087Nw4ULdf//9kqQJEybknKPZ31mrV6/WlClT1LlzZzVr1ky9e/fWe++9J4vFkrO/knrvVq9erUGDBql58+YaNGiQVq1adc3nXVHRAwMoYX369NGJEye0dOlSPfHEE/Lz85OknNYDH3zwgd5++231799fI0eOVGxsrObOnatbbrlFP/74Y64ukZcvX9bkyZPVp08f9e/fXytXrtTrr7+ukJCQIreoiI+P1x133KGBAwdqyJAhCggIkNVq1V133aVt27bppptuUoMGDXTo0CF98cUXOnHihN5///3rf2H+wWw265dffsnp2jpw4EA9+eSTunjxYrGPZ5lfwnFxcckzXNXMmTMVGBioe++9V7t27dL8+fPl7e2tHTt2qHr16nrwwQf1+++/69NPP1VISIiGDRuWa/sff/xRycnJGjt2rNLT0/XVV19p4sSJWrJkiQIDA68Y39NPP61FixapX79+mjRpknbv3q2PPvpIR48e1XvvvSdJGjp0qH788UetX79ePXr0yNn24sWL2rRpk+65556cZQU9vzZu3Kg77rhDzZo107Rp02QymbRw4UJNnDhR33zzjcLCwiRlXZisXLlS48aNU4MGDRQfH69t27bp6NGjatq0aeHeDAB2g1x1dTVq1NDGjRt17tw5VatW7Zrr79q1SydPntRLL70kFxcX9enTR0uWLNHUqVOLHENqamq+OczHx0dOTk6qUaOGJGnFihW64YYbir2Va40aNRQeHq7NmzfnDPNY2PcgMjJSy5Yt0/jx4+Xi4qJ58+Zp8uTJ+u677xQSEnLN87C4XL58Oc8yJyenPMNQfPzxx3Jzc9OUKVN08uRJzZ07V05OTjKZTEpISNC0adO0a9cuLVy4UDVr1tS0adMK9XyvJHu8744dO2rMmDE6fvy45s2bpz179mjevHlydnbW0KFD9d5772nZsmUaN25czrZms1krV65U37595erqKinrmmT69Onq3LmzHnnkEaWmpmrevHkaO3asFi1alNO6+PDhwxozZoyqVq2qO+64Qx4eHlq+fLnuuecevfvuu+rTp4+krFbNH330kUaNGqWwsDAlJSXpr7/+0t69e/O9eSFlnacNGzbU1q1bNWHCBElZY6abTCbFx8fr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d5srTXomZV0YpaSk5Pzt6Oh41e6jCQkJWrduncaNG6eTJ0/mLG/durVWrlyp48ePq169egV9Olfl6Oiojh07Fmjd7O6I2bKTSvXq1fMsz687a3Yx5p/q1q2r5cuXX/GYp0+floODQ57hBCpXriwfHx+dPn06Z9mwYcM0e/ZsrV69WsOGDdOxY8e0d+9ePf/88znrFPT8yr6Iye4emZ/ExET5+vrqkUce0fTp09W9e3c1bdpU3bp107Bhw3KKJgDKH3JVli5duqhLly5KTU3V3r17tWzZMn377beaOnWqli9fnjPO7oYNGxQbG6uwsLBcea19+/b6+eef9eijj+b6cVtQderUuWYOc3Bw0C233KJbbrlFcXFx2r59u7799lv9/vvvevDBB/XNN98U+rj/lP2aeXp6Sir8e3Cl3Jg9xEZhh40syvsoZf0YL8h6hbkWsFqtSkxMzBk6Qyra8z1z5owk5QxvkM3FxUW1a9fOdS0wYMAAvfTSS1q8eLGmTZumxMRErV27VrfeemvOZzA7x19pCIbsITRPnTolwzD09ttv6+2338533ZiYGFWtWlX33Xef7r77bvXr108hISHq3Lmzhg4dqkaNGuW7XbbsoSW2bdumatWqaf/+/XrggQfk7++vzz77TFLWjREvL688+yrI98rp06dVp06dPJ+v7CEisl/boiroawnYA3J3FnI3uZvcXb5zd3F8fg4fPqy33npLmzZtytVAVMq6D5KtON+77OeV3/lWr1497du375pxVzQUMAAbslqtMplMmj17thwdHfM8nt1aIlt+6/zbvxPEP4+Vn39Wm/+5bkhIiJ544ol8t7namHyfffaZZs2alfN3zZo19euvv15x/RUrVshsNuuzzz7LSYD/tGTJEt13331X3L6kXOkCtSgXroV1pffwn4KDg9W0aVMtXrxYw4YN0+LFi+Xs7Kz+/fvnrFPQ88v4e/Ktxx57TI0bN873eNnrDhgwQG3bttWqVau0YcMGffrpp5o9e7befffdIo+PC8C+katyc3d3z2l55ufnp1mzZun333/X8OHDJSmnpeYDDzyQ7/ZbtmzJaeVYkvz8/NSrVy/16tVL48eP15YtW3T69GnVrFmzyPs8fPiwHB0dc8buvZ73oDhcz/tYEIW9FjD+MZllafD19VWPHj20ZMkSTZs2LeeaasiQIXlieu211/K96ZL9ec3+7N12223q0qVLvsfLbmARHh6uVatWac2aNdqwYYO+//57ffHFF3r++ec1atSoK8ZbtWpV1apVS5GRkapZs6YMw1DLli3l7++vF198UadPn9a2bdvUqlWrPK9xQb5XSlpBX0vAHpC7cyN3k7vJ3eU/dxfl85OQkKBx48bJy8tL9913n4KCguTq6qq9e/fq9ddfz/X9VpzvHQqPAgZQCq50sRcUFCTDMFSrVq1i62WQPYnVPyvFknJV/a8lKChIBw4cUERERIFupv/TsGHDck3elD2R0ZUsWbJEISEhuSaezjZ//nwtXbrUJgWM6/XPljvZTpw4cdXkWbNmTVmtVp08eTKnxYEkXbp0SQkJCXm2HTZsmF555RVduHBBS5cuVffu3eXr65vzeEHPr+zeE15eXgXqoVKlSpWcVg4xMTEaPny4PvzwQwoYQBlHriq87CEGLl68KCmrleOvv/6qAQMGqF+/fnnWnzlzppYsWVIqN0H+HeeWLVt08eLFIt8EOXPmjCIjI9WyZcuc1mOFfQ+ulBvd3d1zWlUW5r0srvexpBTk+f5bdsvRY8eO5erdaDabFR0dnSdPDx06VHfffbd2796tJUuWqEmTJjkTakr/n+MDAgKumuOz13N2di7QtUClSpV044036sYbb1RycrLGjRund99996o3QaSsFrSRkZGqVauWGjVqlNNi09vbW3/88Yf27dune++995rHz0/NmjV18OBBWa3WXDdRsod/+Her3MIq6GsJlCZyd+GRu8ndV0Puzqss5u5/f36udI5u2bJF8fHxmjVrlsLDw3OWR0dH57t+cb132c8rv/Pt+PHj136CFRBzYAClwN3dXVLei72+ffvK0dFRs2bNylP5NwxDcXFxhT5WdoX9n2MFWiwWLViwoMD76N+/v86fP5/vNmlpabm6fP5b7dq11bFjx5x//7w4+bezZ88qMjJSN9xwQ77/RowYoZMnT2rXrl0Fjt1erF69OteYi7t379auXbvUtWvXK26TXQD44osvci2fM2dOrsezDRo0SCaTSS+++KKioqJyVf6lgp9fzZo1U1BQkD777LOcsVH/KTY2VlLWefTvczggIEBVqlSR2Wy+4vMCUDaQq65s48aN+S7PHtM4++bQqlWrlJKSoltuuSXfvNajRw/98ssvJfKdefHiRR05ciTPcrPZrI0bN+Y7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"/>
</div>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Self-Reported-Satisfaction">Self-Reported Satisfaction<a class="anchor-link" href="#Self-Reported-Satisfaction">¶</a></h2><ul>
<li>Consider the employee's self-reported satisfaction levels.</li>
<li>A deep dive into the factors influencing satisfaction can guide efforts to boost morale and
engagement.</li>
<li>Address specific concerns raised by team members to improve overall job satisfaction.</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noInput">
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child">
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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i4iI+L9L6c8LptcXERERERER8QPVq9dk/PhJ2K1WIhdtxX4syehIXmHOzCZqwWasyen073+7XxYvREREpPhRAUNERERERESKlbp16/P0089hxUzUwq3Y4lOMjlSoTNm5RP62BdupNHr1upkBA+4wOpKIiIjIRVEBQ0RERERERIqdRo2a8NhjT2HOySXqty1Yk9KNjlQ4ct1E/L4V+8kUunTpxt13D9daLyIiIuI3VMAQERERERGRYqlVq7bcf//DmDPyplcyp2UaHalguT1ELN2O80girVq1ZdSo0SpeiIiIiF9RAUNERERERESKra5du3PXXcOwpGYS9dsWTJk5RkcqGB4PoaviCNgfT4MGDRkz5gksFovRqUREREQuiQoYIiIiIiIiUqz16dOX3r1vwXYqjchFWyHXbXSkK+baeIDgHUepUqUaTz01AbvdbnQkERERkUumAoaIiIiIiIgUe0OGDKN9+044jicRsXQ7eDxGR7psgbuOErJhPyVLlmLChMkEBgYaHUlERETksqiAISIiIiIiIsWe2Wxm9Oix1K/fkID98YSs3Wt0pMviOHyK8BVxuEJCef75FwkPjzA6koiIiMhlUwFDREREREREBLDZbDz55DjKl6+Aa8shArcfMTrSJbGeSiNy8XasFivjnnmOMmXKGR1JRERE5IqogCEiIiIiIiLyt+BgF+PHTyYsLJzwVbtxHD5ldKSLYs7IJmrhFkzZOTzy8KPUqlXH6EgiIiIiV0wFDBEREREREZH/UbJkKcaNex6r1Urkku1YktKNjnR+bjcRi7dhSc1k0KDBtGvX0ehEIiIiIgVCBQwRERERERGRf6hevSYPPvAfTFk5RC3aiikrx+hI5xS6ajeOY0m0bduBfv0GGh1HREREpMCogCEiIiIiIiLyLzp1uoabb+6LNSmd8D93gsdjdKSzBO46SvCOo1SuXJWHHhqDyWQyOpKIiIhIgVEBQ0REREREROQc7rhjKA0aNCTgQDzBWw4ZHecMtvgUwlbuJtjl4umnJ+B0Oo2OJCIiIlKgVMAQEREREREROQeLxcLYsU8RGRVN6Lp92I8mGh0JAFNWDpGLt2N2e3h07FOUKFHS6EgiIiIiBU4FDBEREREREZHzCAsL48knnsVithD5xw7MmdnGBvJ4CFu+C0tKBv37306jRk2MzSMiIiJSSFTAEBERERER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05WAgMDCiCYiIiLiV1TAEBERERERESlA9eo1oESJkgTuO4kpJ/ei9wuMOwZAly7dCyuaiIiIiF+xGh1AREREREREpCgxm8107tyFTz6ZTuSvm/HYLRe1n+NIIpWrVKVSpcqFnFBERETEP6iAISIiIiIiIlLArr32Or79dgacuPh1MEwmEzfe0LsQU4mIiIj4FxUwRERERERERApYiRIlmTHjB3JzL34KKZPJjM1mK8RUIiIiIv5FBQwRERERERGRQmCxWLFY9LFbRERE5HJpEW8REREREREREREREfE5KmCIiIiIiIiIiIiIiIjPUQFDRERERERERERERER8jgoYIiIiIiIiIiIiIiLic1TAEBERERERERERERERn6MChoiIiIiIiIiIiIiI+BwVMERERERERERERERExOeogCEiIiIiIiIiIiIiIj5HBQwREREREREREREREfE5Jo/H4zE6RHHj8Xhwu/VtFxER8Taz2YTJZCqQY6k/FxER8T715SIiIv7vUvpzFTBERERERERERERERMTnaAopERERERERERERERHxOSpgiIiIiIiIiIiIiIiIz1EBQ0REREREREREREREfI4KGCIiIiIiIiIiIiIi4nNUwBAREREREREREREREZ+jAoaIiIiIiIiIiIiIiPgcFTBERERERERERERERMTnqIAhIiIiIiIiIiIiIiI+RwUMERERERERERERERHxOSpgiIiIiIiIiIiIiIiIz1EBQ0REREREREREREREfI4KGCIiIiIiIiIiIiIi4nNUwBCfMGbMGLp37250DJELuvfeexkwYED+11OnTqVBgwYGJhJ/dDG/82JjY3nvvfcu+diXu5/IlVJfLv5E/bkUBPXnUhSpPxd/ob5cCoL6cv9gNTqAiIg/69OnD23btjU6hhRBX375JaVLlzY6hohIsaD+XAqL+nMREe9QXy6FRX258VTAEBG5AiVLlqRkyZJGx5AiqH79+kZHEBEpNtSfS2FRfy4i4h3qy6WwqC83nqaQEp+0bds2Bg8eTP369WnYsCEjR47k0KFD+c8/+uij9OvXL//r+Ph4qlevzk033ZT/WGpqKrVq1WLOnDlezS7ec3qo3x9//MH1119P3bp16d+/PwcOHODUqVOMGjWKq6++mk6dOjF79uwz9l24cCF9+vShbt26NGvWjKeeeoq0tLQzttm1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xR+pPxd/ov5cCpv6cvFH6su9z+TxeDxGhxAREZFL98orr/DBBx+wfPlynE6n0XFERETkMqg/FxER8W/qywuXppASERHxA7t27eKHH36gQYMG2Gw2VqxYwXvvvUffvn11giQiIuIn1J+LiIj4N/Xl3qcChoiIiB9wOp2sXbuWzz//nNTUVEqUKMHgwYO57777jI4mIiIiF0n9uYiIiH9TX+59mkJKRERERERERERERER8jhbxFhERERERERERERERn6MChoiIiIiIiIiIiIiI+BwVMERERERERERERERExOeogCEiIiIiIiIiIiIiIj5HBQwREREREREREREREfE5KmCIiJzHgAEDGDBggNExRERE5AqoPxcREfFv6stFii+r0QFERAratm3beO211/jrr784ceIEYWFhVKlShQ4dOuiER0RExE+oPxcREfFv6stFpCCogCEiRcqaNWsYOHAgpUuXpk+fPkRHR3P48GHWr1/PRx99pJMkERERP6D+XERExL+pLxeRgqIChogUKW+++SYul4sZM2YQEhJyxnMnT540KFWenJwc3G43drvd0BwiIiK+Tv25iIiIf1NfLiIFRWtgiEiRsm/fPqpUqXLWCRJAZGRk/r+/+eYbBg4cSPPmzalduzbXXXcdn3322QWPn5WVxauvvkqvXr1o2LAh9evXp1+/fixbtuyM7Q4cOEBsbCzvvfce06dPp1OnTtSpU4cNGzZQv359xo8ff9axjxw5Qo0aNXjrrbcu45WLiIgUHerPRURE/Jv6chEpKBqBISJFSpkyZVi7di3bt2+nWrVq59zu888/p2rVqnTo0AGr1cpvv/3GM888g8fj4bbbbjvnfikpKXz99dd0796dPn36kJqayowZMxgyZAhff/01NWrUOGP7mTNnkpmZyc0334zdbqd06dJ06tSJOXPmMHbsWCwWS/62P/74Ix6Ph+uvv/7KvxEiIiJ+TP25iIiIf1NfLiIFxeTxeDxGhxARKShLly7lrrvuAqBu3bo0bNiQ5s2b07RpU2w2W/52GRkZOJ3OM/YdPHgwe/fu5Zdffsl/7PS8nB9//DEAubm55ObmnjHUNCkpia5du9K2bVuee+45IO8uj44dOxIcHMz8+fOJiIjI337JkiUMHjyYd955hzZt2uQ/3qNHD0JDQ/PbEhERKa7Un4uIiPg39eUiUlA0hZSIFCktW7bkiy++oEOHDmzdupV3332XwYMH06ZNG3799df87f73BCk5OZn4+HiaNGnC/v37SU5OPufxLRZL/gmS2+3m1KlT5OTkULt2bTZv3nzW9tdcc80ZJ0gALVq0ICYmhlmzZuU/tn37drZt20aPHj0u+7WLiIgUFerPRURE/Jv6chEpKJpCSkSKnLp16zJt2jSysrLYunUrv/zyC9OnT2fUqFF89913VKlShdWrVzN16lTWrVtHenr6GfsnJyfjcrnOefxvv/2W999/n927d5OdnZ3/eNmyZc/a9t8eM5vNXH/99Xz++eekp6cTEBDArFmzcDgcdOnS5QpeuYiISNGh/lxERMS/qS8XkYKgAoaIFFl2u526detSt25dKlasyNixY5k7dy49evTg9ttvp1KlSowZM4ZSpUphs9lYtGgR06dPx+12n/OY33//PWPGjKFTp04MHjyYyMhILBYLb731Fvv37z9r+38OhT3thhtu4L333uOXX36he/fu/Pjjj7Rr1+68J2ciIiLFkfpzERER/6a+XESuhAoYIlIs1K5dG4Bjx46xYMECsrKyeOONNyhdunT+NsuXL7/gcebNm0e5cuWYNm0aJpMp//EpU6ZcUp5q1apRs2ZNZs2aRcmSJTl06BCPP/74JR1DRESkuFF/LiIi4t/Ul4vIpdIaGCJSpCxbtgyPx3PW44sWLQKgUqVKWCwWgDO2S05O5ptvvrng8f9t3/Xr17Nu3bpLztqzZ0+WLl3Khx9+SFhY2BmLhomIiBRn6s9FRET8m/pyESkoGoEhIkXK+PHjSU9Pp3PnzlSqVIns7GzWrFnDnDlzKFOmDL169eLEiRPYbDbuuecebr31VlJTU/n666+JjIzk+PHj5z1+u3bt+Pnnnxk+fDjt2rXjwIEDfPHFF1SpUoW0tLRLytq9e3deeOEF5s+fT9++fbHZbFfy0kVERIoM9eciIiL+TX25iBQUFTBEpEh55JFHmDt3LosWLeLLL78kOzub0qVL069fP4YNG0ZISAghISFMmTKFV155hUmTJhEVFUXfvn2JiIjg0UcfPe/xT59kffnllyxZsoQqVarwwgsvMHfuXFasWHFJWaOiomjZsiWLFi2iZ8+eV/KyRUREihT15yIiIv5NfbmIFBST59/Gc4mIiFcMHz6c7du3M3/+fKOjiIiIyGVSfy4iIuLf1JeL+C6tgSEiYpBjx47pDg8RERE/p/5cRETEv6kvF/FtmkJKRMTL9u/fz5o1a5gxYwZWq5VbbrnF6EgiIiJyidSfi4iI+Df15SL+QSMwRES8bOXKlTzyyCMcOHCAiRMnEh0dbXQkERERuUTqz0VERPyb+nIR/6A1MERERERERERERERExOdoBIaIiIiIiIiIiIiIiPgcFTBERERERERERERERMTnqIAhIiIiIiIiIiIiIiI+RwUMERERERERERERERHxOSpgiIiIiIiIiIiIiIiIz1EBQ0REREREREREREREfI4KGCIiIiIiIiIiIiIi4nNUwBAREREREREREREREZ+jAoaIiIiIiIiIiIiIiPgcFTBERERERERERERERMTnqIAhIiIiIiIiIiIiIiI+RwUMERERERERERERERHxOSpgiIiIiIiIiIiIiIiIz1EBQ0REREREREREREREfI4KGCIiIiIiIiIiIiIi4nNUwBAREREREREREREREZ+jAoaIiIiIiIiIiIiIiPgcFTBEiqjY2FimTp16yft99913dOnShVq1atGoUaNCSHZul5vZl/3zNc2cOZPY2FgOHDhgYKrL48/ZRcS71AeJ+Jfly5cTGxvL8uXLjY7is8aMGUODBg2MjnHJNmzYwK233kr9+vWJjY1ly5YtRkcSA6hfFvEv6pcvzF/7ZV8wdepUYmNjjY5xSaxGBxCRy7do0SI2bNjAfffdVyDH27VrF2PHjqV169YMHToUp9NZIMf9XwWd2Uiffvop48aNo27dunz99dcFeuypU6cybdq0cz6/ZMkSoqOjC7RNEZFLoT7IGNu2beO1117jr7/+4sSJE4SFhVGlShU6dOjAgAED/nWfUaNGMXfuXIYMGcLDDz981vPLly9n4MCBvPrqq3Tp0uWcbZ/vg84tt9zCuHHj8r9esGAB77//Prt27SItLY2oqChq167NTTfdRJs2bc77Gjt06MDBgwcBMJlMBAcHU6pUKerXr0/v3r2pV6/eefcvCDt37mTOnDnceOONlC1btkCPPXPmTMaOHXvO57/88kvq169foG2K/xgzZgzz5s1j7dq1V3ys7Oxs7r//fux2O2PHjsXpdFK6dGk+/fRTAgIC6NWrVwEkFl+hftkY6pfVL0vRdzH/f44ePcpXX31Fp06dqFGjhsGJix4VMET82KJFi/j000//9YRv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SZIkSa1WSwMGDJD69+8v5efnV9pWq9XWK+YxY8ZIrVq1kpKTkytuy8jIkNq3by89+uijFbctWbJEio6Olp588slKbX377bdSTEyMVFBQcNPnXVfHjx+XoqOjpd27d0uSpHt+ffr0kb7++utbPid9rJcvX75pG/rXorp/d911V8V2+/btk6Kjo6WhQ4dKSqWy4va33npLat68ufTss89W2u9DDz0k9e/fv0qM0dHR0vHjxytuS0lJkdq0aSO9/PLLNcaenZ0ttWrVSnr66acljUZTsd3cuXOl6OhoafHixZXafeCBByq1u2HDBik6Olrat2+fJEmSVFRUJHXq1En63//+V2m7rKwsqWPHjpVuf+KJJ6ShQ4dWvP8kSfc6PPTQQ9Kdd95Zcdt9990nPf/881X+voJwuxJ9UOPug3bt2iXFxMRIMTEx0kMPPST9+OOP0s6dOyt9/19v2rRpUmxsrFRYWChJkiRdvHhRio6OljZu3FhpO31fsnbt2pu2X1O/FB0dLa1atapiu99//12Kjo6W2rVrJz377LPSxIkTpRMnTtT6efbv3/+m390zZsyQoqOjpU2bNkmSJEkHDx6UoqOjpRUrVlTabseOHVVu79+/vxQdHS2tX7++4rbCwkKpZ8+e0vDhwytuW7t2baU+ypD075nq/rVu3bpiu8uXL0vR0dFSt27dKr2PfvnlFyk6Olq67777JJVKVXH7W2+9JbVq1apS31jb56t/D+ifr1KplLp37y4NHTpUKisrq9hu69atUnR0tPT7779XardXr16VjgVOnjwpRUdHS0uWLJEkSfc5vPPOO6Wnn3660uektLRUGjBggPTUU09V3PbRRx9JPXv2lHJycir93d58802pY8eOFd8JL730kjRkyJBb/r1vNHXqVCkmJqbiczF79mypf//+0v/93/9JP/30kyRJkqTRaKROnTpJ3377bcXj3n//fSk6OlqaMGFCpf0NHz5cGjFiRMXvGzdulKKjo6U///yz0navvvqq1Lx5c+nSpUs3je/999+X2rVrV+P9dflb1vTZHjJkiPTYY4/dNA7BNES/LPpl0S+Lfln0y5bdL9f283Ps2LFKf+Pr1fZ73NCv3ZgxY6Q2bdpUauPcuXNSTExMjd+9lkqkkBIEE3NxceHo0aOVln7dyM7OruLnkpIScnJyaN++PZIkVbuczFDt1iYe/ayETp06UVpayoULFwDdct4rV67w+OOPV1kdUJ+iZBqNht27dzNw4ECCgoIqbvfx8WHo0KEcPnyYoqKiSo/RzwrQ69SpExqNhpSUlDq3fzMrV67Ey8uLrl27ArrnN3jwYNasWVPt0umGGD9+PDNmzKj078YZHADDhg2rNIslNjYWSZK4//77K20XGxtLWloaarW60u3t27endevWFb/7+/tzxx13sGvXrhqf0549e1CpVDz++OPI5f91Jw888ABOTk5s3769UnxHjx4lOTm54raVK1fSrFmzipyve/bsoaCggCFDhpCTk1PxTy6X07Zt24olwnl5eezbt4977rmn4v2Yk5NDbm4uvXr1IikpqeJ97uLiQmJiIklJSTf9OwvC7UL0QbVjqX1Qz549mT9/PgMGDOD06dNMnTqVZ555hj59+lRJoQe679m+ffvi5OQE6PJkt2rVihUrVtQ7hjvuuKNKvzRjxoyKPhF0RTB/+eUXYmJi2LVrF2PHjmXkyJGMGDGC8+fP17ttPf3MO30KgXXr1uHs7EzPnj0r9R+tWrXCwcGhSooJHx+fipV6oJulOnz4cE6dOkVWVlaD46utTz/9tMrfccqUKVW2u/vuuyvloNfPqrvvvvuwsrKqdLtKparyOavP8z1x4gTZ2dmMGjWqUh76fv36ER4ezrZt2ypuGzZsGJmZmZX+zitXrsTOzo4777wTgISEBJKSkrj33nvJzc2teI1KSkro3r07Bw8eRKvVIkkSGzZsYMCAAUiSVOn17NWrF4WFhRUpblxcXEhPT+fYsWO3/FtfT//ZjIuLA3SpFTp27EinTp04dOgQAGfPnqWgoIBOnTpVefyoUaMq/d6xY0euXLlS8fuOHTtQKBRV0jI9/fTTSJLEjh076hTvjWr7txQaB9Ev147ol2sm+mXDEf2y6JerY4jPT22/xw352mk0Gnbt2sXAgQPx9/ev2F9ERAS9evWqVdyWRKSQEgQTe+edd/jggw/o168frVq1om/fvgwfPrzSgVhqairjxo1jy5YtVVII3XhgZsh2a5KYmMhvv/3Gvn37qrRfWFgI6IpaA7VaOlsbOTk5lJaWEhYWVuW+iIgItFotaWlpFUtUgUpfykDFwfL1eRNvVFZWVvEc9Ly9vWvcXqPRsHr1arp27VqpU4yNjWX69Ons3bvXoJ1Bp06dalXE+8bnrj+gatasWZXbtVothYWFlZbChoSEVNlnaGgopaWl5OTkVPs3SU1NBahYwqtnY2NDUFBQpZODwYMH8+2337JixQpeeeUVCgsL2bp1K08++WTFiYV+kOGJJ56o9jnqD/STk5ORJInff/+d33//vdpts7Oz8fX15bXXXmPMmDHcddddREdH06tXL4YNG0aLFi2qfZwgNHWiD6odS+2DQNffTJgwAaVSyenTp9m0aRMzZ87k9ddfZ/ny5URGRgK6OkGnTp1i2LBhXLp0qeLxXbt25e+//6aoqKjie7Uu/Pz86NGjxy23Gzp0KEOHDqWoqKgiheGqVat48cUXWbVqVYOKs+ovkOgvmFy6dInCwkK6d+9e7fY3FlgMCQmpcgEtNDQUgJSUlFu+Bjeqz+sIuteyNsVCq+vLb3Z7fn5+pc9WfZ6vvo+v7jMQHh5eKcdyz5498fb2ZsWKFXTv3h2tVsuqVau44447Kt5j+j7++vQyNyosLEStVlNQUMCCBQtYsGBBtdvp03s899xz7NmzhwceeICQkBB69uzJ0KFDK9I21KRly5bY29tz6NAhevfuzeHDh3n11Vfx8vJizpw5lJeXVzy/G/dla2tb5bjM1dW10ndlSkoKPj4+VT5f+lQnDb14Wtu/paura4PaEUxD9Mu1I/rlmol+uSrRL4t+2dD9ckM/P7X9Hjfka6dUKikrK6v2Wk9YWFilCaeNgRjAEAQTGzx4MJ06dWLjxo3s3r2badOmMWXKFMaPH0/fvn3RaDQ89dRT5Ofn8+yzzxIeHo6DgwMZGRl88MEH9Z5Rdat2a1JQUMBjjz2Gk5MTr732GsHBwdja2nLy5El+/vlni5rhdf0qgOtJNynMtGbNGj788MNKt505c6bG7fft20dWVharV69m9erVVe5fuXKlWUaza3ru9fmbGIOrqyv9+/dn5cqVvPLKK6xbtw6lUsl9991XJaYff/yx2oM2hUIBUPGee/rpp+ndu3e17QUHBwPQuXNnNm7cyObNm9m9ezeLFy9m1qxZfPHFFzzwwAMGfY6C0BiIPsh4TNEHXc/GxobY2FhiY2MJDQ3lww8/ZN26dRU1jvSzOb/77rtqV+6tX7++yio9Y3BycqJnz5707NkTa2trli1bxtGjRytW39VHYmIi8N/gu1arxdPTk59//rna7WszEaAhGvI61oa+/7uRpfTxCoWCe++9l4ULF/L5559z5MgRMjMzq+3j33vvPWJiYqrdj4ODQ0Wx0/vuu48RI0ZUu50+D39ERATr1q1j27Zt7Ny5kw0bNvDPP//w8ssv89prr9UYr7W1NbGxsRw6dIhLly6RlZVFp06d8PT0RK1Wc/ToUQ4dOkR4eHiV905Nr4Up1fZvKTQOol82HtEvV0/0yw0n+uXKbqd+uT6fn7p8jxvytVMqlQZ61pZBDGAIghn4+Pjw6KOP8uijj5Kdnc2IESOYNGkSffv25ezZsyQlJfHDDz8wfPjwisfs3r27yn7quvz2Zu3W5MCBA+Tl5TFhwgQ6d+5ccfv1qw+AihkFZ8+evekMkNrG7OHhgb29PRcvXqxy34ULF5DL5VVmONRHr169mDFjRq23X7lyJZ6ennz66adV7tu4cSMbN27kiy++qLREsDG4fhaQXlJSEvb29jUeYOpnNV24cKHSjBKlUsmVK1eqvA+GDRvGmDFjOHbsWEVhqutnSen34enpedP3kH47a2vrWs02cnNz4/777+f++++nuLiYxx57jPHjx4sBDOG2JfqgW7PUPqgm+hSAmZmZgO7EZuXKlXTt2rWigOH1/vzzT1auXGmSCyU3xrls2bIGpYMoLi5m06ZNNGvWrGLmXHBwMHv37qVDhw616n8vXbqEJEmV3g/62WwBAQFA3d7fhnodjaU2z/dG+j7+4sWLVWbQXrx4scrM5mHDhjF9+nS2bNnCjh078PDwqDShQ/8ZdXJyuuln1MPDA0dHR7Raba36eAcHBwYPHszgwYNRKpW8+uqrTJo0iRdeeOGmsyE7derElClT2LNnD+7u7oSHhyOTyYiKiuLQoUMcOnSI/v3737L96gQEBLB3794qs6n1qXVq+pvXVm3/ljdTnxQ+gvGIfvnWRL9sHKJfNg/RL1fVGPvlGz8/Nb1H6/I9DoZ97ezs7Kq91lPdd6mlEzUwBMGENBpNlaWMnp6e+Pj4VIyO6kftrx+llySJ2bNnV9mfvb09cPNlsLVttybVxaNUKvnnn38qbdeqVSsCAwOZPXt2lXiuf2xtY1YoFPTs2ZPNmzdXOiC+evUqq1atomPHjvVaYnsjHx8fevToUelfTcrKytiwYQP9+vXj7rvvrvLv0Ucfpbi4mC1btjQ4LlOLi4uryF0JkJaWxubNm+nZs2eNsxp69OiBtbU1c+bMqfQaL168mMLCwionP3369MHd3Z2pU6dy8ODBSrMIAHr37o2TkxOTJ09GpVJVaU+/NNXT05MuXbqwYMGCipOC6rYDyM3NrXSfo6MjwcHBTW42giDUhuiDGncfBLpVgNXN4tMvAden9Dt8+DApKSmMHDmy2v5q8ODB7N+/v165z2+ltLS0IofxjfQ5hqtLf1AbZWVlvPfee+Tl5fHiiy9WnCjec889aDQa/vzzzyqP0ac+uF5mZiYbN26s+L2oqIjly5cTExNTsQJQ/1658b1bnbq+jqZWm+d7o9atW+Pp6cn8+fMrfU63b9/O+fPn6devX6XtW7RoQfPmzVm8eDEbNmxgyJAhlfKAt27dmuDgYKZPn16RauR6+r5boVBw1113sX79es6ePVvjdlC1j7exsSEiIgJJkqo9jrhep06dUCqVzJo1i44dO1a8lzp27Mi///5LZmbmLVNe1KRPnz5oNBr+/vvvSrfPnDkTmUxGnz596rVfvdr+LW/G3t7+lt+DgvGJfln0y6Jf1hH9suiXLbVfrsvnp6bvs7p8j4NhX7tevXqxadOmihRkoEtnt2vXrhqfs6USKzAEwYSKi4vp27cvd911Fy1atMDBwYE9e/Zw/PhxPvjgA0B3kBMcHMwPP/xARkYGTk5OrF+/vtqDulatWgHw9ddf06tXLxQKBUOGDKlXuzVp3749rq6ufPDBB4wePRqZTMa///5b5UBNLpfz+eef89JLLzF8+HBGjhyJt7c3Fy5c4Ny5c0ybNq1OMQO88cYb7Nmzh0ceeYRHHnkEhULBggULUCqVvPvuu7f4axveli1bKC4uZsCAAdXe365dOzw8PFixYgWDBw82SJvr16+vNg1Az5498fLyMkgboMtP+8wzzzB69GhsbGyYN28eAK+++mqNj/Hw8OCFF15gwoQJPPvsswwYMICLFy/yzz//0KZNmyoDFNbW1gwZMoS5c+dW+7o7OTnx+eef89577zFy5EgGDx6Mh4cHqampbN++nQ4dOlSsfPnss8945JFHuPfee3nwwQcJCgri6tWrxMfHk56eXrFEe8iQIXTp0oVWrVrh5ubG8ePHWb9+PY899pjB/naC0FiIPqhx90Ggi7u0tJRBgwYRHh6OSqXiyJEjrF27loCAAEaOHAnoVgsqFIoqJ7N6AwYMYOzYsaxZs4annnqq4vYNGzZUzEa73ogRIypmtiYlJfHvv/9W2cbLy4uePXtSWlrKww8/TLt27ejduzd+fn4UFhayadMmDh06xMCBA2nZsuUtn2tGRkZFOyUlJZw/f55169aRlZXF008/zcMPP1yxbZcuXXjooYeYPHkyCQkJFcv6k5KSWLduHR9//DF33313xfahoaF8/PHHHD9+HE9PT5YsWUJ2dnallB4xMTEoFAqmTJlCYWEhNjY2dOvWDU9Pz1vGXls7duyo9u/doUOHWuWhr63aPN8bWVtb88477/Dhhx/y2GOPMWTIELKzs5k9ezYBAQE8+eSTVR4zfPhwfvjhB4AqxwByuZyvv/6a5557jqFDhzJy5Eh8fX3JyMhg//79ODk5MWnSJADefvtt9u/fz4MPPsgDDzxAZGQk+fn5nDx5kr1793LgwAEAnnnmGby8vOjQoQOenp5cuHCBuXPnViqQW5N27dphZWXFxYsXeeihhypu79y5c8UxUHWFQmtjwIABdO3albFjx5KSkkLz5s3ZvXs3mzdv5oknnqhIc3kzKpWq2gt/rq6uPProo7X+W9akVatWzJs3jz///JOQkBA8PDxqzFUvGI/ol0W/rCf6ZdEvi37ZMvvlunx+goODcXFxYf78+Tg6OuLg4EBsbGydvsf1DPXavfrqq+zcuZNHH32UUaNGodFomDt3LpGRkQZNq2YKYgBDEEzIzs6OUaNGsXv3bjZs2IAkSQQHB1dcjAVdxzRp0iS+/vprJk+ejK2tLYMGDeLRRx9l2LBhlfZ35513Mnr0aFavXs2KFSuQJKnaA77atFsTd3d3Jk2axA8//MBvv/2Gi4sL9913H927d+eZZ56ptG3v3r2ZNWsWf/zxB9OnT0eSJIKCgnjwwQfrHDNAVFQUf//9N7/88guTJ09GkiRiY2P56aefaNu2ba3+5oa0YsUKbG1t6dmzZ7X3y+Vy+vXrx8qVK8nNza1UJLu+Pv/882pvnz17tkEHMDp37ky7du34448/SE1NJTIyku++++6Wxa5fffVVPDw8mDt3Lt999x2urq48+OCDvPXWW1hbW1fZftiwYcydO5fu3bvj4+NT5f57770XHx8f/vrrL6ZNm4ZSqcTX15dOnTpVnAAAREZGsmTJEiZMmMCyZcvIy8vDw8ODli1b8vLLL1dsN3r0aLZs2cLu3btRKpX4+/vzxhtvVHnvCsLtQPRBjbsPAl2u23Xr1rF9+3YWLFiASqXC39+fRx55hJdeegkXFxdUKhXr1q2jffv2uLm5Vbuf6OhoAgMDWbFiRaULJdXVdgLdhQj9hZLdu3dXu+S9S5cu9OzZExcXF77++mu2bdvG0qVLycrKQqFQEBYWxnvvvcfo0aNr9VwTEhJ47733kMlkODo60qxZM/r3788DDzxAbGxsle2//PJLWrduzfz58xk7diwKhYKAgADuu+8+OnToUGnb0NBQPvnkE3788UcuXrxIYGAgY8eOrVRXydvbmy+++ILJkyfz8ccfo9FomD17tkEvlIwbN67a27/77juDXyi51fOtzsiRI7Gzs2PKlCn8/PPPODg4MHDgQN59992KYrjXu/fee/n5558JCgqq9jXq2rUrCxYs4M8//2Tu3LmUlJTg7e1NbGxspYsVXl5eLFq0iD/++IONGzcyb9483NzciIyM5J133qnY7qGHHmLlypXMmDGDkpIS/Pz8GD16NGPGjLnl38TBwYGYmBiOHz9eaUan/uJIs2bN6p1SQi6XM3HiRMaNG8eaNWtYunQpAQEBvPfeezz99NO12odKpeL333+vcntwcDCPPvporf+WNXn55ZdJTU1l6tSpFBcX06VLFzGAYQaiXxb9sp7ol0W/LPply+yX6/L5sba25vvvv+fXX3/l888/R61W89133zFy5Mhaf4/rGeq1a9GiBdOmTeO7775j3Lhx+Pn58eqrr5KVldXoBjBkkqmryQiCIAgWpXnz5jz66KPV1vUwtNOnTzNs2LAq+R8FQRAEwRQGDBhAVFQUkydPNncoJmHK55uTk0Pv3r0ZM2ZMpckEgiAIglAT0S8bj+iXGy/x2lUlamAIgiAIJrNw4UIcHBy48847zR2KIAiCIAgGtGzZMjQaTY2zCQVBEARBMB3RLzde4rWrSqSQEgRBEIxuy5YtnDt3joULF/Loo49WW9dDEARBEITGZ+/evZw/f55JkyYxcOBAAgMDzR2SIAiCINy2RL/ceInXrmZiAEMQBEEwuq+//pqrV6/Sp0+fmxYGFwRBEAShcfnzzz+Ji4ujffv2fPLJJ+YORxAEQRBua6JfbrzEa1czUQNDEARBEARBEARBEARBEARBEASLI2pgCIIgCIIgCIIgCIIgCIIgCIJgccQAhiAIgiAIgiAIgiAIgiAIgiAIFkcMYAiCIAiCIAiCIAiCIAiCIAiCYHFEEW8zkCQJrVaUHhEEQRAEU5PLZchkMoPsS/TngiAIgmB6oi8XBEEQhMavLv25GMAwA61WIien2NxhCIIgCMJtx8PDEYXCMBc9RH8uCIIgCKYn+nJBEARBaPzq0p+LFFKCIAiCIAiCIAiCIAiCIAiCIFgcMYAhCIIgCIIgCIIgCIIgCIIgCILFEQMYgiAIgiAIgiAIgiAIgiAIgiBYHDGAIQiCIAiCIAiCIAiCIAiCIAiCxREDGIIgCIIgCIIgCIIgCIIgCIIgWBwxgCEIgiAIgiAIgiAIgiAIgiAIgsURAxiCIAiCIAiCIAiCIAiCIAiCIFgcMYAhCIIgCIIgCIIgCIIgCIIgCILFEQMYgiAIgiAIgiAIgiAIgiAIgiBYHDGAIQiCIAiCIAiCIAiCIAiCIAiCxREDGIIgCIIgCIIgCIIgCIIgCIIgWBwxgCEIgiAIgiAIgiAIgiAIgiAIgsURAxiCIAiCIAiCIAiCIAiCIAiCIFgcMYAhCIIgCIIgCIIgCIIgCIIgCILFEQMYgiAIgiAIgiAIgiAIgiAIgiBYHDGAIQiCIAiCIAiCIAiCIAiCIAiCxREDGIIgCIIgCIIgCIIgCIIgCIIgWBwxgCEIgiAIgiAIgiAIgiAIgiAIgsWxMncADXXp0iWmTZvG0aNHSUxMJDw8nFWrVt30MZmZmcycOZPdu3eTnJyMs7MznTt35q233iIgIKBiu/379/P4449XefzgwYMZO3aswZ+LIAiCIAiCIAiCIAiCIAiCIAg6jX4AIzExke3bt9O2bVu0Wi2SJN3yMSdPnmTjxo3cf//9tG3bltzcXCZOnMgDDzzAqlWr8PDwqLT9d999R3h4eMXv7u7uBn8egiAIgiAIgiAIgiAIgiAIgiD8p9EPYAwYMICBAwcC8MEHH3DixIlbPqZjx46sXbsWK6v/nn6HDh3o168fy5cv5+mnn660fVRUFG3atDFs4IIgCIIgCIIgCIIgCIIgCIIg1KjRD2DI5XUv4+Hi4lLlNj8/Pzw8PMjMzDREWIIgCIIgCIIgCIIgCIIgCIIgNIAo4n3NxYsXyc7OJiIiosp9zz//PDExMfTp04cffviBsrIyM0QoCIIgCIIgCIIgCIIgCIIgCLePRr8CwxAkSeLrr7/Gx8eHIUOGVNzu7OzMs88+S+fOnbG1tWXfvn1Mnz6dCxcuMHny5Aa1aWUlxo4EQRAEobET/bkgCIIgNG6iLxcEQRAEyyYGMIDx48ezb98+pk6dioODQ8XtLVu2pGXLlhW/d+/eHR8fH7788kuOHTtGbGxsvdqTy2W4uzs2OG5BEARBEMxH9OeCIAiC0LiJvlwQBEG43anVaiRJQi6Xo1AozB1OtW77AYyFCxfyxx9/8M0339C9e/dbbn/PPffw5ZdfcuLEiXoPYGi1EgUFJfV6rCAIgiAI9efiYo9CYZiZlqI/FwRBEATTE325IAiCIBjGzp3b+fLLT9FoNNjb2zNx4jSCg4NN0nZd+vPbegBj48aNfP7557z22mv83//9n0nbVqu1Jm1PEARBEATDE/25IAiCIDRuoi8XBEGomSRJZGZmAODj44tMJjNzRIIhxcfHodFocHFxoaCggFOnTuLvH2jusKq4bZM97t+/n7feeosHHniAl19+udaPW716NQBt2rQxVmiCIAiCIAiCIAiCIAiCIFgYSZJQqVRoNGpzh2ISy5YtYvToBxk9+kGWLFlg7nAEA9MPTnXq1KnS75am0a/AKC0tZfv27QCkpKRQVFTEunXrAOjSpQseHh488cQTpKamsnHjRgDOnz/Pyy+/TGhoKMOGDSM+Pr5ifx4eHhVLZd555x1CQkJo2bJlRRHvmTNnMnDgQDGAIQiCIAiCIAiCIAiCIAi3kZ9++pZNm9ZjZWXFl19+T6dOXcwdklGdO5dY8fP58+fMGIlgDOnpaVhbW+Pp6VnxuyVq9AMY2dnZvP7665Vu0/8+e/ZsunbtilarRaPRVNx/9OhRCgsLKSwsZNSoUZUeO2LECL7//nsAoqKiWLlyJdOnT0elUhEQEMCLL77I888/b+RnJQiCIAiCIAiCIAiCIAiW7dKlJPbs2UWLFjG0b9/R3OEYXVzcYUBX+PjUqRNNfgAjOzv7up+vmjES05AkieTkS6hUSpo1C8DR0dHcIRmNJEmkpqbg4uKCk5MTMpmMtLRUc4dVrUY/gBEYGMiZM2duus2cOXMq/T5y5EhGjhx5y32/8MILvPDCCw2KTxAEQRAEQRAEQRAEQRCaor/++oODB/fj5OTE0qVrzB2OUWk0anJzc3C3dyW3NJ+srExzh2R0WVmZONlbI0N2WzzfNWtW8vvvPwMQGRnFn39OM3NExpOTk01paSl+fn4oFAqcnJy4fDnZ3GFV67atgSEIgiAIgiAIgiAIgiAIQv3l5uYAUFRUhFrdtOtCXL16Fa1WS5hnMDJkZGY27Qv6ugLe6Xg42eHhZEtGRjpardbcYRnVxYvnAbC3sSMp6WKTfr6XLiUB4O7uDoCbmxs5OdkUFRWaMarqiQEMQRAEweKcPXuGTz/9gB9//Aalstzc4QiCIAiCIAiCIAjVKCwo+O/nwoKbbNn46dPr+Dh742LvTHq6ZabbMZTs7KsolUrdAIazHWq1mqtXs8wdllFdvapLk9UqpDlqtZr8/DzzBmREly5dBHQDF/DfQEZS0kVzhVQjMYAhCIIgWJyNG9eyb98eNm1aT0LCKXOHIwiCIAiCIAiCIFQj77oLvHl5eTVu1xSkpFwBwMvRAy9HDzIy0lGpVGaOynj06YR8XO3xdnUA/vsbNFUZGek42NoT2Sys4vemSl+gXV/AW///+fOJNT7GXMQAhiAIgmBxcnNzK37Oy8u9yZaCIAiCIAiCIAiCOZSVlVFe/t+K+aZ+7pacfAkAX2dv/Jy90Wq1TfqCfnJyEgDerg74uNoD/6UdaookSSI9PZVm7r40c/cBID09zcxRGc+5c2extrbGxcUF+G8AIzHxrDnDqpYYwBAEQRAsTk5OdsXP2dlXzRiJIAiCIAiCIAiCUJ3rz9vgv3oYTZU+5Y6vszd+Lj6VbmuKLly4AIC/hyP+Hk7XbjtnzpCMKj8/n+LiYgI8/QjwbAY03RUnJSUlXLqUhJeXFzKZDABXV1dsbGw4fTrBzNFVJQYwBEEQBIuTmZlR8XNWVtMujCYIgiAIgiAIgtAY6Seb+durKv3eFEmSxPlziXg7eWJnbUuAq+4Ctz4NT1N0/vxZrBVyvF0d8Haxx9pKzrlzljc731AuX9atsAnxCSTEJ/DabcnmDMlozpxJQKvV4uvrW3GbTCbDx8eH5OQkCgstq5C3GMAQBEEQLIq+MJivmy7HZlPOOamXm5vD+PG/8vvvP98Wz1cQBEEQBEEQhMZPP9ksxFFd6femKCsrk/yCfALd/AEIcNMNYCQmnjFnWEZTXl7O+fPnCPRyQiGXIZfLCPJ04sKF85SWlpo7PKPQF68O8QnE28UTe1s7iyxobQjHjx8FqDSAcf3vJ04cNXlMNyMGMARBEBqBkpIS9u7d1aTzL+plZKSh1WoJ8XbGzsaqyS7ZvN727VtZuXI5q1evYP36NeYOx+guXUri/fff5I03xjB37ixzhyMIgiAIgiAIQj1kZOhWzoc5qSr93hSdOnUCgFCPIADsre3wc/bh9OkENBqNOUMzijNndM8rxNul4rYQHxe0Wi1nz542Y2TGc/HieQAimoUil8sJ9w0hOTkJtVpt5sgMLz7+CDKZrMoARrNmza7dH2eOsGokBjAEQRAagblzZ/DZZx/x/vtvmjsUo0tO1i3R9HZ1wMfFnpSUK2g0Te+A4XrXz1S6ejXLjJGYxvbtW4iLO8ypUyeYP38OWq3W3CEJgiAIgiAIglBH6empAPjbq7FTSBW/N0UnT+oGMMI8gytuC/cMpqSkuEnO0o+PPwJAhJ9rxW0Rfm6V7mtqEs+ewcbKmmCvAACi/MNRq9UkJV0wc2SGVVJSwunTp/D29sbGxqbSfd7e3lhZWREXd8hM0VVPDGAIgiA0AvqVF2lpTfeAUE9fFMzfwxE/D0eUSiUpKSlmjsq4rq/5cf3PTZV+VU2zZs1QKpW3xaCNIAiCIAiCcHvYsGEtf/75O4cOHTB3KEaXmpqCDPCw0eBpoyY15QqSJJk7LKOIizuMrZUNQddSSAFEeIcBTfOCflzcYeQyGeHXDWCE+bkgl8s4csSyLm4bglJZzvkL54jyD8fayhqAmKAoAIssat0QcXGHUavVBAYGVrlPoVDg7+9PUtJFi7o2IQYwBEFolM6ePcNPP317W6QXAsjLy6v4uayszHyBmIC+KFgzD0f8PRwr3dZUpaWlYmdti5eLx20xSHXpUhLW1tYVy1OTky+ZOSJBEARBEARBaLiysjJ++eV7li9fwh9//m7ucIzuypVk3G00WMnBy1ZDuVLZJOtgZGdfJTk5iUivMBRyRcXtzX0iADhy5KC5QjOKgoJ8EhJOEuqjS+usZ2dtRZiPC2dOJ1S6RtEUnD17BrVaTavg5hW36X8+efK4ucIyigMH9gIQFBRU7f362w8c2GeymG5FDGAIQhNx8eJ5Dh7c32SLKd1o8uQJbNy4juXLl5g7FJPIzr5a7c9NjSRJnDp1EjdHW1wdbAnxdgYgIeGkmSMzHkmSuHI5mUCvZgR5+ZORkU55ebm5wzIalUpFcnIS7u7ueHp6Av+tuhEEQRAEQRCExiwzM71iBUJGelqTTpVaVFRIdnY2Pna6dL++9ro6EE1xcpL+Qm4L36hKt7vYORPg6sfRo3FN6lrM/v170Wq1tAr2qnJfq2BPtJK24iJ4U3HsWDwAbcNaVtwW5OWPh5Mbx47FN5mVRRqNhj17duHg4ICXV9XXFyA4WJcmbffuHaYM7abEAIYgNAGFhYW88MJTfPzxu/zzz2xzh2MS+ov4paUlZo7E+LRabaUUO01xRoteenoaubk5hPjoCoX5ezhhrZBz4sQxM0dmPBkZ6ZSUlhDmG0KYbzBarZbk5CRzh2U0Fy6cQ61W4+XlVXHA1NSW5AqCIAiCIAi3p9TU/1ZTq9XqJn3udulSEgC+dppr/+sGMppiPYg9e3YB0KZZiyr3tW4Wg1KptLiaAQ2xY8dWAFqHeFa5r3Ww7rbt27eYNCZji4s7jEwmIzb0vwEMmUxGu/DWZGVlNpnsHydPHic/P4/Q0FBkMlm12zg6OuLt7U18/BEKCgpMHGH1xACGIDQB16ecaYqzHW6mqYyC38zVq1moVKqK35tyiqHDh3VLb6OauQFgpZAT5uvC+fPnmtwSVT19eqzIZqFENtPlUE1MbLops06d0hW/8/HxwdHREUdHR06ePH5bfJYFQRAEQRCEpk0/EUnp6XTt96Z7fn7+/LXahfbqSv83tdXVxcVFHDlykADXZng4ule5P9Y/BoCdO7ebOjSjyM/P49ChAwR7OePlYl/lfk8Xe0K8nTl8+GCTOUcvKSnh5MnjxARG4eroUum+LtHtAZpMTZtt2zYDEBoaetPtwsLC0Gg0FrMKQwxgCEITkJmZft3PllNkxxRuh4ue+pH+Fj6RAFy5ctmc4RiV/qAgOsCt4rboAN1B4uHDTeOA4UYJCacAaBkcTcvgaABOnz5lzpCMSl/gzs/Pr+L/3NwcLl9ONmdYgiAIgiAIgtBg+ov6JaFe135PNGc4RqV/bvqBC3cbLbYKqcnVL9y9eycqlYoOQbHV3h/o5o+3kyd7du9sEvUqt2zZiEajoUOET43bdIjwQavVsnnzBhNGZjxHjhxCrVZXDFZcT39bU0iZpVKp2L59C46OjhXn4zWJiNDVd9myZaMpQrslMYAhCE3A9Re0r6Rcvi0u6uuVlDT9FFIXL54HoH1Qm2u/XzBnOEZTWlrK4UMH8HN3wNP5v5kera4tUbWUkX9DO3YsHiuFFc0DIgnxCcTJzpHjx4+aOyyjUKvVxMcfwdXVFScn3ay0gIAAoOkOUAmCIAiCIAi3j4TTp9DaWVMaohvA0E9WaorOnDmNjVzC+1oKKbkMAuxVJF9KalL1IPQX6TsEtqn2fplMRofAWErLStm7d7cpQzM4SZJYs2YlVgo5HSNvPoBhrZCzdu3KJnH9ac+enQD0atm1yn1eLh60CIwiPv4IxcVFpg7NoA4e3EdhYSHh4eHI5TcfEtAPchw7Fm8RE6XFAIYgNAH6ZalKTyfKy8os4svF2NRqXUqlgoJ8M0difPpZPBGeoXg6unP+3NkmcZBwowMH9lKuLCc2pHIhKR9XB/zcHDh4YH+TG7AqKiokMfEMbUJaYGdji0KuoH1EG1JSrpCRkX7rHTQy8fFHKC0tJSgoqOK2wMBAgEZ/sC8IgiAIgiDc3jIzM0hPS6XcywmtvQ1qJ1uOnziKRqMxd2gGV1ZWRlLSBQIdVMivS6Mf7KBGK0kkJp4xX3AGlJaWSlzcYaK8w/GsJn2UXpcQ3Sz9detWmyo0ozh+/CiXLiURG+qFg611jds52FoTG+pFcvKlihX2jZVSqWTfvt34ufsQ5R9W7TZ9WndDrVY3+nPW9evXAhAVFXWLLXWio6ORJIkNG9YZM6xaEQMYgtAEJCaeQbK2ojTI49rvTWvJ5o0kSSL/Wq7FvLxc8wZjAqdOncDBxgEvJw9C3IPIzcslPT3N3GEZ3IYNus60uqWq7SN8KFeWN7lCYQcP7ker1dI5ql3FbV2u/bx//x7zBGVE+rywYWH/HRg6ODjg6+vLsWPxTSaHqiAIgiAIws0UFhZaTGFUwXD09fzK/dwq/i8qLGwyF/Ovd+ZMAlqtlmAHdaXbgx11Ew0TEk6aIyyD0w9IdA/tdNPtvJ08ifIOJy7uEKmpKaYIzSiWLFkAQO+WAbfctncr3TZLly4yakzGdvDgfoqKihgQ26vGotYD2vQEYMuWTaYMzaCys69y4MBevLy88PDwqNVjwsLCsLa2ZsOGNWi1WiNHeHNiAEMQGrni4mKSk5Mp93BE6ekMwJkzTXeZKkBRURHlSiWg+xJuynJysklJuUKYRxBymZwwz2CAJpdiKDMzg8OHDhLq44K3q0OV+ztF+iKTNf4ZLTfSX9Dv3apbxW09W3ZBJpM1mSJwekplOTt2bMXR0REfn8qDVOHh4Wi1WrZubbwHhIIgCELtKJXlHD0ax5Ejhzhx4hgajfrWDxKEJmTv3t3cf/8Q/u//hrJjxzZzh2N0JSUlPPXkKO677042bWoa+fJrok9DU+bvXun/PXt2mS0mYzlx4hgAoU6qSreHXBvAOHHiuMljMjSlspw1a1biZOtI24CWt9y+Z3gXAFasWGbs0IwiOfkS+/btIdTHhWBv51tuH+TlTLivC/v37+HSpSTjB2gkmzevB2BQuz41buPv6Uer4OYcOXKQnJxsU4VmUOvXr0Gj0dCiRYtaP8ba2pqIiAjS09M4cuSQEaO7NTGAIQiN3PHjR5EkLUofF1ReTkhyGfHxceYOy6iysjIrfi4tLaWoqNCM0RiXfhZPtI+ugFLza//rb28qVq5chlbS0r15s2rvd3O0JSbQg4SEk5w9e9rE0RlHUVEhBw7sJcw3mBCfwIrbvVw8aBMSw/HjR7l6NcuMERrW7t27KC4uIioqqsrMloiICORyORs2rGmS6dEEQRCE/8ydO4t3332dDz54i7feeoW1a5vW5ARBuJVDh/ZX+3NTlZh4hpTUFMrKytizp2nWtANdauNDhw6g9HRC42wHQJm/G5K1gq3bNje5Y1z9AIZ+wELP2VrCy1bDyZPHzD5ju6G2bdtCfn4ePUI7Ya2oOZ2SXlv/lrjZu7B+/epGmfp43rw5SJLEHbFBt974mgGxugmW//wz21hhGVVubi579+4myj+ciGahN9327o4D0Gq1bNxo/nRKdaXRaFizZmXFgERd6Ac8Vq4078CcGMAQhEbuyJFry1R9XZCsFCi9nDl79kyTrg2RlpZ609+bkgMH9gEQ46vLUejr7I27gxuHDx9oMjMWS0tLWLNmJc72NrQL965xuz7XlqguWbLQVKEZ1bZtW1AqldzdoX+V++7u2P/awdF6M0RmHPoDnurybdrZ2RESEsL58+eazHJzQRAEoXrHjsWhkMEdfsXXfo83b0CCYGInThxHkiuQ5FYcP37M3OEY3YUL5yp+Pn8+0YyRGNeGDevQaDSUhF5Xz08hpyTYk4z0NOLiDpsvOANTq9WcOHGMZnZqHK2qDsyEOykpKiqq9No3NpIksXjxfOQyOT3DqxZ2ro5CrqBXeFeKi4tZt26VkSM0rCtXLrN1y0YCPJ2ICapdeiGAFoHuBHo6sX3b5orarI3Jxo26z+29XQbdctuBbXtjZ23L2rWrGt3g3L59e8jMzCAqKgpr61sPxl3Py8sLb29v9u3ba9ZU5mIA4zaRn5/HihVL2bRpQ5Mb+a+ORqNh37497N69E+W1VENNkSRJ7N6zE62tFUpvFwDKAtyRJC379+81c3TGc/myrmNs4VJ+7fdkc4ZjNOXl5ezfvwcfZy98nXUX9mUyGbHNYigoKODo0XjzBmggK1cup7CwkF4t/bFS1NwtRTZzI+DawdGVK5dNGKHhSZLEqpXLUcgV3NmhX5X7B8T2wt7WjjWrVzSJgarz5xM5ceIYQUFBuLq6VrtNy5a6ZdnLly8xZWi3HUmS+OuvP/j00w8q/k2ZMvG2ODYQBMH8ysvLSUw8i7+9ijv9SnCy0nLy5DHxHSTcNtLSUrl48TzlbkGUeYSQknK5UV70qwv9OUuQu5q0tDQyMzPMG5ARaDQaVq5ajqSQUxJWOVVqcZQfAP/+u9QcoRnFmTMJlJeXE+5c/bWWiGtppRpzZogDB/aRlHSRTsFtcXeo/vylOr3Cu2JrZcOSJQtRqVS3foCFmDVrKlpJ4s72ITXWgaiOTCbjrvYhaCWJWbOmGTFCw9NoNKxcuQx7GzsG3iR9lJ6jnQMD2/UhNTWl0WXE+Pdf3Tm2/py7rlq1aoUkaVm5crkBo6obMYBxm5g7dxYTJvzGjz9+3aRG/muyc+c2Pv30A7744mNWr/7X3OEYzenTp8jKzKQ0wB3kuk6mNMgToMkVO75eUtJFANq6lVf6vanZu3cXZWVltA9oXekgon1gGwC2bNlortAMpqSkhEWL5mFvY0WvGP+bbiuTyRjULhitJDXaJap6x47Fc+HiefrH9sTT2b3K/Q629tzTYQAZmelNImfuwoXzAN2BT038/Pzw9PRkx46tTXpVlbklJV1k8eIF7Nu3p+LfokXzGv2goCAIjcPx40dRqVREOKmQySDCSUlWVpb4DhJuGxs2rAWgzCuCMq/Ia7etMWdIRlVeXk5c3CF8nDV0DdNd7NavMG9Kdu3aTlpqCiVh3ki2VpXuU3k6Ue7lzL59u5vMeav+mlKUc/UX6COvDWzExzfOa0+SJPHPP7MAuCO6d50e62BjT8+wLmRlZbJ5c+Oo+XL27Bm2b99KiI8Lreqw+kIvJsiDUB8Xdu7cxpkzCQaPz1gOHNhLRkY6d3Xoh5OdY60eM7L7YACWL19szNAM6sKF88THHyEgIAA3N7d67SMsLAwHBwfWrl1FaWmpYQOsJTGAcZs4fPhAxc/6lENN2fWjoYcOHbjJlo2b/gC4NOy/tDsaZzuUXk4cOnSgyRa4PnfuLHYKiRhX5bXfm+ZS5LVrdctOu4R0qHR7mGcw3k6ebN++leLiYnOEZjCLF88nPz+ffq0DsbOxuuX2rYM9CfR0YvPmDZw/33iXJM+bNweAB3reW+M29/ccikwmY8GCvxv1zNS0tFS2bduCp6cnAQEBNW4nk8mIjY1Fq9WyaNF8E0Z4ezl16gQA+ZH9SOvxAvnhvSvdLgiCYEz6FcLNXZSV/t+3b7fZYhIEUyktLWHlyuVore0p9YqizDMcrY0jq1atoLi4yNzhGcXevbsoLS2lQ7CKdkG6gctNm5pOilTQzeKeO3cmyGUUtqr+WLewdSCSJPH33zNNGpuxHDlyCLkMwpyqH8Bwtpbws1Nz9Ghco8yIERd3mISEU7QLaE0zF986P75/VE+sFVbM+2eOxa+mlySJyZMnADC0U1idVl/oyWQyhnQKA2DSpAmN5txVf845sseQWj8m0j+MdmGtOHhwf6MpXL5s2SIAWrduXe99KBQKYmJiKCoqNNt3uBjAuA2cPXuGK1cuU+YRgqSwYevWzRb/JdoQSmU5e/fuwsVOwt9VQ3z8kSZZD6K4uJgtWzaicbSl3LfyksbicB+0Wi3r1jW9oohFRYUkJ18i2EGFg5WEj62a0wknGl0Owlu5fDmZuLjDRHqH4e3kWek+mUxGt9BOlJeXNcoCUnrZ2VdZtGgeLg629Gld84Xt68lkMoZ2DqtIg9NYDo6ul5BwkiNHDtEluj0xQVXrQegFefkzILYXZ8+e4eDBxlvg8Z9/ZiNJWtq1a3fLA+KwsDBcXFxYt25Vk0wvYAmOHtUt5S93CwSFNUq3oEq3C4IgGItGo2bH9i04WWkJvXbRq6WrEoUMtm7dbOboBMH4/v57FgUF+RT7twWFFcgVFAW0o6SkmNmzp5s7PIOTJImlSxchAzqHKnG1l4jxU3Hq1AlOnz5l7vAMZt261Vy6lERxuA8aJ7tqtyn3d0Pp5cT27Vsbfb234uIiTp06QbCDCntFzediUc5KysvLG90kGUmSmDNnBgB3tehXr3242rvQI7QzaempFl/TcPfuHRw/fpQ2IV6E+9U+VdaNwv1ciQ314uTJ4+zcuc1Q4RlNQsIpTpw4Ro+YzoT61L5oOcCoviMA3WRMS5ebm8OWLRtxc3MjMDCwQftq0aIFCoWCpUsXmuX6mxjAuA0sWbIAgGL/dpT4tiArK5OdO7ebOSrj2bZtCwUFBXQLL6d7RDkqlapiJntTsmHDWkpLSymK8oUbLgqWhnoj2VixYuXyRpV3sTaOHz8KQIijquL/ouJiLl68YM6wDE7/ue0X0aPa+7uHdsRaYc3SpQvRaDSmDM1g/vrrT8rLy7mnYwg2VopaPy7K352YIA/i4g6ze/cOI0ZoeJIkMX3aZACeuOOhW27/+IAHkMlkzJw5pVEO0qWkXGbjxnV4eHgQGhp6y+3lcjkdOnRArVZXrFIRDEej0XD48EE0ts5o7HQnKGoHd7Q2jhw6dKBRvscEQWg8DhzYT25eLrFu5SiuHbo6WEm0cCnn3LmzjXplpSDcytmzp1m8ZCEaOxeKAttV3F7sH4va3o3ly5c2ugu9t3Lo0AFOnz5FuyAlPs66Y4xBMWUAuhULTUBhYSEzZk5BslZQEHuTi6AyGXkddTPU//jj90Z7/gYQF3cErVZLtMvNV1boV9gdOtS4JmIdPLifkyeP0y6gNQFuzeq9n4HN+2CtsGLu3JkWuwqlrKyMSZMmoJDLGdo5rMH7G9opDIVczl+T/6CsrMwAERrP/Pm6c81RfYbX+bFdozsQ5hvMpk3rLX7S3cpr1wRbt25dr9U117O3tycyMpKUlCtmqbkrBjCauLi4w2zdugmVkzdKt0DdbA+5gsmT/2j0qWeqU1JSwowZf2GtgF4R5XQNVeJoIzFv3hxycrLNHZ7BqNVqlixZoCsSFll1SaNkraAowofcnOwmUSfhekeOHAJ0MzoAIq/l3WxsRZRu5urVLDZuXIe3kyet/VtUu42TrSNdQzqQnp7WKOudxMcfYevWTYT4uNCpmvfwrQzvGoGVQs7EieMoLS0xQoTGcfDgPo4ei6dnTBfahFT/2l4vzDeYu9r349y5RLZs2WT8AA1s5sypaLVaOnbsWOsDpvDwcNzc3Fi7dhUpKSInuiElJJyksLCAMo/Q/wa+ZTLKPELIy8ttVDlrBUFofJYt0+WL7u5VOXdyt2u/N6Z80oJQFwUF+Xz55SdoNVryogaA/Lq0qXIFeVEDkJD46qtPyc3NNV+gBqRUlvPnn78hl8Hdrf67kBnpo6G5r4oDB/axZ89OM0ZoGH/99QcF+fkUtAlEa29z021VXs6UhHlz9uxpVqxYZqIIDU+/Mrx5DQW89cKcVFjLJQ4ebDwpvbVaLTNnTkWGjHta3tGgfbnau9A7vBuZmRmsXbvSQBEa1sKF/5CZmUG/1gF4udg3eH+eLvb0bxNIZlYm8+fPNUCExnHhwnn27t1NbGhL2obVXKOxJnK5nEf73Y9Go2HBgr+NEKFhlJeXs2LFMuzs7IiMjDTIPvVpqPQTbk1JDGA0YTk52fzyy/e60f6oASCTobF3pTCoM9nZV/ntt5+a1GxLSZKYNGk82dnZ3NmyFHdHCXsbuLdtKSUlJU3q+epHeoujfNHaWle7TVELfySFnH/mWX7exdqSJIm9e3Zhr5AIctQ9p2gXJTJ0+VWbivnz56JSqbizRT/kspq/pgdG90YhVzB3zsxG9RqXl5fz228/IZfJGNk9Enk9ZgJ4udgzoE0gWVlZzJw51QhRGp5KpWLSpD+Qy+W8cPfoWj/umTsfwcbKhunTJputYFZ96IvB+fj4EBwcXOvHyeVyOnXqVHECIRiOfrCzzDO80u1lnhHX7t9q8pgEQbg9JCScIj7+MFHOSnztK888jnJW4WOrZvPmDWRkpJspQkEwjtLSEj755AMyMzMoCOmK0q1qCg+Vqz8FoT3Izr7KJ5+83yQmGs6ePZ2UlBT6Ny/D363yOfiDHUuxUsCE8WMbdarnw4cPsn79GpQejhQ196/VY/I7hKK1s2ba9MmkpqYYOULDkySJgwf34WglEeBw8/NPazlEOCm5ePE8WVmZJoqwYXbu3Ma5c2fpHNyOZi4+Dd7fwOZ9sLO25Z+/Z1vcpLuUlMvMnz8XN0db7mhb+3O1W7mjbRDuTrYsXPgPV65Y5mS0uXN1KcIeH/BAvfcxILYXAZ7NWLd2tcW+vzdv3kBBQT4xMTFYWd263mhtuLu7ExgYyLFj8SQmnjHIPmur0Q9gXLp0iU8//ZRhw4bRsmVLhg4dWqvH6fKn/0W/fv2IjY3loYceIj4+vsp2GRkZvPrqq7Rv354uXbrw8ccfU1Rk+QW2dAdK7187UOqG2um/Is9Fge0pd/Fn+/YtTJ8+2YxRGtby5UtYt241wR5q7mhRXnF793AlLfxU7Nu3h1mzppkxQsNQKpXM/XsWkkJOYcua6wZoHWwojvAhLTWFTZs2mDBC4zlzJoHMrExauf6XesDRSiLCScmpUyeaRNHy1NQU1qxeiY+TF52C2t50Ww9Hd7qHduJKymU2bGg8tTDmzJlOamoKfVsHEOjpVO/93NE2GF83B5YvX9Ioltz/++8SrlxJZmT3wYT61j7Ppq+bN4/2G8nV7CyLnslyPUmSmDp1IgCdO3eu83LVkJAQfHx82L59q1gVYCAqlYqt27agtXFA6Va57yh3C0Rrbc/WrZsa1WCoIAiNgyRJFeccg/yqXpiVy+AOvxLUanVF3nFBaApKS0v59NMPSUg4SYlPC4qDOta4bXFAO0r8WnL27Gn+97/3KCmxrIuddbFv3x4WLpyHj7OWe1pXTSPj46JlSOtSrmZf5Ycfvm6UkwwLCvL58advQC4jt1uk7ousFrR21uR2CkNZXs4PP3zd6I67kpIucPVqFs2dy2v1lFtUpJGy/FUYarWaGTOmYCVXNHj1hZ6TrSN3RPUmNy+XpUsXGWSfhiBJEuPHj0WtVjO8WwS21rVP53wrNlYKhneNQK1WM378rxZXs/L8+XPs2rWDNiExdI5qV+/9WCkUPHnHg6jUKos8R9dqtSxduhC5XFd825DatGkDwOLFpl2F0egHMBITE9m+fTshISFERETU+nFTpkxh3LhxPPnkk0yePBlvb2+efvppLl/+b4RQpVLx7LPPkpSUxC+//MLnn3/Orl27ePvtt43xVAwmLy+Pd999g8TEsxT7taI4sEPlDeQKclsORu3gzsKF85g0aUKjPGi43tq1q5g0aTwu9hLP9Srm+u9fuQye6lGCj7OWefPmMG+e5X251MWaNSvJzEinKNrvlstUC1sHIinkzJo9DaWy/KbbNgb6gtVt3SsfCMe6lyNJEps2WXaBrNqYOnUiao2ae1vfiUJ+6wOJu2P6Y2tlw8wZUxrFic6pUydYvGg+Xi723NU+pEH7slLIeaBnFEgSP/30rUXn2czMzGD27Om4Obry1MCH6/z4R/qOwM/dh0WL5pGcnGT4AA3s0KEDxMcfISgoiGbN6p47ViaT0aVLFwCmTJlocQe+jdHevbsoyM+jxLs53LiyS66g1Dua3Nwc9u0zfT5TQRCatp07t3P0aBwxLuWEOlV/sa6tezn+9mo2blzX6AvcCgJAfn4e77//JkePxlHqFUF+9IAqdQsrkcnIj+xHqXc0J08e5913XyM3N8d0ARtIUtJFfvjhS6wV8EzPImxrmPQ7oEU5LZupOHhwPzNmTDFtkA0kSRK//PIDuTk55LcLRu3uWKfHl4V4URLmTULCSebOnWWkKI2jIn3ULepf6Om3O3hwn9FiMpQ1a1aSmppCz/CueDq6G2y//aJ64GznxMKF88jLyzPYfhti27YtHDlyiJZBHrQO9jT4/luHeNHyWs1KS0tpPmuWboX/04MebnBNiDva9iHYO4C1a1eRnp5miPAM5vDhgyQnXyIyMgIHBweD7tvf3x8PDw927NjK1atZBt33zTT6AYwBAwawfft2xo0bR6tWtctdVl5ezuTJk3n66ad58skn6d69O7/++itubm5Mm/bfDP3169eTmJjI77//zoABAxg8eDDffPMN27Zt49ixY8Z6Sg1y+XIyr7/xEmfPnqbEryUFkX2rPVCSrO3Ibj0MlaMnS5cu5LvvvmhUqUn0JEli6dKFjB37I062Wsb0LcTNoeqFLgcbiZf6FuHpqGXGjL+YPv2vRnlBrKiokLlzZ+pqXLSqefWFntbehqIWzbialVWRd7ixKisrY8vmjbjZaIlyrlyYvJ17OTZyibVrVzXqwbi4uMPs2rWDCK9QYv1b1uoxLnbODGrel9y8XP7+27IPgMvKyvjpp2+RgId7R2Ndh8LdNQnzdaVv60BSUq4wY8ZfDQ/SSP78cxxlZWW8MvQpnO3rvurE1tqWN4c9j1qtZtw4y5vJcj2NRsOUKRMrDULUh5+fHyEhIRw7Ft8oTnosnb4PKGlW/bGS/naRg14QBEMqKirkjz/GYi2H+wJrXsUul8GIoEKQJMaO/RGVSlXjtoJg6VJSLvPmmy9z+vQpSnxjyGt+Z9XJA9WRyclrPpBiv1YkJp7ljTfGNIqJK3rZ2Vf538fvUlxcwqNdi6ukjrqeXAaPd9NNMlyw4G9WrfrXhJE2zJIlC9i7dxdlfq4Utahd6qgb5XUOQ+1sxz//zG4UqxP0Dh7cjwxuWcBbz9NWi5ethiNHDqFWW+5qk5KSEubOnYmdtS13tehn0H3bWtlyd4sBlJaWWMT5emFhIZMmjsPGSsGIbpENvohfk5HdI7GxUjB58gQKCwuN0kZdnTp1gn379tA+vA0dI2+e7aI2rBQKnho4yiJXkC5duhD4r2aFIclkMlq3bo1GozFpPZ9GP4Ahl9f9KRw5coSioiLuueeeittsbGwYNGgQO3bsqLhtx44dNG/enPDw/3JF9+zZEzc3N7Zv396wwI1g+/YtvPzyc6SlplAY3Jn8yP43PVDS2jqRHTuSctcAtm/fymuvvcDly8kmjLhhVCoV48b9wqRJE3C1l3htQCEBNzlI8nLS8vodhfg4a5k/fy7ffPN5oxu0mTdvLgUF+RS0Dqyx9sWNClsFoLWz5p95cxp1Ubj161dTXFJMF8/SKstV7RQS7dzLSE1NYf/+xjl7WKlUMn7cr8hlcv6v7dA6HUj0j+qJl6MHS5cu5OLFC0aMsmGmTPmTlJQr9G0dQJivq8H2e3eHUHzdHFi2bDFxcYcNtl9D2bVrO3v27KRDRBsGtetb7/10b9GJfm16cOxYPOvWrTZghIa1desmkpIuEBUVhbt7w2YvderUCZlMxtSpk9BoNLd+gFCtU6dOcPLkcco8wtDYu1W7jdrBgzL3YI4ejePs2dOmDVAQhCZJkiTGjv2J3NxcBvoV4Wl780kmIY5qunmVkpR0sdHNyBYEvYMH9/Pyy89z5cplCoM6kR81AGqxqrqCTE5BZD8KQ7qSlpbKK6++yN69u40XsIHoV5xkZmUyrG0pHYNvPQjpaKubZOhsJzF+/K9s3brZBJE2zIkTx5g6dRJaextye0bdfFXNTUjWVuT0ao4kl/Hdd1+SmZlh4EgNr7i4mBMnjhHkoMLRqvaTqVq4lFNSUmLRKX8XL55PXl4ud0T3xsm2bitqaqNHWCe8nTxZvepf0tJSDb7/upg+fTK5ebnc2T4YD2c7o7Xj7mTH3R1CyMvLY+rUSUZrp7Z06Sx1Ex6fvetRg+23f5seRDYLZfPmDVy6lGSw/TZEcnIShw8frFgpYQzh4eHY29uzZs0Kk2V7afQDGPVx4YLuAt/1AxMAERERpKamVqQhuXDhQpVtZDIZYWFhFfuwBOXl5Ywf/6vugrxKQ26LuykK6VqrzlSysiWn9X0U+bfl0qUkXn75OTZtWm/Rs3tBV6D8gw/eYvXqFQS5a3h7UAF+Lreeee/uIPHWwEKifFTs2LGVt9562ewdSG2lpFxh6bJFaJzsKGpe+5QskrUV+W2CKC0pqVgu19io1WoWL16AjVyiu1f1g059fEqRAQsW/G3x79/qzJ8/lyspl+kT0Z0At7ql3LFWWPNAu/vQaDT8/vvPFnmh98CBvaxcuRx/D0fu6RBq0H1bW8l5pG8LFHIZP/74DQUFBQbdf0MUFRUyYfxYbKxseGfEmAbPcHnt3mdxsnPkr7/+sMiaLyqVilmzpqFQKOjYseY8z7Xl7u5OdHQ0SUkXG8VJraXSzwgqCupw0+2KAztW2l4QBKEhVq36l507txHupKSvT+0mDQ3xL8LHTsPixfPZt2+PUeMTBEPSarX8889s/ve/9yguKye3+Z0UhXar3wVumYyi4M7ktribUqWKzz77kNmzp1vkMT7ojnc//PBtkpMvMaB5WaV6lLfi5aRlTN8i7Kwlfvzxa/bs2WnESBvm6tUsvvzyE7RIZPeKRmt383TOt6LycCS3UxiFhQV88cXHFp/yOT7+CBqNptbpo/T+SyO13xhhNVhubg6LF8/Hxc6ZfpE9jdKGQq5gaKs7UWvUZh2gP3nyOKtXr8Dfw5E+tcjo0VC9Wgbg7+HE2rUrOXnyuNHbu5nDhw9y7Fg8PWO60CakhcH2K5fLee6ux9BqtcycaRmTL1auXA5Ay5a1y+pRH1ZWVjRv3pyCggK2bdtitHYqtWmSVixMQUEBNjY22NraVrrdxcUFSZLIz8/Hzs6OgoICnJ2dqzze1dWV/Pz8BsVgZWWYsaPz5xP56usvSL6UhMrRk9wWd6NxqDrj1SbvCo4p8RQHtEPpFlj5TrmCwojeqFyb4Za4hR9//IZDh/bzxhtv4+RU9fmb29Gj8Xz15Sfk5ObSIVjJo11KsKnmnXw2w4qtZ2zp37ycaN//lis62kq83K+YJUfs2XnuHC+PeYYPPvyEHj16mfBZ1N3UqRPRqNXkdYgARdX3j016Pk6nUylq4Y/Sr/Ls9pJIX5wS01m7dhXDh48kMjLKVGEbxJo1a8jISKeXd2nFbI9zhdbszLSnt08pkc4qfOw0tHYr5/ipExw5coCuXbubOerau3DhPPPmzcHDwY0hraovGHY28wJbE3fRP6oX0T7hVe6P8YuiY1BbDp86yurVyxk58gFjh11rOTk5/Pzzd1gp5DzatwVW1bx/b3QuLY/tJ67Qt3Ugkc3cbrl9oKcTd3cIZfWhi4wb9zOfffaV0ZbD1sXUqRPJyc3hxXseJ9Cr7rUgbuTl4sFLg5/gp6V/8uefv/PFF98YIErDWbVqFRkZ6bRp0wZHR8PMXurQoQPnzp1j9uxpDBw4ECsryzp0MVR/bixxcUc4fPggZe7BqFxu/h5UugVQ7hbI/v17SUg4Tps2DV9aLQjC7enIkcP8+efvOFlJjAotrG19W2wU8FhoPuPPevD9d18wfsJkwsKqHvcIgiE1tC8vKCjgu+++Yv/+vWjsnMmJuQe1k89NH3PT8/NryrwjuerghseptcydO5OEhJN8/PGnuLkZLj9/Q+kHL86dS6RXZDnD25VVO2ZT07k5QKC7hjF9C5mw1Zmvv/6Uzz//xuLOzZVKJV999Sl5ebnkdQpD6eNy0+1vdm5+vZJIX2yyi0hMPMv48WN5770PLeIcpjpHjhwEqq9/ceO5+fXCnVRYySUOHz7ACy+8ZJJY62LevDmUlZUxvMPd2FrVblDqVufm1WkX0IoQjyC2bdvMww8/QnR084aEXWdqtZpxv/+MDPi/HlEo6pjNpq7n5wAKuYwHekYybmU8v/32E1OmzDTLuZxWq2X69MnIZDKeM+DqC71uzTsSG9qS3bt3kpiYQExM7cobGENpaQkbNqzDycmJ4OBgo7YVExPD0aNHWblyGYMHDzFqW3CbDmCYm1wuw72OhZ5uJEkS8+bNY+xvv6FWqSgKaEthaHeQV/+SOiUfwDY/FZlGSU5NB0hekWQ5+eB2ZiNbtmziVMJJvvv2W9q1a9egWA1FkiRmz57N+HHjAC3/16GEPlHKGie1rD1hx7ksK8pUMqJ9K+fcVcjhwU6lhHqqWXAY/ve/D3jqqacYM2aMxV0cA9i3bx+7d++k3NeFssDql4C5HL+MbWYBcpWGqzceJMll5HUMw3vzSSZPnsCUKVMs9sDoRqWlpcyZMwNbhcQA3/+KVG9Kd+BCkQ3lWhmRzroBxTv9ijmRZ8v06X8xaFB/FIqG11gwNpVKxS+/fI9Go+GhDsOxtbKtdrt1CVs4d/Ui5WpljQdJ97cdwpnMc0ydOplBgwYYvcOqDUmS+OyzD8nLy2N4twj8avndtyHuEufT8ylXaWp9gNSvdSCnr+SwY8c2duzYxPDhw+sfuAHs37+fNWtWER0QzoO9hhlsv0M7D2JT/E527tzOoUN7GDRokMH23RBKpZL58//G2tqatm0Nd+Hb0dGRmJgYTpw4wZ492xg2zHB/y4YyRH9uTBqNhkmTxgPojhFqoTC0O7bxi5g0aQJz5sxpFN+jglAfhw4d4sqVK2bvK5qiCxcu8MXnHyPTang8Mg9X67rVJ/Oz1/BwSD5zLsLHH7/LrFmz8fG5+cVgQaivhvblJ0+e5O133iEjPZ0y9xDymg9Csr51WpbanJ8DqB29yGr/IG5nN3H48EFefPEZfvrpJ2JjY+sds6EUFRXx0UfvcubMaXqEl/NAx9J6nZsDhHpqeKlvIRO3O/PFF//jl19+pXfv3kZ+BrUjSRJffvkzCQknKQ73pjja75aPuem5+Q3yOoVhnVfM+vVraNu2NaNGjTJU6AYjSRJHDh/AwUoi0KFqLYvqzs31rOUQ4ajizLlEtNoyPD0NXzS6vq5cucKqVf/i4+xF15Cbr1S+Xm3OzW8kk8m4r/WdjN8xjZkzpzBx4sT6hl0vs2bN4mLSRXq0aEbILQbgqlOf83OAYG8XesT4szshidWrl/Hkk0/Wue2GWrduHefOJXJ3h/6E+4UYfP8ymYwX73mcMRM/YMaMKfz1119mu962det6SktL6NixY71KLtSFo6MjwcHBnDlzmoyMy7RoYbiVLdWxvCu1JuDi4oJSqaS8vLzSKoyCggJkMhmurq4V2xUVVe1c8/Pzadas/jNptVqJgoKSW29Yg7y8XH788Tv27duD1saB3NZ3o3S/+YdQrlFV+r8mGjsXsmNH4HT5MCQf4JlnnuGJJ57mkUdGm/UiRlFRET/88A27d+/EzUHi6R5FhHndfAltubry/9XpEqYi0L2AabudmDFjBnFxR/nf/z43Wp64+tBo1Pzww48gg7yOYTUuQ5apNZX+v5HSz5XSIA8OHz7MihVr6NOnn7FCNqi//ppIdnY2dzYrwcn6v9RQ5RpZpf8BfO01dPIs5WBiInPm/MOwYSNNHm9dzZ49g4SEBLqHdiLGt+aVMWXq8kr/V8fJ1pEH2t3HjP3z+PjjTxg7drzZLz4uX76EnTt30iLQnV4xtS9yV67SVPq/NuRyGY/0bcEvyw/zww8/EBHRgsDAoDrHbAhlZWV88cWXKORy3r//Faxq8TocOX+chTv/5cHew+gQ0abG7WQyGe/dP4Ynf3ud7777nubNW+PsXPeDUENbtepfMjMziY2Nxc7u1ifuqampHD9+nDZt2uDvf/P3RmxsLAkJCfz11xR69mzY4KSLiz2KWqwCqo2G9ufGtmTJQhITEynxa4naybtWj1E5+1Li04KEhIRG8z0qCPXx3HPPAdCtW58qq7KF+ktJucLrr4+hsKiIUSEFhDrVr2hrGzclg/2LWJMKzz33PGPHTmhwXSVBZ9euHcTFHan43cHBnhEjHrCo859bsZS+fNWqfxk3bixqtYbCkG4UBXWsdcqo2p6fgy7tc27MYBxT4iBpL08//QxjxrzK8OEjzXaRrLS0hPfee4uTJ0/QLaychzpXrVN4vdqcm0d4a3ixTyETdzjz9ttv8/XXP9C5cxfDBl4P//67jOXLl6P0dCKvS0StXuNbnZtXopCT3bsFvuuO8fPPP+PnF0i7drW/mG4KKSlXSElNJdatvNrXubpz8+tFuSg5U2jDli07GDjwTmOGWie//z4BtVrNkJaDUNShVk1tzs2rE+UdToxvFPv27WPr1p0me50zMzOYOHEiTvY2DO4YVq991Of8XO+eDqEcS7rKpEmT6NatN76+tx4ENBSVSsX48ROwVljx9CDjDQ62DmlBr5Zd2HXoABs2bKFLl25Ga+tmFi1ajEwmIzo62iTttWjRgkuXLjFv3gLeeOOdOj++Lv35bTmAoa9rcfHixUojRBcuXMDf37/iwkt4eDhnz56t9FhJkrh48SI9ezYsN55aXbeZSHrnzp3l088+4mpWJmXuIeRH34HWxqFBsVQhk1MU3Jly10Dcz2xgxoypnDx5gg8//BRHRyfDtlULqakpfPrp+yQnJ9PCV8Xj3UtwtjNcjQN/Ny3v3lnAPwcciIs/wksvPcNXX/1IeHiEwdpoiNWrV5GUdJHiSF/UDZzpm98+FPuUXCZN+oPOnbtjbV27QuDmculSEosWzcfDVkNfn9qdWNzTrJgTeXZMnTKJ7t174+FhOTM8bnT27BnmzJmJu4Mbw2PvMcg+2we25mhKLEdOHGPBgvk8+KD5ZvAkJycxadIfONlZ83Dv5iY5wXJztOX/ekQxe2sC33zzJWPH/mGWVVUzZ04jLS2Vx/rdT5R/7WblzNw0n/iLJykpL73pAAZAgGcznh44iolrZzFp0p+8+eZ7hgi73rRaLQsWzEehUNCmzc1j1zty5Ajp6emoVKpbDmA4ODgQFRXF6dOn2blzJ7169TFE2AZR3/7c2NLT05g67S+01vYU1HL1hV5hWA/sc5P4669JdO7cHR8fXyNFKQjmV1ZWjkJh2cdDjUVaWirvvvMaOTk5DA8spL1Hw/K59/UppUQtZ1vyJd5553V+/PE3XF3dDBPsbWrfvj189tnHVerFHTlyhB9//O22Hcyra1+uUqmYOHEcq1b9i9bantzWQ1C6G3nSjExGcWAHVE6+uJ9Zz/jxYzl79gyvvvoWNjYNq8VQV0plOR9//D4nT56gS6iSUV1uPnhRF5E+Gl7oXcSkHU588sn7fP/9WFq3Nt9qk5MnjzN+wm9o7azJ7tO82lTOhqB1sCG7d3O8N53g8y8+4c8/plrU8dfBg7r0UVHOtx5wq06Us74OxgH69RtosLga4tKlJDZv3kCgmz/tAkyX8mdIq0EkZCQybdoUfv11gknOkSdOnEB5eTkj+zTH3tb058b2tlbc2yWMf7afYeLEP/jf/74wWdurVq0kNTWFB3rei5+7cVdzPnfXY+xJOMSUKZNo166T0VdA3Cg5OYnTpxMIDg42WDrnWwkICMDR0ZEtWzbz/POvGLU/suzEzUbSoUMHnJycWLt2bcVtKpWKDRs20KfPfxdF+vTpw+nTp0lKSqq4be/eveTl5dG3b19ThgzAjh1beeONl7malUlBaHdyWw01/ODFdVSuzcjq8DBlHiEcOLCPV155gZSUK0ZrrzonTx7ntVefJzk5mTtalPFS32KDDl7o2VnDUz1KGNa2lKtZWbzxxoscOLDX4O3UVWlpCbNmTUOyVlAQ2/CDYo2zHYXRfqSnp7FixTIDRGg8Go2an376Fo1Gw/CAIqxr+W3lZC1xj38RxSUljBv3q8UW9C4vL+eHH75Cq9HyWKf7sa/FUvPaeqD9vbjYOTNz5lQuXDhvsP3WhUql4vvvv0apVPJgr2ic7U13YtU2zJtOkb6cOZPA/PlzTdau3sWL51myZCEBnn48cceDtX5cibK00v+38kCv+4hsFsbatavMXhTt4MH9pKRcJjIyEnt7+1o9RqVSVfr/VvQDI0uXLqxfkLcRjUbDTz99S3lZGfnhvZGsa/ea6GltHMgP60VpaQk///w9Wq1lDtIIgiFoNOL9bQhJSRd5880xZGZlMsS/iB7eZQ3ep0wG9/gX09O7hIsXL/D2W6+QlZVpgGhvT3v27OSrrz7BWm7FU11H8eGg1/lw0Gu0btaChISTfPLJBxQXV80+IFSmr/mwatW/qJy8yWr/oPEHL66jdAsgq92DKJ19Wb9+De+99wYFBQ2rz1kXGo2G77//mqNH42gfpKtHaajBC71oXzXP9SpCo1bx6Sfvc/Giec5ncnKydUW7Ja2uaLeDcQf4lN7O5HYKoyA/ny+//ASlsm7Fso0pPl63aks/EFFXfnYaHK20HI0/YjHn53PmzECSJIa2GmjSlUzB7gG09W/FyZPHOXz4oNHbO3o0ju3btxLq40LHCPOlY+wQ7kOYrws7dmwlLu6wSdosKyvj77kzcbC1Z3T//zN6e2G+wdzVoR/nz59j+/atRm/vRps2bQAgKqruNW9TU1NZv349qampdXqcXC4nMjKSoqJC9u/fU+d269SWUfduAqWlpaxbt45169aRkpJCUVFRxe85OTkAPPHEE5VyhNva2vLCCy8wffp0Zs2axd69e3n77bfJy8vjmWeeqdjurrvuIioqildffZWtW7eyZs0aPvroI/r162fynJObN2/gm2++oFwLOa3upbgOy1MbQrKyJbflEIqCOpKScpm3336VlJTLRm8X4NixeD788C2Kiwt5tEsJw9uVYcwBTJkMBsaU82yvIrTqcj7/7CP27NlpvAZrYdmyxeTl5VIY44/WQBeAC1sHIdlYMW/eHEpKLDf1yYIF/3D27Gk6eZTSwrVuB0pdPMuIdFKyZ89ONm/eYKQIG2bq1ElcvpxM/6ieRHkbtjilo40Dj3a6H7VaxQ/ff4VS2bAZkPXxzz+zOXfuLN2i/WgVbPpVMCO6ReDuZMfff8/i7NnTJmtXkiTGj/sVjUbDm8NewNbaeCc6VgoF74x4CZlMxrhxv6DR1C9NhyGsXbsKgJYtWxqtDVdXVwIDAzlx4hiXLycbrZ2mYMGCvzl+/CilXpGUedf9ABag1Kc5ZZ7hxMcfZvHiBQaOUBAshzm/O5uKhISTvP3WKxUrL/r61m4gvjZkMrgvoJj+viUkX07mzTdfFn1AHSmV5UydOpHPP/8YuSTn+R6jaR/YmmYuPjRz8eXpbqNoG9CK+PjDvPzycyQknDR3yBYrJyebd955jWPH4in1iuRq7Ei0ts4mj0Nr60R27AhKfJpz6tQJ3nrrVa5ezTJJ29On/8WuXduJ9lUxuluJ0c7PY5qpeaxrMUXFxXzyv/fJzc01TkM10Gg0fPfdl+Tm5pDXPgSl783rWBhKSZQfxRE+nD17milTTFsjoSaSJHH06BHcbTR42NZv0F8mgwgnJZlZmaSl1e0CqTEkJV1k585thHgEEeNrmlQ717un5R3Af4MoxqLVapk8aQIydOfH5qyDKpPJGNEtEhkwefIENJq6p6KqqxUrlpKTm8ODve7Dzalun+Ej54/zwcyvOXK+bhMFnxr4MFYKK2bPnmbSY0xJkti2bTM2Njb1qoV65MgRLl++zJEjR2698Q0iIyMB2LZtS50fWxeNfgAjOzub119/nddff50DBw6QlpZW8XtiYiKg+9De+OF47rnneOWVV5g+fTrPP/886enpTJs2jaCg/2ZPWFtbM3XqVEJDQ3nrrbf47LPP6NGjB7/88otJn+OuXTv48cdv0SqsudpmOOUehi86c1MyOYWh3cmP6HPtoO11MjMzjNrk6dOn+Pjjd1Ery3m2ZxHdwk03+yA2UM3LfQtRyDR89dWnHDy432RtX6+wsJCFi+ahtbOmqEXtawfcimRrRUFLfwoK8lm6dJHB9mtIp06dYPbs6bjZaLk3oLjOj5fL4IGQQuwUEuPH/2rylUO3cujQAf79dwn+rr4MaWWcJbQxvlH0iejOxaQLzJw51Sht1CQx8Qzz5s3Bw9mOe7sadnCmtuxsrBjVOxrttZnopprBtG3bZk6cPE6/Nj3oEt3e6O21DI7m3i53cvHiBVavXmn09qqTl5fH/v178PLyMnpRvubNmwOwYcMao7bTmB07Fs+sWdPR2DmTH9mv/pMdZDLyovqjtXVi+vTJnDhxzKBxCoKlMMUJdFO2Y8c23n3nNYqLC3k4pMAgKy9upF+JcY9/EZmZGbz++oscOxZv8HaaGkmS2L17J88//yQLF87Dx8mLN/o9T7RP5TS5VnIrnur6MHe16EdaaipvvDGGsWN/Ijv7qpkit0y5ubm8/fZrXLhwnmL/WPJa3AXmTD8ntyI/eiBFAe1JTk7izTdfMfprtnXrJhYtmoefi4ZnexVjbeRSe51CVNwbW0pmViZff/0parXpLgbOmzeHo0fjKA3yoLh5/euf1kdepzBUbg78++8Sdu3aYdK2q5OcfIn8/HzCneqXPkov4trjjx8/aoiwGmTevDlIksQ9Mf3NclHf39WXtgGtSEg4WbG6xRi2bNnIufOJdIryJdDL9IOtNwrwdKJzlC8XLpw3+kTT4uJiFiz4B1cHZx7qPazOj5+5aT57Th9i5qb5dXqcn7sPw7reRUrKFTZsWFfndusrMfEs6elphISE1KteZF2zI1zP3d0dNzc39u/fS2mp4Sax3KjRD2AEBgZy5syZav917doVgDlz5rBlS+WRIJlMxgsvvMD27ds5fvw4CxcupH37qhebfH19GT9+PHFxcRw8eJBvv/0WJyfT1YFIT0/jp5+/RSu34mqb4bUuwmkMJf6xFIT3Ijv7Kj/++I3RTvhycrL58ov/oVKW80yvIloHmH5mXLi3hjH9CpGj4btvPzfLBfB//11KSXExhS0DkAx8dFjcvBlaO2uWLF1gcaswCgoK+PbbL5C0WkaF5GNvVb8ZCe42WkYGFVJaWsq3335ullUI1SkoKODnn7/DSq5gdOcHsTbiic99re/E19mbxYsXGPXA6HpqtZpff/0BrVbLQ72isbM2X6mliGZu9Gzpz6VLSSZJJVVeXs7UqZOwsbJhzOAnjd6e3rODHsHJzpHZs6dRVFRosnb19uzZiUajqZh5YUzBwcHY2NiwY8c2i1l+bkkyMzP48qtPkYDc5nchNTA1nWRtT07zu9BK8OVXn5psdqcgmFJ9TtQE3cXxefPm8vXXnyLXKnk6PI8ODax5cSv9fUt5OKSA0uIiPnj/TTZsWHvrB92GNBoNu3bt4NVXn+eLLz4mPS2NAVG9eO+Olwlwrb5wqlwmZ0irQbze7zmaOfuwdu1KnnxiFBMnjjf6xLXGoLS0lE8+eZ+UlMsUBXWkILy3SbIh3JJMRmF4TwqDu5CRkcbH/3uP4uK6T/6qjfT0NH4b+yP21vBcr2LsTTR2MyimnA7BSo4fP8r8+X+bpM2EhFPMnTsTjaMtud0iTf9aWynI6d0cSSFn7NgfzT6YqB9wCHdq2IQw/QCIuQeg09JS2b5tC4Fu/mZZfaF3Z4t+gG7ltDGoVCpmzpyKtZWcuzuEGqWN+ri7QyjWVnJmzZpm1EmGy5YtprCwgFF9R+BoV/fU+3VN73y9x/r/H7bWNvzzz2yTHWfu3q0b7AwNDTVJezcKCwtDqSw3alq0Rj+A0dSNHfsjpSUl5Ef2NevghV6xf1tKvSI5dizeKDUUJEnip5++42r2VYa1LaW1v/mW9Yd7aRjVWbds9ZtvPjPpDL2ysjKWLV+E1taa4ijDF++SrBQUNm9GcVERa9asMPj+60ur1fLDD1+RmZnBnc2KCXNq2Ovfzr2crp6lJCae5c8/xxkoyoYZP/5XcnKyGdJyUI0nkYZiY2XD6M4PIJfJ+fmn70yS13jp0oWcP3+O7s2bEdnMzejt3crgjmG4O9kxb94ckpOTjNrWypXLyMrK5KHew4xeIOx6bk6uPD7gAQoKCli0qG4zRAxBn2rPFAdLCoWCoKAg0tJSSUq6YPT2GpPS0hI+++wjCvLzyIvog8rFMN8vKtdm5If3Ii83h88+/4iyMsPPrhYEcxIDGHWnnxwyY8ZfuNtoGROVS7SLaf6OHTzKeT4yDxuZmp9//o4///zdpLOyLVl+fh6LFs3j6acf5csv/0fi2bN0CIzlo0GvMzz2Hmysbp2ONtwzhHfveJlRHUbgaOXAsmWLePzxh/j668+It6Dc9aY2fvyvnD17mhK/lhSGdLOMwYvrFAV3prhZGy6cP8dvv/1o8P1LksSvv/5AaVkZD3QsxsfFdLWDZDJ4uHMJ7g5a/v57JufPnzNqe0plOT/++DVaSUtOjygkG/NMxlK72JPXIZTCwgJ+++1ns3729KtwQx0b9l3rY6fBwUoye+2+JUsWoJW0DGzex6wplYLc/GnhE8mRI4c4d+6swfe/fv0aMjMz6NnCHzdH49ZvqQtXR1t6xviTlZXJunWrjdJGcXERS5cuwN3JlRHdBxuljZvxdHZnWNe7ychIZ9Om9SZp88CBvSgUCgICAkzS3o30aasOHtxntDbEAIYFO3Mmgbi4w5S5h1Dq09zc4ejIZORH9kNS2LBo0TyDnzDs27ebw4cP0LKZiv7NzT9jvnOoiq5h5Zw7l8j69aZLWbJly0YKCwooivZFsjLO2tziaD8kawXLly+xmPQJc+fO5ODB/cS4lNPf1zArQ+4LLCLAQcWaNSsr8vSby/btW9i+fQsRXqH0j+5pkjaD3QO4O6Y/mVkZTJo0wahtZWZmMHfuTJztbRjSOcyobdWWrbWC+7tHotFomDDhd6Md/JeUlDB//lyc7B15uE/dl6g21Ijug/F28WTZskUmzRGsVqs5diwed3d3k61O1Kd6NFXxt8ZAn6f5/PlEipu1prRZa4Puv6RZG0r8WpJ49gw//PCVxfQZgmAI4uJ33aSmpvDGGy+xfftWwp2UvBqdg5+9ab8TwpxUvBadQzN7NcuXL+GDD94iNzfHpDFYCrVazf79e/n6688YNWokU6ZMJDszi55hXfj4zjd4sutD+Dh71WmfCrmC7mGd+OSuNxnd+QH8XfzYsWMr7733Bk899Qh//z2L9PQ0Iz0jy7N79042bVqP0tm3YakZjUkmoyCiN+Uu/mzfvpVt2zYbdPe7d+8kPv4IbQJUdAox/aCvvTU82qUEjUbD5MkTjHoxf/78v0lJuUJhC3+UPi5Ga6c2SqJ8KfNzZf/+Pezatd1scZw8eRxHKy1etg37rpfJIMRBSWpqitm+s4uKClm/fi2eju609Tde7b7auiO6N6BbLWBIarWaefPmYGOloH+bQIPu2xD6twnC1lrB/HlzjDKRZMWK5RQVFfFw7+HY2zRsRXp9PdJ3JDZWNsyfP9fotTCys69y/vw5mjVrhpWVeQZdvby8sLe358CBfUb7jhYDGBZs9WrdzPjiQOPnUa8LydqOYr8Yrl7N4sCBvYbbryQxa9Y05DK4v32pxRwb3te2DDtrmDNnukmK8EiSxIoVS0EuozjKeDP0JRsrikO9yMzM4MAB442S1tauXduZO3cmnrYaHgopRG6g199aDo+HFeBgpauHcerUCcPsuI5yc3MYP+5XbK1seLTj/chlpvv6HdS8L8HuAaxfv8agn9kbTZs2mbKyMu7tHIa9mWYrVScmyINWwZ7Exx+uWFppaGvXrqKgoICHew/H2d50aQb1bK1tGD3g/ygrK9N9f5hIYuJZysrKaNbMdLmB9W0dO2b+/LmWQJJ032379u2hzD2Ygog+hm9EJiM/oi/lbkHs3r2TiRPH3bazcIWmR6UyXZ21xm7Pnp28POYZLl68QE/vEp6LzMfJ2jzfBR62Wl6OyiXWrYxjx+IZ89IzZp/VayparZbjx48yfvyvPPzwCD755H127NiKj6MX97cdypeD3+ehDsPqPHBxI4VcQefgdrw7YAxv9nuBbqEduZqZxaxZ03j88Yd4882XWbFimcmLK5uSRqNhypQ/Qa4gL3ogmPD4vc5kcvKj70BSWDNlyiSDDc5qNBqmT5+MQg4j2pnvHL25n5o2ASri448YLUVJWloq8+bPReNoS2Fs0K0fYGwyGXldIpAUcv78c5xZVsHm5uaQkZFOiKPKIK99yLVVHKdPn2r4zuph/fq1lJeX0Tu8Gwq5kYu41EK0TwR+Lj5s3brZoN+l27ZtISsrk27N/XCyv/XqO1NzsrOmW/NmXM2+avAB17KyMpYuWYCLgzPDut1t0H3XhV4TGIsAAQAASURBVIezG/d2GURaWipbtxq3uLX+vNhcqy9AV6bB39+f7OyrpKamGKUNC+6BhaNH49Ba26F0Nd+bsCZlnrpc54YswHTmTAIXLpynbaDSpMtSb8XFTqJraDnZ2dkcOGD8gt4XLpzjwoXzlAR6oDVyZ6MfINm40XTFhapz4cJ5fvzha2wVEk+E5eNQz7oXNXG30fJYaD5ajZovPv/YLLl8//jjdwoKC7iv9V14OXmYtG2FXMGjnf4PK7mC38b+ZJTcuImJZ9i6dRPB3s50iDBd+qTauq9LOAq5jOnT/jL4QKRGo2bp0oXY29oxots9Bt13XdzTcQDuTq6s+HepUYtnXU+/3Nnb23QpDh0dHXF0dDTKUuvGaPbs6axZsxKVkzd5Le423sUVuYLcmLtROXqxYsUy/v57tnHaEQQTEyswbk2jUTNt2iQ+//xjVGUljAopYFhgMQozTzayUcCjoYUMDSgiNzebd955jSVLFjbJAVatVsvJk8eZOHEcjz36f7z99qusXLkclFr6RfbkvTte5v07XqFvZHccbOwN2rZMJiPMM5hHOo7kmyEf8Fin/6O5TySnTp1gwoSxjHp4BO+//yarV68gLy/PoG2b2549O0lNTaHYNwaNg7u5w7kljb0rxX4tycrKYMeOrQbZ58GD+7ly5TLdwsrxdjbvOfrQNrrj26VLFxpl/zNnTkWjVpPXPsRoWRDqSuNsR2GM7qLgv/8uMXn7+oGGYAfD9JVBjqpr+00wyP7qQpIkVq/6F2uFNd1CO5q8/erIZDJ6h3dDrVaxcaNh6jpJksTSpQuQy2T0aWV51xL1erf0Ry6XsXjxAoP22xs2rCW/IJ+R3QfjYGvY/rCuHu4zHIVcweJF84x6bHLsWByASScVVkff/tGjcUbZvxjAsFDFxcWkpaWidPK1yGWqKmcfQMa5c4kG2+fu3bo86l3DLG8mXNdwXUzGmr19vc2bNwBQGmb8C4Jqd0eU7g7s27fbLMV/QTer49NP3qe8vJyHQwqMloYg0lnFfQGF5Obl8vlnH5nsAi/oTn527NhKhFcoPcO7mKzd6zVz8eGumP5czb7K9OmTDb7/GTOmAjC0U5hZc4nWxMvFnu4tmnEl5TIbNhh2wO7AgX1kZWUyuONAnB1Mv/pCz9baluHd7qGwqJCdO7eZpM2LF3V1KDw9PU3Snp67uzuZmRkmqetiyRYtmsfff89Cbe9GTqt7kWqR37whJCtbclrfi8bOldmzpxntAoIgGNv1adCMWUCyKbh6NYt3332DBQv+wdtWwyvRObQ3crHuupDJoI9PKS9E5uIoVzF58gS+/PJ/ZjuuNSRJkjh16gQTJ47nscce4M03X2bZssWUFpbQI7QTr/R+mi8Hv8fItoMJdPM3yfGXrZUtXULa83Lvp/hq8Pv8X9uhhHoEERd3mN9//5mHHx7O+++/xZo1K8nPzzN6PMa2Y8c2AEr8Y80bSB2U+LcF/ou9oVatWg5Anyjzf+793bRE+ag4dOgAKSlXDLrv5OQktm7dhNLTibJg0x7X3kpRS3+0ttbMX/A3paWGSbNcW2fOnAYgyMEwaX6Crg2EnDlj+gGMkyePcyXlMu0DWht8oLchOgW3xVphzbq1qw1ykfvs2dOcO5dImxBP3J3Mkz6pNtyd7IgN8eLixfMGG9DSaDQsXbIQGysbRpqh9sWNfN28GRDbiwsXz3PkyCGjtXP69CmsrKzw8DDtRNkb+fr6VsRjDGIAw0LpcwJqbR3NHEkN5Aq01vbk5GQbbJfHjsWhkEOUj+XNhAtw0+BkKxltJFFPkiR27tqBZGNFmb+bUdvSKw3xQq1WmyWNlFKp5Isv/kdmViZ3+xfRytW4FxF6eJfR3auUc+cT+emnb9BqjT+LqLS0lAkTfsNKbsXDHYabNHXUje6I7o2/qy8rVy4nIcFwncq5c2c5dGg/Uc3ciLCAwt01uSM2GCuFnIUL/zFoDn99bZV7uwwy2D7ra3CnO5DL5KwzUb2X9PRUAFxcTJsj2NXV9Vr76SZt15KsWLGUKVMmorF1Jrv1MLQ2DiZpV2vjSHabYWhtnZg0aQKrVv1rknYFwZCuX4knarrU7PDhg7z00tOcOHGMdu5lvNo812ATTc4VWjPjvAvnCq0Nsr8wJzVvNM8hylnJ7t07GfPSM5w9e9og+zYlSZI4f/4cU6dOZPToB3njjTEsW7aIkoJiuod24qVeT/L1kA94uOMIon0i6n1ceTbzApN3z+Zs5oV6x+pi50yfyO680e95vrjnPUbGDiHEPZC4uEP89ttPPPTQcD766B02blxHSYlpL7oagiRJxMcfQWPrjNre8ldf6GnsXFDbuxF/9EiDz3UKCgo4fPggIR5q/N0sI0NC92sTCw01QKO3dOkiAApbB1rcBFLJ2oqi5n4UFxWZPHNCYuIZAAIMtALDTiHhbasmMfGMyVfLbdigW+FgKasv9Oyt7Wgf0JorKZdJSDjZ4P2tWaM7D+zW3Lyz8WujW3NdRpC1a1caZH8HD+4nNS2Fuzv2x83J1SD7bKiHeuvqYy5fbpwVVOXl5SQlXcTT0xO53LyX+F1dXbGysqoY+DQ0MYBhofSzSrVWtmaOpGZaK1uDpaLRarVcOH+OADc1FpQ6v4JcBiGeajIy0o064zc5+RIZ6WmUNnMDE335lAXqRmn37dtjkvb0JEli3LhfOHXqBB3cy+jnY5oVEfcFFhHppGTXrh3MnTvT6O39889srl7NYmDzPvg6my7NTnWs5FY82F7XgU6YMNZgF20WLZoPwIC2FpAr9iZcHGzoHOVLSsoV9u7dZZB9FhUVcujQAVoERhLuF2KQfTaEr5s3HSNjOXHyOFlZmUZvLysrCzs7O5MXC3N0dLzWvvGfoyVatepfJkz47b/BBDtnk7avsXPh6rVBk3HjfqkYxBOExkKt1lz3s+VNnDE3jUbDrFnT+OijdyguzGdEUCGjQgqxUxjuYtOmdAcSCmzZlG64wVcna4lnIvIZ5FdMRkY6b7wxhhUrljaKlFL5+XksXryAF194ipdeepqFC+dRmJtPt9COvNTzSb4Z8gGjOo4gxjfKIHnb1yVs4WT6GdYlGCYvt7uDK/2ievBmvxf44p73GBE7mGC3AA4dOsBPP33LQw8O4/vvvyI+vuEX1U2luLiI/Pw8VI5eFndB+1ZUjl6UFBc3eBXMgQP70Gg0tAsyfeHumrT2V2El161wN5SSkhI2bdqA2tmOsgDLHKwqjvJDUshZsWK5yb7TJEkiMfEMnrYag6Z4DnBQU1hYSEaG6SYiKZVKdu3cjoeDGxFeoSZrt7Y6BbcDaHA9CLVazc6dW3FztCXSRBNiGyKimRvuTnbs2rndIMW89bUg7+8xpMH7MpTogHBiQ2M4cGAvaWmpBt9/cnISGo0GL6+G1b0yBLlcjqenJ8nJSUY5vhYDGBaq4sDOgguFSTKZwS6AZmZmUK5U4mvmvJo34+eie67JyclGayM+/jAA5SbsbNQu9mgcbIk/esSkJ3hLlixgw4a1BDuouD+40GTnBQoZPBZWgJethrlzZ7J9u/EKKqWlpbJk8QI8Hd0Z2NwIhXXrIdwzhK4hHUhMPFMxC6UhCgry2blzG37ujkRZ8OoLPX0eUP3MlIbav38varWavq17GGR/htCvjS6WXbuMn/KuoCAPOzvTL03Wt1lQkG/yts1txYpljBv3C1obB662GY7G3s0scWgc3MluPRytjQNjx/4oBjGERuX641exAqOy3NxcPvzwbf7+exYeNmpejsqlu1eZwY/TyjWySv8bilwGg5qV8GxkHnYyFRMm/Ma3335h8rQrtXXu3Fl+/PEbRo26n7/++oPLyZdoF9Ca57o/xtdDPuSRjiOJ8TPMoMX1ytTllf43JHcHV/pH9eSt/i/y2d1vM7TVIFxtndmyZSPvvfcGzz4zmuXLl5g0nWt96Avqaky0wtGQ9KsyG1oU+MgRXbHsVv6WM4BhbwNhXioSz56msNAwqeL27t2FUllOSZi3xQ5Wae2sKQ1wJzk5iaSk+q+cqoucnGzy8vLwtzfshciAa/szZDryWzly5BBFxUW0D2xjkemOo7zDcLJ1ZPv2rQ0a5I2LO0xRURGxoV7ILfB53kgukxEb6kVRcRFxcQ1LsZSWlsqhQwdoH96aMN9gA0VoGCO6D0aSJKOcL126dAnQpVi2BO7u7mg0GlJTDZvmD8QAhmAh9EWVPZ0sdwDDw1EXW1aW8QpAHz9+DIByHxOmY5HJKPdxIS831+C5RGty+PBBpk6ZiKu1lifC87E28TeRg5XEk+H52Ckkfv75O86fP2eUdqZPn4xao+a+1ndjozBMigRDGNpqEDZWNsyaNa3BJ49btmxCrVbTNdrPIg8Gb+Tj6kC4rwuHDx8wSDH3Q4cOANAzpnOD92UoPa7Foj/pNKbi4mJsbIxbd6E6+jaNUZDekv377xImTBh7bfBihNkLiqodPSrSV40d+6NIJyU0Glqtptqfb3enTp1gzJiniY8/QmvXcl5rnmuwtCGmFuWs4vXmOYQ5Ktm+fQuvvvI8ycmXzB1WhYsXz/O//73HmDHPsmnTerwd3Pm/tkP5asgHPN1tFG38Y7BWWOCy9DrydPTgzhb9+HjQG7zZ7wW6hnQgIz2NP//8ndGPPcDixfMttg5NxXFtIzi+vZGELuaGhn70aBzOdhJ+LpZ1jh7tq0YrSZw4cdQg+9uzR7cyuzTE/DOYb0Yfn752qLGdP68bYDD0AIb/tX5Fv39T0K++bxfQymRt1oVCriC2WQy5uTkNSr9z4MBeANpY+Hv5em1CdDVnGprSfP36NQAMbWBa5/ziAqZt+IdLmbprY1cLcsgvLmjQPnu36oargzMb1q8x+MqEy5d1xzZubm4G3W996eMwxjGXGMCwUBUHTJa+5NlAB3TZ2bpaGq72lnVwdD1Xe91rcfVqltHaOHP2NFo7azSOpk0dpvTSFR42Ra7g9PQ0vv3mc+QyicfD8nG2Ns973MdOw8MhBZSXl/PF5x8ZbAaP3rlzZ9m+fSuhHsEWd6Dkau/CgKhe5ORkVyyzrK9du7Yjk0H7cPOmx6qLDhG+SJJUcbJSX/rcyB7O7oT4BBoouobzdHYn1CeIY8fiK+V5NwaVSoVCYdhZobWhT1lliKXGjcXixQv444/f0do4WsTghZ7a0bNiJca4cb8YLb+rIBiSVvvfsUdjSC9kCqtW/cs7b79Kbk42Q/yLGB1WgL0BU0aZg6u1luej8unjU0Ly5WRefeU5k134q4lGo2bmzKm89NIzHDiwjyjvcF7u9RQfDHyNPpHdcTTybP/i8hJWn9xERqEuBWN+aQHF5cZfnSKTyQjzDObRTvfz5T3vM7jlHajLVfz115+MeekZk17IrC39ZAmZpvEda8i0uuO/hkwyycrKJCsrk3AvlcWN4UR46QaeT5483uB9SZLE0WPxaBxtUbtYTmHn6pT76XL6HzsWb5L2zp8/Dxh+AKOZnW5/Fy6cN+h+ayJJEvv378XFzpkg9wCTtFkfrf1jANi3b3e99xEXdxhbawUhPqZNL9sQwd4u2NlYERd3uN770Gq1bNq0Hic7R/q06lbv/ZSUl/Lq5I+ZtWUh5Srd4HpOYR6vTv6YkvL6T/y0sbJmYLu+5OTmGLyYd3p6GgDOzvV7zcvKyjh8+DB5eXmALqVeWVlZvePRx2GMWpViAMNCVZxLWdrRgpHk5emKljvbWe6JkoudbnBF/8E2tKKiQjLS01B6OJr8dVd56PLJG3sZp0ql4ptvPqewqJARgQUEOZp3Vl9LVyWD/IpJz0jn55+/M+hFjLlzZwEwtNVAi1yZ0D+qJw429ixaNL/eaRUKCgo4ceIYoT4uONubfhZ+fbUK1tV92bu3/geHoDuxy86+StvQGIt7jWPDWlJaWlqxpNQYtFotkiSZ5bnr2zT2AI2lmDdvLn/99QdaWyeuxlrO4IWe2tGDq21GoLVx5M8/f2fRonnmDkkQhFpSq9WMG/cr48b9gq1MzXMRefT1LW0ypyAKGQwNKGZ0WD4aZRlffPExf/89yywDV1qtlu+++4p//pmNh70bL/V6klf7PENz30iT9KVlqnJ+3z6F9ae3orrWfxaWF/H79imUqQyfSqomjrYO3B0zgE/vepu+Ed1JvnyJN954mRMnjpkshtpwd9cdLyqUlpl+7GYUSt0KVQ8Pz3rvQ19MOMzL8laphXiqkcsgIeFUg/eVmppCQX4e5d4mzIBQT5KNFUp3BxISTpqklsyFC7osBc0MPIDhZC3hYq2t2L+xJSVdICcnmxa+kcgtOEV7tHc4VnJFvS9w5+fnkZx8iXBfVxQGrKdaXKZi3ZEkMvJ034X5JeUUlxluYFchlxHu68Lly8n1Tnt36tQJMjMz6Nu6O7bW9Z8MPGvzApIyL1e5PSnzMrM2L6j3fgHubN8XgK1bNzVoPzfKyEhHLpfj4FD3CRBKpZJVq1YRFxdXkVK1tLSUVatW1Xt1pJOTU0Vchma5n97bnCTpOiT98k9LJRmo49R/UekHCSyRfnAlNzfHKPu/fFn3RalyNX2eVZWbw7UYjLu0fsaMvzhzJoFOHqV09jTdidLN3OFXQpSzkr17d7F8+WKD7DM5OYk9e3YS7hlClHe4QfZpaPbWdvSP6klBQX69czGePHkMrVZLiwAPA0dnXC4Otvh7OHLq5PEGLeE8d+4sANEBkYYKzWCaB0QApllVZV6W3Uc2lCRJzJkzgxkz/tIVzo4dabaaF7eicXDnauwItLZOTJkykXnz5pg7JEEQbqG4uJiPPnqXVauW42+v5rXmOUQ4N77Z5rXRxk3Jy9E5eNhqmTVrGt9//5XJUxetX7+GHTu2EuUdzrt3vEyMb5Rp2z+9lfRrKy+ul16YyfrTW00aC4CDjT33txvKc90fQ61S8d13Xxql6Gd9WVtb4+HhiaKsYalDbiRTleKUtB+rEt35r7y8GJnKsPVAFGUFODk5Y29f//PK06d1gwNhnpbzmujZWIG/m5qzZxIaPJklOTkJAJV746h1onZ1pLy83CCpcG/l4sUL2CskXK0Nf43Gz05NRkY6JSXGHyDUz+yP9o4welsNYWNlQ6hHMIlnz1BUVPfsEImJunPTIG/Drb4oU6n5Y81RNsYno9Lo3geFpSr+WHOUMpXhvhuCr8WsP7+uK31d04HtGlZ3NO7CiXrdVxstAiMJ9PJnz56dKJWGuxaWk5ONg4NDvSZCxMXFVTtBOy8vj7i4uHrFox9IMcZ1UzGAYaEq0mIYuGCbIUlyhcHSd+jf3I1hBYaxBjBSUnQDGOZYuipZW6G1s+bKlaqjzYZy7Fg8S5YsxMdOw/CgIqO1U1dyGTwcUoCTlcS0qZO4fLnhRdqXLdMNhNwR3dviZuZfr3d4N2wU1vy7fGm9ipieOqWbmRXqa/kzlm4U6uNCubK8QSkLLl1KAiCyWahhgjKgiGsx6U/KjEEulyOTyUwyA+xG+jYViqZ7GCNJEjNnTmXOnBlo7F11Ky/sLPuzprF30w2y2LkwY8YUZs+eLtLzCBbp+u8OS+6njSk7+ypvv/0K8fGHae1azpioXNxtLHcikSE0s9fwarSuLsbWrZv43//eN2ktpV27tgPwRJcHsbe2M1m7eolZNRf+vdl9xtbGP4YeoZ3IysrkzJkEs8VRncDAIKzKC8BAtXJkaiWex5bhfPlgRZonhaoEz2PLkKkNNKAmabEqyycoqGFFbBMSTiGXQaC75a3AAAj11FCuVHLxYsPeu/oakJaePkpP7aL77jB27UqlUsmVK8n42RknhZjftVUdpihIfuKELtVYlHeY0dtqqCjvMLSStl6ri/QrWgI8nQwWz8b45IqVF9fLyCthY3zDr5vo6WOuz7m5JEns3r0TVwdn2oY1LHV3Zt7Vet1XGzKZjD6tulFaWkpc3JEG7et6OTk52NvX7/srLS2tXvfdjJ2dHTKZjJyc7Ho9/maa7pl/I1derss5Jln0AIY15eVlBrk4oa+BYckrMGyswM5aMsoHEf5bYqVxMm39Cz21ky2ZmRlGudhUVlbGLz9/hwyJh0IKsLGwbx5na4n7gwtQqlT8/NO3DbogW1JSwqZNG/By9KBVs+YGjNLwHGzs6RzcnrT0VA4fPlDnx1+8qMtbGmjAgyRTCfLSzfJoyEmPfrAryNvycqkGefkD/63sMhZra2uzDmBYWzee1GV1IUkSU6dOYt68Oajt3XTpmWwbRy5b/UoRtb0bc+fOZObMqWIQQ7A419fu0dfUuZ1kZKTz5htjuHDhPD28SnksrAAbE51yFKtlrE9zILNM93cvUMkpVptuEMnRSuLZyHzauJUTH3+Yd999zeB10Gqir0dQbqgL1XWUW5Jfr/tMQXmtzkRDajYYQ3BwCEgSVqV5Btmf0+WDWJdUnQxnXZKD0+WDBmlDUVaATKtp0ACGSqUiMfEMge5qbCz0KzL02soQ/YSq+tJngtDYWzc4JlPQXEvbW99UO7V15cpltFotfvbGGcDys9MPYFw0yv71JEkiIeEkbvauuDu4GbUtQwj11H1u9Snc6iI1NQUAH1fDDcadT8ur13115e2im7WflpZa58eeO3eWq1ez6BHTGSsz1GasC319Dn1R+YYqLy9HqSzHzq5+kyJuNomjvhM8ZDIZdnZ2FBYadvUiiAEMi1VcrBvl1CoadhBnzCWqkpXuwlVDCrzoXb2aiYONZLEHSHpu9lqyMqsuvTaErCzdfjUO5hnA0DjYolKpjFLjY+HCf0hLT6OvTwlBDpa3DBmglauS9u5lJJw+xYYNa+u9nx07tlJeXka30E4WnWNTr0dYJwA2blxX58empFzB2d4GOwN+cI2dY1PP+9qBXUNmL6Wnp6GQK/B18zJUWAbjbO+Eq4NzRVEvY7G2tqnX6p2G0rdpbd04TjbrQpIkpkyZyKJF81A7eJAdOxKtbeMaJNTaOpEdOwK1gzvz5s1hxowpYhBDsCjy6yYIKSz8ZNfQMjMzeO/d10nPSOeuZsUMCyxCbqLxgzKNjEmJbmxOd0Ql6RotVCuYlOhGmcZ0gxjWcng0tICunqWcO5fIhx+8Va90HXXVv/8gABbG/YvGQDP6m4JzWRc5mBxPUFAwERGmTat1K8HBoQBYVTPoUB82eSn1uq8u9LGGhITWex+JiWdQKpWEW2D9C71wAxXyLijQDd5pbRvHMaXWThfn/7N33mFyU1cbf6XpdWd77+t17x0X3I0NxgZML6aXUELoCSFfIAFCSYAAAZIAMR3TO+4UY4x7b+vtfXd6b5K+PzTaNrO7UzQN7+959gFrRtIZjUb3nnvOeY/ZbIzqeerr2cBCtjQ6vjsXGIl2BYZer4NOp0VxWkFUz8MXxamsneFUo3F+X6qCvwo/o61/qaOBXguVVKUEBBCW77p7Nxv8nTF8Mm/2RIvhBeVIkauwZ/cuXnwjbu6SaMF/sVgcleSQxF9dO03holWMMPyHT7RLVGmfbZFO+BmGQXt7G9IUiTtB4khV0DCZTbwEbfrCVXZQcWqG3J3Nwa9EVkdHO9a9/zZSRDQWZseuTD8czs63QSJg8Nqrr4Stx7l162YQIDC1aDzP1kWHAk0ectXZ2L59GxyO4IObDMOgo6MdqTxWDMVKYxMA0pTs84sLHIZDZ2cHMtVpECRopVyWJhOdUdbHFYvjE8DgNLIlkvgEfKMFwzB47bVX8OGH77HBi7GrQIuTQ5O5L7RYAd3YVfDKU/Hee29h7dpX423SEEN00bPqQiBI8OwZHrFYLHjggbvQ2taKpbk2LMyxx7RZ9+Y2Odqd/te73SnE5rbYPutIAjiv0Ipp6Q6crDqBhx56IOo9MebMORNnnDEHJzqq8e7eT0AziVt5HiuajC34z463QZIk7rrrfpA8Np7lAy4IwCUDRorA1b+M7kCvhQJnayQBDK6hellGYiaeAUCGkoZKyuDQoQMRLQRyfj0jTKx7rz8YnwSiyxXd5xVXGZEtjc48P0vqBYFuSd5oUVPjUwxIyY3qefhCLpYhTa5Brc/uUDCZTJBLhBAlyb3cE6GAhFwigslkDHnfvXt3gSRITK4Yx79hPCMgBZgybALaO9rQ0hK5DBxXJZGIAQyrlX/Z+OS7s08TzGY2gEFHoI8a7RJVLoDBZS2Ei8VihsPhQJo88Sfx6QrWRk7uiU8MBgMYARm3yRPly+bgO4Cxbt07cHs8WJZnjZk8QbioRTTmZ9lhNBnx5Zefhby/1WrBwYP7UJxWkBQlqgBb4jc+fzQ8Hg/27An+ueByueDxeKCQ8petFCuNTQCQS7jspfBKGxmGgU6nRUZKOp9m8UqmOg12hx0OR/Sa44nF4rg03OSCJok2WYuUN998He+//w688tSkDl5wdAUxZBq8884beOedN+Jt0hBDAOgdwPg1VnIFgqK8eOyxh9HU1Ih5WXYszIl+49S+VFv7v9YDvRYtSAI4v9CKCalOHDlyCM8//4+oVosRBIH7738QI0eOws76fXhv76endRCj2dSGF7e9DqfHiXvv+wNGjx4bb5P8KCoqBgAIHdGV6+ETLoBRWFgc9jEOHtwPAKjIinyOZ3MR+OqQFG1m1hE0OUjYXJFHTgkCqMj0QKvtjKjimOvpyfAUPCNdHqgONEBoYhPDBHY3SBd/1eRcAMPjiU0Ag+tVwTdiEkiTUFGXkOLkgnNTsqN6Hj7JS8mBVqcN2U+1WMyQJbqkyQDIJEKYTaGtLXo8Hhw7dgQVeSVQy5NDbndi2RgAwMGDByI+ltPJPmcSbS4rEongdrt4T3QcCmAkKFzkkRaFr18X7RJVzjZTiA+ZvnBafRnKxJ/AcwEMzmY+MZtNbBAhTs0ku8tR+dPANRqN+PabL5EmpjA+lZ8Sw2hrJ5+R6YBUwOCjj94LORNv3749oCgKY3JH8GZPLODs3bXrl6D34RbFpSL+olKx0tgEAJGQhIAkYbeHVxVksVjg9XqRptREbIvJZsarG95BfQebhaE162GyRa4ZmaZKBYCo9e0BWAmpePTA+DVKSH300Tq89db/4JWlxCR4ITY2IfXIlxAbo9sEkgtiUFI1/ve//+LTTz+K6vmGGCIYejbuPl16YLzzzpvYs2cnRqW4cFZefCpije7+5wwDvRZNSAK4sMiCQrkH69d/HZGMaDDIZHI89tjTGD58JHbU7cEXhzdE9XyJit5uxL+2vQ6724F77/0D5s9fFG+TApKWlg6RWAyBI749QkJB6DRBIBAgKysrrP29Xi8OHTqAHDUFlTSygJ7TAzy7WYlvj0jh8cnEmZ0knt2sBB8KscN8AZb9+3loiMuDO0l4KGRsPAz14SaQvmpygdODjI2HQXgSX22iJ3V1NVAKaSiE0Qvq5ki9MBj0vK4/9KW5me0HmKMK7/cQD7JVmQC6bQ8Wp9MJsTDBM0YHQCwk4XKHtmbEyd2NKxkVJav4Z1wpaytX6RYJnIJGos1lOR/d5eJPZgwYCmAkLEYjmzkRSQAj2iWqnG2creHCBQMyVYkfwOBsjEYAw2Q2gY5jxJw7d6QBqZ58//1muD0ezMmyQ8DDpDAW2slSAYNp6Q4YDIaQG1tzg9CwzDJebIkVBZpcyERSHD4cfBYAt4BM8hhwi5XGJgdJIuxMS6ORrVRKjTCAYXc5cPsrD2LtlnVw+TKp9BYjbn/lQdhdkfUr4myLRl8bDqFQEHIAw+l0Ys+ePV122e32kGX5uHMm2mQtXDZtWo9XXnmB7R0xZhVosSLq51Q27IRUXwdlQ2jPuXCgJUpfUEaBf/3rOWzduinq5xxiiGD5NQVC+6OhoQ7vvvMGNGIalxRbYtbzIlkQkcCVpWZIBQxeeeWFqDfHVSiUeOyxp1FUVILNJ3/EsbaqqJ4v0WAYBm/u+gAWpxW33nonFi1aGm+T+oUgCORk50Doik2jdz4QuKzIyMgMWx7v5MnjcDgcqMyOPPP+2yPdlRc9aTML8O2RyHX6h2fzGMDgYZ1edagRIpP//F1kckB1KLTF6HjidDrR1tba1Wg7WmTHoJF3c3MTSIJEuiI1aufgm0wlW+Efaq9GmqIgSOIBniSIkDP2T5w4DgAYXTQ8GiZFhaKMfCilCpz02R4JXIAg0Xxirr/cUADjNKG7AoO/Bjx8Q4u5CgxjRMfhHsyZPFVgRKtMFQAylewDNZLGv4GgKC/sNhtoSRwDGL5zc/1X+GDr1s0gCWC8hp8HV6y0kyelsoupW7aEtsh27NhRCEkBCjR5vNlic9nx1ZFNaLewvRpMDjNsLn5lH0iCRElaIRobG4LuacNlryZ1W14m/IInbvE9VZkSkQlrN7+Pug5/h6auoxFrN78f0bE526K5EEOG2P/D7Xbjyy+/xL59+7omqA6HA19++WVY2uMEkfzTmL17d+Ppv/8NjEgK7ZiVoKWxKX8mKU+v/0YbSqqGbsy5YIQSPPnkYzhwYF9MzjvEEIORaE5fNHj55RfhpSicV2CBVJDUI3fU0IhpLMu1wmq1Yu3a/0b9fCqVCg8++GcQBIHNJ3+I+vkSiTp9I6q1dZg1aw7OPfe8eJszKGlp6SA9DiAZ5L4YBqTbhvT0jLAPsXfvHgDgJYBR1dH/83Wg14IlU0VDI6exb9/usJOSuIU28CAfJ2nvPxFwoNdCwmdnqHPwUGhoqAfDMMiOknwUB9dfI5oBjPb2Nmhk6oTtWRiIdEUagDBkywmAjqIMYiJSVXUCADA8vyLOlgQPSZKozC9DQ2N9xFLPLhe7bpVoc1nOHs4+vkh+z/9XislkZIMXCbw4012BYYzoOF0BDFXkZZXRLlPlZK74DmBwDW4SoQIj3J4AfXE47Dh+7AiKFW4oRfwMpLHSTs6VUUgVU9i/f0/Qk2GGYVBfX4dsVSZEPDUEdXpceO77/2D98a3wUOwE0uKy4rnv/wOnh99odl5KDgB2whoMUikbXHUnWTk0B00z8FA0JJLwqty4554mwgDGvprDYb0WDFwAI9Ig88AwITmM+/btCzhmGI1G7NsX+oJ2NLXKY0FjYwMeeeQh0AwB3aizQcmTJzssHLyKdOhHLgfFMPjzw3/kfSwdYohwEIl+Xb10+tLQUI/du39BudKNkSnR1UxPdqZnOJEhobB503re5sMDUVpahvz8ArSa26N+rkSC+7yzZs2NsyXBkZKiAQAQXv6rgfmGoD0gGBpqtTrsY+zbtxsEAVRmRe48G+z9r2UM9FqwEAQwPNsDo9HY1esgVLgABsHDnFJg7/8ZO9BroUDQrJ0CQfTWierrff0votTAm4Prr8Gdj28oioJW2wmNLDJ/Ldak+uzt6OgIaT+xWAKKTl7fiPXNJSHtU1tbDZlYiry05OlxAgAVuaVd60eR4HKxz5WuQGyCwNkTToLiQCTu6vhpjtFoBC0MXz4qFnBNvPmowBCSgEYe+cM22mWqYiGQKqfREqIe4WB0NW2PawUGGwAINgN/ME6ePAGaYVCi4C9zI1bayQQBFCs8MJlMQTeFMxj0cDjsyPJpVvLB+uNb0Wbxn7i0WTqw/vhW3s4DdGttNjUFd29zAQxnkgYwXD675fJwAxhsVUOkPTA6jNqwXgsGjSL6FRherxdkCE0PW1v7/z0N9FpfuAogvhuDxRKbzYo//en3sNttMFQuhEedG2+TYoJbkw9jxXzYrBbf5499I+EhhuhJojl9fLNxI9vTYVZmZLKEpwMkAZyR4YDL7cZ3322O+vnq6+vQ0tKMTGX42fLJCPd5d+zYHmdLgkMmY+eKsapYjATCyy4WyWThVaY7HA4cO3YYxWleyJIktsvJSO3btyes/bsrMPiyKMowXAAjeusGXEVEdpQlpDIlFEgiehUYZrMJFEVBIws/oBcPUnz2htrHUCKRdvm4yYjbS0EiCX7NjqIoNDY2oDirMCR/NBEoyS4EgIgDGB6fBHWiVWBwz1XOPr5Irm/5NIFhGJgtZtCi0KKPsYaTt7JYwl/wZhgGzU2NyFRRvOjxRrtMFWBlpDo6O+AOscHQQHCNq5h4VmBIuAoMfspbuT4h0Z74RAuupDXYfifcBCNFyt8Eqaqz/0yigV4LB87uYCdKAoEQarUaNj5Km+KA1Wc3l1UXKtx1SlOFt38s4GwzGKLXxNvj8YS0+Gez9d84dqDX+hKtSVGsYBgG//jHk2huboS1cDKcmcPibVJMcWSPgDV/Ihob6/Hcc08nfSXNEMnNrz2AcezYURAAKtXJ+byMNcN91+n48aNRPU97exv+9NADoGkai4efGdVzJRoVGSUoTS/CDz9sxZtvvp7wY0DXwlCSSEgB4ff2OXLkELxeihf5qFjR3QcjvAAGlxTDh4RUTPCZSUax1wFXEZEti+5iuJAEMsRe1NfVRuU5wCVxqSRK3o4ZC3lniVAMsUDU1XMxWNRqFeyu5Pnt9sXu8kKtDr5aRqvthNvtRlEmf/LdsaIoMx9A5MouXI+JRJvLcuNmqH0uB2MogJGAOJ1OUF5vV4VDosII2QBLJD0TLBYzrDZrlzRTpES7TBVgtTYZhkFLSwsvxwO6gwaUNI6NJAUkGKGAtybeXGWOQpgEk/0AKH12B1thxF03pYS/XhwGe//fxUCvhQNndygBLI0mDRZHci6IcHZrNOFJ9nABjHRV4kr+cLaFmr0TCjabNS4NcMVise/8wQc9Eomvv/4CP/74HVwp+bAUT4+3OXHBUjoTbnUutm7dhPXrv463OTHH7Xbh2msvx9q1r8bblNOeRHP6+Ka2thqZUi/EQ15fUKRLKEhIJmw5mmDYv38vbr/9JrS2teDsUYswOjd5mo/yAUEQuGb6JchQpOHNN1/HU089BocjCSqEkmWBG+FLbHL9qSqzkmcRVC1jkK2mcOjQgaSuzE0k6utqkSKiIYtBz6RsGQWzxdxV3c4nnB+vlCh4OV4s5Z2VEkXIUu1qdQrcXgpub/L9DjxeGi4PFZL8XWsrux6Xl5YTLbOiBmdza2twybL94XSyY2eiVWB098AYauL9q8dm8/VDECZ2BQYIEoxQ0tW/IRyam9kfbBYP/S9iRaaKXdiO9GHTE25w4mSc4gUlEfI2eeAmkILoJYdEFQHBTtiCnQh7vewkRkgm1uARLEJfGbLHE7zDkpmZCavTA08STpKMNnYwzcoKTy9Tq+0EAGSo03iziW9UMiUkInGXrXxD0zSsVmvIWqV8wJ0zkgrAeNHa2oKXX3kBjEgK4/DFCd3rKqoQJAwjloIRSvDSS8+H3qgwydFqtWhqasTbb6+NtymnPdFshJoIMAwDIZE8C6/xhiTAS1V4ICjKizfeeA0P3H8XLGYzLp64EktHzo/Oyfph7dq1Af9ijUaWgjvn3YiStCJs2rQet912A6qrT8XcjmDgFmAYQXz9tKDw+SHh6o4fOnQAJAGUZiRPAAMAKjK9sNvtqK2tDnnf7mBPkjitPjPpKPU6cDjsaO9oj5mKAneeaMhIcdLYMjE/0uyxlHeWiWQhS3unp7PyfGae+q3EErOdfc5ynyEYOjvZ7yJbw5+Ed6xIV6VCJBCiszMyP52rcEjUAAbfyQmnqdec2HABAUaQ+MKTtEAcUc+EtjY2apquSJ4sfa5ahM8KDC5oQMezAsN3fqPRyEsJp1zOZjo4qSSZDPbBSbGPR+5zDAZNs/dFVxlykkH4ZsM0HXwwglv854IByYTByg724QYw2tvbkKpMgSSBpf4IgkC2JhPt7dFpDmoymUDTdJc2dCzhzhlNeaxowDAMnn/+GbicThjL5oLmsaQ9GaElSpjK5sDhsOPFF5+Ntzkxhe+S6iHCJ5oyHImAVCqDnRpy+YKFYgA3TfAenNfrdbjvvt/hrbf+hzS5BneeeSNmlU3j9RzJhlqqwh1nXocFw2ajsbEBd9xxE7755st4m+UH16spGQIYtJC1MZwKVY/Hg6qqEyhI9SKOqsZhwQVcjh49EvK+Ho9PDjdJsu4Yn9Z/tGRUOU3+2AUwqF7n5RNuXU0m4kfZJJbyznKxDDabrWuNIRgyMtiF/GT0zY1hBDB0OrZfZGZKelRsiiYEQSBdldr1GcLF4WDHJ06dIFHg7OHs44skG5pOD5KmAgO+AIYt/AoMruyLLwmpWJCuYAdZLvjCBwYDq28YVwkpAJRMBLfOCrvdDoUislJLbvDR89hcO5bo3ezkMCMjuEGUa2rt9iZfxgMAuLqa/gW/GJ2Tw+pN6ixOZKbwJ50VC7QWdvEwNzf0xsk0TaO9vQ3l2cV8m8U7OalZaDi5D06ns+se5Qutls16ifRZEQ5yudxnQ3SqS6LFjh0/YffuX+BMLTrt+l70hyNrOGQdx7Fjx3bs3Pkzpk2bGW+TYkIkyR9D8EuyJh4ES2XlCGzf3gmDm0SqOHnm2/GiwSYExQDDh4/g7ZjNzU24/77foaOzHZMKxuLiSat4W1ALlTVr1gTczqdGfCgISSFWjVuGyqxyvLX7QzzzDNsf6rrrbk6Y36bZbAJDkEmRXAhSCEYgCqunYUNDHTweD4rTkq+ymrP51KmTIe/bXWGTJIFen53hVtkMRkNDPYDo97/g4AIlDQ11vB+bk9eR8rSuFkt5Z4mQfd64XK6g/fOcHNav1VucQOgublzR+3xz7jMEA9fjJFUZfN+MRCJVpUFNR0NEx+CC1fGQdB4Izh67nV+556EARgLCBTAYYeJPkmihBHarAQzDhDXJbGtrBQCkJ1EAgwu2tLXxJ3eh07FZxLQs9O+cdHmgON4KoYkdoAV2N0iXJyw5KlrKnl+v10W8KFleXg4AaHUk52Om1SEESRAoLi4N6v1KJev42T1JoOEbAIeHnTQoFME7sHl5bABDa06+z6wzO0CSJLKyQtfM1Ot1cLvdyE8Cvc389FwA+9Da2ozS0nJej801uFepVLweNxhkMhmEQmGXDGEyQFEUXn313wBBwFw2B0iQhZm4QxAwl81F5t538dpr/8aUKdNBkkmyiBABQwGMxCHRGwhHyqRJk7F9+484ZJRgblb8x+v+5Ipuve7KGFsSmENGdqFrwoTJvBzPbrfjD3+4Bx2d7VgxZikWVc5JmIX5RGJUTiXuWfAbvPzTWqxb9y4yM7OwcuUF8TYLAOun0SJZ0ozblEgWVv8zru9Lnib5AhiZKhoiAcKSkHI47GCI5Alg0CLWTq4yiG84KadYVWBkSCiQRHQkpLhqV3ESrKv1RewLmDqdzpADGDpL/Mf6UNGFEcDg1k1VsuSsaFfJlHC5XHC73WFXUHD9iOMh6TwQnD1mM7/+TnI8pU8zuFK3ZKjAYIRi0DTdFd0OFU7aJFWePAEMqQiQixl0dPAZwNCCIQnQktAW+wkPhYyNh6E+3ASSYq+hwOlBxsbDIDyhTz4pXwAl0lI2AMjNzUdKSgpOWcTJ1PMOAOCigHqbGGVlFUFnrWdkZAHgP/siVhjsRgBAZmZW0Pvk5eUDALTm5JNC0ZqdyMrKDitboampEQAXHEhsCnw2cjbzSWMje8yUlNhnvRAEgZSUFDQ1NYRUWh1PfvzxOzQ01MGePRKUPH7N3wmPA8q6XyC0s1lLpMsGIs6BV68iDfbs4aipqcb27dviakus6Nk/7Ne+gJ7o/Nov//z5iyGTyfBDhxze5Hhcxg2rh8AvOjmysrIxdep0Xo75zTdforW1BYuGz8Xi4XOHghcDkCbX4NbZ10ApUWDt/17tlvaJIwzDQKvrBJVEko+UWAm9XhdyQ2suMSVblXwPCgEJZCiprs8QClarFRAJkyZARfv0vaKVCNHYyFZgZEliE8gSkkC62BuVCgyuSkWUhD0qRV39KYOvtMnPLwAAdCahb97pS8YtKCgMeh8ugKGQJpcSBAdndyTBSIvFApIkE64Co7tfJb9rY8n3S+5DdXU1/vrXv2Lfvn1QKBRYuXIl7rzzzgEjWL/88guuuuqqgK+Vlpbi22+/HfB9y5cvxzPPPMPPBwgANxgxgsQPYHBBFovFApks9AeHVtsBlZSBKMlUhjRyuqtpEB9otZ1s8CDEiZPqUCNEJv+FJ5HJAdWhRpgnlYR0PEou9tkTeQCDJElMn34GNmz4Bk0OIQrlydMM7qRFDC8DzJg5K+h9NBoNJGIJdDZ9FC2LHpzdofSEyM9nJxjJVoHh9lIw2V0oH5Ef1v5caXVxVgGfZkUFzkbOZj6pqakCAKSlxaeReWpqKnQ6HVpbW7om7InMJ598AICAtYCfrN5wILxupB/8BCJ793NK4LEj/eAn0I1fHdfKT2vhFMjbj+Ojj97H7Nlz42ZHrOiZ+OF2uxMuc+p0IpTeT8mISqXCypUX4L333sLWdjkW50YnazdY+pMwUiaAV/p1iwIeGrjkkit4a4hZX89mFU8rmsjL8X7tpMjUGJ5VgT2NB6DTaUPKxo0GRqMRHrcblDp5Ahi0RAnaTEOn04Y0r+/o8CUWJlFvyp6kymm0tlrgcDhCksQ1mgygQkwijCecykI4MmHB0NBQD7WIhkwYu+h+lpTCEZMZJpMRKSka3o7LLf4LBUm22ARASLI2hyIVlpaWDplMhk5TfMf5cNCaHZBKpSH1wHC52GuTyD0pB4KTCXO7w+9ZYjDoIZVKEy45gnsGG41GXo+bPE/qAJhMJqxZswYlJSV4/vnn0d7ejr/97W9wOp3405/+1O9+o0ePxvvvv99rm9VqxQ033IC5c/2d5scffxxlZWVd/05NjW7mpNnMlgHRcdJGDQVayNposZjDaoar02mRFiN9RT5JkdFoabXC5XJFvOhA0zR0eh0oTeiNcCXt/U9cBnqtP7gABl/Bmblz52HDhm+wWydFoTz8XimxZpeOva/nzJkX9D4EQaC4pBS11adAMzRIIrkK3FrMrNNSUhKcZBbA9iHQaDRJF8DgSlTDXfTmMoRO9wBGVdVJyGSyrn4UsSYjIwOnTp1CVdWJhA9g1NZW49ixo3Cml4KSxU+nVdm4q1fwgkNk10PZuAuW0uCDtnxDyTRwphXjyJFDaGioR1FR4veYiYSeDqnX6xkKYMSRZKniioSLL74cW7duxOb2doxQu1GoSJ6kklhxxCjGbr0MlZUjcNZZZ/N23IqKSgBfYUvVNlw66by4LjKkylNgcQWej6fKE0NDvM3cgSNtJ6DRpHY1pI0nXMU9JYm9XGa4UFLW1o6O9pD8c4uFTaJUSJLzmaiQsAvuVqsl6AAGTdMwGY2g0pIog1tAghEJunpo8onb7UZ7WytKYjxGZPqqPZqaGnkNYHi97HEFRPIFMAS+AEYolVQEQaCwsBi1NSdBMwzIBFvU7g+aYdBhcqCopCykMZILUHHVKsmGWMQFMMLvZ8OH9Hs04IIq4cgZDkTEK2xWqxUnT57E7t27sWvXLr+/aPLee+/BZrPhhRdewJw5c7B69Wrce++9eO+997qkiQKhVCoxYcKEXn8dHR2gaRrnnHOO3/uHDRvW673FxdF1qk0mIwCwWpsJDuOz0WQKfbHc4/HAbrdDKUm+2n3OZj4yH4xGAyivF5Qi9MxXgb3/h91Ar/UHJWcXULjmvJEyefI0ZGfnYK9BCgeVHAOozkXihFmC0aPHorS0bPAdelBWVg4P5UWbObkaCzMMgyZjCzIyMqFWh+bA5ucXQmd1gqKT53fMBVzy8sJb9K6rqwVJkijKTOxFcwDISsmAQipHXV0Nr8fV6bRob29DVlbwkmN8w5376NHDcbMhWLZs2QQAsGeNjKsdYmP/0goDvRYrHL7rs2XLxjhbEn16LpqHKvMxBL+cDtdfoVDg3nsfBAMCb9SlwOROriSLaNPmEOD9BjUkYjHuv/+PvFVfAMBZZy3HsGHDsaNuD17b8S6sLn4bWobCsMz+57UDvRYrDrYcxbPf/wdOjxO33HIHr99DuHBVCUkVwJB0BzBCweXy9QtIvrVeAIDEVzHA9T0IBpPJBIqiumSUkwWvTAwtD5LPfWlrawHNMF0BhViRKWXP19zcxOtxuQpLIskSC4Fum0OtEi0qKobHS8NgTR4ZKaPVBbeXCrr3aE8Igki46oNgIRCZ3TabFQ6HI27JhANBkiRbDcSjag0QQQDDYDDgrrvuwowZM7By5UpceeWVuOqqq7r+uH9Hkx9++AEzZ86ERqPp2rZs2TLQNI2ffvoppGN9+eWXKCkpwbhx43i2MnQMBlaXOhkCGJSYtVGvDz0DgNN/louTZ+GTg7OZy1SJBK2WXezmggfxhO8KDIFAgJUrz4eLIrCtI/HvZwDY0iYHA+C881aHvO+oUWMAADW6On6NijJ6uwFGhxmjR48Jed/c3DzQNAOTPfzSx1ij8+mCck3IQ4FhGNTWVKMgPQ8SUeI7OwRBoCy7GI2NDbxqSR86dAAAkJ0deuUdX6Snp0MoFHbZksjs2PETGIEIrrT4VhUI+sm8Hey1WOFMKwFDCvHLL9vjbUrUoSg64P8PEXu83vjr7MeCceMm4MYbb4XJTeK1mpSkSSyJNkY3iVdrNHDRJO6970EUFhbxenyxWILHH/87xo+fiAMtR/DohmfxQ/UOeOnYV8EsHTEfOSr/xINcdRbOGjk/5vZwtJs78Z/tb+G/P78NL7y4774HMX/+wrjZ05OODtYnOh0CGAKfzE4S5ST1ghtKQwl8cT4vLU/8OX1PKLkYJqOR9z4xzc1sMktGjAMY3Pn4DmBwPa6ScX2bW9ymQ/xBFheXAADaDMkjI9VmZAP7RUUlIe/LMEzS9pJjEJndXNK+UpmYEodKpbKrUIAvwk5reOihh7B161ZceeWVmDJlCtRqNW9GBUtNTQ0uuOCCXtvUajUyMzNRUxN8tqlWq8WOHTtwyy23BHz9xhtvhNFoRGZmJs4++2z89re/Dbqxbzjo9TowBJkUAQxazJYrGQzBlQaRtTWQv/AcxN9vRXpbC370etHeIAFBy9A2XQlalBzRcbGAfdhwmSqR0DUxDjOAMdtsxvM1NegUCrF09GgwEYzQjFgIRiTgpQcGx9lnr8S699/Bj50MZmU6II+hnmaoaF0k9hhkKCkpxezZZ4a8/9ix4wEAVZ21mF3GT/PHWHCyk31ejhkTegCX0ybWW5xIUya+7B0A6CxsBUY4uspabScsVgumlo3n26yoUZ5bjEP1x9DY2ICysnJejrlnD1thmZ8fXh8RPhAIBMjOzkZ19SkYDIaoyzuGi06nRX19HVxpJQCZpGmNsUIghCslL6zvtOf8gmxvBSMSgxo5Cq6V58Fx5TVACHrYsaBn1j9FJaacj3jTeqRcdiGo7BzoDxwHyOSYo4WKx5OY1z8anH/+hWhvb8Wnn36E/55KwXXlpoSel0Ubg5vEv09pYHKTuPHGWzB3bnQW8dVqNf72t3/g888/wdq1/8WH+7/AlpM/YkHlHMwongRxjPoPSUUS/HbeDfj+1HZsPrkNHsoDlUSJO868ARJh7BOpmk1t2HTiB+xtOgiGYTB+/ETcccfdvAeRIkGnYxPNaEniSXT0B+WzVRdkhj43fj722UdQWSwQHAPsOWJoxyqSyj93eVkfeKBeqH3hgjxeBb/3P5/+eSAouQQMw6CzswN5efzNxdvaWgAAaTEOYKSJKd/5W2N63mQg1OoCTkGizWDD6KL0aJjEO1ywJVT1C5EvmdBLeSESJlYT62Dw+BJoQnlm9YT7vSZqAEOlUqGjowN6vY43SciwAxg//fQT1qxZg/vuu48XQ8LBbDYHDJykpKSEJGn09ddfg6IoP/kolUqF66+/HlOnToVEIsGOHTvw2muvoaamBq+88kpEtguF/U8EtNpO0GJ5UoSKKV8AQ6/XDfiZAEC44Vsor7kSjFgC98WXQpebizf++woWExZM+kYPeYcbp84PvmlPPBH4PipBMIN+7sHQ69nJJRVm5scygwHNYjHy3W5Ms1rxiyqyDCGvTAyttjPiz8WhUilw+RVX4cUX/4mNbXKsLIhf6fxgfNWsBM0A11xzPcTi0B+PRUWFyM3JxfH2KlA01aVdmegca2ObMU+fPiPk7z03lw0CJFWZqo2tFsnPzw/583LNOMtykkefvzynBABQX1+DysphER+PYRjs2bMTMpksbg28OfLz89Hc3Ix9+3ZhyZKz4mLDYPdQVdVxAIBbHXrFz+mIR50HqaEB1dUnMGPGGUHt03d+QY0cBcLjhnDHz1A8/BBEJ4/D/uwLUbY8NLzebplHivLwNubyifTjD0AVFUPQUA/p9h/hnRe/DO1oQtOJef2jxW23/RYejxtfffUFXjmlwQ3lRihFp18QQ+si8e9TqTC6SVxzzfW45JLLono+oZDEhRdehCVLluDdd9/GZ599gg/3f4Gvj27G7NKpmFU2PSZ9KBRiOZaPWoTDrSfQZGxBikwNhTh28hM0Q+NI6wn8UP0zTnRUAwCGDavENddcj+nTZ8ZNCqS/ZwDXgJTzeZMBWsTaajQaQvLPD44chfUtzThnhB2FHU6UJJl/bnaQIEkSGRnpEAiCe6ZzsskUzwEMvv3zvnD26nSdKCoq5O247e1sACFNHHzGtM1LYFunDB1O1nc2e0jYvAQUIQTHVSIaQoJdkOVzPBYI2OdJMmboc9n5QiEZ0jUpL2eT1VoNibvm0hfO1oqK8pA+q0TCrp85Pa6kDGC4fD08ZDJpWPd9aytbMZWSkhg9rPrCrdW3tTUjJ4cf1YawAxhSqTSumZd88sUXX2D06NEoLe2tuTZq1CiMGjWq698zZ85EVlYWHnnkERw8eDBsuSmSJJCaGngSxDAMtDotKGlyREtpMRvtM5n0/X4mAEBtLXD91UBxMYgtWyDNzQXT1IR1n32MxjI1UKZC2vHkaQTMjYFqtXzgzx0ENhsbbAsngCGjKMwzmfB8bi7O1euxzGCIeIJEycUwthmgVIohEgUxEDAM4HQOmN26Zs0V+PLLz/BzQz2mpzuRk4CN20+aRThikmDKlClYsWJZ2A7U3DPn4v3330eNrgHDMkPXcYw1HsqL4x2nUFhYiLFjR4S8f1kZmyXHBQWSAaPNBaVSifz80DMBWlrYZtgVuSU8WxU9yny2trQ0RPy8AoAjR45Aq9WisrIy7pqjRUVF2LlzJ3bv3oGLL75g8B14ZqDxnKOlpQEA4FHGvxlpMsBdp+bmeqSmLh58hwDzi16cOgXJV19BwsO9zycU1R3AEAoZXn6bvGKzAd98BTz+OPD661B9/hFwnn+fuKgSxPyCDyQSQeJd/yjzl788DJVKgffeew8vVKXhmjIjsqWJNzeLFnVWIdbWamDzEvjtb3+Lq6++OmbnTk1V4Pe/vw8333wD1q1bh3Xvr8OGE99j08kfMSZ3BGaXTUdlVhnIJNRsHwiL04od9XvxU81O6O2sXPKMGTNw5ZVXYubM+AUugIHHcrudlQumRclRZQwAtIhd3LbbrSH55yc2bsQnzzyD9OFS2Bd6INVqkso/11pJ5ORkIyMjeGUQo9GXSMhjAEMaBf+8L5SStdds1gX+jsMcP41GVhY8VRzceOCkCLxcpUG7s3tZ0eIV4OUqDW6tNEIqCC5wQBJAitgLrbaT1/FYoWA/P80kn1Qn1/siNVUZ0jXRaMqgUCiSSkKqVW+DQi7HiBHlIY0FaWkaAIDd5YBKlphVCANhc7LfUUFBVlhVGJ2dbQAQFzWkYODs0unaeftdhx3AOPfcc7Fp0yZcfvnlvBgSDmq1OmAPApPJFHQUqqGhAQcPHsTvf//7oN6/bNkyPPLIIzh8+HDYAQyaZmA2B36gGI0GeD0eUCnJ4UjRIikYUoCWllYYBojyyv/yKCRWK8zPvABKqgYMNrhcPhkmLwFnhggts3ssllMMCr8zIWuPFRKTF26VAJ0TlGhYpAEj7H6oTflbI+w5YjTPUaPkawM2ttSjQSLBE/n52KNSYYHRiJvb2lDkcqFOLoV9qga2/O4JyrB1ncg4bMfe3+ah4lMd1HUueKUk2qar0LgwpVcVTP4PJqQftkOm9WCai8FVYikk326Eoaii12dNTVPCef2N8J45H7JHHwFZUw26tAz2vzwO7yJ2MUb44/dQrTwb1jfeQXMzm+lA+5qHnb/vJF5+ZxOW33o+dpfkDHj9F+gNkNA0Nmo0kNA0rmtvx2MFBXD7ZB6+f/o96JRSnH/zql77ETSD/Y++gd3F2bjuqrO6tt3w00Gs+Wk/iqx2ELm5cJ1zLhz/9wgYTbeMh3r8KFaW44abIXv0YQiOHYXjT4/AdcutEL/9JsTr3oXg2FEQZjPoklI4b7wZ7mtvwG9+cwfuv/9ufNSowi0VBlQcsKDghA1CNwNTpgjHZ2owcaMOhhwJjszpPp/QRaNsvxnZdU5sdrSgTSTCJ+npWJuVxVs5rocGPmlSgSRJ3Hzz7TAawx/wp049A++//z4ONB9JigDGyY5TcHqcmDVrzoC/4f6QStkJuTmMpvHxwuxwIz0rP6zPe+zYCQDJVoHB2nrs2PGwPnNfvvlmPQCguDj+10Cj0SAlJQXbtm1DW5seEsngDqhaLQs6M28wBhrPOaqq2AxTr1zDyzl/7Xjl7PO/qqo6qPs10PyiF+m5wFXXd2/3eiF95mmI330bZEsz6OwcuFdfBOd9vwd63D9dY91td0D2pwchOH6MHcufeBre2XMh+uIzyP72KMiaalAjRsL+3IugxnVLy8lvvQnizz+F+ccdkN99J4S//AxGrYbr6uvgvPcBGI3d81fRcy/Au2c3yFNVIBx2UMNHwHnn3fCsPK/XRwl1fuE559xe+4s+XAfljdfC/O1mUNMGljkUr3sPcocDpsVnQ6w3Qfb3p2B87GnAJ6GqPmMq6IwMWD//pveONI2UscPhnTINtrVvd22TvPISJG+8DrKuFoxaDc/yc3ibX/Q9v/TJxyF543UQJhO8k6fA/uQ/oLz4Anhnz4H9RbaCmqIoKL1e3NzWhhFLloAxmUDnF8B11dVw3X7nr1Yuqyc33HArFAo1Xn313/jXyVRcWWpChSq6/UA0YgpWb+BrqwlywSxS9hskWNegBkMIcO+992HZsrN5GRtDR4yLLroCq1ZdiO++24JPPvkYB08cxcGWo8hQpGFm6VTMKJ4ElTT5FmU4GIZBVWcNttfuwoGWo6BoCjKZDOeeuwqrVl2AkhJ2nhzOvDtWY7nRaAZDCgAy/g3Fg4YgwQjFMBpNIfnnOTkFAIAWI4nxBeDFP//3oXaU2J1o7Mc/9zSKUHV+esT+ubTTg2+cDDrSW2H931tBj5/yYZUAAK9CilmnmvHJK5/h6qvOwtdje0vZhOSfm0wB/XMuFBSOf37FL0dRojPDIhXjm9GleGIqm2RbW9sAg8HG2/g5c/16PHDyBNIOUUH55+pqF5a6m/3883anEJvb5Dg7P/hna4qIRq1Wi85OU0h9TAbC42EDF1SIjbATAcoXdLHZ3CGPUSUlZTh+7DC8FA0hT8/JaEHRNDpMDgwfMSrksUDs68drsVuRrUm+RDGLwwqxWAybzQObLfT514kTVSBJMmErMDgp4GPHTgx4D4cynof9ZFi6dCl27dqF6667DhdffDFycnK6Gj/1ZPTo0eGeYlDKysr8el1YLBZ0dnairCw4/bQvvvgCJEli+fLl0TCxX7zewFHg9nZfIylxkkxWCQKUWIFOrbbfzwQAwm+/AVVcAtfkaYDvfVIpW67scPsvQg/7SIvsvTZox8rRPEcNVaMLhd+ZIO/w4NhVvZvPSXUeVL6nRdt0FT4XynBRixbP1dbi0YIC3N7ainUZbNnrtR3tEL7TiT1357Nhfg4aGPN6OyyFEtQtT0XqCQeKNxlB0AwalnQP1Hk/maEbKUfnRAX2VIswssaC8gfuhamwGO7FvaVLhD//DNEXn8N5zfVglErI/vMylFdfDt3eI2DS0uGdMRvy/AKI1r0PXTb7eSgpO0G8YO9J1KarB50cAcDZWj12K5XQiURYn5qKO1pbMddsxiZfY/vPxlfg3o27kGW2o0PdXR4+va4VuWYbPpnQLSfz9Eff4ZLdJ/BRaT7eT0nFmjMXoOCDdSAPHoDxy41Aj2oMsuokFDdcDedV14K6fA2oimHwemkoX/sPqOEj4VqyDIxQCMn6b6C453egPRQmXncj5s1biO++2wzlNjvKqy3oLJRCmy+BSu/BpPU6kFTvLA3SS2PKN52Q2Gk0DZfjI1MKRpjtuL21FRkeD54uKBj0GgXDpjYFdC4BLrroYhQVlQ54Lw/G6NFjoVanYH/zYZw/fnnCZ9DtazoMADjjjLlhfW61mv2NJEsAg6IZ2BweVKSmhfV5a2tqoJDKk2qSJJfIkKNhe0NFcm8D7GLEli2bIRKJEqYKs7S0FPv378f27T9hzpx5MT//YNeU7XNEdPWMGmJgOJmOzs6B5xUcgeYXA6G6/TeQvv8OXCtWwX3zbRDt3Q3ZM0+DPH4c5rXv9HovWVMN+Q3XwnnVNWAuuAiyfz0PxaUXwfrUM5A99ggcV18PAJD/8x+QX3MlDD/v7Vr4ZmgGoCgoVq+Cd/JUOB96BOKtmyD726Og3R44e/S9yPtwHTwrVsJ7/oUgPG5IPv0IymuuhOntdRHNLxxn9a6YkK97D1RJKVyTpg56rRTr3oNn1lx40jNBnXs+ZA//CeTXX8F9Lrso5Fx5PuRPPQ6quRVMdndZuOjnn0C2tsKx6oKu70951+2Qvvc2nJdeAe/1N0PQUA/Zq//mbX7hvO7Gbrsf+RNkLzwL19JlcM9bCOHRw1CuXgXC5QRDM102OfV6vHrqFDI9HjSefyFyps2AaNcvkD3yf0BrK2x/fWLA6/Nr4eKLr0BWVg6eeuox/Ldag7PzrJid6Yiaim250oMme+Dq3nJldIMnNAN826LAdx1yyOVy/N//PYqJEydHPC5GCkmKsGDBUixYsBQnTx7HV199ji1bNuGLw+vx9dFNGJs7ErPKpmFYZmnCzyk5LC4bdtbtxfa6Xei0sn0SS0vLcc45K7FgwWIoFOxzPt7Xvif92WK328AIkqvBMwDQpAg2my0k/7y0lPUL63RCAP6V1eH452+nZuCLlFRc1dnp559LhAyu72zHCB7884OlKuyoEuNygTCk8fO6b77CunFj0CwW4KfyPDRplLhg30m/AEYo/vlygyGgf75ezvoO4fjn704dgf/OGocigxnX/XQIYxs7cGNmPlpbW7u+Yz7Gz9VHjmC7RoXUEWRQ/vmnGWk4SUgx3mbz88+rraFJ+qhFNBiGgU6nR3o6P7JlQp+skDcJAxhemp0nkqQw5GdlaWkZjhw5hE6TA7lpie1/dJocoGgaJSWhr8Go1RoAgN5q5N+wGKC3GpEa5poEwzCora1GSkoKyARNutH41iSrq6t5G+/DDmBcdlm3Tuj27dv9XmcYBgRB4NixY+GeYlDmzp2Ll19+uVcvjG+//RYkSWLWrFlBHeOrr77CtGnTkJWVNfibfe8HgLFjx4Zn9CDo9WzZHhVDLdJIocVyGPS6ru+8L4TFDEFrC1xnnd1ru1gshlKphMnZu1+JosWN7L02tE1V4tQF7ODVNhPwKAUo+MGMlGoHTOXd5ZDyTi8O3JIDS7EUH1jVOCqQ4aWaGjzU2IjzR45Em68cyy0lcW9tM1Jqnb32F3gZGCplqDmXle1qnaHCqLUdKPjehJZZangVbGBuzz35XU3MPnEq8JQgB9tdbsheftFvgiSoOgH9jztB+xoRuWfNRdr8MyD55EM4r7sJIAi4Vl8M2csvwL10GRiREBCQSLc6MO9kE55dOGnQ655htWO62YzHfZOENrEYBxUKLNfruwIYn06owAMbduKcQ9V4bVb3Pbtq/ylYJSJsGslmUE+vbcWVO4/h5ssWYYNUgZS99ZhwyeVQrVgFzSXnQ/L5J3BdcFHX/sLaGhjf+xieBYt62WT89JteparO625CysXnQf7yC3BedyNuueV21GzfhunVRjQVyHBsUbd+ftk+M8r3966oKj5shcxC4Zdzs2BPEeLzQ+lY+vnX0D73HC5buxaT3n4bnhx2InnrdVcOes0C0WQX4vsOOXJzcnHFFdeEdYyeCARCzJ07H19++SmqOmsxPIufpsnRwO1140DLEeTm5mH48JFhHUOpVEIgEMDuiu7CA1/YXR4wCE8rkqIoNDY1YFhOadylk0KlOLsQv5zYC7vdDrk8/PHl5MnjaG1tQUVFBW/ZUZFSXl6O/fv3Y+vWzXEJYAyGyWRkpSeSZOEp7pAC0EIJTCbjoG/tb37RH4LDhyB9/x04rlgD6z+eBwA4r70BdEYm5P/6J0TbfoBn9tyu9wtPVcHw1UZ4p7LVCt7KEdBcfB5Ud98B/U+7QRewutOMRgPVPb+F6Oef4Jk1p9s+pxPuBYtge+yprnOpr7gI8heeheLq67re98N//odJPfZzXHcTUhfNiXh+QZhNYNTss47QaiH+bgvsd94z+HXt7IToh+9gffIZAABdUAjvlGmQfriuK4DhWnU+FE88CsmXn7Ln9SH59CPQCiXci5ay13DHz5C9tRbml/7bax7hnjWH1/kFABAdHZC9/AJcy87pFYySP/U4FE893ut48pdfRLrbjUuHD8eaSy6DZs48ONdcCzonF7IXn4PjlttB5/OTJJHozJ+/CDk5uXjk4T/ii2ag2S7E+UUWiKPwyFqYY8dxs7iX3AgAZEu9WJQTvSoIm5fAu3VqnLSIUVhYhD//+bGEahTNUVk5ApWVI3Djjbdiy5aN+Oqrz7G/5jD2Nx9GpjIdZ5ROxfTiSVAmYENphmFQra3DT7U7caD5CLw0BYlYgqVLl2P58hUYMWJU0s2dAMDtdoMh+O1pt3bt2oDbr7j+Ft7OwZBCeDz9z80DjZ8ajQYF+YWo7WwATfcuRAvXP//fvixYnCRqpFI//1wlpbFwigfDPtFF7J9/cVCKDSYpxjzyN2Tef1dI4+cSiwnHfPfmh5MqcfMPB6ByuGCRsVUhofjnaR4PplkseLyQnR/09M/X57ABjHD8848nVna976fyfLz/3y+xSKRAW2dH13Y+xs+tGg2eG52PWyuNAAb3z59vyIbVS+KjjAx0ikS4qqMDb2ZloV0shtEd2u9GJWQXOI1GA28BDE6Wx00lh5/aE68v0UUsDl3erLS0uw9GogcwuP4XoTbwBoD0dPb5oLMYeLWpv2f07279LW/nYBgGeosRZRUVg785AO3tbbDb7V39SBMRoVCIlJQU1NSc6netOFTCnpo+/vjjXX+PPfaY3x+3PZpccsklUCgUuPXWW7Ft2zZ89NFHePLJJ3HJJZcgu0c22Jo1a7B4sb+O8tGjR1FdXe3XvJvjnnvuwfPPP4/Nmzdj27ZtePrpp/HEE09g0aJFUQtgGAxsAINOpgCGSA6v1wOr1RrwdcIn88Uo/atKMjOzYLD3vg1TT7ClY81zemu5cf9O7aPFacsSwVLcrUt62JfVs0ul6gpeAMBRJXtNpXov+tIys8e5CAItM1UgKUBzqvtcXPACADxmBnkKBbwzzoDw4AG/47nnzuuaHAEANXoMaJUagrq6rm3Oiy4F4XJhwqmToCSsI7fywCmIaBofThrud8y+rNp/CgyATT0WYr/VaDDLYoHKy37GmkwNDuVlYNWBU13vIWkaKw5VY/3IEjhF7HlXHDwFk1SM74cVIoWiofF64WpuhHf8RNAKJUQ//djr3FRRid/kCECvyRFhNoHQ6eA+YzYE9XUgzCakpqbh/qkzIATwP00mevbTahjlf39k1zlgzBbDIyEgclJI8XghMBhgnTEDBEVBsWfPoNdpILw0sK5eBZoB7rr7AUil/OjbLlzIPm92Nezj5XjR4lDrMbi8bixYsDjsAYUgCCiVKthc/r+rRMTus1OlCj2A0d7eBo/Hg6LMxKg8CIXiTHYhrqmpIaLjbNq0AUB3g7hEIDU1FWlpadix46eAspLxxuF0gk7C7M14wgjEcDgG190eaH4RCPFm9v513Hxbr+32W25nX9+4vtd27/ARXcELAPBOngIAcM+e2xW8AADPJHa7oL7O75w9sxtBEHBcdyMItxujWpq7Not6aNcSRgMIsxme6TMjnl9Ivvisa5vks49AeL1wrr7Y75h9kX76IUCScPWQoHKevxriLRtBGFknkSofBs+YcZB++nH3jhQFyRefwb30rK75gOSLT0CrU+A+cwEIna7rj+/5BQCIf/wOhNcLxzXX99rVcf1N6Ivi6y+xT6GAWSAA06ntsss9dx4IioLo558GvU6/JkaOHI0X//VfjB49FnsNUrxwIhWdTn4XbQFAKmBwyzAjFuXYICLYSaBKSOGWYUZI+D8dAKDBJsRzJ9Jw0iLGzJmz8c9/vpKQwYueKBQKrFixCi+99Cr++c+XcdZZZ8PstuKzQ9/iT18/iTd2fYBaXUNEjWmlQkmv/4aLw+PED6d+xuOb/ol//vBf7Gk8iMKiYtx225147/1PcPfdD2DkyNFJGbwAAK/XCyZBs1sHgiHIQQIYgcfP8RMmwuEm0GTs/YOMln9uLfTdhxH65yfbhUgFgzGFhUGPn/aKYbCQJPK93edeN3k4pF4KKw5Vd20LxT8/S6sHQxC8++dpNkfX34GCTFglIkxx2NHZI4DBx/j5fno65ILuTOnB/PMUjxcaL/v3i0oFIYBJ/awJDQbX9NtoNIa1fyCkUvaze7zJF8BweVl1g3DWJ7hgQDI08m7VcwGM0H3LzEw2Cb3D2MmrTbHAaDPB7XUjKyu85tanTlUB6A7iJCrp6ek+laSOwd8cBGGnT5533nmDvynKpKSkYO3atfjLX/6CW2+9FQqFAqtXr8bvfve7Xu+jaRoU5V829sUXX0AsFmPp0qUBjz9s2DB88cUXeO211+DxeJCfn4+bb74ZN954Y8D384HZbGZtFiZTozDWVrPZBFWABlWMbxsRYDDLyclDbW0N7G4CcjE7aEmMXjAE4EzvXXboUQnhlZKQGntPcFya3rex1Sdl1t6nAbXNt13o6F2+xBCAM633MRwZ7L5SQ/e5Uo/ZUbjFCGWrG7O5zdu3B+zDQOcX+m1jNBqQPTJKqWGV8EychLnVp/BqLttPZfXek9hdlI3ajMEXV1fvPYnDSgU0FAWN7/4+LpNBzDBYbDTiAyU7YH86vgIPfrsDOSYr2lKUmFXdgkyrA5+N7472lmlNSHG6cezh17tPcHP3AgCp7T0oUP1o3wt/2QHFk49BtGcnCHtvDUPCbAajTsE434TuZ0oB6NyYnuEEAHglJDzi3tdSbqagMngx7122QdE8tAHz5nW9vu6FF/D2unUAAGUYT7PNbXK0OYVYsWIVxo+fGPoB+mHUqDHIzc3D/uYjuHDCCkgidA6jxS/1bIBl0aLAz8BgUSgUsJmSo8mf083+eBWK0IPELb4Fx8LMPF5tigWFGazNzc3NqKwMvVk7AHg8HmzdugkymSxh5KM4KioqsHPnTnz//Racc87KeJvTC6/HA2ao+iIk2IWXwWXpBppfBELQ2AiGJEH1yfJisrNBp2ggaGrstb1vBj5XzUDn9d3OLrIQfZxuhiRBFffuhUSVsWNvjtPZta1g/z5o7vsdhIcPgXB1y3ZEOr+QfLQOzsuvAgBIP1wHz+SpoMsGdxAlH74P78TJIPR6EL7KYO+Y8SDcbkg+/xTOq9hqRdeq86F49GGQrS2gc/Mg+ulHkNpOuFZe0HUsQU01SLMJGaMCZ9bxOb8gfd+f3/ebmgbaV5nKIW6owyynE1sPHwZuvnZQu04H0tLS8eSTz+K//30Jn3zyIf55MhUXFpoxLpVfiUi5kMGSXDuOmcRodoigFtGQC8NfiO8PhgG2a6X4slkFBgSuvfYGXHTRZQkrtRAIgiAwYsQojBgxCjfe+Bts3rwBX3zxGXY37Mfuhv0oSs3H3PKZmFQ4FsIQezScNXIBtlZtw/xhs8OyrcOixQ/VO/BL/R64vG6IRCIsWrQU55yzMqkDFn2haRp8a6qtWbMm8AsiHhMYCQLMAI2L+xs/J06cjK+++hzH24QoSuteP4nEP+/KZh4/HqOXLsXaP/4RAHDbTVfCK2WvbST+ef5mE95rdkPCMMDE0b79Bx8/9XodSIEAqh7X6VRWKvYWZuGCvVV4ZxrbZyIU//xsrQ6H5fKA/vkSnR5VvveF7Z/3IJWmoNPruv7Nx/jZKBYjt8fzeDD/fB7a/M6X5g0vqU0q4Ho+8LfozlWdO73+kmiJjsvrBkEQQfX36wvXX4gLDiQy3RUYoQcwcnLY6oMWfTuvNvX3jE5Tang7B2dzTs7gsnSBOHXqJIDkCGDU1NTg5MkTYQdresKL/oPNZkNbG/vwysnJ6dK1jAXl5eX43//+N+B73nzzzYDb77//ftx///397nfTTTfhppv8s7aiidXKZkMkVQDDZytne18YlRpUTi6Ex4/6vZaXxy6qdVpIFKf3DjIF7cr044dQPE421bVOjHqjA+YSCQ4sy8CrR9QYM3EyrmYA6ccf+O/QXxOaPplSjtUXY+KD9yOT8kKhNWFKQzseWDUn8L49KO00YlIjG8X8PIBM23KDAR8UsA/0zyZU4KFvduDcg9X495zxWHmAzebYMqI7+4ykGXQqZbjl0kUQGm3Q7K3H4sVnYeHCJQAAuk8ZJxMgE4CsrYFm9QpQFZWwPvwY6Px8MCIxxJs2QP7KiwDtmxz6vheFXI4vW8SoVLuRKu5vgs1AlydB3Vg2++PNWjWcVPe1rQ9jQOdosguxtUOBnOwcXH/9zWEfJxAEQWDJkmVYu/ZV7G86guklg5ccxxqD3YQTHacwevRY5EcokyGTyWHUJYe2qNvL2imThe4ktra2AADy0sKbaMST3DR2wtDa2jzIO/vnl19+htlswtixYxNuAaiiogK7du3Chg3fJFwAY4joMdD8YkCCnB8wAXq7AQh6jB8ImS8jcqLVimH3/BaembNgfeIfoLOzwQhFkL77VkTzC+dFl0L54P0gW5oBlwuiPbtgefzpQe0S1JyCaN9eAED6DP/AvuSjdd0BjJXnQ/nXP0Py+Sdw3HQrJJ/5qi16ZIASNA06IxPml/4b8Hy8zi9Cgabxs0qFtVlZWLHiPMya1XvuRZWHV9Kf7IhEItxyyx0YPXos/v73v+GtOgJnWB04J98KYWI99gfESRH4sEGJg0YpUjUa/OHBh3lNVIkHSqUKK1degHPPPR+HDh3AZ599jJ9++gFv7f4Qnx9ej7nlMzC7bDrkYtngBwNQmVWGyqzQJDsYhkGNrh6bT/6II60nwIBBVmY2Vpy7CmeddTZSUjRhfLLEhq1yScJgDEEM2Li4v/FzwoTJIAkCx1pFWDLKf9E3Uv+cz2oWzj9vzpXh2YICTFh2DuYtPivo8dNg0CMjwPZ1k4fj0c+2IddohcRLheSfj/Utvgfyz8/W6vGi7/9D9c8D4TneBqfFAYeDDUrwNX5KyMG+5W7/vK9vDoTvn0sF7Hnt9qEABsBWtynkirCCwUqlCpmZWWg1mAZ/c5xp1duQkZ4RMBF6MLKysiASitCobYmCZdGlsZO1OT9AYlIwnDx5HACQkcGP3Fq0yMxkpfOqqk5gdg+Z3nCJKIBx8OBBPPXUU9i7dy+bnQCAJElMnjwZ9957b9Rkln7NcA9sRhha06P+iInGpk8aw94not8T9+KzIHvzdQh3/dJLjoH7wfYMYLg0QhAMINN54MjqLjEVWSgInTScGl7ibl0QDFu26szsvuYyLVtm6Exlz5V+2AZaSODwdTk4rhXhp0Ylys6YDfy0LaJzG886G7I/PoDl7Z1g9lFwC0h8OmFwp3n1vpNwC0g8WFri14hzgtWKS7Va5LhcaAPQkKbGnsIsrNp/Cq+eMRbLD9fgm9GlcAu7F2bq0lMw91QTdpbmgjI7kVWlR2FBIeaeOT/ozyLZ8A0IlwumN9/rJa3RVx6Ce+2WJctw1zdf4qMGFa4rN0HsoiBy9wnwqIQQeBjo89gJ2R6dClZv5BNfLw180NAtHRXOYvZgLF58Ft544zXsqN+TkAGMXQ37wDAMli5dHvGxJBIx3AnUiHEgPBRrZzh6olzpYzI18ObgbI6kfHPDhq8BAJWVlYO8M/bI5XIUFBTg+PGjqK+vQ3FxSbxN6kIoFIJgks9xiicEQ0MkCm4e1N/8IhBUYSEImoagphpUZbcUBNHRAdJkBFUQnhPRHwRNQ1BfC6q8uyGnoIaVjKCLioHGeiw0GgGpFKb3PwF6OP3Sd9+K6NyuVauh/NMfIPn4QxBOBxiRCK5VFwy6n+TDdWBEIlhe/LdfAEf0y8+Q/edlkE2NoAsKQReXwDNpMiSffgzHdTdB8vXncC87u9fnoEpKIfrhO3imzeglYxEKoc4vBLU1oHs8Awi9DmSf6hhHXj7kHe34RaXC2IoKTAthvnM6MHfufJSVVeAvf3kI22tr0GAX4ooSM9IkiT/Wt9gFeKsuBVqXAOPGTcAf/vB/SEtL7AzFUCAIAuPGTcC4cRPQ0dGOL774BF99+Tm+PLIRG098j9ll07Fg2GyopMFJ6wUDwzA41n4S649/h1odK0U5evRYXHDBRZg5cxYEgsToiRUN2DWOJAxggBg02hBo/FSr1agcPhJVJ4/C5QV8KscR+edcNvM+AJs2b8YTJ04AAFQD5GuG4p8/Pa0I39fJsOjKq+EZPjLo8ZPrtcUIen+/n06owCNf/ITz91dB6vGG5J97CAJ/LCoC3WfRmfPP8w0WNKeqQvbPOVmpnmh0LigsHTCbzeivLjrU8bPQ7YaQ7LZB5BzYP+fLNwcAoU9WcCDps1BRKNjnoMOdHEoBPXF4nFCown+Ol5aWYefOHXC4vJBJEvMZ7XR7YbC5MGXkhLD2FwiEyMsvQF17A289FmJFXQdb9VRUFLhyaiAYhsHJk8ehVqvDqtCJJVyAhQu4RErYT5sDBw7giiuuwNGjR7F69Wr8/ve/x+9//3usXr0aR48exRVXXIGDBw/yYuTpBKf5zCSRXjYtYCcWXPQ/EPbbfgtGroDqrttBdHQvoHGZ33SrF3nbWPksw3B2MZn7d9d7t7ERZMOI8Bzggcj7uce5GAZ5P1tACwAj10zM9zAkaAZaK/uzGSYSQ/LtVxGd16lU4SeVCuc2t+OCfVXYMrwIesXgn++CfVXYUZqL9Rnp2KTR9Ppb62tIv0yr73r/Z+MrMKWhHZftOoYMm9NvEvbZ+HIIaQZ3bdoNxpdi1yXf4fWCCKKZatdCR48sUMJs8ptEuufMAyMUYuaB/Zg+fSZOWsTYo5eg8Jh/tkV7iQyaTjfSm51+rym9XgjC1P7d2i5Hq0OIc85ZhQkTohNcyMrKxqRJU1CtrUOHRRuVc4QLwzD4pX4vpFIp5s6NfNFGKBSBCicDNg5QFHvPhNOAWuuTFMlM4XchZO3atQH/+ISzWasN717U63XYuXMHMjMzkZqayqdpvMEFVjZs+CbOlvRGIpGAoJOjR0yiQNDeoIOM/c0vOMjaGsj+/S8AgNtXVSh75V+93iN/+QX29cWRyekFQvrqv7v/wTCQvfpvNpjgy0KiCYKdY/SQOiUb6iOeXzDp6XAvXAzph+9D8tE6uBcsAhNEmbnko3XwzDgDrlUXwL1iVa8/h695oeTjD7ve71p5AUR7dkH6zpsgdTq4Vp3f63iuleezPav+8aT/yaI0v5D979Ve22U9vwMf7XPnYbzdjplmM9zu3hJJhMkIhCmB8WuioKAQ//znK1i27Bw02UV47mQajpoS2z/ZpZPgxao0aF0CXHrplXjiiX/8qoIXfcnKysZ1192Mt97+EDfddBtUmhRsPvkjHv72aXx+eD3sPCzaVXXW4JnvXsHLP72BWl0DzjhjDp577iU888yLmD37zF918AJgAxiB5IgSHWaQCgyg//Fz4sTJoGigo4pJCv+8ul0EpVKJiorKkMZPrm9a36oQvUKGzcOLsHrvyZD9870qJTakpvbrn5+/v6rr/aH4530RUDQUvgV/s7n/LPtQxk9aIMCFWm1XIAFATP1zrhAmGAnRYOGy+m3u/tepEhW72w6VSj34G/uBzz4Y0fJVI2ngzVFSUgqr044OU2KttwxGdWsdAISVdNfW1gqz2dxV3ZDIiMVipKSk4MSJ4xH17eIIe8bxzDPPIDs7G++8847fhbv99ttx6aWX4plnnsHrrwfW7BsiME6fJjJD8lOBEQuNTcYXwHA6/QcxDrq0DOaXX4X6xquRNnsKnBddCmrEKIzWduKv9fVYctAI7RRWesyWJ0b7JAVyd1ohdNIwlUqhanQhe68NulFymMr5nSBRQgKpJx0Ytq4TlkIJ0k44kHbcgcb5KfAq2UFfP0KG/G1mjH6tHa0ZGtzYZsbS//sDqJIyCI8eDvvcHo8bX6al4Wlf882/LZ026D6TGtpRpjXh1TPGAB3+A3ynWIzjMhnO1unwuG/bZ+Mr8OevtuPPX26HXi7BD8N6Swb9XJ6PtTNG4c4tezG2oR177QyG/7wditZWSD7/FNZHn4B7xaqBP8u8hWDEYqRccTEcV10DwmaD7K3/gcnIBNq79TGZrCw4brgF8peex1PzFuAVkwkV203ItdvhlpC9koXqxiqR2ejEhI06tAyTY6UTIL0MKhwOLDKZcPaoUTCGuBDd4RRgS7sCmZmZvEtH9WXp0uXYs2cXdtbvxTljlkT1XKFQra1Dp1WHpUuXd5XWRoJAIADDICkyH2jfwBmOBBLXVE6jCL0BeLyRS2SQiMRd2WahsmnTBtA0nZDVFxxFRUWQSqXYuPFbXHPNDWEFqaKBXK4ASflrBA/RPwTlDrpPTX/zC7jdEO36BZIvPoXz4ssBANSYsXBefBlkb74OwmyCZ+YsiPbtgfT9d+Badg48PJQ294SRSiHesgnkbTfBM2kKxFs2QrJxPWx33gNpIZtx9aNajSs7O5FyyflwnX8hSG0nZK/9J+L5BQA4L7wUKdddCQCwP/DHQd8v3LMLwtoaWK8L3OuNzs2Dd9wESD9aB8cdbL8518rzoPjzg1D8+Y+gU1Ph7hMU95wxG46rroX8ub9DcPggPPMWgBGKIKitjur8Qn3lxXDPXwThkcMQb9kIOj29l3RY1aoL4PzgPTxXU4Mj774FqZcCYbdDeOwIJF98Bt2ew0EFfH7tSCQS/O5392H06LF4/p9/x/9qUrAg24YluXaQCTTce2jg00YldullUClV+L8HHsK0aTPibVbMkMvluOCCi7BixSps2PAN3n33TWw68QO21+7G2aMWYlbZNJAh9mLqtOrwycGvcbiVzZo888z5uPzyq7u01U8XvF4vQPC/OB91CAFr+wD0N36uaGzA6Pp6LD1oRGcS+OcPH6zFiclToXrmqZDGz65eCwEeZh9MHo7X3lwPIDT//IPiwJWcnWIxjinkuGDvSTw/n02eC8U/H9OixXeVhfCSJEq1Jpx7sBp/nTgC2zGwCkYo42fzBRdh4bp3kbPXC9IkhErvQXqza0D//L50BgelcshoOiL/HIhOnZNGwyZdWV2J3wuiJx7KC6fX1WV/OJSUsEGBNoMNZTmJ6bu2RdD/gmPYsEp8//0WnGyuSRqVBIZhUNVSg9zcPCiVoUtnHfdJ/yVDAANg7Tx16hRaWprClsziCNu7P3DgAG699daAFy0jIwMXXXQR/vWvfwXYc4iBcDrZTBmuqiEZYLoqMAbO8nGftRyG77ZD9uI/Ifn2a5D/exUKsRgdDIM3K7Mx/NzubMuqCzLgTBMhe68V6UfscCsFaJyXgoZFGv4/AAkcviYbFZ/qUPq1AZSEQMPCFDQs7D6XqUKGqgvSUfC9Cec2dKBRJIbu//4CtV4f0QIDwzD4Xq2GUSQEISCxflTJoPtcsJdt2LNhVAnQcTLge75PScEtbW0Y1aLF0bwMtGqU2FWcg+l1bXhz2kh4A+h633vBPBwoyMKanw7htjY9CK0WwvJhcK2+GN4gnECqYhjMr74JxeN/gfLhP4LOyoZjzXWgMzKg/u1ver3X9qdHwMhkkL+1FncaDdgjFuPRMUX4vwP1oHuU8dJCEruXZaD0oAXZtQ7cYW2BjSRRL5Xi5ZycrobtwcIwwMeNSlAMcNttd/GyeD8QZ5wxG0qlCjsb9mH56EUhO4/R4pd6Vt98yZJlPB0xgVYxgiScQIvFYoZUJIFExG8GaiwahQGAWq4aMEurPxiGwYYN30AgEKCsLPwMmWgjEAhQXl6OI0eOYPfunZgx44x4mwQAUCqVICgPQFMAGdoz67SE8oCgqa6y/2AINL9gxBJQo0bD+vCjcF5xddd7Lc+8AKq4BNL33oHk6y9AZ2XD/tu7YbvnAf4/CymA6b2Pobrvd1A+8hAYhRK2ex6A/Z4HoPD11NmlUsHy7IuQ/fMfUD70AKiiYlj/9AgEDfURBzDcS5exzatpBq4g5AIlH60DALgGGBvcS86C4qnHIThyGNToMaDz8uGdOh2inTvguGINEED6y/r0s/COnwDpG69D8dgjYARC0IVFUZ1fSN9aC/EP38EzZRpM6z6FZsUSMJJuvRInSeD6igpc196OVdXVUP7xfjAqFaiyCtju+0NXY/YhWJYsWYZhwyrxyMN/xJaWZjTZRbisxByV5tuhYnCTeLNWjSa7CJWVI/DQQ48gOzv5elXxgVgsxjnnrMSSJWfh888/xdtv/w8f7P8Cv9TvxeVTViNXnTXoMWiGxpaT2/D10c3w0l5MmDAZN954CyoqEjeBIZq4XC4w8tAXmOINQwrhcbtB0/SASTuBxs/hYjFcDIO1w3Iw4tzuOW8i+ueb52ehYrsJF27fBrS2hDR+cusugfpirR9VAoNMApJhQvLPv0vV9Pue71M1+E1TS1j++VU7juAP3/wCiiTQmKrCh5MqsTsnEzC1DRjACGX8rL35Vnzz/RZcYtBCsYuGMUuMvUvSMfVrbb/++YQTVizVGSLyzzmiMZpwfXksLuvAb0wwrD57NRpN2MfgggJ8VGD056uqZJGtWbYa2Hs3kgqMYcNYSdjjTVWYM3pgKdlEocOkhd5qxNxJ4fXmOnGCTSzIyhp8TE8EuADGiRPH4xfAIEkSFNV/WeJgg+UQgbHb7WyZahItcjBBSEhxUGUVsP79n7223XPJKgg9nXhI2KMJuIBA4yINGgeZEO1+IPAPYOKECX7b2qRibPtbScD3u9JFOHLdwM5O+1QV2qeq8NxmJWp0Ynx97Y2wkyTs9/2h1/s6O8wB99fv8Z9IMQzDlviSBL4dWwZXAH3Lvjy4ag4e9DUS68/if+fk4KWSQrTldTf1WXHr+f28u5u3po/Cu6PLkPPZXixduhx33+2/oBPoc3C4ly6De6n/wkfnpVf03iAQwP7AH2F/4I+gKArP3PkbNB85BLGLhkvR+96nRCROTU7BqckpeORQekQ6mweMEtRYxZg1aw5mzpwV9nGCRSyWYP78hfjii09xoqMaI7OHDb5TlHF5XdjXfBi5uXkYM2YcL8dkmOSQjwK6fZRwbLbbbVBIoxv0iiYKiRxGe+gT+Kqqk2hoqENZWVnC62wOGzYMR44cwaZN6xMmgKFWs1lPpNcJWqyIszWJD+llqzlDbQYbaH4REKEQdl8QYSD6G+sCjfF0UXG/Yz9dUgrTuk/9tgt6OPjOy66E87Ir/d4TyfwCAECSgFDIBiQCNPfsi+2xp2B77KkB32O/9/ew3/v7XtuMX24Y9NjOK6+G88qrB3wP3/MLDsJkBKnXg87L69rm8XjgEAjwQl4e6s5ZhTvuuGvQz3C6U1pajhde/A+eeOKv2LFjO/55Mg1XlxqRIxtYpiaa1FpFeKM2BTYvgWXLzsGtt94JsTixZa5igVgswerVF2PRoqX4z3/+hY0bv8XTW17EhRPOxYySyf3uZ3Fa8b+d76OqswZpaem49dbfYvbsMxO+ujZaeDweeL0eMGRiVHSGAuOT9nI6nYMmbAUaP/98wxp0tNTgCYGpO00pCv65K00UkX++MTcN94zMw5NPPttLFjiY8dPtduPs0aPRuXiM32s0QcBLktgwqjgk/zzno10QOAP3cHi5IB9//u2qXtuC9c/fmj7Kb7viZBs0YO9TPsZPkVSKl3JzcXhcClYUsIveQhc9oH/+iDgy37wnXpq908LpU9gfIpEIKeoUmByWwd+cQBgd7P2anh5+g+bCwiIIBAJeAhjRotVgA0mSKCwsGvzN/TB8+EiQJInD9Sd4tCy6cLaOHDk6rP1PnDgGkiSRlpbGp1lRgyt6OH78KBYsWBzRscJ+2kycOBFvv/02mpub/V5raWnBO++8g0mTEq9xbaJjs1nBCCUBMwESFVrADjJWa3iRbY0mDVZX8gS7LC4CKSkpvAToBAIB5ptMSHd5sG7y8MF3iAU+iR1BmNkTQdGjWkcgEODWW3+LyzvZ/gK67Og4nm4a+KpZCbFIhJtuui0q5wgEV+Wws35fzM45EAeaj8LtdWPx4mW8OaRerxckSSSFg0v6bKSo0AMYLpcLUh4n1bFGKpZ0Z5uFwHffbQIAVFQM3sAw3qSnpyM1NRU7dvw0YEZaLOEW4klP/zKLQ3RDeth7NCUlMcvdkwnxN1+C1GrhuujSeJsSOwJUA3M9T9xnzOna1rPvBZ962792FAol/vznx3DllddA7yLxYlUqjsWpL8ZunQT/PqWBixHit7+9B7/73X1DwYs+aDQa3HvvH/DII3+DTC7HO3s+xueH1wfUoe6waPH3715GVWcN5syZh//85w3MmTMvKeZ20cJqZRc9aeHgAeBEgxZy/nl4C7dlZeVweAgY7Yn9/beYWH+1rCx0CRqvlw00MAEkpJYdqUWmzRGWfx6L3nZAt918jWFS32PBw3Rfj6Kj7PqOPif6z1aPzzXj+zmenpEJozP0CvR4YnKyAQyuAXI4iEQi5OcXotVg56X3AN8wDIM2gw0FBYURfedyuRylpWU42ngCHi9/DeCjycE6VgJq1Cj/4OlgUBSFU6dOIjU1NWHkkgcjPT0dJEmiqiqwekwohP2J77rrLlx++eVYtmwZFi9ejJKSEgBAbW0tNm/eDIFAgLvvvjtiA083TCZTV0AgWWBErL1mc+DMwMFQqVSo9RBgmOSI2zjcBDRZkUsLCPfsQvrunbiruRlHUlT4uTyfB+sih6DDb3IcLJLPPob0vbfhXrgEjEKBqTt/xpz2dmxXqbBNrMZEuHg/508dMpg8JC677FLk5OTyfvz+qKwcgYKCIhxqOQqX1wWJML6/710N+wEACxdGFv3uCUVREPD04+1vgn/bzdfzcnyBL/DoDWOC4/V6IRMmoQ6yD6FAOGDlZCAYhsF3322BRCJBfn5iPKMGgiAIlJWVYc+ePfj5521YuDD+vWe48m/SbQcUQ5r6gyHwNZ2NRPf3dEe4ZxeER49A/o8n4Rk7Hp4zZsfbpJjRd34h2vkzpB9/CPe8BfBO75ar6hnA6NvEe4iBIUkSV155DUpKSvHkE3/F/2pSsLLAgjMyYxOkZRjg21YFtrbLoVKp8H//9yjGjZsQk3MnKzNmnIEXXvwP/vjgfdh04geQBIlzRnfPAw12I1748VUYHWZcc80NuOSSK07rwAWHycQuetKiJAxgiNj5qslkRFZWdsj75+Wxcz6djUSqIn5VVoOhs5JQKpVd1a6h0LWo2+Nen9TQjlGtOty1aTcO5mckjH8ekK6qcn4Ol/P9Vvynqgo1ZjkKrG5oOtzIrXFAmyeBKTv6/quTYn00pTJ4CdFgyM7ORk3NKTg8TsiS5LestxkBAFlZkckhlpWVo6GhDkabC6nKxPrsZrsbdpc3IvkojnHjJqK6+hSONVVhXIl/tVKisa/6EOQyeVi9JRsbG+ByuVBcXBwFy6KDQCBAamoqTp06ya4bRZAoHfYK5ahRo/DBBx/gmWeewZYtW7r6H8hkMsyZMwd33nlnUmRrJhI0TcNoNIBWJIeWGQflawhuMOjC2l8qlYFhADcFSJIgiOjykpDJIl/ElP3vVWg+fB/HxGI8MH4kD5bxA+Fl0x+kQchNhAs1ajQgEEL+4rMgLBbQmVnQXbEGvz96CMI2D8aluiDg0W9yeAls7VBArVbjwgtjm4lKEAQWLlyMtWtfxcGWY5haNCGm5++J2WnByc5qjB49Frm5eYPvECRutxtCQXJUUQkFXLZS6AEMmqYTpo9JOJAEAZoOrfKkquoEtNpOVFZWRrcqi0dKS0uxZ88ebN+eGAGM1FS2vJf0JEZFSKLDXSfuug0ROrL/vQrJh+/DO2YcLP98Kd7mxJRA8wv7jbfA9sBDvd7XcwwIZzwYApgzZx6ys3Pxpz/dj0+bAIuXxJIce1STkSgG+LiBbdZdUFCIv/71ya6F1iEGJicnF0///Xncddet2HD8OxRq8jA+fzQomsJrO96F0WHGTTfdhgsuuCjepiYMej3r29Li5JMP5WzW6/Vh7c8FPQx2EkDiBjAMDhK5BaEHaPrj6u2HsXrfSRzOy8AdFy8I6xj99QuANLF7nAonTQZFEDirQQ9lHQW3VID6UQpUT4pNTyg7xQ4eKhW/5+N6IultBuRrYpfEGAl6uwEAIu7nVFpahu++24xWgy3hAhictBXXbDwSJkyYiE8++QC7qw4kfABDa9ajrqMR06bNgEAQ+uJndXUVgMiqc+JBeno6dDodmpubUFQUfvAlouXiiooKvPjii6BpumtwTEtLG+p9ESYmkwkURYFKMo1sRigBQwqh1WrD2p8rGfNSBCQ8NAPsN4P7Jn996aqLMlEV4jzdQwEiHpr4Wp5/GcZnX8Tly+bDyUNAhC8ILztJlUqjZ5N33ASYPvrcb/uCfz2HTz/9CAcMEkxK468KY7tWBidF4KpLroBCEfvf17x5C7F27avY23gwrgGM/U2HwTAM5s9fyOtx3W4XbwGMaDUJ4+DsDCfjliRJUCEGABIJmmFCHp937NgOAEmV5aHRaJCSkoLdu3+Bx+OBKEBT4ViSmspWEgg8oct3nY6QbjaAkewVGJbnX4bl+ZdPu3PHm/7mF37v61GFF05F3hAslZXD8eyzL+H3D9yFzS3NsHtJrCywIoAiS8R4aeDtOjWOmCQYMWIk/vKXJ0LulXO6o9Fo8PDDj+M3t1yHN3Z9gBuEEuxrOoR6QxMWLVo6FLzog1bLyttSEn4zwmMBJWZt7uzsCGt/bhHZ7o59JU6w/jlNs8oI4VRfAOhePOxRwnDHJQtxxyX8+klRo0s1gacEo0lTcPe48VAzJvxuhIGfY4aAxcP6KHzP/7ikvU6bLmkCGJ1WNniamxuZvV2NvPU2jCpMrCrwFj0bwAhH/q0v48dPgkAgwK6q/bh2cWLLpu46ycqKT548Laz9a2urAbABgWSC69dRW1sdUQCDlxUnkiSRkZGBjIyMoeBFBHR2tgMAKIkqzpaECEGAkijQ0dEe1u6cVFEYkvQxh2HYuQJfmcgCgQAymQykx8vL8fiAdLO2KBSxn6yvXn0JhAIBtrbLeSuH9dDAtk5WZuDss8/l56Ahkp9fgGHDhuN4B1u+Gi/2NR8GSZCYM2cer8d1u1wQC5Pj2S/yTfLd7tADZCKRCF4qeRe6vJQ3ZGm4ffv2gCRJ5OXxV7ETCwoKCuBwOHDy5PF4m9JdgeEeqsAIhu4KjOQOYAzGkDxLfPF6vQH/f4jQycnJxTPPvoSKimH4WSvDp01Kbl2NN7w08JYveDF58lQ88cSzQ8GLMCksLMLFl1wOD+XBv7a9jp/rdkOhUODmm2+Pt2kJR0cHu/jPBQOSCS7oEm4Ag0v4cnoSd6xy+QpD5PLwktO4OTGRDIsQAYiG7HN6RibMnvhUXJt8AQy+M8vz8wsAdAcFkoFOqw5paemQySKr/uLkmRKxkTefFRhyuRxjxozD0caTMFoTu9/JjhN7AABTpoQbwKgBkHx+EhfAqKmpjug4QT/tXnjhBRAEgVtuuQUkSeKFF14YdB+CIHDrrbdGZOCvEq8Xwh0/+232HNiLCVYrbFYLnC1VvV6rTs2BTtY7sCGivJjYXtvvaVItZpDe3oulVoEApwJk+1fqW6BxhvZgO5RZBIev/wUlUcNgaISnvQ2y2v5tCkSa0Rhwu7LRBZIK3gNi+02p/TK4c9xu5LjdGCtmoK4LbvHYkSGCR9l78CYoBqoGFyZYrajs7Aj4HfrZpFKBGu3fnEdw8gQIX9XSDC8FbacJhtrWAY91KD8DdnHvTGKV14vKfpqn024h9AGO2a6Soy7DP1NlQmM7JF4akmY9VFYrSpubBv6MBNFLT5qDbG4C2dg44GfpC1VWDiYrC1lZ2Zi/YDE2bvwWtWYhJvW5J8dabHBQgSfSMgEDpd4Da1rva7TfIEGW1YXVU8dDdeBA0DZ5x44D+lRrECYjBMeOBX0MAKCzs0GXlmH27DNRVXUCR1pPYErReCibq0B6B64CGGsx4Xf33tX1b/ukSV3/f9uN7LNVbNJCahw8eGhzO6CuO4LzyiuQ5vbA75fl9UK4e1fQnwsAGIUC1NhxcLpckPWowJC36yGyhhaosRb4T1aVFIUKnzyh3CNESnXLoMdxq+VwZGr8tqsaOkB6vKBtTkywWpF18uSgv2HvjJm9/i2RSCA1dEJwOLTrROcWg0nvIw1IURAc24sxJiPMjsC/YTWFXudipDLQFf7PE6KxGqRpcImA0vYWZHpdEO74GdSYMWCUvccUwmyC4OjRrn97PG5Idu/EmWo1ihoaAh7TrlLBlOUve5jR2AhRgCqXcWYz7rnnnoDHuuqVV/y2yY1GpOhCczhM6enIy8vDkSNHcODAPowePRagaQh3/sK+YcFsQMGTHEQ/43lP8vRaTLBa4Wqvh1WSGdZ4HgizWIbjGQV+2wcazwPNCwDguFyOvntonFZU6gcel/rSptCgISXTb/vEthqI6OAkKJTtDRDbbEhL888sIpsaQTY1hWQTVV4BJrOPTR4PhHt2h3ScYMbzYPGOHecn50YYDRAcDy3gxo0vfRHu2wO4Qqgyi8J43otwrrdSCWrMWL/t4V7vvuO5wGLGBN/8adD5jo9+r/f+vYAztKB43/EFAMiWZpD9PGv7gyotA5PdRz4lgvG8L4KqkyCCeAZnAHj2wsvw8kv/xOZ2CiSUWFlg7ZKTErppKA29EwBGmW3IdAmR6fFC0+5//VwyARxqIWgGeKdOjaMmCaZMmYZHz78IogP7Q/p8Aa93awvI+vqQjkOXloLuK+lBURDu2hnScaCQwzt2vN9mwakqECFWtAcznvfl8uJSFJ65AC4Xe90rh49AqrYDlNpfukV4cD9gD62C0Dt9hl9jQ7KtFWRdXUjHoUtKQPftW8eN5zEYy+V7d2OC1QqDoRO0o/fYGe5Y3nccjpZvTvsCGNaG+qCebz2hc3J6JBh2f4/h+uZ94XxzuTsy35z2gPXLO9qD/ow9x3KJhL1WBEVjWLseafbQnuOx8s37Q9bSCYXVipxTpyAUinkZy8+gaRw32gArBfRdC6EZpHT2nluE45sDgMLogcjV+7Pla51IFQj79dfD9c2H69h5uLLuMNTSDLhVaXCm+Vc2BOub293dz8P9Afp1BOub98SRlguPil3g9VAe6OwGjC8dG/Jvt+9YnpWVDYVCAUFTJ1KqQ6tUshZkgJL0Vh3p6ZsDwfnn/fnmivp2TPdQKKirBRHkWDzQWL4yPROExYKq9e9ixvDJAx4nXr65h/LCsed7LNGkoLS5GWhu7j59kGO5+uB+zKQoFPfzmw7HN+fmAn05EUBSPlzfnOsJ2dzs8+PC9M1DDmDccMMNEIvFQwGMCCCsVqSeu9Rv+zzfH06d8nvt5qU34NPK6b22pTqt+PyjJ0I6926FAjcMG+a3/cHtH2FpbfCLuwAw64q/ojqVncR7pWpIANg2b0DenbeFdJzZkybjowDbR77ZAYk5eM1NSkQAk/1/rOfo9bi1rY39R/9z+V6cuDgDnRN7D0gCB43xr7ThdYD9jr7+atDjeKbNgPHLDX7bFY89AsnXXwAA/sFtPDSwcXPuvgQncnprgo+12vBygPuli6P+iyH/mTUWD66a47f9v29uQJHB0r3hkT8NaA8jFkPb5O9kST58H8pHHx5w376Y//kSXJdcDgA499zzsHHjt9jfLsFNP/UezKZiYKfOqBdh1zm974EdWhnuaGvGopdeAF4a/LnFod+63W+xSrh/HzQXrgz6GADguOZ6WJ/4B2bNmoPXX/83DrYcxZSi8Rix7gnIBlkcfBEArrkGAMAIBDi0d6/fezIPfY+y9a8FZcsZAHCqCpal38J5Re9AH+GwB3wuDYRnwkQYN3wPl8uJFGX35LT0m53I3nsypGPtvPcSv23D7Xb8t7pHlP7I4It7zWeMwYlL/DVrR73xLRQdRgDAIoD9Db/x+oDH6uww9/q3TCbDGa3NkN9z4aB29MR5+6PwnH15740eF+T3XIjnBtu5x7mo8tGwv+j/3JG88zxEWz8d1I7HuP85dykM67fCO7H35E5w9KjfPfAq9z+7Ai+GHZ05E1svv9xv++K1a5HGPXd7cD7QdU/3RTDD3+mq2L8fcz78MOD7++P7Cy+EdupUAGwPDwCAx9P92aqrgbLIs32A/sfznqQC7LiBU8CuzbyN59vzK3H++ff5bQ9nPF81YgRq+vRnnNJag7e+/GdIx3l5wmL8ec7Ffttf/fol5NmClyNwkCSMAbKrpeveheJvfw3JJvOL/4brwt7PF8JkCv15F8R4Hiz6H36Bs49TKNy7B5pLzg/pOPbrb4Ltsaf8tquvXwNBY/AL4dEazzkIqyX06z15KozfbPbbrnjiUUi++DSkYwUazzPq6vA6N386dQr45utBj8ON531R33gNBHXBByAZgQDaVv/fg+TjD6F85KEAe/SP5R/P8zqe90X+9OOQfhJolu5PKoC/AHAuWIhNWh1SxBTmZ7MLHSqdB1O+7X2P9ZrTHfE/XlOlHEfPSMVnTUocNkkwadIU/PnPjyLtzJkQVg8w9w1A3/EcACSffgzl//0hpONYnnoWzjXX9t7odIZ+vceOh3Hzj37b5X9/AtKP1oV0rGDH876s7vNvx+VXwfqM/zxZdeuNEJ4ILbja2aIH+mSFS774FMoH7w/pOJbHn4bzuht7b+TG8xiM5Tf5/pLRN+ckqVOPH0Pqi6GN5fabbgVzITuWE0R3wCLRfHORk2af46dOAR8G97vpOZZzcsmEl8YfNu7E2YdDSySJuW/eH/f9DgA/Yzn3C/0pLQ320b0DawIPg6lfD/AcD0Ag3xwAyveZkd0neNV1rH6eXeH65l3z8FOngG1fo2Xa2ahe8Ru/9wXtm/vwApg6YYLfe0LxzTlOrrwD7VPYz91h1YFhGFTk5UU8lhMEgdLSclzw1eeYvHN/SMfaee8lsBb2/u78fHNgUP88kG/upWjcdeg4SlwuYOWyoG0aaCw/D8B5AHDqb4MeJ56+eVdnuj7fbbBj+dPc/xw6FPD4Yfnm/TAnQDVUuL65be5ciMViNHL+SZi+edABjON9ssL6/nuI0xtKykZ0jYYwGoX5tIKG1BSGAIDhw0eivLwCJ3iQfulwCtBoFyE1LR3op9InVhQVFSM/vwDHO6rgpUOXq6Aoqld1kSpB9HgZhoHL5YJIIxn8zUmOUqmCJ4klpE4n5HI55HI5qkNc5BoiceBTEiERsdkSr5z/dILhS6dyCD9+85vf4uC/X8Q3LUCqmMaE1PB7mv3QIcPPWhkqKobhT3/6K8TiX/9cY4gheIEUgBZJYe2nGmAwPB52vstTi7uoICQje45zMlmJJOWcKFi8JOIjJDVEq4mt3igs5Kf/YFlZOfylF+JLh9GOyngbMURMIQgCKpUKHR3+QZRQSOAhaYhkgpKy5aH6EMv6AXTJKCTyBGmI2LJgwWKEUKHcL/sNrKObnZU9yDtjw/TpZ8DpcaFGG5pERCLj8XjAMAxESdIDIxLCbRI4RHxQq9Xo6GgHRQWfLThEYnA69IewWILIqhxiiCREo9Hgsceehlwux4cNarQ7wlsGM3lIfN2iREZGBv761ychl/MkFzTEEKcJtFAKhyO8/lvcfhJhgq189kAU4Qq7SsXKtZCuoQBGX0zuofBFvGg2sVUgfPSGAICysgpejsMnXAPvIU4vFAoFbDZbRElcYae3jRw5Ek8++SRWrFgR8PWvv/4ad999N46FqBd/OsAolTB8vt5v+9/+9gja9UboR5/j9xpXDtoTg1SJcy/ovxQ39chXAXtgBOLRMy7Ai5POGsz0XrQouxvHcI3CjqakYFqAzzYQW997Azh6BII+WRTHrswKXWdzn//2L9PSsFuphFzM4Ka5wf1YHBn+Wo2UjMTBm3Pw4lYlcvJLcOed9w5ukypwQ3bbH/4E+82s1NamTd/i66+/gGlyCTzp/Tdwb0zzf+2QUoFrKgIPSrRYCP28kX7b21WBHcDrr1wCiZeG5pdTkNq9ePKJZwAMsIjUzwKTa/XF8Ew/o//9AkCVlff695lnLsDr//4XHh5fjOX53d/Z69UpA+psXjmi94LQEaMEYrEYgkefhCHEByVVUuq3zTthYsDf7kDQPbSpp0yZho8/Xofj7VU4ftH9g+ps/nv7m710NgPROfZMWApHDPieRkMLPjrwJebNW4Bzz70AVAANb0YmD/mzMQpFVzNsUY8IZO2yaWia46+lPRCOLI3fthNyedf9LZcIce0if43JvrjVge/vo1edxfbAYBj86+sDqKwcjptvviMkG9PS0rBeo8HZV92Hooz8oPejcwNk0IgksD/9AX6/9tH+dTZlSjy+5sGufzNSf41kAHBddrt/GWwftGY9/u+dpzBt2gxccsmVoIb5571Qo0b1ugfefnst9uzZiYWLFkEeQJ8ZYHU2A7FxzZqAOpsbNmzoV2czUJjh1IQJ6CwsDPj+/jCls70TFAoFaJqGwaBHRlp612dTZ+fwllXW33jel3888wQaW1qgH7MyrPE8EGZx4O9koPE80LwAANrFYr9tu3PLQrapTaEJuP265bcE3QMj7dCnKC4qRiAxSudFl8J9hr/MwkBQ5f5jJJOSEvrzLojxPGibCotgb+6tXeudNDmi8aUn5v+uDbkHRiD4GM8BgFGqQr/eAXSlAcB2/4Ow33BLaDYFGM/bCgq7xpeysnLcdttdfu/pS7/X+9+vh9wDIxCu81fDE2JTRz7H80DY7/k9HNfcGPC1/vCWVaBIqcS99z6Ihx9+EG/WpeDuUg92Le8tRfBBvRKdLiEyJV5cWNx7HHR4CfyrNR0CgQAPPfTXXj1xLC+/CjiC080fCNeq8+GZOLBOdl/oUv97CVJpyNe7P61n+933w7HmupAOFcx4HgxMln//IgCwvPjvkHtgIIC/6VqxCp6xE0I6DF1S4r9RJILh8/UxGcsfeuh+mCgSpuGL/V4LdyzvOw5HyzcHAFogxh6xKPSxJScH1uOstpNU1O2LJ5pvTstJ3DyiHJk5RbjrrgeCs6nHWJ7ik6oknR48dtZ0vDx3QlDH4IiVb94f6j21EOusePLJZ7p6YAQilLHcbDbiz39+EAo1gZXoHfyiRITfczxU35yjeqIaDaO6x/n9egm2a2W45pobMLaf50QkvvkPP2zBp59+hOWjFqGkfErA98TSN++Lo0dPjmYTm6FeNGIkL2N5eXkF/p6Tg+NTRmDOaP/eef3aNIhvDgTnnwfyzZv1VvyhuBj33X4XiosDjKsh0HMsb29vxRNP/BUTysbghiX9+8bx8M2PNVXhhS9fw5w583Deef5y1MGM5Xv27MTbb6/FuHHjUFwcuEInHN+8v/6UVID+lJH45lwiil6vgyK/ICzfPOwAxmCl1xRFnRYZdGEhFAZsQPMjw8Ccngdtnr8OZiA8AiF2DvDerAY1BJ7gvuKTaXlBva8/uABGk90e8LMNRNvnHwMA+iZwWwvDKBMPMElqE4vRJhZDJaVhLgk/E5cREDCXSHE4RQF9WmrIn7MnVOXw7uM6bNj/w1YY1GrYS/0nwwNhEQoDNo8CAEoqQlupf4Oq/thfyDrmuXuaUDIsD94ZoS1acND5BaDzgx8cA5GVlY3Csgp8VX8KUzO9EPnujUMdCli9gTP9lUIa1rRuh8DoJtHqFGL69CkQjh0HPnJrmBRNRN/7uHHjIRaLcbzjFKxjB9e0PHQoBRbXwI9zd0oG3Cn++oQ9+cHSjP1KJS46/yJ4+1sc6ee5NBgeA6vjLSC7vxd7dhrAQ9GLVSDour9VMhFM5eE/pyxF3RqeB9U18Kalh/x509Mz0CkWoy4rD/mjpoZtCwBAIAA1ZioOp2ig7+crTlNqQI0Z/DxMYTmoQv9Fw5401h3FfqUSI8dP7PdzM+qUXq8dX/8l9iuVGFdZCXGABe6B0PYzsTmoVsPhCDzxlwWYM9g1Gth9Tb9CRSRinV2XywmQZPdnC9CQLGyC/N20lJbhgEGP1pwygPT/wgcbz0NhoPE8lHmBUarkzaZ9OUFmkVFe5FbLIOlHB5UuKARdENqkOSAiUUTP8p70HM9Dwd3DiaBpGqQmsnlFT/pq6IYLH+M5gIS43n3xKpVd4wudkxuRfd4Jk3ixic7LB50XfHC8X8IczwNBDasEwnwMzJo1BxdccBE++mgdvtSqsKKg90LlUYMCzQ4R8mUeGLO75RkZBnirTo0TAgluufFWjBw5qtd+3vETwzOoD3RuHujcyPwfAIBAwN/1rhgGVET+3O07nkeCd9wEXo5D5+T6N+QOB248j8FYfkClgoGR8OabA8GPw5H65gAAgoApzPvTvJNtHqySdq/5JKJvXp0hR3WYz7zUVLZ/hcDhQVV22iDvDo5o+Ob9kXW0HZpsJTD7zAH93FDGchnDoO6/L0Hg0PkFMBiSgDG79z0Qim/eE5umd0Bqu0OF/UopUlesgjeE50SwvrlSLsP+TeuRIRMjJ0ADbwCw5g/+O+fLN+8PhmHQZGxBXl4+FBGuO3CUlJShQS7HNqEE4yLwpYHevjkQvn/erLOiVqlE+srz4Y3wWd5zLE8HYPr6c7zT2IiLK0ZDIQ2hcjPKvvnHx3Zgv1KJq9dcC++owZMyAf+xvLatBfuVSmSUlUEcKMA/AAP55hc+F7jzhyxAAmMkvrlEwj4/LBZz2L55RJof/QUorFYrtm3bhtTU1ICvD+GPx+OBw2EHLeJxMhZDOLstFv/GOoPh9bJOC5kk8S4B2a0Lyge5vgeu0Bp5NlmkEG4vSJcHubk8ONARMnXqNHhoAg02/4ybYDhlYfebMiXChWYeEYslGD16LJqNrYNmb/BJVWcNhEIhxowJrSoiGCiKnTILkuUHDEBIkmH9hrOy2ABjm7GTb5OiTpuBtTkrBDk1r5f9bkkyOeXBBL6sRrc7/n1LlEqfTMEgmV2nO1xWqkKRGD1+ogknnwkM9WOIB4IeWc8Cwa+730o8ufrqG1BQUIhtnXI02IK7zkdMYhwySjBu3ASsXBlaY/shhuATgUAAMP1nwCc6BEOD7KfCYzAMvr6WKklij08qKQOjUR/WOJqeng6SJCGwR15BFw8EdjeysvwbZEcCQRCoqBgOnUsAhzd2vl2LXQilUons7NCSOYOloqISBEGg0dASlePzhcFhgtVlw7AA2fjhIpFIUFhYhGa9LSHmmwzDoEVvQ0FBIaR8BqJ9zJ+/CG6vBz8c/pn3Y4eLy+PC90d+RnZ2DkaOHB32cbieRqEmFiYKXADDag1fRjekVYkXXngBI0eOxMiRI0EQBO69996uf/f8mzp1Kj777DMsX748bMNONzidSVqQnDcjSCEYQgC7PXSdTY/HAwGZPE28BSTDawCjsLAIACAyxW5Buz+EZtYGzqZ4Ms6X8VVtDS+AUePbb9w4fjL1+GL8+IlgwOCUtjYm53N5XWgwNGPEiFFRmSRwi3BkEgUwCCK8BcOcHHZS3apv59ukqMPZHIpjwN0vXCAj2eCe04GyR2INtyBPUMnpJMcKkmIDPKdDAIOrEAJ6L6YPERt6Xn+hcOj6RwuJRIK77rofDIAvmpUYbOj10sCXLUoIhUL87nf3JW0AfYhfByqVKqDsYrJAeJxQKfuXJx4InU4HAEiRJ3YAJ0VGw+ulYDabQt5XIBAiIyMTQmvyzc0Itxek2xuVBf/hw1n5o0Z7bIL7Di+BDpcQw4ePjJqCi1wuR35+IRqNzQmxiN8fDYYmAEBlZWgSVINRUVEJp9sLvSX+zzO91QmH24uKiui08Z4/fxEAYP2+76Jy/HDYfmw3bE47FixYHNE97vGwfpJQmJyJN3wkF4b0yceOHYvLLrsMDMPgnXfewaxZs1DSp3SFIAjIZDKMHj0aS5YsCduw042uBaJknqiTZFc1RSh4vd6kauAtJBheF/QUCiXS0tPRYQqstRdLREY2AFVUFFhTL5aM8pXWhTt5arSLoFAoUFxcwqNVkcNVQdRo6zEub9Qg746cWl0jaIbG2LHjo3L8RJ4EDkQ4duf7yq8btYmdvROIJp/NBSHI73CLyE6nMyrBr2jD9dpQ9lPKH0vkcjaIQlDxrwZJZLjro+hHH/7XhLQf3dwhYoNI1J0wxGWEDREdxowZhzPPnI/vv9+KwyYxxmr6r0T7WSuD3iXAhRde2DXmDjFEvEhNTUNTcxNAUwHlHxMahoHA40BaWniyi1ptJ0gCUIoTe56fImPt02q1XT0tQqGwsAgde9pBeCkwSRTM5pIOCwr4TzocMYL1TxvsIlSqoz9v5Xx97rzRYvjwEdjc1ACtTY9MZfrgO/TD2rVrA26/7cZbwz4mR4O+GQAwfLh/r5RIKC8fhs2bN6BJZ0W6Or7zz2YdKydZwYNcYiCys3MwbtwE7Dt0AO3GTmRrAvd3iiXf7t0KAFi4MLL1cS45L1mTO7gARjhrxhwhrQyeeeaZOPPMMwEADocDF198MSZMmBD2yYfopiv7LkkXAwEADB1WFiFFef0aeCcyJNktm8MXZaUV0O/+BYTbC0Ycv4gqF8AoKwvcfCyWKJUq5OXlo6mjCQwTWoWOmwI6nEKMnzA84R7wI0aMhFAoQrWuPibnq9HVAUBU5KOA7gGUppPnN8ww4WU8KxRKpKWlo76jcfA3Jxj1nU0Qi8UhSUhx8nZmsxmaMLUu44nZbIZSqUqIbH6ZjF2QHwpgDAzhk9jirtevGa6R3RDxoWcFRs9gxhDR4ZprbsSPP3yHLW1yjElxgyAAiYCdN3D/9dLA9x1yyOVyXHrpFfE0d4ghALBJH4cOHYDAaQYlTy5pbIHLAoL2hpS40hOdTgu1jE743MoUGVshotN1orw8dP+1qKgYe/bsgtBkhyc9vGqVeCAyRS/pkOs7VB+k7F+k1Pvkovv2O+Kb4cNHYvPmDWgwNEUUwIgmDYYmn4wXv9UJlb7+YU06K8aXxndBv0nLygcNG8ZPT7NALF58Fg4e3I/1e7/DVQv8G2bHEp3FgF9O7sWIEaMi/r0KBNy6S2JXxvVHt3JH+MHisJ9Kjz/+eNgnHcIfLhMvaRc3GBoETUEiCT2iS1EUBMmjPgMBCbip8BuOBaKiYhh27/4FIoMN7uyUkPbtLwvgipuuD9kOkd4KgUDgV1kVL8rLh+HHlmZYvQRUouAXyNucQjBIjEBMX8RiCYYNq8TJE8fhoTwQCcKTyAqWWh272B6tSaFQyNpPJVEAg6LpsEsvS0vLsGfPLthdDsjDeN7FAy9FoaatASVlpSEF9LhJlsFgQFFR/GXlQoGiKJhMJowYEb1y9FDgKlgIOknH+BhB0GxygESSfBU/oZKs+rW/FnpWXQx9F9EnLy8fc89cgO++24xqqwgVKg8W5djxYweDOVlsJvE+gwRmD4mLz1/V1TdoiCHiSUlJKQBAZO1MugCGyMr2PuM+QygwDAO9XodsReIvkqVIWRv1en1Y+3MLxSK9LbkCGL4sdj57JXCo1SkoLCxCfUs9aCb6fUrrbCIQBIGRI4NrbBwuXFVDnb4JkwvDVyZYs2ZNwO0qSWQJUzRDo8HQjOLiEt6TXMrL2WoHLngQT5p1rOpIOAHHYJkzZx5efPFZfLNnC66cvzquvuCGfd+DpmksWbIs4mNxCTfJHsDomUQUKmHH1N98801cd911/b5+/fXX45133gn38KcdEokEUqkMAk/oPSQSAdLN2h1O43aaZpKm/wXAVgLw/dDgdA7F8RxUaAZivQ2lpeUQixNDToGTf2p3hrbY3OEU9No/0Rg5cjQomkKTsTWq52EnQk0oKiqO2mKAVMreK24vv0G9aEHRNCiaCVsyhJtsVbXU8GlWVGnStsDtdXdNXoOFK+Vua2uLhllRpbOzEzRNR9QojU+4+43guXrv10Z3ACMxxqBokgiBtdOZnvfY6XC/JQLnncdmQe7UsQHKCpUH15SbUaHy+LbLQBIEzj13qHH3EIkBJ2crNvM3X6cGWOQc6LVQEZlZ6VDuM4SCw+GAy+WCWpr4yUlqn4SUwWAIa3+u30NcffAwEGstEInFKC4OPUAVDGPGjIOTItDujK6sFsUADTYRiotLoFJFN4BUXl4BoVCIen1TVM8TLh0WLZxeF+/yUQCgUChQkF+IJl18G3kzDINGnRV5eflRTVSQy+WYM2cemnWtOFR/LGrnGQyGYfDN7s0Qi8WYN29BxMfj+jry2Y83lrjdXKV9+EmgYVdgfPDBB5gxY0a/r1dUVGDdunW47LLLwj3FaUdWVhbsLe0IWS+nHyiJst+ACJ8TJIAtUwWAzMwsXo+bkDAA38sOXHZ8OJOn/rIAIA0tsikyWEFQdNTLN0OB0z/WugRdDm4waF3sZCsRmpEHgpssNxiaUJoePRs7rTo4PM6oTIQ4JBIpCIKAy5McAQzOznAlarhg49HGKowvTYzF8cE40nACQOgN4VJT01BUVIzW1ha2Ui6JGg03N7MasuPGTYivIT64jBmCjv/vpN+qvetvibEl/nDX53TIiHc6499I8XSmp2zU6XC/JQIjRoxESUkpDtfXwklZIRV0L6J0OgWot4kwbdr008OXGCIpqKgYBoVCCcpQDzNP/rlbkw+xtaPf1/hCqq+HVCoLqxmwzcZmSMsTvP8FAMh8Ffp2e3i9JAsLi5GSogHVbuZtDSbaEC4PxAYbxkycHLVmvmPGjMM333yJWqsIubLozV1bHEK4aCJqvRp7IhaLUVZWjppT1aBoCoIE62tT72vgHS2/fVjlcGxtboTe6kS6Kj4qAkabCzanB1OiKB/FsXTpcmzc+C2+3rUZ40ris751rLEKdR2NmD9/ES8BG7WaVWpJVh+C60+ZkhKa4kxPwq7AaGxsRHl5eb+vl5WVoaGhIdzDn5YUFZWA9DpB8lSFMdAkiM8JEgAIbToA4WW8E0Rytf5gAN4nN+npGcjLy4ekwxK3iyHpMANATCYQwZKXx96neldoEwyd7/2chn+iwTkTDYbmqJ6HOz6nexkNSJKEQqGE3ZUcmeWcnSqVOqz9uYz+w/XHebMp2nABjHCqEWbOnAWPx4OmpsTMVgoEwzCora2FRCLBxIlT4m0OAHQ5mASTnCW/McN3faLlkCcSJpOx6/+TtRQ8mRnqgRF7CILA/PmL4GWA4+be1/yIif33/PmL4mHaEEMERCAQYtq0GRA4zRDatLwc01o4FR55mt92jzwN1qKpvJxDaNdD6DBiypSpYQVoHQ5W1k0sTHwHnbORszlUCILAhAmTILC5uhpjJzrSVhMAYMKESVE7B9c7scYaZalj3/HHjInN+kNl5Uh4aS9aTIlXXd6g5wIYoQcdg4HrOdGkDS/YxweNvnNHs/8Fx9ix45GXl4+th36C3RX8bztLkxHWa4H4avdGAMBZZ50d0n79odGwajd2e3Kq9nB2c58jHMIOYIhEInR2dvb7ekdHR8I1z010OL1+kSVwVkaoxGKCxMFlkoTTc0AkEsObRL67l4qOszt+/CSQbi9Eehvvxw4GiW8ylCgZywC6Gg4bPaE9S4weAYRCIVJT/e//RCA3Nw9yuSLqElLNvuNHe5KQmpoKqzM5ShktDrZ0MRy5O4CtMsvNzcOB2iNJs+i4t/ogVCp1WDrIc+fOBwCcOnWKb7Oihk6ng9FoxIwZZ3T1nog3XdUrCRDAWLNmTcC/RIA4jQIY7e3dzrPRGJ70xRDh0/MeS6bqsmRn1qw5AICjpt7z6KMmCQQCAaZNmxkPs4YYol+4oJqsnZ/EFUYohm7c+bAUTQVDss8hSiSHbtz5YAT8+JecreEGBLlGscmQYMjZGMm608yZswAA0sbw+mjEGmkTmzg6Y8asqJ0jJycXGRmZqLWJo3ofcAGMsWPHRe8kPeCCA43GlpicLxQajC0QiUQoKSmLyvG5hMbGuAYwWLWRaAVpekIQBJYuPRsOtxNbDmwLer+JZf3L7g30Wl8cbic2H9iG7OwcjB8/Mej9BiI7OwcAYLXG7zuMBKvVCrFYEp8Axvjx4/HJJ58EvHgWiwUff/wxxo9PnEzuZGDcOPZ6iU38ZLrGYoLEnoiB2NgMpVIV1gKZRCKB20skxSQJANwUEZVFsSlT2KCSpNXI+7EHxUtB0mFGWVk50tLSY3/+ftBoUiEQCGB0h7a4YPKQSE/PSNggKkmSKC+vQLulEx4qegv/TcZWEASB0tL+q+X4ICMjE1aHG14q/ouzg2G0saWL6emhZVD0ZMKEyTDbLUnRB6NF344WfTvGj58Q1u+hoqIS5eUVqK+vT5psj2PHWK3TpUv5yXbhg0QKYCQ0vuuTqM9uPuns7E5WaW9vj6Mlpyc977HT4X5LFAoLi5GRkYlqa/eimJsCGuwiDB8+Muoa6EMMESpTpkxDamoaFB3HQfA0Z2dEUliLp8PrawxOSxRgRDz5lrQX8vbjUKnUmD79jLAOIZWy8jJOT+LLKTm9rI0SSfjXb/r0mRAKhZDXaRM+akN4KMiajcjLLwhr3SXo8xCsrJPFQ3ZJM/MNzQC1NjFyfcGSWMAt4kdbBSFUKJpCs7EVZWXlETU4HohhwypBEERXECEeNGotIAgCFRX8N58PxJIlZ4EkSXy1e1PQ+6xZeDFKsgr9tpdmF2HNwouDPs53B9nKj6VLz+ZtnskFMMxmMy/HiyUMw8BsNiMnJyeiPoBhX8nbbrsNHR0dWLVqFd588038/PPP+Pnnn/HGG29g1apV6OzsxG233Ra2YacjI0aMgkwuh0xXy9vgGdUJkg+hXQ+h04RJk6aE9eNUKpWgGcCdHAo0cHpIKBQK3o87adIUCIRCyJpin/0hbTOBoOiEy3wTCARI1aTC4g3+IccwgMUXwEhkysrKQTM02iz9V7JFAsMwaDG3IS8vP6JGScGQnZ0DBoDBmvh6jHoLa2NOTm7Yx5g6dRoAYPvx3bzYFE22H9sFAJg6tf+eVQNBEARWrDgPNE3j6NGjfJoWFRwOB6qrq5GXl49JkxJDPgroXiBN/KWAROHXf6UMhu6x3mhMjqzPXxM9m1jGs6Hl6QZBEBg3bkKvRbF6uwg0k1gVwEMMwSEUCrFixXkgvC7I2uPXDDZYZO0nQHrsOOeclWH390lNTYNQKIDeFvmiW6q8/8SNgV4LFs5GbmEvHBQKJWbNmgORyQ6RPrEzm2UNWhBeCksWnxXRImAwcDJS9bboVMV2ugSwewmMiaF8dWFhMUQiEZoSrAKj3dIJL+2N6sK+TCZHYWExmnRW0HGY9zAMgyatFQUFhVFZSwtEenoGpk2bgSMNJ1DbHlx7A7lEhhdufgxXL7wYEp/qSppKg+dvehRySfBrKl/u2gSSJLFkyVlh2R4ImUyG7OwcGAzJV7ntcDjgcrlQXBxZ4DWiCoyXX34ZDMPg0UcfxbXXXotrr70Wjz32GAiCwEsvvYSJE/kplTldEIvFmHXGHAicZojMiafL1x+yDlZf/cwz54e1f0qKBgBgdiZ+BpzLA7i8kem29YdCocSE8RMh1llB2l28H38guJJZrrQ/kdCkpsLqDT7zw0kRoBgiKt8Rn3Dloa2m6GTeWlw2WF02lJZGpwy1J1yvkk5T4mvHdvr0bTmbw2Hy5KkQiUTYduQXvsyKGtuOsjZOnx5+cHLhwiXQaFJx7NgxuN1uvkyLCocPH4bX68Xq1ZckVFb10ALpEH3p2YAvXO3uIcKnpwQgRUWvQekQ/owYwTbTbHawi2LNdqFve3Qalw4xRKSsWLESEqkUqsY9QBQrpyOG9kLVuBsikRgrV54f9mFIkkRRUQmaTUJ4I3w8DsvqP0NxoNeCpUHP+ohFRcURHYer2lWcTOA1GIaB4mQbCILE4sX8LYr2x+jRYwEAdbboVATU+eSjuPPEAqFQiNLScrSa20HRiTP2c7LS5eXDonqe4cNHwOn2QheHfi86ixMOt7erF2is4PpPfLUr+CoMtVyFaxdfiuKsAgBAhjoNannwFaL1HU04VH8MkydP7ZJE54vS0jLY7faka+St17PrjZGuTUXk3c+aNQsbN27Ehx9+iL///e/4+9//jg8//BAbN27E7NmzIzIsWKqrq3HNNddgwoQJmDVrFp588smgFlgWLFiA4cOH+/1xndE52tvbcfvtt2PixImYNm0aHnzwwahqji1fvgIAoGzeF7Vz8AnhdUPRdgSpqWlhl6lyJYNGR+JnXBoc7E8mWtn9s2efCQCQ1+uicvyAUDTkjXpkZmXFpKFSqKSkaOCiiKD7pNgpomu/RIYr+20z89Pzpi/ccSONcgdDVzDGEJ/+LaHQZrBBIpZEVIEhk8kxZcp0VLXWor4jcZtba8167K85gjFjxkUkDSeRSLB69SVwuVw4fPgwjxbyi8PhwNGjR5Gens5rtgsfcIulzGlQWRAZ7PVhTgOprZ4BtqEeDLGnp6/g8STwguSvkIoKdoGmxRe4aPEFMmIlKTHEEKGSkqLBhasvAem2Qdm8P97m9Iui5SAELgvOP391xJLAEyZMhtsLVGsjy74/a7QTOWr/heLcFArLRke2AMcwwLFWESQSCUaOHB3RsSZNmoKiomIo6rQgHYmZrCPuMEOst2Hu3HnIzMyK+vmKi0sgk8nQEKUARoNvDBg1Kvi+AnxQWloGD+WFzpY4WeytZjahsawsurLP8eyDwUlXxTqAMW3aTKSlpmH93q1we2Mz3+Mkq/hq3t0Tbr1uoH7UiQhnb6TrjRGnJ5IkiTFjxmD58uVYvnw5xowZE/VyNg6TyYQ1a9bA4/Hg+eefx+9+9zusW7cOf/vb34Laf+nSpXj//fd7/fUstfR4PLj++utRV1eHv//97/jzn/+Mbdu24e67747WR8Lo0WMxcuRoSHU1SVGFoWjaB8LrwqpVq8MuU83NzQMAaC2J78BrLexPJpLs7YGYM+dMVkaqLnYPJGmLAYTHiwXzFyVUxjKHSqUGADio4J4rdi/p208ZNZv4oKioBADQZolSAMN3XO480YSbbDXrErvs2kvRaDXYUVJaGvGC4fz5CwEAG/Z9z4dpUWHLgW2gGRoLFiyO+FgrVqxCamoaDh06FFG2+EAlw5GWE+/fvx8ejweXX341xGJJRMfiG4rrDxOj+VHS4rs+p0NGvFLZncnFjXNDxA6Xq3vhzOkcqoCJJVymdKdPQqrDKYBUKo3JgtwQQ4TL6tWXIDUtHcrGPRA4TPE2xw/SaYGqYRfUKRpcdNHlER9vzhw2qW57dWR9M6Ui4M6FVpw12gmRgK1GVUtp/HaBFZII18VrtAK0mQWYMWNWxH0DSJLE6tWXADQD1dHE6o/AoTrEJk1deOElMTmfQCDAiBGj0O4UwhmkHx4KDTYR5HJ5xNUzocIl3rUk0Fobp8gQ7cRDLngQjz4YXNCEC6LECqFQiEWLl8Jkt3RJK0cTL+XF+r1bkZKiwYwZs3g/Phes7eiIzhpStODsjbTaNuLVSo/HgxMnTmD37t3YtWuX3180ee+992Cz2fDCCy9gzpw5WL16Ne6991689957QTVEzMjIwIQJE3r99Qy+rF+/HlVVVXjuueewYMECLF++HI8++ii+++47HDx4MCqfiSAI3HjjbwAAKae+AxKotK0vQrseqqY9yMrKxqpVF4R9nMLCIgBAqznxFs/70mZmna38fP/GPnygVqdg+rSZEOttEMYom11ezT5MFi5cGpPzhQq3yOOggrs/uEBHz8WhRESlUiElRYMOizYqx+eOW1gYnXu1J5mZWUhLS0dDZ/yaggVDi94GL0V3yVdEwsyZs6FUKvHNns3wRrDYmqXpv5proNcGg2EYfLFrA8RiMebODU/erycymQxXXnkNPB4P9u7dG/ZxcnP7r3wZ6LXBMJlMOHbsGPLy8qOS7RIpFOWTSSASf5yLJ4zv+ngj1axIAlJTu2UOE13y8NeIzdY9x7Lb7XG05PRDrU6BUqmE1iUAwwA6txD5+YUxS4AbYohwkMvluPU3d4CgvUip2pJYzZ4ZBimntoKgPLj5ptugUkXuA40aNQYVFcOwv0mM9gh9dIWEwdljuysxUmQ0FJLIrh/DABuOsn09I1mH6MmiRUuRk5MLRVV7zOWcB0PcZoK03YTp08+IaQb78OEjwaBb6o8v3BTQ4RRi2LDhMU+g5AIm0fLBw6Hd0on09Iyo94YoK6sASZJoikMAo0lrAUmSUZfJCgQnERdKM+9w+fn4HhisJixatCQqDdlHjhwFkiTR1pY4AbjBoGka7e3tyM8vjFglJeynBU3TeOqppzBt2jSsWrUKV155Ja666iq/v2jyww8/YObMmdBoNF3bli1bBpqm8dNPP/Fy/OHDh6OsrFuna9asWdBoNPj+++hl3Y4ePRbLl6+AyKaF+v/ZO+v4OOr8/79m3bPJxt2lbdK0qTsV2kKxYsVdi8shB8cdHIeccL8vcMLhcALc4bSFInWhLmmStmka92SzbjPz+2N20qSNrMzM7qb7fDz6SJOd+XzeazOfz1te77rgnwcfEB4XYqvWATSFe+55MKgmwWykudUY/hUYLV4b+SzvY51v6uP89EYYiMjmhLKlF8XF4/oljcINtVoFAD5nfrDHqdXhXYEBMMG7LmsPLxqcnRZmUZaWls752KdDEATGjRuPXqszrBt517UzGXPBlpkDjKzS4sVL0WXqCSqbY1Lu8GXTIz02GgfqKlHf0YR5886BTsdNdvfy5ecjMzMb1dXV/TqW/jJp0qRB92yW2NhYTJ48OWDbdu7cCYqicNttd0Mi4afZYDCwEjW0KPxsCydoEXOP9QhU4h1KBgbZNZrwv1+NNSwW84D/h3f14FgkKSkFfW4xHBQBJ0lwrhEdJQofzJ27AHPmzIO8rxnqMJJ7VrUchKK3AdOnz8SiRcFX3QLM2v66624GRQH/3aMMq3gNABxukeBIqxSTJ0/hTIJIIpHg+utvBkFSiNnvW8NfQaBoxOw9CQC44YabBZ2alfZjexZxRYtdAhrBy8kEQno6k9zXYQmPAIab9KDHbuy3i0/kcjmys3PR1G0FRQn3paZoGk3dFmRlZUOhUAg2L0tGRibGjZuAXUf3o7OPX6n2tXt+AACce+55vIyvVmtQUFCE9vZ2eDzB9xESgu7ubrhcLkyaFPhenyXgAMbf/vY3vPXWW7jwwgvx0ksvgaZpPPzww/jNb36DoqIiFBcX46233grawJE4ceLEoOACAOh0OiQkJODEiROjnv/VV19hwoQJmDRpEm677TbU1NSMOj5BEMjJyfFp/GC44457kJOTB3XLQShbw0xznKagP7oeElsPLr30CsyYEVjvCxaVSoWUlFQ094W/Y6e5TwylUomkpGTe5pg6dRriExKhrusE4eY3C1V9vB2ggfPPv5DXeYJBpWIyEZyUbwEM9jiVSsWbTVyRkpIKiqZg5KEUvcvag9jYOCiVwrwO5eXMDelYi1GQ+QKBtW3ixEmcjHfBBZcAAD7e8mXAY9yw6EpkJ565YM1JysQNi64MeFzWJtZGLhCLJbjzzntA0zS2b98eUGNqmUyGFStWYNKkSf0yXkqlEueff37AWSpNTU1oaGjAxImTMGuWMP23/MXlYjL5WAd9lGHwBnjY12ssM7DnWqQ14hsLmEymAf8PPzmYsU58fDwcJIEuB3NN5Ku3XJQoXEIQBB544FHExRmgO7kD0r6WUJsEqbkdMSe3ISZGj4ceepzTSqaZM2dj+vSZqG6XYsvx4KSkuMTkIPCfXWpIJGKsXv0Ap8954cIlKCgohKquE9IAstRJ1fCv00iPjYSqrgOyXiuWLFkmeK8gtmdRK8cBDHa8vLx8Tsf1hcTEJIjFYnRZAkvG4ppemxE0TfMmUX46BQWFcHlIdArYyLvLZIfTTQre/2IgS5eeB4qm8O2+DbzN0WsxYnv1HhQWFgXdrHokyssng6KoiKnCaG5mZPnKyyuCHivgK9Fnn32G5cuX4ze/+Q16e5kGOOPHj8fMmTNx8cUXY9WqVdixYwdmzQrOuT0SJpNpyMzSmJgY9PWNvBlZuHAhysrKkJqaisbGRvztb3/D1Vdfjc8//7xfcsVkMg1ZgunL+KMhkYwcO9Jq1fjtb1/A3XffDhzfAIjEsCcFpxfGCTQFfc16KLrrMGXKVNx5590Qi4Mv+8vNzcPWrS0wOwhoFWGW4uGFpIB2kxhFxXmQyfgLtkgkMlx80SV4882/Q1XXAWth4LIqI0JS0Bxrh1arxeLFS0b9TIYKtgLD6WMFhtMrNaVWq8L2ObGkpTELlS5rLwzqOM7GpWgKPTYjikvGCfYaTJkyDQBQ3dyLaYX8BfgCxe2hUNvWh+zsHCQlcaOznZOTjRkzZmHHjm2obKjB+Ez/s4hUciVeu/N3+O/Wr/HvTZ/B6XYhTqvHq3c8D5U8sMq2hs5mbK3ahfHjJ6C0lNvGeDNmzMDs2XOxdetmnDhxAnl5/lejKRQKVFRUoKGhAd3d3VCpVAFn45AkiW3btkEkEuG++x6EVCp8gMCX79ipAEb4B+pDCd0fwHCF/fU7GGiaxv79e/p/P3RoH3Jzw7MKcqxiNp9ax5tMxjH9eQtHWNm0Dm8fjLi42Oh7ECWk+Pr5i4uLxTPPPIsHH7oPcdXr0Fl+BSh5aKroRC4b4qrWgqBpPP30b5CQEFzj7qF4+OHHcPttN+DTfUBmHIksQ2glHkkKeG+bCiYHgbvvXo2cnGyOZxDh3nsfwH333Q39rhPoXFoGiHwPkDiTYiDrGVoG2pkU4781Tjdi9jVAoVTittvuFPw6mZ6eBrlMhnYHt5Wx7Q5mvZefnyf4c5JIREhISERvmCQv9NiMAIDk5GRBXovi4mJ8++0aNHWZkaQXJtGxydv/oqioKGT3+oULF+H11/+Mb/f+hGvmr+RFtvL7/ZtBUiSWLTuP1+c5Y8YMfPTRP9HY2Ij0dP7VNoKlsbERIpEI06ZNDfp1CXgn3dbWhltvvRUA+ps3u1yu/t8vvPBCvPPOO3jooYeCMpAvnnrqqf7/T5kyBbNnz8by5cvx1ltv4de//jWvc4tEBGJjR9e3i40twJtv/gO33HorcPQHEBQJWwq3zii/oDzQ13wPZddxVFRU4P/+7/8FJR01kIKCPGzduhndVhG0ivDUvjbaRCApIC8vx6f3LxiuvvpKvP/+O9BUt8JakMxL41dVfRdEDjcuXXUNkpO5c55zTWwsE6R0+1iB4fb2yk1IiOX9fQqWnBym/0uvd+HCFWaHBSRFIiMjTbDXQK8vRkZGBmqaW+EhKUg4CGxyyfFWI1weEuecs4DT1+T222/Fjh3b8P6Pn+ClG58a/YQh0Km0uHnJVdhWvQtHm08gXhcHnSpw/eIPfvwENE3j1ltv4eX9f/LJx7Fy5c/YuXMnMjIy+tcAoeDQoUMwmUy49tprMXlyqeDz+3o/B5j7Gi3mXgt1LEH1vz6esL9+B8Nbb72FY8eOIj/Bg/oeCd5++w3Mmzf7jKrfKPxhsTAVGB6tAr29vWP68xaOJCYyjtYubwAjKSk++h5ECRm+38sZ5s2bhUcefhgvv/wyYo98g+6ylYDQ93fKg9gjayByWnD/Aw9g0aJ5vEwTG6vGCy++iNWr78YbmzV4aLEZBg3Fy1yjQdPAR7uVONohxcKFC3HrrTfy4oScO3cmLrroInzxxRdQH22Dtdj3ZEJzaQYULb2Q9g3ObnfHKGEu9V8iSLevHiKnG/c8cj8KCoRtds2SnZODk8eqQdPcuSQ6nWIQBIHS0hLI5XJuBvWDlJRkHGg/AIqmIApxfzpWiSE7O0OQ+2BFRTkAoKnbgop8YeQbm7qZAMbkyRNDdq+PjVVj4cKFWLduHaqbjqMkg/teHN/u+wkSiQSXXHIh9Hr+nufs2dOhVqvR2NiIGTNmhHUPMYfDgY6ODpSXlyMjI/gk14ADGHq9vr/pnVqthkajQWNj46BjBpZn84FOp4PZfGZpX19fH2Ji/ItwJyYmoqKiApWVlYPGH0oXt6+vL6hmoxRFw2TyrWGgwZCCP/7hz3jk0YeA4xsgclphyZrGi0N7JAi3A7FH1kBuakF5+WQ8++wLcDgoOBzcNJrWaplMLKNNBASR2RGromB2DH0TilUFt9gy2pnXXKeLRS/vDbZlOPfcZfj66y+haOqFI4PjAANNQ1PVArFYjOXLLxLg+QQO5Q1cuGnfPvMu73EuFxXWzwsANBrmc891AIPN5NDr4wR9DWbMmI1PPvkPjrUYURLAZ1avlsNsHzrDR68ObnF7sJ7ROa2omM7pa5KdXYjy8snYvn83qhqP8bIY8ofGzmas378JeXn5KCubwsv7r1TG4Oqrr8M777yJffv2Yfr06ZzP4Qtmsxn79+9HXJwBV155nc/PVadTclI5CPh+P+/tZdZD0QDGyLCvT09PX9hfvwOhs7MTr776CrZs2QSDmsJNs6042ibBezuAa665BjfffDsuuWQlxOJopQ7fdHZ2gRaL4NEoYGs1or29BzKZ8E6UsxWxmAl8m9zMtZggpGPyOx+FP0JxLx/I0qUX4MiRanz99ZfQ16yHsWS5cPtzmob+6A+QmduwdOlyXHDBpbx+f4qKSnHffQ/jz3/+A/6yUYMHFplDopiw9rAC20/IUVRUjIcffgJGo3/vmT/ceONt+OmnDaAPNMCRHgtS41ulMC0Vo3PJBGhqWqE50gIRSYFUSNG5ZAJoP6uEZW19UNd2ID+/AEuXrgjZNTIxMRk1NTWwkQTUEm7e926nGAaDATabBzab8Dr+Wm0MKJqC3eWAWh5a2Wmzk3lf5XK1IO9xfHwqRCIRmrt96//Fxf68udsCkUiEhIS0kN7r589fhHXr1mH9/o2c79lPdjTiaPMJzJ49FzTN/5pm2rQZ+OmnH2A0GhEbG8vrXMHQ0NAAmqYxffqsYV8Tf+7nAe+Qxo0bh0OHDvX/Pn36dLz33nsoKSkBTdN4//33UVTEb1Oe3NzcM3pRmM1mdHZ2cpLFlpubi6NHjw76G03TqKurw+zZs4Ma2+Px3ZmelZWH//t/f8UTTzyClsZdkDj6YCxc2K8VzTdiuxFxR76BxNaLBQsW4ZFHnoBUKvPrOYyGRMI4LcgghyxI9KChZ+jXpSAxuJsj6XWkSyRSTp/7cFxyyRX45puvoKlq5jyAIW81Qmq04ZzFSxEbaxDk+QSK2OvQ8tVEj/d9EouFeZ+CITaWyUDsc/ivsToSJu94cXEJgr4Gc+cuwCef/Af76zoDCmDkpejR2DX0YiovRR+wXR6SwqGTXUhMTER+fjHnr8l1192E/fv34h/ffog/3fobTsf2lzfX/wsUTeG6624CSdIA+NlgXnrpKnz33TocPnwYBQUFiIsTvoprx44d8Hg8uOOOeyCXK0P2ffdlXjYZgpKEj4Z0OEJ7nZpWqzXsr9++QlEU9u/fi7Vrv8LWrZvg8ZAoTHRjRq4L//5ZhXOKnLhxlhX/3UPjL3/5P3z88b+wbNkKLF16Hq/9ts52jEYjKLkElIJZY3R39yIhgRt5wSijwwaLzN4AhkymGDPf+SiRSSCfv7vvfgBNTc3Yv38PyLqtMOcK04dLW78Dys5jmDChDPfe+zCv6z2W8867EO3t7fj3vz/A6xs0uG+hBSqZcEGMH6rlWFupQEpKKp599kVIpXJerxlqtQ6rV9+PF154FvqdteheOM7nABUtl8JclglFcy9kPVaQKhlouX8JLISHRNzOWojEYjz88OOgaVHIrpGJiUyWfq9LDLUk+GADRQNGtxglSSkhe046nR4AYHZaQh7AsHoDGFptjCCvh0QiQ0ZGFppbG0HT9KjZ+8Huz2maRkuPBWlp6bx/b0ejvLwCMTF6/HhgC+4+7yZIxNxJD6/ftwkAcM45SwR5jjNnzsFPP/2AkydPhnUAo76+HgAwffpsTl6XgNMWLr/8crhcrn7ZqAcffLBfxuHaa6+F1WrF448/HrSBIzFv3jxs27ZtUKXHunXrIBKJ/A4wtLe3Y8+ePSgtPSVBMW/ePFRXV+PkyZP9f9u+fTuMRiPmz58ftP3+kJKSiv/3//6C8eNLoew8CsPBzyFy8Zd1wCLra0bCgf9CYuvFlVdeg8cff5oXuRC2gWWwiTTLxjuQrDuzgiMlhsTy8cE1yZSImEXawMabfJKRkYmZM+dA3mmGrIPbaibtEaaRzuWXr+J0XD5gP2++Skh5vGvpQBsCC0lcHBPAMHEcwOjrD2AI61QuKipBSnIKDtV3weXxv5JqSXnmkFqcyXoVzi0PvGy6uqkHdpcH8+cvgkjEfZlwaelETJ06HbuPH8CuY/s5H99XqpuO46eDWzGuZDxmzuR3Ey2TybB69QOgaRrbtm0LqKF3MDQ2NqK+vh7l5ZOxYMFCQecOBKuV2ZywDvooQ8MGeNjXK1KxWi3YsmUjXnnl97juusvx+OMPYePGn5CoceHa6Vbcc44V22rlONwixdrDClRkuvHUeSYsKHTCaurEhx++i+uvvxL3338XPvzwXVRXHwFJhqe8ZqTSZ+oDKZeCkjNJL3xXjUcZDLtGY/ubRcKaLUqU05FIJPjVr55FVlY2NM37oWo5yPucyrZKaBr3ID09A7/+9e8ElfG88cZbcdFFl6LZKMZfNqgxTFI252w6JsPn+5VITEjEyy//GbGxwuxvFixYhJkzZ0PR1gdVbYcgc7Lo9tVDbHHgyiuuRl5eaKu72YQ7NuAcLHaSAEVDsPdxKNRqRt7H4RHGrzMSDjfjo1Krheulk5eXD4fLg17r6M8/2P250eqEzekRvAH9UIjFEixYsBA9FiMO1B3mbFyapvHjwc1QKVWYPn0mZ+OOxNSpMyCVSgf5qgOB/S74+5gvuN1uNDU1IScnF2lp3PTqCPgqtHjxYrz22mv9N838/Hx8//33ePXVV/HXv/4V3377LcrLyzkxcjhWrVoFtVqN1atXY8uWLfjf//6Hl19+GatWrUJS0ik9txtuuAFLlizp//3rr7/Gww8/jC+//BI7duzAJ598gmuvvRZisRg33XRT/3FLly5FQUEB7r33Xvz0009Ys2YNnnzySSxYsABlZWW8PrehiInR46WXXsGSJcsgM7ch/sB/IbH28Dafsr0ahkNfQEJ58MgjT+CWW+7gxfkHAE1NDQCARG1wG3SFFHhgkQXLxjsgFTMONZ2Cwv0LLfAz8eEMErTUIFuF4IorrgIAaLwBBy6Qdpkhbzdh2rQZyMnxvwGv0LBSGpSP/lGKPlUpE+4olUpIpVJYnNw669jx2CaZQkEQBBYtXgqnm8Shk11+n6+QSnDP+ROxpDwTUm80U6uUYvX5EyEPojnzrmPtAIDFi88NeIzRuOWWOyESifD6N++ApIR3NNI0jde+fpux5dY7BdHCnDJlGubMmYe2trYzqiH5hCRJbN++HWKxGPfc80BY636yWK1M5lI0gDEy7Otjs0VWAMNoNGL79i14662/4cEHV+PSS1fg2Wefxtq1X8Fu6sDMXCceXmLG40vNmJ7jBkEATm8SI/tTLadx6WQ7fnthH66bbkV+ggs11ZV4//23cd99d+LKKy/Cc8/9Cv/970eoqqrsTyCK4j8URcFus4GWiUFJmTUG+x2NIgzsGs1JRQMYUSIbjUaL55//PWLjDIip3Qx5dx1vc8l6G6A/vgG6GD2ef/730Ol0vM01FARB4K677sWyZeejvkeCv27UwMlzEGPrcRk+2aNCXFwcXnr5z4JWJhIEgfvuexhqtQb6vSch9sHZywWy9j5ojrYhKzsH11xzgyBzjoRerwcAWD3crLetHtGgcUOBSuUNYLjDIIDhYdZzSqVwlSC5ufkAgBYfZKSC3Z+3eJva5+SER5+3+fOZxLcfD27hbMyjzbVo7m7DzFlzBOvpolarMWXKNHR3dweVhDNSa4Rg2iYATMIhSZKYO/ecoMYZiM8aRNOmTcOzzz6LZcuWAQBee+01nHvuuSgsPBVJ02q1WLx4MWfGjUZMTAzee+89PPfcc1i9ejXUajUuu+wyPPjgg4OOoyhqUOZaeno6Ojo68Lvf/Q5msxlarRYzZszAfffdh4yMU82VpFIp3nzzTfz2t7/FQw89BIlEgiVLluDJJ58U7DmejkwmwyOPPIH09Ey8884biD/4P/SULIdLz2H3eZqGpmEXtA0/Q6PV4tfPPI+ysnLuxh+CAwf2QS45FSQIBrWcxvmlDlS2SNDYK0GMkoJaHnx2sFZBQ6+icOjQAZCkRxCN6nHjJmDChDIcPnwQkj4bPDHB39jY6osrrrg66LGEQCJhXmcSvi2aSHrweeEMQRCIidHDaue2mootRdXp/OsFxAXnnrscH374LnYebQuoMZhKLsWyydmoauxBU7cFMSo5VEFEH812F4409aCgoJDXgF1ubh7OPXc51q37Bmt2/4ALpvEXLBmKTZU7cPDkEcyZMw+lpRMFm/f221fj55934Oeff0ZWVpYg37vKykqYTCZceukVyMzM5n0+LrDZbIxzPgKCLSFFJAYtkgzZfyxccLmcqK2txdGjVaipqcaRI4fR0nIqyUBEANkGD0pS3BiX4kF6LAmRH2+7TAJMy3FjWo4bdjdwtF2KqlYJqtqM2Lx5AzZv3gCAWaMWFBShpGQcCgtLUFRUjJSU1IgI6IUau90OmqZBSSWgvJvvSK/6iTTYhCjam3TCV4JUlChCkJiYhN8+9yIeevhexNZ8h66Jl8Kjjud0DomtB3HV6yCVSPHcsy8iJSWV0/F9RSQS4f77H4HH48H333+LNzarced8K4LIMxqWXSel+Gi3Cnq9Hi+//P84y+D1B4MhHqtX34+XX36ekZI6p4TXtRzhIRG3oxYikQiPPvKEoBU2w6FUKgEALh/VEEaDHUdIh/3psEFzkhK+/8bpeLw2yGTCBfJzc5k9cWuvFROyRr9WBbM/b/X2PWCDJqFm3LgJiI9PwKbKnXjo4jshFgV/8dp4eDsAYN487hz1vjB37gJs374VdXV1mDgxsP3/pEmT0NjYCKPROOjvsbGxmDx5clD21dXVee3kTr3IZ0+DzWbrl/kBmABGVlbWoABGKMjLy8O777474jEffPDBoN/Ly8vP+NtwJCUl4dVXXw3UPF4gCAJXXXUtUlJS8PLLz8NQ+TV6SpbBGZcd/OA0DW3dFmiaDyAlJRW/+93vkZaWMfp5QVBXV4uGhnpMynDxsvjhkrI0NzYd68OBA/sxefIUQea84oqrcfjwQWiqWmCcEdyFX2x2QNnYg6KiEkGdnMEg9moT+luBIeZQ05BPtFotOs3tnI5p95aiarVaTsf1heTkFEyePAV79+5GZ58NCRwE3YLh56NtoCgay5dfwPtcN954KzZt/An/+PafOKdsNjSK4MoufcXpduH1b96BVCLFrbfeJcicLMnJKbj88qvwz3++h0OHDmHSpEm8zme327Fv3z7odDFhkZXmK1arBVS0+sInaLEsbCowPB4P6uvrUF1dhaNHa3D0aBVOnqwblBSjktGYkOpBtsGD3HgSmQYP5BzF8ZRSYGK6GxPT3QDs6LUSqOuWoK5LghNdHlRXHcaRI6dK4DUaDQoKilFUVIzCwmIUF5cgPj6BG2PGEC4Xk3FJi0WgJaJBf4siDGygTfg2wFGi8ENBQRGeePxp/OY3TyHuyDfoLL8CtFTJydiE24G4ym9AeFx47KnfoKRkHCfjBorY25fB6XRi8+YNeGebGrfMtgYtBT2Qw80SfLhTDbVGg5deegWZmYFLyQbLokXnYuPGn7Bz5zaoTnTAlud/gpav6PY3MNJRV12HwsJi3ubxBzaj3Fc559FgxxEqU30oWD8BSYW+9xJbuS/iwJHuK2w1RGsP/+ttdo7s7Bze5/IFpt3AXHzxxac4WHcEk/JKRz9pBGiaxqbKHVAqlaioEMY/yDJz5mxIJBKcOHEi4ACGTCbDihUrUFlZiYMHD4IkSSiVSpx//vlBVce63W40NjYiKysbWVnZAY9zOj5vsTIyMrBu3TpUVFRAo2H02ex2+xmRmtMJZWnYWGfBgkXQ6WLwq2eeQNyRNegZd15wQQyahq52E9Sth5CdnYsXX/xjv0Y/n3zxxacAgKnZ4S+HMDXbhU3H5Pjii08FC2BMmzYDGRmZaKhrgmliJihl4E4wTXULAKb3RaRkabJZeb4HMAafF+6o1RrUu05yOiYbwGDLY4XmvPMuxN69u7G9uhUXTg+dTBlF0dhR0walUomFC5eMfkKQxMUZcPU1N+DNN/+Kd7//CPesuJn3OQHgo81foK23A1deeQ1SU9MEmXMgV1xxFb755kscPHgQxcXF/ZlafLB//3643W7cccfN0GiED9AFis1mAyWOSqT4AiWWwm63h2TutrZWVFUdQU1NFWpqqnD8WA2cA6SaZBIgK9aDzDgPsuJIZMaRSNBSfiVjWp0ENhyVo83EbFT77CJYnYRPlaKxahqxajcmZzKaHS4P0NQrRkOPGA09EjT09mH/vt3Yt293/zkGgwFFReNQVFSC4uISFBWVQKUKbWA51Hg83oxLEQG2PKb/b1EEgfI6jUQEPej3KFEimVmz5uLGG2/FO+/8A/qa9egdf0Hw2fo0Df3R7yF29OHaa28UPMN3OMRiMR577CnYbDbs2fMzPt2nxOUV3Ny7G3rEeGe7BjK5HM8//4eQSx4TBIEHHngEt9x6Hei99XCkxga1Hx8OaZcZmppWZGRmhVmSDtc+g3AIXTM2hIM/5JQNwr0ucXEGaNQatBn576nbZrRCpVIhISGR97l8ZdYsJoCxtWpX0AGMxq4WNHQ2Y968cyCTCRuUU6s1mDJlGnbsYPpCByorqFAoUFFRgYaGBnR3d0OlUkGhUARlW2NjIzweD+f3LJ8DGHfccQeefPJJbNy4EQDzRXvmmWfwzDPPjHheVVVVcBZGGZHJk6fgpRf/hMcefwix1d+iu/RiuLWBZQWom/ZC3XoIeXkFeOmlVwTR1ezt7cX3369DgobC+NTw3zxmG0jkxHuwY8dWNDY2ICMjk/c5RSIRLrnkcvzf//0R6uPtMJcGVhFDuDxQ13UiMTEJs2fP5dhK/iAI/wIR7K0/HBYkvqBQKEDRFEiK5KSEEQBcpLt/7FAwa9YcxMUZ8POxdiyryIZMEppqmOqmHvRYHFix4iLBHHaXXHIZ1q79Cv/b9g1WTFuC7ER+K9jajZ34cMN/ERdnwFVXXcfrXMOhVKpw/fU34//+74/Yv38/Zs7kp3mZ2WxGVVUV0tLScd55/FfUcIndYQctEVarOlKhBQxgtLW14uDB/ThwYB8OHtiH9o5T1XAiAkjTe5CVSXqDFR4k6ygEExt3uIE//6DpD14AgMkhwp9/0ODhJWYo/IxxySRAbgKJ3AQSABNosbuBph4J6nvEzL/uTmzbthnbtm1mnpdIhKKiYpSVTcLEiZMwfvyEkMo4hAKaPtNJMMSfovAIG7CQEOzv0Sb1UcYGV155DaqqKrFjxzaoG/fAmhlcwpu6eT8UPSdRUTEN1157IzdGcoRMJsOvfvUsHnroHmw6dhxJOhLzCoJLSOyzE3hjswYeksCzv3425NUmLAZDPG6/7W78+c+/R8zuOvTOLeJ2AopC7I5aEASBhx96LCyko1jYqlN/5DBHgh1nYDWr0LBJC+IwSHgUE8ya0OMR7vUgCAJZ2TmoqjoMkqJ4ex1IikZnnwNFxSVh5ZspLZ0IlUqNrVW7sPr8m4KybWvVLgDAjBmzuTLPL+bNOwc7dmwLSkaKD9j+mCELYFx88cUoKyvDzz//jK6uLrz22mtYsmQJioo4vnhH8Zvx40vxq6efxa9+9QRTsjrpKlAy/zJg5T0noTu5HYlJyXj++ZcFawr22WefwOVyY2GZg7ObIt8sKnbizS0SfPzxv/Dww48LMufixUvx1tt/B3WsHebx6QGtIFR1nSDcJC688BJB+ndwDc159kd4IJUyC1QX6YaSowCGm3RDJpOFbKEgkUhw/vkX4oMP3sHe2g7MKAquAVSgbKliKo4uuOASweaUSqW466578dRTj+HVr97CH25+htf34W9r34fD5cR9tz4a0qzqZcvOx8cf/xvV1dUoKyuDWs199c/+/ftBURSuv/6WiOhxw0LTNFxOF2iudIXGOLRIAqejj7fxW1tb8OOP6/HTT9+joaG+/+8aOY1JGW7kxnuQZSCRHktyLmu5rlIxKHjB0mYSY12lAheXO4Y4yz+UUqAgyYOCpFNJISY7gfoeMU52S3C8Q4KjNUdQVXUEH330T4jFYkyZMg0LFy7BjBmzea2gChf6JSZpuj/rIVJkJ8cKbjeTaCETMW9AtAImylhBJBLh0Ud/iTvuvAlo+BnOuGx4NIH1w5BYe6Cr34HY2Dg8/vhTYVldrlSq8OyzL+Kee27Dp/uAHAOJjLjAHLEUBby/XYU+O4E771yNadP4SYgJlGXLzsf333+Lw4cPwtZqhDNFz9nYmppWSPtsWHHBxRg3bgJn43IBK+vJXq+DhR3HZuM/+384nE4m0CYRhb46Wur1yzBSlsJVl2dmZqGy8hC6zQ4k8iT53GO2g6SosOtZKJFIMHXqNGzc+BOau9uQHh+4r2JnzR4QBIGpU6dxaKHvcCEjxTVutxtNTU3IzORWPgrwI4ABALm5ucjNZfTSPv30U1x88cVYtGgRpwZFCYxp02bi1lvvwhtvvI6Y4z+ht2S5zyWrIpcd+mM/QiKV4rlnXxBENgpgLtJff/05dAoa03PCXz6KpTTNjWQdiR9++Ba33nonYmL0vM+pUChw7pJl+Oyz/0LR3AtHRpx/A9A01MfaIZFIsHTpefwYyRveEk8fyyojLczBOmK5lE8gKTLkQarzz78Q//73B9hypAXTC5MFD6Z09NlQ09yLsrLyfp1PoZg2bSamTZuBn3/ega1VuzBnHD8LmgN1lfjhwGaMKxmPRYv4l8gaCYlEgmuvvQF/+MMLOHToEGbMmMHp+BaLBceOHUNmZjbmzVvA6dh8Q1EUaJoCiKiD1BdokZgXZ+axYzX4619fxeHDBwEAUjEwMd2FwiQPChKZ6gq+L1PHOoa/Lo/0WLDolDRK0zwoTWNeV5cHqOuS4FiHBFVtEuzcuR07d26HQqHA8uUrcMMNt45pmSk2cYAgKRAk5f1b6J0YZxMeDxPAkIuZtR0b0IgSZSyg1Wrx8EOP4YknHob+2A/oKr8c8LOiHDSNmGM/AhSJhx56TJD9ZqAkJCTi8cd/hccffwjvbFfjiWWmgBIAfjoqx9EOKWbPnotLLrmce0ODRCQS4d57H8Rdd90C/e46tJ8/EUGVZbLj2l3QHWqCLiYGN910GweWcovJZAIAqCVD71Xfe++9If+++pahK8PVEto7Ln/JKqPBBmWU0tD14WBReG2w2WwwCOOGAwBkZDB9ZdqNNt4CGO19TEV1ejr/qiX+UlHBBDB+PrYv4ACG3eXAoZNVKCwsDtk1Wq3WoKJiKnbu3A6z2RySHqin09TU5JWPWsD52AFfcX/88cdo8CLMWLnycpSXT4ai+wTkvQ0+n6dp2AmRy4Zbb7lDUI3JzZs3wmKxYGauM+ybdw9ERABz8p3weEisX/+tYPOyTYhVJ/xv+CztsULaZ8OcOfPDegE8FP469ol+OYLI0FM+1aScO3spmg55SWxcnAFz5y5Aa68VJ9qFX6Bu81ZfXHzxpYLPDQB33HEPxGIxXv/mHbg93DtmKIrCq1+/BYIgcPfq+8OiLHfhwiVISEhETU0NnE5uG+JWVlaCoiisWnVNxGVKs9ciOgzeo4iAIEDT9JAyP4Hy4Yfv4t5778DhwwdRkuzGddOt+N3FRtw6x4Z5BS6kxPAfvACAXtvw1+WRHuMamQQoSvZgRZkDj55rwdPnmbB8gh1qsQ2fffZf3HbbdaiuPiKYPULDVpkQHgqEV7LhbKg8CSfY7FelN4DhckVOIlOUKL5QUTEVS5Ysg9TSCWW7/5Layo4ayMxtWLBgEaZPD69KhKGYNKkCl156BTrNIvxQ5b9TuNdKYM1hJWJjY/Hgg4+Fxbp2KHJy8nDBBZdAYrJDfbyDkzF1BxtBuEnccvMdYdnfrbu7EwCglXKzV1VLKIgIoLu7i5PxAsFiMQMAFNLQyC0PRCll1h+sTUKRns7IHHf28Sfb2tnHVNlkZPArqRwIbD/bPccOBDzGoZNVcJMewXrjDsfcuQsAAHV1dSG1g4W1Y+7c+ZyPHfBuqaqqCl9//fWgv23evBnXXHMNLr/88mEjsVH4QyQS4a677gNBENDU7/RJ0FfsMEHddgTpGZm46CJhHX27d/8MAJgSAc27T2dKFuOQ3L17p2BzZmfnIC+/AIoWIwinf9mpypPMwmPx4nP5MI1X/NXdZCs1Qqmr6Q+0N3DB5UKdIAjQYdAg7aKLVgIAth5pEXReh9uDn4+1IyEhETNnhkaPMsN7TW3ubsVnO9ZyPv63+zbgaPMJLF68FIWFxZyPHwgSiQQrV14Bt9uNmpoazsZlx4uPT8CCBZGXOCHyXryIqMi+b9A0CILg7Jp45MhhvP/+24hVenDvORbcvcCKaTluv/tNjGUSdRTOm+DEU+eZcN4EO7q7OvGnP70UMYkA/iKVSiGVSkG4SYjczFphLFechCOMVAagFDOfMa6D3lGihAM333w7FAoldPU/A5QfezeKhLZ+J2QyOW699U7+DOSY6667CfGGeHxXpUSf3b97+FeHlHB5gNtuWy2YlHWgXHPNDVAqldAdauwPggeK2GSHurYDmZlZOPfcZRxZyC0tLcw+ziAb+rnecMMNQ/4bDjEB6KUkWlqaebHXF3p7ewEAOoUmZDawaOWMDb29PYLOm5aWDgDoMvEXwGDHZucKJxITk5CSkooDJ48EvN7dd+IwAGDixElcmuY3M2bMhkgkQn19/egH8wxJkmhqakJqahqys7lXwQg4gPH73/8ea9as6f+9sbER99xzD5qamgAAL774Ij766KPgLYziFzk5uZg3bwFklg5ILaNnBSjbjgA0hWuuvl7wrNZjx2qglNFI0kbeBlktp5GoJXH0aLWg856zYDEIioai2Y8bHE1D1dgDjVaLyZOn8mccT7CBCLGP62D2OJKMDD3lUwEa7rJvxYQoLAI4JSXjkZ9fiEP13eizCuec2HO8A043iRUrLg6plNY119wArVaH9374GGabhbNxnW4n3vz2n5DLFWFXar506XLI5XJUV1dzlkFfW1sLl8uF88+/MKJ6X7CIRGIQhAiINqn1CYImOX2ft2zZBAC4cooNhUmRcV8IFRIxsHyCExPTXTh5sg5NTY2hNok31BoNRC4PCBfzmVCrQ+/EOJtwOpl+LxpJNIARZexiMMTjkksug8hlharN9yoMZUcNxE4zLrzwYiQmJvFoIbcolSpcd/3NcJPAhhrfqzC6LCLsqZchLy8/5JKovqDX63HZZasgcrihCrIKQ3ukGaBp3HjjbSGX/x2OhoZ6KMV0v/QTF8TLSXR1dcJqtXI2pj/09HRDJpFBLgm9hBQbROnu7hZ03uTkFBAEgW4zfwGMbpMDBEEgOTmVtzmCoaysHCabGSc7AlvvHqw7ArFYjJKS8Rxb5h86nQ6lpRPR3t4Ou52/99MXWltb4XK5MGvWXF4q6QL2mFVXV6OioqL/9y+++AIikQifffYZPvnkEyxduhT/+c9/ODEyin8sXXo+AGbxMyI0DVXnUShVKl7Ke0bD7XZDIaEFkW3gA4WUFrzp4KxZc5i5m3t9PkditEFsdWL6tJkR6fxjdZElhG+LJomI1VOODEcVu2mXcrholYglcLlcnEqwBAJBELjwwktA0TR2HG0TZE6aprGtuhUSiQTLlp0vyJzDodVqcdVV18Fst+Dfmz7jbNxPt69Fp6kbK1dejvj4BM7G5QKNRosFCxbBZDKhrY2b97ympgYikSjk72egEAQBpUoJERl51YahgPC4oFRylw2v18cCABzu8FhsvPfee0P+CyfY14p97cYiOq0OIjcJkTeAodPFhNiiswuHgwlgqKXMOiXUG+4oUfhi5crLIZPJoW454JM6Amga6uYDkEgkuOyyVfwbyDGLFp0Lg8GArbVyuH3M29hyXAaKBq644pqwlY46nYsuuhQKhRLaqhaACmy/JbK7oK7rRGZmVv8eP9yw2+1oaqxHqtLNqc8mTcXce2trj3E3qB90tLchTqkPydynE6vSAwA6OvyXCQ8GqVSKhIREdJsdvM3RbXHAYIiHTCbjbY5gGDduAgDgSONRv891e9yoaa5FXl5+WMiQsqoTjY2hTT5qaGBaGfClghFwAMNsNkOv1/f/vnHjRsyePRtxcUxz4dmzZ4dFCcvZyKRJk6FUqSDvHfnDK3b0QewwYcb0WZDJhI8+x8ToYXaK4KcaUlhAUUCvTYwYgTe8aWnpSE5JhaKtz7dFMABFmxEAMG0at011hYKVGWADE6MhJQafF+44nU4QBAGJiLsAhlwsA0VRcLtD7zBdsGARNGoNdh5tAxngAt8fTnaY0NZrxdy5CxAbG3rn24UXXoz4+AR8svUr9FqMQY9nc9rxzw3/g1arwxVXXBW8gTywZAlTAl9bWxv0WCaTCZ2dnaiomAqDIT7o8UJFjE4PkYe/DcJYQuxxDFpfBsuUKdMAALsboppRvmB2EKhpl6KwsCjsZTyCQavVQeR0Q+RdhGo00QoMIWEDFtr+CoxoACPK2CQmRo/588+BxG6ErG90SVWpuR1SWzfmzJmPuDgBO/pyhEwmw7nnnge7m0Bly+j3XYoCdtfLoNPpMGfOPAEs5AadToelS8+D2OaEosX3xMKBqGo7AIrGpZdeCVGIexcOx7FjNaBoGukqbh026SomQbGqqpLTcX3Bbrehz9SHOLVe8LmHIs4bwGhraxV87uTkFBitTl726BRFw2h1Ijk5sAbZQlBcXAIAqAoggHGirR4ujwvFxeO4Nisg2F5JoQxg0DSNxsZGaDRajBvHT1VKwFfKhISEfudER0cHKisrMXv2qSiL1WoN2wvxWEcslqB0Qhkk9l6IXMNvCNhFVGnpRKFMG8S0aTPgIYG99eEZkR2JI20SmB0EpgncVI0gCEwsK4fI5YHEx4ZLsg6mIVRZWTmPlvEHm6Un9zWA4T2OPS/csVjMUEqVnGYcKWUK79jcyRYFikKhwKLFS9FndaLGH+mzANnprfQ4//wLeZ/LF2QyOa6++no43S58tPnLoMf7fMdamGxmXHbZlWEreTJhQhni4xNw8uTJoDX02SZg55yzmAvTQobBYIDYZQXoyJNMFBSKhMhl4zRYlZubh8LCYhxqlqHdFPp1qb9a0ULzU40cFA0sW7Yi1Kbwik6nA0HRkFidUKnVEVmhGsnY7UxjT423KazNZgulOVGi8ApbQaroHD3bXOk9ZunS83i1iU/YfmUHmkYPYNT3iNFnF2Hu3AWQSiMr0WD5cuY+qToRgIwUTUNd2wGFQokFCxZybBl37Nu3BwCQq3FzOm6Omhlv//69nI7rC6yDN0ETHolROoUWcokMTU0Ngs+dmJgEmgb6bNwnfvbZnKAoGklJyZyPzRWZmVmQSqU41nLS73OPtTJ71Pz8Qo6tCoy0tAykpqahubk5ZD3s+vr6YDabUVExlTdJvIB3cosWLcKHH36I3/72t1i9ejVkMhmWLDmlWVhTUxOW3ebPFtgvksQ2vJYe+1hBQWi+dMuXr4BEIsbXh5Qw+dnoK5TY3cCn+xh5ixUrLhJ8frbUTdZt9ul4WbcFCYlJEZu9zG5qZT4GMORietB54Y6prw9qKbdlhyrveCaTidNxA4XduP3Ms4yUw+3BgboupKamhSwwOxTnnrsc8fEJ+GzHGlgcgWu9ujxufLz5S2g0Glx44UoOLeQWkUiEmTNnw+FwoKMjOG3g+vp6iEQiTJ8+iyPrQkNaWjpA0xDb+0JtSlgjsRsBcN/s75prbgBNA+9uU8PkiJz1htAcapbgh2oFEhMSsXjx0lCbwytaLVNdIrY4oNVoQ2zN2YfdbgeBUz0wohJSUcYy48eXIjbOAGV37cgV9DQNRXcttFodystD2xQ2GLKzcxBviEdNu3RUwYCadsbJNWXKdAEs45bc3Dxk5+RC0WL0u5m3xGiDxOLArFlzOJXN5Jrdu3+GiAByNdxW9WukNFKVbhw6dEDwpMOGBkYlJlkbHjK8BEEgSZuApsZGwR3PbI8do4X7AIbR2/8ynPv4iMUS5OTk4kRbPUg/exXWtjKfo9zcfD5MC4iKiqlwuVzo6uoKyfwtLS39dvBFwAGMBx54AEuWLMEXX3yB7u5uvPDCC4iPZxykFosF69atG1SREUVYMjOzAJxyBgyFxMY8lpGRJYBFZ2IwxOO22+6GyUHgnW1quCJASoqkgA93qNBpFmHVqmuRk5MnuA3Z2bkAmIXPaBBOD8R2F3JDYCdXWK1MFYFS7FsAgz0uHKoPRoOiKPQae6FTcus8Ycfr6RG2Gdhw5OXlIz+/AEcae2BzcpvBM5DD9d1weUgsWbIsrDR0ZTIZLr74MtidDqzZ/UPA4/x4YAt6LEacf/5FUKvVHFrIPWzAIZgyVqfTic7OTkyYUAatNrIdjOx1W2oNzYIyUpB4X5+srGxOx505czYuuOBiNBnF+N1aHXackPmszX020GMl8J9dSryxWQORWIInnnwGCoUi1GbxisYbtCDoU8GMKMJhs9kgF9NQiCIr6SRKlEAQiUSYMX0mRG47JNbOYY+T2HogdlowffrMsG3o7AsEQaBs4iSYHQS6LCO7m050Mc8zUpUCZs2cA4KkIG/zL0GF7WcZrr0vAKYnQ01NFfI1LsjF3I8/LsYFl8uF3bt3cj/4CJw8yajIJOsSBZ13JFJ0SXC6nGhtbRZ0XraXIi8VGFbXoDnClaysHLg8LrQb/duj1Xc2giCIfr9rODB5MhM4aG4W9nPEws47efIU3uYIOIChVqvxxz/+Ebt27cKPP/6I5cuX9z+mUqmwadMm3H///ZwYGcV/2FItsXP4LH2x0wydLgYqVeii/hdffBkWLFiE450SvLZBA5srfJyOp+PyAG9sVuNgswzl5RW44YabQ2JHf3DKh4ZLEjOT0ZaRkcmrTXxiNjOfYaXE1wAG5T0vPKoPRqK3twckSSJGwa3zRK9gerN0dgaX/c4lCxcuAUnROHiSPwfuvtqO/rnCjeXLV0AuV+Cz7WsDbq7+2Y41EIlEuOCCi7k1jgdKS8sgFovR2hq4nmtbWxtomkZ5eQWHloUGVmNVZhKmmX2kwr4+JSXc66auXv0A7rnnQXigwD9/VuGpL2LwyR4lTnaLEaJK65BidwF7GqR4fYMav/4qBltr5cjLy8drr/0D48eXhto83hkYBA73gPBYxG63QS6i+qtmWUmpKFHGKmxGqry3adhjZEbmMdYJFckUFRUDABp6R/Z8N/VKkJqaFrGJKpMmMWtUWadvyggs8k5mn1pePplzm7hiy5aNAIBSPT99JdlxN278iZfxh6O29jgAIDUmfKSN0mKYPhGsbULBKnSwwQYuYYMibJJ7uJKezvjJGjqHvzYPRUNHMxITk8Iq4aesrBwEQaCtTfj9Jk3TaGtrQ0pKKq9VN7yE9kUiUcTehMYKCQlMRFnkHD4LXeKyIj45tDJfBEHgF7/4JSQSCb7//lv86XsNbpltRUpMeHkTuiwivLNNhYYeCaZPn4lf/vI3IcuMUavVUCpVcNlHv9GIvcewn4dIxGhkMlRYmYHRUHuP6+sz8mUSZ7S2MmV28Wpum00bvOOx44cD8+cvxBtv/AUHT3ZhRhH3zbxsTjeOthpRXDwOKSmpnI8fLFqtFvPnn4PvvluLQ/VVKMv2r+FXXXsDqhqPYebM2WFdisuiVKpQWFiMmpoqeDyegPTl2cVXWVn4yIEFSmFhMRQKJTy9wuvbDoSUayB2D+0oJOUh7qlC05D3NkClVvNSji0SiXDhhZdgxoxZ+OabL7H+u7XYdKwLm47JoZLRyE90ozDRg6IkD5J0FPgo4opVUTA7hs4dilXxu+5xeYC6LgmOdkhwtF2Chh4J2J6NpaUTsXTpeTjnnMURp0EeKIMDGOHZT2gsw1ZgiAhGIjRagRFlrMNKm8pMLbBiaKe1zMSs28fCuodVKWjrEwMYuvra4iRgdhAoy8kV0DJuKSwsAkGIIO32r/Jf1mNFSkoqdLoYniwLDpqm8e23ayAmgAk8BTCSFSSSFB5s27YZZrNZEP8hTdM4dqwGCRoDlNLwcTxnxDJ716NHqzFv3jmCzWswGAAAZh/8Sv7CjhkXZ+B8bC5JTWVe+9aedp/PcXvc6DR1Y2JOeEn9abVaZGfnorGxHhRFCdqT2mg0wul08l5N57NH4bXXXgNBELjrrrsgEonw2muvjXoOQRBYvXp1UAZGCQy9nnFgil3DbAgoDwiPMywuKBKJBI888gQMBgM++uhf+P13Olw+2YYZuS5eHAj+sr9Rin/9rIbdzWRR33vvQyFv9hgbGwuLcfgSZBaRw91/fKTCyiD5GsDQehtChot80kg0NTHyOgZNHKfjJmgMg8YPBxISElFYWIzjx2tgd3mglHH7Hapq7AFF0ZgzZx6n43LJuecux3ffrcW3ezf4HcBYv4/JglqyZBkfpvFCcfE4VFVVoqenB4mJ/gdROzs7IRKJUFBQxIN1wiKVSlFRMQVbt26G2NYLUhWaa7JLnwaZZejKLJc+TWBrBiOxdUPi6MPU+efweo9NTEzCTTfdhuuvvxl79vyM7du3Yt++PTjY1IyDTTIAgEpGI8vgQVYc2f9TqwiscmogBYkeNPQM/dwKErnT0aRooMMkwsluCep7xKjvFqPZeCpgIZGIMX7CBEyaVIFzzlmEtLSzr2edSqUe8P/w1R8fq9jtNmi88lEyER2twIgy5omNjUNqahqaOtuYPhhDbHJlpjbExydERKLKaLDV/+2m4R1o7GOhkrPmAqVShYSEBLRYjD6fQ7g9EDncnMtlcsmxYzWoqzuBMr0Dah9VEPyFIICpBge+bpbgxx+/w0UXXcrLPANpaWmGyWTClIzwChKm61MhIkSorq4SdN7YWMYHYeIxgMHOEa6wyjWtvb4rV3T0dYGmw7NB+fjxpairq0VPT4+g1S/t7UwAiO3Xyxd+BzBuu+02yGSyaAAjzJHJZNBotHAPk2nJBjbCxbEtEolwyy13Yty4UvzhD7/Dv3YBh1skuHKqHToOnAaBYHMR+N9eJX4+KYNCIccvHnwkbJpaKhRKECQFepQID+Gh+o+PVDo7O6CRUJD4GECO8QYwwkk+aTjq6k4AAFJ13N78dAotVDIlTp48wem4wTJr1hwcPVqNYy29KMvmVg+zqqkHADBjRvj2XpowoQxxsXHYeuRnPHTxHRCLfBeU3VS5A0qlEtOmzeDRQm4pLGQCD11dXX4HMGiaRnd3NzIzs6BURu71ayDnnLMYW7duhqqjGubsmSGxwZIxFfKeekhtPYP+7lbFwZIZWskKZXsNAGDBgsWCzCcWizFt2kxMm8a8Fx0d7di3bw8OHNiHqqpKVDU3oar1VDVCnJpCZpwHmXEkMmNJZMSRUMn8W58sG+9AZYsUbabB3/2UGBLLxwfWxJKmmSrRhl4xGnvEaOgRo7FXAof71PpAJpOhuKQQ48eXYtKkCowfXzpmvleBMvD5n+2vhdBQFAWHwwG5hvn+yEV0tIl3lLOCoqIStLR8D7HDBFI5OPNe5LRA7LKiuJg/7XAhiYszQC6Tods6fHCe7Y8RjpXT/pCYmIT2yg4me0A0evalOAKaG3/++f8AANMM/DbYnhzrwNoWDb788jNccMElvGeMV1UdAQBkxYVX4oZcIkOKLhE1NdUBV64HApv0bOElgOH2zqHnfGwuYZVKukw9oxx5is6+nkHnhhPFxSX4+uvP0dnZKWgAo6Ojwzu/f0ma/uLzN6O6unrE36OEH3FxcTC1Du3EFbnt/ceEEzNnzsZf//o2/vCHF7F//x7Udklx+WQbJme6Ba3GqGyR4D+71TDaCBQVleAXv/hlWPWRkEqlIEgatGSUAIZX2DvUFSOBQtM0OjrakSDzvduqVMRUa7BR4HCmtvYYCILgvIkYQRBIjUnGicZ62O32sHHOVFRMxbvvvomjzUZOAxgUTeNoixEJCYlh9T09HZFIhBkzZ2PNmq9Q01SLcZmFPp3X1NWKhs5mzJ27ADKZnGcruYNtXG00Gv0+12q1wu1290sQjAVmzJgFjVYLqu0IzJlTAZHw12VaIkN32UqoWw5A07QPBOUBKVWhu2wlaLFMcHv6Id1Qd1QhRq8PWZAuMTEJS5eeh6VLzwMAmEwmHD1ajerqKtTUVKGm5gj2Nxqxf0BhW7yGCWrkGDzIjieRrichGSEuqZACDyyyYMNROX6olsNNEtApKNy/0AK5j8pNFieBk11i1HVLcLKbCVbYB/QPExEE0jOyUFIyDkVFJSguLkF2dm7ErgP4YmBih1wePjISZwNssILtfyEXUzDZrKE0KUoUQSgoKMJPP30PqaXzjACG1NLZf8xYgCAIJCWnoKf95LDH9FgZZ3VyMvfSskKi0WhA0DQIigLtQ3KSyM3sa8NVvrCnpxsbfvoeSQoPCrRDy39xhUZKY1KsHbsbG7B798+8rwEPHz4AAMiND7+qn1xDFppPtKG29hiKikoEmVMqlUKtVsPi4P59tjrcUCpVYb931ev1IAgC3aZen8/psTDHhmN1CRtA6OzsREmJMJ8jgElYVCqVvDc1j+5mxjBxcQY0NNQD1JnOX5HT2n9MuJGYmISXXvoTvvnmS7zxxut4dzuBfY0uXDGF/2oMm4vAZ/sU2FEnh0Qiwc0334zLL18Vsn4Xw0GSHp8yPNhjqCE+A5FAd3cXnE4nDHr/7DfISTS3NoMkPWH33rGQpAdHj1YjVZcMuYR7x2F2bAaOd9bh2LEa3rUIfSU/vxAatQbH24ycjttutMHqcGP2vAoQ4aA7NwIVFVOxZs1X2HfisM8BjH0nDvWfG0lkZGSAIIiAAhjsOXwvgoREJpPjghUX49///gCq9mrYUvgtsR0OWqqAJWs6FD0nIbV0gpKrQYdYB1jVdgSE24GLLrw6bHow6HQ6TJkyDVOmTAPABNS7ujpx7FgNjh6t8f6sxt6GPuxtYK7hUjGQEetBTjzTSyM/0QPpab4MtZzG+aUOVLZI0NgrQYySglo+/Nqmz07gSKsUxzskqOsWo9N8akCCIJCRkYXCwiIUFBShsLAIubn5YRO0Dmfk8lMb6nBqwHg24HB4AxiiARUYDgdomg77e3iUKMGQn18AAJBaO+FIGNzrSWrtGnTMWCAhIRENDfVwkzjjXggAvTYmgBGIzGg4IZUyawCCpECPlMXA4tVzDJf1zul89tkn8JAk5qTaBUkgnZtox+4eJT7++F8CBDAOQiGRIy2MGniz5MZnY/OJnTh06IBgAQwA0On0sJm6OB/X6nAjJib8HPynIxZLoNFo0Wcz+XyO0cocGxOj58mqwElLS4dcLkd3t3By6iRJwmg0Yty4CRCLfVeYCISAPXslJSV4+eWXccEFFwz5+Jo1a/Dwww+jqkpYHbcopzAYmJIh0RAyUmKXZdAx4QZBEFix4iJUVEzFn/70Eg4c2IfjHVJcOcWGSZn8ZAJUtUrwr11M1UVhYTEeeeQJZGfn8DJXsDgcTlBiEaMdMQK0WOQ9nt/yT75obGQa3iYo/AtgJMhJ1FtJtLW1hq22d23tcTgcDmSn8GNftoEZ9/Dhg2ETwBCLxSguGY/du3fC6nBDreBm4V7fwSwixo8v5WQ8PiktLQcAHDx5BNdgpU/nHKw74j03vPRaR0MmkyMhIREmk+8LQhb2nNTUdK7NCikXX3wZPv3sE2gbdsGWWAyEaYBVSAjSDW3THihVKlx44SWhNmdYCIJAQkIiEhISMWvWXABMUKO9vQ1VVZU4cqQSVVWHUVt7HCe6JPihGpBJgMJEN8aluDExw+1TEgZNA/U9YhxskqKqVYIm46nPiEajwbRpE1BSMh7jxk1AUVFJtH9DgAysuhgYzIjCP2wFhpTtgSGmQZIk3G5X2GdqRokSDLm5TNBCYj3TsSTxBjByc8dO5Wl8PFNtbbSJkKA9s5dhn53ZpxoM3MrKCo3TyeyzKbFv8kfs/tzp5Kc5djCYTCZ8+cWniJFSqIgTxn+QoiRRrHPi4MH9qKw8xNt+rqenGw0N9RiXXAgRIVxzY1/Jj88GABw4sB+XXbZKsHl1Oh26O9s4H9fq9CAhLTyb1J+OVqOFxY9KUIudOVaIxvP+IhaLkZeXj+rqKsEaeff29oKiKOTl5Y9+cJAEvHOmR3GckiQZzaIJMawmm9hpOeMx9m8JCeGrvQgwmpgvvfQK1qz5Cm+88Rre3kZgWosLl1fYwJHvE24S+PKAAhuOKsK66mIgxr5eUHJJf5Pu4aC8mhR9fX1CmMU5dXW1AIBkhX/NTZO8x9fVnQjbAMa+fXsAAIWJubyMnx+fA4IgsG/fHlx99fW8zBEIJSXjsHv3TjR2mVGczk1WRkOn2Tv2eE7G4xO9Xo+kxGQcb6nz+ZyjLSegUqmRlhZ5zvyUlFQcPLjf7wWU2cy8p5EuK3A6sbGxuOzSK/HPf74HTdMeWLKmh9qkkKNp3A2Ry4bLV90CnS4yNjosBEEgOTkFyckpOOccpneHw+FAdfUR7N69E7t27cThuhM43CLFp/uASZkuLCh0IjPuzKC8mwT2Nkix8agcjb3M+kMmk2Hq1EmYOnUGJk+uQHp6piAbkbOBgUGLqISUsNhsTGJVv4SUN5Bht9ujAYwoYxqdTgeDIR4dljMDGFJrN7Q6XViqIwQKmyjZZyeQMISfr88ugkatjvgqOIvFAlpEAL4GMLzlKBaLmU+zAuLTTz+G3eHA4jSbz/0nuWBRsg3VJjk++OAdvPjin3iZ48CB/QCAwoTwDBLGKHVI0ibg4MH9gqpIaLU6uDwkPCQFiY+f4dHwkBRcHjIsHfxDoVKr0drru4SU1cEEMMI1iSgrKxdHjlSir69PkJ7Hvd7XjpWP5pOgvhXDBSgsFgu2bNkSNg2iz1bYxlBix5nZr2KH2XtM+JdsikQirFhxESZNqsCLLz6Hn2uqUNclwW1zLUiJOTObwx96rAT+sVmDJqMYmZlZeOKJZwSJHAaD0+mExWwGmRwzagCD9EZ5uru5LwsUgtra4wCYzAx/SFUyAYzjx49hzpz5nNvFBbt3/wwCBAoS+LnQq2RKZOhTUVl5CFarFWq1mpd5/IXNPmvttXIWwGjttUIqlSIjIzyDVaeTm5eH7du3wmQzQ6caeWHnIT1o6GxGybjxEem4TEhIBE3TsNls0Gh81/plHVyRcI/ylyuuuArffrcWaNoLe0IhSNXZu1aSWHugadqHxKRkXHbZlaE2hxMUCgXKyyejvHwybr31LnR0tGPHjq348svPsOtkPXadlGF2nnNQAWWzUYS3t2rQYRZBJBJh7tx5WLp0OSZOnBytDuAJufyUdKNMFsL+L2chQ0lIAcx1PxzlGKJE4ZLs7Bx079kFghzQNJemIbH3Iadg4phKAGWDMSaHCMCZezmTQ4S4xPBUg/CHtvZWkCo5fNVbItXMfT3c+jX29Rnx2acfQyelMCPeLujcWWoPirQu7N27GwcP7udFPWD/fiZ5sCAhPBU2AKAgIRdbTuzE0aM1giXmsfszm9MDnYqb9ZDd5fGOHRkBDIVCAYfL94ooh9vlPS88JVuzs7MBMIEFYQMY/H+3/PKGvPbaaygpKUFJSQkIgsCjjz7a//vAf1OnTsUXX3yB8847jy+7o/gAm7kqGSqA4TRBKpNFVJZHWlo6XnnldVx11XXotIjwp+91ONwceAyutlOM33+nQ5NRjBUrLsLrr78Z9sELAGhvbwUAkJrRs1U8WuaY1tYWXm3ii6qqSijFNAxy/wIYaSrmplldfYQPs4LGZDLh0KEDyDFkQiPnL7AwIaUYHo8He/bs4m0Of2FvbO3GM6XtAoGmabQbbcjIyArrqqmBpKamAQBaekbfuHQYu0BSZP85kQabfWe1+teg1Wq1QiQSQa8fe859pVKFe+95AKBI6I9+D9DBBeIjFoqE/uh6gKZw370PRnwG5nAkJibhwgtX4h//eB8vvfQK8vMLsLVWjnZvLwuHh8Af1+vQYRbhoosuxfvvf4Snn34W06bNjAYveITVLAcQzfoXmNObeMu8PyNV7jRKFH/IymLWwRLbgGxfigRAIzMzOyQ28cWpAMaZjn2SAiwOIiyb4PqD3W5DT3d3/57bF2iJGKRShqbmRh4t85+PPvon7A4HFiZZIQ1BztTSVGav8M47/xhV7cVfaJrG3r27oZapkKYP3+ruokSmOmTPnt2CzckGGdigAxc4+gMY4dmo/nRkMhlIioSH9O01cLqd/eeFIxkZTA9JoVRY2HkyMjJ5n8svb09paSmuvvpq0DSNf/3rX5g9e3Z/dIeFIAgolUqMHz8e5557Lpe2RvET1uEldpz5wZXY+5CSmhpxWR4SiQQ33XQb8vIK8PvfP483tgDXT7diSrZ/fTGqWiV4Y4sGNMS4//4Hcf75F/JkMfc0NNQDADy60RdKlFIGWiJCY2M932ZxjsnUh6amRhRp3T71Kx+ISkIjUeFBdfURkCTJezMhf9mxYysoikJpCr8NukpTx2HNkR+wefMGzJu3gNe5fCUpKRkikQjdZm4cFVaHG053ZDn4k5KYhXNbbweK00cOmrYZO73nhF+zOV9gN6+sw8pX7HY7YmPjwu67yxUzZ87BkiXLsH79Omjrd8KcPTPUJgmOtn4npJZOLF++AtOmjf3nTxAEJk2qwJ///Fe88srL+OGH7wAAPVYRQIjx3HO/w/TpY/91CBcGS0iF5wZ0rGK3MwkMMrYHhtdRxlZmRIkylklPZ6qFxXZj/98IiknUEsL5IyRxcUxwwuI40xtudRKggYhKphyKY8eOAgDcsf4lpLljVWhraYHJZIJOp+PDNL/o6GjH55//D3FyEtMMoQkmp6s8KNU7cajyEHbs2IaZM2dzNnZLSzPa29swKb00LPtfsBQk5HoloHfj2mtvEGROVqXBwWEAwx5hAQyplFEt8ZAkJD4kRLKBDva8cIO9zwTShzIQ+vr6oNPpBJEC9iuAMX/+fMyfz8ix2O12rFq1ChMnRlZT0bOJpKQkiMViSOyDAxiE2wGRx4G0tMhx+J3OvHkLkJycgscffxDv7wREIism+9jcu6aNCV6IxTI8+9xLmDSpgmdruYWVVfJpoUQQcOtVOHmyDm63O2wvskNx8OB+AECOxjXygcOQo3ZjZ7cNtbXHUFhYzKFlwbNhww8AgPL0CbzOk6pLQpI2ATt2bIPdbodSGfoyR4lEgoSERPSafdeZHIkeC5MBEUm9EvR6PQCgzza69m2flVl4RGqGGlu2GkgAIyNj7MlHDeTuu+9HZeVhtDTugUuXAmdctqDzU2LpoJ9CIu8+AU3TXqSnZ+COO+4RfP5QIpPJcP/9j2DDhh9AkiRIisDKlZdGgxcCMzBrbmA1RhT+6a/A6Je4lRXTAACLNUlEQVSQogb9PUqUsQzbz2zg/pygyUGPjRVYSbihKjDMTuZv7Jo4UqmqqgQAuAz+OWpdBg0ULUZUV1eGRRLH+++/DY/Hg6VpVkF7X5zO0hQrKvvkePvtv2PatBmcJTLt3ctUNLAVDuGKSqZEZmw6qqoqYbfboFTy32OBDTJwWYFhdzHXNJUqMgIYIhHzOSMp31Q/SIpZt4Rrol1CQiIkEqkgFRg0TcNsNqOgoIj3uQA/JaQG8sILL0SDF2GOWCxBcnLKGQEMibciI9IXSYWFRXjxxVegVqnxwU41mnpH/zh3WUR4a5sGIrE0IoMXwClZJJePmR6uOA08Hg9qa4/xaRbn7N3L6FTmaf2rrmEp0Lq84whXgukL3d1d2Lt3N7LjMmFQ8yuPQxAEJmeUwel0YOvWzbzO5Q8GgwEmu5uT8mCznXmfIymDS6tlMq3MPgQwTHaL95zI0BA9HXbz6o80CEmScLlcEb+pHQ21Wo1f/eo5yGRyxNZ8B4mtR9D5LZnT4IjLhiVzmqDzSqzdiK1ZD5lcjl/96rdh2wCPTxQKxaAspdmz54bQmrOTgQGMqFSXsPRXYLBNvMWnemBEiTLWGUohga3ASElJDYlNfMGu46yuMwMYFiezbxciY5dP2H2mK8m/KgpnUoz3/D2c2+QvdXW1WL9+HVKVHkyM9b0PAB8kKkhMibOjvv4kvv/+W87G3bePeZ+KE8NfLrw4MQ8ejweHDh0QZD61mgkyON3+SXaPBFvNES49OEeDVaWh4Ztv4pQPIzzVbMRiMZKTU2A2j+5rCBabzQaSJAW7fwUdX21ra8OPP/6IL774Ap9//vkZ/6KElrS0dIjcNgzsFsmWrKamRnYAA2CCGI8/8Qw8JPD2Ng1GChyTFPDuNhXsLuD++x+NyOAFSXpQeeQw3DEq0HLfsmZdCcyCSqibIBfQNI1du3ZAKaaRrgosGyBf6wYBYNeundwaFyQ//PAdKIrC9KxJgsw3LbMcAPDdd2sEmc8X9Po4kBQFBwcLJYvD5R0zcnolsFr/Tvfo1UWsxqZcHpn9AQIJYDidzHOO9E2tL+Tm5uHRR58A4XEhrvIbiFzCOfBc+nT0jl8Bl164tYDIZUXckW9AkG48/thTgjR7C1emT5/V///09LElGxIJDOyZFEnVqWMBm42ptFCc1sSbDWxEiTKWiY+PB0GIIHYOcCx5KzCSkpJCZBU/qFRqiEQiWJ1nupxs3goMNqknErHZbDh06ABccWpQPu7LWVzxWtASMXbtDv0+9e233wBN0zgv1eK3bDMfLEmxQSoC3nvvzf49QTCQJIn9+/YiQWNAHM/Jg1xQ6A2y7NsnTHCLTSTitAeGm63AiJQABvOT694roSQlJQV2ux1ud2DJwL7CylQJpYYRcMdTp9OJxx57DN99xzjjCILof8MH9lW4+OKLgzYySuD068IPKIdiKzIivQKDZdq0Gbj88qvwySf/xk81ciwdP/SN7uc6Gep7JFi8eCmWLFkmsJXccORIJRx2O5wZvuvhO70ZIXv37sbll1/Fl2mcUl9/Eu3tbSiPdUIc4EJKJaGRpXajsvJQ2OiL0jSNtWu/hlQsxeSMMkHmNKjjUJiQi/3796K5uSksvvdsqarD5YFSFlzjbYe3RDWSKhRYuRKXZ/QAhsvDLDokkshoUH46MTFMEMKfAAZ77FivwGCZP38hGhsb8P77byO28mv0lF0MWjz2JG2YIM3XEDtMuOmm2zFnzvxQmxRSJkwoxbp1XwM49T2JEhoi9foaqdhsTGUhW3mh8P60Wq0hsylKFKEQiyUwGAxos1hAS5jqL4KiEBOjh0w2tqrBCIKARqOB3X2mbKzNzQYwImf9fjq7du2Ax+OBIz0Ax51YBEdKDBob6tHQUI/MzCzuDfSBQ4cOYOfO7cjXuFCo49fR6SsxUgpzE6z4sR346qvPcNllq4Iar7b2GCxWCybm8Nt7kiuy4zIgE0sFq86JVmAAFMWsQ3ztj3LK3x2+AQ+256bFYumXdOYDi4VZ04V9Bcaf/vQnrF+/Hg888AA++OAD0DSNF198EW+//TbmzZuH4uJifPHFF1zaGiUAUlKYAAarrQmcKlkdS2Wq11xzA/R6Pb6vVsI+xL2XpIA1h5WQy+W45ZY7hDeQI37+eTsAwJHm+0WIUsrgilPjwIF9EZPdtnXrJgDAuJjA+l+wjItxgqIo7Ny5jQuzgoYNIkxOL4VSKlxG/cycqQCAtWu/EmzOkWAzPbiowGAXSOHQ38NX+rM8/DhHJArfhnMjwVZRBBLA0GrPHqfuNdfcgOXLV0Bm6UDskbWDkg7GBJQHsUe+gdTSiRUrLsaqVdeE2qKQM7DCKFK/32OFaAWGsLCBCqWY0ZA+FcCwhMymKFGExGAwQOwesCejKRgMkSOF6g9qtQb2ISSkHN4ARqQ4OIdiy5aNAAB7RmB96uwZhkHjCA1N03j77TcAAMtTwyuAPD/JDpWExr///UHQ94YDB/YBAArCvP8Fi1QsQY4hC3V1tTCZ+O9hwEsFRoQFMGiaWY8MTMQfCfY4ytsLIxxJTmYSntkAA1+wMlVJSb4nWAdDwDumb7/9FitXrsTtt9+O/HymzCkpKQmzZs3C3//+d2i1Wvzzn//kzNDhqK2txU033YTy8nLMnj0bL7/8MlyukZ2eHR0dePnll3HRRRdh0qRJmDdvHh5++GE0NzcPOm7nzp0oKio649+DDz7I51PiFLaUh6AGBjDMEIlESEhICJVZnKNSqbBy5RVwuIH9jWdmrla1SWC0EzjvvAtgMMSHwMLgoWkamzZtAC0R9+tm+oojPQ4ejwc7doSHI380tmzZCDEBFOuCC2CU6plqnM2bNwRtExd8882XAIBZ3oCCUJSljoNGrsa6dWtGvT4KAas97iGDv+m7Sa8ERQRpmAdSnRqpJa1SqRRKpcqvEnA2gHE2ZaUTBIH77nsIs2fPhdzYiNjqb8dOEIMiEVu1DvK+ZsyduwCrV9/v8wZhLBPJWadjjWgASVjYAIbijAqMaAAjytmBXh8LgvT0LwgJ0IiJCX9pm0BQKlVwes685zu9AQwhmhTzgd1uw/bt2+COUcITE9hzcKTHgRaL8NNP33NsnW/s2bMLlZWHUKp3IkPNnfOaC5RiGgsSrTCbzfjss/8FNdbBg/sBAPnx2cEbJhD5CdkAgEOHDvI+F1uBwaoacAGbpBgpAQw2ECH2cT0o9lZqhHMAIzGRkSTkuw8GGyAJ+wBGd3c3ysoYCRRWz9tut/c/vnTpUqxfvz5I80amr68PN9xwA9xuN1599VU8+OCD+Pjjj/Hiiy+OeF5lZSXWr1+P5cuX4y9/+Qsef/xxHD16FJdffjl6es5sovnCCy/go48+6v/3wAMP8PSMuIf94II+9eUSO80wxCcM0v8dCyxadC4IgsDe+jMz6fY2MA7TSJWOAoCamiq0trYwWR5i/7669iwmaPPjj/x+J7mgsbEBtbXHUaxz9m9qA8Ugp5CqdGP37p9hsfDfxGgkuru7sHXrJqTrU5AdlyHo3FKxBDOyK2Ay9WHTpg2Czj2kPV4JJbcn+Js+6V04SCSRk0FLkswmQerDNVgiEg86JxKJiYkJqALjbApgAIysxBNPPIOKiqlQdJ+Avmb9oHt3REKR0Fd/C0XPSUydOh2PP/40xGJxqK0KCzSaaAAjXCB8lAyIwg1mM6OXzK7xVN5KDCGaTUaJEg70X/8HJKeM1aC2QiGHmzwzgMH6SiMpAWkgW7dugcvlZPbYASZl0FIx7GmxqK8/idra4xxbOMrcNI0PPngbALAkObyqL1hmxduhkdD49H//CXgfT9M0jhypRILGAJ0icr5jeYZsAMCRI4d5n4sNMjjc3O012WqOSOmBwQYifJWQEvfvz8M32YwNKPBdgcGOHx8vTHJ8wCv2+Ph49PYyeoZKpRIxMTGoq6vrf9xisXDSdGck/vOf/8BqteK1117D3Llzcdlll+HRRx/Ff/7zH7S3tw97XkVFBdauXYs777wTM2fOxHnnnYd//OMf6OnpGbLxeEFBAcrLy/v/ZWWFRqMwEOLjGcd1fwUGDYhdNsRHaBXCSCQkJCI7Owd13RKcnthd2ymBXq9HXl5BaIzjgLVrGa1sW47/FwePTgmXQYOff96Jzs4Ork3jlI0bfwQAlOm5uX5MjHXC4/Fg27YtnIwXKGvXfgOSJDEnd3pIso9n50wDAQLffBN6aT8225XmQDeSrUyIJKco20xL4kMAgw1yuFzhoUsbCDEx+gADGHqeLApfZDIZnnnmeUycOAnKruPQV0dwEIMioa/5DsruE5g8eQp+9avfRqV6BsBWokUJPXSkfsciFJPJBIWY7u9xppLQ/X+PEuVsgJVsAagh/ja2kEplcJNnVh+zQQ02qSnS+PHH7wAAtuzgnHZ27/lCJxkeOLAPVVVHUKp3IlkZnk5YmRiYn2iFxWrF118Htn9tamqE2WwSPHkwWDJj0yAiRKiqquR9LrY3pc3JvYRUpCTrsIEINjAxGmJx5FRgCBHAiI2NE2xfE3AAo6ysDHv37u3//ZxzzsFbb72FL7/8Ep9//jneffddlJeXc2HjsGzatAkzZ84c1Ohz+fLloCgKW7duHfY8nU53RsO+5ORkxMXFoaMjvJ27/qLV6pjMsv5VAw2CJqHXj80y1eLicXB6CHSaT320KZpAj1WEoqJxEStbYTab8cMP6+HRKOBMDiwr2VqQDJqmsGZNePRBGAqapvHjj+shE9EYH8NRAMMbCAlVeS7A3BTXrv0KCqkcFX40745VDf9ej/TYUBjUsShJLkBl5SHU1Z3w61yuYbNduVBF8vbciqjvNivjJfdh0yaXMplpbnfopb8CRa/Xw+Px9AduRuNsDmAATFXrs8++iLKycii7jkFf/V3kyUlRJGKrv4Wyqxbl5RX49a9/F7FZlnwRSdessY6bw6zDKKPTZ+yFWnLqmiYXMcGMvj5j6IyKEkVAFAqmbxsxYCHMKlqMNVifC3Xamp9NNozExIbe3h7s2bMbzngtSG1w75sjVQ9KLsGPP64X1Bn6ySf/BgAsSArv/pjT4x1QiGl89tknAckgHz9+FACQFZvOtWm8IpPIkKJLwvHjR3n/XCiVKohEov6gAxfYnB4QBBExElIkSYIgCJ8lRUVE+FdgxMbGQSKR8hrAoGkaVqu1v22BEAQcwLjuuuuQnp7efyG5//77odVq8Ytf/AKPP/44tFotfvnLX3Jm6FCcOHECubm5g/6m0+mQkJCAEyf8c9DV1dWhu7sbeXlnNve5/fbbUVJSgnnz5uGll17yK5M01IhEImi1WhBsdpn3p06nC6FV/JGczDQm77Gd+mizKjWpqZHbtPzLLz+Fy+WEpTA54DJVW5YBlFyKL778NGybeR8/fhRNTY0YF+OEjKOE+jg5hWy1G/v27kZv75kScUKwZ88udHZ2YEpGOeQS3514BQm5AT02HLNzpgEA1q372u9zuSUy+zlwBVudKJOMHsCQeTd2fFc08gkbMPf13snKUcbGjs1Auy8olUo899xL/ZUYEdUTgyIRW7UWCm/lxXPPvThmHTPBEA1ghJaBDgGHwz7CkVG4hKZpGPuM0EhOrQMIAtBIKBiNvSG0LEoU4RgqU3WsVuWxDsHTAxjs75HYg2jTpp9A0xTs2RwoWohFsGcY0N3dhcOH+e93ADBVCbt27USuxoUMVXgH8BViGjMMdvT29gYkg1xbewwAkKYXzsHKFen6FDgcDrS2No9+cBCIRCJoNBpOKzDsLg/UKnXEfL8pivJZPgoYoCYRxhW8TM/jRF4DGHa7HSRJnmpbIAABN0GYMmUKpkyZ0v97SkoK1q5di6NHj0IkEiE3N/eMKgeuMZlMQzriY2Ji0NfX5/M4NE3jt7/9LRITE3H++ef3/12r1eLWW2/F1KlTIZfLsWPHDrz99ts4ceIE/v73vwdlu0Qi3JdZrVajj9WV9WZ6aDQaQW0Qivh4AwDA4jjlGGD3qAaDISKfs91uw6effQJKLoEtP4iLg0QMc3EKRAcasGbNl7jyyqu5M5IjWPmo8lhunbXlsQ6ctEqxZctGXHLJpZyO7Qvr168FAMzMrvDrvKXF56CytQZt5sGVYSm6RCwrOcdvO8YlF0Kn0OLHH9fjzjtXhyzrifXbceG+Y8cSiYS9rgaDx+N7BQYb5CBJd8Q8v9MxGJjrss1m80nj2W63QyQSITZWHxELX77eF61WjRde+D2efvoJ7NmzC7FVa9FbsgwQhXH/KtKD2Ko1UPQ2YNq0GfjNb56PVl4Mg1h86goYqd/tSMZkOrWhs1jM0fdAIEwmEzweD7TqwZt+jYRET29P9H2IEjKE/OzJZN7194AKDKlUMiY//6Ot4yQSUcQ9702bNgAEYM80cDKeLSse6uPt2Lx5AyZPnszJmCPx7bffAGB6TEQCM+Lt2Nihwrp1X2HZMv/6mTY01AMAUnTCOVi5grW5qamBdwl7rVYHcy93SjRWhxsxsYkR892maRoiPxKL2GMJIrzX8KmpKWhtbQZJkrzIbbO9y1JTUwV7HQLeBVdVVaG2thYrVqzo/9vWrVvxt7/9DS6XCytWrMANN9zAiZF88+qrr2LHjh148803B+lPjhs3DuPGjev/febMmUhMTMSzzz6LgwcP9jcx9xeRiEBsrHDlVBqNun+BRHgzn/V6raA2CEV8vB4A4BrQLIzN8IiLi4nI5/yf/7wPs8kE88RM0NLgLjzWwmToqlrw739/iGuuWRVWDeMoisLGDT9AKaFRqB26RFQvI2HxDH1x1MuGz04u0zvxZbMWGzf+gJtvvp4Te33FYrFg+/atSNUlIV3vXxWQQirH/Qtuw8bj2/DD0S1wk25o5RrcN/82vyo5WMQiMaZkTMSPx7agquoA5s+f7/cYXKBQeDduHEQw2CF0OmXEfL+lUsZqmQ+Nx9kgh1iMiHl+p5OWxjQRs9l8q/yy2WwwGAwwGMLn+jQc/N/P1Xj99Vfx6KOPYvPmzYir/AY9484DxOEnuUCQbsRWfgN5XxPmz5+Pl19+ecxmlHKB3X5qvRmp3+1Ipr29sf//Fktv9D0QiO7uVgCATjo4gKGTUmg22SGV0v163FGiCIXQe3Ol8sx7o1IpH5PXodGcWpG0fgeAnp4eHD58EM4EHagh3sdAcCXqQMml2LZ9C371q1/ymrxDkiTWr18HjYTGuJjIkKeNk1Mo0Lpw8OABWK29SE/3XQ6qvb0VGrkaKpmSE1tiVTEwO4fOaPdX3nk04jVxAIDe3k7evyMGQxzaW1tA03TQFcI0TcPm9CAzLjZivtsSiahf4toX2NdIq1WE9XPMzMzAnj27YTabB7Vd4Ao2gJGbmyXY6xBwAOP3v/89FApFfwCjsbER99xzD/R6PRITE/Hii4xkwJVXXsmZsaej0+n6X7SB9PX1ISbGtwvIxx9/jNdffx3PP/88Zs6cOerxy5cvx7PPPovDhw8HHMCgKBomk5ASPmdehDweGr29VgFtEAabbfgbscPhjrjn3NnZiffeew+UUgZrcfClj7RMAtOEdBB7T+LVV/+Cu+66hwMrueHw4UNo7+jAVIMDw6118zRuNNmGdtzlaYbX19dIaeRpXDh48CBqak4IWub2ww/r4XK5MKmgNKAFgVqmwnnjFuNwaw2ajC2IUeqglgXe6G9yRil+PLYFa9asQ1nZlNFP4AG7nfmeEtzUYAAAjEZrxHy/+/qYha/UhwCG1OuoNpki5/mdjkrFVEr6EsCgaRo2mw0pKam8PV+dTtnffC1YhLqfP/XUs3juuWewZcsmxFV+jd7x54MWh09wgPC4EFv5NeSmFsyffw5++ctnYLW6YbVGbvN5vunrO5X5GKnf7UjmwIHD/f+vrKyKvgcCcfz4SQBAzGlJJ3oZE9A4erQOOTn+S2RGOfuIxHs5i8Nx5r0xEvepvuB0Ms9VdNqSn/29t9cCjSZynvf69T+CpmnY0+O4G1REwJ6mR+eJDuzZcxD5+QXcjX0ahw4dQE9PD2bGD7/fDkfKYx04apbhm2/W4YorrvL5vJaWFiSpOJD68lKQkIuG3qElnQKRdx6JeDXzGaura+D92qDVxsBDUXC4SShlwVV6Oz0k3CQFrTYmYq5pHk9gUlAmkz2sn6PBkAgAvAcw9Pr4oF4Hf+7nAX86q6urccstt/T//sUXX0AkEuGzzz5DXFwcHnjgAfznP//hNYCRm5t7Rq8Ls9mMzs7OM3pjDMX69evx61//Gvfddx8uu+wyvswckkC/JIHARPG9ZQj9paqEoDYIhct15iKJ9Rk7ne6Ie86vvvoKnE4n+mbmg5ZwU/ZlKUyG+lgb/ve/j7Fw4bnIy8vnZNxg2bjxJwBMtcRwLEq2odokQ7tj8KUrSeHB4uSRL5pleieOmWXYsOEnrFx5RfAG+8i2bdsAABNTxws250hk6NMQq9Jjx45tcLk8IZHooU4Xwg0Kun/MSPl+s9cpsWj077TEW+7pckXe9YslLo7ZOPgSwHC5XPB4PDAYEiLm+QphJ0GI8eSTv8ZLLz2HjRt/Qtzhr9Az/gLQPvRR4d02jxNxh7+CzNyGc85ZjF/84kkAooh5/0KFx0MO+H/0tRKaAwcO9P//4MEDcLvJaF8SAWhtbQMA6E+rwNBLyf7HMzKyhTYrShRBr8On5jp1zSFJakzeCzweRlf/jACGd/vhcnki6nnv3r0bAOBM0XM6rjNZD/WJTuzevQvZ2Wf2ZOWKzZs3AwDGx0RWb72SGBcIAFu2bMbKlb75Fx0OB5xOJ7Sx3FX1cS3vPBIaOWO30Wjk/Tui0+kBABa7K+gAhsXO7HNjYvQR9d32p58FTbP+h/Bew7P9gU0mEy/js+MmJqYI9joE7Lk6PYqzceNGzJ49G3FxTKRw9uzZqK+vD9rAkZg3bx62bds26A1Zt24dRCIRZs+ePeK5O3fuxEMPPYTLL78cq1ev9nnOb75hNANLS0sDMzoEMN8vYoi/jT3Y5q+ygc0BvT8jrUnjli2bsGXLJjiTdLDlJHA3sFgE47RcUBSFV155uX9hGUpomsb27VuhENMjVlIoxDTuKjBicbIVUoJ5j7USEncVGCEfxRc8PsYJAsCOHds4tHxkaJrG/n17oFfGIEnL4XsYBARBoCgxDyaTCXV1tSGzAQBoDpp5n/lND3/YAI5vWpve1yqCL9rx8cxn32odPTODPSY+nrtsqbGCRCLB448/jYULl0BmakVc5ZcgPKEt/2eCF19CZm7DkiXL8Itf/BJicRj36Agjos7y0OFyubBp8waQKhlsmQY0Nzfh2LGaUJt1VtDezkhIxckHV2DEyinv422C2xQlitBQlPfzTwzxtzGGx+OBiDiVUMgiEdH9j0cShysPgVJI4YnhRpKIxZnMqIccPnyI03FPp7LyEMQEkDPCfjscUUtopKvcqKmpgsvl29rXZGJ64gajXHA6rLzzspJz+qvkg5F3Hgm1V/aKfR58wvYrNI2gZuIr7BgGQ+Ts5QiCAOVHAIP0NtkVnR6ZDTPS0hi5NX/6Q/tDX18fJBKJoOomAQcwEhISUFvLOL86OjpQWVk5KGhgtVp5z+xdtWoV1Go1Vq9ejS1btuB///sfXn75ZaxatQpJSadexBtuuAFLlizp/722tharV69GdnY2LrroIuzfv7//X0NDQ/9xjzzyCF599VX88MMP2LJlC/7whz/gpZdewuLFiyMqgDFoQcQ6Dv34gkYSNhvj/FJITzn72OuKr/rr4UB3dxdeeeVl0GIRjNPyzlz1BYkzWQ9rbiKOHq3Gv/71PqdjB0JzcxNaWppRqHWOWs6qktA4N8WGRAWz4NVJKagkozt3NVIaGSo3Dh064JMjlQva2lrRa+xFfkJOWDmr2BLXysrDoxzJD+y9gQuffH8wIAKaPQdDJAcw4uIMEIlEsFiG1owdCPvdTExM5tusiEQsluDRR5/E4sVLITO1Ie5w6IIYp4IX7Vi27Hw8/PDjvDSIG6tQ1Nhch0UC69Z9DavFAltOAmx5THn9Rx/9K8RWnR20tnoDGKdJSLG/t7a2CG5TlChCQ5JnBiuG+ttYwOPxYCgRAVYthCQjJ4BhtVrQ1toCV6ya8705pZSBVMpQW3uM03EH4nK5cOxYDdKUbkgjcNuUqXbD7Xajtva4T8ez3ylfKt79gZV3ZpMTg5V3Hg7WbiGCfGywoY+DAEafjanuiYvjpsm9EEgkEpAU5fPanKSY9yTck7ZSU/kNYJhMJqSmpgm6/wv4FV+0aBE+/PBDuFwuHDhwADKZbFCQoKamBhkZGZwYORwxMTF477338Nxzz2H16tVQq9W47LLL8OCDDw46jqKoQYuCAwcOwGw2w2w246qrBmvoXXLJJXjxxRcBAAUFBfjqq6/w9ttvw+12Iy0tDXfeeSduv/12Xp8X1wz1RYy0bAdfYXXYVLIzAxgWy5n9UsIRkiTxhz+8ALPZBOPUXHh03GZ4sPRNyYaiw4R//vM9TJpUgdLSibzM4wv79+8FABTq+M0GKdS50NAmRWXlQUybNnrPm2A5eZKRuEvThZczNjWGsae+vi4k80skzK2H5MCBxwYw2DEjAX+eP7tAiqTndzpisRjx8Qk+BTDYa3hiYiLfZkUsYrEYDz/8OADg+++/RWzl1+idcAFoARt7Ex4X4iq/6g9ePPDAo2M+iMg1Docj1CaclXR3d+Gdd98ELZPAUpwKSi6BM0GLzZs3YPfunzFlyrRQmzimaW5uglxEQ3Na4km8tyKjubkpFGZFiSIoQ1VbkOTYDGp7PG6IiTOTcNiENbc7cioBGhuZRFe3nntnNTtue2sbnE4n5HJus/kBpsLN4/EgOSYy/UCpSuZ709TUgJKScaMez/rAwieF0H8IghAkiS0hgdl3Ga3BS4uxY7BjRgIyGSPJ6yY9kItGl+d1eX2p7HnhilKpREJCIi8BDIfDAYfDgfT0TM7HHomAPSIPPPAAenp68MUXX0Cr1eKFF17ol3ywWCxYt24drrnmGs4MHY68vDy8++67Ix7zwQcfDPp95cqVWLly5ahj33HHHbjjjjuCMS8sIEmSuXIPuPaN1cw/NkihGliB4V0gDdXwPRz58MN3sWfPLtjT42Ar4K8ci5ZK0DOrAAnfH8Zzv30Gf/3LmyEr9Tt0iNGiztPwm0mc6y2XPXhwvyABjJYWJpMwQRteGQiJGsaelpahm5DxTf8igQOtRLd3wyeVCue8DRbWVpdn9E2bm2QDGJHz/IYiJSUVBw/uB0VRIzq62et0cnKKUKZFJGwQgyRJ/PTT94g9sgY941cAHGeZDQnlQeyRbyAztWHx4qXR4EWAmM386NFGGR673YannnoMVosFxqm5oBTMddU4NRdJ6w7h+ed/jT//+S/IysoOraFjFJqm0dzcCIPcc0byskpCQyVhHo8SZazDJlbSg3pgRKZTeTTc7mEqMIjIk5Dq7u4GAJAqfpyW7Lg9Pd1ISUnlfPzOTqZvQ6wsMv1AMd5eSezzGA2FQgEAcJKREyQbiIt0g6bp/ufBJ6wEUK8l+OSaXovTO2YkBTCYgKHL7YJc6kMAw+30nhfeAQwAyMrKxu7dP8PlcnFqb29vb//4QhLwjlOtVuOPf/wjdu3ahR9//BHLly/vf0ylUmHTpk24//77OTEySnAwCwNWc575OVbLVNkMX+WACgzCu0CKhAqMbds245//fA8erQK9M/M5L089HVeCFsZJ2TD29uC3v33GZ01Jrjl2tAYqCY04nhdU6SoPCADHj/NXnjsQ9jPHR1lpMEjFUsjEUp8y4vlAoWCqilwcBDDYMVSq8HqNR0KpZJ6/3TX6ItHmZHr3RNLzG4rk5BTQND3qZ+5UAIP7jdtYQywW4xe/eBKzZ8+F3NgIffV3AN/ykDSF2KpvIe9rxrx55+Dhhx+PBi8CxGg0htqEs4re3l48+eSjqK09BktB0qAEEU+sGj0z82C1WvDY4w/i6NHqEFo6dunu7oLD4UCCfOg9SILcg5aW5jG7R4kShWWoz/hYTS4kSc+QFRiiCKzAYPd1lJyfpCLK2zyZrwQHdly1JDI/axqv3b42JNZqtQAAqytyZMQHYvPardXqeJ8rKYlRZ+gxBx/AYMdISoqcZDR2b25z+dYz1+bdwyuV4b8/ZwMMXO87Ii6AMeKgIhG0Wm1EZcSOZYYqOxuriyS2B4ZSOri1r1wS/j0wamuP44UXnwMtEaN7bhFomTCSMdaiZNiyE1BZeQj/939/FFxr3+FwoLmlCakKN9/xGijENAxyEidO+KadGSxsQEgahvqIUrEULlfwZaKBwDrjHa7gs67YMdiFRySgVmsAABb76L1YbI6xEcBgM8lG23SYzWYolSrExMQIYVbEIxZL8MQTz2DSpAoou2uhq93MTXOZoaBpxBzfAEVPHaZMmYbHHnsq2vMiCHp6uvv/b7f7tmGKEhg1NVVYfc+tqKw8BFt2PPqm5J6RIGLPToBxSg56errx4EP34Lvv1kZ076FwhJVfSVAMH8DweDxoa2sV0qwoUQSnP4BBDPG3MQZFUUPu71iJ50jySfBua3+v0si59+hlw39uR3osEPz1E8hkcmi1Ohht/DfB5oNer91sg20+USqViI2NRRcHAYwusx0xMfqI2ruytrKJg6Nhc9ghkUgiwt+dk5MHAOjp6eF0XHa83Nx8TscdjWja3FnAUDfBsdrE2+FwgAAgPc2nIpfQsNvDN4DR3d2Fp3/1GJwOB3pmF8ATqxZucoJA74w8uOI1+O67tfjoo38KNzeAjo520DQTWBACg4yE0WgURH+cjco73KGpbBkOmqbh8DihUgn4ORuATsc4p63O4LOurE43NGpN2DfRGgj7/Ptso2cQGa3M4jUmRs+nSbyTmpoGYOQABk3T/c3Awqnpfbgjk8nwzDPPIy+vAOrWQ1A37eNlHk3jHqjajqCwsBhPP/1cRCzaw5mBAYyB/4/CHRaLGa+//mfcd9+d6OrsRF95FnpnFZzynJ2GtSgFXQtK4AKFP/zhBTz55CNRSSMOaWg4CQBIHCaAwf69oaFeKJOiRAkJbP+2gRGMSHLk+wNN00P2IGCXeZHkrJd6pWUInvqVsOPyJRvLJp2QHL7keZrh93IjPRYIHor50PiTPJORkYEuazeoCPR9dZi7AECwHgOpqenosTiC6lFJUjR6zA6kpaVxaBn/aDRMtY7Z7ps6hdlugUajjYj9al4eE2BgJfC4oru7G1KplPe+16cTDWCctYT/ly0Q3G43xOIzI/RiER22mS12uw1PP/04s7melAVHepzwRohF6J5XDFItx9tvv4ENG34QbOrububmHCOQHmeMNxuku7uT97n0ej0AoM8RXlrnVpcNJEWGzCnOvi4WR/ALW4vDjRjveJEC+/x7zL2jHttjMXrPieXRIv5JS0sHgBGbiNntdrjdbqSnpwtl1phBpVLh+edfRkJCInQnt0HefYLT8RVdx6Gt34GkpBQ899xLEVXxFK4Yjae+/319xtAZMgZxOp348stPcfPN1+KLLz6FS6dE5+LxsIxPGzWF05kai/blZXCkxmLPnl247bYb8MYbf4kGmTiArcBIlA9dfckGMBobowGMKFHGCgRBYCh/ORu3iAQHIEtcHLNHF3GwfxkKkZ1JeOOrJ6XBkAAA6HNxVz27KNmGJMWZ1/QkhQeLk0evNPeHPjfjuoyPT/D5nKysXHgoEm0m3/pmhBNNRqaXZlZWjiDzZWRkgvIGIAKlx+wASdHIyMji0DL+YeXG+qyDJedVMuWgnywmu6X/nHAnMzMbEokUXV1dnI1JURR6enqQk5MneBJpNIBxFjBUlFosHptv/bBZHgjP0lySJPHCC8/i+PGjsBQkwVISOt13SilD14IS0DIJXv7971BZeUiQeR1eiRyFSJgMHLl3HiEqMHJycgEALX1tvM/lD81ee1j7hCY+nmnq1WcNTsKKpCiYbS6/FrLhgMFggEgkQmff6A6xDiOz2EhIiJxGaEORlsZkZ4wUwGAfS02NBjACIS7OgOeeewlyhQKxNeshsXFTKiyxdkN/9AcolCo899yLiI2N7GBauDBQ1tJq5XaTf7ZitVrx8cf/wnXXXYHXXvszei0m9E3KQsd5ZXAl+S5LR2oU6F5QjO55xXDKxfjvf/+D666/Eq+99gra28Prfh5JNDTUg8BIElJsAKNBQKuiRBGeoXz2keTI9wexWDxkxj9bhBJJUpRsnwCpiR/ZR4nZAblcDp2On54HSUlM76duDgMYCjGNuwqMWJxshdTb60QrIXFXgRFyjt/abiczINtw2hcmTCgFANR2neTWGAGo7T4JuUyO/PwCQebLzGSCDm3GwFVL2vuYczMyhKka4Qo2UZBVPmC5cfEqzCqeghsXr+r/G0VR6LP2RUxyoVQqRW5uHnp6ejir9Ovt7QVJkigsLOZkPH8Ym17sKIOQSCT9aQ5sDgRbAjnWkEgkGKqqk6TD8zm/8cZfsGPHNjhS9ENqMguNR69C19wieEgPnvn1k2htbeF9TrebydoQDdHgjQ8kAjaNy83Ng1gsxvHOOt7n8ofaLsaewsKikMyv0WigUCjQYwkugNFndYFG5Dn3xWIJDIZ4tPaOng3UZuyAXK6ImCyP4VCpVIiLM4woIcUGMCJt0RtO5Obm4bFf/BIE6UbskbUgyODk6wiPC7FVa0GQbjzx+FPIzhYmC+xswD1AWtDjiZwmpuFIbe1xvPrqn3D1NZfizTf/hl6bGaYJ6Wi7aDIs49JOdYv1B4KAIyMObRdMQu/0PNhlInz55We44YZV+PWvf4ldu3aOWckXvmhqbIBeRkI6zNsRJychJqIVGFHGPiKR17M7QD5JFMh1KgKQSmXwkGfub93ev8lk4bc/H46UlFQoVSpIe3yTmfELkoLUaEN+fiFvn4XY2DgYDAbUW6WctktTSWicm2JDorcSQyeloJJwv6+vtzLSWv7sX0tLJwIAajqE6X/JFWaHBc3GNpSMGy+YZGt2NpPY2NYbeFJNW4910FiRAhuM6DEbB/19cl4pXrzxKUzOK+3/m8lmBklRERPAAICiomKQJMlZH4zOzs7+cYVmbN4powxCLpcDbPGm927F/G3soVAoQNHA6b2BnR4CCoUiNEYNw5o1X+Gzzz6BW69Cz9zCYTWZR4JUDb/oG+mxkXAlx6B3ai5MfX14+unHeG9+zr4vLkqY4I3Tu2BWKPiXQFEqVZg4cRLqe5tgtIdPA7GDzUcgk8lQXl4RkvkJgkBqajq6TPagtG87Tcxnk5UniiRSU9PQYeyCawTHJU3TaO5uQ9oY6QmRkZEJs9kMj2do+RCj0QgASE8XVktzrDFnznxcdtkqSOy9TFPvINDVboTEbsSqVddi5sw5HFkYJUrw2Gw2fPvtGtx33524666b8dVXn8MCEn3lmWi9eDLMEzNBKTjY9ItFsOUnof2CSeiZXQhHrArbtm3GL3/5KG64YRX+/e8P0NkZedIUQmO329HV3dVfZTEUYgIwyDxoamoS0LIoUYRHKj1TckMiiZxebv6gUqngcBNnOMxZFaZQ9eMLBJFIhHEl4yHts/fLPXGFvNMEgqZRUjKO03EHQhAEJkwog8ktQrcrstyAFA3UWaVITEj0K3EtOTkFOTm5qGo/BqcnuMQ5ITnYcgQ0aEHX3mySUmtP4AGMVm/wI1QqD4ESH8/ItnWZRnfwd5q6B50TCZSUjAcAtLe3czJeR0eHd1z+rlfDEVlXrigBoVAoB8gq0d6/hZcznyvY5rg21+Bn7HAT0Gr5KccMhKqqI3jttVdAKaToXlACeoiFrC84R5BEGOmx0bDlJ8FckoqGhnr84Q8v8NpgjX1fbB5hLkc2bwBDqIz2uXMXAAB+ruensa6/NPQ2o8XUjqlTp4dUxz4jIwNONwmTLfANQIeRKeGORId3Wlo6KJpCS/fwciS9lj5YHTakReDzG4qMjKz+Rt1DcaoCI7J0U8ORm2++HYWFxVC1V0HRVRvQGIrOY1B11KCkZDxuuOFmji2MMlAzNpIkNEKJx+PBzp3b8bvf/QZXXHER/vjHF1FdcwT2tFh0LShmKi7Gpwe8phoREQF7djw6l5WhY3kZrPlJaOvuxDvv/APXXns5Hn30fqxb9w2sVh4yc8cAbEVv/AgBDAAwyEmYTH3R1zHKmEYmYxIJB3aHkMvH5t5crdYMmVxodzP7MY1GEwKrAmfatBkAAEXL6H3s/EHR3Osdfyan454OO/6h3shKZj1hkcLqEWHa9Fl+nzt37gK4SQ8OtlTxYBk/7G1ipLznzJkn2JwGQzxiYvRoDiKA0dxtgU6nizh5Z1beurNv9D4RbJCD7SkTCbABDDbwECzt7e1QqzWCNZgfSDSAcRYwaGHgdURrNJEtRzIccXEGAIDRfuqjTXoz+w0GQ0hsOh2LxYznfvs0PCSJ7tmFINWBLyDMpRlwx5zphHbHKGEuDc7paSrPgiMpBlu2bMTnn/8vqLFGIiWF6fvR5RTGgdPpEEMulyM2Vphm6QsXLoZarcbmEzvhoYbOPBeSDce3AQAuvHBlSO1gS0tbglgktfRneeRxYpOQZGVlAwBOdjQOe0xde8OgYyMdVhqKrbQ4HaPRCIMhHmp15GTjhSsSiQRPPPEryGRyxNRuBOH2T69Z5LJDX7sJcoUCjz/+tOAN2s4GBkoChKPEZbhAURQqKw/htddewapVl+Dppx/Dhg0/wKoQoW9iJtouqkDPghI40+ICqmQNBHecBsbpeWhdOQW90/PgSNTiwIF9+NOfXsIVV1yE3/72GWzZsgkuV+Rke/JNWxsTwIjzIYDBHN/Ku01RooSK/kTCAQliYzW5kO2bZXIMdjuZvb9HWl+tGTNmAwCUJ7lriAuKhrK+GxqtFhMmlHE37hDMmjUHUqkU+3oVnMpI8c1+b8DlnHMW+X3uokXngiAIbD3xM9dm8UK7uRPHOk9g0qQKQWWSCYJAfn4Bukx2OE6POPqAw+1Bl8mOvLzCiFMOUKlU0Gq0aDeO/r1u80pAJycn820WZ6SmpiE2NpaTCgy73Y6+vj5MmFAaEunDaADjLGBg5QFBU96/jc0ABttcq9t66qPtIQc/Fmr+/vfX0dXZib6yDLiSA6+SAABaKkbnkgkwlaaD8jZmJxVSdC6ZAFoaZEBARKB3TiEohRRvvfU3NDcP72gNBr1eD51Oh1YH/w4ykgY6nRJkZGQKdsFVKlU477wL0Wc3YXvdbkHmHI52Uyf2Nh5ETk4eyssnh9SWvDymIVlzEDqyLd0WyGVypKWlcWWWYLABnBNtw2t9s4+Nlb4DbCBmqACGx+OB2WxGZma2oDaNZdLS0nHTTbdB5LJBV7fdr3O1dVtBuO245eY7+oPMUbhloLNqrMp6BgpN0zh2rAb/+Mdfcd31V+DBB1fjyy8/g9Fth6U4BR3Ly9CxohyWCelBJYEEbadUDFt+EroWT0DbxRXoK8+ETSXFpk0/4dlnn8LlV1yE3//+d9i1a+ew0nlnC2zz81jZyAGMWBmzT2lrizZLjzJ2Uau9yYUDPMhjNXnDYGBkVvrsgx2aRrsIGrW6vxolUkhJScWECWVQtPVBbOUmSC1vNUJsd2HhOYt5lxJTqzWYPXse2hwSnLAI01shWKweAvt6lUhJTsH48aWjn3AaKSmpmDJlGk5016PZGP7B8S21OwEAK1ZcJPjcbFPmpm7/9+dNXRbQCF2PzWBJSk5Ga2/7qMojbA9Lf5rJhxqCIDB+fBksFgvMZnNQY7FBkHHj/P8uckE0gHEWMDjTnFk86PXCZJ8LDSsl024aEMDwVmCEg8zMoUMH8O23a+CKUzONJTmAlkthLsuEx1uJQapkoOXcLEgohRS9U3Phcrnw2mt/5mTMoRg3bgK6nWL0ufm9JDXbJHBRBMaNm8DrPKdzxRVXQaVSYW3Vj7C7HYLOPZAvD38LiqZw8823hzwzgm361NA59E1U7g3AyYcJxLk8JFp6rcgvKIzI7PDcXKZq5FjLqQbvKply0M/jrcxjeXn5AlvHDyMFMFj5qMzMqHwUl1x88aXIzcuHqv0IpGbfsm6kplaoOqpRUFiECy64mF8Dz2IGBi3GqnSIv7S3t+Ff/3oft956HVavvg2ffPJvtBt7YM1LRNeicWi9uAJ9FTlwx2mAMMvuI9VyWMano+P8iWg/byLM49NgFpFYv34dfvnLR7HqqpV4/fX/h5qaKl5lOcOVri4mqzFGOnLj8xgpE+Do7u7k3aYoUUJFfyLhgOvYWFVHYJ18A5MLaQA9VhGSkiMzQWLZsvMBAOpj3ARaNUeZcZYuPY+T8Ubj0kuvAABs7AidlLA/bO9Swk0BKy+9IuAExEsuuRwAsL5mI5emcY7ZYcG2k7uRmJgUkt5zbAAjkP15YxdzTigaO3NBcnIqbE47+qxDSx2zNHvln1NTIyuBsqysHEDwCSKtra3e8SYGa1JARAMYZwFxcUywwqVOgFvFlGmGi5wS17AOsta+UxdVNzn4sVDywQfvAgCM03IFkzoIFkemAY4UPfbs2YWqqkpe5mCrAY6Z+M0EOWpmZDomTpzE6zynExOjx6pV18LitOKbyu8FnZulsrUah1qrUFZW3q/fGkpiY+OQlJSM+k7TkM6ccydlYVxGHM6dNLRDu6nLAoqiUVxcwrepvBATo0d8fAKOtZzo/9uNi1dhVvEU3Lh4FQDgWMsJKBQKpKRE1gJpOOLiDFCpVP0BDFZCRyqVoreX0f4Nh+v0WEIsFuOe1Q8AALR12zCqXgBNQ1fHyMzds/qBaG8GHlEqVf3/V6lUIxw5trHb7Vi79ms8/PC9uO66K/Duu2+ioaUJtqx4dM8vRuvKKTDOyIczWR8Z6yaCgCdWDVN5FtovnIyOpaWwFKXA6LTiiy/+h3vvvQO33nod/vWv99HdzaEESZjT28toRutGCWBovY/39IzeSDNKlEglJkYPAHDFpMKtjB30t7EG6+TrNJ9aT1AUAYebiNgKzwULFiJGr4f6eAcIz8hVZaMhMdmhaOnFhAllKCgQJnO9qKgEZWXlqDbJUW8N7yQwm4fA5g4VdFodzj038ABPRcVUFBYWYV/TYbSZuOkDwAc/HdsKN+nGqlXX8l6NMxTsvrqhc2gn/kj78/oONoARmXtzVtGhsXvkKp3m7lao1eqw6q/rCxMnlgM4FYAYioF78+FobW2FXC7vD3YJTTSAcRbANpixJxWDoGkQBNHfK2KsERdngF6vR1PvqQu+y0NAIhEjKyu0Mix1dSewf/8eOFL0cBsiK8vGXJoOAPj00495GZ/NMDho5LeM+ECvHDKZDBUV03idZyguvfRKZGZmY3PtDtR1Nwg6t8PtxMf7v4REIsV99z0U8uoLltLSibDY3ejoO1OfPz9Fj1uWTEB+in7Ic2vbjP1jRCoFBYXo6OuC0cJUH0zOK8WLNz6FyXmlcLqdqGtvRH5+YUj0JfmAIAhkZeXAaDSCoihMnjwZGRkZmDx5cn9QI1qBwT0TJpRh5szZkPc1Q2ZsGvFYeW8DZKZWzJkzv7/hWxR+GCgX0i8nchbR2tqCN954HVdffSleeeVlHDp0AI6kGPTOyEfrpVPRO6cQjvQ4QMz99U/kdEN7oAEJaw4gYc0BaA80QOR0cz4PCALueC36puSg9ZIp6FpQAltWPBpamvDuu2/i2msvx+9+9xscOXJ4zFdlmM2MM0QlGTmAoZIwr4PJNHIGZJQokYxerwcA0GIpnHHZACKvF4SvsP3PBqsjDH4s0pDJ5LjwgksgcrqhOh6cM1xzpBkAs08Ukptvvh0AsKZFHda9MDa0q2AnCVxz7Q1QKgOvGCEIAtdeexNo0Pi68jsOLeSOXlsfNtZuQ0JCIs49d3lIbDAY4pGYmIiTHeYh1yXD7c9pmkZ9pwnx8QmC9u3gktRUxt/V1Nk87DEURaGpqxXp6Rlh40/xlaysHOh0MWhpaRn2mIF786Gw2+3o6enBhAllIwY5+GRseEWijAhbuil2miF2mhEbZwhJRFcICIJAQUERuiwiUDRzUXGRBLKzc0P2JWPZs2cXAMCWkxBSOwLBlaCDR6PAnr27QVEjbz4DISUlFUVFJThqlsPs5udm0GyToN0hwfTps0KS7SqVSvHgg48CBPDh7v/C6XEJNvenB79Br60PV111bVj1GGCDD2wwwh9qWxmn/4QJkRzAYDIXqpuPn/FYbWs9SIpEQUGh0GbxSmZmFiiKgtlsRmpqKpYuXYrU1NT+Coxw+nyOJa6//hYAgKZx5D487OPXX38z7zad7QzM3Bqr2udD0dTUiN/85pe48car8N//fgQz5YKpLAOtl1Sge/F42PISg+/hNQKEm0T8+sPQHW6CrNcKWa8VusNNiF9/GIQ7uEzaERERcKbFondOIVovZZp/23VybNjwAx544G7cc+/t2L07MhqMBoLVaoWYAGSj7DyVYtp7fOD9saJECXfYREKRywqR2wbgdMnnsUNsbBw0Gg1aTaeu6y6S2etFctXtRRddCoVCCW1VM0AGtjcWW51Q13UiMzMLM2fO5tjCkRk3bgJmz56LOosMB3hOIAyUDocYmztVSEpKxvnnB98PYvr0mSgrK8fBlirUdp0M3kCOWXPke7hJD2666TbIZLKQ2TFuXCnMdhd6LL7LXvdanDDZXBg/XliZbi5hk+gauoZ38LcbO+HyuJCREXkJdyKRCOXlk2GxWIZNEhm4Nx8KtnojlL1UowGMs4D+AIbDBLHTgqQIajgTCGw5k8tz5t9CCSu/5EyKrHIzFmeiDhazGc3NI2fwBsqyZeeDooEdXfzocW7rZDTGly9fwcv4vjB+fCmuuOIqdFq68dnBNYLMeaC5EjtO7kFhYTGuuuo6Qeb0lUmTKgAAR5uNfp3n9pCo6zAhP78QOl1kfp+AU03OaprODGCwQY1wuHZxCbvgO70PhtFohE6n689KjMIteXn5mDp1OuR9zZBYhtaWl5rbITO1YubM2WOmcXw4ExMT0///s0Gqy2634513/oHbbr8BW7duhsOgQc/sQrReNBnm0gxQKmEcKNpDjZAOUfUn7bNDe6hREBtoqQS2/CR0Lp+IziUTYM804Nixo3jyyUfw3HO/QkeHb/1qIgmn0wmpaPQ0X/YYl4ub5rhRooQjOl0MxBIJxC4rxE6LVx1hbAYwCIJAbm4+Oszi/kx/t3ePnpOTGzrDgkSn0+Giiy6B2OaCujawKgxNZRNA0bjqqutCUm19xx33QC6T4etmDRxkeGWT0zTweaMGJA3cfff9nDj0CYLA7bffDQD47/6vQVI8Ji34SV13A3bW70V+fgEWLlwSUlsmTGCaM9e1+14JWdfOJBaOH1/Gi01CwFaE1XcMvxas72T8YOHQWzcQ2MDDSFUYI8GeFw1gROGVmJgYyGRyyCwdIGiyP6AxVukPYAy4EYeDFp/Hw8gT0NLIrH5hMyLZ58E1CxcugUatxo5uplEXl5jdBPYblUhPS8fkyVO4HdxPrr/+FuTnF2Jb3S7sazrk83kKiXzQT1/osfbiX3s+g1yuwOOPPx12lVfJySlISUnF8VYjSMr3+uUT7X3wkBQqKkL7XgYL2+SsaqgARuMx7zGhv3ZxyVCNvEmShMlkilZf8AzbwFDdOvR1R9VyaNBxUfhFp4sZ/aAxgsVixup7bsO///0BXHIxuucXo2tpKezZ8bxIRI2E3LvJ9vcxXiAIuBJ16JlbhPbzyuBM1GHz5g249dbrcfRotbC28AxJenxqYSImmLWAJ0hd+ShRwhmCIGCIM0DstELsskKvj4VYHF5rdC7Jzc0DTZ/qWe6hCEgkkojMYh7IpZeuglyhgLayacgqDFoiHvRzIGKrE5raDqSnZ2DBgkW82zoUyckpuPqaG2Fyi/BNc/CVoHJvBR37Mxh298hx3CLDzJlzOK1OKSwsxvLlK9Dc14otJ4Kregxkbz4UJEXik/1fAgDuuefBkEsHs0GIujbf10RssCOSKzB0uhjExOhxsmP4ZN1672ORumdl/WDNzcPLZI1Ec3MzNBot8vNDpxARDWCcBRAEgaSkJIidTDl2UtJYD2AwWc0DKzDCQYZFJmNubqKBhkUQhDddhq+SRqVSiQsuXAmzW4Rd3QpOx97coYKbAi69bFXIFwVSqRS//OUzUCqU+Pfez9Fp6fbpvGUlCzE+uQjLShb6dDxJkXj3549gd9tx770Phm2mwNSp02F3eYZtFjYU1U2M3NCUKdP5MksQYmL0SEpKRnXT8TN0RqubjkOtVvc3PxwrsOW5AwMYJhPTyD3SN7LhzuTJU5CcnApl53GAHByIJkgXlN3HkZaWgYkTJ4XIwrOLs6XvBUVReOml59HU2ABLQRLaV5QzvS1ChNg2vHzjSI/xjUevRtfi8eidkQeH047f/OYp9PUZQ2ZPyPDeCiNMWjpKFL9JSEiEyFuBEama8b7COrsKEj0Yn+IGSRHIzs4Ju8Qqf9Hr9bj4opVMFcbxMyvnTKUZsKfFwlR65h5Me5ipvrj22htDWoV5+eWrkJeXj53dShw1BSe3vTjZhhKdE4uTbUGNY3SJ8FWzFmqVCvfe+2BQYw3FLbfcAZ1Wh2+OrEevLfDEBX/35sOxqXYHmoytWLr0PIwbF/oAQHZ2DtRqNU74UYFxor0PSqUKubn5PFrGP1lZ2WjpboPTPfR6sK69of+4SCQlJRVJSclobW31u/ea2WyG2WxGefnkkF6zogGMs4SBC6OxvkgyGOKh1+vhHlCBEeoG3gD6b0jyVmNoDQkEmoaitQ8xej1SUvhzqK5ceTkUCgV+aldzVoVhcRPY1qVEfHw8lixZxs2gQZKWloH7H3gEDrcD7+z8D9zk6FUthYm5uGP29ShM9K3c+qvD3+FkTyMWL14askZgvjB16gwAQFVjj8/nVDX1QKlUYfz4Ur7MEoyCgiL0mHvRZTr1/G1OO+o7m1BQUBTygBvXJCYmQSqVoq/v1IaB/X+0gTe/iEQiLF58LgjSBUXPyUGPKbrrQJAe5vGo51AQFApuA/XhyokTx7Fz5zY4k3Tom5o7ZCaq0Lz33ntD/gs5BAFbXhJME9LR2dmBH34Iz0ajgSCVSvsb946Ex9u/TiIJbd+6KFH4Jj4+HgRNgaA8MBgMoTaHV3Jz8wAwlReXTLLDQwF5eQUhtoobLrtsFdML48iZvTBcyTHoWVACV/LgikuxxQH1iQ5kZGZh/vzgnN/BIpFI8MgjT0IiFuOTRh1snsDXgPlaN27KMyFfG7haA0UDnzRo4SAJ3HX3/YiP5753qE4XgzvuvAcOtxMf7/vCb0cui79786HosvTg68r10OtjcdttdwU8DpeIxWKMH1+Kjj4bzPbREzssDjfajTaMH18a8ZKoWVnZoGgKDZ1DV2HUtTdAKpEO2yMi3CEIApMnT4XD4UB3t29JtCxs1Uao1UzGlmckyrAMDFrEx4/tAAYA5OTkw0MxN2CFQhHyBt4AMGvWHABgMjQCvFGGCkVzL8R2F2bOmM2rQzUmRo9LLrkcfW4RtnVy0wvjh3YVXBSBq6++IaQNsU5n4cIlOO+8C9BkbOG8H8bBliP48dgWZGZm4957H+J0bK6ZOHESZDIZjvgYwOjss6Ozz46KiikRn7kFMAEMAKhpru3/2/HWOtA03f/YWEIsFiMt7f+3d+fhTVXpH8C/N2nSJW2a7tCNlpZutLQssu+LrIIim46CwyI4Ago6iqK4jDOuqAgDIy6jzuA2AirKJrgj8hNQdmQp3ei+Jt3bJL8/QkIrpVBIem9uvp/n4SG5uUneS8s95973nPeEo7y83HbBYE1gSHWWkJwMHjwMAKDJOQjvjJ9tfzQ5vwEAhg4V90LalYSEdMDIkaOxbNnjYofiUNaFaU0SSFwAgNHr8v2A1l5rT9Ykj5wW9fXw8ES9ScCVqkXWXei7e3l5tUNUROLx9w+0PQ4IsP9NWimJjIyCUqlETpkS58st5zdnH6lt5eurwyTrLIyrXAvD+/h5y+yLP4k7+8IqJiYWd86cg4p6BTZle4t6m+LHIk+cNlhKRzly4OHIkaPRs+cNOJb/O/ZnH3LY97TGZDbhg4Ob0WBswMKF90uqtGhKSiqAi2tbtCb9Qqkp63ucWVSUJRl1ruDSdTDMZjMyCrMRERHp1CX/rCW421pGyrp/z5432D2mtmACw0X4+we0+Fiumo7klcoiuCEhHTBs2EioSyrhda7lRVSvR2t1Nq+L0QTfgxlQKJWYMmWGfT+7BdOm3QYfHx98XahpdRTI1dTZLKlT4OdiL4SFhmHMmPF2j/V6/eUvixETE4sf0/8PB9uwHkZrSqrKsOHAJri7e2DFiqfh6emYRdHtxcPDA92790JeWRXKKmuvuP+JHMtogb597VcPVUzW8nanmiQwTp1Pb/aa3ISHR6C+vh51dZZFWpnAaD+dOkWhU1Q01JVF8Mneb/ujqipCbGwcwsL4M2gvCoUCDz20XPTFGh3N3z8AkZ2i4Hm+DL4HzuGKd7AdrC7EF7NmzWrxT12I+DcPPM8VwfdQFtxUKiQnO+9imH/k4+MDAFdcKLa60XJp6u3t4/CYiMTUdNaFXBfwtlKr1QgLi0C+XoncCwkMZ17A+49uvXU63N3dLbMwTK1PNVNU10Fztgjh4REYPHho+wR4FaZNuw0pKak4XO6B/aXXt6bDtcqtVmJbrjf8/PywdOlDDp0RLAgC7r//r/D08MTGQ1+goubqyyXZy4/p/4fTRekYMGAQBg0a2u7f3xprMuLsVayDYU1gdOsmhwSGpWpLxoVSUU0VlBehpq4WUU5+7kpL6wFBENqUwDCZTMjNzUXHjqHo2FHc2SdMYLgInc7P9tjPz6+VPeUhLCzc9lhKZWbmzbsH7h4e0B3IgJu+xq6f3VqdzWtmNkO3/xzcDLWYfMvUdinxotF4409/moWaRgG78y8/Au9q6mxuzfWG0QzMnjNfkqP11Wp3PPbYU/D08MSHBzdf9XoYl9NoasQ7+z5ETX0NFi9e6jQLTPXp0w8ArmoWxrGsUgiCYCs95eysdYHP5J2zbTuTe67Za3JjPT9bExd6vR4KhQIhIR3EDMslCIKAlS+txqpV6y758/zzr4gdHsmQIAh47tmViI7uDO/f8xH41VGo23ux7CYMKRFo8L00sd/g6wmDPftPbaQ01MLvp9Pw/+k0NF4aPP/cy7Iq+arTWW7QGhpav/SsvDBwxRWuVci1Nb82l3cCA7AMoKiuF3C60M32XC50Oh3Gj58EZVUdPDNbv5bzPpkHwWTC9Ol/ksTsCyulUomHH34M3hoNPsvRorC2fWOrMwL/zfCF0Qz89a/L4eurc/h3hoR0wPwFC1FdX4MPD356zaWkrkVRZQk+P7IdWq0vFi9+UHLlW7t0iYe7u7stOdGa9IIKuKvdJTNo+HpYZ2Ckt5DAuLj+hfil6a+HVuuL2Ng45Ofno7Hx6tbmLSkpQV1dnejlowAmMFyGTqezPfb1FX+EmaM1vRHWoUNHESNpLjAwCEuXPAShvhEB356Aou7aa0T+0eXqbF4Pzck8aM4UoEuXeMycOdtun3slN910C0JDw/BTsReK61o+TV2pzua5SjccKXdHcnI3DBw4xJHhXpewsAjcv+Qh1DbU4b3/+xhGk/GaP2vb8a+RWZaDG28cK5n1Pq5G3779AQDHs1rv9NfUNyK9oAIJCYmyubmh0+kQEBCIM3kZtm1n8s/B3d1D9BEOjhIaaklg6PV6298dOnSUZJJRjrRaLRITu17yxzpCmsjeAgOD8PLL/8SQIcPgXmxA0K5jCNh9DOpCfbuX1DSrlCgalQx9Sjjq/TSo99NAnxKOolHJMKva/2aS0lAL3c9n0GHLr/A6V4SY2C5Y9eo6WZRiaCooyFIip+IKCYzyesvPQO4ldYiaJjCaPpYr6yzb9GI3aDQa2R3z5MlToVAq4XMi97LtmtBghPeZAvgHBEhy9mVwcAiWPrAM9Sbg/Qyt3dajvBqf5figuE6JadNuQ69evdvte8eOnYBevXrjWP7v+DnzQLt8p8lswob9G1FvbMDixQ9I8ppWpVIhKSkZeaVVqG7lflVNfSNySyqRkJgkiZLt18vHxwf+/gEtzsCwJjCsszScWY8evWAymZCfn39V+1tna3TvzgQGtZOmU7E9PKRdUsYeAgOb1hUNbGXP9jds2EjcccddcDPUInD3cShq7ZfEsCfNqTzoDmYgIDAITz/9bLsuOKpSqTB37j0wmoGt573b/H6TGdhy4X3z598ruVENfzRs2AiMHj0OmWU52Hbi62v6jNNF57Dr9+8RFhaOe++9z84ROlZgYBBiY7vgTH4F6houn8A5db4MJpMZvXv3a8foHC86ujPyywpRXVcDo8mIjIIcREVFSWpklj1ZEzMGgwGNjY2orq6WbbKGiCw0Gg2WL38Ka9a8gd69+8IjvwJBXx1F8Je/QXMy164DOq7E7K6CoVskisalomhcKgzdImF2b8cLb6MJnhnFCNh9DB0+PwjN2UJ0iuyEFSv+hrX/fLNdZru2N+tgopL61tu10guvd+woncFHRI6g1WpbfCxXTasjhIaGS/7arK2Cg0MweNBQqMqqoC4ytLiP17lCCA1GTJp4q2Rv9g4cOAQTJkxCbo0btuZq2uU7D5a6Y3+pB+LjE3HXXfPa5TutBEHA0qUPw1vjjc2Ht6K0qszh3/nNqT1IL8nEsGEjJVVG7I+Sk7vBDCCj8PLltTIK9DBDHutfWHXqFI28skLU1DcvbW1dF0MuCQzg6tfByM3NhSAISEvr4ciwrgoTGC5Co7nYAMmtw9CSplNxpTjC4847/4xJkyZDVVaFoF1HoaiuEzukZrxPnIful3Pw8/fHc8+uFCUJNGDAIHTrloajFe5Ir2xbJ++3MnfkVKswcuRoxMcnOihC+7rnnsXo2DEUX/3+HTJLc9r03rrGOmw4sBEKpQLLlj0OT0/nW/yyd+9+aDSacDqv/LL7WEtMWWdsyIV1Gn1GQTbySgtR31jv9NNTW2O9kWUwGGAwGJptIyJ5i4uLxzPPvIBVq9Zh+PBR8KxuhO5ABjpsPgC/H0/B/XzZFWuIOyWzGaqSSvgeOIeOmw/Af88peORXIDW1Ox577Cn861//xsCBQ2TbR7fevCy+QlmSoguvW2fqEclV01mPrrDmS9N+XkhIiIiROM7EibcAADSnWxjVbDZDc6oAbm5uGDt2QjtH1jbz5y9EVFQ09hR54ViF2qHfVVKnwOYcH3h5eeHRR58QZTZ2YGAQ7l14P2ob6vD+gU0wmR3XB8nTF+LL47vg7x+Ae++932HfYw/WdbjS8y+fwLAu8i2nNbuioqJgNpuRVdj8fkxGQRbc3d1lUfK4a9dkqFQq5ObmXnHfxsZGFBQUIDY2ThLJdiYwXIQrzLpoysdH2qNaBEHAX/5yH6ZNuw1uFTUI3nEUbmVVYocFmMzw3X8OvgczERQUjJdXrhGtRqkgCLj77nsBAF+e11z1up8NJmB7njfUKhXuumuuAyO0Ly8vLzz44CMAgPcPbESD8epqEgLAlqM7UVpVhhkz7nCahM0fWdfB+D2n5XUwTGYzTp4vRUBAADp3jm3P0BwuIsIy2jar6DyyiiydJTmOwLUKCgqCQqGAwWBAZWUlAMiiM0hEVy8xsSuWLXscH36wGffcswhR4ZHwyixG4Lcn0HHTAfj+X7ooJabsTamvgc/hbIRs+RXB2w/D+2Qe/Dw1mD79dvz73+/jxRdXYfDgYbKdcWcVEREJACiobf3mVEGtElofrSRLahDZk5fXxRnmTQcaylXTwXCBgfIsEde1awoiIjvBM7sUQn3z6zhVaRVUFdUYMGBws9LeUuTu7o7ly5+Cu1qN/2Vpr1j671oZzZZSVXVGy4LaYs7GHj58FAYMGIRTRen48ew+h3yH0WTEhv2foNHUiKVLH5LkPaqmEhO7QqlU2pIULTlXUAGFQoHExKR2jMyxrGuIZhRm27aZTCZkFuYgIiISCoXz30JXq93RtWsKSkpKUFtb2+q+hYWFMBqN6N5d/NkXABMYLsPd3V3sENqVWn1xtICXlzQ7hYIgYM6cBbj77r/AraYewV8dhfv5Ky9i7LB4GowI+O4kvH/PQ3R0Z7zyyj+bTfcVQ1xcPIYNG4nsahWOll/dCJCfijxRXq/A5FunIzjYuUb4pKSkYuLEycjTF+LbM3uu6j1ZZTn44ew+dOoUjdtvn+ngCB0nLi4B3t4+OJlT1uIiaudLKlFZ04AbbugruxGq1rrA2cXnkV2c22ybHCmVbggICERVVRUTGEQuTqvV4pZbpmL9+nexZs16TJ48DQEaLbxP5yPoq6Po8NlBaH/NtAzycJJkhqK6Dt4nchG07RA6bPkV2iPZ0DRYbpA888zz+OD9TZgzZ4Hofaz25OnphY4dOiKvlQRGvQkornNDdOeYdoyMSBxeXhdnSzvjzOm28vcPaPGxnAiCgBtHjYFgNMEzu/m6fl4ZRQDgNGsUduoUhfkLFqG6UcDHmT5XPZCwLb7K80J2tQqjR4/D0KEj7P8FbSAIAhYvfhBarS8+P7oDxZX2vyez+9SPyCo7j9GjxzlFOWQPDw/ExHRBTkklGo2XzkppNJqQXVyJmJgusjqHWQcRZjaZgVFYUYzahjpbckMOrOWgrrQOhnWWRmoqExjUjqRaZ9FRmt7gbM+1G9pKEARMmTIDK1Y8A3eFGwK/PQnvY+fb/SJdaahB0I4j8MgtQ+/effHKK2slc/P/rrvmwk2pxM58bxiv8M9SaxTwTaEG3t7emDbttvYJ0M7uumsu/Pz8sePENyirLm91X5PZhP/9ugVmmLF48VKn/n+uVCrRs2cvlFbWosRw6UiAU+ctNUl79ryhvUNzOOtNrPMl+ThfkgdA/uUzgoKCmyUwgoKCRY6IiMQkCALi4hKwYMFCvL/hEzz//CsYPXocfOAGn+PnEbL1EIK/+A0+R7KhbKGNEJtQ1wiv0/kI/OooOm4+AN+DGfCsqEWfPv3wyCMr8PFHn2HZssfRu3c/UUpkSEFMbBcYGhQwNLQ8CCG/xg1mQHazLIla0nSwnZSvVe2l6TH6+urEC8TBrDfiPbOa3AA3m+GZVQpvHx/07Cn+IrhXa/z4iejffxBOG9T4qci+1TzOVbrhmwINQkPD8Je/LLbrZ18rPz8/LFq0BPXGBnxwcLNdS0nl6Qux/cRuBAYEYsGChXb7XEfr2jUZjUYTckoqL3ktt7QSDUYTkpKSRYjMcWwJjKKL60NkXXhsnU0qB6mp3QEAeXl5re6Xl5cHhUKB5OSU9gjripjAcBHOfGPzejnDsQ8YMAivvvJPBAYFwfe3TPjtOQ2h8fKLGduTe145QrYfgaqiGlOmTMdTT/2j2aggsXXsGIoxY29CYa0Sv5W1PpPopyJPVDcKmDbtdqetJ6vRaDBv3j2oNzZg6/Hdre77W85RZJblYPjwUbJYPKtHD0ty4lTupQuonc4tl8ziUfbm7x8Ad3d35JYWILe0AID814QIDAyCyWRCaanlAk+MdXaISJqUSiW6d++JBx5Yho8/+gxPPPF3DBkyDF61RmgPZ6PD5wcRuPMovM4WQGi4+nKLdmcyw/18Kfx++B0dN/0Cv/9Lh0eRAamp3XHffQ/io48+xd/+9jyGDRsJT0/XKuXaktjYOABAdnXL/fKcaktip0uX+HaLiUgsTQfbuUJSs+nxent7t7KncwsJ6YDY2Di455dDaLBcy6vKqqCsrkP/fgOhVDrPz1oQLKWd/HR+2JbnjYIrrGF0tWqNAj7K0kIQBDz8sLTWbhw8eBgGDBiE00Xp+DnjgF0+02Q24YMDm9FoMuL+JX+FRuM8v/8JCV0BAFlFl66DkVloWccwKalru8bkaL6+Ovj4aJFTfHF9iGxbAkM+JZ7j4hKgVru3OgOjsbERRUVFiItLkMz/U6dPYJw9exZ//vOfkZaWhgEDBuCFF15AfX39Fd9nNpuxfv16DB06FN26dcP06dPx22+/XbJfQUEBFi1ahO7du6N3795Yvny5bcSoM3GmxtLenKXcTGxsHP655k107ZpiqQP91VEoqxy4uLfZDM3JXAR+cxwqs4CHHlqOu+++V5K/KzNm/AluSiW+LfC67BTWehPwQ5EXfHx8MGnS5PYN0M6GDx+F6OgY/F/WryjQF7W4j9FkxNbju+GmdHOqtT5aY01OnMlrXmuz0WhCRqEenTvHyHLUliAICAoKQWFFMQrKi+Drq5P9aLyAAEv5gJKSkmbPiYiaUqvVGDBgEJYvfwr/+/hzPPTQcvTo0QsexQb4/XwWHTfuh9+e01AXGdpt9qqyshbagxnouHk/Ar89Ca+sEkRHRmPevHuwYcMnePHFVRg/fiK0Wt92icdZxMUlAACyq1vuZ1oTG/HxCe0WE5GYHnnkCTz00HKnuVa1F2e6gXstevfuC8FktqzjBMtgQct26ZcN+iOdTof7lzyEBhPsVkpqW64GpXVKzLjtTsmtnSAIAhYuXAKNRoPPjuyAvvb67/v9dO4XZJRmYdiwkU73O2D9+ViTFU1lXkhqJCRI62doD+HhEcgpzoXRZElCWks8y6n0p0qlQmJiEkpLSy97/7yoqAgmk0lSi7Q7dQKjoqICs2bNQkNDA1avXo0lS5bg448/xnPPPXfF977xxht47bXXcNddd+H1119HUFAQZs+ejezsi4u1NDQ0YO7cucjIyMDKlSvx5JNP4scff8QDDzzgyMNyCKXSqX/ULsPPzw8vvPAqxo27CerSKgRvPwxV8aUNxnUzmqDbdxa6Axnw9w/AyytXY+TI0fb/HjsJDg7ByFFjUFDrhpP6ltfC2F/igapGATffPEUyGeJrpVAocNddc2E2m7Hr1Pct7nPo/DEUVhZj3PibZDNav0OHjggKCkZ6fkWzdTCyiw1oMJokU3vREYKCglFqKENeaQGCguS5uGFTfn7+AIDq6mpoNN5Qq11rnSYiajsvLy+MHDkazz33Mv7zn4/x5z/fjYiOYfDKKELQziMI2n4YnumFQAu1mq+b2Qz3/HL4f3cCHT47CJ8TudCpvXDLLVOwdu2beP31f2Pq1NtkuzitPSQkJAIAsqtanoGRXeUGb41GVjcIiFozbNgISV9/OYrcB+n06GEpE+WeX37h74oLs8i7ixjVtevXbwBGjhyN7GoVfrzOUlLnKt2wt9gTUVHR+NOfZtkpQvsKCAjEnDkLUNNQg0+PbLuuz9LXVmLL0Z3w9vbBggWL7BRh+wkJ6QBfrW+LJaSyiyuh1Wplcx+iqdDQMDQYG1Gst1QKOF+Sb9suJ8nJ3WA2m1FYWNji69bZGSkpTGDYxYcffoiqqiqsWbMGgwYNwpQpU/DXv/4VH374IQoKCi77vrq6Orz++uuYPXs27rrrLvTr1w8vv/wydDod3nrrLdt+O3bswOnTp7Fq1SoMHz4c48aNw9///nd8++23OHz4cHscot0oFE79o74m7u7O2TlSqVS4774HsXDhErjVGxG06xg8skqu/MarJNQ3IuCbE9CcLUR8fCL+ueYNp8icT548DQBarMFpNlu2q1Qq3HTTLe0dmkP07dsfkZFR2J99CBU1zadtms1mfH36RygEBW69dbpIEdqfIAhISUmFoaa+2ToY5wosxy+l7L+9WWcg1Dc2ICBA/jfAdDo/22M/P79W9iQiulRwcAhuu+0OvPXWf/HSS69h0KCh8Civgf/eM+j46QFoTubaJ5FhNsMjpxTBWw8hcPdxeOaUITGxKx55ZAU++GAT7rlnMWJj41xuBPW18Pb2QUREJLKrVZeM4q1uFFBY54b4hCSXvGYhciXu7vIetJKQkAilmxvUxZWWUoMllYiM7OTUs/IWLFgIna8OO/O8UVZ/befoRhOwMVsLhSBg6dKHJV3me9y4mxAfn4j9Wb8hvTjzmj/ni2M7UdNQi9mz73bK6x1BEBAXn4BifQ2q6xps22vqG1Gsr0GXLvGy7P907BgKAMgptqwPkVOSB38/f9mVA+3a1bKuxeXunVsTG4mJ0lnnxKl7iN9//z369esHnU5n2zZ27FiYTCbs2bPnsu87ePAgKisrMXbsWNs2tVqNUaNG4fvvL452/v777xEfH4/OnTvbtg0YMAA6nQ7fffedfQ/G4eR3YrmSVavWYdWqdWKHcU0EQcDEibfgH/94CZ5qdwT88LvlYvw6KavqELTzKDwKKjBo0FC89NJrTlN7PioqGqmp3XHKoEZJXfNTV3qlCoV1bhgyZHiz84EzEwQBkydPhdFkxL7MX5u9llOei6yy8+g/YJCtgZULax3NjMKLSRvrY7nV2GzK39+/xcdy1bQUmBzLghFR+xAEAd26peHxx5/Ge+99hBkz7oC3Ug3dgQx0+PwgvM4U4FprXqjzKxC04wgCvjsJdUUNRoy4EWvWrMeqVeswbNhISd98karExK6oMQooqmteS91aVioxUb7tPJGre+SRFRg+fBQ6dYoWOxSHUqvdEdM5FuqyKrhVVENoMDrFYMHWaLW+WHDPItSbgC0511YC7MciTxTWKjFx0mTJ/3soFArce+99AIBPDm25pgW9M0tz8HPGAcTGxmHs2An2DrHdWNevyi2tsm3LvTAjw/qa3Fjvr+SVFcBoMqKgvAgdZHbPBbg4M7alGRhmsxlFRUUIDQ2T1P01p05gpKenN0suAIBWq0VQUBDS09NbfR+AS94bExOD3Nxc1NbWXvbzBUFAdHR0q58vRWq1Cp6enhgyZJjYobSbzp1jnP5CqEePXlj16loEBAZBdyADPkeyr/ymy1BW1iLoq6O2xbqXL3/S6UbAjBkzHgBwsLT57JqDpZbjcObOQUuGDh0Bd3cP7Ms80Kyk0r7MgwDkd7zAxTqaWUUXS6dlFxsQEhwCf3/5rpPQdEZC08dypdVqbY99fHxEjISI5CI4OASzZ9+N9979CNOn/wmeRgF++84i6KsjcNPXXPXnCPWN0O09jaDdx6AuqcSQIcPx5pv/wcMPP2Zbx4Guja2Nr2q+DkbWhbJSUr+pRUTXbtiwkVi27HGXWLQ8JqYLBKMJntmWKgqxsV1Ejuj6DRs2EikpqTha4Y7T+rYl8PUNCuzK10Dnq8PMmbMdFKF9JSQk4cYbxyKnPA8HsttWfcVsNuOzI9sBAH/5y2IolfZZAF0MMTGW393zTcpInb+QzJDD73VLQkI6AADySgtRYihDo7HRtk1OrDNji4qKmt1rAgCDwYDa2lrJ9cucuvXQ6/XNboJY+fr6oqKiooV3XHyfWq2+5OatVquF2WxGRUUFPDw8oNfrW7yxcqXPvxpubu2bO3JzU+OjjzbD09OD62E4mS5dumD1a+uw9IHFwOFswGSGITWyTZ+hNNQiaNcxKKvrMHfufNx++50OitaxBg8eglWrXsJvZUaM6lgNwDId9UiFBzqEdEBqaqqsSg9otd4YNGgIdu3agfMVeQjXhcJkNuHX80fh5+eP3r17y+7/c2xsLJRKpa2TpK+ug766Hqk9E9r9vNmemk4r1ul0sj5WANDpLk6j9/X1derjdebYieTI31+H+fPvwdSp0/Cvf63Frl07ELz1ECp6dEJVXOu1mtWFevjvOQ1ldR3i4xPwwAMPy/YCXQzJyZYyBFlVKtwQUGfbnnVhBkZycjLPqSQK/t6RPcXEWAbBemZaEhidO8fI4nds8eIluPvuP+PLXG8s9imD4iqLfHyV54V6k4DF8xY0uwaQutmz5+Lbb3fjy2O7kBaWDJXy6m6fnig4hTPF5zBgwCCkpaU5NkgH69IlFgCQX3ZxBob1cZcuXWTxe/1HoaGW2RaF5UUoKCsCAHTs2FGWx5qQkIjs7Czo9Xr4+l78v1lUZDnuxMRESR23UycwnJVCIcDPT9Pu3yvGd5J9+PnF4N13/o158+Yh62gWTO4qVCVc3YJJitp6BH1zHMrqOixduhR33umcyQvA8js8cOBA7Nq1C4W1SgR7GHGuUoVao4BRN45CQID8RnKPGTMKu3btwJG8kwjXhSKr7DwMtZW4dfytCAy8NIHr/DSIiYlBRvpZmMxm23TVlJSusj6HdegQ2OyxnI8VABobg22PAwL8nPZ4xWrPiejK/Pw0ePHF5/DNN6Pxt7/9DcIv56Csqoc+LRJooWazR3YJAvachlJQ4J6FCzFr1iyXGCncnrp3T4aHhweyqy/W0jabgexqNSIjI9Gpk/wWAyXpY1tO9hYfb7npq7ow+y85OV4Wv2O9eqViwoQJ2LJlCw6VuaO7f90V31NUq8QvpZ6I6dwZM2ZMcarZCH5+nXHbbbfh3Xffxf9lHsSAzr2v+B6z2Yytx3dDEAQsWXKf0//ctdo4qNUq5JdV27bllVVBpVKha9c4WfaTvL0joVAoUFhRjMKKYgBAVFSE0/8sW5KW1g1ffbUDxcXFzRIYxcWW4+7ZM01Sx+3Uv21arRYGg+GS7RUVFc3+8Vt6X319Perq6prNwtDr9RAEwfZerVaLysrKS95fUVGBjh2vvYNtMpmh11dfeUeiJlQqDZ5//mXcu3A+cOAcjBo1aiOuUFKn0YiAb09CaajFrFmzMWHCZJQ1yZ47o169+mDXrl04qVcj2KMGJ/RqAECPHr2d/thakpjYDUqlEicLTmNs4nCcKDgNAEhLu0GWxwsAkZHROHXqFMoqa5F34Rg7dAiX7fECgCComzxWyfpYAaCx8eJIDjc393Y9Xq3W024zl9ieE0lfWlpvrF37Bv760BLkHM+G9+n8FhMYQn0jPDw98czfnkOPHj1hMNQBuPLNGWqb2NguOH7sCBpMgEoBlNUrUN0ooEuXeNm3fWQ/bMtJynx8Ll6jq1QqKJWesjm/3X77LGzbuhW7C7yQ6ld3xVkYXxd4wWQG7vrzPOj1te0TpB1NnDgFH37wIb76/Xv0jeoJpaL1BMzJgjPIKjuPYcNGwN+/gyx+7hERnZCTdc5WZqiwogbh4ZGy7if5+fmjSF+KogrLLCqNxlcWP8s/Cg3tBAAoLS1FTEyMbXtJSQkEQUBwsOPvwbSlPXfqBEbnzp0vWYvCYDCgqKjokrUr/vg+ADh37hwSEi7Wsk1PT0doaCg8PDxs+506darZe81mM86dO4cBAwZcV+yNjW1fCIgoICAYf3/mRSxZei/8955BgU4Do4/HZff3PZgBdUklRo8eh9tvnyWL37vU1J4ALAt3Dw6uQXqlCu5qNeLikmRxfH+kUnkgLi4Bp34/ifrGepwtOgdBENC1a4osjxcAIiMtDWlBeTUKyy0XlBERnWR7vADg7u5pe+zh4SXrYwUApfJi7Vy12sOpj9eZYydyFQEBwXjl5X9i9epXkJeX2+I+Go0Gc+feg7i4eP6/dqAuXRJw9OgR5NW4IVLTiJwL5aNiY/nvTuLh7x7Zk5+fv+1xYGAQTCbAZJLH71hAQDBG3TgW27Z9gWMVaqTo6i+7b2mdAr+WeSA6ujN69+7vlP/PfHx8MX7CJGza9DEO5hzBDZFpre6/69T3AIAZM+5wyuNtSXh4BM6ePQNDTT0AAbX1jbK/Ng8ICER2RgaK9aUAAJ3OX5bHGxVluTdeUlLSbHtpaSk6dgyV3HW6UycwBg8ejH/961/N1sLYvn07FApFqwmGHj16wNvbG9u2bbMlMBoaGrBz504MHjy42ed//vnnyMjIQFRUFABg7969KC8vx5AhQxx3YEStiImJxZL7H8Kzzz4F/z2nUHRjMtDCug8eWSXwPl2AmJguWLRoKYQWRhs6o4CAQISGhiGjMAe1RgF5NSqkpiVDpWrbYmLOpGvXFJw4cQzZ5bnILMtBVFQ0vL3lVy7LKjw8AgBQrK9Bkb4GSqUSHTrIu6yEp6dni4/lqun5yMvLS8RIiMhV+Prq8NhjT4kdhsuzrimSeyGBkVvj1mw7EZGz8/T0gqenF2pqquHvf4WKCU5o+vQ/Yfv2L/F9oVerCYw9RZ4wmYEZM+506nsRt9wyBZ9u/gTfn9nbagIjtyIfp4vS0atXb0RHx1x2P2cTFma5Ni+qqLH9HMPCwsUMyeH8/f1x6tRJ5JTkXXguv//HAKDReCMoKBhlZWW2bTU1NaitrUV09OUnBYhFOqtxXIMZM2ZAo9Hg3nvvxY8//oiNGzfihRdewIwZMxASEmLbb9asWRg1apTtubu7O+bPn4+3334b7777Lvbu3YsHHngA5eXlmDNnjm2/0aNHo0uXLli0aBG++eYbbN26FY8++iiGDh2Kbt26teuxEjU1bNgIjB49DuqSSmhOFVzyutBghN/+c1C7u2P58iehVqtb+BTnFR+fiOpGAcfK1TBfeC5nXbrEAQAOnT+GusZ6xMbGiRyRY1k7RMX6WhTraxES0gHKq1w0zVlZZ/5ZHss/gdFU01KOREQkb507W2rD511IXFgTGNbtRERyoFJZzm2+vjpxA3GA0NAw9OnTD5lVKpyvbvkard4I7C/1RIB/AAYNcu7BvyEhHdB/wEBkluUgszTnsvv9cPZnAMDNN9/aXqG1i9DQMABAiaEWxYaaZtvkyjqLKj0vAwCg0+nEC8bBoqKiUVVVhfp6SzLSmszo1ClazLBa5NQJDF9fX7z77rtQKpW49957sXLlSkyZMgXLli1rtp/JZILRaGy2bd68eVi4cCHefvtt3H333cjPz8dbb72FiIgI2z4qlQpvvvkmoqKisHTpUjzxxBPo378/Vq5c2S7HR9SaefPugcbbG75HsqGobWj2ms+xHChq6nHbjDtso9nlxDpKb3+pR7PncmUdwXEw53Cz53IVHNwBAFBYUQ1DTb3sZ18AgI+PFr6+Onh4eCAwMPDKb5ARJjCIiFxHRIRlccz8Wksd8YJaNwQGBMLHR74zS4nI9YSGWgZkBQcHixyJY0ycOBkAsK+k5XLWh8vdUWMUMH7CJFks9Dx+/CQAwL7MAy2+Xm9swIGcwwgOCkGvXn3aMzSH69gxFIAlgVFqqG22Ta50Oj8AQH55EXx8tLIeTNmpUxQAoLy8vNnf1rLeUuL0P4WYmBi88847re7zn//855JtgiBg/vz5mD9/fqvvDQkJwerVq68nRCKH0Gp9MfPO2Vi37jVoTuXD0M2SqBDqG+H9ez4Cg4IxZcoMkaN0jMjIKADA2Ur1hefSO7naU2hoKARBgL62EgBkmZRqSqPRwFvjjYwCPQDLqBe5U6lU2LDhfzCZzM1mY8jZ1Km3Yd++vYiLS7jyzkREJAtqtRqhoWEozM9EvREoq1eix4WLZyIiuXj88adx4sRx9OjRU+xQHKJ7954IDAjE4fIiTAyrhNsfhkYfvDDQcNSoMSJEZ39paT0QGBiEA9lHcEu38VD94Yb2kdzjqG2ow603joGihfLezsx6LV5eVWsrIRUcHNLaW5yeVutreyzHWVRNWUuEVVRUIDg4GHq95R5MeHikmGG1SF7/s4hczNixE+Cj1cLnZC4Cvj6OgK+PI3D3MQiNRtw6eZpsRzb/seaidYSLXKnV7ki4UCbL3d3DVlJKzgICg9BgtCwYFRDgGjMS1Gp3l0leAJZZZG+++Z5LzLAhIqKLwsMjUNWoQHa1Zf2yiAjpXSQTEV2PoKBgDB48VLbrFiqVSgwbPgrVjQJOGZqXqzY0CDhbqUZycjfZDERTKpUYPnwkahpqcKrwzCWv/5pzBAAwYsSN7R2awwUEBEChUKCssg5llXUQBEH21+fWNZYtj+X5f9jKOjjWmrioqKgAIM11TpjAIHJiHh4emDH9TxAajPDIK4dHXjnUpVUICgrGmDHjxQ7PYYKCLk7F1el0sk3UNPXyK2vw0Uef4uOPP5N9hwFo/jMODAwSMRIiIiKyJ+tF8e96y00vudfSJiKSI+vaFscrmicwjle4wwxg8OBhIkTlOAMHWo73t/PHmm2va6zHiYLTiIqKlmWlBKXSDTqdH/TV9dBX10Gn00GlUokdlkM1TTz6+Ghb2dP5WcuBGQwG29++vjpoNBoxw2qR05eQInJ1U6fehltumQqz2WzbplQqZTd1sSl3d3cEBgSiuKTYZS56lUo322JSrmD27Hno3Lkz3N09MGSIvDq/RERErsw68y69UnXhubxraRMRyVFcXAL8/PxxXF8Ms7kSF6oL4cSF5HTfvv1FjM7+4uMTERAQiOMFp2A2m23llE4XpaPB2Ij+/QeJHKHj+PsHIDuzHIIgICxCeiPz7a3pmpT+/vIePBoQEAg3NzcYDAaYzWYYDAbExkqz4gcTGEQyIIeFsdrqqaefxe+/n0RaWg+xQyEHiI2Nk2zDSURERNcuONhSUiTrQgkpuZQYISJyJQqFAr169cZXX21HQa0SHTyNMJqB9Eo1IiIiZVcmVhAE9Ox5A3bu3IZcfQHCfC1t18kCS0mpXr16ixmeQ/n5+eHMGeOFx/IfVBkbG4dnnnkBer0eN9wg358rYBn8HBgYBINBj9raWhiNRsn2y+Q7RJuIZK1Ll3hMmDBJltM0iYiIiOSq6cjGlp4TEZFzSE3tDgA4e2FGXW61G2qNAlJT5TnIsHt3y6LspwrP2radLkqHh4cHEhKSxArL4XQ6vyaPdeIF0k4EQUDv3n0xcuSNsl/EG7Asyl5dXW0rIxUUJM0S3kxgEBERERERUbtouraVSqWSfX1pIiK5SklJBQBkVqma/Z2S0k20mBwpOdlyXBml2QCA6voa5OsLkZjYVdZVMXx9fVt8TPIQEBAIs9mMkpKSC8+ZwCAiIiIiIiIXptVeTFjodH62OuJERORcOnToCK2PFjnVlpv31r/j4hLEDMthgoNDEBAQiIySLABAVtl5mGFGUlKyyJE5VtOBBhx0ID8BAQEAgOLi4gvPpTkzlgkMIiIiIiIiahdKpRvCwiyLgIaHR4ocDRERXStBEBDbJQ7FdW6oMwK5NW7w8vJCaGiY2KE5hCAIiI2NQ1lNBarqq5FTngsA6NJF3ms3Jid3g4+PD3x8fGyzUEg+rOualJaWXnju19ruopHvHCciIiIiIiKSnNdeex15ebmIiGACg4jImXXqFI2DB/djW643iurcEJ8YLeuZdTExsdi37yecL89HbkU+AKBz51iRo3KslJRUbNz4pdhhkINY1zgpKysDIN2F2pnAICIiIiIionZjGckZL3YYRER0nayLV/9U7AkAiI+X72LWANCpUxQAoLCyCAWGIri7eyAkpIO4QRFdB+tC5Y2NjQAArVaa65wwgUFERERERERERERtMmTIMISGhqKurg4KhQJxcfJOToeFRQAANh3aCqPJiM4xMbKecULy13RtMstzH5EiaR0TGERERERERERERNQmCoUC8fGJYofRbjp3jsHAgUNQUGApHzVhwiSRIyK6Pk0XZtdoNFAqpZkqkGZURERERERERERERBLh5uaGFSv+JnYYRHbj7e1te6zReLeyp7gUYgdARERERERERERERETtp2nSomkyQ2qYwCAiIiIiIiIiIiIiciFubm6YOPEWxMbGYdy4m8QO57JYQoqIiIiIiIiIiIiIyMUsXLhE7BCuiDMwiIiIiIiIiIiIiIhIcpjAICIiIiIiIiIiIiIiyWECg4iIiIiIiIiIiIiIJIcJDCIiIiIiIiIiIiIikhwmMIiIiIiIiIiIiIiISHKYwCAiIiIiIiIiIiIiIslhAoOIiIiIiIiIiIiIiCSHCQwiIiIiIiIiIiIiIpIcJjCIiIiIiIiIiIiIiEhymMAgIiIiIiIiIiIiIiLJYQKDiIiIiIiIiIiIiIgkhwkMIiIiIiIiIiIiIiKSHCYwiIiIiIiIiIiIiIhIcpw+gfH1119j4sSJSElJwejRo7Fx48Yrvufw4cN45JFHMGrUKKSmpuLGG2/EypUrUV1d3Wy/1atXIz4+/pI/H3zwgaMOh4iIiIiIiIiIiIiIALiJHcD12L9/PxYuXIgpU6bg0Ucfxc8//4zly5dDo9FgzJgxl33ftm3bkJmZiblz5yIqKgpnzpzBa6+9hkOHDuG9995rtq+HhwfefffdZtsiIiIccjxERERERERERERERGTh1AmMdevWoVu3bnj66acBAH379kV2djZee+21VhMY8+bNg7+/v+15nz59oNVq8eCDD+Lo0aNITk62vaZQKJCWluawYyAiIiIiIiIiIiIioks5bQmp+vp67Nu375JExbhx43D27Fnk5ORc9r1NkxdWSUlJAIDCwkL7BkpERERERERERERERG3mtAmMrKwsNDQ0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mQgKChI5OvsbOXIkUlJSsHjxYixZsgTu7u5Yv3491Go1br/9drHDc6gtW7YgNDQUPXv2FDsUh5oxYwb+8Y9/4JlnnsHw4cNRXl5uq507duxYscO7bjU1Nfjuu+8AWDp/lZWV2L59OwCgd+/e8Pf3x6JFi/Dggw8iMjISffr0wdatW3H48GH897//FTN0WXK1PoEUuVo/RWpcrd8kNa7Wj5MiV+5bSoGrtcOu1ua5Whvjiud0Vz2H8tqc1+ZSuDZnAkPm9uzZAwB47rnnLnlt9+7dshv50K1bN2zduhXr16+H2WxGWFgYpk6dijlz5siuQ+iKoqOjsXHjRuTn58NkMiEqKgqPPvoo7rzzTrFDcwiFQoH169fj2WefxYoVK9DQ0IBevXphw4YNsu0UAkBFRQV++OEHzJo1C4IgiB2OQ82cORNqtRoffPABNm7cCI1Gg7S0NLz66qvw8/MTO7zrVlJScslidtbn7733Hvr06YMJEyagpqYGb7zxBtavX4/o6GisWbMG3bt3FyNkWXO1PoEUsZ9CrszV+nFS5Kp9S6lwtXaYbZ68ueI53RXPobw257W5VK7NBbPZbBY7CCIiIiIiIiIiIiIioqYUYgdARERERERERERERET0R0xgEBERERERERERERGR5DCBQUREREREREREREREksMEBhERERERERERERERSQ4TGEREREREREREREREJDlMYBARERERERERERERkeQwgUFERERERERERERERJLDBAYREREREREREREREUkOExhERERERERERERERCQ5bmIHQER0veLj469qv/feew99+vRxcDRERER0LdieExEROT+250Rkb0xgEJHTe+GFF5o9/+yzz7Bnz55LtsfExLRnWERERNQGbM+JiIicH9tzIrI3wWw2m8UOgojInp5++mls2LABv//+u9ihtMhsNqOurg4eHh5ih0JERCRZbM+JiIicH9tzIrpeXAODiFyCyWTCO++8g/HjxyMlJQX9+/fHihUrUFFR0Wy/4cOHY/78+di/fz+mTJmClJQUjBgxAp9++mmz/VavXt3i1NhNmzYhPj4eOTk5l3zmDz/8gMmTJ6Nbt2748MMPAQB6vR5///vfMWTIECQnJ2PUqFFYv349TCaT/f8RiIiInBzbcyIiIufH9pyI2oIlpIjIJaxYsQKbN2/G5MmTceeddyInJwcbNmzA8ePH8cEHH0ClUtn2zczMxH333YcpU6bglltuwcaNG7Fs2TJ07doVXbp0uabvP3fuHB544AFMnz4d06ZNQ3R0NGpqanDHHXegoKAAM2bMQMeOHfHrr7/i5ZdfRlFREZYvX26vwyciIpIFtudERETOj+05EbUFExhEJHv79+/H//73P7z00ku46aabbNv79OmDuXPnYvv27c22nzt3Dhs2bECvXr0AAGPHjsWQIUOwadMmPPzww9cUQ2ZmJt58800MGjTItm3t2rXIzs7G5s2bERUVBQCYMWMGgoOD8dZbb2H27Nno2LHjNX0fERGR3LA9JyIicn5sz4morVhCiohkb/v27fDx8cGAAQNQWlpq+9O1a1d4eXlh3759zfaPjY21dY4AwN/fH9HR0cjOzr7mGMLDw5t1jqxx9ezZE1qttllc/fv3h9FoxC+//HLN30dERCQ3bM+JiIicH9tzImorzsAgItnLzMyEwWBAv379Wny9pKSk2fOWRlX4+vpeUo+zLcLDw1uM6/fff79sXKWlpdf8fURERHLD9pyIiMj5sT0norZiAoOIZM9kMiEgIAAvvfRSi6/7+/s3e65UKq/4mYIgtLjdaDS2uN3Dw6PFuAYMGIC5c+e2+B7rtFUiIiJie05ERCQHbM+JqK2YwCAi2YuMjMTevXvRo0ePFjsq10Kr1QIA9Hq97TEA5Obmtimu6upq9O/f3y4xERERyRnbcyIiIufH9pyI2oprYBCR7I0dOxZGoxFr16695LXGxkbo9fo2f2ZkZCQANKuDWV1djU8//bRNcf3666/44YcfLnlNr9ejsbGxzXERERHJFdtzIiIi58f2nIjaijMwiEj2evfujenTp+P111/HiRMnMGDAAKhUKmRkZGD79u1Yvnw5xowZ06bPHDBgAEJDQ7F8+XKkp6dDqVRi48aN8PPzu+pRHnPmzMHXX3+NBQsW4JZbbkHXrl1RU1ODU6dOYceOHdi9e/cl02eJiIhcFdtzIiIi58f2nIjaigkMInIJTz/9NJKTk/Hhhx/ilVdegVKpRFhYGCZOnIgePXq0+fNUKhXWrFmDp556CqtWrUJQUBBmzZoFrVaLRx555Ko+w9PTE//5z3/w+uuvY/v27fj000/h7e2NqKgoLFq0CD4+Pm2Oi4iISM7YnhMRETk/tudE1BaC2Ww2ix0EERERERERERERERFRU1wDg4iIiIiIiIiIiIiIJIcJDCIiIiIiIiIiIiIikhwmMIiIiIiIiIiIiIiISHKYwCAiIiIiIiIiIiIiIslhAoOIiIiIiIiIiIiIiCSHCQwiIiIiIiIiIiIiIpIcJjCIiIiIiIiIiIiIiEhymMAgIiIiIiIiIiIiIiLJYQKDiIiIiIiIiIiIiIgkhwkMIiIiIiIiIiIiIiKSHCYwiIiIiIiIiIiIiIhIcpjAICIiIiIiIiIiIiIiyWECg4iIiIiIiIiIiIiIJOf/AXshtCBG8IysAAAAAElFTkSuQmCC"/>
</div>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Management-Evaluation-Scores">Management Evaluation Scores<a class="anchor-link" href="#Management-Evaluation-Scores">¶</a></h2><ul>
<li>Examine the last evaluation scores you chose to gauge the perceived effectiveness
of the team member.</li>
<li>Identify patterns in feedback and recognize areas
for improvement.</li>
<li>Consider conducting feedback sessions to better understand team
members' expectations and concerns.</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noInput">
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child">
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
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Work-Hours">Work Hours<a class="anchor-link" href="#Work-Hours">¶</a></h2><ul>
<li>Analyze the distribution of work hours among team members.</li>
<li>Identify any instances of excessive overtime or uneven workloads.</li>
<li>Balancing work hours is crucial for maintaining a healthy work-life balance and preventing burnout.</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noInput">
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child">
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
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Project-Involvement">Project Involvement<a class="anchor-link" href="#Project-Involvement">¶</a></h2><ul>
<li>Examine the number of projects each team member has been involved in.</li>
<li>Assess whether workload distribution is equitable and aligned with individual capacities.</li>
<li>Consider redistributing projects to ensure a fair and manageable workload for
each team member.</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noInput">
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child">
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
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Salary-Levels">Salary Levels<a class="anchor-link" href="#Salary-Levels">¶</a></h2><ul>
<li>Review the salary levels within the team.</li>
<li>Address any disparities or concerns related to compensation that may affect employee satisfaction.</li>
<li>Ensure that salary levels are competitive and reflective of employees' contributions.</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noInput">
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child">
<div class="jp-RenderedImage jp-OutputArea-output" tabindex="0">
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,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DLTrlXe5GTNmKCMjQ3fffbe8vb2VlZWlb775Rp988okaNWqkPn36SMrr7ejq6urwh2W+iIgIzZkzR3FxcXr88cfN5fHx8eZTYZe7//77zXGVjxw5oo8++sgh5qabblJoaKgyMjI0YMAABQUFqWPHjmrQoIHS0tL06aefavfu3erSpYtatGjxF2dFOnnypPk+6enpOnz4sDZt2qTTp09ryJAhGjBggBnbrl079e/fX0uXLtVPP/1kdq0/cuSINm3apBdeeEH33HOPGd+sWTO98MIL+uGHH1S3bl2tW7dOZ86csRtWw9/fX66uroqJiVFaWprc3NzUvn171a1b9y/bXlgJCQkF/rzbtGlzxWugOApzvH9WuXJljRs3ThMnTtSjjz6qHj166MyZM3r77bfVqFEjPfbYYw7b3HfffXr55ZclySGXsVgsmjFjhoYNG6aePXuqT58+ql+/vk6ePKldu3apZs2aWrJkiSTp2Wef1a5du/Tggw+qX79+at68uVJTU/Xjjz8qKSlJX375pSRp6NChuummm9SmTRvVrVtXycnJWrlypd3ktFcSFBSkSpUqKSUlxW5C3dtvv93M5QqapLMwIiIiFBISojlz5uj48ePy8/PTzp07tXXrVg0ePNgcovNqsrKyCrwJ5+HhoUceeaTQP8sradmypf71r39p0aJFatq0qerUqXPFseKB8o48gDyAPMAReUDZ5AFF+f250ueHt7e3mjRpopdfflknT55UzZo1tXnz5qsWSUvq3BX287S8oHgBlCPr169XlSpVFBoaWuB6i8Wiu+66Sxs2bNC5c+fsJsQurmnTphW4/O233y7R4sXtt9+uoKAgLVy4UL/++quaN2+umTNn/uXE1qNHj1adOnW0cuVKzZw5Ux4eHnrwwQf197//3UxmL9e7d2+tXLlSHTp00M033+yw/t5779XNN9+sZcuWKTY2VpmZmapfv77atm1rJrGS1Lx5c61bt04LFizQhx9+qPPnz6tOnTpq0aKFnn76aTNu4MCB2rZtm3bu3KnMzEw1bNhQUVFRdgk5AJQHt956q2JjYzVz5kzNmzdPDRo00OjRo3X69GmHJHv48OFq1qyZ3nzzTS1cuFBS3sSVoaGhDgV6Dw8PzZo1SzNmzNDq1at10003aerUqXrwwQfNmMqVK2vWrFl67bXXNG3aNGVnZ2vmzJlX/IP1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ycl68cUXtWnTJt1///0l2VYAAFABkGMAAIB8ZZkXLF68WP/4xz8UGRmp2NhYvfTSS/L09FROTo4kaffu3Ro1apSCgoIUExOj7t2764UXXtCmTZvs9jNjxgytWbNGY8eO1fz585WZmanHHntMaWlp16XdAACUF5WKu+GIESN07NgxrV69WmvWrJHFklcHyc3NlWEYuv/++zVixIgSaygAAKgYyDEAAEC+ssoLkpOTtWDBAi1atEh33nmnubxbt27mvxcvXqzAwEC99NJLkqT27dvr2LFjmjdvnu655x5J0okTJ7R27Vq9+OKL6tu3ryQpICBAnTp10vvvv69hw4aVeNsBACgvil28cHV11axZs/TYY48pISFBx48flyQ1atRI4eHhuvXWW0uskQAAoOIgxwAAAPnKKi/44IMP5OnpaVe4uFxmZqZ27dqlcePG2S2PjIzUxx9/rF9++UWenp5KTExUbm6uWcyQpFq1aik0NFQJCQkULwAAuIoiFS/++OMP/d///Z/+9re/aeDAgZKkW2+91SFZePvtt/X+++/rhRdeUOXKlUuutQAAoFwixwAAAPmcIS/47rvv5Ovrq0WLFumdd95RWlqaWrVqpYkTJ6p169b6+eeflZWVJW9vb7vtfHx8JOX13PD09FRycrLq1q0rDw8Ph7i1a9eWaJsBAChvilS8WLVqlT788EPFxcVdNe6uu+7SP//5T/n6+urhhx++pgYCAIDyjxwDAADkc4a84PTp09q7d68OHDigF198UdWqVdOSJUs0ZMgQxcfHKzU1VZJktVrttst/nb/eZrPJ3d3dYf9Wq9WMuRaVKhVtKlNX12JPfQonVprnlWuofOK8wlkVqXjxySefqGvXrmrcuPFV45o0aaJ77rlHGzdu5MYCAAD4S9c7xzh69KhiY2P13Xff6eDBg/L29tbHH39sFzNw4EB9+eWXDtvGxcWZT1FKUlpammbOnKlPP/1UWVlZ6tixoyZPnqybb7650O0BAABX5gz3HgzDUHp6ul5//XWzx0fr1q0VERGhlStXKiwsrETfrzgsFhfVrl2jrJsBJ2C1VivrJuAGxzUEZ1Wk4sWBAwd07733Fio2ODhY27dvL1ajAABAxXK9c4yDBw9qx44dat26tTnBZ0HatGmj8ePH2y3z9PS0ex0VFaVDhw5p2rRpqlKliubOnathw4Zp3bp1qlSp2NOJAQCA/88Z7j1YrVbVqlXLbqiqWrVqqUWLFjp06JB69OghKe+hhsvZbDZJMoeJslqtunDhgsP+bTabw1BSRZWba8hmSy/SNq6uFm5SlkM2W4ZycnJL5b24hsqn0ryGACmvYFaYHj9F+gs7Kyur0ONIVq5cWZmZmUXZPQAAqKCud44RERGhLl26SJImTJigvXv3FhhntVoVFBR0xf3s2bNHiYmJio2NNZ+49PLyUmRkpOLj4xUZGVmkdgEAAEfOcO+hefPm+vnnnwtc98cff6hJkyaqXLmykpOT1bFjR3NdcnKyJJlzYXh7e+v3339XamqqXbEiOTnZYb6M4sjO5mYjpJycXK4FXBOuITirIg1odvPNN+vgwYOFij148CDDJwAAgEK53jmGxVIyY7gmJCTIarUqNDTUXObt7S1/f38lJCSUyHsAAFDROcO9h06dOun8+fP66aefzGXnzp3Tjz/+qJYtW8rNzU0hISHavHmz3Xb5w03m99wMCwuTxWJRfHy8GZOamqrExESFh4eXeLsBAChPivSX/B133KGPPvpIZ86cuWrcmTNn9NFHH+mOO+64psYBAICKwVlyjC+//FJBQUEKCAjQo48+qq+++spufXJysry8vOTi4mK33Nvb23zSEgAAXBtnyAu6dOmigIAAjRkzRnFxcdq6datGjBghNzc3c36Np556St9++62mTZumXbt2ad68efr44481evRocz8NGjRQ3759NXv2bK1bt06JiYkaNWqU3N3dNWDAgBJvNwAA5UmRho0aNmyY1q9fr8GDB+v//u//1Lp1a4eY7777TpMnT9Yff/yhJ554osQaCgAAyi9nyDFuv/129e7dW82aNdOpU6cUGxurxx9/XO+8846Cg4Ml5Y1P7e7u7rCth4fHFYeiKopKlYrWQ6QwY4TixlOa55VrqHzivOJG5wx5gcVi0bJlyzRz5kxNnTpVWVlZatu2rd59913Vq1dPktS2bVvNnz9fc+fO1dq1a9WwYUPNmDFD3bt3t9vX5MmTVaNGDb366qu6ePGi2rRpoxUrVhSYUwAAgP8pUvGicePGmjt3rv7+979rwIABaty4sXx9fVWjRg1dvHhRBw8e1M8//6yqVavqtddeU5MmTa5XuwEAQDniDDnGmDFj7F7fdddd6tmzpxYtWqSYmJgSf78/s1hcVLt2jev+PnB+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TpYT+eNOGobBZ1ARvfHGG3bDT9avX9/89/9r797jtCzo/P+/74GBSmcwcDzgiVOCgqgBIorkGvpVFzTdH5mVZqKrlabmEWPdh6sp6sMVE12VJcxq85wpS5hii5upCR6w9bQLrosJhocABeM0vz98OA8nPHBzD3Nfwzyf/zTc9zUzn8lbfTmf67qv9T3DEgBo2z64uHjfLrvskttuuy3Lly/PW2+9lf/93//N2Wef3eyYQw89NJdffnlWrlyZTp065aGHHkp9fX323XffpmN69eqVXXbZJQ899JDlBQB8jDa1vNhhhx3So0ePzJgxIyNHjmx6fPr06Rk2bFg6deqUJBkxYkSuu+66PPLII9lnn32SvLeUePbZZ3PCCSc0fd6IESMyc+bMnH322amtrW36WvX19dlzzz1b8ScDKA7vO0l7179//w/9hUWS9TrDEgDYNM2ZMydbb711Nt9888yZMyfJe1dRfFDv3r2zatWqLFiwIL179878+fPTs2fPZidWJu8tMP76ZEoAoLlCLS9WrFiRWbNmJUn++Mc/5u23386MGTOSJHvttVe6du2aU089NWeddVZ23HHHDB06NNOnT8/cuXPz05/+tOnr7Lnnnhk+fHjOP//8nHvuuencuXOuuuqq9O3bNwcddFDTcWPHjs29996bM888M0cffXRefPHFTJkyJWeccUbTIgQAIEkWLFiwXmdYAgCbntmzZ2f69Ok599xzk7z3ttTJe29b/UHv//n955cuXdrsis73denSJX/4wx8qnqtjx/Le7rO9vj3opq41/7p6DW2avIao1Mb661qo5cUbb7yR0047rdlj7//55ptvztChQzNq1KisWLEikydPzo033piePXtm0qRJ61wpMXHixFx66aW54IILsnr16gwfPjzjx49vdjOsnXbaKVOmTMmECRPy93//9+natWu++93v5vjjj9/4PywAUEijRo3KW2+9le7du+fLX/5yTjjhhHTo0KHp7MhPOsMSANi0LFq0KGeccUaGDh2aY489ttrjNKmpKeWzn92s2mNQAO59SaW8hqjUxnoNFWp5sf322+eFF174xOPGjBmTMWPGfOwxdXV1ueSSS3LJJZd87HGf//znc9ttt5U1JwCw6WloaMipp56a3XffPaVSKQ8++GAmTpyY1157LRdccMF6n2FZCWdPkjjzjcr56wotZ+nS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fPLJlEqlZs81Nja6/JcPNXXq1KaP165dm5/97GfZaqutMmzYsHUitFQq5bjjjmvlCYGPox2olH6gXNoB2jbtQKW0AxtCP2xclhe0irfeeiuzZ8/O448/ntmzZ+f5559P165dm26aNXjw4PTt27faY1JQxxxzTBYsWJATTzwxPXr0+NAbHu21115VmIwi69ev33ofK0KheLQDldIPlEs7QNumHaiUdmBD6IeNy/KCqnj77bfz+9//PlOnTs3s2bNTKpXy7LPPVnssCmr33XfPlVdemZEjR1Z7FACqRDtQLv0A0L5pB8qlHaB43LCbVrNy5crMnTu36SyIJ598MsuXL0+3bt0yePDgao9Hge20005ZvXp1tccAoJVpByqhHwDaH+1AJbQDFI8rL2gVX/va1/KHP/whf/nLX7LNNttkyJAhTZdt9urVq9rjUXCPPPJILrvsslx55ZXp3bt3tcehDXr88cc/8rlSqZS6urr07NkznTp1asWpgI+jHaiUfqAS2gHaHu1ApbQDldIPLc/yglbx/e9/vykatt9++2qPQxszevToLF68OEuXLs1WW22Vurq6Zs+XSqXcc889VZqOtqBfv37Nbrj2/s3WPuhTn/pUjjrqqJxzzjmpqalp7RGBv6IdqJR+oBLaAdoe7UCltAOV0g8tz9tG0Sp+8IMfVHsE2rD+/fuv8w97KMfUqVPz/e9/P/vss0+++MUvplu3bnnjjTdy//3359FHH83ZZ5+dF154IVOmTMlnPvOZfPe73632yNDuaQcqpR+ohHaAtkc7UCntQKX0Q8tz5QWtZvny5fnFL36ROXPmZMmSJenSpUsGDRqUI444Ip/5zGeqPR6wCTv99NOz44475nvf+946z/3zP/9z5s+fn0mTJuWqq67KtGnTMnPmzCpMCfw17QBUi3aAtkk7ANWkH1qea1NoFQsXLsxhhx2Wiy++OC+99FJKpVJeeuml/OAHP8jhhx+ehQsXVntEYBM2a9as7L333h/63NChQ/Pwww83ffzaa6+15mjAR9AOQDVpB2h7tANQbfqh5XnbKFrFpZdemiT593//92Y3ypo/f35OPvnkTJgwIVdffXW1xqPgxo0b94nHvP8agw+z2Wab5bHHHss+++yzznOPPfZYNttssyTJqlWrmj4Gqks7UCn9QCW0A7Q92oFKaQcqpR9anuUFreJ3v/td/umf/qlZQCRJr169ctppp+Uf//EfqzQZbcFzzz23zmNLly7NwoUL89nPfjZbb711FaaiLfnKV76Sa6+9Nm+++Wb+5m/+Jl27ds2bb76ZmTNn5q677sopp5ySJHniiSfSr1+/Kk8LJNqByukHKqEdoO3RDlRKO1Ap/dDyLC9oFWvWrEnnzp0/9LnOnTtnzZo1rTwRbcndd9/9oY/Pmzcv3/ve93Luuee27kC0Oaecckrq6+szefLk3H777SmVSmlsbMyWW26Z888/P8ccc0yS5LDDDstRRx1V5WmBRDtQOf1AJbQDtD3agUppByqlH1qeG3bTKsaOHZslS5Zk6tSpqaura3p82bJl+eY3v5kuXbpkypQpVZyQtmratGmZPHlyfvnLX1Z7FNqAtWvXZtGiRVm8eHEaGhqyzTbbpKbG7Z+giLQDG5N+YH1pB2g7tAMbk3agHPqh5Vhe0CpefPHFfP3rX8/q1auz9957Z8stt8wbb7yRRx55JLW1tfnJT36SnXfeudpj0gbNmjUrp59+ep588slqjwJAC9IObEz6AWDTox3YmLQDVIflBa1m4cKFuemmmzJnzpwsXbo0Xbp0yaBBg3Lcccdlm222qfZ4FNif//zndR5btWpV5s2bl0svvTSdO3fObbfd1vqDUWhTp07N6NGjs+WWW2bq1Kkfe2ypVMpxxx3XOoMB6007UAn9QLm0A7R92oFKaAc2hH7YuCwvgMLr169fSqXSOo83NjZm2223zbXXXptdd921CpNRZP369cttt92WgQMHfuKNsEql0ofenA2Atks/UC7tANC+aQc2hH7YuCwv2GhGjx693seWSqXcc889G3Ea2rK77rprnYDo3Llztt566+y+++7p2LFjlSYDoCVpB1qSfgDY9GkHWpJ2gOLxdx0bTf/+/T90Yw3lOvLII6s9ApuANWvW5Omnn86iRYuycuXKdZ7/0pe+1PpDAc1oB1qSfqBS2gGKTzvQkrQDLUE/tCxXXgCwyfuv//qvnHrqqVm4cGE+7F97Lt0EAD5IOwAA5dIPLc/yAiikz3/+87n55pszYMCA7Lnnnh97Nk2pVMqcOXNacTramjFjxuQvf/lLxo8fnz59+qS2tnadY+rq6qowGQAtST/QUrQDQPugHWhJ+qHledsooJCOP/74NDQ0NH3sUmAq8T//8z+ZOHFi9tprr2qPAsBGpB9oKdoBoH3QDrQk/dDyXHkBwCbviCOOyIknnphDDz202qMAAG2AdgAAyqUfWl5NtQcAgI1t3LhxueGGGzJv3rxqjwIAtAHaAQAol35oea68AArp2GOPLev4m2++eSNNQls1evToZn9evHhxli5dmq222mqd95gslUq55557WnM8ADYC/UAltANA+6MdqJR+2Ljc8wIopM0337zZe00+88wzef3119OvX79069Ytb7zxRp5//vk0NDRkt912q+KkFFX//v29XylAO6MfqIR2AGh/tAOV0g8blysvgMK7++67c+ONN+b666/Pjjvu2PT4yy+/nG9961s58cQTc8QRR1RxQgCgaPQDAFAO7QDF454XQOFdd911Oe2005rFQ5LstNNOOfXUU3PddddVaTIAoKj0AwBQDu0AxWN5ARTeokWLPvISvFKplNdee62VJwIAik4/AADl0A5QPJYXQOENHDgwEydOzIIFC5o9vmDBglx99dXZfffdqzQZAFBU+gEAKId2gOJxzwug8ObNm5fjjz8+r7/+ej73uc813TTrv//7v9OtW7dMnTo1vXv3rvaYAECB6AcAoBzaAYrH8gJoE1auXJk777wzc+fOzeLFi9PQ0JCBAwfmyCOPTOfOnas9HgBQQPoBACiHdoBisbwAAAAAAAAKpWO1BwBYX/PmzcszzzyTRYsW5e/+7u/S0NCQl19+Od26dcvmm29e7fEAgALSDwBAObQDFIflBVB4K1asyPjx4zN9+vTU1NRk7dq12W+//dLQ0JArr7wy22+/fc4555xqjwkAFIh+AADKoR2geGqqPQDAJ7nsssvy6KOPZvLkyZkzZ04++G53X/jCF/Kf//mfVZwOACgi/QAAlEM7QPFYXgCFd9999+Wss87K8OHDU1tb2+y57bbbLn/84x+rNBkAUFT6AQAoh3aA4rG8AApv+fLlaWho+NDnVqxY0crTAABtgX4AAMqhHaB4LC+Awuvbt29+/etff+hz//Ef/5EBAwa08kQAQNHpBwCgHNoBiscNu4HC+/a3v51vf/vbWbFiRQ4++OCUSqXMnTs306ZNy5133pnJkydXe0QAoGD0AwBQDu0AxVNq/ODdZwAKasaMGbn88svz6quvNj22zTbb5LzzzsvBBx9cxckAgKLSDwBAObQDFIvlBdCmvPTSS3nrrbfSpUuX9O7du9rjAABtgH4AAMqhHaAYvG0U0CYsXLgwDzzwQBYuXJiVK1eu8/z48eOrMBUAUGT6AQAoh3aAYnHlBVB406dPzznnnJPGxsZ07do1tbW1zZ4vlUqZOXNmlaYDAIpIPwAA5dAOUDyWF0DhHXjggenfv38uuuii1NXVVXscAKAN0A8AQDm0AxRPTbUHAPgkb775Zo466ijxAACsN/0AAJRDO0DxWF4AhbfffvvlqaeeqvYYAEAboh8AgHJoBygebxsFFN6SJUtyxhlnZLfddsvee++d+vr6dY7p379/FSYDAIpKPwAA5dAOUDyWF0DhvfrqqznzzDPz5JNPplQqNXuusbExpVIpzz33XJWmAwCKSD8AAOXQDlA8Has9AMAnOffcc7Nw4cL8wz/8Q3r06JHa2tpqjwQAFJx+AADKoR2geCwvgMKbO3durrzyyowcObLaowAAbYR+AADKoR2geNywGyi8nXbaKatXr672GABAG6IfAIByaAcoHssLoPDGjRuX66+/PvPmzav2KABAG6EfAIByaAcoHjfsBgpv9OjRWbx4cZYuXZqtttoqdXV1zZ4vlUq55557qjQdAFBE+gEAKId2gOJxzwug8Pr3759SqVTtMQCANkQ/AADl0A5QPK68AAAAAAAACsU9LwAAAAAAgEKxvAAAAAAAAArF8gIAAAAAACgUywsAAAAAAKBQLC+AQjvmmGNyzDHHVHsMAKAN0Q8AQDm0AxRTx2oPAGx6XnjhhVx77bV55pln8vrrr2eLLbZInz59csABB4gBAOBD6QcAoBzaATZ9lhdAi3riiSdy7LHHpnv37hkzZkwaGhqycOHCPP3007n55psFBACwDv0AAJRDO0D7YHkBtKjrr78+dXV1ueOOO1JfX9/suTfeeKNKU71n9erVWbt2bTp16lTVOQCA5vQDAFAO7QDtg3teAC3q//7v/9KnT5914iFJunXr1vTxnXfemWOPPTbDhg3LgAEDcuihh+bf/u3fPvHrr1y5MldffXWOPPLIDBo0KHvssUe++tWv5tFHH2123CuvvJK+fftmypQpuemmmzJy5MjstttumTt3bvbYY49cfPHF63ztRYsWZZdddskNN9ywAT85ALCh9AMAUA7tAO2DKy+AFrXddtvlySefzIsvvpidd975I4/7+c9/ns997nM54IAD0rFjx/zmN7/JhRdemMbGxnzta1/7yM97++23c/vtt2fUqFEZM2ZM3nnnndxxxx054YQTcvvtt2eXXXZpdvxdd92Vv/zlL/nyl7+cTp06pXv37hk5cmR+9atfZdy4cenQoUPTsdOmTUtjY2NGjx5d+f8RAMB60w8AQDm0A7QPpcbGxsZqDwFsOh5++OGceOKJSZKBAwdm0KBBGTZsWIYOHZra2tqm495999186lOfava5Y8eOzcsvv5wHHnig6bH336fyJz/5SZJkzZo1WbNmTbPLL5cuXZpDDjkkX/jCF3LJJZckee/shy9+8YvZfPPNc//996dr165Nx//2t7/N2LFjM3ny5IwYMaLp8cMOOyxdunRp+l4AQOvQDwBAObQDtA/eNgpoUfvuu29uueWWHHDAAXn++efzr//6rxk7dmxGjBiRmTNnNh33wXhYtmxZ3nzzzey1115ZsGBBli1b9pFfv0OHDk3xsHbt2vz5z3/O6tWrM2DAgDz77LPrHH/QQQc1i4ck2WeffbLVVlvl3nvvbXrsxRdfzAsvvJDDDjtsg392AGDD6AcAoBzaAdoHbxsFtLiBAwdm0qRJWblyZZ5//vk88MADuemmm3Laaafl7rvvTp8+fTJnzpxcc801eeqpp7JixYpmn79s2bLU1dV95Nf/xS9+kR/96Ed56aWXsmrVqqbHt99++3WO/bDHampqMnr06Pz85z/PihUr8ulPfzr33ntvOnfunIMPPriCnxwA2FD6AQAoh3aATZ/lBbDRdOrUKQMHDszAgQPTo0ePjBs3LjNmzMhhhx2W4447Lr169cp5552XbbfdNrW1tZk1a1ZuuummrF279iO/5i9/+cucd955GTlyZMaOHZtu3bqlQ4cOueGGG7JgwYJ1jv/ry0Pf96UvfSlTpkzJAw88kFGjRmXatGnZf//9PzZcAICNTz8AAOXQDrDpsrwAWsWAAQOSJH/605/y4IMPZuXKlfmXf/mXdO/evemYxx577BO/zn333ZcddtghkyZNSqlUanr8hz/8YVnz7Lzzztl1111z7733Zptttsmrr76a8ePHl/U1AICNSz8AAOXQDrBpcc8LoEU9+uijaWxsXOfxWbNmJUl69eqVDh06JEmz45YtW5Y777zzE7/+h33u008/naeeeqrsWQ8//PA8/PDD+fGPf5wtttii2Q20AIDWox8AgHJoB2gfXHkBtKiLL744K1asyIEHHphevXpl1apVeeKJJ/KrX/0q2223XY488si8/vrrqa2tzcknn5yvfOUreeedd3L77benW7duWbx48cd+/f333z+//vWv853vfCf7779/Xnnlldxyyy3p06dPli9fXtaso0aNyhVXXJH7778/Rx99dGprayv50QGADaQfAIByaAdoHywvgBZ1zjnnZMaMGZk1a1ZuvfXWrFq1Kt27d89Xv/rVfOtb30p9fX3q6+vzwx/+MBMnTsxll12WLbfcMkcffXS6du2a888//2O//vsBcuutt+a3v/1t+vTpkyuuuCIzZszI73//+7Jm3XLLLbPvvvtm1qxZOfzwwyv5sQGACugHAKAc2gHah1Ljh11jBdBOfOc738mLL76Y+++/v9qjAABthH4AAMqhHWDDuOcF0G796U9/cuYDAFAW/QAAlEM7wIbztlFAu7NgwYI88cQTueOOO9KxY8ccddRR1R4JACg4/QAAlEM7QOVceQG0O48//njOOeecvPLKK5kwYUIaGhqqPRIAUHD6AQAoh3aAyrnnBQAAAAAAUCiuvAAAAAAAAArF8gIAAAAAACgUywsAAAAAAKBQLC8AAAAAAIBCsbwAAAAAAAAKxfICAAAAAAAoFMsLAAAAAACgUCwvAAAAAACAQrG8AAAAAAAACuX/B3EfM/Ncv1cjAAAAAElFTkSuQmCC"/>
</div>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Employee-Retention-Prediction">Employee Retention Prediction<a class="anchor-link" href="#Employee-Retention-Prediction">¶</a></h2><p>Utilizing a machine learning model, the HR team have developed predictions for
employee attrition within your team. The model takes into account various factors
to identify potential risks. Please consider the provided predictions as a proactive
tool for retention strategies.</p>
<p>Key Recommendations:</p>
<ul>
<li>Implement regular check-ins to discuss job satisfaction, career aspirations,
and any challenges team members may be facing.</li>
<li>Consider opportunities for professional development and career growth to
enhance employee engagement.</li>
<li>Ensure workload distribution is fair and aligned with individual skills and capacities.</li>
<li>Address any concerns raised during management evaluation scores to
strengthen leadership effectiveness.</li>
</ul>
<p>Remember, this summary serves as a starting point for discussions and actions
to improve team dynamics. I am available to discuss these findings further and
collaborate on tailored strategies for your team.</p>
</div>
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Employees-at-risk-of-leaving">Employees at risk of leaving<a class="anchor-link" href="#Employees-at-risk-of-leaving">¶</a></h2><p>The following is a summary of the results from asking the ML Model to assess a risk of leaving for current team members.</p>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noInput">
<div class="jp-Cell-outputWrapper">
<div class="jp-Collapser jp-OutputCollapser jp-Cell-outputCollapser">
</div>
<div class="jp-OutputArea jp-Cell-outputArea">
<div class="jp-OutputArea-child">
<div class="jp-RenderedText jp-OutputArea-output" data-mime-type="text/plain" tabindex="0">
<pre>
<span class="ansi-bold">XGBoost Summary for CURRENT SALES Employees
</span>
───────────────────────────────────────────────────────

<span class="ansi-bold">probabilities &gt; high_risk_threshold 90%</span>
Count of employees with leave probability above 90%        : 2
Percentage of employees with leave probability above 90%   : 0.08%

<span class="ansi-bold">probabilities &gt; medium_risk_threshold 70%</span>
Count of employees with leave probability above 70%        : 6
Percentage of employees with leave probability above 70%   : 0.24%

<span class="ansi-bold">probabilities &gt; predict_risk_threshold 50%</span>
Count of employees with leave probability above 50%        : 17
Percentage of employees with leave probability above 50%   : 0.69%
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
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<p><a href="#top"> scroll to top </a></p>
</div>
</div>
</div>
</div></div>
</main>
</body>
<script src="../../scripts/projects.js"> </script>

</html>