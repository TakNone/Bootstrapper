# starGift

**Description** : *Represents a star gift, see here &raquo; for more info*

**Layer** : 218

```tl
starGift#1b9a4d7f flags:# limited:flags.0?true sold_out:flags.1?true birthday:flags.2?true can_upgrade:flags.3?true require_premium:flags.7?true limited_per_user:flags.8?true peer_color_available:flags.10?true auction:flags.11?true id:long sticker:Document stars:long availability_remains:flags.0?int availability_total:flags.0?int availability_resale:flags.4?long convert_stars:long first_sale_date:flags.1?int last_sale_date:flags.1?int upgrade_stars:flags.3?long resell_min_stars:flags.4?long title:flags.5?string released_by:flags.6?Peer per_user_total:flags.8?int per_user_remains:flags.8?int locked_until_date:flags.9?int auction_slug:flags.11?string gifts_per_round:flags.11?int = StarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **limited** | [`flags.0?true`](type/true) | Whether this is a limited-supply gift |
| **sold_out** | [`flags.1?true`](type/true) | Whether this gift sold out and cannot be bought anymore |
| **birthday** | [`flags.2?true`](type/true) | Whether this is a birthday-themed gift |
| **can_upgrade** | [`flags.3?true`](type/true) | NOTHING |
| **require_premium** | [`flags.7?true`](type/true) | This gift can only be bought by users with a Premium subscription |
| **limited_per_user** | [`flags.8?true`](type/true) | If set, the maximum number of gifts of this type that can be owned by a single user is limited and specified in per_user_total, and the remaining slots for the current user in per_user_remains |
| **peer_color_available** | [`flags.10?true`](type/true) | NOTHING |
| **auction** | [`flags.11?true`](type/true) | NOTHING |
| <mark>id</mark> | [`long`](type/long) | Identifier of the gift |
| <mark>sticker</mark> | [`Document`](type/Document) | Sticker that represents the gift |
| <mark>stars</mark> | [`long`](type/long) | Price of the gift in Telegram Stars |
| **availability_remains** | [`flags.0?int`](type/int) | For limited-supply gifts: the remaining number of gifts that may be bought |
| **availability_total** | [`flags.0?int`](type/int) | For limited-supply gifts: the total number of gifts that was available in the initial supply |
| **availability_resale** | [`flags.4?long`](type/long) | The total number of (upgraded to collectibles) gifts of this type currently on resale |
| <mark>convert_stars</mark> | [`long`](type/long) | The receiver of this gift may convert it to this many Telegram Stars, instead of displaying it on their profile page.convert_stars will be equal to stars only if the gift was bought using recently bought Telegram Stars, otherwise it will be less than stars |
| **first_sale_date** | [`flags.1?int`](type/int) | For sold out gifts only: when was the gift first bought |
| **last_sale_date** | [`flags.1?int`](type/int) | For sold out gifts only: when was the gift last bought |
| **upgrade_stars** | [`flags.3?long`](type/long) | The number of Telegram Stars the user can pay to convert the gift into a collectible gift » |
| **resell_min_stars** | [`flags.4?long`](type/long) | The minimum price in Stars for gifts of this type currently on resale |
| **title** | [`flags.5?string`](type/string) | Title of the gift |
| **released_by** | [`flags.6?Peer`](type/Peer) | This gift was released by the specified peer |
| **per_user_total** | [`flags.8?int`](type/int) | Maximum number of gifts of this type that can be owned by any user |
| **per_user_remains** | [`flags.8?int`](type/int) | Remaining number of gifts of this type that can be owned by the current user |
| **locked_until_date** | [`flags.9?int`](type/int) | If set, the specified gift possibly cannot be sent until the specified date, see here » for the full flow |
| **auction_slug** | [`flags.11?string`](type/string) | NOTHING |
| **gifts_per_round** | [`flags.11?int`](type/int) | NOTHING |

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
	can_upgrade : true,
	require_premium : true,
	limited_per_user : true,
	peer_color_available : true,
	auction : true,
	id : 4483345440219259531,
	sticker : $client->documentEmpty(
		id : -2570879053981201483,
	),
	stars : 5049641948747940289,
	availability_remains : 50,
	availability_total : 53,
	availability_resale : 5315107667586933766,
	convert_stars : -5445799771572636261,
	first_sale_date : 7,
	last_sale_date : 69,
	upgrade_stars : -7071224267840708167,
	resell_min_stars : 8553571295910995648,
	title : 'q5enN4cOi9yMP8AR',
	released_by : $client->peerUser(
		user_id : -8747480593533583814,
	),
	per_user_total : 22,
	per_user_remains : 49,
	locked_until_date : 79,
	auction_slug : 'si6fePuQ5McxD8nd',
	gifts_per_round : 93,
);
```