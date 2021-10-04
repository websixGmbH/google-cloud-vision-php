<?php

namespace GoogleCloudVision\Response;

/**
 *Response to an image annotation request
 *
 */
class AnnotateImageResponse
{

    /**
     * @var array
     *
     *If present, face detection has completed successfully.
     */
    protected $faceAnnotations = [];

    /**
     * @var array
     *
     *If present, landmark detection has completed successfully.
     */
    protected $landmarkAnnotations = [];

    /**
     * @var array
     *
     *If present, logo detection has completed successfully.
     */
    protected $logoAnnotations = [];

    /**
     * @var array
     *
     *If present, label detection has completed successfully.
     */
    protected $labelAnnotations = [];

    /**
     * @var array
     *
     *If present, text (OCR) detection has completed successfully.
     */
    protected $textAnnotations = [];

    /**
     * @var TextAnnotation
     *
     *If present, text (OCR) detection or document (OCR) text detection has completed successfully
     */
    protected $fullTextAnnotation;

    /**
     * @var SafeSearchAnnotation
     *
     *If present, safe-search annotation has completed successfully.
     */
    protected $safeSearchAnnotation;

    /**
     * @var ImageProperties
     *
     *If present, image properties were extracted successfully.
     */
    protected $imagePropertiesAnnotation;

    /**
     * @var CropHintsAnnotation
     *
     *If present, crop hints have completed successfully.
     */
    protected $cropHintsAnnotation;

    /**
     * @var WebDetection
     *
     *If present, web detection has completed successfully.
     */
    protected $webDetection;

    /**
     * @var Status
     *
     *If set, represents the error message for the operation
     */
    protected $error;
}
