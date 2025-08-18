# updateBotShippingQuery

**Description** : *This object contains information about an incoming shipping query*

**Layer** : 211

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
	query_id : -8340278174223269330,
	user_id : -6877431447243395271,
	payload : '???akLiveProto?7?? ',
	shipping_address : $client->postAddress(
		street_line1 : 'OP2krKjn9pNSAJsF',
		street_line2 : 'RWV2ZYLSolef5xB4',
		city : 'PmypzubZtx7aTKhG',
		state : 'eyAFtQ0MJUfbCL3v',
		country_iso2 : 'm46beP2lixH7ULKN',
		post_code : 'uEqa6Tywj05XdMNg',
	),
);
```