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
	id : 'qbsXxiAEmS53TjH4',
	amount : $client->starsAmount(
		amount : 2213057916009921772,
		nanos : 84,
	),
	date : 60,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'M2EzS6gO9aWmXkiZ',
	description : 'MJhyNuAgBs0b1a4L',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -912672996526979953,
		size : 94,
		mime_type : '1UNkAjdHbuPqQYzv',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 93,
				h : 65,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '1cum02zVE3qF5b6D',
				stickerset : $client->inputStickerSetEmpty(),
				mask_coords : $client->maskCoords(
					n : 72,
					x : -796721.0986328125,
					y : 1068258.7587890625,
					zoom : 9020.31640625,
				),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 16893.7021484375,
				w : 48,
				h : 11,
				preload_prefix_size : 94,
				video_start_ts : -979941.4140625,
				video_codec : 'ekVDYQ6xPcZCdMzw',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 44,
				title : 'Xlb12dKkqoV3HcwW',
				performer : 'lFPM3DBbXrNqgJOh',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'FmriIe5NqbKVGTcv',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '1teQ2U4LNPqyShgZ',
				stickerset : $client->inputStickerSetEmpty(),
			),
		),
	),
	transaction_date : 55,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 0,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			live_photo : true,
			photo : $client->photoEmpty(
				id : 3347404126081527435,
			),
			ttl_seconds : 20,
			video : $client->documentEmpty(
				id : 5898810649920648889,
			),
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'cLzFuxRky1TVrN45',
			user_id : -4481157947882183802,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : -4278847894877347765,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : 7222397714978843341,
				),
				$client->document(
					id : -6151882151230801241,
					access_hash : -6792487315827594188,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 94,
					mime_type : '796fPUkuL2VqAFWp',
					size : 8660108037800062720,
					thumbs : array(
						$client->photoSizeEmpty(
							type : 'pfIxe6DchJYHPXt4',
						),
						$client->photoSize(
							type : 'rozjVP63OFXkRHiv',
							w : 80,
							h : 37,
							size : 82,
						),
						$client->photoCachedSize(
							type : 'dQmt0awKEq8bj9PS',
							w : 95,
							h : 20,
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoStrippedSize(
							type : '5Qe6psPAlkCHfwGM',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->photoSizeProgressive(
							type : 'TADMtXcvsnmkxBiw',
							w : 9,
							h : 57,
							sizes : array(84),
						),
						$client->photoPathSize(
							type : 'g2nAWEF6rmNyb0aD',
							bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
					),
					video_thumbs : array(
						$client->videoSize(
							type : '3bhaAQZy94cBxVj8',
							w : 63,
							h : 29,
							size : 43,
							video_start_ts : 322728.474609375,
						),
						$client->videoSizeEmojiMarkup(
							emoji_id : -2209309920846530801,
							background_colors : array(77),
						),
						$client->videoSizeStickerMarkup(
							stickerset : $client->inputStickerSetEmpty(...),
							sticker_id : -1649568818645032144,
							background_colors : array(62),
						),
					),
					dc_id : 49,
					attributes : array(
						$client->documentAttributeImageSize(
							w : 15,
							h : 10,
						),
						$client->documentAttributeAnimated(),
						$client->documentAttributeSticker(
							mask : true,
							alt : 'qCDWJdtEh4y7uKv5',
							stickerset : $client->inputStickerSetEmpty(...),
							mask_coords : $client->maskCoords(...),
						),
						$client->documentAttributeVideo(
							round_message : true,
							supports_streaming : true,
							nosound : true,
							duration : -955344.1845703125,
							w : 53,
							h : 37,
							preload_prefix_size : 46,
							video_start_ts : -1455635.943359375,
							video_codec : 'iWQwGSN1V2fRgkhD',
						),
						$client->documentAttributeAudio(
							voice : true,
							duration : 63,
							title : 'nCF35GpuBMly81kE',
							performer : 'MZe24SXWR6ClQPtf',
							waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						),
						$client->documentAttributeFilename(
							file_name : 'rvC1cw7oba2iJEfH',
						),
						$client->documentAttributeHasStickers(),
						$client->documentAttributeCustomEmoji(
							free : true,
							text_color : true,
							alt : 'Ow0mZvISWX5gFh6U',
							stickerset : $client->inputStickerSetEmpty(...),
						),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : -8540430948411572414,
			),
			video_timestamp : 17,
			ttl_seconds : 79,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : 950942404377952907,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'qxPT6He7Yclr81MQ',
			address : 'pbCPHkYq39jVFKfu',
			provider : 'OzbMJjuWfIXk0Ln2',
			venue_id : '1GTbe2CSFnXIayjV',
			venue_type : 'n8f5cgA4OEPljrLY',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -847595161544168028,
				access_hash : 8187449461357577246,
				short_name : 'KMwCzV3sLQ4SnGth',
				title : 'T1cVtapdfuShZjoO',
				description : 'zXAqUDj1cslga5bh',
				photo : $client->photoEmpty(
					id : -8559631564159050362,
				),
				document : $client->documentEmpty(
					id : 7065309524652810642,
				),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'mgXhRFfIuJ1HbpeZ',
			description : 'RryvqPZjX4nB0672',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -7127729315303630979,
				size : 92,
				mime_type : 'TCvzGlOdnkjWDIP8',
				attributes : array(
					$client->documentAttributeImageSize(
						w : 25,
						h : 81,
					),
					$client->documentAttributeAnimated(),
					$client->documentAttributeSticker(
						mask : true,
						alt : 'tc709jNiHkAhXGUB',
						stickerset : $client->inputStickerSetEmpty(...),
						mask_coords : $client->maskCoords(...),
					),
					$client->documentAttributeVideo(
						round_message : true,
						supports_streaming : true,
						nosound : true,
						duration : 260886.8125,
						w : 9,
						h : 76,
						preload_prefix_size : 2,
						video_start_ts : -1527567.6572265625,
						video_codec : 'ce9dOsHSYPbXV1aU',
					),
					$client->documentAttributeAudio(
						voice : true,
						duration : 77,
						title : 'Wh9VUoMwS1FvcRJB',
						performer : 'DJiUKA7LlQ6OFtRq',
						waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					$client->documentAttributeFilename(
						file_name : 'kXDwqAjHGnIFeS8B',
					),
					$client->documentAttributeHasStickers(),
					$client->documentAttributeCustomEmoji(
						free : true,
						text_color : true,
						alt : 'gvX6cHiwl23OUedo',
						stickerset : $client->inputStickerSetEmpty(...),
					),
				),
			),
			receipt_msg_id : 4,
			currency : 'aPXdz5otgZ7hyrk2',
			total_amount : 1305806115940795072,
			start_param : '3bl6wIWyBkeuoEQ0',
			extended_media : $client->messageExtendedMediaPreview(
				w : 42,
				h : 3,
				thumb : $client->photoSizeEmpty(
					type : 'X109Vc2rgPpfIWNR',
				),
				video_duration : 34,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 53,
			period : 53,
			proximity_notification_radius : 10,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 8904598818988686947,
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
					text : 'tLlAqkHvboT0cfZd',
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
						date : 18,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 40,
				close_date : 16,
				countries_iso2 : array('NZalRFJig4f2IXc3'),
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
						voters : 74,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 38,
				recent_voters : array(
					$client->peerUser(
						user_id : -2053991913175184379,
					),
					$client->peerChat(
						chat_id : -4770603982551912395,
					),
					$client->peerChannel(
						channel_id : 6853085569821825941,
					),
				),
				solution : 'qAixkUPYcr3XCOJp',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 59,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 28,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 67,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 65,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 93,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 89,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 18,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 74,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 92,
						language : 'LRejWOl9cSqhPpmg',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 46,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : -6992617238666746449,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 29,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 3,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 65,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 23,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 5,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 20,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 91,
						document_id : 3100097702138132127,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 20,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 72,
						date : 28,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 21,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 61,
						old_text : '2MD7STxLebsnayVO',
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
			value : 98,
			emoticon : 'ZSBwKWP96X8nkA3o',
			game_outcome : $client->messages->emojiGameOutcome(
				seed : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				stake_ton_amount : -1049336206717928065,
				ton_amount : -3762482261113705047,
			),
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 7425463317311429770,
			),
			id : 50,
			story : $client->storyItemDeleted(
				id : 84,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-3530006235710992334),
			countries_iso2 : array('aJM0DABlOY1KV8Xe'),
			prize_description : 'YB7hX65SJyamE29w',
			quantity : 53,
			months : 41,
			stars : -823592325201248486,
			until_date : 32,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 5048857602567797681,
			additional_peers_count : 4,
			launch_msg_id : 98,
			winners_count : 24,
			unclaimed_count : 91,
			winners : array(-8599910440596698865),
			months : 15,
			stars : -3347190499423869381,
			prize_description : 'wIMiEjD6STXZ47le',
			until_date : 70,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 1699055876729063184,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 36,
					h : 60,
					thumb : $client->photoSizeEmpty(
						type : '1s5YxwdNpBH2eRTf',
					),
					video_duration : 65,
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
					text : 'WkeItmXbYV3p1HZz',
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
						id : 97,
						title : $client->textWithEntities(...),
					),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 4,
					completed_by : $client->peerUser(
						user_id : -4158438057988588961,
					),
					date : 76,
				),
			),
		),
		$client->messageMediaVideoStream(
			rtmp_stream : true,
			call : $client->inputGroupCall(
				id : 6441991503328751389,
				access_hash : 1181814745268716342,
			),
		),
	),
	subscription_period : 64,
	giveaway_post_id : 29,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		auction : true,
		id : 6370557822524758375,
		sticker : $client->documentEmpty(
			id : -8061310069035479638,
		),
		stars : 2716130521947788409,
		availability_remains : 2,
		availability_total : 64,
		availability_resale : 34125947687843441,
		convert_stars : -2985057919930146676,
		first_sale_date : 56,
		last_sale_date : 41,
		upgrade_stars : -6524315320681750836,
		resell_min_stars : -8069516963318122146,
		title : '1CAUiIMHEhXRsrQa',
		released_by : $client->peerUser(
			user_id : -8999547135347843872,
		),
		per_user_total : 59,
		per_user_remains : 73,
		locked_until_date : 41,
		auction_slug : 'IefMch5Zlgjv0VJd',
		gifts_per_round : 44,
		auction_start_date : 20,
		upgrade_variants : 67,
		background : $client->starGiftBackground(
			center_color : 95,
			edge_color : 100,
			text_color : 9,
		),
	),
	floodskip_number : 47,
	starref_commission_permille : 73,
	starref_peer : $client->peerUser(
		user_id : -3708951219143358793,
	),
	starref_amount : $client->starsAmount(
		amount : -3401969923612780359,
		nanos : 8,
	),
	paid_messages : 14,
	premium_gift_months : 79,
	ads_proceeds_from_date : 61,
	ads_proceeds_to_date : 99,
);
```