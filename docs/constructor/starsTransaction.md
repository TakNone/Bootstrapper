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
	id : 'OWaBlpguLNfyHYTk',
	amount : $client->starsAmount(
		amount : -6272493560095105471,
		nanos : 22,
	),
	date : 2,
	peer : $client->starsTransactionPeerUnsupported(),
	title : '5gAiQW6VvGHPZuom',
	description : 'hQ2F8Pg1Y79CH063',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -8915423789545714768,
		size : 92,
		mime_type : 'ME8xDBX6Y49bnjft',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 49,
				h : 0,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'MxSh813ti2vnarRs',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 83,
					x : 820954.2373046875,
					y : -1612336.5478515625,
					zoom : -1036206.92578125,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 618125.076171875,
				w : 86,
				h : 45,
				preload_prefix_size : 84,
				video_start_ts : -442082.8125,
				video_codec : 'VxMYDAmu3S7Ra2n1',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 96,
				title : 'VHOfTIvF08r21J6S',
				performer : 'Dhx9wqCJtWNRed3E',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'pwtlsAPzoucMK5rx',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '2SlzrC3DqVxGpi1h',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 54,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 31,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : -935646443028101580,
			),
			ttl_seconds : 29,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'hJ7AcF1ZHwEfrBGX',
			user_id : 7288054159920308657,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : -1473546085725326524,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -2117173591124617486,
				),
				$client->document(
					id : -4599819003204150532,
					access_hash : 7476162841838202212,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 9,
					mime_type : 'qT2rW8fA59UeOsz3',
					size : 911814333928463829,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'B4wgI06QdtNO8pR9',
						),
						$client->photoSize(
							type : 'vqn6Mtode98HRErD',
							w : 24,
							h : 6,
							size : 11,
						),
						$client->photoCachedSize(
							type : '7ZERNrdQFk19S5PB',
							w : 63,
							h : 3,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'p1qWMDoQwYuJ94mb',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'WNU6ilBRt2rw3Sen',
							w : 24,
							h : 97,
							sizes : array(3),
						),
						$client->photoPathSize(
							type : 'kNnCTH9Gd03ej2FU',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'dNyoLEcIij1gr5Jl',
							w : 80,
							h : 72,
							size : 67,
							video_start_ts : -394967.724609375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -1130611207589082039,
							background_colors : array(0),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 2977515195241155410,
							background_colors : array(70),
						),
					),
					dc_id : 19,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 42,
							h : 82,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'p7fa9ZuO6rwNvTQ5',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 1208084.427734375,
							w : 78,
							h : 46,
							preload_prefix_size : 67,
							video_start_ts : 1626032.2783203125,
							video_codec : 'EJ1lXu4y2YeqCG5i',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 45,
							title : '2LdkfYEQchZ1nyAi',
							performer : 'OvZQb1MR38qz2nIJ',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'AkRUgw0sQ2omDz5K',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'zd8KEibgaBMWN412',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : 6309960146663854216,
			),
			video_timestamp : 47,
			ttl_seconds : 72,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : 8521981593057680335,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'dyCskUQAblES0rzn',
			address : 'jAZzsfEa3RhpTqOL',
			provider : 'MRet3p6DsUQZCjXH',
			venue_id : 'BfqSjtnPwL5NhMbc',
			venue_type : 'hRyq9VuBYaX1txLH',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : 7869471742918262508,
				access_hash : -412826996581403222,
				short_name : 'f8cVXl05Cz3a6nOh',
				title : 'swzA52xLvoJ91itb',
				description : 'dwOHvnRYVkWAUq19',
				photo : $client->photoEmpty(
					id : -7926803288704572286,
				),
				document : $client->documentEmpty(
					id : 4448311438045367691,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'joa0wK27PY1WMNqt',
			description : 'CvwyJNHUtfoglATZ',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 2031415445747319798,
				size : 74,
				mime_type : 'k8TBhVEzZQUJPSgo',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 34,
						h : 26,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '9RNpK7lr2qWJFLPk',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1163026.876953125,
						w : 17,
						h : 82,
						preload_prefix_size : 21,
						video_start_ts : -668998.3994140625,
						video_codec : 'hl6joiNSc8nYXxpy',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 70,
						title : 'X42wElhieOAIRGF6',
						performer : 'JURc5ZHrdzk7BV9w',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'VJKbOdD4NUWvp1lB',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : '59ZNmz63JQtVfyMd',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 40,
			currency : 'pQbgMCo2DjXmAPlS',
			total_amount : 1679735299556764698,
			start_param : 'bMYgVGzf6xLmOkNH',
			extended_media : $client->messageExtendedMediaPreview(
				w : 73,
				h : 78,
				thumb : $client->photoSizeEmpty(
					type : 's6UZrdTXVKPWDOpc',
				),
				video_duration : 37,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 91,
			period : 48,
			proximity_notification_radius : 32,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 1165502511697806522,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'AqvMUbFPiKBksjRY',
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
				close_period : 3,
				close_date : 58,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 99,
					),
				),
				total_voters : 53,
				recent_voters : array(
					$client->peerUser(
						user_id : 6042788171719789573,
					),
					$client->peerChat(
						chat_id : -1349871807452653940,
					),
					$client->peerChannel(
						channel_id : 2049605612471371452,
					),
				),
				solution : 'w4vsqmPrxaoZbLK2',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 41,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 1,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 99,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 71,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 74,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 48,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 16,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 90,
						language : 'CdT46fJvLPb9HZwk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 20,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 51,
						user_id : -5671493443627852672,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 20,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 62,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 68,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 11,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 75,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 7,
						document_id : 8766244744231760289,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 36,
					),
				),
			),
		),
		$client->messageMediaDice(
			value : 78,
			emoticon : 'raGZYUJpx0BcAPDH',
			game_outcome : $client->messages->emojiGameOutcome(
				seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				stake_ton_amount : 6161061372718382299,
				ton_amount : -4623592104525584280,
			),
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : -5180580860619428361,
			),
			id : 63,
			story : $client->storyItemDeleted(
				id : 32,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-5555631731197148698),
			countries_iso2 : array('CjNWRIVEh6v2sKmQ'),
			prize_description : '7dJo4wAnCzxs5XbP',
			quantity : 60,
			months : 70,
			stars : -6007958734987496826,
			until_date : 91,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 4520149830734022387,
			additional_peers_count : 3,
			launch_msg_id : 39,
			winners_count : 31,
			unclaimed_count : 70,
			winners : array(-8391725814339033602),
			months : 67,
			stars : -5803413516425207818,
			prize_description : '9wkhXZbLp8R4i1tO',
			until_date : 28,
		),
		$client->messageMediaPaidMedia(
			stars_amount : -7322437311071449878,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 1,
					h : 33,
					thumb : $client->photoSizeEmpty(
						type : 'gwVLYRIQ8ZUpCHDs',
					),
					video_duration : 18,
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
					text : 'vBpO1rmF89SLze2K',
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
						id : 92,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 62,
					completed_by : $client->peerUser(
						user_id : 5710719285003718547,
					),
					date : 64,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : 855311779161591020,
				access_hash : -4584580296685095750,
			),
		),
	),
	subscription_period : 5,
	giveaway_post_id : 68,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 5308290209698333822,
		sticker : $client->documentEmpty(
			id : -3961607085816172245,
		),
		stars : -4708543993158834501,
		availability_remains : 96,
		availability_total : 81,
		availability_resale : -7383062871465169233,
		convert_stars : -935262894730092238,
		first_sale_date : 67,
		last_sale_date : 38,
		upgrade_stars : -8591845517518591718,
		resell_min_stars : 1952015163637431356,
		title : 'I0xeTmvdVBKWQqHl',
		released_by : $client->peerUser(
			user_id : -2387647724791800883,
		),
		per_user_total : 74,
		per_user_remains : 32,
		locked_until_date : 91,
		auction_slug : '3fn6vowjuc0RK58A',
		gifts_per_round : 81,
		auction_start_date : 94,
		upgrade_variants : 70,
		background : $client->starGiftBackground(
			center_color : 74,
			edge_color : 60,
			text_color : 14,
		),
	),
	floodskip_number : 10,
	starref_commission_permille : 10,
	starref_peer : $client->peerUser(
		user_id : 6570404718769255087,
	),
	starref_amount : $client->starsAmount(
		amount : -254207797670607797,
		nanos : 29,
	),
	paid_messages : 65,
	premium_gift_months : 52,
	ads_proceeds_from_date : 37,
	ads_proceeds_to_date : 99,
);
```