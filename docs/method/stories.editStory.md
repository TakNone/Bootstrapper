# stories.editStory

**Description** : *Edit an uploaded story*

**Layer** : 214

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
	id : 46,
	media : $client->inputMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1463595.3564453125,
				y : -905593.7373046875,
				w : -231043.4140625,
				h : 272693.4150390625,
				rotation : -1577760.326171875,
				radius : 299563.021484375,
			),
			geo : $client->geoPointEmpty(),
			title : 'HzvLUNT3gjp40kiI',
			address : '8Nm9qn0YBd6cDkh4',
			provider : 'THArMJ7mG9nqy6oN',
			venue_id : '1sM4YwlVoWN2B9ar',
			venue_type : '3UMlDWGTjizAS7kc',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -359066.1630859375,
				y : 1119377.083984375,
				w : -1177066.0810546875,
				h : -539985.234375,
				rotation : -1440911.8076171875,
				radius : 2071260.5390625,
			),
			query_id : 7928152332484715177,
			result_id : 'VRWDsEkBIcwqGpX0',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 1542256.1689453125,
				y : 431308.16796875,
				w : -1229605.63671875,
				h : 704451.6220703125,
				rotation : -615071.6357421875,
				radius : 1019133.19140625,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : '6aHXqMxFDnQltv8c',
				state : 'SRU9Eg38KDiYOt5A',
				city : '0jbfJI2F5mzMD19W',
				street : 'cpoa7ZObv5Bsx8J1',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 358985.4697265625,
				y : -1629687.2314453125,
				w : -123553.7685546875,
				h : -1055712.3369140625,
				rotation : -1967261.0556640625,
				radius : -29574.8212890625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -375396.701171875,
				y : -1874985.494140625,
				w : 1247392.439453125,
				h : -2034580.5517578125,
				rotation : 701419.6171875,
				radius : -933057.7119140625,
			),
			channel_id : -4762605944231235120,
			msg_id : 90,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 2046664.0380859375,
				y : 1639632.5927734375,
				w : 1352773.1611328125,
				h : 936658.6748046875,
				rotation : 728972.15625,
				radius : 555148.0947265625,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 36,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1568608.63671875,
				y : -842224.853515625,
				w : -1698978.3642578125,
				h : 1048934.076171875,
				rotation : -83630.978515625,
				radius : -1955665.921875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -967053.779296875,
				y : -1234448.1708984375,
				w : 1506467.83203125,
				h : 711317.9912109375,
				rotation : -75981.8876953125,
				radius : -870792.6220703125,
			),
			emoji : 'rPdZNtHlI64CgmkU',
			temperature_c : 419386.71484375,
			color : 97,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1410270.990234375,
				y : -1460103.203125,
				w : -187275.400390625,
				h : -115086.55078125,
				rotation : -694731.8525390625,
				radius : 313315.5263671875,
			),
			slug : 'ZHATrlXj3a24etiO',
		),
	),
	caption : 'HNl8EDwr4gvUnOhY',
	entities : array(
		$client->messageEntityUnknown(
			offset : 76,
			length : 54,
		),
		$client->messageEntityMention(
			offset : 38,
			length : 56,
		),
		$client->messageEntityHashtag(
			offset : 98,
			length : 76,
		),
		$client->messageEntityBotCommand(
			offset : 13,
			length : 8,
		),
		$client->messageEntityUrl(
			offset : 29,
			length : 70,
		),
		$client->messageEntityEmail(
			offset : 44,
			length : 35,
		),
		$client->messageEntityBold(
			offset : 86,
			length : 6,
		),
		$client->messageEntityItalic(
			offset : 10,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 1,
			length : 89,
		),
		$client->messageEntityPre(
			offset : 48,
			length : 61,
			language : 'mNBnta4Eqw1rS9ei',
		),
		$client->messageEntityTextUrl(
			offset : 100,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 80,
			length : 2,
			user_id : -7319822238724846729,
		),
		$client->inputMessageEntityMentionName(
			offset : 84,
			length : 8,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 12,
			length : 91,
		),
		$client->messageEntityCashtag(
			offset : 27,
			length : 10,
		),
		$client->messageEntityUnderline(
			offset : 46,
			length : 52,
		),
		$client->messageEntityStrike(
			offset : 85,
			length : 40,
		),
		$client->messageEntityBankCard(
			offset : 49,
			length : 38,
		),
		$client->messageEntitySpoiler(
			offset : 40,
			length : 51,
		),
		$client->messageEntityCustomEmoji(
			offset : 22,
			length : 12,
			document_id : 6109826463908748444,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 78,
			length : 49,
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
					user_id : 1386031217309427722,
					access_hash : -853970402622801317,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 80,
					user_id : -7220173704365533991,
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
					user_id : -5909606665707313582,
					access_hash : -9197106471551761110,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 15,
					user_id : -90165898897641799,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(165980214305474232),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(5396297587897162352),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```