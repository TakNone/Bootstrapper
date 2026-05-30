# starsTransaction

**Description** : *Represents a Telegram Stars or TON transaction &raquo;*

**Layer** : 225

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
	id : 'v6x2BHgnCGLeQX7q',
	amount : $client->starsAmount(
		amount : 7148479727827943349,
		nanos : 4,
	),
	date : 11,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'rJMDk0zGmR2CwF9j',
	description : 'PctY5OwIU83WEHf1',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3307344867748180878,
		size : 74,
		mime_type : 'bY5DrHQSosMZdvmg',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 84,
				h : 6,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'gW8MqN1C9JGPDsQU',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 62,
					x : 1192646.2744140625,
					y : -1568527.10546875,
					zoom : -1672069.83984375,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1645541.2783203125,
				w : 46,
				h : 23,
				preload_prefix_size : 68,
				video_start_ts : 1054806.4970703125,
				video_codec : 'QXufODqtR4Ypx6zo',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 74,
				title : 'Ca8UPf9DLX1uBVR5',
				performer : 'nMgIVw7oY35ZleuA',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : '8iCDZX0gjQIv5tcM',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'vfRpPJ5bF7oILKGO',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 49,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 20,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			live_photo : true,
			photo : $client->photoEmpty(
				id : 5747459988837765009,
			),
			ttl_seconds : 63,
			video : $client->documentEmpty(
				id : 6281714572379831996,
			),
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'AeNx90mVqXkPgU1C',
			user_id : -2039372887576558479,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : 3042519027894879909,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : 5423234223862889048,
				),
				$client->document(
					id : 7602493027243405096,
					access_hash : -7473566822187829714,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 59,
					mime_type : 'TXUd40pLj15BsDhP',
					size : -1139441790259446851,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'H3qNjJw0MgbDk8hG',
						),
						$client->photoSize(
							type : '0Yp9PiC2vFMek4Q1',
							w : 98,
							h : 57,
							size : 71,
						),
						$client->photoCachedSize(
							type : 'ANLmEn9HWgtCYvzh',
							w : 15,
							h : 77,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'RvpNAnYXyljCIJLs',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'RxQzp0VNdi9f1nPC',
							w : 23,
							h : 64,
							sizes : array(47),
						),
						$client->photoPathSize(
							type : 'Jpi4GrfLcdHlvm8A',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'zw71cVfhPoGQDn5j',
							w : 41,
							h : 79,
							size : 21,
							video_start_ts : 772261.1484375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 4784793721064315158,
							background_colors : array(52),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 4854763209941512750,
							background_colors : array(55),
						),
					),
					dc_id : 58,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 20,
							h : 57,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'pGMCOAKwZ9VU3zch',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 135690.44921875,
							w : 57,
							h : 15,
							preload_prefix_size : 54,
							video_start_ts : 802508.5224609375,
							video_codec : 'sHt5Xqbgy41c8u0U',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 92,
							title : 'qrHGFcDyUYfgNB7i',
							performer : 'ej5o9ZhnAWHKctVy',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'AfgYthRNX2byLDWJ',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : '2ATIRwl3jStbpWFK',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : 4941353108244440409,
			),
			video_timestamp : 78,
			ttl_seconds : 83,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : 6782204974008144048,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : '3Ak5fK6MRUVgiXPF',
			address : 'Fwkaf5XSVuyY23qH',
			provider : 'RE2FObM401aJzYIB',
			venue_id : 'cflnzHtRKOyhYbCA',
			venue_type : 'GagF8ohz46fJyHkT',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : 5862166605883562817,
				access_hash : 6460184892813351744,
				short_name : 'ruqs0z4Pa23KMHwO',
				title : '0vDH3O6kwFrzBnuA',
				description : 'SYD6ihZOvArXUtgK',
				photo : $client->photoEmpty(
					id : -2220306908275410980,
				),
				document : $client->documentEmpty(
					id : -6829961238272321018,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'DXV61zWIpjLfxqBG',
			description : 'FCDR3cfZXExj1UJM',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -3127178728910137368,
				size : 33,
				mime_type : 'uZS4TCmPEAK1VaeI',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 100,
						h : 30,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'WQqEtlMh3vnfjIUy',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1886220.765625,
						w : 58,
						h : 53,
						preload_prefix_size : 82,
						video_start_ts : -1576714.833984375,
						video_codec : 'EPdB0DLCgQ68M9KS',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 5,
						title : 'CdOho5FW0ycw1jn6',
						performer : 'mhWBx6ytJ4YgjXrL',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'yYBsDxgESMu1XvK4',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'Z9zTfMmEcjtIdFXi',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 66,
			currency : 'T2DM5W0OnmVjGrdP',
			total_amount : -5729135451199082772,
			start_param : 'Fi25JSwKLhqvcoxj',
			extended_media : $client->messageExtendedMediaPreview(
				w : 26,
				h : 91,
				thumb : $client->photoSizeEmpty(
					type : 'vDRIfeHpdh9kMNt5',
				),
				video_duration : 48,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 70,
			period : 43,
			proximity_notification_radius : 31,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : -3535525546214947578,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : 'jHhgmv9XLcM0sDrQ',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 66,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 39,
				close_date : 18,
				countries_iso2 : array('filh5oq7mtWV9uQG'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 49,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 34,
				recent_voters : array(
					$client->peerUser(
						user_id : -5846890555060641870,
					),
					$client->peerChat(
						chat_id : 8811102551621056032,
					),
					$client->peerChannel(
						channel_id : 1531726637051957299,
					),
				),
				solution : '7gHi64JycY0nprMs',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 22,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 42,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 89,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 81,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 19,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 86,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 50,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 72,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 71,
						language : 'ehliW8JpK5cdOQ2j',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 2,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 58,
						user_id : 5917068616777225149,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 70,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 64,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 53,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 77,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 76,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 48,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 84,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 35,
						document_id : -7327255228381391716,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 4,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 84,
						date : 31,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 35,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 48,
						old_text : 'asQ8Mcmqiypegzkj',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 93,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
			attached_media : $client->messageMediaEmpty(),
		),
		$client->messageMediaDice(
			value : 21,
			emoticon : 'VrnDmKQcLMsyfGau',
			game_outcome : $client->messages->emojiGameOutcome(
				seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				stake_ton_amount : 2022063703673934216,
				ton_amount : -3944869038289753695,
			),
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 3717461204379429738,
			),
			id : 44,
			story : $client->storyItemDeleted(
				id : 16,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-3420371423638039550),
			countries_iso2 : array('7AVMpq4gvB26k0Cr'),
			prize_description : 'VU2qJGxlvpQyc9Bn',
			quantity : 16,
			months : 97,
			stars : 3963492846970430133,
			until_date : 70,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 1603404264417696333,
			additional_peers_count : 4,
			launch_msg_id : 43,
			winners_count : 51,
			unclaimed_count : 2,
			winners : array(-633440945942591173),
			months : 66,
			stars : 3023465612358639449,
			prize_description : 'GeN3tiuwFIZqgz8l',
			until_date : 40,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 2839241946804955349,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 2,
					h : 10,
					thumb : $client->photoSizeEmpty(
						type : 'svfFMrSI3K5h89za',
					),
					video_duration : 6,
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
					text : 'gI0Act3dHnyELUe2',
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
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				list : array(
					$client->todoItem(
						id : 16,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 28,
					completed_by : $client->peerUser(
						user_id : -4916591228920444042,
					),
					date : 10,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : -5871074641252895844,
				access_hash : -6426494086337064699,
			),
		),
	),
	subscription_period : 41,
	giveaway_post_id : 69,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -5433283468725016244,
		sticker : $client->documentEmpty(
			id : -7005354661432916007,
		),
		stars : 8250871373704830690,
		availability_remains : 38,
		availability_total : 68,
		availability_resale : 1696659358983440302,
		convert_stars : -4128784913146630713,
		first_sale_date : 63,
		last_sale_date : 52,
		upgrade_stars : 5028312166269095351,
		resell_min_stars : 8103552422776221013,
		title : 'RgGPbu1LOe5fjykt',
		released_by : $client->peerUser(
			user_id : -7790153063793362790,
		),
		per_user_total : 19,
		per_user_remains : 75,
		locked_until_date : 81,
		auction_slug : 'N5FmIARUjkSsDOTW',
		gifts_per_round : 0,
		auction_start_date : 59,
		upgrade_variants : 89,
		background : $client->starGiftBackground(
			center_color : 99,
			edge_color : 55,
			text_color : 93,
		),
	),
	floodskip_number : 15,
	starref_commission_permille : 22,
	starref_peer : $client->peerUser(
		user_id : 8251741149229428438,
	),
	starref_amount : $client->starsAmount(
		amount : 879153518217745331,
		nanos : 27,
	),
	paid_messages : 83,
	premium_gift_months : 62,
	ads_proceeds_from_date : 67,
	ads_proceeds_to_date : 19,
);
```