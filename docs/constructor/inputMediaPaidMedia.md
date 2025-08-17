# inputMediaPaidMedia

**Description** : *Paid media, see here » for more info*

**Layer** : 211

```tl
inputMediaPaidMedia#c4103386 flags:# stars_amount:long extended_media:Vector<InputMedia> payload:flags.0?string = InputMedia;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>stars_amount</mark> | [`long`](type/long) | The price of the media in Telegram Stars |
| <mark>extended_media</mark> | [`Vector<InputMedia>`](type/InputMedia) | Photos or videos |
| **payload** | [`flags.0?string`](type/string) | Bots only, specifies a custom payload that will then be passed in updateBotPurchasedPaidMedia when a payment is made (this field will not be visible to the user) |

---

## Type

[InputMedia](type/InputMedia)

---

## Example

```php
$inputMedia = $client->inputMediaPaidMedia(
	stars_amount : 2395446342307147477,
	extended_media : array(
		$client->inputMediaEmpty(),
		$client->inputMediaUploadedPhoto(
			spoiler : true,
			file : $client->inputFile(
				id : 1530109310080070261,
				parts : 74,
				name : 'KTCLY4N5Sz1UtyuI',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : 4030558640008724187,
					access_hash : -4087867019900235306,
					file_reference : '?a?HLiveProto?*Je',
				),
			),
			ttl_seconds : 44,
		),
		$client->inputMediaPhoto(
			spoiler : true,
			id : $client->inputPhotoEmpty(),
			ttl_seconds : 1,
		),
		$client->inputMediaGeoPoint(
			geo_point : $client->inputGeoPointEmpty(),
		),
		$client->inputMediaContact(
			phone_number : '+1234567890',
			first_name : 'Tak',
			last_name : 'None',
			vcard : 'ty5q8bldSxeC2UZf',
		),
		$client->inputMediaUploadedDocument(
			nosound_video : true,
			force_file : true,
			spoiler : true,
			file : $client->inputFile(
				id : -718646153967308712,
				parts : 66,
				name : 'z0F6IyGC1kqBKe4v',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			thumb : $client->inputFile(
				id : 4128520485214845472,
				parts : 31,
				name : 'K8dcDJbYak94Xop2',
				md5_checksum : 'b362bee8a21feedcbd20d5b0bef421e4',
			),
			mime_type : 'XEkJAm1pqe5ilwus',
			attributes : array(
				$client->documentAttributeImageSize(
					w : 50,
					h : 72,
				),
				$client->documentAttributeAnimated(),
				$client->documentAttributeSticker(
					mask : true,
					alt : 'jVfSasrT5U8dFnz3',
					stickerset : $client->inputStickerSetEmpty(...),
					mask_coords : $client->maskCoords(...),
				),
				$client->documentAttributeVideo(
					round_message : true,
					supports_streaming : true,
					nosound : true,
					duration : -1264748.9130859375,
					w : 6,
					h : 40,
					preload_prefix_size : 49,
					video_start_ts : -1204085.62890625,
					video_codec : 'lGPJKjSO1eHuwWYX',
				),
				$client->documentAttributeAudio(
					voice : true,
					duration : 99,
					title : 'OcktDGnL381jRQAh',
					performer : 'SvzYW0xjBH78O9io',
					waveform : '???.LiveProtoe?A??',
				),
				$client->documentAttributeFilename(
					file_name : 'JxHj9KZcrCyMBfi7',
				),
				$client->documentAttributeHasStickers(),
				$client->documentAttributeCustomEmoji(
					free : true,
					text_color : true,
					alt : 'xSsRZ3ftpyYgBFm9',
					stickerset : $client->inputStickerSetEmpty(...),
				),
			),
			stickers : array(
				$client->inputDocumentEmpty(),
				$client->inputDocument(
					id : -9129959801097112312,
					access_hash : -752683021032580739,
					file_reference : '\\g??)LiveProto???(?',
				),
			),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 75,
			ttl_seconds : 85,
		),
		$client->inputMediaDocument(
			spoiler : true,
			id : $client->inputDocumentEmpty(),
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 22,
			ttl_seconds : 3,
			query : 'DeNQWflUXcY2Axw7',
		),
		$client->inputMediaVenue(
			geo_point : $client->inputGeoPointEmpty(),
			title : 'cn2Hg7rkZDMxKjT5',
			address : 'hREGCAXIpd4F8cH1',
			provider : 'C1suVWwG5qtF6Zk3',
			venue_id : 'gqlQtvaeUJfB68iM',
			venue_type : '0xtiPvBojg5DY3rT',
		),
		$client->inputMediaPhotoExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 17,
		),
		$client->inputMediaDocumentExternal(
			spoiler : true,
			url : 'https://docs.liveproto.dev',
			ttl_seconds : 67,
			video_cover : $client->inputPhotoEmpty(),
			video_timestamp : 62,
		),
		$client->inputMediaGame(
			id : $client->inputGameID(
				id : -8310331478008388364,
				access_hash : -7229821296000198657,
			),
		),
		$client->inputMediaInvoice(
			title : 'f9n7p3HByeRkPidv',
			description : 'zegMKPHGoiVFR2Cl',
			photo : $client->inputWebDocument(
				url : 'https://docs.liveproto.dev',
				size : 26,
				mime_type : 'lFKu1kVmpDbL2jz7',
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
			invoice : $client->invoice(
				test : true,
				name_requested : true,
				phone_requested : true,
				email_requested : true,
				shipping_address_requested : true,
				flexible : true,
				phone_to_provider : true,
				email_to_provider : true,
				recurring : true,
				currency : 'XBc0gP27txNyT4w1',
				prices : array(
					$client->labeledPrice(...),
				),
				max_tip_amount : -5998669689141309566,
				suggested_tip_amounts : array(3804399764129654249),
				terms_url : 'https://docs.liveproto.dev',
				subscription_period : 2,
			),
			payload : '??m?LiveProto?&?&?',
			provider : 'OcSe6aRdEKZom2wY',
			provider_data : $client->dataJSON(
				data : '7stZ3AGvQ2HyIdiO',
			),
			start_param : '5M9HyhBAce6UPTpC',
			extended_media : $client->inputMediaEmpty(),
		),
		$client->inputMediaGeoLive(
			stopped : true,
			geo_point : $client->inputGeoPointEmpty(),
			heading : 16,
			period : 16,
			proximity_notification_radius : 91,
		),
		$client->inputMediaPoll(
			poll : $client->poll(
				id : -3867775959209361796,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(...),
				answers : array(
					$client->pollAnswer(...),
				),
				close_period : 76,
				close_date : 65,
			),
			correct_answers : array('?9?wLiveProtoNPBP?'),
			solution : 'pSByMz17X2vcQuPm',
			solution_entities : array(
				$client->messageEntityUnknown(
					offset : 47,
					length : 51,
				),
				$client->messageEntityMention(
					offset : 92,
					length : 18,
				),
				$client->messageEntityHashtag(
					offset : 89,
					length : 8,
				),
				$client->messageEntityBotCommand(
					offset : 41,
					length : 99,
				),
				$client->messageEntityUrl(
					offset : 29,
					length : 84,
				),
				$client->messageEntityEmail(
					offset : 30,
					length : 63,
				),
				$client->messageEntityBold(
					offset : 97,
					length : 75,
				),
				$client->messageEntityItalic(
					offset : 27,
					length : 97,
				),
				$client->messageEntityCode(
					offset : 81,
					length : 99,
				),
				$client->messageEntityPre(
					offset : 5,
					length : 37,
					language : '3fnvDCQ9Ks2hyArp',
				),
				$client->messageEntityTextUrl(
					offset : 42,
					length : 70,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 41,
					length : 26,
					user_id : -1995162502485398169,
				),
				$client->inputMessageEntityMentionName(
					offset : 73,
					length : 64,
					user_id : $client->inputUserEmpty(...),
				),
				$client->messageEntityPhone(
					offset : 91,
					length : 85,
				),
				$client->messageEntityCashtag(
					offset : 54,
					length : 30,
				),
				$client->messageEntityUnderline(
					offset : 78,
					length : 55,
				),
				$client->messageEntityStrike(
					offset : 35,
					length : 69,
				),
				$client->messageEntityBankCard(
					offset : 14,
					length : 19,
				),
				$client->messageEntitySpoiler(
					offset : 65,
					length : 69,
				),
				$client->messageEntityCustomEmoji(
					offset : 48,
					length : 17,
					document_id : -2787366100519792196,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 17,
					length : 89,
				),
			),
		),
		$client->inputMediaDice(
			emoticon : 'Bt21UWSibmVaY4uR',
		),
		$client->inputMediaStory(
			peer : $client->inputPeerEmpty(),
			id : 88,
		),
		$client->inputMediaWebPage(
			force_large_media : true,
			force_small_media : true,
			optional : true,
			url : 'https://docs.liveproto.dev',
		),
		$client->inputMediaPaidMedia(
			stars_amount : 4868076133274753829,
			extended_media : array(
				$client->inputMediaEmpty(),
				$client->inputMediaUploadedPhoto(
					spoiler : true,
					file : $client->inputFile(...),
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					ttl_seconds : 7,
				),
				$client->inputMediaPhoto(
					spoiler : true,
					id : $client->inputPhotoEmpty(...),
					ttl_seconds : 43,
				),
				$client->inputMediaGeoPoint(
					geo_point : $client->inputGeoPointEmpty(...),
				),
				$client->inputMediaContact(
					phone_number : '+1234567890',
					first_name : 'Tak',
					last_name : 'None',
					vcard : 'gtr3I4ZG2K01Q6Hc',
				),
				$client->inputMediaUploadedDocument(
					nosound_video : true,
					force_file : true,
					spoiler : true,
					file : $client->inputFile(...),
					thumb : $client->inputFile(...),
					mime_type : 'un53W9IdCSvg4sjr',
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
					stickers : array(
						$client->inputDocumentEmpty(...),
						$client->inputDocument(...),
					),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 82,
					ttl_seconds : 36,
				),
				$client->inputMediaDocument(
					spoiler : true,
					id : $client->inputDocumentEmpty(...),
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 61,
					ttl_seconds : 97,
					query : 'rkgwAhSC1Y56zEWf',
				),
				$client->inputMediaVenue(
					geo_point : $client->inputGeoPointEmpty(...),
					title : 'HvgQCoGnWRkqB5Tb',
					address : '8nt2gsLkzJK14fOv',
					provider : 'TJvXgauwUi4QFlEe',
					venue_id : 'EzHIMdBR8PqQ70xK',
					venue_type : 'hfTuZ6q0QjwN9RFO',
				),
				$client->inputMediaPhotoExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 71,
				),
				$client->inputMediaDocumentExternal(
					spoiler : true,
					url : 'https://docs.liveproto.dev',
					ttl_seconds : 12,
					video_cover : $client->inputPhotoEmpty(...),
					video_timestamp : 12,
				),
				$client->inputMediaGame(
					id : $client->inputGameID(...),
				),
				$client->inputMediaInvoice(
					title : 'XK8POWVml960uAr2',
					description : 'plfng9Nd0Q6UzvkE',
					photo : $client->inputWebDocument(...),
					invoice : $client->invoice(...),
					payload : '?weLiveProto??%ط',
					provider : 'G4QmLZv37YSegN1W',
					provider_data : $client->dataJSON(...),
					start_param : 'QVXdMUpkCoPHmh1A',
					extended_media : $client->inputMediaEmpty(...),
				),
				$client->inputMediaGeoLive(
					stopped : true,
					geo_point : $client->inputGeoPointEmpty(...),
					heading : 7,
					period : 23,
					proximity_notification_radius : 24,
				),
				$client->inputMediaPoll(
					poll : $client->poll(...),
					correct_answers : array('???54LiveProto??4??'),
					solution : 'NwOKITZ3xBVpvRzu',
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
				$client->inputMediaDice(
					emoticon : 'alLhcQ16ZAg40TCW',
				),
				$client->inputMediaStory(
					peer : $client->inputPeerEmpty(...),
					id : 19,
				),
				$client->inputMediaWebPage(
					force_large_media : true,
					force_small_media : true,
					optional : true,
					url : 'https://docs.liveproto.dev',
				),
				$client->inputMediaPaidMedia(
					stars_amount : -3319211524757507171,
					extended_media : array(
						$client->inputMediaEmpty(...),
						$client->inputMediaUploadedPhoto(...),
						$client->inputMediaPhoto(...),
						$client->inputMediaGeoPoint(...),
						$client->inputMediaContact(...),
						$client->inputMediaUploadedDocument(...),
						$client->inputMediaDocument(...),
						$client->inputMediaVenue(...),
						$client->inputMediaPhotoExternal(...),
						$client->inputMediaDocumentExternal(...),
						$client->inputMediaGame(...),
						$client->inputMediaInvoice(...),
						$client->inputMediaGeoLive(...),
						$client->inputMediaPoll(...),
						$client->inputMediaDice(...),
						$client->inputMediaStory(...),
						$client->inputMediaWebPage(...),
						$client->inputMediaPaidMedia(...),
						$client->inputMediaTodo(...),
					),
					payload : 'KYsAPxn7LpyUwfbE',
				),
				$client->inputMediaTodo(
					todo : $client->todoList(...),
				),
			),
			payload : 'pnaZKDLl7JdYUBHe',
		),
		$client->inputMediaTodo(
			todo : $client->todoList(
				others_can_append : true,
				others_can_complete : true,
				title : $client->textWithEntities(...),
				list : array(
					$client->todoItem(...),
				),
			),
		),
	),
	payload : 'xY2DZVa0SMoCbse9',
);
```