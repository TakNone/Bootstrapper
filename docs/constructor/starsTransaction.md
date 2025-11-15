# starsTransaction

**Description** : *Represents a Telegram Stars or TON transaction &raquo;*

**Layer** : 216

```tl
starsTransaction#13659eb0 flags:# refund:flags.3?true pending:flags.4?true failed:flags.6?true gift:flags.10?true reaction:flags.11?true subscription:flags.12?true stargift_upgrade:flags.18?true floodskip:flags.15?true business_transfer:flags.21?true stargift_resale:flags.22?true paid_message:flags.19?true posts_search:flags.24?true premium_gift:flags.20?true stargift_prepaid_upgrade:flags.25?true stargift_drop_original_details:flags.26?true id:string amount:StarsAmount date:int peer:StarsTransactionPeer title:flags.0?string description:flags.1?string photo:flags.2?WebDocument transaction_date:flags.5?int transaction_url:flags.5?string bot_payload:flags.7?bytes msg_id:flags.8?int extended_media:flags.9?Vector<MessageMedia> subscription_period:flags.12?int giveaway_post_id:flags.13?int stargift:flags.14?StarGift floodskip_number:flags.15?int starref_commission_permille:flags.16?int starref_peer:flags.17?Peer starref_amount:flags.17?StarsAmount paid_messages:flags.19?int premium_gift_months:flags.20?int ads_proceeds_from_date:flags.23?int ads_proceeds_to_date:flags.23?int = StarsTransaction;
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
	id : 'NCSWKJ82csRIVe6U',
	amount : $client->starsAmount(
		amount : -221005361555684992,
		nanos : 38,
	),
	date : 12,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'Tr1nGZjFQXfL7Uo3',
	description : 'grtk1Aj2IuFGUS3R',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : 2843863119626686648,
		size : 20,
		mime_type : 'OqG5KexiLpbSP6XW',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 99,
				h : 64,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '5LAjbgfZJ1RTWI7U',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1665686.1083984375,
				w : 26,
				h : 34,
				preload_prefix_size : 8,
				video_start_ts : 1813863.5009765625,
				video_codec : 'vJrZo3tgM4UQqDjy',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 20,
				title : 'js3OMX0uFaeZYEWG',
				performer : 'cYvqIDmQ5C8PTsOl',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'lJqOaKufLHDowIZd',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'KgA4yMJ5I3aekTin',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	transaction_date : 35,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 18,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : 5099886627142204909,
			),
			ttl_seconds : 64,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'waVKdH9jbUs7E82o',
			user_id : 2588151484193711933,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : -8616496090234429288,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -8168592037574943838,
				),
				$client->document(
					id : 9081945694493220717,
					access_hash : -2659165379431306008,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 29,
					mime_type : 'eSXvOCBQ06JVqrNH',
					size : -5454157291066000834,
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
					dc_id : 9,
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
				id : 690960703725633364,
			),
			video_timestamp : 94,
			ttl_seconds : 94,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : -8951860407911960430,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'puH7mV0SRFzEBOgo',
			address : '85UhzNTvBbM0somK',
			provider : 'TXDh3ftNV6cgJYQz',
			venue_id : 'FCLoKm5Rp4M6HwB8',
			venue_type : 'xeH6bikERNq9hLXo',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : 3326816271969085954,
				access_hash : 2010726567215253285,
				short_name : 'KX8DwyB0H6acl3sP',
				title : 'iW2qJrQBKL3DlCaP',
				description : 'iT1Bv30RqdALn4pS',
				photo : $client->photoEmpty(...),
				document : $client->documentEmpty(...),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'x3YlkXwPQ6oUsnju',
			description : 'xgKh04B3m6yDUbaL',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 6103671251007209916,
				size : 93,
				mime_type : 'AdPVyzEZ2N4mQLJ6',
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
			receipt_msg_id : 72,
			currency : 'FYJSXWyKpjBLn18C',
			total_amount : -5521260689558044026,
			start_param : 'B2JQZX4cWxI8pHtj',
			extended_media : $client->messageExtendedMediaPreview(
				w : 11,
				h : 99,
				thumb : $client->photoSizeEmpty(...),
				video_duration : 96,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 86,
			period : 93,
			proximity_notification_radius : 78,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : -5720667770030670258,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 61,
				close_date : 86,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 32,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'LVXw2larbWA06ktZ',
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
			value : 79,
			emoticon : '8muSsCJjYXcEiFRP',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 159848282504519133,
			),
			id : 0,
			story : $client->storyItemDeleted(
				id : 100,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(6415753587337788335),
			countries_iso2 : array('sCq3A7Jnc1WzRIjl'),
			prize_description : 'eZPRpOV6XcD4kLQd',
			quantity : 83,
			months : 25,
			stars : 4947528734774778430,
			until_date : 26,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 5603465708397872367,
			additional_peers_count : 0,
			launch_msg_id : 28,
			winners_count : 39,
			unclaimed_count : 65,
			winners : array(-5622987409552125736),
			months : 0,
			stars : -5125988803125453012,
			prize_description : 'vs0HtwNpIcb2Fqua',
			until_date : 43,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 8674415166326399562,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 67,
					h : 96,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 13,
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
					id : 10,
					completed_by : -6273652443034836059,
					date : 4,
				),
			),
		),
	),
	subscription_period : 11,
	giveaway_post_id : 33,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		peer_color_available : true,
		id : 4079076980300104130,
		sticker : $client->documentEmpty(
			id : 5327897757551157186,
		),
		stars : 2081555216837977331,
		availability_remains : 57,
		availability_total : 74,
		availability_resale : -7117953885433129448,
		convert_stars : 2842790987825853057,
		first_sale_date : 26,
		last_sale_date : 82,
		upgrade_stars : 7725841038561578285,
		resell_min_stars : -5868945379969253833,
		title : 'uMTSZgv9PaidtfKs',
		released_by : $client->peerUser(
			user_id : -442043592985603762,
		),
		per_user_total : 98,
		per_user_remains : 49,
		locked_until_date : 63,
	),
	floodskip_number : 8,
	starref_commission_permille : 83,
	starref_peer : $client->peerUser(
		user_id : 2356087314787303486,
	),
	starref_amount : $client->starsAmount(
		amount : -12157277674356232,
		nanos : 69,
	),
	paid_messages : 41,
	premium_gift_months : 4,
	ads_proceeds_from_date : 96,
	ads_proceeds_to_date : 20,
);
```