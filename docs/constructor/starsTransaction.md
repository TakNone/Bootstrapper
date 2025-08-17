# starsTransaction

**Description** : *Represents a Telegram Stars transaction »*

**Layer** : 211

```tl
starsTransaction#13659eb0 flags:# refund:flags.3?true pending:flags.4?true failed:flags.6?true gift:flags.10?true reaction:flags.11?true stargift_upgrade:flags.18?true business_transfer:flags.21?true stargift_resale:flags.22?true posts_search:flags.24?true id:string amount:StarsAmount date:int peer:StarsTransactionPeer title:flags.0?string description:flags.1?string photo:flags.2?WebDocument transaction_date:flags.5?int transaction_url:flags.5?string bot_payload:flags.7?bytes msg_id:flags.8?int extended_media:flags.9?Vector<MessageMedia> subscription_period:flags.12?int giveaway_post_id:flags.13?int stargift:flags.14?StarGift floodskip_number:flags.15?int starref_commission_permille:flags.16?int starref_peer:flags.17?Peer starref_amount:flags.17?StarsAmount paid_messages:flags.19?int premium_gift_months:flags.20?int ads_proceeds_from_date:flags.23?int ads_proceeds_to_date:flags.23?int = StarsTransaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **refund** | [`flags.3?true`](type/true) | Whether this transaction is a refund |
| **pending** | [`flags.4?true`](type/true) | The transaction is currently pending |
| **failed** | [`flags.6?true`](type/true) | This transaction has failed |
| **gift** | [`flags.10?true`](type/true) | This transaction was a gift from the user in peer.peer |
| **reaction** | [`flags.11?true`](type/true) | This transaction is a paid reaction » |
| **stargift_upgrade** | [`flags.18?true`](type/true) | NOTHING |
| **business_transfer** | [`flags.21?true`](type/true) | NOTHING |
| **stargift_resale** | [`flags.22?true`](type/true) | NOTHING |
| **posts_search** | [`flags.24?true`](type/true) | NOTHING |
| <mark>id</mark> | [`string`](type/string) | Transaction ID |
| <mark>amount</mark> | [`StarsAmount`](type/StarsAmount) | NOTHING |
| <mark>date</mark> | [`int`](type/int) | Date of the transaction (unixtime) |
| <mark>peer</mark> | [`StarsTransactionPeer`](type/StarsTransactionPeer) | Source of the incoming transaction, or its recipient for outgoing transactions |
| **title** | [`flags.0?string`](type/string) | For transactions with bots, title of the bought product |
| **description** | [`flags.1?string`](type/string) | For transactions with bots, description of the bought product |
| **photo** | [`flags.2?WebDocument`](type/WebDocument) | For transactions with bots, photo of the bought product |
| **transaction_date** | [`flags.5?int`](type/int) | If neither pending nor failed are set, the transaction was completed successfully, and this field will contain the point in time (Unix timestamp) when the withdrawal was completed successfully |
| **transaction_url** | [`flags.5?string`](type/string) | If neither pending nor failed are set, the transaction was completed successfully, and this field will contain a URL where the withdrawal transaction can be viewed |
| **bot_payload** | [`flags.7?bytes`](type/bytes) | Bot specified invoice payload (i.e. the payload passed to inputMediaInvoice when creating the invoice) |
| **msg_id** | [`flags.8?int`](type/int) | For paid media transactions », message ID of the paid media posted to peer.peer (can point to a deleted message; either way, extended_media will always contain the bought media) |
| **extended_media** | [`flags.9?Vector<MessageMedia>`](type/MessageMedia) | The purchased paid media » |
| **subscription_period** | [`flags.12?int`](type/int) | The number of seconds between consecutive Telegram Star debiting for Telegram Star subscriptions » |
| **giveaway_post_id** | [`flags.13?int`](type/int) | ID of the message containing the messageMediaGiveaway, for incoming star giveaway prizes |
| **stargift** | [`flags.14?StarGift`](type/StarGift) | This transaction indicates a purchase or a sale (conversion back to Stars) of a gift » |
| **floodskip_number** | [`flags.15?int`](type/int) | This transaction is payment for paid bot broadcasts.  Paid broadcasts are only allowed if the allow_paid_floodskip parameter of messages.sendMessage and other message sending methods is set while trying to broadcast more than 30 messages per second to bot users. The integer value returned by this flag indicates the number of billed API calls |
| **starref_commission_permille** | [`flags.16?int`](type/int) | This transaction is the receival (or refund) of an affiliate commission (i.e. this is the transaction received by the peer that created the referral link, flag 17 is for transactions made by users that imported the referral link) |
| **starref_peer** | [`flags.17?Peer`](type/Peer) | For transactions made by referred users, the peer that received the affiliate commission |
| **starref_amount** | [`flags.17?StarsAmount`](type/StarsAmount) | For transactions made by referred users, the amount of Telegram Stars received by the affiliate, can be negative for refunds |
| **paid_messages** | [`flags.19?int`](type/int) | NOTHING |
| **premium_gift_months** | [`flags.20?int`](type/int) | NOTHING |
| **ads_proceeds_from_date** | [`flags.23?int`](type/int) | NOTHING |
| **ads_proceeds_to_date** | [`flags.23?int`](type/int) | NOTHING |

---

## Type

[StarsTransaction](type/StarsTransaction)

---

## Example

```php
$starsTransaction = $client->starsTransaction(
	refund : true,
	pending : true,
	failed : true,
	gift : true,
	reaction : true,
	stargift_upgrade : true,
	business_transfer : true,
	stargift_resale : true,
	posts_search : true,
	id : 'NVOJZDh9g08QtfxL',
	amount : $client->starsAmount(
		amount : 6839447216874155949,
		nanos : 36,
	),
	date : 22,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'qZX5PSCM84AETIna',
	description : 'ZnFREI3KTCU7jk8u',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 3948231449032113565,
		size : 25,
		mime_type : 'e9ra45kbNZ6YIWHC',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 51,
				h : 85,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'DWb3uoBtFhNwGzdT',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1147933.6572265625,
				w : 40,
				h : 71,
				preload_prefix_size : 74,
				video_start_ts : 1198551.2568359375,
				video_codec : '6Wh4BA0JMHY9Tm72',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 13,
				title : '4QzGqRvlKH1USJbp',
				performer : 'nWPB751L0KQiSNm3',
				waveform : 'lR??LiveProto???u',
			),
			$client->documentAttributeFilename(
				file_name : '3u6NPZv2XCRjkicz',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'OUo6Y80dCwLTZ3Jh',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	transaction_date : 71,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : 'q???LiveProto?????',
	msg_id : 22,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : 8224809791208746826,
			),
			ttl_seconds : 26,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : '5n4ubiO9zCGqySR0',
			user_id : -1581093900476594499,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : -2705553881598551313,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -6670742275596514756,
				),
				$client->document(
					id : 5345701996769387181,
					access_hash : 7645513706116921060,
					file_reference : '=cCeLiveProtoK#mV{',
					date : 50,
					mime_type : '5lY9Exz2drMcUJ0v',
					size : -5827046420895177137,
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_thumbs : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 67,
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
			),
			video_cover : $client->photoEmpty(
				id : -4835304342615689625,
			),
			video_timestamp : 42,
			ttl_seconds : 36,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : 9187358587672312619,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : '46pGrdVjnWIUKt1f',
			address : 'x2HVQgeasYrJkq9v',
			provider : '1tW2N4LkRuOYDcjC',
			venue_id : 'iBVPRok2l7cUuC1z',
			venue_type : 'o965JWvxQNBRZGXu',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : 1287888075329168844,
				access_hash : -9028476503991773495,
				short_name : 'at0GPUl2gNrWZydT',
				title : 'QSYTUsWCtXfJ1nFE',
				description : 'gqQDSuYXvaJIWKsR',
				photo : $client->photoEmpty(...),
				document : $client->documentEmpty(...),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'Rshdk9vOjam4LWCQ',
			description : 'fDwc75IsGkQlZhXt',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -5737620574069458205,
				size : 85,
				mime_type : 'cBFrJzjVAbLnfkNd',
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
			receipt_msg_id : 76,
			currency : 'aHKRduPglfQrownx',
			total_amount : -7824474721939413542,
			start_param : '7eJVnDbRHvru5A2K',
			extended_media : $client->messageExtendedMediaPreview(
				w : 33,
				h : 68,
				thumb : $client->photoSizeEmpty(...),
				video_duration : 72,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 93,
			period : 35,
			proximity_notification_radius : 29,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : -1489706504919065728,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 2,
				close_date : 27,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 56,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'iFKobyJvfYwLRNXT',
				solution_entities : array(
					$client->messageEntityUnknown(...),
					$client->messageEntityMention(...),
					$client->messageEntityHashtag(...),
					$client->messageEntityBotCommand(...),
					$client->messageEntityUrl(...),
					$client->messageEntityEmail(...),
					$client->messageEntityBold(...),
					$client->messageEntityItalic(...),
					$client->messageEntityCode(...),
					$client->messageEntityPre(...),
					$client->messageEntityTextUrl(...),
					$client->messageEntityMentionName(...),
					$client->inputMessageEntityMentionName(...),
					$client->messageEntityPhone(...),
					$client->messageEntityCashtag(...),
					$client->messageEntityUnderline(...),
					$client->messageEntityStrike(...),
					$client->messageEntityBankCard(...),
					$client->messageEntitySpoiler(...),
					$client->messageEntityCustomEmoji(...),
					$client->messageEntityBlockquote(...),
				),
			),
		),
		$client->messageMediaDice(
			value : 2,
			emoticon : 'l2w8v5rTB1PHpxhG',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : -2584221196276370503,
			),
			id : 37,
			story : $client->storyItemDeleted(
				id : 52,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-782246165013816001),
			countries_iso2 : array('8KjnwEHvWoBR1xiq'),
			prize_description : 'aActXMPbD6iUquzI',
			quantity : 9,
			months : 54,
			stars : 4266439362769739190,
			until_date : 57,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : -6476510433842171342,
			additional_peers_count : 66,
			launch_msg_id : 63,
			winners_count : 37,
			unclaimed_count : 52,
			winners : array(-7961676807404668447),
			months : 53,
			stars : 8005149033802701945,
			prize_description : 'ZU6JrfWYDvSquzno',
			until_date : 18,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 2987808620972190509,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 39,
					h : 27,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 9,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->messageMediaToDo(
			todo : $client->todoList(
				others_can_append : true,
				others_can_complete : true,
				title : $client->textWithEntities(...),
				list : array(
					$client->todoItem(...),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 26,
					completed_by : 1649561947808622363,
					date : 65,
				),
			),
		),
	),
	subscription_period : 30,
	giveaway_post_id : 35,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		id : 1607341922483796606,
		sticker : $client->documentEmpty(
			id : 2703485820307154057,
		),
		stars : -2641241877681487105,
		availability_remains : 62,
		availability_total : 5,
		availability_resale : 4409539516226561983,
		convert_stars : -1371331516411530341,
		first_sale_date : 27,
		last_sale_date : 11,
		upgrade_stars : 6911940728842554966,
		resell_min_stars : -6673874517081397074,
		title : 'j8M7PmkLSdtZghaf',
		released_by : $client->peerUser(
			user_id : -6890411905671993090,
		),
		per_user_total : 90,
		per_user_remains : 24,
	),
	floodskip_number : 33,
	starref_commission_permille : 36,
	starref_peer : $client->peerUser(
		user_id : -9104927471379101586,
	),
	starref_amount : $client->starsAmount(
		amount : -960661728203773990,
		nanos : 9,
	),
	paid_messages : 14,
	premium_gift_months : 23,
	ads_proceeds_from_date : 4,
	ads_proceeds_to_date : 54,
);
```