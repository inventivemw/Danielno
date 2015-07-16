<?php if(!defined('KIRBY')) exit ?>

title: Article
pages: false
files:
  sortable: true
  fields:
    caption:
      label: Caption
      type: textarea
fields:
  title:
    label: Title
    type: title
    width: 3/4
  date:
    label: Date
    type: date
    width: 1/4
    icon: calendar
  lead:
    label: Lead Paragraph
    type: textarea
    required: true
  text:
    label: Text
    type: textarea
    required: true
  tags:
    label: Tags
    type:  tags
    required: true