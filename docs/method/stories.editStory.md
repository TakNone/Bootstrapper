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
	id : 70,
	media : $client->inputMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -254206.6650390625,
				y : 1455951.1943359375,
				w : 1553620.5205078125,
				h : 1559069.021484375,
				rotation : -64671.27734375,
				radius : -1152574.64453125,
			),
			geo : $client->geoPointEmpty(),
			title : 'FR4mDHMLnKOz9vUQ',
			address : 'FwJ0Zm6VHlQjApGn',
			provider : 'otBWKSVfrsaC3eId',
			venue_id : '8BRuyJjx2K9XSN1b',
			venue_type : 'EcNrwdhZyHvGQtu1',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -472509.142578125,
				y : 961765.59765625,
				w : 1826974.66796875,
				h : -663278.0390625,
				rotation : -1746350.01953125,
				radius : -1936159.892578125,
			),
			query_id : 9013872031732847609,
			result_id : 'ctqVOKfAi3uBYzyQ',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1494300.8720703125,
				y : 1144789.1513671875,
				w : -280995.13671875,
				h : -1640627.8056640625,
				rotation : -428640.306640625,
				radius : 2077963.828125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'XD3rgzSEhjJeHiQf',
				state : 'QP7XzUvBNkHrlAwc',
				city : 'kx6WvXyzwLaUhVOP',
				street : 'Db1CXwOdYcNtT0Ry',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 68023.486328125,
				y : 733753.21875,
				w : -16842.953125,
				h : -282546.875,
				rotation : 429025.15234375,
				radius : -615483.4140625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 314658.556640625,
				y : -1511659.28125,
				w : -1419203.1259765625,
				h : 472062.123046875,
				rotation : -1307096.7861328125,
				radius : 14078.2939453125,
			),
			channel_id : 4205647565762016673,
			msg_id : 57,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1044035.6328125,
				y : 1773474.7978515625,
				w : -2028922.89453125,
				h : -948185.7783203125,
				rotation : -259542.6767578125,
				radius : -1016339.697265625,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 16,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 403626.57421875,
				y : -15451.953125,
				w : -192814.4970703125,
				h : -446939.6640625,
				rotation : 20858.921875,
				radius : 1496847.2294921875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -122249.943359375,
				y : -1548017.83203125,
				w : -47183.1298828125,
				h : 1025791.9306640625,
				rotation : -6739.4326171875,
				radius : -609335.8232421875,
			),
			emoji : 'PZvlwnKfuWI4TRdr',
			temperature_c : -1369379.44140625,
			color : 58,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1311751.4736328125,
				y : -701430.470703125,
				w : 1983551.2529296875,
				h : -1233494.408203125,
				rotation : 709872.583984375,
				radius : -1488593.8095703125,
			),
			slug : '5jyWaULn61EmNxqe',
		),
	),
	caption : '0ynzTVq4COkGdQIP',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 55,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 48,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 100,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 72,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 39,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 98,
			language : 'vR8jen9i0XM53BYw',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 29,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 57,
			user_id : 3511861733684037061,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 38,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 33,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 50,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 89,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 100,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 39,
			document_id : 7028158112969884006,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 16,
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
					user_id : -1092617012230493081,
					access_hash : 4880244124928712133,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 58,
					user_id : 2955333130956622362,
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
					user_id : -8435069518098021431,
					access_hash : -8878839349492726040,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 89,
					user_id : 1768066681740098744,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-1245325545564798772),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(8694844749918210466),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```