# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 218

```tl
updateBotShippingQuery#b5aefd7d query_id:long user_id:long payload:bytes shipping_address:PostAddress = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | Unique query identifier |
| <mark>user_id</mark> | [`long`](type/long) | User who sent the query |
| <mark>payload</mark> | [`bytes`](type/bytes) | Bot specified invoice payload |
| <mark>shipping_address</mark> | [`PostAddress`](type/PostAddress) | User specified shipping address |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotShippingQuery(
	query_id : 8758682494509009835,
	user_id : -7693765981465407059,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'rUNieRQIAwtCB7P6',
		street_line2 : 'y2zvnqDEuRTflP18',
		city : 'GgYdz5S1xi6c2Epk',
		state : 'f5iLkucSrU2K84OB',
		country_iso2 : 'd9PLEmYKxilHo0uf',
		post_code : 'wqMDbAv9IGciClBK',
	),
);
```