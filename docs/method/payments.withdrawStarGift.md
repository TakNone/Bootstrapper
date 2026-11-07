# payments.withdrawStarGift

**Layer** : 233

```tl
payments.withdrawStarGift#ec2030ae flags:# keep_on_profile:flags.0?true stargift:InputSavedStarGift tmp_password:bytes = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **keep_on_profile** | [`flags.0?true`](type/true) | NOTHING |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |
| <mark>tmp_password</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->payments->withdrawStarGift(
	keep_on_profile : true,
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 67,
	),
	tmp_password : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```