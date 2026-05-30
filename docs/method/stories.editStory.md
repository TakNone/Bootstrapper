# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 225

```tl
stories.editStory#2c63a72b flags:# peer:InputPeer id:int media:flags.0?InputMedia media_areas:flags.3?Vector<MediaArea> caption:flags.1?string entities:flags.1?Vector<MessageEntity> privacy_rules:flags.2?Vector<InputPrivacyRule> music:flags.4?InputDocument = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the story was posted |
| <mark>id</mark> | [`int`](type/int) | ID of story to edit |
| **media** | [`flags.0?InputMedia`](type/InputMedia) | If specified, replaces the story media |
| **media_areas** | [`flags.3?Vector<MediaArea>`](type/MediaArea) | Media areas associated to the story, see here » for more info |
| **caption** | [`flags.1?string`](type/string) | If specified, replaces the story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text in the caption, if allowed by the stories_entities client configuration parameter » |
| **privacy_rules** | [`flags.2?Vector<InputPrivacyRule>`](type/InputPrivacyRule) | If specified, alters the privacy settings » of the story, changing who can or can't view the story |
| **music** | [`flags.4?InputDocument`](type/InputDocument) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **STORY_NOT_MODIFIED** | `400` | The new story information you passed is equal to the previous story information, thus it wasn't modified |

---

## Example

```php
$updates = $client->stories->editStory(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 87,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -2013965.7587890625,
				y : -1079343.7060546875,
				w : -1909040.603515625,
				h : 1921303.26953125,
				rotation : 833473.603515625,
				radius : -346360.1552734375,
			),
			geo : $client->geoPointEmpty(),
			title : 'YZrBSpcPQno1FX8m',
			address : 'QdRk9z7oCWDp4UNi',
			provider : 'sB9Av5bMrxpEoDXq',
			venue_id : '7aPbcXNZ8BexRM4n',
			venue_type : '3m0BA4r16WlTOtCV',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1382349.48046875,
				y : 526023.7197265625,
				w : 457252.4560546875,
				h : -1586102.42578125,
				rotation : -65319.5673828125,
				radius : -1964437.5,
			),
			query_id : 3277217020242373864,
			result_id : 'OpegltFKAJ16nLms',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 460922.4521484375,
				y : 1051468.68359375,
				w : 587066.646484375,
				h : -694388.8994140625,
				rotation : -683633.4287109375,
				radius : -113012.34765625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'S7AMcrbsvRiw2ylX',
				state : 'S5u8ZFXb6CJpVLnA',
				city : '6w0db2XEvSxgcPWq',
				street : 'wg30ktH7dYhPsOoq',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1940657.4599609375,
				y : -1464660.5869140625,
				w : 478870.2841796875,
				h : 2018882.046875,
				rotation : -1079072.083984375,
				radius : 1896469.90234375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1469843.8173828125,
				y : -415075.1689453125,
				w : 778053.5322265625,
				h : 1273289.96875,
				rotation : -988700.365234375,
				radius : -1929721.646484375,
			),
			channel_id : 2417439822508044467,
			msg_id : 18,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1831752.6669921875,
				y : 1873864.021484375,
				w : 1997167.201171875,
				h : 1725198.4033203125,
				rotation : 1576161.0556640625,
				radius : 263022.66015625,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 50,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -537931.462890625,
				y : 478714.740234375,
				w : 343215.0888671875,
				h : 1266390.05859375,
				rotation : 684818.8984375,
				radius : -1646182.68359375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1186099.1015625,
				y : 1384064.6748046875,
				w : -782944.216796875,
				h : -1467185.671875,
				rotation : 1283707.1455078125,
				radius : -1676307.5703125,
			),
			emoji : 'RtIN4uJEaBSnkwlz',
			temperature_c : -371223.4697265625,
			color : 74,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -214780.4462890625,
				y : -370000.1171875,
				w : -627356.0908203125,
				h : 1814459.1982421875,
				rotation : 825096.4765625,
				radius : 1032253.99609375,
			),
			slug : 'dg8PA5F3XSltRypi',
		),
	),
	caption : 'jv6KTLER5hqpfOdD',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 41,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 77,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 59,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 19,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 31,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 69,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 72,
			language : 'wA6ErSbKu1dQ7qjp',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 55,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 57,
			user_id : 8784004898340493598,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 3,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 40,
			document_id : -9127350412164318680,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 2,
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
			date : 28,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 59,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 64,
			old_text : 'xYLX1hwqUrB6Tutl',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 70,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(854765341243813426),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(7112684150680113717),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	music : $client->inputDocumentEmpty(),
);
```