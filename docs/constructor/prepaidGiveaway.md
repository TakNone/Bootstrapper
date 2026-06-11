# prepaidGiveaway

**Description** : *Contains info about a prepaid giveaway &raquo;*

**Layer** : 227

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
	id : 2570906741650577105,
	months : 55,
	quantity : 66,
	date : 26,
);
```