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
	query_id : 6573804813594046820,
	user_id : -6696013030020658231,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'tT9HxL42knE5m3cX',
		street_line2 : '2NnaRB4w6OVAQYCd',
		city : 'Qak9voeh6pl3xwPm',
		state : 'hZsDkY43LcKv1FoN',
		country_iso2 : 'mnLj3k4YxV5UiyTu',
		post_code : 'xRchpU0SlAXB9ZQz',
	),
);
```