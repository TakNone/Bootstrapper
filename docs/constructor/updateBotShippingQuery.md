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
	query_id : -1042859613345320780,
	user_id : -7365931811161192909,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	shipping_address : $client->postAddress(
		street_line1 : 'C80alEmenPGQ2v5M',
		street_line2 : 'yUsebSZT2APJEi9z',
		city : 'uVM4X0hFHOirvLRY',
		state : 'vFOSwULIiKnRMNGa',
		country_iso2 : 'inFA16pXUq7Rjufm',
		post_code : 'PfMW3g4IyEx2ZLe0',
	),
);
```