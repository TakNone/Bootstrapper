# starsTransaction

**Description** : *Represents a Telegram Stars or TON transaction &raquo;*

**Layer** : 218

```tl
starsTransaction#13659eb0 flags:# refund:flags.3?true pending:flags.4?true failed:flags.6?true gift:flags.10?true reaction:flags.11?true subscription:flags.12?true stargift_upgrade:flags.18?true floodskip:flags.15?true business_transfer:flags.21?true stargift_resale:flags.22?true paid_message:flags.19?true posts_search:flags.24?true premium_gift:flags.20?true stargift_prepaid_upgrade:flags.25?true stargift_drop_original_details:flags.26?true phonegroup_message:flags.27?true stargift_auction_bid:flags.28?true id:string amount:StarsAmount date:int peer:StarsTransactionPeer title:flags.0?string description:flags.1?string photo:flags.2?WebDocument transaction_date:flags.5?int transaction_url:flags.5?string bot_payload:flags.7?bytes msg_id:flags.8?int extended_media:flags.9?Vector<MessageMedia> subscription_period:flags.12?int giveaway_post_id:flags.13?int stargift:flags.14?StarGift floodskip_number:flags.15?int starref_commission_permille:flags.16?int starref_peer:flags.17?Peer starref_amount:flags.17?StarsAmount paid_messages:flags.19?int premium_gift_months:flags.20?int ads_proceeds_from_date:flags.23?int ads_proceeds_to_date:flags.23?int = StarsTransaction;
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
| **stargift_upgrade** | [`flags.18?true`](type/true) | This transaction pays for the upgrade of a gift to a collectible gift » |
| **floodskip** | [`flags.15?true`](type/true) | NOTHING |
| **business_transfer** | [`flags.21?true`](type/true) | This transaction transfers stars from the balance of a user account connected to a business bot, to the balance of the business bot, see here » for more info |
| **stargift_resale** | [`flags.22?true`](type/true) | This transaction is related to the resale of a collectible gift » |
| **paid_message** | [`flags.19?true`](type/true) | NOTHING |
| **posts_search** | [`flags.24?true`](type/true) | Represents payment for a paid global post search » |
| **premium_gift** | [`flags.20?true`](type/true) | NOTHING |
| **stargift_prepaid_upgrade** | [`flags.25?true`](type/true) | Represents payment for a separate prepaid upgrade of a gift |
| **stargift_drop_original_details** | [`flags.26?true`](type/true) | NOTHING |
| **phonegroup_message** | [`flags.27?true`](type/true) | NOTHING |
| **stargift_auction_bid** | [`flags.28?true`](type/true) | NOTHING |
| <mark>id</mark> | [`string`](type/string) | Transaction ID |
| <mark>amount</mark> | [`StarsAmount`](type/StarsAmount) | Amount of Telegram Stars or TON |
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
| **paid_messages** | [`flags.19?int`](type/int) | This transaction is related to the reception or transmission of a paid message » |
| **premium_gift_months** | [`flags.20?int`](type/int) | This transaction indicates the payment for a gifted Telegram Premium subscription » |
| **ads_proceeds_from_date** | [`flags.23?int`](type/int) | Indicates that this is payment for ad revenue from the specified unixtime (always set together with ads_proceeds_to_date) |
| **ads_proceeds_to_date** | [`flags.23?int`](type/int) | Indicates that this is payment for ad revenue to the specified unixtime |

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
	stargift_upgrade : true,
	floodskip : true,
	business_transfer : true,
	stargift_resale : true,
	paid_message : true,
	posts_search : true,
	premium_gift : true,
	stargift_prepaid_upgrade : true,
	stargift_drop_original_details : true,
	phonegroup_message : true,
	stargift_auction_bid : true,
	id : 'jIR4MSAPfp2BOC9T',
	amount : $client->starsAmount(
		amount : -2009588472697214775,
		nanos : 77,
	),
	date : 35,
	peer : $client->starsTransactionPeerUnsupported(),
	title : '5RIzX6hYPuwJeOtn',
	description : 'H3MsE0BxIO9K7RaF',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -4190244743986483481,
		size : 53,
		mime_type : 'YSrAdy4WQsIbzP6G',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 54,
				h : 27,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'o2bIeVhuxpGiPUlN',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 41,
					x : -602939.8349609375,
					y : 788975.80859375,
					zoom : 985273.0810546875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -93350.8759765625,
				w : 89,
				h : 57,
				preload_prefix_size : 85,
				video_start_ts : 978708.826171875,
				video_codec : 'VOyP52KfrgTFm4iI',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 61,
				title : 'x7IlvhqB4LrKJ3ON',
				performer : 'EvgsijS0dRPLyMt6',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '8TEoMbPOjitwxYGX',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'RBghAMQrq2XyPbKf',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 45,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 52,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : -1637722127789413283,
			),
			ttl_seconds : 32,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'HjQuPpoVbZhdWFXY',
			user_id : -3369302467731412345,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : 6233371613030516628,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -2431892512042476714,
				),
				$client->document(
					id : 234588791712640225,
					access_hash : 4754480509551340812,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 52,
					mime_type : 'xHhKsOElraM9NpGo',
					size : 202192443492455016,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'hRtxOanZmogJB6AU',
						),
						$client->photoSize(
							type : 'dfLEWUg6z0npbJoI',
							w : 32,
							h : 49,
							size : 30,
						),
						$client->photoCachedSize(
							type : 'vWiHE43suwhYQMeK',
							w : 10,
							h : 95,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'nm05OTPD3HiRtqyL',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'XemPya3LCY5HsbKd',
							w : 42,
							h : 20,
							sizes : array(92),
						),
						$client->photoPathSize(
							type : 'w923odn6zYXSPWLE',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'iJwZHas6R53qpImP',
							w : 90,
							h : 15,
							size : 75,
							video_start_ts : -370735.1982421875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 6447724196259545201,
							background_colors : array(31),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 2158429125084244142,
							background_colors : array(98),
						),
					),
					dc_id : 69,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 1,
							h : 32,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'czOu5mFVCQsMjEYX',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 443415.2001953125,
							w : 31,
							h : 73,
							preload_prefix_size : 56,
							video_start_ts : -514302.64453125,
							video_codec : 'dyn9kfHQxm1p3TMi',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 34,
							title : 'rRLhzcUkKpNGPBDS',
							performer : 'jSwHuvX7LRWdzG9F',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'cFyn64BPkVZ3AGX0',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '8VR6n4IkZgEFtJr3',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : 56489804861094304,
			),
			video_timestamp : 78,
			ttl_seconds : 98,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : -3837996449051182129,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'AriGs76fTcJwvlzn',
			address : 'LDSHovZctbV9fxA6',
			provider : 'pFyUcrvWThHXJf04',
			venue_id : 'vVPaBiywptLOcrXR',
			venue_type : 'rhGEYc7CKntOXxov',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -4800360995439095618,
				access_hash : -7655044033864293200,
				short_name : 'bn9dJicvWMuEey3a',
				title : 'mBups9F24Eoe3LVW',
				description : 'AQx0zKHajeUvcR35',
				photo : $client->photoEmpty(
					id : -2355788421514982080,
				),
				document : $client->documentEmpty(
					id : -5846372662439003241,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'MIA6ehsPoGwTknFv',
			description : 'YLAW1u4SG7FJnowv',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 8534497773925907577,
				size : 13,
				mime_type : 'IEmKtrHWLOwgjQyv',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 99,
						h : 26,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'w9icOdVgYo51G8l0',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1927463.3349609375,
						w : 66,
						h : 24,
						preload_prefix_size : 40,
						video_start_ts : -96920.716796875,
						video_codec : 'igYzJEL2o5ntqj6P',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 83,
						title : 'zPjxnMuDeAQiECSq',
						performer : 'Ok1ULbXKRnomjStv',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : '8t3hcCiWXqpfSIn6',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '9UBpAPQn5DoSkcNx',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 57,
			currency : 'TZQUz7MuqwdtsO5B',
			total_amount : 8567304913654697956,
			start_param : 'BlS9xPmVnrLduQCR',
			extended_media : $client->messageExtendedMediaPreview(
				w : 66,
				h : 94,
				thumb : $client->photoSizeEmpty(
					type : 'jQ29dhY6SacJVLtO',
				),
				video_duration : 68,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 46,
			period : 57,
			proximity_notification_radius : 65,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 596075770275862410,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'ze3Ry8p1CHDq5jLk',
					entities : array(
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
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 1,
				close_date : 89,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 15,
					),
				),
				total_voters : 7,
				recent_voters : array(
					$client->peerUser(
						user_id : 3976014532985084594,
					),
					$client->peerChat(
						chat_id : 3491478390336577285,
					),
					$client->peerChannel(
						channel_id : 4592603799666140897,
					),
				),
				solution : '96FW4uajDmoplzA8',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 92,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 20,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 41,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 92,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 6,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 28,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 45,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 36,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : 'j7P1iE4TrQ2K0Bn5',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 64,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 81,
						user_id : -4156545999734723447,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 44,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 92,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 25,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 76,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 31,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 78,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 97,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 63,
						document_id : 1581624352700703653,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 48,
					),
				),
			),
		),
		$client->messageMediaDice(
			value : 84,
			emoticon : 'jC9whtSIBQZy3FcL',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 142012763609901839,
			),
			id : 31,
			story : $client->storyItemDeleted(
				id : 43,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(8799677971455820965),
			countries_iso2 : array('g5yj2lHhfuw4SN69'),
			prize_description : 'Q7m8fSgxyhbNJIo6',
			quantity : 43,
			months : 1,
			stars : 6432606748109591618,
			until_date : 88,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 694725916524518133,
			additional_peers_count : 33,
			launch_msg_id : 16,
			winners_count : 13,
			unclaimed_count : 21,
			winners : array(-3660306008073663669),
			months : 39,
			stars : -2911439369152749646,
			prize_description : 'SXTrdK8qYLgjRQx3',
			until_date : 92,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 9123018468082496271,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 68,
					h : 37,
					thumb : $client->photoSizeEmpty(
						type : 'nBbwJLkP6UIDCgpz',
					),
					video_duration : 60,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->messageMediaToDo(
			todo : $client->todoList(
				others_can_append : true,
				others_can_complete : true,
				title : $client->textWithEntities(
					text : 'ZC0wsYUyp7TXAbFI',
					entities : array(
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
				list : array(
					$client->todoItem(
						id : 14,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 9,
					completed_by : $client->peerUser(
						user_id : 1701577882393626977,
					),
					date : 48,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : 2453222152943996350,
				access_hash : -2888663554116557165,
			),
		),
	),
	subscription_period : 11,
	giveaway_post_id : 54,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 2255937622318710191,
		sticker : $client->documentEmpty(
			id : 7993921985068459143,
		),
		stars : 2560987054366070903,
		availability_remains : 28,
		availability_total : 97,
		availability_resale : 3528120362148472349,
		convert_stars : 400695978631528784,
		first_sale_date : 69,
		last_sale_date : 44,
		upgrade_stars : 8250652149466642007,
		resell_min_stars : 5446317706865994865,
		title : 'J709tDXPuhjzwlyS',
		released_by : $client->peerUser(
			user_id : -5148568899461178413,
		),
		per_user_total : 54,
		per_user_remains : 89,
		locked_until_date : 49,
		auction_slug : 'aKbGLrMXmdzcv4Tu',
		gifts_per_round : 91,
	),
	floodskip_number : 65,
	starref_commission_permille : 62,
	starref_peer : $client->peerUser(
		user_id : -129507511398356420,
	),
	starref_amount : $client->starsAmount(
		amount : 5926384996511131480,
		nanos : 88,
	),
	paid_messages : 70,
	premium_gift_months : 92,
	ads_proceeds_from_date : 2,
	ads_proceeds_to_date : 11,
);
```