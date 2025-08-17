# payments.getStarGifts

**Description** : *Get a list of available gifts, see here » for more info*

**Layer** : 211

```tl
payments.getStarGifts#c4563590 hash:int = payments.StarGifts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here.The hash may be generated locally by using the ids of the returned or stored sticker starGifts |

---

## Result

[payments.StarGifts](type/payments.StarGifts)

---

## Example

```php
$paymentsStarGifts = $client->payments->getStarGifts(
	hash : 73,
);
```