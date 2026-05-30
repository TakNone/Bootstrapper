# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 225

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
	query_id : 1249283443994015417,
	user_id : 2659087728190721599,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'e4bG6frVsAmhzOMt',
		street_line2 : 'VXbgc1pLB40tMdUm',
		city : 'dDqYjEu4vh15ZmAR',
		state : 'AfLuorkaXO9UbBSJ',
		country_iso2 : 'cXFW1fHsgpTm5x8b',
		post_code : 'qeum8ji7r0wUQATd',
	),
);
```