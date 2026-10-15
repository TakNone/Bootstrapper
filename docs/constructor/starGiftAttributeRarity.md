# starGiftAttributeRarity

**Description** : *Exact rarity value for a collectible gift attribute*

**Layer** : 229

```tl
starGiftAttributeRarity#36437737 permille:int = StarGiftAttributeRarity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>permille</mark> | [`int`](type/int) | Probability of this attribute, in permille |

---

## Type

[StarGiftAttributeRarity](type/StarGiftAttributeRarity)

---

## Example

```php
$starGiftAttributeRarity = $client->starGiftAttributeRarity(
	permille : 58,
);
```