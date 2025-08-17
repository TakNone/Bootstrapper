# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 211

```tl
stories.editStory#b583ba46 flags:# peer:InputPeer id:int media:flags.0?InputMedia media_areas:flags.3?Vector<MediaArea> caption:flags.1?string entities:flags.1?Vector<MessageEntity> privacy_rules:flags.2?Vector<InputPrivacyRule> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the story was posted |
| <mark>id</mark> | [`int`](type/int) | ID of story to edit |
| **media** | [`flags.0?InputMedia`](type/InputMedia) | If specified, replaces the story media |
| **media_areas** | [`flags.3?Vector<MediaArea>`](type/MediaArea) | Media areas associated to the story, see here » for more info |
| **caption** | [`flags.1?string`](type/string) | If specified, replaces the story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text in the caption, if allowed by the stories_entities client configuration parameter » |
| **privacy_rules** | [`flags.2?Vector<InputPrivacyRule>`](type/InputPrivacyRule) | If specified, alters the privacy settings » of the story, changing who can or can't view the story |

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
	peer : $client->inputPeerEmpty(),
	id : 24,
	media : $client->inputMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1408283.1220703125,
				y : -1892900.591796875,
				w : -210584.4287109375,
				h : 1000105.4765625,
				rotation : -349492.671875,
				radius : 547530.955078125,
			),
			geo : $client->geoPointEmpty(),
			title : 'LmWGTy4xINM21cnH',
			address : 'JPXeysh8tHNC6AfE',
			provider : 'IFzGV5vAp2rfZYRt',
			venue_id : 'grsbxMVv0BcWwAmz',
			venue_type : 'RgPhlKE4GI9zNvt6',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1671522.1962890625,
				y : 739994.1748046875,
				w : -996403.669921875,
				h : 414702.6826171875,
				rotation : 831426.615234375,
				radius : 1005743.5595703125,
			),
			query_id : -5116382192676097590,
			result_id : 'vchR4PTB7atDkwWb',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -949305.52734375,
				y : -1555714.6982421875,
				w : -1610164.8447265625,
				h : 1460111.265625,
				rotation : -1494476.5615234375,
				radius : 2053274.0556640625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'OW9S85ag27Pfbmsz',
				state : '1VjFOqCvKidlf3g7',
				city : 'VDqdJZ94TuMUHFQ7',
				street : 'UagMmW9rIedk5qBx',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1192404.310546875,
				y : 574364.1142578125,
				w : 1160815.4189453125,
				h : 1878308.517578125,
				rotation : -447895.2724609375,
				radius : -472304.2529296875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1573602.00390625,
				y : 1920617.966796875,
				w : 1714770.595703125,
				h : 88701.048828125,
				rotation : -1434222.802734375,
				radius : -1730732.734375,
			),
			channel_id : -5141270643673714572,
			msg_id : 0,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1422588.8291015625,
				y : 1656739.30078125,
				w : 1997322.037109375,
				h : -1591351.18359375,
				rotation : 850034.3642578125,
				radius : -1277047.99609375,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 60,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1892010.650390625,
				y : 1733834.3955078125,
				w : 1330205.1142578125,
				h : 1170955.4326171875,
				rotation : 962830.5888671875,
				radius : 228222.361328125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1466629.4619140625,
				y : 1717900.3515625,
				w : 650867.58203125,
				h : 1682424.818359375,
				rotation : -440582.931640625,
				radius : 1730789.6015625,
			),
			emoji : '06utk4TsqzbMJpna',
			temperature_c : -509717.125,
			color : 75,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -525423.939453125,
				y : 241794.5439453125,
				w : -88916.8408203125,
				h : -1738239.4111328125,
				rotation : -1765998.2568359375,
				radius : 1342857.8701171875,
			),
			slug : 'snufFgXwxShVrEjU',
		),
	),
	caption : 'iIPFxzoHYgqG4EDj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 51,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 22,
			length : 26,
		),
		$client->messageEntityHashtag(
			offset : 8,
			length : 71,
		),
		$client->messageEntityBotCommand(
			offset : 43,
			length : 46,
		),
		$client->messageEntityUrl(
			offset : 55,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 48,
			length : 25,
		),
		$client->messageEntityBold(
			offset : 69,
			length : 84,
		),
		$client->messageEntityItalic(
			offset : 63,
			length : 24,
		),
		$client->messageEntityCode(
			offset : 88,
			length : 11,
		),
		$client->messageEntityPre(
			offset : 24,
			length : 27,
			language : 'DCfHAZpWNUYd2oql',
		),
		$client->messageEntityTextUrl(
			offset : 98,
			length : 94,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 10,
			length : 61,
			user_id : -7030430759610670157,
		),
		$client->inputMessageEntityMentionName(
			offset : 43,
			length : 54,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 22,
			length : 83,
		),
		$client->messageEntityCashtag(
			offset : 32,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 19,
			length : 26,
		),
		$client->messageEntityStrike(
			offset : 33,
			length : 51,
		),
		$client->messageEntityBankCard(
			offset : 88,
			length : 89,
		),
		$client->messageEntitySpoiler(
			offset : 29,
			length : 70,
		),
		$client->messageEntityCustomEmoji(
			offset : 62,
			length : 88,
			document_id : -2310733905843377447,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 16,
			length : 19,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array(
				$client->inputUserEmpty(),
				$client->inputUserSelf(),
				$client->inputUser(
					user_id : -7394003901234835350,
					access_hash : -7999063364504087902,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 26,
					user_id : 7898268555411574125,
				),
			),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array(
				$client->inputUserEmpty(),
				$client->inputUserSelf(),
				$client->inputUser(
					user_id : 3163162576253126735,
					access_hash : -4071791764386603168,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 63,
					user_id : 966901807786235198,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-7049515871067687629),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(4237980678647589427),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```