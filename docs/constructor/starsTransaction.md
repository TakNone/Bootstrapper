# starsTransaction

**Description** : *Represents a Telegram Stars transaction &raquo;*

**Layer** : 211

```tl
starsTransaction#13659eb0 flags:# refund:flags.3?true pending:flags.4?true failed:flags.6?true gift:flags.10?true reaction:flags.11?true stargift_upgrade:flags.18?true business_transfer:flags.21?true stargift_resale:flags.22?true posts_search:flags.24?true id:string amount:StarsAmount date:int peer:StarsTransactionPeer title:flags.0?string description:flags.1?string photo:flags.2?WebDocument transaction_date:flags.5?int transaction_url:flags.5?string bot_payload:flags.7?bytes msg_id:flags.8?int extended_media:flags.9?Vector<MessageMedia> subscription_period:flags.12?int giveaway_post_id:flags.13?int stargift:flags.14?StarGift floodskip_number:flags.15?int starref_commission_permille:flags.16?int starref_peer:flags.17?Peer starref_amount:flags.17?StarsAmount paid_messages:flags.19?int premium_gift_months:flags.20?int ads_proceeds_from_date:flags.23?int ads_proceeds_to_date:flags.23?int = StarsTransaction;
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
| **stargift_upgrade** | [`flags.18?true`](type/true) | NOTHING |
| **business_transfer** | [`flags.21?true`](type/true) | NOTHING |
| **stargift_resale** | [`flags.22?true`](type/true) | NOTHING |
| **posts_search** | [`flags.24?true`](type/true) | NOTHING |
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
	stargift_upgrade : true,
	business_transfer : true,
	stargift_resale : true,
	posts_search : true,
	id : 'JDx5rfoZl8GdsYIc',
	amount : $client->starsAmount(
		amount : -5455650373337724753,
		nanos : 43,
	),
	date : 40,
	peer : $client->starsTransactionPeerUnsupported(),
	title : 'hwysUnG2R3EuSdjV',
	description : 'hFg5u9nBfSYkIyL4',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -3426081926128258035,
		size : 92,
		mime_type : 'V7Gsv5beng1y4hOL',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 82,
				h : 95,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : '2iKA6DXm4eUp5aWO',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 311873.4443359375,
				w : 27,
				h : 84,
				preload_prefix_size : 100,
				video_start_ts : -1527902.962890625,
				video_codec : 'YSsRwcOT1lmkoIBr',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 47,
				title : 'TEgv52SUb6KCZjG9',
				performer : 'UrI90h83fHS4v2cX',
				waveform : 'l@-?LiveProto?]?@W',
			),
			$client->documentAttributeFilename(
				file_name : 'H28UJoN5ZbWrLYnp',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : '5SDRyIvnZqJwM17h',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	transaction_date : 30,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : '??u}LiveProto?xsG',
	msg_id : 40,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : -769373638838318220,
			),
			ttl_seconds : 84,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : '0firW1J7XFbqQgB9',
			user_id : 219753113171088821,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : 4268705289162257533,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : 7924660356546646976,
				),
				$client->document(
					id : -5013969356453859456,
					access_hash : -1568098476894277615,
					file_reference : '????LiveProto??q	?',
					date : 96,
					mime_type : '9Vn3HSNtDrjm1lBz',
					size : -4848232806596453818,
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
					dc_id : 73,
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
				id : 8465870759172556569,
			),
			video_timestamp : 23,
			ttl_seconds : 57,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : 5209118524217656060,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : '4Bn1kuxLr0mY3HTF',
			address : 'SyZuAjUFgf6o8HYE',
			provider : 'fumRWKZxjClDHvOA',
			venue_id : 'oUHglJqMN5cW20vy',
			venue_type : 'libx5FQKazXHmW37',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : 8597405199828714252,
				access_hash : -958564352515147898,
				short_name : 'JtZ35EzwFMWhfebP',
				title : 'ofGY5UZVOvtCMrKq',
				description : 'B4I7FpkmMQurVa9x',
				photo : $client->photoEmpty(...),
				document : $client->documentEmpty(...),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : 'TYOz3el7kp8N4WgF',
			description : 'nm8FxrKGLk9HWl0P',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : 1939810393673098554,
				size : 99,
				mime_type : 'CqmZkbGi8lY6SDa4',
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
			receipt_msg_id : 67,
			currency : '3sAPV1cuJ2lCYdrm',
			total_amount : -2040969275704522509,
			start_param : 'Xu7OzFYDTrx5eLmJ',
			extended_media : $client->messageExtendedMediaPreview(
				w : 3,
				h : 83,
				thumb : $client->photoSizeEmpty(...),
				video_duration : 13,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 100,
			period : 65,
			proximity_notification_radius : 46,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : 5378780892497456990,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 49,
				close_date : 44,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 45,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'NmJnquOjd2I1fwCz',
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
			value : 91,
			emoticon : 'AphtkMsHiJGFTde8',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 9050465028321793277,
			),
			id : 59,
			story : $client->storyItemDeleted(
				id : 9,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(-6771101410286686414),
			countries_iso2 : array('XOz6fELbJDo3K0iT'),
			prize_description : 'rva2mwXM4T8GItxg',
			quantity : 33,
			months : 90,
			stars : -876496521130042727,
			until_date : 27,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : 6822308732032802696,
			additional_peers_count : 57,
			launch_msg_id : 67,
			winners_count : 21,
			unclaimed_count : 78,
			winners : array(3242526089742915621),
			months : 0,
			stars : -1637702212585932050,
			prize_description : 'WvLVFYNXDKMRhe0f',
			until_date : 36,
		),
		$client->messageMediaPaidMedia(
			stars_amount : 1288135610310366642,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 79,
					h : 46,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 95,
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
					id : 13,
					completed_by : 8629542663116373016,
					date : 35,
				),
			),
		),
	),
	subscription_period : 15,
	giveaway_post_id : 78,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		require_premium : true,
		limited_per_user : true,
		id : 3897917368389072930,
		sticker : $client->documentEmpty(
			id : 5078384386504035093,
		),
		stars : -686403140881927613,
		availability_remains : 19,
		availability_total : 70,
		availability_resale : -3555725504590776620,
		convert_stars : 9026780922021160454,
		first_sale_date : 82,
		last_sale_date : 55,
		upgrade_stars : 3199238622222568308,
		resell_min_stars : 708279710901731998,
		title : 'X2JxMlub5tRyQgiP',
		released_by : $client->peerUser(
			user_id : -760040713961131967,
		),
		per_user_total : 9,
		per_user_remains : 8,
	),
	floodskip_number : 36,
	starref_commission_permille : 81,
	starref_peer : $client->peerUser(
		user_id : 9083181713640911778,
	),
	starref_amount : $client->starsAmount(
		amount : -1219696888724854608,
		nanos : 58,
	),
	paid_messages : 15,
	premium_gift_months : 80,
	ads_proceeds_from_date : 19,
	ads_proceeds_to_date : 19,
);
```