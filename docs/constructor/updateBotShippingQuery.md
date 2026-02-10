# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 222

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
	query_id : 152736441749015975,
	user_id : -9190210998879888076,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'f39Bt2HEX1wCn0jm',
		street_line2 : 'NkSdCjVZpJPXAfrQ',
		city : 'R0HeK5GIxT1fY2iS',
		state : 'hbf1jyeNDqmp8dwB',
		country_iso2 : '91hsYO7mgl8yAX0t',
		post_code : 'kjgV0dO6fvzF1px7',
	),
);
```