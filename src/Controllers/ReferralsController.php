<?php
/*
 * GeniusReferralsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GeniusReferralsLib\Controllers;

use GeniusReferralsLib\APIException;
use GeniusReferralsLib\APIHelper;
use GeniusReferralsLib\Configuration;
use GeniusReferralsLib\Models;
use GeniusReferralsLib\Exceptions;
use GeniusReferralsLib\Http\HttpRequest;
use GeniusReferralsLib\Http\HttpResponse;
use GeniusReferralsLib\Http\HttpMethod;
use GeniusReferralsLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class ReferralsController extends BaseController
{
    /**
     * @var ReferralsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ReferralsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get a referral origin by a given slug.
     *
     * @param string $referralOriginSlug   The referral origin identifier
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getReferralOrigin(
        $referralOriginSlug
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/utilities/referral-origins/{referral_origin_slug}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'referral_origin_slug' => $referralOriginSlug,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'         => 'APIMATIC 2.0',
            'Accept'             => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Get referral origins. This is needed when creating (POST) a new referral, as referral_origin_slug
     * refers to one of this origins.
     *
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getReferralOrigins()
    {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/utilities/referral-origins';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Get a referral by a given id.
     *
     * @param string $accountSlug    The account identifier
     * @param string $advocateToken  The advocate's token
     * @param string $referralId     The referral id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getReferral(
        $accountSlug,
        $advocateToken,
        $referralId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}/referrals/{referral_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
            'referral_id'    => $referralId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Delete a referral.
     *
     * @param string $accountSlug    The account identifier
     * @param string $advocateToken  The advocate's token
     * @param string $referralId     The referral identifier
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteReferral(
        $accountSlug,
        $advocateToken,
        $referralId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}/referrals/{referral_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
            'referral_id'    => $referralId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Create a new referral.
     *
     * @param string              $accountSlug    The account identifier
     * @param string              $advocateToken  The advocate's token
     * @param Models\ReferralForm $referralForm   The body of the request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function postReferrals(
        $accountSlug,
        $advocateToken,
        $referralForm
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}/referrals';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($referralForm));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Update a referral.
     *
     * @param string              $accountSlug    The account identifier
     * @param string              $advocateToken  The advocate's token
     * @param string              $referralId     The referral id
     * @param Models\ReferralForm $referralForm   The body of the request
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function putReferral(
        $accountSlug,
        $advocateToken,
        $referralId,
        $referralForm
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}/referrals/{referral_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
            'referral_id'    => $referralId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'content-type'  => 'application/json; charset=utf-8',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($referralForm));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Get the list of referrals for a given advocate.
     *
     * @param string  $accountSlug    The account identifier
     * @param string  $advocateToken  The advocate's token
     * @param integer $page           (optional) Page number, e.g. 1 would start at the first result, and 10 would
     *                                start at the tenth result.
     * @param integer $limit          (optional) Maximum number of results to return in the response. Default (10),
     *                                threshold (100)
     * @param string  $filter         (optional) Allowed fields: url, referral_origin_slug, created. Use the following
     *                                delimiters to build your filters params. Use the following delimiters to build
     *                                your filters params. The vertical bar ('\|') to separate individual filter
     *                                phrases and a double colon ('::') to separate the names and values. The delimiter
     *                                of the double colon (':') separates the property name from the comparison value,
     *                                enabling the comparison value to contain spaces. Example: www.example.com/users?
     *                                filter='name::todd\|city::denver\|title::grand poobah'
     * @param string  $sort           (optional) Allowed fields: created. Use sort query-string parameter that contains
     *                                a delimited set of property names. For each property name, sort in ascending
     *                                order, and for each property prefixed with a dash ('-') sort in descending order.
     *                                Separate each property name with a vertical bar ('\|'), which is consistent with
     *                                the separation of the name\|value pairs in filtering, above. For example, if we
     *                                want to retrieve users in order of their last name (ascending), first name
     *                                (ascending) and hire date (descending), the request might look like this www.
     *                                example.com/users?sort='last_name\|first_name\|-hire_date'
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getReferrals(
        $accountSlug,
        $advocateToken,
        $page = null,
        $limit = null,
        $filter = null,
        $sort = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/advocates/{advocate_token}/referrals';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            'advocate_token' => $advocateToken,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'page'           => $page,
            'limit'          => $limit,
            'filter'         => $filter,
            'sort'           => $sort,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
