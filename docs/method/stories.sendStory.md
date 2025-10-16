# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 216

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
| **albums** | [`flags.8?Vector<int>`](type/int) | If set, adds the story to the specified albums |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOOSTS_REQUIRED** | `400` | The specified channel must first be boosted by its users in order to perform this action |
| **BOT_ACCESS_FORBIDDEN** | `403` | The specified method can be used over a business connection for some operations, but the specified query attempted an operation that is not allowed over a business connection |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
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
				x : 3856.28125,
				y : 2084435.6162109375,
				w : -1695987.2392578125,
				h : -1049964.916015625,
				rotation : 1296993.490234375,
				radius : 1029114.216796875,
			),
			geo : $client->geoPointEmpty(),
			title : 'zf9l8C2sPAeZnLcu',
			address : 'HnkT6E8aI9sSDbg2',
			provider : 'nK7dmoaWFCsBLq91',
			venue_id : 'kwnVWQl0AvaTBgPs',
			venue_type : 'IYTonls937hVjCSc',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1736112.771484375,
				y : 1702426.98046875,
				w : 989600.490234375,
				h : -1040925.4521484375,
				rotation : 1243670.9775390625,
				radius : 309557.30078125,
			),
			query_id : 3231447674711528226,
			result_id : 'Z6DwnbyvR2HqWIh5',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1710995.8271484375,
				y : 609824.388671875,
				w : -1721789.50390625,
				h : 1033513.2275390625,
				rotation : -605535.4775390625,
				radius : -1637084.5986328125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'coWAdS7XtOgKIzhD',
				state : 'Fs89L4b7hQBgujN5',
				city : 'Q13Jf5ZkoA2PRLc0',
				street : '62xFvdSLPbBW4tKc',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : -1016298.45703125,
				y : 1923384.78125,
				w : 1928830.7109375,
				h : -621104.5244140625,
				rotation : 1916935.80859375,
				radius : -134676.52734375,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1195376.1123046875,
				y : -70096.8125,
				w : 868151.5830078125,
				h : 1348958.9208984375,
				rotation : 1983061.94140625,
				radius : -1148219.4267578125,
			),
			channel_id : -7401268362730801865,
			msg_id : 58,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -489130.09765625,
				y : 604601.482421875,
				w : -547395.400390625,
				h : 1085430.2958984375,
				rotation : -328411.4560546875,
				radius : 462367.9248046875,
			),
			channel : $client->inputChannelEmpty(),
			msg_id : 47,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : -1095068.7822265625,
				y : 1585148.9443359375,
				w : -1095102.392578125,
				h : 1754639.57421875,
				rotation : 1342703.51953125,
				radius : -547710.892578125,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : -1247638.2353515625,
				y : -1387221.52734375,
				w : -766315.375,
				h : 823807.7138671875,
				rotation : -2071625.5869140625,
				radius : 1415842.1943359375,
			),
			emoji : 'YbXD07QxJEzvkt9c',
			temperature_c : -84174.5244140625,
			color : 17,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : 1571811.986328125,
				y : -523400.197265625,
				w : 49113.44921875,
				h : 871898.78515625,
				rotation : 2071533.1552734375,
				radius : 1478436.36328125,
			),
			slug : 'UzwQ3rx9DJVj15vy',
		),
	),
	caption : '7RIdiVSnKHY5C2vq',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 12,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 65,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 24,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 15,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 61,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 84,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 63,
			language : 'o7TaXvGcZjqe042b',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 51,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 68,
			user_id : -4413407708279606879,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 98,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 23,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 90,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 31,
			document_id : -4620447214978464412,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 70,
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
					user_id : 2120552121777356796,
					access_hash : 8926000173478450762,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 71,
					user_id : -6627936256796935897,
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
					user_id : 5053416989012107604,
					access_hash : 7873203230923852292,
				),
				$client->inputUserFromMessage(
					peer : $client->inputPeerEmpty(...),
					msg_id : 47,
					user_id : 2272815238975174819,
				),
			),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-8533251966387997764),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(4924701484060682235),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -1417924057715534782,
	period : 71,
	fwd_from_id : $client->inputPeerEmpty(),
	fwd_from_story : 33,
	albums : array(77),
);
```