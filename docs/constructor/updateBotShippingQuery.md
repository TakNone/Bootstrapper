# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 233

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
	query_id : -3526482583117527594,
	user_id : 8416724863732444169,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'e7q5cwSBWPoihTmU',
		street_line2 : 'EghF3qn8KVcOP960',
		city : 'IgXPoLneJZaKM0OQ',
		state : 'YzvSpaQeOrH1gC4X',
		country_iso2 : 'BlL34ESUH96tiQYd',
		post_code : 'EY8nTiMkLOwIpx9U',
	),
);
```