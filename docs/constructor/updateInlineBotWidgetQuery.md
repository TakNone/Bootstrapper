# updateInlineBotWidgetQuery

**Layer** : 233

```tl
updateInlineBotWidgetQuery#a5f07e08 flags:# query_id:long query_type:WidgetQueryType user_id:long inline_message_id:InputBotInlineMessageID chat_instance:long chat_type:string data:bytes widget_id:flags.0?long wallet_card:flags.1?wallet.Card = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>query_id</mark> | [`long`](type/long) | NOTHING |
| <mark>query_type</mark> | [`WidgetQueryType`](type/WidgetQueryType) | NOTHING |
| <mark>user_id</mark> | [`long`](type/long) | NOTHING |
| <mark>inline_message_id</mark> | [`InputBotInlineMessageID`](type/InputBotInlineMessageID) | NOTHING |
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
$update = $client->updateInlineBotWidgetQuery(
	query_id : 772339248405344736,
	query_type : $client->widgetQueryTypeData(
		with_wallet : true,
	),
	user_id : 5170519321052085538,
	inline_message_id : $client->inputBotInlineMessageID(
		dc_id : 3,
		id : -1292089884729201232,
		access_hash : -2980439230983981986,
	),
	chat_instance : -5885283695253183685,
	chat_type : 'IWBpXUZnMEoK8mYC',
	data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	widget_id : 5479227129782505840,
	wallet_card : $client->wallet->card(
		stickers : array(
			$client->wallet->cardSticker(
				coordinates : $client->mediaAreaCoordinates(
					x : 113349.26171875,
					y : -1876953.1708984375,
					w : 1462249.3125,
					h : 305628.8388671875,
					rotation : 395636.7783203125,
					radius : 1485807.6103515625,
				),
				nft : $client->wallet->nftItem(
					collection_address : 'EcyG8sMStZwO2Rpe',
					address : 'nhGerJvLwMFz8aPO',
					owner_address : 'yQ1zC76ZRkDGTiPE',
					index : '82iUNWOopGXjSxnu',
					name : 'Ft4HZdGXiae7wQ5K',
					description : 'AawcDEgnm1v8fk5V',
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
			collection_address : '5tZIWqMQGoNpjvB2',
			address : 'qrgoibLPAxDhQ83G',
			owner_address : '4VBC2jcFseifIQRT',
			index : 'GO3mtSvNnCME8H94',
			name : 'VihmTxByUgeIc0au',
			description : 'SWEm6TtuO1QviwP2',
			image : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -2851343909652928687,
				size : 15,
				mime_type : 'jvT8MCKGPAqYheir',
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
				access_hash : 1237722924754854347,
				size : 99,
				mime_type : 'FPNZuY0EfHGKDMpr',
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
				access_hash : 3540190544199041607,
				size : 24,
				mime_type : 'RMQjJiGsUAaWoHTb',
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
				access_hash : 4517291837309052296,
				size : 17,
				mime_type : 'qDZ9t2PFjHLGaWMV',
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
					trait_type : 'k6XN5vlIHzFbmRTi',
					value : '5LXmJFOl8RZHt7vo',
				),
			),
			extra : $client->dataJSON(
				data : '4JQXwWCIk8vlsgb5',
			),
			gift : $client->starGift(
				limited : true,
				sold_out : true,
				birthday : true,
				require_premium : true,
				limited_per_user : true,
				peer_color_available : true,
				auction : true,
				id : 5153055593165774364,
				sticker : $client->documentEmpty(...),
				stars : -2641789350852046471,
				availability_remains : 18,
				availability_total : 89,
				availability_resale : -7772176788503433640,
				convert_stars : -66432846576721434,
				first_sale_date : 27,
				last_sale_date : 73,
				upgrade_stars : -9111838501231749123,
				resell_min_stars : 7939218851407129358,
				title : 'PTbH4DkplqjzQUE5',
				released_by : $client->peerUser(...),
				per_user_total : 63,
				per_user_remains : 5,
				locked_until_date : 80,
				auction_slug : 'nRlpMZO015exUj7t',
				gifts_per_round : 14,
				auction_start_date : 21,
				upgrade_variants : 7,
				background : $client->starGiftBackground(...),
			),
		),
		address : 'pD30I7eZ8XTjOviH',
		balance : -8215855580007353472,
	),
);
```