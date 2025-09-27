# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 214

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
	query_id : 222682469937368857,
	user_id : -9100325396074333074,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'tMTQNvX9Zin3rYuG',
		street_line2 : 'EA36F1wTC5QyPo0t',
		city : 'Hjwp1iBUrMolDSnz',
		state : '4sc0b3xAlN6iQzVK',
		country_iso2 : 'gFPf7HAZNpLcIYlo',
		post_code : 'NKyDhZxStBYVbpwg',
	),
);
```