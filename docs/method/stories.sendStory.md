# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 214

```tl
stories.sendStory#737fc2ec flags:# pinned:flags.2?true noforwards:flags.4?true fwd_modified:flags.7?true peer:InputPeer media:InputMedia media_areas:flags.5?Vector<MediaArea> caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long period:flags.3?int fwd_from_id:flags.6?InputPeer fwd_from_story:flags.6?int albums:flags.8?Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.2?true`](type/true) | Whether to add the story to the profile automatically upon expiration. If not set, the story will only be added to the archive, see here » for more info |
| **noforwards** | [`flags.4?true`](type/true) | If set, disables forwards, screenshots, and downloads |
| **fwd_modified** | [`flags.7?true`](type/true) | Set this flag when reposting stories with fwd_from_id+fwd_from_id, if the media was modified before reposting |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to send the story as |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The story media |
| **media_areas** | [`flags.5?Vector<MediaArea>`](type/MediaArea) | Media areas associated to the story, see here » for more info |
| **caption** | [`flags.0?string`](type/string) | Story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text, if allowed by the stories_entities client configuration parameter » |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | Privacy rules for the story, indicating who can or can't view the story |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending |
| **period** | [`flags.3?int`](type/int) | Period after which the story is moved to archive (and to the profile if pinned is set), in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise |
| **fwd_from_id** | [`flags.6?InputPeer`](type/InputPeer) | If set, indicates that this story is a repost of story with ID fwd_from_story posted by the peer in fwd_from_id |
| **fwd_from_story** | [`flags.6?int`](type/int) | If set, indicates that this story is a repost of story with ID fwd_from_story posted by the peer in fwd_from_id |
| **albums** | [`flags.8?Vector<int>`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOOSTS_REQUIRED** | `400` | The specified channel must first be boosted by its users in order to perform this action |
| **IMAGE_PROCESS_FAILED** | `400` | Failure while processing image |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_FILE_INVALID** | `400` | The specified media file is invalid |
| **MEDIA_TYPE_INVALID** | `400` | The specified media type cannot be used in stories |
| **MEDIA_VIDEO_STORY_MISSING** | `400` | A non-story video cannot be repubblished as a story (emitted when trying to resend a non-story video as a story using inputDocument) |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `400` | A premium account is required to execute this action |
| **STORIES_TOO_MUCH** | `400` | You have hit the maximum active stories limit as specified by the story_expiring_limit_* client configuration parameters: you should buy a Premium subscription, delete an active story, or wait for the oldest story to expire |
| **STORY_PERIOD_INVALID** | `400` | The specified story period is invalid for this account |
| **VENUE_ID_INVALID** | `400` | The specified venue ID is invalid |

---

## Example

```php
$updates = $client->stories->sendStory(
	pinned : true,
	noforwards : true,
	fwd_modified : true,
	peer : $client->inputPeerEmpty(),
	media : $client->inputMediaEmpty(),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -177080.837890625,
				y : -2066424.6494140625,
				w : -514338.5849609375,
				h : -377468.7666015625,
				rotation : -845278.8388671875,
				radius : -267881.419921875,
			),
			geo : $client->geoPointEmpty(),
			title : 'vPJ5OeCdTgSb9syl',
			address : 'ibDvYHonZSPV9rE7',
			provider : 'q8eUdDJmjbNpKSM7',
			venue_id : 'OomPbz3I0hw5qs1D',
			venue_type : 'D5oNqdbPhwvAEY6J',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -746252.16796875,
				y : 1938997.4443359375,
				w : 728435.876953125,
				h : 1724838.1865234375,
				rotation : -1126744.63671875,
				radius : -1698886.1474609375,
			),
			query_id : -1749255195098321062,
			result_id : 'YpPZNd8b0X7uiEn9',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 734748.6025390625,
				y : 206974.3798828125,
				w : -925128.1240234375,
				h : -747508.77734375,
				rotation : -210492.1923828125,
				radius : 1045906.0029296875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : '45WKlzoN0JZATrPR',
				state : 'YdH5PWkUceKhzRNu',
				city : 'cq7JYBz4fgbQTx2U',
				street : 'doL8z7AFRQgmZjBS',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -435789.7080078125,
				y : 1493606.95703125,
				w : -415412.26953125,
				h : -1443140.0078125,
				rotation : 1765972.6083984375,
				radius : 1268371.8818359375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 535813.1376953125,
				y : 905405.96875,
				w : -193431.2421875,
				h : -1407358.46875,
				rotation : -290006.720703125,
				radius : 1565825.2744140625,
			),
			channel_id : 5531113660088697757,
			msg_id : 23,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 273341.931640625,
				y : -1876279.5361328125,
				w : -1146321.453125,
				h : -1264680.1962890625,
				rotation : 1786078.0498046875,
				radius : 1856515.40625,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 51,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1885622.6767578125,
				y : 1500627.958984375,
				w : -196453.9052734375,
				h : 1253498.4375,
				rotation : 1879065.75390625,
				radius : -30525.8310546875,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -941246.6337890625,
				y : 1569479.736328125,
				w : 1142467.02734375,
				h : 1671927.6474609375,
				rotation : 465247.63671875,
				radius : -650926.6572265625,
			),
			emoji : 'J0aoXxYvP6FjUfb3',
			temperature_c : 588421.548828125,
			color : 100,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -625555.798828125,
				y : -2021740.861328125,
				w : 2005890.4365234375,
				h : -470087.0263671875,
				rotation : 815464.845703125,
				radius : -1261503.98828125,
			),
			slug : 'ZX0ljvdC4HphIytQ',
		),
	),
	caption : 'jRfPYbvpWoKVlSgt',
	entities : array(
		$client->messageEntityUnknown(
			offset : 19,
			length : 39,
		),
		$client->messageEntityMention(
			offset : 72,
			length : 40,
		),
		$client->messageEntityHashtag(
			offset : 5,
			length : 8,
		),
		$client->messageEntityBotCommand(
			offset : 60,
			length : 26,
		),
		$client->messageEntityUrl(
			offset : 86,
			length : 61,
		),
		$client->messageEntityEmail(
			offset : 84,
			length : 9,
		),
		$client->messageEntityBold(
			offset : 54,
			length : 96,
		),
		$client->messageEntityItalic(
			offset : 8,
			length : 62,
		),
		$client->messageEntityCode(
			offset : 11,
			length : 61,
		),
		$client->messageEntityPre(
			offset : 83,
			length : 82,
			language : 'kBAcx0KgIf1QCvZR',
		),
		$client->messageEntityTextUrl(
			offset : 5,
			length : 37,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 88,
			length : 15,
			user_id : 6844264094582432867,
		),
		$client->inputMessageEntityMentionName(
			offset : 54,
			length : 10,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 42,
			length : 62,
		),
		$client->messageEntityCashtag(
			offset : 79,
			length : 87,
		),
		$client->messageEntityUnderline(
			offset : 4,
			length : 44,
		),
		$client->messageEntityStrike(
			offset : 61,
			length : 24,
		),
		$client->messageEntityBankCard(
			offset : 60,
			length : 82,
		),
		$client->messageEntitySpoiler(
			offset : 67,
			length : 69,
		),
		$client->messageEntityCustomEmoji(
			offset : 61,
			length : 74,
			document_id : -4776973803720573009,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 99,
			length : 4,
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
					user_id : -7157601732272205688,
					access_hash : 7553384322217378897,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 2,
					user_id : -7057136825708023370,
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
					user_id : 2020907767386012110,
					access_hash : 6818974792703468441,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 46,
					user_id : -5433972066935154842,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-7986621103266823467),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-1125633995249502713),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 6051347603255848430,
	period : 41,
	fwd_from_id : $client->inputPeerEmpty(),
	fwd_from_story : 49,
	albums : array(96),
);
```