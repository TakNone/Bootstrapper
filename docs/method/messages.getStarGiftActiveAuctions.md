# messages.getStarGiftActiveAuctions

**Layer** : 218

```tl
messages.getStarGiftActiveAuctions#a5d0514d hash:long = StarGiftActiveAuctions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[StarGiftActiveAuctions](type/StarGiftActiveAuctions)

---

## Example

```php
$starGiftActiveAuctions = $client->messages->getStarGiftActiveAuctions(
	hash : 0,
);
```