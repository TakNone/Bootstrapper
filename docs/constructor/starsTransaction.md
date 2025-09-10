# starsTransaction

**Description** : *Represents a Telegram Stars transaction &raquo;*

**Layer** : 214

```tl
starsTransaction#13659eb0 flags:# refund:flags.3?true pending:flags.4?true failed:flags.6?true gift:flags.10?true reaction:flags.11?true subscription:flags.12?true stargift_upgrade:flags.18?true floodskip:flags.15?true business_transfer:flags.21?true stargift_resale:flags.22?true paid_message:flags.19?true posts_search:flags.24?true premium_gift:flags.20?true stargift_prepaid_upgrade:flags.25?true id:string amount:StarsAmount date:int peer:StarsTransactionPeer title:flags.0?string description:flags.1?string photo:flags.2?WebDocument transaction_date:flags.5?int transaction_url:flags.5?string bot_payload:flags.7?bytes msg_id:flags.8?int extended_media:flags.9?Vector<MessageMedia> subscription_period:flags.12?int giveaway_post_id:flags.13?int stargift:flags.14?StarGift floodskip_number:flags.15?int starref_commission_permille:flags.16?int starref_peer:flags.17?Peer starref_amount:flags.17?StarsAmount paid_messages:flags.19?int premium_gift_months:flags.20?int ads_proceeds_from_date:flags.23?int ads_proceeds_to_date:flags.23?int = StarsTransaction;
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
| **stargift_upgrade** | [`flags.18?true`](type/true) | NOTHING |
| **floodskip** | [`flags.15?true`](type/true) | NOTHING |
| **business_transfer** | [`flags.21?true`](type/true) | NOTHING |
| **stargift_resale** | [`flags.22?true`](type/true) | NOTHING |
| **paid_message** | [`flags.19?true`](type/true) | NOTHING |
| **posts_search** | [`flags.24?true`](type/true) | NOTHING |
| **premium_gift** | [`flags.20?true`](type/true) | NOTHING |
| **stargift_prepaid_upgrade** | [`flags.25?true`](type/true) | NOTHING |
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
	stargift_upgrade : true,
	floodskip : true,
	business_transfer : true,
	stargift_resale : true,
	paid_message : true,
	posts_search : true,
	premium_gift : true,
	stargift_prepaid_upgrade : true,
	id : 'ErKpu9tOocqZ4Rsh',
	amount : $client->starsAmount(
		amount : -7002144538459926618,
		nanos : 94,
	),
	date : 10,
	peer : $client->starsTransactionPeerUnsupported(),
	title : '3KLkwhzq5W71yZJ8',
	description : 'm85cQAgM7IBuz9EW',
	photo : $client->webDocument(
		url : 'https://docs.liveproto.dev',
		access_hash : -1650001615035061230,
		size : 70,
		mime_type : 'G5u0zyHX4V6Q2jOo',
		attributes : array(
			$client->documentAttributeImageSize(
				w : 76,
				h : 35,
			),
			$client->documentAttributeAnimated(),
			$client->documentAttributeSticker(
				mask : true,
				alt : 'l9jkMagcmO7oUHL2',
				stickerset : $client->inputStickerSetEmpty(...),
				mask_coords : $client->maskCoords(...),
			),
			$client->documentAttributeVideo(
				round_message : true,
				supports_streaming : true,
				nosound : true,
				duration : 1660569.5830078125,
				w : 53,
				h : 47,
				preload_prefix_size : 86,
				video_start_ts : 26583.1884765625,
				video_codec : 'jCtQxzVUZidp0O9L',
			),
			$client->documentAttributeAudio(
				voice : true,
				duration : 39,
				title : 'NBkjWhfxRQl4Fpur',
				performer : 'AWLJZKIp1agYFVtB',
				waveform : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			$client->documentAttributeFilename(
				file_name : 'fBHWMS9d5jqnNUL6',
			),
			$client->documentAttributeHasStickers(),
			$client->documentAttributeCustomEmoji(
				free : true,
				text_color : true,
				alt : 'G7NXO8ahjpnkDQoE',
				stickerset : $client->inputStickerSetEmpty(...),
			),
		),
	),
	transaction_date : 19,
	transaction_url : 'https://docs.liveproto.dev',
	bot_payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	msg_id : 29,
	extended_media : array(
		$client->messageMediaEmpty(),
		$client->messageMediaPhoto(
			spoiler : true,
			photo : $client->photoEmpty(
				id : -4909458400676064263,
			),
			ttl_seconds : 40,
		),
		$client->messageMediaGeo(
			geo : $client->geoPointEmpty(),
		),
		$client->messageMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : '04KJLb9AWY2kcmFi',
			user_id : 7783501906616370537,
		),
		$client->messageMediaUnsupported(),
		$client->messageMediaDocument(
			nopremium : true,
			spoiler : true,
			video : true,
			round : true,
			voice : true,
			document : $client->documentEmpty(
				id : -7832384683551624967,
			),
			alt_documents : array(
				$client->documentEmpty(
					id : -7489647771286282586,
				),
				$client->document(
					id : -7477111462903610580,
					access_hash : 8792744914732583711,
					file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					date : 10,
					mime_type : 'XGZO7fHlJFpAtIqS',
					size : 2641948172872585664,
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
					dc_id : 67,
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
				id : -6070757501835891834,
			),
			video_timestamp : 3,
			ttl_seconds : 73,
		),
		$client->messageMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			manual : true,
			safe : true,
			webpage : $client->webPageEmpty(
				id : -8163836105763011068,
				url : 'https://docs.liveproto.dev',
			),
		),
		$client->messageMediaVenue(
			geo : $client->geoPointEmpty(),
			title : 'lMCwtyY0znDuQLvV',
			address : 'bsvCKjxQd2oT8SPH',
			provider : 'SPi4jEDdqty87FXp',
			venue_id : 'A3buKnX2Il7x4sGC',
			venue_type : '4c0nzxBRmd8parLH',
		),
		$client->messageMediaGame(
			game : $client->game(
				id : -8877004586844905453,
				access_hash : -7834499278671659999,
				short_name : '2niW8le1k0XNguIh',
				title : 'bJKi9tjSOQwWs8UM',
				description : 'fqQawA6Sr4BEmVp3',
				photo : $client->photoEmpty(...),
				document : $client->documentEmpty(...),
			),
		),
		$client->messageMediaInvoice(
			shipping_address_requested : true,
			test : true,
			title : '0DpwzAK27bPaijTE',
			description : 'fI0uZUDebiAEnC2a',
			photo : $client->webDocument(
				url : 'https://docs.liveproto.dev',
				access_hash : -8281782533268816627,
				size : 8,
				mime_type : 'c3XOGI87sqE1QbH2',
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
			receipt_msg_id : 15,
			currency : 'v3JBLHuwS5nCmbx6',
			total_amount : -3699502239506300543,
			start_param : 'Y1fUT9cGSzDe76P8',
			extended_media : $client->messageExtendedMediaPreview(
				w : 2,
				h : 49,
				thumb : $client->photoSizeEmpty(...),
				video_duration : 100,
			),
		),
		$client->messageMediaGeoLive(
			geo : $client->geoPointEmpty(),
			heading : 19,
			period : 31,
			proximity_notification_radius : 56,
		),
		$client->messageMediaPoll(
			poll : $client->poll(
				id : -6973873439576999641,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 3,
				close_date : 20,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(...),
				),
				total_voters : 62,
				recent_voters : array(
					$client->peerUser(...),
					$client->peerChat(...),
					$client->peerChannel(...),
				),
				solution : 'jBEsZ3MJ4ODeIUur',
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
			value : 92,
			emoticon : 'ojNZz51pQEvVDTFy',
		),
		$client->messageMediaStory(
			via_mention : true,
			peer : $client->peerUser(
				user_id : 4522332791436670046,
			),
			id : 33,
			story : $client->storyItemDeleted(
				id : 41,
			),
		),
		$client->messageMediaGiveaway(
			only_new_subscribers : true,
			winners_are_visible : true,
			channels : array(1270704807804744959),
			countries_iso2 : array('7Z5GmJlFPTLSWOkH'),
			prize_description : 'uMBY7myAFQgPKIoO',
			quantity : 94,
			months : 83,
			stars : -3010441594575602995,
			until_date : 80,
		),
		$client->messageMediaGiveawayResults(
			only_new_subscribers : true,
			refunded : true,
			channel_id : -5686266071035499382,
			additional_peers_count : 21,
			launch_msg_id : 99,
			winners_count : 34,
			unclaimed_count : 69,
			winners : array(-8361810213133628822),
			months : 64,
			stars : -8357085029843045085,
			prize_description : 'oPs87YM3vZkuDyfx',
			until_date : 24,
		),
		$client->messageMediaPaidMedia(
			stars_amount : -7833530955916799857,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 93,
					h : 54,
					thumb : $client->photoSizeEmpty(...),
					video_duration : 99,
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
					id : 98,
					completed_by : -7801518972847516677,
					date : 63,
				),
			),
		),
	),
	subscription_period : 71,
	giveaway_post_id : 94,
	stargift : $client->starGift(
		limited : true,
		sold_out : true,
		birthday : true,
		can_upgrade : true,
		require_premium : true,
		limited_per_user : true,
		id : -1471396343046627305,
		sticker : $client->documentEmpty(
			id : -7648165418227607510,
		),
		stars : 6419794762290341653,
		availability_remains : 90,
		availability_total : 15,
		availability_resale : 4343103710987353473,
		convert_stars : -4143353623130105670,
		first_sale_date : 43,
		last_sale_date : 21,
		upgrade_stars : 1694294796265256894,
		resell_min_stars : 3939546151282316232,
		title : '1QW6UlXwdMh4FtD5',
		released_by : $client->peerUser(
			user_id : -2417813827936536177,
		),
		per_user_total : 22,
		per_user_remains : 68,
		locked_until_date : 100,
	),
	floodskip_number : 69,
	starref_commission_permille : 58,
	starref_peer : $client->peerUser(
		user_id : -3662293333222684712,
	),
	starref_amount : $client->starsAmount(
		amount : 2665229836892552385,
		nanos : 50,
	),
	paid_messages : 77,
	premium_gift_months : 56,
	ads_proceeds_from_date : 44,
	ads_proceeds_to_date : 77,
);
```