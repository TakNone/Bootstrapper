# starsTransaction

**Description** : *Represents a Telegram Stars transaction &raquo;*

**Layer** : 216

```tl
starsTransaction#13659eb0 flags:# refund:flags.3?true pending:flags.4?true failed:flags.6?true gift:flags.10?true reaction:flags.11?true subscription:flags.12?true floodskip:flags.15?true stargift_upgrade:flags.18?true paid_message:flags.19?true premium_gift:flags.20?true business_transfer:flags.21?true stargift_resale:flags.22?true posts_search:flags.24?true stargift_prepaid_upgrade:flags.25?true stargift_drop_original_details:flags.26?true id:string amount:StarsAmount date:int peer:StarsTransactionPeer title:flags.0?string description:flags.1?string photo:flags.2?WebDocument transaction_date:flags.5?int transaction_url:flags.5?string bot_payload:flags.7?bytes msg_id:flags.8?int extended_media:flags.9?Vector<MessageMedia> subscription_period:flags.12?int giveaway_post_id:flags.13?int stargift:flags.14?StarGift floodskip_number:flags.15?int starref_commission_permille:flags.16?int starref_peer:flags.17?Peer starref_amount:flags.17?StarsAmount paid_messages:flags.19?int premium_gift_months:flags.20?int ads_proceeds_from_date:flags.23?int ads_proceeds_to_date:flags.23?int = StarsTransaction;
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
| **floodskip** | [`flags.15?true`](type/true) | NOTHING |
| **stargift_upgrade** | [`flags.18?true`](type/true) | NOTHING |
| **paid_message** | [`flags.19?true`](type/true) | NOTHING |
| **premium_gift** | [`flags.20?true`](type/true) | NOTHING |
| **business_transfer** | [`flags.21?true`](type/true) | NOTHING |
| **stargift_resale** | [`flags.22?true`](type/true) | NOTHING |
| **posts_search** | [`flags.24?true`](type/true) | NOTHING |
| **stargift_prepaid_upgrade** | [`flags.25?true`](type/true) | NOTHING |
| **stargift_drop_original_details** | [`flags.26?true`](type/true) | NOTHING |
| <mark>id</mark> | [`string`](type/string) | Transaction ID |
| <mark>amount</mark> | [`StarsAmount`](type/StarsAmount) | NOTHING |
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
| **paid_messages** | [`flags.19?int`](type/int) | NOTHING |
| **premium_gift_months** | [`flags.20?int`](type/int) | NOTHING |
| **ads_proceeds_from_date** | [`flags.23?int`](type/int) | NOTHING |
| **ads_proceeds_to_date** | [`flags.23?int`](type/int) | NOTHING |

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
	floodskip : true,
	stargift_upgrade : true,
	paid_message : true,
	premium_gift : true,
	business_transfer : true,
	stargift_resale : true,
	posts_search : true,
	stargift_prepaid_upgrade : true,
	stargift_drop_original_details : true,
	id : 't3do1SO8jpvnyWwq',
	amount : $client->starsAmount(
		amount : -8219507405262056655,
		nanos : 34,
	),
	date : 49,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'bjAET6l8uO0DeVrX',
	description : 'spfoe7rR84kZq0au',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 2401249871473315753,
		size : 30,
		mime_type : 'dHO8iM2X4JKBRcCu',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 36,
				h : 35,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'IgCTcHvdiB1QP8y5',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1703616.39453125,
				w : 84,
				h : 5,
				preload_prefix_size : 31,
				video_start_ts : 1182308.3935546875,
				video_codec : '1BxkN3LGFIMQDKjC',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 46,
				title : 'XwPDTc0iQOCx1KlH',
				performer : 'Ca5S09VIedy6hs4X',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'jC97YkMgca81Pz6u',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'OmGF2pqZwLCSDKXs',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	transaction_date : 76,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 96,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : -5477984515643613010,
			),
			ttl_seconds : 3,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'H1mrvLFe8gPCiKq6',
			user_id : 8630030149273177149,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : 4748351387955212405,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -540766158881281016,
				),
				$client->document(
					id : -8071476908395695529,
					access_hash : 5809077751780288478,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 71,
					mime_type : 'OaECdZKruXUJ0zAx',
					size : 2181311583334236804,
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					video_thumbs : array(
						$client->videoSize(...),
						$client->videoSizeEmojiMarkup(...),
						$client->videoSizeStickerMarkup(...),
					),
					dc_id : 57,
					attributes : array(
						$client->documentAttributeImageSize(...),
						$client->documentAttributeAnimated(...),
						$client->documentAttributeSticker(...),
						$client->documentAttributeVideo(...),
						$client->documentAttributeAudio(...),
						$client->documentAttributeFilename(...),
						$client->documentAttributeHasStickers(...),
						$client->documentAttributeCustomEmoji(...),
					),
				),
			),
			video_cover : $client->photoEmpty(
				id : 3312021361340402062,
			),
			video_timestamp : 28,
			ttl_seconds : 73,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : 1485152928946888272,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'IEqLyzB1OCSPAV5F',
			address : 'eoP1aStZO6852rVJ',
			provider : 'fOBDXeRkPY3Tio8x',
			venue_id : 'nhTq3fdWU0L6lNb1',
			venue_type : 'ZBco1dWPSxsH93Tj',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -6948178864715748339,
				access_hash : -767274722523513552,
				short_name : '5r7R4IoNb2FWYzjT',
				title : 'SsW5jIiP0AzNoqD2',
				description : 'VXE7ySlZOR9hmWLJ',
				photo : $client->photoEmpty(...),
				document : $client->documentEmpty(...),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'elzf3KM5nLCoJg6R',
			description : 'WjKP1vkRaMBmgfJI',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -4803399996472717374,
				size : 54,
				mime_type : 'JjSsNDBq5rhHLYWZ',
				attributes : array(
					$client->documentAttributeImageSize(...),
					$client->documentAttributeAnimated(...),
					$client->documentAttributeSticker(...),
					$client->documentAttributeVideo(...),
					$client->documentAttributeAudio(...),
					$client->documentAttributeFilename(...),
					$client->documentAttributeHasStickers(...),
					$client->documentAttributeCustomEmoji(...),
				),
			),
			receipt_msg_id : 92,
			currency : 'xdkijuUs9NTrqVIt',
			total_amount : 7986766686699829013,
			start_param : 'vycLKxJRbCVIBMHh',
			extended_media : $client->messageExtendedMediaPreview(
				w : 33,
				h : 63,
				thumb : $client->photoSizeEmpty(...),
				video_duration : 25,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 9,
			period : 80,
			proximity_notification_radius : 60,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 2383019574283317436,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 66,
				close_date : 44,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 12,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'cQV9GWMUfuYJohB6',
				solution_entities : array(
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
		),
		$client->messageMediaDice(
			value : 68,
			emoticon : 'xU8VEBp6gskuQ4r7',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 4492620877676193473,
			),
			id : 89,
			story : $client->storyItemDeleted(
				id : 93,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-4020640426064183131),
			countries_iso2 : array('uM2Ir7ByxvoZG81f'),
			prize_description : 'MGHF9XcV1D76ge3k',
			quantity : 3,
			months : 75,
			stars : 927258014442843202,
			until_date : 13,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : -835046633544899552,
			additional_peers_count : 66,
			launch_msg_id : 50,
			winners_count : 66,
			unclaimed_count : 19,
			winners : array(-4459291328321417574),
			months : 32,
			stars : -4363634397526619601,
			prize_description : 'ciz0g2bZK36O8xYU',
			until_date : 93,
		),
		$client->messageMediaPaidMedia(
			stars_amount : -8067200050995367034,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 20,
					h : 70,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 31,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(...),
				),
			),
		),
		$client->messageMediaToDo(
			todo : $client->todoList(
				others_can_append : true,
				others_can_complete : true,
				title : $client->textWithEntities(...),
				list : array(
					$client->todoItem(...),
				),
			),
			completions : array(
				$client->todoCompletion(
					id : 92,
					completed_by : 6238376193908736165,
					date : 93,
				),
			),
		),
	),
	subscription_period : 51,
	giveaway_post_id : 70,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		id : -821461748743843142,
		sticker : $client->documentEmpty(
			id : 2120016721963009151,
		),
		stars : 392277203319924147,
		availability_remains : 18,
		availability_total : 20,
		availability_resale : -8532252759716318890,
		convert_stars : -8072281391234852123,
		first_sale_date : 48,
		last_sale_date : 81,
		upgrade_stars : 8749383129628571037,
		resell_min_stars : 4608857147171353028,
		title : 'gDyw4zPpTxWHemRj',
		released_by : $client->peerUser(
			user_id : 7214163014559326391,
		),
		per_user_total : 42,
		per_user_remains : 23,
		locked_until_date : 36,
	),
	floodskip_number : 87,
	starref_commission_permille : 69,
	starref_peer : $client->peerUser(
		user_id : -831476125037456861,
	),
	starref_amount : $client->starsAmount(
		amount : -4561357045792210524,
		nanos : 49,
	),
	paid_messages : 88,
	premium_gift_months : 88,
	ads_proceeds_from_date : 85,
	ads_proceeds_to_date : 16,
);
```