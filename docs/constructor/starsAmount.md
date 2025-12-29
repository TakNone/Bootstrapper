# starsAmount

**Description** : *Describes a real \(i\.e\. possibly decimal\) amount of Telegram Stars*

**Layer** : 218

```tl
starsAmount#bbb6b4a3 amount:long nanos:int = StarsAmount;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>amount</mark> | [`long`](type/long) | The integer amount of Telegram Stars |
| <mark>nanos</mark> | [`int`](type/int) | The decimal amount of Telegram Stars, expressed as nanostars (i.e. 1 nanostar is equal to 1/1'000'000'000th (one billionth) of a Telegram Star). This field may also be negative (the allowed range is -999999999 to 999999999) |

---

## Type

[StarsAmount](type/StarsAmount)

---

## Example

```php
$starsAmount = $client->starsAmount(
	amount : 6326390169088015326,
	nanos : 98,
);
```