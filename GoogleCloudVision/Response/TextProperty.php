<?php
namespace GoogleCloudVision\Response;

/**
 * Represents additional information detected on the structural component.
 */
class TextProperty
{

  /**
   * A list of detected languages together with confidence.
   */
  protected $detectedLanguages = [];

  /**
   * Detected start or end of a text segment. 
   */
  protected $detectedBreak;


}

