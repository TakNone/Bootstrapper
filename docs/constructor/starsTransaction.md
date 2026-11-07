# starsTransaction

**Description** : *Represents a Telegram Stars or TON transaction &raquo;*

**Layer** : 233

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
	id : '3jPVXDaIQfKn4bM1',
	amount : $client->starsAmount(
		amount : -8356214203155857652,
		nanos : 13,
	),
	date : 11,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'Q7F1zfsvW92qZCrX',
	description : 'ybzdEWfKc9X7T1Ar',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3881481167402719090,
		size : 43,
		mime_type : 'xZY3L0TOqcHpnGRX',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 89,
				h : 21,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'NrDsmXt5nSl2MQ8z',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 51,
					x : 1683245.392578125,
					y : -1228741.7978515625,
					zoom : 197064.388671875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : -1975181.515625,
				w : 1,
				h : 6,
				preload_prefix_size : 56,
				video_start_ts : 1189948.0126953125,
				video_codec : '4lUCOZpESewc0X1d',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 55,
				title : '98DIOoSWsdfF4Aul',
				performer : 'yXfV6x217iQsTmqc',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'J6pxHAT4QMFye0fd',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '12yLJmfDFdaOoKkT',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 82,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 65,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			live_photo : true,
			photo : $client->photoEmpty(
				id : 7103627588545211797,
			),
			ttl_seconds : 56,
			video : $client->documentEmpty(
				id : 7312311662117668506,
			),
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'DBHTpXYkUvsM7Sqf',
			user_id : -5188943552490407000,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : -8338551597973412062,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -951079394266876031,
				),
				$client->document(
					id : 1622620039717813340,
					access_hash : 5738804661410701993,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 46,
					mime_type : 'PJoHimjz5l1Fysdx',
					size : -6233194504127920790,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'Yun8G0spAwJcKb32',
						),
						$client->photoSize(
							type : 'rDHfCvMyLxawAUTK',
							w : 12,
							h : 69,
							size : 4,
						),
						$client->photoCachedSize(
							type : 'W3RjLB7zhrCgIOY0',
							w : 55,
							h : 19,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'l5c7ux0FrjBZnT4z',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'VKqvALDfxmTthHOg',
							w : 42,
							h : 42,
							sizes : array(6),
						),
						$client->photoPathSize(
							type : 'iIgwtSsT60HojEcP',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'yMGuiCVO8jJrcBth',
							w : 25,
							h : 76,
							size : 11,
							video_start_ts : 2030794.82421875,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -3358419406116842077,
							background_colors : array(5),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -6747235653190803851,
							background_colors : array(65),
						),
					),
					dc_id : 42,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 54,
							h : 95,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'k7jhEeg3MdNxnDpZ',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -934285.8115234375,
							w : 84,
							h : 63,
							preload_prefix_size : 4,
							video_start_ts : 377529.576171875,
							video_codec : 'Gd0kTNo6PLCR92ZJ',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 59,
							title : 'R28juFfJGhBYDckW',
							performer : 'rX2j0OxfweuapRVb',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'mrZqPcsljGVYyuAC',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'dAG6gaieblL5IoQ8',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : -2046267566879323682,
			),
			video_timestamp : 90,
			ttl_seconds : 33,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : -8297445424591618532,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'WmuZxUwVdoeOG1DJ',
			address : 'zC5NTLctfhbZdgxK',
			provider : 'fLUWjS7EbxAYHrI2',
			venue_id : 'X1jVROmGYrZvIFbc',
			venue_type : '3SJXkmRgvPjN9yns',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : 4871581704845454726,
				access_hash : -1996715826786871258,
				short_name : 'Bdmik4MOuzS3RjwE',
				title : 'DoCGmd6lwa2SbfTc',
				description : 'uLCJHFDfYrNEjUVe',
				photo : $client->photoEmpty(
					id : 8254274765789300779,
				),
				document : $client->documentEmpty(
					id : 735683181496846775,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : '0BX7nhfCpvbKHiVU',
			description : 'xZ6Sd2AU9vLOE3Kp',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 7926377951557895047,
				size : 52,
				mime_type : 'RG5ZJMNVW3CgeLiT',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 64,
						h : 80,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : '9MoQx8yN1OUfLBIz',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 1414126.8720703125,
						w : 50,
						h : 4,
						preload_prefix_size : 58,
						video_start_ts : -191788.6962890625,
						video_codec : 'w0CWc1LtrxoqgbVE',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 83,
						title : 'lmv3FOnUtI5TiS2Y',
						performer : 'bqe81JfIsmYTiDrc',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'KJejvGbNwPomHLnf',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'fSsi6nb2hjdYZWkJ',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 52,
			currency : 'oERJWS9QpclqMim0',
			total_amount : 5310281609226052983,
			start_param : '4zM6gviyOk5NwIVd',
			extended_media : $client->messageExtendedMediaPreview(
				w : 71,
				h : 32,
				thumb : $client->photoSizeEmpty(
					type : 'NWdCA9D0cy25lSpF',
				),
				video_duration : 30,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 74,
			period : 51,
			proximity_notification_radius : 46,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 4739550024583570978,
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
					text : 'kNMVh9tI1ALBoEuS',
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
						$client->messageEntityTonAddress(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 83,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 69,
				close_date : 15,
				countries_iso2 : array('7ZyLxAckg3VImHh9'),
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
						voters : 46,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 53,
				recent_voters : array(
					$client->peerUser(
						user_id : 1199972423776963627,
					),
					$client->peerChat(
						chat_id : 4404459125657256622,
					),
					$client->peerChannel(
						channel_id : 6130280558621802831,
					),
				),
				solution : 'B5yXHsSqCn7aVdJ9',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 54,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 55,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 8,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 38,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 8,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 35,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 100,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 37,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 2,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 22,
						language : 'jZfAaLKiYGqsNvRr',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 93,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 74,
						user_id : -2809261684426944883,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 85,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 17,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 56,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 92,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 30,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 14,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 43,
						document_id : 7619469591844490748,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 30,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 35,
						date : 21,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 42,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 97,
						old_text : 'DTdjYSOfNvzmclqk',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 31,
					),
					$client->messageEntityTonAddress(
						offset : 0,
						length : 51,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
			attached_media : $client->messageMediaEmpty(),
		),
		$client->messageMediaDice(
			value : 6,
			emoticon : 'Hk6ZBKXQGWrwtCVn',
			game_outcome : $client->messages->emojiGameOutcome(
				seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				stake_ton_amount : 3021830086737572253,
				ton_amount : 1170957205571068219,
			),
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 4039868918172190843,
			),
			id : 98,
			story : $client->storyItemDeleted(
				id : 36,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(7689137743550380969),
			countries_iso2 : array('m5csOyjpiBWG8Ctq'),
			prize_description : 'ElihZaAMwd5R0qrc',
			quantity : 22,
			months : 28,
			stars : 3333248380184007664,
			until_date : 70,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 3355210371256470465,
			additional_peers_count : 33,
			launch_msg_id : 83,
			winners_count : 19,
			unclaimed_count : 90,
			winners : array(-4832734021043074294),
			months : 61,
			stars : 277297019906767675,
			prize_description : 'IYHxOFV1ZGQENXdn',
			until_date : 65,
		),
		$client->messageMediaPaidMedia(
			stars_amount : -279487924776638616,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 57,
					h : 14,
					thumb : $client->photoSizeEmpty(
						type : 'J2twjHCIkVlFzfWp',
					),
					video_duration : 34,
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
					text : 'Gu8H0pSEwNbTjR52',
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
						$client->messageEntityTonAddress(...),
					),
				),
				list : array(
					$client->todoItem(
						id : 19,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 51,
					completed_by : $client->peerUser(
						user_id : -4971155377463926778,
					),
					date : 59,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : 6434880283802243979,
				access_hash : -7673899578903021959,
			),
		),
		$client->messageMediaWidget(
			is_copy : true,
			can_query : true,
			background_query : true,
			width : 85,
			height : 3,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			public_data : 'PtzKcaTd5uYnVRH4',
			public_data_hash : 1080584238616167675,
			chat_data : 'SYP5mQ6nyR0sU1Cg',
			widget_id : 6193288499247091275,
		),
	),
	subscription_period : 74,
	giveaway_post_id : 57,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 4217674062953727535,
		sticker : $client->documentEmpty(
			id : -8464395308885987414,
		),
		stars : -7122646044489515034,
		availability_remains : 96,
		availability_total : 48,
		availability_resale : 7022492851192620685,
		convert_stars : 8643799993895378610,
		first_sale_date : 77,
		last_sale_date : 39,
		upgrade_stars : 6723433948617427420,
		resell_min_stars : -2369324770552629801,
		title : 'INY8b2whdmfz3O5G',
		released_by : $client->peerUser(
			user_id : -2226429645019421496,
		),
		per_user_total : 88,
		per_user_remains : 63,
		locked_until_date : 86,
		auction_slug : 'zLVq0Qth53vBkxAZ',
		gifts_per_round : 34,
		auction_start_date : 76,
		upgrade_variants : 85,
		background : $client->starGiftBackground(
			center_color : 73,
			edge_color : 67,
			text_color : 84,
		),
	),
	floodskip_number : 32,
	starref_commission_permille : 66,
	starref_peer : $client->peerUser(
		user_id : 3826998145104371073,
	),
	starref_amount : $client->starsAmount(
		amount : -5459005862512116584,
		nanos : 24,
	),
	paid_messages : 50,
	premium_gift_months : 87,
	ads_proceeds_from_date : 73,
	ads_proceeds_to_date : 87,
);
```