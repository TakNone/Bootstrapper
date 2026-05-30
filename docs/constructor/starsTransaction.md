# starsTransaction

**Description** : *Represents a Telegram Stars or TON transaction &raquo;*

**Layer** : 222

```tl
starsTransaction#13659eb0 flags:# refund:flags.3?true pending:flags.4?true failed:flags.6?true gift:flags.10?true reaction:flags.11?true stargift_upgrade:flags.18?true business_transfer:flags.21?true stargift_resale:flags.22?true posts_search:flags.24?true stargift_prepaid_upgrade:flags.25?true stargift_drop_original_details:flags.26?true phonegroup_message:flags.27?true stargift_auction_bid:flags.28?true offer:flags.29?true id:string amount:StarsAmount date:int peer:StarsTransactionPeer title:flags.0?string description:flags.1?string photo:flags.2?WebDocument transaction_date:flags.5?int transaction_url:flags.5?string bot_payload:flags.7?bytes msg_id:flags.8?int extended_media:flags.9?Vector<MessageMedia> subscription_period:flags.12?int giveaway_post_id:flags.13?int stargift:flags.14?StarGift floodskip_number:flags.15?int starref_commission_permille:flags.16?int starref_peer:flags.17?Peer starref_amount:flags.17?StarsAmount paid_messages:flags.19?int premium_gift_months:flags.20?int ads_proceeds_from_date:flags.23?int ads_proceeds_to_date:flags.23?int = StarsTransaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **refund** | [`flags.3?true`](type/true) | Whether this transaction is a refund |
| **pending** | [`flags.4?true`](type/true) | The transaction is currently pending |
| **failed** | [`flags.6?true`](type/true) | This transaction has failed |
| **gift** | [`flags.10?true`](type/true) | This transaction was a gift from the user in peer.peer |
| **reaction** | [`flags.11?true`](type/true) | This transaction is a paid reaction » |
| **stargift_upgrade** | [`flags.18?true`](type/true) | This transaction pays for the upgrade of a gift to a collectible gift » |
| **business_transfer** | [`flags.21?true`](type/true) | This transaction transfers stars from the balance of a user account connected to a business bot, to the balance of the business bot, see here » for more info |
| **stargift_resale** | [`flags.22?true`](type/true) | This transaction is related to the resale of a collectible gift » |
| **posts_search** | [`flags.24?true`](type/true) | Represents payment for a paid global post search » |
| **stargift_prepaid_upgrade** | [`flags.25?true`](type/true) | Represents payment for a separate prepaid upgrade of a gift |
| **stargift_drop_original_details** | [`flags.26?true`](type/true) | NOTHING |
| **phonegroup_message** | [`flags.27?true`](type/true) | NOTHING |
| **stargift_auction_bid** | [`flags.28?true`](type/true) | NOTHING |
| **offer** | [`flags.29?true`](type/true) | NOTHING |
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
	stargift_upgrade : true,
	business_transfer : true,
	stargift_resale : true,
	posts_search : true,
	stargift_prepaid_upgrade : true,
	stargift_drop_original_details : true,
	phonegroup_message : true,
	stargift_auction_bid : true,
	offer : true,
	id : '7VBC53YfPEGwuUM4',
	amount : $client->starsAmount(
		amount : 7566914505920631023,
		nanos : 20,
	),
	date : 87,
	peer : $client->starsTransactionPeerUnsupported(),
	title : '9FvKMf26elr1ubYT',
	description : 'EkTDJPmKOBSv7t8w',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 782247213915407178,
		size : 94,
		mime_type : 'unbRFXB21soezYCa',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 72,
				h : 44,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'BvxyqMUFzwO8gNGr',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 74,
					x : 1967103.2998046875,
					y : -2018371.083984375,
					zoom : 1289295.310546875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1697943.22265625,
				w : 33,
				h : 63,
				preload_prefix_size : 48,
				video_start_ts : 636425.064453125,
				video_codec : 'p7eV2NnUs5HMw93Q',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 62,
				title : 'YycdwUC3BIe2qKns',
				performer : '1vKelj3U5phrxVTo',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'NVYJlbH0QuDvOg4W',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'DcXmMRIn3e8Z4LqQ',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 75,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 51,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : -9211519075110754854,
			),
			ttl_seconds : 51,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'WbwRe39a6cDUoAPr',
			user_id : 7624447207308526533,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : 7350758344802287132,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : 5194210068198449981,
				),
				$client->document(
					id : 3567313045771946293,
					access_hash : -913016532028060888,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 10,
					mime_type : 'SxXpJjyMTza9Vulh',
					size : 220109549856675720,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'kzm3gHE2s7TPSenM',
						),
						$client->photoSize(
							type : 'J8AeQVgC0jXHNORW',
							w : 68,
							h : 95,
							size : 56,
						),
						$client->photoCachedSize(
							type : 'C9yE7Kc5PhQUFMsZ',
							w : 48,
							h : 27,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'rlufH47ZjDSCcLGT',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'CPS9t7aIslE64rvm',
							w : 98,
							h : 54,
							sizes : array(27),
						),
						$client->photoPathSize(
							type : 'mrSAW82l4Vyx5Zfh',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '5puMP0Gk4HWbd1mn',
							w : 95,
							h : 11,
							size : 60,
							video_start_ts : 1172873.16796875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 2016590463612390746,
							background_colors : array(76),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -2476662202919212213,
							background_colors : array(43),
						),
					),
					dc_id : 0,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 94,
							h : 0,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '0EjqHX62gIoLWva3',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 220759.40234375,
							w : 79,
							h : 10,
							preload_prefix_size : 59,
							video_start_ts : -415855.1474609375,
							video_codec : 'a2KyW7LRdbvzkStB',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 10,
							title : 'Wqy4Oo8PUTD6LClX',
							performer : 'ewoSLUgjtPHkAM9b',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'O8L5BahdpxM3HluU',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'DZEyKSas3wP5WckI',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : -4959245843636868415,
			),
			video_timestamp : 33,
			ttl_seconds : 47,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : 1971318369162944346,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'EmpK7iVMv8XZIdyU',
			address : 'eQ3NDyCWzrnlxHVU',
			provider : '3fCp0qymtUkA1aMS',
			venue_id : 'qspKnML3GZmjYN2y',
			venue_type : 'Unbkv6iW5HS3wxaL',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -8906782055937585252,
				access_hash : 2008127113701920019,
				short_name : 'yHOCKc1g3vnLs7BW',
				title : 'SOGvF6McURmq4LCg',
				description : 'Qp0ECUAFrqjKJtHw',
				photo : $client->photoEmpty(
					id : -9115220471205493288,
				),
				document : $client->documentEmpty(
					id : 7308333919315190932,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'vli721WqXZTJjyfD',
			description : 'NyDURPsnL2oHSbX3',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 1671754082552737445,
				size : 77,
				mime_type : 'c81H9y07V2eTfSPd',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 96,
						h : 55,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'g36SoFzIwmtABb7O',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 402771.2607421875,
						w : 31,
						h : 97,
						preload_prefix_size : 67,
						video_start_ts : 1537398.8564453125,
						video_codec : 'xaF6gLeCWVJAD3Nm',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 3,
						title : '5KJsIo1xemcYaTQW',
						performer : 'ob5PqcZCvmAwifVB',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'lKM1fJsgRhoBjkc5',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'drVsoAh4309wKRmG',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 80,
			currency : 'iCsUDOoxneN4JPt9',
			total_amount : -7788702342011839167,
			start_param : 'TURtdqIPLy96Wpc0',
			extended_media : $client->messageExtendedMediaPreview(
				w : 24,
				h : 41,
				thumb : $client->photoSizeEmpty(
					type : 'GxWAuQEHU4v1OpgY',
				),
				video_duration : 22,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 28,
			period : 45,
			proximity_notification_radius : 64,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 4374334159959265890,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : '4DobtvkUYBPVdRcy',
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
				close_period : 39,
				close_date : 95,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 97,
					),
				),
				total_voters : 42,
				recent_voters : array(
					$client->peerUser(
						user_id : -9004290635658773043,
					),
					$client->peerChat(
						chat_id : 3128506255665840252,
					),
					$client->peerChannel(
						channel_id : 6441790398936528933,
					),
				),
				solution : 'Xtf9FrWvIEnb5s8O',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 69,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 94,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 12,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 79,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 89,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 39,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 21,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 95,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 85,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 72,
						language : '1hzyqTefk6bgDaQm',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 25,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 10,
						user_id : -2103111082668916211,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 67,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 53,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 88,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 30,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 60,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 84,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 22,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 24,
						document_id : 9213119444459293607,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 68,
					),
				),
			),
		),
		$client->messageMediaDice(
			value : 67,
			emoticon : 'gosXvAyFibkSWNeG',
			game_outcome : $client->messages->emojiGameOutcome(
				seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				stake_ton_amount : -8251879586317697998,
				ton_amount : 4055696508017447895,
			),
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 7151791079262945591,
			),
			id : 32,
			story : $client->storyItemDeleted(
				id : 10,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-6331421516612921071),
			countries_iso2 : array('fxHtjnLvmJp396Ry'),
			prize_description : '0crI7lOQkXgEHhNU',
			quantity : 54,
			months : 11,
			stars : -81248106939704218,
			until_date : 0,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : -6506973317277518824,
			additional_peers_count : 41,
			launch_msg_id : 77,
			winners_count : 1,
			unclaimed_count : 77,
			winners : array(-6953247814904951094),
			months : 1,
			stars : 1720299372705232243,
			prize_description : 'QAyC57nYpjXtGJHr',
			until_date : 54,
		),
		$client->messageMediaPaidMedia(
			stars_amount : -1353708106095846564,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 75,
					h : 45,
					thumb : $client->photoSizeEmpty(
						type : 'u7t109ajbdemZXzp',
					),
					video_duration : 52,
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
					text : 'gMQE7JPuAKWIa493',
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
						id : 94,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 31,
					completed_by : $client->peerUser(
						user_id : -5684208797429488786,
					),
					date : 44,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : -1959538723199707637,
				access_hash : -3477671366191100264,
			),
		),
	),
	subscription_period : 74,
	giveaway_post_id : 6,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 3581323145413356183,
		sticker : $client->documentEmpty(
			id : 6609260092112830820,
		),
		stars : -3905112498975921285,
		availability_remains : 7,
		availability_total : 73,
		availability_resale : -6589381019343426610,
		convert_stars : 4237836997973033822,
		first_sale_date : 29,
		last_sale_date : 70,
		upgrade_stars : 7438826477892055522,
		resell_min_stars : 3433338873477920029,
		title : 'EVmy49v0qDGJdch3',
		released_by : $client->peerUser(
			user_id : 5900461361796873662,
		),
		per_user_total : 73,
		per_user_remains : 36,
		locked_until_date : 43,
		auction_slug : 'EWrcxd2hK15moNnX',
		gifts_per_round : 65,
		auction_start_date : 60,
		upgrade_variants : 0,
		background : $client->starGiftBackground(
			center_color : 41,
			edge_color : 94,
			text_color : 64,
		),
	),
	floodskip_number : 85,
	starref_commission_permille : 4,
	starref_peer : $client->peerUser(
		user_id : 3586311846063954084,
	),
	starref_amount : $client->starsAmount(
		amount : -5736802157257419678,
		nanos : 90,
	),
	paid_messages : 12,
	premium_gift_months : 95,
	ads_proceeds_from_date : 28,
	ads_proceeds_to_date : 57,
);
```