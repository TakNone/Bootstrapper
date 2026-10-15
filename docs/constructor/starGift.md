# starGift

**Description** : *Represents a star gift, see here &raquo; for more info*

**Layer** : 229

```tl
starGift#313a9547 flags:# limited:flags.0?true sold_out:flags.1?true birthday:flags.2?true require_premium:flags.7?true limited_per_user:flags.8?true peer_color_available:flags.10?true auction:flags.11?true id:long sticker:Document stars:long availability_remains:flags.0?int availability_total:flags.0?int availability_resale:flags.4?long convert_stars:long first_sale_date:flags.1?int last_sale_date:flags.1?int upgrade_stars:flags.3?long resell_min_stars:flags.4?long title:flags.5?string released_by:flags.6?Peer per_user_total:flags.8?int per_user_remains:flags.8?int locked_until_date:flags.9?int auction_slug:flags.11?string gifts_per_round:flags.11?int auction_start_date:flags.11?int upgrade_variants:flags.12?int background:flags.13?StarGiftBackground = StarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **limited** | [`flags.0?true`](type/true) | Whether this is a limited-supply gift |
| **sold_out** | [`flags.1?true`](type/true) | Whether this gift sold out and cannot be bought anymore |
| **birthday** | [`flags.2?true`](type/true) | Whether this is a birthday-themed gift |
| **require_premium** | [`flags.7?true`](type/true) | This gift can only be bought by users with a Premium subscription |
| **limited_per_user** | [`flags.8?true`](type/true) | If set, the maximum number of gifts of this type that can be owned by a single user is limited and specified in per_user_total, and the remaining slots for the current user in per_user_remains |
| **peer_color_available** | [`flags.10?true`](type/true) | If set, collectible gifts of this type may be used to generate a message color palette and pattern » |
| **auction** | [`flags.11?true`](type/true) | If set, this is a collectible gift that can only be bought through a collectible gift auction » |
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
| **auction_slug** | [`flags.11?string`](type/string) | Always set for gifts that can be bought on auctions », contains the auction deep link slug » |
| **gifts_per_round** | [`flags.11?int`](type/int) | Always set for gifts that can be bought on auctions », contains the number of gifts of this kind that are distributed on every round |
| **auction_start_date** | [`flags.11?int`](type/int) | Always set for gifts that can be bought on auctions », contains the UNIX timestamp indicating when will the auction start (or when the auction started, if it points to the past) |
| **upgrade_variants** | [`flags.12?int`](type/int) | Total number of possible collectible variants » for this gift type |
| **background** | [`flags.13?StarGiftBackground`](type/StarGiftBackground) | Default background palette for this gift type, used when rendering gift cards and previews before a specific collectible backdrop is chosen |

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
	peer_color_available : true,
	auction : true,
	id : 383018731390231296,
	sticker : $client->documentEmpty(
		id : -1213094440579782813,
	),
	stars : 8595251284155975685,
	availability_remains : 100,
	availability_total : 46,
	availability_resale : -3584052231536820681,
	convert_stars : 8877216456246572,
	first_sale_date : 20,
	last_sale_date : 92,
	upgrade_stars : 3826004868661824029,
	resell_min_stars : 4064991978718909036,
	title : 'g8CBxfn6ULXhSPbm',
	released_by : $client->peerUser(
		user_id : -1791739665633661371,
	),
	per_user_total : 84,
	per_user_remains : 63,
	locked_until_date : 39,
	auction_slug : 'yxil2EPDkFm6XKLS',
	gifts_per_round : 24,
	auction_start_date : 50,
	upgrade_variants : 57,
	background : $client->starGiftBackground(
		center_color : 88,
		edge_color : 66,
		text_color : 98,
	),
);
```