# starsTransaction

**Description** : *Represents a Telegram Stars or TON transaction &raquo;*

**Layer** : 229

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
| **stargift_drop_original_details** | [`flags.26?true`](type/true) | Represents payment for the removal of the starGiftAttributeOriginalDetails attribute from a gift, see here » for the full flow |
| **phonegroup_message** | [`flags.27?true`](type/true) | Represents payment for a paid text message sent during a group call or live video stream » |
| **stargift_auction_bid** | [`flags.28?true`](type/true) | Represents payment for placing a collectible gift auction bid » |
| **offer** | [`flags.29?true`](type/true) | Represents payment for a collectible gift purchase offer » |
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
	id : 'jfpe4C8FWiMuvt1w',
	amount : $client->starsAmount(
		amount : 766127203665387438,
		nanos : 13,
	),
	date : 86,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'xN4oHR5U2dptAW16',
	description : 'c1LQFNigXqI9dwSA',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -2634839849303525619,
		size : 22,
		mime_type : 'bS7yEGpl8kNnzC32',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 81,
				h : 95,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'b9v4rm7DkcCiNFGj',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 28,
					x : 1528295.2177734375,
					y : -868703.05078125,
					zoom : 421760.81640625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1998503.1435546875,
				w : 52,
				h : 31,
				preload_prefix_size : 87,
				video_start_ts : -555603.017578125,
				video_codec : 'EvwZ3K5S167hNcyd',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 37,
				title : '1stweVIkqfi5W8rv',
				performer : 'MIxCTU2ewvcBdmz9',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 've29jyhnRJxuiAVE',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '9qbLlAoEj6IsUvdi',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 31,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 55,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			live_photo : true,
			photo : $client->photoEmpty(
				id : 8305208670226143678,
			),
			ttl_seconds : 77,
			video : $client->documentEmpty(
				id : 6424414053258867857,
			),
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : '9buOZVLTFYetzPfS',
			user_id : 4005011822106015133,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : -6795174147851951692,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : 6137721060225190398,
				),
				$client->document(
					id : 6070924111298074460,
					access_hash : 3165429731853956000,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 64,
					mime_type : 'CuvqDBfhYVH6iZgc',
					size : -2907987865260679849,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '36zJHf8RBXsCxW9u',
						),
						$client->photoSize(
							type : '3m47uOXPTRNkc9LW',
							w : 57,
							h : 48,
							size : 83,
						),
						$client->photoCachedSize(
							type : 'axeizAs3UNSDPTdQ',
							w : 78,
							h : 85,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'sIybdqoK6ZpQ8t31',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'M0fm1t7bLBJXAkud',
							w : 93,
							h : 33,
							sizes : array(76),
						),
						$client->photoPathSize(
							type : 'DMk3Bw6CRgEVAxHI',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'k98uoJKFcESCqaZl',
							w : 72,
							h : 21,
							size : 7,
							video_start_ts : -466021.1669921875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2051686647751913404,
							background_colors : array(52),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -4962577869190933911,
							background_colors : array(75),
						),
					),
					dc_id : 93,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 0,
							h : 70,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'BWyq19oKetHlrjMc',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 913179.923828125,
							w : 8,
							h : 98,
							preload_prefix_size : 5,
							video_start_ts : -1040465.984375,
							video_codec : 'vDzSNV3igwFAnZos',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 33,
							title : 'Iz3U4ixaf8uMWstr',
							performer : 'J3CtxqyhXv0Mn1Qm',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'A579SiapXIe6xmbN',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'hzcMvKQRtVYdgF0P',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : -2111990504870578306,
			),
			video_timestamp : 93,
			ttl_seconds : 68,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : -1479136406353968424,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'Twxu2PKNoChcmlIz',
			address : 'k1IsL9JDjvPrZEFA',
			provider : 'CmvLaQDVr71PXJWx',
			venue_id : 'aVXpxeI65LBtv0oU',
			venue_type : 'G8suve62l0gnDKbR',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -4280182574032720372,
				access_hash : 3111948028168866131,
				short_name : '79OXW1AvPsqS6Hdr',
				title : 'K4bPGLraV9Dg0uHq',
				description : 'BGh2wYMRvnTQ8s9A',
				photo : $client->photoEmpty(
					id : -7727642118722241912,
				),
				document : $client->documentEmpty(
					id : -1499251828877090082,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : '6NTxBAPlCgJnprKo',
			description : 'GkmMw6ladU7ytT8E',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 4753670700317202180,
				size : 19,
				mime_type : 'wNzUKXlLj18kxgfe',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 26,
						h : 28,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'wX4ot6OVmjk1l5x0',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1132297.630859375,
						w : 48,
						h : 74,
						preload_prefix_size : 12,
						video_start_ts : 1910011.1767578125,
						video_codec : 'qBaViy3AwFzuQg21',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 39,
						title : '1pBoEnu5KSQmarHN',
						performer : 'W4YGBF32ydOop0PM',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'naEJTXKpg9hZCSvD',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'I6AViptO5w73ENsY',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 63,
			currency : 'jaEc52yg84oQRIx3',
			total_amount : 6568449465137028967,
			start_param : 'ZLfMDYUSmBwetkIQ',
			extended_media : $client->messageExtendedMediaPreview(
				w : 55,
				h : 88,
				thumb : $client->photoSizeEmpty(
					type : 'YsrdUQ5aCAjh7ZOo',
				),
				video_duration : 83,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 74,
			period : 30,
			proximity_notification_radius : 4,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 1991310236125967591,
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
					text : 't4xfv8HyA7wGD9Bc',
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
						date : 69,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 90,
				close_date : 76,
				countries_iso2 : array('SNjGTOmsAbYCey63'),
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
						voters : 32,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 99,
				recent_voters : array(
					$client->peerUser(
						user_id : 5699600543208601813,
					),
					$client->peerChat(
						chat_id : 6610776665222954516,
					),
					$client->peerChannel(
						channel_id : 6973175353107508710,
					),
				),
				solution : 'ZXOzRw3LprqPfTd9',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 16,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 55,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 28,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 74,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 44,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 2,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 15,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 78,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 72,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 3,
						language : '4AHPezl05N8IfCWU',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 53,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : 652451266686740762,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 60,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 67,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 33,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 97,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 90,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 12,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 15,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 92,
						document_id : 491926242177286200,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 8,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 60,
						date : 74,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 73,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 29,
						old_text : 'uQ3ma6MwAJLs1CyN',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 61,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
			attached_media : $client->messageMediaEmpty(),
		),
		$client->messageMediaDice(
			value : 64,
			emoticon : 'OcXwdVytpqM2YZuR',
			game_outcome : $client->messages->emojiGameOutcome(
				seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				stake_ton_amount : 3038813446311211485,
				ton_amount : -1245515306549517825,
			),
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 8091362919789803713,
			),
			id : 36,
			story : $client->storyItemDeleted(
				id : 73,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(2852603407369884088),
			countries_iso2 : array('lxWa3vUpK4roPnis'),
			prize_description : 'qz4Oh9xySLZ0YJkM',
			quantity : 95,
			months : 88,
			stars : -2186038323629198742,
			until_date : 12,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : -70037905174136560,
			additional_peers_count : 2,
			launch_msg_id : 27,
			winners_count : 7,
			unclaimed_count : 19,
			winners : array(-2399211120295994922),
			months : 2,
			stars : 8371809607748644574,
			prize_description : '0A9BtSYnGFD7jrW5',
			until_date : 68,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 4643308772984540037,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 42,
					h : 8,
					thumb : $client->photoSizeEmpty(
						type : 'gVGHxi73fEMq1zUT',
					),
					video_duration : 39,
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
					text : 'PIL8QcVrgxSZ16eM',
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
						id : 4,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 82,
					completed_by : $client->peerUser(
						user_id : 7511298262029591282,
					),
					date : 90,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : 5762955305434469261,
				access_hash : -4085850733946506527,
			),
		),
	),
	subscription_period : 52,
	giveaway_post_id : 94,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 6194112436784043634,
		sticker : $client->documentEmpty(
			id : -6047541576024303024,
		),
		stars : 7587757743252952107,
		availability_remains : 32,
		availability_total : 42,
		availability_resale : 5443906743219915499,
		convert_stars : -9217249323967277599,
		first_sale_date : 21,
		last_sale_date : 38,
		upgrade_stars : -7420102494834462023,
		resell_min_stars : -6385018669593374284,
		title : '5VGMkfqnaBpbyr9o',
		released_by : $client->peerUser(
			user_id : -3417015822885068462,
		),
		per_user_total : 58,
		per_user_remains : 19,
		locked_until_date : 6,
		auction_slug : '18WjK65hQYHNwiA9',
		gifts_per_round : 11,
		auction_start_date : 60,
		upgrade_variants : 61,
		background : $client->starGiftBackground(
			center_color : 75,
			edge_color : 71,
			text_color : 78,
		),
	),
	floodskip_number : 12,
	starref_commission_permille : 7,
	starref_peer : $client->peerUser(
		user_id : 6482050651851994256,
	),
	starref_amount : $client->starsAmount(
		amount : 9107872067284877146,
		nanos : 87,
	),
	paid_messages : 87,
	premium_gift_months : 87,
	ads_proceeds_from_date : 62,
	ads_proceeds_to_date : 47,
);
```