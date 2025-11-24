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
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'yaXLQWgjkrPzfAIU',
	amount : $client->starsAmount(
		amount : 3569603412447529107,
		nanos : 94,
	),
	date : 99,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'lY3GzDh1ITQZX4tu',
	description : 'xIcPUhqjv25BmGr1',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -958786812604643949,
		size : 85,
		mime_type : 'MfU2COGzjSIWxnJA',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 60,
				h : 69,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'HbJfnsV2jQgX95Bd',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 40,
					x : -1407091.0322265625,
					y : 1116578.4228515625,
					zoom : -703521.5048828125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 288006.455078125,
				w : 87,
				h : 17,
				preload_prefix_size : 88,
				video_start_ts : -851479.509765625,
				video_codec : 'p2fhrcMJoLYPKbTI',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 65,
				title : '8rK0JURYC4zEkHwO',
				performer : 'U5YJeAVbEMxt1OBc',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'YSRkLECFZh5usKbD',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'tJfQjDCL90XkFEKZ',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 57,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 91,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : 453885828934869406,
			),
			ttl_seconds : 54,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'D75fhbwIVulCnUBW',
			user_id : -7754409858275651719,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : 6210600463837967979,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : 1767886891504088903,
				),
				$client->document(
					id : -5869472516910258678,
					access_hash : 510143306269627342,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 94,
					mime_type : 'ZsMXJpdN24HqBLe8',
					size : 9220989452727642958,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'HYLXoj7BpK5R18h9',
						),
						$client->photoSize(
							type : 'bz8Yv0AenkqjmEiL',
							w : 18,
							h : 64,
							size : 51,
						),
						$client->photoCachedSize(
							type : 'ekc6rFOR87iJuxSq',
							w : 15,
							h : 26,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'o8X0LKH1ZVeEbYtN',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'w5GiS9K6BYMxAHgP',
							w : 33,
							h : 100,
							sizes : array(51),
						),
						$client->photoPathSize(
							type : 'E5mQqMSLw9lAHnIi',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'zf5V8vLd23MoHG9c',
							w : 29,
							h : 60,
							size : 39,
							video_start_ts : 215910.443359375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -7047913023594011070,
							background_colors : array(63),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -6087230304290972513,
							background_colors : array(55),
						),
					),
					dc_id : 14,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 1,
							h : 33,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'Rh6YvS1kP3xjw2pz',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -36447.50390625,
							w : 0,
							h : 8,
							preload_prefix_size : 93,
							video_start_ts : -294150.171875,
							video_codec : '7zc5RPfkS3ItyxK9',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 35,
							title : '53x7CgBcGmOtI2lD',
							performer : '70325pDVeJTIkUSj',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'pdIsEfr74ZwNcJHW',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'jq4PCnOwfh8zN5Zk',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : -7404178146738659062,
			),
			video_timestamp : 37,
			ttl_seconds : 38,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : -565821804693452857,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'zdlYXDesxjtgT3bO',
			address : 'fjX7QdlHgCMvNYI9',
			provider : 'Ty1ZKSMrq7dNLhRA',
			venue_id : 'IZ8am7r6letJEiDY',
			venue_type : 'NyH9fS6DR5ixU2GI',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -8855082728099578534,
				access_hash : -6676330065977664218,
				short_name : 'zJtlYGmweW3fDj12',
				title : 'zj3TDkNcEApBYU6w',
				description : 'On90qSh7BTuNC2pg',
				photo : $client->photoEmpty(
					id : -975735309931856596,
				),
				document : $client->documentEmpty(
					id : -6930491309961389816,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'G5ELqVmcnCivjyou',
			description : '8WckEbypiJ94OzKo',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 4282230464343877273,
				size : 41,
				mime_type : 'LusWM1TmaFYcw2C6',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 70,
						h : 89,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '3IGXgAFDeiSxtQ5k',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : -630250.7001953125,
						w : 44,
						h : 77,
						preload_prefix_size : 60,
						video_start_ts : 155634.08984375,
						video_codec : 'xDpVGqlvTemfPMgK',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 93,
						title : 'RV0mJ7TuPM5FANw1',
						performer : 'PT3Ign4h0LbwqcRl',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'MzC6d5kHb8uaysJ9',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'CkDbIe6Jny1jligp',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 43,
			currency : 'uEjWBVygns4H7I0e',
			total_amount : -262623487138807224,
			start_param : 'ZQSv9Fuxm6lYPHX0',
			extended_media : $client->messageExtendedMediaPreview(
				w : 79,
				h : 56,
				thumb : $client->photoSizeEmpty(
					type : 'yBjq0FaAeb9wE5LU',
				),
				video_duration : 72,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 76,
			period : 14,
			proximity_notification_radius : 36,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : -8305812726500023624,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'quC4Gy0gBFpsWkMd',
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
				close_period : 68,
				close_date : 79,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 8,
					),
				),
				total_voters : 69,
				recent_voters : array(
					$client->peerUser(
						user_id : 5569441231726121424,
					),
					$client->peerChat(
						chat_id : 7456933369770093963,
					),
					$client->peerChannel(
						channel_id : 3020681578374437470,
					),
				),
				solution : 'Q4jEgFiJNwxvylLc',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 84,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 25,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 54,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 18,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 94,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 79,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 86,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 40,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 91,
						language : 'nYChgSUtHaIiJdwz',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 22,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 63,
						user_id : 1853741029949500280,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 5,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 15,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 83,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 69,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 87,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 75,
						document_id : 316698482068840521,
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
			value : 76,
			emoticon : 'mMnqi7Oy96TWsVNw',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 6045208387568545408,
			),
			id : 56,
			story : $client->storyItemDeleted(
				id : 81,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-1900342980616745582),
			countries_iso2 : array('riKsxpwc1VM0Cahl'),
			prize_description : '7zWmdDRuC2JHTsgN',
			quantity : 76,
			months : 42,
			stars : 1925926460209713029,
			until_date : 45,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : -4703267637846826216,
			additional_peers_count : 80,
			launch_msg_id : 6,
			winners_count : 93,
			unclaimed_count : 0,
			winners : array(5042616910902930138),
			months : 1,
			stars : 4472442912431070374,
			prize_description : 'auz2eYH7s4QDEkgi',
			until_date : 38,
		),
		$client->messageMediaPaidMedia(
			stars_amount : -4770851726064712202,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 84,
					h : 69,
					thumb : $client->photoSizeEmpty(
						type : 'rMjmDTKyHqXYOwWA',
					),
					video_duration : 79,
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
					text : 'l4P0SruwbNUeHCz3',
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
						id : 84,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 12,
					completed_by : $client->peerUser(
						user_id : 5735360707717492645,
					),
					date : 75,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : -5098972060329014322,
				access_hash : -3448405209001658577,
			),
		),
	),
	subscription_period : 4,
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
		id : 7809427041773846598,
		sticker : $client->documentEmpty(
			id : 8787893337236801686,
		),
		stars : -8935871720845372919,
		availability_remains : 85,
		availability_total : 17,
		availability_resale : 1632352342959885983,
		convert_stars : 6110933210011691520,
		first_sale_date : 69,
		last_sale_date : 25,
		upgrade_stars : 6825711741655124587,
		resell_min_stars : 4852793087777283275,
		title : 'yTvHO1h5KBY7aefd',
		released_by : $client->peerUser(
			user_id : -4322748683983641687,
		),
		per_user_total : 59,
		per_user_remains : 63,
		locked_until_date : 48,
		auction_slug : 'NeSRmPtLgMzWCvHn',
		gifts_per_round : 60,
	),
	floodskip_number : 78,
	starref_commission_permille : 93,
	starref_peer : $client->peerUser(
		user_id : -2377647211131955715,
	),
	starref_amount : $client->starsAmount(
		amount : 1268763917522873327,
		nanos : 71,
	),
	paid_messages : 31,
	premium_gift_months : 12,
	ads_proceeds_from_date : 76,
	ads_proceeds_to_date : 68,
);
```