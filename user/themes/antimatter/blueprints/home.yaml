<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  intro:
    label: Intro
    type:  text
  text:
    label: Text
    type:  textarea
  subtext:
    label: Subtext
    type:  textarea
  upsite:
    label: Upsite
    type:  textarea
  addressHeadline:
    label: Address
    type: headline
  address:
    label: Street
    type:  text
  city:
    label: City
    type:  text
    width: 1/2
  state:
    label: State/Province
    type:  text
    width: 1/4
  zip:
    label: Zip code
    type:  text
    width: 1/4
  Country:
    label: country
    type:  text
  contactHeadlin:
    label: Contact
    type: headline  
  phone:
    label: Phone
    type:  tel
  email:
    label: Email
    type:  email
  line:
    type: line
  hero_image:
    label: hero image
    type:  selector
    mode:  single
    types: 
      - image
    help: image filename must contain the string "background"
  website_request_image:
    label: website request image
    type:  selector
    mode:  single
    types: 
      - image
  our_work_images:
    label: our work images
    type:  structure
    fields: 
      image:
        label: image
        type:  selector
        mode:  single
        types: 
          - image
      image_name:
        label: Image Name
        type:  text
      url: 
        label: URL
        type: text
  accounts:
    label: Social Network
    type:  structure
    fields:
      
      social:
        label: Social Network
        type: select
        default: architecture 
        options: 
          twitter:  twitter
          facebook: facebook
          github: github
          pinterest: pinterest
          instagram: instagram
          rss: rss
          flickr:  flickr
          dribble: dribble
          bolt: bolt
          linkedin: linked in
      url:
        label: Profile URL
        type:  text
  menu_items:
    label: Add Menu Items
    type:  structure
    fields:
      label:
        label: Section Name
        type: text
        default: Home 
      URL:
        label: Section URL
        type:  text