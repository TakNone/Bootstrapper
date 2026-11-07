# starGiftUpgradePrice

**Description** : *Indicates the price for a gift upgrade &raquo; starting from a specific point in time*

**Layer** : 233

```tl
starGiftUpgradePrice#99ea331d date:int upgrade_stars:long = StarGiftUpgradePrice;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>date</mark> | [`int`](type/int) | UNIX timestamp indicating when the price will be in effect |
| <mark>upgrade_stars</mark> | [`long`](type/long) | Upgrade price |

---

## Type

[StarGiftUpgradePrice](type/StarGiftUpgradePrice)

---

## Example

```php
$starGiftUpgradePrice = $client->starGiftUpgradePrice(
	date : 49,
	upgrade_stars : -3989558722405038985,
);
```