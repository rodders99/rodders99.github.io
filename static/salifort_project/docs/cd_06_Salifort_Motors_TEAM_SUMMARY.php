<!DOCTYPE html>

<html lang="en">
<head><meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>cd_06_Salifort_Motors_TEAM_SUMMARY</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.10/require.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" >
<link href="/css/custom-menu2.css" rel="stylesheet" type="text/css" >
<link href="/css/project-style.css" rel="stylesheet" type="text/css" >
<link href="/css/custom.css" rel="stylesheet" type="text/css" >
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

  <div class="page-container">
    <!-- BEGIN NAVIGATION -->
    <div class="toolbar" style="width:100%; text-align:center; align-items: center;">
    <?php include 'menu-salifort.php'; ?>        
    </div>
    <!-- END NAVIGATION -->
<main>

<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
  <div class="jp-Cell-inputWrapper" tabindex="0">
  <div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser"></div>
  <div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt"></div>
  <div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown"></div>
  </div>
  </div>
  </div>
  
  <div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
  <div class="jp-Cell-inputWrapper" tabindex="0">
  <div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
  </div>
  <div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
  </div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
  <h1 id="Salifort-Motors---EDA-Data-Cleansing"><a id="toc1_"></a>
    <a href="#toc0_">Salifort Motors - Team Summary</a>
    <a class="anchor-link" href="#Salifort-Motors---EDA-Data-Cleansing">¶</a></h1>
    <h3 id="Document-Information"><a id="toc1_1_1_"></a>
      <a href="#toc0_">Document Information</a><a class="anchor-link" href="#Document-Information">¶</a></h3>
      <table style="margin-right:auto;margin-left:0px">
  <tbody>
  <tr>
  <td>Document Title</td>
  <td>Salifort Motors - Team Summary</td>
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
  </div>
  </div>
  </div>
  </div>
<div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [48]:</div>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [49]:</div>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [50]:</div>
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
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell jp-mod-noOutputs">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [51]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">load_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/00-data_cleaned/"</span>
<span class="n">save_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/00-data_cleaned/"</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [52]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Load dataset into a dataframe</span>
<span class="c1">#df = pd.read_csv(load_path + "data_cleaned_NoOl_FE_AllFeat.csv")          # 11991 rows, all data including outliers</span>
<span class="n">df</span>  <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_Ol_NoFE_AllFeat.csv"</span><span class="p">)</span>      <span class="c1"># 11167 rows, no outliers (mostly from tenure)</span>

<span class="c1">#df.describe()</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [53]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1">#team = 'management'</span>
<span class="c1">#var = 'last_eval'</span>


