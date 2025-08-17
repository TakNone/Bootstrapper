# starGift

**Description** : *Represents a star gift, see here » for more info*

**Layer** : 211

```tl
starGift#bcff5b flags:# limited:flags.0?true sold_out:flags.1?true birthday:flags.2?true require_premium:flags.7?true limited_per_user:flags.8?true id:long sticker:Document stars:long availability_remains:flags.0?int availability_total:flags.0?int availability_resale:flags.4?long convert_stars:long first_sale_date:flags.1?int last_sale_date:flags.1?int upgrade_stars:flags.3?long resell_min_stars:flags.4?long title:flags.5?string released_by:flags.6?Peer per_user_total:flags.8?int per_user_remains:flags.8?int = StarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **limited** | [`flags.0?true`](type/true) | Whether this is a limited-supply gift |
| **sold_out** | [`flags.1?true`](type/true) | Whether this gift sold out and cannot be bought anymore |
| **birthday** | [`flags.2?true`](type/true) | Whether this is a birthday-themed gift |
| **require_premium** | [`flags.7?true`](type/true) | NOTHING |
| **limited_per_user** | [`flags.8?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | Identifier of the gift |
| <mark>sticker</mark> | [`Document`](type/Document) | Sticker that represents the gift |
| <mark>stars</mark> | [`long`](type/long) | Price of the gift in Telegram Stars |
| **availability_remains** | [`flags.0?int`](type/int) | For limited-supply gifts: the remaining number of gifts that may be bought |
| **availability_total** | [`flags.0?int`](type/int) | For limited-supply gifts: the total number of gifts that was available in the initial supply |
| **availability_resale** | [`flags.4?long`](type/long) | NOTHING |
| <mark>convert_stars</mark> | [`long`](type/long) | The receiver of this gift may convert it to this many Telegram Stars, instead of displaying it on their profile page.convert_stars will be equal to stars only if the gift was bought using recently bought Telegram Stars, otherwise it will be less than stars |
| **first_sale_date** | [`flags.1?int`](type/int) | For sold out gifts only: when was the gift first bought |
| **last_sale_date** | [`flags.1?int`](type/int) | For sold out gifts only: when was the gift last bought |
| **upgrade_stars** | [`flags.3?long`](type/long) | NOTHING |
| **resell_min_stars** | [`flags.4?long`](type/long) | NOTHING |
| **title** | [`flags.5?string`](type/string) | NOTHING |
| **released_by** | [`flags.6?Peer`](type/Peer) | NOTHING |
| **per_user_total** | [`flags.8?int`](type/int) | NOTHING |
| **per_user_remains** | [`flags.8?int`](type/int) | NOTHING |

---

## Type

[StarGift](type/StarGift)

---

## Example

```php
$starGift = $client->starGift(
	limited : true,
	sold_out : true,
	birthday : true,
	require_premium : true,
	limited_per_user : true,
	id : -3354695778561157384,
	sticker : $client->documentEmpty(
		id : 7818792399176432525,
	),
	stars : -2637879627577047128,
	availability_remains : 56,
	availability_total : 54,
	availability_resale : -9133984739256049311,
	convert_stars : 279528766119046505,
	first_sale_date : 80,
	last_sale_date : 77,
	upgrade_stars : -895235471076113105,
	resell_min_stars : -7636279760267771863,
	title : 'GfdPR4FaECx1q6Sn',
	released_by : $client->peerUser(
		user_id : -1737538465557087989,
	),
	per_user_total : 41,
	per_user_remains : 69,
);
```