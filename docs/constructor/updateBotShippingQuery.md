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
	query_id : -1875523689971274718,
	user_id : -7835630677850040814,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : '9TB5AGXeNJiHL6r1',
		street_line2 : '9QPVRq25DIdt37Zr',
		city : 'LuzCMJrRTvsOHxoQ',
		state : 'fcYFoHVAJtMvR1EZ',
		country_iso2 : 'qaL1h9gPIzE0dXbj',
		post_code : 'iwF3eAndSpOoE1Gq',
	),
);
```