<span class="k">def</span> <span class="nf">plot_compare</span><span class="p">(</span><span class="n">team</span><span class="p">,</span> <span class="n">var</span><span class="p">):</span>
    
    <span class="n">team_name</span> <span class="o">=</span> <span class="n">team</span><span class="o">.</span><span class="n">upper</span><span class="p">()</span> <span class="o">+</span> <span class="s2">" Dept"</span>
        
    <span class="n">cols</span> <span class="o">=</span>  <span class="p">[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]</span>
    
    <span class="n">left_df</span> <span class="o">=</span> <span class="n">df</span><span class="p">[(</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span> <span class="o">&amp;</span> <span class="p">(</span><span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span> <span class="o">==</span> <span class="n">team</span><span class="p">)][[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>
    
    <span class="n">stayed_df</span> <span class="o">=</span> <span class="n">df</span><span class="p">[(</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="o">&amp;</span> <span class="p">(</span><span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span> <span class="o">==</span> <span class="n">team</span><span class="p">)][[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>
    
    <span class="n">all_df</span><span class="o">=</span> <span class="n">df</span><span class="p">[[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>



    <span class="n">labels</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">]</span><span class="o">.</span><span class="n">unique</span><span class="p">()</span>
    <span class="c1"># Set the style of the visualization</span>
    <span class="n">sns</span><span class="o">.</span><span class="n">set</span><span class="p">(</span><span class="n">style</span><span class="o">=</span><span class="s2">"darkgrid"</span><span class="p">)</span>


    <span class="n">x_order</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'low'</span><span class="p">,</span><span class="s1">'medium'</span><span class="p">,</span><span class="s1">'high'</span><span class="p">]</span>

    <span class="c1">#plt.figure(figsize=(8, 6))</span>
    <span class="n">fig</span><span class="p">,</span> <span class="n">axes</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">nrows</span><span class="o">=</span><span class="mi">2</span><span class="p">,</span> <span class="n">ncols</span><span class="o">=</span><span class="mi">3</span><span class="p">,</span> <span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">16</span><span class="p">,</span> <span class="mi">8</span><span class="p">),</span> <span class="n">sharey</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>


    <span class="n">hsplit</span> <span class="o">=</span> <span class="n">all_df</span><span class="p">[</span><span class="n">var</span><span class="p">]</span><span class="o">.</span><span class="n">mean</span><span class="p">()</span>

    <span class="c1"># Variable by Salary</span>
    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">all_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">order</span><span class="o">=</span><span class="n">x_order</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - All Employees'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span>  <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="n">hsplit</span> <span class="o">+</span> <span class="mf">.05</span><span class="p">,</span> <span class="s1">'Company Average'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>
    <span class="c1">#plt.title(f'Employees who left, {var} by Department')</span>

    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">left_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">order</span><span class="o">=</span><span class="n">x_order</span><span class="p">,</span>  <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - </span><span class="si">{</span><span class="n">team_name</span><span class="si">}</span><span class="s1"> - Employees who Left'</span><span class="p">)</span>

    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span>  <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="n">hsplit</span> <span class="o">+</span> <span class="mf">.05</span><span class="p">,</span> <span class="s1">'Company Average'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>

    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">stayed_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">order</span><span class="o">=</span><span class="n">x_order</span><span class="p">,</span>  <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - </span><span class="si">{</span><span class="n">team_name</span><span class="si">}</span><span class="s1"> - Employees who Stayed'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span>  <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="n">hsplit</span> <span class="o">+</span> <span class="mf">.05</span><span class="p">,</span> <span class="s1">'Company Average'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">0</span><span class="p">)</span>

    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'tenure'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">all_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'tenure'</span><span class="p">,</span>  <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - All Employees'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Tenure'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="c1">#axes[1,0].set_xticks(labels)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span>  <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="n">hsplit</span> <span class="o">+</span> <span class="mf">.05</span><span class="p">,</span> <span class="s1">'Company Average'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>
    <span class="c1">#axes[1,0].set_xticklabels(labels,rotation=0)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">legend</span><span class="p">([],</span> <span class="p">[],</span> <span class="n">frameon</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span>
    
    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'tenure'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">left_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'tenure'</span><span class="p">,</span>  <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - </span><span class="si">{</span><span class="n">team_name</span><span class="si">}</span><span class="s1"> - Employees who Left'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Tenure'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="c1">#axes[1,0].set_xticks(labels)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span>  <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="n">hsplit</span> <span class="o">+</span> <span class="mf">.05</span><span class="p">,</span> <span class="s1">'Company Average'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">legend</span><span class="p">([],</span> <span class="p">[],</span> <span class="n">frameon</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span>
    
    <span class="n">sns</span><span class="o">.</span><span class="n">violinplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'tenure'</span><span class="p">,</span> <span class="n">y</span><span class="o">=</span><span class="n">var</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">stayed_df</span><span class="p">,</span>  <span class="n">hue</span><span class="o">=</span><span class="s1">'tenure'</span><span class="p">,</span>  <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">],</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1"> - </span><span class="si">{</span><span class="n">team_name</span><span class="si">}</span><span class="s1"> - Employees who Stayed'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Tenure'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'</span><span class="si">{</span><span class="n">var</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
    <span class="c1">#axes[1,0].set_xticks(labels)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">axhline</span><span class="p">(</span><span class="n">y</span><span class="o">=</span><span class="n">hsplit</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">,</span> <span class="n">linestyle</span><span class="o">=</span><span class="s1">'--'</span><span class="p">,</span> <span class="n">linewidth</span><span class="o">=</span><span class="mf">2.5</span><span class="p">,</span>  <span class="n">label</span><span class="o">=</span><span class="s1">'Vertical Line 2'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">text</span><span class="p">(</span><span class="mf">0.5</span><span class="p">,</span> <span class="n">hsplit</span> <span class="o">+</span> <span class="mf">.05</span><span class="p">,</span> <span class="s1">'Company Average'</span><span class="p">,</span> <span class="n">color</span><span class="o">=</span><span class="s1">'red'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">,</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">legend</span><span class="p">([],</span> <span class="p">[],</span> <span class="n">frameon</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span>
    
    <span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>
    <span class="c1"># Show the plot</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [54]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="k">def</span> <span class="nf">plot_count_compare</span><span class="p">(</span><span class="n">team</span><span class="p">):</span>

    <span class="n">team_name</span> <span class="o">=</span> <span class="n">team</span><span class="o">.</span><span class="n">upper</span><span class="p">()</span> <span class="o">+</span> <span class="s2">" Dept"</span>

    <span class="n">df</span><span class="p">[(</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span> <span class="o">&amp;</span> <span class="p">(</span><span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span> <span class="o">==</span> <span class="n">team</span><span class="p">)]</span>

    <span class="n">left_df</span> <span class="o">=</span> <span class="n">df</span><span class="p">[(</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span> <span class="o">&amp;</span> <span class="p">(</span><span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span> <span class="o">==</span> <span class="n">team</span><span class="p">)][[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>
    <span class="n">stayed_df</span> <span class="o">=</span> <span class="n">df</span><span class="p">[(</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="o">&amp;</span> <span class="p">(</span><span class="n">df</span><span class="p">[</span><span class="s1">'dept'</span><span class="p">]</span> <span class="o">==</span> <span class="n">team</span><span class="p">)][[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>
    <span class="n">all_df</span><span class="o">=</span> <span class="n">df</span><span class="p">[[</span><span class="s1">'salary'</span><span class="p">,</span> <span class="s1">'dept'</span><span class="p">,</span> <span class="s1">'last_eval'</span><span class="p">,</span> <span class="s1">'tenure'</span><span class="p">,</span> <span class="s1">'satisfaction'</span><span class="p">,</span> <span class="s1">'left'</span><span class="p">,</span> <span class="s1">'number_project'</span><span class="p">,</span> <span class="s1">'avg_mnth_hrs'</span><span class="p">]]</span>
    
    <span class="n">labels</span> <span class="o">=</span> <span class="n">df</span><span class="p">[</span><span class="s1">'salary'</span><span class="p">]</span><span class="o">.</span><span class="n">unique</span><span class="p">()</span>
    <span class="c1"># Set the style of the visualization</span>
    <span class="n">sns</span><span class="o">.</span><span class="n">set</span><span class="p">(</span><span class="n">style</span><span class="o">=</span><span class="s2">"darkgrid"</span><span class="p">)</span>

    <span class="n">fig</span><span class="p">,</span> <span class="n">axes</span> <span class="o">=</span> <span class="n">plt</span><span class="o">.</span><span class="n">subplots</span><span class="p">(</span><span class="n">nrows</span><span class="o">=</span><span class="mi">1</span><span class="p">,</span> <span class="n">ncols</span><span class="o">=</span><span class="mi">3</span><span class="p">,</span> <span class="n">figsize</span><span class="o">=</span><span class="p">(</span><span class="mi">16</span><span class="p">,</span> <span class="mi">6</span><span class="p">),</span> <span class="n">sharey</span><span class="o">=</span><span class="kc">False</span><span class="p">,</span> <span class="p">)</span>
    <span class="n">x_order</span> <span class="o">=</span> <span class="p">[</span><span class="s1">'low'</span><span class="p">,</span><span class="s1">'medium'</span><span class="p">,</span><span class="s1">'high'</span><span class="p">]</span>

    
    <span class="c1">#hsplit = all_df[var].mean()</span>
    
    <span class="n">sns</span><span class="o">.</span><span class="n">countplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">all_df</span><span class="p">,</span> <span class="n">order</span><span class="o">=</span><span class="n">x_order</span><span class="p">,</span><span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'All Employees'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Count'</span><span class="p">)</span>
    <span class="c1">#axes[0].text(0.5, hsplit + .05, 'Company Average', color='red')</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">90</span><span class="p">)</span>
    <span class="c1">#plt.title(f'Employees who left, {var} by Department')</span>

    <span class="n">sns</span><span class="o">.</span><span class="n">countplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span>  <span class="n">data</span><span class="o">=</span><span class="n">left_df</span><span class="p">,</span> <span class="n">order</span><span class="o">=</span><span class="n">x_order</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'dept </span><span class="si">{</span><span class="n">team_name</span><span class="si">}</span><span class="s1"> - Employees who Left'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Count'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
<span class="c1">#    axes[1].axhline(y=hsplit, color='red', linestyle='--', linewidth=2.5,  label='Vertical Line 2')</span>
    <span class="c1">#axes[1].text(0.5, hsplit + .05, 'Company Average', color='red')</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">90</span><span class="p">)</span>

    <span class="n">sns</span><span class="o">.</span><span class="n">countplot</span><span class="p">(</span><span class="n">x</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span> <span class="n">data</span><span class="o">=</span><span class="n">stayed_df</span><span class="p">,</span>  <span class="n">order</span><span class="o">=</span><span class="n">x_order</span><span class="p">,</span> <span class="n">ax</span><span class="o">=</span><span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="n">hue</span><span class="o">=</span><span class="s1">'salary'</span><span class="p">,</span><span class="n">palette</span><span class="o">=</span><span class="s1">'colorblind'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_title</span><span class="p">(</span><span class="sa">f</span><span class="s1">'dept </span><span class="si">{</span><span class="n">team_name</span><span class="si">}</span><span class="s1"> - Employees who Stayed'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xlabel</span><span class="p">(</span><span class="s1">'Salary'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_ylabel</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Count'</span><span class="p">)</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticks</span><span class="p">(</span><span class="n">labels</span><span class="p">)</span>
<span class="c1">#    axes[2].axhline(y=hsplit, color='red', linestyle='--', linewidth=2.5,  label='Vertical Line 2')</span>
    <span class="c1">#axes[2].text(0.5, hsplit + .05, 'Company Average', color='red')</span>
    <span class="n">axes</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span><span class="o">.</span><span class="n">set_xticklabels</span><span class="p">(</span><span class="n">labels</span><span class="p">,</span><span class="n">rotation</span><span class="o">=</span><span class="mi">90</span><span class="p">)</span>

    <span class="n">plt</span><span class="o">.</span><span class="n">tight_layout</span><span class="p">()</span>
    <span class="c1"># Show the plot</span>
    <span class="n">plt</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>
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
<div class="jp-InputPrompt jp-InputArea-prompt">In [55]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># PLOT - Edit the variable below for the team to analyse</span>
<span class="c1"># 'sales', 'accounting', 'hr', 'technical', 'support', 'management', 'it', 'product_mng', 'marketing', 'randd'],</span>

<span class="n">team</span> <span class="o">=</span> <span class="s1">'it'</span>
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
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Employee-Tenure">Employee Tenure<a class="anchor-link" href="#Employee-Tenure">¶</a></h2><ul>
<li>Reviewing the distribution of employee tenure within the team can offer insights into your team's stability.</li>
<li>Identify trends in tenure and address any patterns that may indicate potential turnover risks or opportunities for mentorship
and knowledge transfer.</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [56]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">var</span> <span class="o">=</span> <span class="s1">'tenure'</span>

<span class="n">plot_compare</span><span class="p">(</span><span class="n">team</span><span class="p">,</span> <span class="n">var</span><span class="p">)</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABjAAAAMQCAYAAACJ8yxvAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAEAAElEQVR4nOzdd3xT5f4H8M/JTpPuwSiUUWjZGxS9ynQgKOp1oKKCA/G6N+5xcVz1OnFc3Ir7p6BMZSOIyN67dEN3mzY7Oef3R5rQ0hY6kpy0+bxfr76anJzxJT3kOTnf5/k+giRJEoiIiIiIiIiIiIiIiEKIQu4AiIiIiIiIiIiIiIiITsUEBhERERERERERERERhRwmMIiIiIiIiIiIiIiIKOQwgUFERERERERERERERCGHCQwiIiIiIiIiIiIiIgo5TGAQEREREREREREREVHIYQKDiIiIiIiIiIiIiIhCDhMYREREREREREREREQUcpjAICIiIiIiIiIiIiKikMMEBhG1Grm5uUhPT8fPP//sW/buu+8iPT1dxqiarzXHTkREFM7Yhp/Z2LFjcccdd8gdRpMtWLAAF198Mfr27Ythw4bJHQ4REfkJ2+4za61tdyi48cYbceONN8odRpulkjsAonCwbds2bNiwATfffDOioqLkDidkvfrqq/jkk08wYcIEvPXWW37d96xZszB//vx6X9NoNNi9e7dfj0dEFM7Y7jXs3XffxZw5c7Bx40YcPnwYN910U6O2O3jwYL3Lc3NzMW7cON9zlUoFo9GIbt26YcSIEZgyZQo6duzol9hPZ+3atdi1axfuuecev++bbTidztixY9GzZ0/873//a/G+jh49iscffxznnXceZsyYAZ1OB6vVio8//hgjRozAWWed5YeIiUIT2+6Gse1uOrbddDoOhwPffvst5s+fj+zsbCgUCrRr1w5DhgzBtGnTkJqaCoCfS3QSExhEQbB9+3bMmTMHV1xxBT90GyBJEhYvXozk5GSsXr0aVVVVMBqNfj2GRqPB7Nmz6yxXKpV+PQ4RUbhju9c4qampePXVV2ste+ONNxAREYGZM2c2aV+TJk3C+eefD0mSUFFRgd27d+OLL77Al19+iRdffBETJ070Z+h1rF27Fl9//XVAboIAbMMpOP7++2+Ioognn3wSXbp0AQCUlpZizpw5uPvuu5nAoDaNbXfjsO1uPLbd1JB7770X69atw8SJE3H11VfD5XIhIyMDa9asweDBg30JDH4ukRcTGERUi9VqhV6vD/pxN23ahBMnTuCLL77AbbfdhuXLl+OKK67w6zFUKhUmT57s130SEVHrJle7BwAJCQl12qWPPvoIsbGxTW6v+vTpU2ebvLw83HLLLXjssceQmpqKXr16tThmubANp2AoKSkBAERGRsocCRGdDtvu1oFtN9Vn165dWL16NR544IE6ST+32w2TySRTZBTKOAcGUYC9++67vh4a48aNQ3p6OtLT05Gbm+tb55dffsGVV16JAQMGYMSIEXjggQdw/PjxWvu58cYbMWnSJBw5cgQ33ngjBg4ciPPOOw8fffRRrfV+/vnnOvsHPAmC9PR0bNq0qc4+9+zZgxtuuAEDBw7EG2+8AcAzpO+dd97BBRdcgH79+mHUqFF49dVX4XA4/Pr+eC1cuBA9evTA2WefjZEjR2LhwoUBOc6ZeN+/LVu2YPbs2Tj77LMxbNgwPPPMM3A4HDCZTHj00UcxfPhwDB8+HK+++iokSfJt752n45NPPsHnn3+OMWPGYMCAAZg6dSoOHTp0xuO7XC689957GD9+PPr164exY8fijTfeqPW+P/bYYzjrrLPgdDrrbH/LLbfgoosuqrWsMecXAOzcuRO33norhg4dioEDB2Lq1KnYunVrrXWqqqrw4osvYuzYsejXrx9GjhyJ6dOnY+/evWf8txFReGC7FzqSk5PxyiuvwOl01nnfTCYTXnzxRYwaNQr9+vXDBRdcgLlz50IURd86jW3TZs2aha+//hoAfH9vOWpMsw33fxt+4MABpKenY+XKlb5le/bsQXp6ep2OJrfddhuuvvrqOvvYsmULrrrqKvTv3x/jxo3DggUL6qyTk5ODe++9FyNGjMDAgQNxzTXXYM2aNQ3G1Rxnei/Hjh2Ld999FwAwcuRIpKenY9asWRg5ciQAYM6cOb5z27seUVvBtjt0sO1m211TW2y7c3JyAABDhgyp85pSqURsbCyAM38u/fTTT7jpppswcuRI9OvXD5dccgm++eabWvsL1N/u+++/x/jx4zFgwABcddVV2LJlyxn/3dQyHIFBFGAXXHABMjMzsWjRIjz++OO+D+O4uDgAwAcffIC3334bEyZMwFVXXYXS0lLMmzcPN9xwAxYsWFBrmFxFRQVuu+02XHDBBZgwYQJ+++03vP7660hLS8OoUaOaFV95eTluv/12TJw4EZdddhni4+MhiiLuvPNObN26Fddccw1SU1Nx6NAhfPHFF8jMzMT777/f8jemBofDgd9//x3Tp08HAEycOBFPPPEEioqKkJiY6NdjlZaW1lmm0WjqlKuaPXs2EhIScM8992Dnzp34/vvvERkZie3bt6NDhw544IEHsG7dOnzyySdIS0vD5ZdfXmv7BQsWwGw24/rrr4fdbsdXX32Fm2++GQsXLkRCQkKD8T311FOYP38+LrroIkyfPh27du3C//73Pxw9ehTvvfceAGDy5MlYsGAB1q9fjzFjxvi2LSoqwl9//YW77rrLt6yx59fGjRtx++23o1+/frj77rshCAJ+/vln3Hzzzfjmm28wYMAAAMCzzz6L3377DVOnTkVqairKy8uxdetWHD16FH379m3aH4OI2iS2e6Fl8ODBSElJwZ9//ulbZrVaMXXqVBQUFGDKlCno0KEDtm/fjjfeeANFRUV48skna+3jTG3atddei8LCQmzYsKFOWQ1/Yhse/DY8LS0NUVFR2LJli69e+5YtW6BQKHDgwAFfyU9RFLF9+3Zcc801tbbPysrCfffdh6uuugpXXHEFfvrpJ8yaNQt9+/ZFz549AQDFxcWYMmUKrFYrbrzxRsTGxmL+/Pm48847fTcmW6ox7+UTTzyBBQsWYPny5XjuuecQERGB9PR0DBw4EM899xwuuOACXyycBJbaGrbdoYVtN9vuttx2e+d3WbhwIYYMGQKVqv5b02f6XPr222/Rs2dPjB07FiqVCqtXr8bzzz8PSZJwww03BOxv9+OPP+KZZ57B4MGDcfPNNyMnJwd33nknoqOj0aFDhwb/3dRCEhEF3McffyylpaVJOTk5tZbn5uZKvXv3lj744INayw8ePCj16dOn1vKpU6dKaWlp0vz5833L7Ha7dO6550r33HOPb9lPP/1U77H++usvKS0tTfrrr7/q7PPbb7+tte6CBQukXr16SZs3b661/Ntvv5XS0tKkrVu3Nu0NOINly5ZJaWlpUmZmpiRJklRZWSn1799f+uyzz2qtl5OTI6WlpUk//fSTb9k777wjpaWlnfEYjz32mJSWllbvzy233OJbz/v+3XLLLZIoir7l1157rZSeni4988wzvmUul0s6//zzpalTp9aJccCAAdKJEyd8y3fu3CmlpaVJL730UoOx79+/X0pLS5OefPLJWrG/8sorUlpamrRx40ZJkiTJ7XZL559/vnT//ffXWu+zzz6T0tPTpezsbEmSGn9+iaIoXXjhhXX+zVarVRo7dqw0ffp037KhQ4dKzz//fIPvMxGRJLHdOx3vZ39JSUm9r0+cOLFWu3Im3nbn448/bnCdO++8U0pLS5MqKyslSZKk9957Txo0aJB07NixWuu9/vrrUu/evaX8/Pxa+25Mm/b88883qj1uDrbhJ8nRhs+YMUO66qqrfM/vvvtu6e6775Z69+4trV27VpIkSdq7d6+UlpYmrVixwrfemDFjpLS0tFr/r0pKSqR+/fpJr7zyim/Ziy++WGe9qqoqaezYsdKYMWMkt9t92vjGjBkjzZgxo8HXm/K5U9//z5KSEiktLU165513ThsHUWvHtrthbLubjm33SWy7axNF0ff/+pxzzpEefPBBad68eVJeXl6ddRv6XJIkz/t1qltuuUUaN26c77m//3YOh0MaOXKkNHnyZMlut/vW+/7776W0tLQmfQ5Q07CEFJGMli9fDlEUMWHCBJSWlvp+EhIS0KVLl1pDZwEgIiKiVg1JjUaD/v37+4bgNYdGo8GVV15Za9myZcuQmpqK7t2714rr7LPPBoA6cbXUwoUL0a9fP99kiUajEaNHj/Z7GSmtVovPPvuszs/DDz9cZ92rrroKgiD4ng8YMACSJOGqq67yLVMqlejXr1+97//48ePRrl27WtsPHDgQa9eubTA+72vekShet9xyS63XFQoFLr30UqxatQpVVVW+9X799VcMHjwYnTt3BtD482v//v3IzMzEpZdeirKyMt96FosFI0eOxObNm33DkqOiorBz504UFBQ0+O8gImoI2z15REREAADMZjMAz7936NChiIqKqvXvPeecc+B2u7F58+Za2zenTfM3tuHyteFDhw7Fvn37YLFYAABbt27F+eefj169evlKXWzZsgWCIGDo0KG1tu3RoweGDRvmex4XF4du3brVet/Xrl2LAQMG1FrPYDDg2muvRV5eHo4cOdKkeE/V1M8dIqqNbbc82Haz7QbaZtstCAI++eQT3H///YiKisKiRYvwwgsvYMyYMbj//vsbPQeGTqfzPa6srERpaSlGjBiBnJwcVFZWAvD/327Pnj0oKSnBlClToNFofPu74oorOH9W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X375pd7XLrjgAr8OC0xJScF1112H6667Dg6HA19++SViYmIaHPILAL169cIVV1yB77//HiaTCcOHD8fu3bsxf/58jB8/3jchnVdcXBzOO+88LFu2DFFRURg9enSdGBpzfikUCsyePRu33347Jk2ahCuvvBLt2rVDQUEBNm3aBKPRiA8//BBmsxmjRo3CRRddhF69eiEiIgJ//vkndu/ejVmzZvntvSOi1o/tXvDt27cPv/zyCyRJgslkwu7du/H7779DEAS8+uqrtXqE3XrrrVi1ahVmzpyJK664An379oXVasWhQ4fw22+/YeXKlbVqgTemTfP+zWfPno1//OMfUCqVmDhxot/+fWzD5W3Dhw0bhg8//BDHjx+vdbNj2LBh+P7775GcnHzaci2nM2PGDCxevBi33347brzxRkRHR2PBggXIzc3Fu+++26jyIVlZWXj//ffrLO/Tpw9Gjx7dos8dnU6HHj16YOnSpejatStiYmLQs2fPFs3LQRSK2HYHH9tutt3h2HYfOHAADz/8MM477zwMGzYM0dHRKCgowIIFC1BYWIgnnnjCl6Bo6HPp3HPPhVqtxsyZMzFlyhSYzWb8+OOPiI+PR1FRUZ1j+utvp1arcf/99+OZZ57BzTffjEsuuQS5ubn4+eefOQdGgDGBQRQEAwYMwH333YfvvvsOf/zxB0RRxMqVKxEREYEZM2aga9eu+Pzzz/Hee+8B8NTrPPfcczF27NhmHe/111/HM888g7lz5yIqKgpXXXUVzjrrLEyfPr1R2ysUCrz33nv4/PPP8csvv2D58uXQ6/Xo1KkTbrzxRr8NHV64cCE6duzY4DC7qKgoDBkyBEuWLPHLDXKHw4FHH3203te8fw9/ufzyy6FQKPDFF1+gpKQEAwYMwNNPP42kpKTTbjd79mx06tQJ8+fPx4oVK5CQkIA77rgDd999d73rT548GatXr8aECRPqTGwHoNHn11lnnYXvv/8e77//PubNmweLxYLExEQMGDAA1157LQDPF/jrrrsOGzZswO+//w5JkpCSkoJnn30W119/fXPfKiJqg9juBd+iRYuwaNEiqFQqGI1GdOnSBTfffDOmTJlSZxi/Xq/HV199hf/9739YtmwZFixYAKPRiK5du+Kee+7xTXro1Zg27cILL8SNN96IxYsX49dff4UkSX69CcI2XN42fPDgwVAqldDpdLWu27w3QZrbgxMAEhIS8N133+G1117DvHnzYLfbkZ6ejg8//LDODYaGHDt2DG+//Xad5VdddRVGjx7d4s+d2bNn49///jdefvllOJ1O3H333UxgUJvDtjv42Haz7Q7Htnv48OG499578ccff+Czzz5DWVkZDAYDevfujYcffhgXXXSRb92GPpe6d++Od955B2+99Rb+85//ICEhAddddx3i4uLwxBNP1Htcf/3trr32WrjdbnzyySd49dVXkZaWhg8++KDe6xDyH0E6dWwMERE1W25uLsaNG4dHH320yT2RmmPFihW466678PXXX7foAoSIiOhUwW7T5MY2nIiIWju23YHFtrv14t+udeMcGERErdiPP/6Izp07h1TdViIiIjoztuFEREStC9vu1ot/u9aNJaSIiFqhxYsX4+DBg1izZg2efPJJCIIgd0hERETUCGzDiYiIWhe23a0X/3ZtAxMYRESt0IMPPoiIiAhcddVVnH+CiIioFWEbTkRE1Lqw7W69+LdrGzgHBhERERERERERERERhRzOgUFERERERERERERERCGHCQwiIiIiIiIiIiIiIgo5TGAQEREREREREREREVHI4STe1SRJgihyOhAiIqJQpFAIEATBL/tim09ERBSa2N4TERGFh6a0+UxgVBNFCaWlZrnDICIionrExRmgVPrnhgbbfCIiotDE9p6IiCg8NKXNZwkpIiIiIiIiIiIiIiIKOUxgEBERERERERERERFRyGECg4iIiIiIiIiIiIiIQg4TGEREREREREREREREFHKYwCAiIiIiIiIiIiIiopDDBAYREREREREREREREYUcJjCIiIiIiIiIiIiIiCjkMIFBREREREREREREREQhhwkMIiIiIiIiIiIiIiIKOUxgEBERERERERERERFRyGECg4iIiIiIiIiIiIiIQg4TGERERERERERERBSy/vrrTyxa9AusVqvcoRBRkKnkDoCIiIiIiIiIiIioPmZzFZ55ZhYAQK1W46KLLpE5IiIKJo7AICIiCqCcnGxs374VpaUlcodCRERERETU6pSXl/sel5WVyhcIEcmCIzCIiIgCpLy8HDNm3Ay3242UlC74+OOv5A6JiIiIiIioVamqqqz3MRGFB47AICIiCpDc3Gy43W4AQE5uDpxOp8wRERERERERtS6VlSeTFiaTScZIiEgO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1alTp5oP2gbsWDtYEfWMNdmtxrIau9V8VmXHWtRK7JqnyYv2ykF23N/bbd/KMT7H+JY9xjdQ444cORIw9sADDxhdunQxPB6PCRGZY+HChUbbtm2NQ4cOmR1Ktfvuu++MTp06GQsWLDDatm1rfPnll2aHVG0WL15stG3bNujfeW21e/duIzk52fjoo4/MDsV06enpxh133GF2GNVm6tSpRnp6uuH1en1jGzZsMNq2bWts2rTJxMiqTvk8NGnSJOOaa64J2ObKK680/vKXv/iNDR8+3Bg9enS1x2dX1A7WZad6xorsVGNZjR1rPquiFjUfefokO+VFu+Qgu+7v2beW4hj/3FcbjvG5hJQJGjRoEDDWrl075eXlKT8/34SIzBEXFydJKikpMTeQGvDwww9rxIgRatWqldmhoBpkZWWpefPm6tevn9mhmOqzzz7TwYMHNWjQILNDqTZut1t169aVw+HwjZV9C8moJZcICAv77dLgwIED2rdvnwYMGOA3/vvf/14bNmxQcXFxdYZnW9QO1mWnesaKqLEAalErIE+fZKe8SA6q3di3cozPMb51jvFpYFjEli1blJCQoJiYGLNDqVYej0dFRUXatm2bnn76aaWnp6t58+Zmh1WtVqxYoZ07d+ruu+82O5QaNXDgQLVr1079+/fXs88+W2tPsZSkL774Qm3bttWcOXPUo0cPpaSkaMSIEfriiy/MDq1GvfPOO4qOjlb//v3NDqXaDB06VLt371ZmZqZyc3N14MABPfHEE0pOTlaXLl3MDq9G7NmzR5ICDtRat26tkpKSWnWtUKuzS+1gRXasZ6zIrjWW1dip5rMqalFrslOetmNetGMOstv+nn0rx/gc41vnGJ97YFjA5s2btXz5ck2aNMnsUKrdZZddpp9++kmS1KdPH/373/82OaLqVVBQoMcee0wTJ060ReEqSY0aNdL48ePVsWNHORwOrV69Wk8++aR++uknTZs2zezwqsXhw4f19ddfa+fOnXrwwQdVp04dPfPMM7rtttu0cuVKNWzY0OwQq53b7dZ7772n9PR0RUdHmx1OtenWrZtmz56t++67Tw899JCk0m/XzZs3T06n0+Toasbx48clSbGxsX7jZc/LXkf1slPtYEV2q2esyI41ltXYseazKmpR67FbnrZbXrRbDrLr/t7u+1aO8TnGt9IxPg0Mkx06dEgT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"/>
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
<h2 id="Self-Reported-Satisfaction">Self-Reported Satisfaction<a class="anchor-link" href="#Self-Reported-Satisfaction">¶</a></h2><ul>
<li>Consider the employee's self-reported satisfaction levels.</li>
<li>A deep dive into the factors influencing satisfaction can guide efforts to boost morale and
engagement.</li>
<li>Address specific concerns raised by team members to improve overall job satisfaction.</li>
</ul>
</div>
</div>
</div>
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [57]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">var</span> <span class="o">=</span> <span class="s1">'satisfaction'</span>
<span class="n">plot_compare</span><span class="p">(</span><span class="n">team</span><span class="p">,</span> <span class="n">var</span><span class="p">)</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABjAAAAMQCAYAAACJ8yxvAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAAEAAElEQVR4nOzddXiV9f/H8ec56+4R22g2OqSkVQQMBMUORP2pqAgoFtiBrV8RMUCRBkGke4QgjSA1GkaMwTpPx/37Y26K1Bhnu0+8H9fFBdwn7tfOOTuf+77fn9AoiqIghBBCCCGEEEIIIYQQQgjhRLRqBxBCCCGEEEIIIYQQQgghhPgvKWAIIYQQQgghhBBCCCGEEMLpSAFDCCGEEEIIIYQQQgghhBBORwoYQgghhBBCCCGEEEIIIYRwOlLAEEIIIYQQQgghhBBCCCGE05EChhBCCCGEEEIIIYQQQgghnI4UMIQQQgghhBBCCCGEEEII4XSkgCGEEEIIIYQQQgghhBBCCKcjBQwhhBBCCCGEEEIIIYQQQjgdKWAI4aKSkpL45ptvrvpx8+fP55ZbbqFp06a0bdu2EpJdWkUzO7P//kxz584lKSmJtLQ0FVNVjCtnF0K4B2nbhLg0aaevbMCAAfTp00ftGFdt/fr19OvXj+bNm5OUlERhYaHakYS4gLTRQlyatNFX5qpttDMYMWIEN910k9oxVOWtdgAhxKWtW7eOPXv2MGTIEIc837Fjxxg5ciRdu3bl6aefxt/f3yHP+2+Ozqym6dOn8/7779OiRQt+/fVXhz73N998w9ixYy95+4YNG4iJiXHoPoUQwhlI21b15s6dy8iRI5kzZw4RERH06NGjXI9bvXo18fHxF70tKSmp7N9eXl4EBwcTHx/PddddxwMPPECDBg0ckv1ydu7cycaNGxk4cCChoaEOfW5pp8XlDBgwgLy8PBYvXnzNz5WXl8cLL7xAw4YNefvtt/H19SUgIIAffviBBg0acPPNNzsgsRDlI2101ZM2+upJGy0ux263s3DhQqZPn87JkyexWCzExsbSsmVLHnroIVq1agXA0aNHWbZsGXfdddclf5eE85AChhBObN26dUyfPv2iB2N79uzBy8vrqp5v27Zt2O123njjDWrXru2omOdxdGY1LVq0iLi4OPbs2cPJkycr5TV79913CQwMvGC7ow/yhBDCWUjbpq7IyEg+++yz87ZNnDiRc+fOMXLkyAvuezmdO3emX79+KIpCcXExBw8eZP78+cycOZOXX36Zxx9/3OH5/+2vv/5i7Nix3HXXXZXWbko7LSrb3r170el0DBs2jE6dOpVtHzduHL1795YChqhS0karS9roqyNttLiYUaNGMX36dHr06MEdd9yBl5cXqamp/PHHHyQkJJxXwBg7dizt27eXAoYLkAKGEC7Kz8/vqh+Tk5MDQEhIiKPjlEtFMqvl9OnTZQddb7/9NosWLeL55593+H569+59xYNPIYTwFNK2Vb7AwED69et33ralS5dSWFh4wfYrqVOnzgWPeemll3j22Wf55JNPqFevHt27d7/mzGqSdlpUttzcXEC97zAhykva6MonbfTVkTZa/Fd2djYzZszgvvvu44MPPjjvNkVRytpc4XpkDQwhHKy4uJgPP/yQm266iWbNmtGxY0cef/xxUlJSyu7z559/MnToUG644QaaNWtG9+7d+eijjzAajWX3GTFiBNOnTwdKhoCW/in13/k8r7Tfm266qez+HTt2PO/xq1at4umnn6ZLly40a9aMm2++mW+//RabzXbBz7d7926eeuop2rVrR6tWrbjjjjuYPHlyhTID7N+/nyeffJLrrruO1q1bM3DgQHbt2nXefUrnk9yxYwcff/wx119/Pa1atWLw4MGV1gAtWrSIsLAwunfvTu/evVm0aFGl7OdKtm7dSlJSEkuXLmXs2LF07dqV1q1bM3ToUIqKijCbzXz44Yd07NiR1q1bM3LkSMxm83nPkZSUxPvvv8/ChQvp3bs3zZs3p3///mzfvr1cGaZPn87tt99Os2bN6NKlC++99955czOPGTOGpk2bXvS9eOutt2jbti0mk6ls27p168qGbrZu3Zqnn36aI0eOXPDYY8eOMXToUNq3b1+WefXq1efdx2KxMHbsWHr16kXz5s3p0KEDDz74IBs3bizXzyaEKB9p29yjbasKERER/O9//8Pb25vvv//+vNvMZjNjxoyhZ8+eZZ+Rzz77rELt1jfffFPWS7VHjx5l70tVzz0t7bTj2+nCwkIaN27MlClTyrbl5ubSqFEjOnTogKIoZdvfeecdOnfufMFzHD16lAEDBtCyZUu6du3Kjz/+eMF9cnJyeP311+nUqRPNmzenb9++zJs375K5KuJKr+WAAQN47bXXALjnnntISkpixIgRJCUlodfrmTdvXtlne8SIEQ7NJtyHtNHSRpeXtNHSRv+bO7bRaWlpKIrCddddd8FtGo2GqKgooOR3fNiwYQA8+uijZZ/RrVu3AuX7jqqs927VqlX06dOH5s2b06dPH5KTk6/4c3sCGYEhhIO98847rFixgkceeYT69euTn5/Pjh07OHbsGE2bNgVg+fLlGI1GHnzwQcLDw9mzZw/Tpk3j3LlzjBkzBoD777+fzMxMNm7ceMEw0ors9/XXX2f+/PkkJyeXDbUsPbibN28egYGBPP744wQGBrJlyxbGjBlDcXFx2UkVwMaNGxk0aBCxsbE8+uijREdHc+zYMX7//XcGDhx41ZmPHDnCww8/TFBQEE8++STe3t7MmjWLAQMGMG3aNFq2bHne/UeNGkVoaCjPP/88Z86cYfLkybz//vuMHj26vG9PuS1atIiePXvi6+tLnz59mDlzJnv27KFFixYO3U9BQcEF27y9vS8Y9jp+/Hj8/f15+umnOXnyJNOmTcPb2xuNRkNhYSHPP/88u3fvZu7cucTFxV0wWmT79u0sXbqUAQMG4Ovry8yZM3nyySf59ddfSUxMvGS+0vlFO3XqxIMPPkhqaiozZ85k7969zJw5Ex8fH/r168e3337L0qVLeeSRR8oeazabWbFiBb169Srr/TR//nxGjBhBly5dePnllzEYDMycOZOHHnqIefPmlQ3dPHLkCA8++CDVqlXjqaeeIjAwkGXLljF48GC++eYbevbsCcDYsWMZN24c9957Ly1atKC4uJh9+/aRkpJy0YMlIUTFSNvmHm1bValZsybt2rVj69atFBcXExwcjN1u59lnn2XHjh3cd9991K9fn8OHDzN58mROnDjBd999d95zXKnd6tmzJydOnGDx4sWMHDmSiIgI4MpTalwtaaervp0ODQ2lYcOG/Pnnnzz66KNAyVzqGo2G/Px8jh49SsOGDQHYsWMHbdq0ueA9e/LJJ+nZsye33norK1as4IsvviAxMbGst7HRaGTAgAGcOnWKhx9+mPj4eJYvX86IESMoLCxk4MCBl3zNy6s8r+UzzzxD3bp1mTVrFkOHDiU+Pp5atWrRsWNH3nzzTVq0aMF9990HQK1ata45k3BP0kZLG301pI2WNtqd2+iaNWsCJd95t9xyCwEBARe9X7t27RgwYABTp07lmWeeoV69egDUr18fKN93VGW8dxs2bGDIkCE0aNCAl156iby8PEaOHEn16tUv+TN7DEUI4VBt2rRR3nvvvcvex2AwXLBt3LhxSlJSknLmzJmybe+9956SmJh40edITExUxowZc1X7HTNmjJKYmKjk5ORcMc9bb72ltGzZUjGZTIqiKIrValVuuukm5cYbb1QKCgrOu6/dbq9Q5ueee05p2rSpcurUqbJtGRkZSuvWrZWHH364bNtvv/2mJCYmKo899th5+/roo4+Uxo0bK4WFhZf9ua/W3r17lcTERGXjxo2KopT8fN26dVNGjRp1xZ+pNOvp06cvu4/S9+Jif3r37l12vy1btiiJiYlKnz59FLPZXLZ9+PDhSlJSkvLkk0+e97z333+/cuONN16QMTExUdm7d2/ZtjNnzijNmzdXBg8efMnsOTk5StOmTZUnnnhCsdlsZfebNm2akpiYqMyZM+e8/d57773n7XflypVKYmKismXLFkVRFKW4uFhp27at8uabb553v6ysLKVNmzbnbR84cKDSp0+fss+fopS8D/fff7/Sq1evsm19+/ZVnn766QteXyGEY0nb5tptW+m+9uzZc9Hbn3766QvajitJTEy87HszatQoJTExUTlw4ICiKIoyf/58pVGjRsr27dvPu9/MmTOVxMREZceOHec9d3narZ9++qlcbW5FSDv9DzXa6ffee0/p1KlT2f8//vhj5eGHH1Y6duyozJgxQ1EURcnLy1OSkpKUyZMnl93vkUceURITE5V58+aVbTOZTErnzp2VIUOGlG2bNGmSkpiYqCxYsKBsm9lsVu6//36lVatWSlFR0WXzPfLII8rtt99+yduv5rW81O9nq1atlNdee+2yOYRQFGmjpY2+kLTRJaSN9sw2+tVXX1USExOVdu3aKYMHD1YmTJigHD169IL7LVu27LzX+N/K8x2lKI5/7/r166d07tz5vO+YDRs2KImJiVf9PeBuZAopIRwsNDSU3bt3k5GRccn7+Pv7l/1br9eTm5tL69atURSF/fv3V9p+y5OnuLiY3Nxc2rZti8Fg4Pjx40DJUNu0tDQeffTRC3o0aDSaq96nzWZj48aN3HzzzSQkJJRtj42NpU+fPuzYsYPi4uLzHnPfffedt6+2bdtis9k4c+bMVe//chYtWkR0dDQdOnQASn6+2267jaVLl150WPO1+Oabb5g4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EQcOHMDXX3+N4ODgKkRdltUqIien4LbPQ0RERFVjMGjtttAn8zoREZH0mNuJiIg8S2Vyu0sVMAYPHozBgwdXaF+j0QilUonTp0+jQ4cOtu2la19UZC2LmTNnYs2aNfjoo4/QoEGDqgV9HWaz1W7nIiIiImkxrxMREXkW5nYiIiL34bYTP6pUKrRu3Rrr1q0rs3316tWIjo5GRETETY9ftGgRPvvsM8yYMQNt27Z1ZKhERERERERERERERFRJblvAAIDHH38c+/btw5QpU7B9+3bMmzcPP//8M5588sky+zVq1Agvvvii7edVq1Zh9uzZuPPOOxEREYF9+/bZ/mRkZDj7aRARERERERERERER0X+41BRSlZWQkID58+dj7ty5+O6771CjRg1MmzYNffr0KbOfxWKB1frPENEtW7YAAFauXImVK1eW2ffNN9/EwIEDHR88ERERERERERERERHdkCCKoih1EJ7EYrEiIyNf6jCIiIiqLX9/L7st9Mm8TkREJD3mdiIiIs9Smdzu1lNIERERERERERERERGRZ2IBg4iIiIiIiIiIiIiIXA4LGERERERERERERERE5HJYwCAiIiIiIiIiIiIiIpfDAgYREREREREREREREbkcFjCIiIiIiIiIiIiIiMjlCKIoilIH4UlEUYTVypeUiIhIKjKZAEEQ7HIu5nUiIiLpMbcTERF5lsrkdhYwiIiIiIiIiIiIiIjI5XAKKSIiIiIiIiIiIiIicjksYBARERERERERERERkcthAYOIiIiIiIiIiIiIiFwOCxhERERERERERERERORyWMAgIiIiIiIiIiIiIiKXwwIGERERERERERERERG5HBYwiIiIiIiIiIiIiIjI5bCAQURERERERERERERELocFDCIiIiIiIiIiIiIicjksYBARERERERERERERkcthAYOIiIiIiIiIiIiIiFwOCxhERERERERERERERORyWMAgh5s4cSL69esndRhEFfLEE09g+PDhtp/nz5+P+Ph4CSMid1WRz7769etj8eLFlT53VY8jshfmdnInzO1kL8zt5KmY18ndMLeTvTC3uweF1AEQEbmywYMHo1OnTlKHQR5q+fLlqFGjhtRhEBFVK8zt5EjM7UREzsfcTo7E3C49FjCIiG4iNDQUoaGhUodBHqpZs2ZSh0BEVO0wt5MjMbcTETkfczs5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gLi4OLRo0QJt27ZF69atoVQqbfsVFRVBo9GUOXbUqFFITk7Gb7/9ZttWOvfmF198AQCwWCywWCxlhpPm5OSgT58+6NSpE6ZPnw6gpCdHt27doNfrsX79evj7+9v237x5M0aNGoWPPvoIHTt2tG3v378/fHx8bG0RERERczsREZGnYW4nInviFFJE5FYSExOxbNkydO3aFceOHcPHH3+MUaNGoWPHjtiwYYNtv39fBOXm5iIjIwOtWrXC+fPnkZube8Pzy+Vy20WQ1WpFVlYWzGYzGjdujCNHjpTbv2fPnmUuggCgXbt2CA4OxqpVq2zbTpw4gePHj6N///5Vfu5ERESeiLmdiIjIszC3E5E9cQopInI7cXFxWLBgAYxGI44dO4bffvsNn332GZ566imsWLECdevWxe7duzF//nzs27cPhYWFZY7Pzc2Ft7f3Dc//448/4pNPPsGZM2dgMpls2yMiIsrte71tMpkMd955J5YuXYrCwkJotVqsWrUKarUavXv3vo1nTkRE5JmY24mIiDwLczsR2QsLGETktlQqFeLi4hAXF4fIyEhMmjQJa9euRf/+/fHggw8iKioKEydORFhYGJRKJTZu3IjPPvsMVqv1huf86aefMHHiRHTv3h2jRo1CQEAA5HI5Fi5ciPPnz5fb/7/DXUvdddddWLx4MX777Tf069cPP//8Mzp37nzTCzAiIqLqjrmdiIjIszC3E9HtYgGDiDxC48aNAQBXrlzB77//DqPRiA8++AA1atSw7bN9+/ZbnmfdunWoWbMmFixYAEEQbNvnzZtXqXhiYmLQqFEjrFq1CqGhobhw4QImT55cqXMQERFVZ8ztREREnoW5nYiqgmtgEJFb2bZtG0RRLLd948aNAICoqCjI5XIAKLNfbm4uvv/++1ue/3rH7t+/H/v27at0rAMGDMCWLVuwZMkS+Pr6llkYjIiIiEowtxMREXkW5nYisieOwCAitzJt2jQUFhaiR48eiIqKgslkwp49e7BmzRqEh4dj4MCBuHr1KpRKJR577DHcd999yM/Px7fffouAgACkpaXd9PydO3fGr7/+irFjx6Jz585ISUnBsmXLULduXRQUFFQq1n79+uGtt97C+vXrMXToUCiVytt56kRERB6JuZ2IiMizMLcTkT2xgEFEbuWFF17A2rVrsXHjRixfvhwmkwk1atTA/fffj8cffxwGgwEGgwHz5s3D3LlzMXPmTAQGBmLo0KHw9/fHiy++eNPzl15ILV++HJs3b0bdunXx1ltvYe3atdixY0elYg0MDERiYiI2btyIAQMG3M7TJiIi8ljM7URERJ6FuZ2I7EkQrzemi4iI7GLs2LE4ceIE1q9fL3UoREREZAfM7URERJ6FuZ3ItXENDCIiB7ly5Qp7cRAREXkQ5nYiIiLPwtxO5Po4hRQRkZ2dP38ee/bswXfffQeFQoEhQ4ZIHRIRERHdBuZ2IiIiz8LcTuQ+OAKDiMjOdu7ciRdeeAEpKSmYMWMGgoKCpA6JiIiIbgNzOxERkWdhbidyH1wDg4iIiIiIiIiIiIiIXA5HYBARERERERERERERkcthAYOIiIiIiIiIiIiIiFwOCxhERERERERERERERORyWMAgIiIiIiIiIiIiIiKXwwIGERERERERERERERG5HBYwiIiIiIiIiIiIiIjI5bCAQURERERERERERERELocFDCIiIiIiIiIiIiIicjksYBARERERERERERERkcthAYOIiIiIiIiIiIiIiFwOCxhERERERERERERERORyWMAgIiIiIiIiIiIiIiKXwwIGERERERERERERERG5HBYwiIiIiIiIiIiIiIjI5bCAQURERERERERERERELocFDCIiIiIiIiIiIiIicjksYBARERERERERERERkcthAYPITdWvXx/z58+v9HErVqxA7969ERsbi4SEBAdEdmNVjdmV/fc5/fDDD6hfvz5SUlIkjKpq3Dl2IvIMzG1EN8Y8fWvDhw9Hv379pA6j0jZt2oQBAwagSZMmqF+/PnJycqQOiagc5miiG2OOvjV3zdGuYOLEiejatavUYUhKIXUARHRjGzduxIEDB/Dkk0/a5XxJSUmYNGkSOnTogDFjxkCj0djlvP9m75il9NVXX+H1119HXFwcvv32W7uee/78+ViwYMENH9+8eTOCgoLs2iYRkStgbnO+H374AZMmTcJ3330HPz8/dOvWrULHbdiwAREREdd9rH79+rZ/y+Vy6PV6REREoHnz5rjvvvtQt25du8R+M3v27MGWLVswcuRIGAwGu56beZpuZvjw4cjMzMTPP/982+fKzMzE008/jXr16uGVV16BSqWCVqvFhx9+iLp166J79+52iJioYpijnY85uvKYo+lmrFYrVq5cia++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oaGhOHr0KJ5++mn4+/vjk08+AVByw0Sv15c7V2hoaLmbmz4+Pjh+/Ljt59TUVNSuXbvMTSXgn6kjSl/bqqroa0lkD8zRFcMc/Q/maOZoT87RMpkMDzzwAB544AFkZmZiz549WLZsGTZt2oRnnnkGX3/99U2PByr2GQXY93dX+ryu936rU6dOlYvNnoIFDCI769u3LxISErB+/Xps2bIFixcvxkcffYT58+ejU6dOsFgseOihh2xz/0VFRUGn0+Hy5cuYOHEirFarQ9q9kZycHAwbNgx6vR7jx49HrVq1oFarcfjwYbz99ttVjscR/pvASon/Wijqv1avXo1JkyaV2fbv5Phf27ZtQ1paGn755Rf88ssv5R5ftWqVXQsYFXWj516V18QRfHx80KVLF6xatQrjxo3D2rVrYTQa0b9//3IxzZo167oXeXK5HABs77mHH34YHTp0uG57pfNAt2zZEuvXr8eGDRuwZcsWfPfdd1iyZAlee+01DB482K7Pkag6Y25zHGfkNimcPHkScrncNqev1WpFTExMubhLOXpu308++QQLFiyw/RweHo7ff//dbudnni7rdvN0SEgIIiIisHPnToSHh0MURTRr1gz+/v544403kJqait27dyM+Pr7ca1wap5Qq+loS2QNztOMwR5dgjnYs5mjH8fPzQ7du3dCtWzcMHz4cO3bsQGpqKsLDw294TGU+o+z5u6ObYwGDyAGCg4NtFd/09HTcfffd+PDDD9GpUyecOHECZ8+excyZM3HXXXfZjtmyZUu581R2aOzN2r2RHTt2ICsrCwsWLEDLli1t2/89+gCArSfNiRMn0K5duxuer6Ix+/v7Q6vV4syZM+UeO336NGQyWbkeEVXRvn17fPrppxXef9WqVQgICMArr7xS7rH169dj/fr1eO2118oMKXQHycnJ5badPXsWWq32hr1WSnuqnD59ukxPKqPRiJSUlHLvgwEDBuCJJ57AgQMHsGrVKjRq1KhMD6bScwQEBNz0PVS6n1KpvOl+pXx9fXHPPffgnnvuQX5+PoYNG4b58+ezgEFkZ8xtt+aquc3ZLly4gJ07d6JZs2a2XmW1atXCsWPH0LZt2wq9nhXJW5V5L911111lFpIsXVTRVTBPl5eQkICdO3ciIiICDRo0sPXk9Pb2xl9//YUjR47gySefvGX71xMeHo7jx4/DarWWublSOi3Ef3vrVlZFX0sie2GOvjXm6BLM0ZXHHF2eO+boxo0bY8eOHUhLS0N4ePgN36MV/YwqZa/fXenzut777XqfW9UN18AgsiOLxVJuuGhAQACCg4NhNBoB/FPl/3dVXxRFfP755+XOp9VqAdx8iGpF272R68VjNBrLDauLjY1FREQEPv/883Lx/PvYisYsl8uRmJiIDRs2lEkEV69exc8//4wWLVrYZXh9cHAw2rVrV+bPjRQVFeHXX39F586d0bt373J/HnjgAeTn59u1N4iz7N27F4cPH7b9fPHiRWzYsAGJiYk3rPi3a9cOSqUSX3zxRZnf8XfffYfc3NxyX0w6duwIPz8/fPzxx9i5c2eZXgcA0KFDB+j1eixcuBAmk6lcexkZGQBK3rutWrXC8uXLceXKlRvuBwCZmZllHvPy8kKtWrVu+b4noopjbnPv3OZsWVlZePbZZ2GxWPDYY4/Ztvfp0weXL1/GN998U+6YoqKiMlNHABXLW6W/l/++T66nZs2aZV6vf98ocQXM0+UlJCQgNTUVq1evts2hLZPJEB8fj08//RQmk6nKv8eOHTsiLS0Nq1evtm0zm8344osvoNPpytywqIqKvpY3o9PpbvmZQ8QczRxdGczRVcMcXZ6r5ui0tDScOnWq3Haj0Yi///4bMpnMNgLlRu/Rin5G/Ttee/zugoOD0bBhQ/z4449lYtqyZct1n1N1wxEYRHaUn5+PTp06oVevXmjQoAF0Oh22bt2KgwcPYuLEiQBK5kCsVasWZs6cicuXL0Ov12PdunXXveCKjY0FAEybNg3t27eHXC7HHXfcUaV2byQ+Ph4+Pj6YOHEihg8fDkEQ8NNPP5UbNimTyTBlyhQ8/vjjuOuuuzBw4EAEBQXh9OnTOHXqFBYvXlypmAHg6aefxtatW3H//ffj/vvvh1wux/Lly2E0GvH888/f4tW2v99//x35+fno2rXrdR8vHRa5cuVK9O3b1y5trlu3zraI2r8lJiYiMDDQLm0AJXPHjho1CsOHD4dKpcLSpUsB4Ka9Ivz9/fHoo49iwYIFGD16NLp27YozZ87g66+/RpMmTcolZqXy/+zdd3gc5bn4/e9sVe+9W3KTO8YUU0yH0AlJSCEJOck5ye+8SU4ScnLCSaHkQAiEnkDoYHrHxr3IvTfZsmXZspplS1avW7R13j9WIzfZlrQzW+Tnc11cQltm7vWudmae+3nu28itt97Ke++9N+j7HhMTw8MPP8z//M//cPfdd3PLLbeQlJREY2Mja9euZebMmQMrXx566CG+973vcfvtt3PPPfeQm5tLW1sbu3fvpqmpia+++gqAW2+9lYsvvpjJkyeTkJDA3r17WbZsGd///vdV+7cThPOdOLaF97FNS3V1dQP/rlarlQMHDrB06VJsNhsPPPAAc+bMGXjsnXfeyZIlS3jooYfYunUrM2fOxOPxUFNTw9KlS3n99deZOnXqwOOHctxS3pdnn32WW265BaPRyDXXXDPocXWkxHE6eMdpZeCjtraW+++/f+D2iy66iHXr1mEymZg2bdoQ/nVP9+1vf5uPP/6YBx54gPLycrKzs1m2bBm7du3iD3/4w5AGMTs6OnjppZdOuz0nJ4c77rhjyP+WZzJ58mQ2b97MW2+9RVpaGjk5OUyfPn1Er1cYvcQxWhyjz0Qco8Ux+nw8Rjc1NfGtb32LSy+9lNmzZ5OSkkJ7ezuLFi3iwIED3HfffQOrZoqLi9Hr9bz22mv09vZiMpm49NJLh/wdpVDzvbv//vv52c9+xve+9z2+8Y1v0NXVxXvvvce4ceNOSySeb0QCQxBUFBERwXe/+102btzI8uXLkWWZvLy8gQMI+L7cXn75ZR599FFeeeUVzGYzN9xwA/feey933nnnSdu78cYb+cEPfsCiRYv46quvkGV50JOxoez3TBITE3n55Zd54okneO6554iLi+OOO+5g9uzZ/OQnPznpsVdeeSVz587lxRdf5M0330SWZXJzc7nnnnuGHTPAuHHjeP/993n66ad55ZVXkGWZadOm8fe//z0oF2hfffUVZrOZyy+/fND7dTodV199NQsWLKCzs/Okxl4j9fDDDw96+zvvvKPqSddFF13EjBkzePHFF2lsbGTs2LE8/vjj52zQ9ctf/pKkpCTee+89Hn/8ceLj47nnnnu4//77MRqNpz3+zjvv5L333mP27NmkpaWddv/tt99OWloar776Km+88QZOp5P09HRmzZrF3XffPfC4sWPH8vnnn/PPf/6TL7/8kq6uLpKSkpg0aRI///nPBx73gx/8gFWrVrFx40acTidZWVn8+te/Pu2zKwjCyIljW3gf27S0ceNGNm7ciE6nIyYmhpycHO666y6+/e1vM3bs2JMeq9PpePHFF3n7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"/>
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
</div><div class="jp-Cell jp-CodeCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea">
<div class="jp-InputPrompt jp-InputArea-prompt">In [58]:</div>
<div class="jp-CodeMirrorEditor jp-Editor jp-InputArea-editor" data-type="inline">
<div class="cm-editor cm-s-jupyter">
<div class="highlight hl-ipython3"><pre><span></span><span class="n">var</span> <span class="o">=</span> <span class="s1">'last_eval'</span>
<span class="n">plot_compare</span><span class="p">(</span><span class="n">team</span><span class="p">,</span> <span class="n">var</span><span class="p">)</span>
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
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Work-Hours">Work Hours<a class="anchor-link" href="#Work-Hours">¶</a></h2><ul>
<li>Analyze the distribution of work hours among team members.</li>
<li>Identify any instances of excessive overtime or uneven workloads.</li>
<li>Balancing work hours is crucial for maintaining a healthy work-life balance and preventing burnout.</li>
</ul>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="n">var</span> <span class="o">=</span> <span class="s1">'avg_mnth_hrs'</span>
<span class="n">plot_compare</span><span class="p">(</span><span class="n">team</span><span class="p">,</span> <span class="n">var</span><span class="p">)</span>
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
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Project-Involvement">Project Involvement<a class="anchor-link" href="#Project-Involvement">¶</a></h2><ul>
<li>Examine the number of projects each team member has been involved in.</li>
<li>Assess whether workload distribution is equitable and aligned with individual capacities.</li>
<li>Consider redistributing projects to ensure a fair and manageable workload for
each team member.</li>
</ul>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="n">var</span> <span class="o">=</span> <span class="s1">'number_project'</span>
<span class="n">plot_compare</span><span class="p">(</span><span class="n">team</span><span class="p">,</span> <span class="n">var</span><span class="p">)</span>
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
</div>
</div>
</div>
<div class="jp-Cell jp-MarkdownCell jp-Notebook-cell">
<div class="jp-Cell-inputWrapper" tabindex="0">
<div class="jp-Collapser jp-InputCollapser jp-Cell-inputCollapser">
</div>
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Salary-Levels">Salary Levels<a class="anchor-link" href="#Salary-Levels">¶</a></h2><ul>
<li>Review the salary levels within the team.</li>
<li>Address any disparities or concerns related to compensation that may affect employee satisfaction.</li>
<li>Ensure that salary levels are competitive and reflective of employees' contributions.</li>
</ul>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="n">var</span> <span class="o">=</span> <span class="s1">'salary'</span>
<span class="n">plot_count_compare</span><span class="p">(</span><span class="n">team</span><span class="p">)</span>
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
<img alt="No description has been provided for this image" class="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABi8AAAJICAYAAAAZ/HckAAAAOXRFWHRTb2Z0d2FyZQBNYXRwbG90bGliIHZlcnNpb24zLjguMSwgaHR0cHM6Ly9tYXRwbG90bGliLm9yZy/SrBM8AAAACXBIWXMAAA9hAAAPYQGoP6dpAACOJElEQVR4nOzdeVyVZf7/8TcHOK4cXEZxEkzAgVxAcEwkkXJJAx2dStIWtDLNCg3LGc3UtHHE6Vtpiloi2mKbS06ZRJY6MTpkm2WWuXRQyXLJhYNCsZzz+8MfJ0+4gSy3nNfz8eiR57o/931/7nPuvK/uz33dl4fD4XAIAAAAAAAAAADAIEy1nQAAAAAAAAAAAMDZKF4AAAAAAAAAAABDoXgBAAAAAAAAAAAMheIFAAAAAAAAAAAwFIoXAAAAAAAAAADAUCheAAAAAAAAAAAAQ6F4AQAAAAAAAAAADIXiBQAAAAAAAAAAMBSKFwAAAAAAAAAAwFAoXgBwCg0N1fz5852f33rrLYWGhuqHH36oxawq50rOHQBQcfPnz1doaGhtp4E6iD7FxSUmJmrgwIG1nUaFZWVlafDgwQoLC1NoaKhsNlttpwSgArj2o7pw7b+4K/XabwSTJk1S7969azuNK4ZXbScAoGa8+uqrevLJJxUeHq6VK1dW6bbnz5+v1NTU8y7fvHmzWrRoUaX7BACgph0+fFgrVqxQ37591b59+4vGv/XWW3rssce0atUqNW3aVH369Lmk/WzYsEH+/v7nXHb2TRpPT081btxY/v7+6tKli4YNG6Z27dpd2sFchi+++EJbtmzRiBEjZLFYqnTb9ClwIYmJiTpx4oTefffdy97WiRMnlJycrD/96U+aNm2azGazGjRooOeff17t2rVT3759qyBjAFc6rv1ncO1HbbHb7XrnnXf06quvav/+/SouLlbLli3VuXNn3XHHHYqIiJAk7d27V++9955uvvnm8/63hCsTxQvATaxdu1atW7fW9u3btX//fl199dVVvo/p06erYcOG5dqrunMDAEBtOHLkiFJTU9W6detLuoFxtmbNmumpp55yaVu2bJkOHTqkxx57rFzshfTo0UODBw+Ww+HQqVOn9N133+nf//63Xn/9dU2YMEH33HNPhXKrqG3btik1NVU333xztV3j6VOgun399dc6ffq0Hn74YV133XXO9hdeeEH9+/eneAFAEtf+Mlz7UVtmzpypV199VX369NFf/vIXeXp6KicnR//9738VEBDgUrxITU1Vt27dKF7UMRQvADeQm5vr7GxMmzZNa9euVVJSUpXvp3///hftdAEA4I4aNmyowYMHu7RlZGTIZrOVa7+Ytm3bllvn0Ucf1QMPPKDZs2crKChI119//WXnXJvoU6C6HT9+XJLk4+NTy5kAqKu49lcM13783s8//6zXXntNt912m/7xj3+4LHM4HM5rOeo25rwA3MDatWvl6+ur66+/Xv3799fatWtrJY+tW7cqNDRUGRkZSk1NVc+ePRUZGalx48YpPz9fRUVF+uc//6no6GhFRkbqscceU1FRkcs2QkND9eSTT+qdd95R//79FRYWpltuuUWffvrpJeXw6quvasCAAerUqZNiYmI0Y8YMl/cbz5s3Tx07djznRXDq1Knq2rWrfv31V2fbRx995ByqGBkZqdGjR2vPnj3l1v3+++81btw4devWzZnzhg0bXGKKi4uVmpqqfv36KSwsTFFRUbr99tu1ZcuWSzo2AHAXn332mW699VaFhYWpb9++euONN84b+/bbb+uWW25ReHi4unXrpvHjx+unn35yiSl7Z++OHTs0bNgwhYeHq3fv3nr99dedMVu3btWQIUMkSY899phCQ0MVGhqqt956q3oOsoKaNm2qZ599Vl5eXlq0aJHLsqKiIs2bN0833nijOnXqpOuvv15PPfVUpa6x8+fPdz5F2qdPH+f3UNPvhKZPUfV9CpvNpvbt2+vll192th0/flzXXHONoqKi5HA4nO1PPPGEevToUW4be/fuVWJiojp37qyePXsqLS2tXMyxY8c0efJkXXfddQoLC9OgQYO0Zs2a8+ZVGRf7LhMTEzVx4kRJ0pAhQxQaGqpJkyYpNDRUBQUFWrNmjfPcnjRpUpXmBqByuPaXx7Wfa//Z6uK1/4cffpDD4VCXLl3KLfPw8FDz5s0lnXld28MPPyxJGj58uPMc3bp1qyTpww8/1OjRoxUTE6NOnTqpb9++WrBggUpLS53bq67f7sMPP9TAgQMVFhamgQMH6oMPPrjoccMVIy8AN7B27VrdeOONMpvNGjhwoF5//XVt375d4eHhVbqfvLy8cm1eXl7lhnkuXrxY9evX1+jRo7V//34tX75cXl5e8vDwkM1mU1JSkr766iu99dZbat26dblRIp9++qkyMjKUmJgos9ms119/Xffdd59WrlypkJCQ8+ZX9i7N6667TrfffrtycnL0+uuv6+uvv9brr78ub29vDR48WAsWLFBGRobuuusu57pFRUV6//331a9fP9WrV0+S9O9//1uTJk1STEyMJkyYoMLCQr3++uu64447tGbNGudQxT179uj222+Xn5+fRo0apYYNG+q9997TQw89pPnz5+vGG2+UJKWmpuqFF15QQkKCwsPDderUKe3YsUPffPPNOTsJAOCOdu3apZEjR6pZs2YaO3asSkpKNH/+fOf/vJxt0aJFeu655xQXF6chQ4bo+PHjWr58ue688079+9//drk+5eXlafTo0YqLi9OAAQP03nvvafr06fL29taQIUMUHByscePGad68eRo6dKj+/Oc/S9I5/2eqtlx11VW69tprtXXrVp06dUqNGzeW3W7XAw88oM8//1y33XabgoODtXv3br300kvat2+fFi5c6LKNi11jb7zxRu3bt0/vvvuuHnvsMTVt2lTSxV93UVH0KWq+T2GxWPSnP/1Jn332mYYPHy7pzDvOPTw8dPLkSe3du1d/+tOfJEmff/6587+Bs3+z++67TzfeeKPi4uL0/vvv6+mnn1ZISIjzaeBffvlFiYmJOnDggO688075+/srMzNTkyZNks1m04gRI877nV+qS/kux4wZo8DAQL355psaN26c/P391aZNG0VHR2vKlCkKDw/XbbfdJklq06bNZecE4PJw7T8/rv1c++vytf+qq66SJGVmZuqmm25SgwYNzhl37bXXKjExUa+88orGjBmjoKAgSVJwcLAkac2aNWrYsKHuueceNWzYUB9//LHmzZunU6dOOR9mqI7fbvPmzRo7dqzatWunRx99VCdOnNBjjz2mVq1anfeYcQ4OAHXa119/7QgJCXFs2bLF4XA4HHa73REbG+uYOXNmudiQkBDHvHnznJ9Xr17tCAkJceTm5l5wH/PmzXOEhISc85/+/fs74z7++GNHSEiIY+DAgY6ioiJn+yOPPOIIDQ113HfffS7bHTp0qKNXr17lcgwJCXF8/fXXzraDBw86wsLCHA899NB5cz927JijY8eOjnvvvddRWlrqjFu+fLkjJCTEsWrVKpf9JiQkuOx3/fr1jpCQEMfHH3/scDgcjlOnTjm6du3qmDJlikvc0aNHHX/+859d2keMGOEYOHCg49dff3W22e12x9ChQx39+vVztg0aNMgxevToct8vAOA3Dz74oCMsLMxx8OBBZ9vevXsd7du3d4SEhDjbfvjhB0f79u0dixYtcll/165djg4dOri033XXXY6QkBDH0qVLnW2//vqrY/DgwY7o6GjnNWv79u2OkJAQx+rVqy8p17Jr0fbt28+5fPTo0eWucxcTEhLimDFjxnmXz5w50xESEuLYuXOnw+FwOP797387rrnmGsenn37qEvf66687QkJCHJ9//rnLti/lGrtkyZJL6h9UBn2K39RGn2LGjBmO6667zvk5JSXFceeddzqio6Mdr732msPhcDhOnDjhCA0Ndbz00kvOuLL/htasWeNs+/XXXx09evRwjB071tn24osvOkJCQhxvv/22s62oqMgxdOhQR0REhCM/P/+C+d11112OAQMGnHd5Rb7L8/33GRER4Zg4ceIF8wBQs7j2c+13OLj2u+u1/+9//7sjJCTEce211zoeeughR3p6umPv3r3l4t577z2X7/hshYWF5dqmTp3q6Ny5s8v3WtW/3eDBgx09evRw2Gw2Z9vmzZsdISEhFf57wJ3x2iigjlu7dq3+8Ic/KCoqStKZoXXx8fHKyMhwGSJXFebPn69ly5a5/JOSklIubvDgwfL29nZ+Dg8Pl8Ph0K233uoSFx4erp9++kklJSUu7ZGRkerUqZPz81VXXaU+ffpo8+bN5z2m//3vfyouLtbw4cNlMv32V19CQoIaN26sjz76yCW/r776SgcOHHC2rV27Vn/84x/VrVs35/ZsNpsGDBig48ePO/8xmUzq3Lmzc3jiyZMn9fHHHysuLk6nTp1yxp04cUIxMTHat2+fDh8+LOnMUw979uzRvn37Lvg9A4C7Ki0t1ebNm9W3b1/nk1jSmaeqYmJiXGI/+OAD2e12xcXFufw9/Yc//EFXX3218+/pMl5eXho6dKjzs9ls1tChQ3Xs2DF988031XtgVahsosvTp09LOvOkWnBwsIKCgly+h+7du0tSue+hMtfY6kCfonb6FF27dtXPP/8sq9Uq6cxrWrp27aquXbvqs88+k3TmyUuHw6GuXbu6rPv7d7ubzWaFhYUpNzfX2ZaVlaUWLVpo4MCBzjZvb28lJiaqoKDgkl/bcT6X+l0CuHJw7b84rv1c+6W6e+1PSUnRtGnT5O/vrw8++ED/+te/FB8frxEjRjiP/WLq16/v/HPZ99i1a1cVFhY6j1uq2t/uyJEj2rlzp26++WaX+bV69Oihdu3aXVLeOIPXRgF1WGlpqdatW6eoqCiX91GGh4dr6dKlys7OLtfhuxxdu3a9pKGjZ3c6pd8mSvzjH/9Yrt1utys/P985NFWSrr766nLbbNu2rQoLC3X8+HG1aNGi3PIff/xRkpzDB8uYzWYFBATo4MGDzrb4+HjNmjVL77zzjpKSkpSfn69Nmzbp7rvvloeHhyQ5OwTnG+LYuHFjSdKBAwfkcDj03HPP6bnnnjtn7LFjx+Tn56dx48bpwQcfVP/+/RUSEqKYmBgNHjxY11xzzTnXAwB3c/z4cf3yyy/nvA4EBga6/I/jvn375HA41K9fv3Nuy8vLtRvcsmVL5//8l2nbtq0k6eDBg4qIiLi85GtIQUGBJKlRo0aSpP379+v7779XdHT0OeOPHTvm8rky19gLOX36tDMnSfL09LykvgJ9it/UZJ+i7HUQn3/+uVq1aqWdO3cqOTlZzZo109KlSyWduanRuHHjcttq1aqV85jK+Pr6ateuXc7PBw8e1NVXX+1y40f67bUOZd9tZV3qdwngysG1/+K49nPtr8vXfpPJpDvvvFN33nmnTpw4oS+++EJvvPGGsrKyNH78eL322msXXF868+qtuXPn6uOPP9apU6dcluXn5zv/XJW/Xdlxne/vrm+//faieeMMihdAHfbxxx/r6NGjWrdundatW1du+dq1a6u0eHGpfn/Ruli746xJomqCr6+vevXqpbVr1yopKUmZmZkqKirSoEGDyuX01FNPnbNz4+npKUmy2+2SpHvvvVc9e/Y85/7K3qV87bXX6oMPPtCGDRu0ZcsWrVq1Si+99JJmzJihhISEKj1GAKjr7Ha7PDw8lJaW5vw7+Wy/v1lRV+zZs0eenp7Od+3a7XaFhIToscceO2d8db9zd+nSpUpNTXV+bt26tTZu3Fhl26dP4epy+xR+fn7y9/fXp59+qtatW8vhcCgiIkLNmjXTP//5Tx08eFCff/65IiMjy33H5/rvrKZd6ncJoG7i2s+1/1y49teda3/Tpk3Vp08f9enTR4mJifrkk0908OBBtW7d+rzr2Gw23XXXXWrcuLHGjRunNm3aqF69evrmm2/09NNPO79jqWp/O1QdihdAHbZ27Vo1b95c06ZNK7fsgw8+0AcffKAZM2a4DKG7Euzfv79c2759+9SgQYPzPqlR9nSG1WpVQECAs72oqEg//PCDrrvuOpf4wYMH68EHH9T27du1du1adejQwTlRlSTnNpo3b15u3bOVxXl7e18wrkyTJk1066236tZbb9Xp06d11113af78+RQvAEBnJoasX7/+Oa8DOTk5Lp/btGkjh8Mhf39/BQYGXnTbR44cUUFBgcuNjbInq8r+h+j3T5YZzY8//qhPP/1UERERzqe+2rRpo++++07R0dGXlP+lXGMr8j389a9/dZncsWyiQ6OgT1Fe165d9emnn8rf31/XXHON80lLHx8f/fe//9W3336rsWPHXnT/59K6dWvt2rVLdrvd5QZI2Ssbfv80bUVd6ncJ4MrBtf/CuPZXHNf+8q7Ea3+nTp30ySef6OjRo2rduvV5z9FPPvlEJ0+eVGpqqq699lpn+9lvJzlbVf12Zcd1KX934cKY8wKoo3755RetX79eN9xwg2666aZy/9x55506ffp0lT4BUVO2bdvm8g7Sn376SRs2bFCPHj3OW+W+7rrr5O3trVdeecXlyYtVq1YpPz9f119/vUt8bGysmjZtqiVLlujTTz91qbRLUs+ePdW4cWO98MILKi4uLre/48ePSzpzQevWrZvefPNNHTly5LxxknTixAmXZY0aNVKbNm1UVFR0vq8CANyKp6enYmJi9OGHH7oMMf/++++1efNml9h+/frJ09NTqamp5Z64czgc5f7OLSkp0Ztvvun8XFRUpDfffFPNmjVTx44dJUkNGjSQdOYJLqM5efKkHnnkEZWWlmrMmDHO9ri4OB0+fFgrVqwot84vv/zi8loH6dKusWXfw9nD7M8nICBA1113nfOfs29mGAF9ivK6du2qgwcPKiMjw/lua5PJpMjISC1btkzFxcWV/h1jY2N19OhRZWRkONtKSkr0yiuvqGHDhi43FSrjUr/LC2nYsKEh/xsH3BXX/vPj2l85XPvLM+q1/+jRo9q7d2+59qKiImVnZ8tkMjlHnpzvHC0rmJz9uxUVFZ33dVNV9du1bNlS7du315o1a1xy2rJlyzmPCefHyAugjtq4caNOnz6t3r17n3N52TDAd955R/Hx8VWyz/fff/+cQ3F79OihP/zhD1WyD0kKCQnRyJEjlZiYKLPZrNdff12SLvgkQLNmzXT/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MBSKFwAAAAAAAAAAwFAoXgAAAAAAAAAAAEOheAEAAAAAAAAAAAyF4gUAAAAAAAAAADAUihcAAAAAAAAAAMBQKl28GD58uLKzs8+7/OOPP9bw4cMru3kAAAAX9D0AAHBv9AUAAHAvlS5efPLJJ/r555/Pu/z48eP69NNPK7t5AAAAF/Q9AABwb/QFAABwL5f12igPD4/zLtu/f78aNWp0OZsHAABwQd8DAAD3Rl8AAAD34VWR4DVr1mjNmjXOz4sWLdKKFSvKxeXn52vXrl2KjY29/AwBAIDbou8BAIB7oy8AAID7qlDxorCwUCdOnHB+Pn36tEym8oM3GjZsqGHDhumhhx66/AwBAIDbou8BAIB7oy8AAID7qlDx4o477tAdd9whSerdu7cef/xx9enTp1oSAwAAoO8BAIB7oy8AAID7qlDx4mwbN26syjwAAAAuiL4HAADujb4AAADupdLFizKnTp3Sjz/+KJvNJofDUW75tddee7m7AAAAcKLvAQCAe6MvAACAe6h08eL48eOaOXOm1q9fr9LS0nLLHQ6HPDw8tHPnzstKEAAAQKLvAQCAu6MvAACAe6l08WLatGnatGmTEhMT1bVrV1kslqrMCwAAwAV9DwAA3Bt9AQAA3EulixdbtmzRiBEj9Pe//70q8wEAADgn+h4AALg3+gIAALgXU2VXrF+/vlq3bl2VuQAAAJwXfQ8AANwbfQEAANxLpYsXgwYN0ocffliVuQAAAJwXfQ8AANwbfQEAANxLpV8b1b9/f3366acaOXKkhg4dqlatWsnT07NcXMeOHS8rQQAAAIm+BwAA7o6+AAAA7qXSxYs77rjD+ef//e9/5ZY7HA55eHho586dld0FAACAE30PAADcG30BAADcS6WLFykpKVWZBwAAwAXR9wAAwL3RFwAAwL1Uunhx8803V2UeAAAAF0TfAwAA90ZfAAAA91LpCburw0cffaS77rpL3bt3V6dOndSnTx+lpKQoPz/fJW7jxo0aNGiQwsLC1L9/f61evbrctoqKivSvf/1LPXr0UEREhO655x5ZrdZycd9//73uueceRUREqEePHnrqqadUVFRUbccIAAAAAAAAAAAurNIjLx577LGLxnh4eGjWrFmXvM2TJ08qPDxciYmJatKkifbs2aP58+drz549Wrp0qSTps88+U1JSkoYMGaLJkyfr448/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QC7ohcZjeUGT6dGjR7Rt2zYGDx4cBx10UPTt2zf23HPPpMciz6xatSouvfTSWLRoUWQymTrnampq3B7MF5oyZUrtn6urq+N3v/tddOzYMQYMGFAvUjOZTIwePbqJJwT0ArmiGWgovQDppxfIFb1AQ+mFpmF5QZP54IMPYv78+TFv3ryYP39+LFu2LNq3b1/7MK2+ffvGPvvsk/SYpNyoUaNi5cqVceaZZ0aXLl22+hCkAw88MIHJyAc9evT40teKVEiGXiBXNAMNpRcg/fQCuaIXaCi90DQsL0jMRx99FK+88kpMmTIl5s+fH5lMJl5//fWkxyLl9t9//5g4cWIMGjQo6VEAaAJ6gYbSDAAth16gofQCpJsHdtOkKisrY/HixbW/HbFo0aLYuHFjlJSURN++fZMejzywxx57xJYtW5IeA4BGpBfIBc0A0LzpBXJBL0C6ufOCJnPyySfH3/72t/j000+jU6dO0a9fv9rbObt27Zr0eOSJF198MW644YaYOHFidOvWLelxyGPz5s373HOZTCaKiopizz33jDZt2jThVIBeIFc0A7mgFyCd9AK5ohfIBb3QeCwvaDJXXnllbUzsvvvuSY9Dnho6dGisXbs21q9fHx07doyioqI65zOZTDz55JMJTUc+6dGjR50Hsn32MLb/tt1228XIkSNj7NixUVBQ0NQjQoukF8gVzUAu6AVIJ71ArugFckEvNB5vG0WTue6665IegWagrKys3v8AoCGmTJkSV155ZRx88MFx5JFHRklJSaxbty5mzpwZL730UvzkJz+JN954I+65557YYYcd4kc/+lHSI0OLoBfIFc1ALugFSCe9QK7oBXJBLzQed17QpDZu3BiPPfZYLFiwICoqKqJdu3bRp0+fOP7442OHHXZIejygBbnoooviG9/4RlxyySX1zv3iF7+IN998MyZNmhS//OUvY/r06TF79uwEpoSWSS8AaaEXIL30ApAWeqHxuEeFJlNeXh7Dhg2La6+9Nt56663IZDLx1ltvxXXXXRfHHntslJeXJz0i0ILMmTMn+vfvv9VzBx10UMydO7f2z2vWrGnK0aBF0wtAmugFSCe9AKSJXmg83jaKJnP99ddHRMQf/vCHOg/QevPNN+Pss8+OCRMmxC233JLUeOSJcePGZb3ms+81+CI77rhjvPzyy3HwwQfXO/fyyy/Hjjvu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"/>
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
<div class="jp-InputArea jp-Cell-inputArea"><div class="jp-InputPrompt jp-InputArea-prompt">
</div><div class="jp-RenderedHTMLCommon jp-RenderedMarkdown jp-MarkdownOutput" data-mime-type="text/markdown">
<h2 id="Employees-at-risk-of-leaving">Employees at risk of leaving<a class="anchor-link" href="#Employees-at-risk-of-leaving">¶</a></h2><p>The following is a summary of the results from asking the ML Model to assess a risk of leaving for current team members.</p>
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
<div class="highlight hl-ipython3"><pre><span></span><span class="c1"># Read dataset used to train model </span>
<span class="n">df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">read_csv</span><span class="p">(</span><span class="n">load_path</span> <span class="o">+</span> <span class="s2">"data_cleaned_NoOl_FE_AllFeat.csv"</span><span class="p">)</span>          <span class="c1"># 11991 rows, all data including outliers</span>
<span class="n">df</span><span class="o">.</span><span class="n">sort_index</span><span class="p">(</span><span class="n">axis</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span> <span class="n">inplace</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span> <span class="c1"># remember to sort the columns!</span>

<span class="c1"># Set risk thresholds for calcs</span>

<span class="n">high_risk_threshold</span> <span class="o">=</span> <span class="mf">0.9</span>
<span class="n">medium_risk_threshold</span> <span class="o">=</span> <span class="mf">0.7</span>
<span class="n">predict_true_threshold</span> <span class="o">=</span> <span class="mf">0.5</span>

<span class="c1"># path to load/save pickled models</span>
<span class="n">model_path</span> <span class="o">=</span> <span class="s2">"/home/hass/Documents/Learning/Salifort-Motors-Capstone-Project/04-pickle-ML-models/"</span> 

<span class="c1"># Load the trained XGBoost model</span>
<span class="k">with</span> <span class="nb">open</span><span class="p">(</span><span class="n">model_path</span> <span class="o">+</span> <span class="s1">'/hr_xg1-AllFeat.pickle'</span><span class="p">,</span> <span class="s1">'rb'</span><span class="p">)</span> <span class="k">as</span> <span class="n">model_file_xg</span><span class="p">:</span>
    <span class="n">model_file_xg</span> <span class="o">=</span> <span class="n">pickle</span><span class="o">.</span><span class="n">load</span><span class="p">(</span><span class="n">model_file_xg</span><span class="p">)</span>
    
<span class="n">temp_df</span> <span class="o">=</span> <span class="n">df</span><span class="p">[(</span><span class="n">df</span><span class="p">[</span><span class="s1">'left'</span><span class="p">]</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">]</span>

<span class="n">features_current_empl</span> <span class="o">=</span> <span class="n">temp_df</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="n">columns</span><span class="o">=</span><span class="s1">'left'</span><span class="p">)</span>

<span class="n">i</span> <span class="o">=</span> <span class="mi">0</span>

<span class="c1"># Predictions for CURRENT EMPLOYEES using model_file_xg for XGBoost</span>

<span class="n">probabilities_cur</span> <span class="o">=</span> <span class="n">model_file_xg</span><span class="o">.</span><span class="n">predict_proba</span><span class="p">(</span><span class="n">features_current_empl</span><span class="p">)</span>

<span class="n">leave_probabilities_cur</span> <span class="o">=</span> <span class="n">probabilities_cur</span><span class="p">[:,</span> <span class="mi">1</span><span class="p">]</span>
<span class="n">stay_probabilities_cur</span> <span class="o">=</span>  <span class="n">probabilities_cur</span><span class="p">[:,</span> <span class="mi">0</span><span class="p">]</span>


<span class="c1"># Add the probabilities to the new data DataFrame if needed</span>
<span class="n">features_current_empl</span><span class="p">[</span><span class="s1">'leave_probability'</span><span class="p">]</span> <span class="o">=</span> <span class="n">leave_probabilities_cur</span>
<span class="n">features_current_empl</span><span class="p">[</span><span class="s1">'stay_probability'</span><span class="p">]</span> <span class="o">=</span> <span class="n">stay_probabilities_cur</span>

<span class="c1"># Sort the df</span>
<span class="n">predictions_cur</span> <span class="o">=</span> <span class="n">features_current_empl</span><span class="o">.</span><span class="n">sort_values</span><span class="p">(</span><span class="n">by</span><span class="o">=</span><span class="s1">'leave_probability'</span><span class="p">,</span> <span class="n">ascending</span><span class="o">=</span><span class="kc">False</span><span class="p">)</span>

<span class="c1"># Summarise predictions</span>

<span class="n">selected_department</span> <span class="o">=</span> <span class="n">team</span>  <span class="c1"># Set in earlier cell</span>

<span class="c1"># Select the specific department column based on the variable</span>
<span class="n">selected_dept_column</span> <span class="o">=</span> <span class="n">predictions_cur</span><span class="p">[</span><span class="s1">'dept_'</span><span class="o">+</span><span class="n">team</span><span class="p">]</span>

<span class="c1"># Select all other columns excluding the department columns not selected</span>
<span class="n">other_columns</span> <span class="o">=</span> <span class="n">predictions_cur</span><span class="o">.</span><span class="n">drop</span><span class="p">(</span><span class="n">columns</span><span class="o">=</span><span class="p">[</span><span class="n">col</span> <span class="k">for</span> <span class="n">col</span> <span class="ow">in</span> <span class="n">predictions_cur</span><span class="o">.</span><span class="n">columns</span> <span class="k">if</span> <span class="n">col</span><span class="o">.</span><span class="n">startswith</span><span class="p">(</span><span class="s1">'dept'</span><span class="p">)])</span>

<span class="c1"># Concatenate the selected department column and other columns</span>
<span class="n">new_df</span> <span class="o">=</span> <span class="n">pd</span><span class="o">.</span><span class="n">concat</span><span class="p">([</span><span class="n">selected_dept_column</span><span class="p">,</span> <span class="n">other_columns</span><span class="p">],</span> <span class="n">axis</span><span class="o">=</span><span class="mi">1</span><span class="p">)</span>

<span class="n">predictions_cur</span> <span class="o">=</span> <span class="n">new_df</span><span class="p">[</span><span class="n">new_df</span><span class="p">[</span><span class="s1">'dept_'</span><span class="o">+</span><span class="n">team</span><span class="p">]]</span> <span class="c1"># filter just dept = true</span>

<span class="n">high_risk_count_cur</span> <span class="o">=</span> <span class="nb">len</span><span class="p">(</span><span class="n">predictions_cur</span><span class="p">[</span><span class="n">predictions_cur</span><span class="p">[</span><span class="s1">'leave_probability'</span><span class="p">]</span> <span class="o">&gt;</span> <span class="n">high_risk_threshold</span><span class="p">])</span>
<span class="n">high_risk_perc_cur</span> <span class="o">=</span> <span class="p">(</span><span class="n">high_risk_count_cur</span> <span class="o">/</span> <span class="nb">len</span><span class="p">(</span><span class="n">predictions_cur</span><span class="p">))</span> <span class="o">*</span> <span class="mi">100</span>
<span class="n">medium_risk_count_cur</span> <span class="o">=</span> <span class="nb">len</span><span class="p">(</span><span class="n">predictions_cur</span><span class="p">[</span><span class="n">predictions_cur</span><span class="p">[</span><span class="s1">'leave_probability'</span><span class="p">]</span> <span class="o">&gt;</span> <span class="n">medium_risk_threshold</span><span class="p">])</span>
<span class="n">medium_risk_perc_cur</span> <span class="o">=</span> <span class="p">(</span><span class="n">medium_risk_count_cur</span> <span class="o">/</span> <span class="nb">len</span><span class="p">(</span><span class="n">predictions_cur</span><span class="p">))</span> <span class="o">*</span> <span class="mi">100</span>
<span class="n">predict_risk_count_cur</span> <span class="o">=</span> <span class="nb">len</span><span class="p">(</span><span class="n">predictions_cur</span><span class="p">[</span><span class="n">predictions_cur</span><span class="p">[</span><span class="s1">'leave_probability'</span><span class="p">]</span> <span class="o">&gt;</span> <span class="n">predict_true_threshold</span><span class="p">])</span>
<span class="n">predict_risk_perc_cur</span> <span class="o">=</span> <span class="p">(</span><span class="n">predict_risk_count_cur</span> <span class="o">/</span> <span class="nb">len</span><span class="p">(</span><span class="n">predictions_cur</span><span class="p">))</span> <span class="o">*</span> <span class="mi">100</span>

<span class="k">if</span> <span class="n">i</span> <span class="o">==</span> <span class="mi">0</span><span class="p">:</span>
       <span class="nb">print</span><span class="p">(</span><span class="s2">"</span><span class="se">\n</span><span class="s2">"</span><span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">BOLD</span> <span class="o">+</span> <span class="sa">f</span><span class="s2">"XGBoost Summary for CURRENT </span><span class="si">{</span><span class="n">team</span><span class="o">.</span><span class="n">upper</span><span class="p">()</span><span class="si">}</span><span class="s2"> Employees</span><span class="se">\n</span><span class="s2">"</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">END</span><span class="p">)</span>
       <span class="nb">print</span><span class="p">(</span><span class="s1">'</span><span class="se">\u2500</span><span class="s1">'</span> <span class="o">*</span> <span class="mi">55</span><span class="p">)</span> 
<span class="k">else</span><span class="p">:</span>
       <span class="nb">print</span><span class="p">(</span><span class="s2">"</span><span class="se">\n\n</span><span class="s2">"</span><span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">BOLD</span> <span class="o">+</span> <span class="sa">f</span><span class="s2">"XGBoost Summary for LEFT Employees</span><span class="se">\n</span><span class="s2">"</span><span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">END</span><span class="p">)</span>
       <span class="nb">print</span><span class="p">(</span><span class="s1">'</span><span class="se">\u2500</span><span class="s1">'</span> <span class="o">*</span> <span class="mi">55</span><span class="p">)</span> 

<span class="c1"># Print the result</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">"</span><span class="se">\n</span><span class="s2">"</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">BOLD</span> <span class="o">+</span> <span class="sa">f</span><span class="s2">"probabilities &gt; high_risk_threshold </span><span class="si">{</span><span class="n">high_risk_threshold</span><span class="si">:</span><span class="s2">.0%</span><span class="si">}</span><span class="s2">"</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">END</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Count of employees with leave probability above </span><span class="si">{</span><span class="n">high_risk_threshold</span><span class="si">:</span><span class="s1">.0%</span><span class="si">}</span><span class="s1">        : </span><span class="si">{</span><span class="n">high_risk_count_cur</span><span class="si">:</span><span class="s1">.0f</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Percentage of employees with leave probability above </span><span class="si">{</span><span class="n">high_risk_threshold</span><span class="si">:</span><span class="s1">.0%</span><span class="si">}</span><span class="s1">   : </span><span class="si">{</span><span class="n">high_risk_perc_cur</span><span class="si">:</span><span class="s1">.2f</span><span class="si">}</span><span class="s1">%'</span><span class="p">)</span>

<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">"</span><span class="se">\n</span><span class="s2">"</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">BOLD</span> <span class="o">+</span>  <span class="sa">f</span><span class="s2">"probabilities &gt; medium_risk_threshold </span><span class="si">{</span><span class="n">medium_risk_threshold</span><span class="si">:</span><span class="s2">.0%</span><span class="si">}</span><span class="s2">"</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">END</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Count of employees with leave probability above </span><span class="si">{</span><span class="n">medium_risk_threshold</span><span class="si">:</span><span class="s1">.0%</span><span class="si">}</span><span class="s1">        : </span><span class="si">{</span><span class="n">medium_risk_count_cur</span><span class="si">:</span><span class="s1">.0f</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Percentage of employees with leave probability above </span><span class="si">{</span><span class="n">medium_risk_threshold</span><span class="si">:</span><span class="s1">.0%</span><span class="si">}</span><span class="s1">   : </span><span class="si">{</span><span class="n">medium_risk_perc_cur</span><span class="si">:</span><span class="s1">.2f</span><span class="si">}</span><span class="s1">%'</span><span class="p">)</span>

<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s2">"</span><span class="se">\n</span><span class="s2">"</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">BOLD</span> <span class="o">+</span> <span class="sa">f</span><span class="s2">"probabilities &gt; predict_risk_threshold </span><span class="si">{</span><span class="n">predict_true_threshold</span><span class="si">:</span><span class="s2">.0%</span><span class="si">}</span><span class="s2">"</span> <span class="o">+</span> <span class="n">color</span><span class="o">.</span><span class="n">END</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Count of employees with leave probability above </span><span class="si">{</span><span class="n">predict_true_threshold</span><span class="si">:</span><span class="s1">.0%</span><span class="si">}</span><span class="s1">        : </span><span class="si">{</span><span class="n">predict_risk_count_cur</span><span class="si">:</span><span class="s1">.0f</span><span class="si">}</span><span class="s1">'</span><span class="p">)</span>
<span class="nb">print</span><span class="p">(</span><span class="sa">f</span><span class="s1">'Percentage of employees with leave probability above </span><span class="si">{</span><span class="n">predict_true_threshold</span><span class="si">:</span><span class="s1">.0%</span><span class="si">}</span><span class="s1">   : </span><span class="si">{</span><span class="n">predict_risk_perc_cur</span><span class="si">:</span><span class="s1">.2f</span><span class="si">}</span><span class="s1">%'</span><span class="p">)</span>
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
<span class="ansi-bold">XGBoost Summary for CURRENT IT Employees
</span>
───────────────────────────────────────────────────────

<span class="ansi-bold">probabilities &gt; high_risk_threshold 90%</span>
Count of employees with leave probability above 90%        : 1
Percentage of employees with leave probability above 90%   : 0.13%

<span class="ansi-bold">probabilities &gt; medium_risk_threshold 70%</span>
Count of employees with leave probability above 70%        : 3
Percentage of employees with leave probability above 70%   : 0.39%

<span class="ansi-bold">probabilities &gt; predict_risk_threshold 50%</span>
Count of employees with leave probability above 50%        : 7
Percentage of employees with leave probability above 50%   : 0.92%
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
<p><a href="#top"> scroll to top </a></p>
</div>
</div>
</div>
</div>

</main>
</body>
<script src="../../scripts/projects.js"> </script>

</html>