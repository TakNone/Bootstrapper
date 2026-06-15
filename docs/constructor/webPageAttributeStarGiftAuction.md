# webPageAttributeStarGiftAuction

**Layer** : 227

```tl
webPageAttributeStarGiftAuction#1c641c2 gift:StarGift end_date:int = WebPageAttribute;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>gift</mark> | [`StarGift`](type/StarGift) | NOTHING |
| <mark>end_date</mark> | [`int`](type/int) | NOTHING |

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
		id : 5713417545098011088,
		sticker : $client->documentEmpty(
			id : -2742879345287060787,
		),
		stars : -401498655592871064,
		availability_remains : 38,
		availability_total : 87,
		availability_resale : -255110850908279916,
		convert_stars : -2607799901878858275,
		first_sale_date : 4,
		last_sale_date : 7,
		upgrade_stars : -6170292917642627246,
		resell_min_stars : -4585550866903037906,
		title : 'kJ8dDxRc7trFXheG',
		released_by : $client->peerUser(
			user_id : -6626407518092289048,
		),
		per_user_total : 73,
		per_user_remains : 79,
		locked_until_date : 16,
		auction_slug : '1Au9M8NDqn6V3m4H',
		gifts_per_round : 95,
		auction_start_date : 46,
		upgrade_variants : 65,
		background : $client->starGiftBackground(
			center_color : 12,
			edge_color : 26,
			text_color : 57,
		),
	),
	end_date : 17,
);
```