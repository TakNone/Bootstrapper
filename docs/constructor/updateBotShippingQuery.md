# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 227

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
	query_id : 641425360814839255,
	user_id : 7314077182598953014,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : '8r1XWtRNFloUQ20x',
		street_line2 : 'AJPLfkiXF2Q6CbdI',
		city : 'FIRb9Lqzpal0rvPg',
		state : '2kGVJyp0nI9iYNlg',
		country_iso2 : 'SB3FDpmqPIknjgJ9',
		post_code : 'auhsjpqAPXrTKwIW',
	),
);
```