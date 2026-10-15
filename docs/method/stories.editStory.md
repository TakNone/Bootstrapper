# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 229

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
| **music** | [`flags.4?InputDocument`](type/InputDocument) | If set, the new audio track to play as background music for the story |

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
	id : 66,
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 596783.05078125,
				y : -263000.17578125,
				w : -367394.041015625,
				h : -483506.630859375,
				rotation : 821425.8994140625,
				radius : 1709499.453125,
			),
			geo : $client->geoPointEmpty(),
			title : 'RDbX7VYWiSqUpK0a',
			address : 'F5Y1bGg4d9IlHtqy',
			provider : 'AqUB7iHl3NuRy6je',
			venue_id : 'hoYniuzykdTCZmNt',
			venue_type : 'VotSjvMlPq3E7szR',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 645044.6181640625,
				y : 328150.568359375,
				w : 401014.904296875,
				h : -1091372.0087890625,
				rotation : -964424.919921875,
				radius : -1312935.0712890625,
			),
			query_id : -227704543510267711,
			result_id : '0hXp3u4LyYDVol2i',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -196742.6357421875,
				y : 1406272.3623046875,
				w : 401143.009765625,
				h : 1165996.1572265625,
				rotation : 1074025.95703125,
				radius : -411831.359375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'bXcprONuG3IS2lYw',
				state : 't0rsnpb9lLEOB72U',
				city : 'GCBsextuirjaFz1L',
				street : 'dieryYpkNq8XFuxU',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 905344.345703125,
				y : 1072531.6015625,
				w : -1213567.619140625,
				h : 490307.068359375,
				rotation : -1970004.0908203125,
				radius : -1447303.970703125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1233867.81640625,
				y : 1367590.8232421875,
				w : -1717134.322265625,
				h : 199355.3173828125,
				rotation : -349039.8974609375,
				radius : -471256.154296875,
			),
			channel_id : -4849668619254839394,
			msg_id : 58,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -899714.2578125,
				y : 1410236.150390625,
				w : 1468817.4697265625,
				h : 471622.736328125,
				rotation : 1458746.80078125,
				radius : 976500.6064453125,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 98,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1133353.03125,
				y : -1681276.0771484375,
				w : 1832622.93359375,
				h : -1436109.70703125,
				rotation : -11923.580078125,
				radius : -457729.232421875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -948882.626953125,
				y : 617334.583984375,
				w : 269777.7587890625,
				h : -1206703.8740234375,
				rotation : 1280119.3505859375,
				radius : 1615750.39453125,
			),
			emoji : 'NV2bs6r7weYAuzXO',
			temperature_c : -1778740.3779296875,
			color : 48,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 996863.0380859375,
				y : -574539.1689453125,
				w : 418863.5341796875,
				h : 1092641.0732421875,
				rotation : -1382422.3974609375,
				radius : -1644074.7744140625,
			),
			slug : '2S5jLBiZaycAQsKl',
		),
	),
	caption : 'WV1MtbXRLsr8cxaG',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 31,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 92,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 67,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 23,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 1,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 79,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 13,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 42,
			language : 'snP75mMhLwqUjyYi',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 67,
			user_id : -2871899968838128781,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 36,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 54,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 9,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 8,
			document_id : 6336385057957829991,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 66,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 18,
			date : 100,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 17,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 31,
			old_text : 'CgnGuD085cxvYt7a',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 26,
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
			chats : array(5364209111341358661),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(2125407423229533162),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	music : $client->inputDocumentEmpty(),
);
```