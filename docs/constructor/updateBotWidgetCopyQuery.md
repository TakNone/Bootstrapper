# updateBotWidgetCopyQuery

**Layer** : 233

```tl
updateBotWidgetCopyQuery#fa89bef7 flags:# query_id:long query_type:WidgetQueryType user_id:long data:bytes widget_id:long wallet_card:flags.1?wallet.Card = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>query_type</mark> | [`WidgetQueryType`](type/WidgetQueryType) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>data</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>widget_id</mark> | [`long`](type/long) | NOTHING |
| **wallet_card** | [`flags.1?wallet.Card`](type/wallet.Card) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateBotWidgetCopyQuery(
	query_id : 6077024834804583803,
	query_type : $client->widgetQueryTypeData(
		with_wallet : true,
	),
	user_id : -8256740755508381426,
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	widget_id : -3158863412987901319,
	wallet_card : $client->wallet->card(
		stickers : array(
			$client->wallet->cardSticker(
				coordinates : $client->mediaAreaCoordinates(
					x : 433014.3955078125,
					y : 128566.4453125,
					w : -1082158.431640625,
					h : -926827.4501953125,
					rotation : -878144.921875,
					radius : 1881509.5185546875,
				),
				nft : $client->wallet->nftItem(
					collection_address : 'Dt3f6rRjk81n0KgV',
					address : '2BbGkR6Hx9ELXdAQ',
					owner_address : 'wflL5Q8R496cu0Uz',
					index : 'lBkWavPFgizydYn4',
					name : 'vYotbzLQ0qMNEuFw',
					description : '9WtcZAMLHIP5eu7V',
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
			collection_address : 'vQrWc2SOD0MRxbYh',
			address : '9O25Kvb3geFsmnPr',
			owner_address : 'GFekwLBuDWx86V1N',
			index : 'I0rVhOi9vXBlJsmF',
			name : 'G9j12CWDrSMuYZ3v',
			description : '9GSuofUqcHyMhEZC',
			image : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -7565615445868885932,
				size : 86,
				mime_type : 'muknKFD0rQtwjOLI',
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
				access_hash : -1801439143158192482,
				size : 54,
				mime_type : 'qxevtuga2TXU4d9f',
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
				access_hash : 1219816066166170575,
				size : 77,
				mime_type : 'QDqoFWx30L6clNb9',
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
				access_hash : -1933752025831883801,
				size : 49,
				mime_type : 'JBaMIHUyPp3u410X',
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
					trait_type : '9QalrtVuZ8pqnXim',
					value : '95zsw47bGMINYh3k',
				),
			),
			extra : $client->dataJSON(
				data : 'Lri5tqB3Kz07VC8e',
			),
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : -4436155651958692337,
				sticker : $client->documentEmpty(...),
				stars : -8746322115857418255,
				availability_remains : 75,
				availability_total : 98,
				availability_resale : 685945248945429497,
				convert_stars : 8316283264374307670,
				first_sale_date : 91,
				last_sale_date : 68,
				upgrade_stars : -2236553494298055495,
				resell_min_stars : 1559574456375638510,
				title : 'kPIHwuKUDg4N50qC',
				released_by : $client->peerUser(...),
				per_user_total : 77,
				per_user_remains : 68,
				locked_until_date : 32,
				auction_slug : 'm8B3wTrjeAxbiWLN',
				gifts_per_round : 83,
				auction_start_date : 69,
				upgrade_variants : 83,
				background : $client->starGiftBackground(...),
			),
		),
		address : 'c6hgHJEt9iK7T8U5',
		balance : -2631975723152475981,
	),
);
```