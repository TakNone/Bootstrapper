# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 222

```tl
webPageAttributeUniqueStarGift#cf6f6db8 gift:StarGift = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The starGiftUnique constructor |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeUniqueStarGift(
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -2100144934665143106,
		sticker : $client->documentEmpty(
			id : 5051563477436698653,
		),
		stars : 8933031060166509222,
		availability_remains : 65,
		availability_total : 0,
		availability_resale : 1695050856933603060,
		convert_stars : -3639994091490746251,
		first_sale_date : 57,
		last_sale_date : 29,
		upgrade_stars : -1969663451436463726,
		resell_min_stars : -1593394247706800414,
		title : '9pXhbwJcGt6uNEag',
		released_by : $client->peerUser(
			user_id : -9024334897592491948,
		),
		per_user_total : 56,
		per_user_remains : 43,
		locked_until_date : 40,
		auction_slug : '0wdc964WIBsnLKJh',
		gifts_per_round : 98,
		auction_start_date : 23,
		upgrade_variants : 72,
		background : $client->starGiftBackground(
			center_color : 83,
			edge_color : 45,
			text_color : 79,
		),
	),
);
```