<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  caption:
    label: Featured caption (HTML)
    type:  text
  categories:
    label: Categories
    type: checkboxes
    options:
      Identity Design: Identity Design
      Web Design: Web Design
      Type Design: Type Design
      Publication Design: Publication Design
      Packaging Design: Packaging Design
      Illustration: Illustration
      Photography: Photography
      Motion Graphics: Motion Graphics
  year:
    label: Year
    type:  text
    width: 1/2
  grid:
    label: Grid
    type: select
    default: third
    width: 1/2
    options:
      full: Full
      two-thirds: Two-Thirds
      half: Half
      third: Third
      quarter: Quarter
      tall: Tall
  website:
    label: Website
    type: url
    width: 1/2
  casestudy:
    label: Case study URL
    type: text
    width: 1/2
  vimeo:
    label: Vimeo
    type:  text
    width: 1/2