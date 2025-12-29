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
	query_id : -435443425208671602,
	user_id : -4827464325291698475,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'zTG8nOCq3L5sPulS',
		street_line2 : 'jucD4ITGXgC5hMOK',
		city : 'XjrDWnqtklBC8dVO',
		state : 'zjhIJaR0ogdvlV1k',
		country_iso2 : '3W8l2bdvPZe9kgw7',
		post_code : 'apRWInTQPBOY9DVv',
	),
);
```