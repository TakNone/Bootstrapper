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
	id : 59,
	media : $client->inputMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -54564.705078125,
				y : 281020.4052734375,
				w : 1021653.26171875,
				h : 768058.5205078125,
				rotation : 1511956.79296875,
				radius : 330534.580078125,
			),
			geo : $client->geoPointEmpty(),
			title : 'tJHLdmwMCAjDeTVs',
			address : 'ITLhsXO3H0plkW7S',
			provider : 'R7EAiuIWxkcZeVwd',
			venue_id : 'QgmOsXyYjrzDuTpw',
			venue_type : 'N5g1yEptkVW4wXDe',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -947017.951171875,
				y : -525274.666015625,
				w : -447559.181640625,
				h : 460879.279296875,
				rotation : -1784636.6611328125,
				radius : 909879.048828125,
			),
			query_id : 3460508546206413628,
			result_id : 'qKHV6kD29lwaN3x4',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -547623.31640625,
				y : 1011634.58984375,
				w : 2083808.556640625,
				h : -1978697.1201171875,
				rotation : -156100.41796875,
				radius : -519897.1044921875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'gsyETBU4uoYJzlmR',
				state : 'B851XaWrpieZycb7',
				city : 'nvkOgHf3FdR9NZTj',
				street : 'ecBR1kMJAljWFdI8',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 246065.6611328125,
				y : 1960678.94921875,
				w : 642767.52734375,
				h : -1435045.154296875,
				rotation : -27633.458984375,
				radius : 221434.03515625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1974733.29296875,
				y : -1216369.5205078125,
				w : 1859017.8369140625,
				h : -463164.2763671875,
				rotation : -587611.419921875,
				radius : -159705.599609375,
			),
			channel_id : -523975401143897210,
			msg_id : 1,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1006669.33203125,
				y : 826154.84375,
				w : 1998466.27734375,
				h : 704718.7861328125,
				rotation : 1136168.755859375,
				radius : 881157.3369140625,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 72,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1011452.142578125,
				y : 1633935.27734375,
				w : -1054626.1865234375,
				h : 1168903.28125,
				rotation : -1817851.0869140625,
				radius : -749103.0615234375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 897277.0029296875,
				y : -188102.9619140625,
				w : -1601500.47265625,
				h : -277714.5751953125,
				rotation : 1661991.166015625,
				radius : 851986.3857421875,
			),
			emoji : 'DjFLJTnUlXteNuBh',
			temperature_c : -1868249.171875,
			color : 2,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -559519.67578125,
				y : 330644.1953125,
				w : 669477.9462890625,
				h : -1461330.3935546875,
				rotation : 2050260.228515625,
				radius : -1075299.404296875,
			),
			slug : '8y4O9MKeNZRQjkx0',
		),
	),
	caption : 'F81xlybczB3tnpeE',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 79,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 64,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 70,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 76,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 83,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 100,
			language : 'aBiJXTj2U7MtDQSs',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 63,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 100,
			user_id : -6742536415835622910,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 75,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 30,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 69,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 54,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 4,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 42,
			document_id : 4209997771344965042,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 30,
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
					user_id : 8506279438854276196,
					access_hash : 7120148304308875793,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 56,
					user_id : 1599819981625911547,
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
					user_id : -7633338930787970698,
					access_hash : -4522325507414258841,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 98,
					user_id : -661109426579213387,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(5535235164667103828),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-2795813855319654461),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
);
```