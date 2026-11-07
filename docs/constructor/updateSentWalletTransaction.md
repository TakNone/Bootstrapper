# updateSentWalletTransaction

**Layer** : 233

```tl
updateSentWalletTransaction#b1434d4a flags:# gasless:flags.0?true msg_hash:string transaction:flags.1?WalletTransaction = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **gasless** | [`flags.0?true`](type/true) | NOTHING |
| <mark>msg_hash</mark> | [`string`](type/string) | NOTHING |
| **transaction** | [`flags.1?WalletTransaction`](type/WalletTransaction) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateSentWalletTransaction(
	gasless : true,
	msg_hash : '7sKgYuMaqx8QW0k5',
	transaction : $client->walletTransaction(
		incoming : true,
		gasless : true,
		failed : true,
		key_change : true,
		comment_encrypted : true,
		id : 'wen1ycJCqTkBp2fG',
		amount : 4703385169530781646,
		fee : -3000185143563236212,
		date : 11,
		peer : $client->walletTransactionPeerUser(
			user_id : -7865175548544576367,
			address : 'FPzsmAU39QitDflL',
			domain : 'iYe2RtJXSNC7fIxq',
		),
		comment : 'Fo3EK7sNLUc5erIy',
		tx_hash : 'Pd1o6ejJBSN0ObyT',
		nft : $client->wallet->nftItem(
			collection_address : 'ZDrRpFviI8zLPsjE',
			address : 'HKqckZTD6wR0LpNU',
			owner_address : 'rZ4pkIagVmNCeOXU',
			index : '8IDWJMy3rUOKikQs',
			name : 'KhJ97oz0iHBMvstZ',
			description : 'rTncDvAoKH32F0iY',
			image : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -510930480447995701,
				size : 54,
				mime_type : 'uzVdFLHrfAUvCRpN',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			image_small : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -5373785246127035112,
				size : 80,
				mime_type : 'psIxJSHF8Orv9nKd',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			content_url : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -3685131006196610224,
				size : 17,
				mime_type : 'DsLOKHZuPwpBIl3C',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			lottie : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 3065832656187952145,
				size : 89,
				mime_type : 'CM8Lz0fb3yOcsjpl',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			attributes : array(
				$client->wallet->nftAttribute(
					trait_type : 'FK4agA1o2YEhVWvR',
					value : 'LFTjur6GBl8wMpI0',
				),
			),
			extra : $client->dataJSON(
				data : 'Zke0PbwIs9UqlvpG',
			),
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -2079583635271029163,
				sticker : $client->documentEmpty(...),
				stars : 3811155120119613281,
				availability_remains : 53,
				availability_total : 20,
				availability_resale : -7561459368802336153,
				convert_stars : -1909782473080234220,
				first_sale_date : 27,
				last_sale_date : 61,
				upgrade_stars : -5922095104591335640,
				resell_min_stars : 105228643265371437,
				title : 'GjIH0X73Jw5yPqsC',
				released_by : $client->peerUser(...),
				per_user_total : 5,
				per_user_remains : 70,
				locked_until_date : 29,
				auction_slug : 'VJv26Mzkn8txEsjy',
				gifts_per_round : 10,
				auction_start_date : 23,
				upgrade_variants : 82,
				background : $client->starGiftBackground(...),
			),
		),
	),
);
```