<?php
namespace GoogleCloudVision\Response;

/**
 * A word representation
 */
class Word
{

  /**
   * Additional information detected for the word.
   */
  protected $property;

  /**
   * The bounding box for the word.
   */
  protected $boundingBox;

  /**
   * List of symbols in the word.
   */
  protected $symbols = [];

  /**
   * Confidence of the OCR results for the word. Range [0, 1]. 
   */
  protected $confidence;


}

