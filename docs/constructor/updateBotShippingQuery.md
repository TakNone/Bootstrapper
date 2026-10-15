# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 229

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
	query_id : -8227900892956685416,
	user_id : -1817875755863342111,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'WKu84rDgm1qEMCXV',
		street_line2 : 'qzuPFt9sjd7rZiAh',
		city : 'UTRclVa3FjdqwHQ0',
		state : 'MezkAfTuZvJYOHR3',
		country_iso2 : 'OMxTnjUXGZA4lfg7',
		post_code : 't1aw9JLRU0dlBfPz',
	),
);
```