<?php
namespace GoogleCloudVision\Response;

/**
 *contains a structured representation of OCR extracted text
 */
class TextAnnotation
{

  /**
   *List of pages detected by OCR.
   */
  protected $pages = [];

  /**
   *UTF-8 text detected on the pages. 
   */
  protected $text;


}

