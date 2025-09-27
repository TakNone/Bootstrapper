# starsAmount

**Description** : *Describes a real \(i\.e\. possibly decimal\) amount of Telegram Stars*

**Layer** : 216

```tl
starsAmount#bbb6b4a3 amount:long nanos:int = StarsAmount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>amount</mark> | [`long`](type/long) | The integer amount of Telegram Stars |
| <mark>nanos</mark> | [`int`](type/int) | The decimal amount of Telegram Stars, expressed as nanostars (i.e. 1 nanostar is equal to 1/1'000'000'000th of a Telegram Star). This field may also be negative (the allowed range is -999999999 to 999999999) |

---

## Type

[StarsAmount](type/StarsAmount)

---

## Example

```php
$starsAmount = $client->starsAmount(
	amount : 7689009908794092977,
	nanos : 84,
);
```