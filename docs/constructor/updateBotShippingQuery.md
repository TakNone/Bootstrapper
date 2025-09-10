# updateBotShippingQuery

**Layer** : 214

```tl
updateBotShippingQuery#b5aefd7d query_id:long user_id:long payload:bytes shipping_address:PostAddress = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>payload</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>shipping_address</mark> | [`PostAddress`](type/PostAddress) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotShippingQuery(
	query_id : -174611405624477835,
	user_id : -1233831555862413372,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'Y0PKuFOc2zkBL9WM',
		street_line2 : 'V2GlvCQFj9xiZuR0',
		city : 'Kmfl7Lx3dNJW02Ma',
		state : '5NcxoElFJWhPmgsV',
		country_iso2 : 'uNyO0AUW4qG95wrM',
		post_code : 'IABn9pOh57WKLiGR',
	),
);
```