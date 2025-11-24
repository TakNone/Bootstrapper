# prepaidGiveaway

**Description** : *Contains info about a prepaid giveaway &raquo;*

**Layer** : 218

```tl
prepaidGiveaway#b2539d54 id:long months:int quantity:int date:int = PrepaidGiveaway;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Prepaid giveaway ID |
| <mark>months</mark> | [`int`](type/int) | Duration in months of each gifted Telegram Premium subscription |
| <mark>quantity</mark> | [`int`](type/int) | Number of given away Telegram Premium subscriptions |
| <mark>date</mark> | [`int`](type/int) | Payment date |

---

## Type

[PrepaidGiveaway](type/PrepaidGiveaway)

---

## Example

```php
$prepaidGiveaway = $client->prepaidGiveaway(
	id : 4405835689044169297,
	months : 21,
	quantity : 83,
	date : 90,
);
```