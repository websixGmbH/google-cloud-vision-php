<?php
namespace GoogleCloudVision\Response;

/**
 *Represents relevant information for the image from the internet
 */
class WebDetection
{

  /**
  * @var array
  *
  *Deduced entities from similar images on the Internet.
  */
  protected $webEntities = [];

  /**
  * @var array
  *
  *Fully matching images from the Internet
  */
  protected $fullMatchingImages = [];

  /**
  * @var array
  *
  *Partial matching images from the Internet
  */
  protected $partialMatchingImages = [];

  /**
  * @var array
  *
  *Web pages containing the matching images from the Internet
  */
  protected $pagesWithMatchingImages = [];

  /**
  * @var array
  *
  *The visually similar image results.
  */
  protected $visuallySimilarImages = [];

  /**
  * @var array
  *
  *Best guess text labels for the request image.
  */
  protected $bestGuessLabels = [];
  

}

