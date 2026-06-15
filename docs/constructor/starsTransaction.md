# starsTransaction

**Description** : *Represents a Telegram Stars or TON transaction &raquo;*

**Layer** : 227

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
	id : 'sxMvWndPiOTbl3mD',
	amount : $client->starsAmount(
		amount : -3091256935023154499,
		nanos : 88,
	),
	date : 96,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'j2Xx07Ppd1U49Lmw',
	description : 'Ki0h9l4Hxu7Ryoza',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 5164553903761615851,
		size : 20,
		mime_type : 'zwMvs4UrSFQePpuR',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 27,
				h : 97,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'aJtdZVyQspNTb1kg',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 96,
					x : -822506.4287109375,
					y : -560281.7412109375,
					zoom : 1287636.232421875,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1909466.654296875,
				w : 17,
				h : 52,
				preload_prefix_size : 60,
				video_start_ts : -1755714.3349609375,
				video_codec : 'fgStmuNxayBplJ54',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 20,
				title : '3Xe69N5yFIkOcDJz',
				performer : 'APRxLXvcU8dH3CBJ',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'J4oU9LN8FlrhH7pm',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'aJ3gMN0nBvlpxTuw',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 96,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 98,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			live_photo : true,
			photo : $client->photoEmpty(
				id : 2187851297900493781,
			),
			ttl_seconds : 49,
			video : $client->documentEmpty(
				id : 1798408742558190953,
			),
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'nTSLypqo3bQ4rBKJ',
			user_id : 8664672608578753511,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : -3472952972737190813,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -8314979687814023514,
				),
				$client->document(
					id : 2507731760995467299,
					access_hash : -4164040914727908008,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 19,
					mime_type : 'InAT5GSXYLFfwPtH',
					size : -1303372101679551839,
					thumbs : array(
						$client->photoSizeEmpty(
							type : '6ajmcV8v9KDCgJXq',
						),
						$client->photoSize(
							type : 'wm6yv45ZxVcfYCes',
							w : 89,
							h : 61,
							size : 48,
						),
						$client->photoCachedSize(
							type : 'QKXyWhmTM46qZfdl',
							w : 80,
							h : 47,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : 'MZCUaxbPE2YAcVTg',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'PEtgmircIkB73Sp4',
							w : 24,
							h : 96,
							sizes : array(70),
						),
						$client->photoPathSize(
							type : '6JdMkPyb980Yo4ra',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : 'QdAgN6vzXqtKVbuF',
							w : 13,
							h : 5,
							size : 13,
							video_start_ts : -1433431.15234375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2584090124891456961,
							background_colors : array(14),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : 7211212700712338234,
							background_colors : array(41),
						),
					),
					dc_id : 5,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 62,
							h : 9,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : '4MVBI3L7Zq9hJUez',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : 458511.7724609375,
							w : 62,
							h : 52,
							preload_prefix_size : 65,
							video_start_ts : 1298289.44140625,
							video_codec : 'uIB2wG0fmOvgArFZ',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 59,
							title : 'ZMYfpy3sSFvgG0kX',
							performer : 'KnNxYPu7Bzm58OGC',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'urge6dkytsZDfMoi',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'N84Ih0AZxa2RUBgP',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : 3911337854435196268,
			),
			video_timestamp : 49,
			ttl_seconds : 45,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : -5275140266034334069,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'ufNThAnWp8UVliY2',
			address : 'BpzP1GsJKwrLajf8',
			provider : '5GlQ9kv0njmUpfYz',
			venue_id : 'rx2uSz8PQ5Tf3Gvo',
			venue_type : 'ht5mvp7P8NdZUAgL',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -7037641756308652960,
				access_hash : -7349713485009578927,
				short_name : 'pkglFXzvHP2SZ4mr',
				title : 'uvmbgDCwf1TyXtn8',
				description : 'dMf6BYVsUok9vF1R',
				photo : $client->photoEmpty(
					id : -8483281913380746757,
				),
				document : $client->documentEmpty(
					id : -3817283165476633606,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : '7brgDAOHBmfLYsnT',
			description : 'YdR4TVGSC0lD9fmj',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 5705029976084215408,
				size : 45,
				mime_type : 'qncyiBW5V0kwZ3zP',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 88,
						h : 41,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'w5h07IWXZyOozeKk',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 917292.12109375,
						w : 98,
						h : 45,
						preload_prefix_size : 67,
						video_start_ts : -425708.6826171875,
						video_codec : '2eul63FWiJaCbXLU',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 39,
						title : 'Cw8mLxApGP7nlMOr',
						performer : 'rJjDxpOuRXa2BiAh',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'MrOcpQqFJXxv4k2a',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'KpI8R4xHwMzamYPB',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 79,
			currency : 'T5J0iStzI9j47VlB',
			total_amount : -7776241608870640951,
			start_param : '8ZYavFgxbm6e9HDr',
			extended_media : $client->messageExtendedMediaPreview(
				w : 23,
				h : 52,
				thumb : $client->photoSizeEmpty(
					type : 'ZApN3aSHoDJMWKvn',
				),
				video_duration : 22,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 29,
			period : 8,
			proximity_notification_radius : 7,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 4556005386774030156,
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
					text : 'KajXn28ko4ysSYJm',
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
						date : 77,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 52,
				close_date : 55,
				countries_iso2 : array('OZJBwUmjKCvPRSka'),
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
						voters : 47,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 44,
				recent_voters : array(
					$client->peerUser(
						user_id : 5811623414070298007,
					),
					$client->peerChat(
						chat_id : -2030151120731601226,
					),
					$client->peerChannel(
						channel_id : 5798668056261812549,
					),
				),
				solution : '0IwWHRPD85eUqBSg',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 80,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 55,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 83,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 51,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 59,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 64,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 86,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 54,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 63,
						language : 'QJ6pNZtCywkRUhGf',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 98,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 78,
						user_id : -6252218102154614525,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 45,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 8,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 34,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 20,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 13,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 14,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 2,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 2,
						document_id : -5205157478612445940,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 49,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 27,
						date : 10,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 12,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 33,
						old_text : '7lfRwEyKsiuDOIhU',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 65,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
			attached_media : $client->messageMediaEmpty(),
		),
		$client->messageMediaDice(
			value : 43,
			emoticon : 's1t8IJYoB2DWFuER',
			game_outcome : $client->messages->emojiGameOutcome(
				seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				stake_ton_amount : 1253627005152186811,
				ton_amount : 6414434484003047614,
			),
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 8063552363112900742,
			),
			id : 68,
			story : $client->storyItemDeleted(
				id : 60,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-8619711320481200945),
			countries_iso2 : array('htXuZy1Us9jVNRbH'),
			prize_description : 'KPwNR5nJiacLZrCB',
			quantity : 15,
			months : 54,
			stars : 3863155752063598902,
			until_date : 18,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 5428283039628644433,
			additional_peers_count : 33,
			launch_msg_id : 6,
			winners_count : 97,
			unclaimed_count : 16,
			winners : array(-8302783674504254028),
			months : 66,
			stars : -2787802239736299780,
			prize_description : 'bmsBUHFq48vh2Zwx',
			until_date : 40,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 4612770750739123852,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 56,
					h : 68,
					thumb : $client->photoSizeEmpty(
						type : 'VXl5rIB7uwoP3dqk',
					),
					video_duration : 35,
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
					text : 'PahJHj19m3NSgcWU',
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
						id : 44,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 45,
					completed_by : $client->peerUser(
						user_id : -6977362853580023945,
					),
					date : 14,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : -7060907228938665489,
				access_hash : 8542335481699181912,
			),
		),
	),
	subscription_period : 37,
	giveaway_post_id : 72,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : -1322868863737071011,
		sticker : $client->documentEmpty(
			id : 6306283419715816870,
		),
		stars : 1975065752697952092,
		availability_remains : 81,
		availability_total : 31,
		availability_resale : 6807592808053272932,
		convert_stars : -3581016876099098472,
		first_sale_date : 70,
		last_sale_date : 36,
		upgrade_stars : 6705251600943413896,
		resell_min_stars : -2857354752040486440,
		title : 'X835aIHBDGeynvLo',
		released_by : $client->peerUser(
			user_id : 7568874856547906207,
		),
		per_user_total : 92,
		per_user_remains : 89,
		locked_until_date : 92,
		auction_slug : 'ipC5x9swbtrVzI0K',
		gifts_per_round : 4,
		auction_start_date : 68,
		upgrade_variants : 15,
		background : $client->starGiftBackground(
			center_color : 21,
			edge_color : 53,
			text_color : 54,
		),
	),
	floodskip_number : 36,
	starref_commission_permille : 19,
	starref_peer : $client->peerUser(
		user_id : 3162625768522588893,
	),
	starref_amount : $client->starsAmount(
		amount : -1153783497483458981,
		nanos : 44,
	),
	paid_messages : 64,
	premium_gift_months : 95,
	ads_proceeds_from_date : 43,
	ads_proceeds_to_date : 88,
);
```