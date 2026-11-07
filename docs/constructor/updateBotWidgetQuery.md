# updateBotWidgetQuery

**Layer** : 233

```tl
updateBotWidgetQuery#b373fe68 flags:# query_id:long query_type:WidgetQueryType user_id:long peer:Peer msg_id:int chat_instance:long chat_type:string data:bytes widget_id:flags.0?long wallet_card:flags.1?wallet.Card = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>query_type</mark> | [`WidgetQueryType`](type/WidgetQueryType) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>peer</mark> | [`Peer`](type/Peer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>chat_instance</mark> | [`long`](type/long) | NOTHING |
| <mark>chat_type</mark> | [`string`](type/string) | NOTHING |
| <mark>data</mark> | [`bytes`](type/bytes) | NOTHING |
| **widget_id** | [`flags.0?long`](type/long) | NOTHING |
| **wallet_card** | [`flags.1?wallet.Card`](type/wallet.Card) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotWidgetQuery(
	query_id : 3308200024583658876,
	query_type : $client->widgetQueryTypeData(
		with_wallet : true,
	),
	user_id : 693113401789099338,
	peer : $client->peerUser(
		user_id : -4585673550070889578,
	),
	msg_id : 31,
	chat_instance : 3165264519324601443,
	chat_type : 'DoEO9Mrwsb6gNnai',
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	widget_id : -8367104320199754628,
	wallet_card : $client->wallet->card(
		stickers : array(
			$client->wallet->cardSticker(
				coordinates : $client->mediaAreaCoordinates(
					x : -99626.0283203125,
					y : -576032.63671875,
					w : 1868372.3466796875,
					h : 853219.8095703125,
					rotation : -1167875.27734375,
					radius : 1954549.0654296875,
				),
				nft : $client->wallet->nftItem(
					collection_address : 'MIEQ80kl53y4HTaU',
					address : 'mKAhD5MYRS3c7lWN',
					owner_address : '1FW0U854OLTI9GJE',
					index : 'qtYWRK1Ni94uzPf0',
					name : 'CQh01IPubZyS6xfq',
					description : 'RwiTUyIVsEZDHKF2',
					image : $client->webDocument(...),
					image_small : $client->webDocument(...),
					content_url : $client->webDocument(...),
					lottie : $client->webDocument(...),
					attributes : array(
						$client->wallet->nftAttribute(...),
					),
					extra : $client->dataJSON(...),
					gift : $client->starGift(...),
				),
			),
		),
		bg_nft_item : $client->wallet->nftItem(
			collection_address : 'hCTfxDOnz24qINJ7',
			address : 'FOMWIQR6pv9Ktm5k',
			owner_address : '4bpavTKVlXsD2CRo',
			index : 'rlK71MZVxp05osD8',
			name : 'Ag7fJZY4UueaxbnB',
			description : 'XGxWM5FUk0wT4QOt',
			image : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 8456657877882627288,
				size : 47,
				mime_type : 'Sunthw3LmI0GXTYd',
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
				access_hash : 4847404784876640486,
				size : 81,
				mime_type : 'FL6k1y7vRmMBf9KV',
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
				access_hash : -342998580889067372,
				size : 24,
				mime_type : 'xQ4BAKdcv0hbFPMR',
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
				access_hash : 4605029498279550427,
				size : 87,
				mime_type : '5Urh2uXl4yqZW13f',
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
					trait_type : 'ofMNqWDgdwP2JYj7',
					value : 'GQ4cRqHbVJFl619e',
				),
			),
			extra : $client->dataJSON(
				data : 'n1jVUatE3dLJP4uH',
			),
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -4447908419547878252,
				sticker : $client->documentEmpty(...),
				stars : -1409984024868640251,
				availability_remains : 19,
				availability_total : 27,
				availability_resale : -9005202985800890865,
				convert_stars : 3778827230780839035,
				first_sale_date : 29,
				last_sale_date : 69,
				upgrade_stars : 3369571299135444451,
				resell_min_stars : -2540284430871469404,
				title : 'j9SBMeshy6uEmtQJ',
				released_by : $client->peerUser(...),
				per_user_total : 91,
				per_user_remains : 30,
				locked_until_date : 49,
				auction_slug : 'LRaczv40fo13WUHG',
				gifts_per_round : 14,
				auction_start_date : 74,
				upgrade_variants : 72,
				background : $client->starGiftBackground(...),
			),
		),
		address : '9ixd5NcJZfCKbEe3',
		balance : -4935034597764253147,
	),
);
```