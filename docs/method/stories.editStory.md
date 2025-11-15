# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 216

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
	id : 42,
	media : $client->inputMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -981080.3779296875,
				y : 865112.0869140625,
				w : -1312217.525390625,
				h : -1415008.841796875,
				rotation : 1426284.4521484375,
				radius : -800468.4814453125,
			),
			geo : $client->geoPointEmpty(),
			title : 'wB0FqsZMAz3SgTH5',
			address : 'jUGMmhR7I62wEq9J',
			provider : 'CFwIlHU7msvXqb42',
			venue_id : '0BoUrTEQGmMivedj',
			venue_type : 'w64ReijGUAxIoWkL',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1434485.904296875,
				y : -535961.16015625,
				w : 751790.6982421875,
				h : 1429850.1025390625,
				rotation : 131018.7822265625,
				radius : -26471.2373046875,
			),
			query_id : 5051982984837512476,
			result_id : 'aQLs61vFkjMCbVAB',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -701343.177734375,
				y : -1810046.0205078125,
				w : -1629343.9580078125,
				h : 1191681.4013671875,
				rotation : -1703739.275390625,
				radius : 30853.568359375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'EnVSbdUQltWeHPuX',
				state : 'b7hQVNCmgtiek5Rq',
				city : 'XeKNjPrs3dEx1JmS',
				street : 'Q5Al7s3agwWBdiOV',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1953965.060546875,
				y : -762085.15625,
				w : -612623.259765625,
				h : 1452043.056640625,
				rotation : -15376.0263671875,
				radius : -441768.2802734375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 569657.3173828125,
				y : -1105430.1591796875,
				w : -515069.712890625,
				h : 878763.943359375,
				rotation : -553646.1142578125,
				radius : -2077760.1689453125,
			),
			channel_id : -6015120304996370050,
			msg_id : 12,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1125321.7001953125,
				y : 195849.1845703125,
				w : -1182616.6279296875,
				h : 1137014.3525390625,
				rotation : -1476307.076171875,
				radius : -2063121.525390625,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 2,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 1419922.1064453125,
				y : -1971276.0205078125,
				w : 1674740.1171875,
				h : 167516.35546875,
				rotation : -781320.6669921875,
				radius : -1380579.455078125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -150686.181640625,
				y : 315783.7919921875,
				w : -501268.919921875,
				h : 1123789.3330078125,
				rotation : -1425781.75,
				radius : -653770.9814453125,
			),
			emoji : 'T0qolJd9FW6NuMr1',
			temperature_c : -614803.2509765625,
			color : 59,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 532396.720703125,
				y : 708204.9345703125,
				w : 313437.8310546875,
				h : 1364470.1806640625,
				rotation : -1178888.818359375,
				radius : 1095274.955078125,
			),
			slug : 'PYzwUReQNk1DI8OS',
		),
	),
	caption : 'pzETXKigY8Bwyubc',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 61,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 10,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 22,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 73,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 95,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 69,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 60,
			language : 'jnJF0wtTLYu82pe3',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 89,
			user_id : 1733633273394809441,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 94,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 21,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 77,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 77,
			document_id : 731048763077927571,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 38,
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
					user_id : -2715391446137160087,
					access_hash : 3268077265601120871,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 22,
					user_id : -5346398089936756016,
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
					user_id : 926058662839243484,
					access_hash : -2222394447504973953,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 92,
					user_id : -4836147170390013733,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(4444995022705411061),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-1146960696968782349),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```