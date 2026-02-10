# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 222

```tl
stories.sendStory#737fc2ec flags:# pinned:flags.2?true noforwards:flags.4?true fwd_modified:flags.7?true peer:InputPeer media:InputMedia media_areas:flags.5?Vector<MediaArea> caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long period:flags.3?int fwd_from_id:flags.6?InputPeer fwd_from_story:flags.6?int albums:flags.8?Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	media_areas : array(
		$client->mediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -235900.732421875,
				y : 983929.1826171875,
				w : -1680043.1572265625,
				h : 1573563.6865234375,
				rotation : 110021.71484375,
				radius : -1248610.87109375,
			),
			geo : $client->geoPointEmpty(),
			title : 'BIbjkN94GzDHFTtM',
			address : 'pIxB5ycugG4v96Vq',
			provider : 'hoT1EiKPSpxzG2be',
			venue_id : 'ixBlAw0bIKrOzFGu',
			venue_type : 'HUaFju3xwPB9cIWl',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : 252232.51953125,
				y : -293560.208984375,
				w : 894010.5458984375,
				h : 315002.232421875,
				rotation : 1686146.65234375,
				radius : 205882.0556640625,
			),
			query_id : -9065277942143015433,
			result_id : 'rCX0SnuoeDqV7vpa',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : 2003704.021484375,
				y : -1367363.0810546875,
				w : 363490.3984375,
				h : -985084.5673828125,
				rotation : -54259.244140625,
				radius : 1302544.0849609375,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'kWZ4dJ8yB5KAnSNc',
				state : 'FZH2jwKq7Xo6ikAp',
				city : 'phQnDvw5X8WtN46U',
				street : '9CIcwzfDQy7FUWLg',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 1175913.484375,
				y : 142330.9228515625,
				w : 288486.4560546875,
				h : 1809218.263671875,
				rotation : -1835830.376953125,
				radius : -1876902.6123046875,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : -1677339.90625,
				y : -1687179.8447265625,
				w : -284505.0361328125,
				h : 833540.1005859375,
				rotation : 1090332.8740234375,
				radius : 1424361.1640625,
			),
			channel_id : 7831189457724625268,
			msg_id : 29,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 5877.4931640625,
				y : 984346.7919921875,
				w : 1497579.2724609375,
				h : -944103.7783203125,
				rotation : 2041385.2060546875,
				radius : 217175.1943359375,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 67,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 2082392.857421875,
				y : 1122601.3818359375,
				w : 305314.7109375,
				h : -527758.201171875,
				rotation : 1985832.6748046875,
				radius : 52920.65234375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 2005237.8564453125,
				y : 1139469.1591796875,
				w : 16385.478515625,
				h : 1265441.8544921875,
				rotation : 1928355.46484375,
				radius : 1579535.9501953125,
			),
			emoji : 'HjqMmO0RF4Gu1Xfx',
			temperature_c : -1780181.5234375,
			color : 1,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1022533.310546875,
				y : -111283.19140625,
				w : -2065060.455078125,
				h : -1976237.943359375,
				rotation : 1493111.6728515625,
				radius : 968264.787109375,
			),
			slug : 'qtd6pJ0WkzNnTZXF',
		),
	),
	caption : 'mY8FkVCcrqiRuEls',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 51,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 36,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 67,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 3,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 24,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 53,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 49,
			language : 'bL0m1k4TlpqzxdXK',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 84,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 30,
			user_id : 8758697446541326917,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 85,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 43,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 32,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 25,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 80,
			document_id : 4353911421711758520,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 75,
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
			chats : array(-162362762617971412),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(8179956853548693233),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -1288696717198917270,
	period : 41,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 23,
	albums : array(56),
);
```