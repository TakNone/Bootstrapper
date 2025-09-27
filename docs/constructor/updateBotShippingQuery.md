# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 216

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
	query_id : 1561320249246686949,
	user_id : 4198986922810018713,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'HdKxr8Fb0gPskVAE',
		street_line2 : 'AZEjfWD03CkO4eTq',
		city : 'zaXpSoCBWcv6dPj3',
		state : 'M1R4TEnXGhsxwCO2',
		country_iso2 : 'JrIzuKUFtvdZw59W',
		post_code : 'iUEvlIBCKat56z0H',
	),
);
```