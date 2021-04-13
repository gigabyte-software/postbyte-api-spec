<?php
/**
 * MailingTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PostByte API Docs
 *
 * # Introduction This is the PostByte API documentation. The PostByte API integrates with  PostByte, a service which can be used to create groups of letters called mailings. The API user can then review these mailings and then use PostByte  to send all the letters in the mailing by post.  The API has been designed to make it easy to integrate with a system that is using asynchronous processing to add the letters. For example the [/mailings/{mailing_id}/letters](/#operation/addLetter) resource is idempotent, so re-tries are safe and it's impossible for duplicate letters to be sent.  There are two main resources:    | Resource | Description                                                                         |   | -------- | ----------------------------------------------------------------------------------- |   | Mailing  | the mailing resource allows you to track the status of a group of letters           |   | Letters  | these are the actual letters and addresses information for each letter in a mailing |  **To Send a Mailing** 1. First you must create a mailing record by performing a POST request to [/mailings](/#operation/createMailing). You will specify in this request the number of letters that are to be sent in this mailing. This will return JSON containing a `mailing_id`. 2. Now you must add letters to the mailing. You do this by performing multiple POST requests to [/mailings/{mailing_id}/letters](/#operation/addLetter). Both the PDF file (base64 encoded) and the recipient information is supplied in these requests. 3. Once the correct number of letters have been added to the mailing the status of the mailing will change from `Awaiting Letters` to `Awaiting Confirmation`. 4. You must now submit a request to [/mailings/{mailing_id}/confirm](/#operation/confirmMailing) and if you have added the number of mailings that you specified when you created the initial mailing record then the status will change from `Awaiting Confirmation` to `Ready to Send`. The mailing will then be visible in the user's PostByte portal and they will receive an email notification telling them they have a mailing ready for review and sending. 4. Once the user has reviewed the mailing and confirmed that they want to send it, then the mailing will go into a status of 'Pending Printing' for 3 hours. While in this state the mailing can still be cancelled, either through the users portal, or by performing a post request to [/mailings/{mailing_id}/cancel](/#operation/cancelMailing).
 *
 * OpenAPI spec version: 1.0.0
 * Contact: hello@gigabyte.software
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * MailingTest Class Doc Comment
 *
 * @category    Class
 * @description Mailing
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MailingTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "Mailing"
     */
    public function testMailing()
    {
    }

    /**
     * Test attribute "mailing_id"
     */
    public function testPropertyMailingId()
    {
    }

    /**
     * Test attribute "block"
     */
    public function testPropertyBlock()
    {
    }

    /**
     * Test attribute "expected_letters"
     */
    public function testPropertyExpectedLetters()
    {
    }

    /**
     * Test attribute "letters_received"
     */
    public function testPropertyLettersReceived()
    {
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
    }

    /**
     * Test attribute "date_created"
     */
    public function testPropertyDateCreated()
    {
    }

    /**
     * Test attribute "date_sent"
     */
    public function testPropertyDateSent()
    {
    }
}
