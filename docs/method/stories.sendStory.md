# stories.sendStory

**Description** : *Uploads a Telegram Story*

**Layer** : 229

```tl
stories.sendStory#8f9e6898 flags:# pinned:flags.2?true noforwards:flags.4?true fwd_modified:flags.7?true peer:InputPeer media:InputMedia media_areas:flags.5?Vector<MediaArea> caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long period:flags.3?int fwd_from_id:flags.6?InputPeer fwd_from_story:flags.6?int albums:flags.8?Vector<int> music:flags.9?InputDocument = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **pinned** | [`flags.2?true`](type/true) | Whether to add the story to the profile automatically upon expiration. If not set, the story will only be added to the archive, see here » for more info |
| **noforwards** | [`flags.4?true`](type/true) | If set, disables forwards, screenshots, and downloads |
| **fwd_modified** | [`flags.7?true`](type/true) | Set this flag when reposting stories with fwd_from_id+fwd_from_story, if the media was modified before reposting |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer to send the story as |
| <mark>media</mark> | [`InputMedia`](type/InputMedia) | The story media |
| **media_areas** | [`flags.5?Vector<MediaArea>`](type/MediaArea) | Media areas associated to the story, see here » for more info |
| **caption** | [`flags.0?string`](type/string) | Story caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text, if allowed by the stories_entities client configuration parameter » |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | Privacy rules for the story, indicating who can or can't view the story |
| <mark>random_id</mark> | [`long`](type/long) | Unique client message ID required to prevent message resending. See here » for more info on random ID deduplication and updateMessageID mapping |
| **period** | [`flags.3?int`](type/int) | Period after which the story is moved to archive (and to the profile if pinned is set), in seconds; must be one of 6 * 3600, 12 * 3600, 86400, or 2 * 86400 for Telegram Premium users, and 86400 otherwise |
| **fwd_from_id** | [`flags.6?InputPeer`](type/InputPeer) | If set, indicates that this story is a repost of story with ID fwd_from_story posted by the peer in fwd_from_id |
| **fwd_from_story** | [`flags.6?int`](type/int) | If set, indicates that this story is a repost of story with ID fwd_from_story posted by the peer in fwd_from_id |
| **albums** | [`flags.8?Vector<int>`](type/int) | If set, adds the story to the specified albums |
| **music** | [`flags.9?InputDocument`](type/InputDocument) | If set, the audio track to play as background music for the story |

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
| **MEDIA_CAPTION_TOO_LONG** | `400` | The caption is too long |
| **MEDIA_EMPTY** | `400` | The provided media object is invalid |
| **MEDIA_FILE_INVALID** | `400` | The specified media file is invalid |
| **MEDIA_TYPE_INVALID** | `400` | The specified media type cannot be used in stories |
| **MEDIA_VIDEO_STORY_MISSING** | `400` | A non-story video cannot be repubblished as a story (emitted when trying to resend a non-story video as a story using inputDocument) |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **PHOTO_INVALID_DIMENSIONS** | `400` | The photo dimensions are invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `400` | A premium account is required to execute this action |
| **REACTION_INVALID** | `400` | The specified reaction is invalid |
| **STORIES_TOO_MUCH** | `400` | You have hit the maximum active stories limit as specified by the story_expiring_limit_* client configuration parameters: you should buy a Premium subscription, delete an active story, or wait for the oldest story to expire |
| **STORY_PERIOD_INVALID** | `400` | The specified story period is invalid for this account |
| **VENUE_ID_INVALID** | `400` | The specified venue ID is invalid |
| **VIDEO_DURATION_INVALID** | `400` | The duration of the specified video is invalid |

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
				x : -1387200.0068359375,
				y : -1802334.9794921875,
				w : -1736651.072265625,
				h : 416194.6474609375,
				rotation : -368281.3330078125,
				radius : -823980.154296875,
			),
			geo : $client->geoPointEmpty(),
			title : 'Vq8b9HyMKDinuF1w',
			address : '6G1WSqFNcaHoduLV',
			provider : 'rBEcnJz4uh3kZoRt',
			venue_id : 'GcXCBHy9wAlpnzkO',
			venue_type : 'V8odeOPWarUCbnRI',
		),
		$client->inputMediaAreaVenue(
			coordinates : $client->mediaAreaCoordinates(
				x : -1501197.79296875,
				y : -615311.888671875,
				w : -459510.1845703125,
				h : -1692350.0703125,
				rotation : 135596.123046875,
				radius : -1706283.6298828125,
			),
			query_id : -2139155085396276385,
			result_id : 'QbNGd5qC2uVUmkys',
		),
		$client->mediaAreaGeoPoint(
			coordinates : $client->mediaAreaCoordinates(
				x : -1401968.30078125,
				y : -804445.89453125,
				w : -924477.396484375,
				h : 602094.4560546875,
				rotation : 1957474.6572265625,
				radius : 885877.1923828125,
			),
			geo : $client->geoPointEmpty(),
			address : $client->geoPointAddress(
				country_iso2 : 'psCFSYaQ43hIbHJ0',
				state : 'Sdejw3csCFzV8PU2',
				city : 'f8BAsFHMqx9LzGym',
				street : 'Xi5SK7POhVRogAMq',
			),
		),
		$client->mediaAreaSuggestedReaction(
			dark : true,
			flipped : true,
			coordinates : $client->mediaAreaCoordinates(
				x : 735283.568359375,
				y : 998477.173828125,
				w : 372965.173828125,
				h : -284031.380859375,
				rotation : -621569.3603515625,
				radius : -1001185.376953125,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->mediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1005173.4619140625,
				y : 72031.5751953125,
				w : 2045137.076171875,
				h : 1405978.7490234375,
				rotation : 1256454.3447265625,
				radius : -259379.1806640625,
			),
			channel_id : 5367866126593631711,
			msg_id : 83,
		),
		$client->inputMediaAreaChannelPost(
			coordinates : $client->mediaAreaCoordinates(
				x : 1068913.8154296875,
				y : 1973299.8603515625,
				w : -116940.3291015625,
				h : -1266076.4599609375,
				rotation : -183786.7763671875,
				radius : -1861952.89453125,
			),
			channel : $client->get_input_channel(channel : '@LiveProto'),
			msg_id : 61,
		),
		$client->mediaAreaUrl(
			coordinates : $client->mediaAreaCoordinates(
				x : 2087062.119140625,
				y : -1528756.54296875,
				w : -1348842.318359375,
				h : 439337.796875,
				rotation : 1096381.470703125,
				radius : 642398.49609375,
			),
			url : 'https://docs.liveproto.dev',
		),
		$client->mediaAreaWeather(
			coordinates : $client->mediaAreaCoordinates(
				x : 1177281.5009765625,
				y : 1918125.681640625,
				w : 282118.7294921875,
				h : 1590229.677734375,
				rotation : -619821.72265625,
				radius : 517456.5810546875,
			),
			emoji : 'lAxOT6a41Pzk2WL3',
			temperature_c : 1511019.3974609375,
			color : 31,
		),
		$client->mediaAreaStarGift(
			coordinates : $client->mediaAreaCoordinates(
				x : -1913439.98828125,
				y : -1753510.2998046875,
				w : 1791060.2421875,
				h : 1254953.845703125,
				rotation : -1913613.95703125,
				radius : -394129.97265625,
			),
			slug : 'jRUJvthdyDgVi6Lb',
		),
	),
	caption : 'WxGpdLyUhzni2K5l',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 14,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 2,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 36,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 57,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 62,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 5,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 85,
			language : 'qYbimeNko80w54tS',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 92,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 4,
			user_id : -7276482862373550916,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 49,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 81,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 60,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 67,
			document_id : 6955048156713795510,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 82,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 100,
			date : 53,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 100,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 49,
			old_text : 'LUcz3hxKTynY8tk5',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 65,
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
			chats : array(-6367949560553576364),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(-8546317680721841156),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : -7989499826903575514,
	period : 11,
	fwd_from_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	fwd_from_story : 13,
	albums : array(27),
	music : $client->inputDocumentEmpty(),
);
```