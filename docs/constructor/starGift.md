# starGift

**Description** : *Represents a star gift, see here &raquo; for more info*

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
	id : -7314082399487314178,
	sticker : $client->documentEmpty(
		id : -4187768818255952452,
	),
	stars : 1879093944801097425,
	availability_remains : 80,
	availability_total : 17,
	availability_resale : -4899445167799543390,
	convert_stars : 1637959159672407989,
	first_sale_date : 99,
	last_sale_date : 64,
	upgrade_stars : -6160765167042413547,
	resell_min_stars : 6294111954133758584,
	title : '2Y4873M1hqftFoSa',
	released_by : $client->peerUser(
		user_id : 8918511555357766483,
	),
	per_user_total : 48,
	per_user_remains : 0,
);
```