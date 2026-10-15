# webPageAttributeStarGiftAuction

**Description** : *Contains info about a collectible gift auction &raquo; for a webPage preview of an auction &raquo; \(the webPage will have a type of telegram\_auction\)*

**Layer** : 229

```tl
webPageAttributeStarGiftAuction#1c641c2 gift:StarGift end_date:int = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | The gift linked to the auction |
| <mark>end_date</mark> | [`int`](type/int) | Date when the auction will end (UNIX timestamp) |

---

## Type

[WebPageAttribute](type/WebPageAttribute)

---

## Example

```php
$webPageAttribute = $client->webPageAttributeStarGiftAuction(
	gift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -8773340143238540441,
		sticker : $client->documentEmpty(
			id : 4138031171163998821,
		),
		stars : -3204141535456067901,
		availability_remains : 28,
		availability_total : 12,
		availability_resale : -4306211780060527132,
		convert_stars : -7841422115766606804,
		first_sale_date : 78,
		last_sale_date : 18,
		upgrade_stars : -5734723578104738664,
		resell_min_stars : 3341428500945887155,
		title : 'z46dW5SNHetvyFAJ',
		released_by : $client->peerUser(
			user_id : 6825617383691606269,
		),
		per_user_total : 32,
		per_user_remains : 35,
		locked_until_date : 59,
		auction_slug : 'uNQpSbCiYqVoTkfX',
		gifts_per_round : 15,
		auction_start_date : 52,
		upgrade_variants : 82,
		background : $client->starGiftBackground(
			center_color : 84,
			edge_color : 82,
			text_color : 96,
		),
	),
	end_date : 100,
);
```