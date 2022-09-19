<?php

namespace Drupal\crawl_shopee\Services;

use Drupal\Component\Serialization\Json;

class CrawlShopeeClientService {

  /**
   * @var \GuzzleHttp\Client
   */
  protected $client;

  /**
   * CatFactsClient constructor.
   *
   * @param $http_client_factory \Drupal\Core\Http\ClientFactory
   */
  public function __construct($http_client_factory) {
    $this->client = $http_client_factory->fromOptions([
      'base_uri' => 'https://shopee.vn/api/v4/',
    ]);
  }

  /**
   * Get list item in Shopee
   *
   * @param int $limit
   * @param int $match_id
   *
   * @return array
   */
  public function getListItem($limit, $match_id) {
    $response = $this->client->get('search/search_items', [
      'query' => [
        'by' => 'relevancy',
        'limit' => $limit,
        'match_id' => $match_id,
        'newest' => 0,
        'order' => 'desc',
        'page_type' => 'collection',
        'scenario' => 'PAGE_COLLECTION_SEARCH',
        'version' => 2,
      ]
    ]);

    return Json::decode($response->getBody());
  }

  
  /**
   * Get item detail in Shopee
   *
   * @param int $itemId
   * @param int $shopId
   *
   * @return array
   */
  public function getItemDetail($itemId, $shopId) {
    $response = $this->client->get('item/get', [
      'query' => [
        'itemid' => $itemId,
        'shopid' => $shopId,
      ]
    ]);

    return Json::decode($response->getBody());
  }



}