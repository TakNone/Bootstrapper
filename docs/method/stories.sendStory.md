# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 211

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
				x : -1316851.375,
				y : -325534.90625,
				w : 1864783.3740234375,
				h : -955774.8408203125,
				rotation : -1530006.9072265625,
				radius : -1328956.701171875,
			),
			geo : $client->geoPointEmpty(),
			title : 'IPaJrEc4QMRW32Ge',
			address : '3Eycmib05IATZgQq',
			provider : 'lu8ieoJFTIt6mfKa',
			venue_id : 'r0RILfV1emHkAZO6',
			venue_type : 'rn5MUmxcBz4JgF7a',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1086380.3271484375,
				y : 1459204.5087890625,
				w : -1398245.2529296875,
				h : 229722.1943359375,
				rotation : -48576.0869140625,
				radius : -614489.1767578125,
			),
			query_id : -1983031797517016014,
			result_id : 'GbmX3vUyWoKt9A5Y',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1845067.26953125,
				y : 1409742.0703125,
				w : -1034984.41015625,
				h : -284246.94140625,
				rotation : -985019.2548828125,
				radius : -1239434.998046875,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : '2r9MWFbPJza70Igh',
				state : 'iaNKA2n64wBx9b5X',
				city : '9o7KUe5tfWTPXCb3',
				street : '7SnJFV9bo1d5Zgzp',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1165433.7265625,
				y : -224153.1787109375,
				w : 791645.283203125,
				h : 1118760.6953125,
				rotation : 1550794.1953125,
				radius : -101051.81640625,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1086219.21484375,
				y : -1175362.8427734375,
				w : -1073021.76953125,
				h : -267877.857421875,
				rotation : -637051.869140625,
				radius : -1048341.64453125,
			),
			channel_id : -7463537661155450319,
			msg_id : 86,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 2084935.16015625,
				y : -690788.642578125,
				w : -888293.1083984375,
				h : -1314818.2548828125,
				rotation : 1554630.4091796875,
				radius : 1563259.11328125,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 52,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1241020.1767578125,
				y : -1704225.2109375,
				w : 996167.681640625,
				h : 95666.9638671875,
				rotation : 826685.7509765625,
				radius : 1470677.1552734375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 200562.9208984375,
				y : 903799.02734375,
				w : 569502.814453125,
				h : 762746.98046875,
				rotation : 1551832.9599609375,
				radius : -1933970.6640625,
			),
			emoji : 'Rh5E7QvTkJjy2aIG',
			temperature_c : -1241674.587890625,
			color : 8,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 2077385.38671875,
				y : -1480832.6455078125,
				w : 466103.4072265625,
				h : -1583382.0439453125,
				rotation : -1499221.1630859375,
				radius : 1434267.685546875,
			),
			slug : 'OEtQ5AxPIVsNqmwb',
		),
	),
	caption : 'FUzm93lQxoAupO5q',
	entities : array(
		$client->messageEntityUnknown(
			offset : 39,
			length : 82,
		),
		$client->messageEntityMention(
			offset : 15,
			length : 62,
		),
		$client->messageEntityHashtag(
			offset : 57,
			length : 4,
		),
		$client->messageEntityBotCommand(
			offset : 3,
			length : 94,
		),
		$client->messageEntityUrl(
			offset : 67,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 10,
			length : 13,
		),
		$client->messageEntityBold(
			offset : 96,
			length : 49,
		),
		$client->messageEntityItalic(
			offset : 84,
			length : 99,
		),
		$client->messageEntityCode(
			offset : 52,
			length : 39,
		),
		$client->messageEntityPre(
			offset : 47,
			length : 9,
			language : '0UjRC4FkMGLtxOmr',
		),
		$client->messageEntityTextUrl(
			offset : 8,
			length : 7,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 2,
			length : 14,
			user_id : 5218073819339549673,
		),
		$client->inputMessageEntityMentionName(
			offset : 10,
			length : 54,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 76,
			length : 78,
		),
		$client->messageEntityCashtag(
			offset : 99,
			length : 1,
		),
		$client->messageEntityUnderline(
			offset : 67,
			length : 46,
		),
		$client->messageEntityStrike(
			offset : 77,
			length : 54,
		),
		$client->messageEntityBankCard(
			offset : 50,
			length : 33,
		),
		$client->messageEntitySpoiler(
			offset : 74,
			length : 100,
		),
		$client->messageEntityCustomEmoji(
			offset : 55,
			length : 20,
			document_id : 5090610107887187639,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 51,
			length : 46,
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
					user_id : -8678788531660003223,
					access_hash : 174308410660314930,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 20,
					user_id : -7384396300472728975,
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
					user_id : -5775008602919545300,
					access_hash : -7761017796755022716,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 57,
					user_id : -4526965182845844018,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(998215462458101721),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(2667108021878009641),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 332816782024383571,
	period : 8,
	fwd_from_id : $client->inputPeerEmpty(),
	fwd_from_story : 67,
	albums : array(5),
);
```