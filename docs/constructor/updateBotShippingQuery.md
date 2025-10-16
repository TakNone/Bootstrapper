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
	query_id : -6837456390670566843,
	user_id : 3043361204667427771,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'KcRB6OXfDs9ht8wk',
		street_line2 : 'FduXT361yaJe9Yr4',
		city : 'eJkfnRPozUG8iyXA',
		state : 'qFDiURshnm652EdW',
		country_iso2 : 'pC2bJQVEcRHoPrsq',
		post_code : 'pdielYB3MXAvQ8ta',
	),
);
```