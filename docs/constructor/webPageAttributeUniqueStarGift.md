# webPageAttributeUniqueStarGift

**Description** : *Contains info about collectible gift &raquo; for a webPage preview of a collectible gift &raquo; \(the webPage will have a type of telegram\_nft\)*

**Layer** : 218

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
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -7408482048965865788,
		sticker : $client->documentEmpty(
			id : -2578115583083906505,
		),
		stars : -3113996345760965998,
		availability_remains : 59,
		availability_total : 64,
		availability_resale : -3377986805414295396,
		convert_stars : 8195554322132667380,
		first_sale_date : 33,
		last_sale_date : 39,
		upgrade_stars : -5603366253628820840,
		resell_min_stars : -8199258366082335513,
		title : 'wiM73EpBTJo5yQcF',
		released_by : $client->peerUser(
			user_id : 5293022689502232478,
		),
		per_user_total : 52,
		per_user_remains : 23,
		locked_until_date : 57,
		auction_slug : 'bMHE7hZnyCzqm3wJ',
		gifts_per_round : 28,
	),
);
```