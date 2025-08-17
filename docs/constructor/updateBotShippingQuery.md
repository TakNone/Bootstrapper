# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 211

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
	query_id : 6253455180618044199,
	user_id : 6794558559974061247,
	payload : 'ME??LiveProto???I?',
	shipping_address : $client->postAddress(
		street_line1 : 'S2qvIAUYcoFgK1dV',
		street_line2 : 'TjMOqd2tIVNbazm5',
		city : 'd6wbEiB4IGcVvsZj',
		state : 'G21D0s8vyUqzlJ7Y',
		country_iso2 : 'lT3p7EjbCqozB5yi',
		post_code : 'pvO7GSfzktTgqa6H',
	),
);
```