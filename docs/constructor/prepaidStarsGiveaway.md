# prepaidStarsGiveaway

**Description** : *Contains info about a prepaid Telegram Star giveaway &raquo;*

**Layer** : 227

```tl
prepaidStarsGiveaway#9a9d77e0 id:long stars:long quantity:int boosts:int date:int = PrepaidGiveaway;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Prepaid giveaway ID |
| <mark>stars</mark> | [`long`](type/long) | Number of given away Telegram Stars » |
| <mark>quantity</mark> | [`int`](type/int) | Number of giveaway winners |
| <mark>boosts</mark> | [`int`](type/int) | Number of boosts the channel will gain by launching the giveaway |
| <mark>date</mark> | [`int`](type/int) | When was the giveaway paid for |

---

## Type

[PrepaidGiveaway](type/PrepaidGiveaway)

---

## Example

```php
$prepaidGiveaway = $client->prepaidStarsGiveaway(
	id : 3702998918754500532,
	stars : 4030659296057660675,
	quantity : 2,
	boosts : 95,
	date : 88,
);
```