# starsTransaction

**Description** : *Represents a Telegram Stars transaction &raquo;*

**Layer** : 214

```tl
starsTransaction#13659eb0 flags:# refund:flags.3?true pending:flags.4?true failed:flags.6?true gift:flags.10?true reaction:flags.11?true subscription:flags.12?true floodskip:flags.15?true stargift_upgrade:flags.18?true paid_message:flags.19?true premium_gift:flags.20?true business_transfer:flags.21?true stargift_resale:flags.22?true posts_search:flags.24?true stargift_prepaid_upgrade:flags.25?true id:string amount:StarsAmount date:int peer:StarsTransactionPeer title:flags.0?string description:flags.1?string photo:flags.2?WebDocument transaction_date:flags.5?int transaction_url:flags.5?string bot_payload:flags.7?bytes msg_id:flags.8?int extended_media:flags.9?Vector<MessageMedia> subscription_period:flags.12?int giveaway_post_id:flags.13?int stargift:flags.14?StarGift floodskip_number:flags.15?int starref_commission_permille:flags.16?int starref_peer:flags.17?Peer starref_amount:flags.17?StarsAmount paid_messages:flags.19?int premium_gift_months:flags.20?int ads_proceeds_from_date:flags.23?int ads_proceeds_to_date:flags.23?int = StarsTransaction;
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
| **subscription** | [`flags.12?true`](type/true) | NOTHING |
| **floodskip** | [`flags.15?true`](type/true) | NOTHING |
| **stargift_upgrade** | [`flags.18?true`](type/true) | NOTHING |
| **paid_message** | [`flags.19?true`](type/true) | NOTHING |
| **premium_gift** | [`flags.20?true`](type/true) | NOTHING |
| **business_transfer** | [`flags.21?true`](type/true) | NOTHING |
| **stargift_resale** | [`flags.22?true`](type/true) | NOTHING |
| **posts_search** | [`flags.24?true`](type/true) | NOTHING |
| **stargift_prepaid_upgrade** | [`flags.25?true`](type/true) | NOTHING |
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
	subscription : true,
	floodskip : true,
	stargift_upgrade : true,
	paid_message : true,
	premium_gift : true,
	business_transfer : true,
	stargift_resale : true,
	posts_search : true,
	stargift_prepaid_upgrade : true,
	id : 'QIb12ZHaCoMPr3iB',
	amount : $client->starsAmount(
		amount : 7817632728855494393,
		nanos : 88,
	),
	date : 12,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'I5BLJEbFVCT3H6da',
	description : 'qdPVyFYem7f0SnLv',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -6534727911533888380,
		size : 94,
		mime_type : '7D36BxvRinYofzdH',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 50,
				h : 84,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '8uZz25hoQqUJStga',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1353109.650390625,
				w : 79,
				h : 49,
				preload_prefix_size : 100,
				video_start_ts : 519913.7353515625,
				video_codec : 'mwVeg2HhWCBFPKLY',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 85,
				title : 'KBLiN8Ynv1ef7qAO',
				performer : 'aXOge8hQzoD53LnY',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'kRZpYyVOEexhoQ0A',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'upl9wSrYUFAJq68I',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	transaction_date : 68,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 47,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : -960978108623008006,
			),
			ttl_seconds : 55,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'ngha9Ze0HGfWpoJU',
			user_id : -3916132513027998465,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : 4999872556559978034,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : 4099314387607552293,
				),
				$client->document(
					id : 7374334365581983376,
					access_hash : 109587201091213088,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 56,
					mime_type : 'qhQEZjtO37LX2Wkp',
					size : -8059953403585619918,
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
					dc_id : 83,
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
				id : -3291823798008132333,
			),
			video_timestamp : 36,
			ttl_seconds : 7,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : 1671877030803038233,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'nPeJyKpI2YZUc1qr',
			address : 'FeTDXC6ldAbH1Isz',
			provider : 'mRw4OI7rN0WpHv86',
			venue_id : 'ofkvPeHVsQOuEJR2',
			venue_type : 'oF9cJwqxhtKpNV4i',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : 2377572360808648458,
				access_hash : -1810244373722148668,
				short_name : 'AfJS5OBCs64ZEzmV',
				title : 'tSgmU7B4upXyqaNz',
				description : 'mBFJzq5pdUn4HXuZ',
				photo : $client->photoEmpty(...),
				document : $client->documentEmpty(...),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'UD7TBk4yd5rx3La0',
			description : 'LGh6AHkoe3j1caCn',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -4480071531985423097,
				size : 41,
				mime_type : 'EK4ua53SN7PtFROM',
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
			receipt_msg_id : 16,
			currency : 'LfNJT6Xy4lHQnFsk',
			total_amount : 8686902196605314391,
			start_param : 'Maf37o4IsrLmtgYZ',
			extended_media : $client->messageExtendedMediaPreview(
				w : 54,
				h : 85,
				thumb : $client->photoSizeEmpty(...),
				video_duration : 93,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 18,
			period : 61,
			proximity_notification_radius : 81,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : -5546858611118622218,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 37,
				close_date : 56,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 72,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'GvaxqUMu5BFRyXZO',
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
			value : 60,
			emoticon : '3cyVvifp2mRAxGOX',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 6174810505872516290,
			),
			id : 11,
			story : $client->storyItemDeleted(
				id : 29,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(8821699502734085874),
			countries_iso2 : array('9vcNeuA3RBYT4dLH'),
			prize_description : 'Ul5rHyhQG0dJ6m3x',
			quantity : 31,
			months : 73,
			stars : 7556621109376995932,
			until_date : 86,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 6187442411089636907,
			additional_peers_count : 21,
			launch_msg_id : 83,
			winners_count : 2,
			unclaimed_count : 15,
			winners : array(-3968474905668671496),
			months : 55,
			stars : -5214342177999259953,
			prize_description : 'DIzHQcOvlfrs5t0h',
			until_date : 66,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 6346660101419766530,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 10,
					h : 42,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 67,
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
					id : 45,
					completed_by : 1222100945096843215,
					date : 75,
				),
			),
		),
	),
	subscription_period : 98,
	giveaway_post_id : 48,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		id : -665229231814601522,
		sticker : $client->documentEmpty(
			id : 4519196863181286207,
		),
		stars : 5021519456351862985,
		availability_remains : 83,
		availability_total : 61,
		availability_resale : 4383535486586796024,
		convert_stars : -4184018247569203173,
		first_sale_date : 79,
		last_sale_date : 59,
		upgrade_stars : 6761405602361589913,
		resell_min_stars : -8803436546869753460,
		title : '5knDiQXO9Jty1qCN',
		released_by : $client->peerUser(
			user_id : 6320278766071527483,
		),
		per_user_total : 19,
		per_user_remains : 9,
		locked_until_date : 15,
	),
	floodskip_number : 47,
	starref_commission_permille : 1,
	starref_peer : $client->peerUser(
		user_id : 4757639629883895986,
	),
	starref_amount : $client->starsAmount(
		amount : -7150999237346856860,
		nanos : 0,
	),
	paid_messages : 73,
	premium_gift_months : 2,
	ads_proceeds_from_date : 94,
	ads_proceeds_to_date : 80,
);
```