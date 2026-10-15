# starsAmount

**Description** : *Describes a real \(i\.e\. possibly decimal\) amount of Telegram Stars*

**Layer** : 229

```tl
starsAmount#bbb6b4a3 amount:long nanos:int = StarsAmount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>amount</mark> | [`long`](type/long) | The integer amount of Telegram Stars |
| <mark>nanos</mark> | [`int`](type/int) | The decimal amount of Telegram Stars, expressed as nanostars (i.e. 1 nanostar is equal to 1/1_000_000_000th (one billionth) of a Telegram Star). This field may also be negative (the allowed range is from -999_999_999 to 999_999_999) |

---

## Type

[StarsAmount](type/StarsAmount)

---

## Example

```php
$starsAmount = $client->starsAmount(
	amount : 7315747136570045231,
	nanos : 62,
);
```