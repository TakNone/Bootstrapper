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
	id : 'z5CIKGV08H7RljiN',
	amount : $client->starsAmount(
		amount : -3957490988401150697,
		nanos : 25,
	),
	date : 90,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'vEp7NR8qmKbsGVIO',
	description : 'NxdIlX8zZwsBkrqP',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 1265025726693438656,
		size : 90,
		mime_type : 'T7i1v4Lws6VYPXgJ',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 22,
				h : 4,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '3XCtaoLBKMrW1HYR',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 90,
					x : 714135.6533203125,
					y : -103457.3583984375,
					zoom : 705607.669921875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1156972.4111328125,
				w : 83,
				h : 23,
				preload_prefix_size : 53,
				video_start_ts : 1774017.8310546875,
				video_codec : 'BUaqurYh16i2zTym',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 19,
				title : 'JDrqFtV3UwpECScu',
				performer : 'sO0zxnIgbyJaSfqD',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'BrC0WSZHhEMNYKGe',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'TYPVOb703ZgUluj8',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 61,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 51,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : 5581191767511641324,
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
			vcard : 'GNehICYTDW2cRjfA',
			user_id : 193577034372380761,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : 6857904459308676997,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -5880448624505207408,
				),
				$client->document(
					id : -621216816349259938,
					access_hash : -3577990888971699737,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 16,
					mime_type : '9BnOl5M1QvNKDucE',
					size : 74155697473777980,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'gzeVP0YO9FUGIWJ6',
						),
						$client->photoSize(
							type : 'DyikgKP9thsBIl83',
							w : 6,
							h : 35,
							size : 92,
						),
						$client->photoCachedSize(
							type : 'pIWMK4Jhmj8Ovg5E',
							w : 93,
							h : 66,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'yKSICsaZujGiz5fT',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'Hxp7wr2lPyCo8vI6',
							w : 65,
							h : 65,
							sizes : array(22),
						),
						$client->photoPathSize(
							type : '1WKM2bDaqHyfEhFO',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'OVilb47soTEvRMyN',
							w : 27,
							h : 30,
							size : 77,
							video_start_ts : -600765.1474609375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : 4137240462663647343,
							background_colors : array(81),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4804024212765427618,
							background_colors : array(42),
						),
					),
					dc_id : 84,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 82,
							h : 78,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'SbaGNIVfQg2yD6Om',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 35513.4560546875,
							w : 64,
							h : 88,
							preload_prefix_size : 72,
							video_start_ts : -179404.138671875,
							video_codec : 'LUT1DECcQy3t6pfF',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 88,
							title : 'ig7nQDxevy8at9Eb',
							performer : 'zNt4wncJeLb7HqXm',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'N93VOxA7DqhWyzbj',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'BPWnMKAqyIzf60wo',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : 511069703234375626,
			),
			video_timestamp : 77,
			ttl_seconds : 43,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : -9165277633974596390,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'sKwOEJ5fLoeybuMm',
			address : 'AjbvIQ3FaH9x0Tok',
			provider : 'ZWj1g7Fut4KGPX28',
			venue_id : '7VYdCAZu9o8bDUhq',
			venue_type : 'idz5pmXqafTVjIM2',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -8943456025832022696,
				access_hash : 8811490438471084673,
				short_name : 'Fi6pLPlwrcVqXTdU',
				title : 't4PJbZMNGHazxUwD',
				description : 'bIFoku0BasjHxnrV',
				photo : $client->photoEmpty(
					id : -1233283357348992130,
				),
				document : $client->documentEmpty(
					id : 5263439420743692230,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : '5V9e7YHFP0fROuDb',
			description : 'dZ2pIA5WV93LeJSP',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -3759753017330318212,
				size : 49,
				mime_type : 'e5q0pDPCuJswnh17',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 78,
						h : 25,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'j7QyU4HoSJfLwhnP',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -1598933.576171875,
						w : 99,
						h : 47,
						preload_prefix_size : 98,
						video_start_ts : 425838.7255859375,
						video_codec : 'uAP847r9UElGSa0y',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 41,
						title : 'eLgHzMUOw0FaZvVB',
						performer : 'Yr3CD7o0mJ6u2sAQ',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'uCsKGfNc0UJge6xl',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'V8TyhtYusRXD34I7',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 61,
			currency : '6xL2vJgyiVTo3XhI',
			total_amount : 2795145528828209965,
			start_param : 'lORUonJTY74rmHhg',
			extended_media : $client->messageExtendedMediaPreview(
				w : 97,
				h : 59,
				thumb : $client->photoSizeEmpty(
					type : 'Ak57nf2eJX6oxlGF',
				),
				video_duration : 40,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 89,
			period : 24,
			proximity_notification_radius : 96,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : -6645171665761296769,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : '3wxlTSrWJcyHsZj1',
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
				close_period : 34,
				close_date : 10,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 38,
					),
				),
				total_voters : 2,
				recent_voters : array(
					$client->peerUser(
						user_id : 7473971011558004084,
					),
					$client->peerChat(
						chat_id : 5511458605159213449,
					),
					$client->peerChannel(
						channel_id : -1536217122582633463,
					),
				),
				solution : 'Ra7gK1EYQGAxk8Jo',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 91,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 84,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 85,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 40,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 30,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 51,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 37,
						language : 'BuDZX7c2S5aNWjy0',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 60,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 19,
						user_id : 80475350708114031,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 56,
						user_id : $client->get_input_user(peer : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 31,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 18,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 77,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 67,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 21,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 10,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 11,
						document_id : 1831954299219878420,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 40,
					),
				),
			),
		),
		$client->messageMediaDice(
			value : 30,
			emoticon : 'HEPlGA2d7tMqemyV',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : -450265614525648402,
			),
			id : 47,
			story : $client->storyItemDeleted(
				id : 43,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-9115318500053561243),
			countries_iso2 : array('Iz4YjHF5mZXcg0u3'),
			prize_description : 'Nd9cklOHGWnoSLxr',
			quantity : 63,
			months : 96,
			stars : -6013366076934183257,
			until_date : 61,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 5571648122540081821,
			additional_peers_count : 57,
			launch_msg_id : 75,
			winners_count : 80,
			unclaimed_count : 81,
			winners : array(6917233964220835641),
			months : 96,
			stars : 515427373116668576,
			prize_description : '3SO8dKfxCEuiQwGJ',
			until_date : 17,
		),
		$client->messageMediaPaidMedia(
			stars_amount : -5747944009572409264,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 9,
					h : 8,
					thumb : $client->photoSizeEmpty(
						type : 'znHNdOcjv9TmxBMJ',
					),
					video_duration : 50,
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
					text : '4gZdWMOs8VnmHl6X',
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
						id : 36,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 4,
					completed_by : $client->peerUser(
						user_id : -655167247422059754,
					),
					date : 21,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : 5791604732554841170,
				access_hash : 1901293871369296672,
			),
		),
	),
	subscription_period : 29,
	giveaway_post_id : 47,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 194613970479272159,
		sticker : $client->documentEmpty(
			id : 5184457877251983234,
		),
		stars : 5769525549160916799,
		availability_remains : 4,
		availability_total : 6,
		availability_resale : -1484072033352212633,
		convert_stars : 5008367548881794985,
		first_sale_date : 12,
		last_sale_date : 47,
		upgrade_stars : 8447841956699023,
		resell_min_stars : -1918132214080478940,
		title : '6tnUFo5bgzMwuaTm',
		released_by : $client->peerUser(
			user_id : -7974515448676764140,
		),
		per_user_total : 39,
		per_user_remains : 29,
		locked_until_date : 74,
		auction_slug : 'j31bEcNT0Gzsh9BA',
		gifts_per_round : 20,
	),
	floodskip_number : 49,
	starref_commission_permille : 82,
	starref_peer : $client->peerUser(
		user_id : 6409848463604567533,
	),
	starref_amount : $client->starsAmount(
		amount : 2861634933163286715,
		nanos : 23,
	),
	paid_messages : 85,
	premium_gift_months : 58,
	ads_proceeds_from_date : 28,
	ads_proceeds_to_date : 46,
);
```